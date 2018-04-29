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
 * Strings for component 'local_mobile', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   local_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpermissions'] = '認証されたユーザロールに許可を与える';
$string['allowpermissionsdescription'] = '認証されたユーザロールを編集し、moodle/webservice:createtokenケイパビリティを許す';
$string['cannotcreatetoken'] = '管理ユーザでは自動トークン生成はできません（サイト内で手で作成する必要があります）';
$string['checkpluginconfiguration'] = 'プラグイン設定を確認';
$string['clickheretolaunchtheapp'] = 'アプリが自動的に開かないときは、ここをチェックしてください';
$string['customlangstrings'] = 'カスタム言語文字列';
$string['customlangstrings_desc'] = 'アプリに表示される語やフレーズをここでカスタマイズできます。カスタム言語文字列を1行ごとに以下の順で入力してください：文字列識別子、カスタム言語文字列、言語コード。各項目はパイプ文字（|）で連結
例：
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
文字列識別子の完全な一覧は、<a href="https://github.com/moodlehq/moodlemobile-phonegapbuild/blob/master/build/lang/en.json">英語版のリスト</a>を参照してください。';
$string['custommenuitems'] = 'カスタムメニュー項目';
$string['custommenuitems_desc'] = 'アプリのメインメニューへ項目を追加するには、ここにそれを設定します。1行ごとに以下の順で入力してください：項目テキスト、リンクURL、リンクを開く方法（inappbrowser、browser、またはembedded）、言語コード（言語コードはオプションであり、ユーザに特定の言語でのみその項目を表示します）。これらはパイプ文字（|）で区切ります。例：
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Visit our SIS | https://someurl.xyz | browser | en
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
</pre>
アプリを離れないでリンク先をブラウザで開くには、inappbrowserを選択します。デバイスのデフォルトブラウザでリンク先を開くには、browserを選択します。アプリ内の新規ページにリンク先表示を組み込むには、embeddedを選択します。';
$string['disabledfeatures'] = '無効な機能';
$string['disabledfeatures_desc'] = 'あなたのサイトでモバイルアプリから無効にしたい機能を、ここで選択します。ただし、ここに表示される機能のうち、他のサイト設定が理由で無効状態になっているものもあります。変更されたことを確認するには、アプリから一度ログアウトして再度ログインします。';
$string['enableadditionalservice'] = 'Moodleモバイルに追加機能サービスを許可する';
$string['enableadditionalservicedescription'] = 'このサービスはイネーブルにしなければなりません。';
$string['forcelogout'] = '強制ログアウト';
$string['forcelogout_desc'] = 'これを有効にすると、アプリのオプション「サイトの変更」が「ログアウト」に置き換えられます。その結果、ユーザは完全にログアウトさせられ、次にサイトにアクセスする際にパスワードを再度入力することになります。';
$string['local_mobiledescription'] = 'モバイルサービス機能を拡張するプラグイン';
$string['local_mobilesettings'] = '設定';
$string['mainmenu'] = 'メインメニュー';
$string['mobilefeatures'] = 'モバイル機能';
$string['pluginname'] = 'Moodle Mobile追加機能';
$string['pluginnotenabledorconfigured'] = 'アプリを起動するには、Moodle Mobileローカルプラグインを有効にして設定を行う必要があります';
$string['remoteaddons'] = 'リモートアドオン';
