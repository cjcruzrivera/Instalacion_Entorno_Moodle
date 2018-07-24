FROM debian:latest

# Environments vars
ENV TERM=xterm

RUN apt-get update
RUN apt-get -y upgrade

# Packages installation
RUN DEBIAN_FRONTEND=noninteractive apt-get -y --fix-missing install apache2 \
      php \
      php-cli \
      php-gd \
      php-json \
      php-mbstring \
      php-xml \
      php-xsl \
      php-zip \
      php-soap \
      php-pear \
      php-mcrypt \
      php-pgsql \
      php-intl \
      php-xmlrpc \
      libapache2-mod-php \
      git \
      curl \
      wget \
      php-curl \
      sudo \
      gnupg \
      unzip \
      apt-transport-https \
      nano \
      lynx-cur

# Add phpinfo script for INFO purposes
RUN echo "<?php phpinfo();" >> /var/www/index.php


RUN curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -

RUN DEBIAN_FRONTEND=noninteractive apt-get -y --fix-missing install nodejs \
      npm

RUN chown -R www-data:www-data /var/www

WORKDIR /var/www/

WORKDIR /var/www/html/moodle

RUN npm i -g npm
RUN npm install -g grunt
RUN npm install -g grunt-cli

# Volume
VOLUME /var/www

# Ports: apache2
EXPOSE 80

# Run apache2 background
CMD [ "apache2ctl", "-D", "FOREGROUND" ]