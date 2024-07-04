<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;


class formLoginController extends Controller
{
    
    function loginForm(loginRequest $request){

        /* $credentials = $request->validate([

            'email' => 'required|email',
            'password' => 'required',

        ]); */

        $credentials = $request->validated();

        if(Auth::attempt($credentials)){

            return redirect()->route('dashboard.profile')->with('status','Login Successful!');

        }
        else{

            return redirect()->back()->withErrors(['status' => 'The provided credentials do not match our records'])->withInput();

        }

    }

}
