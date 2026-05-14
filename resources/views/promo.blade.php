<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Spesial - Graha Permata Jingga</title>
    <link rel="icon" type="image/png" href="static/image/logo.png">

    <!-- Google Font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Outfit:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/citra.css">


    <style>
        :root {
            --primary: #E67E22;
            --primary-dark: #D35400;
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Plus Jakarta Sans', sans-serif;
        }

        .navbar-luxury.scrolled .brand-text-sub {
            color: #222 !important;
        }

        /* Hero Section */
        .news-hero {
            height: 60vh;
            min-height: 400px;
            background-image: url('static/image/gambarpromo.png');
            background-size: cover;
            background-position: center 30%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            margin-top: 0;
        }

        .news-hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .news-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .news-hero-title {
            font-family: var(--font-serif);
            font-size: clamp(3.5rem, 8vw, 6rem);
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            margin: 0;
            animation: fadeInUp 1.2s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile sidebar */
        .nav-minimal {
            display: block;
            padding: 12px 0;
            text-decoration: none;
            color: #222;
            font-weight: 700;
            font-size: 1.15rem;
            transition: all 0.3s ease;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .nav-minimal:hover,
        .nav-minimal:active {
            color: #E67E22 !important;
            transform: translateX(5px);
        }

        [aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
        }

        /* Mobile responsive */
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
                display: block !important;
                font-weight: 700 !important;
                margin-top: 2px !important;
            }

            .navbar-brand img {
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
                opacity: 0.9;
                color: #fff;
                transition: color 0.3s ease;
            }

            .navbar-luxury.scrolled .navbar-toggler i {
                color: #E67E22 !important;
            }
        }

        /* Promo Card Styling */
        .promo-card {
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.4s ease;
        }

        .promo-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        }

        .promo-img-wrap {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .promo-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .promo-card:hover .promo-img-wrap img {
            transform: scale(1.1);
        }

        .promo-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #E67E22;
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 1px;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.3);
        }

        .promo-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .promo-title {
            font-family: var(--font-serif);
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
            color: #222;
        }

        .promo-text {
            font-size: 0.85rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 25px;
            text-align: left;
        }

        .btn-promo {
            background: #E67E22;
            color: #fff !important;
            padding: 12px 20px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.85rem;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: auto;
            border: none;
        }

        .btn-promo:hover {
            background: #D35400;
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.3);
        }

        .umroh-highlight {
            background: linear-gradient(135deg, rgba(230, 126, 34, 0.05) 0%, rgba(230, 126, 34, 0.15) 100%);
            border-left: 5px solid #E67E22;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
        }

        @media (max-width: 991.98px) {
            .promo-card .col-md-5 {
                height: 300px;
            }
            .promo-card img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
            .promo-card .p-5 {
                padding: 30px !important;
            }
            .promo-badge-big {
                top: 25px;
                right: -60px;
                font-size: 0.7rem;
                padding: 8px 60px;
            }
        }

        /* Designer Touch: Mobile Typography & Spacing Fixes */
        @media (max-width: 767.98px) {
            .news-hero-title {
                font-size: 3rem !important;
                letter-spacing: 5px !important;
            }
            .news-hero-content h1 {
                font-size: 3rem !important;
                letter-spacing: 5px !important;
            }
            .promo-card h2 {
                font-size: 1.6rem !important;
                line-height: 1.3 !important;
            }
            .umroh-highlight {
                padding: 20px 15px !important;
                margin-bottom: 30px !important;
                border-left: none !important;
                border-top: 4px solid #E67E22 !important;
                flex-direction: column !important;
                text-align: center !important;
                background: #fff !important;
                box-shadow: 0 5px 15px rgba(230,126,34,0.1) !important;
            }
            .umroh-highlight .me-3 {
                margin-right: 0 !important;
                margin-bottom: 12px !important;
                font-size: 2.5rem !important;
            }
            .promo-card .p-5 {
                padding: 30px 20px !important;
            }
            .btn {
                width: 100% !important;
                padding: 15px !important;
                font-size: 0.9rem !important;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-luxury fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="collapse navbar-collapse w-100" id="navbarNavLeft">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">BERANDA</a></li>
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

            <div class="navbar-brand-center text-center px-4">
                <a class="navbar-brand m-0" href="{{ url('/') }}">
                    <img src="static/image/logo.png" alt="Logo">
                    <div class="brand-text-sub text-white"
                        style="font-size: 0.7rem; font-weight: 700; letter-spacing: 2px;">Graha Permata Jingga</div>
                </a>
            </div>

            <div class="collapse navbar-collapse w-100" id="navbarNavRight">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('berita') }}">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('promo') }}">PROMO</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('pemesanan') }}">PEMESANAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('hubungi-kami') }}">HUBUNGI KAMI</a></li>
                </ul>
            </div>

            <button class="navbar-toggler d-lg-none border-0 p-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMobileMenu">
                <i class="fas fa-bars" style="font-size: 1.5rem; color: #fff;"></i>
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
                <a class="nav-minimal" href="{{ url('/') }}">BERANDA</a>
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
                <a class="nav-minimal active" href="{{ url('promo') }}">PROMO</a>
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

    <!-- Hero -->
    <section class="news-hero">
        <div class="news-hero-overlay"></div>
        <div class="news-hero-content text-white">
            <h1 class="display-2 fw-bold font-serif mb-0" style="letter-spacing: 10px;">PROMO</h1>
        </div>
    </section>

    <!-- Promo Content -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row g-4 justify-content-center">
                        @forelse($promos as $promo)
                        <div class="col-lg-4 col-md-6 reveal">
                            <div class="promo-card">
                                <div class="promo-img-wrap">
                                    <div class="promo-badge">SPECIAL PROMO</div>
                                    <img src="{{ $promo->image ? (str_starts_with($promo->image, 'static/') ? asset($promo->image) : asset('storage/' . $promo->image)) : asset('static/image/promo.png') }}" alt="{{ $promo->title }}">
                                </div>
                                <div class="promo-content">
                                    <h6 class="text-warning fw-bold mb-2" style="letter-spacing: 2px; font-size: 0.7rem;">LIMITED OFFER</h6>
                                    <h3 class="promo-title">{{ $promo->title }}</h3>
                                    <div class="promo-text">
                                        {!! $promo->content !!}
                                    </div>
                                    <a href="#" onclick="showContactPicker('saya ingin mengambil promo {{ $promo->title }}.'); return false;" class="btn-promo">
                                        <i class='fab fa-whatsapp me-2'></i>AMBIL PROMO
                                    </a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">Belum ada promo aktif saat ini.</p>
                        </div>
                        @endforelse
                    </div>

                    <div class="d-flex justify-content-center mt-5 pagination-container">
                        {{ $promos->links() }}
                    </div>

                    <style>
                        /* Minimalist Pagination Styling */
                        .pagination {
                            gap: 15px;
                            margin-top: 40px;
                            border: none;
                        }
                        .page-item .page-link {
                            border-radius: 14px !important;
                            color: #444;
                            border: 1px solid rgba(0,0,0,0.06);
                            padding: 10px 20px;
                            font-weight: 600;
                            font-size: 0.85rem;
                            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
                            background: #fff;
                            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            min-width: 45px;
                        }
                        .page-item.active .page-link {
                            background: #E67E22 !important;
                            border-color: #E67E22 !important;
                            color: #fff !important;
                            box-shadow: 0 10px 25px rgba(230,126,34,0.25);
                            transform: translateY(-3px);
                        }
                        .page-item.disabled .page-link {
                            background: #fdfdfd;
                            color: #ddd;
                            border-color: rgba(0,0,0,0.02);
                            box-shadow: none;
                        }
                        .page-link:hover:not(.active) {
                            background: #fff;
                            color: #E67E22;
                            border-color: #E67E22;
                            transform: translateY(-5px);
                            box-shadow: 0 12px 20px rgba(0,0,0,0.08);
                        }
                        /* Hide the 'Showing results' part ONLY in pagination areas */
                        .pagination-container nav div.d-none.flex-sm-fill.d-sm-flex.flex-column div.small.text-muted {
                            display: none !important;
                        }
                        .pagination-container nav div.d-none.flex-sm-fill.d-sm-flex.flex-column {
                            gap: 0 !important;
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
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
                            onmouseover="this.style.color='#E67E22'"
                            onmouseout="this.style.color='#fff'"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="" class="d-flex align-items-center justify-content-center"
                            style="color: #fff; text-decoration: none; transition: all 0.3s; font-size: 1.2rem;"
                            onmouseover="this.style.color='#E67E22'"
                            onmouseout="this.style.color='#fff'"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"
                            style="color: #fff; text-decoration: none; transition: all 0.3s; font-size: 1.2rem;"
                            onmouseover="this.style.color='#E67E22'"
                            onmouseout="this.style.color='#fff'"><i
                                class="fab fa-youtube"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"
                            style="color: #fff; text-decoration: none; transition: all 0.3s; font-size: 1.2rem;"
                            onmouseover="this.style.color='#E67E22'"
                            onmouseout="this.style.color='#fff'"><i
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
                                onmouseout="this.style.color='rgba(255,255,255,0.6)';this.style.paddingLeft='0'">Pemesanan</a></li>
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
                    &copy; 2026 <span style="color: #E67E22; font-weight: 700;">Graha Permata Jingga</span> â€“ All rights
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

    <!-- WA -->
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
            document.getElementById("waAgentName").textContent = agent.name;
            document.getElementById("waFloatBtn").href = "https://wa.me/" + agent.phone + "?text=" + msg;
        })();
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        window.addEventListener('scroll', function () {
            var nav = document.querySelector('.navbar-luxury');
            if (window.scrollY > 100) { nav.classList.add('scrolled'); }
            else { nav.classList.remove('scrolled'); }
        });

        // GSAP Revelations for Promo Cards
        gsap.utils.toArray('.reveal').forEach(function (elem) {
            gsap.fromTo(elem,
                { opacity: 0, y: 40 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: elem,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                }
            );
        });
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
    <style>
        @keyframes cpSlideUp { from { transform:translateY(40px); opacity:0; } to { transform:translateY(0); opacity:1; } }
        #cpInner { animation: cpSlideUp 0.35s cubic-bezier(0.175,0.885,0.32,1.275); }
    </style>
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
        document.getElementById("contactPickerModal").style.display = "none";
    }
    document.getElementById("contactPickerModal").addEventListener("click", function(e) {
        if (e.target === this) closeContactPicker();
    });
    </script>
    <!-- ===== END CONTACT PICKER ===== -->
</body>

</html>
