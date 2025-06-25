FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libonig-dev libxml2-dev libicu-dev \
    zip libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql mbstring zip intl


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

RUN composer install

COPY ./docker/php/configs/overrides.conf /etc/php/8.2/fpm/pool.d/z-overrides.conf
COPY ./docker/php/configs/php.ini /usr/local/etc/php/conf.d/90-custom.ini

RUN echo "appuser:x:1000:1000:App User:/home/appuser:/bin/sh" >> /etc/passwd && \
    echo "appuser:x:1000:" >> /etc/group && \
    mkdir -p /home/appuser && \
    chown 1000:1000 /home/appuser

RUN chown -R 1000:1000 /var/www

USER 1000

EXPOSE 9000
CMD ["php-fpm"]
