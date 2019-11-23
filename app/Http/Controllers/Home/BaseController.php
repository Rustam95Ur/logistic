<?php


namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Gallery;

class BaseController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $galleries = Gallery::limit(10)->orderBy('created_at', 'DESC')->get();
        $comments = Comment::all();
        return view('home.index', [
            'comments'  => $comments,
            'clients'  => $clients,
            'galleries'  => $galleries
        ]);
    }


}
