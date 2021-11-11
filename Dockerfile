FROM php:8.0.5-fpm

COPY composer.lock composer.json /var/www/html/

WORKDIR /var/www/html/

RUN apt-get update && \
    apt-get install -y \
    git \
    zip \
    unzip \
    curl

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html/

EXPOSE 9000
CMD ["php-fpm"]
