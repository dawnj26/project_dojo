<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateLogin extends Component
{
    #[Validate]
    public $email = '';
    #[Validate]
    public $password = '';

    public function save() {
        $this->validate();

        // Validate credentials

        return redirect()->route('dashboard');
    }

    public function rules() {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }

    public function render()
    {
        return view('livewire.create-login');
    }
}
