<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function contact(){
        return view("contact");
    }

    public function resume(){
        return view("resume");
    }

    public function index(){
        return view("index");
    }

    public function about(){
        return view("index");
    }

    public function project(){
        return view("project");
    }

    public function blog(){
        return view("blog");
    }


    // public function storeEmail(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'subject' => 'required',
    //         'message' => 'required'
    //     ]);
    //       $data = [
    //           'subject' => $request->subject,
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'message' => $request->message
    //       ];
    //         Mail::send('email', $data, function($message) use ($data){
    //             $message->to($data['email']);
    //             $message->subject($data['subject']);

    //         });

    //         return back()->with(['message' =>  'Email successfully sent']);


    // }
}






