FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libjpeg-dev \
      libwebp-dev \
      libfreetype6-dev \
      libzip-dev \
      zip unzip \
      git
RUN docker-php-ext-configure gd --enable-gd --with-freetype=/usr --with-webp=/usr/include --with-jpeg=/usr/include
RUN docker-php-ext-install -j$(nproc) pdo_mysql \
    bcmath \
    gd \
    exif \
    zip

#COPY ./php.ini /etc/php/7.2/apache2/php.ini
#RUN   docker-php-ext-install pdo_mysql
#RUN      docker-php-ext-install bcmath
#RUN      docker-php-ext-install gd
#RUN      docker-php-ext-install zip
#RUN      apt-get clean && \
#      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

#COPY ./docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

## Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

# Install xdebug
RUN pecl install xdebug \
 && docker-php-ext-enable xdebug

# Enable XDebug
#ADD ./docker/app/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www
