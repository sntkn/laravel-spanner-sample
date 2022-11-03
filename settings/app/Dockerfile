FROM php:8.1.1-fpm-buster

ENV TZ=Asia/Tokyo
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_INSTALL_VERSION=2.4.4

WORKDIR /var/www
RUN apt-get update && apt-get install -y git curl less autoconf zlib1g-dev unzip php-zip
RUN pecl install grpc

RUN echo "extension=grpc.so" >> /usr/local/etc/php/php.ini

RUN cd /usr/bin \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --version=${COMPOSER_INSTALL_VERSION} \
    && ln -s /usr/bin/composer.phar /usr/bin/composer \
    && php -r "unlink('composer-setup.php');" \
    && mkdir -p /var/www