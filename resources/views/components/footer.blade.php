<!-- Premium Footer with Background Image -->
<footer class="position-relative" style="color: #fff; overflow: hidden; background: #0a0a0a;">
    <!-- Background Image + Overlay -->
    <div style="position: absolute; inset: 0; z-index: 0;">
        <img src="{{ asset('static/image/footer_bg.png') }}" alt=""
            style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        <div
            style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(10,10,10,0.95) 0%, rgba(15,15,15,0.9) 50%, rgba(0,0,0,0.97) 100%);">
        </div>
    </div>

    <!-- Footer Content -->
    <div class="container position-relative" style="z-index: 2; padding: 100px 0 0;">
        <!-- Top Section: Tagline -->
        <div class="text-center mb-5 pb-5 border-bottom" style="border-color: rgba(197,160,89,0.3) !important;">
            <img src="{{ asset('static/image/logo.png') }}" alt="Logo GPJ"
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
