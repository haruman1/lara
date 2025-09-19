<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Navbar extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'order', 'is_active', 'icon', 'manual_slug'];

    protected static function booted()
    {
        static::saving(function ($model) {
            // Jika manual_slug diisi → slugify & jadikan slug utama
            if (!empty($model->manual_slug)) {
                $model->manual_slug = Str::slug($model->manual_slug);
                $model->slug = $model->manual_slug;
            }
        });
    }

    public function pageLink()
    {
        return $this->belongsTo(Pages::class, 'slug', 'slug');
    }

    public function children()
    {
        return $this->hasMany(Navbar::class, 'parent_id')->orderBy('order');
    }

    public function page()
    {
        return $this->belongsTo(Pages::class, 'page_id');
    }

    public function parent()
    {
        return $this->belongsTo(Navbar::class, 'parent_id');
    }

    public function getResolvedSlugAttribute()
    {
        return $this->manual_slug ?: ($this->page?->slug ?? $this->slug);
    }
}
