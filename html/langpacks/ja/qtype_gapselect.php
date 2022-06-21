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
 * Strings for component 'qtype_gapselect', language 'ja', version '3.11'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'さらに {no} 個の空白の選択肢を追加する';
$string['answer'] = '答え';
$string['blanknumber'] = '空白 {$a}';
$string['choices'] = '選択肢';
$string['choicex'] = '選択肢 [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'ドロップダウンメニュー';
$string['combinedcontrolnamegapselectplural'] = 'ドロップダウンメニュー';
$string['correctansweris'] = '正解: {$a}';
$string['errorblankchoice'] = '選択肢を確認してください: 選択肢 {$a} は空白です。';
$string['errormissingchoice'] = '問題テキストを確認してください: {$a} は選択肢に見つかりませんでした! プレースホルダでの使用には存在する選択肢番号のみ許可されます。';
$string['errornoslots'] = '問題テキストにはミッシングワードを示す「 [[1]]  」のようなプレースホルダを含む必要があります。';
$string['errorquestiontextblank'] = 'あなたは問題テキストを入力する必要があります。';
$string['group'] = 'グループ';
$string['pleaseputananswerineachbox'] = 'それぞれのテキストボックスに答えを入力してください。';
$string['pluginname'] = 'ミッシングワード選択';
$string['pluginname_help'] = 'ミッシングワード選択問題ではドロップダウンメニューから選択するためレスポンデントを必要とします。1、2、3 ... と指定された正解の選択肢に対して[[1]]、[[2]]、[[3]] ... は問題テキスト内でそれぞれのプレースホルダとして使用されます。問題を難しくするためさらに答えの選択肢を追加することができます。それぞれのドロップダウンメニューで利用できる答えを制限するため答えの選択肢をグループ分けすることができます。';
$string['pluginnameadding'] = 'ミッシングワード選択問題の追加';
$string['pluginnameediting'] = 'ミッシングワード選択問題の編集';
$string['pluginnamesummary'] = 'ドロップダウンメニューを使って問題テキスト内の足りない言葉を埋めます。';
$string['privacy:metadata'] = 'ミッシングワード選択問題タイププラグインは問題作成者がユーザプリファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:penalty'] = '問題が「複数回受験インタラクティブ」または「アダプティブモード」で出題された場合のそれぞれの不正解のペナルティです。';
$string['privacy:preference:shuffleanswers'] = '解答を自動的にシャッフルするかどうか指定します。';
$string['shuffle'] = 'シャッフル';
$string['tagsnotallowed'] = '{$a->tag} は許可されません ({$a->allowed} のみ許可されます)。';
$string['tagsnotallowedatall'] = '{$a->tag} は許可されません (ここでHTMLは許可されません)。';
