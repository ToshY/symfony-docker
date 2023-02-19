ARG MYSQL_IMAGE_VERSION

FROM mysql:${MYSQL_IMAGE_VERSION}

RUN mkdir -p /var/log/mysql && chmod 777 /var/log/mysql

COPY ./config/custom.cnf /etc/mysql/conf.d/custom.cnf
