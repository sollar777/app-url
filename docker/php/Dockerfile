FROM php:7.4-fpm-alpine
 

# Set working directory
WORKDIR /var/www

RUN rm -rf /var/www/html
RUN ln -s public html

RUN apk update --no-cache \
&& apk add \
icu-dev \
oniguruma-dev \
tzdata \
nodejs \
git \
bash \
openssl \
mysql-client \
npm
 
RUN docker-php-ext-install intl pdo_mysql pcntl mbstring bcmath
 
RUN rm -rf /var/cache/apk/*
 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Add user for laravel application
# RUN groupadd -g 1000 www
# RUN useradd -u 1000 -ms /bin/bash -g www www

# # Copy existing application directory contents
# COPY . /var/www

# # Copy existing application directory permissions
# COPY --chown=www:www . /var/www

# # Change current user to www
# USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
 
CMD ["php-fpm"]