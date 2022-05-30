<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function contact(){
        $now = new Carbon();
        return view("guest.contact", compact("now"));
    }

    public function contactMailSender(Request $request){

        Mail::to("mailadmin@gmail.com")->send(new SendNewMail($request->userName, $request->userMail, $request->userMessage));
        return redirect()->route("guest.thanks")->with("message", "Grazie $request->userName! Il messaggio è stato mandato con successo!");
    }

    public function thanks(){
        return view("guest.thanks");
    }
}
