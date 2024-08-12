<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SeoAdminController extends Controller
{
    public function index()
    {
        $seos = Seo::orderBy('created_at', 'desc')->get();


        return view('admin.seo.index', compact('seos'));
    }


    public function create()
    {
        return view('admin.seo.create');
    }

    public function store(Request $request)
    {
        $dataReq = $request->all();
        if (isset($dataReq['img'])) {
            $dataReq['img'] = Storage::disk('public')->put('/images', $dataReq['img']);
        }

        Seo::create($dataReq);
        return redirect()->route('admin.seo.index');
    }


    public function edit(Seo $seo)
    {
        return view('admin.seo.edit', compact('seo'));
    }

    public function update(Request $request, Seo $seo)
    {
        $dataReq = $request->all();
        if (isset($dataReq['img'])) {
            $dataReq['img'] = Storage::disk('public')->put('/images', $dataReq['img']);
        }

        $seo->update($dataReq);
        return redirect()->route('admin.seo.index');
    }


    public function destroy(Seo $seo) {
        $seo->delete();
        return redirect()->route('admin.seo.index');
    }
}
