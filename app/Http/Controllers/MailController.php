<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\userMail;
class MailController extends Controller
{
    public function index(){
        $mailData = [
        "title" => "Mail form webtribune",
        "body" => "A new conference is coming up"
        ];
            Mail::to('sakir50210@gmail.com')->send(new userMail($mailData));
            dd("Successfull");
    }
}
