<?php

namespace App\Livewire;

use Livewire\Component;

class AnimeCard extends Component
{
    public $image;
    public $title;
    public $rating;

    public function mount($image, $title, $rating)
    {
        $this->image = $image;
        $this->title = $title;
        $this->rating = $rating;
    }


    public function render()
    {
        return view('livewire.anime-card');
    }
}
