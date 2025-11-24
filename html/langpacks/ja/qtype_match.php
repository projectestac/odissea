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
 * Strings for component 'qtype_match', language 'ja', version '4.5'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = '答え {$a}';
$string['availablechoices'] = '利用可能な選択肢';
$string['blanksforxmorequestions'] = 'さらに {no} 個の問題入力欄を追加する';
$string['correctansweris'] = '正解: {$a}';
$string['deletedchoice'] = '[削除済み選択肢]';
$string['deletedsubquestion'] = '受験開始後、問題のこの部分は削除されました。';
$string['filloutthreeqsandtwoas'] = 'あなたは少なくとも2つの問題および3つの答えを提供する必要があります。問題が空白の答えを使用して誤答を余分に提供することもできます。問題および答えが空白のエントリは無視されます。';
$string['nomatchinganswer'] = 'あなたは組み合わせ問題「 {$a} 」の答えを指定する必要があります。';
$string['nomatchinganswerforq'] = 'あなたはこの問題の答えを指定する必要があります。';
$string['notenoughqsandas'] = 'あなたは少なくとも {$a->q} 問の問題および {$a->a} 個の答えを提供する必要があります。';
$string['notenoughquestions'] = 'あなたは少なくとも {$a} 問の問題および答えの組み合わせを提供する必要があります。';
$string['pleaseananswerallparts'] = '問題のすべての部分に答えてください。';
$string['pluginname'] = '組み合わせ問題';
$string['pluginname_help'] = '組み合わせ問題では解答者が名称または文章のリスト (問題) を別の名称または文章のリスト (答え) に正しく合わせる必要があります。';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = '組み合わせ問題の追加';
$string['pluginnameediting'] = '組み合わせ問題の編集';
$string['pluginnamesummary'] = '多くのサブ問題の答えは可能性のある答えの一覧より選択されるべきです。';
$string['privacy:metadata'] = '組み合わせ問題タイププラグインは問題作成者がユーザプレファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:penalty'] = '問題が「複数受験インタラクティブ」または「アダプティブモード」で出題された場合のそれぞれの不正解のペナルティです。';
$string['privacy:preference:shuffleanswers'] = '解答を自動的にシャッフルするかどうか指定します。';
$string['regradeissuenumchoiceschanged'] = '選択肢数が変わりました。';
$string['regradeissuenumstemschanged'] = 'サブ問題数が変わりました。';
$string['shuffle'] = 'シャッフル';
$string['shuffle_help'] = 'この設定を有効にした場合、同時に活動設定内の「問題内部をシャッフルする」を有効にされた場合、問題の順番が受験ごとにランダムにシャッフルされます。組み合わせ問題の場合、問題のみがこのパラメータに影響を受けます。答えの選択肢は常にシャッフルされます。';
