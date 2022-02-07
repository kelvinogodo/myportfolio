<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}






