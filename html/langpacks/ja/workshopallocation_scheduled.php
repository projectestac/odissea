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
 * Strings for component 'workshopallocation_scheduled', language 'ja', version '3.11'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'スケジュール割り当てのバックグラウンド処理';
$string['currentstatus'] = '現在のステータス';
$string['currentstatusexecution'] = 'ステータス';
$string['currentstatusexecution1'] = '実行日時: {$a->datetime}';
$string['currentstatusexecution2'] = '再実行予定日時: {$a->datetime}';
$string['currentstatusexecution3'] = '実行予定日時: {$a->datetime}';
$string['currentstatusexecution4'] = '実行待ち';
$string['currentstatusnext'] = '次の実行';
$string['currentstatusnext_help'] = '場合によってはすでに実行された後でも割り当てが自動的にスケジュールされることがあります。例えば提出終了日時が延長された場合にこのような処理が発生します。';
$string['currentstatusreset'] = 'リセット';
$string['currentstatusreset_help'] = 'このチェックボックスをチェックした上でフォームを保存した場合、結果として現在のステータスがリセットされます。上で有効にされている場合、再度割り当てを実行できるよう前回の実行情報すべてが削除されます。';
$string['currentstatusresetinfo'] = '実行結果をリセットするにはチェックボックスをチェックした上でフォームを保存してください。';
$string['currentstatusresult'] = '最近の実行結果';
$string['enablescheduled'] = 'スケジュール割り当てを有効にする';
$string['enablescheduledinfo'] = '提出フェーズの終わりに提出を自動割り当てする';
$string['pluginname'] = 'スケジュール割り当て';
$string['privacy:metadata'] = 'スケジュール割り当てプラグインはいかなる個人データも保存しません。誰が誰を評価するのかという実際の個人データはワークショップモジュール自体に保存されます。データは評価詳細のエクスポートを目的として整形されます。';
$string['randomallocationsettings'] = '割り当て設定';
$string['randomallocationsettings_help'] = 'ここでランダム割り当て方法のパラメータを設定します。これらの設定値は実際の提出を割り当てるランダム割り当てプラグインで使用されます。';
$string['resultdisabled'] = 'スケジュール割り当てが無効にされました。';
$string['resultenabled'] = 'スケジュール割り当てが有効にされました。';
$string['resultexecuted'] = '成功';
$string['resultfailed'] = '提出の自動割当不可';
$string['resultfailedconfig'] = 'スケジュール割り当て誤設定';
$string['resultfaileddeadline'] = 'ワークショップに提出期限が設定されていません。';
$string['resultfailedphase'] = 'ワークショップは提出フェーズではありません。';
$string['resultvoid'] = '割り当てられた提出はありません。';
$string['resultvoiddeadline'] = '提出終了日時 - 未到来';
$string['resultvoidexecuted'] = 'すでに割り当ては実行されています。';
$string['scheduledallocationsettings'] = 'スケジュール割り当て設定';
$string['scheduledallocationsettings_help'] = 'この設定を有効にした場合、提出フェーズの後、評価のためにスケジュール割り当てが提出を自動割り当てします。フェーズの終了はワークショップ設定内の「提出終了日時」で設定できます。

内部的にはこのフォームで事前に設定された内容をもとにランダム割り当てが実行されます。これは提出フェーズの後に以下の設定をもとに教師自身がランダム割り当てを実行するかのようにスケジュール割り当てが動作することを意味します。

あなたが提出終了日時の前に手動で評価フェーズにスイッチした場合、スケジュール割り当ては「実行されない」ことに留意してください。その場合、あなた自身で提出を割り当てる必要があります。自動フェーズスイッチ機能と一緒に使用した場合、スケジュール割り当ては特に有用です。';
$string['setup'] = 'スケジュール割り当てセットアップする';
