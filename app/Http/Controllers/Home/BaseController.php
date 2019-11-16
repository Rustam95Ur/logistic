<?php


namespace App\Http\Controllers\Home;


class BaseController
{
    public function index()
    {
        return view('home.index');
    }
}
