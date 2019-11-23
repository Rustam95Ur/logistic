<?php


namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $services = Service::all();
        $clients = Client::all();
        $comments = Comment::all();
        return view('service.index', [
            'services' => $services,
            'clients' => $clients,
            'comments' => $comments,
        ]);
    }

    public function show($id)
    {
        $service = Service::where('id', '=', $id)->firstOrFail();
        $services = Service::all();
        return view('service.show', [
            'service' => $service,
            'services' => $services
        ]);

    }

}
