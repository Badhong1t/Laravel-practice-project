<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class activitiesDashboardController extends Controller
{
    
    function index(Request $request){

        $activities = Auth::user()->activities;

        return view('middlewareViews.activitiesDashboard', compact('activities')/*['activities' => $activities]*/);

    }

}
