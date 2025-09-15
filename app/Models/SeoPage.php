<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $table = 'seo_pages';

    protected $fillable = [
        // Basic
        'slug',
        'title',
        'meta_description',
        'meta_keywords',

        // Open Graph
        'og_title',
        'og_description',
        'og_type',
        'og_url',
        'og_image',

        // Twitter
        'twitter_card',
        'twitter_title',
        'twitter_description',
        'twitter_image',
    ];
}
