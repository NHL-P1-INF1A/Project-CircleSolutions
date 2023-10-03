FROM php:fpm

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli

#Nicer errors
RUN pecl install xdebug && docker-php-ext-enable xdebug

EXPOSE 9000