FROM php:8.2-fpm

ARG USER_NAME=wedly
ARG USER_ID=1000

WORKDIR "/var/www/html"

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions pdo_mysql redis opcache @composer

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY "./.docker/php/prod/php-extra.ini" "$PHP_INI_DIR/conf.d/php-extra.ini"
COPY "./.docker/php/prod/php-opcache.ini" "$PHP_INI_DIR/conf.d/php-opcache.ini"

COPY . "/var/www/html"

RUN composer install --no-dev

RUN useradd --create-home --shell /bin/bash -U $USER_NAME -u $USER_ID

RUN chown -R $USER_NAME "/var/www/html"

USER $USER_NAME
