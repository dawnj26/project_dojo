<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showHome() {
        return view('dashboard.home');
    }

    public function showBrowse() {
        return view('dashboard.browse');
    }
}
