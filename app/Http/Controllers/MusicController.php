<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class MusicController extends Controller
{
    //


    public function home()
    {

        $registeredMusic = DB::table('tbl_uploaded_music_submission')->count();
        $registedMembers = DB::table('users')->count();
        $myid=Auth::user()->id;
        //return $myid;

        $MyContributions = DB::table('tbl_uploaded_music_submission')
                    ->where('uploader', '=', $myid) // Replace 'column_name' and 'value' with your actual conditions
                    ->count();


        $data= [
            'registeredMusic' => $registeredMusic,
            'registedMembers' => $registedMembers,
            'MyContributions' => $MyContributions,
            'PendingRequests' => '144',
        ];

        return view ('musicians.home')->with($data);
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
        $data = DB::table('tbl_uploaded_music_submission')
        ->join('users', 'tbl_uploaded_music_submission.uploader', '=', 'users.id')
        ->select('tbl_uploaded_music_submission.*', 'users.name as uploader_name')
        ->get();


        //$data = DB::table('tbl_uploaded_music_submission')->select('id', 'title')->get();
       //return $data;


        return view ('musicians.availablemusictable',compact('data'));
    }

    public function my_available_music()
    {
        $myid=Auth::user()->id;

        $musicdata = DB::table('tbl_uploaded_music_submission')
                        ->where('uploader', '=', $myid)
                        ->get();

        $data= [
            'musicdata' => $musicdata,
            //'registedMembers' => $registedMembers,
            //'MyContributions' => $MyContributions,
            'PendingRequests' => '144',
        ];

        return view ('musicians.myuploadstable')->with($data);
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
            'audio_file' => 'nullable|mimes:mp3,ogg,wav',
            'pdf_file' => 'required|file|mimes:pdf|max:5048', // Max file size is 2MB (2048 KB)
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

        // // Handle file upload
        // if ($request->hasFile('pdf_file')) {
        //     $file = $request->file('pdf_file');
        //     $uniqueFileName = time() . '_' . $file->getClientOriginalName();
        //     $filePath = $file->storeAs('pdfs', $uniqueFileName); // Store with a unique file name in the 'pdfs' directory
        // } else {
        //     // Handle the case where no file was uploaded
        //     $filePath = null;
        // }

        if ($request->hasFile('audio_file')) {
            $audioFile = $request->file('audio_file');
            
            // Generate a unique hashed name for the file
            $uniqueFileName = $audioFile->hashName();
            
            // Store the file with the unique name
            $path = $audioFile->storeAs('audio', $uniqueFileName, 'public');
        } else {
            $path = null;
        }
    
        // Extract the filename from the path
        $audiofilename = $path ? pathinfo($path, PATHINFO_BASENAME) : null;

        if ($request->hasFile('pdf_file')) {

            //return $request;
    
            $request->validate([
                //'loanform' => 'mimes:png,jpg,jpeg|max:2048' // Only allow .jpg, .bmp and .png file types.
                'pdf_file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg|max:4048',
            ]);
    
    
             // Save the file locally in the storage/public/ folder under a new folder named /loanforms
             $request->pdf_file->store('music', 'public');
             $updatedate = date('Y-m-d H:i:s');
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
            'audiopath' => $audiofilename,
            'path' => $request->pdf_file->hashName(), // Save the unique file name in the 'path' column
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

    public function previewMusic($id)
    {
        //return $id;

        // Retrieve the music submission record from the database based on the given $id using the DB facade
        $musicSubmission = DB::table('tbl_uploaded_music_submission')->find($id);

        // Check if the record exists
        if (!$musicSubmission) {
            // Handle the case where the record does not exist, e.g., show an error message or redirect
            return redirect()->route('music.index')->with('error', 'Music submission not found.');
        }

        if ($musicSubmission) {
            // Assuming 'user_id' is the foreign key column in 'tbl_uploaded_music_submission'
            $userId = $musicSubmission->uploader;
        
            // Retrieve the user's name from the 'users' table
            $user = DB::table('users')->find($userId);
        
            // Access the user's name
            $uploaderName = $user->name;

            //return $uploaderName;
        
            // Now, $uploaderName contains the name of the uploader
        }

        $data=[

            'musicSubmission' => $musicSubmission,// submissions
            'uploaderName' => $uploaderName,// submissions

        ];
            


        return view ('musicians.viewmusicfile')->with($data);


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
