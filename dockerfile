FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip curl git libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY laravelapp/ .

RUN chown -R www-data:www-data storage bootstrap/cache

RUN composer install
