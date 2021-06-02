
FROM php:8.0-apache
MAINTAINER tex2e <tex2eq@gmail.com>

COPY apache2.conf /etc/apache2/apache2.conf

RUN a2enmod cgi include
