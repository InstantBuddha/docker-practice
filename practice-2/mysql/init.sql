CREATE DATABASE IF NOT EXISTS mydb;
CREATE USER myuser IDENTIFIED BY 'mypassword';
GRANT ALL PRIVILEGES ON mydb.* TO myuser;