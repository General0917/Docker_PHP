FROM php:8.2.4-apache

RUN apt-get update && apt-get install -y \
    libonig-dev \
    zip \
    unzip \
    git \
  && docker-php-ext-install pdo_mysql mysqli \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
  && curl -sSL https://phar.phpunit.de/phpunit.phar -o /usr/local/bin/phpunit \
  && chmod +x /usr/local/bin/phpunit

COPY ./config/php/php.ini /usr/local/etc/php/
