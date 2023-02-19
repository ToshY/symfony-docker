ARG APACHE_IMAGE_VERSION

FROM httpd:${APACHE_IMAGE_VERSION}-alpine

ARG VHOST_CONF

RUN apk update && apk upgrade

RUN echo -e "Include conf/extra/reqtimeout.conf\nInclude conf/extra/vhost.conf" >> conf/httpd.conf

RUN sed -i \
        -e 's/^#\(LoadModule .*mod_rewrite.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_deflate.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_expires.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_http2.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_proxy.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_proxy_fcgi.so\)/\1/' \
        conf/httpd.conf

COPY config/reqtimeout.conf conf/extra/

COPY config/vhost.${VHOST_CONF}.conf conf/extra/vhost.conf
