<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'manual_slug',
        'group',
        'parent_id',
        'order',
        'icon',
        'type'
    ];

    public function children()
    {
        return $this->hasMany(Navbar::class, 'parent_id')->orderBy('order');
    }

    public function parent()
    {
        return $this->belongsTo(Navbar::class, 'parent_id');
    }

    // getter untuk URL final (ambil manual_slug kalau ada, kalau tidak pakai slug)
    public function getUrlAttribute()
    {
        if (!empty($this->manual_slug)) {
            return url($this->manual_slug);
        }
        if (!empty($this->slug)) {
            return url($this->slug);
        }
        return '#';
    }
}
