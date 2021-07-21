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
 * Strings for component 'cachestore_redis', language 'ja', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = '圧縮しません';
$string['compressor_php_gzip'] = 'gzip圧縮を使用します';
$string['compressor_php_zstd'] = 'Zstandard圧縮を使用します';
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
$string['server_help'] = 'ここではRedisサーバが使用するホスト名またはIPアドレスを設定します。';
$string['test_password'] = 'テストサーバパスワード';
$string['test_password_desc'] = 'Redisテストサーバのパスワードです。';
$string['test_serializer'] = 'シリアライザ';
$string['test_serializer_desc'] = 'テストに使用するシリアライザです。';
$string['test_server'] = 'テストサーバ';
$string['test_server_desc'] = 'テストに使用するRedisサーバです。';
$string['usecompressor'] = '圧縮を使用する';
$string['usecompressor_help'] = 'シリアライズの後に使用するコンプレッサを指定してください。これはphp-redisレベルではなくMoodleキャッシュAPIレベルで実行されます。';
$string['useserializer'] = 'シリアライザを使用する';
$string['useserializer_help'] = 'シリアライズに使用するシリアライザを指定してください。有効なシリアライザは「Redis::SERIALIZER_PHP」または「Redis::SERIALIZER_IGBINARY」です。後者は「--enable-redis-igbinary option」によってphpredisが有効にされた上でigbinary拡張モジュールがロードされている場合のみサポートされます。';
