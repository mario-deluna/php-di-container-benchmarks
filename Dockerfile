FROM php:7.3.6-fpm-alpine3.10
MAINTAINER Mate Kocsis <kocsismate@woohoolabs.com>

RUN docker-php-ext-install opcache

ADD ./ /code

WORKDIR /code

EXPOSE 9000

CMD php-fpm
