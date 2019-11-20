<?php


namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail;


class BaseController extends Controller
{

    /**
     * @param StoreRequestForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function requestForm(StoreRequestForm $request)
    {
        $requestCard = new \stdClass();
        $requestCard->name = $request['name'];
        $requestCard->phone = $request['phone'];
        $requestCard->email = $request['email'];
        $requestCard->message = $request['message'];
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new RequestMail($requestCard));

        return redirect()->back()->with('success', trans('request.send-success'));
    }
}
