<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Category;

class DetailArtikelController extends Controller
{
    public function show(Artikel $artikel)
    {
        $artikel_detail = $artikel;
        
        return view('detail-artikel', compact('artikel_detail'));
    }
    
    public function show_artikel($slug)
    {
        $data = Artikel::where('slug', $slug)->get();
        // Mengambil artikel yang sedang Anda baca
        $currentArticle = Artikel::where('slug', $slug)->first();
        
        // Mengambil 5 artikel terbaru, kecuali artikel yang sedang Anda baca
        $recentArticles = Artikel::where('id', '!=', $currentArticle->id)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();
        
        // Mengambil daftar kategori untuk sidebar
        $categories = Category::withCount('artikels')->latest()->get();

        $relatedArtikel = Artikel::where('categories_id', $data->first()->categories_id)
    ->where('id', '!=', $data->first()->id)
    ->take(3) // Maksimal 3 artikel terkait
    ->get();

        
        return view('detail-artikel', compact('currentArticle', 'recentArticles', 'categories', 'data', 'relatedArtikel'));
    }
    
    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTermDetail');

        // Sesuaikan dengan logika pencarian sesuai kebutuhan Anda.
        $results = Artikel::where('judul', 'like', "%$searchTerm%")->get();

        return response()->json($results);
    }
    
    
    
}