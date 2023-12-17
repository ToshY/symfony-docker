FROM t0shy/phpfpm-bookworm:8.3 AS local

ARG UID=${UID:-10000}
ARG GID=${GID:-10001}
ARG USER=${USER:-webapp}

RUN addgroup \
    --gid $GID \
    --system $USER \
    && adduser \
    --uid $UID \
    --disabled-password \
    --gecos "" \
    --ingroup $USER \
    --no-create-home \
    $USER

COPY .docker/php/conf.d $PHP_INI_DIR/conf.d/

COPY .docker/php/php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.${USER}.conf
