<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCheckoutForm;
use App\Models\Payment;
use App\Models\Product;
use Session;

class PaymentController extends Controller
{

    public function index(StoreCheckoutForm $request)
    {
        $total_price = $request['total_price'];
        if ($total_price < 100) {
            return back()->with('error');
        }
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $phone = $request['phone'];
        $email = $request['email'];

        $paymentSave = new Payment();
        $paymentSave->full_name = $last_name . ' ' . $first_name;
        $paymentSave->user_phone = $phone;
        $paymentSave->email = $email;
        $shipping_type = $request['shipping_type'];
        $paymentSave->shipping_type = $shipping_type;
        $paymentSave->total = $total_price;
        $sessionItems = Session::get('cart');
        $products = '';
        foreach ($sessionItems as $item) {
            $product = Product::where('id', '=', $item['product_id'])->with('country')->first();
            $products .= $product->title . ' x ' . $item['qty'] . ' штук. ';
        }
        if ($shipping_type == 'exline') {
            $city_name = $request['city_name'];
            $street = $request['street'];
            $tariff_price = $request['tariff'];
            $tariff_name = $request['tariff_name'];
            $paymentSave->city = $city_name;
            $paymentSave->street = $street;
            $paymentSave->tariff = $tariff_name . ' - ' . $tariff_price . ' тг';
        }
        $paymentSave->products = $products;
        $payment_type = $request['payment_type'];
        if ($payment_type === 'online') {
            $paymentSave->status = 'В ожиданий';
            $order_id = Payment::orderBy('id', 'DESC')->first();
            if (isset($orderId->payment_id)) {
                $order_id = $order_id->id + 1;
            } else {
                $order_id = '1';
            }
            $salt = uniqid(mt_rand(), true);
            $request = [
                'pg_merchant_id' => env('PAYBOX_MERCHANT_ID'),
                'pg_amount' => $total_price,
                'pg_salt' => $salt,
                'pg_testing_mode' => env('PAYBOX_TEST_MODE'),
                'pg_order_id' => $order_id,
                'pg_description' => 'Покупка с магазина',
                'pg_result_url' => 'https://example.com'
            ];
            ksort($request);
            array_unshift($request, 'payment.php');
            array_push($request, env('PAYBOX_SECRET_KEY'));
            $request['pg_sig'] = md5(implode(';', $request));
            unset($request[0], $request[1]);
            $query = http_build_query($request);
            $link = 'https://api.paybox.money/payment.php?' . $query;
            $paymentSave->request = $query;
            $paymentSave->payment_type = 'online';
            $paymentSave->save();
            return redirect()->to($link);

        } elseif ($payment_type === 'offline') {
            $paymentSave->status = 'В ожиданий';
            $paymentSave->payment_type = 'offline';
            $paymentSave->save();
            Session::forget('cart');
            return redirect()->route('cart')->with('success', 'Спасибо за покупку. С вами свяжется менеджер');
        }
    }

}
