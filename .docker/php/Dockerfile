FROM php:8.1-apache

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Установка PHP расширений
RUN docker-php-ext-install \
    intl \
    zip \
    opcache \
    pdo \
    pdo_mysql \
    mysqli \
    && docker-php-ext-enable \
    intl \
    opcache \
    mysqli

# Установка Xdebug
RUN pecl install xdebug-3.1.6 && docker-php-ext-enable xdebug

# Установка Composer (исправленная версия)
COPY --from=composer:2.7 /usr/bin/composer /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

# Настройка Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite

WORKDIR /var/www/html

# Копирование конфигураций
COPY php.ini /usr/local/etc/php/conf.d/codeigniter.ini