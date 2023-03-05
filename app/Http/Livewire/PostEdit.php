<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostEdit extends Component
{
    public $post_id;
    public $title, $body, $slug;

    public function mount($post)
    {
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->slug = $post->slug;
    }

    public function render()
    {
        return view('livewire.post-edit');
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|min:3',
            'body' => 'required|string|min:3',
            'slug' => 'required|string|min:3|max:50|unique:posts,slug,'.$this->post_id,
        ]);

        Post::where('slug', $this->slug)->update([
            'title' => $this->title,
            'body'  => $this->body,
            'slug'  => $this->slug
        ]);

        $this->title = NULL;
        $this->body = NULL;
        $this->slug = NULL;

        return redirect()->route('posts.index')->with('success', 'Post successfully update');
    }
}
