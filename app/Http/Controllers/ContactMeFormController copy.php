<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use Illuminate\Support\Facades\Mail;

class ContactMeFormController extends Controller
{
    public function createForm()
    {
        return view("contact");
    }

    // public function contactMeForm(Request $request){
    //      $data =  $this->validate($request,[
    //             "name" => "required|string",
    //             "email" => "required|string",
    //             "subject" => "nullable|string",
    //             "message" => "required|string",
    //         ]);

    //     //  Store data in database
    //     Contact::create($data);
    //     //  Send mail to admin
    //         Mail::send('mail', array(
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'subject' => $request->get('subject'),
    //         'message' => $request->get('message'),
    //     ), function($message) use ($request){
    //         $message->from($request->email);
    //         $message->to('emmanuelgodwin558@gmail.com', 'Admin')->subject($request->get('subject'));
    //     });
    //     return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    // }


}
