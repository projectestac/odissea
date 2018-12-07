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
 * Strings for component 'tool_task', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = '早急に (ASAP)';
$string['backtoscheduledtasks'] = 'スケジュールタスクに戻る';
$string['blocking'] = 'ブロッキング';
$string['component'] = 'コンポーネント';
$string['corecomponent'] = 'コア';
$string['default'] = 'デフォルト';
$string['disabled'] = '無効';
$string['disabled_help'] = '無効にされたスケジュールタスクはcronにより実行されません。CLIツール経由で手動実行することはできます。';
$string['edittaskschedule'] = 'スケジュールタスクを編集する: {$a}';
$string['enablerunnow'] = 'スケジュールタスクの「今すぐ実行する」を許可する';
$string['enablerunnow_desc'] = '定期的な実行を待つのではなく、管理者が個別のスケジュールタスクを今すぐ実行できるようにします。タスクはウェブサーバ上で実行されるため、サイトによっては潜在的なパフォーマンスの問題を避ける目的でこの機能を無効にしてもよいでしょう。';
$string['faildelay'] = '失敗時の待機';
$string['lastruntime'] = '最新実行';
$string['nextruntime'] = '次の実行';
$string['plugindisabled'] = 'プラグイン無効';
$string['pluginname'] = 'スケジュールタスク設定';
$string['privacy:metadata'] = 'スケジュールタスク設定プラグインはどのような個人データも保存しません。';
$string['resettasktodefaults'] = 'スケジュールタスクをデフォルトにリセットする';
$string['resettasktodefaults_help'] = 'これによりローカルの変更すべてが破棄され、このタスクのスケジュールはオリジナル設定に戻されます。';
$string['runnow'] = '今すぐ実行する';
$string['runnow_confirm'] = '本当にタスク「 {$a} 」を今すぐ実行してもよろしいですか? タスクはウェブサーバ上で実行されて完了までに時間を要します。';
$string['scheduledtaskchangesdisabled'] = 'スケジュールタスク一覧の修正はMoodle設定で禁止されています。';
$string['scheduledtasks'] = 'スケジュールタスク';
$string['taskdisabled'] = 'タスクが無効にされました。';
$string['taskscheduleday'] = '日';
$string['taskscheduleday_help'] = 'タスクスケジュールの日フィールドです。フィールドではunix cronと同じフォーマットを使用します。いくつかの例は次のとおりです:<br /><ul><li><strong>*</strong> 毎日</li><li><strong>*/2</strong> 2日おき</li><li><strong>1</strong> 毎月の初日</li><li><strong>1,15</strong> 毎月の初日および15日</li></ul>';
$string['taskscheduledayofweek'] = '曜日';
$string['taskscheduledayofweek_help'] = 'タスクスケジュールの曜日フィールドです。フィールドではunix cronと同じフォーマットを使用します。いくつかの例は次のとおりです:<br /><ul><li><strong>*</strong> 毎日</li><li><strong>0</strong> 毎日曜日</li><li><strong>6</strong> 毎土曜日</li><li><strong>1,5</strong> 毎月曜日および金曜日</li></ul>';
$string['taskschedulehour'] = '時';
$string['taskschedulehour_help'] = 'タスクスケジュールの時フィールドです。フィールドではunix cronと同じフォーマットを使用します。いくつかの例は次のとおりです:<br /><ul><li><strong>*</strong> 毎時</li><li><strong>*/2</strong> 2時間おき</li><li><strong>2-10</strong> 午前2時から午前10時までの毎時 (両方を含む)</li><li><strong>2,6,9</strong> 午前2時、午前6時および午前9時</li></ul>';
$string['taskscheduleminute'] = '分';
$string['taskscheduleminute_help'] = 'タスクスケジュールの分フィールドです。フィールドではunix cronと同じフォーマットを使用します。いくつかの例は次のとおりです:<br /><ul><li><strong>*</strong> 毎分</li><li><strong>*/5</strong> 5分おき</li><li><strong>2-10</strong> 毎時2分から10分 (両方を含む)</li><li><strong>2,6,9</strong> 毎時2分、6分および9分</li></ul>';
$string['taskschedulemonth'] = '月';
$string['taskschedulemonth_help'] = 'タスクスケジュールの月フィールドです。フィールドではunix cronと同じフォーマットを使用します。いくつかの例は次のとおりです:<br /><ul><li><strong>*</strong> 毎月</li><li><strong>*/2</strong> 隔月</li><li><strong>1</strong> 毎1月</li><li><strong>1,5</strong> 毎1月および5月</li></ul>';
