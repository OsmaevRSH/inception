rm -rf /var/lib/wordpress/*
wget https://ru.wordpress.org/latest-ru_RU.tar.gz
tar -xzf /latest-ru_RU.tar.gz -C /var/lib/ ; rm -rf /latest-ru_RU.tar.gz
cp /wp-config.php /var/lib/wordpress/
rm -rf /wp-config.php
chown -R www-data:www-data /var/lib/*
chmod -R 755 /var/lib/*
/usr/sbin/php-fpm7.3 -F