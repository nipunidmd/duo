<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use Mail;

class ContactUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('contact-us');
    }

    public function send(ContactUsRequest $request)
    {
        $data = $request->all();

        Mail::send('email.contact-form', ["data"=>$data], function ($message) use ($data) {
            $message->to('nipunidinushika95@gmail.com')->subject("Duo Design | New Inquery | ".$data['name']);
        });

        return response()->json(['msg' => 'Mail Send Successfully!'], 200);
    }
}
