echo -e "masterKing!\nmasterKing!\n" | adduser ltheresi
adduser -D -g 'www' www
mkdir /www
chown -R www:www /var/lib/*
chown -R www:www /www
/usr/sbin/php-fpm7 -F