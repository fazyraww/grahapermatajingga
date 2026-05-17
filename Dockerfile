# ============================
# Stage 1: Build frontend assets
# ============================
FROM node:20-alpine AS frontend

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

# Copy full source so Vite can resolve all entry modules
COPY . .

RUN npm run build

# ============================
# Stage 2: PHP application
# ============================
FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    libpq-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd intl zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy composer files first (Docker layer caching)
COPY composer.json composer.lock ./

# Install PHP dependencies (no-dev for production)
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copy the full application source
COPY . .

# Copy built frontend assets from Stage 1
COPY --from=frontend /app/public/build ./public/build

# Dump autoload with full source available
RUN composer dump-autoload --optimize --no-scripts

# Create required directories
RUN mkdir -p storage/logs \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache \
    database

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

# Expose port (Railway provides PORT env variable)
EXPOSE 8080

# Start script: run migrations + storage link + optimize + serve
CMD sh -c "\
    php artisan migrate --force || true && \
    php artisan storage:link || true && \
    php artisan optimize && \
    php artisan serve --host=0.0.0.0 --port=\${PORT:-8080}"
