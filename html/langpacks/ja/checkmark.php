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
 * Strings for component 'checkmark', language 'ja', version '4.5'.
 *
 * @package     checkmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = '欠席';
$string['activateindividuals'] = '個別機能を有効にする';
$string['activitydate:due'] = '期限:';
$string['activitydate:opened'] = '開始済み:';
$string['activitydate:opens'] = '開始:';
$string['addnewgroupoverride'] = 'グループオーバーライドを追加する';
$string['addnewuseroverride'] = 'ユーザオーバーライドを追加する';
$string['addsubmission'] = '提出を追加する';
$string['all'] = 'すべて';
$string['all_absent'] = '欠席者全員';
$string['all_attendant'] = '出席者者全員';
$string['all_unknown'] = 'すべての出欠状況不明者';
$string['all_with_presentationgrading'] = 'すべての参加者 (プレゼンテーション評定あり)';
$string['all_without_presentationgrading'] = 'すべての参加者 (プレゼンテーション評定なし)';
$string['allowresubmit'] = '再提出を許可する';
$string['allowresubmit_help'] = 'この設定を有効にした場合、学生は評定後にチェックマークを (再評定のために) 再提出できます。';
$string['allowsubmissionsfromdate'] = '提出開始';
$string['allowsubmissionsfromdate_help'] = 'この設定を有効にした場合、学生はこの期日より前に提出できません。無効の場合、学生はすぐに提出を開始できます。';
$string['alreadygraded'] = 'あなたの提出はすでに評定済みであり、再提出は認められません。';
$string['alwaysshowdescription'] = '常に説明を表示する';
$string['alwaysshowdescription_help'] = 'この設定を無効にした場合、上の課題説明は「提出開始」日にのみ学生に表示されます。';
$string['attendance'] = '出欠';
$string['attendance_help'] = 'カラムステータスは学生の出欠状況を表します:<br /><ul><li>? - 不明</li><li>✓ - 出席中</li><li>✖ - 欠席</li></ul>';
$string['attendance_not_set_grade_locked'] = '評価表で評点がロックまたはオーバーライドされているため、{$a} の出欠を設定できませんでした。';
$string['attendancegradebook'] = '評定表に出欠を記録する';
$string['attendancegradebook_help'] = 'あなたがこの機能を有効にした場合、出欠は別の評定項目として評定表に表示されます:
<ul>
<li>空の評定 - ステータス不明</li>
<li>評定 0 - 欠席の場合</li>
<li>評定 1 -  出席の場合</li>
</ul>';
$string['attendancegradelink'] = '出欠を提出評定の自動計算と連動させる';
$string['attendancegradelink_help'] = '保存された出欠を自動的に計算されたチェックマークの評定にリンクさせるにはこの設定を有効にしてください。その人の出欠にマークが付けられた場合のみ、チェックマークモジュールの評点が集計されます。';
$string['attendancegradelink_hint'] = 'メモ: 自動計算された評点は出欠にリンクされます。';
$string['attendancestatus'] = 'あなたの出欠の現在のステータス';
$string['attendant'] = '出欠';
$string['autograde_confirm'] = 'あなたは <strong>{$a->total}</strong> の評点およびコメントを更新しようとしています。<strong>{$a->graded}</strong> の前の評点およびコメントは上書きされます。';
$string['autograde_confirm_continue'] = '本当に続けてもよろしいですか?';
$string['autograde_error'] = '自動評定中にエラーが発生しました。';
$string['autograde_failed'] = '自動評定に失敗しました!';
$string['autograde_non_numeric_grades'] = '自動評定に数値で最大評点を設定する必要があります。これはインスタンス設定で設定できます。';
$string['autograde_notsupported'] = 'この尺度は自動評定でサポートされていません。';
$string['autograde_one_success'] = '自動評定が1件の提出を正常に更新しました。';
$string['autograde_strall'] = 'すべての提出';
$string['autograde_strchanged'] = '自動評定により <strong>{$a}</strong> 名の学生の評点が変更されます。';
$string['autograde_strmultiplesubmissions'] = '{$a} 提出';
$string['autograde_stronesubmission'] = '1 提出';
$string['autograde_strreq'] = '評定更新が必要な提出';
$string['autograde_success'] = '正常に自動評定されました! {$a} 件の提出が更新されました。';
$string['autograde_users_with_unknown_attendance'] = '注意: {$a} 件の提出は出欠状況が不明なため自動評定できませんでした!';
$string['autogradebuttonstitle'] = 'チェックマーク {$a} の提出評点を計算する';
$string['availability'] = '利用';
$string['availabledate'] = '提出開始';
$string['availabledate_help'] = '提出期間の開始日です。この日を過ぎても提出可能です。';
$string['bulk'] = 'バルク処理';
$string['bulk_help'] = 'ここであなたは「出欠設定」「自動評定」またはその組み合わせのようなアクションを複数のエントリに対して実行できます。<br />
<ul>
<li><strong>出席としてマークする:</strong> 選択されたユーザを出席としてマークします。</li>
<li><strong>欠席としてマークする:</strong> 選択されたユーザを欠席としてマークします。</li>
<li><strong>自動評定する:</strong> 選択されたユーザの評点を自動計算します。</li>
<li><strong>出席としてマークおよび評定する:</strong> 選択されたユーザを出席としてマークして、直後に自動評定します。</li>
<li><strong>欠席としてマークおよび評定する:</strong> 選択されたユーザを欠席としてマークして、直後に自動評定します。</li>
</ul><br />
注意: 出欠が評定にリンクされている場合、チェックされた例に対して出席したユーザにのみ評点が与えられます。
欠席したユーザは0点で評定されて、出欠が不明なユーザは一切がスキップされます!';
$string['bulk_no_users_selected'] = 'あなたはユーザを選択していません。下の表の左のカラムのチェックボックスで必要なユーザを選択してください。';
$string['calendardue'] = '{$a} は期限です。';
$string['calendargradingdue'] = '{$a} は評定期限です。';
$string['calendarteachers'] = '教師のカレンダーに期限日を表示する';
$string['calendarteachers_help'] = '教師の場合、任意でチェックマークの期限日をカレンダーに表示できます。学生の場合、デフォルトでカレンダーに期限日が表示されます。注意: コースに多くのチェックマーク課題がある場合、カレンダービューが煩雑になることがあります。';
$string['cannotviewcheckmark'] = 'あなたはこのチェックマークを閲覧できません。';
$string['cantfixevent'] = 'IDが {$a->id} および名称が {$a->name} のイベントを修正できませんでした（一致件数: {$a->matches})。';
$string['cfg_nowarning'] = '警告なし';
$string['cfg_pdfexampleswarning'] = 'PDF書き出しの警告を表示する例数';
$string['cfg_pdfexampleswarning_desc'] = '適切なPDF書き出しが保証されないという警告が表示される最小の例数です。あなたが警告を一切表示させたくない場合、またはあなたのインストレーションに合わせて微調整したい場合を除き、通常変更する必要はありません。';
$string['checkmark:addinstance'] = 'チェックマークインスタンスを追加する';
$string['checkmark:grade'] = 'チェックマークを評定する';
$string['checkmark:gradepresentation'] = 'プレゼンテーション評定';
$string['checkmark:manageoverrides'] = 'チェックマークオーバーライドを管理する';
$string['checkmark:submit'] = 'チェックマークを提出する';
$string['checkmark:trackattendance'] = '学生の出欠を追跡する';
$string['checkmark:view'] = 'チェックマークを閲覧する';
$string['checkmark:view_preview'] = 'プレビュー';
$string['checkmark_overviewsummary'] = 'あなたは次をチェックしました: {$a->checked_examples} / {$a->total_examples} 例 ({$a->checked_grade} / {$a->total_grade} points)<br />{$a->grade}<br />';
$string['checkmark_overviewsummary_nograde'] = 'あなたは次をチェックしました: {$a->checked_examples} / {$a->total_examples} 例<br />{$a->grade}<br />';
$string['checkmark_summary'] = 'あなたは <span id="examples">{$a->checked_examples}</span> / {$a->total_examples} の例をチェックしました。<br />(<span id="grade">{$a->checked_grade}</span> 最大 {$a->total_grade} 点)';
$string['checkmarkdetails'] = 'チェックマーク詳細';
$string['checkmarkisdue'] = 'チェックマーク課題は期限です。';
$string['checkmarkmail'] = '{$a->grader} が「 {$a->checkmark} 」のあなたのチェックマーク提出にコメントを投稿しました。

あなたのチェックマーク提出にコメントが追加されているのを確認できます:

    {$a->url}';
$string['checkmarkmailhtml'] = '{$a->grader} が「 {$a->checkmark} 」のあなたのチェックマーク提出にコメントを投稿しました。
<br /><br />
あなたの<a href="{$a->url}">チェックマーク提出</a>にコメントが追加されているのを確認できます。';
$string['checkmarkmailsmall'] = '{$a->grader} が「 {$a->checkmark} 」のあなたのチェックマーク提出にコメントを投稿しました。あなたのチェックマーク提出にコメントが追加されているのを確認できます。';
$string['checkmarkname'] = 'チェックマーク名';
$string['checkmarks'] = 'チェックマーク';
$string['checkmarkstatstitle'] = 'コース概要チェックマーク';
$string['checkmarksubmission'] = 'チェックマーク提出';
$string['checksummary'] = 'チェックマーク概要';
$string['choose'] = '選択したものに対して ...';
$string['choosegradingaction'] = '評定操作';
$string['comment'] = 'コメント';
$string['completiondetail:submit'] = '提出する';
$string['completionsubmit'] = '学生はこの活動を完了するために提出する必要がある';
$string['configshowrecentsubmissions'] = '最近の活動レポートで誰でも投稿の通知を確認できます。';
$string['couldfixevent'] = 'ID {$a->id} および名称 {$a->name} のイベントを正常に修正できました。';
$string['count_individuals_mismatch'] = '個々の名称 ({$a->namecount}) の量と個々の評定 ({$a->gradecount}) の量が一致しません!';
$string['coursemisconf'] = 'コース設定が正しくありません。';
$string['currentgrade'] = '評定表の現在の評点';
$string['custom_settings'] = 'カスタム設定';
$string['cutoffdate'] = '遮断日';
$string['cutoffdate_help'] = 'この設定を有効にした場合、この期日経過後、提出期限を延長しなければ提出は受け付けられません。';
$string['cutoffdatecolon'] = '遮断日: {$a}';
$string['cutoffdatefromdatevalidation'] = '遮断日は提出開始日前には設定できません。';
$string['cutoffdatevalidation'] = '遮断日は期限前には設定できません。';
$string['data_preview'] = 'データプレビュー';
$string['data_preview_help'] = '印刷プレビューでカラムの表示または非表示を切り替えるには[+]または[-]をクリックしてください。';
$string['data_settings'] = '印刷設定';
$string['datasettingstitle'] = 'データ設定';
$string['dates_overwritten'] = '日付が上書きされました。';
$string['defaultsettings'] = 'デフォルトチェックマーク設定';
$string['defaultsettings_help'] = 'これらの設定ではすべての新しいチェックマーク演習のデフォルトを定義します。';
$string['deletealloverrides'] = 'すべての日付オーバーライドを削除する';
$string['deleteallsubmissions'] = 'すべての提出を削除する';
$string['description'] = '説明';
$string['disabled'] = '無効';
$string['downloadall'] = 'すべてのチェックマークをZIP形式でダウンロードする';
$string['due'] = 'チェックマーク期限';
$string['duedate'] = '期限';
$string['duedate_help'] = 'これは課題の提出期限です。この日以降も提出は許可されますが、この日以降に提出された課題は遅延としてマークされます。特定の日以降の提出を防ぐには課題遮断日を設定してください。';
$string['duedatecolon'] = '期限日: {$a}';
$string['duedateno'] = '期限日なし';
$string['duedatevalidation'] = '提出期限は提出開始日前には設定できません。';
$string['duplicateoverride'] = 'オーバーライドを複製する';
$string['early'] = '{$a} 早い';
$string['editmysubmission'] = '私の提出を編集する';
$string['editoverride'] = 'オーバーライドを編集する';
$string['element_disabled'] = '以下の要素は既存の投稿のため無効にされています。';
$string['elements_disabled'] = '以下の要素は既存の投稿のため無効にされています。';
$string['emailstudents'] = '学生にメール通知する';
$string['emailteachermail'] = '{$a->username} が「 {$a->checkmark} 」のチェックマーク提出を更新しました ({$a->dayupdated}  {$a->timeupdated})。

以下で確認可能です:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} が「 {$a->checkmark} 」のチェックマーク提出を更新しました ({$a->dayupdated}  {$a->timeupdated})。<br /><br />
<a href="{$a->url}">ウェブサイトで確認できます</a>。';
$string['emailteachers'] = '教師にメール通知する';
$string['emailteachers_help'] = 'この設定を有効にした場合、学生が提出にチェックマークを追加または更新するたびに教師はメール通知を受信します。

これは特定のチェックマークを評定できる教師のみに通知されます。例えばコースが分離グループを使用している場合、特定のグループに制限された教師は他のグループの学生に関する通知を受信できません。';
$string['emptysubmission'] = 'あなたはまだ何も提出していません。';
$string['enablenotification'] = '通知を送信する';
$string['enablenotification_help'] = 'この設定を有効にした場合、チェックマーク提出 (または対応するプレゼンテーション) が評定されるか、出欠がマークされた時点で学生に通知されます。';
$string['end_of_submission_for'] = '{$a} の提出終了';
$string['errornosubmissions'] = 'ダウンロードできる提出はありません。';
$string['eventexamplecreated'] = '例が作成されました。';
$string['eventexampledeleted'] = '例が削除されました。';
$string['eventexampleupdated'] = '例が更新されました。';
$string['eventgradeupdated'] = '評定が更新されました。';
$string['eventoverridecreated'] = 'チェックマークオーバーライドが作成されました。';
$string['eventoverridedeleted'] = 'チェックマークオーバーライドが削除されました。';
$string['eventoverrideprioritychanged'] = 'チェックマークグループオーバーライドの優先順位が入れ替えられました。';
$string['eventoverrideupdated'] = 'チェックマークオーバーライドが更新されました。';
$string['eventsubmissionoverwritten'] = '提出が上書きされました。';
$string['eventsubmissionsexported'] = '提出がエクスポートされました。';
$string['eventsubmissionupdated'] = '提出が更新されました。';
$string['eventviewprintpreview'] = '印刷プレビューが表示されました。';
$string['eventviewsubmissions'] = '提出が表示されました。';
$string['example_preview_title'] = '例プレビュー';
$string['example_preview_title_help'] = '例プレビューではチェックマークオプションの概要を示しています。';
$string['examplecount_changed_after_submission'] = '例数は投稿があった時点で変更できなくなります。';
$string['examplegrades'] = '個別評点';
$string['examplegrades_help'] = 'すべての例の重みを定義します。これらは括弧で指定された区切り文字で区切られます。';
$string['examplenames'] = '個別名';
$string['examplenames_help'] = '例名を定義します。これらは括弧で指定された区切り文字で区切られます。';
$string['exampleprefix'] = '個別接頭辞';
$string['exampleprefix_help'] = '任意ですべての個別名の前に自動的に付加される個別接頭辞を入力してください。このフィールドは空のままにできます。';
$string['export'] = 'エクスポート';
$string['exporttemplate_grades'] = 'シンプル評定リスト';
$string['exporttemplate_grades_extended'] = '拡張評定リスト';
$string['exporttemplate_signature'] = 'シンプル署名リスト';
$string['exporttemplate_signature_extended'] = '拡張署名リスト';
$string['exporttemplates'] = 'テンプレート';
$string['exporttemplates_help'] = '定義済みテンプレートによるクイックエクスポート<br />
<ul>
    <li><strong>カスタム評定リスト</strong><br />
        テンプレートを使用しないため、すべての設定は手動で実施する必要があります。</li>
    <li><strong>シンプル評定リスト:</strong><br />
        縦書き、小フォント、ヘッダ/フッタ付き、氏名は1行で表示します。<br />
        次のカラムを含みます: [フルネーム, 例, 評点］</li>
    <li><strong>拡張評定リスト:</strong><br />
        横長、小フォント、ヘッダ/フッタ付き、氏名は1行で表示します。<br />
        次のカラムを含みます: [フルネーム, IDナンバー, 例, チェック, 評点]</li>
    <li><strong>シンプル署名リスト:</strong><br />
        縦書き、小フォント、ヘッダ/フッタ付き、氏名は1行で表示します。<br />
        次のカラムを含みます: [フルネーム, 例, 署名］</li>
    <li><strong>拡張署名リスト:</strong><br />
        横長、小フォント、ヘッダ/フッタ付き、氏名は1行で表示します。<br />
        次のカラムを含みます: [フルネーム, IDナンバー, 例, チェック, 評点, 署名]</li>
</ul>';
$string['extended_until'] = '{$a} まで延長';
$string['extensionduedate'] = '延長期限';
$string['extensionnotafterduedate'] = '延長日は期限後に設定する必要があります。';
$string['extensionnotafterfromdate'] = '延長日は提出開始日以降に設定してください。';
$string['failedupdatefeedback'] = 'ユーザ {$a} の投稿コメントの更新に失敗しました。';
$string['feedback'] = 'フィードバック';
$string['feedbackfromteacher'] = '{$a} からのコメント';
$string['feedbackupdated'] = '{$a} 人の投稿コメントが更新されました。';
$string['filter'] = 'フィルタ';
$string['filtergrantedextension'] = '延長許可';
$string['filternotsubmitted'] = '未提出';
$string['firstexamplenumber'] = '最初の例番号';
$string['firstexamplenumber_help'] = '最初の例の番号です。次の例ではその前の例の数を1増やします。';
$string['flexiblenaming'] = '個別名/評点';
$string['flexiblenaming_help'] = 'この設定を有効にした場合、それぞれの例に個別名および評点が使用されます。';
$string['forced'] = '教師による上書き';
$string['forcesinglelinenames'] = '単一行名を強制する';
$string['forcesinglelinenames_help'] = '<p>名称を1行でPDFに書き出すよう強制します。</p>
<p><i>注意:</i> カラムが多過ぎたり、名称が長過ぎたりした場合、歪んで読めなくなります。このような場合、重要ではない列をいくつか隠して、名称のためのスペースを確保してください。</p>';
$string['format'] = 'フォーマット';
$string['gotoactivity'] = '活動に移動する';
$string['grade'] = '評点';
$string['grade_attendence_name'] = '出席点';
$string['grade_automatically'] = '自動評定';
$string['grade_checks_name'] = '評定をチェックする';
$string['grade_help'] = '個々の関数が有効にされている場合、評点はすべての評点例の合計 (最大100) になる必要があります。<br />あなたが標準的な例を使用する場合、評点は例数の整数倍でなければなりません。その場合、例ごとの評点は自動的に調整されます。<br />有効化されたJavaScriptでは、個々の関数を使用する際に評点が自動的に選択されます。有効化されたJavaScriptで標準例を使用する場合、例数の整数倍のみが受理されます。';
$string['grade_mismatch'] = '評点は例の量の整数倍になる必要があります!';
$string['grade_presentation_name'] = 'プレゼンテーション評定';
$string['gradebutton'] = '評定';
$string['graded'] = '評定済み';
$string['gradedon'] = '評定';
$string['gradesum_mismatch'] = '個別の評点合計が選択された合計評点 ({$a->gradesum}/{$a->maxgrade}) と一致しません!';
$string['gradingdue'] = '次の設定までに私にリマインドする';
$string['gradingdue_help'] = '提出課題の評定完了予定日です。この日付は教師へのダッシュボード通知の優先順位付けに使用されます。';
$string['gradingdueduedatevalidation'] = '「次の設定までに私にリマインドする」は期日より前に設定できません。';
$string['gradingduefromdatevalidation'] = '「次の設定までに私にリマインドする」は提出開始日前には設定できません。';
$string['gradingstatus'] = '評定ステータス';
$string['gradingsummary'] = '評定概要';
$string['grant_extension'] = '延長許可';
$string['group_dates_overridden'] = 'グループ {$a} の日付がオーバーライドされました!';
$string['groupoverride_edit'] = 'グループ {$a} のオーバーライドを編集する';
$string['groupoverrides'] = 'グループオーバーライド';
$string['groupsnone'] = 'あなたがアクセスできるグループはありません。';
$string['guestnosubmit'] = '申し訳ございません、ゲストはチェックマークを提出できません。あなたの回答を送信するにはログイン/登録が必要です。';
$string['guestnoupload'] = '申し訳ございません、ゲストはアップロードを許可されていません。';
$string['hidealltoggle'] = 'すべての例を秘匿する';
$string['hideexamples'] = '提出テーブルの例を秘匿する';
$string['hideintro'] = '「利用可能」日まで説明を秘匿する';
$string['hideintro_help'] = 'この設定を有効にした場合、チェックマーク説明は「利用可能」日まで秘匿されます。チェックマーク名のみが表示されます。';
$string['inactiveoverridehelp'] = '* 学生に課題を提出するための正しいグループまたはロールがありません。';
$string['informstudents'] = '通知を送信する';
$string['informstudents_help'] = 'この設定を有効にした場合、参加者は出欠状況に関する通知を受信します。';
$string['introattachments'] = '追加ファイル';
$string['introattachments_help'] = '回答テンプレート等、チェックマークで使用するファイルを追加できます。ファイルのダウンロードリンクはチェックマークページの説明文の下に表示されます。';
$string['invalidcheckmark'] = '不正確なチェックマーク';
$string['invalidid'] = 'チェックマークが正しくありません。';
$string['invalidoverrideid'] = '無効なオーバーライドIDです。';
$string['invaliduserid'] = '無効なユーザIDです。';
$string['itemstocount'] = 'カウント';
$string['lastgrade'] = '最終評定';
$string['late'] = '{$a} 遅い';
$string['latesubmissions'] = '遅い提出';
$string['latesubmissionsaccepted'] = '{$a} まで許可';
$string['latesubmissionwarning'] = '提出期限を過ぎていたため、提出は却下されました。';
$string['manycolumnsinpdfwarning'] = '注意: 例数が多くスペースが限られているため、PDFへの適切なエクスポートは保証できません。不要なカラムを隠すか、代わりにXLSXまたはODSエクスポートを使用してスプレッドシートアプリケーションでレイアウトを調整してください。';
$string['maximumgrade'] = '最大評点';
$string['messageprovider:checkmark_updates'] = 'チェックマーク通知';
$string['modulename'] = 'チェックマーク';
$string['modulename_help'] = 'チェックマークで教師は学生がチェックマークを付けなければならない課題を指定できます。';
$string['modulenameplural'] = 'チェックマーク';
$string['needattendanceentrycount'] = '要出欠レコード';
$string['newsubmissions'] = 'チェックマーク提出';
$string['noattempts'] = 'このチェックマークは受験されていません。';
$string['nochangeviolation'] = 'あなたは少なくとも1つのチェックマーク設定をオーバーライドする必要があります。';
$string['nocheckmarks'] = 'まだチェックマークはありません。';
$string['noclose'] = '終了日なし';
$string['nogroupoverrridemessage'] = '現在、グループオーバーライドはありません。';
$string['nolatesubmissions'] = '遅い提出は受け付けられません。';
$string['nomoresubmissions'] = 'これ以上の提出は認められません。';
$string['nomoresubmissionsaccepted'] = '延長を許可された参加者にのみ許可されます。';
$string['nonnegativeintrequired'] = '0以上の整数でなければなりません!';
$string['noopen'] = '開始日なし';
$string['nooverridedata'] = 'あなたは少なくとも1つの課題設定をオーバーライドする必要があります。';
$string['norequiregrading'] = '評定が必要なチェックマークはありません。';
$string['nostudents'] = '表示するユーザはいません!';
$string['nostudentsmatching'] = '現在の設定に一致するユーザはいません!';
$string['nosubmission'] = '提出されたチェックマークはありません。';
$string['nosubmissionyet'] = 'まだ提出されたものはありません。';
$string['nosubmisson'] = '提出されたチェックマークはありません。';
$string['notactive'] = '未アクティブ';
$string['notavailableyet'] = '申し訳ございません、このチェックマークはまだ利用できません。<br />チェックマーク説明は以下の日付にここに表示されます。';
$string['notgraded'] = '未評定';
$string['notgradedyet'] = 'まだ評定されていません。';
$string['notifystudent'] = '学生に通知する';
$string['notsubmittedyet'] = 'まだ提出はありません。';
$string['nouseroverrridemessage'] = '現在、ユーザのオーバーライドはありません。';
$string['nousers'] = '表示するユーザーはいません!';
$string['numberofexamples'] = '例数';
$string['numberofexamples_help'] = 'このチェックマークの例の数です。';
$string['numberofparticipants'] = '参加者';
$string['numberofsubmissionsneedgrading'] = '要評定';
$string['numberofsubmittedassignments'] = '提出済み';
$string['open'] = '開始';
$string['operation'] = '操作';
$string['optimum'] = '最適';
$string['optionalsettings'] = 'オプション設定';
$string['overridden'] = 'オーバーライド';
$string['override'] = 'オーバーライド';
$string['override_and_next'] = 'オーバーライドして新しいオーバーライドを作成する';
$string['override_groups_dates'] = 'グループ日をオーバーライドする';
$string['override_users_dates'] = 'ユーザ日をオーバーライドする';
$string['overridedeletegroupsure'] = '本当にグループ {$a} のオーバーライドを削除してもよろしいですか?';
$string['overridedeleteusersure'] = '本当にユーザ {$a} のオーバーライドを削除してもよろしいですか?';
$string['overrideentrydeleted'] = 'エントリが削除されました。';
$string['overrideentryswapped'] = 'エントリがスワップされました。';
$string['overridegroup'] = 'グループオーバーライド';
$string['overridegroupeventname'] = '{$a->checkmark} - {$a->group}';
$string['overrides'] = 'オーバーライド';
$string['overridessummary'] = '設定オーバーライドが存在する ({$a})';
$string['overridessummarygroup'] = 'グループ: {$a}';
$string['overridessummarythisgroup'] = 'このグループの設定オーバーライドが存在する ({$a})';
$string['overridessummaryuser'] = 'ユーザ: {$a}';
$string['overridessummaryyourgroups'] = 'あなたのグループの設定オーバーライドが存在する ({$a})';
$string['overrideuser'] = 'ユーザオーバーライド';
$string['overrideusereventname'] = '{$a->checkmark} - オーバーライド';
$string['page-mod-checkmark-submissions'] = 'チェックマークモジュール提出ページ';
$string['page-mod-checkmark-view'] = 'チェックマークモジュールメインページ';
$string['page-mod-checkmark-x'] = 'すべてのチェックマークモジュールページ';
$string['pagesize'] = '1ページあたりの提出数';
$string['pagesize_help'] = 'あなたのコースに多数の参加者が登録されている場合、「最適」の選択により、選択済みテキストサイズおよびページの向きに応じてリストエントリの配布が最適化されます。';
$string['paramtimeremaining'] = '残り {$a}';
$string['pdfpageorientation'] = 'ページの向き';
$string['pdfpagesize'] = '1ページあたりに表示する提出数';
$string['pdfpagesize_help'] = 'あなたのコースに多数の参加者が登録されている場合、「最適」の選択により、選択済みテキストサイズおよびページの向きに応じてリストエントリの配布が最適化されます。';
$string['pdfprintheader'] = 'ヘッダ/フッタを印刷する';
$string['pdfprintheader_help'] = 'この設定が有効にされた場合、ヘッダ/フッタを印刷します。';
$string['pdfprintheaderlong'] = 'この設定が有効にされた場合、ヘッダ/フッタを印刷します。';
$string['pdfsettings'] = 'PDF設定';
$string['pdftextsize'] = 'テキストサイズ';
$string['pluginadministration'] = 'チェックマーク管理';
$string['pluginname'] = 'チェックマーク';
$string['popupinnewwindow'] = 'ポップアップウィンドウで開く';
$string['posintrequired'] = '0以上の整数である必要があります!';
$string['posintst100required'] = '0から100までの整数である必要があります!';
$string['presentationfeedback'] = 'コメント (プレゼンテーション)';
$string['presentationfeedback_table'] = 'コメント (プレゼンテーション)';
$string['presentationgrade'] = '評定 (プレゼンテーション)';
$string['presentationgrade_short'] = 'PT';
$string['presentationgrade_table'] = '評定 (プレゼンテーション)';
$string['presentationgradebook'] = '評定表内にプレゼンテーション評定を表示する';
$string['presentationgradebook_help'] = 'このオプションではプレゼンテーション評定が評定表に追加評定項目として表示されるかどうかコントロールします。';
$string['presentationgrading'] = 'プレゼンテーション評定を追跡する';
$string['presentationgrading_grade'] = 'プレゼンテーション評定';
$string['presentationgrading_grade_help'] = 'この要素はプレゼンテーション評定方法をコントロールします。あなたは評定に次のいずれかを選択できます:
<ul>
<li><strong>なし</strong> 評点は記録されませんが、コメント (フィードバックとしてのテキスト) を使用できます。</li>
<li><strong>尺度</strong> 学生のプレゼンテーションを尺度で評定します。</li>
<li><strong>評点</strong> 学生のプレゼンテーションを数値で評定します。</li>
</ul>';
$string['presentationgrading_help'] = 'プレゼンテーション評定を有効にした場合、評定情報の追加要素として記録できます。';
$string['presentationgradingcount'] = '評定済みプレゼンテーション';
$string['presentationheader'] = 'プレゼンテーション評定';
$string['printsettingstitle'] = 'エクスポート設定';
$string['privacy:metadata:attendance'] = 'ユーザの出欠ステータス';
$string['privacy:metadata:checks'] = 'ユーザのチェックした例を含むテーブルです (提出テーブルのエントリにバインドされます)。';
$string['privacy:metadata:cutoffdate'] = '提出可能な日時です。';
$string['privacy:metadata:feedback'] = 'ユーザへのコメント/テキストによるフィードバックです。';
$string['privacy:metadata:feedback:timecreated'] = 'コメントが作成された日時です。';
$string['privacy:metadata:feedback:timemodified'] = 'コメントが更新/修正された最新日時です。';
$string['privacy:metadata:feedbacks'] = 'ユーザのフィードバックデータを含むテーブルです。';
$string['privacy:metadata:format'] = 'ユーザへのコメント (テキストフィードバック) のフォーマットです。';
$string['privacy:metadata:grade'] = 'ユーザの評点です。';
$string['privacy:metadata:graderid'] = 'コメントを記述したユーザです。';
$string['privacy:metadata:mailed'] = 'ユーザにコメントが通知されたかどうかを示します。';
$string['privacy:metadata:override:timecreated'] = 'このユーザに対して日付がオーバーライドされた日時です。';
$string['privacy:metadata:override:timemodified'] = 'このユーザに対して日付がオーバーライドされた最新日時です。';
$string['privacy:metadata:overrides'] = 'オーバーライドされたすべての日付 (available-from-, due-, cutoff-dates) を含むテーブルです。';
$string['privacy:metadata:pref:filter'] = '提出テーブルを表示する際に使用するデフォルトのフィルタです。';
$string['privacy:metadata:pref:forcesinglelinenames'] = 'デフォルトで1行の名称を強制的にエクスポートするかどうか設定します。';
$string['privacy:metadata:pref:format'] = '提出テーブルを表示する際にフォームで使用するデフォルトフォーマットです。';
$string['privacy:metadata:pref:mailinfo'] = 'デフォルトでコメントによるフィードバックが投稿されたユーザにメッセージを送信するかどうか設定します。';
$string['privacy:metadata:pref:pageorientation'] = '提出のエクスポートフォームを表示する際に使用するデフォルトのページの向きです。';
$string['privacy:metadata:pref:pdfprintperpage'] = 'デフォルトでエクスポートされる提出数です。';
$string['privacy:metadata:pref:perpage'] = 'デフォルトで1ページに何件の提出を表示するか設定します。';
$string['privacy:metadata:pref:printheader'] = 'このユーザのヘッダをデフォルトでエクスポートしますか?';
$string['privacy:metadata:pref:quickgrade'] = 'このユーザにクイック評定をデフォルトで有効にしますか?';
$string['privacy:metadata:pref:sumabs'] = 'このユーザにデフォルトで絶対和を表示しますか?';
$string['privacy:metadata:pref:sumrel'] = 'このユーザにデフォルトで相対和を表示しますか?';
$string['privacy:metadata:pref:textsize'] = 'このユーザのエクスポートに使用するデフォルトのテキストサイズです。';
$string['privacy:metadata:pref:zipped'] = 'ZIPアーカイブとしてグループごとにPDF分割を推奨する場合のデフォルト設定です。';
$string['privacy:metadata:presentationfeedback'] = 'コメント/ユーザのプレゼンテーションに対して与えられるテキストによるフィードバックです。';
$string['privacy:metadata:presentationformat'] = 'ユーザのプレゼンテーションに対するコメント (テキストフィードバック) のフォーマットです。';
$string['privacy:metadata:presentationgrade'] = 'ユーザのプレゼンテーションに与えられる評点です。';
$string['privacy:metadata:state'] = '例がチェックされているか否かのフラグです。';
$string['privacy:metadata:submission:timecreated'] = '提出が作成された日時です。';
$string['privacy:metadata:submission:timemodified'] = '提出が更新/修正された最新日時です。';
$string['privacy:metadata:submissions'] = 'ユーザの提出に関するデータを含むテーブルです。';
$string['privacy:metadata:subsys:message'] = 'チェックマークはコメントでフィードバックが投稿された際にユーザにメッセージを送信します。また、誰かが提出 (そしてそれが有効にされた) 場合、教師にメッセージを送信します。';
$string['privacy:metadata:timeavailable'] = '提出期間開始からの時間です。';
$string['privacy:metadata:timedue'] = '提出の期限日です。';
$string['privacy:path:feedback'] = 'コメント';
$string['privacy:path:submission'] = '提出';
$string['quickgrade'] = 'クイック評定';
$string['quickgrade_help'] = 'この設定を有効にした場合、複数のチェックマークを1ページで評定できます。評点およびコメントを追加した後、「すべての評定変更を保存する」ボタンをクリックしてそのページすべての変更を保存してください。';
$string['remembertoupdategrades'] = 'このチェックマークは自動的に評定された提出です。あなたが例の評点を変更した場合、提出の更新または再評定を強くお勧めします!';
$string['requiregrading'] = '要評定';
$string['requiresubmit'] = '要提出';
$string['reverttodefaults'] = '課題デフォルトに戻す';
$string['reviewed'] = 'レビュー済み';
$string['save'] = '保存';
$string['saveallfeedback'] = 'すべての評定変更を保存する';
$string['saveoverrideandstay'] = '保存して別のオーバーライドを入力する';
$string['search:activity'] = 'チェックマーク - 活動情報';
$string['select'] = '選択';
$string['selection'] = '選択';
$string['sendnotifications'] = '通知を送信する';
$string['seperatenamecolumns'] = 'フルネームを単一カラムに分割する';
$string['seperatenamecolumns_help'] = 'この設定を有効にした場合、表示されているフルネームのすべてのフラグメント (例 姓および名) が単一カラムに分割されます。';
$string['sequentialnumbering'] = '行の連続ナンバリング';
$string['sequentialnumbering_help'] = 'すべての行 (学生) に1から始まる連番を付けます。例えば発表する学生をランダムに選択する場合に使用できます。';
$string['setabsent'] = '欠席としてマークする';
$string['setabsentandgrade'] = '欠席としてマークして評定する';
$string['setattendant'] = '出席としてマークする';
$string['setattendantandgrade'] = '出席としてマークして評定する';
$string['showalltoggle'] = 'すべての例を表示する';
$string['showrecentsubmissions'] = '最近の提出を表示する';
$string['signature'] = '署名';
$string['start'] = '開始';
$string['str_userid'] = '学生ID';
$string['strallononepage'] = '1ページにすべてを印刷する';
$string['strassignment'] = '課題';
$string['strautograded'] = '[自動評定]';
$string['strexample'] = '例';
$string['strexamples'] = '例';
$string['strlandscape'] = 'ランドスケープ';
$string['strlarge'] = '大';
$string['strmedium'] = '中';
$string['strpapersizes'] = '用紙サイズ';
$string['strpoint'] = '点';
$string['strpoints'] = '点';
$string['strportrait'] = 'ポートレート';
$string['strprint'] = 'ファイルをダウンロードする';
$string['strprintpreview'] = 'エクスポート';
$string['strprintpreviewtabalt'] = 'エクスポートを開く';
$string['strrefreshdata'] = 'データプレビューを更新する';
$string['strsmall'] = '小';
$string['strstdexamplecount'] = '例カウント';
$string['strstdexamplecountdesc'] = 'デフォルトで使用される例数です。';
$string['strstdexamplestart'] = '最初の例番号';
$string['strstdexamplestartdesc'] = '最初の例の番号です。';
$string['strstdgrades'] = '標準評定';
$string['strstdgradesdesc'] = '「個別ネーミング」を使用した場合の評点です。';
$string['strstdnames'] = '標準名';
$string['strstdnamesdesc'] = '「個別ネーミング」を使用した場合の例名です。';
$string['strsubmissions'] = '提出';
$string['strsubmissionstabalt'] = '提出ビューを開く';
$string['strsum'] = '合計';
$string['strvalidmsgtime'] = 'メッセージ有効期間';
$string['strvalidmsgtimedesc'] = 'ユーザへの評定通知が送信されなくなる日数です。';
$string['studentpreview'] = '学生プレビュー';
$string['submission'] = '提出';
$string['submissionfeedback'] = '提出コメント';
$string['submissions'] = '提出';
$string['submissionsamount'] = '{$a->submitted} / {$a->total} の学生がすでに提出済みです。';
$string['submissionsaved'] = 'あなたの変更が保存されました。';
$string['submissionsgraded'] = '{$a->graded} / {$a->all} 提出評定済み';
$string['submissionsnotgraded'] = '{$a->reqgrading} / {$a->all} 提出未評定';
$string['submissionstatus'] = '提出ステータス';
$string['submissionstatus_'] = '提出なし';
$string['submissionstatus_checkmark_summary'] = '{$a->total_examples} 中 <span id="examples">{$a->checked_examples}</span> の例がチェック済みです。';
$string['submissionstatus_draft'] = '下書き (未提出)';
$string['submissionstatus_marked'] = '評定済み';
$string['submissionstatus_new'] = '提出なし';
$string['submissionstatus_reopened'] = '再オープン';
$string['submissionstatus_submitted'] = '評定のため送信済み';
$string['submissionstatusheading'] = '提出ステータス';
$string['submitcheckmark'] = 'あなたのチェックマークをこのフォームで送信する';
$string['submitted'] = '送信済み';
$string['submitted_entries'] = '送信済み';
$string['summary_abs'] = 'x/y 例チェック済み';
$string['summary_rel'] = '% 例チェック済み';
$string['timelimit'] = '時間制限';
$string['timelimit_help'] = 'この設定有効にした場合、課題ページに制限時間が記載されて課題中にカウントダウンタイマーが表示されます。';
$string['timelimitnotenabled'] = '課題の時間制限は有効にされていません。';
$string['timelimitpassed'] = '制限時間切れ';
$string['timemodified'] = '最終更新日時';
$string['timeremaining'] = '残り時間';
$string['trackattendance'] = '出欠を追跡する';
$string['trackattendance_help'] = '参加者の出欠を追跡できるようにするにはこの設定を有効にしてください。';
$string['ungraded'] = '未評定';
$string['unknown'] = '不明';
$string['upgradekeyerror'] = '指定されたサンプル/提出のペアに複数のチェックマークチェックが存在するため、アップグレードに失敗しました。詳細は次のgithub issueをご覧ください: {$a}';
$string['user_dates_overridden'] = 'ユーザの日付がオーバーライドされました!';
$string['userassignmentdefaults'] = 'ユーザ課題デフォルト';
$string['usermisconf'] = 'ユーザ設定ミス';
$string['usernosubmit'] = '申し訳ございません、あなたはチェックマークを送信できません。';
$string['useroverride'] = 'ユーザオーバーライド';
$string['useroverride_edit'] = 'ユーザオーバーライドを編集する';
$string['useroverrides'] = 'ユーザオーバーライド';
$string['usersnone'] = 'この課題にアクセスできる学生はいません。';
$string['viewallsubmissions'] = 'すべての提出を表示する';
$string['viewfeedback'] = 'チェックマーク評定およびコメントを表示する';
$string['viewgradebook'] = '評定表を表示する';
$string['viewmysubmission'] = '私の提出を表示する';
$string['viewpreview'] = 'プレビューを表示する';
$string['viewsubmissions'] = '提出';
$string['yoursubmission'] = 'あなたの提出';
$string['zippedgrouppdfs'] = 'グループを別々のPDFとして';
