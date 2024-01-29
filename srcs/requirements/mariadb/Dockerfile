# Debian ベースイメージを使用
# FROM debian:latest
FROM debian:bullseye-slim

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y mariadb-server tini
    # net-tools

# RUN mkdir /var/lib/mysql/wordpress/
# RUN chown -R mysql:mysql /var/lib/mysql/wordpress/

ARG MYSQL_ROOT_PASSWORD
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD

# カスタムエントリポイントスクリプトのコピー
COPY tools/init-db.sh /docker-entrypoint-initdb.d/
RUN chmod +x /docker-entrypoint-initdb.d/init-db.sh

# COPY ./entrypoint.sh /usr/local/bin/
# RUN chmod +x /usr/local/bin/entrypoint.sh

COPY conf/my.cnf /etc/mysql/my.cnf

RUN service mariadb start && /docker-entrypoint-initdb.d/init-db.sh

# ポートの露出
EXPOSE 3306

ENTRYPOINT [ "/usr/bin/tini", "--" ]

# カスタムエントリポイントスクリプトの実行
# ENTRYPOINT [ "/usr/local/bin/entrypoint.sh" ]
CMD [ "mysqld" ]
