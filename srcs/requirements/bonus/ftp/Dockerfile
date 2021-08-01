FROM alpine:latest

RUN apk add vsftpd
RUN apk add openssl
COPY conf /etc/vsftpd/
RUN mkdir /srv/ftp
RUN echo -e "root\nroot\n" | adduser ltheresi
RUN mkdir -p /etc/ftps/ssl && openssl req -x509 -newkey rsa:2048 -days 365 -nodes  -keyout  /etc/ftps/ssl/ssl.key -out /etc/ftps/ssl/ssl.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=School21/OU=ltheresi/CN=localhost"
COPY start.sh /
EXPOSE 21 20 21000
CMD [ "sh", "start.sh" ]
