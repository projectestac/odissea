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
 * Strings for component 'lti', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = '承認';
$string['accepted'] = '承認';
$string['accept_grades'] = 'ツールからの評定を受け付ける';
$string['accept_grades_admin'] = 'ツールからの評定を受け付ける';
$string['accept_grades_admin_help'] = 'このツールのインスタンスに関わる評定をツールプロバイダが追加、更新、閲覧および削除できるかどうか指定してください。

いくつかのツールプロバイダではツール内で実施された操作をベースにMoodleに対して評定報告をサポートすることにより、さらなる統合環境を提供します。';
$string['accept_grades_help'] = 'この外部ツールのインスタンスにのみ関わる評定をツールプロバイダが追加、更新、閲覧および削除できるかどうか指定してください。

いくつかのツールプロバイダではツール内で実施された操作をベースにMoodleに対して評定報告をサポートすることにより、さらなる統合環境を提供します。

この設定はツール設定内でオーバーライドできることに留意してください。';
$string['action'] = '操作';
$string['activate'] = 'アクティブ';
$string['activatetoadddescription'] = 'あなたは説明を追加する前にこのツールを有効化する必要があります。';
$string['active'] = 'アクティブ';
$string['activity'] = '活動';
$string['addnewapp'] = '外部アプリケーションを有効にする';
$string['addserver'] = '新しい信頼できるサーバを追加する';
$string['addtype'] = '事前設定ツールを追加する';
$string['allow'] = '許可';
$string['allowinstructorcustom'] = '教師にカスタムパラメータの追加を許可する';
$string['allowsetting'] = 'ツールにMoodle内での8Kの設定保存を許可する';
$string['always'] = '常に';
$string['autoaddtype'] = 'ツールを追加する';
$string['automatic'] = '自動、ツールURLに基づく';
$string['baseurl'] = 'ベースURL/ツール登録名';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'LTI活動';
$string['basiclti_base_string'] = 'LTI OAuth基本ストリング';
$string['basiclti_endpoint'] = 'LTI起動エンドポイント';
$string['basicltifieldset'] = 'カスタムテンプレートフィールド';
$string['basiclti_in_new_window'] = 'あなたの活動は新しいウィンドウに表示されます。';
$string['basiclti_in_new_window_open'] = '新しいウィンドウを開く';
$string['basicltiintro'] = '活動説明';
$string['basicltiname'] = '活動名';
$string['basiclti_parameters'] = 'LTI起動パラメータ';
$string['basicltisettings'] = '基本学習ツール相互運用 (Learning Tool Interoperability) 設定';
$string['cancel'] = 'キャンセル';
$string['cancelled'] = 'キャンセル';
$string['cannot_delete'] = 'あなたはこのツール設定を削除できません。';
$string['cannot_edit'] = 'あなたはこのツール設定を編集できません。';
$string['capabilities'] = 'ケイパビリティ';
$string['capabilities_help'] = 'あなたがツールプロバイダに提供するケイパビリティを選択してください。2つ以上のケイパビリティを選択してください。';
$string['capabilitiesrequired'] = 'このツールを有効にするには次のデータにアクセスする必要があります:';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">続けるにはクリック</a>';
$string['comment'] = 'コメント';
$string['configpassword'] = 'デフォルトのリモートツールパスワード';
$string['configpreferheight'] = 'デフォルト推奨高';
$string['configpreferwidget'] = 'デフォルト起動をウィジェットに設定する';
$string['configpreferwidth'] = 'デフォルト推奨幅';
$string['configresourceurl'] = 'デフォルトリソースURL';
$string['configtoolurl'] = 'デフォルトリモートツールURL';
$string['configtypes'] = 'LTIアプリケーションを有効にする';
$string['configured'] = '設定';
$string['confirmtoolactivation'] = '本当にこのツールを有効にしてもよろしいですか?';
$string['contentitem'] = 'Content-Itemメッセージ';
$string['contentitem_help'] = 'この設定を有効にした場合、外部ツール追加時にオプション「コンテンツを選択する」が利用可能となります。';
$string['courseactivitiesorresources'] = 'コース活動またはリソース';
$string['courseid'] = 'コースIDナンバー';
$string['courseinformation'] = 'コース情報';
$string['courselink'] = 'コースに移動する';
$string['coursemisconf'] = 'コースが正しく設定されていません。';
$string['course_tool_types'] = 'コースツール';
$string['createdon'] = '作成日';
$string['curllibrarymissing'] = 'LTIを使用するにはPHP Curlライブラリをインストールする必要があります。';
$string['custom'] = 'カスタムパラメータ';
$string['custom_config'] = 'カスタムツール設定を使用します。';
$string['custom_help'] = 'カスタムパラメータはツールプロバイダで使用される設定です。例えばプロバイダから特定のリソースを表示するため、カスタムパラメータを使用することができます。それぞれのパラメータは独立した行に「name=value」のような形で入力する必要があります。例えば次のようになります: 「chapter=3」

ツールプロバイダから指示されない限り、このフィールドは変更しないままで安全です。';
$string['custominstr'] = 'カスタムパラメータ';
$string['debuglaunch'] = 'デバッグオプション';
$string['debuglaunchoff'] = '通常起動';
$string['debuglaunchon'] = 'デバッグ起動';
$string['default'] = 'デフォルト';
$string['default_launch_container'] = 'デフォルト起動コンテナ';
$string['default_launch_container_help'] = '起動コンテナはコースからツールが起動される場合の表示に影響します。いくつかの起動コンテナではツールに場所を提供して他の起動コンテナではMoodle環境との統合を実現します。

* **デフォルト** - ツール設定で指定された起動コンテナを使用します。

* **埋め込み** - 他の活動タイプと同じようにツールが既存のMoodleウィンドウ内に表示されます。

* **埋め込み (ブロックなし)** - トップページにナビゲーションが付加された形でツールが既存のMoodleウィンドウ内に表示されます。

* **新しいウィンドウ** - ツールは利用可能なスペースすべてを占有して新しいウィンドウに表示されます。ブラウザにより新しいタブまたはポップアップウィンドウが使用されます。ブラウザでは新しいウィンドウのオープンを抑制することができます。';
$string['delegate'] = '教師に委任する';
$string['delete'] = '削除';
$string['delete_confirmation'] = '本当にこの事前設定ツールを削除してもよろしいですか?';
$string['deletetype'] = '事前設定ツールを削除する';
$string['display_description'] = '起動時に活動説明を表示する';
$string['display_description_help'] = 'このオプションを有効にした場合、活動説明 (上記) がツールプロバイダのコンテンツの上に表示されます。

説明はツールの起動に関して付加的なインストラクションを提供するために使用できますが必須ではありません。

ツール起動コンテナが新しいウィンドウの場合、説明が表示されることがありません。';
$string['display_name'] = '起動時に活動名を表示する';
$string['display_name_help'] = 'このオプションを有効にした場合、活動名 (上記) がツールプロバイダのコンテンツの上に表示されます。

ツールプロバイダはタイトルを表示することもできます。このオプションにより活動タイトルが2回表示されることを防ぐことができます。

ツール起動コンテナが新しいウィンドウの場合、説明が表示されることがありません。';
$string['domain_mismatch'] = 'ツールURLのドメインがツール設定と合致しません。';
$string['donot'] = '送信しない';
$string['donotaccept'] = '承認しない';
$string['donotallow'] = '許可しない';
$string['duplicateregurl'] = 'この登録URLはすでに使用されています。';
$string['editdescription'] = 'このツールに説明を追加するにはここをクリックしてください。';
$string['edittype'] = '事前設定ツールを編集する';
$string['embed'] = '埋め込み';
$string['embed_no_blocks'] = '埋め込み (ブロックなし)';
$string['enableemailnotification'] = '通知メールを送信する';
$string['enableemailnotification_help'] = 'この設定を有効にした場合、ツール送信が評定された時点で学生に通知メールが送信されます。';
$string['enterkeyandsecret'] = 'あなたのコンシューマ鍵および共有秘密鍵を入力してください。';
$string['enterkeyandsecret_help'] = 'あなたにコンシューマ鍵および共有秘密鍵がある場合、ここに入力してください。';
$string['errorbadurl'] = 'URLは有効なツールURLまたはカートリッジではありません。';
$string['errorincorrectconsumerkey'] = 'コンシューマキーが正しくありません。';
$string['errorinvaliddata'] = '無効なデータ: {$a}';
$string['errorinvalidmediatype'] = '無効なメディアタイプ: {$a}';
$string['errorinvalidresponseformat'] = '無効なContent-Itemレスポンスフォーマットです。';
$string['errormisconfig'] = 'ツールが正しく設定されていません。ツール設定を修正するにはあなたのMoodle管理者にご連絡ください。';
$string['errortooltypenotfound'] = 'LTIツールタイプが見つかりませんでした。';
$string['existing_window'] = '既存のウィンドウ';
$string['extensions'] = 'LTI拡張サービス';
$string['external_tool_type'] = '事前設定ツール';
$string['external_tool_type_help'] = '* **自動、ツールURLをベースにする** - この設定はほとんどすべてのケースで使用されます。ツールURLに基づきMoodleは最も適切なツール設定を選択します。管理者によるツール設定およびコース内でのツール設定の両者が使用されます。ツールURLが指定された場合、MoodleはツールURLを認識できるか否かフィードバックを提供します。MoodleがツールURLを認識できない場合、あなたは手動でツール設定に入力する必要があります。

* **特定の事前設定ツール** - 特定の事前設定ツールを選択することであなたは外部ツールプロバイダとの通信に関してMoodleにツール設定内容の使用を強制することができます。ツールURLがツールプロバイダに属していない場合、警告が表示されます。一部のケースでは特定ツールの提供時にツールURLを入力する必要はありません (ツールプロバイダ内で特定のリソースを起動しな場合)。

* **カスタム設定** - このインスタンス内でカスタムツール設定を割り当てる場合、拡張要素を表示した後、コンシューマ鍵および共通秘密鍵を入力してください。コンシューマ鍵および共通秘密鍵がない場合、あなたはツールプロバイダにリクエストすることができます。すべてのツールがコンシューマ鍵および共通秘密鍵を必要とすることではないため、その場合はフィールドを空白のままにすることができます。

### 事前設定ツール編集

外部事前設定ツールのドロップダウンメニューでは3つのアイコンを選択することができます:

* **追加** - コースレベルの設定を作成します。コース内すべての外部ツールインスタンスではツール設定を使用することができます。

* **編集** - コースレベルの事前設定ツールをドロップダウンメニューから選択してアイコンをクリックしてください。ツール設定詳細を編集することができます。

* **削除** - 選択したコースレベルの事前設定ツールを削除します。';
$string['external_tool_types'] = '事前設定ツール';
$string['failedtoconnect'] = 'Moodleが「 $a 」システムと通信できませんでした。';
$string['failedtocreatetooltype'] = '新しいツールの作成に失敗しました。URLを確認して再度お試しください。';
$string['failedtodeletetoolproxy'] = 'ツール登録の削除に失敗しました。あなたは「外部ツール登録を管理する」にアクセスして手動で削除する必要があります。';
$string['filter_basiclti_configlink'] = 'あなたの推奨サイトおよびパスワードを設定します。';
$string['filter_basiclti_password'] = 'パスワードは必須です。';
$string['filterconfig'] = 'LTI管理';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = '設定の正しくないインスタンスに既存の設定を使用する';
$string['fixnew'] = '新しい設定';
$string['fixnewconf'] = '正しくない設定のインスタンスに新しい設定を定義する';
$string['fixold'] = '既存の設定を使用する';
$string['forced_help'] = 'この設定はコースまたはサイトレベルのツール設定で強制されています。あなたはこのインターフェースで設定内容を変更することはできません。';
$string['force_ssl'] = 'SSLを強制する';
$string['force_ssl_help'] = 'このオプションを有効にすることによりツールプロバイダのツール起動すべてにSSLの使用が強制されます。

加えてツールプロバイダからのウェブサービスリクエストすべてにSSLが使用されます。

このオプションを使用する場合、MoodleサイトおよびツールプロバイダがSSLをサポートしていることを確認してください。';
$string['generaltool'] = '一般ツール';
$string['global_tool_types'] = 'グローバル事前設定ツール';
$string['grading'] = '評定ルーティング';
$string['icon_url'] = 'アイコンURL';
$string['icon_url_help'] = 'アイコンURLではこの活動がコース一覧に表示される時に表示されるアイコンを変更します。デフォルトのLTIアイコンを使用する代わりに活動のタイプで使用されるアイコンを指定することができます。';
$string['id'] = 'ID';
$string['invalidid'] = 'LTI IDが正しくありません。';
$string['launch_in_moodle'] = 'Moodle内でツールを起動する';
$string['launchinpopup'] = '起動コンテナ';
$string['launch_in_popup'] = 'ツールをポップアップに起動する';
$string['launchinpopup_help'] = '起動コンテナはコースからツールが起動される場合の表示に影響します。いくつかの起動コンテナではツールに場所を提供して他の起動コンテナではMoodle環境との統合を実現します。

* **デフォルト** - ツール設定で指定された起動コンテナを使用します。

* **埋め込み** - 他の活動タイプと同じようにツールが既存のMoodleウィンドウ内に表示されます。

* **埋め込み (ブロックなし)** - トップページにナビゲーションが付加された形でツールが既存のMoodleウィンドウ内に表示されます。

* **新しいウィンドウ** - ツールは利用可能なスペースすべてを占有して新しいウィンドウに表示されます。ブラウザにより、新しいタブまたはポップアップウィンドウが使用されます。ブラウザでは新しいウィンドウのオープンを抑制することができます。';
$string['launchoptions'] = '起動オプション';
$string['launch_url'] = 'ツールURL';
$string['launch_url_help'] = 'ツールURLでは外部ツールのウェブアドレスを指定します。また、表示するリソース等の追加的な情報を含むことができます。ツールURLに何を入力するのか分からない場合、ツールプロバイダを確認してください。

あなたはカートリッジURLを入力することもできます。フォーム詳細の残りは自動的に入力されます。

事前設定ツールを選択した場合、あなたはツールURLを入力する必要はありません。ツールリンクがツールプロバイダのシステムを起動して特定のリソースに移動しない場合がこのケースにあたります。';
$string['leaveblank'] = '必要でない場合、空白にしてください。';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'コース個別ツール設定を追加する';
$string['lti:addinstance'] = '新しい外部ツール活動を追加する';
$string['lti_administration'] = '事前設定ツールを編集する';
$string['lti_errormsg'] = 'ツールにより次のエラーメッセージが返されました: 「 {$a} 」';
$string['lti:grade'] = '外部ツールから戻された評点を表示する';
$string['lti_launch_error'] = '外部ツール起動中にエラーが発生しました:';
$string['lti_launch_error_tool_request'] = '<p>管理者にツール設定の完了をリクエストするには<a href="{$a->admin_request_url}" target="_top">ここをクリック</a>してください。 </p>';
$string['lti_launch_error_unsigned_help'] = '<p>ツールプロバイダのコンシューマ鍵および共通秘密鍵が不足しているため、このエラーが発生したと考えられます。</p>
<p>コンシューマ鍵および共通秘密鍵がある場合、あなたは外部ツールインスタンスの設定時に入力することができます (拡張要素が表示されていることを確認してください)。</p>
<p> 代わりにあなたは<a href="{$a->course_tool_editor}">コースレベルのツールプロバイダ設定を作成</a>することができます。</p>';
$string['lti:manage'] = 'ツール起動時、インストラクタになる';
$string['lti:requesttooladd'] = 'ツールがサイト全体に設定されるようリクエストする';
$string['ltisettings'] = 'LTI設定';
$string['lti_tool_request_added'] = 'ツール設定のリクエストが正常に送信されました。あなたはツール設定を完了するため管理者に連絡する必要があります。';
$string['lti_tool_request_existing'] = 'ツールドメインに関するツール設定はすでに送信されています。';
$string['ltiunknownserviceapicall'] = 'LTIの不明なサービスAPIがコールされました。';
$string['lti:view'] = '外部ツール活動を起動する';
$string['main_admin'] = '概要ヘルプ';
$string['main_admin_help'] = '外部ツールでは遠隔に設置されたリソースをMoodleユーザがシームレスに利用できること実現します。特別な起動プロトコルを通してリモートツールは起動ユーザの一般的な情報にアクセスすることができます。例えばインスティテューション名、コースID、ユーザIDおよびユーザ名またはメールアドレス等の情報です。

このページに一覧表示されているツールタイプは3つのカテゴリに分けられます:

* **アクティブ** - これらのツールプロバイダは管理者により承認および設定されています。このMoodleインスタンス内すべてのコースで利用することができます。コンシューマ鍵および共通秘密鍵が入力された場合、Moodleインスタンスおよびリモートツール間において安全な通信チャネルを提供する信頼関係が確立されます。

* **保留** - これらのツールプロバイダはパッケージインポート経由で登録されていますが管理者から設定されていない状態です。コンシューマ鍵および共通秘密鍵がある場合、またはそれらを必要としない場合、教師はこれらのプロバイダのツールを利用することができます。

* **拒否** - これらのツールは管理者がMoodleインスタンス全体において利用できるようにする意図がない旨、フラグを立てられた状態です。コンシューマ鍵および共通秘密鍵がある場合、またはそれらを必要としない場合、教師はこれらのプロバイダのツールを利用することができます。';
$string['manage_external_tools'] = 'ツールを管理する';
$string['manage_tool_proxies'] = '外部ツール登録を管理する';
$string['manage_tools'] = '事前設定ツールを管理する';
$string['manuallyaddtype'] = 'あなたは代わりに<a href="{$a}">ツールを手動設定</a>することができます。';
$string['miscellaneous'] = 'その他';
$string['misconfiguredtools'] = '設定の正しくないツールインスタンスが検出されました。';
$string['missingparameterserror'] = 'ページの設定が正しくありません: 「 $a 」';
$string['module_class_type'] = 'Moodleモジュールタイプ';
$string['modulename'] = '外部ツール';
$string['modulename_help'] = '外部ツール活動モジュールにおいて、学生は他のウェブサイト上の学習リソースおよび活動と相互連携することができます。例えば外部ツールは新しい活動タイプまたは出版社の学習教材へのアクセスを提供することができます。

外部ツール活動を作成するにはツールプロバイダによるLTI (Learning Tool Interoperability 学習ツール相互運用) のサポートが必要です。教師は外部ツール活動を作成またはサイト管理者によって設定されたツールを利用可能な状態にすることができます。

いくつかの点において外部ツール活動はURLリソースと異なります:

* 外部ツールはコンテクスト志向 (context aware) です。例えばインスティテューション、コースおよび氏名等、ツールを起動したユーザの情報にアクセスすることができます。
* 外部ツールは活動インスタンスに関する評点の閲覧、更新および削除をサポートします。
* 外部ツール設定では両者間の安全な通信を許可することにより、あなたのサイトおよびツールプロバイダ間の信頼関係を確立します。';
$string['modulenameplural'] = '外部ツール';
$string['modulenamepluralformatted'] = 'LTIインスタンス';
$string['name'] = '名称';
$string['never'] = 'なし';
$string['new_window'] = '新しいウィンドウ';
$string['noattempts'] = 'このツールインスタンスでは受験されたものはありません。';
$string['no_lti_configured'] = 'アクティブな外部ツールはありません。';
$string['no_lti_pending'] = '保留された外部ツールはありません。';
$string['no_lti_rejected'] = '拒否された外部ツールはありません。';
$string['noltis'] = '外部ツールインスタンスはありません。';
$string['no_lti_tools'] = '設定されている外部ツールはありません。';
$string['noprofileservice'] = 'プロファイルサービスが見つかりませんでした。';
$string['noservers'] = 'サーバが見つかりませんでした。';
$string['no_tp_accepted'] = '承認された外部ツール登録はありません。';
$string['no_tp_cancelled'] = 'キャンセルされた外部ツール登録はありません。';
$string['no_tp_configured'] = '登録解除された外部ツール登録設定はありません。';
$string['no_tp_pending'] = '保留中の外部ツール登録はありません。';
$string['no_tp_rejected'] = '拒否された外部ツール登録はありません。';
$string['notypes'] = '現在、Moodle内で設定されているLTIツールはありません。追加するには上のインストールリンクをクリックしてください。';
$string['noviewusers'] = 'このツールを使用するパーミッションが割り当てられたユーザは見つかりませんでした。';
$string['optionalsettings'] = 'オプション設定';
$string['organization'] = '組織詳細';
$string['organizationdescr'] = '組織説明';
$string['organizationid'] = '組織ID';
$string['organizationid_help'] = 'このMoodleインスタンスの固有IDです。一般的に組織で使用されているDNS名です。

このフィールドを空白にした場合、このMoodleサイトのホスト名がデフォルト値として使用されます。';
$string['organizationurl'] = '組織URL';
$string['organizationurl_help'] = 'このMoodleインスタンスのベースURLです。

このフィールドを空白にした場合、サイト設定を基にしてデフォルト値が使用されます。';
$string['pagesize'] = '1ページあたりの表示送信数';
$string['parameter'] = 'ツールパラメータ';
$string['parameter_help'] = 'ツールパラメータは認められたツールプロキシ内でツールプロバイダにより渡すために要求される設定です。';
$string['password'] = '共有秘密鍵';
$string['password_admin'] = '共有秘密鍵';
$string['password_admin_help'] = '共有秘密鍵はツールへの認証アクセスに使用されるパスワードだと考えることができます。ツールプロバイダからコンシューマ鍵と共に提供される必要があります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、共通秘密鍵は必要ではありません。';
$string['password_help'] = '設定処理の一環として提供されるため事前に設定されたツールではここで共通秘密鍵を入力する必要はありません。

未設定のツールプロバイダへのリンクを作成する場合、このフィールドには設定値を入力する必要があります。このコース内でツールプロバイダが1回以上使用される場合、コースツール設定を追加することは良い考え方です。

共有秘密鍵はツールへの認証アクセスに使用されるパスワードだと考えることができます。ツールプロバイダからコンシューマ鍵と共に提供される必要があります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、共通秘密鍵は必要ではありません。';
$string['pending'] = '保留';
$string['pluginadministration'] = '外部ツール管理';
$string['pluginname'] = '外部ツール';
$string['preferheight'] = '推奨高';
$string['preferwidget'] = 'ウィジェットの起動を選択する';
$string['preferwidth'] = '推奨幅';
$string['press_to_submit'] = 'この活動を起動する';
$string['privacy'] = 'プライバシー';
$string['quickgrade'] = 'クイック評定を有効にする';
$string['quickgrade_help'] = 'この設定を有効にした場合、1ページで複数のツールを評定することができます。ページ内のすべての変更を同時に保存するには評点とコメントを変更して画面下部にある「すべてのフィードバックを保存する」ボタンをクリックしてください。';
$string['redirect'] = 'あなたは数秒以内にリダイレクトされます。リダイレクトされない場合、ボタンをクリックしてください。';
$string['register'] = '登録';
$string['registertype'] = '新しい外部ツール登録を設定する';
$string['register_warning'] = '登録ページを開くのにしばらく時間がかかります。表示されない場合、あなたが設定で正しいURLを入力したか確認してください。Moodleがhttpsを使用している場合、あなたがhttpsをサポートするよう設定していること、そしてURLにhttpsを使用していることを確認してください。';
$string['registrationname'] = 'ツールプロバイダ名';
$string['registrationname_help'] = '登録されるツールプロバイダ名を入力してください。';
$string['registration_options'] = '登録オプション';
$string['registrationurl'] = '登録URL';
$string['registrationurl_help'] = '登録リクエストが送信されるロケーションとして登録URLはツールプロバイダから利用することができます。';
$string['reject'] = '拒否';
$string['rejected'] = '拒否';
$string['resource'] = 'リソース';
$string['resourcekey'] = 'コンシューマ鍵';
$string['resourcekey_admin'] = 'コンシューマ鍵';
$string['resourcekey_admin_help'] = 'コンシューマ鍵はツールへの認証アクセスに使用されるユーザ名だと考えることができます。ユーザによるMoodleサイトからのツール起動を一意的に識別するためツールプロバイダが使用することができます。

コンシューマ鍵はツールプロバイダから提供される必要があります。コンシューマ鍵の取得方法はツールプロバイダ間で異なります。自動処理である場合も、またツールプロバイダに連絡が必要な場合もあります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、コンシューマ鍵は必要ではありません。';
$string['resourcekey_help'] = '設定処理の一環として提供されるため事前に設定されたツールではここでコンシューマ鍵を入力する必要はありません。

未設定のツールプロバイダへのリンクを作成する場合、このフィールドには設定値を入力する必要があります。このコース内でツールプロバイダが1回以上使用される場合、コースツール設定を追加することは良い考え方です。

コンシューマ鍵はツールへの認証アクセスに使用されるユーザ名だと考えることができます。ユーザによるMoodleサイトからのツール起動を一意的に識別するためツールプロバイダが使用することができます。

コンシューマ鍵はツールプロバイダから提供される必要があります。ココンシューマ鍵の取得方法はツールプロバイダ間で異なります。自動処理である場合も、またツールプロバイダに連絡が必要な場合もあります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、コンシューマ鍵は必要ではありません。';
$string['resourceurl'] = 'リソースURL';
$string['return_to_course'] = 'コースに戻るには<a href="{$a->link}" target="_top">ここ</a>をクリックしてください。';
$string['saveallfeedback'] = '私のフィードバックすべてを保存する';
$string['search:activity'] = '外部ツール - 活動情報';
$string['secure_icon_url'] = 'セキュアアイコンURL';
$string['secure_icon_url_help'] = 'アイコンURLに似ていますがユーザがSSLを通してMoodleに安全にアクセスする場合に使用されます。このフィールドの主目的はユーザによるページアクセス時の警告表示を防ぐことにあります。しかし、安全ではないイメージの表示をリクエストすることになります。';
$string['secure_launch_url'] = 'セキュアツールURL';
$string['secure_launch_url_help'] = 'ツールURLに似ていますがツールURLの代わりに高度なセキュリティが要求されます。MoodleサイトがSSL経由でアクセスされた場合、またはツール設定で常にSSLから起動するよう指定されている場合、ツールURLの代わりにセキュアツールURLが使用されます。

SSL経由での起動を強制するためツールURLにhttpsアドレスを設定することもできます。また、このフィールドは空白のままにすることもできます。';
$string['selectcontent'] = 'コンテンツを選択する';
$string['send'] = '送信';
$string['services'] = 'サービス';
$string['services_help'] = 'あなたがツールプロバイダに提供したいサービスを選択してください。2つ以上のサービスを選択することができます。';
$string['setupoptions'] = 'セットアップオプション';
$string['share_email'] = 'ランチャのメールをツールと共有する';
$string['share_email_admin'] = 'ランチャのメールをツールと共有する';
$string['share_email_admin_help'] = 'ツールを起動したユーザのメールアドレスをツールプロバイダと共有するかどうか指定してください。ツールプロバイダはユーザがUI内のユーザと同一であることを確認するため、またはツール内の操作に基づいてメール送信するため起動者のメールアドレスを必要とします。';
$string['share_email_help'] = 'ツールを起動したユーザのメールアドレスをツールプロバイダと共有するかどうか指定してください。

ツールプロバイダはユーザがUI内のユーザと同一であることを確認するため、またはツール内の操作に基づいてメール送信するため、起動者のメールアドレスを必要とします。

この設定はツール設定内でオーバーライドできることに留意してください。';
$string['share_name'] = 'ランチャ名をツールと共有する';
$string['share_name_admin'] = 'ランチャ名をツールと共有する';
$string['share_name_admin_help'] = 'ツールを起動したユーザのフルネームをツールプロバイダと共有するかどうか指定してください。ツール内に有益な情報を表示するためツールプロバイダは起動者の名前を必要とします。';
$string['share_name_help'] = 'ツールを起動したユーザのフルネームをツールプロバイダと共有するかどうか指定してください。

ツール内に有益な情報を表示するためツールプロバイダは起動者の名前を必要とします。

この設定はツール設定内でオーバーライドできることに留意してください。';
$string['share_roster'] = 'このコースの参加者リストへのツールのアクセスを許可する';
$string['share_roster_admin'] = 'ツールがコース一覧にアクセスできる';
$string['share_roster_admin_help'] = 'このツールが起動された場合、コース内の登録済みユーザ一覧にツールがアクセスできるかどうか指定してください。';
$string['share_roster_help'] = 'コース内の登録済みユーザ一覧にツールがアクセスできるかどうか指定してください。

この設定はツール設定内でオーバーライドできることに留意してください。';
$string['show_in_course_activity_chooser'] = '活動チューザまたは事前設定ツールに表示する';
$string['show_in_course_lti1'] = 'ツール設定使用';
$string['show_in_course_lti1_help'] = 'コースへの追加時の選択のため、このツールを教師に活動チューザ内で表示することができます。コースへの外部ツール追加時に事前設定ツールドロップダウンメニュー内にも表示することができます。さらなるツール設定のオプションはコースへの外部ツール追加時に正確なツールURLが入力された場合のみ使用されます。';
$string['show_in_course_lti2'] = 'ツール設定使用';
$string['show_in_course_lti2_help'] = 'コースへの追加時の選択のため、このツールを活動チューザ内で教師に表示することができます。またはコースへの外部ツール追加時に事前設定ツールドロップダウンメニュー内に表示することができます。';
$string['show_in_course_no'] = '表示しない、合致するツールURLが入力された場合のみ使用する';
$string['show_in_course_preconfigured'] = '外部ツール追加時に事前設定ツールとして表示する';
$string['size'] = 'サイズパラメータ';
$string['submission'] = '送信';
$string['submissions'] = '提出';
$string['submissionsfor'] = '{$a} の提出';
$string['subplugintype_ltiresource'] = 'LTIサービスリソース';
$string['subplugintype_ltiresource_plural'] = 'LTIサービスリソース';
$string['subplugintype_ltiservice'] = 'LTIサービス';
$string['subplugintype_ltiservice_plural'] = 'LTIサービス';
$string['subplugintype_ltisource'] = 'LTIソース';
$string['subplugintype_ltisource_plural'] = 'LTIソース';
$string['successfullycreatedtooltype'] = '正常に新しいツールが作成されました!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = '選択されたコンテンツから正常にツール設定を取得しました。';
$string['toggle_debug_data'] = 'デバッグデータに切り替える';
$string['tool_config_not_found'] = 'このURLのツール設定が見つかりませんでした。';
$string['tooldescription'] = 'ツール説明';
$string['tooldescription_help'] = '活動リスト内で教師に表示されるツールの説明です。

ここには何のためのツールであるか、何をするのかおよび教師が知る必要のある追加情報を記述します。';
$string['toolisbeingused'] = 'このツールは {$a} 回使用されました。';
$string['toolisnotbeingused'] = 'このツールはまだ使用されていません。';
$string['toolproxy'] = '外部ツール登録';
$string['toolproxy_help'] = '外部ツール登録はMoodleサイト管理者がLTI 2.0をサポートしているツールプロバイダから取得したツールプロキシから外部ツールを設定できるようにします。ツールプロバイダから提供されたURLすべてにおいて処理を開始できる必要があります。ツールプロバイダに提供するケイパビリティおよびサービスは新しい登録の設定時に選択されます。

このページに一覧表示されているツール登録は4つのカテゴリに分けられます:

* **設定** - これらのツール登録はセットアップされていますが登録処理は開始していません。
* **保留** - これらのツール登録の登録処理は開始していますが完了していません。 「設定」カテゴリに戻すには設定を開いて保存してください。
* **承認** - これらのツール登録は承認されています。ツールプロキシで指定されたリソースは初期ステータス「保留」の状態で事前設定ツールページに表示されます。
* **拒否** - これらのツール登録は登録処理中に拒否されています。登録処理を再開するため「設定」カテゴリに戻すには設定を開いて保存してください。';
$string['toolproxyregistration'] = '外部ツール登録';
$string['toolregistration'] = '外部ツール登録';
$string['tool_settings'] = 'ツール設定';
$string['toolsetup'] = '外部ツール設定';
$string['tooltypeadded'] = '事前設定ツールが追加されました。';
$string['tooltypedeleted'] = '事前設定ツールが削除されました。';
$string['tooltypenotdeleted'] = '事前設定ツールを削除できませんでした。';
$string['tooltypes'] = 'ツール';
$string['tooltypeupdated'] = '事前設定ツールが更新されました。';
$string['toolurl'] = 'ツールURL';
$string['toolurl_help'] = 'ツールベースURLは正しいツール設定をツールツールURLと合致させるために使用されます。URLの接頭辞「http(s)」は任意です。

加えて、外部ツールインスタンスのツールURLが指定されていない場合、ベースURLが使用されます。

例えばベースURL *tool.com* は以下と合致します:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

ベースURL  *www.tool.com/quizzes* は以下と合致します:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

ベースURL  *quiz.tool.com* は以下と合致します:
* quiz.tool.com
* quiz.tool.com/take.php?id=10

2つの異なるツール設定が同じドメインに対して割り当てられている場合、最も適切に合致した設定が使用されます。

あなたはカートリッジURLを入力することもできます。ツール詳細は自動的に入力されます。';
$string['toolurlplaceholder'] = 'ツールURL ...';
$string['typename'] = 'ツール名';
$string['typename_help'] = 'ツール名はMoodle内のツールプロバイダを識別するために使用されます。ここで入力された名称はコース内で外部ツールを追加する時に教師に表示されます。';
$string['types'] = 'タイプ';
$string['unabletocreatetooltype'] = 'ツールを作成できません。';
$string['unabletofindtooltype'] = '{$a->id} のツールが見つかりません。';
$string['unknownstate'] = '不明なステータス';
$string['update'] = '更新';
$string['useraccountinformation'] = 'ユーザアカウント情報';
$string['userpersonalinformation'] = 'ユーザ個人情報';
$string['using_tool_cartridge'] = 'ツールカートリッジを使用する';
$string['using_tool_configuration'] = 'ツール設定を使用する:';
$string['validurl'] = '有効なURLは「http(s)://」で開始してください。';
$string['viewsubmissions'] = '提出および評定画面を表示する';
