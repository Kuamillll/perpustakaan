<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AppController extends Controller
{
    //
    public function home(){
        return view("home");
    }
    public function data(){
        return view("data");
    }
    public function login(){
        return view("Auth.login");
    }
}
