<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->simplePaginate(9)->withQueryString();

    $teknologi = Artikel::latest()->where('categories_id', 1)->simplePaginate(10)->withQueryString();
    $bisnis = Artikel::latest()->where('categories_id', 2)->simplePaginate(10)->withQueryString();
    $tips = Artikel::latest()->where('categories_id', 3)->simplePaginate(10)->withQueryString();
    $digitalMarketing = Artikel::latest()->where('categories_id', 4)->simplePaginate(10)->withQueryString();

    $category = Category::get();

    return view('blog', compact('artikel', 'category', 'teknologi', 'bisnis', 'tips', 'digitalMarketing'));
    }
}
