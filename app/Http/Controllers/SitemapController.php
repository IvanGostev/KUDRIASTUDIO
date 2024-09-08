<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use App\Models\Review;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('updated_at', 'desc')->first();
        $category = Category::orderBy('updated_at', 'desc')->first();

        return response()->view('sitemap.index', [
            'post' => $post,
            'category' => $category,
        ])->header('Content-Type', 'text/xml');
    }

    public function posts()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.posts', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = Category::orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }

}
