echo -e "${MY_PASS}\n${MY_PASS}\n" | adduser "${MY_LOGIN}"
adduser -D -g 'www' www
mkdir /www
chown -R www:www /var/lib/*
chown -R www:www /www
/usr/sbin/php-fpm7 -F