<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        // You can also log in the user if needed
        // auth()->login($user);

        // Redirect to a success page or do something else
        return redirect()->route('login')->with('success', 'Registration successful!. Login');
    }



}
