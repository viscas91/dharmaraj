<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailMarkdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function mailToAdmin(Request $request){
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        Mail::to('vis.cas.91@gmail.com')->send(
            new ContactMailMarkdown($name, $email, $subject, $message)
        );
    }
}
