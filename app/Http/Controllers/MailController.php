<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    //
    public function sendMail(Request $request):void{
        
        Mail::to($request->email)->send(new TestMail($request));

    }
}
