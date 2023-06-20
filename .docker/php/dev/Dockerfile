FROM php:8.2-fpm

ARG USER_NAME
ARG USER_ID

WORKDIR /var/www/html

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions pdo_mysql redis xdebug @composer

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY "./.docker/php/dev/php-extra.ini" "$PHP_INI_DIR/conf.d/php-extra.ini"
COPY "./.docker/php/dev/php-xdebug.ini" "$PHP_INI_DIR/conf.d/php-xdebug.ini"

RUN useradd --create-home --shell /bin/bash -U $USER_NAME -u $USER_ID

USER $USER_NAME
