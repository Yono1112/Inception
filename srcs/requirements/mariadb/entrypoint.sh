#!/bin/bash

# MariaDBサーバの起動
mysqld_safe &

# MariaDBサーバが起動するのを待機
sleep 10

# init-db.sh スクリプトの実行
/docker-entrypoint-initdb.d/init-db.sh

# MariaDBサーバのプロセスが終了しないように待機
wait $!
