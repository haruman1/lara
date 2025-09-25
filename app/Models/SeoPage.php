<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SeoPage extends Model
{
    protected $table = 'seo_pages';

    protected $fillable = [
        // Basic
        'slug',
        'manual_slug',
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



    protected static function booted()
    {
        static::saving(function ($model) {
            // Kalau ada manual_slug, auto slugify
            if (!empty($model->manual_slug)) {
                $model->manual_slug = Str::slug($model->manual_slug);

                // Jika slug kosong, isi slug dari manual_slug
                if (empty($model->slug)) {
                    $model->slug = $model->manual_slug;
                }
            }
        });
    }


    public function pageLink()
    {
        return $this->belongsTo(Pages::class, 'slug', 'slug');
    }
}
