cd /vagrant
sudo rpm -Uvh http://dl.fedoraproject.org/pub/epel/beta/6/x86_64/epel-release-6-5.noarch.rpm
sudo rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
sudo yum install -y --enablerepo=remi,remi-test mongodb mongodb-server php php-pecl-mongo
sudo chkconfig httpd on
sudo chkconfig mongod on
curl -s http://getcomposer.org/installer | php
php composer.phar install
sudo cp system/etc/httpd/conf/httpd.conf /etc/httpd/conf/
sudo cp system/etc/php.ini /etc/
sudo /etc/init.d/httpd restart
sudo /etc/init.d/mongod restart
