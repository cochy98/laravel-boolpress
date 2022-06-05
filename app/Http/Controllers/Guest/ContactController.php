<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\SendNewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('guest.contact');
    }

    public function sendEmail(Request $request)
    {
        Mail::to("boolpressadministrator@gmail.com")->send(new SendNewMail($request->guestName, $request->guestEmail, $request->guestMessage));
        return redirect()->route('guest.thanks');
    }

    public function thanks()
    {
        return view('guest.thanks');
    }
}
