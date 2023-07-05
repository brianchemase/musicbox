<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view ('logs.login');
    }
    public function register()
    {
        return view ('logs.register');
    }
    public function fogotpass()
    {
        return view ('logs.pass');
    }

}
