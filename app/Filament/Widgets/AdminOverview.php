<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Cluster;
use App\Models\Faq;
use App\Models\Facility;
use App\Models\Page;
use App\Models\Popup;
use App\Models\Post;
use App\Models\Video;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminOverview extends StatsOverviewWidget
{
    protected ?string $heading = 'Ringkasan Operasi';

    protected ?string $description = 'Status konten, unit, media, dan campaign yang siap tampil di website Graha Permata Jingga.';

    protected int | array | null $columns = [
        'default' => 1,
        'md' => 2,
        'xl' => 4,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Halaman CMS', Page::count())
                ->description('Beranda dan halaman informasi utama')
                ->descriptionIcon(Heroicon::DocumentText)
                ->color('primary')
                ->url(route('filament.admin.resources.pages.index')),

            Stat::make('Kategori Produk', Category::count())
                ->description('Pengelompokan produk perumahan')
                ->descriptionIcon(Heroicon::RectangleStack)
                ->color('info')
                ->url(route('filament.admin.resources.categories.index')),

            Stat::make('Unit Aktif', Cluster::where('is_active', true)->count())
                ->description(Cluster::count() . ' total unit tersimpan')
                ->descriptionIcon(Heroicon::HomeModern)
                ->color('success')
                ->url(route('filament.admin.resources.clusters.index')),

            Stat::make('Fasilitas Aktif', Facility::where('is_active', true)->count())
                ->description('Fasilitas yang ditampilkan ke pengunjung')
                ->descriptionIcon(Heroicon::Sparkles)
                ->color('success')
                ->url(route('filament.admin.resources.facilities.index')),

            Stat::make('Berita & Promo', Post::count())
                ->description(Post::where('type', 'promo')->count() . ' promo dan ' . Post::where('type', 'news')->count() . ' berita')
                ->descriptionIcon(Heroicon::Newspaper)
                ->color('info')
                ->url(route('filament.admin.resources.posts.index')),

            Stat::make('FAQ', Faq::count())
                ->description('Pertanyaan umum untuk calon pembeli')
                ->descriptionIcon(Heroicon::QuestionMarkCircle)
                ->color('warning')
                ->url(route('filament.admin.resources.faqs.index')),

            Stat::make('Video Aktif', Video::where('is_active', true)->count())
                ->description(Video::count() . ' total video tersimpan')
                ->descriptionIcon(Heroicon::VideoCamera)
                ->color('danger')
                ->url(route('filament.admin.resources.videos.index')),

            Stat::make('Popup Aktif', Popup::where('is_active', true)->count())
                ->description(Popup::count() . ' popup promo tersimpan')
                ->descriptionIcon(Heroicon::Bell)
                ->color(Popup::where('is_active', true)->exists() ? 'warning' : 'info')
                ->url(route('filament.admin.resources.popups.index')),
        ];
    }
}
