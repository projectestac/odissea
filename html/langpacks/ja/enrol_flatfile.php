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
 * Strings for component 'enrol_flatfile', language 'ja', version '3.8'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'ファイルエンコーディング';
$string['expiredaction'] = '登録期限切れ処理';
$string['expiredaction_help'] = 'ユーザの登録期限が切れた場合に実行される処理を選択してください。コース登録解除中に一部のユーザデータおよび設定がコースから削除されてしまうことに留意してください。';
$string['filelockedmail'] = 'ファイルベースのユーザ登録で使用しているテキストファイル ({$a}) はcron処理により削除することができません。通常、これはファイルパーミッションが正しくないことを意味します。Moodleが削除できるようファイルのパーミッションを変更してください。変更しない場合、この処理が繰り返し実行されます。';
$string['filelockedmailsubject'] = '重大なエラー: 登録ファイル';
$string['flatfile:manage'] = 'ユーザ登録を手動で管理する';
$string['flatfile:unenrol'] = 'ユーザをコースから手動で登録解除する';
$string['flatfileenrolments'] = 'フラットファイル (CSV) 登録です。';
$string['flatfilesync'] = 'フラットファイル登録同期';
$string['location'] = 'ファイルロケーション';
$string['location_desc'] = '登録ファイルのフルパスを指定してください。処理の後、ファイルは自動的に削除されます。';
$string['mapping'] = 'フラットファイルロールマッピング';
$string['messageprovider:flatfile_enrolment'] = 'フラットファイル登録メッセージ';
$string['notifyadmin'] = '管理者に通知する';
$string['notifyenrolled'] = '登録済みユーザに通知する';
$string['notifyenroller'] = '登録に責任のあるユーザに通知する';
$string['pluginname'] = 'フラットファイル (CSV)';
$string['pluginname_desc'] = 'この方法ではあなたが指定した場所に置いた特別にフォーマットされたテキストファイルを繰り返しチェックおよび処理します。ファイルはカンマ区切りのファイルであり、1行あたり4個または6個のフィールドを持つと想定されます:

処理, ロール, IDナンバー (ユーザ), IDナンバー (コース) [, 開始日時, 終了日時]

詳細:

* 処理 = add | del
* ロール = student | teacher | teacheredit
* IDナンバー (ユーザ) = userテーブルのidnumber (idではなく)
* IDナンバー (コース) = courseテーブルのidnumber (idではなく)
* 開始日時 = 開始日時 (UNIXエポックからの秒数) - 任意
* 終了日時 = 終了日時 (UNIXエポックからの秒数) - 任意

ファイルのフォーマットは以下のようになります:
<pre class="informationbox">
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'フラットファイル (CSV) 登録プラグインは将来的なenrol_flatfileテーブルの登録に関する個人データを保存します。';
$string['privacy:metadata:enrol_flatfile:action'] = '所与の日付に期待される登録処理です。';
$string['privacy:metadata:enrol_flatfile:courseid'] = '登録に関連するコースIDです。';
$string['privacy:metadata:enrol_flatfile:roleid'] = '割り当てまたは割り当て解除されるロールのIDです。';
$string['privacy:metadata:enrol_flatfile:timeend'] = '登録終了日時です。';
$string['privacy:metadata:enrol_flatfile:timemodified'] = '登録修正日時です。';
$string['privacy:metadata:enrol_flatfile:timestart'] = '登録開始日時です。';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ロール割り当てに関連するユーザのIDです。';
