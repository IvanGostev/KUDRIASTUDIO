<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $language = session()->get('language') ?? 'en';
        $posts = Post::where('lang', $language)->latest()->paginate(5);
        $categories = Category::all();
        return view('post.index', compact('posts', 'categories'));
    }
    public function search(Request $request)
    {
        $language = session()->get('language') ?? 'en';
        $posts = Post::where('category_id', $request->category_id)->where('lang', $language)->latest()->paginate(5);
        $categories = Category::all();
        $selectedCategoryID = $request->category_id;
        return view('post.index', compact('posts', 'categories', 'selectedCategoryID'));
    }
    public function show(string $locale, Post $post)
    {
        $language = session()->get('language') ?? 'en';
        $posts = Post::where('lang', $language)->latest()->whereNot('id', $post->id)->take(3)->get();
        return view('post.show', compact('post', 'posts'));
    }
}
