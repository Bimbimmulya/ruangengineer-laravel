<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        // Sesuaikan dengan logika pencarian sesuai kebutuhan Anda.
        $results = Artikel::where('judul', 'like', "%$searchTerm%")->get();

        return response()->json($results);
    }
}
