<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;

class UserProfile extends Component
{
    #[Validate('required|string|max:255')]
    public $name;

    #[Validate('required|email|max:255')]
    public $email;

    #[Validate('nullable|min:8')]
    public $password;

    #[Validate('nullable|same:password')]
    public $password_confirmation;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updateProfile()
    {
        $this->validate();

        $user = Auth::user();

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        if ($this->password) {
            $user->update([
                'password' => Hash::make($this->password),
            ]);
        }

        $this->password = '';
        $this->password_confirmation = '';

        session()->flash('message', 'Profile updated successfully!');
    }

    public function render()
    {
        return view('livewire.user-profile')
            ->layout('layouts.user');
    }
}
