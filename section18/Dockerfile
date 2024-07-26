# Using the PHP 8.2 as Apache base image
FROM php:8.2-apache
# Enable the Apache module rewrite
RUN a2enmod rewrite
# Install PHP extensions for MySQL database connection
RUN docker-php-ext-install mysqli pdo_mysql pdo
# Install php-intl
RUN apt-get -y update \
  && apt-get install -y libicu-dev \
  && docker-php-ext-configure intl \
  && docker-php-ext-install intl
# Copy php.ini-devlopment file into the container
COPY ./config/php /usr/local/etc/php/
# Give permission to folder
RUN chmod -R 777 /var/www/html 

