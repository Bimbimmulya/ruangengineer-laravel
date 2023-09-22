<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageContent;

class ImageInContentController extends Controller
{
    public function __cunstruct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $imageContent = ImageContent::latest()->simplePaginate(10)->withQueryString();
        return view('admin.view-image-content', compact('imageContent'));
    }

    public function create()
    {
        return view('admin.create-image-content');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image_content' => 'mimes:jpeg,bmp,png,jpg,webp',
        ]);

        // Menggunakan metode create dengan nilai 'image_content' yang sesuai
        ImageContent::create([
            'image_content' => $request->file('image_content')->store('imageContent')
        ]);

        return back()->with('success', 'Artikel telah berhasil dibuat');
    }


    public function edit()
    {
        return view('admin.edit-image-content');
    }

    public function update()
    {

    }

    public function delete($id)
    {
        $imageContent = ImageContent::find($id);
        if (!$imageContent) {
            return redirect()->back();
        }
        $imageContent->delete();

        return back()->with('success', 'Image has been deleted successfully');
    }
}
