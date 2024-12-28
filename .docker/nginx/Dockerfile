ARG NGINX_IMAGE_VERSION

FROM nginx:${NGINX_IMAGE_VERSION:-1.27}

COPY ./config/default.conf /etc/nginx/conf.d/default.conf
