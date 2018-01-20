FROM php:7.1.2-apache

#Install git
run apt-get update
run apt-get  --yes --force-yes upgrade
run apt-get  --yes --force-yes install git-core
run apt-get  --yes --force-yes install wget

# Install composer
run wget https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer -O - -q | php -- --quiet --install-dir=/usr/local/bin


# Install Dependencies
workdir /app/src/
ADD app/src/composer.json /app/src/composer.json
RUN php /usr/local/bin/composer.phar install --no-dev
run cp -r ./vendor /var/www/html/vendor

# Add default apache listener
COPY app/conf/apache-config.conf /etc/apache2/sites-enabled/000-default.conf
COPY app/conf/ports.conf /etc/apache2/ports.conf
COPY app/src /var/www/html/




