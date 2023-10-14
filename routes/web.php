<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DetailArtikelController;
use App\Http\Controllers\ImageInContentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'artikels' => Artikel::all(),
    ]);
});


Route::get('/jasa-pembuatan-website-murah', function () {return view('jasa-pembuatan-website-murah');});
Route::get('/kebijakan-privasi', function () {return view('privacy-policy');});
Route::get('/ketentuan-kami', function () {return view('ketentuan-kami');});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/login', function () {return view('auth.login');})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('admin/view-artikel', [ArtikelController:: class, 'index'])->name('admin.view-artikel');
Route::get('admin/create-artikel', [ArtikelController:: class, 'create'])->name('admin.create-artikel');
Route::post('admin/create-artikel', [ArtikelController:: class, 'store'])->name('admin.create-artikel');
Route::get('admin/edit-artikel/{id}', [ArtikelController::class, 'edit'])->name('admin.edit-artikel');
Route::put('admin/edit-artikel/{id}', [ArtikelController::class, 'update'])->name('admin.edit-artikel');
Route::delete('admin/view-artikel/{id}', [ArtikelController::class, 'delete'])->name('admin.view-artikel');

Route::get('admin/view-category', [CategoryController:: class, 'index'])->name('admin.view-category');
Route::get('admin/create-category', [CategoryController:: class, 'create'])->name('admin.create-category');
Route::post('admin/create-category', [CategoryController::class, 'store'])->name('admin.create-category');
Route::get('/admin/view-category/{id}', [CategoryController::class, 'edit'])->name('admin.view-category');
Route::put('/admin/view-category/{id}', [CategoryController::class, 'update'])->name('admin.view-category');
Route::delete('/admin/view-category/{id}', [CategoryController::class, 'delete'])->name(('admin.view-category'));

Route::get('admin/view-image-content', [ImageInContentController::class, 'index'])->name('admin.view-image-content');
Route::get('admin/view-image-contnet', [ImageInContentController::class, 'create'])->name('admin.view-image-content');
Route::delete('/admin/view-image-content-delete/{id}', [ImageInContentController::class, 'delete'])->name(('admin.view-image-content-delete'));
Route::post('admin/view-image-content', [ImageInContentController::class, 'store'])->name('admin.view-image-content');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/detail-artikel', [DetailArtikelController::class, 'show'])->name('detail-artikel');
Route::get('/{slug}', [DetailArtikelController::class, 'show_artikel'])->name('detail_artikel');