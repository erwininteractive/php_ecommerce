FROM php:8.1.4-apache-bullseye

RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
RUN service apache2 restart