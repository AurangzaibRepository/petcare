<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'country_id' => 'required',
            'role' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required'
        ];
    }
}
