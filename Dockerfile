FROM php:7.3.3-apache-stretch
WORKDIR /var/www/html
COPY . ./
RUN usermod -u 1000 www-data \
	&& chown -R www-data /var/www/html \
	&& chgrp -R www-data /var/www/html \
	# && chmod -R +x /var/www/html/*/file \
	&& docker-php-ext-install -j$(nproc) mysqli \
	&& a2enmod rewrite
EXPOSE 80
