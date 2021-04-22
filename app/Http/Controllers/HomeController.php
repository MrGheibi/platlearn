<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendTokenNotification;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
