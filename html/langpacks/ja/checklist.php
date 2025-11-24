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
 * Strings for component 'checklist', language 'ja', version '4.5'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'コメントを追加する';
$string['additem'] = '追加';
$string['additemalt'] = '新しいアイテムをリストに追加する';
$string['additemhere'] = 'この後に新しいアイテムを挿入する';
$string['addownitems'] = 'あなたのアイテムを追加する';
$string['addownitems-stop'] = 'あなたのアイテムの追加を終了する';
$string['allowmodulelinks'] = 'モジュールリンクを許可する';
$string['anygrade'] = 'すべて';
$string['anygrouping'] = 'すべてのグループ';
$string['autopopulate'] = 'チェックリストにコースモジュールを表示する';
$string['autopopulate_help'] = 'ここでは現在のコースのリソースおよび活動のリストを自動的にチェックリストに追加します。<br />
あなたがチェックリストの「編集」ページにアクセスした場合、コースで発生した変更に関してリストが更新されます。<br />
アイテムの横にある「非表示」アイコンをクリックすることにより、アイテムをリストから隠すことができます。<br />
リストから自動アイテムを削除するには、このオプションを「No」に戻して、「編集」ページで「コースモジュールアイテムを削除する」をクリックしてください。';
$string['autoupdate'] = 'モジュール完了時にチェック済みにする';
$string['autoupdate2'] = 'コースまたはモジュールの完了時にチェック済みにする';
$string['autoupdate2_help'] = 'これによりあなたがコースの関連活動を完了した場合、チェックリストの項目は自動的にチェック済みにされます。
<br />
特定の活動で完了トラッキングが有効にされている場合、リストのアイテムにチェックが付けられます。
<br />
それ以外の場合、活動「完了」は活動ごとに異なります - リソースの「閲覧」、小テストまたは課題の「提出」、フォーラムへの「投稿」またはチャットへの「参加」等 (活動「完了」マークが付けられる正確な要因の詳細についてはサイト管理者が「mod/checklist/classes/local/autoupdate.php」ファイルを確認してください)。
<br />
アイテムがコースにリンクおよびそのコースで完了が有効にされている場合、そのコースが完了としてマークされた時点でアイテムが更新されます。';
$string['autoupdate_help'] = 'これによりあなたがコースの関連活動を完了した場合、チェックリストの項目は自動的にチェック済みにされます。
<br />
特定の活動で完了トラッキングが有効にされている場合、リストのアイテムにチェックが付けられます。
<br />
それ以外の場合、活動「完了」は活動ごとに異なります - リソースの「閲覧」、小テストまたは課題の「提出」、フォーラムへの「投稿」またはチャットへの「参加」等 (活動「完了」マークが付けられる正確な要因の詳細についてはサイト管理者が「mod/checklist/classes/local/autoupdate.php」ファイルを確認してください)。';
$string['autoupdatenote'] = '自動的に更新された「学生」マークです - 「教師のみ」チェックリストに更新は表示されません。';
$string['autoupdatewarning_both'] = 'このリストには (学生が関連する活動を完了することにより) 自動更新されるアイテムがあります。しかし、これは「学生および教師」チェックリストであるため、与えられたマークに教師が同意するまでプログレスバーは更新されません。';
$string['autoupdatewarning_student'] = 'このリストには (学生が関連する活動を完了することにより) 自動更新されるアイテムがあります。';
$string['autoupdatewarning_teacher'] = 'このリストには自動的に更新されるアイテムがあります (学生が関連する活動を完了した場合)。';
$string['calendardescription'] = 'このイベントは次のチェックリストにより追加されました: {$a}';
$string['canceledititem'] = 'キャンセル';
$string['changetextcolour'] = '次のテキスト色';
$string['checkeditemsdeleted'] = 'チェックアイテムが削除されました。';
$string['checklist'] = 'チェックリスト';
$string['checklist:addinstance'] = '新しいチェックリストを追加する';
$string['checklist:edit'] = 'チェックリストを作成および編集する';
$string['checklist:emailoncomplete'] = '完了メールを受信する';
$string['checklist:preview'] = 'チェックリストをプレビューする';
$string['checklist:updatelocked'] = 'ロックされたチェックリストマークを更新する';
$string['checklist:updateother'] = '学生のチェックリストマークを更新する';
$string['checklist:updateown'] = 'あなたのチェックリストマークを更新する';
$string['checklist:viewmenteereports'] = 'メンティーの進捗 (のみ) 表示する';
$string['checklist:viewreports'] = '学生の進捗を閲覧する';
$string['checklistautoupdate'] = 'チェックリストの自動更新を許可する';
$string['checklistfor'] = 'チェックリスト:';
$string['checklistintro'] = 'イントロダクション';
$string['checklistsettings'] = '設定';
$string['checks'] = 'チェックマーク';
$string['choosecourse'] = 'コースを選択する ...';
$string['comments'] = 'コメント';
$string['completiondetail:items'] = 'チェック済みアイテム: {$a}';
$string['completiondetail:percent'] = 'チェック済みアイテム: {$a} %';
$string['completionpercent'] = 'チェック済みにされる必要のあるアイテムの量:';
$string['completionpercentgroup'] = 'チェック済み必須';
$string['completionpercentgroup_help'] = '「アイテムの割合」を選択した場合、「完了」とみなされるためにはチェックリストアイテムの少なくとも指定されたパーセンテージをチェック済みにする必要があります。「アイテム」が選択された場合、ユーザはリスト内の少なくともその数の個別アイテムをチェック済みにしなければなりません。ここでチェックリストのアイテム数より多いアイテム数を指定した場合、そのチェックリストは決して「完了」とマークされないことに留意してください。';
$string['configchecklistautoupdate'] = 'これを許可する前に、あなたはMoodleコアコードを少しだけ修正する必要があります。詳細は mod/checklist/README.txtをご覧ください。';
$string['configshowcompletemymoodle'] = 'この設定を無効にした場合、完了チェックリストが「ダッシュボード」 (マイホーム) ページから隠されます。';
$string['configshowmymoodle'] = 'この設定を無効にした場合、チェックリスト活動 (プログレスバーを含む) が「ダッシュボード」 (マイホーム) ページに表示されないようになります。';
$string['configshowupdateablemymoodle'] = 'この設定を有効にした場合、「ダッシュボード」 (マイホーム) ページから更新可能なチェックリストのみ表示されます。';
$string['confirmdeleteitem'] = '本当にこのチェックリストアイテムを完全に削除してもよろしいですか?';
$string['deleteitem'] = 'このアイテムを削除する';
$string['duedatesoncalendar'] = 'カレンダーに締切日を追加する';
$string['edit'] = 'チェックリストを編集する';
$string['editchecks'] = 'チェックを編集する';
$string['editdatesstart'] = '日付を編集する';
$string['editdatesstop'] = '日付の編集を終了する';
$string['edititem'] = 'このアイテムを編集する';
$string['emailoncomplete'] = 'チェックリスト完了時にメール送信する:';
$string['emailoncomplete_help'] = 'チェックリストが完了した場合、完了した学生、コース上のすべての教師またはその両方に通知メールを送信できます。<br />
管理者は「mod:checklist/emailoncomplete」ケイパビリティを使用することで誰がこのメールを受信するかコントロールできます - デフォルトではすべての教師および編集権限のない教師がこのケイパビリティを持っています。
この目的のためチェックリストはすべてのアイテムにチェックが付けられた時点で「完了」とみなされます。「活動完了」設定で定義された完了率は考慮されません。';
$string['emailoncompletebody'] = 'ユーザ {$a->user} がコース「 {$a->coursename} 」のチェックリスト「 {$a->checklist} 」を完了しました。
ここでチェックリストを確認してください:';
$string['emailoncompletebodyown'] = 'あなたはコース「 {$a->coursename} 」のチェックリスト「 {$a->checklist} 」を完了しました。
ここでチェックリストを確認してください:';
$string['emailoncompletesubject'] = 'ユーザ  {$a->user} がチェックリスト「 {$a->checklist} 」を完了しました。';
$string['emailoncompletesubjectown'] = 'あなたはチェックリスト「 {$a->checklist} 」を完了しました。';
$string['enterurl'] = 'URLを入力する ...';
$string['errorchecklistitemnotvalid'] = 'チェックリストアイテムIDはこのコースモジュールに属していません!';
$string['eventchecklistcomplete'] = 'チェックリスト完了';
$string['eventeditpageviewed'] = '編集ページが閲覧されました。';
$string['eventreportviewed'] = 'レポートが閲覧されました。';
$string['eventstudentchecksupdated'] = '学生チェックが更新されました。';
$string['eventteacherchecksupdated'] = '教師チェックが更新されました。';
$string['export'] = 'アイテムをエクスポートする';
$string['forceupdate'] = 'すべての自動アイテムのチェックを更新する';
$string['gradetocomplete'] = '完了評点:';
$string['grouping'] = 'グルーピングに表示する';
$string['guestsno'] = 'あなたにはこのチェックリストを閲覧するパーミッションがありません。';
$string['headingitem'] = 'このアイテムはヘッディングです - 横にチェックボックスはありません。';
$string['import'] = 'アイテムをインポートする';
$string['importfile'] = 'インポートするファイルを選択する';
$string['importfromcourse'] = 'コース全体';
$string['importfromsection'] = '現在のセクション';
$string['indentitem'] = 'アイテムをインデントする';
$string['itemcomplete'] = '完了';
$string['items'] = 'チェックリストアイテム';
$string['itemstype'] = 'アイテム';
$string['linkcourses'] = 'アイテムをコースにリンクできるようにする';
$string['linkcourses_desc'] = 'この設定を有効にした場合、チェックリストアイテムはMoodle内のコースにリンクできます - 関連するコースが完了した場合、完了としてマークされます。この設定を有効にした場合、多数のコースがあるサイトでチェックリストアイテムの編集時にパフォーマンスが低下することがあります。';
$string['linkto'] = 'リンク先';
$string['linktocourse'] = 'このアイテムに関連するコース';
$string['linktomodule'] = 'このアイテムに関連する活動';
$string['linktourl'] = 'このアイテムに関連するリンク';
$string['lockteachermarks'] = '教師のマークをロックする';
$string['lockteachermarks_help'] = 'この設定を有効にした場合、教師が「Yes」マークを保存した時点で変更できないようになります。ケイパビリティ「mod/checklist:updatelocked」が割り当てられているユーザは常にマークを変更することができます。';
$string['lockteachermarkswarning'] = '注意: これらのマークを保存した場合、あなたは「Yes」マークに変更することはできません。';
$string['modulename'] = 'チェックリスト';
$string['modulename_help'] = 'チェックリストモジュールにおいて、教師は学生が取り組むためのチェックリスト/ToDoリスト/タスクリストを作成することができます。';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'チェックリスト';
$string['moveitemdown'] = 'アイテムを下に移動する';
$string['moveitemup'] = 'アイテムを上に移動する';
$string['noitems'] = 'チェックリストにアイテムはありません。';
$string['onlyenrolled'] = 'アクティブユーザのみ';
$string['onlyenrolleddesc'] = 'この設定を有効にした場合、登録をしているアクティブなユーザのみチェックリストに表示されます。';
$string['openlinkinnewwindow'] = '新しいウィンドウに表示しますか?';
$string['optionalhide'] = '任意アイテムを隠す';
$string['optionalitem'] = 'このアイテムは任意です。';
$string['optionalshow'] = '任意アイテムを表示する';
$string['or'] = 'OR';
$string['percent'] = 'アイテムの割合';
$string['percentcomplete'] = '必須アイテム';
$string['percentcompleteall'] = 'すべてのアイテム';
$string['pluginadministration'] = 'チェックリスト管理';
$string['pluginname'] = 'チェックリスト';
$string['preview'] = 'プレビュー';
$string['privacy:metadata:checklist_check'] = 'あるチェックリストでどのチェックリストアイテムがユーザによってチェックされたか (またはユーザのために教師によってチェックされたか) に関する情報';
$string['privacy:metadata:checklist_check:item'] = 'チェック済みされたチェックリストアイテムのID';
$string['privacy:metadata:checklist_check:teacherid'] = 'このアイテムのステータスを最後に更新した教師のID';
$string['privacy:metadata:checklist_check:teachermark'] = '教師がユーザに対してこのアイテムに割り当てたステータス';
$string['privacy:metadata:checklist_check:teachertimestamp'] = '教師が最後にこのアイテムにステータスを割り当てた日時';
$string['privacy:metadata:checklist_check:userid'] = 'チェック済みにしたユーザのID (教師がマークした場合、チェック済みにされたユーザ）';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'ユーザが最後にアイテムをチェック済みにした日時 (アイテムが現在チェックされていない場合は「0」)';
$string['privacy:metadata:checklist_comment'] = 'ユーザのチェックリスト進捗状況に対して教師が作成したコメントに関する情報';
$string['privacy:metadata:checklist_comment:commentby'] = 'このコメントを作成したユーザ (教師) のID';
$string['privacy:metadata:checklist_comment:itemid'] = 'コメントに関するチェックリストアイテムのID';
$string['privacy:metadata:checklist_comment:text'] = 'コメントテキスト';
$string['privacy:metadata:checklist_comment:userid'] = 'このコメントに関連するユーザ (学生) のID';
$string['privacy:metadata:checklist_comment_student'] = '学生がチェックリストに作成したコメント';
$string['privacy:metadata:checklist_comment_student:itemid'] = 'コメントに関連するチェックリストアイテムのID';
$string['privacy:metadata:checklist_comment_student:text'] = 'コメントテキスト';
$string['privacy:metadata:checklist_comment_student:usermodified'] = 'このコメントを作成したユーザ (学生) のID';
$string['privacy:metadata:checklist_comp_notification'] = 'どのユーザがチェックリストのすべてのアイテムを完了したか追跡してメールを再送信しないようにします。';
$string['privacy:metadata:checklist_comp_notification:checklistid'] = 'チェックリストのID';
$string['privacy:metadata:checklist_comp_notification:iscomplete'] = '完了「1」、未完了「0」';
$string['privacy:metadata:checklist_comp_notification:userid'] = 'チェックリストを完了したユーザのID';
$string['privacy:metadata:checklist_item'] = 'ユーザが指定されたチェックリストに追加したプライベートアイテムに関する情報';
$string['privacy:metadata:checklist_item:checklist'] = 'このプライベートアイテムが追加されたチェックリストのID';
$string['privacy:metadata:checklist_item:displaytext'] = 'プライベートチェックリストアイテムのテキスト';
$string['privacy:metadata:checklist_item:userid'] = 'このプライベートアイテムを作成したユーザのIDです (教師が作成したアイテムの場合は「0」ですべてのユーザに表示されます)。';
$string['progress'] = '進捗';
$string['removeauto'] = 'コースモジュールアイテムを削除する';
$string['report'] = '進捗を表示する';
$string['reporttablesummary'] = 'それぞれの学生が完了したチェックリストのアイテムを表示するテーブル';
$string['requireditem'] = 'このアイテムは必須です - 要完了';
$string['resetchecklistprogress'] = 'チェックリスト進捗およびユーザアイテムをリセットする';
$string['savechecks'] = '保存';
$string['showcolorchooser'] = 'カラーチューザを表示する';
$string['showcolorchooserdesc'] = 'edit.phpのリスト要素のカラーチューザを表示します。';
$string['showcompletemymoodle'] = '「ダッシュボード」 (マイホーム) ページに完了チェックリストを表示する';
$string['showfulldetails'] = '全詳細を表示する';
$string['showhidechecked'] = '選択されたアイテムを表示/秘匿する';
$string['showmymoodle'] = 'チェックリストを「ダッシュボード」 (マイホーム) ページに表示する';
$string['showprogressbars'] = 'プログレスバーを表示する';
$string['showupdateablemymoodle'] = '更新可能なチェックリストのみ「ダッシュボード」 (マイホーム) ページに表示する';
$string['student_comment_created'] = '学生コメントが作成されました。';
$string['student_comment_updated'] = '学生コメントが更新されました。';
$string['student_comment_updated_desc'] = 'ユーザID {$a->userid} のユーザがコースモジュールID {$a->cmid} のチェックリストのコメントをテキスト「 {$a->commenttext} 」に更新しました。';
$string['studentcomments'] = 'ユーザはチェックリストアイテムに自分のコメントを追加できる';
$string['teacheralongsidecheck'] = '学生および教師';
$string['teachercomments'] = '教師はコメントを追加できる';
$string['teacherdate'] = 'このアイテムを教師が最後に更新した日付';
$string['teacheredit'] = '更新';
$string['teacherid'] = 'このマークを最後に更新した教師';
$string['teachermarkno'] = '教師はあなたがこれを完了していないとマークしています。';
$string['teachermarkundecided'] = 'まだ教師はこれをマークしていません。';
$string['teachermarkyes'] = '教師はあなたがこれを完了しているとマークしています。';
$string['teachernoteditcheck'] = '学生のみ';
$string['teacheroverwritecheck'] = '教師のみ';
$string['theme'] = 'チェックリスト表示テーマ';
$string['togglecolumn'] = 'カラムを切り替える';
$string['toggledates'] = '氏名および日付を切り替える';
$string['togglerow'] = '行を切り替える';
$string['unindentitem'] = 'アイテムをインデント解除する';
$string['update_student_comment_failed'] = '学生コメントの更新に失敗しました。';
$string['updatecompletescore'] = '完了評定を保存する';
$string['updateitem'] = '更新';
$string['userdate'] = 'このアイテムをユーザが最後に更新した日付';
$string['useritemsallowed'] = 'ユーザは自分のアイテムを追加することができる';
$string['useritemsdeleted'] = 'ユーザアイテムが削除されました。';
$string['view'] = 'チェックリストを表示する';
$string['viewall'] = 'すべての学生を表示する';
$string['viewallcancel'] = 'キャンセル';
$string['viewallsave'] = '保存';
$string['viewsinglereport'] = 'このユーザの進捗を表示する';
$string['viewsingleupdate'] = 'このユーザの進捗を更新する';
$string['yesnooverride'] = 'はい、オーバーライドできません';
$string['yesoverride'] = 'はい、オーバーライドできます';
