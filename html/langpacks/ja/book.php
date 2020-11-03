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
 * Strings for component 'book', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   book
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = '章を追加する';
$string['addafterchapter'] = '新しい章を「 {$a->title} 」の後に追加する';
$string['book:addinstance'] = '新しいブックを追加する';
$string['book:edit'] = 'ブックの章を編集する';
$string['book:read'] = 'ブックを表示する';
$string['book:viewhiddenchapters'] = 'ブックの非表示の章を表示する';
$string['chapterandsubchaptersdeleted'] = '章「 {$a->title} 」および節「 {$a->subchapters} 」が削除されました。';
$string['chapterdeleted'] = '章「 {$a->title} 」が削除されました。';
$string['chapters'] = '章';
$string['chaptertitle'] = '章題';
$string['confchapterdelete'] = '本当にこの章を削除してもよろしいですか?';
$string['confchapterdeleteall'] = '本当にこの章およびすべての節を削除してもよろしいですか?';
$string['content'] = 'コンテンツ';
$string['customtitles'] = 'カスタムタイトル';
$string['customtitles_help'] = '通常、章題は自動的に目次 (TOC) およびコンテンツ上の見出しに表示されます。

「カスタムタイトル」チェックボックスがチェックされた場合、章題はコンテンツの上の見出しとしては表示されません。コンテンツの一部として異なるタイトル (恐らく、章題よりも長いタイトル) を入力することができます。';
$string['deletechapter'] = '章「 {$a} 」を削除する';
$string['editchapter'] = '章「 {$a} 」を編集する';
$string['editingchapter'] = '章を編集する';
$string['errorchapter'] = 'ブックの章の読み込み中にエラーが発生しました。';
$string['eventchaptercreated'] = '章が作成されました。';
$string['eventchapterdeleted'] = '章が削除されました。';
$string['eventchapterupdated'] = '章が更新されました。';
$string['eventchapterviewed'] = '章が閲覧されました。';
$string['hidechapter'] = '章「 {$a} 」を隠す';
$string['indicator:cognitivedepth'] = 'ブック認知的';
$string['indicator:cognitivedepthdef'] = 'ブック認知的';
$string['indicator:cognitivedepthdef_help'] = 'この分析間隔中、参加者がブック活動から提供された認知的関与のこのパーセンテージに到達しました (レベル = 閲覧なし, 閲覧)。';
$string['indicator:cognitivedepth_help'] = 'この指標はブックリソースで学生が到達した認識深度に基づきます。';
$string['indicator:socialbreadth'] = 'ブック社会的';
$string['indicator:socialbreadthdef'] = 'ブック社会的';
$string['indicator:socialbreadthdef_help'] = 'この分析間隔中、参加者がブック活動から提供された社会的関与のこのパーセンテージに到達しました (レベル = 参加なし, 個人で参加)。';
$string['indicator:socialbreadth_help'] = 'この指標はブックリソースで学生が到達した社会的広がりに基づきます。';
$string['modulename'] = 'ブック';
$string['modulename_help'] = 'ブックモジュールにおいて教師は章および節のある本のような複数ページのリソースを作成することができます。ブックにはテキストおよびメディアファイルを含むことができます。ブックはセクションに分けた長い情報を表示するために有用です。

ブックは以下の用途に使用できます:

* 個別の学習要素の読書素材を表示するため
* スタッフ部門のハンドブックとして
* 学生ワークのショーケースポートフォリオとして';
$string['modulenameplural'] = 'ブック';
$string['movechapterdown'] = '章「 {$a} 」を下に移動する';
$string['movechapterup'] = '章「 {$a} 」を上に移動する';
$string['navexit'] = 'ブックを終了する';
$string['navimages'] = 'イメージ';
$string['navnext'] = '次';
$string['navnexttitle'] = '次へ: {$a}';
$string['navoptions'] = 'ナビゲーションリンクに利用可能なオプション';
$string['navoptions_desc'] = 'ブックページにおけるナビゲーション表示のオプションです。';
$string['navprev'] = '前';
$string['navprevtitle'] = '前へ: {$a}';
$string['navstyle'] = 'ナビゲーションスタイル';
$string['navstyle_help'] = '* イメージ - ナビゲーションにアイコンが使用されます。
* テキスト - ナビゲーションに章題が使用されます。';
$string['navtext'] = 'テキスト';
$string['navtoc'] = '目次のみ';
$string['nocontent'] = 'このブックに追加されたコンテンツはありません。';
$string['numbering'] = '章のフォーマット';
$string['numbering0'] = 'なし';
$string['numbering1'] = '番号';
$string['numbering2'] = '点';
$string['numbering3'] = 'インデント';
$string['numbering_help'] = '* なし - 章および節のタイトルは一切フォーマットされません。
* 数字 - 章および節は次のようにナンバリングされます: 1, 1.1, 1.2, 2, ...
* 黒丸 - 節がインデントされて黒丸と共に目次内に表示されます。
* インデント - 目次内の節がインデントされます。';
$string['numberingoptions'] = '利用可能な章のフォーマット';
$string['numberingoptions_desc'] = '目次内の章および節の表示オプションです。';
$string['page-mod-book-x'] = 'すべてのブックモジュールページ';
$string['pluginadministration'] = 'ブック管理';
$string['pluginname'] = 'ブック';
$string['previouschapter'] = '前の章';
$string['privacy:metadata'] = 'ブック活動モジュールはいかなる個人データも保存しません。';
$string['removeallbooktags'] = 'すべてのブックタグを削除する';
$string['search:activity'] = 'ブック - リソース情報';
$string['search:chapter'] = 'ブック - 章';
$string['showchapter'] = '章「 {$a} 」を表示する';
$string['subchapter'] = '節';
$string['subchapternotice'] = '(最初の章が作成された時点でのみ利用可能)';
$string['subplugintype_booktool'] = 'ブックツール';
$string['subplugintype_booktool_plural'] = 'ブックツール';
$string['tagarea_book_chapters'] = 'ブックの章';
$string['tagsdeleted'] = 'ブックタグが削除されました。';
$string['toc'] = '目次';
$string['top'] = 'トップ';
