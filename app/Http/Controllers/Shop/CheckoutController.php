<?php

namespace App\Http\Controllers\Shop;

use App\Api\ExlineApi;
use App\Http\Controllers\Controller;
use App\Locale;
use App\Models\Country;
use App\Models\Product;
use Session;
use TCG\Voyager\Facades\Voyager;

class CheckoutController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function checkout()
    {
        $locale = Locale::lang();
        $sessionItems = Session::get('cart');
        if ($sessionItems) {
            $countries = Country::where('code', '!=', null)->get();
            $products = [];
            foreach ($sessionItems as $item) {
                $product = Product::where('id', '=', $item['product_id'])->with('country')->first();
                $results = [
                    'id' => $product->id,
                    'title' => $product->getTranslatedAttribute('title', $locale, 'fallbackLocale'),
                    'price' => $product->price,
                    'qty' => $item['qty']
                ];
                array_push($products, $results);
            }
            $totalSum = 0;
            foreach ($products as $product) {
                $totalSum += $product['price'] * $product['qty'];
            }
            return view('checkout.index', [
                'products' => $products,
                'totalSum' => $totalSum,
                'countries' => $countries,
            ]);
        } else {
            return redirect()->back();
        }
    }

}
