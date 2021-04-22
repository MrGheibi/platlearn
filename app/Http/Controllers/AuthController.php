<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function showSignIn()
    {
        return view('login');
    }

    public function showSignUp()
    {
        return view('register');
    }

    public function resetPassword()
    {
        dd('test');
    }

    public function logout()
    {
        auth('web')->logout();
        return redirect('/')->with('removeToken',true);
    }
}
