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
 * Strings for component 'qtype_ordering', language 'ja', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = '絶対位置';
$string['addmultipleanswers'] = 'さらにアイテムを {$a} 追加する';
$string['addsingleanswer'] = 'さらにアイテムを 1 追加する';
$string['allornothing'] = 'すべてかゼロか';
$string['answer'] = 'アイテムテキスト';
$string['correctitemsnumber'] = '正解アイテム: {$a}';
$string['correctorder'] = 'これらのアイテムの正しい順序は以下の通りです:';
$string['defaultanswerformat'] = 'デフォルト解答フォーマット';
$string['defaultquestionname'] = '以下のアイテムを正しい順序にドラッグしてください。';
$string['draggableitemno'] = 'ドラッグ可能アイテム {no}';
$string['draggableitems'] = 'ドラッグ可能アイテム';
$string['duplicatesnotallowed'] = '重複するドラッグ可能アイテムは許可されません。文字列「 {$a->text} 」はすでに {$a->item} で使用されています。';
$string['editingordering'] = '順序問題を編集する';
$string['gradedetails'] = '評定詳細';
$string['gradingtype'] = '評定タイプ';
$string['gradingtype_help'] = '**すべてかゼロか**
&nbsp; すべてのアイテムが正しい位置にあれば、満点が与えられます。そうでなければ0点。

**絶対位置**
&nbsp; アイテムが正解と同じ位置にある場合、正解とみなされます。問題に対する最高可能評点は学生に表示されたアイテム数と**同じ**です。

**正解位置との相対関係**
&nbsp; アイテムが正解と同じ位置にある場合、正解とみなされます。正しいアイテムには表示されたアイテムの数から1を引いた評点が与えられます。不正解のアイテムは表示されたアイテムの数から1を引いた数およびそのアイテムの正しい位置からの距離を引いた数に等しい評点が与えられます。そのため、***n***個のアイテムが学生に表示された場合、それぞれのアイテムに利用可能な評点は***(n - 1)***、問題に利用可能な最高評点は***n x (n - 1)***となります。これは***(n² - n)***と同じです。

**次のアイテムとの相対関係 (最後を除く)**
&nbsp; アイテムの後に正解と同じアイテムが続く場合、そのアイテムは正解とみなされます。最後の位置にあるアイテムはチェックされません。そのため、この問題で可能な最高評点は学生に表示されたアイテム数より**1少ない**点となります。

**次のアイテムとの相対関係 (最後を含む)**
&nbsp; アイテムの後に正解と同じアイテムが続く場合、そのアイテムは正解とみなされます。これには最後のアイテムが含まれ、そのアイテムに続くアイテムがないことが条件となります。そのため、その問題で可能な最高評点は学生に表示されたアイテム数と**同じ**です。

**前後のアイテムとの相対関係**
&nbsp; 前のアイテムと次のアイテムの両方が正解と同じ場合、そのアイテムは正解とみなされます。最初のアイテムには前のアイテムが存在してはいけません。最後のアイテムには次のアイテムが存在してはいけません。そのため、それぞれのアイテムには2点の可能性があり、その問題で可能な最高評点は学生に表示されたアイテム数の**2倍**となります。

**前後のすべてのアイテムとの相対関係**
&nbsp; あるアイテムの前に正解と同じアイテムがすべてあり、その後ろに正解と同じアイテムがすべてある場合、そのアイテムは正解とみなされます。前のアイテムの順序は重要ではありません。また、次のアイテムの順序も重要ではありません。したがって、***n***個のアイテムが学生に表示された場合、それぞれのアイテムに利用可能な評定数は***(n - 1)***、問題で可能な最高評点は***n x (n - 1)***です。これは***(n² - n)***と同じです。

**最長順序部分集合**
&nbsp; 評点は最長順序の部分集合に含まれるアイテムの数で す。可能な限り高い評点は表示されるアイテムの数と同じです。部分集合には少なくとも 2 つのアイテムが必要です。サブセットは最初のアイテムから始まる必要はなく (ただし可能)、連続している必要もありません (ただし可能)。同じ長さの複数のサブセットがある場合、左から右に検索したときに最初に見つかったサブセット内のアイテムは 正解として表示されます。その他のアイテムは不正解としてマークされます。

**最長連続部分集合**
&nbsp; 評点は最も長く連続する部分集合に含まれるアイテムの数です。可能な限り高い評点は表示されるアイテムの数と同じです。サブセットには少なくとも 2 つのアイテムが必要です。サブセットは最初のアイテムから始める必要はなく (ただし可能)、連続していなければなりません。同じ長さの複数のサブセットがある場合、左から右に検索したときに最初に見つかったサブセット内のアイテムは 正解として表示されます。その他のアイテムは不正解としてマークされます。';
$string['highlightresponse'] = '解答の正誤を強調表示する';
$string['horizontal'] = '水平';
$string['incorrectitemsnumber'] = '不正解アイテム: {$a}';
$string['layouttype'] = 'アイテムレイアウト';
$string['layouttype_help'] = 'アイテムを縦に表示するか、横に表示するか選択してください。';
$string['longestcontiguoussubset'] = '最長連続部分集合';
$string['longestorderedsubset'] = '最長順序部分集合';
$string['moved'] = '{$a->item} を移動しました。新しいポジション: {$a->position} / {$a->total}.';
$string['moveleft'] = '左に移動する';
$string['moveright'] = '右に移動する';
$string['noresponsedetails'] = '申し訳ございません、この問題に対する解答の詳細は不明です。';
$string['noscore'] = '評点なし';
$string['notenoughanswers'] = '順序問題は {$a} 以上の答えを持つ必要があります。';
$string['notenoughsubsetitems'] = 'サブセットには少なくとも {$a} 個のアイテムが必要です。';
$string['numberingstyle'] = '選択肢に番号を付けますか?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'デフォルトのナンバリングスタイルです。';
$string['numberingstyle_help'] = 'この問題でドラッグ可能なアイテムのナンバリングスタイルを選択してください。';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'ナンバリングなし';
$string['partialitemsnumber'] = '部分的正解アイテム: {$a}';
$string['pluginname'] = '順序';
$string['pluginname_help'] = 'いくつかのアイテムが混乱した順序で表示されます。アイテムをドラッグして意味のある順序にできます。';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = '順序問題を追加する';
$string['pluginnameediting'] = '順序問題を編集する';
$string['pluginnamesummary'] = '混乱したアイテムを意味のある順序にします。';
$string['positionx'] = 'ポジション {$a}';
$string['privacy:preference:gradingtype'] = '評定タイプです。';
$string['privacy:preference:layouttype'] = 'アイテムのレイアウトです。';
$string['privacy:preference:numberingstyle'] = '選択肢のナンバリングスタイルです。';
$string['privacy:preference:selectcount'] = '選択数です。';
$string['privacy:preference:selecttype'] = 'アイテム選択タイプです。';
$string['privacy:preference:showgrading'] = '評定詳細を表示するかどうか決定します。';
$string['regradeissuenumitemschanged'] = 'ドラッグ可能なアイテム数が変更されました。';
$string['relativeallpreviousandnext'] = '前後のすべてのアイテムとの相対関係';
$string['relativenextexcludelast'] = '次のアイテムとの相対関係 (最後を除く)';
$string['relativenextincludelast'] = '次のアイテムとの相対関係 (最後を含む)';
$string['relativeonepreviousandnext'] = '前後のアイテムとの相対関係';
$string['relativetocorrect'] = '正しい位置からの相対位置';
$string['removeeditor'] = 'HTMLエディタを削除する';
$string['removeitem'] = 'ドラッグ可能アイテムを削除する';
$string['scoredetails'] = '以下、この解答におけるそれぞれのアイテムの評定です:';
$string['selectall'] = 'すべてのアイテムを選択する';
$string['selectcontiguous'] = 'アイテムの連続したサブセットを選択する';
$string['selectcount'] = 'サブセットのサイズ';
$string['selectcount_help'] = '小テストで問題が表示されたときに表示されるアイテム数です。';
$string['selectrandom'] = 'アイテムのランダムなサブセットを選択する';
$string['selecttype'] = 'アイテム選択タイプ';
$string['selecttype_help'] = 'すべてのアイテムを表示するか、アイテムのサブセットを表示するか選択してください。';
$string['showgrading'] = '評定詳細';
$string['showgrading_help'] = '学生がこの順序問題に対する解答をレビューする場合、評点計算の詳細を表示するか秘匿するか選択してください。';
$string['vertical'] = '垂直';
