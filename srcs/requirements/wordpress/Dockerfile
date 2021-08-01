FROM debian:buster

RUN apt-get update && apt-get upgrade
RUN apt-get -y install php
RUN apt-get -y install php-fpm
RUN apt-get -y install php-mysqli
RUN apt-get -y install php-json
RUN apt-get -y install php-mbstring
RUN apt-get -y install php-redis
RUN mkdir -p /run/php
#RUN apk add php7-dev
#RUN apk add php7-igbinary
#RUN apk add php7-redis
#RUN apk add --no-cache autoconf git g++ make
#RUN git clone https://github.com/phpredis/phpredis.git
#RUN cd phpredis && phpize &&./configure && make && make install
#RUN echo "extension_dir=/usr/lib/php7/modules/" >> /etc/php7/php.ini
#RUN echo "extension=redis" >> /etc/php7/php.ini

COPY ./start.sh /
RUN sed -i 's/\/run\/php\/php7.3-fpm.sock/0.0.0.0:9000/g' /etc/php/7.3/fpm/pool.d/www.conf

CMD [ "sh", "start.sh" ]