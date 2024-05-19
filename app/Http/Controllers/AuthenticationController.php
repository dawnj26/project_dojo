<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    // GET methods
    public function showLogin() {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function showRegister() {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
