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
//        $galleries = Gallery::limit(10)->orderBy('created_at', 'DESC')->get();
//        $comments = Comment::all();
        return view('shop.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }


}
