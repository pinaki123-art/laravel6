<?php

namespace App\Http\Controllers;
//use App\Mail\ContactMe;

//use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


use App\Mail\Contact;
class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new Contact());
     
       // Mail::to(request('email'))
         //   ->send(new ContactMail('shirts'));

        return redirect('/contact')
                ->with('message', 'Email sent!');
//   Mail::raw('It works', function ($message) {

      //      $message->to(request('email'))
        //            ->subject('Hello There');

       // });
        // send an email
        //$email = request('email');
        //dd($email);
    }
}
