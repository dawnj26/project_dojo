<?php

namespace App\Livewire;

use Livewire\Component;

class CreateNavBar extends Component
{
    public $selectedItem;

    public function mount($selectedItem = 0)
    {
        $this->selectedItem = $selectedItem;
    }

    public function render()
    {
        return view('livewire.create-nav-bar');
    }
}
