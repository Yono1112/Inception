# Debian ベースイメージを使用
FROM debian:latest

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y mariadb-server

# RUN mkdir /var/lib/mysql/wordpress/
# RUN chown -R mysql:mysql /var/lib/mysql/wordpress/

# カスタムエントリポイントスクリプトのコピー
COPY ./init-db.sh /docker-entrypoint-initdb.d/
RUN chmod +x /docker-entrypoint-initdb.d/init-db.sh

COPY ./entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh

# ポートの露出
EXPOSE 3306

# カスタムエントリポイントスクリプトの実行
ENTRYPOINT [ "/usr/local/bin/entrypoint.sh" ]
