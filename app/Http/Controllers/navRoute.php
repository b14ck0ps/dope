<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navRoute extends Controller
{
    function home()
    {
        return view('home');
    }
    function contact()
    {
        return view('contact');
    }
    function about()
    {
        return view('about');
    }
}
