<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Articles extends Component
{


    public $postData = [
        [
            'time' => "5 min",
            'heading' => 'We Launch Delia',
            'heading2' => 'Webflow this Week!',
            'name' => "Published on Startupon",
            'date' => 'August 19, 2021',
            'imgSrc' => '/images/articles/article.png',
        ],
        [
            'time' => "5 min",
            'heading' => 'We Launch Delia',
            'heading2' => 'Webflow this Week!',
            'name' => "Published on Startupon",
            'date' => 'August 19, 2021',
            'imgSrc' => '/images/articles/article2.png',
        ],
        [
            'time' => "5 min",
            'heading' => 'We Launch Delia',
            'heading2' => 'Webflow this Week!',
            'name' => "Published on Startupon",
            'date' => 'August 19, 2021',
            'imgSrc' => '/images/articles/article3.png',
        ],
        [
            'time' => "5 min",
            'heading' => 'We Launch Delia',
            'heading2' => 'Webflow this Week!',
            'name' => "Published on Startupon",
            'date' => 'August 19, 2021',
            'imgSrc' => '/images/articles/article.png',
        ],
        [
            'time' => "5 min",
            'heading' => 'We Launch Delia',
            'heading2' => 'Webflow this Week!',
            'name' => "Published on Startupon",
            'date' => 'August 19, 2021',
            'imgSrc' => '/images/articles/article2.png',
        ],
        [
            'time' => "5 min",
            'heading' => 'We Launch Delia',
            'heading2' => 'Webflow this Week!',
            'name' => "Published on Startupon",
            'date' => 'August 19, 2021',
            'imgSrc' => '/images/articles/article3.png',
        ],
    ];

    // CAROUSEL SETTINGS

    public $settings = [
        'dots' => false,
        'infinite' => true,
        'slidesToShow' => 3,
        'slidesToScroll' => 2,
        'arrows' => false,
        'autoplay' => false,
        'speed' => 500,
        'cssEase' => "linear",
        'responsive' => [
            [
                'breakpoint' => 1200,
                'settings' => [
                    'slidesToShow' => 2,
                    'slidesToScroll' => 1,
                    'infinite' => true,
                    'dots' => false
                ]
            ],
            [
                'breakpoint' => 600,
                'settings' => [
                    'slidesToShow' => 1,
                    'slidesToScroll' => 1,
                    'infinite' => true,
                    'dots' => false
                ]
            ]
        ]
    ];
    public function render()
    {
        return view('livewire.components.articles', [
            'postData' => $this->postData,
            'settings' => $this->settings
        ]);
    }
}
