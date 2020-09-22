<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {

//        dd('string');
//        return 'sdvjnsdv';
    return view('home');
    }
}
