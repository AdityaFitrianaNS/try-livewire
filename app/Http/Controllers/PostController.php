<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.show', compact('post'));
    }

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.edit', compact('post'));
    }

    public function delete(Post $post)
    {
        Post::destroy($post->id);

        return redirect()->route('posts.index')->with('success', 'Post successfully delete');
    }
}
