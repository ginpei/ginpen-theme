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

以下の手順で行う。

1. 本番環境のバックアップを取得
2. ローカル開発用に変換
3. ローカル環境へ適用

バックアップは UpdraftPlus を利用する。

- [UpdraftPlus WordPress Backup Plugin – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/updraftplus/)

### 本番環境のバックアップを取得

1. 本番 WordPress サイトへ admin でログイン
2. 左メニュー 設定 > UpdraftPlus Backup
3. 「今すぐバックアップ」
4. 既存のバックアップ一覧からダウンロード
   - データベース
   - プラグイン
   - アップロード
   - その他

### ローカル開発用に変換

 1. `gunzip backup_0000-00-00-0000_Ginpencom_xxxxxxxxxxxx-db.gz`
 2. テキストファイル `backup_0000-00-00-0000_Ginpencom_xxxxxxxxxxxx-db` を開く
 3. `https://ginpen.com` を `http://localhost:8000` へ置換
 4. `gzip backup_0000-00-00-0000_Ginpencom_xxxxxxxxxxxx-db`

### ローカル環境へ適用

1. ローカル環境起動 `docker-compose up`
2. UpdraftPlus をインストール
3. バックアップファイルをアップロード
4. 既存のバックアップ の一覧で「復元」
5. 上の方「古いディレクトリを削除」
