<?php

namespace App\Livewire;

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


    public function render()
    {
        return view('livewire.detail-card');
    }
}
