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
 * Strings for component 'sms', language 'ja', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'アクション';
$string['countrycode'] = 'デフォルト国コード';
$string['countrycode_help'] = 'ユーザが自分の国コードを入力しない場合に電話番号に追加される国コードです。先頭の「+」記号を除いた番号を入力してください。';
$string['createnewgateway'] = '新しいSMSゲートウェイを作成する';
$string['delete_sms_gateway'] = 'SMSゲートウェイを削除する';
$string['delete_sms_gateway_confirmation'] = 'これは {$a->gateway} SMSゲートウェイを削除します。';
$string['edit_sms_gateway'] = '{$a->gateway} SMSゲートウェイを編集する';
$string['gateway'] = 'ゲートウェイ';
$string['gateway_name'] = 'ゲートウェイ名';
$string['manage_sms_gateways'] = 'ゲートウェイを管理する';
$string['phonenumbernotvalid'] = '電話番号のフォーマットが認識されません: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'SMSで送信されたメッセージを保存します。';
$string['privacy:metadata:sms_messages:content'] = 'メッセージテキストです。';
$string['privacy:metadata:sms_messages:id'] = 'メッセージのIDです。';
$string['privacy:metadata:sms_messages:recipient'] = 'メッセージが送信された電話番号です。';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'メッセージを送信したユーザです (既知の場合)。';
$string['privacy:metadata:sms_messages:status'] = 'メッセージのステータスです。';
$string['privacy:metadata:sms_messages:timecreated'] = 'メッセージが作成された時間です。';
$string['privacy:sms:sensitive_not_shown'] = 'このメッセージのコンテンツはセンシティブなコンテンツを含むとマークされたため保存されませんでした。';
$string['select_sms_gateways'] = 'SMSゲートウェイプロバイダ';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = '{$a->gateway} SMS ゲートウェイを削除できません。ゲートウェイが使用中またはデータベースに問題があります。ゲートウェイがアクティブであるか確認するか、あなたのデータベース管理者にご連絡ください。';
$string['sms_gateway_deleted'] = '{$a->gateway} SMSゲートウェイが削除されました。';
$string['sms_gateway_disable_failed'] = 'SMSゲートウェイを無効にできません。ゲートウェイが使用中またはデータベースに問題があります。ゲートウェイがアクティブであるか確認するか、あなたのデータベース管理者にご連絡ください。';
$string['sms_gateways'] = 'SMSゲートウェイ';
$string['sms_gateways_info'] = 'あなたのサイトからSMSメッセージを送信するためのSMSゲートウェイを作成および管理します。';
$string['status:gateway_failed'] = 'ゲートウェイがメッセージ送信に失敗しました。';
$string['status:gateway_not_available'] = 'ゲートウェイがメッセージ送信に使用できません。';
$string['status:gateway_queued'] = 'メッセージはゲートウェイにより送信されるためキューに入れられます。';
$string['status:gateway_rejected'] = 'ゲートウェイはメッセージを拒否しました。';
$string['status:gateway_sent'] = 'メッセージはゲートウェイにより送信されました。';
$string['status:message_over_size'] = 'メッセージが大きすぎてゲートウェイから送信できません。';
$string['status:unknown'] = 'メッセージのステータスを決定できません。';
