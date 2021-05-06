FROM	debian:buster

ENV AUTOINDEX=on

COPY	srcs /srcs/

RUN		apt-get update && \
		apt-get -y install tar \
			wget \
			mariadb-server \
			mariadb-client \
			php-fpm \
			php-mysql \
			php-json \
			php-mbstring \
			nginx && \
		wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz && \ 
			tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz && \
			mv phpMyAdmin-4.9.0.1-all-languages /var/www/html/phpmyadmin && \
			rm phpMyAdmin-4.9.0.1-all-languages.tar.gz && \
			mv /srcs/config.inc.php /var/www/html/phpmyadmin/config.inc.php && \
		wget https://wordpress.org/latest.tar.gz && \
			tar -xzvf latest.tar.gz && \
			mv wordpress /var/www/html/wordpress && \
			rm latest.tar.gz && \
			mv /srcs/wp-config.php /var/www/html/wordpress/wp-config.php && \
		mv /srcs/localhost /etc/nginx/sites-available/localhost && \
			ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost && \
			rm /etc/nginx/sites-enabled/default && \
		mv /srcs/nginx-selfsigned.crt /etc/ssl/certs/nginx-selfsigned.crt && \
			mv /srcs/nginx-selfsigned.key /etc/ssl/private/nginx-selfsigned.key && \
		mv /srcs/index.php /var/www/html/index.php

EXPOSE 80
EXPOSE 443

CMD bash /srcs/services_setup.sh
