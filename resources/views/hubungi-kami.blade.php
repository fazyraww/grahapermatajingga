@extends('layouts.master')

@section('title', 'Hubungi Kami - Graha Permata Jingga')

@push('styles')
    <style>
        .page-hero {
            height: 60vh;
            min-height: 400px;
            background-image: url('{{ $page->image ? (str_starts_with($page->image, "static/") ? asset($page->image) : asset("storage/" . $page->image)) : asset("static/image/footer_bg.png") }}');
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

        .contact-agent-card {
            margin-top: 28px;
            padding: 28px;
            border: 1px solid rgba(230, 126, 34, 0.16);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.06);
        }

        .contact-agent-label {
            color: #E67E22;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .contact-agent-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 14px;
            padding: 12px 22px;
            border-radius: 999px;
            background: #E67E22;
            color: #fff;
            font-size: 0.95rem;
            font-weight: 800;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .contact-agent-button:hover {
            background: #D35400;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(230, 126, 34, 0.25);
        }
    </style>
@endpush

@section('content')
    @php
        $pageContent = preg_replace(
            '/<p>\s*<strong>\s*WhatsApp Marketing:\s*<\/strong>\s*<br\s*\/?>.*?<\/p>/is',
            '',
            $page->content ?? ''
        );
    @endphp

    <!-- Hero -->
    <section class="page-hero">
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content text-white">
            <p class="mb-2" style="letter-spacing: 6px; font-size: 0.7rem; font-weight: 600; opacity: 0.8;"></p>
            <h1 class="display-2 fw-bold font-serif mb-0" style="letter-spacing: 10px;">HUBUNGI KAMI</h1>
        </div>
    </section>

    <!-- Page Content -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 reveal">
                    <div class="page-content-body" style="font-size: 1.1rem; line-height: 2; color: #444;">
                        {!! $pageContent !!}
                    </div>
                    <div class="contact-agent-card">
                        <div class="contact-agent-label">WhatsApp Marketing</div>
                        <p class="mb-0" style="color: #555; line-height: 1.8;">
                            Pilih salah satu agen marketing kami untuk konsultasi atau jadwal kunjungan lokasi.
                        </p>
                        <a href="#" class="contact-agent-button"
                            onclick="showContactPicker('saya ingin menghubungi tim Graha Permata Jingga.'); return false;">
                            <i class="fab fa-whatsapp"></i>
                            Pilih Agen WhatsApp
                        </a>
                    </div>
                </div>
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
