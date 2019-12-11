<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Locale;
use App\Models\Category;
use App\Models\Product;
use TCG\Voyager\Facades\Voyager;

class ProductController extends Controller
{
    /**
     * @param $id
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
     * @param $name
     * @return \Illuminate\Http\JsonResponse
     */
    protected function search(string $name)
    {
        $searchProducts = Product::where('title', 'like', '%'. $name . '%')->get();
        $count = 0;
        $products = [];
        $locale = Locale::lang();
        if(count($searchProducts) == 0) {
            return \Response::json(['count' => $count, 'product' => $products ], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }else {
            $count = count($searchProducts);
            foreach ($searchProducts as $product) {
                $newArray = [
                    'product_id' => $product->id,
                    'product_title' => $product->getTranslatedAttribute('title', $locale, 'fallbackLocale'),
                    'product_image' => Voyager::image($product->image),
                    'product_price' => $product->price
                ];
                array_push($products, $newArray );
            }
            return \Response::json(['count' => $count, 'product' => $products ], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
    }

}
