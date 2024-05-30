<?php

namespace App\Http\Controllers;

use App\Helpers\AnimeHelper;
use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the home page.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function showHome(int $id = 0)
    {
        $title  = '';

        if ($id === 0) {
            $title = 'Watching';
        } else if ($id === 1) {
            $title = 'Plan to Watch';
        } else {
            $title = 'Finished';
        }

        $category = [
            'id' => $id,
            'title' => $title
        ];

        $user = Auth::user();
        $animes = $user->animes()->where('category_id', $id)->get();

        return view('dashboard.home', compact('category', 'animes'));
    }

    /**
     * Show the browse page.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function showBrowse(Request $request)
    {
        $helper = new AnimeHelper();

        $animes = $helper->getAnime($request->search ?? '', 1);
        // data structure of $animes

        /*
        array:1 [▼ // app\Http\Controllers\DashboardController.php:20
        "data" => array:1 [▼
            "Page" => array:2 [▼
            "pageInfo" => array:5 [▶]
            "media" => array:10 [▼
                0 => array:7 [▼
                "id" => 113415
                "coverImage" => array:1 [▶]
                "title" => array:1 [▶]
                "description" => """
                    A boy fights... for "the right death."<br>

                    <br>


        Hardship, regret, shame: the negative feelings that humans feel become Curses that lurk in our everyday lives. The Curses run rampant throughout the world, capa
        ▶

                    <br>


        Itadori Yuji is a boy with tremendous physical strength, though he lives a completely ordinary high school life. One day, to save a friend who has been attacked
        ▶

                    <br><br>

                    (Source: Crunchyroll)<br>

                    <br>

                    <i>Note: The first episode received an early web premiere on September 19th, 2020. The regular TV broadcast started on October 3rd, 2020.</i>
                    """
                "meanScore" => 86
                "episodes" => 24
                "genres" => array:3 [▶]
                ]
                1 => array:7 [▶]
                2 => array:7 [▶]
                3 => array:7 [▶]
                4 => array:7 [▶]
                5 => array:7 [▶]
                6 => array:7 [▶]
                7 => array:7 [▶]
                8 => array:7 [▶]
                9 => array:7 [▶]
                    ]
                ]
            ]
        ]
        */

        return view(
            'dashboard.browse', [
            'animes' => empty($animes) ? [] : $animes['data']['Page']['media']
            ]
        );
    }

    public function showDetails(Request $request)
    {
        $helper = new AnimeHelper();

        $animes = $helper->getDetail($request->id);

        
        return view('dashboard.details', [
            'animes' => empty($animes) ? [] : $animes['data']['Page']['media']
        ]);
    }
}
