# 🏘️ Graha Permata Jingga

**Website perumahan modern Graha Permata Jingga** – *The Singapore of Situbondo*.

Website company profile perumahan yang menampilkan informasi properti, fasilitas, lokasi, berita, promo, dan sistem kontak WhatsApp marketing terintegrasi.

---

## 🛠️ Tech Stack

| Komponen | Teknologi |
|---|---|
| **Framework** | Laravel 13 + PHP 8.3 |
| **Admin Panel** | Filament 5 |
| **Database** | SQLite |
| **Frontend** | Bootstrap 5, GSAP, Swiper.js |
| **Build Tool** | Vite + TailwindCSS (admin) |
| **Deployment** | Railway |

---

## 📁 Struktur Project

```
grahapermatajingga-app/
├── app/
│   ├── Filament/          # Admin panel resources & widgets
│   ├── Http/Controllers/  # Landing page controller
│   ├── Models/            # Eloquent models
│   ├── Notifications/     # Password reset notification
│   └── Providers/         # Filament admin panel config
├── config/                # Laravel configuration files
├── database/
│   ├── database.sqlite    # SQLite database file
│   ├── migrations/        # Database migration files
│   └── seeders/           # Data seeders
├── public/
│   └── static/            # Images, CSS, JS assets
├── resources/views/
│   ├── layouts/           # Master layout template
│   ├── components/        # Navbar & Footer components
│   └── *.blade.php        # Page views
├── routes/
│   └── web.php            # Web routes
├── storage/               # Uploads, cache, logs
├── nixpacks.toml          # Railway deployment config
└── Procfile               # Process definition
```

---

## 🚀 Quick Start (Local Development)

### Prerequisites
- PHP 8.3+
- Composer
- Node.js 18+
- NPM

### Installation

```bash
# 1. Clone repository
git clone https://github.com/fazyraww/grahapermatajingga.git
cd grahapermatajingga

# 2. Install dependencies
composer install
npm install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Setup database
php artisan migrate --force
php artisan db:seed --force

# 5. Create storage symlink
php artisan storage:link

# 6. Build frontend assets
npm run build

# 7. Start development server
php artisan serve
```

Website akan tersedia di: `http://localhost:8000`

Admin panel: `http://localhost:8000/admin`

---

## 🌐 Deploy ke Railway

### Langkah-langkah:

1. **Push ke GitHub**
   ```bash
   git add -A
   git commit -m "Production ready"
   git push origin main
   ```

2. **Buka [railway.app](https://railway.app/)** → Login dengan GitHub

3. **New Project** → Deploy from GitHub Repo → Pilih `grahapermatajingga`

4. **Tambahkan Environment Variables** di Railway Dashboard:
   ```
   APP_NAME=Graha Permata Jingga
   APP_ENV=production
   APP_KEY=base64:Lj17XfTTdyCRLMKddcdkEHxrxRzJOmwJgxrf4hweVf8=
   APP_DEBUG=false
   APP_URL=https://your-railway-domain.up.railway.app
   APP_TIMEZONE=Asia/Jakarta
   DB_CONNECTION=sqlite
   SESSION_DRIVER=file
   CACHE_STORE=file
   QUEUE_CONNECTION=sync
   FILESYSTEM_DISK=public
   ADMIN_NAME=Administrator
   ADMIN_EMAIL=admin@grahapermatajingga.com
   ADMIN_PASSWORD=your-secure-password
   ```

5. Railway akan otomatis build & deploy

---

## 👤 Admin Panel

Akses admin panel di `/admin`. Fitur tersedia:
- 📝 Kelola halaman (Beranda, Tentang Kami, Lokasi, dll)
- 🏠 Kelola cluster perumahan
- 📰 Kelola berita & promo
- 🎥 Kelola video
- 🏢 Kelola fasilitas
- ❓ Kelola FAQ
- 🎯 Kelola popup promosi
- 👥 Kelola user admin

---

## 📄 License

Private project – All rights reserved © 2026 Graha Permata Jingga.
