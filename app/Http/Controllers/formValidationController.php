<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formVRequest;
use App\Models\User;

class formValidationController extends Controller
{
    function formSubmit(formVRequest $request){

        /* $validated = $request->validate([

            'name' => "required|string|max:255",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:8|confirmed"
    
        ]); */

        $validated = $request->validated();

        if($validated){

            User::create([

                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password'])
    
            ]);
    
            return redirect(route('view.submit'))->with([
    
                'status' => "Form submitted successfully!",
    
            ]);

        }

        /* else{

            return redirect(route('form.post'))-with([

                'name.required' => "Name is must fillable",
                'name.string' => "Name must be string",
                'email.required' => "Email required",
                'email.email' => "Invalid email",
                'email.unique' => "Email must be unique",
                'password.required' => "Password is required",
                'password.min' => "Password must be at least 8 characters",
                'password.confirmed' => "Password confirmation does not match",
    
            ]);

        } */

    }

}
