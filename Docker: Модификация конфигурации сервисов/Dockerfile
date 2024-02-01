FROM php:8.2-fpm-alpine
RUN pecl install xdebug-3.2.2
RUN docker-php-ext-install pdo pdo_mysql sockets
RUN docker-php-ext-enable xdebug

WORKDIR /var/www

