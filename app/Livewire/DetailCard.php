<?php

namespace App\Livewire;

use App\Models\Anime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetailCard extends Component
{
    public $id;
    public $title;
    public $genre;
    public $image;
    public $rating;
    public $description;
    public $totalEpisode;
    public $category_id = 0;


    public function mount($id , $title, $genre, $image, $description, $rating, $totalEpisode)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->image = $image;
        $this->description = $description;
        $this->rating = $rating;
        $this->totalEpisode = $totalEpisode;

    }

    public function addAnime()
    {

        $animeExists = Anime::find($this->id)?->where('user_id', Auth::user()->id)->exists();


        if ($animeExists) {
            return redirect()->route('home')->with('exists', 'Anime already added');
        }

        $data = [
            'id' => $this->id,
            'title' =>$this->title,
            'category_id' =>$this->category_id,
            'cover_image' =>$this->image,
            'total_episodes' =>$this->totalEpisode ? $this->totalEpisode : 0,
            'user_id' => Auth::user()->id,
        ];

        Anime::create(
            $data
        );

        return redirect()->route('home')->with('success', 'Added successfully');
    }


    public function render()
    {
        return view('livewire.detail-card');
    }
}
