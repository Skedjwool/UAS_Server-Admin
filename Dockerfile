FROM php:7.4-apache
run apt-get update
run docker-php-ext-install mysqli
EXPOSE 80
ADD ["index.php", "/var/www/html/"]
run chown -R www-data:www-data /var/www/html
run chmod -R 774 /var/www/html
