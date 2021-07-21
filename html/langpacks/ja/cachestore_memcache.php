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
 * Strings for component 'cachestore_memcache', language 'ja', version '3.11'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'クラスタサーバを有効にする';
$string['clustered_help'] = 'これは「read-one」および「set-multi」機能を有効にするために使用します。

これはロードバランス設定に関して、ストア改善を作成する場合を意図しています。ストアは1台のサーバ (通常、localhost) から取得しますが、多くの台数 (ロードバランスプール内のサーバすべて) を設定します。リードの割合が高く設定されているキャッシュの場合、これにより相当割合のネットワークオーバーヘッドを減らすことができます。

この設定が有効にされた場合、上記に一覧表示されているサーバがフェッチに使用されます。';
$string['clusteredheader'] = 'サーバを分割する';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'キー接頭辞';
$string['prefix_help'] = 'この接頭辞はmemcacheサーバで使用されるすべてのキー名に使用されます。
* このサーバに1つのインスタンスのみ存在する場合、あなたはこの値をデフォルトのままにすることができます。
* キー長の制限のため、半角5文字の最大長が許可されています。';
$string['prefixinvalid'] = '無効な接頭辞です。あなたは「a-z A-Z 0-9-_」のみ使用することができます。';
$string['privacy:metadata:memcache'] = 'Memcacheキャッシュストアプラグインはキャッシング機能の一部として短時間だけデータを保存します。このデータはデータが定期的に削除されるMemcacheサーバに保存されます。';
$string['privacy:metadata:memcache:data'] = 'キャッシュに保存された様々なデータです。';
$string['servers'] = 'サーバ';
$string['servers_help'] = 'ここではmemcacheアダプタに使用されるサーバを設定します。
サーバは1行に1台のサーバアドレス、任意でポートおよびウェイト値を記述することができます。
ポートが指定されない場合、デフォルトポート (11211) が使用されます。

例:
<pre>
server.url.com
ipaddress:ポート
servername:ポート:ウェイト値
</pre>

「クラスタサーバを有効にする」が有効にされた場合、ここに1台のサーバのみ表示される必要があります。通常、これは「127.0.0.1」または「localhost」のようにローカルマシンを解決する名称となります。';
$string['serversclusterinvalid'] = 'クラスタが有効にされている場合、厳密に1台のサーバを必要とします。';
$string['sessionhandlerconflict'] = '警告: memcacheインスタンス ({$a}) はセッションとして同じmemcachedサーバを使用するよう設定されています。すべてのキャッシュを削除することによりセッションも削除されることになります。';
$string['setservers'] = 'サーバを設定する';
$string['setservers_help'] = 'これはデータが修正された場合に更新されるサーバの一覧です。通常、プール内サーバの完全修飾名となります。仮に異なるホスト名であったとしても、上記に一覧表示されている「サーバ」を含む必要があります。サーバはサーバアドレスおよび任意でポートを1行に1台定義します。
ポートが提供されない場合、デフォルトポート (11211) が使用されます。

例:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'テストサーバ';
$string['testservers_desc'] = 'memcachedサーバをテストするための1つまたはそれ以上の接続ストリングです。テストサーバが指定された場合、管理ブロックのキャッシュパフォーマンスページを使用してmemcacheパフォーマンスをテストすることができます。
例: 127.0.0.1:11211';
