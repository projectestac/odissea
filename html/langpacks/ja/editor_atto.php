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
 * Strings for component 'editor_atto', language 'ja', version '4.1'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'サーバに接続できませんでした。このページを送信した場合、あなたの変更を失うことになります。';
$string['autosavefrequency'] = 'オートセーブ頻度';
$string['autosavefrequency_desc'] = 'これはオートセーブ間の秒数です。同じユーザが同じフォームに戻った時点で自動的にテキストがリストアされるようAttoはこの設定をもとにエディタのテキストを自動的に保存します。';
$string['autosaves'] = 'エディタ自動保存情報です。';
$string['autosavesucceeded'] = '下書きが保存されました。';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = '「 {$a} 」行は正しいフォーマットではありません。';
$string['errorgroupisusedtwice'] = 'グループ「 {$a} 」は2回定義されています。グループ名はユニークである必要があります。';
$string['errornopluginsorgroupsfound'] = 'プラグインまたはグループが見つかりませんでした。グループまたはプラグインを追加してください。';
$string['errorpluginisusedtwice'] = 'プラグイン「 {$a} 」は2回使用されています。プラグインは1回のみ定義することができます。';
$string['errorpluginnotfound'] = 'プラグイン「 {$a} 」を使用できません。インストールされていないようです。';
$string['errortextrecovery'] = '残念ですが下書きバージョンを保存することができませんでした。';
$string['infostatus'] = '情報';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Atto HTMLエディタ';
$string['privacy:metadata:database:atto_autosave'] = '自動的に保存されたテキストエディタ下書きです。';
$string['privacy:metadata:database:atto_autosave:drafttext'] = '保存されたテキストです。';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'コンテンツが修正された時間です。';
$string['privacy:metadata:database:atto_autosave:userid'] = 'データが保存されたユーザのIDです。';
$string['recover'] = '回復';
$string['richtexteditor'] = 'リッチテキストエディタ';
$string['settings'] = 'Attoツールバー設定';
$string['subplugintype_atto'] = 'Attoプラグイン';
$string['subplugintype_atto_plural'] = 'Attoプラグイン';
$string['taskautosavecleanup'] = '期限切れのオートセーブ下書きを削除する';
$string['textrecovered'] = 'このテキストの下書きバージョンが自動的にリストアされました。';
$string['toolbarconfig'] = 'ツールバー設定';
$string['toolbarconfig_desc'] = 'ここではプラグイン一覧および表示順を設定することができます。設定にはグループ (1行あたり1件) およびそのグループに関するプラグインの順番付きリストを含みます。グループは等号によりプラグインと分離されプラグインはカンマで分離されます。グループ名をユニークにしてボタンを共通していることを示す必要があります。ボタンおよびグループ名は繰り返さずに半角英数字のみを使用してください。';
$string['warningstatus'] = '警告';
