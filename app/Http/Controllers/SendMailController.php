<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        Mail::to($request->input('email'))->send(new SendMail());
        return "<h1>تم الارسال بنجاح</h1>";
    }
}
