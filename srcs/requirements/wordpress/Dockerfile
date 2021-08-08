FROM debian:buster

RUN apt-get update && apt-get upgrade
RUN apt-get -y install php
RUN apt-get -y install php-fpm
RUN apt-get -y install php-mysqli
RUN apt-get -y install php-json
RUN apt-get -y install php-mbstring
RUN apt-get -y install php-redis
RUN apt-get -y install wget

RUN mkdir -p /run/php
COPY tools/ /
COPY start.sh /
RUN sed -i 's/\/run\/php\/php7.3-fpm.sock/0.0.0.0:9000/g' /etc/php/7.3/fpm/pool.d/www.conf

CMD [ "sh", "start.sh" ]