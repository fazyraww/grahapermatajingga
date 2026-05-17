#!/bin/sh
set -e

echo "========================================="
echo " Graha Permata Jingga - Starting..."
echo "========================================="

# --- 1. Ensure storage directories exist ---
echo "[1/6] Creating storage directories..."
mkdir -p storage/logs \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache \
    database
chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# --- 2. Ensure SQLite database exists ---
echo "[2/6] Checking database..."
if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_CONNECTION" ]; then
    DB_FILE="${DB_DATABASE:-database/database.sqlite}"
    if [ ! -f "$DB_FILE" ]; then
        echo "  -> Creating SQLite database: $DB_FILE"
        touch "$DB_FILE"
    fi
    echo "  -> SQLite database ready"
else
    echo "  -> Using $DB_CONNECTION database"
fi

# --- 3. Storage link ---
echo "[3/6] Creating storage link..."
php artisan storage:link --force 2>/dev/null || echo "  -> Storage link skipped"

# --- 4. Run migrations ---
echo "[4/6] Running migrations..."
php artisan migrate --force 2>&1 || echo "  -> Migration skipped (may need manual setup)"

# --- 5. Cache config/routes/views ---
echo "[5/6] Optimizing application..."
php artisan config:cache 2>&1 || echo "  -> Config cache skipped"
php artisan route:cache 2>&1 || echo "  -> Route cache skipped"
php artisan view:cache 2>&1 || echo "  -> View cache skipped"

# --- 6. Start PHP server ---
SERVER_PORT="${PORT:-8080}"
echo "[6/6] Starting server on port $SERVER_PORT..."
echo "========================================="
echo " App is live! Listening on 0.0.0.0:$SERVER_PORT"
echo "========================================="

exec php -S 0.0.0.0:"$SERVER_PORT" server.php
