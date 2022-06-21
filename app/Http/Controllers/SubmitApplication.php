<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ApplicationSubmit;
use App\Mail\ThankYou;
use \Str;

class SubmitApplication extends Controller
{
    public function submitFM(Request $request)
    {
        $number=uniqid();
        Mail::to(config('contact.send_email_to'))->send(new ApplicationSubmit($request, "test123"));
        Mail::to($request->email)->send(new ThankYou($request, $number));
        return view('page_second',compact('number'));
    }
}
