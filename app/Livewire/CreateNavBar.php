<?php

namespace App\Livewire;

use Livewire\Component;

class CreateNavBar extends Component
{
    public $selectedItem;

    public function mount() {
        $this->selectedItem = 0;
    }

    public function selectItem(int $item) {
        $this->selectedItem = $item;
    }

    public function render()
    {
        return view('livewire.create-nav-bar');
    }
}
