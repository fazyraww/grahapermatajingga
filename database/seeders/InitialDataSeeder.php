<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Facility;
use App\Models\Video;

class InitialDataSeeder extends Seeder
{
    public function run(): void
    {
        // Pages
        Page::create([
            'title' => 'Tentang Kami',
            'slug' => 'tentang-kami',
            'content' => '<h3>Graha Permata Jingga</h3><p>Hunian eksklusif dengan konsep modern di lokasi strategis Situbondo.</p>',
            'image' => 'static/image/hero.png',
        ]);

        Page::create([
            'title' => 'Lokasi',
            'slug' => 'lokasi',
            'content' => '<h3>Lokasi Strategis</h3><p>Terletak di pusat kota dengan akses mudah ke berbagai fasilitas umum.</p>',
            'image' => 'static/image/lokasi.png',
        ]);

        Page::create([
            'title' => 'Pemesanan',
            'slug' => 'pemesanan',
            'content' => '<h3>Mudah Miliki Hunian Impian</h3><p>Hubungi tim marketing kami untuk mendapatkan penawaran terbaik.</p>',
        ]);

        Page::create([
            'title' => 'Hubungi Kami',
            'slug' => 'hubungi-kami',
            'content' => '<h3>Layanan Pelanggan</h3><p>Kami siap membantu Anda kapan saja.</p>',
        ]);

        // Facilities
        $facilities = [
            ['title' => 'Club House', 'icon' => 'fas fa-home', 'image' => 'static/image/fasilitas1.png'],
            ['title' => 'Masjid', 'icon' => 'fas fa-mosque', 'image' => 'static/image/fasilitas2.png'],
            ['title' => 'Taman Hijau', 'icon' => 'fas fa-leaf', 'image' => 'static/image/fasilitas3.png'],
            ['title' => 'Area Bermain', 'icon' => 'fas fa-child', 'image' => 'static/image/fasilitas4.png'],
        ];

        foreach ($facilities as $index => $f) {
            Facility::create([
                'title' => $f['title'],
                'icon' => $f['icon'],
                'image' => $f['image'],
                'description' => 'Fasilitas premium untuk kenyamanan penghuni.',
                'order' => $index,
            ]);
        }

        // Videos
        Video::create([
            'title' => 'Profil Graha Permata Jingga',
            'url' => 'https://www.tiktok.com/@grahapj.situbondo',
            'type' => 'tiktok',
            'order' => 0,
        ]);
    }
}
