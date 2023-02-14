FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/html/backend

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libpng-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Copy application code
COPY ./backend .

# Copy environment file
COPY backend/.env.example backend/.env

# Install application dependencies
RUN composer install --no-scripts --no-autoloader --prefer-dist

# Generate application key
RUN php artisan key:generate

# run migrations and seeds
RUN php artisan migrate:fresh --seed

# Set permissions
RUN chown -R www-data:www-data /var/www/html/backend/storage /var/www/html/backend/bootstrap/cache

# Set entrypoint
ENTRYPOINT ["php", "artisan"]

# Set command
CMD ["serve", "--host=0.0.0.0", "--port=8000"]