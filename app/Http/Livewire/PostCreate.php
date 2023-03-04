<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCreate extends Component
{
    public $title;
    public $body;
    public $slug;

    public function render()
    {
        return view('livewire.post-create');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|min:3',
            'body' => 'required|string|min:3',
            'slug' => 'required|string|min:3|max:50|unique:posts'
        ]);

        Post::create([
            'title' => $this->title,
            'body'  => $this->body,
            'slug'  => $this->slug
        ]);

        $this->title = NULL;
        $this->body = NULL;
        $this->slug = NULL;

        session()->flash('success', 'Post successfully create');
    }
}
