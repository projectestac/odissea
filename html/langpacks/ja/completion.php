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
 * Strings for component 'completion', language 'ja', version '3.11'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = '評点到達';
$string['activities'] = '活動';
$string['activitiescompleted'] = '活動完了';
$string['activitiescompletednote'] = '注意: 上記リストに表示するには活動の活動完了を設定する必要があります。';
$string['activitieslabel'] = '活動/リソース';
$string['activityaggregation'] = 'コンディション要求';
$string['activityaggregation_all'] = '選択された活動すべてを完了する';
$string['activityaggregation_any'] = '選択された活動いずれかを完了する';
$string['activitycompletion'] = '活動完了';
$string['activitycompletionupdated'] = '変更が保存されました。';
$string['activitygradenotrequired'] = '評定未必須';
$string['affectedactivities'] = '変更は次の<b>{$a}</b>件の活動またはリソースに影響します。';
$string['aggregationmethod'] = '総計方法';
$string['all'] = 'すべて';
$string['any'] = '任意';
$string['approval'] = '承認';
$string['areyousureoverridecompletion'] = '本当にこのユーザのこの活動の現在の完了ステータスをオーバーライドして「 {$a} 」とマークしてもよろしいですか?';
$string['badautocompletion'] = '「条件を満たした場合、活動完了を表示する」を選択した場合、あなたは少なくとも (以下の) 1つの必要条件も有効にする必要があります。';
$string['badcompletiongradeitemnumber'] = '「 {$a} 」の評定必須は有効にできません ({$a} による評定が有効にされていないため)。';
$string['bulkactivitycompletion'] = '活動完了バルク編集';
$string['bulkactivitydetail'] = 'あなたがバルク編集したい活動を選択してください。';
$string['bulkcompletiontracking'] = '完了トラッキング';
$string['bulkcompletiontracking_help'] = '<strong>なし:</strong> 活動完了を表示しません。
<strong>手動:</strong> 学生が手動で活動完了をマークできます。<strong>コンディション:</strong> 条件を満たした場合、活動完了を表示します。';
$string['checkactivity'] = '活動/リソースのチェックボックス: {$a}';
$string['checkall'] = 'すべての活動およびリソースをチェックまたはチェック解除する';
$string['checkallsection'] = '次のセクションの活動およびリソースをチェックまたはチェック解除する: {$a}';
$string['completeactivity'] = '活動を完了する';
$string['completed'] = '完了';
$string['completedunlocked'] = '完了オプションがロック解除されました。';
$string['completedunlockedtext'] = 'あなたが変更を保存した場合、すべてのユーザの完了状態が消去されます。完了ステータスの消去に関してあなたが方針を変更した場合、フォームを保存しないでください。';
$string['completedwarning'] = '完了オプションがロックされました。';
$string['completedwarningtext'] = 'この活動はすでに {$a} 名の参加者に対して活動が完了されています。完了オプションを変更することにより、それらの完了ステータスを消去するため、混乱の原因となる可能性があります。そのため、完了オプションはロックされてます。あなたが絶対に必要な場合を除き、ロック解除しないことをお勧めします。';
$string['completion'] = '完了トラッキング';
$string['completion-alt-auto-enabled'] = '状態に応じて、システムはこのアイテムに完了マークします: {$a}';
$string['completion-alt-auto-fail'] = '完了: {$a} (合格点未到達)';
$string['completion-alt-auto-n'] = '未完了: {$a}';
$string['completion-alt-auto-n-override'] = '未完了: {$a->modname} ({$a->overrideuser} による設定)';
$string['completion-alt-auto-pass'] = '完了: {$a} (合格点到達)';
$string['completion-alt-auto-y'] = '完了: {$a}';
$string['completion-alt-auto-y-override'] = '完了: {$a->modname} ({$a->overrideuser} による設定)';
$string['completion-alt-manual-enabled'] = 'ユーザはこのアイテムを手動で完了マークすることができます: {$a}';
$string['completion-alt-manual-n'] = '未完了: {$a} 完了マークするには選択してください。';
$string['completion-alt-manual-n-override'] = '未完了: {$a->modname} ({$a->overrideuser} による設定)  完了をマークするには選択してください。';
$string['completion-alt-manual-y'] = '完了: {$a} 未完了マークするには選択してください。';
$string['completion-alt-manual-y-override'] = '完了: {$a->modname} ({$a->overrideuser} による設定)  未完了をマークするには選択してください。';
$string['completion-fail'] = '完了 (合格点未到達)';
$string['completion-n'] = '未完了';
$string['completion-n-override'] = '未完了 ({$a} による設定)';
$string['completion-pass'] = '完了 (合格点到達)';
$string['completion-y'] = '完了';
$string['completion-y-override'] = '完了 ({$a} による設定)';
$string['completion_automatic'] = '条件を満たした場合、活動完了を表示する';
$string['completion_help'] = 'この設定を有効にした場合、コンディションに基づき手動または自動の活動完了がトラッキングされます。必要に応じて、複数のコンディションを設定することができます。その場合、すべてのコンディションに合致したときのみ活動が完了したとみなされます。

活動が完了した場合、コースページの活動名の横にチェックが表示されます。';
$string['completion_manual'] = 'ユーザが手動で活動を完了マークできる';
$string['completion_none'] = '活動完了を表示しない';
$string['completionactivitydefault'] = '活動デフォルトを使用する';
$string['completiondefault'] = 'デフォルト完了トラッキング';
$string['completiondisabled'] = '無効、活動設定に表示しない';
$string['completionduration'] = '登録';
$string['completionenabled'] = '有効、完了設定および活動設定によりコントロールする';
$string['completionexpected'] = '期待される完了日';
$string['completionexpected_help'] = 'この設定では期待される活動完了日を指定します。';
$string['completionexpecteddesc'] = '完了予定日は {$a} です。';
$string['completionexpectedfor'] = '{$a->instancename} 要完了';
$string['completionicons'] = '完了チェックボックス';
$string['completionicons_help'] = '活動名の横にあるチェックボックスにより活動の完了時期を指定します。

破線のボックスが表示された場合、教師により設定された条件に従ってあなたが活動を完了した時点で、チェックが自動的に表示されます。

実線のボックスが表示された場合、あなたが活動を完了したと思う時点でボックスをチェックすることができます (あなたの気持ちが変わった場合、再度クリックすることによりチェック解除してください)。';
$string['completionmenuitem'] = '完了';
$string['completionnotenabled'] = '完了は有効にされていません。';
$string['completionnotenabledforcourse'] = 'このコースでは完了は有効にされていません。';
$string['completionnotenabledforsite'] = 'このサイトでは完了は有効にされていません。';
$string['completionondate'] = '日付';
$string['completionondatevalue'] = 'コースが完了マークされる日付';
$string['completionsettingslocked'] = '完了設定ロック中';
$string['completionupdated'] = '活動「 {$a} 」の完了が更新されました。';
$string['completionusegrade'] = '評定を必要とする';
$string['completionusegrade_desc'] = 'この活動を完了するには学生が評定される必要があります。';
$string['completionusegrade_help'] = 'この設定を有効にした場合、学生が評定された時点で活動が完了したとみなされます。活動の合格点が設定された場合、合格および不合格アイコンが表示されます。';
$string['completionview'] = '閲覧を必要とする';
$string['completionview_desc'] = '完了するには学生はこの活動を閲覧する必要があります。';
$string['configcompletiondefault'] = '新しい活動を作成する場合の完了トラッキングのデフォルト設定です。';
$string['configenablecompletion'] = 'この設定を有効にした場合、コースおよび活動完了コンディションを設定できます。ダッシュボードのコース概要でユーザに有益なデータが表示されるため、活動完了コンディションの設定をお勧めします。';
$string['confirmselfcompletion'] = '自己完了を承認します。';
$string['courseaggregation'] = 'コンディション要求';
$string['courseaggregation_all'] = '選択されたコースすべてを完了する';
$string['courseaggregation_any'] = '選択されたコースどれでも完了する';
$string['coursealreadycompleted'] = 'あなたはすでにこのコースを完了しています。';
$string['coursecomplete'] = 'コース完了';
$string['coursecompleted'] = 'コース完了';
$string['coursecompletedmessage'] = '<p>おめでとうございます!</p><p>あなたはコース <a href="{$a->courselink}">{$a->coursename}</a> を完了しました。</p>';
$string['coursecompletion'] = 'コース完了';
$string['coursecompletioncondition'] = 'コンディション: {$a}';
$string['coursegrade'] = 'コース評定';
$string['coursesavailable'] = '利用可能なコース';
$string['coursesavailableexplaination'] = '注意: 上記リストに表示するにはコースのコース完了コンディションを設定する必要があります。';
$string['criteria'] = 'クライテリア';
$string['criteriagroup'] = 'クライテリアグループ';
$string['criteriarequiredall'] = '以下のクライテリアすべてが必須である';
$string['criteriarequiredany'] = '以下いくつかのクライテリアが必須である';
$string['csvdownload'] = 'スプレッドシートフォーマットでダウンロードする (UTF-8 .csv)';
$string['datepassed'] = '合格日';
$string['days'] = '日';
$string['daysoftotal'] = '{$a->days} / {$a->total}';
$string['defaultcompletion'] = 'デフォルト活動完了';
$string['defaultcompletionupdated'] = '変更が保存されました。';
$string['deletecompletiondata'] = '完了データを削除する';
$string['dependencies'] = '依存関係';
$string['dependenciescompleted'] = '他のコースの完了';
$string['detail_desc:receivegrade'] = '評定を受ける';
$string['detail_desc:view'] = '表示';
$string['editcoursecompletionsettings'] = 'コース完了設定を編集する';
$string['enablecompletion'] = '完了トラッキングを有効にする';
$string['enablecompletion_help'] = 'この設定を有効にした場合、活動完了コンディションが活動設定内に設定されます。また、コース完了コンディションも設定されます。ダッシュボードのコース概要に意味のあるデータを表示するため、この設定を有効にすることをお勧めします。';
$string['enrolmentduration'] = '登録期間';
$string['enrolmentdurationlength'] = 'ユーザは次の期間登録を保持する必要があります';
$string['err_noactivities'] = 'すべての活動で完了情報が有効にされていないため、何も表示されません。活動の設定画面により、あなたは完了情報を有効にすることができます。';
$string['err_nocourses'] = '他のどのコースでもコース完了が有効にされていないため、何も表示することはできません。あなたはコース設定内でコース完了を有効にすることができます。';
$string['err_nograde'] = 'このコースにはコース合格点が設定されていません。このクライテリアタイプを設定するにはあなたはコースに合格点を設定する必要があります。';
$string['err_noroles'] = 'このコースにはケイパビリティ「moodle/course:markcomplete」が割り当てられたロールがありません。';
$string['err_nousers'] = 'このコースまたはグループには完了情報を表示する学生はいません (完了情報はケイパビリティ「完了レポートに表示する」のあるユーザにのみ表示されます。このケイパビリティは学生のデフォルトロールにのみ許可されます。そのため、学生がいない場合、あなたにはこのメッセージが表示されます)。';
$string['err_settingslocked'] = '1名またはそれ以上の学生がすでにクライテリアを完了しているため、設定がロックされています。完了クライテリア設定ロックを解除するには既存のユーザデータを削除する必要があります。ユーザデータ削除により混乱が生じる恐れがあります。';
$string['err_system'] = '完了システムで内部エラーが発生しました (詳細情報を表示するため、システム管理者はデバッグ情報の表示を有効にできます)。';
$string['eventcoursecompleted'] = 'コースが完了しました。';
$string['eventcoursecompletionupdated'] = 'コース完了が更新されました。';
$string['eventcoursemodulecompletionupdated'] = 'コース活動完了が更新されました。';
$string['eventdefaultcompletionupdated'] = 'コース活動完了のデフォルトが更新されました。';
$string['excelcsvdownload'] = 'Excel互換フォーマットでダウンロードする (.csv)';
$string['fraction'] = '割合';
$string['graderequired'] = '必須コース評点';
$string['gradexrequired'] = '要求評点: {$a}';
$string['hiddenrules'] = '<b>{$a}</b>で指定されたいくつかの設定は非表示にされています。未選択の他の活動を表示するには';
$string['inprogress'] = '進行中';
$string['manual'] = '手動';
$string['manualcompletionby'] = '他のユーザによる手動完了';
$string['manualcompletionbynote'] = '注意: リストに表示するにはロールのケイパビリティ「moodle/course:markcomplete」を許可にする必要があります。';
$string['manualselfcompletion'] = '手動による自己完了';
$string['manualselfcompletionnote'] = '注意: 手動自己完了が有効にされた場合、コースに自己完了ブロックを追加する必要があります。';
$string['markcomplete'] = '完了マークする';
$string['markedcompleteby'] = '{$a} により完了マーク';
$string['markingyourselfcomplete'] = 'あなた自身による完了マーク';
$string['modifybulkactions'] = 'あなたがバルク編集したい処理を修正する';
$string['moredetails'] = '詳細情報';
$string['nocriteriaset'] = 'このコースに設定されている完了クライテリアはありません。';
$string['nogradeitem'] = '評定を利用できないため「 {$a} 」で「評定を必要とする」を有効にすることはできません。';
$string['notcompleted'] = '未完了';
$string['notenroled'] = 'あなたはこのコースに登録されていません。';
$string['nottracked'] = '現在、あなたはこのコース内で完了により追跡されていません。';
$string['notyetstarted'] = '未開始';
$string['overallaggregation'] = '完了要件';
$string['overallaggregation_all'] = 'すべてのコンディションに合致した時点でコースが完了する';
$string['overallaggregation_any'] = 'コンディションのどれかに合致した時点でコースが完了する';
$string['pending'] = '保留';
$string['periodpostenrolment'] = '登録後の期間';
$string['privacy:metadata:completionstate'] = '活動が完了しているか示します。';
$string['privacy:metadata:course'] = 'コースIDです。';
$string['privacy:metadata:coursecompletedsummary'] = 'コースのクライテリアを完了したユーザに関する情報を保存します。';
$string['privacy:metadata:coursemoduleid'] = '活動IDです。';
$string['privacy:metadata:coursemodulesummary'] = 'ユーザの活動完了データを保存します。';
$string['privacy:metadata:coursesummary'] = 'ユーザのコース完了日を保存します。';
$string['privacy:metadata:gradefinal'] = 'コース完了で取得した最終評点です。';
$string['privacy:metadata:overrideby'] = '活動完了をオーバーライドした人のユーザIDです。';
$string['privacy:metadata:reaggregate'] = 'コース完了が再合計されたか示します。';
$string['privacy:metadata:timecompleted'] = 'コースが完了した日時です。';
$string['privacy:metadata:timeenrolled'] = 'ユーザがコースに登録された日時です。';
$string['privacy:metadata:timemodified'] = '活動完了が修正された日時です。';
$string['privacy:metadata:timestarted'] = 'コースが開始された日時です。';
$string['privacy:metadata:unenroled'] = 'ユーザがコースから登録解除されたか示します。';
$string['privacy:metadata:userid'] = 'コースおよび活動完了データのユーザのユーザIDです。';
$string['privacy:metadata:viewed'] = '活動が閲覧されたか示します。';
$string['progress'] = '学生の進捗';
$string['progress-title'] = '{$a->user} - {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = '進捗: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = '事前学習評価';
$string['remainingenroledfortime'] = '指定された期間の登録保持';
$string['remainingenroleduntildate'] = '指定された日付までの登録保持';
$string['reportpage'] = '{$a->total} ユーザの {$a->from} から {$a->to} を表示しています。';
$string['requiredcriteria'] = '必須クライテリア';
$string['resetactivities'] = 'すべてのチェックした活動およびリソースをクリアする';
$string['restoringcompletiondata'] = '完了データの書き出し';
$string['roleaggregation'] = 'コンディション要求';
$string['roleaggregation_all'] = 'コンディションに合致した場合、選択したロールすべてがマークする';
$string['roleaggregation_any'] = 'コンディションに合致した場合、選択したロールのどれかがマークする';
$string['roleidnotfound'] = 'ロールID「 {$a} 」が見つかりませんでした。';
$string['saved'] = '保存完了';
$string['seedetails'] = '詳細を表示する';
$string['select'] = '選択';
$string['self'] = '自己';
$string['selfcompletion'] = '自己完了';
$string['showcompletionconditions'] = '活動完了コンディションを表示する';
$string['showcompletionconditions_help'] = '活動完了コンディションは常に活動ページに表示されます。この設定ではコースページのそれぞれの活動の下にも活動完了コンディションを表示するかどうか決定します';
$string['showinguser'] = 'ユーザの表示';
$string['unenrolingfromcourse'] = 'コースから登録解除する';
$string['unenrolment'] = '登録解除';
$string['unit'] = 'ユニット';
$string['unlockcompletion'] = '完了オプションをロック解除する';
$string['unlockcompletiondelete'] = '完了オプションをロック解除した後、ユーザ完了データを削除する';
$string['updateactivities'] = 'チェックした活動の完了ステータスを更新する';
$string['usealternateselector'] = '代替コースセレクタを使用する';
$string['usernotenroled'] = 'このコースに登録されているユーザはいません。';
$string['viewcoursereport'] = 'コースレポートを表示する';
$string['viewingactivity'] = '{$a} の閲覧';
$string['withconditions'] = 'コンディション';
$string['writingcompletiondata'] = '完了データの書き出し';
$string['xdays'] = '{$a} 日';
$string['yourprogress'] = 'あなたの進捗';
