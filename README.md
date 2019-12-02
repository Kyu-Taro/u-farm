#U-FARM

#環境構築

.envの作成
```bash
$ cp .evn.example .evn
```

DBの設定
```bash
作成した.envファイルに自身の環境に合わせて各種設定
```

auth機能の作成(こっちでやってるので必要ないかも？なので一度/loginにアクセスしてみてください)
```bash
composer require laravel/ui
php artisan ui vue —-auth
php artisan migrate
npm install
npm run dev
```
