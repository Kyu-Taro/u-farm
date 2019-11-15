私すぐ忘れちゃうので、詳しく書いてあります  
そんなの知ってるわ！ってとこは適当に飛ばしてくださいね！

# フォルダ構成
- client フロントエンド(Nuxt)関連
- server php
- log 各種ログ
- docker docker

だいぶ適当に区切ってあるので、変えてください  
なんでpackage.jsonはclientに入れないの？とか

# 環境構築

Docker立ち上げて
```bash
$ docker-compose up
```

確認
laravel, mysql, nginx, nodejsが立ち上がる
```bash
$ docker-compose ps
        Name                    Command           State           Ports         
--------------------------------------------------------------------------------
laravel-nuxt_app_1      docker-php-entrypoint     Up      9000/tcp              
                        php-fpm                                                 
laravel-nuxt_db_1       docker-entrypoint.sh      Up      3306/tcp, 33060/tcp   
                        mysqld                                                  
laravel-nuxt_nodejs_1   docker-entrypoint.sh      Up      0.0.0.0:3000->3000/tcp
                        sleep ...                                               
laravel-nuxt_web_1      nginx -g daemon off;      Up      0.0.0.0:8080->80/tcp
```

appコンテナの中入ってlaravelセットアップ
```bash
$ docker-compose exec app ash
$ composer install
$ php artisan migrate
```

ここパーミッション766でいいはずなのに777じゃないとエラーでます  
なんでか不明。。。  
だれかおしえてくださーい

```bash
$ chmod 777 -R storage
```

今回は大した情報入ってないので.envファイルまでプッシュしてありますが、  
.env自分で作った場合

appkeyと
jwt認証に使うマスターキーを生成します

```bash
$ php artisan key:generate
$ php artisan jwt:secret
```

laracelの設定は一旦終了  
ここまでくれば、
[http://localhost:8080](http://localhost:8080)  
で一旦サイト確認できます

appコンテナから一旦抜けて  
nodeコンテナに

```bash
$ docker-compose exec nodejs bash
$ yarn install
```

セットアップ終了

# 開発時
nodeの開発サーバー立てて開発
laravel側にCORSの設定いるかも、要検証

```bash
$ docker-compose exec nodejs bash
$ yarn run dev
```
ブラウザで開いてアクセス  
[http://localhost:3000](http://localhost:3000)  

apiサーバー（laravel）はこっち  
[http://localhost:8080](http://localhost:8080)

# デプロイ
不明でーす

```bash
docker-compose exec nodejs yarn run build
```

## メモ  
nuxtビルドして、publicフォルダに詰め込む  
公式レポジトリのIssueにエラーでコンパイルできないみたいなこと書いてある  
nuxt hookのdoneのタイミングでdistフォルダにstaticたちが吐き出されていないのが原因  
とりあえずシェルスクリプトで代用しときました