<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/tentang-kami', function () { 
    $page = \App\Models\Page::where('slug', 'tentang-kami')->first();
    if (!$page) {
        $page = new \App\Models\Page(['title' => 'Tentang Kami', 'slug' => 'tentang-kami', 'content' => '<p>Halaman ini belum diisi. Silakan isi melalui panel admin.</p>']);
    }
    return view('tentang-kami', compact('page')); 
});
Route::get('/video', function () { 
    $videos = \App\Models\Video::where('is_active', true)->orderBy('order')->get();
    return view('video', compact('videos')); 
});
Route::get('/fasilitas', function () { 
    $facilities = \App\Models\Facility::where('is_active', true)->orderBy('order')->get();
    return view('fasilitas', compact('facilities')); 
});
Route::get('/produk', function () { 
    $clusters = \App\Models\Cluster::where('is_active', true)->get();
    return view('produk', compact('clusters')); 
});
Route::get('/lokasi', function () { 
    $page = \App\Models\Page::where('slug', 'lokasi')->first();
    if (!$page) {
        $page = new \App\Models\Page(['title' => 'Lokasi', 'slug' => 'lokasi', 'content' => '<p>Halaman ini belum diisi. Silakan isi melalui panel admin.</p>']);
    }
    return view('lokasi', compact('page')); 
});
Route::get('/berita', function () { 
    $posts = \App\Models\Post::where('type', 'news')->orderBy('published_at', 'desc')->paginate(9);
    return view('berita', compact('posts')); 
});
Route::get('/promo', function () { 
    $promos = \App\Models\Post::where('type', 'promo')->orderBy('published_at', 'desc')->paginate(9);
    return view('promo', compact('promos')); 
});
Route::get('/pemesanan', function () { 
    $page = \App\Models\Page::where('slug', 'pemesanan')->first();
    if (!$page) {
        $page = new \App\Models\Page(['title' => 'Pemesanan', 'slug' => 'pemesanan', 'content' => '<p>Halaman ini belum diisi. Silakan isi melalui panel admin.</p>']);
    }
    return view('pemesanan', compact('page')); 
});
Route::get('/hubungi-kami', function () { 
    $page = \App\Models\Page::where('slug', 'hubungi-kami')->first();
    if (!$page) {
        $page = new \App\Models\Page(['title' => 'Hubungi Kami', 'slug' => 'hubungi-kami', 'content' => '<p>Halaman ini belum diisi. Silakan isi melalui panel admin.</p>']);
    }
    return view('hubungi-kami', compact('page')); 
});
