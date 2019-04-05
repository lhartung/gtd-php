FROM php:7.3-apache
RUN docker-php-ext-install mysqli
COPY . /var/www/html/
RUN mv /var/www/html/config.docker.php /var/www/html/config.inc.php
