FROM php:8.2-fpm
WORKDIR /var/www/html
COPY . /var/www/html/
RUN docker-php-ext-install mysqli
EXPOSE 9000