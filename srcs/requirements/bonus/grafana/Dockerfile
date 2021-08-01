FROM alpine:latest

RUN apk update
RUN apk add grafana --repository=http://dl-3.alpinelinux.org/alpine/edge/testing/
RUN apk add openrc
COPY grafana.ini /usr/share/grafana/conf/custom.ini
COPY datasources.yaml /usr/share/grafana/conf/provisioning/datasources/influxdb.yaml
COPY dashboards.yaml /usr/share/grafana/conf/provisioning/dashboards/influxdb.yaml
RUN mkdir -p /var/lib/grafana_dashboards/
#COPY ./services/* /var/lib/grafana_dashboards/
EXPOSE 3000

CMD ["/usr/sbin/grafana-server",  "--homepath=/usr/share/grafana"]