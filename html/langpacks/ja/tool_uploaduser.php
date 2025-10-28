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
 * Strings for component 'tool_uploaduser', language 'ja', version '4.4'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = '削除を許可する';
$string['allowrenames'] = 'リネームを許可する';
$string['allowsuspends'] = 'アカウントの利用停止および利用停止解除を許可する';
$string['assignedsysrole'] = '割り当て済みシステムロール {$a}';
$string['clidefault'] = 'デフォルト:';
$string['clierrorargument'] = '引数の値 --{$a->name} が有効ではありません。許可される値は次のとおりです: {$a->values}';
$string['clifile'] = 'ユーザデータのCSVファイルのパスです。必須です。';
$string['clifilenotreadable'] = 'ファイル {$a} が存在しないか読み込めません。';
$string['clihelp'] = 'このヘルプをプリントアウトします。';
$string['climissingargument'] = '引数 --{$a} は必須です。';
$string['clititle'] = 'コマンドラインアップロードユーザツールです。';
$string['clivalidationerror'] = '確認エラー:';
$string['csvdelimiter'] = 'CSVセパレータ';
$string['defaultvalues'] = 'デフォルト値';
$string['deleteerrors'] = '削除エラー';
$string['duplicateemail'] = 'メール {$a} を持つ複数のユーザを検出しました。';
$string['encoding'] = 'エンコーディング';
$string['errormnetadd'] = 'リモートユーザを追加できません。';
$string['errorprefix'] = 'エラー:';
$string['errors'] = 'エラー';
$string['examplecsv'] = 'テキストファイル例';
$string['examplecsv_help'] = 'テキストファイル例を使用するにはダウンロードしてテキストまたはスプレッドシートエディタで開いてください。先頭行は変更しないままにしてください。そして、次の行 (レコード) から編集してあなたのユーザデータ、また、必要に応じてさらに行を追加してください。ファイルをCSVとして保存してアップロードしてください。

ユーザデータをプレビューしてユーザアカウント作成前に処理をキャンセルできるため、あなたはテキストファイル例をテスト用にも使用できます。';
$string['infoprefix'] = '情報:';
$string['invalidtheme'] = 'テーマ「 {$a} 」はインストールされていないため無視されます。';
$string['invalidupdatetype'] = '選択されたアップロードタイプでこのオプションは選択できません。';
$string['invaliduserdata'] = 'ユーザ {$a} に無効なデータが検出されたため自動的に削除されました。';
$string['invaliduserdatavalues'] = 'ユーザ「 {$a->username} 」に無効なデータ ({$a->values}) が検出されました。このデータは修正または削除されました。';
$string['linex'] = '行 {$a}';
$string['matchemail'] = 'メールアドレスでの一致';
$string['nochanges'] = '変更なし';
$string['notheme'] = 'このユーザに定義されたテーマはありません。';
$string['pluginname'] = 'ユーザアップロード';
$string['privacy:metadata'] = 'ユーザアップロードプラグインはいかなる個人データも保存しません。';
$string['renameerrors'] = 'リネームエラー';
$string['requiredtemplate'] = '必須項目です。あなたはここでテンプレート構文 (%l = 姓、%f = 名、%u = ユーザ名) を使用できます。詳細および例に関してヘルプをご覧ください。';
$string['rowpreviewnum'] = 'プレビュー行';
$string['unassignedsysrole'] = '割り当て解除済みシステムロール {$a}';
$string['uploadpicture_baduserfield'] = '指定されたユーザ属性は有効ではありません。再度お試しください。';
$string['uploadpicture_cannotmovezip'] = '一時ディレクトリにZIPファイルを移動できません。';
$string['uploadpicture_cannotprocessdir'] = 'ZIP展開されたファイルを処理できません。';
$string['uploadpicture_cannotsave'] = 'ユーザ {$a} の画像を保存できません。オリジナルの画像ファイルをご確認ください。';
$string['uploadpicture_cannotunzip'] = '画像ファイルを展開できません。';
$string['uploadpicture_invalidfilename'] = '画像ファイル {$a} のファイル名に無効な文字が含まれます。スキップします。';
$string['uploadpicture_overwrite'] = '既存のユーザ画像を上書きしてもよろしいですか?';
$string['uploadpicture_userfield'] = '画像とのマッチに使用するユーザ属性:';
$string['uploadpicture_usernotfound'] = '「 {$a->userfield} 」の値が「 {$a->uservalue} 」のユーザは存在しません。スキップします。';
$string['uploadpicture_userskipped'] = 'ユーザ {$a} をスキップします (画像登録済みです)。';
$string['uploadpicture_userupdated'] = 'ユーザ {$a} の画像が更新されました。';
$string['uploadpictures'] = 'ユーザ画像をアップロードする';
$string['uploadpictures_help'] = 'ZIP圧縮したイメージファイルをユーザ画像としてアップロードできます。イメージファイルは「選択されたユーザ属性.拡張子」という形で名前付けをする必要があります。例えば「user1234.jpg」はusernameが「user1234」のユーザ用となります。';
$string['uploaduser:uploaduserpictures'] = 'ユーザ画像をアップロードする';
$string['uploadusers'] = 'ユーザをアップロードする';
$string['uploadusers_help'] = 'テキストファイルでユーザをアップロード (および任意でコース登録) できます。ファイルのフォーマットは以下のとおりです:

* ファイルのそれぞれの行に1レコードを含みます。
* それぞれのレコードは選択されたセパレータによって区切られた一連のデータです。
* 先頭レコードにはファイルの残りのフォーマットを定義したフィールド名一覧を含みます。
* 必須フィールド名は次のとおりです: username, password, firstname, lastname, email';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'アップロードユーザプレビュー';
$string['uploadusersresult'] = 'アップロードユーザ結果';
$string['useraccountupdated'] = 'ユーザが更新されました。';
$string['useraccountuptodate'] = '最新ユーザ';
$string['userdeleted'] = 'ユーザが削除されました。';
$string['userrenamed'] = 'ユーザがリネームされました。';
$string['userscreated'] = 'ユーザ作成';
$string['usersdeleted'] = 'ユーザが削除されました';
$string['usersrenamed'] = 'ユーザがリネームされました';
$string['usersskipped'] = 'ユーザがスキップされました';
$string['usersupdated'] = 'ユーザが更新されました';
$string['usersweakpassword'] = '弱いパスワードを持ったユーザ';
$string['userthemesnotallowed'] = 'ユーザテーマが有効にされていないため、アップロードユーザファイルに含まれるユーザテーマは無視されます。';
$string['uubulk'] = 'バルクユーザ処理を選択する';
$string['uubulkall'] = 'すべてのユーザ';
$string['uubulknew'] = '新しいユーザ';
$string['uubulkupdated'] = '更新されたユーザ';
$string['uucsvline'] = 'CSV行';
$string['uulegacy1role'] = '(オリジナルの学生) タイプ=1';
$string['uulegacy2role'] = '(オリジナルの教師) タイプ=2';
$string['uulegacy3role'] = '(オリジナルの編集権限のない教師) タイプ=3';
$string['uunoemailduplicates'] = 'メールアドレスの重複を避ける';
$string['uuoptype'] = 'アップロードタイプ';
$string['uuoptype_addinc'] = 'すべてを追加する、必要に応じてユーザ名に番号を付加する';
$string['uuoptype_addnew'] = '新しいユーザのみ、既存のユーザをスキップする';
$string['uuoptype_addupdate'] = '新しいユーザの追加および既存のユーザを更新する';
$string['uuoptype_update'] = '既存のユーザのみ更新する';
$string['uupasswordcron'] = 'cronにより生成';
$string['uupasswordnew'] = '新しいユーザパスワード';
$string['uupasswordold'] = '既存のユーザパスワード';
$string['uustandardusernames'] = 'ユーザ名を標準化する';
$string['uuupdateall'] = 'ファイルおよびデフォルトでオーバーライドする';
$string['uuupdatefromfile'] = 'ファイルでオーバライドする';
$string['uuupdatemissing'] = '不足しているデータをファイルおよびデフォルトで補填する';
$string['uuupdatetype'] = '既存のユーザ詳細';
$string['uuusernametemplate'] = 'ユーザ名テンプレート';
$string['warningprefix'] = '警告:';
