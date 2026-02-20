# =============================
# Stage 1: Build Dependencies
# =============================
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# =============================
# Stage 2: PHP Runtime
# =============================
FROM php:8.3.16-fpm-alpine

# Install system deps
RUN apk add --no-cache \
    bash \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    zip \
    unzip \
    icu-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    bcmath \
    gd \
    zip

WORKDIR /var/www

# Copy app source
COPY . .

# Copy vendor dari stage 1
COPY --from=vendor /app/vendor ./vendor

# Permission
RUN chown -R www-data:www-data storage bootstrap/cache

# Optimize Laravel
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

USER www-data

EXPOSE 9000

CMD ["php-fpm"]