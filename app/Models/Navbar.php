<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'order', 'is_active', 'icon'];

    public function children()
    {
        return $this->hasMany(Navbar::class, 'parent_id')->orderBy('order');
    }

    public function parent()
    {
        return $this->belongsTo(Navbar::class, 'parent_id');
    }
}
