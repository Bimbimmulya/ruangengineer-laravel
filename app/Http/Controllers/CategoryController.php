<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = Category::latest()->simplePaginate(10)->withQueryString();
        return view('admin.view-category', compact('category'));
    }

    public function create()
    {
        return view('admin.create-category');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_category' => 'required'
        ]);

        Category::create($request->all());

        return back()->with('success', 'Category added successfully');
    }

    public function edit($id)
    {
        $categori = Category::find($id);
        return view('admin.view-category', compact('categori'));
    }

    public function update(Request $request, $id)
    {
        $categori = Category::find($id);
        $categori->update($request->all());

        return back()->with('success', 'Category successfully edited');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->back();
        }
        $category->delete();

        return back()->with('success', 'Category has been deleted successfully');
    }
}
