FROM alpine:3.14

RUN apk update && \
    apk add --no-cache php7 php7-pdo php7-pdo_mysql php7-mysqli && \
    apk add --no-cache --virtual .build-deps $PHPIZE_DEPS && \
    apk add --no-cache postgresql-dev && \
    docker-php-ext-install pdo pdo_mysql mysqli && \
    apk del .build-deps

EXPOSE 80

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

CMD [ "php", "-S", "0.0.0.0:80", "./index.php" ]
