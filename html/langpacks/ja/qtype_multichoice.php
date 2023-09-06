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
 * Strings for component 'qtype_multichoice', language 'ja', version '4.1'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = '単一または複数解答?';
$string['answerhowmany_desc'] = 'デフォルトで単一解答 (例 ラジオボタン) にするか複数解答 (例 チェックボックス) にするか指定します。';
$string['answernumbering'] = '選択肢に番号付けしますか?';
$string['answernumbering123'] = '1.  2.  3. ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'デフォルトの番号付けスタイルです。';
$string['answernumberingabc'] = 'a.  b.  c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = '番号付けなし';
$string['answersingleno'] = '複数解答を許可する';
$string['answersingleyes'] = '単一解答のみ';
$string['choiceno'] = '選択肢 {$a}';
$string['choices'] = '利用可能な選択肢';
$string['clearchoice'] = '私の選択をクリアする';
$string['clozeaid'] = '足りない言葉を入力してください。';
$string['correctansweris'] = '正解: {$a}';
$string['correctanswersare'] = '正解は次のとおりです: {$a}';
$string['correctfeedback'] = '正解すべてに対するフィードバック';
$string['deletedchoice'] = '受験開始後、この選択肢は削除されました。';
$string['errfractionsaddwrong'] = 'あなたが選択したプラス評点の合計が100%になっていません。<br />現在の評点合計は {$a}% です。';
$string['errfractionsnomax'] = 'この問題で満点を取ることができるよう<br />選択肢の1つは100%でなければなりません。';
$string['errgradesetanswerblank'] = '評点は設定されていますが答えが空白です。';
$string['feedback'] = 'フィードバック';
$string['fillouttwochoices'] = 'あなたは少なくとも2つ以上の選択肢を入力する必要があります。空白の選択肢は使用されません。';
$string['fractionsaddwrong'] = 'あなたが選択したプラス評点の合計が100%になっていません。<br />現在の評点合計は {$a}% です。<br />戻ってこの問題を修正しますか?';
$string['fractionsnomax'] = 'この問題で満点を取ることができるよう<br />答えの1つは100%でなければなりません。 <br />戻ってこの問題を修正しますか?';
$string['incorrectfeedback'] = '不正解すべてに対するフィードバック';
$string['notenoughanswers'] = 'このタイプの問題には少なくとも {$a} の選択肢が必要です。';
$string['overallcorrectfeedback'] = '正解すべてに対するフィードバック';
$string['overallfeedback'] = '全体フィードバック';
$string['overallincorrectfeedback'] = '不正解すべてに対するフィードバック';
$string['overallpartiallycorrectfeedback'] = '部分的な正解すべてに対するフィードバック';
$string['partiallycorrectfeedback'] = '部分的な正解すべてに対するフィードバック';
$string['pleaseselectananswer'] = '答えを選択してください。';
$string['pleaseselectatleastoneanswer'] = '少なくとも1つの答えを選択してください。';
$string['pluginname'] = '多肢選択問題';
$string['pluginname_help'] = '問題 (イメージを含む) に対して解答者が複数の答えを選択します。多肢選択問題では1つまたは2つの正解を持つことができます。';
$string['pluginname_link'] = 'question/type/multichoice';
$string['pluginnameadding'] = '多肢選択問題の追加';
$string['pluginnameediting'] = '多肢選択問題の編集';
$string['pluginnamesummary'] = '所定の一覧より単一または複数の解答を選択することができます。';
$string['privacy:metadata'] = '多肢選択問題タイププラグインは問題作成者がユーザプレファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:answernumbering'] = 'どのナンバリングスタイル (「1, 2, 3, ...」「a, b, c, ...」等) を使用しますか。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:penalty'] = '問題が「複数回受験インタラクティブ」または「アダプティブモード」で出題された場合のそれぞれの不正解のペナルティです。';
$string['privacy:preference:showstandardinstruction'] = '標準インストラクションを表示するかどうか指定します。';
$string['privacy:preference:shuffleanswers'] = '解答を自動的にシャッフルするかどうか指定します。';
$string['privacy:preference:single'] = 'ラジオボタンを使用した単一解答またはチェックボックスを使用した複数解答を指定します。';
$string['regradeissuenumchoiceschanged'] = '問題の選択肢数が変わりました。';
$string['selectmulti'] = '1つまたはそれ以上選択してください:';
$string['selectone'] = '1つ選択してください:';
$string['showstandardinstruction'] = '標準インストラクションを表示する';
$string['showstandardinstruction_desc'] = '多肢選択解答の前に「1つを選択する」または「1つまたはそれ以上を選択する」のインストラクションを表示するか選択してください。';
$string['showstandardinstruction_help'] = '多肢選択解答の前に「1つを選択する」または「1つまたはそれ以上を選択する」のインストラクションを表示するか選択してください。あなたは代わりに問題テキストにインストラクションを含めれます。';
$string['shuffleanswers'] = '選択肢をシャッフルしますか?';
$string['shuffleanswers_desc'] = 'それぞれの受験時にデフォルトで答えをランダムにシャッフルするかどうか指定します。';
$string['shuffleanswers_help'] = 'この設定を有効にした場合、それぞれの受験で答えの順番がランダムにシャッフルされます。小テスト設定の「問題内部をシャッフルする」を「Yes」にする必要があります。';
$string['singleanswer'] = '1つの答えを選択してください。';
$string['toomanyselected'] = 'あなたはオプションを選択しすぎました。';
