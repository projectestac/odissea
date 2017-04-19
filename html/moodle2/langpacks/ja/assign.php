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
 * Strings for component 'assign', language 'ja', branch 'MOODLE_31_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'あなたには注意が必要な課題があります。';
$string['addattempt'] = '別の提出を許可する';
$string['addnewattempt'] = '新しい提出を追加する';
$string['addnewattemptfromprevious'] = '前回の提出をもとに新しい提出を追加する';
$string['addnewattemptfromprevious_help'] = 'ここではあなたの作業のために前回提出のコンテンツを新しい提出にコピーします。';
$string['addnewattempt_help'] = 'ここではあなたの作業のために空の提出を作成します。';
$string['addsubmission'] = '課題を追加する';
$string['allocatedmarker'] = '割り当て採点者';
$string['allocatedmarker_help'] = 'この提出に割り当てられた採点者';
$string['allowsubmissions'] = 'この課題にユーザが継続して提出できるようにします。';
$string['allowsubmissionsanddescriptionfromdatesummary'] = '課題詳細および提出フォームは <strong>{$a}</strong> から利用できます。';
$string['allowsubmissionsfromdate'] = '開始日時';
$string['allowsubmissionsfromdate_help'] = 'この設定を有効にした場合、学生はこの日時以前に提出することはできません。無効にした場合、学生は今すぐ提出を開始することができます。';
$string['allowsubmissionsfromdatesummary'] = 'この課題は <strong>{$a}</strong> から提出を受け付けます。';
$string['allowsubmissionsshort'] = '提出の変更を許可する';
$string['alwaysshowdescription'] = '常に説明を表示する';
$string['alwaysshowdescription_help'] = 'この設定を無効にした場合、上記の課題説明は「開始日時」以降のみ学生に表示されます。';
$string['applytoteam'] = 'グループ全体に評定およびフィードバックを提供する';
$string['assign:addinstance'] = '新しい課題を追加する';
$string['assign:editothersubmission'] = '別の学生提出を編集する';
$string['assign:exportownsubmission'] = '自分の提出をエクスポートする';
$string['assignfeedback'] = 'フィードバックプラグイン';
$string['assignfeedbackpluginname'] = 'フィードバックプラグイン';
$string['assign:grade'] = '課題を評定する';
$string['assign:grantextension'] = '延長を許可する';
$string['assign:manageallocations'] = '提出に割り当てられた採点者を管理する';
$string['assign:managegrades'] = '評定をレビューおよびリリースする';
$string['assignmentisdue'] = '課題の提出期限が到来しました。';
$string['assignmentmail'] = 'あなたの「 {$a->assignment} 」への提出課題に関して {$a->grader} がフィードバックを投稿しました。

あなたの提出課題に追加されたフィードバックをご覧ください:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>あなたの「 {$a->assignment} 」への提出課題に関して {$a->grader} がフィードバックを投稿しました。</p>
<p>あなたの<a href="{$a->url}">提出課題</a>に追加されたフィードバックをご覧ください。</p>';
$string['assignmentmailsmall'] = 'あなたの「 {$a->assignment} 」への提出課題に関して {$a->grader} がフィードバックを投稿しました。あなたの提出課題に追加されたフィードバックをご覧ください。';
$string['assignmentname'] = '課題名';
$string['assignmentplugins'] = '課題プラグイン';
$string['assignmentsperpage'] = '1ページあたりの課題数';
$string['assign:receivegradernotifications'] = '評定者提出通知を受信する';
$string['assign:releasegrades'] = '評点をリリースする';
$string['assign:revealidentities'] = '学生の個人情報を公開する';
$string['assign:reviewgrades'] = '評定をレビューする';
$string['assignsubmission'] = '提出プラグイン';
$string['assignsubmissionpluginname'] = '提出プラグイン';
$string['assign:submit'] = '課題を提出する';
$string['assign:view'] = '課題を表示する';
$string['assign:viewblinddetails'] = 'ブラインド評定が有効にされた場合、学生IDを表示する';
$string['assign:viewgrades'] = '評定を表示する';
$string['attemptheading'] = '提出 {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = '前回の提出';
$string['attemptnumber'] = '提出回数';
$string['attemptreopenmethod'] = '提出再オープン';
$string['attemptreopenmethod_help'] = '学生の提出をどのように再オープンするか決定します。利用可能なオプションは以下のとおりです:
<ul>
<li>なし - 学生の提出を再オープンすることはできません。</li>
<li>手動 - 学生の提出は教師により再オープンすることができます。</li>
<li>合格するまで自動 - この課題に設定された評定表内 (評定表セットアップセクション) の合格点に達するまで学生の提出は自動的に再オープンされます。</li>
</ul>';
$string['attemptreopenmethod_manual'] = '手動';
$string['attemptreopenmethod_none'] = 'なし';
$string['attemptreopenmethod_untilpass'] = '合格するまで自動';
$string['attemptsettings'] = '受験設定';
$string['availability'] = '利用';
$string['backtoassignment'] = '課題に戻る';
$string['batchoperationconfirmaddattempt'] = '選択した提出に関して別の提出を許可しますか?';
$string['batchoperationconfirmdownloadselected'] = '選択した提出をダウンロードしますか?';
$string['batchoperationconfirmgrantextension'] = '選択されたすべての提出に関して延長を許可しますか?';
$string['batchoperationconfirmlock'] = '選択された提出すべてをロックしますか?';
$string['batchoperationconfirmreverttodraft'] = '選択された提出を下書きに戻しますか?';
$string['batchoperationconfirmsetmarkingallocation'] = '選択された提出すべてに採点割り当てを設定しますか?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = '選択された提出すべてに採点ワークフロー状態を設定しますか?';
$string['batchoperationconfirmunlock'] = '選択された提出すべてをロック解除しますか?';
$string['batchoperationlock'] = '提出をロックする';
$string['batchoperationreverttodraft'] = '提出を下書きに戻す';
$string['batchoperationsdescription'] = '選択した行に対して ...';
$string['batchoperationunlock'] = '提出をロック解除する';
$string['batchsetallocatedmarker'] = '選択された {$a} 名のユーザに割り当て採点者を設定します。';
$string['batchsetmarkingworkflowstateforusers'] = '選択された {$a} 名のユーザに採点ワークフロー状態を設定します。';
$string['blindmarking'] = 'ブラインド評定';
$string['blindmarkingenabledwarning'] = 'この活動ではブラインド評定が有効にされています。';
$string['blindmarking_help'] = 'ブラインド評定は評定者に学生の個人情報を隠します。この課題に関して提出または評定された場合、ブラインド評定設定がロックされます。';
$string['changefilters'] = 'フィルタを変更する';
$string['changegradewarning'] = 'この課題は評定済みであり、評点を変更することにより既存の提出が自動的に再計算されることはありません。評点を変更したい場合、あなたは既存のすべての提出を再評定する必要があります。';
$string['changeuser'] = 'ユーザを変更する';
$string['choosegradingaction'] = '評定操作';
$string['choosemarker'] = '選択 ...';
$string['chooseoperation'] = '処理を選択する';
$string['clickexpandreviewpanel'] = 'レビューパネルを展開するにはクリックしてください。';
$string['collapsegradepanel'] = '評定パネルを折りたたむ';
$string['collapsereviewpanel'] = 'レビューパネルを折りたたむ';
$string['comment'] = 'コメント';
$string['completionsubmit'] = '完了するには学生はこの活動を送信する必要があります。';
$string['configshowrecentsubmissions'] = 'すべてのユーザが提出の通知を「最近の活動」レポートで閲覧できます。';
$string['confirmbatchgradingoperation'] = '本当に {$a->count} 名の学生に {$a->operation} してもよろしいですか?';
$string['confirmsubmission'] = '本当にあなたの作業を評定のために提出してもよろしいですか? これ以上、あなたは変更できないようになります。';
$string['conversionexception'] = '課題をコンバートできませんでした。除外: {$a}.';
$string['couldnotconvertgrade'] = 'ユーザ {$a} の課題評点をコンバートできませんでした。';
$string['couldnotconvertsubmission'] = 'ユーザ {$a} の提出課題をコンバートできませんでした。';
$string['couldnotcreatecoursemodule'] = 'コースモジュールを作成できませんでした。';
$string['couldnotcreatenewassignmentinstance'] = '新しい課題インスタンスを作成できませんでした。';
$string['couldnotfindassignmenttoupgrade'] = 'アップグレードするための古い課題インスタンスを見つけることができませんでした。';
$string['currentattempt'] = 'これは {$a} 回目の提出です。';
$string['currentattemptof'] = 'これは {$a->attemptnumber} 回目の提出です ( {$a->maxattempts} 回の提出が許可されています)。';
$string['currentgrade'] = '評定表内の現在の評定';
$string['cutoffdate'] = '遮断日時';
$string['cutoffdatecolon'] = '遮断日時: {$a}';
$string['cutoffdatefromdatevalidation'] = '遮断日時は開始日時の後に設定する必要があります。';
$string['cutoffdate_help'] = '設定した場合、この日時以降、延長なしでは提出を受け付けません。';
$string['cutoffdatevalidation'] = '遮断日時を終了日時の前に設定することはできません。';
$string['defaultlayout'] = 'デフォルトレイアウトをリストアする';
$string['defaultsettings'] = 'デフォルト課題設定';
$string['defaultsettings_help'] = 'これらの設定は新しい課題すべてのデフォルトを設定します。';
$string['defaultteam'] = 'デフォルトグループ';
$string['deleteallsubmissions'] = 'すべての提出を削除する';
$string['description'] = '説明';
$string['downloadall'] = 'すべての提出をダウンロードする';
$string['downloadasfolders'] = '提出をフォルダに入れてダウンロードする';
$string['downloadasfolders_help'] = '提出課題が単一ファイルより多い場合、提出をフォルダに入れてダウンロードすることができます。それぞれの提出は別々のフォルダに入れられサブフォルダの構造すべては保持されます。また、ファイルはリネームされません。';
$string['downloadselectedsubmissions'] = '選択した提出をダウンロードする';
$string['duedate'] = '終了日時';
$string['duedatecolon'] = '終了日時: {$a}';
$string['duedate_help'] = 'これは課題の提出期限です。提出遅延が許可された場合、この日時以降に提出された課題は提出遅延としてマークされます。特定日時以降の提出を避けるには課題遮断日時を設定してください。';
$string['duedateno'] = '提出期限なし';
$string['duedatereached'] = 'この課題の提出期限を過ぎました。';
$string['duedatevalidation'] = '終了日は開始日以降に設定する必要があります。';
$string['editaction'] = '操作 ...';
$string['editattemptfeedback'] = '提出番号 {$a} の評点およびフィードバックを編集します。';
$string['editingpreviousfeedbackwarning'] = 'あなたは前回の提出のフィードバックを編集しています。これは {$a->attemptnumber} / {$a->totalattempts} の提出です。';
$string['editingstatus'] = '編集ステータス';
$string['editsubmission'] = '提出を編集する';
$string['editsubmission_help'] = 'あなたの提出に変更を加えます。';
$string['editsubmissionother'] = '{$a} の提出を編集する';
$string['enabled'] = '有効';
$string['errornosubmissions'] = 'ダウンロード可能な提出はありません。';
$string['errorquickgradingvsadvancedgrading'] = '現在、この課題は高度な評定を使用しているため、評点は保存されませんでした。';
$string['errorrecordmodified'] = 'あなたがページを表示した後、他のユーザが1つまたはそれ以上のレコードを修正したため、評点は保存されませんでした。';
$string['eventallsubmissionsdownloaded'] = 'すべての提出がダウンロードされました。';
$string['eventassessablesubmitted'] = '課題が提出されました。';
$string['eventbatchsetmarkerallocationviewed'] = '採点割り当てページのバッチ設定が閲覧されました。';
$string['eventbatchsetworkflowstateviewed'] = 'ワークフロー状態ページのバッチ設定が閲覧されました。';
$string['eventextensiongranted'] = '延長が許可されました。';
$string['eventfeedbackupdated'] = 'フィードバックが更新されました。';
$string['eventfeedbackviewed'] = 'フィードバックが閲覧されました。';
$string['eventgradingformviewed'] = '評定フォームが閲覧されました。';
$string['eventgradingtableviewed'] = '評定表が閲覧されました。';
$string['eventidentitiesrevealed'] = 'IDが公開されました。';
$string['eventmarkerupdated'] = '割り当て済みマーカーが更新されました。';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'ID公開確認ページが閲覧されました。';
$string['eventstatementaccepted'] = 'ユーザが提出同意書に同意しました。';
$string['eventsubmissionconfirmationformviewed'] = '提出確認フォームが閲覧されました。';
$string['eventsubmissioncreated'] = '提出が作成されました。';
$string['eventsubmissionduplicated'] = 'ユーザの提出が重複しました。';
$string['eventsubmissionformviewed'] = '提出フォームが閲覧されました。';
$string['eventsubmissiongraded'] = '提出が評定されました。';
$string['eventsubmissionlocked'] = 'ユーザの提出がロックされました。';
$string['eventsubmissionstatusupdated'] = '提出ステータスが更新されました。';
$string['eventsubmissionstatusviewed'] = '提出ステータスが閲覧されました。';
$string['eventsubmissionunlocked'] = 'ユーザの提出がロック解除されました。';
$string['eventsubmissionupdated'] = '提出が更新されました。';
$string['eventsubmissionviewed'] = '提出が閲覧されました。';
$string['eventworkflowstateupdated'] = 'ワークフロー状態が更新されました。';
$string['expandreviewpanel'] = 'レビューパネルを展開する';
$string['extensionduedate'] = '延長提出期限';
$string['extensionnotafterduedate'] = '延長日時は終了日時の後に設定する必要があります。';
$string['extensionnotafterfromdate'] = '延長日時は開始日時の後に設定する必要があります。';
$string['feedback'] = 'フィードバック';
$string['feedbackavailablehtml'] = 'あなたの「 {$a->assignment} 」への提出課題に {$a->username} がフィードバックを投稿しました。
<br />
<br />
あなたの<a href="{$a->url}">提出課題</a>に追加されたフィードバックを確認することができます。';
$string['feedbackavailablesmall'] = '課題「 {$a->assignment} 」のフィードバックが{$a->username} により投稿されました。';
$string['feedbackavailabletext'] = 'あなたの「 {$a->assignment} 」への提出課題に {$a->username} がフィードバックを投稿しました。

あなたの提出課題に追加されたフィードバックを確認することができます:

    {$a->url}';
$string['feedbackplugin'] = 'フィードバックプラグイン';
$string['feedbackpluginforgradebook'] = '評定表にコメントを転送するためのフィードバックプラグインです。';
$string['feedbackpluginforgradebook_help'] = '1つの課題フィードバックプラグインのみ、評定表にフィードバックをプッシュすることができます。';
$string['feedbackplugins'] = 'フィードバックプラグイン';
$string['feedbacksettings'] = 'フィードバック設定';
$string['feedbacktypes'] = 'フィードバックタイプ';
$string['filesubmissions'] = 'ファイル提出';
$string['filter'] = 'フィルタ';
$string['filternone'] = 'フィルタなし';
$string['filternotsubmitted'] = '未提出';
$string['filterrequiregrading'] = '要評定';
$string['filtersubmitted'] = '提出';
$string['gradeabovemaximum'] = '評点は {$a} 以下にする必要があります。';
$string['gradebelowzero'] = '評点はゼロまたはゼロより大きな値にする必要があります。';
$string['gradecanbechanged'] = '評点変更可';
$string['gradechangessaveddetail'] = '評定およびフィードバックの変更が保存されました。';
$string['graded'] = '評定済み';
$string['gradedby'] = '評定者';
$string['gradedon'] = '評定日時';
$string['gradelocked'] = 'この評点はロックされているか、評定表内で上書きされています。';
$string['gradeoutof'] = '{$a} 点中の評点';
$string['gradeoutofhelp'] = '評定';
$string['gradeoutofhelp_help'] = 'ここで学生の提出に関する評点を入力してください。あなたは小数点を含むことができます。';
$string['gradersubmissionupdatedhtml'] = '{$a->username} が「 {$a->assignment} 」の提出課題を更新しました (更新日時: {$a->timeupdated} )。<br /><br />
<a href="{$a->url}">ウェブサイトで確認することができます</a>。';
$string['gradersubmissionupdatedsmall'] = '{$a->username} が課題「 {$a->assignment} 」への提出を更新しました。';
$string['gradersubmissionupdatedtext'] = '{$a->username} が「 {$a->assignment} 」の提出課題を更新しました (更新日時: {$a->timeupdated} )。

以下で確認することができます:

{$a->url}';
$string['gradestudent'] = '学生を評定する: (id={$a->id}, フルネーム={$a->fullname})';
$string['gradeuser'] = '{$a} を評定する';
$string['grading'] = '評定';
$string['gradingchangessaved'] = '評定の変更が保存されました。';
$string['gradingmethodpreview'] = '評定クライテリア';
$string['gradingoptions'] = 'オプション';
$string['gradingstatus'] = '評定ステータス';
$string['gradingstudent'] = '学生評定';
$string['gradingsummary'] = '評定概要';
$string['grantextension'] = '延長を許可する';
$string['grantextensionforusers'] = '{$a} 名の学生に対して延長を許可する';
$string['groupsubmissionsettings'] = 'グループ提出設定';
$string['hiddenuser'] = '参加者';
$string['hideshow'] = '非表示/表示';
$string['instructionfiles'] = 'インストラクションファイル';
$string['introattachments'] = '追加ファイル';
$string['introattachments_help'] = '課題内で使用する解答テンプレートのような追加ファイルを追加することができます。このファイルのダウンロードリンクは課題ページの説明の下に表示されます。';
$string['invalidfloatforgrade'] = '提供された評点を理解できませんでした: {$a}';
$string['invalidgradeforscale'] = '提供された評点は現在の評価尺度に有効ではありません。';
$string['lastmodifiedgrade'] = '最終更新日時 (評定)';
$string['lastmodifiedsubmission'] = '最終更新日時 (提出)';
$string['latesubmissions'] = '提出期限後の提出';
$string['latesubmissionsaccepted'] = '{$a} まで許可されます。';
$string['loading'] = '読み込み中 ...';
$string['locksubmissionforstudent'] = '学生によるこれ以上の提出を禁止する: (id={$a->id}, フルネーム={$a->fullname})';
$string['locksubmissions'] = '提出をロックする';
$string['manageassignfeedbackplugins'] = '課題フィードバックプラグイン管理';
$string['manageassignsubmissionplugins'] = '課題提出プラグイン管理';
$string['marker'] = '採点者';
$string['markerfilter'] = '採点者フィルタ';
$string['markerfilternomarker'] = '採点者なし';
$string['markingallocation'] = '採点割り当てを使用する';
$string['markingallocation_help'] = 'この設定および採点ワークフローを有効にした場合、個別の学生に採点者を割り当てることができるようになります。';
$string['markingworkflow'] = '採点ワークフローを使用する';
$string['markingworkflow_help'] = 'この設定を有効にした場合、評点は学生にリリースされる前にワークフローステージに入ります。これにより採点者が一連の評点を同じタイミングですべての学生にリリースすることができます。';
$string['markingworkflowstate'] = '採点ワークフローステータス';
$string['markingworkflowstate_help'] = '使用可能なワークフローステータスは下記を含みます (あなたのパーミッションに依存します):

* 未採点 - まだ採点者は開始していません。
* 採点中 - 採点者は開始しましたが、まだ完了していません。
* 採点完了 - 採点者は完了していますが、チェックおよび訂正が必要です。
* レビュー中 - 採点は教師によるクオリティチェック中です。
* リリース準備完了 - 担当教師は採点に満足していますが、学生に対して評点にアクセスさせる前に待機しています。
* リリース - 学生は評点およびフィードバックにアクセスすることができます。';
$string['markingworkflowstateinmarking'] = '採点中';
$string['markingworkflowstateinreview'] = 'レビュー中';
$string['markingworkflowstatenotmarked'] = '未採点';
$string['markingworkflowstatereadyforrelease'] = 'リリース準備完了';
$string['markingworkflowstatereadyforreview'] = '採点完了';
$string['markingworkflowstatereleased'] = 'リリース済み';
$string['maxattempts'] = '最大提出回数';
$string['maxattempts_help'] = '学生が試みることのできる最大提出回数です。この提出回数に達した場合、学生の提出は再度開くことができないようになります。';
$string['maxgrade'] = '最大評点';
$string['maxperpage'] = '1ページあたりの最大課題数';
$string['maxperpage_help'] = '評定者が課題評定ページに表示することのできる最大課題数です。非常に多くの受講登録があるコースのタイムアウトを防ぐことに有用です。';
$string['messageprovider:assign_notification'] = '課題通知';
$string['modulename'] = '課題';
$string['modulename_help'] = '課題活動モジュールにおいて、教師はタスクの伝達、作業の収集、評点およびフィードバックを提供することができます。

学生はワードプロセッサで処理したドキュメント、スプレッドシート、イメージ、オーディオまたはビデオクリップのようなデジタルコンテンツ (ファイル) を提出することができます。代わりに、または加えて、テキストエディタへのテキストの直接入力を学生に求めることがきます。アートワークのように学生に「実社会」を思い出させる課題をオフラインで完了させるために使用することもできます。この場合、デジタルコンテンツを必要としません。学生は個人またはグループのメンバーとして課題を提出することができます。

課題をレビューする場合、教師は評定した学生の提出物、コメントを付けたドキュメント、口頭のオーディオフィードバックのようにフィードバックコメントを残したり、ファイルをアップロードすることができます。課題は数字またはカスタム評価尺度、ルーブリックのような高度な評定方法を使って評定することができます。最終評点は評定表に記録されます。';
$string['modulenameplural'] = '課題';
$string['moreusers'] = 'さらに {$a} 名 ...';
$string['multipleteams'] = '2つ以上のグループのメンバー';
$string['multipleteamsgrader'] = '2つ以上のグループのメンバーのため、提出することはできません。';
$string['mysubmission'] = '私の提出:';
$string['newsubmissions'] = '課題が提出されました';
$string['noattempt'] = '未提出';
$string['nofiles'] = 'ファイルなし';
$string['nofilters'] = 'フィルタなし';
$string['nograde'] = '評点なし';
$string['nolatesubmissions'] = '提出遅延は受け付けられません。';
$string['nomoresubmissionsaccepted'] = '延長を許可された参加者のみ許可されます。';
$string['noonlinesubmissions'] = 'この課題においてあなたがオンラインで提出するものはありません。';
$string['nosavebutnext'] = '次へ';
$string['nosubmission'] = 'この課題に関して提出されているものはありません。';
$string['nosubmissionsacceptedafter'] = '次の日時以降、提出は許可されません';
$string['noteam'] = 'どのグループのメンバーでもない';
$string['noteamgrader'] = 'どのグループのメンバーでもないため提出することはできません。';
$string['notgraded'] = '未評定';
$string['notgradedyet'] = '未評定';
$string['notifications'] = '通知';
$string['notsubmittedyet'] = '未提出';
$string['nousers'] = 'ユーザなし';
$string['nousersselected'] = 'ユーザ未選択';
$string['numberofdraftsubmissions'] = '下書き';
$string['numberofparticipants'] = '参加者';
$string['numberofsubmissionsneedgrading'] = '要評定';
$string['numberofsubmittedassignments'] = '提出';
$string['numberofteams'] = 'グループ';
$string['offline'] = 'オンライン提出不要';
$string['open'] = 'オープン';
$string['outlinegrade'] = '評点: {$a}';
$string['outof'] = '{$a->current} / {$a->total}';
$string['overdue'] = '<font color="red">課題は次の時間を超過しています: {$a}</font>';
$string['page-mod-assign-view'] = '課題モジュールメインおよび提出ページ';
$string['page-mod-assign-x'] = 'すべての課題モジュールページ';
$string['paramtimeremaining'] = '{$a} 残り';
$string['participant'] = '参加者';
$string['pluginadministration'] = '課題管理';
$string['pluginname'] = '課題';
$string['preventsubmissionnotingroup'] = '提出にグループを必要とする';
$string['preventsubmissionnotingroup_help'] = 'この設定を有効にした場合、グループのメンバーではないユーザは提出することはできません。';
$string['preventsubmissions'] = 'この課題にユーザがさらに提出することを防ぎます。';
$string['preventsubmissionsshort'] = '提出の変更を禁止する';
$string['previous'] = '前へ';
$string['quickgrading'] = 'クイック評定';
$string['quickgradingchangessaved'] = '評定の変更が保存されました。';
$string['quickgrading_help'] = 'クイック評定において、あなたは提出テーブル内に直接評点 (およびアウトカム) を入力することができます。クイック評定には高度な評定との互換性がありません。複数の評定者がいる場合、お勧めできません。';
$string['quickgradingresult'] = 'クイック評定';
$string['recordid'] = 'ID';
$string['reopenuntilpassincompatiblewithblindmarking'] = '学生の個人情報が公開されるまで評定表に評点がリリースされないため、「合格するまで自動」オプションはブラインド評定とは互換性がありません。';
$string['requireallteammemberssubmit'] = 'グループメンバーすべての提出を必要とする';
$string['requireallteammemberssubmit_help'] = 'この設定を有効にした場合、グループ提出が提出されたとみなされるには学生グループメンバーすべてが提出ボタンをクリックする必要があります。無効にした場合、学生グループのメンバーの誰かが提出ボタンをクリックした時点でグループ提出は提出したとみなされます。';
$string['requiresubmissionstatement'] = '学生に提出同意書の承諾を求める';
$string['requiresubmissionstatement_help'] = 'この課題提出すべてにおいて学生に提出同意書の承諾を求めます。';
$string['revealidentities'] = '学生の個人情報を公開する';
$string['revealidentitiesconfirm'] = 'この課題に関して本当に学生の個人情報を公開してもよろしいですか? この処理を元に戻すことはできません。学生の個人情報が公開された場合、評定表に評点がリリースされます。';
$string['reverttodraft'] = '提出を下書きステータスに戻す';
$string['reverttodraftforstudent'] = '学生の提出を下書きに戻す: (id={$a->id}, フルネーム={$a->fullname})';
$string['reverttodraftshort'] = '提出を下書きに戻す';
$string['reviewed'] = 'レビュー済み';
$string['saveallquickgradingchanges'] = 'すべてのクイック評定の変更を保存する';
$string['saveandcontinue'] = '保存して続ける';
$string['savechanges'] = '変更を保存する';
$string['savegradingresult'] = '評定';
$string['savenext'] = '保存して次を表示する';
$string['savingchanges'] = '変更の保存 ...';
$string['scale'] = '評価尺度';
$string['search:activity'] = '課題 - 活動情報';
$string['selectedusers'] = '選択済みユーザ';
$string['selectlink'] = '選択 ...';
$string['selectuser'] = '{$a} を選択する';
$string['sendlatenotifications'] = '提出遅延に関して評定者に通知する';
$string['sendlatenotifications_help'] = 'この設定を有効にした場合、学生が課題提出に遅れた時点で評定者 (通常は教師)  にメッセージが送信されます。メッセージ送信方法を設定することができます。';
$string['sendnotifications'] = '評定者に提出を通知する';
$string['sendnotifications_help'] = 'この設定を有効にした場合、学生が課題を早く、時間どおりまたは遅く提出した時点で評定者 (通常教師) にメッセージが送信されます。メッセージ送信方法を設定することができます。';
$string['sendstudentnotifications'] = '学生に通知する';
$string['sendstudentnotificationsdefault'] = '「学生に通知する」のデフォルト設定';
$string['sendstudentnotificationsdefault_help'] = '評定フォームの「学生に通知する」チェックボックスのフォルト値を設定します。';
$string['sendstudentnotifications_help'] = 'この設定を有効にした場合、評点の更新またはフィードバックに関して学生にメッセージが送信されます。';
$string['sendsubmissionreceipts'] = '学生に提出受領書を送信する';
$string['sendsubmissionreceipts_help'] = 'この設定では学生への提出受領書を有効にします。正常に課題が提出された場合、学生は毎回通知を受信します。';
$string['setmarkerallocationforlog'] = '採点割り当てを設定する: (id={$a->id}, フルネーム={$a->fullname}, 採点者={$a->marker})';
$string['setmarkingallocation'] = '割り当て採点者を設定する';
$string['setmarkingworkflowstate'] = '採点ワークフロー状態を設定する';
$string['setmarkingworkflowstateforlog'] = '採点ワークフロー状態を設定する: (id={$a->id}, フルネーム={$a->fullname}, 状態={$a->state})';
$string['settings'] = '課題設定';
$string['showrecentsubmissions'] = '最近の課題提出を表示する';
$string['status'] = 'ステータス';
$string['studentnotificationworkflowstateerror'] = '学生に通知するにはワークフロー状態を「リリース済み」にする必要があります。';
$string['submission'] = '提出課題';
$string['submissioncopiedhtml'] = '<p>あなたは「 {$a->assignment} 」の前回の課題提出をコピーしました。</p>
<p>あなたの<a href="{$a->url}">課題提出</a>に関するステータスを確認することができます。</p>';
$string['submissioncopiedsmall'] = 'あなたは「 {$a->assignment} 」の前回の課題提出をコピーしました。';
$string['submissioncopiedtext'] = 'あなたは「 {$a->assignment} 」の前回の課題提出をコピーしました。

あなたの課題提出に関するステータスは下記で確認することができます:

{$a->url}';
$string['submissiondrafts'] = '学生に提出ボタンのクリックを求める';
$string['submissiondrafts_help'] = 'この設定を有効にした場合、学生は最終提出であると宣言するために「提出」ボタンをクリックする必要があります。この設定により学生はシステム上に下書きバージョンの課題を保持することができるようになります。学生の課題提出後、この設定が「No」から「Yes」に変更された場合、提出は最終提出として再評定されます。';
$string['submissioneditable'] = '学生はこの提出を編集できます。';
$string['submissionempty'] = '提出された課題はありません。';
$string['submissionlog'] = '学生: {$a->fullname} / ステータス: {$a->status}';
$string['submissionmodified'] = 'あなたには既存の提出データがあります。このページを離れて再度お試しください。';
$string['submissionmodifiedgroup'] = '提出が誰かに修正されました。このページを離れて再度お試しください。';
$string['submissionnotcopiedinvalidstatus'] = '再オープン後に編集されたため、提出はコピーされませんでした。';
$string['submissionnoteditable'] = '学生はこの提出を編集できません。';
$string['submissionnotready'] = 'この課題はまだ提出することができません:';
$string['submissionplugins'] = '提出プラグイン';
$string['submissionreceipthtml'] = '<p>あなたは課題「 {$a->assignment} 」への提出を送信しました。</p>
<p>あなたの<a href="{$a->url}">提出課題</a>のステータスをご覧ください。</p>';
$string['submissionreceiptotherhtml'] = 'あなたの「 {$a->assignment} 」の課題提出が送信されました。<br /><br />あなたの<a href="{$a->url}">課題提出</a>ステータスを確認することができます。';
$string['submissionreceiptothersmall'] = 'あなたの「 {$a->assignment} 」の課題提出が送信されました。';
$string['submissionreceiptothertext'] = 'あなたの「 {$a->assignment} 」の課題提出が送信されました。

あなたの課題提出ステータスを確認することができます:

{$a->url}';
$string['submissionreceipts'] = '提出受領書を送信する';
$string['submissionreceiptsmall'] = 'あなたは課題「 {$a->assignment} 」への提出を送信しました。';
$string['submissionreceipttext'] = 'あなたは課題「 {$a->assignment} 」への提出を送信しました。

あなたの課題提出ステータスを確認することができます:

     {$a->url}';
$string['submissions'] = '提出課題';
$string['submissionsclosed'] = '提出は終了しています。';
$string['submissionsettings'] = '提出設定';
$string['submissionslocked'] = 'この課題は提出を受け付けていません。';
$string['submissionslockedshort'] = '提出変更不許可';
$string['submissionsnotgraded'] = '未評定の提出: {$a}';
$string['submissionstatement'] = '提出同意書';
$string['submissionstatementacceptedlog'] = 'ユーザ {$a} によって承諾された提出同意書';
$string['submissionstatementdefault'] = '他の人の作品であると私が認めたものを除き、この課題は私自身の作業の結果です。';
$string['submissionstatement_help'] = '課題提出同意書';
$string['submissionstatus'] = '提出ステータス';
$string['submissionstatus_'] = '提出なし';
$string['submissionstatus_draft'] = '下書き (未提出)';
$string['submissionstatusheading'] = '提出ステータス';
$string['submissionstatus_marked'] = '評定済み';
$string['submissionstatus_new'] = '提出なし';
$string['submissionstatus_reopened'] = '再オープン';
$string['submissionstatus_submitted'] = '評定のために提出済み';
$string['submissionsummary'] = '{$a->status} - 最終更新日時: {$a->timemodified}';
$string['submissionteam'] = 'グループ';
$string['submissiontypes'] = '提出タイプ';
$string['submitaction'] = '提出';
$string['submitassignment'] = '課題を提出する';
$string['submitassignment_help'] = 'この課題を提出した時点であなたはこれ以上変更できないようになります。';
$string['submitforgrading'] = '評定のために送信する';
$string['submitted'] = '提出';
$string['submittedearly'] = '課題は {$a} 早く提出されました。';
$string['submittedlate'] = '課題は {$a} 遅く提出されました。';
$string['submittedlateshort'] = '{$a} 遅く提出';
$string['subplugintype_assignfeedback'] = 'フィードバックプラグイン';
$string['subplugintype_assignfeedback_plural'] = 'フィードバックプラグイン';
$string['subplugintype_assignsubmission'] = '提出プラグイン';
$string['subplugintype_assignsubmission_plural'] = '提出プラグイン';
$string['teamname'] = 'チーム: {$a}';
$string['teamsubmission'] = '学生がグループで提出する';
$string['teamsubmissiongroupingid'] = '学生グループのグルーピング';
$string['teamsubmissiongroupingid_help'] = 'これは課題が学生グループのグループを探すために使用されるグルーピングです。設定されない場合、一連のデフォルトのグループが使用されます。';
$string['teamsubmission_help'] = 'この設定を有効にした場合、学生はグループのデフォルト設定またはカスタムグルーピングに基づきチームに分けられます。グループ提出はグループメンバーに共有されます。すべてのグループメンバーはそれぞれ提出の変更を閲覧することができます。';
$string['textinstructions'] = '課題インストラクション';
$string['timemodified'] = '最終更新日時';
$string['timeremaining'] = '残り時間';
$string['timeremainingcolon'] = '残り時間: {$a}';
$string['togglezoom'] = '範囲のズームイン/ズームアウト';
$string['ungroupedusers'] = '設定「提出にグループを必要とする」が有効にされているため、そして何名かのユーザがグループのメンバーではないため、または2つ以上のグループメンバーであるため、提出することはできません。';
$string['unlimitedattempts'] = '無制限';
$string['unlimitedattemptsallowed'] = '無制限の提出が許可されました。';
$string['unlimitedpages'] = '無制限';
$string['unlocksubmissionforstudent'] = '学生の提出を許可する: (id={$a->id}, フルネーム={$a->fullname})';
$string['unlocksubmissions'] = '提出をロック解除する';
$string['unsavedchanges'] = '未保存の変更';
$string['unsavedchangesquestion'] = '未保存の評定またはフィードバックの変更があります。変更を保存して続けますか?';
$string['updategrade'] = '評点を更新する';
$string['updatetable'] = '保存してテーブルを更新する';
$string['upgradenotimplemented'] = 'プラグイン ({$a->type} {$a->subtype}) にはアップグレードは実装されていません。';
$string['userextensiondate'] = '次の日時まで延長が許可されました: {$a}';
$string['usergrade'] = 'ユーザガイド';
$string['useridlistnotcached'] = 'どの提出に対するものか決定できなかったため、評定の変更は保存されませんでした。';
$string['userswhoneedtosubmit'] = '提出が必要なユーザ: {$a}';
$string['validmarkingworkflowstates'] = '有効な採点ワークフローステータス';
$string['viewadifferentattempt'] = '異なる提出を表示する';
$string['viewbatchmarkingallocation'] = '採点割り当てページのバッチ設定を表示します。';
$string['viewbatchsetmarkingworkflowstate'] = '採点ワークフローステータスページのバッチ設定を表示します。';
$string['viewfeedback'] = 'フィードバックを表示する';
$string['viewfeedbackforuser'] = 'ユーザのフィードバックを表示する: {$a}';
$string['viewfull'] = '詳細表示';
$string['viewfullgradingpage'] = 'フィードバックを提供するためにフル評定ページを開きました。';
$string['viewgradebook'] = '評定表を表示する';
$string['viewgrading'] = 'すべての提出を表示する';
$string['viewgradingformforstudent'] = '学生の評定ページを閲覧しました: (id={$a->id}, fullname={$a->fullname})。';
$string['viewownsubmissionform'] = '自分の提出課題ページを閲覧しました。';
$string['viewownsubmissionstatus'] = '自分の提出ステータスページを閲覧しました。';
$string['viewrevealidentitiesconfirm'] = '学生の個人情報公開確認ページを表示します。';
$string['viewsubmission'] = '提出を表示する';
$string['viewsubmissionforuser'] = 'ユーザの提出を表示する: {$a}';
$string['viewsubmissiongradingtable'] = '提出に関する評定表を閲覧しました。';
$string['viewsummary'] = '概要表示';
$string['workflowfilter'] = 'ワークフローフィルタ';
$string['xofy'] = '{$a->x} / {$a->y}';
