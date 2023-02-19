ARG PHP_IMAGE_VERSION

FROM php:${PHP_IMAGE_VERSION:-"8.1"}-fpm-buster

LABEL maintainer="ToshY (github.com/ToshY)"

COPY --from=composer:2.5 /usr/bin/composer /usr/local/bin/composer

COPY --from=mlocati/php-extension-installer:1.5 /usr/bin/install-php-extensions /usr/local/bin/

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN install-php-extensions mysqli pdo_mysql exif gd imagick imap opcache soap zip intl gettext sysvsem amqp redis pcntl

RUN apt-get update && apt-get install -y \
    software-properties-common  \
    nano \
    zip \
    unzip \
    ffmpeg \
    mkvtoolnix \
    libimage-exiftool-perl

WORKDIR /app