<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    //
    function checklogin(Request $request)
    {
        
        $request->validate([
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
