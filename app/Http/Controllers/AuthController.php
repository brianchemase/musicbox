<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use App\Mail\NewPasswordMail;

class AuthController extends Controller
{

    
    public function landingpage()
    {

        $data = DB::table('tbl_uploaded_music_submission')->get();
        return view ('index',compact('data'));
        //return view('index');
    }
    //
    public function login()
    {
        return view ('logs.login');
    }
    public function register()
    {
       $countries = Country::all();
       //$countries="0";
        //return $countries;
        return view ('logs.register',compact('countries'));
    }
    public function fogotpass()
    {
        return view ('logs.pass');
    }

    public function registerUser(Request $request)
    {

        //return $request->all();
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            //'country1' => 'required|exists:countries,country_id', // Assuming your countries table has a 'country_id' column
            'position' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8', // 'password_confirmation' field must be present and match 'password'
        ]);



        // Create a new user instance
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->country = $request->input('country');
        $user->position = $request->input('position');
        $user->role = '2'; // Set the default role as 'user'
        $user->password = Hash::make($request->input('password'));

        // Save the user to the database
        $user->save();

        $fullnames=$request->input('name');
        $email=$request->input('email');
        $username=$request->input('email');
        $pass=$request->input('password');

        Mail::to($email)->send(new RegistrationMail($fullnames, $username, $pass));

        // You can also log in the user if needed
        // auth()->login($user);

        // Redirect to a success page or do something else
        return redirect()->route('login')->with('success', 'Registration successful!. Login');
    }

    public function resetfogotpass( Request $request)
    {

        $request->validate([
            'email' => 'required|email|max:255',
            ]);

        $email = $request->email;

        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->with('status', 'We can\'t find a user with that email address.');
        }
        $fullnames=$user->name;

        // Generate a new password
        $newPassword=rand();

        // Update the user's password in the database
        $user->update([
            'password' => bcrypt($newPassword),
        ]);
 
        $username=$email;
        $pass=$newPassword;

        Mail::to($email)->send(new NewPasswordMail($fullnames, $username, $pass));
        return redirect()->route('login')->with('success', 'Check your email for the new password.');
    }




}
