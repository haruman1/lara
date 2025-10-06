<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class UserActivity extends Model
{
    use HasRoles;
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
