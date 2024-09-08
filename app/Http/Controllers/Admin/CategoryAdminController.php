<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryAdminController extends Controller
{

    public function index(): View
    {
        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create() : View {
        return view('admin.category.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        Category::create($request->all());
        return redirect()->route('admin.category.index');
    }

    public function edit(Category $category) : View {
        return view('admin.category.edit', compact('category'));
    }
    public function update(Category $category, Request $request) : RedirectResponse
    {
        $category->update($request->all());
        return redirect()->route('admin.category.index');
    }
    public function destroy(Category $category) : RedirectResponse {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
