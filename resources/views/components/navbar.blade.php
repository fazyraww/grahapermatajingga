    <!-- Header Navigation -->
    @php
        $currentRoute = request()->path();
        $isProfilePage = in_array($currentRoute, ['tentang-kami', 'video', 'fasilitas']);
    @endphp
    <nav class="navbar navbar-expand-lg navbar-luxury fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Left Menu -->
            <div class="collapse navbar-collapse w-100" id="navbarNavLeft">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link {{ $currentRoute == '/' ? 'active' : '' }}" href="{{ url('/') }}">BERANDA</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ $isProfilePage ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">PROFIL</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('tentang-kami') }}">Tentang Kami</a></li>
                            <li><a class="dropdown-item" href="{{ url('video') }}">Video</a></li>
                            <li><a class="dropdown-item" href="{{ url('fasilitas') }}">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute == 'produk' ? 'active' : '' }}" href="{{ url('produk') }}">PRODUK</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute == 'lokasi' ? 'active' : '' }}" href="{{ url('lokasi') }}">LOKASI</a></li>
                </ul>
            </div>

            <!-- Center Logo -->
            <div class="navbar-brand-center text-center px-4">
                <a class="navbar-brand m-0" href="{{ url('/') }}">
                    <img src="{{ asset('static/image/logo.png') }}" alt="Logo" onerror="this.style.display='none'">
                    <div class="brand-text-sub">Graha Permata Jingga</div>
                </a>
            </div>

            <!-- Right Menu -->
            <div class="collapse navbar-collapse w-100" id="navbarNavRight">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ $currentRoute == 'berita' ? 'active' : '' }}" href="{{ url('berita') }}">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute == 'promo' ? 'active' : '' }}" href="{{ url('promo') }}">PROMO</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute == 'pemesanan' ? 'active' : '' }}" href="{{ url('pemesanan') }}">PEMESANAN</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute == 'hubungi-kami' ? 'active' : '' }}" href="{{ url('hubungi-kami') }}">HUBUNGI KAMI</a></li>
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
                <a class="nav-minimal {{ $currentRoute == '/' ? 'active' : '' }}" href="{{ url('/') }}">BERANDA</a>
                <a class="nav-minimal d-flex justify-content-between align-items-center {{ $isProfilePage ? 'active' : '' }}" href="#profileCollapse"
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
                <a class="nav-minimal {{ $currentRoute == 'produk' ? 'active' : '' }}" href="{{ url('produk') }}">PRODUK</a>
                <a class="nav-minimal {{ $currentRoute == 'lokasi' ? 'active' : '' }}" href="{{ url('lokasi') }}">LOKASI</a>
                <a class="nav-minimal {{ $currentRoute == 'berita' ? 'active' : '' }}" href="{{ url('berita') }}">BERITA</a>
                <a class="nav-minimal {{ $currentRoute == 'promo' ? 'active' : '' }}" href="{{ url('promo') }}">PROMO</a>
                <a class="nav-minimal {{ $currentRoute == 'pemesanan' ? 'active' : '' }}" href="{{ url('pemesanan') }}">PEMESANAN</a>
                <a class="nav-minimal {{ $currentRoute == 'hubungi-kami' ? 'active' : '' }}" href="{{ url('hubungi-kami') }}">HUBUNGI KAMI</a>
            </div>

            <div class="mt-auto pt-4">
                <p class="mb-0 fw-bold"
                    style="color: #E67E22; letter-spacing: 2px; font-size: 0.75rem; border-top: 2px solid #eee; padding-top: 15px;">
                    GRAHA PERMATA JINGGA</p>
            </div>
        </div>
    </div>
