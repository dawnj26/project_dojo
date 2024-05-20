<?php

namespace App\Helpers;

use App\Livewire\AnimeCard;
use Illuminate\Support\Facades\Http;

class AnimeHelper
{
    private $baseUrl = 'https://graphql.anilist.co';

    public function getAnime(string $search, int $page) : array {
        $query = '
        query ($id: Int, $page: Int, $search: String) {
            Page(page: $page, perPage: 10) {
              pageInfo {
                total
                currentPage
                lastPage
                hasNextPage
                perPage
              }
              media(id: $id, search: $search, type: ANIME, isAdult: false) {
                id
                coverImage {
                  large
                }
                title {
                  romaji
                }
                description
                meanScore
                episodes
                genres

              }
            }
          }
        ';

        $variables = [
            'search' => $search,
            'page' => $page,
        ];

        $response = Http::withBody(json_encode([
            'query' => $query,
            'variables' => $variables
        ]))->withHeader('Content-Type', 'application/json')->post($this->baseUrl);

        if ($response->failed()) {
            return [];
        }

        return $response->json();
    }


}
