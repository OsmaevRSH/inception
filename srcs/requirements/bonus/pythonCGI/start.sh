echo -e "masterKing!\nmasterKing!\n" | adduser ltheresi
adduser -D -g 'www' www
mkdir /www
mkdir -p /nginx
chown -R www:www /var/lib/*
chown -R www:www /www
nginx -g 'daemon off;'