<?php


namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Question;

class BaseController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $clients = Client::all();
        $questions = Question::all();
        return view('page.about', [
            'clients' => $clients,
            'questions' => $questions,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('page.contact');
    }
}
