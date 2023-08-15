FROM alpine:3.14

# Update and install packages
RUN apk update && \
    apk add --no-cache php7 php7-pdo php7-pdo_mysql php7-mysqli && \
    rm -rf /var/cache/apk/*

# Expose port 80
EXPOSE 80

# Copy application files
COPY . /usr/src/myapp

# Set working directory
WORKDIR /usr/src/myapp

# Start PHP server
CMD [ "php", "-S", "0.0.0.0:80", "./index.php" ]
