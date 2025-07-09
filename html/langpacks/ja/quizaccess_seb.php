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
 * Strings for component 'quizaccess_seb', language 'ja', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = '新しいテンプレートを追加する';
$string['allowedbrowserkeysdistinct'] = 'キーはすべて異なる必要があります。';
$string['allowedbrowserkeyssyntax'] = 'キーは64文字の16進数にする必要があります。';
$string['cachedef_config'] = 'SEB設定キャッシュ';
$string['cachedef_configkey'] = 'SEB設定キーキャッシュ';
$string['cachedef_quizsettings'] = 'SEB小テスト設定キャッシュ';
$string['cantdelete'] = '1つまたはそれ以上の小テストで使用されているため、テンプレートを削除できません。';
$string['cantedit'] = '1つまたはそれ以上の小テストで使用されているため、テンプレートを編集できません。';
$string['checkingaccess'] = 'Safe Exam Browserへのアクセス確認中 ...';
$string['clientrequiresseb'] = 'この小テストはクライアント設定のSafe Exam Browserを使用するよう設定されています。';
$string['confirmtemplateremovalquestion'] = '本当にこのテンプレートを削除してもよろしいですか?';
$string['confirmtemplateremovaltitle'] = 'テンプレート削除確認';
$string['conflictingsettings'] = 'あなたには既存のSafe Exam Browser設定を更新するためのパーミッションがありません。';
$string['content'] = 'テンプレート';
$string['description'] = '説明';
$string['disabledsettings'] = '設定無効';
$string['disabledsettings_help'] = '小テストが受験されている場合、Safe Exam Browser小テスト設定は変更できません。設定を変更するには最初にすべての小テスト受験を削除する必要があります。';
$string['downloadsebconfig'] = 'SEB設定ファイルをダウンロードする';
$string['duplicatetemplate'] = 'すでに同名のテンプレートが存在します。';
$string['edittemplate'] = 'テンプレートを編集する';
$string['enabled'] = '有効';
$string['error:ws:nokeyprovided'] = '少なくとも1つのSafe Exam Browserキーが提供される必要があります。';
$string['error:ws:quiznotexists'] = 'コースモジュールIDに合致する小テストは見つかりませんでした: {$a}';
$string['event:accessprevented'] = '小テストアクセスが拒否されました。';
$string['event:templatecreated'] = 'SEBテンプレートが作成されました。';
$string['event:templatedeleted'] = 'SEBテンプレートが削除されました。';
$string['event:templatedisabled'] = 'SEBテンプレートが無効にされました。';
$string['event:templateenabled'] = 'SEBテンプレートが有効にされました。';
$string['event:templateupdated'] = 'SEBテンプレートが更新されました。';
$string['exitsebbutton'] = 'Safe Exam Browserを終了する';
$string['filemanager_sebconfigfile'] = 'Safe Exam Browser設定ファイルをアップロードする';
$string['filemanager_sebconfigfile_help'] = 'あなたのこの小テスト用Safe Exam Browser設定ファイルをアップロードしてください。';
$string['filenotpresent'] = 'SEB設定ファイルをアップロードしてください。';
$string['fileparsefailed'] = 'アップロードされたファイルをSEB設定ファイルとして保存できませんでした。';
$string['httplinkbutton'] = '設定をダウンロードする';
$string['invalid_browser_key'] = '無効なSEBブラウザキーです。';
$string['invalid_config_key'] = '無効なSEB設定キーです。';
$string['invalidkeys'] = 'Safe Exam Browserのキーを検証できませんでした。あなたが正しい設定ファイルでSafe Exam Browserを使用していることを確認してください。';
$string['invalidtemplate'] = '無効なSEB設定テンプレートです。';
$string['manage_templates'] = 'Safe Exam Browseテンプレート';
$string['managetemplates'] = 'テンプレートを管理する';
$string['missingrequiredsettings'] = 'いくつかの必須値が設定にありません。';
$string['name'] = '名称';
$string['newtemplate'] = '新しいテンプレート';
$string['noconfigfilefound'] = '次のcmidのアップロードされた小テスト用SEP設定ファイルは見つかりませんでした: {$a}';
$string['noconfigfound'] = '次のcmidの小テスト用SEP設定ファイルは見つかりませんでした: {$a}';
$string['not_seb'] = '使用されているafe Exam Browserはありません。';
$string['notemplate'] = 'テンプレートなし';
$string['passwordnotset'] = '現在の設定では小テストパスワードを設定したSafe Exam Browserを使用した小テストが必要です。';
$string['pluginname'] = 'Safe Exam Browserアクセスルール';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = '小テストのSafe Exam Browse設定です。これには最後に設定を作成または修正したユーザのIDを含みます。';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = '設定を識別するための小テストIDです。';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = '設定が作成されたUnix時間です。';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = '最後に設定が修正されたUnix時間です。';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = '最後に設定を作成または修正したユーザのIDです。';
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe Exam Browserテンプレート設定です。これには最後にテンプレートを作成または修正したユーザのIDを含みます。';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'テンプレートが作成されたUnix時間です。';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = '最後にテンプレートが修正されたUnix時間です。';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = '最後にテンプレートを作成または修正したユーザのIDです。';
$string['quizsettings'] = '小テスト設定';
$string['restoredfrom'] = '{$a->name} (cmid {$a->cmid} 経由でリストア)';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Safe Exam Browserで小テストを閲覧するための必要条件をバイパスします。';
$string['seb:manage_filemanager_sebconfigfile'] = 'SEB小テスト設定を修正する: SEB設定ファイルを選択する';
$string['seb:manage_seb_activateurlfiltering'] = 'SEB小テスト設定を修正する: URLフィルタリングを有効にする';
$string['seb:manage_seb_allowcapturecamera'] = 'SEB小テストの設定を変更する: ブラウザからカメラへのアクセスを許可する';
$string['seb:manage_seb_allowcapturemicrophone'] = 'SEB小テストの設定を変更する: ブラウザからマイクへのアクセスを許可する';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'SEB小テスト設定を修正する: 許可されるbrowser examキーを修正する';
$string['seb:manage_seb_allowreloadinexam'] = 'SEB小テスト設定を修正する: リロードを許可する';
$string['seb:manage_seb_allowspellchecking'] = 'SEB小テスト設定を修正する: スペルチェックを有効にする';
$string['seb:manage_seb_allowuserquitseb'] = 'SEB小テスト設定を修正する: 終了を許可する';
$string['seb:manage_seb_enableaudiocontrol'] = 'SEB小テスト設定を修正する: オーディオコントロールを有効にする';
$string['seb:manage_seb_expressionsallowed'] = 'SEB小テスト設定を修正する: 単純式許可';
$string['seb:manage_seb_expressionsblocked'] = 'SEB小テスト設定を修正する: 単純式不許可';
$string['seb:manage_seb_filterembeddedcontent'] = 'SEB小テスト設定を修正する: 埋め込みコンテンツをフィルタする';
$string['seb:manage_seb_linkquitseb'] = 'SEB小テスト設定を修正する: 終了リンク';
$string['seb:manage_seb_muteonstartup'] = 'SEB小テスト設定を修正する: スタートアップ時にミュートする';
$string['seb:manage_seb_quitpassword'] = 'SEB小テスト設定を修正する: 終了パスワード';
$string['seb:manage_seb_regexallowed'] = 'SEB小テスト設定を修正する: 正規表現許可';
$string['seb:manage_seb_regexblocked'] = 'SEB小テスト設定を修正する: 正規表現不許可';
$string['seb:manage_seb_requiresafeexambrowser'] = 'SEB小テスト設定を修正する: 要Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'SEB小テスト設定を修正する: キーボードレイアウトを表示する';
$string['seb:manage_seb_showreloadbutton'] = 'SEB小テスト設定を修正する: リロードボタンを表示する';
$string['seb:manage_seb_showsebdownloadlink'] = 'SEB小テスト設定を修正する: ダウンロードリンクを表示する';
$string['seb:manage_seb_showsebtaskbar'] = 'SEB小テスト設定を修正する: タスクバーを表示する';
$string['seb:manage_seb_showtime'] = 'SEB小テスト設定を修正する: 時間を表示する';
$string['seb:manage_seb_showwificontrol'] = 'SEB小テスト設定を修正する: Wi-Fiコントロールを表示する';
$string['seb:manage_seb_templateid'] = 'SEB小テスト設定を修正する: SEBテンプレートを選択する';
$string['seb:manage_seb_userconfirmquit'] = 'SEB小テスト設定を修正する: 終了時に確認する';
$string['seb:managetemplates'] = 'SEB設定テンプレートを管理します。';
$string['seb_activateurlfiltering'] = 'URLフィルタリングを有効にする';
$string['seb_activateurlfiltering_help'] = 'この設定を有効にした場合、ウェブページ読み込み時にURLがフィルタリングされます。フィルタ設定は以下で定義する必要があります。';
$string['seb_allowcapturecamera'] = 'ブラウザからカメラへのアクセスを許可する';
$string['seb_allowcapturecamera_help'] = 'この設定を有効にした場合、試験セッションの開始前にSEB用カメラへのアクセス許可を求めるメッセージが表示されます。macOS 12/iOS 15またはそれ以降でこの設定を無効にした場合、いかなる場合でもウェブアプリケーションがカメラにアクセスできなくなります。つまり、WebRTC経由でのビデオ録画はできません。';
$string['seb_allowcapturemicrophone'] = 'ブラウザからマイクへのアクセスを許可する';
$string['seb_allowcapturemicrophone_help'] = 'この設定を有効にした場合、試験セッションの開始前にSEB用マイクへのアクセス許可を求めるメッセージが表示されます。macOS 12/iOS 15またはそれ以降でこの設定を無効にした場合、いかなる場合でもウェブアプリケーションがマイクにアクセスできなくなります。つまり、WebRTC経由でのオーディオレコーディングはできません。';
$string['seb_allowedbrowserexamkeys'] = 'browser examキーを許可する';
$string['seb_allowedbrowserexamkeys_help'] = 'あなたはこの小テストに許可されたSafe Exam Browserのバージョンのbrowser examキーをこのフィールドに入力できます。キーが入力されない場合、browser examキーはチェックしません。';
$string['seb_allowreloadinexam'] = '受験中のリロードを許可する';
$string['seb_allowreloadinexam_help'] = 'この設定を有効にした場合、ページのリロード (SEBタスクバーのリロードボタン、ブラウザツールバー、iOSスライドメニュー、キーボードショートカットF5/cmd+R) が許可されます。ユーザがインターネット接続なしにページをリロードした場合、オフラインキャッシュが壊れる場合があることに留意してください。';
$string['seb_allowspellchecking'] = 'スペルチェックを有効にする';
$string['seb_allowspellchecking_help'] = 'この設定を有効にした場合、SEBブラウザでのスペルチェックが許可されます。';
$string['seb_allowuserquitseb'] = 'SEBの終了を有効にする';
$string['seb_allowuserquitseb_help'] = 'この設定を有効にした場合、ユーザはSEBタスクバーの「終了」ボタンまたはCtrl-Qキーを押すか、メインブラウザウィンドウの閉じるボタンをクリックしてSEBを終了できます。';
$string['seb_enableaudiocontrol'] = 'オーディオコントロールを有効にする';
$string['seb_enableaudiocontrol_help'] = 'この設定を有効にした場合、SEBタスクバーにオーディオコントロールアイコンが表示されます。';
$string['seb_expressionsallowed'] = '許可される表現';
$string['seb_expressionsallowed_help'] = '許可されるURLに対する表現フィルタリングを含むテキストフィールドです。ワイルドカード文字「\\*」の使用は可能です。表現例: 「example.com」または「example.com/stuff/\\*\'」の場合、「example.com」は「example.com\'」「www.example.com」および「www.mail.example.com」に合致します。「example.com/stuff/\\*\'」はリクエストされたすべての「example.com」のパスの最初の部分に「stuff」を含むサブドメインすべてに合致します。';
$string['seb_expressionsblocked'] = '許可されない表現';
$string['seb_expressionsblocked_help'] = '許可されないURLに対する表現フィルタリングを含むテキストフィールドです。ワイルドカード文字「\\*」の使用は可能です。表現例: 「example.com」または「example.com/stuff/\\*\'」の場合、「example.com」は「example.com\'」「www.example.com」および「www.mail.example.com」に合致します。「example.com/stuff/\\*\'」はリクエストされたすべての「example.com」のパスの最初の部分に「stuff」を含むサブドメインすべてに合致します。';
$string['seb_filterembeddedcontent'] = '埋め込みコンテンツもフィルタする';
$string['seb_filterembeddedcontent_help'] = 'この設定を有効にした場合、すべての埋め込みリソースもフィルタセットによりフィルタリングされます。';
$string['seb_help'] = '小テストがSafe Exam Browserを使用するよう設定します。';
$string['seb_linkquitseb'] = 'この終了リンクと共にSafe Exam Browser終了ボタンを表示する';
$string['seb_linkquitseb_help'] = 'あなたはこのフィールドにSEBを終了するためのリンクを入力できます。これは小テストが送信された後に表示されるページ上の「Safe Exam Browserを終了する」ボタンに使用されます。ボタンをクリックした場合、またはあなたが好きな場所に設置したリンクをクリックした場合、終了パスワードを入力せずにSEBを終了できます。HTTPSサイトの場合、終了リンクはhttps://で始まる必要があります。リンクが入力されない場合、「Safe Exam Browserを終了する」ボタンは表示されません。また、SEBを終了するリンクも設定されません。';
$string['seb_managetemplates'] = 'Safe Exam Browserテンプレートを管理する';
$string['seb_muteonstartup'] = '開始時にミュートする';
$string['seb_muteonstartup_help'] = 'この設定を有効にした場合、SEBの開始時の初めにオーディオがミュートされます。';
$string['seb_quitpassword'] = '小テストパスワード';
$string['seb_quitpassword_help'] = 'このパスワードはユーザがメインブラウザウィンドウの「終了」ボタンでSEBを終了する場合に要求されます。終了パスワードが設定されいない場合、SEBは単に「本当にSEBを終了してもよろしいですか?」を表示します。';
$string['seb_regexallowed'] = '許可されるRegex';
$string['seb_regexallowed_help'] = '許可されるURLに対する正規表現 (Regex) フォーマットでの表現フィルタリングを含むテキストフィールドです。';
$string['seb_regexblocked'] = '許可されないRegex';
$string['seb_regexblocked_help'] = '許可されないURLに対する正規表現 (Regex) フォーマットでの表現フィルタリングを含むテキストフィールドです。';
$string['seb_requiresafeexambrowser'] = 'Safe Exam Browserの使用を要求する';
$string['seb_requiresafeexambrowser_help'] = 'この設定を有効にした場合、学生はSafe Exam Browserを使用してのみ小テストを受験できます。利用可能なオプションは次のとおりです:

* No
<br />小テストの受験にSafe Exam Browserは要求されません。
* Yes –既存のテンプレートを使用する
<br />Safe Exam Browserの設定テンプレートを使用できます。テンプレートはサイト管理者によって管理されます。あなたの手動設定はテンプレートの設定を上書きします。
* Yes – 手動設定する
<br />Safe Exam Browserの設定テンプレートは使用されません。あなたはSafe Exam Browserブラウザを手動で設定できます。
* Yes – 私の設定をアップロードする
<br />あなたのSafe Exam Browser設定ファイルをアップロードできます。すべての手動設定およびテンプレートの使用は破棄されます。
* Yes – SEBクライアント設定を使用する
<br />Moodle側にSafe Exam Browserの設定はありません。Safe Exam Browserのどのような設定でも小テストを受験できます。';
$string['seb_showkeyboardlayout'] = 'キーボードレイアウトを表示する';
$string['seb_showkeyboardlayout_help'] = 'この設定を有効にした場合、SEBタスクバーに現在のキーボードレイアウトが表示されます。あなたはオペレーティングシステムで有効にされている他のキーボードレイアウトに切り替えできるようになります。';
$string['seb_showreloadbutton'] = 'リロードボタンを表示する';
$string['seb_showreloadbutton_help'] = 'この設定を有効にした場合、SEBタスクバーにリロードボタンが表示されます。このボタンにより現在のウェブページをリロードできます。';
$string['seb_showsebdownloadlink'] = 'Safe Exam Browserダウンロードボタンを表示する';
$string['seb_showsebdownloadlink_help'] = 'この設定を有効にした場合、小テスト開始ページにSafe Exam Browserダウンロードボタンが表示されます。';
$string['seb_showsebtaskbar'] = 'SEBタスクバーを表示する';
$string['seb_showsebtaskbar_help'] = 'この設定を有効にした場合、SEBブラウザウィンドウ下部にタスクバーが表示されます。Wi-Fiコントロール、リロードボタン、時間またはキーボードレイアウトを表示したい場合、タスクバーが必要です。';
$string['seb_showtime'] = '時間を表示する';
$string['seb_showtime_help'] = 'この設定を有効にした場合、現在の時間がSEBタスクバーに表示されます。';
$string['seb_showwificontrol'] = 'Wi-Fiコントロールを表示する';
$string['seb_showwificontrol_help'] = 'この設定を有効にした場合、SEBタスクバーにWi-Fiコントロールボタンが表示されます。このボタンによりユーザは前回接続したWi-Fiネットワークに再接続できます。';
$string['seb_templateid'] = 'Safe Exam Browser設定テンプレート';
$string['seb_templateid_help'] = '選択された設定テンプレートの設定は小テスト受験時のSafe Exam Browserの設定に使用されます。あなたの手動設定でテンプレートの設定を上書きできます。';
$string['seb_use_client'] = 'Yes – SEBクライアント設定を使用する';
$string['seb_use_manually'] = 'Yes – 手動設定する';
$string['seb_use_template'] = 'Yes – 既存のテンプレートを使用する';
$string['seb_use_upload'] = 'Yes – 私の設定をアップロードする';
$string['seb_userconfirmquit'] = 'ユーザに終了を確認する';
$string['seb_userconfirmquit_help'] = 'この設定を有効にした場合、中心リンクが検出された時点でユーザはSEBの終了を承認する必要があります。';
$string['sebdownloadbutton'] = 'Safe Exam Browserをダウンロードする';
$string['sebkeysvalidationfailed'] = 'SEBキーの検証時にエラーが発生しました。';
$string['seblinkbutton'] = 'Safe Exam Browserを起動する';
$string['sebrequired'] = 'この小テストは学生がSafe Exam Browserを使用してのみ受験できるよう設定されています。';
$string['setting:autoreconfigureseb'] = 'SEBを自動設定する';
$string['setting:autoreconfigureseb_desc'] = 'この設定を有効にした場合、Safe Exam Browserを使用して小テストにアクセスしたユーザは自動的に自身のSafe Exam Browserの再設定が強制されます。';
$string['setting:displayblocksbeforestart'] = '小テスト開始前にブロックを表示する';
$string['setting:displayblocksbeforestart_desc'] = 'この設定を有効にした場合、ユーザの小テスト受験開始前にブロックが表示されます。';
$string['setting:displayblockswhenfinished'] = '小テスト終了後にブロックを表示する';
$string['setting:displayblockswhenfinished_desc'] = 'この設定を有効にした場合、ユーザの小テスト受験終了後にブロックが表示されます。';
$string['setting:downloadlink'] = 'Safe Exam Browserダウンロードリンク';
$string['setting:downloadlink_desc'] = 'Safe Exam BrowserアプリケーションをダウンロードするためのURLです。';
$string['setting:quizpasswordrequired'] = '要小テストパスワード';
$string['setting:quizpasswordrequired_desc'] = 'この設定を有効にした場合、Safe Exam Browserを必要とする小テストすべてに小テストパスワードを設定する必要があります。';
$string['setting:showhttplink'] = 'http:// リンクを表示する';
$string['setting:showseblink'] = 'seb:// リンクを表示する';
$string['setting:showseblinks'] = 'Safe Exam Browser設定リンクを表示する';
$string['setting:showseblinks_desc'] = '小テストへのアクセスが制限されている場合にユーザが小テストにアクセスするためのSafe Exam Browser設定ファイルへのリンクを表示するかどうか決定してください。seb:// リンクはすべてのブラウザで動作するわけではない点に留意してください。';
$string['setting:supportedversions'] = '設定キー機能を使用するには最低でも次のSafe Exam Browserクライアントのバージョンが必要であることに留意してください： macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14';
$string['settingsfrozen'] = '少なくとも1件の小テスト受験があるため、Safe Exam Browser設定を更新できません。';
$string['unknown_reason'] = '不明な理由';
$string['used'] = '使用中';
