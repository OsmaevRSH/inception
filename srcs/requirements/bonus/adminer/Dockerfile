FROM alpine:latest

RUN apk add php7
RUN apk add php7-fpm
RUN apk add php7-mysqli
RUN apk add php7-json
RUN apk add php7-mbstring
RUN apk add php7-session
COPY tools/adminer.php /var/lib/adminer/
COPY ./start.sh /
RUN sed -i 's/127.0.0.1:9000/0.0.0.0:9000/g' /etc/php7/php-fpm.d/www.conf

CMD [ "sh", "start.sh" ]