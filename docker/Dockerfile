ARG VERSION

FROM php:${VERSION}-cli-alpine

WORKDIR /app

RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
  && pecl install xdebug \
  && apk del pcre-dev ${PHPIZE_DEPS}

RUN docker-php-ext-install -j$(nproc) bcmath

RUN curl -sS https://getcomposer.org/installer | \
    php -- --2 --install-dir=/usr/local/bin --filename=composer
