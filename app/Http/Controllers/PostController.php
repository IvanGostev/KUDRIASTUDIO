<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('post.index', compact('posts'));
    }
    public function show(Post $post)
    {
        $posts = Post::latest()->whereNot('id', $post->id)->take(3)->get();
        return view('post.show', compact('post', 'posts'));
    }
}
