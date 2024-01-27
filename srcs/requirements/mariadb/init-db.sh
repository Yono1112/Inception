#!/bin/bash

# データベースの作成
mariadb -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"
# mariadb -e "CREATE DATABASE IF NOT EXISTS wordpress;"

# ユーザーの作成と権限付与
mariadb -e "CREATE USER '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';"
mariadb -e "GRANT ALL PRIVILEGES ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%';"
# mariadb -e "CREATE USER 'wordpress'@'%' IDENTIFIED BY 'wordpress';"
# mariadb -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'%';"

# 権限のフラッシュ
mariadb -e "FLUSH PRIVILEGES;"
