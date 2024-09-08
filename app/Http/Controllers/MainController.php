<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Post;
use App\Models\Review;
use App\Models\Work;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->take(3)->get();
        return view('index', compact('posts'));
    }
    public function portfolio()
    {

        $works = Work::latest()->get();
        return view('portfolio', compact('works'));
    }
    public function price()
    {
        return view('price');
    }
    public function reviews()
    {
        $reviews = Review::latest()->paginate(2);
        return view('reviews', compact('reviews'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        Message::firstOrCreate($data);
        return redirect()->route('contact')->with('msg', 'Successfully sent!');
    }
}
