<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class AuthUser extends Component
{
    #[Validate]
    public $email = '';
    #[Validate]
    public $password = '';

    public function save() {
        $this->validate();

        // Your logic here
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
        return view('livewire.auth-user');
    }
}
