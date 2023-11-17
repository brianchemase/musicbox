<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();

        return view('musicians.userstable', ['users' => $users]);
    }

    public function updateUser(Request $request)
    {
        $user = User::findOrFail($request->input('user_id'));

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->country = $request->input('country');
        $user->position = $request->input('position');
        //$user->role = $request->input('role');

        $user->save();

     

        return redirect()->back()->with('success', 'User updated successfully.');
    }

    public function changePassword(Request $request, User $user)
        {
            $request->validate([
                'new_password' => 'required|min:8|confirmed',
            ]);

            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            return redirect()->back()->with('success', 'Password changed successfully.');
        }
}
