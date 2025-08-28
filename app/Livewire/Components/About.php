<?php

namespace App\Livewire\Components;

use Livewire\Component;

class About extends Component
{
    public $aboutData = [
        [
            'heading' => 'Who We Are',
            'imgSrc' => '/images/aboutus/imgOne.svg',
            'paragraphs' => ' We are a team of dedicated professionals committed to delivering high-quality solutions in the fields of technology and innovation.',
            'link' => 'Learn More'
        ],
        [
            'heading' => 'Services We Offer',
            'imgSrc' => '/images/aboutus/imgTwo.svg',
            'paragraphs' =>
            ' We offer a wide range of services including web development, mobile app development, digital marketing, and IT consulting to help businesses thrive in the digital age.',
            'link' => 'Our Services'
        ],
        [
            'heading' => 'Our Mission',
            'imgSrc' => 'mission-image.jpg',
            'paragraphs' => 'Our mission is to provide exceptional services that exceed our clients\' expectations and foster long-term relationships built on trust and excellence.',

            'link' => 'Read More'
        ]
    ];
    public function render()
    {
        return view('livewire.components.about', [
            'aboutData' => $this->aboutData
        ]);
    }
}
