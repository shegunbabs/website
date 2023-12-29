FROM ubuntu:22.04

LABEL maintainer="Shegun Babs"

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update --fix-missing \
    && apt-get install -y gnupg tzdata software-properties-common \
    && echo "UTC+1" > /etc/timezone \
    && dpkg-reconfigure -f noninteractive tzdata

RUN apt-get update \
    && apt install -y

RUN add-apt-repository ppa:ondrej/php \
    && apt update

RUN apt-get install -y curl zip unzip git sqlite3 supervisor \
       nginx php8.2-fpm php8.2-cli \
       php8.2-pgsql php8.2-gd \
       php8.2-curl php8.2-memcached \
       php8.2-imap php8.2-mysql php8.2-mbstring \
       php8.2-xml php8.2-zip php8.2-bcmath php8.2-soap \
       php8.2-intl php8.2-readline php8.2-xdebug \
       php-msgpack php-igbinary \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && mkdir /run/php \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
	&& echo "daemon off;" >> /etc/nginx/nginx.conf


