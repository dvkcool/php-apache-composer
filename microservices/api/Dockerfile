FROM php:7.1.2-apache

#Install git
run apt-get update
run apt-get  --yes --force-yes upgrade
run apt-get  --yes --force-yes install git-core


# Install composer
run php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
run php composer-setup.php --install-dir=/usr/local/bin
run php -r "unlink('composer-setup.php');"
workdir /app/src/
ADD app/src/composer.json /app/src/composer.json
RUN php /usr/local/bin/composer.phar install --no-dev
run cp -r ./vendor /var/www/html/vendor

# Add default apache listener
COPY app/conf/apache-config.conf /etc/apache2/sites-enabled/000-default.conf
COPY app/conf/ports.conf /etc/apache2/ports.conf
COPY app/src /var/www/html/




