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
 * Strings for component 'enrol_paypal', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'ロールを割り当てる';
$string['businessemail'] = 'PayPalビジネスメール';
$string['businessemail_desc'] = 'あなたのビジネスPayPalアカウントのメールアドレスです。';
$string['cost'] = '登録費用';
$string['costerror'] = '登録費用が数値ではありません。';
$string['costorkey'] = '下記の登録方法から1つ選択してください。';
$string['currency'] = '通貨';
$string['defaultrole'] = 'デフォルトロール割り当て';
$string['defaultrole_desc'] = 'PayPal登録中にユーザに割り当てられるロールを選択してください。';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの日まで登録することができます。';
$string['enrolenddaterror'] = '登録終了日を開始日より早くすることはできません。';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_desc'] = '登録が有効な場合のデフォルト登録期間です。ゼロが設定された場合、登録期間はデフォルトで無制限となります。';
$string['enrolperiod_help'] = '登録が有効な場合の登録期間です。ユーザが登録された時点で開始します。この設定が無効にされた場合、登録期間は無制限となります。';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日以降のみ登録することができます。';
$string['errdisabled'] = 'PayPal登録プラグインが無効にされているため支払通知を処理できません。';
$string['erripninvalid'] = '即時支払通知がPayPalによって確認されました。';
$string['errpaypalconnect'] = '即時支払通知を確認するための {$a->url} に接続できませんでした: {$a->result}';
$string['expiredaction'] = '登録期限切れ処理';
$string['expiredaction_help'] = 'ユーザの登録期限が切れた場合に実行される処理を選択してください。コース登録解除中、一部のユーザデータおよび設定が削除されてしまうことに留意してください。';
$string['mailadmins'] = '管理者に通知する';
$string['mailstudents'] = '学生に通知する';
$string['mailteachers'] = '教師に通知する';
$string['messageprovider:paypal_enrolment'] = 'PayPal登録メッセージ';
$string['nocost'] = 'このコースの登録に費用が設定されていません!';
$string['paypalaccepted'] = 'PayPal支払済み';
$string['paypal:config'] = 'PayPal登録インスタンスを設定する';
$string['paypal:manage'] = '登録済みユーザを管理する';
$string['paypal:unenrol'] = 'ユーザをコースから登録解除する';
$string['paypal:unenrolself'] = '自分自身をコースから登録解除する';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'あなたはPayPalモジュールで有料のコースを設定することができます。コースの費用がゼロの場合、学生は登録時に支払いを求められません。サイト全体に適用されるデフォルトの費用をここで設定します。また、コース設定でコース個別の費用を設定することができます。コース費用はサイト全体の費用に優先されます。';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'PayPal登録のPayPalトランザクションに関する情報です。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = '支払受領者 (マーチャント) のメールアドレスまたはPayPalアカウントIDです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = '販売されたコースのIDです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'コースの登録インスタンスのIDです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = '登録が販売されたコースのフルネームです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'PayPalウェブサイト支払ノートフィールドに購入者によって入力されたノートです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = '購入者のフルネームです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = '払い戻し、リバースまたはリバースのキャンセル時のオリジナルトランザクションのトランザクションIDです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = '支払ステータスです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = '支払いがeCheck、PayPalバランス、クレジットカードまたは即時送金によって実行されたか保持します。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = '支払ステータスが保留にされている理由です (保留されている場合)。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = '支払ステータスがリバース、返金、リバースのキャンセルまたは拒否になっている場合の理由です (ステータスがどれかにあたる場合)。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = '支払先 (マーチャントである場合) の主メールアドレスです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = '支払先 (例 マーチャント) のユニークPayPalアカウントIDです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = '支払時に課された合計税額です。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = '支払いに関してPayPalから通知されるMoodleの時間です。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = '登録された場合の購入者からの支払いに関するマーチャントのオリジナルトランザクションIDナンバーです。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'コース登録を購入したユーザのIDです。';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'PayPal登録プラグインはMoodleからPayPalウェブサイトにユーザデータを送信します。';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'コースを購入するユーザのアドレスです。';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'コースを購入するユーザの市町村です。';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'コースを購入するユーザの国です。';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'ユーザ (購入者) ID、コースID、登録インスタンスIDを含むハイフンで区切られたストリングです。';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'コースを購入するユーザのメールアドレスです。';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'コースを購入するユーザの名です。';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'コースを購入するユーザの姓です。';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = '購入者のフルネームです。';
$string['processexpirationstask'] = 'PayPal登録送信有効期限切れ通知タスク';
$string['sendpaymentbutton'] = 'PayPalで支払いを送信する';
$string['status'] = 'PayPal登録を許可する';
$string['status_desc'] = 'デフォルトでユーザのコース登録にPayPalを使用できるようにします。';
$string['transactions'] = 'PayPalトランザクションです。';
$string['unenrolselfconfirm'] = '本当にコース「 {$a} 」からあなたを登録解除してもよろしいですか?';
