<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewAdminController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('admin.review.index', compact('reviews'));
    }


    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
    {
        $dataReq = $request->all();
        if (isset($dataReq['img'])) {
            $dataReq['img'] = Storage::disk('public')->put('/images', $dataReq['img']);
        }

        Review::create($dataReq);
        return redirect()->route('admin.review.index');
    }


    public function edit(Review $review)
    {
        return view('admin.review.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $dataReq = $request->all();
        if (isset($dataReq['img'])) {
            $dataReq['img'] = Storage::disk('public')->put('/images', $dataReq['img']);
        }

        $review->update($dataReq);
        return redirect()->route('admin.review.index');
    }


    public function destroy(Review $review) {
        $review->delete();
        return redirect()->route('admin.review.index');
    }
}
