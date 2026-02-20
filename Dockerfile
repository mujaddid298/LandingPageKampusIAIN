# Stage 1
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# Stage 2
FROM php:8.3.16-fpm-alpine

RUN apk add --no-cache \
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

COPY . .
COPY --from=vendor /app/vendor ./vendor

RUN chown -R www-data:www-data storage bootstrap/cache

RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

USER www-data

EXPOSE 9000

CMD ["php-fpm"]