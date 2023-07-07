<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    //


    public function home()
    {
        return view ('musicians.home');
    }
    public function form()
    {
        return view ('musicians.form');
    }
    public function blank()
    {
        return view ('musicians.blank');
    }


    public function tables()
    {
        return view ('musicians.table');
    }
    
    
    public function available_music()
    {
        $data = DB::table('tbl_uploaded_music_submission')->where('status', 'approved')->get();
        $data = DB::table('tbl_uploaded_music_submission')->get();

        //$data = DB::table('tbl_uploaded_music_submission')->select('id', 'title')->get();
       // return $data;


        return view ('musicians.availablemusictable',compact('data'));
    }

    public function my_available_music()
    {
        return view ('musicians.myuploadstable');
    }

    public function upload_music()
    {
        return view ('musicians.uploadmusicform');
    }

    public function requests_submition()
    {
        return view ('musicians.requestform');
    }

    public function upload_attempt()
    {
        return view ('musicians.uploadattemptform');
    }

    public function user_profile()
    {
        return view ('musicians.userprofile');
    }

    public function musicpage()
    {
        return view ('musicians.viewmusicpage');
    }
    
}
