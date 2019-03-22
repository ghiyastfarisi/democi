# Dockerfile PHP 7.3.3 + NodeJS 10.15.3
FROM php:7.3.3-apache-stretch
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash -
RUN apt-get update && apt-get install -y \
		nodejs \
	--no-install-recommends && rm -r /var/lib/apt/lists/*
RUN npm install --global yarn && yarn install
WORKDIR /var/www/html
COPY . ./
RUN usermod -u 1000 www-data \
	&& chown -R www-data /var/www/html \
	&& chgrp -R www-data /var/www/html \
	# && chmod -R +x /var/www/html/*/file \
	&& docker-php-ext-install -j$(nproc) mysqli \
	&& a2enmod rewrite
EXPOSE 80
