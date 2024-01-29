#!/bin/bash

if ! wp core is-installed --allow-root ; then
	sleep 2

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

	wp user create --allow-root yuohno ${WORDPRESS_DEV_EMAIL} \
	--user_pass=${WORDPRESS_DEV_PASSWORD} \
	--role=author
fi

exec /usr/sbin/php-fpm -F