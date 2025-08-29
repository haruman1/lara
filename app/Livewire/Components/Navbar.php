<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public $isOpen = false; // untuk drawer mobile
    public $navigation = [];
    public function mount()
    {
        $this->navigation = [
            ['name' => 'About Us', 'href' => '#aboutus-section', 'active' => false],
            ['name' => 'Services', 'href' => '#services-section', 'active' => false],
            ['name' => 'Portfolio', 'href' => '#portfolio-section', 'active' => false],
            ['name' => 'Contact', 'href' => '#contact-section', 'active' => false],
            ['name' => 'Blog', 'href' => '#blog-section', 'active' => false],
            ['name' => 'Careers', 'href' => '#careers-section', 'active' => false],
            ['name' => 'Login', 'href' => '/login'],


        ];
    }
    public function toggleDrawer()
    {
        $this->isOpen = !$this->isOpen;
    }
    public function closeDrawer()
    {
        $this->isOpen = false;
    }


    // public $navItems = [
    //     ['name' => 'About Us', 'href' => '#aboutus-section', 'active' => false],
    //     ['name' => 'Services', 'href' => '#services-section', 'active' => false],
    //     ['name' => 'Portfolio', 'href' => '#portfolio-section', 'active' => false],
    //     ['name' => 'Contact', 'href' => '#contact-section', 'active' => false],

    // ];
    // public $isOpen = false;
    // public function DrawerToggle($isOpen, $event) {}
    public function render()
    {
        return view('livewire.components.navbar');
    }
}
