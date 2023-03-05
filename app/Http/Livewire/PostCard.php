<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCard extends Component
{
    // Trigger method render
    protected $listeners = ['postStore' => 'render'];

    public function render()
    {
        return view('livewire.post-card',[
            'posts' => Post::latest()->get()
        ]);
    }
}
