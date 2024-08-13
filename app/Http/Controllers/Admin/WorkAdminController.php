<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkAdminController extends Controller
{
    public function index()
    {
        $works = Work::orderBy('created_at', 'desc')->get();
        return view('admin.portfolio.index', compact('works'));
    }


    public function store(Request $request)
    {
        $dataReq = $request->all();

        if (isset($dataReq['src'])) {
            $dataReq['src'] = Storage::disk('public')->put('/images', $dataReq['src']);
        }
        Work::create($dataReq);
        return redirect()->route('admin.work.index');
    }
    public function destroy(Work $work) {
        $work->delete();
        return redirect()->route('admin.work.index');
    }
}
