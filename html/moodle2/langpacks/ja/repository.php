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
 * Strings for component 'repository', language 'ja', branch 'MOODLE_28_STABLE'
 *
 * @package   repository
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'アクセス可能なファイルピッカ';
$string['activaterep'] = 'アクティブリポジトリ';
$string['activerepository'] = '利用可能なリポジトリプラグイン';
$string['activitybackup'] = '活動バックアップ';
$string['add'] = '追加';
$string['addfile'] = '追加 ...';
$string['addfiletext'] = 'ファイルを追加する';
$string['addplugin'] = 'リポジトリプラグインを追加する';
$string['allowexternallinks'] = '外部リンクを許可する';
$string['areacategoryintro'] = 'カテゴリイントロダクション';
$string['areacourseintro'] = 'コースイントロダクション';
$string['areacourseoverviewfiles'] = 'コース概要ファイル';
$string['areamainfile'] = 'メインファイル';
$string['arearoot'] = 'システム';
$string['areauserbackup'] = 'ユーザバックアップ';
$string['areauserdraft'] = '下書き';
$string['areauserpersonal'] = 'プライベートファイル';
$string['areauserprofile'] = 'プロファイル';
$string['attachedfiles'] = '添付ファイル';
$string['attachment'] = '添付';
$string['author'] = '作成者';
$string['automatedbackup'] = '自動バックアップ';
$string['back'] = '&laquo; 戻る';
$string['backtodraftfiles'] = '&laquo; 下書きファイルマネージャに戻る';
$string['cachecleared'] = 'キャッシュファイルが削除されます。';
$string['cacheexpire'] = 'キャッシュ有効期限';
$string['cannotaccessparentwin'] = '親ウィンドウがHTTPSにある場合、私たちはwindow.openerオブジェクトへのアクセスを許可されません。そのため、あなたのためにリポジトリを自動的にリフレッシュすることができません。しかし、すでにあなたのセッションが存在するため、ファイルピッカに戻って、再度リポジトリを選択してください。';
$string['cannotdelete'] = 'このファイルを削除できません。';
$string['cannotdownload'] = 'このファイルをダウンロードできません。';
$string['cannotdownloaddir'] = 'このフォルダをダウンロードできません。';
$string['cannotinitplugin'] = 'plugin_initのコールに失敗しました。';
$string['choosealink'] = 'リンクを選択する ...';
$string['chooselicense'] = 'ライセンスを選択する';
$string['cleancache'] = '私のキャッシュファイルを削除する';
$string['close'] = '閉じる';
$string['commonrepositorysettings'] = 'リポジトリ共通設定';
$string['configallowexternallinks'] = 'このオプションではすべてのユーザが外部メディアをMoodle内にコピーできるかどうか設定します。このオプションが無効にされた場合、メディアは常にMoodle内にコピーされます (通常、データ全体の整合性およびセキュリティに最良の選択です)。このオプションが有効にされた場合、ユーザは毎回メディアをテキストに追加するかどうか選択することができます。';
$string['configcacheexpire'] = '外部リポジトリの閲覧時、ファイルリストがローカルにキャッシュされる時間 (秒) です。';
$string['configgetfiletimeout'] = '外部ファイルをMoodleにダウンロードする場合のタイムアウト (秒) です。';
$string['configsaved'] = '設定が保存されました!';
$string['configsyncfiletimeout'] = '外部ファイルサイズをMoodleに同期する場合のタイムアウト (秒) です。';
$string['configsyncimagetimeout'] = '同期中に外部リポジトリからイメージファイルをダウンロードする場合のタイムアウト (秒) です。';
$string['confirmdelete'] = '本当にこのリポジトリ「 {$a} 」を削除してもよろしいですか? あなたが「続けてダウンロードする」を選択した場合、外部コンテンツのファイル参照がMoodleにダウンロードされます。これには長時間を要する場合があります。';
$string['confirmdeletefile'] = '本当にこのファイルを削除してもよろしいですか?';
$string['confirmdeletefilewithhref'] = '本当にこのファイルを削除してもよろしいですか?  このファイルをソースとして使用している {$a} のエイリアス/ショートカットファイルがあります。あなたが処理を続けた場合、これらのエイリアスは実コピーに変更されます。';
$string['confirmdeletefolder'] = '本当にこのフォルダを削除してもよろしいですか? すべてのファイルおよびサブフォルダが削除されます。';
$string['confirmremove'] = '本当にこのリポジトリプラグイン、オプションおよび<strong>すべてのインスタンス</strong>を削除してもよろしいですか - {$a}? あなたが「続けてダウンロードする」を選択した場合、外部コンテンツのファイル参照がMoodleにダウンロードされます。これには長時間を要する場合があります。';
$string['confirmrenamefile'] = '本当にこのファイルをリネーム/移動してもよろしいですか?  このファイルをソースとして使用している {$a} のエイリアス/ショートカットファイルがあります。あなたが処理を続けた場合、これらのエイリアスは実コピーに変更されます。';
$string['confirmrenamefolder'] = '本当にこのフォルダを移動/リネームしてもよろしいですか? このフォルダ内のファイルを参照するすべてのエイリアス/ショートカットファイルは実コピーに変更されます。';
$string['continueuninstall'] = '続ける';
$string['continueuninstallanddownload'] = '続けてダウンロードする';
$string['copying'] = 'コピー';
$string['coursebackup'] = 'コースバックアップ';
$string['create'] = '作成';
$string['createfolder'] = 'フォルダを作成する';
$string['createfolderfail'] = 'このフォルダの作成に失敗しました。';
$string['createfoldersuccess'] = 'フォルダを正常に作成しました。';
$string['createinstance'] = 'リポジトリインスタンスを作成する';
$string['createrepository'] = 'リポジトリインスタンスを作成する';
$string['createxxinstance'] = '「 {$a} 」インスタンスを作成する';
$string['date'] = '日付';
$string['datecreated'] = '作成日時';
$string['deleted'] = 'リポジトリが削除されました。';
$string['deleterepository'] = 'このリポジトリを削除する';
$string['detailview'] = '詳細を表示する';
$string['dimensions'] = 'サイズ';
$string['disabled'] = '無効';
$string['displayasdetails'] = 'ファイル詳細として表示する';
$string['displayasicons'] = 'ファイルアイコンとして表示する';
$string['displayastree'] = 'ファイルツリーとして表示する';
$string['displaydetails'] = 'ファイル詳細と共にフォルダを表示する';
$string['displayicons'] = 'ファイルアイコンと共にフォルダを表示する';
$string['displaytree'] = 'ファイルツリーとしてフォルダを表示する';
$string['download'] = 'ダウンロード';
$string['downloadallfiles'] = 'すべてのファイルをダウンロードする';
$string['downloadfolder'] = 'すべてをダウンロードする';
$string['downloadsucc'] = 'ファイルが正常にダウンロードされました。';
$string['draftareanofiles'] = '添付されているファイルがないため、ダウンロードすることはできません。';
$string['editrepositoryinstance'] = 'リポジトリインスタンスを編集する';
$string['emptylist'] = '空のリスト';
$string['emptytype'] = 'リポジトリタイプを作成できません: タイプ名が空白です。';
$string['enablecourseinstances'] = 'ユーザによるコースへのリポジトリインスタンスの追加を許可する';
$string['enableuserinstances'] = 'ユーザによるユーザコンテクストへのリポジトリインスタンスの追加を許可する';
$string['enter'] = 'Enter';
$string['entername'] = 'フォルダ名を入力してください。';
$string['enternewname'] = '新しいファイル名を入力してください。';
$string['error'] = '不明なエラーが発生しました!';
$string['errordoublereference'] = 'このファイルに対するショートカットはすでに存在しているため、ファイルをショートカット/エイリアスでオーバーライトできません。';
$string['errornotyourfile'] = 'あなたが追加していないファイルを取得することはできません。';
$string['errorpostmaxsize'] = 'アップロードファイルがphp.iniのpost_max_sizeディレクティブを超える可能性があります。';
$string['erroruniquename'] = 'リポジトリインスタンス名はユニークにしてください。';
$string['errorwhilecommunicatingwith'] = 'リポジトリ「 {$a} 」との通信中にエラーが発生しました。';
$string['errorwhiledownload'] = 'ファイルのダウンロード中にエラーが発生しました: {$a}';
$string['existingrepository'] = 'このリポジトリはすでに存在します。';
$string['federatedsearch'] = '横串検索';
$string['fileexists'] = 'すでにファイル名が使用されています。別のファイル名を使用してください。';
$string['fileexistsdialog_editor'] = 'そのファイル名のファイルはあなたが編集しているテキストにすでに添付されています。';
$string['fileexistsdialog_filemanager'] = '同一ファイル名のファイルがすでに添付されています。';
$string['fileexistsdialogheader'] = 'ファイル登録済み';
$string['filename'] = 'ファイル名';
$string['filenotnull'] = 'あなたはアップロードするファイルを選択する必要があります。';
$string['filepicker'] = 'ファイルピッカ';
$string['filesaved'] = 'ファイルが保存されました。';
$string['filesizenull'] = 'ファイルサイズは指定できません。';
$string['folderexists'] = 'フォルダ名はすでに使用されています。別の名称を使用してください。';
$string['foldernotfound'] = 'フォルダが見つかりませんでした。';
$string['folderrecurse'] = 'フォルダを自分のサブフォルダに移動することはできません。';
$string['getfile'] = 'このファイルを選択する';
$string['getfiletimeout'] = 'ファイル取得タイムアウト';
$string['help'] = 'ヘルプ';
$string['hidden'] = '非表示';
$string['iconview'] = 'アイコンとして表示する';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'インスタンス';
$string['instancedeleted'] = 'インスタンスが削除されました。';
$string['instances'] = 'リポジトリインスタンス';
$string['instancesforcourses'] = 'コース全体の共通インスタンス: {$a}';
$string['instancesforsite'] = 'サイト全体の共通インスタンス: {$a}';
$string['instancesforusers'] = 'ユーザプライベートインスタンス: {$a}';
$string['invalidfiletype'] = '{$a} ファイルタイプを受け付けることはできません。';
$string['invalidjson'] = '無効なJSONストリングです。';
$string['invalidparams'] = '無効なパラメータです。';
$string['invalidplugin'] = '無効なリポジトリ {$a} プラグインです。';
$string['invalidrepositoryid'] = '無効なリポジトリIDです。';
$string['isactive'] = 'アクティブ?';
$string['keyword'] = 'キーワード';
$string['lastmodified'] = '最終更新日時';
$string['license'] = 'ライセンス';
$string['linkexternal'] = '外部にリンクする';
$string['listview'] = 'リストビュー';
$string['loading'] = '読み込み中 ...';
$string['login'] = 'あなたのアカウントにログインする:';
$string['logout'] = 'ログアウト';
$string['lostsource'] = 'エラー、ソースがありません。 {$a}';
$string['makefileinternal'] = 'ファイルのコピーを作成する';
$string['makefilelink'] = 'ファイルディレクトリにリンクする';
$string['makefilereference'] = 'ファイルのエイリアス/ショートカットを作成する';
$string['manage'] = 'リポジトリを管理する';
$string['manageurl'] = '管理';
$string['manageuserrepository'] = '個別のリポジトリを管理する';
$string['moving'] = '移動';
$string['name'] = '名称';
$string['newfolder'] = '新しいフォルダ';
$string['newfoldername'] = '新しいフォルダ名';
$string['noenter'] = '何も入力されていません。';
$string['nofilesattached'] = '添付されているファイルはありません。';
$string['nofilesavailable'] = '利用できるファイルはありません。';
$string['nomorefiles'] = 'これ以上添付することはできません。';
$string['nopathselected'] = 'まだ宛先パスが選択されていません (選択するにはツリーノードをダブルクリックしてください)。';
$string['nopermissiontoaccess'] = 'このリポジトリにアクセスするためのパーミッションがありません。';
$string['norepositoriesavailable'] = '申し訳ございません、現在のあなたのリポジトリでは所要のフォーマットのファイルを返すことができません。';
$string['norepositoriesexternalavailable'] = '申し訳ございません、現在のあなたのリポジトリでは外部ファイルを返すことができません。';
$string['noresult'] = '検索結果なし';
$string['notyourinstances'] = 'あなたは別のユーザのリポジトリインスタンスを表示/編集できません。';
$string['off'] = '有効 & 非表示';
$string['on'] = '有効 & 表示';
$string['openpicker'] = 'ファイルを選択する ...';
$string['operation'] = '操作';
$string['original'] = 'オリジナル';
$string['overwrite'] = 'オーバーライト';
$string['overwriteall'] = 'すべてをオーバーライトする';
$string['path'] = 'パス';
$string['personalrepositories'] = '利用可能なリポジトリインスタンス';
$string['plugin'] = 'リポジトリプラグイン';
$string['pluginerror'] = 'リポジトリプラグインにエラーが発生しました。';
$string['pluginname'] = 'リポジトリプラグイン名';
$string['pluginnamehelp'] = 'あなたがここを空白にした場合、デフォルトの名称が使用されます。';
$string['popup'] = 'ログインするには「ログイン」ボタンをクリックしてください。';
$string['popupblockeddownload'] = 'ダウンロードウィンドウがブロックされました。ポップアップウィンドウを許可して再度お試しください。';
$string['preview'] = 'プレビュー';
$string['privatefilesof'] = '{$a} プライベートファイル';
$string['readonlyinstance'] = 'あなたは読み取り専用のインスタンスを編集/削除できません。';
$string['referencesexist'] = 'このファイルをソースとして使用している {$a} のエイリアス/ショートカットファイルがあります。';
$string['referenceslist'] = 'エイリアス/ショートカット';
$string['refresh'] = 'リフレッシュ';
$string['refreshnonjsfilepicker'] = 'このウィンドウを閉じて非Javaスクリプトファイルピッカをリフレッシュしてください。';
$string['removed'] = 'リポジトリが削除されました。';
$string['renameall'] = 'すべてをリネームする';
$string['renameto'] = 'リネーム -> {$a}';
$string['repositories'] = 'リポジトリ';
$string['repository'] = 'リポジトリ';
$string['repositorycourse'] = 'コースリポジトリ';
$string['repositoryerror'] = 'リモートリポジトリエラー: {$a}';
$string['repositoryicon'] = 'リポジトリアイコン';
$string['save'] = '保存';
$string['saveas'] = '名前を付けて保存する';
$string['saved'] = '保存されました。';
$string['saving'] = '保存';
$string['search'] = '検索';
$string['searching'] = '検索:';
$string['searchrepo'] = 'リポジトリを検索する';
$string['sectionbackup'] = 'セクションバックアップ';
$string['select'] = '選択';
$string['setmainfile'] = 'メインファイルに設定する';
$string['setmainfile_help'] = 'フォルダ内に複数ファイルがある場合、ページにはメインファイルが表示されます。イメージ、ビデオ等の他のファイルはページに埋め込まれます。ファイルマネージャにおいて、メインファイルには太字のタイトルが表示されます。';
$string['settings'] = '設定';
$string['setupdefaultplugins'] = 'デフォルトリポジトリプラグインの設定';
$string['siteinstances'] = 'サイトのリポジトリインスタンス';
$string['size'] = 'サイズ';
$string['submit'] = '送信';
$string['sync'] = '同期';
$string['syncfiletimeout'] = 'ファイル同期タイムアウト';
$string['syncimagetimeout'] = 'イメージ同期タイムアウト';
$string['thumbview'] = 'アイコンとして表示する';
$string['title'] = 'ファイルを選択する ...';
$string['type'] = 'タイプ';
$string['typenotvisible'] = 'タイプを表示できません。';
$string['undisclosedreference'] = '(未公開)';
$string['undisclosedsource'] = '(未公開)';
$string['unknownoriginal'] = '不明';
$string['unzipped'] = '正常に解凍されました。';
$string['upload'] = 'このファイルをアップロードする';
$string['uploading'] = 'アップロード中 ...';
$string['uploadsucc'] = 'ファイルが正常にアップロードされました。';
$string['uselatestfile'] = '最新のファイルを使用する';
$string['usenonjsfilemanager'] = 'ファイルマネージャを新しいウィンドウで開く';
$string['usenonjsfilepicker'] = 'ファイルピッカを新しいウィンドウで開く';
$string['usercontextrepositorydisabled'] = 'あなたはユーザコンテクストでこのリポジトリを編集することはできません。';
$string['wrongcontext'] = 'あなたはこのコンテクストにアクセスできません。';
$string['xhtmlerror'] = 'あなたは恐らくXHTML Strictヘッダを使用していると思われます。いくつかのYUIコンポーネントはこのモードでは動作しません。無効にしてください。';
$string['ziped'] = 'フォルダが正常に圧縮されました。';
