<?php


namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', [
            'services' => $services
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
