<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriBlog;

class PostBlog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'kategori_blog_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the kategori blog that owns the post.
     */
    public function kategoriBlog()
    {
        return $this->belongsTo(KategoriBlog::class, 'kategori_blog_id');
    }
}
