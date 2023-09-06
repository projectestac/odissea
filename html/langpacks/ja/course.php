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
 * Strings for component 'course', language 'ja', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = '活動チューザフッタ';
$string['activitychooseractivefooter_desc'] = '活動チューザはフッタにアイテムを追加するプラグインをサポートできます。';
$string['activitychoosercategory'] = '活動チューザ';
$string['activitychooserhidefooter'] = 'フッタなし';
$string['activitychooserrecommendations'] = '推奨活動';
$string['activitychoosersettings'] = '活動チューザ設定';
$string['activitychoosertabmode'] = '活動チューザタブ';
$string['activitychoosertabmode_desc'] = '活動チューザにより教師は自分のコースに追加する活動およびリソースを簡単に選択できます。この設定ではどのタブを活動チューザ内に表示するか決定します。星付きタブはユーザに1つまたはそれ以上の星付き活動がある場合、推奨タブはサイト管理者が推奨活動を指定した場合のみ表示される点に留意してください。';
$string['activitychoosertabmodeone'] = '星付き, すべて, 活動, リソース, 推奨';
$string['activitychoosertabmodethree'] = '星付き, 活動, リソース, 推奨';
$string['activitychoosertabmodetwo'] = '星付き, すべて, 推奨';
$string['activitydate:closed'] = '終了済み:';
$string['activitydate:closes'] = '終了予定:';
$string['activitydate:opened'] = '開始済み:';
$string['activitydate:opens'] = '開始予定:';
$string['aria:coursecategory'] = 'コースカテゴリ';
$string['aria:courseimage'] = 'コースイメージ';
$string['aria:coursename'] = 'コース名';
$string['aria:courseshortname'] = 'コース省略名';
$string['aria:defaulttab'] = 'デフォルト活動';
$string['aria:favourite'] = 'コース星付き';
$string['aria:favouritestab'] = '星付き活動';
$string['aria:modulefavourite'] = '{$a} 活動に星を付ける';
$string['aria:recommendedtab'] = '推奨活動';
$string['browsecourseadminindex'] = 'このインデックスでコース管理を閲覧する';
$string['browsesettingindex'] = 'このインデックスで設定を閲覧する';
$string['completion_automatic:done'] = '完了:';
$string['completion_automatic:failed'] = '失敗:';
$string['completion_automatic:todo'] = 'やるべきこと:';
$string['completion_manual:aria:done'] = '{$a} は完了としてマークされます。元に戻すには押してください。';
$string['completion_manual:aria:markdone'] = '{$a} を完了マークする';
$string['completion_manual:done'] = '完了';
$string['completion_manual:markdone'] = '完了マークする';
$string['completion_setby:auto:done'] = '完了: {$a->condition} ({$a->setby} により設定)';
$string['completion_setby:auto:todo'] = 'やるべきこと: {$a->condition} ($a->setby} により設定)';
$string['completion_setby:manual:done'] = '{$a->activityname} は {$a->setby} により完了マークされます。元に戻すには押してください。';
$string['completion_setby:manual:markdone'] = '{$a->activityname} は {$a->setby} により未完了マークされます。完了マークするには押してください。';
$string['completionrequirements'] = '{$a} の完了条件';
$string['courseaccess'] = 'コースアクセス';
$string['coursealreadyfinished'] = 'コースはすでに終了しています。';
$string['coursecontentnotification'] = 'コンテンツ変更通知を送信する';
$string['coursecontentnotification_help'] = 'この新しいまたは変更された活動またはリソースをコース参加者に通知する場合、チェックボックスをチェックしてください。活動またはリソースにアクセスできるユーザのみ通知を受信します。';
$string['coursecontentnotifnew'] = '{$a->coursename} 新しいコンテンツ';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename}<a href="{$a->link}">{$a->modulename}</a>がコース<a href="{$a->courselink}">{$a->coursename}</a>で新しく作成されました。</p><p><a href="{$a->notificationpreferenceslink}">あなたの通知プレファレンスを変更する</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} コンテンツ変更';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename}<a href="{$a->link}">{$a->modulename}</a>がコース<a href="{$a->courselink}">{$a->coursename}</a>で変更されました。</p><p><a href="{$a->notificationpreferenceslink}">あなたの通知プレファレンスを変更する</a></p>';
$string['coursenotyetfinished'] = 'コースはまだ終了していません。';
$string['coursenotyetstarted'] = 'コースはまだ開始していません。';
$string['courseparticipants'] = 'コース参加者';
$string['coursetoolong'] = 'コースが長すぎます。';
$string['customfield_islocked'] = 'ロック';
$string['customfield_islocked_help'] = 'フィールドがロックされた場合、ケイパビリティ「ロック済みカスタムフィールドを修正する」のあるユーザ (デフォルトではマネージャのデフォルトロールのユーザのみ) のみコース設定でフィールドを変更できます。';
$string['customfield_notvisible'] = 'なし';
$string['customfield_visibility'] = '表示対象';
$string['customfield_visibility_help'] = 'この設定はコース一覧またはダッシュボードの利用可能なカスタムフィールドフィルタで誰がカスタムフィールド名および値を閲覧できるか指定します。';
$string['customfield_visibletoall'] = '全員';
$string['customfield_visibletoteachers'] = '教師';
$string['customfieldsettings'] = '一般コースカスタムフィールド設定';
$string['daystakingcourse'] = '受講日数';
$string['downloadcontent'] = 'コースコンテンツダウンロードに含める';
$string['downloadcontent_help'] = 'この活動またはリソースはダウンロード可能なコースコンテンツのZIPファイルに含めるべきですか? ファイル、フォルダ、ページ、ラベルは完全にダウンロードできます。その他の活動およびリソースは名称および説明のみダウンロードされます。このオプションを使用するにはコース設定でコースコンテンツのダウンロードを有効にする必要があります。

この設定はオフライン使用のためのモバイルアプリコンテンツのダウンロードには影響しません。';
$string['downloadcourseconfirmation'] = 'あなたは (ダウンロードできないアイテムおよび {$a} より大きなファイルを除く) コースコンテンツのZIPファイルをダウンロードしようとしています。';
$string['downloadcoursecontent'] = 'コースコンテンツをダウンロード';
$string['downloadcoursecontent_help'] = 'この設定ではコースコンテンツのダウンロードのケイパビリティ (デフォルトでは学生または教師ロール) のあるユーザがコースコンテンツをダウンロードできるかどうか決定します。';
$string['enabledownloadcoursecontent'] = 'コースコンテンツのダウンロードを有効にする';
$string['errorendbeforestart'] = '終了日 ({$a}) は開始日の前にしてください。';
$string['favourite'] = '星付きコース';
$string['gradetopassnotset'] = 'このコースには合格点が設定されていません。合格点はコースの評定アイテム (評定表セットアップ) で設定できます。';
$string['informationformodule'] = '{$a} 活動に関する情報';
$string['module'] = '活動';
$string['namewithlink'] = 'リンク付きカテゴリ名';
$string['noaccesssincestartinfomessage'] = '{$a->userfirstname} さん

<p>{$a->coursename} 内の多くの学生がコースにアクセスしていません。</p>';
$string['nocourseactivity'] = 'コースの開始日および終了日の間に十分なコース活動がありません。';
$string['nocourseendtime'] = 'コースに終了日時がありません。';
$string['nocoursesections'] = 'コースセクションなし';
$string['nocoursestudents'] = '学生なし';
$string['norecentaccessesinfomessage'] = '{$a->userfirstname} さん

<p>{$a->coursename} 内の多くの学生が最近コースにアクセスしていません。</p>';
$string['noteachinginfomessage'] = '{$a->userfirstname} さん

<p>次週開始予定のコースに教師または登録済み学生がいないことが確認されました。</p>';
$string['participants:perpage'] = '1ページあたりの参加者数';
$string['participants:perpage_help'] = 'それぞれのコースの参加者ページで1ページあたりに表示されるユーザ数です。';
$string['participantsnavigation'] = '参加者3次ナビゲーション';
$string['privacy:completionpath'] = 'コース完了';
$string['privacy:favouritespath'] = 'コース星付き情報';
$string['privacy:metadata:activityfavouritessummary'] = 'コースシステムにはユーザが活動チューザで星を付けたアイテムの情報を含みます。';
$string['privacy:metadata:completionsummary'] = 'コースはユーザに関する完了情報を含みます。';
$string['privacy:metadata:favouritessummary'] = 'コースにはユーザにより星が付けられたことに関する情報を含み観ます。';
$string['privacy:perpage'] = '1ページあたりに表示するコース数です。';
$string['recommend'] = '推奨';
$string['recommendcheckbox'] = '活動を推奨する: {$a}';
$string['relativedatessubmissionduedateafter'] = 'コース開始 {$a->datediffstr} 後';
$string['relativedatessubmissionduedatebefore'] = 'コース開始 {$a->datediffstr} 前';
$string['searchactivitiesbyname'] = '名称で活動を検索する';
$string['searchresults'] = '検索結果: {$a}';
$string['studentsatriskincourse'] = '{$a} コースでリスクのある学生';
$string['studentsatriskinfomessage'] = '{$a->userfirstname} さん

<p>{$a->coursename} コースの学生にリスクがあることが確認されました。</p>';
$string['submitsearch'] = '検索を送信する';
$string['target:coursecompetencies'] = 'コースに割り当てられたコンピテンシに到達できないリスクのある学生';
$string['target:coursecompetencies_help'] = 'このターゲットは学生がコースに割り当てられたコンピテンシに到達できないリスクがあるかどうか説明します。このターゲットはコースに割り当てられたすべてのコンピテンシはコース終了日までに到達されるべきだと考えます。';
$string['target:coursecompletion'] = 'コース完了条件を満たさないリスクのある学生';
$string['target:coursecompletion_help'] = 'このターゲットは学生がコース完了条件を満たさないリスクがあると考えられているかどうか説明します。';
$string['target:coursedropout'] = '脱落リスクのある学生';
$string['target:coursedropout_help'] = 'このターゲットは学生に脱落するリスクがあると考えられているかどうか説明します。';
$string['target:coursegradetopass'] = 'コースに合格するための最小評点に到達できないリスクのある学生';
$string['target:coursegradetopass_help'] = 'このターゲットは学生がコースに合格するための最小評点に到達できないリスクがあるかどうか説明します。';
$string['target:noaccesssincecoursestart'] = 'まだコースにアクセスしていない学生';
$string['target:noaccesssincecoursestart_help'] = 'このタグは登録したコースにまだアクセスしていない学生を表します。';
$string['target:noaccesssincecoursestartinfo'] = '次の学生は開始したコースに登録されていますが、コースにアクセスしたことはありません。';
$string['target:norecentaccesses'] = '最近コースにアクセスしていない学生';
$string['target:norecentaccesses_help'] = 'このターゲットでは設定されたアナリティクスの間隔 (デフォルトでは過去1ヶ月) で登録済みのコースにアクセスしていない学生を割り出します。';
$string['target:norecentaccessesinfo'] = '次の学生は設定された分析期間中 (デフォルトでは1ヶ月)、登録したコースにアクセスしていません。';
$string['target:noteachingactivity'] = '開始していないリスクのあるコース';
$string['target:noteachingactivity_help'] = 'このターゲットは次週開始する予定のコースに教育活動があるかどうか説明します。';
$string['target:noteachingactivityinfo'] = '数日で開始される予定の次のコースに教師または学生が登録されていないため、開始しないリスクがあります。';
$string['targetlabelstudentcompetenciesno'] = 'コースに割り当てられたコンピテンシに到達できる可能性のある学生';
$string['targetlabelstudentcompetenciesyes'] = 'コースに割り当てられたコンピテンシに到達できないリスクのある学生';
$string['targetlabelstudentcompletionno'] = 'コース完了条件に合致する可能性のある学生';
$string['targetlabelstudentcompletionyes'] = 'コース完了条件に合致しないリスクのある学生';
$string['targetlabelstudentdropoutno'] = 'リスクなし';
$string['targetlabelstudentdropoutyes'] = '脱落リスクのある学生';
$string['targetlabelstudentgradetopassno'] = 'コースに合格するための最小評点を取得できる可能性のある学生です。';
$string['targetlabelstudentgradetopassyes'] = 'コースに合格するための最小評点を取得できないリスクのある学生です。';
$string['targetlabelteachingno'] = '開始できないリスクのあるコース';
$string['targetlabelteachingyes'] = '教育ケイパビリティのあるユーザはコースにアクセスできます。';
