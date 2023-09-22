<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function __contstruct()
    {
        $this->middleware('auth');
    }       

    public function index()
    {

        $artikel = Artikel::latest()->simplePaginate(10)->withQueryString();
        return view('admin.view-artikel', compact('artikel'));
    }

    public function create()
    {
        $categori = Category::select('id', 'name_category')->get();
        return view('admin.create-artikel', compact('categori'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'mimes:jpeg,bmp,png,jpg,webp',
            'title' => 'required',
            'deskripsi' => 'required',
            'slug' => 'required',
            'judul' => 'required',
            'body' => 'required',
            'author' => 'required',
            'categories_id' => 'required'

        ]);

        if (empty($request->file('gambar'))) {
            Artikel::create([
                // 'gambar' => $request->gambar,
                'alt_image' => $request->alt_image,
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'slug' => $request->slug,
                'judul' => $request->judul,
                'body' => $request->body,
                'author' => $request->author,
                'categories_id' => $request->categories_id,
            ]);
        } else {
            Artikel::create([
                'gambar' => $request->file('gambar')->store('uploads'),
                'alt_image' => $request->alt_image,
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'slug' => $request->slug,
                'judul' => $request->judul,
                'body' => $request->body,
                'author' => $request->author,
                'categories_id' => $request->categories_id,
            ]);
        }

        return back()->with('success', 'Artikel hass been created');
    }

    public function edit ($id)
    {

        $categori = Category::select('id', 'name_category')->get();
        $artikel = Artikel::find($id);
        return view('admin.edit-artikel', compact('categori', 'artikel'));
    }

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'gambar' => 'mimes:jpeg,bmp,png,jpg,webp',
            'title' => 'required',
            'deskripsi' => 'required',
            'slug' => 'required',
            'judul' => 'required',
            'body' => 'required',
            'author' => 'required',
            'categories_id' => 'required'
        ]);

        $artikel = Artikel::find($id);

        // memperbarui kolom yang ada dalam request
        if (!empty($request->title)) {
            $artikel->title = $request->title;
        }

        if (!empty($request->deskripsi)){
            $artikel->deskripsi = $request->deskripsi;
        }

        if (!empty($request->slug)) {
            $artikel->slug = $request->slug;
        }

        if (!empty($request->judul)) {
            $artikel->judul = $request->judul;
        }

        if (!empty($request->body)) {
            $artikel->body = $request->body;
        }

        if (!empty($request->author)) {
            $artikel->author = $request->author;
        }

        if (!empty($request->categories_id)) {
            $artikel->categories_id = $request->categories_id;
        }

        // Cek apakah ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada dan simpan gambar baru
            Storage::delete($artikel->gambar);
            $artikel->gambar = $request->file('gambar')->store('uploads');
        }

        $artikel->save();

        return redirect('admin/view-artikel')->with('success', 'Artikel Updated Successfully');
    }

    public function delete($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return redirect()->back();
        }
        Storage::delete($artikel->gambar);
        $artikel->delete();

        return back()->with('success', 'Artikel Deleted Successfully');
    }
}
