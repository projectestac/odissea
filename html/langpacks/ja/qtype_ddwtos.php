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
 * Strings for component 'qtype_ddwtos', language 'ja', version '4.5'.
 *
 * @package     qtype_ddwtos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'さらに {no} 個の空白の選択肢を追加する';
$string['answer'] = '答え';
$string['blank'] = '空白';
$string['blanknumber'] = '空白 {$a}';
$string['choicesacceptedtext'] = 'ギャップにドラッグされるための答えを記述してください。
<br />
受け入れ可能なテキストフォーマットは次のとおりです: &lt;sub&gt;, &lt;sup&gt;, &lt;b&gt;, &lt;i&gt;, &lt;em&gt;, &lt;strong&gt; TeXも使用可能であり、最初および最後に「$$」を使用してください。';
$string['correctansweris'] = '正解: {$a}';
$string['errorlimitedchoice'] = '選択肢 [[{$a}]] は「無制限」に設定されていない状態で複数回使用されています。この問題を再度ご確認ください。';
$string['infinite'] = '無制限';
$string['pleaseputananswerineachbox'] = 'それぞれのテキストボックスに答えを入力してください。';
$string['pluginname'] = 'ドラッグ＆ドロップテキスト';
$string['pluginname_help'] = 'ドラッグ＆ドロップテキストは問題テキスト内の正しい空白部分に単語または語句をドラッグするためのレスポンデントを必要とします。1、2、3 ... と指定された正解の選択肢に対して[[1]]、[[2]]、[[3]] ... は問題テキスト内でそれぞれのプレースホルダとして使用されます。正解の選択肢は特定のグループ内の答えすべてを問題テキスト内の空白部分で同じ色にするためグループ分けすることができます。無制限にマークされた答えの選択肢は2つの以上の空白部分で使用することができます。';
$string['pluginname_link'] = 'question/type/ddwtos';
$string['pluginnameadding'] = 'ドラッグ＆ドロップテキストの追加';
$string['pluginnameediting'] = 'ドラッグ＆ドロップテキストの編集';
$string['pluginnamesummary'] = 'ドロップダウンメニューを使用して問題テキスト内の足りない言葉を埋めます。';
$string['privacy:metadata'] = 'ドラッグ＆ドロップテキスト問題タイププラグインは問題作成者がユーザプレファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:penalty'] = '問題が「複数受験インタラクティブ」または「アダプティブモード」で出題された場合のそれぞれの不正解のペナルティです。';
$string['privacy:preference:shuffleanswers'] = '解答を自動的にシャッフルするかどうか指定します。';
