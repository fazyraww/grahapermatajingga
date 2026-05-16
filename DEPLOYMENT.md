# Deployment Checklist

## InfinityFree Free Hosting

1. Set PHP version di InfinityFree ke PHP 8.3 jika tersedia.
2. Copy `.env.production.example` ke `.env`, lalu isi `APP_KEY`, `APP_URL`, database MySQL InfinityFree, email SMTP, dan akun admin.
3. Jalankan lokal: `composer install --no-dev`, `composer dump-autoload --no-dev`, `npm install`, dan `npm run build`.
4. Jalankan migrasi dan seeder di lokal, lalu export database ke SQL dan import melalui phpMyAdmin InfinityFree. Free hosting tidak punya terminal untuk `php artisan migrate`.
5. Jalankan `php artisan optimize:clear` sebelum upload supaya cache lokal tidak ikut terbawa ke server.
6. Upload seluruh project ke folder `htdocs`, termasuk `.env`, `index.php` root, `vendor`, `public/build`, `public/css`, `public/js`, `public/fonts`, `storage`, dan `.htaccess` root.
7. Jangan upload `node_modules`, `.git`, file zip cadangan, atau file helper upload seperti `unzip.php` setelah selesai.
8. Pastikan `.htaccess` root tetap ada agar semua request diarahkan ke folder `public`.
9. Jika upload file dari admin tidak tampil, rule `/storage` di `.htaccess` root sudah disiapkan untuk membaca `storage/app/public`.

## Server Dengan Terminal

1. Copy `.env.production.example` to `.env` and set production values.
2. Run `php artisan key:generate` if `APP_KEY` is empty.
3. Set `APP_DEBUG=false` and point `APP_URL` to the real domain.
4. Use a persistent database, not in-memory SQLite.
5. Fill `ADMIN_EMAIL` and `ADMIN_PASSWORD` before seeding the first admin user.
6. Run `composer install --no-dev --optimize-autoloader`.
7. Run `php artisan migrate --force`.
8. Run `php artisan db:seed --force` if you need the default content and admin user.
9. Run `php artisan storage:link`.
10. Install frontend deps and build assets with `npm ci` or `npm install`, then `npm run build`.
11. Run `php artisan config:cache`, `php artisan route:cache`, and `php artisan view:cache`.
12. Serve through Nginx or Apache with `public/` as the web root.
