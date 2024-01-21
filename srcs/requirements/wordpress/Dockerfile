# FROM wordpress:latest
# FROM wordpress:php7.4-fpm
FROM debian:latest

# 必要な依存関係のインストール
RUN apt-get update && apt-get install -y \
    php \
    php-fpm \
    php-mysql \
    php-gd \
    php-curl \
    wget \
    # telnet \
    && rm -rf /var/lib/apt/lists/*

# PHP-FPMのバージョンに応じた実行可能ファイルのパスを確認
RUN ln -s /usr/sbin/php-fpm* /usr/sbin/php-fpm

# WordPressのダウンロードとセットアップ
WORKDIR /var/www/html
RUN wget https://wordpress.org/latest.tar.gz \
    && tar xzvf latest.tar.gz --strip-components=1 \
    && rm latest.tar.gz

# wp-config.php ファイルの設定
COPY wp-config.php /var/www/html/wp-config.php
COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf

# ファイルの所有権を変更
RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000

# PHP-FPMを実行
CMD ["/usr/sbin/php-fpm", "-F"]