#!/usr/bin/env bash

export DEBIAN_FRONTEND=noninteractive

echo "[+] Install common dependancies"
apt-get install build-essential -y > /dev/null
apt-get install curl -y > /dev/null

apt-get update > /dev/null
apt-get upgrade -y > /dev/null

echo "[+] Install vim"
apt-get install vim -y > /dev/null

echo "[+] Install git"
apt-get install git -y > /dev/null

echo "[+] Install nginx"
apt-get install nginx -y -f > /dev/null

echo "[+] Install mysql / mariadb 10.0"

cp /vagrant_data/mariadb.my.cnf ~/.my.conf

apt-get install software-properties-common dirmngr -y
apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 0xF1656F24C74CD1D8
add-apt-repository 'deb [arch=amd64,i386,ppc64el] http://mirrors.coreix.net/mariadb/repo/10.3/debian stretch main'
debconf-set-selections <<< 'mariadb-server-10.0 mysql-server/root_password password PASS'
debconf-set-selections <<< 'mariadb-server-10.0 mysql-server/root_password_again password PASS'
apt-get update
apt-get install mariadb-server -y > /dev/null

echo "[+] Setting mysql pass to devpass, using .my.cnf in homefolder and creating devwordpress database"
mysql -uroot -pPASS -e "CREATE DATABASE devwordpress"
mysql -uroot -pPASS -e "SET PASSWORD = PASSWORD('devpass');"

echo "[+] Installing php-fpm, modules and update nginx"
# sudo apt-get install php5-fpm php5-common php5-dev php5-mcrypt php5-gd php5-mysql php5-cli php5-curl php5-xdebug -y > /dev/null
sudo apt-get install php-fpm php-common php-dev php-mcrypt php-gd php-mysql php-cli php-curl php-xdebug -y > /dev/null
mv /etc/nginx/sites-available/default /etc/nginx/sites-available/default.bak
cp /vagrant_data/nginx.default.conf /etc/nginx/sites-available/default
cp /vagrant_data/nginx.info.php /usr/share/nginx/html/info.php
service nginx restart

echo "[+] Installing and downloading latest wordpress"
curl -s -L -O "http://wordpress.org/latest.tar.gz" > /dev/null
tar -zxf latest.tar.gz
rm latest.tar.gz
cp -R wordpress/* /usr/share/nginx/html/wordpress/
cp /vagrant_data/wordpress.default.config /usr/share/nginx/html/wordpress/wp-config.php
chown -R root:www-data /usr/share/nginx/html/wordpress
chmod -R g+w /usr/share/nginx/html/wordpress
chmod -R g+x /usr/share/nginx/html/wordpress

echo "[+] Setup wordpress"
service nginx restart

