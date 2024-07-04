<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formVRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'name' => "required|string|max:255",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:8"

        ];
    }

    function messages(){

        return [

            'name.required' => "Name is must fillable",
            'name.string' => "Name must be string",
            'email.required' => "Email required",
            'email.email' => "Invalid email",
            'email.unique' => "Email must be unique",
            'password.required' => "Password is required",
            'password.min' => "Password must be at least 8 characters",
            'password.confirmed' => "Password confirmation does not match",

        ];

    }
}
