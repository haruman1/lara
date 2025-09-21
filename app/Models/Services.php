<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'tentang_layanan',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
