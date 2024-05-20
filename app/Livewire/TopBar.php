<?php

namespace App\Livewire;

use Livewire\Component;

class TopBar extends Component
{
    public $isBrowseSelected;

    public function mount($isBrowseSelected = false)
    {
        $this->isBrowseSelected = $isBrowseSelected;
    }

    public function render()
    {
        return view('livewire.top-bar', ['user' => auth()->user()]);
    }
}
