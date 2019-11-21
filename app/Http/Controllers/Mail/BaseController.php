<?php


namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMailForm;
use App\Http\Requests\StoreRequestForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail;
use App\Mail\ContactMail;


class BaseController extends Controller
{

    /**
     * @param StoreRequestForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function requestForm(StoreRequestForm $request)
    {
        $requestForm = new \stdClass();
        $requestForm->name = $request['name'];
        $requestForm->phone = $request['phone'];
        $requestForm->email = $request['email'];
        $requestForm->message = $request['message'];
        $requestForm->freight_type = $request['freight_type'];
        $requestForm->transport_type = $request['transport_type'];
        $requestForm->city_departure = $request['city_departure'];
        $requestForm->delivery_city = $request['delivery_city'];
        $requestForm->gross_weight = $request['gross_weight'];
        $requestForm->dimension = $request['dimension'];

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new RequestMail($requestForm));

        return redirect()->back()->with('success', trans('request.send-success'));
    }

    public function mailForm(StoreMailForm $request)
    {
        $mailForm = new \stdClass();
        $mailForm->name = $request['name'];
        $mailForm->phone = $request['phone'];
        $mailForm->email = $request['email'];
        $mailForm->message = $request['message'];
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($mailForm));

        return redirect()->back()->with('success', trans('request.send-success'));
    }
}
