<?php

namespace App\Livewire;

use App\Models\Anime;
use Illuminate\Support\Composer;
use Livewire\Component;

class EditCard extends Component
{

    public $id;
    public $title;
    public $genre;
    public $image;
    public $rating;
    public $description;
    public $totalEpisode;
    public $category_id = 0;
    public $currentEp;
    public $anime;

    public function mount($id , $title, $genre, $image, $description, $rating, $totalEpisode)
    {
        $this->anime = Anime::find($id);
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->image = $image;
        $this->description = $description;
        $this->rating = $rating;
        $this->totalEpisode = $totalEpisode;
        $this->category_id = $this->anime->category_id;
        $this->currentEp = $this->anime->current_episode;
    }

    public function saveAnime()
    {

        // When changing category
        if ($this->anime->category_id !== $this->category_id) {
            if ($this->category_id === 2) {
                $this->anime->current_episode = $this->anime->total_episodes;
                $this->anime->category_id = 2;
            } else if ($this->category_id === 0 || $this->category_id === 1) {
                $this->anime->current_episode = 0;
                $this->anime->category_id = $this->anime->category_id === 0 ? 1 : 0;
            } else {
                $this->anime->current_episode = $this->currentEp;
                $this->anime->category_id = $this->category_id;
            }

        } else { // when not changing category
            if ($this->category_id === 1 && $this->currentEp >=$this->anime->total_episodes) {
                $this->anime->category_id = 2;
                $this->anime->current_episode = $this->anime->total_episodes;
            } else if ($this->category_id === 1 && $this->currentEp > 0) {
                $this->anime->category_id = 0;
            } else if ($this->currentEp >=$this->anime->total_episodes) {
                $this->anime->category_id = 2;
            } else {
                $this->anime->current_episode = $this->currentEp;
                $this->anime->category_id = $this->category_id;
            }
        }

        $this->anime->update();

        return redirect()->route('home')->with('success', 'Saved successfully');

    }

    public function render()
    {
        return view('livewire.edit-card');
    }
}
