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
 * Strings for component 'qtype_shortanswer', language 'ja', version '4.4'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'さらに {no} 個の答え入力欄を追加する';
$string['answer'] = '解答: {$a}';
$string['answermustbegiven'] = '評定またはフィードバックがある場合、あなたは答えを入力する必要があります。';
$string['answerno'] = '答え {$a}';
$string['caseno'] = 'いいえ、大文字小文字は重要ではありません';
$string['casesensitive'] = '大文字小文字の区別';
$string['caseyes'] = 'はい、大文字小文字を区別します';
$string['correctansweris'] = '正解: {$a}';
$string['correctanswers'] = '正解';
$string['filloutoneanswer'] = '1つ以上の考えられる答えを入力してください。空白の答えは使用されません。「*」はどのような文字にでも合致するワイルドカードとして使用することができます。最初の組み合わせの答えは評点およびフィードバックを決定するため使用されます。';
$string['notenoughanswers'] = 'このタイプの問題には少なくとも {$a} 件の答えが必要です。';
$string['pleaseenterananswer'] = '答えを入力してください。';
$string['pluginname'] = '記述問題';
$string['pluginname_help'] = '問題 (イメージを含む) に対して解答者が言葉またはフレーズを入力します。異なる評点を持つ数個の正解を設定することができます。「大文字小文字の区別」オプションで「はい、文字の大小は合致する必要があります」が選択された場合、あなたは「Word」と「word」に異なる評点をつけることができます。';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = '記述問題の追加';
$string['pluginnameediting'] = '記述問題の編集';
$string['pluginnamesummary'] = '様々な答えのモデルと比較して評定される1つまたは少数の言葉を入力することができます。答えにはワイルドカードを含むことができます。';
$string['privacy:metadata'] = '記述問題タイププラグインは問題作成者がユーザプレファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:penalty'] = '問題が「複数受験インタラクティブ」または「アダプティブモード」で出題された場合のそれぞれの不正解のペナルティです。';
$string['privacy:preference:usecase'] = '解答の大文字小文字を区別するかどうか指定します。';
