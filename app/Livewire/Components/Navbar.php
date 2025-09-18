<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Navbar as NavbarModel;

class Navbar extends Component
{
    public $menus;
    public function mount()
    {
        // Ambil menu root + anaknya (rekursif)
        $this->menus = NavbarModel::whereNull('parent_id')
            ->where('is_active', true)
            ->with('children')
            ->orderBy('order')
            ->get();
    }
    public function render()
    {

        return view('livewire.components.navbar');
    }
}
