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
        Page::updateOrCreate(
            ['slug' => 'beranda'],
            [
                'title' => 'Beranda',
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
                        ['image' => 'static/image/rumahkomersial.png', 'subtitle' => 'Graha Permata Jingga', 'title' => 'Rumah Komersiil', 'description' => 'Desain Premium untuk Kenyamanan Tanpa Batas'],
                    ],
                    'brochure_text' => 'DAPATKAN PENAWARAN EKSKLUSIF DARI KAMI',
                ],
            ],
        );

        Page::updateOrCreate(['slug' => 'tentang-kami'], [
            'title' => 'Tentang Kami',
            'content' => '<h3>Graha Permata Jingga</h3><p>Hunian eksklusif dengan konsep modern di lokasi strategis Situbondo.</p>',
            'image' => 'static/image/hero.png',
        ]);

        Page::updateOrCreate(['slug' => 'lokasi'], [
            'title' => 'Lokasi',
            'content' => '<h3>Lokasi Strategis</h3><p>Terletak di pusat kota dengan akses mudah ke berbagai fasilitas umum.</p>',
            'image' => 'static/image/lokasi.png',
        ]);

        Page::updateOrCreate(['slug' => 'pemesanan'], [
            'title' => 'Pemesanan',
            'content' => '<h3>Mudah Miliki Hunian Impian</h3><p>Hubungi tim marketing kami untuk mendapatkan penawaran terbaik.</p>',
        ]);

        Page::updateOrCreate(['slug' => 'hubungi-kami'], [
            'title' => 'Hubungi Kami',
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
            Facility::updateOrCreate(['title' => $f['title']], [
                'title' => $f['title'],
                'icon' => $f['icon'],
                'image' => $f['image'],
                'description' => 'Fasilitas premium untuk kenyamanan penghuni.',
                'order' => $index,
            ]);
        }

        // Videos
        Video::updateOrCreate(['title' => 'Profil Graha Permata Jingga'], [
            'title' => 'Profil Graha Permata Jingga',
            'url' => 'https://www.tiktok.com/@grahapj.situbondo',
            'type' => 'tiktok',
            'order' => 0,
        ]);
    }
}
