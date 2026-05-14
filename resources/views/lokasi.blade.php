@extends('layouts.master')

@section('title', 'Lokasi - Graha Permata Jingga')

@push('styles')
    <style>
        .page-hero {
            height: 60vh;
            min-height: 400px;
            background-image: url('{{ $page->image ? (str_starts_with($page->image, "static/") ? asset($page->image) : asset("storage/" . $page->image)) : asset("static/image/hero_entrance.png") }}');
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
            <h1 class="display-2 fw-bold font-serif mb-0" style="letter-spacing: 10px;">LOKASI</h1>
        </div>
    </section>

    @push('styles')
    <style>
        /* Simple checkmark styling for any lists the user might create */
        .page-content-body ul {
            list-style: none !important;
            padding: 0 !important;
        }
        .page-content-body ul li {
            position: relative;
            padding-left: 30px !important;
            margin-bottom: 10px !important;
        }
        .page-content-body ul li::before {
            content: "✅";
            position: absolute;
            left: 0;
            font-size: 1rem;
        }
        .proximity-line {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
    </style>
    @endpush

    <!-- Page Content -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="{{ $page->google_maps ? 'col-lg-6' : 'col-lg-12' }} reveal">
                    <div class="page-content-body" style="font-size: 1.1rem; line-height: 1.8; color: #444;">
                        {!! $page->content !!}
                    </div>
                </div>

                @if($page->google_maps)
                <div class="col-lg-6 reveal mt-4 mt-lg-0">
                    <div class="rounded-4 overflow-hidden shadow-lg border" style="height: 450px; width: 100%;">
                        {!! $page->google_maps !!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const content = document.querySelector('.page-content-body');
        if (!content) return;

        // Use a simpler approach: find text nodes and replace patterns with emoji + text
        function walk(node) {
            let child = node.firstChild;
            while (child) {
                if (child.nodeType === 3) { // Text node
                    let text = child.nodeValue;
                    
                    if (text.match(/\d+\s+menit\s+ke/i)) {
                        const patterns = [
                            { regex: /(\d+\s+menit\s+ke\s+sekolah)/gi, emoji: '🎓' },
                            { regex: /(\d+\s+menit\s+ke\s+gor|stadion[^<.\n]*)/gi, emoji: '🏃' },
                            { regex: /(\d+\s+menit\s+ke\s+pasar|mall[^<.\n]*)/gi, emoji: '🛒' },
                            { regex: /(\d+\s+menit\s+ke\s+rs|rumah sakit[^<.\n]*)/gi, emoji: '🏥' },
                            { regex: /(\d+\s+menit\s+ke\s+alun-alun|pusat kota[^<.\n]*)/gi, emoji: '🌳' },
                            { regex: /(\d+\s+menit\s+ke\s+[^<.\n]*)/gi, emoji: '📍' }
                        ];

                        let matched = false;
                        let newHtml = text;
                        
                        for (let p of patterns) {
                            if (text.match(p.regex)) {
                                newHtml = text.replace(p.regex, p.emoji + ' $1');
                                matched = true;
                                break; // Match only once with the best emoji
                            }
                        }

                        if (matched) {
                            const span = document.createElement('span');
                            span.innerHTML = newHtml;
                            node.replaceChild(span, child);
                            child = span;
                        }
                    }
                } else if (child.nodeType === 1) { // Element node
                    walk(child);
                }
                child = child.nextSibling;
            }
        }
        walk(content);
    });

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