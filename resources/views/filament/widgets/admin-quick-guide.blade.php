<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Panduan Cepat Admin
        </x-slot>

        <x-slot name="description">
            Gunakan menu ini untuk mengubah konten frontend tanpa mengedit kode.
        </x-slot>

        <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-4">
            <a href="{{ route('filament.admin.resources.pages.index') }}"
                class="gpj-guide-card rounded-lg border border-orange-100 bg-orange-50/70 p-4 transition hover:border-orange-300 hover:bg-orange-50">
                <div class="text-sm font-bold text-orange-700">Halaman Website</div>
                <p class="mt-1 text-sm text-gray-600">Edit Beranda, Tentang Kami, Lokasi, Pemesanan, dan Hubungi Kami.</p>
            </a>

            <a href="{{ route('filament.admin.resources.clusters.index') }}"
                class="gpj-guide-card rounded-lg border border-zinc-200 bg-white p-4 transition hover:border-orange-300">
                <div class="text-sm font-bold text-zinc-900">Produk / Unit</div>
                <p class="mt-1 text-sm text-gray-600">Tambah unit, harga, fitur, foto utama, dan denah rumah.</p>
            </a>

            <a href="{{ route('filament.admin.resources.posts.index') }}"
                class="gpj-guide-card rounded-lg border border-zinc-200 bg-white p-4 transition hover:border-orange-300">
                <div class="text-sm font-bold text-zinc-900">Berita & Promo</div>
                <p class="mt-1 text-sm text-gray-600">Kelola artikel berita dan promo yang tampil di website.</p>
            </a>

            <a href="{{ route('filament.admin.resources.popups.index') }}"
                class="gpj-guide-card rounded-lg border border-zinc-200 bg-white p-4 transition hover:border-orange-300">
                <div class="text-sm font-bold text-zinc-900">Popup Promo</div>
                <p class="mt-1 text-sm text-gray-600">Atur gambar popup desktop, mobile, link, dan status aktif.</p>
            </a>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
