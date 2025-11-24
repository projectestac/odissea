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
 * Strings for component 'tool_langimport', language 'ja', version '4.5'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'ダウンロードサーバに接続できません。言語パックをインストールまたは自動更新することができません。適切なZIPファイルを「 <a href="{$a->src}">{$a->src}</a> 」からダウンロードした後、あなたのデータディレクトリ「 <code>{$a->dest}</code> 」に手動で展開してください。';
$string['install'] = '選択された言語パックをインストールする';
$string['installedlangs'] = 'インストール済み言語パック';
$string['installfailed'] = '言語パックのインストールに失敗しました!';
$string['installfinished'] = '言語パックが正常にインストールされました。';
$string['installpending'] = '次の言語パックがインストールされます: {$a}';
$string['installscheduled'] = 'インストールが予定された言語パックです。';
$string['langimport'] = '言語インポートユーティリティ';
$string['langimportdisabled'] = '言語インポート機能は無効にされています。あなたはファイルシステムレベルで言語パックを手動更新する必要があります。手動更新の後、忘れずにストリングキャッシュを消去してください。';
$string['langpackinstalled'] = '言語パック「 {$a} 」が正常にインストールされました。';
$string['langpackinstalledevent'] = '言語パックがインストールされました。';
$string['langpacknotremoved'] = 'エラーが発生しました。言語パック「 {$a} 」を完全にアンイストールすることができません。ファイルパーミッションをご確認ください。';
$string['langpackremoved'] = '言語パック「 {$a} 」がアンインストールされました。';
$string['langpackremovedevent'] = '言語パックがアンインストールされました。';
$string['langpackupdated'] = '言語パック「 {$a} 」が正常に更新されました。';
$string['langpackupdatedevent'] = '言語パックが更新されました。';
$string['langpackupdateskipped'] = '言語パック「 {$a} 」の更新がスキップされました。';
$string['langpackuptodate'] = '言語パック「 {$a} 」は最新版です。';
$string['langunsupported'] = '<p>あなたのサーバは次の言語を完全にはサポートしていないようです:</p><ul>{$a->missinglocales}</ul><p>日付または数字のような特定のストリングをフォーマットするため代わりにグローバルロケール ({$a->globallocale}) が使用されます。</p>';
$string['langupdatecomplete'] = '言語パックの更新が完了しました。';
$string['missingcfglangotherroot'] = '$CFG->langotherrootの設定値がありません。';
$string['missinglangparent'] = '「 {$a->lang} 」の親言語「 {$a->parent} 」がありません。';
$string['noenglishuninstall'] = '英語言語パックはアンインストールすることはできません。';
$string['noenglishuninstalltitle'] = 'アンインストールできません。';
$string['nolangupdateneeded'] = 'すべての言語パックは最新版です。アップデートの必要はありません。';
$string['pluginname'] = '言語パック';
$string['privacy:metadata'] = '言語パックプラグインはいかなる個人データも保存しません。';
$string['purgestringcaches'] = 'ストリングキャッシュを削除する';
$string['search'] = '利用可能な言語パックを検索する';
$string['selectlangs'] = 'アンインストールする言語を選択してください。';
$string['uninstall'] = '選択された言語パックをアンインストールする';
$string['uninstallconfirm'] = 'あなたは言語パック <strong>{$a}</strong> を完全にアンインストールしようとしています。本当によろしいですか?';
$string['updatelangs'] = 'すべてのインストール済み言語パックを更新する';
$string['updatelangsnote'] = 'ボタンをクリックしてインストール済みのすべての言語パックを更新する場合、長時間を要してタイムアウトする場合があります。代わりにスケジュールタスク「 {$a->taskname} 」(デフォルトでは毎日実行) の利用をお勧めします。';
