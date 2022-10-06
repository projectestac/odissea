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
 * Strings for component 'qtype_numerical', language 'ja', version '3.11'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = '受け入れることのできるエラー範囲';
$string['addmoreanswerblanks'] = 'さらに {no} 個の答え入力欄を追加する';
$string['addmoreunitblanks'] = 'さらに {no} 個の単位を追加する';
$string['answercolon'] = '答え:';
$string['answererror'] = 'エラー';
$string['answermustbenumberorstar'] = '答えには「-1.234」「3e8」のような数値、または「*」を使用してください。';
$string['answerno'] = '解答 {$a}';
$string['decfractionofquestiongrade'] = '問題評点の小数 (0-1) として';
$string['decfractionofresponsegrade'] = '解答評点の小数 (0-1) として';
$string['decimalformat'] = '小数';
$string['editableunittext'] = 'テキスト入力エレメント';
$string['errornomultiplier'] = 'あなたはこの単位の乗数を指定する必要があります。';
$string['errorrepeatedunit'] = 'あなたは同じ名称で2つの単位を設定することはできません。';
$string['geometric'] = '対数';
$string['invalidnumber'] = 'あなたは有効な数値を入力する必要があります。';
$string['invalidnumbernounit'] = 'あなたは有効な数字を入力する必要があります。あなたの解答に単位を含まないでください。';
$string['invalidnumericanswer'] = 'あなたが入力した答えの1つが有効な数字ではありません。';
$string['invalidnumerictolerance'] = 'あなたが入力した許容範囲の1つが有効な数字ではありません。';
$string['leftexample'] = '$1.00または£1.00のように左側';
$string['manynumerical'] = '単位は任意です。単位が入力された場合、評定される前に解答を単位1で変換するため使用されます。';
$string['multiplier'] = '乗数';
$string['nominal'] = '絶対';
$string['noneditableunittext'] = '単位1の編集不可テキスト';
$string['nonvalidcharactersinnumber'] = '有効ではない文字が数字として入力されています。';
$string['notenoughanswers'] = 'あなたは少なくとも1つの答えを入力する必要があります。';
$string['nounitdisplay'] = '単位評定なし';
$string['numericalmultiplier'] = '乗数';
$string['numericalmultiplier_help'] = '乗数は正しい数値の解答に掛けられる要素です。

最初の単位 (単位1) はデフォルト乗数に1を持ちます。従って正しい数値の解答が500、あなたが設定した単位1 (デフォルト乗数=1) の単位がWの場合、正解は5500Wになります。

あなたが乗数0.001の単位kWを追加した場合、正解は5.5kWになります。これは5500Wまたは5.5kWの解答が正解とされることを意味します。

許容されるエラーも乗算されることに留意してください。そのため、許容されるエラーが100Wの場合、0.1kWのエラーとなります。';
$string['oneunitshown'] = '単位1が表示されます。数字の解答のみ評定されます。';
$string['onlynumerical'] = '単位の使用は許可されません。数字の解答のみ評定されます。';
$string['pleaseenterananswer'] = '答えを入力してください。';
$string['pleaseenteranswerwithoutthousandssep'] = '3桁区切り ({$a}) を使用せずに答えを入力してください。';
$string['pluginname'] = '数値問題';
$string['pluginname_help'] = '数値問題は学生からは記述問題のように見えます。記述問題と異なる点は数値問題では間違いを受け入れるようにできることです。このことにより連続した範囲の答えを設定することができます。例えば正解が10で受け入れることのできるエラー範囲が2の場合、8から12までの間の答えが正解とされます。';
$string['pluginnameadding'] = '数値問題の追加';
$string['pluginnameediting'] = '数値問題の編集';
$string['pluginnamesummary'] = '単位を使って数値で解答することができます。また、さまざまな解答モデルに対して許容範囲を設定して評定することができます。';
$string['privacy:metadata'] = '数字問題タイププラグインは問題作成者がユーザプリファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:multichoicedisplay'] = '単位をテキスト入力要素として表示するか、複数選択肢から選択するか、ドロップダウンメニュとして表示するか指定します。';
$string['privacy:preference:penalty'] = '問題が「複数回受験インタラクティブ」または「アダプティブモード」で出題された場合のそれぞれの不正解のペナルティです。';
$string['privacy:preference:unitgradingtypes'] = '単位ペナルティが解答評点または問題評点の端数 (0-1) として適用されるかどうか指定します。';
$string['privacy:preference:unitpenalty'] = '解答評点または問題評点の何分の1 (0-1) を適用しますか?';
$string['privacy:preference:unitrole'] = '単位が必須なのか、オプションなのか、それとも期待されていないのか指定します。';
$string['privacy:preference:unitsleft'] = '単位を左に表示するか (例: $、£)、右に表示するか (例: kg、km、cm) 指定します。';
$string['relative'] = '相対';
$string['rightexample'] = '1.00cmまたは1.00kmのように右側';
$string['selectunit'] = '単位を選択してください。';
$string['selectunits'] = '単位を選択する';
$string['studentunitanswer'] = '単位入力に使用する';
$string['tolerancetype'] = '許容誤差タイプ';
$string['unit'] = '単位';
$string['unitappliedpenalty'] = 'この評点には正しくない単位に対する {$a} のペナルティを含みます。';
$string['unitchoice'] = '複数選択';
$string['unitedit'] = '単位を編集する';
$string['unitgraded'] = '単位は必須であり、評定されます。';
$string['unithandling'] = '単位処理';
$string['unitincorrect'] = 'あなたは正しい単位を割り当てていません。';
$string['unitmandatory'] = '必須';
$string['unitmandatory_help'] = '* 入力された単位を使用して解答が評定されます。

* 単位フィールドが空の場合、単位ペナルティが適用されます。';
$string['unitnotselected'] = 'あなたは単位を選択する必要があります。';
$string['unitonerequired'] = 'あなたは少なくとも1つの単位を入力する必要があります。';
$string['unitoptional'] = '任意の単位';
$string['unitoptional_help'] = '* 単位フィールドが空ではない場合、解答はこの単位を使用して評定されます。
* 単位が正しくなかったり不明な場合、解答は有効ではないとみなされます。';
$string['unitpenalty'] = '単位ペナルティ';
$string['unitpenalty_help'] = '次の場合にペナルティが適用されます:

* 単位入力ボックスに正しくない単位が入力された場合、または
* 数字入力ボックスに単位が入力された場合';
$string['unitposition'] = '単位の位置';
$string['units'] = '単位';
$string['unitselect'] = 'ドロップダウンメニュ';
$string['unitx'] = '単位 {no}';
$string['validnumberformats'] = '有効な数値フォーマット';
$string['validnumberformats_help'] = '* 正則数 13500.67、13 500.67、13500,67または13 500,67

 * あなたの言語パック設定 (langconfig.phpファイル) が3桁区切りに「,」を使用する場合、常に13,500.67 : 13,500のように小数点を入力してください。

* 例えば1.350067 * 10<sup>4</sup>のような指数の場合、1.350067 E4 : 1.350067 E04を使用してください。';
$string['validnumbers'] = '13500.67, 13 500.67, 13,500.67, 13500,67, 13 500,67, 1.350067 E4または1.350067 E04';
$string['xmustbenumeric'] = '{$a} は数字にする必要があります。';
$string['xmustnotbenumeric'] = '{$a} を数字にすることはできません。';
$string['youmustenteramultiplierhere'] = 'あなたはここに乗数を入力する必要があります。';
