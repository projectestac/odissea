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
 * Strings for component 'course', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   course
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aria:coursecategory'] = 'コースカテゴリ';
$string['aria:courseimage'] = 'コースイメージ';
$string['aria:coursename'] = 'コース名';
$string['aria:courseshortname'] = 'コース省略名';
$string['aria:favourite'] = 'コース星付き';
$string['coursealreadyfinished'] = 'コースはすでに終了しています。';
$string['coursenotyetfinished'] = 'コースはまだ終了していません。';
$string['coursenotyetstarted'] = 'コースはまだ開始していません。';
$string['coursetoolong'] = 'コースが長すぎます。';
$string['customfield_islocked'] = 'ロック';
$string['customfield_islocked_help'] = 'フィールドがロックされた場合、ケイパビリティ「ロック済みカスタムフィールドを修正する」のあるユーザ (デフォルトではマネージャのデフォルトロールのユーザのみ) のみコース設定で変更することができます。';
$string['customfield_notvisible'] = 'なし';
$string['customfieldsettings'] = '一般コースカスタムフィールド設定';
$string['customfield_visibility'] = '表示対象';
$string['customfield_visibility_help'] = 'この設定はコース一覧またはダッシュボードの利用可能なカスタムフィールドフィルタで誰がカスタムフィールド名および値を閲覧できるか指定します。';
$string['customfield_visibletoall'] = '全員';
$string['customfield_visibletoteachers'] = '教師';
$string['errorendbeforestart'] = '終了日 ({$a}) は開始日の前にしてください。';
$string['favourite'] = '星付きコース';
$string['gradetopassnotset'] = 'このコースには合格点が設定されていません。合格点はコースの評定アイテム (評定表セットアップ) で設定できます。';
$string['noaccesssincestartinfomessage'] = '{$a->userfirstname} さん

</br><br/>{$a->coursename} の学生はコースにアクセスしていません。';
$string['nocourseactivity'] = 'コースの開始日および終了日の間に十分なコース活動がありません。';
$string['nocourseendtime'] = 'コースに終了日時がありません。';
$string['nocoursesections'] = 'コースセクションなし';
$string['nocoursestudents'] = '学生なし';
$string['norecentaccessesinfomessage'] = '{$a->userfirstname} さん

</br><br/>{$a->coursename} の学生は最近コースにアクセスしていません。';
$string['noteachinginfomessage'] = '{$a->userfirstname} さん

</br><br/>次週開始予定のコースに教師または登録済み学生がいなことが確認されました。';
$string['privacy:completionpath'] = 'コース完了です。';
$string['privacy:favouritespath'] = 'コース星付き情報';
$string['privacy:metadata:completionsummary'] = 'コースはユーザに関する完了情報を含みます。';
$string['privacy:metadata:favouritessummary'] = 'コースにはユーザにより星が付けられたことに関する情報を含み観ます。';
$string['privacy:perpage'] = '1ページあたりに表示するコース数です。';
$string['studentsatriskincourse'] = '{$a} コースでリスクのある学生';
$string['studentsatriskinfomessage'] = '{$a->userfirstname} さん

</br><br/>{$a->coursename} コースの学生にリスクがあることが確認されました。';
$string['target:coursecompetencies'] = 'コースに割り当てられたコンピテンシーに到達できないリスクのある学生';
$string['target:coursecompetencies_help'] = 'このターゲットは学生がコースに割り当てられたコンピテンシーに到達できないリスクがあるかどうか説明します。このターゲットはコースに割り当てられたすべてのコンピテンシーはコース終了日までに到達されるべきだと考えます。';
$string['target:coursecompletion'] = 'コース完了条件に合致しないリスクのある学生';
$string['target:coursecompletion_help'] = 'このターゲットは学生がコース完了条件に合致しないリスクがあると考えられているかどうか説明します。';
$string['target:coursedropout'] = '脱落リスクのある学生';
$string['target:coursedropout_help'] = 'このターゲットは学生に脱落するリスクがあると考えられているかどうか説明します。';
$string['target:coursegradetopass'] = 'コースに合格するための最小評点に到達できないリスクのある学生';
$string['target:coursegradetopass_help'] = 'このターゲットは学生がコースに合格するための最小評点に到達できないリスクがあるかどうか説明します。';
$string['targetlabelstudentcompetenciesno'] = 'コースに割り当てられたコンピテンシーに到達できる可能性のある学生';
$string['targetlabelstudentcompetenciesyes'] = 'コースに割り当てられたコンピテンシーに到達できないリスクのある学生';
$string['targetlabelstudentcompletionno'] = 'コース完了条件に合致する可能性のある学生';
$string['targetlabelstudentcompletionyes'] = 'コース完了条件に合致しないリスクのある学生';
$string['targetlabelstudentdropoutno'] = 'リスクなし';
$string['targetlabelstudentdropoutyes'] = '脱落リスクのある学生';
$string['targetlabelstudentgradetopassno'] = 'コースに合格するための最小評点を取得できる可能性のある学生です。';
$string['targetlabelstudentgradetopassyes'] = 'コースに合格するための最小評点を取得できないリスクのある学生です。';
$string['targetlabelteachingno'] = 'リスクのあるコース未開始';
$string['targetlabelteachingyes'] = '教育ケイパビリティのあるユーザはコースにアクセスできます。';
$string['target:noaccesssincecoursestart'] = 'まだコースにアクセスしていない学生';
$string['target:noaccesssincecoursestart_help'] = 'このタグは登録したコースにまだアクセスしたことのない学生を表します。';
$string['target:noaccesssincecoursestartinfo'] = '次の学生は開始したコースに登録されていますが、コースにアクセスしたことはありません。';
$string['target:norecentaccesses'] = '最近コースにアクセスしていない学生';
$string['target:norecentaccesses_help'] = 'このターゲットでは設定されたアナリティクスの間隔 (デフォルトでは過去1ヶ月) で登録済みのコースにアクセスしていない学生を割り出します。';
$string['target:norecentaccessesinfo'] = '次の学生は設定された分析期間中 (デフォルトでは1ヶ月)、登録したコースにアクセスしていません。';
$string['target:noteachingactivity'] = 'リスクのあるコース未開始';
$string['target:noteachingactivity_help'] = 'このターゲットは次週開始する予定のコースに教育活動があるかどうか説明します。';
$string['target:noteachingactivityinfo'] = '数日で開始される予定の次のコースには教師または学生が登録されていないため、開始しないリスクがあります。';
