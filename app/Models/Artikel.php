<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['gambar', 'alt_image','title', 'deskripsi', 'slug', 'judul', 'body', 'author' ,'categories_id']; 

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
