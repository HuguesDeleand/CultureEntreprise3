FROM php:5.6-apache

RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo pdo_mysql
RUN a2enmod rewrite
