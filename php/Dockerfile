FROM php:7.4-alpine

RUN apk --update add \
    #パッケージアップデート
    tzdata \
    #tzdataパッケージインストール
    oniguruma-dev && \
    #正規表現パッケージのインストール
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    #/etc/localtimeにAsia/Tokyoを設定
    apk del tzdata && \
    rm -rf /var/cache/apk/* && \
    #tzdataパッケージを削除
    docker-php-ext-install mbstring
#コンテナイメージに事前に圧縮されて入っているエクステンションの操作
#mb系の関数を利用するためにモジュールをインストール

COPY php.ini-development /usr/local/etc/php/php.ini

WORKDIR /work

CMD ["php", "-S", "0.0.0.0:8000", "-t", "/work/web"]
