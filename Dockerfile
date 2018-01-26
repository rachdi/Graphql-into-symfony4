FROM php:7.2-fpm

# Environment variable
ENV SYMFONY_ENV="dev" APCU_VERSION="5.1.8" APCU_BC_VERSION="1.0.3" DOCKERIZE_VERSION="0.5.0" NODE_VERSION="5.0.0" COMPOSER_ALLOW_SUPERUSER="1"

# Dependencies
RUN apt-get update \
    && apt-get install -y \
        libpq-dev \
        libicu-dev \
        zlib1g-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        git \
        wget \
        gnupg \
        cron \
        rsyslog \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install intl mbstring pdo_mysql zip gd bcmath exif \
    # Composer
    && curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/local/bin \
    # APC
    && git clone --depth 1 -b v$APCU_VERSION https://github.com/krakjoe/apcu.git /usr/src/php/ext/apcu \
    && git clone --depth 1 -b v$APCU_BC_VERSION https://github.com/krakjoe/apcu-bc.git /usr/src/php/ext/apcu_bc \
    && docker-php-ext-configure apcu \
    && docker-php-ext-configure apcu_bc \
    && docker-php-ext-install opcache apcu apcu_bc \
    && mv /usr/local/etc/php/conf.d/docker-php-ext-apc.ini /usr/local/etc/php/conf.d/zz-docker-php-ext-apc.ini \
    # Dockerize
    && wget https://github.com/jwilder/dockerize/releases/download/v$DOCKERIZE_VERSION/dockerize-linux-amd64-v$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-linux-amd64-v$DOCKERIZE_VERSION.tar.gz \
    # Frontend dependencies
    && curl -sL https://deb.nodesource.com/setup_7.x | bash - \
    && curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    && echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list \
    && apt-get update \
    && apt-get install nodejs yarn \
    # Cleanup
    && apt-get clean \
    && rm -rf dockerize-linux-amd64-v$DOCKERIZE_VERSION.tar.gz \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && rm -rf /usr/src/php/ext/apcu \
    && rm -rf /usr/src/php/ext/apcu_bc \
    && rm -rf /tmp/* /var/tmp/*

# Configuration
COPY docker/fpm/php.ini /usr/local/etc/php/php.ini
COPY docker/fpm/entrypoint.sh /usr/local/bin/entrypoint.sh

# Add code
COPY . /var/www/html

# Dependencies
RUN chown -R www-data:www-data /var/www \
    && su www-data -s /bin/sh -c "composer global require \"hirak/prestissimo:^0.3\" --prefer-dist --no-progress --no-suggest --optimize-autoloader --classmap-authoritative" \
    && su www-data -s /bin/sh -c "composer install --prefer-dist --no-progress --no-suggest --optimize-autoloader --classmap-authoritative" \
    && su www-data -s /bin/sh -c "composer clear-cache" \
    && su www-data -s /bin/sh -c "composer dump-autoload --optimize --classmap-authoritative" \
    # Front
    && su www-data -s /bin/sh -c "yarn install --ignore-engines" \
    && su www-data -s /bin/sh -c "yarn cache clean" \
    && chown -R www-data:www-data /var/www \
    && rm -rf /var/www/html/var/cache/dev/*

VOLUME ["/var/www/html"]
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["/usr/local/sbin/php-fpm"]
