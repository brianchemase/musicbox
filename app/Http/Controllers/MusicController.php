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

    public function UploadMusic()
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

    public function storeMusicSubmission1(Request $request)
    {

         // Validate the form data
            $validatedData = $request->validate([
                'title' => 'required|string|max:50',
                'composer' => 'required|string|max:50',
                'arranger' => 'required|string|max:50',
                'type' => 'required|string|max:11',
                'No' => 'required|string|max:50',
                'year' => 'required|string|max:50',
                'status' => 'required|string|max:8',
                'uploader' => 'required|string|max:50',
                'pdf_file' => 'required|file|mimes:pdf|max:2048', // Max file size is 2MB (2048 KB)
                'upload_date' => 'required|date',
                'update_date' => 'required|date',
            ]);

            // Handle file upload
            if ($request->hasFile('pdf_file')) {
                $file = $request->file('pdf_file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('pdfs', $fileName); // Store in the 'pdfs' directory
            } else {
                // Handle the case where no file was uploaded
                $filePath = null;
            }

            // Use the DB facade to insert data into the database
            DB::table('tbl_uploaded_music_submission')->insert([
                'title' => $validatedData['title'],
                'composer' => $validatedData['composer'],
                'arranger' => $validatedData['arranger'],
                'type' => $validatedData['type'],
                'No' => $validatedData['No'],
                'year' => $validatedData['year'],
                'status' => $validatedData['status'],
                'uploader' => $validatedData['uploader'],
                'path' => $filePath, // Save the file path in the 'path' column
                'upload_date' => $validatedData['upload_date'],
                'update_date' => $validatedData['update_date'],
                'created_at' => now(), // Set the created_at timestamp
                'updated_at' => now(), // Set the updated_at timestamp
            ]);

            // Redirect or return a response
            return back()->with('success',' Submission successfully registered');

    }

    public function storeMusicSubmission(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:150',
            'composer' => 'required|string|max:150',
            'arranger' => 'required|string|max:150',
            'type' => 'required|string|max:111',
            'No' => 'required|string|max:50',
            'year' => 'required|string|max:50',
            //'status' => 'required|string|max:8',
            'uploader' => 'required|string|max:150',
            'pdf_file' => 'required|file|mimes:pdf|max:2048', // Max file size is 2MB (2048 KB)
            //'upload_date' => 'required|date',
            //'update_date' => 'required|date',
        ]);

        // Split the validated data into variables
        $title = $validatedData['title'];
        $composer = $validatedData['composer'];
        $arranger = $validatedData['arranger'];
        $type = $validatedData['type'];
        $No = $validatedData['No'];
        $year = $validatedData['year'];
        $status = "onreview";
        $uploader = $validatedData['uploader'];
        $upload_date = now();
        $update_date = now();

        // Handle file upload
        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $uniqueFileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('pdfs', $uniqueFileName); // Store with a unique file name in the 'pdfs' directory
        } else {
            // Handle the case where no file was uploaded
            $filePath = null;
        }

        // Use the DB facade to insert data into the database
        $inserted = DB::table('tbl_uploaded_music_submission')->insert([
            'title' => $title,
            'composer' => $composer,
            'arranger' => $arranger,
            'type' => $type,
            'No' => $No,
            'year' => $year,
            'status' => $status,
            'uploader' => $uploader,
            'path' => $uniqueFileName, // Save the unique file name in the 'path' column
            'upload_date' => $upload_date,
            'update_date' => $update_date,
            //'created_at' => now(), // Set the created_at timestamp
            //'updated_at' => now(), // Set the updated_at timestamp
        ]);

        // Check if data was successfully inserted and return a response
        if ($inserted) {
            return back()->with('success', 'Submission successfully registered');
        } else {
            return back()->with('error', 'Failed to register submission. Please try again.');
        }
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
