<?php

namespace App\Livewire;

use Livewire\Component;

class AnimeCard extends Component
{
    public $id;
    public $image;
    public $title;
    public $rating;

    public function mount($id, $image, $title, $rating)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->rating = $rating;
    }


    public function render()
    {
        return view('livewire.anime-card');
    }
}
