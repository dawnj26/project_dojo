<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateRegister extends Component
{
    #[Validate]
    public $name = '';
    #[Validate]
    public $email = '';
    #[Validate]
    public $password = '';
    #[Validate()]
    public $password_confirmation = '';

    public function rules() {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ];
    }

    public function save() {
        $this->validate();

        // Save user to database
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return redirect('/')->with('success', 'Registered successfully!');
    }

    public function render()
    {
        return view('livewire.create-register');
    }
}
