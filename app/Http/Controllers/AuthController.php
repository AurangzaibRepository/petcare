<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\RegisterRequest;
use App\Models\Country;

class AuthController extends Controller
{
    public function __construct(
        private Country $country
    ) {
    }

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
            'pageTitle' => config('app.name'). ' - Register',
            'roles' => config('app.roles'),
            'countries' => $this->country->getAll()
        ]);
    }

    public function registerUser(Request $request, RegisterRequest $registerRequest)
    {
    }
}
