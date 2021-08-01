FROM alpine:latest

RUN apk update
RUN apk add influxdb
COPY influxdb /etc/influxdb/influxdb.conf
EXPOSE 8086

CMD [ "influxd" ]