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
 * Strings for component 'tool_task', language 'ja', version '3.11'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'アドホック';
$string['adhocempty'] = 'アドホックタスクキューは空です。';
$string['adhocqueueold'] = '{$a->max} 以上の最も古いタスクは {$a->age} です。';
$string['adhocqueuesize'] = 'アドホックタスクキューに {$a} 件のタスクがあります。';
$string['adhoctaskid'] = 'アドホックタスクID: {$a}';
$string['adhoctasks'] = 'アドホックタスク';
$string['asap'] = '早急に';
$string['backtoscheduledtasks'] = 'スケジュールタスクに戻る';
$string['blocking'] = 'ブロッキング';
$string['cannotfindthepathtothecli'] = '実行可能なPHP CLIパスを見つけることができないため、タスクの実行は中断されました。サイト管理/サーバ/システムパスで「PHP CLIのパス」を設定してください。';
$string['checkadhocqueue'] = 'アドホックタスクキュー';
$string['checkcronrunning'] = 'Cron動作中';
$string['checkmaxfaildelay'] = 'タスク最大遅延';
$string['classname'] = 'クラス名';
$string['clearfaildelay_confirm'] = '本当にタスク「 {$a} 」の失敗時の待機をクリアしてもよろしいですか? 待機をクリアした後、タスクは通常のスケジュールに従って実行されます。';
$string['component'] = 'コンポーネント';
$string['corecomponent'] = 'コア';
$string['crondisabled'] = 'cronは無効にされています。開始される新しいタスクはありません。cronが再度有効にされるまでシステムは適切に動作しません。';
$string['cronok'] = 'Cron高頻度動作中';
$string['default'] = 'デフォルト';
$string['defaultx'] = 'デフォルト: {$a}';
$string['disabled'] = '無効';
$string['disabled_help'] = '無効にされたスケジュールタスクはcronにより実行されません。CLIツール経由で手動実行することはできます。';
$string['edittaskschedule'] = 'スケジュールタスクを編集する: {$a}';
$string['enablerunnow'] = 'スケジュールタスクの「今すぐ実行する」を許可する';
$string['enablerunnow_desc'] = '定期的な実行を待つのではなく、管理者が個別のスケジュールタスクを今すぐ実行できるようにします。この機能ではシステムパスに「PHP CLIのパス」 (pathtophp) を設定する必要があります。タスクはウェブサーバ上で実行されるため、潜在的なパフォーマンスの問題を避ける目的でこの機能を無効にしてもよいでしょう。';
$string['faildelay'] = '失敗時の待機';
$string['fromcomponent'] = '次のコンポーネントから: {$a}';
$string['hostname'] = 'ホスト名';
$string['lastruntime'] = '最新実行';
$string['lastupdated'] = '最終更新日時 {$a}';
$string['nextruntime'] = '次の実行';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'プラグイン無効';
$string['pluginname'] = 'スケジュールタスク設定';
$string['privacy:metadata'] = 'スケジュールタスク設定プラグインはいかなる個人データも保存しません。';
$string['resettasktodefaults'] = 'スケジュールタスクをデフォルトにリセットする';
$string['resettasktodefaults_help'] = 'これによりローカルの変更すべてが破棄されます。また、このタスクのスケジュールはオリジナル設定に戻されます。';
$string['runagain'] = '再度実行する';
$string['runningtasks'] = 'タスク実行中';
$string['runnow'] = '今すぐ実行する';
$string['runnow_confirm'] = '本当にタスク「 {$a} 」を今すぐ実行してもよろしいですか? タスクはウェブサーバ上で実行されて完了までに時間を要します。';
$string['runpattern'] = '実行パターン';
$string['scheduled'] = 'スケジュール';
$string['scheduledtaskchangesdisabled'] = 'スケジュールタスク一覧の修正はMoodle設定で禁止されています。';
$string['scheduledtasks'] = 'スケジュールタスク';
$string['started'] = '開始';
$string['taskdisabled'] = 'タスク無効';
$string['taskfailures'] = '{$a} 件のタスクが失敗しました。';
$string['tasklogs'] = 'タスクログ';
$string['tasknofailures'] = '失敗したタスクはありません。';
$string['taskscheduleday'] = '日';
$string['taskscheduleday_help'] = 'タスクスケジュールの日フィールドです。フィールドはunix cronと同じフォーマットを使用します。以下、いくつかの例です:

* <strong>*</strong> 毎日
* <strong>*/2</strong> 2日おき
* <strong>1</strong> 毎月の初日
* <strong>1,15</strong> 毎月の初日および15日';
$string['taskscheduledayofweek'] = '曜日';
$string['taskscheduledayofweek_help'] = 'タスクスケジュールの曜日フィールドです。フィールドはunix cronと同じフォーマットを使用します。以下、いくつかの例です:

* <strong>*</strong> 毎日
* <strong>0</strong> 毎日曜日
* <strong>6</strong> 毎土曜日
* <strong>1,5</strong> 毎月曜日および金曜日';
$string['taskschedulehour'] = '時';
$string['taskschedulehour_help'] = 'タスクスケジュールの時フィールドです。フィールドはunix cronと同じフォーマットを使用します。以下、いくつかの例です:

* <strong>*</strong> 毎時
* <strong>*/2</strong> 2時間おき
* <strong>2-10</strong> 午前2時から午前10時までの毎時 (両方を含む)
* <strong>2,6,9</strong> 午前2時、午前6時および午前9時';
$string['taskscheduleminute'] = '分';
$string['taskscheduleminute_help'] = 'タスクスケジュールの分フィールドです。フィールドはunix cronと同じフォーマットを使用します。以下、いくつかの例です:

* <strong>*</strong> 毎分
* <strong>*/5</strong> 5分おき
* <strong>2-10</strong> 毎時2分から10分 (両方を含む)
* <strong>2,6,9</strong> 毎時2分、6分および9分';
$string['taskschedulemonth'] = '月';
$string['taskschedulemonth_help'] = 'タスクスケジュールの月フィールドです。フィールドはunix cronと同じフォーマットを使用します。以下、いくつかの例です:

* <strong>*</strong> 毎月
* <strong>*/2</strong> 隔月
* <strong>1</strong> 毎1月
* <strong>1,5</strong> 毎1月および5月';
$string['viewlogs'] = '{$a} のログを表示する';
