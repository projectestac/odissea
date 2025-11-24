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
 * Strings for component 'payment', language 'ja', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'アーカイブ済み';
$string['accountconfignote'] = 'このアカウントの支払いゲートウェイは分けて設定されます。';
$string['accountdeleteconfirm'] = 'このアカウントに前の支払いがある場合、アーカイブされます。そうでない場合、設定データは完全に削除されます。本当に続けてもよろしいですか?';
$string['accountidnumber'] = 'IDナンバ';
$string['accountidnumber_help'] = 'IDナンバは外部システムとのアカウントのマッチングのみに使用されます。サイト内で表示されることはありません。アカウントに公式コード名がある場合、それを入力できます。そうでない場合、空白のままにできます。';
$string['accountname'] = 'アカウント名';
$string['accountname_help'] = '支払いを設定する教師またはマネージャによるこのアカウントの識別方法です (例 コース登録プラグイン)。';
$string['accountnotavailable'] = '利用不可';
$string['createaccount'] = '支払いアカウントを作成する';
$string['deleteorarchive'] = '削除またはアーカイブ';
$string['editpaymentaccount'] = '支払いアカウントを編集する';
$string['eventaccountcreated'] = '支払いアカウントが作成されました。';
$string['eventaccountdeleted'] = '支払いアカウントが削除されました。';
$string['eventaccountupdated'] = '支払いアカウントが更新されました。';
$string['feeincludesurcharge'] = '{$a->fee} (この支払いタイプの追加料金 {$a->surcharge}% を含む)';
$string['gatewaycannotbeenabled'] = '設定が正しくないため、支払いゲートウェイを有効にできません。';
$string['gatewaydisabled'] = '無効';
$string['gatewayenabled'] = '有効';
$string['gatewaynotfound'] = 'ゲートウェイが見つかりませんでした。';
$string['gotomanageplugins'] = '支払いゲートウェイを有効または無効にして {$a} の追加料金を設定します。';
$string['gotopaymentaccounts'] = '{$a} で、これらのゲートウェイのいずれかを使用して支払いアカウントを作成してください。';
$string['hidearchived'] = 'アーカイブ済みを隠す';
$string['noaccountsavilable'] = '利用可能な支払いアカウントはありません。';
$string['nocurrencysupported'] = 'どの通貨にもサポートされる支払いはありません。少なくとも1つの支払いゲートウェイが有効にされていることをご確認ください。';
$string['nogateway'] = '利用できる支払いゲートウェイはありません。';
$string['nogatewayselected'] = 'あなたは最初に支払いゲートウェイを選択する必要があります。';
$string['paymentaccount'] = '支払いアカウント';
$string['paymentaccounts'] = '支払いアカウント';
$string['paymentaccountsexplained'] = 'このサイトの1つまたは複数の支払いアカウントを作成します。それぞれのアカウントには利用可能な支払いゲートウェイを含みます。サイトの支払い (例 コース登録の支払い) を設定する人は利用可能なアカウントから選択できます。';
$string['payments'] = '支払い';
$string['privacy:metadata:database:payments'] = '支払いに関する情報です。';
$string['privacy:metadata:database:payments:amount'] = '支払い合計金額です。';
$string['privacy:metadata:database:payments:currency'] = '支払い通貨です。';
$string['privacy:metadata:database:payments:gateway'] = '支払いに使用される支払いゲートウェイです。';
$string['privacy:metadata:database:payments:timecreated'] = '支払い完了日時です。';
$string['privacy:metadata:database:payments:timemodified'] = '支払いレコードの最終更新日時です。';
$string['privacy:metadata:database:payments:userid'] = '支払いを完了したユーザです。';
$string['restoreaccount'] = 'リストア';
$string['selectpaymenttype'] = '支払いタイプを選択する';
$string['showarchived'] = 'アーカイブ済みを表示する';
$string['supportedcurrencies'] = 'サポートされる通貨';
$string['surcharge'] = '追加料金 (パーセンテージ)';
$string['surcharge_desc'] = '追加料金はこの支払いゲートウェイを支払いに利用する場合にユーザに課金される追加パーセンテージです。';
