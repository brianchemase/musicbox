<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view ('logs.login');
    }
    public function register()
    {
        $countries = Country::all();
        //return $countries;
        return view ('logs.register',compact('countries'));
    }
    public function fogotpass()
    {
        return view ('logs.pass');
    }

}
