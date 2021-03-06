<?php

namespace App\Http\Controllers\Shop;

use App\Api\ExlineApi;
use App\Http\Controllers\Controller;
use App\Locale;
use App\Models\Country;
use App\Models\Product;
use Session;

class CheckoutController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function checkout()
    {
        $locale = Locale::lang();
        $sessionItems = Session::get('cart');
        $getOrigin =  ExlineApi::getOrigin();
        if ($getOrigin->IsSuccessful()) {
            $originId = $getOrigin->GetPayload();
        }
        if ($sessionItems) {
            $countries = Country::where('code', '!=', null)->get();

            $products = [];
            foreach ($sessionItems as $item) {
                $product = Product::where('id', '=', $item['product_id'])->with('country')->first();
                $results = [
                    'id' => $product->id,
                    'title' => $product->getTranslatedAttribute('title', $locale, 'fallbackLocale'),
                    'price' => $product->price,
                    'qty' => $item['qty'],
                    'weight' => $product->weight,
                ];
                array_push($products, $results);
            }
            $totalSum = 0;
            foreach ($products as $product) {
                $totalSum += $product['price'] * $product['qty'];
            }
            $totalWeight= 0;
            foreach ($products as $product) {
                $totalWeight += $product['weight']* $product['qty'];
            }
            return view('checkout.index', [
                'products' => $products,
                'totalSum' => $totalSum,
                'countries' => $countries,
                'totalWeight' => $totalWeight,
                'originId' => $originId['regions'][0]['id'],
            ]);
        } else {
            return redirect()->back();
        }
    }

}
