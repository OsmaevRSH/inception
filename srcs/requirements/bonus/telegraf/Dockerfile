FROM alpine:latest

RUN apk update
#RUN apk add telegraf
ADD https://dl.influxdata.com/telegraf/releases/telegraf-1.15.3_linux_amd64.tar.gz /etc/
RUN tar -xzf /etc/telegraf-1.15.3_linux_amd64.tar.gz -C /etc/ ; rm -rf /etc/telegraf-1.15.3_linux_amd64.tar.gz
RUN mv /etc/telegraf-1.15.3 /telegraf && cp -r telegraf/* / && rm -rf /telegraf
RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub && \
    wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk && \
    apk add glibc-2.28-r0.apk
COPY telegraf /etc/telegraf/telegraf.conf

CMD [ "telegraf" ]