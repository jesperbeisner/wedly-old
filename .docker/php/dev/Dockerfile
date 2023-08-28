FROM php:8.2-apache

WORKDIR /var/www/html

ARG USER_NAME
ARG USER_ID

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions pdo_mysql xdebug @composer

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf

COPY ".docker/php/000-default.conf" "/etc/apache2/sites-available/000-default.conf"

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY ".docker/php/dev/php-extra.ini" "$PHP_INI_DIR/conf.d/php-extra.ini"
COPY ".docker/php/dev/php-xdebug.ini" "$PHP_INI_DIR/conf.d/php-xdebug.ini"

RUN useradd --create-home --shell /bin/bash -U $USER_NAME -u $USER_ID

USER $USER_NAME
