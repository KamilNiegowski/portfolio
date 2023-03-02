FROM php:8.2.3

RUN apt-get update && apt-get install && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql pdo
RUN composer install
#COPY --from=composer:latest usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .
ENTRYPOINT ["running-site.sh"]