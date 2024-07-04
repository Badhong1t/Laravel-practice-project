<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class settingsController extends Controller
{
    
    public function edit(){

        $settings = Auth::user()->settings;

        return view('settings', ['settings' => $settings]);

    }

}
