<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;
use App\Models\Cluster;

class GpjDataSeeder extends Seeder
{
    public function run(): void
    {
        // Data FAQ
        $faqs = [
            [
                'question' => 'Apakah sertifikat rumah di Graha Permata Jingga sudah SHM?',
                'answer' => 'Ya, seluruh unit rumah di Graha Permata Jingga sudah berstatus Sertifikat Hak Milik (SHM) yang akan diserahkan kepada pembeli setelah pelunasan.',
                'order' => 1,
            ],
            [
                'question' => 'Bagaimana sistem keamanan di perumahan ini?',
                'answer' => 'Kami menerapkan sistem keamanan One Gate System dengan penjagaan security 24 jam penuh dan dilengkapi pengawasan CCTV di berbagai titik strategis kawasan.',
                'order' => 2,
            ],
            [
                'question' => 'Apakah ada fasilitas KPR?',
                'answer' => 'Tentu. Kami telah bekerja sama dengan berbagai bank ternama (BNI, BRI, Mandiri, BTN, dll) untuk memfasilitasi proses KPR Anda dengan bunga yang kompetitif dan proses yang mudah.',
                'order' => 3,
            ],
            [
                'question' => 'Kapan estimasi serah terima bangunan?',
                'answer' => 'Serah terima unit rumah dilakukan dalam waktu 6-8 bulan setelah proses pembayaran uang muka (DP) selesai atau setelah akad kredit KPR disetujui oleh pihak Bank.',
                'order' => 4,
            ],
            [
                'question' => 'Apakah boleh custom denah bagian dalam rumah?',
                'answer' => 'Tentu saja boleh. Kami memberikan fleksibilitas kepada konsumen untuk merubah layout atau denah bagian dalam rumah (non-struktural) secara gratis selama masa pembangunan awal.',
                'order' => 5,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::firstOrCreate(['question' => $faq['question']], $faq);
        }

        // Data Cluster
        $clusters = [
            [
                'name' => 'Rumah Komersil',
                'slug' => 'rumah-komersil',
                'description' => 'Desain premium dengan spesifikasi bahan bangunan terbaik untuk kenyamanan keluarga Anda.',
                'price' => 250000000,
                'image' => 'static/image/komersil1.png',
                'features' => json_encode(['Desain Modern', 'Material Premium', 'Lokasi Strategis']),
                'is_active' => true,
            ],
            [
                'name' => 'Rumah Subsidi',
                'slug' => 'rumah-subsidi',
                'description' => 'Hunian nyaman, modern, dan terjangkau. Solusi terbaik untuk keluarga muda.',
                'price' => 162000000,
                'image' => 'static/image/subsidi1.png',
                'features' => json_encode(['Cicilan Ringan', 'Bebas Banjir', 'Akses Mudah']),
                'is_active' => true,
            ]
        ];

        foreach ($clusters as $cluster) {
            Cluster::firstOrCreate(['slug' => $cluster['slug']], $cluster);
        }
    }
}
