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
 * Strings for component 'tool_mobile', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdbデバッグが有効にされています。外部データベース認証または外部データベース登録プラグイン設定では無効にしてください。';
$string['androidappid'] = 'AndroidアプリユニークID';
$string['androidappid_desc'] = 'あなたがカスタムAndroidアプリを使用しない限り、この設定はデフォルトのままにすることができます。';
$string['apppolicy'] = 'アプリポリシーURL';
$string['apppolicy_help'] = 'アプリのAboutページに一覧表示されるアプリユーザのためのポリシーのURLです。このフィールドを空白のままにした場合、代わりにサイトポリシーURLが使用されます。';
$string['autologinkeygenerationlockout'] = '自動ログインキー生成がブロックされました。あなたはリクエスト間に6分間待つ必要があります。';
$string['autologinnotallowedtoadmins'] = 'サイト管理への自動ログインは許可されません。';
$string['cachedef_plugininfo'] = 'モバイルアドオンのプラグイン一覧';
$string['clickheretolaunchtheapp'] = 'アプリが自動的に開かない場合、ここをクリックしてください。';
$string['configmobilecssurl'] = 'あなたのモバイルアプリインターフェースをカスタマイズするためのCSSファイルです。';
$string['customlangstrings'] = 'カスタム言語設定';
$string['customlangstrings_desc'] = 'アプリに表示される単語またはフレーズをここでカスタマイズできます。それぞれのカスタム言語ストリングを次のフォーマットで新しい行に入力してください: パイプ文字「|」で分けられたストリングID、カスタム言語ストリングおよび言語コード。例えば次のようになります:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
完全なストリングID一覧およびさらなる情報に関してドキュメンテーションをご覧ください。';
$string['custommenuitems'] = 'カスタムメニューアイテム';
$string['custommenuitems_desc'] = 'ここで指定することによりアプリのメインメニューに追加アイテムを追加することができます。新しい行に次のフォーマットでそれぞれのカスタムメニューを入力してください: アイテムテキスト、リンクURL、リンクオープン方法および言語コード (任意: 指定された言語のみでユーザにアイテムを表示します)、パイプ文字 (|) で分離してください。

リンクオープン方法は次のとおりです: app (アプリでサポートされる活動にリンクします), inappbrowser (アプリから離れずにブラウザでリンクを開きます), browser (デバイスのアプリの外にあるデフォルトブラウザでリンクを開きます)、embedded (アプリの新しいページのiframe内にリンクを表示します)

例えば次のようになります:
<pre>
App help|https://someurl.xyz/help|inappbrowser
My grades|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
</pre>';
$string['disabledfeatures'] = '無効済み機能';
$string['disabledfeatures_desc'] = 'あなたのサイトで無効にしたいモバイルアプリの機能を選択してください。ここで一覧表示されている機能の中には他のサイト設定で無効にされている場合もあることに留意してください。変更を確認する場合、あなたはログアウトして再度ログインする必要があります。';
$string['displayerrorswarning'] = 'デバッグメッセージの表示 (debugdisplay) が有効にされています。無効にしてください。';
$string['downloadcourse'] = 'コースをダウンロードする';
$string['downloadcourses'] = 'コースをダウンロードする';
$string['enablesmartappbanners'] = 'アプリバナーを有効にする';
$string['enablesmartappbanners_desc'] = 'この設定を有効にした場合、モバイルブラウザでのサイトアクセス時にモバイルアプリを推奨するバナーが表示されます。';
$string['forcedurlscheme'] = 'ブラウザウィンドウ経由であなたのカスタムブランドアプリのみが開かれるようにしたい場合、ここにURLスキームを入力してください。そうでない場合、フィールドを空白のままにしてください。';
$string['forcedurlscheme_key'] = 'URLスキーム';
$string['forcelogout'] = 'ログアウトを強制する';
$string['forcelogout_desc'] = 'この設定を有効にした場合、アプリオプション「サイトを変更する」が「ログアウト」に置換されます。これによりユーザは完全にログアウトされます。ユーザが次回サイトにアクセスしたい場合、パスワードを再入力する必要があります。';
$string['getmoodleonyourmobile'] = 'モバイルアプリを取得する';
$string['httpsrequired'] = '要HTTPS';
$string['insecurealgorithmwarning'] = 'HTTPS証明書は署名 (SHA-1) に安全ではないアルゴリズムを使用しているようです。証明書の更新をお試しください。';
$string['invalidcertificatechainwarning'] = '証明書チェーンが有効ではないようです。';
$string['invalidcertificateexpiredatewarning'] = 'サイトのHTTPS証明書の有効期限が切れているようです。';
$string['invalidcertificatestartdatewarning'] = 'サイトのHTTPS証明書はまだ有効ではないようです (開始日が将来のため)。';
$string['invalidprivatetoken'] = '無効なプライベートトークンです。トークンは空ではないか、GETパラメータで渡される必要があります。';
$string['invaliduserquotawarning'] = 'ユーザクオータ (userquota) に無効な数字が設定されています。サイトセキュリティ設定で有効な数字 (整数値) を設定してください。';
$string['iosappid'] = 'iOSアプリユニークID';
$string['iosappid_desc'] = 'あなたがカスタムiOSアプリを使用している以外、この設定はデフォルトのままにすることができます。';
$string['loginintheapp'] = 'アプリ経由';
$string['logininthebrowser'] = 'ブラウザウィンドウ経由 (SSOプラグイン用)';
$string['loginintheembeddedbrowser'] = '埋め込みブラウザ経由 (SSOプラグイン用)';
$string['mainmenu'] = 'メインメニュー';
$string['mobileapp'] = 'モバイルアプリ';
$string['mobileappconnected'] = 'モバイルアプリ接続';
$string['mobileappearance'] = 'モバイルアピアランス';
$string['mobileappenabled'] = 'このサイトではモバイルアプリによるアクセスが有効にされています。<br /><a href="{$a}">モバイルアプリをダウンロードしてください</a>。';
$string['mobileauthentication'] = 'モバイル認証';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'モバイル機能';
$string['mobilenotificationsdisabledwarning'] = 'モバイル通知が有効にされていません。通知設定で有効にしてください。';
$string['mobilesettings'] = 'モバイル設定';
$string['offlineuse'] = 'オフライン利用';
$string['pluginname'] = 'Moodleアプリツール';
$string['pluginnotenabledorconfigured'] = 'プラグインが有効にされていないか設定されていません。';
$string['privacy:metadata:core_userkey'] = '現在のユーザの自動ログインキーの作成に使用されるユーザのキーです。';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = '自動ログインキーが最後にリクエストされた日時です。それぞれのリクエストには6分間の間隔が必要です。';
$string['remoteaddons'] = 'リモートアドオン';
$string['selfsignedoruntrustedcertificatewarning'] = 'サイトのHTTPS証明書が自己署名または信頼できないようです。モバイルアプリは信頼されたサイトでのみ動作します。';
$string['setuplink'] = 'アプリダウンロードページ';
$string['setuplink_desc'] = 'App StoreまたはGoogle PlayでモバイルアプリをダウンロードするためのURLを含むページです。アプリダウンロードページリンクはページフッタおよびユーザのプロファイルに表示されます。リンクを表示しない場合、空白のままにしてください。';
$string['smartappbanners'] = 'アプリバナー';
$string['typeoflogin'] = 'ログインタイプ';
$string['typeoflogin_desc'] = 'サイトがSSO認証方法を使用している場合、ブラウザウィンドウまたは埋め込みブラウザから選択してください。すべてのSSOプラグインで動作するわけではありませんが、埋め込みブラウザによりユーザエクスペリエンスが向上します。';
