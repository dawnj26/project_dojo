<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    // GET methods
    public function showLogin() {
        return view('auth.login');
    }
}
