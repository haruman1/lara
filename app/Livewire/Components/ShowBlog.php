<?php

namespace App\Livewire\Components;

use App\Models\Post;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        $posts = Post::latest()->take(4)->get();
        return view('livewire.components.show-blog', compact('posts'));
    }
}
