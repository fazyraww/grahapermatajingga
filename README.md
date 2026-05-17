# Graha Permata Jingga

Website company profile perumahan Graha Permata Jingga dengan landing page, halaman informasi properti, berita, promo, kontak WhatsApp marketing, dan admin panel Filament.

## Tech Stack

| Komponen | Teknologi |
| --- | --- |
| Framework | Laravel 13 + PHP 8.3 |
| Admin Panel | Filament 5 |
| Database lokal | SQLite |
| Database produksi | PostgreSQL/MySQL direkomendasikan |
| Frontend | Bootstrap 5, GSAP, Swiper.js |
| Build Tool | Vite + TailwindCSS |
| Deployment | Railway |

## Struktur Project

```text
grahapermatajingga-app/
├── app/
│   ├── Filament/          # Admin panel resources & widgets
│   ├── Http/Controllers/  # Landing page controller
│   ├── Models/            # Eloquent models
│   └── Providers/         # Filament admin panel config
├── config/                # Laravel configuration files
├── database/
│   ├── migrations/        # Database migration files
│   └── seeders/           # Initial/demo data seeders
├── public/
│   └── static/            # Images, CSS, JS assets
├── resources/views/       # Blade views
├── routes/
│   └── web.php            # Web routes
├── storage/               # Uploads, cache, logs
└── nixpacks.toml          # Railway deployment config
```

## Local Development

Prerequisites:

- PHP 8.3+
- Composer
- Node.js 18+
- NPM

Setup:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --force
php artisan db:seed --force
php artisan storage:link
npm run build
php artisan serve
```

Website lokal tersedia di `http://localhost:8000`.
Admin panel tersedia di `http://localhost:8000/admin`.

## Deploy ke Railway

1. Push repository ke GitHub.
2. Buat project baru di Railway dari GitHub repository.
3. Tambahkan database Railway PostgreSQL atau MySQL untuk produksi.
4. Set environment variables produksi.
5. Deploy.

Contoh environment variables produksi:

```env
APP_NAME="Graha Permata Jingga"
APP_ENV=production
APP_KEY=base64:GENERATE_A_REAL_APP_KEY
APP_DEBUG=false
APP_URL=https://your-railway-domain.up.railway.app
APP_TIMEZONE=Asia/Jakarta

DB_CONNECTION=pgsql
DB_HOST=your-db-host
DB_PORT=5432
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password
DB_SSLMODE=require

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=sync
FILESYSTEM_DISK=public

ADMIN_NAME=Administrator
ADMIN_EMAIL=admin@example.com
ADMIN_PASSWORD=use-a-strong-password
```

Buat `APP_KEY` asli dengan:

```bash
php artisan key:generate --show
```

Jalankan seeder hanya saat inisialisasi data pertama kali, bukan di setiap deploy:

```bash
php artisan db:seed --force
```

Catatan produksi:

- Jangan commit file `.env` atau database runtime seperti `database/database.sqlite`.
- Untuk Railway, gunakan PostgreSQL/MySQL. SQLite hanya aman jika Railway service memakai persistent volume yang benar.
- Upload di `storage/app/public` butuh persistent volume atau object storage jika kontennya harus bertahan setelah redeploy.
- Setelah mengganti `APP_KEY`, session dan data terenkripsi lama dapat menjadi tidak valid.

## Admin Panel

Akses admin panel di `/admin`.

Fitur utama:

- Kelola halaman website
- Kelola cluster perumahan
- Kelola berita dan promo
- Kelola video
- Kelola fasilitas
- Kelola FAQ
- Kelola popup promosi
- Kelola user admin

## License

Private project. All rights reserved.
