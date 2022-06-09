<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): view
    {
        return view('auth.login', [
            'pageTitle' => config('app.name') . ' - Login'
        ]);
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'required' => ':attribute is required'
        ]);
    }

    public function register(): view
    {
        return view('auth.register', [
            'pageTitle' => config('app.name'). ' - Register'
        ]);
    }

    public function registerUser(Request $request)
    {
        echo 'asdas';
    }
}
