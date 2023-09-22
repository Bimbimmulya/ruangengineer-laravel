<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->simplePaginate(10)->withQueryString();
        $category = Category::get();
        return view('blog', compact('artikel', 'category'));
    }
}
