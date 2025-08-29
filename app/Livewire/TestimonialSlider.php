<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialSlider extends Component
{
    public array $testimonials = [];

    public function mount()
    {
        // Bisa diganti data dari DB
        $this->testimonials = [
            [
                'name' => 'Andi Saputra',
                'role' => 'CEO StartupX',
                'message' => 'Produk ini sangat membantu bisnis kami berkembang pesat!',
                'photo' => 'https://i.pravatar.cc/150?img=1'
            ],
            [
                'name' => 'Budi Santoso',
                'role' => 'Developer',
                'message' => 'Layanan cepat dan support ramah, recommended banget!',
                'photo' => 'https://i.pravatar.cc/150?img=2'
            ],
            [
                'name' => 'Citra Dewi',
                'role' => 'Designer',
                'message' => 'UI/UX nya bagus sekali, bikin nyaman dipakai sehari-hari.',
                'photo' => 'https://i.pravatar.cc/150?img=3'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.testimonial-slider');
    }
}
