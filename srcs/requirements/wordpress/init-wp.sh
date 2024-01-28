#!/bin/bash

if ! wp core is-installed --allow-root ; then
	# wp core download --allow-root --locale=ja
	wp core install --allow-root --path=/var/www/html --url="yuohno.42.fr" --title="Yuohno Blog" --admin_user="admin" --admin_password="password" --admin_email="admin@example.com" --locale=ja --skip-email
	wp language core install --allow-root ja
	wp site switch-language --allow-root ja
	wp option update --allow-root timezone_string 'Asia/Tokyo'
fi

exec /usr/sbin/php-fpm -F