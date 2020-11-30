# ginpen-theme

https://ginpen.com 用の WordPress テーマ。

## 開発

### 起動

```console
$ docker-compose up
```

### 初期状態へ戻す

```console
$  docker container rm ginpen-theme_wordpress_1 ginpen-theme_db_1 \
&& docker volume    rm ginpen-theme_wordpress   ginpen-theme_db
```

### コンテナーへ入る

```console
$ docker exec -it ginpen-theme_wordpress_1 bash
```

### データベースをエクスポート

（全体バックアップは別項参照。）

```console
$ docker exec -i ginpen-theme_db_1 mysqldump -u root -p wordpress > .backup/dump.sql
Enter password:
```

root のパスワードは `MYSQL_ROOT_PASSWORD` で設定したもの。

### データベースをインポート

`docker exec` でのやり方がよくわからなかった。

```console
$ docker exec -it ginpen-theme_db_1 bash
```

```console
# mysql -u root -p wordpress < /mnt/wp-backup/dump.sql
Enter password:
```

## 本番のバックアップをローカル環境へ反映

All-in-One WP Migration を用いる。

- [All-in-One WP Migration – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/all-in-one-wp-migration/)

たぶん `.htaccess` に以下を追加する必要がある。（しないとマイグレーションファイルのアップロード時、ファイルサイズ制限初期値 2MB のためエラーになる。また 512MB を超過する場合は有料版が必要？）

```
php_value upload_max_filesize 512M
php_value post_max_size 512M
```
