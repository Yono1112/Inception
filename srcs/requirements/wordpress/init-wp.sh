#!/bin/bash

if ! wp core is-installed --allow-root ; then
	wp core install --allow-root --path=/var/www/html \
	--url="yuohno.42.fr" \
	--title="Yuohno Blog" \
	--admin_user="${WORDPRESS_ADMIN_USER}" \
	--admin_password="${WORDPRESS_ADMIN_PASSWORD}" \
	--admin_email="${WORDPRESS_ADMIN_EMAIL}" \
	--locale=ja \
	--skip-email
	wp language core install --allow-root ja
	wp site switch-language --allow-root ja
	wp option update --allow-root timezone_string 'Asia/Tokyo'
fi

exec /usr/sbin/php-fpm -F