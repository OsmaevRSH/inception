openrc default
/etc/init.d/mariadb setup
rc-service mariadb start

echo "ALTER USER '${DB_ROOT_LOGIN}'@'localhost' IDENTIFIED VIA mysql_native_password;" | mariadb
echo "SET PASSWORD = PASSWORD('${DB_ROOT_PASS}');" | mariadb
echo "FLUSH PRIVILEGES;" | mariadb
echo "CREATE DATABASE IF NOT EXISTS wordpress;" | mariadb -p"${DB_ROOT_PASS}"
echo "CREATE USER '${DB_MY_LOGIN}'@'localhost' IDENTIFIED BY '${DB_MY_PASS}';" | mariadb -p"${DB_ROOT_PASS}"
echo "GRANT ALL PRIVILEGES ON wordpress.* TO '${DB_MY_LOGIN}'@'%' IDENTIFIED BY '${DB_MY_PASS}' WITH GRANT OPTION;" | mariadb -p"${DB_ROOT_PASS}"
echo "FLUSH PRIVILEGES;" | mariadb -p"${DB_ROOT_PASS}"

mariadb -p"${DB_ROOT_PASS}" < wordpress.sql
rc-service mariadb stop
/usr/bin/mysqld_safe --datadir='/var/lib/mysql'