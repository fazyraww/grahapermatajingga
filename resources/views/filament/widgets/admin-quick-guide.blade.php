<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Control Center Konten
        </x-slot>

        <x-slot name="description">
            Akses cepat untuk menjaga halaman, produk, promo, dan media tetap rapi sebelum tampil ke website.
        </x-slot>

        <div class="gpj-guide-grid">
            <a href="{{ route('filament.admin.resources.pages.index') }}" class="gpj-guide-card"
                style="--gpj-card-accent: #b48142">
                <div class="gpj-guide-card-top">
                    <span>
                        <span class="gpj-guide-kicker">CMS</span>
                        <span class="gpj-guide-title">Halaman Website</span>
                    </span>
                    <span class="gpj-guide-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <path d="M14 2v6h6" />
                            <path d="M8 13h8" />
                            <path d="M8 17h5" />
                        </svg>
                    </span>
                </div>
                <p>Edit Beranda, Tentang Kami, Lokasi, Pemesanan, dan Hubungi Kami.</p>
                <span class="gpj-guide-meta">
                    Kelola halaman
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </span>
            </a>

            <a href="{{ route('filament.admin.resources.clusters.index') }}" class="gpj-guide-card"
                style="--gpj-card-accent: #256c86">
                <div class="gpj-guide-card-top">
                    <span>
                        <span class="gpj-guide-kicker">Inventory</span>
                        <span class="gpj-guide-title">Produk / Unit</span>
                    </span>
                    <span class="gpj-guide-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M3 10.5 12 3l9 7.5" />
                            <path d="M5 10v10h14V10" />
                            <path d="M9 20v-6h6v6" />
                        </svg>
                    </span>
                </div>
                <p>Tambah unit, harga, fitur, foto utama, dan denah rumah.</p>
                <span class="gpj-guide-meta">
                    Update unit
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </span>
            </a>

            <a href="{{ route('filament.admin.resources.posts.index') }}" class="gpj-guide-card"
                style="--gpj-card-accent: #18785f">
                <div class="gpj-guide-card-top">
                    <span>
                        <span class="gpj-guide-kicker">Marketing</span>
                        <span class="gpj-guide-title">Berita & Promo</span>
                    </span>
                    <span class="gpj-guide-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20" />
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                            <path d="M9 7h7" />
                            <path d="M9 11h7" />
                        </svg>
                    </span>
                </div>
                <p>Kelola artikel berita dan promo yang tampil di website.</p>
                <span class="gpj-guide-meta">
                    Publikasi konten
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </span>
            </a>

            <a href="{{ route('filament.admin.resources.popups.index') }}" class="gpj-guide-card"
                style="--gpj-card-accent: #a66a15">
                <div class="gpj-guide-card-top">
                    <span>
                        <span class="gpj-guide-kicker">Campaign</span>
                        <span class="gpj-guide-title">Popup Promo</span>
                    </span>
                    <span class="gpj-guide-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                            <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                        </svg>
                    </span>
                </div>
                <p>Atur gambar popup desktop, mobile, link, dan status aktif.</p>
                <span class="gpj-guide-meta">
                    Atur campaign
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </span>
            </a>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
