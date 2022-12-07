# ginpen-theme

https://ginpen.com 用の WordPress テーマ。

## プラグイン

動作に必要：

- [Markdown for WordPress and bbPress – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/markdown-for-wordpress-and-bbpress/)
- [SyntaxHighlighter Evolved – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/syntaxhighlighter/)

利用中：

- [Autoptimize – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/autoptimize/)
- [JM Twitter Cards – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/jm-twitter-cards/)
- [SiteGuard WP Plugin – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/siteguard/)

## 開発

### 準備

Docker のボリュームとして Git リポジトリーを載せるため、ディレクトリーは二重にする。（ `.` をボリュームに指定できない。プラグインのインストールに失敗するなど。）

1. `mkdir ginpen-theme && cd $_`
2. `git clone git@github.com:ginpei/ginpen-theme.git`
3. `ln ginpen-theme/.docker/docker-compose.yml .`

Docker の起動は外側 `ginpen-theme-workspace` で、テーマ開発は内側 `ginpen-theme-workspace/ginpen-theme` で行う。

### 起動

```console
$ docker-compose up
```

- http://localhost:8000/

### 初期状態へ戻す

```console
$ docker container rm ginpen-theme_wordpress_1 ginpen-theme_db_1
$ sudo rm -rf .backup/ .volumes/
```

### コンテナーへ入る

```console
$ docker exec -it ginpen-theme_wordpress_1 bash
```

## 環境のバックアップ、複製

All-in-One WP Migration を用いる。

- [All-in-One WP Migration – WordPress プラグイン | WordPress.org 日本語](https://ja.wordpress.org/plugins/all-in-one-wp-migration/)

たぶん `.htaccess` に以下を追加する必要がある。（しないとマイグレーションファイルのアップロード時、ファイルサイズ制限初期値 2MB のためエラーになる。また 512MB を超過する場合は有料版が必要？）

```
php_value upload_max_filesize 512M
php_value post_max_size 512M
```
