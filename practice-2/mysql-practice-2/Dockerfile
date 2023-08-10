FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=my-secret-pw
ENV MYSQL_DATABASE=mydb
ENV MYSQL_USER=myuser
ENV MYSQL_PASSWORD=mypassword

EXPOSE 3306

# Copy initialization SQL script to the container
COPY init.sql /docker-entrypoint-initdb.d/
