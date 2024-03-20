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
 * Strings for component 'enrol_self', language 'ja', version '4.1'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = '登録は無効にされているか停止しています。';
$string['canntenrolearly'] = 'あなたはまだ登録することはできません。登録は {$a} に開始されます。';
$string['canntenrollate'] = '{$a} に登録が終了したため、あなたはこれ以上登録することはできません。';
$string['cohortnonmemberinfo'] = 'コーホート「 {$a} 」のメンバのみ自己登録することができます。';
$string['cohortonly'] = 'コーホートメンバのみ';
$string['cohortonly_help'] = '指定されたコーホートのメンバにのみ自己登録を制限することができます。この設定の変更により、既存の登録は影響を受けないことに留意してください。';
$string['confirmbulkdeleteenrolment'] = '本当にこれらのユーザ登録を削除してもよろしいですか?';
$string['customwelcomemessage'] = 'カスタムウェルカムメッセージ';
$string['customwelcomemessage_help'] = 'プレインテキストまたはHTMLタグおよびmulti-langタグを含むMoodleオートフォーマットとしてカスタムウェルカムメッセージを追加することができます。

メッセージの中に以下のプレースホルダを含むことができます:

* コース名 {$a->coursename}
* ユーザプロファイルページへのリンク {$a->profileurl}
* ユーザメール {$a->email}
* ユーザフルネーム {$a->fullname}';
$string['defaultrole'] = 'デフォルトロール割り当て';
$string['defaultrole_desc'] = '自己登録中にユーザに割り当てるロールを選択してください。';
$string['deleteselectedusers'] = '選択したユーザ登録を削除する';
$string['editselectedusers'] = '選択したユーザ登録を編集する';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの日まで登録することができます。';
$string['enrolenddaterror'] = '登録終了日を開始日より早くすることはできません。';
$string['enrolme'] = '私を登録する';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_desc'] = '登録が有効な場合のデフォルト登録期間です。ゼロが設定された場合、登録期間はデフォルトで無制限となります。';
$string['enrolperiod_help'] = '登録が有効な場合の登録期間です。ユーザが登録された時点で開始します。無効にされた場合、登録期間は無制限となります。';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日以降のみ登録することができます。';
$string['expiredaction'] = '登録期限切れ処理';
$string['expiredaction_help'] = 'ユーザの登録期限が切れた場合に実行される処理を選択してください。コース登録解除時、コースからユーザデータおよび設定が削除されることに留意してください。';
$string['expirymessageenrolledbody'] = '{$a->user} さん

これはコース「 {$a->course} 」のあなたの登録が {$a->timeend} に有効期限切れとなる通知です。

詳細は {$a->enroller} をご連絡ください。';
$string['expirymessageenrolledsubject'] = '自己登録期限切れ通知';
$string['expirymessageenrollerbody'] = '以下のユーザに関してコース「 {$a->course} 」の自己登録は次の {$a->threshold} で有効期限切れとなります:

{$a->users}

登録期間を延期するには {$a->extendurl} にアクセスしてください。';
$string['expirymessageenrollersubject'] = '自己登録期限切れ通知';
$string['expirynotifyall'] = '登録者および登録済みユーザ';
$string['expirynotifyenroller'] = '登録者のみ';
$string['groupkey'] = 'グループ登録キーを使用する';
$string['groupkey_desc'] = 'デフォルトでグループ登録キーを使用します。';
$string['groupkey_help'] = 'コース登録キーを知っているユーザにのみコースアクセスを制限することに加えて、グループ登録キーを使用することでユーザは登録したコース内のグループに自動追加されます。

注意: グループ登録キーを使用するにはグループ設定内のグループ登録キーを設定すると共にコース設定内の登録キーを設定する必要があります。';
$string['keyholder'] = 'あなたは次から登録キーを受信しているはずです:';
$string['longtimenosee'] = '次の期間活動していない場合、登録解除する';
$string['longtimenosee_help'] = 'ユーザが長期間コースにアクセスしていない場合、自動的に登録解除されます。このパラメータではその制限期間を指定します。';
$string['maxenrolled'] = '最大登録ユーザ数';
$string['maxenrolled_help'] = '自己登録できる最大ユーザ数を指定してください。ゼロは制限なしを意味します。';
$string['maxenrolledreached'] = 'すでに自己登録可能な最大ユーザ数に達しています。';
$string['messageprovider:expiry_notification'] = '自己登録期限切れ通知';
$string['newenrols'] = '新しい自己登録を許可する';
$string['newenrols_desc'] = 'デフォルトで新しいコースにおけるユーザの自己登録を許可します。';
$string['newenrols_help'] = 'この設定ではこのコースにユーザが自己登録できるかどうか決定します。';
$string['nopassword'] = '登録キーは必要ではありません。';
$string['password'] = '登録キー';
$string['password_help'] = '登録キーを使用することにより、登録キーを知っているユーザにのみコースアクセスを制限することができます。

フィールドを空白のままにした場合、すべてのユーザがコースに登録することができます。

登録キーが指定された場合、コースに登録を試みるユーザすべてに対して登録キーが要求されます。ユーザはコース登録時のみ1度だけ登録キーの入力が要求されることに留意してください。';
$string['passwordinvalid'] = '登録キーが正しくありません。再度入力してください。';
$string['passwordinvalidhint'] = '登録キーが正しくありません。再度入力してください。<br /> (ヒント - 「 {$a} 」で始まる言葉です)';
$string['passwordmatchesgroupkey'] = 'この登録キーはすでにグループ登録キーとして使用されています。';
$string['pluginname'] = '自己登録';
$string['pluginname_desc'] = '自己登録プラグインにより、ユーザは自分が参加したいコースを選択することができます。登録キーによりコースを保護することができます。内部的には同一コースで有効にする必要のある手動登録プラグイン経由で登録されます。';
$string['privacy:metadata'] = '自己登録プラグインはいかなる個人データも保存しません。';
$string['requirepassword'] = '登録キーを要求する';
$string['requirepassword_desc'] = '新しいコースに登録キーを要求します。また、既存のコースからの登録キーの削除を防ぎます。';
$string['role'] = 'デフォルトに割り当てるロール';
$string['self:config'] = '自己登録インスタンスを設定する';
$string['self:enrolself'] = 'コースの自己登録';
$string['self:holdkey'] = '自己登録キー所有者として表示する';
$string['self:manage'] = '登録済みユーザを管理する';
$string['self:unenrol'] = 'コースからユーザを登録解除する';
$string['self:unenrolself'] = 'コースから自分自身を登録解除する';
$string['sendcoursewelcomemessage'] = 'コースウェルカムメッセージを送信する';
$string['sendcoursewelcomemessage_help'] = 'ユーザがコースに自己登録した場合、ウェルカムメッセージのメールが送信されます。コース連絡先 (デフォルトは教師) から送信される場合、そしてこのロールに2名以上のユーザが割り当てられている場合、最初にロールが割り当てられたユーザから送信されます。';
$string['sendexpirynotificationstask'] = '自己登録有効期限切れ通知送信タスク';
$string['showhint'] = 'ヒントを表示する';
$string['showhint_desc'] = 'ゲストアクセスキーの最初の文字を表示します。';
$string['status'] = '既存の自己登録を許可する';
$string['status_desc'] = '新しいコースにおける自己登録を有効にします。';
$string['status_help'] = 'この設定を無効にした場合、コースに自己登録した既存の参加者はログインできなくなります。';
$string['syncenrolmentstask'] = '自己登録タスクを同期する';
$string['unenrol'] = 'ユーザを登録解除する';
$string['unenrolselfconfirm'] = '本当にコース「 {$a} 」からあなたを登録解除してもよろしいですか?';
$string['unenroluser'] = '本当に「 {$a->user} 」をコース「 {$a->course} 」から登録解除してもよろしいですか?';
$string['unenrolusers'] = 'ユーザを登録解除する';
$string['usepasswordpolicy'] = 'パスワードポリシーを使用する';
$string['usepasswordpolicy_desc'] = '登録キーに標準パスワードポリシーを適用します。';
$string['welcometocourse'] = '{$a} へようこそ';
$string['welcometocoursetext'] = '{$a->coursename} へようこそ!

あなたがまだプロファイルページの編集を完了していない場合、私たちがあなたのことを知ることができるよう編集してください:

 {$a->profileurl}';
