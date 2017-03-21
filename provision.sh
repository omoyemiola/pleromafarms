#!/bin/bash

#update the package manager
apt-get update -y

apt-get install nginx -y
rm /etc/nginx/sites-available/default
cp /vagrant/default  /etc/nginx/sites-available

add-apt-repository ppa:ondrej/php
apt-get install python-software-properties build-essential -y
apt-get update -y

apt-get install php7.0 php7.0-common php7.0-mysql php7.0-dev php7.0-cli php7.0-fpm -y
rm /etc/php/7.0/fpm/pool.d/www.conf
cp /vagrant/www.conf  /etc/php/7.0/fpm/pool.d

apt-get install debconf-utils -y

debconf-set-selections <<< "mysql-server mysql-server/root_password password root"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password root"
apt-get install mysql-server -y

debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean true"
debconf-set-selections <<< "phpmyadmin phpmyadmin/app-password-confirm password root"
debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/admin-pass password root"
debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/app-pass password root"
debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect none"

apt-get install phpmyadmin -y 

ln -s /usr/share/phpmyadmin /vagrant/www

apt-get install php7.0-mbstring 
phpenmod php7.0-mbstring
apt-get install php7.0-mcrypt
phpenmod php7.0-mcrypt

service nginx restart
service php7.0-fpm restart 

