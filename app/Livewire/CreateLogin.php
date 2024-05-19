<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateLogin extends Component
{
    #[Validate]
    public $email = '';
    #[Validate]
    public $password = '';
    public $remember = false;

    public function save() {
        $this->validate();

        // Validate credentials
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->flash('error', 'Wrong email or password!');
            return;
        }

        return redirect()->route('home');
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
