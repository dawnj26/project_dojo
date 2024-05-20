<?php

namespace App\Http\Controllers;

use App\Helpers\AnimeHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showHome() {
        return view('dashboard.home');
    }

    public function showBrowse(Request $request) {
        $helper = new AnimeHelper();

        $animes = $helper->getAnime($request->search ?? '', 1);

        // dd($animes);

        return view('dashboard.browse', [
            'animes' => empty($animes) ? [] : $animes['data']['Page']['media']
        ]);
    }
}
