<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_redis', language 'ja', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'CAファイルパス';
$string['ca_file_help'] = 'ローカルファイルシステム上の認証局ファイルの場所です。';
$string['clustermode'] = 'クラスタモード';
$string['clustermode_help'] = 'クラスタモード設定を有効にした場合、Redisクラスタ機能が実行されてサーバが複数サーバに同時にリクエストを処理できるようになります。';
$string['clustermodeunavailable'] = 'Redis Clusterは現在使用できません。PHP Redis拡張モジュールがRedis Cluster機能をサポートしていることをご確認ください。';
$string['compressor_none'] = '圧縮しません';
$string['compressor_php_gzip'] = 'gzip圧縮を使用します';
$string['compressor_php_zstd'] = 'Zstandard圧縮を使用します';
$string['connectiontimeout'] = '接続タイムアウト';
$string['connectiontimeout_help'] = 'ここではRedisサーバへの接続を試みる際のタイムアウトを設定します。';
$string['encrypt_connection'] = 'TLS暗号化を使用する';
$string['encrypt_connection_help'] = 'TLSを使用してRedisに接続します。Redisホスト名に「tls://」を使用せず、代わりにこのオプションを使用します。';
$string['password'] = 'パスワード';
$string['password_help'] = 'ここではRedisサーバにパスワードを設定します。';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'キー接頭辞';
$string['prefix_help'] = 'この接頭辞はRedisサーバのすべてのキー名に使用されます。
* このサーバで使用しているのMoodleインスタンスが1つのみの場合、あなたはこの値をデフォルトのままにすることができます。
* キー長の制限のため最大半角5文字が許可されます。';
$string['prefixinvalid'] = '無効な接頭辞です。あなたは「a-z A-Z 0-9-_」のみ使用することができます。';
$string['privacy:metadata:redis'] = 'Redisキャッシュストアプラグインはキャッシング機能の一部として短時間だけデータを保存します。このデータはデータが定期的に削除されるRedisサーバに保存されます。';
$string['privacy:metadata:redis:data'] = 'キャッシュに保存された様々なデータです。';
$string['serializer_igbinary'] = 'igbinaryシリアライザ';
$string['serializer_php'] = 'デフォルトPHPシリアライザ';
$string['server'] = 'サーバ';
$string['server_help'] = 'テストに使用するRedisサーバです。

以下、値の例をいくつか示します:

* testredis.abc.com - ホスト名でRedisサーバに接続します (デフォルトではポート6379)。
* testredis.abc.com:1234 - ホスト名の特定のポートでRedisサーバに接続します。
* 1.2.3.4 - IPアドレス (デフォルトではポート6379) でRedisサーバに接続します。
* 1.2.3.4:1234 - IPアドレスの特定のポートでRedisサーバに接続します。
* unix:///var/redis.sock - Unixソケットを使用してRedisサーバに接続します。
* /var/redis.sock - Unixソケット (代替フォーマット) を使用してRedisサーバに接続します。

* クラスタモードが有効にされている場合、改行で区切ってサーバを指定してください。例えば以下のようになります:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

詳細情報は<a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">クライアント接続を受け付ける</a> および<a href="https://redis.io/resources/clients/#php" target="_new">Redis PHPクライアント</a>をご覧ください。';
$string['task_ttl'] = 'Redisキャッシュ期限切れエントリが使用するメモリを解放する';
$string['test_clustermode'] = 'クラスタモード';
$string['test_clustermode_desc'] = 'Redisクラスタモードでテストを有効にします。';
$string['test_password'] = 'テストサーバパスワード';
$string['test_password_desc'] = 'Redisテストサーバのパスワードです。';
$string['test_serializer'] = 'シリアライザ';
$string['test_serializer_desc'] = 'テストに使用するシリアライザです。';
$string['test_server'] = 'テストサーバ';
$string['test_server_desc'] = 'テストに使用するRedisサーバです。

以下、値の例をいくつか示します:

* testredis.abc.com - ホスト名でRedisサーバに接続します (デフォルトではポート6379)。
* testredis.abc.com:1234 - ホスト名の特定のポートでRedisサーバに接続します。
* 1.2.3.4 - IPアドレス (デフォルトではポート6379) でRedisサーバに接続します。
* 1.2.3.4:1234 - IPアドレスの特定のポートでRedisサーバに接続します。
* unix:///var/redis.sock - Unixソケットを使用してRedisサーバに接続します。
* /var/redis.sock - Unixソケット (代替フォーマット) を使用してRedisサーバに接続します。

* クラスタモードが有効にされている場合、改行で区切ってサーバを指定してください。例えば以下のようになります:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

詳細情報は<a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">クライアント接続を受け付ける</a> および<a href="https://redis.io/resources/clients/#php" target="_new">Redis PHPクライアント</a>をご覧ください。';
$string['test_ttl'] = 'TTLテスト';
$string['test_ttl_desc'] = 'TTL (遅いセット) を必要とするキャッシュを使用してパフォーマンステストを実行します。';
$string['usecompressor'] = '圧縮を使用する';
$string['usecompressor_help'] = 'シリアライズの後に使用するコンプレッサを指定してください。これはphp-redisレベルではなくMoodleキャッシュAPIレベルで実行されます。';
$string['useserializer'] = 'シリアライザを使用する';
$string['useserializer_help'] = 'シリアライズに使用するシリアライザを指定してください。有効なシリアライザは「Redis::SERIALIZER_PHP」または「Redis::SERIALIZER_IGBINARY」です。後者は「--enable-redis-igbinary option」によりphpredisが有効にされた上でigbinary拡張モジュールがロードされている場合のみサポートされます。';
