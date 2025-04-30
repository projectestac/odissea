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
 * Strings for component 'filter_embedquestion', language 'ja', version '4.4'.
 *
 * @package     filter_embedquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptoptions'] = '受験オプション';
$string['authorizedsecrets'] = '公開秘密鍵';
$string['authorizedsecrets_desc'] = 'インポート済み埋め込み問題が正しく動作するよう、ここに他のサーバの秘密鍵を一行ごとに追加してください。<br/><br/>このサーバの秘密鍵は次のとおりです: <code>{$a}</code>';
$string['chooserandomly'] = 'このカテゴリから埋め込み可能な問題をランダムに選択する';
$string['corruptattempt'] = 'あなたが前回ここで受験した問題は動作しなくなりました。あなたが続行をクリックした場合、その問題は削除されて新しい問題が作成されます。';
$string['corruptattemptwithreason'] = 'あなたが前回ここで受験した問題は動作しなくなりました。({$a}) あなたが続行をクリックした場合、その問題は削除されて新しい問題が作成されます。';
$string['defaultsheading'] = '問題埋め込みのデフォルトオプション';
$string['defaultsheading_desc'] = 'これらは埋め込まれた問題の表示および機能をコントロールするオプションのデフォルトです。これらは問題の埋め込み時に特定のオプションが設定されていない場合に使用される値です。';
$string['defaultx'] = 'デフォルト ({$a})';
$string['displayoptions'] = '表示オプション';
$string['embedquestion'] = '問題埋め込み';
$string['errormaxmarknumber'] = '最大評点は数字にする必要があります。';
$string['errornopermissions'] = 'あなたにはこの問題を埋め込む権限がありません。';
$string['errorunknownquestion'] = '不明または解けない問題です。';
$string['errorvariantformat'] = 'バリアント番号は正の整数にする必要があります。';
$string['errorvariantoutofrange'] = 'バリアント番号は最大 {$a} の正の整数にする必要があります。';
$string['filtername'] = '問題埋め込み';
$string['generalfeedback_desc'] = '埋め込み問題に一般的なフィードバックをデフォルトで表示するかどうか設定します。';
$string['howquestionbehaves'] = '問題動作';
$string['howquestionbehaves_desc'] = '埋め込み問題に使用するデフォルトの動作です。';
$string['iframetitle'] = '埋め込み問題';
$string['invalidcategory'] = 'IDナンバーが「 {$a->catid} 」のカテゴリは「 {$a->contextname} 」に存在しません。';
$string['invalidemptycategory'] = 'カテゴリ「 {$a->catname} 」の「 {$a->contextname} 」には埋め込み可能な問題が含まれていません。';
$string['invalidquestion'] = 'IDナンバー「 {$a->qid} 」の問題はカテゴリ「 {$a->catname}[ {$a->catidnumber}] 」に存在しません。';
$string['invalidrandomquestion'] = '問題カテゴリ「 {$a} 」からランダム問題は生成できません。';
$string['invalidtoken'] = 'この埋め込み問題は正しく設定されていません。';
$string['markdp_desc'] = '埋め込み問題で評点を表示する際に小数点の後に表示されるデフォルトの桁数です。';
$string['markedoutof'] = '/';
$string['marks_desc'] = '埋め込み問題にデフォルトで数値マーク情報を表示するかどうか設定します。';
$string['nameandcount'] = '{$a->name} ({$a->count})';
$string['nameandidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['nameidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->count})';
$string['noguests'] = 'ゲストユーザには埋め込み問題を受験および確認する権限はありません。';
$string['notyourattempt'] = 'これはあなたの受験ではありません。';
$string['pluginname'] = '問題埋め込み';
$string['privacy:metadata'] = '問題埋め込みフィルタはいかなる個人データも保存しません。';
$string['questionidnumber'] = '問題IDナンバー';
$string['questionidnumberchanged'] = 'ここで受験されている問題にはIDナンバー {$a} がありません。';
$string['questionnolongerhasidnumber'] = 'ここで受験されている問題にはIDナンバーがありません。';
$string['questionnolongerincategory'] = 'ここで受験されている問題はIDナンバー {$a} のカテゴリ内にはありません。';
$string['responsehistory_desc'] = '埋め込み問題にデフォルトで解答履歴テーブルを表示するかどうか設定します。';
$string['restart'] = '再スタートする';
$string['rightanswer_desc'] = '自動的に生成される正解の表示を埋め込み問題にデフォルトで表示させるかどうか設定します。私たちはこれを使用せずに問題作成者が一般的なフィードバックで正解を説明することを推奨します。';
$string['securityheading'] = 'セキュリティ設定';
$string['specificfeedback_desc'] = '埋め込み問題において学生の解答に特化したフィードバックをデフォルトで表示するかどうか設定します。';
$string['taskcleanup'] = '古い埋め込み問題の受験をクリーンアップする';
$string['title'] = '埋め込み問題';
$string['warningfilteroffglobally'] = '警告: サイト全体のフィルタ設定では問題埋め込みフィルタは無効にされています。';
$string['warningfilteroffhere'] = '警告: このコースでは問題埋め込みフィルタは無効にされています。';
$string['whethercorrect_desc'] = '埋め込み問題において自分の解答が正しいかどうかを学生に示すべきかどうか設定します。これには「正解」「部分的正解」「不正解」という文字による説明および同じ情報を伝える色の強調表示の両方を含みます。';
$string['whichquestion'] = 'どの問題';
