FROM alpine:latest

RUN apk update
RUN apk add openrc --no-cache
RUN apk add mysql --no-cache
RUN apk add mysql-client --no-cache
RUN mkdir -p /run/mysqld/
RUN chown -R mysql /run/mysqld
RUN mkdir -p /auth_pam_tool_dir/auth_pam_tool
RUN mkdir -p /run/openrc/
RUN touch /run/openrc/softlevel
COPY ./conf /etc/my.cnf
COPY ./wordpress.sql /
COPY mysql.sh /

EXPOSE 3306

CMD [ "sh", "mysql.sh" ]