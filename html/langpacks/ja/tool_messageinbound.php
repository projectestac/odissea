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
 * Strings for component 'tool_messageinbound', language 'ja', version '4.1'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'クラス名';
$string['component'] = 'コンポーネント';
$string['configmessageinboundhost'] = 'Moodleがメールをチェックする対象のサーバのアドレスです。デフォルトポート以外のポートを指定する場合、[server]:[port]を使用してください。例えば次のようになります: mail.example.com:993 ポートが指定されない場合、メールサーバタイプのデフォルトポートが使用されます。';
$string['defaultexpiration'] = 'デフォルトアドレス有効期限';
$string['defaultexpiration_help'] = 'ハンドラによってメールアドレスが生成された場合、使用できなくなるよう自動的に期限切れとなる期間を設定することができます。有効期限の設定をお勧めします。';
$string['description'] = '説明';
$string['domain'] = 'メールドメイン';
$string['edit'] = '編集';
$string['edithandler'] = '{$a} ハンドラの設定を編集する';
$string['editinghandler'] = '{$a} の編集';
$string['enabled'] = '有効';
$string['fixedenabled_help'] = 'あなたはこのハンドラの状態を変更することはできません。これは恐らくハンドラが他のハンドラによって必要とされているためです。';
$string['fixedvalidateaddress'] = '送信者アドレスを確認する';
$string['fixedvalidateaddress_help'] = 'あなたはこのハンドラのアドレス妥当性確認を変更することはできません。これはハンドラが特定の設定を必要とするためです。';
$string['handlerdisabled'] = 'あなたが接続を試みたメールハンドラは無効にされています。現在、メッセージを処理することはできません。';
$string['incomingmailconfiguration'] = '受信メール設定';
$string['incomingmailserversettings'] = '受信メールサーバ設定';
$string['incomingmailserversettings_desc'] = 'Moodleは適切に設定されたIMAPサーバに接続することができます。あなたはIMAPサーバに接続するための設定をここで指定することができます。';
$string['invalid_recipient_handler'] = '有効なメッセージが受信されたにもかかわらず送信者を認証できない場合、メッセージはメールサーバに保存されます。同時にユーザプロファイルのメールアドレスを使用してユーザに連絡されます。オリジナルメッセージの信頼度を追認するためユーザには返信するチャンスが与えられます。

このハンドラはこれらの返信を処理します。

メールクライアントが正しく設定されていない場合、ユーザは正しくないメールアドレスから返信できるためこのハンドラの送信者確認を無効にすることはできません。';
$string['invalid_recipient_handler_name'] = '無効な送信者ハンドラ';
$string['invalidrecipientdescription'] = 'あなたのユーザプロファイルと異なるメールアドレスから送信されたため、メッセージ「 {$a->subject} 」を認証できませんでした。メッセージを認証するにはあなたはこのメッセージに返信する必要があります。';
$string['invalidrecipientdescriptionhtml'] = 'あなたのユーザプロファイルと異なるメールアドレスから送信されたため、メッセージ「 {$a->subject} 」を認証できませんでした。メッセージを認証するにはあなたはこのメッセージに返信する必要があります。';
$string['invalidrecipientfinal'] = 'メッセージ「 {$a->subject} 」を認証できませんでした。あなたのプロファイルのメールアドレスと同じメールアドレスを使用してメッセージを送信したことを確認してください。';
$string['mailbox'] = 'メールボックス名';
$string['mailboxconfiguration'] = 'メールボックス設定';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'メール設定';
$string['message_handlers'] = 'メッセージハンドラ';
$string['messageinbound'] = 'インバウンドメッセージ';
$string['messageinboundenabled'] = '受信メール処理を有効にする';
$string['messageinboundenabled_desc'] = '適切な情報をメッセージ送信するには受信メール処理を有効にする必要があります。';
$string['messageinboundgeneralconfiguration'] = '一般設定';
$string['messageinboundgeneralconfiguration_desc'] = '受信メッセージ処理ではあなたがMoodle内でメールを受信および処理できます。これはフォーラム投稿に返信するため、またはユーザのプライベートファイルにファイルを追加するためにメールを送信する用途に使用できます。';
$string['messageinboundhost'] = '受信メールサーバ';
$string['messageinboundhostoauth_help'] = 'XOAUTH2認証を使用してIMAPサーバにアクセスするために使用するOAuth　2サービスです。サービスがまだ存在しない場合、あなたはサービスを作成する必要があります。';
$string['messageinboundhostpass'] = 'パスワード';
$string['messageinboundhostpass_desc'] = 'これはあなたのメールアカウントにログインするためサービスプロバイダが提供したパスワードです。';
$string['messageinboundhostssl'] = 'SSLを使用する';
$string['messageinboundhostssl_desc'] = 'いくつかのメールサーバではMoodleおよびあなたのサーバ間での暗号化通信による追加的レベルのセキュリティをサポートします。あなたのサーバがサポートしている場合、私たちはこのSSL暗号化の使用をお勧めします。';
$string['messageinboundhosttype'] = 'サーバタイプ';
$string['messageinboundhostuser'] = 'ユーザ名';
$string['messageinboundhostuser_desc'] = 'これはあなたのメールアカウントにログインするためサービスプロバイダが提供するユーザ名です。';
$string['messageinboundmailboxconfiguration_desc'] = 'メッセージが送信される場合、「address+data@example.com」 のようなフォーマットになります。信頼できるアドレスをMoodleから生成するには通常あなたが「@」記号の前に使用するアドレスおよび「@」記号の後に使用するドメインを分けて指定してください。例えば例のメールボックス名は「address」、そしてメールドメインは「example.com」となります。あなたはこの目的のために専用のメールアカウントを使用すべきです。';
$string['messageprocessingerror'] = 'あなたは最近Moodleに件名「 {$a->subject} 」のメールを送信しましたが、残念なことに処理されませんでした。

エラー詳細は以下のとおりです。

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>あなたは最近Moodleに件名「 {$a->subject} 」のメールを送信しましたが残念なことに処理されませんでした。</p>
<p>エラー詳細は以下のとおりです。</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'あなたが送信した件名「 {$a->subject} 」のメールを処理できませんでした。エラーメッセージは次のとおりです: {$a->message}';
$string['messageprocessingfailedunknown'] = '件名「 {$a->subject} 」のメールを処理できませんでした。詳細情報に関してあなたのシステム管理者にご連絡ください。';
$string['messageprocessingsuccess'] = '{$a->plain} さん

あなたが将来的にこれらの通知を受信したくない場合、ブラウザで {$a->messagepreferencesurl} を開くことによりパーソナルメッセージングプレファレンスを編集できます。';
$string['messageprocessingsuccesshtml'] = '{$a->html} さん

<p>あなたが将来的にこれらの通知を受信したくない場合、あなたの<a href="{$a->messagepreferencesurl}">パーソナルメッセージングプレファレンスを編集</a>できます。</p>';
$string['messageprovider:invalidrecipienthandler'] = 'あなたから受信メッセージが到着したことを確認するメッセージ';
$string['messageprovider:messageprocessingerror'] = '受信メッセージを処理できなかった場合の警告';
$string['messageprovider:messageprocessingsuccess'] = 'メッセージが正常に送信された場合の確認';
$string['name'] = '名称';
$string['noencryption'] = 'Off - 暗号化なし';
$string['noexpiry'] = '有効期限なし';
$string['oldmessagenotfound'] = 'あなたは手動でメッセージの認証を試みましたが、メッセージが見つかりませんでした。すでに処理されているか、メッセージの有効期限が切れたことが考えられます。';
$string['oneday'] = '1日';
$string['onehour'] = '1時間';
$string['oneweek'] = '1週間';
$string['oneyear'] = '1年';
$string['pluginname'] = '受信メッセージ設定';
$string['privacy:metadata:coreuserkey'] = '受信したメールを認証するユーザキーです。';
$string['privacy:metadata:messagelist'] = '妥当性確認に失敗してさらなる承認が必要なメッセージIDの一覧です。';
$string['privacy:metadata:messagelist:address'] = 'メール送信元のアドレスです。';
$string['privacy:metadata:messagelist:messageid'] = 'メッセージIDです。';
$string['privacy:metadata:messagelist:timecreated'] = 'レコードが作成された日時です。';
$string['privacy:metadata:messagelist:userid'] = 'メッセージを承認する必要のあるユーザのIDです。';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = '送信者アドレスを確認する';
$string['ssl'] = 'SSL (SSLバージョン自動判別)';
$string['sslv2'] = 'SSLv2 (SSLバージョン2強制)';
$string['sslv3'] = 'SSLv3 (SSLバージョン3強制)';
$string['taskcleanup'] = '未承認受信メールの削除';
$string['taskpickup'] = '受信メールピックアップ';
$string['tls'] = 'TLS (TLSは暗号化なしチャネルのプロトコルレベルのネゴシエーションから開始しました。セキュアコネクションを開始するための推奨方法です)';
$string['tlsv1'] = 'TLSv1 (TLSサーババージョン1.xへのダイレクト接続)';
$string['validateaddress'] = '送信者メールアドレスを確認する';
$string['validateaddress_help'] = 'ユーザからメッセージを受信した場合、Moodleはユーザプロファイルのメールアドレスと送信者のメールアドレスを比較してメッセージの正当性の確認を試みます。

送信者が合致しない場合、本当にメールを送信したのか確認するため、ユーザに通知が送信されます。

この設定が無効にされた場合、送信者のメールアドレスがチェックされることはありません。';
