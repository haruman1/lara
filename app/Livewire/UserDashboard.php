<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Component
{
    public $user;
    public $userRole;

    public function mount()
    {
        $this->user = Auth::user();
        $this->userRole = $this->user->roles->first()?->name ?? 'No Role';
    }

    public function render()
    {
        return view('livewire.user-dashboard')
            ->layout('layouts.user');
    }
}
