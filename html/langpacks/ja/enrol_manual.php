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
 * Strings for component 'enrol_manual', language 'ja', version '4.4'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = '高度';
$string['alterstatus'] = 'ステータスを変更する';
$string['altertimeend'] = '終了日を変更する';
$string['altertimestart'] = '開始日を変更する';
$string['assignrole'] = 'ロールを割り当てる';
$string['assignroles'] = 'ロールを割り当てる';
$string['browsecohorts'] = 'コーホートを閲覧する';
$string['browseusers'] = 'ユーザを閲覧する';
$string['confirmbulkdeleteenrolment'] = '本当にこれらのユーザ登録を削除してもよろしいですか?';
$string['defaultperiod'] = 'デフォルト登録期間';
$string['defaultperiod_desc'] = '登録が有効な場合のデフォルト登録期間 (秒) です。ゼロが設定された場合、登録期間はデフォルトで無制限となります。';
$string['defaultperiod_help'] = '登録が有効な場合のデフォルト登録期間です。ユーザが登録された時点で開始します。無効にされた場合、登録期間はデフォルトで無制限となります。';
$string['defaultstart'] = 'デフォルト登録開始';
$string['deleteselectedusers'] = '選択したユーザの登録を削除する';
$string['editselectedusers'] = '選択したユーザの登録を編集する';
$string['enrolledincourserole'] = '「 {$a->course} 」に「 {$a->role} 」として登録されました。';
$string['enrolusers'] = 'ユーザを登録する';
$string['enroluserscohorts'] = '選択したユーザおよびコーホートを登録する';
$string['expiredaction'] = '登録期限切れ処理';
$string['expiredaction_help'] = 'ユーザの登録期限が切れた場合に実行される処理を選択してください。コース登録解除時、コースからユーザデータおよび設定が削除されることに留意してください。';
$string['expirymessageenrolledbody'] = '{$a->user} さん

これはコース「 {$a->course} 」のあなたの登録が {$a->timeend} に有効期限切れとなる通知です。

詳細は {$a->enroller} をご連絡ください。';
$string['expirymessageenrolledsubject'] = '登録期限切れ通知';
$string['expirymessageenrollerbody'] = '以下ユーザに関して次の {$a->threshold} でコース「 {$a->course} 」の登録が期限切れとなります:

{$a->users}

登録期限を延長するには {$a->extendurl} にアクセスしてください。';
$string['expirymessageenrollersubject'] = '登録期限切れ通知';
$string['managemanualenrolements'] = '手動登録を管理する';
$string['manual:config'] = '手動登録インスタンスを設定する';
$string['manual:enrol'] = 'ユーザを登録する';
$string['manual:manage'] = 'ユーザ登録を管理する';
$string['manual:unenrol'] = 'コースからユーザを登録解除する';
$string['manual:unenrolself'] = 'コースから自分自身を登録解除する';
$string['manualpluginnotinstalled'] = '「手動」プラグインがまだインストールされていません。';
$string['messageprovider:expiry_notification'] = '手動登録期限切れ通知';
$string['now'] = '今すぐ';
$string['pluginname'] = '手動登録';
$string['pluginname_desc'] = '手動登録プラグインではコース管理設定内のリンクを使用してユーザが教師等の適切なパーミッションを割り当てたユーザを手動で登録できるようにします。自己登録等の登録プラグインで必要とするため、通常、このプラグインは有効にされています。';
$string['privacy:metadata'] = '手動登録プラグインはいかなる個人データも保存しません。';
$string['selectcohorts'] = 'コーホートを選択する';
$string['selection'] = '選択';
$string['selectusers'] = 'ユーザを選択する';
$string['sendexpirynotificationstask'] = '手動登録有効期限切れ通知送信タスク';
$string['status'] = '手動登録を有効にする';
$string['status_desc'] = '内部登録済みユーザがコースにアクセスできるようにします。多くの場合、この設定は有効のままにすべきです。';
$string['status_help'] = 'この設定では教師等の適切なパーミッションを割り当てたユーザをコース管理設定で手動登録できるかどうか指定します。';
$string['statusdisabled'] = '無効';
$string['statusenabled'] = '有効';
$string['syncenrolmentstask'] = '手動登録タスクを同期する';
$string['unenrol'] = 'ユーザの登録を解除する';
$string['unenrolselectedusers'] = '選択したユーザの登録を解除する';
$string['unenrolselfconfirm'] = '本当にコース「 {$a} 」からあなたの登録を解除してもよろしいですか?';
$string['unenroluser'] = '本当にコース「 {$a} 」から「 {$a->user} 」の登録を解除してもよろしいですか?';
$string['unenrolusers'] = 'ユーザの登録を解除する';
$string['wscannotenrol'] = 'コース (id = {$a->courseid}) ではプラグインインスタンスが手動でユーザを登録することはできません。';
$string['wsnoinstance'] = 'コース (id = {$a->courseid}) の手動講登録プラグインインスタンスが存在しないか、無効にされています。';
$string['wsusercannotassign'] = 'あなたにはこのコース ({$a->courseid}) 内でロール ({$a->roleid}) をユーザ ({$a->userid}) に割り当てるパーミッションがありません。';
