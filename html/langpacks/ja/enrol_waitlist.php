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
 * Strings for component 'enrol_waitlist', language 'ja', version '4.5'.
 *
 * @package     enrol_waitlist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmation'] = '手続きを進めた場合、あなたはこのコースに登録されます。<br><br>本当にこのコースに登録しますか?';
$string['confirmation_cancel'] = 'キャンセル';
$string['confirmation_no'] = 'No';
$string['confirmation_yes'] = 'Yes';
$string['confirmationfull'] = '<strong>このコースは現在満席です。</strong>手続きを進めた場合、あなたはこのウェイトリストに登録されます。定員に空きが出た場合、あなたは自動的にコース受講登録およびメール通知されます。<br>';
$string['continue'] = '続ける';
$string['customwelcomemessage'] = 'カスタムウェルカムメッセージ';
$string['defaultrole'] = 'デフォルトロール割り当て';
$string['defaultrole_desc'] = 'ウェイトリスト登録時にユーザに割り当てられるロールを選択してください。';
$string['disable'] = 'あなたはこのコースに自分では登録できません。';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの期日までしか登録できません。';
$string['enrolenddaterror'] = '登録終了日は開始日より早くできません。';
$string['enrolme'] = '私を登録する';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_desc'] = '登録が有効であるデフォルトの長さ (秒) です。ゼロに設定した場合、登録期間はデフォルトで無制限となります。';
$string['enrolperiod_help'] = 'ユーザが登録した時点から登録が有効である期間です。この設定を無効にした場合、登録期間は無制限となります。';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日以降のみ登録できます。';
$string['enrolusers'] = 'ユーザを登録する';
$string['faculty'] = '学部';
$string['groupkey'] = 'グループ登録キーを使用する';
$string['groupkey_desc'] = 'デフォルトでグループ登録キーを使用します。';
$string['groupkey_help'] = 'グループ登録キーはそのキーを知る人だけにコースへのアクセスを制限するのに加えて、コース登録時にユーザが自動的にグループに追加されることを意味します。

グループ登録キーを使用するにはコース設定に登録キー、グループ設定にグループ登録キーを指定する必要があります。';
$string['lineconfirm'] = '<br>本当にこれを実行してもよろしいですか?';
$string['lineinfo'] = '<br>あなたの前で待っている人の数:';
$string['longtimenosee'] = '非アクティブ登録解除';
$string['longtimenosee_help'] = 'ユーザが長い間コースにアクセスしない場合、自動的に登録解除されます。このパラメータではその制限時間を指定します。';
$string['manage::assign'] = '割り当て';
$string['manage::define'] = '定義';
$string['maxenrolled'] = '最大登録ユーザ';
$string['maxenrolled_help'] = 'ウェイトリスト登録できるユーザの最大数を指定してください。0は制限なしを意味します。';
$string['maxenrolledreached'] = 'ウェイトリスト登録で登録できるユーザ数の上限に達しています。';
$string['nocursefields'] = 'フィールドなし';
$string['password'] = '登録キー';
$string['password_help'] = '登録キーはそのキーを知る人だけにコースへのアクセスを制限できます。

このフィールドが空白の場合、どのユーザでもコースに登録できます。

登録キーが指定された場合、コースに登録しようとするすべてのユーザはキーの入力が要求されます。ユーザが登録キーを入力する必要があるのはコース登録時に一度だけであることに留意してください。';
$string['passwordinvalid'] = '登録キーが正しくありません。再度お試しください。';
$string['passwordinvalidhint'] = '登録キーが正しくありません。再度お試しください。<br />
(ヒント - 「 {$a} 」で始まります)';
$string['pluginname'] = 'ウェイトリスト登録';
$string['pluginname_desc'] = 'ウェイトリスト登録プラグインではユーザが参加したいコースを選択できます。コースは登録キーで保護できます。登録は内部的には同じコースで有効にされている手動登録プラグイン経由で処理されます。';
$string['privacy:metadata:user_enrol_waitlist'] = 'useridフィールドにユーザメタデータを保存します。';
$string['privacy:metadata:user_enrol_waitlist:userid'] = 'useridフィールドにユーザメタデータを保存します。';
$string['profilecreatefield'] = '新しいウェイトリストフィールドを作成する';
$string['profiledescription2'] = 'フィールドの説明2';
$string['profilefield'] = 'フィールド';
$string['requirepassword'] = '登録キーを要求する';
$string['requirepassword_desc'] = '新しいコースで登録キーを要求します。また、既存のコースから登録キーを削除できないようにします。';
$string['role'] = 'ロールを割り当てる';
$string['sendcoursewelcomemessage'] = 'コースウェルカムメッセージを送信する';
$string['sendcoursewelcomemessage_help'] = 'この設定を有効にした場合、コースへのウェイトリスト登録時にユーザにウェルカムメッセージがメール送信されます。';
$string['showhint'] = 'ヒントを表示する';
$string['showhint_desc'] = 'ゲストアクセスキーの最初の文字を表示します。';
$string['status'] = 'ウェイトリスト登録を許可する';
$string['status_desc'] = 'デフォルトでユーザがウェイトリストでコースに登録できるようにします。';
$string['status_help'] = 'この設定ではユーザがコースに登録 (および適切なパーミッションがある場合、登録解除) できるかどうか決定します。';
$string['task:update_enrolments'] = 'ウェイトリスト登録を更新する';
$string['unenrolwaitlistconfirm'] = '本当に「 {$a} 」から登録解除してもよろしいですか?';
$string['usepasswordpolicy'] = 'パスワードポリシーを使用する';
$string['usepasswordpolicy_desc'] = '登録キーに標準的なパスワードポリシーを使用します。';
$string['users_on_waitlist'] = 'ウェイトリストのユーザ';
$string['waitlist:config'] = 'ウェイトリスト登録インスタンスを設定する';
$string['waitlist:manage'] = '登録済みユーザを管理する';
$string['waitlist:unenrol'] = 'コースからユーザを登録解除する';
$string['waitlist:unenrolself'] = 'コースから自分を登録解除する';
$string['waitlist:unenrolwaitlist'] = 'コースからウェイトリストを登録解除する';
$string['waitlisted_users'] = 'ウェイトリスト内ユーザ';
$string['waitlistinfo'] = '<b>このコースは現在満席です。</b><br/><br/>お申し込みありがとうございます。あなたはウェイトリストに登録されました。空きが出た場合、メールでお知らせします。';
$string['welcometocourse'] = '{$a} へようこそ';
$string['welcometocoursetext'] = '<p>{$a->coursename} へようこそ!</p>


<p>開始日: {$a->startdate}</p>

<p>コース説明: </p>

	<p>{$a->summary}</p>';
