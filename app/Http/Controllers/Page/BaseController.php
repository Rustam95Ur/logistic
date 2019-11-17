<?php


namespace App\Http\Controllers\Page;


use App\Http\Controllers\Controller;

class BaseController extends Controller
{

    public function about()
    {
        return view('page.about');
    }
}
