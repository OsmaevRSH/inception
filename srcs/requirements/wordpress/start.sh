cp -r /wordpress/* /var/lib/wordpress/
rm -rf wordpress/
chown -R www-data:www-data /var/lib/*
chmod -R 755 /var/lib/*
/usr/sbin/php-fpm7.3 -F