@extends('layouts.master')

@section('title', 'Galeri Video - Graha Permata Jingga')

@push('styles')
    <style>
        .page-hero {
            height: 60vh;
            min-height: 400px;
            background-image: url('{{ asset("static/image/fasilitas1.png") }}');
            background-size: cover;
            background-position: center 30%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            margin-top: 0;
        }

        .page-hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .page-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
    </style>
@endpush

@section('content')
    <!-- Hero -->
    <section class="page-hero">
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content text-white">
            <p class="mb-2" style="letter-spacing: 6px; font-size: 0.7rem; font-weight: 600; opacity: 0.8;"></p>
            <h1 class="display-2 fw-bold font-serif mb-0" style="letter-spacing: 10px;">VIDEO</h1>
        </div>
    </section>

    <!-- Video Grid -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                @forelse($videos as $video)
                    <div class="col-lg-6 reveal">
                        <div class="video-card shadow-sm" style="border-radius: 25px; overflow: hidden; background: #fff;">
                            @if($video->type === 'tiktok')
                                @php
                                    // Extract video ID from URL like https://www.tiktok.com/@user/video/1234567890
                                    preg_match('/video\/(\d+)/', $video->url, $matches);
                                    $videoId = $matches[1] ?? null;
                                @endphp
                                @if($videoId)
                                <div style="position: relative; padding-bottom: 100%; height: 0; overflow: hidden;">
                                    <iframe src="https://www.tiktok.com/embed/v2/{{ $videoId }}"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="d-flex align-items-center justify-content-center" style="height: 300px; background: #f8f9fa;">
                                    <div class="text-center">
                                        <i class="fab fa-tiktok mb-3" style="font-size: 2.5rem; color: #E67E22;"></i>
                                        <p class="text-muted mb-2">Kunjungi TikTok kami</p>
                                        <a href="{{ $video->url }}" target="_blank" class="btn btn-sm" style="background: #E67E22; color: #fff; border-radius: 25px; padding: 8px 24px;">
                                            <i class="fab fa-tiktok me-2"></i>Buka TikTok
                                        </a>
                                    </div>
                                </div>
                                @endif
                            @else
                                <div class="ratio ratio-16x9">
                                    <iframe src="{{ str_replace('watch?v=', 'embed/', $video->url) }}" allowfullscreen></iframe>
                                </div>
                            @endif
                            <div class="p-4">
                                <h5 class="fw-bold mb-0" style="color: #222;">{{ $video->title }}</h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-video" style="font-size: 3rem; color: #ccc;"></i>
                        <p class="text-muted mt-3">Belum ada video yang ditambahkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        gsap.utils.toArray('.reveal').forEach(function (elem) {
            gsap.fromTo(elem,
                { opacity: 0, y: 40 },
                {
                    opacity: 1, y: 0, duration: 1, ease: "power2.out",
                    scrollTrigger: { trigger: elem, start: "top 85%", toggleActions: "play none none none" }
                }
            );
        });
    </script>
@endpush