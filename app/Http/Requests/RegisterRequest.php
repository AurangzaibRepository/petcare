<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'country_id' => 'required',
            'role' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute is required',
            'email' => ':attribute must be valid email address',
            'password.confirmed' => 'password and confirm password do not match'
        ];
    }

    public function attributes(): array
    {
        return [
            'password_confirmation' => 'confirm password'
        ];
    }
}
