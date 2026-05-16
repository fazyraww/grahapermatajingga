<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Popup;
use App\Models\Post;

class LandingController extends Controller
{
    public function index()
    {
        $beranda = Page::where('slug', 'beranda')->first()
            ?? new Page([
                'title' => 'Beranda',
                'slug' => 'beranda',
                'content' => 'Sebuah mahakarya kota modern masa depan yang menyatukan hunian eksklusif, fasilitas kelas dunia, dan lokasi paling strategis sebagai pusat pertumbuhan baru di Panarukan.',
                'extra_data' => [
                    'stats' => [
                        ['value' => '10', 'suffix' => '+ Ha', 'label' => 'Total Kawasan'],
                        ['value' => '40', 'suffix' => '%', 'label' => 'Area Hijau'],
                        ['value' => '12', 'suffix' => 'Menit', 'label' => 'Pusat Kota'],
                        ['value' => '24', 'suffix' => 'Jam', 'label' => 'Keamanan 24 Jam'],
                    ],
                    'hero_sliders' => [
                        ['image' => 'static/image/hero_entrance.png', 'subtitle' => 'Selamat Datang Di', 'title' => 'Graha Permata Jingga', 'description' => 'Harmoni Hunian Mewah dan Asri'],
                        ['image' => 'static/image/rumahsubsidi.png', 'subtitle' => 'Graha Permata Jingga', 'title' => 'Rumah Subsidi', 'description' => 'Hunian Modern yang Terjangkau untuk Semua'],
                        ['image' => 'static/image/rumahkomersial.png', 'subtitle' => 'Graha Permata Jingga', 'title' => 'Rumah Komersiil', 'description' => 'Desain Premium untuk Kenyamanan Tanpa Batas']
                    ],
                    'brochure_text' => 'DAPATKAN PENAWARAN EKSKLUSIF DARI KAMI'
                ]
            ]);

        return view('index', [
            'page' => $beranda,
            'clusters' => Cluster::where('is_active', true)->get(),
            'faqs' => Faq::orderBy('order')->get(),
            'posts' => Post::latest()->take(3)->get(),
            'popup' => Popup::where('is_active', true)->first(),
        ]);
    }
}
