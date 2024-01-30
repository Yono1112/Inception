# FROM wordpress:latest
# FROM wordpress:php7.4-fpm
# FROM debian:latest
# FROM debian:bookworm-slim
FROM debian:bullseye-slim

# 必要な依存関係のインストール
RUN apt-get update && apt-get install -y \
    php7.4 \
    php7.4-fpm \
    php7.4-mysql \
    php7.4-gd \
    php7.4-curl \
    wget \
    # telnet \
    && rm -rf /var/lib/apt/lists/*

# PHP-FPMのバージョンに応じた実行可能ファイルのパスを確認
RUN ln -s /usr/sbin/php-fpm* /usr/sbin/php-fpm

# WordPressのダウンロードとセットアップ
# --strip-components=1で解凍後のファイルをルートディレクトリにそのまま格納する
WORKDIR /var/www/html
RUN wget https://wordpress.org/latest.tar.gz \
    && tar xzvf latest.tar.gz --strip-components=1 \
    && rm latest.tar.gz

# WP-CLIのインストール
RUN wget -O /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x /usr/local/bin/wp

# wp-config.php ファイルの設定
COPY conf/wp-config.php /var/www/html/wp-config.php
COPY conf/www.conf /etc/php/7.4/fpm/pool.d/www.conf

# ファイルの所有権を変更
RUN mkdir -p /run/php && chown -R www-data:www-data /run/php

# WordPressの初期設定スクリプトを追加
COPY tools/init-wp.sh /usr/local/bin/init-wp.sh
RUN chmod +x /usr/local/bin/init-wp.sh

EXPOSE 9000

# PHP-FPMを実行
# CMD ["/usr/sbin/php-fpm", "-F"]
ENTRYPOINT [ "/usr/local/bin/init-wp.sh" ]