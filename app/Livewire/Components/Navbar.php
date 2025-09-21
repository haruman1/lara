<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Navbar as NavbarModel;

class Navbar extends Component
{
    public $menus;
    public function mount()
    {
        $this->menus = cache()->rememberForever('navbar_header', function () {
            return NavbarModel::whereNull('parent_id')
                ->where('group', 'header')
                ->with('children')
                ->orderBy('order')
                ->get();
        });
    }
    public function render()
    {

        return view('livewire.components.navbar');
    }
}
