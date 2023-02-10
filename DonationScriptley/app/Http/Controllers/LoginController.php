<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
use Hash;
use Str;

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
    function resetpassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
        
    }

    function profile()
    {
        $data = User::first()->get();
        return view('/profile',['data'=>$data]);
    }
    function update_profile(Request $request)
    {
       
       $id = $request->user_id;
        $data = $request->except([
            '_token',
            'user_id',
            'isstatus',
            'status',
            'file',
          ]);
        if ($request->hasFile('image')) {
              $image = $request->file('image');
              $teaser_image = time().'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/uploads/profile');
              $image->move($destinationPath, $teaser_image);
              $data['image'] = 'uploads/profile/'.$teaser_image;
          }
        if(User::where('id', $id)->update($data)){
            return response()->json(['response'=>true,'message'=>'Update successfully']);
            
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }

    }
}
