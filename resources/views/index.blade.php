<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graha Permata Jingga - Hunian Mewah & Asri di Situbondo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" type="image/png" href="static/image/logo.png">
    <link rel="stylesheet" href="static/css/citra.css">

    <!-- Core Libraries (Moved to head for early init) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Fallback for reveal if JS fails */
        .reveal {
            opacity: 1 !important;
            transform: none !important;
        }

        /* Override primary color for GPJ */
        :root {
            --primary: #E67E22;
            --primary-dark: #D35400;
            --pj-orange: #E67E22;
        }

        /* Hero Swiper Slider */
        .hero-luxury-wrap,
        .hero-swiper {
            height: 100vh !important;
            min-height: 700px;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
        }

        .slide-content>* {
            opacity: 0;
            transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Distinct elegant starting positions */
        [data-effect="fade"] .slide-content>* {
            transform: translateY(40px);
        }

        [data-effect="slide"] .slide-content>* {
            transform: translateX(-50px);
        }

        [data-effect="flip"] .slide-content>* {
            transform: scale(0.9) translateY(20px);
        }

        .swiper-slide-active .slide-content>* {
            opacity: 1;
            transform: translate(0, 0) scale(1) !important;
        }

        /* Staggered Reveal Delays for a 'Premium Waterfall' effect */
        .swiper-slide-active .slide-content>*:nth-child(1) {
            transition-delay: 0.4s;
        }

        .swiper-slide-active .slide-content>*:nth-child(2) {
            transition-delay: 0.6s;
        }

        .swiper-slide-active .slide-content>*:nth-child(3) {
            transition-delay: 0.8s;
        }

        .badge-premium {
            display: inline-block;
            padding: 8px 25px;
            background: rgba(230, 126, 34, 0.2);
            backdrop-filter: blur(5px);
            border: 1px solid var(--primary);
            color: var(--primary);
            font-weight: 700;
            letter-spacing: 4px;
            font-size: 0.75rem;
            border-radius: 50px;
        }

        /* Swiper Navigation */
        .swiper-button-next,
        .swiper-button-prev {
            width: 60px !important;
            height: 60px !important;
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px);
            border-radius: 50%;
            color: #fff !important;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 1.5rem !important;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: var(--primary) !important;
            border-color: var(--primary);
        }

        /* Mobile Sidebar Menu */
        .nav-minimal {
            display: block;
            padding: 12px 0;
            text-decoration: none;
            color: #222;
            font-weight: 700;
            font-size: 1.15rem;
            transition: all 0.3s ease;
        }

        .nav-minimal:hover,
        .nav-minimal:active,
        .nav-minimal.active {
            color: #E67E22 !important;
        }

        transform: translateX(5px);
        }

        [aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
        }

        /* Navbar scrolled brand text fix */
        .navbar-luxury.scrolled .brand-text-sub {
            color: #222 !important;
        }

        /* Mobile responsive overrides */
        @media (max-width: 991.98px) {
            .navbar-luxury .container {
                position: relative;
                justify-content: flex-end !important;
                min-height: 50px;
            }

            .navbar-brand-center {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: auto !important;
                padding: 0 !important;
                margin: 0 !important;
                z-index: 1;
            }

            .brand-text-sub {
                font-size: 0.7rem !important;
                letter-spacing: 1px !important;
                white-space: nowrap !important;
            }

            .navbar-brand img,
            .navbar-brand-center img {
                height: 42px !important;
                margin-bottom: 3px !important;
            }

            .navbar-toggler {
                position: relative;
                z-index: 2;
                padding: 8px !important;
            }

            .navbar-toggler i {
                font-size: 1.25rem !important;
                color: #fff;
                transition: color 0.3s ease;
            }

            .navbar-luxury.scrolled .navbar-toggler i {
                color: #E67E22 !important;
            }
        }

        /* Stat counter styles */
        .stat-card {
            text-align: center;
            padding: 30px 20px;
        }

        .stat-number {
            font-family: var(--font-serif);
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
        }

        /* Hero Pagination Centering */
        .hero-pagination-wrap {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 99;
            width: auto;
        }

        .hero-pagination-inner {
            display: flex;
            align-items: center;
            gap: 15px;
            /* Kurangi gap */
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(15px);
            padding: 8px 25px;
            /* Kurangi padding */
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-num {
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.85rem;
            /* Kurangi ukuran font */
            font-weight: 800;
            letter-spacing: 1px;
            padding: 0;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-num.active {
            color: #fff;
            transform: scale(1.3);
            text-shadow: 0 0 15px var(--primary);
        }

        .hero-progress-track {
            width: 60px;
            /* Kurangi lebar garis */
            height: 2px;
            /* Kurangi tinggi garis */
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
            overflow: hidden;
        }

        .hero-progress-bar {
            height: 100%;
            background: #ffffff;
            width: 33.33%;
            /* Default start for slide 01 */
            transition: width 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Desktop Adjustment for Statistics */
        @media (min-width: 992px) {
            .stats-desktop-only {
                padding-left: 210px !important;
                margin-top: 120px !important;
            }
        }

        /* Close Button with White Circle Background (As Requested) */
        .btn-close-promo {
            width: 32px;
            height: 32px;
            background: #ffffff;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            padding: 0;
            color: #333;
        }

        .btn-close-promo i {
            font-size: 14px;
            font-weight: 900;
        }

        .btn-close-promo:hover {
            transform: scale(1.1) rotate(90deg);
            background: #f8f9fa;
            color: #E67E22;
        }

        /* Ensure standard close buttons also look premium */
        .btn-close {
            background-color: #ffffff !important;
            opacity: 1 !important;
            border-radius: 50% !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2) !important;
            background-size: 10px !important;
            border: 2px solid #fff !important;
            filter: none !important;
        }

        .promo-overlay-link {
            position: absolute;
            bottom: 14.5%;
            left: 30.5%;
            width: 39%;
            height: 10%;
            z-index: 10;
            cursor: pointer;
            border-radius: 15px;
            /* background: rgba(255,0,0,0.2); /* For debugging position */
        }

        @media (max-width: 767px) {
            .btn-close-promo {
                width: 22px;
                height: 22px;
            }

            .btn-close-promo i {
                font-size: 9px;
            }

            #promoModal .modal-dialog {
                margin: 4vh auto;
                max-width: 85% !important;
                display: flex;
                align-items: center;
                justify-content: center;
                /* Custom smooth transition */
                transition: transform 3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease-out !important;
            }

            /* Zoom-in effect when showing, zoom-out when hiding */
            #promoModal.fade:not(.show) .modal-dialog {
                transform: scale(0.8) translateY(20px) !important;
                opacity: 0 !important;
            }

            #promoModal.fade.show .modal-dialog {
                transform: scale(1) translateY(0) !important;
                opacity: 1 !important;
            }

            #promoModal .promo-img-container {
                display: inline-block;
                max-height: 75vh;
            }

            #promoModal img {
                max-height: 75vh !important;
                width: auto !important;
                max-width: 100%;
                display: block;
                object-fit: contain;
            }

            .promo-overlay-link {
                bottom: 4%;
                left: 10%;
                width: 80%;
                height: 8%;
            }
        }

        /* --- Masterpiece Product Cards --- */
        .masterpiece-card {
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
            overflow: hidden;
        }

        .card-img-container {
            overflow: hidden;
            position: relative;
        }

        .masterpiece-card .card-img-top {
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .feature-icon-box {
            width: 40px;
            height: 40px;
            background: #FFF3E0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #E67E22;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        /* --- FAQ Accordion Customization (Clean & Premium) --- */
        #faqGPJ .accordion-button:not(.collapsed),
        #faqGPJ .accordion-button:not(.collapsed):focus {
            color: #E67E22 !important;
            background-color: #ffffff !important;
            background: #ffffff !important;
            box-shadow: none !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
            /* Garis sedikit lebih tegas */
            outline: none !important;
            padding-bottom: 10px !important;
        }

        #faqGPJ .accordion-collapse,
        #faqGPJ .accordion-body {
            border: none !important;
            box-shadow: none !important;
            padding-top: 10px !important;
            color: #000000 !important;
            /* Warna teks jawaban hitam pekat */
        }

        #faqGPJ .accordion-button:focus {
            box-shadow: none !important;
            outline: none !important;
        }

        /* Hilangkan border biru default pada item */
        #faqGPJ .accordion-item {
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
            border-radius: 15px !important;
            margin-bottom: 15px !important;
            overflow: hidden;
        }

        #faqGPJ .accordion-button {
            border-radius: 15px !important;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <!-- Header Navigation -->
    <nav class="navbar navbar-expand-lg navbar-luxury fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Left Menu -->
            <div class="collapse navbar-collapse w-100" id="navbarNavLeft">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">BERANDA</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">PROFIL</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('tentang-kami') }}">Tentang Kami</a></li>
                            <li><a class="dropdown-item" href="{{ url('video') }}">Video</a></li>
                            <li><a class="dropdown-item" href="{{ url('fasilitas') }}">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('produk') }}">PRODUK</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('lokasi') }}">LOKASI</a></li>
                </ul>
            </div>

            <!-- Center Logo -->
            <div class="navbar-brand-center text-center px-4">
                <a class="navbar-brand m-0" href="#">
                    <img src="static/image/logo.png" alt="Logo" onerror="this.style.display='none'">
                    <div class="brand-text-sub">Graha Permata Jingga</div>

                </a>
            </div>

            <!-- Right Menu -->
            <div class="collapse navbar-collapse w-100" id="navbarNavRight">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('berita') }}">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('promo') }}">PROMO</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('pemesanan') }}">PEMESANAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('hubungi-kami') }}">HUBUNGI KAMI</a></li>
                </ul>
            </div>
            <!-- Mobile Toggle (Anchored Right) -->
            <button class="navbar-toggler d-lg-none border-0 p-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMobileMenu">
                <i class="fas fa-bars" style="font-size: 1.5rem;"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Offcanvas Menu (Masterpiece Minimalist) -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="offcanvasMobileMenu"
        style="background: #FFFFFF; width: 250px;">
        <!-- Top Close Button Row -->
        <div class="p-4 pb-0 d-flex justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                style="opacity: 0.6;"></button>
        </div>

        <div class="offcanvas-body p-4 pt-2 d-flex flex-column h-100">
            <!-- Menu Label Section (Aligned with Links) -->
            <div class="mb-4 mt-4 d-flex align-items-center">
                <div style="width: 3px; height: 16px; background: #E67E22; margin-right: 12px;"></div>
                <span class="fw-bold"
                    style="color: #E67E22; letter-spacing: 4px; font-size: 0.85rem; text-transform: uppercase;">MENU</span>
            </div>
            <div class="mobile-nav-list mb-auto">
                <a class="nav-minimal active" href="{{ url('/') }}">BERANDA</a>
                <a class="nav-minimal d-flex justify-content-between align-items-center" href="#profileCollapse"
                    data-bs-toggle="collapse" role="button" aria-expanded="false">
                    PROFIL
                    <i class="fas fa-chevron-down" style="font-size: 0.8rem; transition: transform 0.3s;"></i>
                </a>
                <div class="collapse ps-3 mb-2" id="profileCollapse">
                    <a class="nav-minimal py-1" style="font-size: 0.95rem; color: #444; font-weight: 500;"
                        href="{{ url('tentang-kami') }}">Tentang Kami</a>
                    <a class="nav-minimal py-1" style="font-size: 0.95rem; color: #444; font-weight: 500;"
                        href="{{ url('video') }}">Video</a>
                    <a class="nav-minimal py-1" style="font-size: 0.95rem; color: #444; font-weight: 500;"
                        href="{{ url('fasilitas') }}">Fasilitas</a>
                </div>
                <a class="nav-minimal" href="{{ url('produk') }}">PRODUK</a>
                <a class="nav-minimal" href="{{ url('lokasi') }}">LOKASI</a>
                <a class="nav-minimal" href="{{ url('berita') }}">BERITA</a>
                <a class="nav-minimal" href="{{ url('promo') }}">PROMO</a>
                <a class="nav-minimal" href="{{ url('pemesanan') }}">PEMESANAN</a>
                <a class="nav-minimal" href="{{ url('hubungi-kami') }}">HUBUNGI KAMI</a>
            </div>

            <div class="mt-auto pt-4">
                <p class="mb-0 fw-bold"
                    style="color: #E67E22; letter-spacing: 2px; font-size: 0.75rem; border-top: 2px solid #eee; padding-top: 15px;">
                    GRAHA PERMATA JINGGA</p>
            </div>
        </div>
    </div>



    <!-- Hero Slider (Slider Revolution Style) -->
    <div class="swiper hero-swiper hero-luxury-wrap">
        <div class="swiper-wrapper">
            @php
                $heroSliders = $page->extra_data['hero_sliders'] ?? [
                    ['image' => 'static/image/hero_entrance.png', 'subtitle' => 'Selamat Datang Di', 'title' => 'Graha Permata<br>Jingga', 'description' => 'Harmoni Hunian Mewah dan Asri'],
                    ['image' => 'static/image/rumahsubsidi.png', 'subtitle' => 'Graha Permata Jingga', 'title' => 'Rumah Subsidi', 'description' => 'Hunian Modern yang Terjangkau untuk Semua'],
                    ['image' => 'static/image/rumahkomersial.png', 'subtitle' => 'Graha Permata Jingga', 'title' => 'Rumah Komersiil', 'description' => 'Desain Premium untuk Kenyamanan Tanpa Batas']
                ];
                $effects = ['fade', 'slide', 'flip'];
            @endphp
            @foreach($heroSliders as $index => $slide)
            <div class="swiper-slide" data-effect="{{ $effects[$index % count($effects)] }}">
                <div class="hero-bg" style="background-image: url('{{ isset($slide['image']) ? (str_starts_with($slide['image'], 'static/') ? asset($slide['image']) : asset('storage/' . $slide['image'])) : asset('static/image/hero_entrance.png') }}');"></div>
                <div class="hero-overlay"></div>
                <div class="container h-100 position-relative d-flex align-items-center" style="z-index: 10;">
                    <div class="slide-content text-start" style="max-width: 800px;">
                        <span class="d-block mb-3 text-uppercase"
                            style="color: #fff; letter-spacing: 6px; font-size: 0.75rem; font-weight: 600;">{!! $slide['subtitle'] ?? 'Selamat Datang Di' !!}</span>
                        <h1 class="hero-title mb-0"
                            style="font-size: clamp(3rem, 8vw, 5.5rem); line-height: 1; color: #fff;">{!! $slide['title'] ?? 'Graha Permata Jingga' !!}</h1>
                        <p class="fs-2 font-serif italic mb-0 text-white" style="margin-top: 15px;">{!! $slide['description'] ?? 'Harmoni Hunian Mewah dan Asri' !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Custom Numbered Pagination -->
        <div class="hero-pagination-wrap">
            <div class="hero-pagination-inner">
                @foreach($heroSliders as $index => $slide)
                <button class="hero-num {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">0{{ $index + 1 }}</button>
                @endforeach
                <div class="hero-progress-track">
                    <div class="hero-progress-bar" style="width: {{ 100 / count($heroSliders) }}%"></div>
                </div>
            </div>
        </div>
    </div>



    <!-- Exclusive Offer Section -->
    <section class="py-5 bg-white">
        <div class="container text-center py-2">
            <h2 class="font-serif italic mb-5 reveal" style="font-size: 2rem; color: #333;">{{ $page->extra_data['brochure_text'] ?? 'DAPATKAN PENAWARAN EKSKLUSIF DARI KAMI' }}</h2>
            @php
                $brochureFile = isset($page->extra_data['brochure_file']) ? asset('storage/' . $page->extra_data['brochure_file']) : asset('static/image/brosur.png');
            @endphp
            <a href="{{ $brochureFile }}" download="Brosur-Graha-Permata-Jingga" class="btn reveal"
                style="background: #E67E22; color: #fff; border: none; letter-spacing: 2px; font-size: 0.8rem; font-weight: 700; padding: 15px 45px; border-radius: 0;">DOWNLOAD BROSUR</a>
        </div>
    </section>

    <!-- About / Concept Section (Who We Are Style) -->
    <section class="bg-white" id="concept" style="padding: 40px 0 100px 0;">
        <div class="container">
            <div class="row g-5 align-items-center justify-content-center">
                <!-- Left Content: Narrative -->
                <div class="col-lg-6 reveal pe-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <span class="subtitle"
                            style="color: #666; letter-spacing: 4px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; font-family: 'Montserrat', sans-serif;">KONSEP
                            KAMI</span>
                    </div>
                    <h2 class="title mt-3 mb-4"
                        style="font-size: clamp(1.5rem, 6vw, 2.5rem); line-height: 1.2; color: #222; font-weight: 800; font-family: 'Montserrat', sans-serif; letter-spacing: -1px;">
                        Graha Permata Jingga<br>
                        <span
                            style="color: #E67E22; font-style: normal; font-size: clamp(1.1rem, 4vw, 1.6rem); font-weight: 800; opacity: 0.9;">Harmoni
                            Hunian Mewah & Asri</span>
                    </h2>
                    <div class="lead fw-normal mb-0"
                        style="color: #444; font-size: 1.05rem; line-height: 1.9; font-family: 'Montserrat', sans-serif; font-weight: 400; max-width: 550px;">
                        {!! $page->content !!}
                    </div>
                </div>

                <!-- Right Content: Statistics Grid (Adjustable Position) -->
                <div class="col-lg-6 reveal stats-desktop-only">

                    <div id="stats-container">
                        <div class="row g-4 text-center text-lg-start">
                            @if(isset($page->extra_data['stats']) && is_array($page->extra_data['stats']))
                                @foreach($page->extra_data['stats'] as $stat)
                                <div class="col-6 mb-5">
                                    <div class="stat-box">
                                        <h3 class="fw-bold mb-0"
                                            style="color: #E67E22; font-size: 2.8rem; font-family: 'Montserrat', sans-serif; letter-spacing: -1px;">
                                            <span class="counter" data-target="{{ $stat['value'] ?? 0 }}">{{ $stat['value'] ?? 0 }}</span><span
                                                style="font-size: 1.2rem; vertical-align: top; margin-left: 5px; font-weight: 400;">
                                                {{ $stat['suffix'] ?? '' }}</span>
                                        </h3>
                                        <p class="text-uppercase fw-bold text-muted mt-2"
                                            style="font-size: 0.65rem; letter-spacing: 3px; font-family: 'Montserrat', sans-serif;">
                                            {{ $stat['label'] ?? '' }}</p>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cluster Products Section (Grade A Modern Cards) -->
    <section id="products" style="padding: 40px 0 80px 0; background: #f8f9fa;">
        <div class="container">
            <div class="section-header reveal text-center mb-5">
                <h2 class="fw-bold" style="color: #373737; letter-spacing: 2px; font-family: 'Montserrat', sans-serif;">
                    Pilihan Perumahan Kami</h2>
            </div>

            @php
                $featureIcons = [
                    'Kamar Tidur' => 'fa-bed',
                    'Kamar Mandi' => 'fa-shower',
                    'Ruang Tamu' => 'fa-couch',
                    'Carport' => 'fa-car',
                    'Taman' => 'fa-tree',
                    'Dapur' => 'fa-utensils',
                    'Kloset' => 'fa-toilet',
                    'Daya Listrik' => 'fa-bolt',
                    'Air' => 'fa-tint',
                    'Pagar' => 'fa-border-style'
                ];
            @endphp
            <div class="row g-4 justify-content-center">
                @foreach($clusters as $cluster)
                <div class="col-lg-6 col-12 reveal">
                    <div class="card masterpiece-card shadow-sm" style="border-radius: 25px; background: #fff; height: 100%;">
                        <div class="card-img-container p-2 p-md-3">
                            <img src="{{ $cluster->image ? (str_starts_with($cluster->image, 'static/') ? asset($cluster->image) : asset('storage/' . $cluster->image)) : asset('static/image/rumahkomersial.png') }}" class="card-img-top w-100" alt="{{ $cluster->name }}" style="border-radius: 20px; height: 350px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 ms-4 mt-4">
                                <span class="badge" style="background: rgba(230, 126, 34, 0.95); backdrop-filter: blur(10px); color: #fff; font-size: 0.65rem; letter-spacing: 2px; padding: 10px 20px; border-radius: 50px; box-shadow: 0 5px 15px rgba(230, 126, 34, 0.3); border: 1px solid rgba(255,255,255,0.2);">
                                    {{ $cluster->badge_text ?: ($loop->first ? 'PREMIUM UNIT' : ($loop->iteration == 2 ? 'SMART CHOICE' : 'NEW UNIT')) }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body px-4 pb-5">
                            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-end mb-4">
                                <div class="mb-3 mb-sm-0">
                                    <h3 class="fw-bold mb-1" style="font-size: 1.7rem; color: #222;">{{ $cluster->name }}</h3>
                                    @if($cluster->subtitle)
                                        <p class="fw-bold mb-0" style="font-size: 0.85rem; color: #222;">{{ $cluster->subtitle }}</p>
                                    @endif
                                </div>
                                <div class="text-sm-end">
                                    <span class="text-muted d-block mb-1" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 1px;">HARGA MULAI</span>
                                    <span class="fw-bold" style="font-size: 1.5rem; color: #E67E22;">Rp {{ number_format($cluster->price / 1000000) }} <span style="font-size: 0.9rem;">JT-an</span></span>
                                </div>
                            </div>
                            
                            <p class="text-muted mb-4" style="font-size: 0.9rem; line-height: 1.7;">{{ $cluster->description }}</p>

                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <div class="row g-2">
                                        @php
                                            $allFeatures = [];
                                            if ($cluster->bedrooms > 0) {
                                                $allFeatures[] = $cluster->bedrooms . ' Kamar Tidur';
                                            }
                                            if ($cluster->bathrooms > 0) {
                                                $allFeatures[] = $cluster->bathrooms . ' Kamar Mandi';
                                            }
                                            
                                            if (is_array($cluster->features)) {
                                                foreach($cluster->features as $f) {
                                                    // Avoid duplicates if user manually added Kamar Tidur/Mandi in tags
                                                    if (stripos($f, 'Kamar Tidur') === false && stripos($f, 'Kamar Mandi') === false) {
                                                        $allFeatures[] = $f;
                                                    }
                                                }
                                            }
                                        @endphp
                                        @foreach($allFeatures as $feature)
                                            @php
                                                $icon = 'fa-check-circle';
                                                foreach($featureIcons as $key => $val) {
                                                    if(stripos($feature, $key) !== false) {
                                                        $icon = $val;
                                                        break;
                                                    }
                                                }
                                            @endphp
                                            <div class="col-6">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="feature-icon-box" style="width: 28px; height: 28px; margin-right: 8px;">
                                                        <i class="fas {{ $icon }}" style="font-size: 0.65rem;"></i>
                                                    </div>
                                                    <span class="fw-bold text-dark" style="font-size: 0.72rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $feature }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="#" onclick="showContactPicker('saya tertarik dengan unit {{ $cluster->name }} di Graha Permata Jingga, mohon informasinya.'); return false;" class="btn text-white fw-bold py-3 w-100 shadow-sm" style="background: linear-gradient(135deg, #E67E22 0%, #D35400 100%); border-radius: 12px; font-size: 0.65rem; letter-spacing: 1px;"><i class="fab fa-whatsapp me-1"></i>HUBUNGI</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ url('pemesanan') }}" class="btn fw-bold py-3 w-100 shadow-sm" style="background: #222; color: #fff; border-radius: 12px; font-size: 0.65rem; letter-spacing: 1px;"><i class="fas fa-shopping-cart me-1"></i>PEMESANAN</a>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn w-100 py-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#denahModal{{ $cluster->id }}" style="border: 1px solid #eee; background: #f8f9fa; color: #444; border-radius: 12px; font-size: 0.65rem; font-weight: 700; letter-spacing: 1px;">LIHAT DENAH RUMAH</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn w-100 py-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#specModal{{ $cluster->id }}" style="border: 1px solid #eee; background: #f8f9fa; color: #444; border-radius: 12px; font-size: 0.65rem; font-weight: 700; letter-spacing: 1px;">DETAIL UNIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Masterplan Section Removed -->

    <!-- Location Section (Map) -->
    <section id="location" style="padding: 40px 0 80px 0; background: #fff;">
        <div class="container">
            <div class="section-header reveal text-center mb-5">
                <div class="d-flex justify-content-center align-items-center mb-1">
                    <span class="subtitle" style="color: #E67E22; letter-spacing: 5px; font-weight: 700;">LOKASI
                        STRATEGIS</span>
                </div>
                <h2 class="title font-serif mt-1" style="font-size: 2.5rem;">Graha Permata Jingga</h2>
                <p class="text-muted mt-1 mx-auto" style="max-width: 600px;">Kunjungi lokasi kami dan rasakan kemudahan
                    akses di pusat pertumbuhan baru Situbondo.</p>
            </div>

            <div class="reveal mt-5 position-relative">
                <!-- Map Container -->
                <div class="shadow-lg border-5 border-white overflow-hidden"
                    style="border-radius: 30px; height: 450px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1002.6120451471534!2d113.93944326955226!3d-7.702673670515444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sid!4v1778708259023!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Floating Info Card -->
                <div class="location-card d-none d-lg-block shadow-xl p-4 bg-white position-absolute"
                    style="top: 30px; left: 30px; width: 320px; border-radius: 20px; z-index: 10;">
                    <h5 class="fw-bold mb-3" style="color: #222;">Akses Strategis</h5>
                    <div class="mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box me-3 text-center" style="width: 35px; color: #E67E22;"><i
                                    class="fas fa-map-marker-alt"></i></div>
                            <span class="small text-muted">
                                Jl. TembusPanarukan, Kilensari Timur Praktik drg. Ema Medina</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-box me-3 text-center" style="width: 35px; color: #E67E22;"><i
                                    class="fas fa-clock"></i></div>
                            <span class="small text text-muted">12 Menit ke Pusat Kota</span>
                        </div>
                        <div class="d-flex align-items-center mb-0">
                            <div class="icon-box me-3 text-center" style="width: 35px; color: #E67E22;"><i
                                    class="fas fa-hospital"></i></div>
                            <span class="small text-muted">Dekat dengan Gor Panarukan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" style="padding: 40px 0 100px 0; background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center mb-5 reveal">
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <span
                                style="color: #E67E22; letter-spacing: 5px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">Graha
                                Permata Jingga</span>
                        </div>
                        <h2 class="font-serif mt-2" style="font-size: 2.5rem; color: #222;">Pertanyaan yang Sering
                            Diajukan</h2>
                    </div>

                    <div class="accordion reveal" id="faqGPJ">
                        @foreach($faqs as $index => $faq)
                        <div class="accordion-item border-0 mb-3 shadow-sm"
                            style="border-radius: 15px; overflow: hidden; transition: all 0.3s ease;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold faq-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq{{ $faq->id }}"
                                    style="padding: 20px 40px; font-size: 0.95rem; background: #fff;">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="faq{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqGPJ">
                                <div class="accordion-body text-muted"
                                    style="line-height: 1.8; padding: 0 40px 25px 45px; font-size: 0.85rem;">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Premium Footer with Background Image -->
    <footer class="position-relative" style="color: #fff; overflow: hidden; background: #0a0a0a;">
        <!-- Background Image + Overlay -->
        <div style="position: absolute; inset: 0; z-index: 0;">
            <img src="static/image/footer_bg.png" alt=""
                style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
            <div
                style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(10,10,10,0.95) 0%, rgba(15,15,15,0.9) 50%, rgba(0,0,0,0.97) 100%);">
            </div>
        </div>

        <!-- Footer Content -->
        <div class="container position-relative" style="z-index: 2; padding: 100px 0 0;">
            <!-- Top Section: Tagline -->
            <div class="text-center mb-5 pb-5 border-bottom" style="border-color: rgba(197,160,89,0.3) !important;">
                <img src="static/image/logo.png" alt="Logo GPJ"
                    style="height: 70px; filter: brightness(0) invert(1); margin-bottom: 20px;"
                    onerror="this.style.display='none'">
                <h2 class="font-serif" style="font-size: 2.5rem; letter-spacing: 6px; font-weight: 300;">GRAHA PERMATA
                    JINGGA</h2>
                <p style="color: #E67E22; letter-spacing: 8px; font-size: 0.75rem; font-weight: 600; margin-top: 10px;">
                    Harmoni Hunian Mewah & Asri</p>
            </div>

            <!-- Main Footer Grid -->
            <div class="row g-5 pb-5">
                <!-- About -->
                <div class="col-lg-4 text-center text-lg-start">
                    <h5 class="font-serif mb-4 pb-2"
                        style="border-bottom: 2px solid #E67E22; display: inline-block; padding-bottom: 10px;">
                        Tentang Kami</h5>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem; line-height: 1.9;">
                        Graha Permata Jingga hadir sebagai ikon hunian modern terbaru di Situbondo. Kami berkomitmen
                        menyajikan keselarasan antara kemewahan arsitektur dan keasrian lingkungan, menciptakan standar
                        baru bagi gaya hidup keluarga masa kini.
                    </p>
                    <div class="d-flex gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <a href="#" class="d-flex align-items-center justify-content-center"
                            style="color: #fff; text-decoration: none; transition: all 0.3s; font-size: 1.2rem;"
                            onmouseover="this.style.color='#E67E22'" onmouseout="this.style.color='#fff'"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="" class="d-flex align-items-center justify-content-center"
                            style="color: #fff; text-decoration: none; transition: all 0.3s; font-size: 1.2rem;"
                            onmouseover="this.style.color='#E67E22'" onmouseout="this.style.color='#fff'"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"
                            style="color: #fff; text-decoration: none; transition: all 0.3s; font-size: 1.2rem;"
                            onmouseover="this.style.color='#E67E22'" onmouseout="this.style.color='#fff'"><i
                                class="fab fa-youtube"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"
                            style="color: #fff; text-decoration: none; transition: all 0.3s; font-size: 1.2rem;"
                            onmouseover="this.style.color='#E67E22'" onmouseout="this.style.color='#fff'"><i
                                class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 px-lg-5 text-center text-lg-start">
                    <h5 class="font-serif mb-4 pb-2"
                        style="border-bottom: 2px solid #E67E22; display: inline-block; padding-bottom: 10px;">
                        Hubungi Kami</h5>
                    <div class="d-flex flex-column align-items-center align-items-lg-start mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt mt-1 me-3" style="color: #E67E22;"></i>
                            <p style="color: #ffffff; font-size: 0.9rem; margin: 0;">Jl. Tembus Kilensari,
                                Situbondo 68351</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center align-items-lg-start mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-phone-alt mt-1 me-3" style="color: #E67E22;"></i>
                            <div>
                                <p class="fw-bold mb-0" style="font-size: 0.95rem; color: #ffffff;">082148779639</p>
                                <p class="fw-bold mb-0" style="font-size: 0.95rem; color: #ffffff;">08124951887</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center align-items-lg-start mb-3">
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <div class="mb-2">
                                <i class="fab fa-whatsapp me-2" style="color: #25D366; font-size: 1.2rem;"></i>
                                <span
                                    style="color: #E67E22; font-size: 0.7rem; letter-spacing: 3px; font-weight: 700;">WHATSAPP
                                    MARKETING</span>
                            </div>
                            <a href="#" onclick="showContactPicker('saya ingin menghubungi tim Graha Permata Jingga.'); return false;" class="text-white fw-bold text-decoration-none" style="font-size:1.1rem;">Pilih Agen &rsaquo;</a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 text-center text-lg-start">
                    <h5 class="font-serif mb-4 pb-2"
                        style="border-bottom: 2px solid #E67E22; display: inline-block; padding-bottom: 10px;">
                        Menu</h5>
                    <ul class="list-unstyled" style="line-height: 2.5;">
                        <li><a href="{{ url('tentang-kami') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='#E67E22';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Tentang
                                Kami</a></li>
                        <li><a href="{{ url('produk') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='#E67E22';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Produk</a>
                        </li>
                        <li><a href="{{ url('lokasi') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='#E67E22';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Lokasi</a>
                        </li>
                        <li><a href="{{ url('fasilitas') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='#E67E22';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Fasilitas</a>
                        </li>
                        <li><a href="{{ url('berita') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='#E67E22';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Berita</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 text-center text-lg-start">
                    <h5 class="font-serif mb-4 pb-2"
                        style="border-bottom: 2px solid #E67E22; display: inline-block; padding-bottom: 10px;">
                        Lainnya</h5>
                    <ul class="list-unstyled" style="line-height: 2.5;">
                        <li><a href="{{ url('promo') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='var(--primary)';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Promo</a>
                        </li>
                        <li><a href="{{ url('pemesanan') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='var(--primary)';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Pemesanan</a>
                        </li>
                        <li><a href="#" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='#E67E22';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Kebijakan
                                Privasi</a></li>
                        <li><a href="{{ url('hubungi-kami') }}" class="text-decoration-none"
                                style="color: rgba(255,255,255,0.6); transition: all 0.3s;"
                                onmouseover="this.style.color='#E67E22';this.style.paddingLeft='5px'"
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Hubungi
                                Kami</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="text-center py-4" style="border-top: 1px solid rgba(230,126,34,0.15);">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.8rem; margin: 0; letter-spacing: 1px;">
                    &copy; 2026 <span style="color: #E67E22; font-weight: 700;">Graha Permata Jingga</span> – All rights
                    reserved. |
                    <a href="#" class="text-decoration-none" style="color: rgba(255,255,255,0.4);"
                        onmouseover="this.style.color='#E67E22'"
                        onmouseout="this.style.color='rgba(255,255,255,0.4)'">Syarat & Ketentuan</a> |
                    <a href="#" class="text-decoration-none" style="color: rgba(255,255,255,0.4);"
                        onmouseover="this.style.color='#E67E22'"
                        onmouseout="this.style.color='rgba(255,255,255,0.4)'">Kebijakan Privasi</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Specification Modals -->
    @foreach($clusters as $cluster)
    <!-- Modal {{ $cluster->name }} -->
    <div class="modal fade" id="specModal{{ $cluster->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: 25px; overflow: hidden;">
                <div class="modal-header bg-dark text-white border-0 py-3">
                    <h5 class="modal-title font-serif ms-3">Spesifikasi Unit {{ $cluster->name }}</h5>
                    <button type="button" class="btn-close btn-close-white me-2" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle mb-0">
                            <tbody>
                                @php
                                    $specIcons = [
                                        'Luas' => 'fa-expand-arrows-alt',
                                        'Pondasi' => 'fa-hammer',
                                        'Dinding' => 'fa-border-all',
                                        'Lantai' => 'fa-th',
                                        'Atap' => 'fa-home',
                                        'Genteng' => 'fa-layer-group',
                                        'Kusen' => 'fa-door-open',
                                        'Sanitair' => 'fa-toilet',
                                        'Listrik' => 'fa-bolt',
                                        'Air' => 'fa-tint',
                                    ];

                                    $specs = is_array($cluster->specifications) ? $cluster->specifications : [];
                                    
                                    // Prepend Luas Unit if building_area/land_area are set and not already in specs
                                    $hasLuas = false;
                                    foreach($specs as $k => $v) {
                                        if(stripos($k, 'Luas') !== false) { $hasLuas = true; break; }
                                    }
                                    
                                    if(!$hasLuas && ($cluster->building_area || $cluster->land_area)) {
                                        $luasText = '';
                                        if($cluster->building_area) $luasText .= 'LB ' . $cluster->building_area . ' m²';
                                        if($cluster->building_area && $cluster->land_area) $luasText .= ' | ';
                                        if($cluster->land_area) $luasText .= 'LT ' . $cluster->land_area . ' m²';
                                        
                                        $specs = array_merge(['Luas Unit' => $luasText], $specs);
                                    }
                                @endphp
                                @if(!empty($specs))
                                    @foreach($specs as $key => $value)
                                    @php
                                        $icon = 'fa-check-circle';
                                        foreach($specIcons as $sKey => $sVal) {
                                            if(stripos($key, $sKey) !== false) {
                                                $icon = $sVal;
                                                break;
                                            }
                                        }
                                    @endphp
                                    <tr>
                                        <td><i class="fas {{ $icon }} me-3" style="color: #E67E22;"></i>{{ $key }}</td>
                                        <td class="fw-bold text-end">{{ $value }}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr><td colspan="2" class="text-center text-muted py-4"><i>Data spesifikasi belum ditambahkan</i></td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="d-grid mt-4">
                        <a href="#" onclick="showContactPicker('saya ingin bertanya detail spesifikasi unit {{ $cluster->name }}.'); return false;" class="btn text-white py-3 fw-bold" style="background: #E67E22; border-radius: 12px;"><i class='fab fa-whatsapp me-2'></i>TANYA DETAIL VIA WHATSAPP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Denah Modals -->
    @foreach($clusters as $cluster)
    <div class="modal fade" id="denahModal{{ $cluster->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-body p-0 text-center position-relative">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>

                    @if($cluster->denah_image)
                        @php
                            $images = is_array($cluster->denah_image) ? $cluster->denah_image : [$cluster->denah_image];
                        @endphp
                        
                        @if(count($images) > 1)
                            <div id="carouselDenah{{ $cluster->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach($images as $idx => $img)
                                        <button type="button" data-bs-target="#carouselDenah{{ $cluster->id }}" data-bs-slide-to="{{ $idx }}" class="{{ $idx == 0 ? 'active' : '' }}"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner rounded-4 shadow-lg bg-white">
                                    @foreach($images as $idx => $img)
                                        <div class="carousel-item {{ $idx == 0 ? 'active' : '' }}">
                                            <img src="{{ str_starts_with($img, 'static/') ? asset($img) : asset('storage/' . $img) }}" class="d-block w-100 img-fluid" alt="Denah {{ $cluster->name }} {{ $idx + 1 }}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDenah{{ $cluster->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselDenah{{ $cluster->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                                <div class="bg-white p-3 rounded-bottom-4">
                                    <h5 class="fw-bold mb-0">Denah {{ $cluster->name }}</h5>
                                </div>
                            </div>
                        @else
                            <div class="rounded-4 shadow-lg bg-white overflow-hidden">
                                <img src="{{ str_starts_with($images[0], 'static/') ? asset($images[0]) : asset('storage/' . $images[0]) }}" class="d-block w-100 img-fluid" alt="Denah {{ $cluster->name }}">
                                <div class="bg-white p-3">
                                    <h5 class="fw-bold mb-0">Denah {{ $cluster->name }}</h5>
                                </div>
                            </div>
                        @endif
                    @elseif($loop->first)
                    <div id="carouselDenah{{ $cluster->id }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-4 shadow-lg bg-white">
                            <div class="carousel-item active">
                                <img src="static/image/denah1.png" class="d-block w-100 img-fluid" alt="Denah 1">
                                <div class="bg-white p-3">
                                    <h5 class="fw-bold mb-0">Denah Komersil Lantai Dasar</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="static/image/denah0.png" class="d-block w-100 img-fluid" alt="Denah 0">
                                <div class="bg-white p-3">
                                    <h5 class="fw-bold mb-0">Denah Komersil - Lantai 2</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="static/image/denah0.5.png" class="d-block w-100 img-fluid" alt="Denah 0.5">
                                <div class="bg-white p-3">
                                    <h5 class="fw-bold mb-0">Denah Komersil - Lantai 2</h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDenah{{ $cluster->id }}"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDenah{{ $cluster->id }}"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @else
                    <div class="rounded-4 shadow-lg bg-white overflow-hidden">
                        <img src="static/image/denah2.png" class="d-block w-100 img-fluid" alt="Denah {{ $cluster->name }}">
                        <div class="bg-white p-3">
                            <h5 class="fw-bold mb-0">Denah {{ $cluster->name }}</h5>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Promo Modal -->
    @if($popup)
    <div class="modal fade" id="promoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 710px;">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-body p-0 position-relative text-center">
                    <!-- Close Button Outside/Above Image Area -->
                    <div class="d-flex justify-content-end mb-2">
                        <button type="button" class="btn-close-promo" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="promo-img-container position-relative overflow-hidden rounded-4 shadow-2xl mx-auto">
                        <picture>
                            @if($popup->image_mobile)
                            <!-- Image for Mobile -->
                            <source srcset="{{ asset('storage/' . $popup->image_mobile) }}" media="(max-width: 767px)">
                            @endif
                            <!-- Default Image for Desktop -->
                            <img src="{{ $popup->image ? asset('storage/' . $popup->image) : asset('static/image/awal.png') }}" class="img-fluid w-100" alt="{{ $popup->name }}"
                                onerror="this.src='https://placehold.co/500x700?text=Promo+Graha+Permata+Jingga'">
                        </picture>

                        <!-- Invisible Clickable Area for 'BOOKING SEKARANG!' button -->
                        <a href="{{ $popup->link ?: 'https://wa.me/6285234008860' }}" target="_blank" class="promo-overlay-link"
                            title="Booking Sekarang via WhatsApp"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Navbar Scroll
        window.addEventListener('scroll', function () {
            var nav = document.querySelector('.navbar-luxury');
            if (nav) {
                if (window.scrollY > 100) { nav.classList.add('scrolled'); }
                else { nav.classList.remove('scrolled'); }
            }
        });

        // === SLIDER PAGINATION LOGIC ===
        var nums = document.querySelectorAll('.hero-num');
        var progressBar = document.querySelector('.hero-progress-bar');

        function updateNums(idx) {
            if(!nums.length) return;
            nums.forEach((num, i) => {
                if (i === idx) num.classList.add('active');
                else num.classList.remove('active');
            });
        }

        function updateProgress(idx) {
            if (!progressBar || !nums.length) return;
            var width = ((idx + 1) / nums.length) * 100;
            progressBar.style.width = width + '%';
        }

        // === SWIPER INIT ===
        document.addEventListener('DOMContentLoaded', function() {
            var heroSwiper = new Swiper('.hero-swiper', {
                loop: true,
                speed: 1000,
                effect: 'fade',
                fadeEffect: { crossFade: true },
                autoplay: { delay: 6000, disableOnInteraction: false },
                on: {
                    init: function () {
                        updateNums(0);
                        updateProgress(0);
                    },
                    slideChangeTransitionStart: function () {
                        updateNums(this.realIndex);
                        updateProgress(this.realIndex);
                    }
                }
            });

            // Numbered pagination click
            nums.forEach(btn => {
                btn.addEventListener('click', function () {
                    var idx = parseInt(this.getAttribute('data-index'));
                    heroSwiper.slideToLoop(idx);
                });
            });

            // GSAP Revelations
            gsap.utils.toArray('.reveal').forEach(function (elem) {
                gsap.fromTo(elem,
                    { opacity: 0, y: 30 },
                    {
                        opacity: 1, y: 0, duration: 1.2, ease: "power3.out",
                        scrollTrigger: { trigger: elem, start: "top 85%" }
                    }
                );
            });

            // Show Promo Modal
            @if($popup)
            try {
                var myModal = new bootstrap.Modal(document.getElementById('promoModal'));
                setTimeout(function () { myModal.show(); }, 1500);
            } catch (e) { console.warn("Modal error:", e); }
            @endif

            // Stats Counter
            const statsSection = document.querySelector('#stats-container');
            if (statsSection) {
                const animateCounter = (counter) => {
                    const target = +counter.getAttribute('data-target');
                    let count = 0;
                    const increment = target / 30;
                    const update = () => {
                        count += increment;
                        if (count < target) {
                            counter.innerText = Math.ceil(count);
                            requestAnimationFrame(update);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    update();
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.querySelectorAll('.counter').forEach(el => animateCounter(el));
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.3 });
                observer.observe(statsSection);
            }
        });

        // Zoom Logic
        function zoomDenah(imgId, increment) {
            const img = document.getElementById(imgId);
            if(!img) return;
            let scale = parseFloat(img.getAttribute('data-scale') || 1) + increment;
            if (scale < 1) scale = 1;
            if (scale > 3) scale = 3;
            img.setAttribute('data-scale', scale);
            img.style.transform = `scale(${scale})`;
            img.parentElement.style.cursor = scale > 1 ? 'move' : 'zoom-in';
        }
        function resetZoom(imgId) {
            const img = document.getElementById(imgId);
            if(!img) return;
            img.setAttribute('data-scale', 1);
            img.style.transform = 'scale(1)';
        }
    </script>

    <!-- WhatsApp Floating -->
    <div class="wa-container">
        <div class="wa-bubble" id="waBubble">Halo, ada yang bisa <strong id="waAgentName">...</strong> bantu?</div>
        <a href="#" class="wa-float" id="waFloatBtn" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <script>
        (function() {
            var agents = [
                { name: "H. Sudarso",  phone: "6282148779639" },
                { name: "Dhirta",      phone: "6285234008860" },
                { name: "Hj. Siyani", phone: "6281336499700" },
                { name: "drg. Ema",   phone: "628124951887"  }
            ];
            var agent = agents[Math.floor(Math.random() * agents.length)];
            var msg = encodeURIComponent("Halo " + agent.name + ", saya ingin bertanya informasi mengenai Graha Permata Jingga.");
            var waAgent = document.getElementById("waAgentName");
            var waBtn = document.getElementById("waFloatBtn");
            if(waAgent) waAgent.textContent = agent.name;
            if(waBtn) waBtn.href = "https://wa.me/" + agent.phone + "?text=" + msg;
        })();
    </script>

    <!-- ===== CONTACT PICKER MODAL ===== -->
    <div id="contactPickerModal" style="display:none; position:fixed; inset:0; z-index:99999; background:rgba(0,0,0,0.6); backdrop-filter:blur(6px); align-items:center; justify-content:center;">
        <div style="background:#fff; border-radius:28px; padding:32px 28px; max-width:400px; width:92%; position:relative; box-shadow:0 30px 60px rgba(0,0,0,0.3);" id="cpInner">
            <button onclick="closeContactPicker()" style="position:absolute; top:16px; right:18px; background:rgba(0,0,0,0.06); border:none; width:32px; height:32px; border-radius:50%; font-size:1rem; cursor:pointer; color:#555; display:flex; align-items:center; justify-content:center;">&times;</button>
            <div style="text-align:center; margin-bottom:20px;">
                <div style="width:54px;height:54px;background:linear-gradient(135deg,#E67E22,#D35400);border-radius:18px;display:inline-flex;align-items:center;justify-content:center;color:#fff;font-size:1.6rem;margin-bottom:12px;box-shadow:0 8px 20px rgba(230,126,34,0.3);"><i class="fab fa-whatsapp"></i></div>
                <h5 style="font-weight:700; margin:0 0 4px; color:#222; font-size:1.1rem;">Hubungi Tim Marketing</h5>
                <p style="font-size:0.8rem; color:#999; margin:0;" id="cpSubMsg">Pilih agen kami yang tersedia</p>
            </div>
            <div id="cpList" style="display:flex; flex-direction:column; gap:10px;"></div>
            <p style="text-align:center; font-size:0.72rem; color:#bbb; margin:16px 0 0;">Jika satu agen tidak merespon, coba hubungi agen lainnya.</p>
        </div>
    </div>
    <script>
    var _cpAgents = [
        { name: "H. Sudarso",  phone: "6282148779639" },
        { name: "Dhirta",      phone: "6285234008860" },
        { name: "Hj. Siyani", phone: "6281336499700" },
        { name: "drg. Ema",   phone: "628124951887"  }
    ];
    function showContactPicker(msg) {
        var modal = document.getElementById("contactPickerModal");
        var list  = document.getElementById("cpList");
        if(!modal || !list) return;
        document.getElementById("cpSubMsg").textContent = "Pilih agen kami yang tersedia";
        list.innerHTML = "";
        _cpAgents.forEach(function(a) {
            var text = encodeURIComponent("Halo " + a.name + ", " + (msg || "saya ingin bertanya informasi mengenai Graha Permata Jingga."));
            var card = document.createElement("a");
            card.href = "https://wa.me/" + a.phone + "?text=" + text;
            card.target = "_blank";
            card.style.cssText = "display:flex;align-items:center;gap:14px;padding:13px 16px;border-radius:18px;border:1.5px solid rgba(230,126,34,0.12);text-decoration:none;transition:all 0.25s ease;background:#fff;";
            card.innerHTML = "<div style='width:42px;height:42px;background:linear-gradient(135deg,#E67E22,#D35400);border-radius:14px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.1rem;flex-shrink:0;box-shadow:0 4px 12px rgba(230,126,34,0.25);'><i class='fab fa-whatsapp'></i></div>" +
                "<div style='flex:1;'><div style='font-weight:700;color:#222;font-size:0.95rem;'>" + a.name + "</div></div>" +
                "<i class='fas fa-chevron-right' style='color:#ddd;font-size:0.75rem;'></i>";
            card.addEventListener("mouseover", function(){ this.style.background="#FFF3E0"; this.style.borderColor="#E67E22"; this.style.transform="translateX(4px)"; });
            card.addEventListener("mouseout",  function(){ this.style.background="#fff";    this.style.borderColor="rgba(230,126,34,0.12)"; this.style.transform=""; });
            list.appendChild(card);
        });
        modal.style.display = "flex";
    }
    function closeContactPicker() {
        var modal = document.getElementById("contactPickerModal");
        if(modal) modal.style.display = "none";
    }
    window.addEventListener('click', function(e) {
        var modal = document.getElementById("contactPickerModal");
        if (e.target === modal) closeContactPicker();
    });
    </script>
    <!-- ===== END CONTACT PICKER ===== -->

</body>
</html>
