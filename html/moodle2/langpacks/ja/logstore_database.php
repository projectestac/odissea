<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'logstore_database', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'バッファサイズ';
$string['buffersize_help'] = '1回のデータベースバッチ処理で挿入されるログエントリ数です。パフォーマンスを改善します。';
$string['conectexception'] = 'データベースに接続できません。';
$string['create'] = '作成';
$string['databasecollation'] = 'データベース照合順序';
$string['databasehandlesoptions'] = 'データベース処理オプション';
$string['databasehandlesoptions_help'] = 'リモートデータベースは独自オプションを処理します。';
$string['databasepersist'] = '持続的データベース接続';
$string['databaseschema'] = 'データベーススキーマ';
$string['databasesettings'] = 'データベース設定';
$string['databasesettings_help'] = '外部ログデータベースへの接続詳細: {$a}';
$string['databasetable'] = 'データベーステーブル';
$string['databasetable_help'] = 'ログが記録されるテーブル名です。このテーブルには「logstore_standard」(mdl_logstore_standard_log) で使用される構造IDを含む必要があります。';
$string['filters'] = 'フィルタログ';
$string['filters_help'] = '記録からいくつかの動作を除外するフィルタを有効にします。';
$string['includeactions'] = 'これらのタイプの動作を含む';
$string['includelevels'] = 'これらの教育レベルの動作を含む';
$string['logguests'] = 'ゲストの動作を記録する';
$string['other'] = 'その他';
$string['participating'] = '参加する';
$string['pluginname'] = '外部データベースログ';
$string['pluginname_desc'] = '外部データベーステーブルにログエントリを記録するログプラグインです。';
$string['privacy:metadata:log'] = '過去のイベント群です。';
$string['privacy:metadata:log:anonymous'] = 'イベントが匿名にフラグされたか示します。';
$string['privacy:metadata:log:eventname'] = 'イベント名です。';
$string['privacy:metadata:log:ip'] = 'イベントの時間に使用されるIPアドレスです。';
$string['privacy:metadata:log:origin'] = 'イベントの起点です。';
$string['privacy:metadata:log:other'] = 'イベントに関する追加情報です。';
$string['privacy:metadata:log:realuserid'] = 'ユーザの代理になる場合の背後にいる実際のユーザのIDです。';
$string['privacy:metadata:log:relateduserid'] = 'このイベントに関連するユーザのIDです。';
$string['privacy:metadata:log:timecreated'] = 'イベントが発生した日時です。';
$string['privacy:metadata:log:userid'] = 'このイベントを実行したユーザのIDです。';
$string['read'] = '閲覧';
$string['tablenotfound'] = '指定されたテーブルは見つかりませんでした。';
$string['teaching'] = '教える';
$string['testingsettings'] = 'データベース設定テスト ...';
$string['testsettings'] = 'テスト接続';
$string['update'] = '更新';
