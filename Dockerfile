FROM php:8.3-apache

RUN apt update && apt upgrade -y &&  apt install -y git vim nano curl wget telnet links

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html

COPY . .

RUN cp db_connect.php.docker db_connect.php

EXPOSE 80