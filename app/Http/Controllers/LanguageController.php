<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Post;
use App\Models\Review;
use App\Models\Work;
use Illuminate\Http\Request;

class LanguageController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch(Request $request)
    {
        $oldLanguage = session()->get('language');
        session()->put('language', $request->input('language'));
        $url = str_replace($oldLanguage, session()->get('language') ,url()->previous());
        return redirect($url);
    }

}
