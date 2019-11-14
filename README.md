## migration
```bash
$ php artisan migrate
```

```bash
$ docker-compose exec app artisan migrate
```

# コンテナ内に入る
```bash
$ docker-compose exec app ash
```

https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4

## docker-compose
docker-composeを使って環境を構築します

```bash
$ docker-compose up
```

### composerをインストール
```bash
docker-compose exec cmposer install
```

## application encryption keyの生成
```bash
$ docker-compose exec php artisan key:generate
```


### migration

```bash
$ docker-compose exec php artisan migrate
```

storage/logs
に書き込みできずPermissionエラーが発生
とりあえず777に設定

chown www-data:www-data -R storage 