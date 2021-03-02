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
 * Strings for component 'message_airnotifier', language 'ja', version '3.8'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'デバイス管理';
$string['airnotifieraccesskey'] = 'Airnotifierアクセスキー';
$string['airnotifierappname'] = 'Airnotifierアプリ名';
$string['airnotifiermobileappname'] = 'モバイルアプリ名';
$string['airnotifierport'] = 'Airnotifierポート';
$string['airnotifierurl'] = 'Airnotifier URL';
$string['configairnotifieraccesskey'] = 'AirNotifierサーバに接続するためのアクセスキーです。あなたは以下の「アクセスキーをリクエストする」リンク (登録済みサイトのみ) または<a href="https://apps.moodle.com">Moodleアプリポータル</a>でアカウントを作成してアクセスキーを取得できます。';
$string['configairnotifierappname'] = 'AirNotifierで識別するためのアプリ名です。';
$string['configairnotifiermobileappname'] = 'モバイルアプリのユニークIDです (通常、次のようになります:  com.moodle.moodlemobile)。';
$string['configairnotifierport'] = 'AirNotifierサーバへのアクセス時に使用するポートです。';
$string['configairnotifierurl'] = 'ブッシュ通知を送信するために接続するサーバのURLです。';
$string['deletecheckdevicename'] = 'あなたのデバイスを削除する: {$a->name}';
$string['deletedevice'] = 'デバイスを削除します。再度アプリにデバイスを追加できることに留意してください。デバイスが再度表示され続ける場合、無効にしてください。';
$string['devicetoken'] = 'デバイストークン';
$string['errorretrievingkey'] = 'アクセスキーの検索中にエラーが発生しました。このサービスを使用するにはあなたのサイトの登録が必要です。あなたのサイトがすでに登録されている場合、登録の更新をお試しください。代わりにあなたは<a href="https://apps.moodle.com">Moodleアプリポータル</a>でアカウントを作成してアクセスキーを取得できます。';
$string['keyretrievedsuccessfully'] = 'アクセスキーが正常に検索されました。Moodleアプリ利用統計にアクセスするには<a href="https://apps.moodle.com">Moodle Apps Portal</a>でアカウントを作成してください。';
$string['moodleappsportallimitswarning'] = '通知を受信できるユーザデバイス数はあなたのMoodleアプリサブスクリプションに依存する点に留意してください。詳細は<a href="{$a}" target="_blank">Moodleアプリポータル</a>にアクセスしてください。';
$string['nodevices'] = '登録されたデバイスはありません。あなたがMoodleアプリをインストールした後、デバイスが自動的に表示されます。このサイトを登録してください。';
$string['nopermissiontomanagedevices'] = 'あなたにはデバイスを管理するためのパーミッションがありません。';
$string['notconfigured'] = 'AirNotifierサーバが設定されていないため、プッシュ通知を送信できません。';
$string['pluginname'] = 'モバイル';
$string['privacy:appiddescription'] = 'これは使用されるアプリケーションのIDです。';
$string['privacy:enableddescription'] = 'このデバイスがAirNotifierで有効にされた場合';
$string['privacy:metadata:date'] = 'メッセージで送信されたデータです。';
$string['privacy:metadata:enabled'] = 'AirNotifierデバイスが有効にされているかどうか指定します。';
$string['privacy:metadata:externalpurpose'] = 'この情報は最終的にユーザのモバイルデバイスに渡すため外部サイトに送信されます。';
$string['privacy:metadata:fullmessage'] = '完全なメッセージです。';
$string['privacy:metadata:notification'] = 'このメッセージが通知の場合';
$string['privacy:metadata:smallmessage'] = 'メッセージのセクションです。';
$string['privacy:metadata:subject'] = 'メッセージの件名です。';
$string['privacy:metadata:tableexplanation'] = 'AirNotifierデバイス情報がここに保存されます。';
$string['privacy:metadata:userdeviceid'] = 'ユーザのモバイルデバイスにリンクされるIDです。';
$string['privacy:metadata:userfromfullname'] = 'メッセージを送信したユーザのフルネームです。';
$string['privacy:metadata:userfromid'] = 'メッセージ作成者のユーザIDです。';
$string['privacy:metadata:userid'] = 'メッセージを送信したユーザのIDです。';
$string['privacy:metadata:username'] = 'ユーザのユーザ名です。';
$string['privacy:metadata:usersubsystem'] = 'このプラグインはユーザサブシステムに接続されます。';
$string['privacy:subcontext'] = 'メッセージAirNotifier';
$string['requestaccesskey'] = 'アクセスキーをリクエストする';
$string['showhide'] = 'デバイスを有効/無効にします。';
$string['sitemustberegistered'] = 'パブリックAirNotifierインスタンスを使用するにはあなたのサイトの登録が必要です。代わりにあなたは<a href="https://apps.moodle.com">Moodleアプリポータル</a>でアカウントを作成してアクセスキーを取得できます。';
$string['unknowndevice'] = '不明なデバイス';
