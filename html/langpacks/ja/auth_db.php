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
 * Strings for component 'auth_db', language 'ja', version '4.1'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = '外部データベースに接続できません。';
$string['auth_dbcannotreadtable'] = '外部テーブルを読むことができません。';
$string['auth_dbcantconnect'] = '指定された認証データベースに接続できませんでした ...';
$string['auth_dbchangepasswordurl_key'] = 'パスワード変更URL';
$string['auth_dbcolumnlist'] = '外部テーブルには次のカラムを含みます:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'ADOdbデバッグ';
$string['auth_dbdebugauthdbhelp'] = '外部データベースへのADOdb接続のデバッグ - ログイン時に空白ページが表示される場合に使用してください。実運用サイトには適していません。';
$string['auth_dbdeleteuser'] = '削除済みユーザ {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'ユーザ {$a} の削除中にエラーが発生しました。';
$string['auth_dbdescription'] = 'ここではユーザ名およびパスワードが有効であるか確認するため、外部データベーステーブルを使用します。新しいアカウントを作成する場合、その他のフィールド情報もMoodleに複製されます。';
$string['auth_dbextencoding'] = '外部データベースエンコーディング';
$string['auth_dbextencodinghelp'] = '外部データベースで使用されるエンコーディングです。';
$string['auth_dbextrafields'] = 'これらのフィールドは任意項目です。あなたはここで指定した<b>外部データベースフィールド</b>から事前に入力されたMoodleユーザフィールドを選択することもできます。<p>空白の場合、デフォルト値が使用されます。</p><p>どちらの場合でも、ユーザはログイン後、これらすべてのフィールドを編集することができます。</p>';
$string['auth_dbfieldpass'] = 'パスワードを含んだフィールド名';
$string['auth_dbfieldpass_key'] = 'パスワードフィールド';
$string['auth_dbfielduser'] = 'ユーザ名を含んだフィールド名です。このフィールドはVarCharデータタイプにする必要があります。';
$string['auth_dbfielduser_key'] = 'ユーザ名フィールド';
$string['auth_dbhost'] = 'データベースサーバが稼動しているコンピュータです。ODBCを使用している場合、システムDSNエントリを使用してください。PDOを使用している場合、PDO DSNエントリを使用してください。';
$string['auth_dbhost_key'] = 'ホスト';
$string['auth_dbinsertuser'] = '登録済みユーザ {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'ユーザ {$a->username} の追加中にエラーが発生しました - このユーザ名のユーザはすでに「 {$a->auth} 」プラグイン経由で作成されています。';
$string['auth_dbinsertusererror'] = 'ユーザ登録エラー {$a}';
$string['auth_dbname'] = 'データベース名です。ODBC DSNを使用している場合、空白のままにしてください。あなたのPDO DSNにすでにデータベース名が含まれている場合、空白のままにしてください。';
$string['auth_dbname_key'] = 'データベース名';
$string['auth_dbnoexttable'] = '外部テーブルが指定されていません。';
$string['auth_dbnouserfield'] = '外部ユーザフィールドが指定されていません。';
$string['auth_dbpass'] = '上記ユーザ名に合致するパスワード';
$string['auth_dbpass_key'] = 'パスワード';
$string['auth_dbpasstype'] = '<p>パスワードフィールドで使用するフォーマットを指定してください。</p>
<p>あなたが外部データベースにユーザ名およびメールアドレスを管理させてMoodleにはパスワードを管理させたい場合、「内部」を使用してください。あなたが「内部」を使用する場合、外部データベースのメールアドレスフィールドを提供して「 \\auth_db\\task\\sync_users」スケジュールタスクを有効にする必要があります。新しいユーザに仮パスワード記載したメールをMoodleが送信します。</p>';
$string['auth_dbpasstype_key'] = 'パスワードフォーマット';
$string['auth_dbreviveduser'] = '回復済みユーザ {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'ユーザ {$a} の回復中にエラーが発生しました。';
$string['auth_dbsaltedcrypt'] = '文字列の1方向のハッシュを暗号化する';
$string['auth_dbsetupsql'] = 'SQLセットアップコマンド';
$string['auth_dbsetupsqlhelp'] = '特別データベースセットアップ用のSQLコマンドです。多くの場合、コミュニケーションエンコーディングに使用されます - 例 MySQLおよびPostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '一時停止済みユーザ {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'ユーザ {$a} の一時停止中にエラーが発生しました。';
$string['auth_dbsybasequoting'] = 'Sybaseクオートを使用する';
$string['auth_dbsybasequotinghelp'] = 'Sybaseスタイルのシングルクオートエスケープです - Oracle、MS SQLおよび他のデータベースに必要です。MySQLには使用しないでください!';
$string['auth_dbsyncuserstask'] = 'ユーザタスクを同期する';
$string['auth_dbtable'] = 'データベースのテーブル名';
$string['auth_dbtable_key'] = 'テーブル';
$string['auth_dbtableempty'] = '外部テーブルが空です。';
$string['auth_dbtype'] = 'データベースタイプです (詳細はドキュメンテーション<a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - PHPのためのデータベース抽象化レイヤー</a>をご覧ください)。';
$string['auth_dbtype_key'] = 'データベース';
$string['auth_dbupdateerror'] = '外部データベースの更新中にエラーが発生しました。';
$string['auth_dbupdateusers'] = 'ユーザを更新する';
$string['auth_dbupdateusers_description'] = '新しいユーザを追加および既存のユーザを更新します。';
$string['auth_dbupdatinguser'] = '更新ユーザ {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'データベースへのリードアクセス用ユーザ名';
$string['auth_dbuser_key'] = 'DBユーザ';
$string['auth_dbuserstoadd'] = '追加するユーザエントリ: {$a}';
$string['auth_dbuserstoremove'] = '削除するユーザエントリ: {$a}';
$string['pluginname'] = '外部データベース';
$string['privacy:metadata'] = '外部データ認証プラグインはいかなる個人データも保存しません。';
