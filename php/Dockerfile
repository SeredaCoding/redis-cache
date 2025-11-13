FROM php:8.2-apache

# Instalar dependências básicas e Composer
RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev curl \
    && docker-php-ext-install pdo pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar e habilitar Redis
RUN pecl install redis \
    && docker-php-ext-enable redis

WORKDIR /var/www/html
