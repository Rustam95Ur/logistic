<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class BaseController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('count', '>', '0')->where('status', '=', 'ACTIVE')->with('categories')->paginate(10);
        $categories = Category::all();
        return view('shop.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function categoryShow($id)
    {
        $category = Category::where('id', '=', $id)->firstOrFail();
        $categories = Category::all();
        $products =  Product::where('count', '>', '0')->where('status', '=', 'ACTIVE')->with('categories')->paginate(10);
        return view('shop.category', [
            'products' => $products,
            'category' => $category,
            'categories' => $categories,
        ]);
    }


}
