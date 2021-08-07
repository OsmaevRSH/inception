FROM alpine:latest

RUN apk update
RUN apk add nginx
RUN apk add openssl --no-cache
COPY tools/adminer.php /var/lib/adminer/
COPY nginx.conf /etc/nginx/nginx.conf
RUN mkdir /etc/nginx/ssl && openssl req -x509 -newkey rsa:2048 -days 365 -nodes  -keyout  /etc/nginx/ssl/ssl.key -out /etc/nginx/ssl/ssl.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=School21/OU=ltheresi/CN=localhost"
COPY ./start.sh /
EXPOSE 443
CMD [ "sh", "start.sh" ]