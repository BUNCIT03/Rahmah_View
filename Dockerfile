FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl libzip-dev libicu-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd intl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html

RUN composer install --no-interaction --prefer-dist --optimize-autoloader \
    && npm install \
    && npm run build \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && php artisan storage:link

ENV PORT=10000
EXPOSE 10000

CMD sh -c "php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT}"
