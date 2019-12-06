<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Locale;
use App\Models\Category;
use App\Models\Product;
use Session;
use TCG\Voyager\Facades\Voyager;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->with('categories')->with('country')->first();
        $categories = Category::all();
        return view('product.show', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cart()
    {
        $locale = Locale::lang();
        $sessionItems = Session::get('cart');
        $products = [];
        if ($sessionItems) {
            foreach ($sessionItems as $item) {
                $product = Product::where('id', '=', $item['product_id'])->with('country')->first();
                $results = [
                    'id' => $product->id,
                    'title' => $product->getTranslatedAttribute('title', $locale, 'fallbackLocale'),
                    'model' => $product->model,
                    'country' => $product->country->title,
                    'price' => $product->price,
                    'image' => Voyager::image($product->image),
                    'qty' => $item['qty']
                ];
                array_push($products, $results);
            }
        }
        $subtotal = 0;
        foreach ($products as $product) {
            $subtotal += $product['price'] * $product['qty'];
        }
        return view('product.cart', [
            'products' => $products,
            'subtotal' => $subtotal
        ]);
    }

    /**
     * @param int $product_id
     * @param int $qty
     * @return \Illuminate\Http\JsonResponse
     */
    protected function addCart(int $product_id, int $qty)
    {
        $checkProduct = Product::where('id', '=', $product_id)->firstOrFail();
        $countItem = $checkProduct->count;
        if ($qty > $countItem) {
            return \Response::json(['error' => trans('shop.error.many-item')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        $item = ['product_id' => $product_id, 'qty' => $qty];
        $sessionItems = Session::get('cart');
        $results = [];
        if ($sessionItems and count($sessionItems) > 0) {
            $status = array_search($product_id, array_column($sessionItems, 'product_id'));
            if ($status === false) {
                array_push($sessionItems, $item);
                Session::forget('cart');
                foreach ($sessionItems as $result) {
                    Session::push('cart', $result);
                }
            } else {
                for ($i = 0; $i < count($sessionItems); $i++) {
                    $sum = ($sessionItems[$i]['product_id'] == $product_id) ? $sessionItems[$i]['qty'] + $qty : $sessionItems[$i]['qty'];
                    if ($sum > $countItem) {
                        return \Response::json(['error' => trans('shop.error.many-item')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    }
                    $newArray = [
                        'product_id' => $sessionItems[$i]['product_id'],
                        'qty' => $sum,
                    ];
                    $results[$i] = $newArray;
                }
                Session::forget('cart');
                foreach ($results as $result) {
                    Session::push('cart', $result);
                }
            }
        } else {
            Session::push('cart', $item);
        }
        return \Response::json(['success' => trans('shop.success.add-cart')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param int $product_id
     * @param int $qty
     * @return \Illuminate\Http\JsonResponse
     */
    protected function removeItemCart(int $product_id, int $qty = 0)
    {
        $checkProduct = Product::where('id', '=', $product_id)->firstOrFail();
        $countItem = $checkProduct->count;
        if ($qty > $countItem) {
            return \Response::json(['error' => trans('shop.error.many-item')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        $sessionItems = Session::get('cart');
        if ($sessionItems) {
            $itemIndex = array_search($product_id, array_column($sessionItems, 'product_id'));
            if ($itemIndex !== false) {
                Session::forget('cart');
                if ($qty == 0) {
                    unset($sessionItems[$itemIndex]);
                } else {
                    $results = [];
                    for ($i = 0; $i < count($sessionItems); $i++) {
                        $newQty = ($sessionItems[$i]['product_id'] == $product_id) ? $qty : $sessionItems[$i]['qty'];
                        $newArray = [
                            'product_id' => $sessionItems[$i]['product_id'],
                            'qty' => $newQty
                        ];
                        $results[$i] = $newArray;
                    }
                    foreach ($results as $result) {
                        Session::push('cart', $result);
                    }
                    return \Response::json(['success' => trans('shop.success.remove-cart')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                if ($sessionItems) {
                    foreach ($sessionItems as $item) {
                        Session::push('cart', $item);
                    }
                }
            }
            return \Response::json(['success' => trans('shop.success.remove-cart')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        } else {
            return \Response::json(['success' => trans('shop.success.no-cart')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
    }
}
