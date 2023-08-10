FROM php:8.2-cli
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_mysql mysqli
EXPOSE 80
COPY . /usr/src/myapp
COPY php-scripts /usr/src/myapp/php-scripts
WORKDIR /usr/src/myapp
CMD [ "php", "-S", "0.0.0.0:80", "./index.php" ]