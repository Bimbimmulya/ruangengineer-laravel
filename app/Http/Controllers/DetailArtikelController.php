<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

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

        return view('detail-artikel', compact('data'));
    }
}
