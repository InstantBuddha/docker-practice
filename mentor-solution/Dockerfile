FROM alpine:3.18

ARG PHP_VERSION=82

RUN apk add --update --no-cache \
    php${PHP_VERSION} \
    php${PHP_VERSION}-fpm \
    php${PHP_VERSION}-pdo \
    php${PHP_VERSION}-pdo_pgsql

RUN ln -sf /usr/bin/php${PHP_VERSION} /usr/bin/php \
    && ln -sf /usr/sbin/php-fpm${PHP_VERSION} /usr/sbin/php-fpm

WORKDIR /var/www/app

CMD ["php-fpm", "-F"]