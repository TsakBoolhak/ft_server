#!/bin/bash

service mysql start
mysql -u root < /srcs/create_db.sql
chown -R www-data:www-data /var/www/
find /var/www// -type d -exec chmod 750 {} \;
find /var/www// -type f -exec chmod 640 {} \;

if [[ "$AUTOINDEX" == "off" ]]
then
	sed -i 's/autoindex on/autoindex off/g' /etc/nginx/sites-available/localhost;
fi

service php7.3-fpm start
service nginx start
bash
