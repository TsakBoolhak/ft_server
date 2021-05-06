CREATE DATABASE localdb;
CREATE USER 'user'@'localhost' IDENTIFIED BY 'pass';
GRANT ALL PRIVILEGES ON localdb.* TO 'user'@'localhost';
FLUSH PRIVILEGES;
\q
