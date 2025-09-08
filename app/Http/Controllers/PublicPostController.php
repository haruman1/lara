<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicPostController extends Controller
{
    public function show($token)
    {
        $post = Post::where('token', $token)
            ->where('status', 'published')
            ->where(function ($q) {
                $q->whereNull('publish_at')->orWhere('publish_at', '<=', now());
            })
            ->firstOrFail();

        // Increment views asynchronously would be preferable; simple increment for demo:
        $post->increment('views');

        return view('posts.show', compact('post'));
    }
}
