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
 * Strings for component 'group', language 'ja', version '4.1'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = '追加: {$a}';
$string['addgroup'] = 'グループにユーザを追加する';
$string['addgroupstogrouping'] = 'グルーピングにグループを追加する';
$string['addgroupstogroupings'] = 'グループを追加/削除する';
$string['adduserstogroup'] = 'ユーザを追加/削除する';
$string['allocateby'] = 'メンバを割り当てる';
$string['anygrouping'] = '[すべてのグルーピング]';
$string['autocreategroups'] = 'グループを自動作成する';
$string['backtogroupings'] = 'グルーピングに戻る';
$string['backtogroups'] = 'グループに戻る';
$string['badnamingscheme'] = '「@」または「#」の文字を厳密に１つ含む必要があります。';
$string['byfirstname'] = '名、姓のアルファベット順';
$string['byidnumber'] = 'IDナンバのアルファベット順';
$string['bylastname'] = '姓、名のアルファベット順';
$string['createautomaticgrouping'] = '自動グルーピングを作成する';
$string['creategroup'] = 'グループを作成する';
$string['creategrouping'] = 'グルーピングを作成する';
$string['creategroupinselectedgrouping'] = 'グルーピングにグループを作成する';
$string['createingrouping'] = '自動作成グループのグルーピング';
$string['createorphangroup'] = '迷子グループを作成する';
$string['csvdelimiter'] = 'CSVセパレータ';
$string['databaseupgradegroups'] = '現在のグループバージョン: {$a}';
$string['defaultgrouping'] = 'デフォルトグルーピング';
$string['defaultgroupingname'] = 'グルーピング';
$string['defaultgroupname'] = 'グループ';
$string['deleteallgroupings'] = 'すべてのグルーピングを削除する';
$string['deleteallgroups'] = 'すべてのグループを削除する';
$string['deletegroupconfirm'] = '本当にグループ「 {$a} 」を削除してもよろしいですか?';
$string['deletegrouping'] = 'グルーピングを削除する';
$string['deletegroupingconfirm'] = '本当にグルーピング「 {$a} 」を削除してもよろしいですか? (グルーピング内のグループは削除されません。)';
$string['deletegroupsconfirm'] = '本当に次のグループを削除してもよろしいですか?';
$string['deleteselectedgroup'] = '選択したグループを削除する';
$string['editgroupingsettings'] = 'グルーピング設定を編集する';
$string['editgroupsettings'] = 'グループ設定を編集する';
$string['editusersgroupsa'] = '「 {$a} 」のグループを編集する';
$string['enablemessaging'] = 'グループメッセージング';
$string['enablemessaging_help'] = 'この設定を有効にした場合、グループメンバはメッセージングドロワを使用してグループ内の他の人にメッセージを送信できます。';
$string['encoding'] = 'エンコーディング';
$string['enrolmentkey'] = '登録キー';
$string['enrolmentkey_help'] = '登録キーでキーを知っているユーザにのみコースアクセスを制限できます。グループ登録キーが指定された場合、ユーザがそのキーを入力してコースに登録されるだけでなく、自動的にこのグループのメンバとなります。

注意: 自己登録設定でグループ登録キーを有効にする必要があります。またコース登録キーも指定する必要があります。';
$string['enrolmentkeyalreadyinuse'] = 'この登録キーはすでに別のグループで使用されています。';
$string['erroraddremoveuser'] = 'ユーザ {$a} のグループ登録/削除中にエラーが発生しました。';
$string['erroreditgroup'] = 'グループ {$a} の作成/更新中にエラーが発生しました。';
$string['erroreditgrouping'] = 'グルーピング {$a} の作成/更新中にエラーが発生しました。';
$string['errorinvalidgroup'] = 'エラー、無効なグループです: {$a}';
$string['errorremovenotpermitted'] = 'あなたには自動的に追加されたメンバ {$a} を削除するためのパーミッションがありません。';
$string['errorselectone'] = 'このオプションを選択する前に単一グループを選択してください。';
$string['errorselectsome'] = 'このオプションを選択する前に1つまたはそれ以上のグループを選択してください。';
$string['evenallocation'] = '注意: 割り当てを均等にするため、グループごとの実際のメンバ数はあなたが指定した数とは異なります。';
$string['eventgroupcreated'] = 'グループが作成されました。';
$string['eventgroupdeleted'] = 'グループが削除されました。';
$string['eventgroupingcreated'] = 'グルーピングが作成されました。';
$string['eventgroupingdeleted'] = 'グルーピングが削除されました。';
$string['eventgroupinggroupassigned'] = 'グループがグルーピングに割り当てられました。';
$string['eventgroupinggroupunassigned'] = 'グループがグルーピングから割り当て解除されました。';
$string['eventgroupingupdated'] = 'グルーピングが更新されました。';
$string['eventgroupmemberadded'] = 'グループメンバが追加されました。';
$string['eventgroupmemberremoved'] = 'グループメンバが削除されました。';
$string['eventgroupupdated'] = 'グループが更新されました。';
$string['existingmembers'] = '既存のメンバ: {$a}';
$string['exportgroupsgroupings'] = 'グループおよびグルーピングをダウンロードする:';
$string['filtergroups'] = 'グループをフィルタする:';
$string['group'] = 'グループ';
$string['groupaddedsuccesfully'] = 'グループ「 {$a} 」が正常に追加されました。';
$string['groupaddedtogroupingsuccesfully'] = 'グループ「 {$a->groupname} 」がグルーピング「 {$a->groupingname} 」に正常に追加されました。';
$string['groupby'] = '次に基づいて自動作成する';
$string['groupdescription'] = 'グループ説明';
$string['groupinfo'] = '選択したグループに関する情報';
$string['groupinfomembers'] = '選択したメンバに関する情報';
$string['groupinfopeople'] = '選択した人に関する情報';
$string['grouping'] = 'グルーピング';
$string['grouping_help'] = 'グルーピングはコース内のグループの集合です。グルーピングが選択された場合、グルーピング内のグループに割り当てられた学生は共同作業ができます。';
$string['groupingaddedsuccesfully'] = 'グルーピング「 {$a} 」が正常に追加されました。';
$string['groupingdescription'] = 'グルーピング説明';
$string['groupingname'] = 'グルーピング名';
$string['groupingnameexists'] = 'グルーピング名「 {$a} 」はすでにこのコースで使用されています。別のものを選択してください。';
$string['groupings'] = 'グルーピング';
$string['groupingsection'] = 'グルーピングアクセス';
$string['groupingsection_help'] = 'グルーピングはコース内のグループの集まりです。ここでグルーピングが選択された場合、このグルーピング内のグループに属している学生のみ、セクションにアクセスできます。';
$string['groupingsonly'] = 'グルーピングのみ';
$string['groupmember'] = 'グループメンバ';
$string['groupmemberdesc'] = 'グループメンバの標準ロールです。';
$string['groupmembers'] = 'グループメンバ';
$string['groupmemberssee'] = 'グループメンバを確認する';
$string['groupmembersselected'] = '選択したグループのメンバ';
$string['groupmode'] = 'グループモード';
$string['groupmode_help'] = '* グループなし
* 分離グループ: 学生はグループに分けられ自分のグループの作業のみ閲覧できます。
* 可視グループ: 学生はグループに分けられますが、他のグループの作業を閲覧できます。

コースレベルで設定されたグループモードはすべての活動のデフォルトモードとなります。コースレベルでグループモードが強制された場合、活動ではグループモードを変更できません。';
$string['groupmodeforce'] = 'グループモードを強制する';
$string['groupmodeforce_help'] = 'グループモードはすべての活動に適用されます。活動の中では変更できません。';
$string['groupmy'] = 'マイグループ';
$string['groupname'] = 'グループ名';
$string['groupnameexists'] = 'グループ名「 {$a} 」はすでにこのコースに存在ます。他のグループ名を選択してください。';
$string['groupnotamember'] = '申し訳ございません、あなたはそのグループのメンバではありません。';
$string['groups'] = 'グループ';
$string['groupscount'] = 'グループ ({$a})';
$string['groupsettingsheader'] = 'グループ';
$string['groupsgroupings'] = 'グループ&グルーピング';
$string['groupsinselectedgrouping'] = 'グループ:';
$string['groupsnone'] = 'グループなし';
$string['groupsonly'] = 'グループのみ';
$string['groupspreview'] = 'グループプレビュー';
$string['groupsseparate'] = '分離グループ';
$string['groupsvisible'] = '可視グループ';
$string['grouptemplate'] = 'グループ @';
$string['hidepicture'] = '画像を隠す';
$string['importgroups'] = 'グループをインポートする';
$string['importgroups_help'] = 'テキストファイルでグループをインポートできます。ファイルのフォーマットは以下のとおりです:

* それぞれの行に1レコードを記述してください。
* それぞれのレコードは選択されたセパレータで区切られた一連のデータです。
* 先頭レコードには残りのデータのフォーマットを定義したフィールド名を記述してください。
* 必須フィールド名は「groupname」です。
* 任意フィールド名は「groupidnumber」「description」「enrolmentkey」「groupingname」「enablemessaging」です。';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'アクティブな登録のみ含む';
$string['includeonlyactiveenrol_help'] = 'この設定を有効にした場合、利用停止ユーザはグループに含まれません。';
$string['javascriptrequired'] = 'このページではJavaScriptを有効にする必要があります。';
$string['memberofgroup'] = 'グループメンバ: {$a}';
$string['members'] = 'グループあたりのメンバ数';
$string['membersofselectedgroup'] = 'メンバ:';
$string['mygroups'] = 'マイグループ';
$string['namingscheme'] = 'ネーミングスキーム';
$string['namingscheme_help'] = 'アットマーク (@) の使用でグループ名に文字を含むグループを作成できます。例えば「グループ @」は「グループ A」「グループ B」「グループ C」のようなグループ名のグループを生成します。

ハッシュマーク (#) の使用でグループ名に数字を含むグループを作成できます。例えば「グループ #」は「グループ 1」「グループ 2」「グループ 3」のようなグループ名のグループを生成します。';
$string['newgrouping'] = '新しいグルーピング';
$string['newpicture'] = '新しい画像';
$string['newpicture_help'] = 'JPGまたはPNGフォーマットの画像を選択してください。画像は正方形に切り取られた後、100x100ピクセルにリサイズされます。';
$string['noallocation'] = '割り当てなし';
$string['nogroup'] = 'グループなし';
$string['nogrouping'] = 'グルーピングなし';
$string['nogroups'] = 'このコースにはまだグループが作成されていません。';
$string['nogroupsassigned'] = 'グループが割り当てられていません。';
$string['nopermissionforcreation'] = 'あなたに必要なパーミッションがないためグループ「 {$a} 」を作成できません。';
$string['nosmallgroups'] = '最後の小グループを抑制する';
$string['notingroup'] = 'グループ内のユーザを無視する';
$string['notingrouping'] = 'グルーピング外';
$string['notingrouplist'] = 'グループ外';
$string['nousersinrole'] = '選択したロールに適切なユーザはいません。';
$string['number'] = 'グループ/メンバ数';
$string['numgroups'] = 'グループ数';
$string['nummembers'] = 'グループあたりのメンバ数';
$string['othergroups'] = '他のグループ';
$string['overview'] = '概要';
$string['potentialmembers'] = '潜在的メンバ: {$a}';
$string['potentialmembs'] = '潜在的メンバ';
$string['printerfriendly'] = 'プリンタフレンドリ表示';
$string['privacy:metadata:core_message'] = 'グループ会話';
$string['privacy:metadata:groups'] = 'グループメンバシップのレコードです。';
$string['privacy:metadata:groups:groupid'] = 'グループのIDです。';
$string['privacy:metadata:groups:timeadded'] = 'ユーザがグループに追加された日時を示すタイムスタンプです。';
$string['privacy:metadata:groups:userid'] = 'グループに関連するユーザのIDです。';
$string['random'] = 'ランダム';
$string['removefromgroup'] = 'グループ {$a} からユーザを削除する';
$string['removefromgroupconfirm'] = '本当にユーザ「 {$a->user} 」をグループ「 {$a->group} 」から削除してもよろしいですか?';
$string['removegroupfromselectedgrouping'] = 'グルーピングからグループを削除する';
$string['removegroupingsmembers'] = 'グルーピングからすべてのグループを削除する';
$string['removegroupsmembers'] = 'すべてのグループメンバを削除する';
$string['removeselectedusers'] = '選択したユーザを削除する';
$string['selectfromgroup'] = 'グループからメンバを選択する';
$string['selectfromgrouping'] = 'グルーピングからメンバを選択する';
$string['selectfromrole'] = 'ロールでメンバを選択する';
$string['showgroupsingrouping'] = 'グルーピングにグループを表示する';
$string['showmembersforgroup'] = 'グループのメンバを表示する';
$string['toomanygroups'] = 'この数のグループを作成するにはユーザが不足しています - 選択したロールには {$a} 名のユーザしか存在しません。';
$string['usercount'] = 'ユーザ数';
$string['usercounttotal'] = 'ユーザ数 ({$a})';
$string['usergroupmembership'] = '選択したユーザのメンバシップ:';
