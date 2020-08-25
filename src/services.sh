service nginx start
service php7.3-fpm start
service mysql start
mariadb -e "CREATE DATABASE tlavelle_database;"
mariadb -e "CREATE USER 'tlavelle'@'localhost' IDENTIFIED BY 'school21';"
mariadb -e "GRANT ALL ON *.* TO 'tlavelle'@'localhost' IDENTIFIED BY 'school21';"
mariadb -e "FLUSH PRIVILEGES;"
sleep infinity &
wait
