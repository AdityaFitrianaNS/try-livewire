<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCard extends Component
{
    public $post_id, $title, $body, $slug;

    // Trigger method render
    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.post-card',[
            'posts' => Post::latest()->get()
        ]);
    }

    public function create()
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

        session()->flash('success', 'Post successfully update');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function edit(string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        if ($post) {
            $this->post_id = $post->id;
            $this->title = $post->title;
            $this->body = $post->body;
            $this->slug = $post->slug;
        } else {
            return redirect()->to('/posts');
        }
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|min:3',
            'body' => 'required|string|min:3',
            'slug' => 'required|string|min:3|max:50|unique:posts,slug,'.$this->post_id,
        ]);

        Post::where('id', $this->post_id)->update([
            'title' => $this->title,
            'body'  => $this->body,
            'slug'  => $this->slug
        ]);

        session()->flash('success', 'Post successfully update');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->title = NULL;
        $this->body = NULL;
        $this->slug = NULL;
    }
}
