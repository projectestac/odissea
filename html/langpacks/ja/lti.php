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
 * Strings for component 'lti', language 'ja', version '4.4'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = '承認';
$string['accept_grades'] = 'ツールからの評定を受け付ける';
$string['accept_grades_admin'] = 'ツールからの評定を受け付ける';
$string['accept_grades_admin_help'] = 'このツールのインスタンスに関わる評定をツールプロバイダが追加、更新、閲覧および削除できるかどうか指定してください。

いくつかのツールプロバイダではツール内で実施された操作をベースにMoodleに対して評定報告をサポートすることにより、さらなる統合環境を提供します。';
$string['accept_grades_from_tool'] = '評定表に {$a} が評点を追加できるようにする';
$string['accept_grades_help'] = 'この外部ツールのインスタンスにのみ関わる評定をツールプロバイダが追加、更新、閲覧および削除できるかどうか指定してください。

いくつかのツールプロバイダではツール内で実施された操作をベースにMoodleに対して評定報告をサポートすることにより、さらなる統合環境を提供します。

この設定はツール設定内でオーバーライドできることに留意してください。';
$string['accepted'] = '承認';
$string['action'] = '操作';
$string['activate'] = 'アクティブ';
$string['activatetoadddescription'] = 'あなたは説明を追加する前にこのツールを有効化する必要があります。';
$string['active'] = 'アクティブ';
$string['activity'] = '活動';
$string['add_ltiadv'] = 'LTIアドバンテージを追加する';
$string['add_ltilegacy'] = 'レガシLTIを追加する';
$string['addnewapp'] = '外部アプリケーションを有効にする';
$string['addserver'] = '新しい信頼できるサーバを追加する';
$string['addtool'] = 'ツールを追加する';
$string['addtype'] = '事前設定ツールを追加する';
$string['allow'] = '許可';
$string['allowsetting'] = 'ツールにMoodle内での8Kの設定保存を許可する';
$string['always'] = '常に';
$string['autoaddtype'] = 'ツールを追加する';
$string['automatic'] = '自動、ツールURLに基づく';
$string['baseurl'] = 'ベースURL/ツール登録名';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'LTI OAuth基本ストリング';
$string['basiclti_endpoint'] = 'LTI起動エンドポイント';
$string['basiclti_in_new_window'] = 'あなたの活動は新しいウィンドウに表示されます。';
$string['basiclti_in_new_window_open'] = '新しいウィンドウを開く';
$string['basiclti_parameters'] = 'LTI起動パラメータ';
$string['basicltiactivities'] = 'LTI活動';
$string['basicltifieldset'] = 'カスタムテンプレートフィールド';
$string['basicltiintro'] = '活動説明';
$string['basicltiname'] = '活動名';
$string['basicltisettings'] = '基本学習ツール相互運用 (Learning Tool Interoperability) 設定';
$string['cachedef_keyset'] = 'ツールの鍵セット情報をキャッシュする';
$string['cancel'] = 'キャンセル';
$string['cancelled'] = 'キャンセル';
$string['cannot_delete'] = 'あなたはこのツール設定を削除できません。';
$string['cannot_edit'] = 'あなたはこのツール設定を編集できません。';
$string['capabilities'] = 'ケイパビリティ';
$string['capabilities_help'] = 'あなたがツールプロバイダに提供するケイパビリティを選択してください。2つ以上のケイパビリティを選択してください。';
$string['capabilitiesrequired'] = 'このツールを有効にするには次のデータにアクセスする必要があります:';
$string['cleanaccesstokens'] = '有効期限切れアクセストークンの外部ツール削除';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">続けるにはクリック</a>';
$string['clientidadmin'] = 'クライアントID';
$string['clientidadmin_help'] = 'クライアントIDはツールを識別するため使用されるユニークな値です。LTI 1.3で導入されたJWTセキュリティプロファイルを使用するツールのため自動作成されます。そして、ツールプロバイダ側での接続設定のため渡される詳細の一部である必要があります。';
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
$string['contentitem_deeplinking'] = 'ディープリンクをサポートする (Content-Item Message)';
$string['contentitem_deeplinking_help'] = 'この設定を有効にした場合、外部ツール追加時にオプション「コンテンツを選択する」が利用可能となります。';
$string['contentitem_multiple_description'] = '次のアイテムがあなたのコースに追加されます:';
$string['contentitem_multiple_graded'] = '評定済み活動 (最大評点: {$a})';
$string['contentselected'] = '選択済みコンテンツ';
$string['course_tool_types'] = 'コースツール';
$string['courseactivitiesorresources'] = 'コース活動またはリソース';
$string['courseexternaltooladd'] = '新しいLTI外部ツールを追加する';
$string['courseexternaltooladdsuccess'] = '{$a} が追加されました。';
$string['courseexternaltooledit'] = '{$a} を編集する';
$string['courseexternaltooleditsuccess'] = '変更が保存されました。';
$string['courseexternaltooliconalt'] = '{$a} のアイコン';
$string['courseexternaltools'] = 'LTI外部ツール';
$string['courseexternaltoolsinfo'] = 'LTI外部ツールはインタラクティブコンテンツまたは評価等、あなたのコースに統合できるアドオンアプリです。学生はあなたのコースを離れることなくこれらにアクセスおよび使用できます。';
$string['courseexternaltoolsnoeditpermissions'] = 'あなたにはこのツールを編集するためのパーミッションがありません。';
$string['courseexternaltoolsnoviewpermissions'] = 'コース外部ツールを表示する';
$string['courseid'] = 'コースIDナンバ';
$string['courseinformation'] = 'コース情報';
$string['courselink'] = 'コースに移動する';
$string['coursemisconf'] = 'コースが正しく設定されていません。';
$string['coursetooldeleted'] = '{$a} が削除されました。';
$string['createdon'] = '作成日';
$string['curllibrarymissing'] = '外部ツールにはPHP Curl拡張モジュールが必要です。';
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
$string['delegate_tool'] = 'ディープリンク定義で指定または教師を代表する';
$string['delete'] = '削除';
$string['delete_confirmation'] = '本当にこの事前設定ツールを削除してもよろしいですか?';
$string['deletecoursetool'] = '{$a} を削除する';
$string['deletecoursetoolconfirm'] = 'ここではあなたのコースで利用可能なLTIツールから {$a} を削除します。';
$string['deletecoursetoolwithusageconfirm'] = '{a} は現在あなたのコースの少なくとも1つの活動で使用されています。あなたがこのツールを削除した場合、このツールを使用している活動は動作しなくなります。<br /><br />本当に {$a} を削除してもよろしいですか?';
$string['deletetype'] = '事前設定ツールを削除する';
$string['display_description'] = '学生のツールアクセス時に活動の説明を表示する';
$string['display_description_help'] = 'このツールのコンテンツはコース内のページに埋め込まれて表示されます。この設定では活動説明がそのページに表示されるかどうか決定します。';
$string['display_name'] = '学生のツールアクセス時に活動名を表示する';
$string['display_name_help'] = 'このツールのコンテンツはコース内のページに埋め込まれて表示されます。この設定では活動名がそのページに表示されるかどうか決定します。';
$string['domain_mismatch'] = 'ツールURLのドメインがツール設定と合致しません。';
$string['donot'] = '送信しない';
$string['donotaccept'] = '承認しない';
$string['donotallow'] = '許可しない';
$string['dontshowinactivitychooser'] = '活動チューザに表示しない';
$string['duplicateregurl'] = 'この登録URLはすでに使用されています。';
$string['dynreg_update_btn_new'] = '新しい外部ツールとして登録する';
$string['dynreg_update_btn_update'] = '更新';
$string['dynreg_update_name'] = 'ツール名';
$string['dynreg_update_notools'] = 'コンテクスト内にツールはありません。';
$string['dynreg_update_text'] = '登録ドメインに接続されている既存のツールがあります。既存のインストール済み外部ツールを更新しますか、それとも新しい外部ツールを作成しますか?';
$string['dynreg_update_url'] = 'ベースURL';
$string['dynreg_update_version'] = 'LTIバージョン';
$string['dynreg_update_warn_dupdomain'] = '同一ドメイン下での複数の外部ツールの存在はお勧めできません。';
$string['editdescription'] = 'このツールに説明を追加するにはここをクリックしてください。';
$string['editmanualinstancedeprecationwarning'] = '手動で設定された外部ツール活動はサポートされなくなりました。ご心配なさらないでください。この活動はそのまま動作しますが、あなたはここでツール設定を変更できなくなりました。
<br /><br />
ツールに変更を加えたり、ツールを使用して新しい活動を作成するには「
コース > 詳細 > LTI外部ツール」であなたのコースにツールを追加する必要があります。その後、あなたは活動セレクタでツールを直接選択して新しい活動を作成できます。
<br /><br />
LTI外部ツールの追加に関する詳細はドキュメント<a href="{$a}" target="_blank">外部ツール</a>をご覧ください。';
$string['edittype'] = '事前設定ツールを編集する';
$string['embed'] = '埋め込み';
$string['embed_no_blocks'] = '埋め込み (ブロックなし)';
$string['enableemailnotification'] = '通知メールを送信する';
$string['enableemailnotification_help'] = 'この設定を有効にした場合、ツール送信が評定された時点で学生に通知メールが送信されます。';
$string['enterkeyandsecret'] = 'あなたのコンシューマキーおよび共有シークレットを入力してください。';
$string['enterkeyandsecret_help'] = 'あなたにコンシューマキーおよび共有シークレットがある場合、ここに入力してください。';
$string['entitycourseexternaltools'] = 'LTI外部ツール';
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
$string['external_tool_type_help'] = '* **自動、ツールURLに基づく** - この設定はほとんどすべてのケースで使用されます。ツールURLに基づきMoodleは最も適切なツール設定を選択します。管理者によるツール設定およびコース内でのツール設定の両者が使用されます。ツールURLが指定された場合、MoodleはツールURLを認識できるか否かフィードバックを提供します。MoodleがツールURLを認識できない場合、あなたは手動でツール設定に入力する必要があります。

* **特定の事前設定ツール** - 特定の事前設定ツールを選択することであなたは外部ツールプロバイダとの通信に関してMoodleにツール設定内容の使用を強制することができます。ツールURLがツールプロバイダに属していない場合、警告が表示されます。一部のケースでは特定ツールの提供時にツールURLを入力する必要はありません (ツールプロバイダ内で特定のリソースを起動しな場合)。

* **カスタム設定** - このインスタンス内でカスタムツール設定を割り当てる場合、拡張要素を表示した後、コンシューマキーおよび共通秘密鍵を入力してください。コンシューマキーおよび共通秘密鍵がない場合、あなたはツールプロバイダにリクエストすることができます。すべてのツールがコンシューマキーおよび共通秘密鍵を必要とすることではないため、その場合はフィールドを空白のままにすることができます。

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
$string['force_ssl'] = 'SSLを強制する';
$string['force_ssl_help'] = 'このオプションを有効にすることによりツールプロバイダのツール起動すべてにSSLの使用が強制されます。

加えてツールプロバイダからのウェブサービスリクエストすべてにSSLが使用されます。

このオプションを使用する場合、MoodleサイトおよびツールプロバイダがSSLをサポートしていることを確認してください。';
$string['forced_help'] = 'この設定はコースまたはサイトレベルのツール設定で強制されています。あなたはこのインタフェースで設定内容を変更することはできません。';
$string['generaltool'] = '一般ツール';
$string['global_tool_types'] = '事前設定ツール';
$string['grading'] = '評定ルーティング';
$string['icon_url'] = 'アイコンURL';
$string['icon_url_help'] = 'アイコンURLではこの活動がコース一覧に表示される時に表示されるアイコンを変更します。デフォルトのLTIアイコンを使用する代わりに活動のタイプで使用されるアイコンを指定することができます。';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI認知的';
$string['indicator:cognitivedepth_help'] = 'この指標はLTI活動で学生が到達した認識深度に基づきます。';
$string['indicator:cognitivedepthdef'] = 'LTI認知的';
$string['indicator:cognitivedepthdef_help'] = 'この分析間隔中、参加者がLTI活動から提供された認知的関与のこのパーセンテージに到達しました (レベル = 閲覧なし, 閲覧, 送信, フィードバックの閲覧)。';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'LTI社会的';
$string['indicator:socialbreadth_help'] = 'この指標はLTI活動で学生が到達した社会的広がりに基づきます。';
$string['indicator:socialbreadthdef'] = 'LTI社会的';
$string['indicator:socialbreadthdef_help'] = 'この分析間隔中、参加者がLTI活動から提供された社会的関与のこのパーセンテージに到達しました (レベル = 参加なし, 個人で参加, 他の人と参加)。';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'ログイン開始URL';
$string['initiatelogin_help'] = 'ログインの開始をリクエストするためのツールURLが送信されます。メッセージをツールに正常に送信するにはこのURLが必要です。';
$string['invalidid'] = 'LTI IDが正しくありません。';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = '公開鍵タイプ';
$string['keytype_help'] = 'ツール認証に使用される認証方法です。';
$string['keytype_keyset'] = '鍵セットURL';
$string['keytype_rsa'] = 'RSAキー';
$string['launch_in_moodle'] = 'Moodle内でツールを起動する';
$string['launch_in_popup'] = 'ツールをポップアップに起動する';
$string['launch_url'] = 'ツールURL';
$string['launch_url_help'] = 'ツールURLでは外部ツールのウェブアドレスを指定します。また、表示するリソース等の追加的な情報を含むことができます。ツールURLに何を入力するのか分からない場合、ツールプロバイダを確認してください。

あなたはカートリッジURLを入力することもできます。フォーム詳細の残りは自動的に入力されます。

事前設定ツールを選択した場合、あなたはツールURLを入力する必要はありません。ツールリンクがツールプロバイダのシステムを起動して特定のリソースに移動しない場合がこのケースにあたります。';
$string['launchinpopup'] = '起動コンテナ';
$string['launchinpopup_help'] = '起動コンテナはコースからツールが起動される場合の表示に影響します。いくつかの起動コンテナではツールに場所を提供して他の起動コンテナではMoodle環境との統合を実現します。

* **デフォルト** - ツール設定で指定された起動コンテナを使用します。

* **埋め込み** - 他の活動タイプと同じようにツールが既存のMoodleウィンドウ内に表示されます。

* **埋め込み (ブロックなし)** - トップページにナビゲーションが付加された形でツールが既存のMoodleウィンドウ内に表示されます。

* **新しいウィンドウ** - ツールは利用可能なスペースすべてを占有して新しいウィンドウに表示されます。ブラウザにより、新しいタブまたはポップアップウィンドウが使用されます。ブラウザでは新しいウィンドウのオープンを抑制することができます。';
$string['launchoptions'] = '起動オプション';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'コース個別ツール設定を追加する';
$string['lti:addinstance'] = '新しい外部ツール活動を追加する';
$string['lti:addmanualinstance'] = '手動設定ツールを追加する';
$string['lti:addmanualinstanceprohibitederror'] = 'コースツール定義のないツールの手動作成はサポートされなくなりました。まずコースツールを作成してください。そしてそれを使用して活動インスタンスを作成してください。';
$string['lti:addpreconfiguredinstance'] = '事前設定ツールを追加する';
$string['lti:admin'] = 'ツール起動時に管理者になる';
$string['lti:grade'] = '外部ツールから戻された評点を表示する';
$string['lti:manage'] = 'ツール起動時、インストラクタになる';
$string['lti:requesttooladd'] = 'ツールがサイト全体に設定されるようリクエストする';
$string['lti:view'] = '外部ツール活動を起動する';
$string['lti_administration'] = '事前設定ツールを編集する';
$string['lti_errormsg'] = 'ツールにより次のエラーメッセージが返されました: 「 {$a} 」';
$string['lti_launch_error'] = '外部ツール起動中にエラーが発生しました:';
$string['lti_launch_error_tool_request'] = '<p>管理者にツール設定の完了をリクエストするには<a href="{$a->admin_request_url}" target="_top">ここをクリック</a>してください。 </p>';
$string['lti_launch_error_unsigned_help'] = '<p>ツールプロバイダのコンシューマキーおよび共通秘密鍵が不足しているため、このエラーが発生したと考えられます。</p>
<p>コンシューマキーおよび共通秘密鍵がある場合、あなたは外部ツールインスタンスの設定時に入力することができます (拡張要素が表示されていることを確認してください)。</p>
<p> 代わりにあなたは<a href="{$a->course_tool_editor}">コースレベルのツールプロバイダ設定を作成</a>することができます。</p>';
$string['lti_tool_request_added'] = 'ツール設定のリクエストが正常に送信されました。あなたはツール設定を完了するため管理者に連絡する必要があります。';
$string['lti_tool_request_existing'] = 'ツールドメインに関するツール設定はすでに送信されています。';
$string['ltisettings'] = 'LTI設定';
$string['ltiunknownserviceapicall'] = 'LTIの不明なサービスAPIがコールされました。';
$string['ltiversion'] = 'LTIバージョン';
$string['ltiversion_help'] = 'メッセージおよびサービスリクエストに証明するため使用されるLTIのバージョンです: LTI 1.0/1.1およびLTI 2.0はOAuth 1.0Aセキュリティプロファイルを使用します。LTI 1.3.0はJWTを使用します。';
$string['main_admin'] = '概要ヘルプ';
$string['main_admin_help'] = '外部ツールはMoodleユーザと遠隔に設置された学習リソースとの情報のやりとりを実現します。特別な起動プロトコルを通してリモートツールは起動ユーザの一般的な情報にアクセスできます。例えばインスティテューション名、コースID、ユーザIDおよびユーザ名またはメールアドレス等の情報です。

このページに一覧表示されているツールは3つのカテゴリに分けられます:

* **アクティブ** - これらのツールプロバイダは管理者により承認および設定されています。このサイト内すべてのコースで利用できます。コンシューマキーおよび共通秘密鍵が入力された場合、このサイトおよびリモートツール間において安全な通信チャネルを提供する信頼関係が確立されます。

* **保留** - これらのツールプロバイダはパッケージインポート経由で登録されていますが、管理者から設定されていない状態です。コンシューマキーおよび共通秘密鍵がある場合、またはそれらを必要としない場合、教師はこれらのプロバイダのツールを利用できます。

* **拒否** - これらのツールプロバイダは管理者がサイトにおいて利用できるようにする意図がない旨、フラグが立てられた状態です。コンシューマキーおよび共通秘密鍵がある場合、またはそれらを必要としない場合、教師はこれらのプロバイダのツールを利用できます。';
$string['manage_external_tools'] = 'ツールを管理する';
$string['manage_tool_proxies'] = '外部ツール登録を管理する';
$string['manage_tools'] = '事前設定ツールを管理する';
$string['manuallyaddtype'] = 'あなたは代わりに<a href="{$a}">ツールを手動設定</a>できます。';
$string['miscellaneous'] = 'その他';
$string['misconfiguredtools'] = '設定の正しくないツールインスタンスが検出されました。';
$string['missingparameterserror'] = 'ページの設定が正しくありません: 「 $a 」';
$string['module_class_type'] = 'Moodleモジュールタイプ';
$string['modulename'] = '外部ツール';
$string['modulename_help'] = '外部ツール活動モジュールにおいて学生は他のウェブサイト上の学習リソースおよび活動と相互連携することができます。例えば外部ツールは新しい活動タイプまたは出版社の学習教材へのアクセスを提供することができます。

外部ツール活動を作成するにはツールプロバイダによるLTI (Learning Tool Interoperability 学習ツール相互運用) のサポートが必要です。教師は外部ツール活動を作成またはサイト管理者によって設定されたツールを利用可能な状態にすることができます。

いくつかの点において外部ツール活動はURLリソースと異なります:

* 外部ツールはコンテクスト志向 (context aware) です。例えばインスティテューション、コースおよび氏名等、ツールを起動したユーザの情報にアクセスすることができます。
* 外部ツールは活動インスタンスに関する評点の閲覧、更新および削除をサポートします。
* 外部ツール設定では両者間の安全な通信を許可することにより、あなたのサイトおよびツールプロバイダ間の信頼関係を確立します。';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = '外部ツール';
$string['modulenamepluralformatted'] = '外部ツール';
$string['name'] = '名称';
$string['never'] = 'なし';
$string['new_window'] = '新しいウィンドウ';
$string['no_lti_configured'] = 'アクティブな外部ツールはありません。';
$string['no_lti_pending'] = '保留された外部ツールはありません。';
$string['no_lti_rejected'] = '拒否された外部ツールはありません。';
$string['no_lti_tools'] = '設定されている外部ツールはありません。';
$string['no_tp_accepted'] = '承認された外部ツール登録はありません。';
$string['no_tp_cancelled'] = 'キャンセルされた外部ツール登録はありません。';
$string['no_tp_configured'] = '登録解除された外部ツール登録設定はありません。';
$string['no_tp_pending'] = '保留中の外部ツール登録はありません。';
$string['no_tp_rejected'] = '拒否された外部ツール登録はありません。';
$string['noattempts'] = 'このツールインスタンスでは受験されたものはありません。';
$string['nocourseexternaltoolsnotice'] = 'まだLTI外部ツールはありません。';
$string['noltis'] = '外部ツールインスタンスはありません。';
$string['noprofileservice'] = 'プロファイルサービスが見つかりませんでした。';
$string['noservers'] = 'サーバが見つかりませんでした。';
$string['notypes'] = '現在、Moodle内で設定されているLTIツールはありません。追加するには上のインストールリンクをクリックしてください。';
$string['noviewusers'] = 'このツールを使用するためのパーミッションが割り当てられたユーザは見つかりませんでした。';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'あなたのウェブサーバでLTI 1.3を設定および有効化するには有効なopenssl.cnfが必要です。あなたのサイト管理者に連絡してこのサイトのopensslを設定および有効化するよう依頼してください。';
$string['optionalsettings'] = 'オプション設定';
$string['organization'] = '組織詳細';
$string['organizationdescr'] = '組織説明';
$string['organizationid_default'] = 'デフォルト組織ID';
$string['organizationid_default_help'] = '組織IDに使用されるデフォルト値です。サイトIDはこのMoodleインストレーションを識別します。';
$string['organizationidguid'] = '組織ID';
$string['organizationidguid_help'] = 'プラットフォームインスタンスGUIDとしてツールに渡されるこのMoodleインスタンスのユニークIDです。

このフィールドを空白のままにした場合、デフォルト値が使用されます。';
$string['organizationurl'] = '組織URL';
$string['organizationurl_help'] = 'このMoodleインスタンスのベースURLです。

このフィールドを空白にした場合、サイト設定を基にしてデフォルト値が使用されます。';
$string['pagesize'] = '1ページあたりの表示送信数';
$string['parameter'] = 'ツールパラメータ';
$string['parameter_help'] = 'ツールパラメータは認められたツールプロキシ内でツールプロバイダにより渡すために要求される設定です。';
$string['password'] = '共有シークレット';
$string['password_admin'] = '共有シークレット';
$string['password_admin_help'] = '共有シークレットはツールへの認証アクセスに使用されるパスワードだと考えることができます。ツールプロバイダからコンシューマキーと共に提供される必要があります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、共通秘密鍵は必要ではありません。';
$string['password_help'] = '設定処理の一環として提供されるため事前に設定されたツールではここで共通秘密鍵を入力する必要はありません。

未設定のツールプロバイダへのリンクを作成する場合、このフィールドには設定値を入力する必要があります。このコース内でツールプロバイダが1回以上使用される場合、コースツール設定を追加することは良い考え方です。

共有シークレットはツールへの認証アクセスに使用されるパスワードだと考えることができます。ツールプロバイダからコンシューマキーと共に提供される必要があります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、共通秘密鍵は必要ではありません。';
$string['pending'] = '保留';
$string['pluginadministration'] = '外部ツール管理';
$string['pluginname'] = '外部ツール';
$string['preferheight'] = '推奨高';
$string['preferwidget'] = 'ウィジェットの起動を選択する';
$string['preferwidth'] = '推奨幅';
$string['press_to_submit'] = 'この活動を起動する';
$string['privacy'] = 'プライバシー';
$string['privacy:metadata:coursefullname'] = 'ユーザがLTIコンシューマからアクセスするコースのフルネームです。';
$string['privacy:metadata:courseid'] = 'ユーザがLTIコンシューマからアクセスするコースのIDです。';
$string['privacy:metadata:courseidnumber'] = 'ユーザがLTIコンシューマからアクセスするコースのIDナンバです。';
$string['privacy:metadata:courseshortname'] = 'ユーザがLTIコンシューマからアクセスするコースの省略名です。';
$string['privacy:metadata:createdby'] = 'レコードを作成したユーザです。';
$string['privacy:metadata:email'] = 'LTIコンシューマにアクセスするユーザのメールアドレスです。';
$string['privacy:metadata:externalpurpose'] = 'LTIコンシューマはユーザ情報およびコンテクストをLTIツールプロバイダに提供します。';
$string['privacy:metadata:firstname'] = 'LTIコンシューマにアクセスするユーザの名です。';
$string['privacy:metadata:fullname'] = 'LTIコンシューマにアクセスするユーザのフルネームです。';
$string['privacy:metadata:lastname'] = 'LTIコンシューマにアクセスするユーザの姓です。';
$string['privacy:metadata:lti_submission'] = 'LTI提出です。';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'タイムスタンプは提出された日時を示します。';
$string['privacy:metadata:lti_submission:dateupdated'] = 'タイムスタンプは提出が修正された日時を示します。';
$string['privacy:metadata:lti_submission:gradepercent'] = 'ユーザの評点 (パーセンテージ) です。';
$string['privacy:metadata:lti_submission:originalgrade'] = 'ユーザのオリジナル評点です。';
$string['privacy:metadata:lti_submission:userid'] = 'LTI活動を送信したユーザのIDです。';
$string['privacy:metadata:lti_tool_proxies'] = 'LTIプロキシです。';
$string['privacy:metadata:lti_tool_proxies:name'] = 'LTIプロキシ名です。';
$string['privacy:metadata:lti_types'] = 'LTIタイプです。';
$string['privacy:metadata:lti_types:name'] = 'LTIタイプ名です。';
$string['privacy:metadata:role'] = 'LTIコンシューマにアクセスするユーザのコースでのロールです。';
$string['privacy:metadata:timecreated'] = 'レコードが作成された日時です。';
$string['privacy:metadata:timemodified'] = 'レコードが修正された日時です。';
$string['privacy:metadata:userid'] = 'LTIコンシューマにアクセスするユーザのIDです。';
$string['privacy:metadata:useridnumber'] = 'LTIコンシューマにアクセスするユーザのIDナンバです。';
$string['privacy:metadata:username'] = 'LTIコンシューマにアクセスするユーザのユーザ名です。';
$string['publickey'] = '公開鍵';
$string['publickey_help'] = '受信メッセージおよびサービスリクエストの承認に関して署名するためツールによって提供される公開鍵 (PEMフォーマット) です。';
$string['publickeyset'] = '公開鍵セット';
$string['publickeyset_help'] = 'このサイトが受信メッセージおよびリクエストサービスの署名を検証するためのツールの公開鍵を検索できる場所からの公開鍵セットです。';
$string['quickgrade'] = 'クイック評定を有効にする';
$string['quickgrade_help'] = 'この設定を有効にした場合、1ページで複数のツールを評定することができます。ページ内のすべての変更を同時に保存するには評点とコメントを変更して画面下部にある「すべてのフィードバックを保存する」ボタンをクリックしてください。';
$string['redirect'] = 'あなたは数秒以内にリダイレクトされます。リダイレクトされない場合、ボタンをクリックしてください。';
$string['redirectionuris'] = 'リダイレクトURI';
$string['redirectionuris_help'] = 'ツールが認証リクエストに使用するためのURI一覧です (1行あたり1件 )。メッセージをツールに正常に送信するには少なくとも1件登録する必要があります。';
$string['register'] = '登録';
$string['register_warning'] = '登録ページを開くのにしばらく時間がかかります。表示されない場合、あなたが設定で正しいURLを入力したか確認してください。Moodleがhttpsを使用している場合、あなたがhttpsをサポートするよう設定していること、そしてURLにhttpsを使用していることを確認してください。';
$string['registertype'] = '新しい外部ツール登録を設定する';
$string['registration_options'] = '登録オプション';
$string['registrationname'] = 'ツールプロバイダ名';
$string['registrationname_help'] = '登録されるツールプロバイダ名を入力してください。';
$string['registrationurl'] = '登録URL';
$string['registrationurl_help'] = '登録リクエストが送信されるロケーションとして登録URLはツールプロバイダから利用することができます。';
$string['reject'] = '拒否';
$string['rejected'] = '拒否';
$string['resource'] = 'リソース';
$string['resourcekey'] = 'コンシューマキー';
$string['resourcekey_admin'] = 'コンシューマキー';
$string['resourcekey_admin_help'] = 'コンシューマキーはツールへの認証アクセスに使用されるユーザ名だと考えることができます。ユーザによるMoodleサイトからのツール起動を一意的に識別するためツールプロバイダが使用することができます。

コンシューマキーはツールプロバイダから提供される必要があります。コンシューマキーの取得方法はツールプロバイダ間で異なります。自動処理である場合も、またツールプロバイダに連絡が必要な場合もあります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、コンシューマキーは必要ではありません。';
$string['resourcekey_help'] = '設定処理の一環として提供されるため事前に設定されたツールではここでコンシューマキーを入力する必要はありません。

未設定のツールプロバイダへのリンクを作成する場合、このフィールドには設定値を入力する必要があります。このコース内でツールプロバイダが1回以上使用される場合、コースツール設定を追加することは良い考え方です。

コンシューマキーはツールへの認証アクセスに使用されるユーザ名だと考えることができます。ユーザによるMoodleサイトからのツール起動を一意的に識別するためツールプロバイダが使用することができます。

コンシューマキーはツールプロバイダから提供される必要があります。コンシューマキーの取得方法はツールプロバイダ間で異なります。自動処理である場合も、またツールプロバイダに連絡が必要な場合もあります。

Moodleからの安全な通信を必要とせず評定レポートのような追加的なサービスを提供しない場合、コンシューマキーは必要ではありません。';
$string['resourceurl'] = 'リソースURL';
$string['restricttocategory'] = 'カテゴリに制限する';
$string['restricttocategory_help'] = 'カテゴリ内のコースでこのツールの使用を制限したい場合、リストからカテゴリを選択してください。';
$string['return_to_course'] = 'コースに戻るには<a href="{$a->link}" target="_top">ここ</a>をクリックしてください。';
$string['saveallfeedback'] = '私のフィードバックすべてを保存する';
$string['search:activity'] = '外部ツール - 活動情報';
$string['secure_icon_url'] = 'セキュアアイコンURL';
$string['secure_icon_url_help'] = 'アイコンURLに似ていますがSSLを通してサイトが安全にアクセスされる際に使用されます。このフィールドは安全ではないイメージの表示に関するブラウザの警告表示を防ぎます。';
$string['secure_launch_url'] = 'セキュアツールURL';
$string['secure_launch_url_help'] = 'ツールURLに似ていますがツールURLの代わりに高度なセキュリティが要求されます。MoodleサイトがSSL経由でアクセスされた場合、またはツール設定で常にSSLから起動するよう指定されている場合、ツールURLの代わりにセキュアツールURLが使用されます。

SSL経由での起動を強制するためツールURLにhttpsアドレスを設定することもできます。また、このフィールドは空白のままにすることもできます。';
$string['selectcontent'] = 'コンテンツを選択する';
$string['selectcontentvalidationerror'] = 'あなたはこの活動のコンテンツを選択する必要があります。';
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
$string['showinactivitychooser'] = '活動チューザに表示する';
$string['sitehost'] = 'サイトホスト名';
$string['siteid'] = 'サイトID';
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
$string['tool_settings'] = 'ツール設定';
$string['tooldescription'] = 'ツール説明';
$string['tooldescription_help'] = '活動リスト内で教師に表示されるツールの説明です。

ここには何のためのツールであるか、何をするのかおよび教師が知る必要のある追加情報を記述します。';
$string['tooldetailsaccesstokenurl'] = 'アクセストークンURL';
$string['tooldetailsauthrequesturl'] = '認証リクエストURL';
$string['tooldetailsclientid'] = 'クライアントID';
$string['tooldetailsdeploymentid'] = 'デプロイメントID';
$string['tooldetailsmailtosubject'] = 'LTIツール設定';
$string['tooldetailsmodalemail'] = 'メール';
$string['tooldetailsmodallink'] = '設定詳細を表示する';
$string['tooldetailsmodaltitle'] = 'ツール設定詳細';
$string['tooldetailsplatformid'] = 'プラットフォームID';
$string['tooldetailspublickeyseturl'] = '公開鍵セットURL';
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
$string['toolsetup'] = '外部ツール設定';
$string['tooltypeadded'] = '事前設定ツールが追加されました。';
$string['tooltypedeleted'] = '事前設定ツールが削除されました。';
$string['tooltypenotdeleted'] = '事前設定ツールを削除できませんでした。';
$string['tooltypenotfounderror'] = 'この活動で使用したLTIツールは削除されました。サポートが必要な場合、あなたの教師またはサイト管理者にご連絡ください。';
$string['tooltypes'] = 'ツール';
$string['tooltypeupdated'] = '事前設定ツールが更新されました。';
$string['toolurl'] = 'ツールURL';
$string['toolurl_contentitemselectionrequest'] = 'コンテンツ選択URL';
$string['toolurl_contentitemselectionrequest_help'] = 'コンテンツ選択URLはツールプロバイダからコンテンツ選択ページを起動するために使用されます。空白にした場合、ツールURLが使用されます。';
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
$string['usage'] = '使用回数';
$string['useraccountinformation'] = 'ユーザアカウント情報';
$string['userpersonalinformation'] = 'ユーザ個人情報';
$string['using_tool_cartridge'] = 'ツールカートリッジを使用する';
$string['using_tool_configuration'] = 'ツール設定を使用する:';
$string['validurl'] = '有効なURLは「http(s)://」で開始してください。';
$string['viewsubmissions'] = '提出および評定画面を表示する';
