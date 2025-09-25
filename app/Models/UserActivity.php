<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = [
        'author_id',
        'page',
        'action',
        'ip',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
