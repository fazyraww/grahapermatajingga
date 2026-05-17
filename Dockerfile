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
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd intl zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy composer files first for caching
COPY composer.json composer.lock ./

# Install PHP dependencies
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copy package files for Node
COPY package.json package-lock.json ./

# Install Node dependencies and build assets
RUN npm ci && npm run build

# Copy the rest of the application
COPY . .

# Re-run composer dump-autoload after full source is available
RUN composer dump-autoload --optimize

# Create SQLite database file if needed
RUN mkdir -p database && touch database/database.sqlite

# Create storage symlink and cache config
RUN php artisan storage:link || true
RUN php artisan optimize || true

# Expose port (Railway sets PORT env variable)
EXPOSE ${PORT:-8080}

# Start the application
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
