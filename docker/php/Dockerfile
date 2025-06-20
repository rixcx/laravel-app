FROM php:8.2-fpm

# タイムゾーン設定
ENV TZ=Asia/Tokyo

# 必要なパッケージインストール
RUN apt-get update && apt-get install -y \
    zip unzip curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composerインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Laravelプロジェクトを配置するルート
WORKDIR /var/www