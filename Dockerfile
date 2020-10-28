FROM debian:buster

RUN apt update && apt -y upgrade
RUN apt install -y vim nginx wget php7.3 php7.3-fpm php-json php-mbstring php-mysql default-mysql-server wordpress 
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar xvf phpMyAdmin-5.0.2-all-languages.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin

COPY ./src/services.sh ./src/dtb.sql /
COPY ./src/wp-config.php /usr/share/wordpress/
COPY ./src/default /etc/nginx/sites-available/
COPY ./src/tlavelle.key /etc/ssl/private/ssl-cert-snakeoil.key
COPY ./src/tlavelle.crt /etc/ssl/certs/ssl-cert-snakeoil.pem

RUN mv usr/share/wordpress /var/www/html
RUN service mysql start && mysql < dtb.sql

ENTRYPOINT bash services.sh 
