#!/bin/bash
sudo amazon-linux-extras install epel
 
sudo yum-config-manager --save --setopt=hashicorp.skip_if_unavailable=true
 
# 古いバージョンのPHP を削除
sudo yum -y remove php*
 
# lamp-mariadb10.2-php7.2 を無効化
sudo amazon-linux-extras  disable lamp-mariadb10.2-php7.2
 
 
# 利用するphpのバージョンを8.1に切り替え
sudo amazon-linux-extras disable php7.2
sudo amazon-linux-extras install -y php8.1
sudo yum clean metadata && sudo yum -y install php-devel php-xml php-gd php-intl php-mbstring php-opcache 
 
 
# タイムゾーンの設定
sudo timedatectl set-timezone Asia/Tokyo
# ロケールの設定
sudo localectl set-locale LANG=ja_JP.utf8
 
# PHPの設定ファイルを追加
sudo echo "date.timezone = Asia/Tokyo" |sudo tee /etc/php.d/999-php-codecamp.ini
sudo echo "display_errors = On" |sudo tee -a /etc/php.d/999-php-codecamp.ini
sudo echo "mbstring.internal_encoding = UTF-8" |sudo tee -a /etc/php.d/999-php-codecamp.ini
 
# xdebug の指定をコメントアウト
sudo sed -i -e "s/^zend_extension=/;zend_extension=/" /etc/php.d/30-xdebug.ini
 
# MariaDB をインストール
sudo amazon-linux-extras install -y  mariadb10.5
 
# mariadb を起動
sudo systemctl start mariadb
# 自動起動設定
sudo systemctl enable mariadb
 
# rootユーザーのパスワード変更
echo "grant all privileges on *.* to root@localhost identified by 'secret' with grant option;" > ~/environment/setup.sql
echo "flush privileges;" >> ~/environment/setup.sql
 
# phpMyAdmin のインストール
wget https://files.phpmyadmin.net/phpMyAdmin/5.2.0/phpMyAdmin-5.2.0-all-languages.zip
unzip ~/environment/phpMyAdmin-5.2.0-all-languages.zip
mv ~/environment/phpMyAdmin-5.2.0-all-languages ~/environment/phpmyadmin
rm ~/environment/phpMyAdmin-5.2.0-all-languages.zip
rm -Rf __MACOSX
sed -i -e "s/\$col_visib\[\$j\]$/\$col_visib\[\$j\] ?? false/" ~/environment/phpmyadmin/libraries/classes/Display/Results.php