ARG MYSQL_IMAGE_VERSION

FROM mysql:${MYSQL_IMAGE_VERSION:-8.4}

RUN <<EOT sh
  mkdir -p /var/log/mysql
  chown -R mysql:mysql /var/log/mysql
EOT

COPY ./config/custom.cnf /etc/mysql/conf.d/custom.cnf
