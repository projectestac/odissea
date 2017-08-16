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
 * Strings for component 'tool_monitor', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = '新しいルールを追加する';
$string['allevents'] = 'すべてのイベント';
$string['allmodules'] = 'すべてのインスタンス';
$string['area'] = 'エリア';
$string['areatomonitor'] = 'モニタエリア';
$string['cachedef_eventsubscriptions'] = '個別のコースのイベント購読一覧保存';
$string['contactadmin'] = '有効にするにはあなたの管理者にご連絡ください。';
$string['core'] = 'コア';
$string['currentsubscriptions'] = 'あなたの現在の購読';
$string['defaultmessagetemplate'] = 'ルール名: {rulename}<br />説明: {description}<br />イベント名: {eventname}';
$string['deleterule'] = 'ルールを削除する';
$string['deletesubscription'] = '購読を削除する';
$string['description'] = '説明:';
$string['disablefieldswarning'] = 'このルールはすでに購読されているため、いくつかのフィールドを編集することができません。';
$string['duplicaterule'] = 'ルールを複製する';
$string['editrule'] = 'ルールを編集する';
$string['enablehelp'] = 'イベントモニタリングを有効/無効にする';
$string['enablehelp_help'] = 'あなたがルールを作成および購読するためには、イベントモニタリングを有効にする必要があります。イベントモニタリングを有効にすることにより、あなたのサイトのパフォーマンスに影響することに留意してください。';
$string['errorincorrectevent'] = '選択されたプラグインに関連するイベントを選択してください。';
$string['event'] = 'イベント';
$string['eventnotfound'] = 'イベントが見つかりませんでした。';
$string['eventrulecreated'] = 'ルールが作成されました。';
$string['eventruledeleted'] = 'ルールが削除されました。';
$string['eventruleupdated'] = 'ルールが更新されました。';
$string['eventsubcreated'] = '購読が作成されました。';
$string['eventsubcriteriamet'] = '購読がクライテリアに合致しました。';
$string['eventsubdeleted'] = '購読が削除されました。';
$string['freqdesc'] = '{$a->freq} 回 / {$a->mins} 分';
$string['frequency'] = '通知頻度';
$string['frequency_help'] = '送信される通知メッセージの指定期間内のイベント数です。';
$string['inminutes'] = '分';
$string['invalidmodule'] = '無効なモジュール';
$string['manage'] = '管理';
$string['managerules'] = 'イベントモニタリングルール';
$string['manageruleslink'] = 'あなたは {$a} ページでルールを管理することができます。';
$string['managesubscriptions'] = 'イベントモニタリング';
$string['managesubscriptionslink'] = 'あなたは {$a} ページでルールを購読することができます。';
$string['messageprovider:notification'] = 'ルール購読通知';
$string['messagetemplate'] = '通知メッセージ';
$string['messagetemplate_help'] = '通知閾値に達した場合、購読者に通知メッセージが送信されます。以下のプレースホルダのどれかまたはすべてを含むことができます:
<br /><br />
* イベントロケーションへのリンク {link}<br />
* モニタエリアへのリンク {modulelink}<br />
* ルール名 {rulename}<br />
* 説明 {description}<br />
* イベント {eventname}';
$string['moduleinstance'] = 'インスタンス';
$string['monitordisabled'] = '現在、イベントモニタリングは無効にされています。';
$string['monitorenabled'] = '現在、イベントモニタリングは有効にされています。';
$string['monitor:managerules'] = 'イベントモニタルールを管理する';
$string['monitor:managetool'] = 'イベントモニタリングを有効/無効にする';
$string['monitor:subscribe'] = 'イベントモニタルールを購読する';
$string['norules'] = '購読できるモニタリングルールはありません。';
$string['pluginname'] = 'イベントモニタ';
$string['processevents'] = 'イベント処理';
$string['ruleareyousure'] = '本当にルール「 {$a} 」を削除してもよろしいですか?';
$string['ruleareyousureextra'] = 'このルールに関して同様に削除される購読が {$a} 件あります。';
$string['rulecopysuccess'] = 'ルールが正常に複製されました。';
$string['ruledeletesuccess'] = 'ルールが正常に削除されました。';
$string['rulehelp'] = 'ルール詳細';
$string['rulehelp_help'] = 'このルールはイベント「 {$a->eventname} 」が「 {$a->eventcomponent} 」内で {$a->minutes} 分間のうちに {$a->frequency} 回発生することを監視します。';
$string['rulename'] = 'ルール名';
$string['rulenopermission'] = 'あなたにはイベントを購読するパーミッションがありません。';
$string['rulenopermissions'] = 'あなたには「ルールを {$a} する」パーミッションがありません。';
$string['rulescansubscribe'] = 'あなたが購読可能なルール';
$string['selectacourse'] = 'コースを選択する';
$string['selectcourse'] = '利用可能なモジュール一覧を取得するにはこのレポートにコースレベルででアクセスしてください。';
$string['subareyousure'] = '本当にこのルール「 {$a} 」の購読を削除してもよろしいですか?';
$string['subcreatesuccess'] = '購読が正常に作成されました。';
$string['subdeletesuccess'] = '購読が正常に削除されました。';
$string['subhelp'] = '購読詳細';
$string['subhelp_help'] = 'この購読はイベント「 {$a->eventname} 」が「 {$a->moduleinstance} 」内で {$a->minutes} 分間のうちに {$a->frequency} 回発生することを監視します。';
$string['subscribeto'] = 'ルール「 {$a} 」を購読する';
$string['taskchecksubscriptions'] = '無効なルール購読を有効/無効にする';
$string['taskcleanevents'] = 'イベントモニタイベントをすべて削除する';
$string['unsubscribe'] = '購読解除';
