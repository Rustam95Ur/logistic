<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

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

}
