<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Pages extends Model
{

    use SoftDeletes, HasRoles;
    protected $fillable = [
        'title',
        'image',
        'slug',
        'content',
        'author_id',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'author_id');
    }
    public function getImageUrl()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
