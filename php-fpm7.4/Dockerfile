# FROM php:fpm
FROM php:7.4-fpm-buster

# RUN rm /etc/apt/preferences.d/no-debian-php
RUN rm /etc/apt/preferences.d/no-debian-php


RUN apt-get --allow-releaseinfo-change update

RUN apt-get install -y libzip-dev zip unzip \
    && docker-php-ext-install zip

RUN docker-php-ext-install pdo_mysql

RUN apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev php-json \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install gd

# RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#     && docker-php-ext-install gd

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
COPY chilkat7.4/chilkat_9_5_0.so /usr/local/lib/php/extensions/no-debug-non-zts-20190902/chilkat.so
COPY chilkat7.4/chilkat.ini /usr/local/etc/php/conf.d/chilkat.ini

WORKDIR "/var/www/myapp"
