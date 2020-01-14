<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCheckoutForm;
use App\Mail\PaymentMail;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Session;

class PaymentController extends Controller
{
    /**
     * @param StoreCheckoutForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
        $full_name = $last_name . ' ' . $first_name;

        $paymentSave = new Payment();
        $paymentSave->full_name = $full_name;
        $paymentSave->user_phone = $phone;
        $paymentSave->email = $email;
        $shipping_type = $request['shipping_type'];
        $paymentSave->shipping_type = trans('checkout.' . $shipping_type, [], 'ru');
        $paymentSave->total = $total_price;
        $sessionItems = Session::get('cart');
        $products = '';
        foreach ($sessionItems as $item) {
            $product = Product::where('id', '=', $item['product_id'])->with('country')->first();
            $products .= $product->title . ' x ' . $item['qty'] . ' штук. ';
        }
        $address = [];
        if ($shipping_type == 'exline') {
            $city_name = '(' . $request['country'] . ') ' . $request['city_name'];
            $street = $request['street'];
            $tariff_price = $request['tariff'];
            $tariff_name = $request['tariff_name'];
            $address = [
                'city' => $city_name,
                'street' => $street,
                'tariff' => $tariff_name . ' - ' . $tariff_price . ' тг',
            ];
            $paymentSave->city = $city_name;
            $paymentSave->street = $street;
            $paymentSave->tariff = $tariff_name . ' - ' . $tariff_price . ' тг';
        }
        $paymentSave->products = $products;
        $payment_type = $request['payment_type'];
        if ($payment_type === 'online') {
            $paymentSave->status = 'В ожиданий';
            $order_id = Payment::orderBy('id', 'DESC')->first();
            $order_id = (!isset($orderId->payment_id)) ? $order_id->id + 1 : 1;
            $salt = uniqid(mt_rand(), true);
            $request = [
                'pg_merchant_id' => env('PAYBOX_MERCHANT_ID'),
                'pg_amount' => $total_price,
                'pg_salt' => $salt,
                'pg_testing_mode' => env('PAYBOX_TEST_MODE'),
                'pg_order_id' => $order_id,
                'pg_user_phone' => $phone,
                'pg_description' => 'Покупка с магазина',
                'pg_success_url' => route('payment-success', ['id' => $order_id]),
                'pg_failure_url' => route('payment-error', ['id' => $order_id])
            ];
            ksort($request);
            array_unshift($request, 'payment.php');
            array_push($request, env('PAYBOX_SECRET_KEY'));
            $request['pg_sig'] = md5(implode(';', $request));
            unset($request[0], $request[1]);
            $query = http_build_query($request);
            $link = 'https://api.paybox.money/payment.php?' . $query;
            $paymentSave->request = $query;
            $paymentSave->payment_type = trans('checkout.payment.' . $payment_type, [], 'ru');
            $paymentSave->save();
            return redirect()->to($link);

        } elseif ($payment_type === 'offline') {
            $paymentSave->status = 'В ожиданий';
            $paymentSave->payment_type = trans('checkout.payment.' . $payment_type, [], 'ru');
            $paymentSave->save();
            Session::forget('cart');
            $this->sendMail($full_name, $email, $phone, $total_price, $products, trans('checkout.' . $shipping_type, [], 'ru'), trans('checkout.payment.' . $payment_type, [], 'ru'), $address);
            return redirect()->route('cart')->with('success', trans('checkout.success-offline'));
        }
        return back()->with('error', trans('checkout.error'));
    }

    /**
     * @param $id
     */
    public function success($id)
    {
        $updateStatus = Payment::where('id', '=', $id)->update(['status' => 'Пользователь оплатил']);
        $paymentInfo = Payment::where('id', '=', $id)->first();
        $address = [];
        if ($paymentInfo->shipping_type == trans('checkout.exline')) {
            $address = [
                'city' => $paymentInfo->city,
                'street' => $paymentInfo->street,
                'tariff' => $paymentInfo->tariff
            ];
        }
        Session::forget('cart');
        $this->sendMail($paymentInfo->full_name, $paymentInfo->email, $paymentInfo->user_phone, $paymentInfo->total, $paymentInfo->products, $paymentInfo->shipping_type, $paymentInfo->payment_type, $address);
        return redirect()->route('cart')->with('success', trans('checkout.success-offline'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function error($id)
    {
        $updateStatus = Payment::where('id', '=', $id)->update(['status' => 'Отмена платежа']);
        return redirect()->route('cart')->with('success', trans('checkout.error'));
    }


    /**
     * @param $user_full_name
     * @param $user_email
     * @param $user_phone
     * @param $price
     * @param $products
     * @param $shipping_type
     * @param $payment_type
     * @param null $address
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendMail($user_full_name, $user_email, $user_phone, $price, $products, $shipping_type, $payment_type, $address = null)
    {
        $requestForm = new \stdClass();
        $requestForm->full_name = $user_full_name;
        $requestForm->email = $user_email;
        $requestForm->phone = $user_phone;
        $requestForm->price = $price;
        $requestForm->products = $products;
        $requestForm->shipping_type = $shipping_type;
        $requestForm->payment_type = $payment_type;
        if (count($address) > 0) {
            $requestForm->city = $address['city'];
            $requestForm->street = $address['street'];
            $requestForm->tariff = $address['tariff'];
        }
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new PaymentMail($requestForm));
        return redirect()->back()->with('success', trans('request.send-success'));
    }
}
