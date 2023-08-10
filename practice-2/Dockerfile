FROM php:8.2-cli
EXPOSE 80
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "-S", "0.0.0.0:80", "./index.php" ]