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
 * Strings for component 'gradingform_guide', language 'ja', version '3.11'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'よく使われるコメントを追加する';
$string['addcriterion'] = 'クライテリアを追加する';
$string['additionalcomments'] = '追加コメント';
$string['additionalcommentsforcriterion'] = 'クライテリア {$a} の追加コメント';
$string['alwaysshowdefinition'] = 'ガイド定義を学生に表示する';
$string['backtoediting'] = '編集に戻る';
$string['clicktocopy'] = 'このテキストをクライテリアフィードバックにコピーするにはクリックしてください。';
$string['clicktoedit'] = '編集するにはクリックしてください。';
$string['clicktoeditname'] = 'クライテリア名を編集するにはクリックしてください。';
$string['comment'] = 'コメント';
$string['commentpickerforcriterion'] = '{$a} 追加コメントに頻繁に使用されたコメントピッカ';
$string['comments'] = 'よく使われるコメント';
$string['commentsdelete'] = 'コメントを削除する';
$string['commentsempty'] = 'コメントを編集するにはクリックしてください。';
$string['commentsmovedown'] = '下へ';
$string['commentsmoveup'] = '上へ';
$string['confirmdeletecriterion'] = '本当にこのアイテムを削除してもよろしいですか?';
$string['confirmdeletelevel'] = '本当にｊこのレベルを削除してもよろしいですか?';
$string['criterion'] = 'クライテリア名';
$string['criteriondelete'] = 'クライテリアを削除する';
$string['criterionempty'] = 'クライテリアを編集するにはクリックしてください。';
$string['criterionmovedown'] = '下へ';
$string['criterionmoveup'] = '上へ';
$string['criterionname'] = 'クライテリア名';
$string['criterionremark'] = '{$a} クライテリアコメント';
$string['definemarkingguide'] = '評定ガイドを定義する';
$string['description'] = '説明';
$string['descriptionmarkers'] = '評定者への説明';
$string['descriptionstudents'] = '学生への説明';
$string['err_maxscoreisnegative'] = '最大評点は有効ではありません。マイナスの値は許可されていません。';
$string['err_maxscorenotnumeric'] = 'クライテリア最大評点は数字である必要があります。';
$string['err_nocomment'] = 'コメントを空白にすることはできません。';
$string['err_nodescription'] = '学生説明を空白にすることはできません。';
$string['err_nodescriptionmarkers'] = '評定者説明を空白にすることはできません。';
$string['err_nomaxscore'] = 'クライテリア最大評点を空白にすることはできません。';
$string['err_noshortname'] = 'クライテリア名を空白にすることはできません。';
$string['err_scoreinvalid'] = '「{$a->criterianame} 」に設定された点数は有効ではありません。最大評点は次のとおりです: {$a->maxscore}';
$string['err_scoreisnegative'] = '「{$a->criterianame} 」に設定された点数は有効ではありません。マイナスの値は許可されていません。';
$string['err_shortnametoolong'] = 'クライテリア名は半角256文字以下にしてください。';
$string['gradingof'] = '{$a} 評定';
$string['guide'] = '評定ガイド';
$string['guidemappingexplained'] = '注意: あなたの評定ガイドでは最大評点<b>{$a->maxscore}</b>が設定されていますが、あなたの活動で設定されている最大評点は {$a->modulegrade} です。あなたの評定ガイドの最大評点はモジュール内の最大評点に調整されます。<br />中間にある評点は利用可能な最も近い評点にそれぞれ変換されます。';
$string['guidenotcompleted'] = 'それぞれのクライテリアに有効な評点を入力してください。';
$string['guideoptions'] = '評定ガイドオプション';
$string['guidestatus'] = '現在の評定ガイドステータス';
$string['hidemarkerdesc'] = '評定者へのクライテリア説明を隠す';
$string['hidestudentdesc'] = '学生へのクライテリア説明を隠す';
$string['informationforcriterion'] = '{$a} 情報';
$string['insertcomment'] = 'よく使われるコメントを追加する';
$string['maxscore'] = '最大評点';
$string['name'] = '名称';
$string['needregrademessage'] = 'この学生が評定された後、評定ガイド定義が変更されています。あなたが評定ガイドを確認して評点を更新するまで、学生はこの評定ガイドを閲覧することができません。';
$string['outof'] = '{$a} 中';
$string['pluginname'] = '評定ガイド';
$string['previewmarkingguide'] = '評定ガイドをプレビュする';
$string['privacy:metadata:criterionid'] = '高度な評定のためのクライテリアのIDです。';
$string['privacy:metadata:fillingssummary'] = '評定ガイドのためのユーザの評定およびフィードバックに関する情報を保持します。';
$string['privacy:metadata:instanceid'] = '活動に使用される評定のIDです。';
$string['privacy:metadata:preference:showmarkerdesc'] = '採点者へのクライテリア説明を表示するか指定します。';
$string['privacy:metadata:preference:showstudentdesc'] = '学生へのクライテリア説明を表示するか指定します。';
$string['privacy:metadata:remark'] = 'この評定クライテリアに関する所見です。';
$string['privacy:metadata:score'] = 'この評定クライテリアの評点です。';
$string['regrademessage1'] = 'あなたはすでに評定で使用されている評定ガイドの変更を保存しようとしています。既存の評点のレビューが必要な場合、表明してください。あなたがこれを設定した場合、学生のアイテムが再評定されるまで、評定ガイドは学生から非表示にされます。';
$string['regrademessage5'] = 'あなたはすでに評定で使用されている評定ガイドの大幅な変更を保存しようとしています。評定表の値は変更されませんが、学生のアイテムが再評定されるまで、評定ガイドは学生から非表示にされます。';
$string['regradeoption0'] = '再評定対象としてマークしない';
$string['regradeoption1'] = '再評定対象としてマークする';
$string['remark_help'] = 'このクライテリアに関する追加コメントを入力してください。';
$string['restoredfromdraft'] = '注意: このユーザの前回の受験に関する評点が適切に保存されなかったため、下書きの評点がリストアされました。これらの変更をキャンセルしたい場合、下の「キャンセル」ボタンを使用してください。';
$string['save'] = '保存';
$string['saveguide'] = '評定ガイドを保存して利用可能な状態にする';
$string['saveguidedraft'] = '下書きとして保存する';
$string['score'] = '評点';
$string['score_help'] = '{$a->criterion} の評点を 0 から {$a->maxscore} の間で入力してください。';
$string['scoreforcriterion'] = '{$a} 評点';
$string['showmarkerdesc'] = '評定者へのクライテリア説明を表示する';
$string['showmarkspercriterionstudents'] = 'クライテリアごとの評点を学生に表示する';
$string['showstudentdesc'] = '学生へのクライテリア説明を表示する';
