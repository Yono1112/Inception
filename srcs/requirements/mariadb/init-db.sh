#!/bin/bash

# データベースの作成
mariadb -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"

# ユーザーの作成と権限付与
mariadb -e "CREATE USER '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';"
mariadb -e "GRANT ALL PRIVILEGES ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%';"

mariadb -e "CREATE USER '${MYSQL_ADMIN_NAME}'@'%' IDENTIFIED BY '${MYSQL_ADMIN_PASSWORD}';"
mariadb -e "GRANT ALL PRIVILEGES ON *.* TO '${MYSQL_ADMIN_NAME}'@'%';"

# 権限のフラッシュ
mariadb -e "FLUSH PRIVILEGES;"
