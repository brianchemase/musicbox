<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    //


    public function home()
    {
        return view ('musicians.home');
    }

    public function tables()
    {
        return view ('musicians.table');
    }
}
