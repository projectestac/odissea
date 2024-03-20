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
 * Strings for component 'tiny_multilang2', language 'ja', version '4.1'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlanguage'] = '言語を手動で追加する';
$string['addlanguage_desc'] = 'このオプションを選択した場合、あなたは下のテキストボックスに言語のISOコードを入力して手動で言語を追加できます。そうでない場合、あなたは言語パックに少なくとも2つの言語をインストールする必要があります。';
$string['helplinktext'] = '多言語コンテンツ (v2)';
$string['highlight'] = 'ハイライトデリミタ';
$string['highlight_desc'] = 'WYSIWYGエディタで多言語コンテンツの区切り文字 (例 {mlang XX} および {mlang}) を視覚的に強調表示します。';
$string['highlightcss'] = '言語タグ用CSS';
$string['highlightcss_desc'] = '多言語コンテンツの区切り文字を強調表示するためのCSSです。

多言語ブロックの言語を表示したい場合、あなたは次のようなものを使用できます (この例はバスク語用です。恐らく色はベストなものではありません):

<pre>
.multilang-begin:lang(eu):before {
    content: "eu";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['language_options_desc'] = '言語ボタンドロップダウンメニューの選択オプションです。
<br />
完全なリストは次から入手可能です: <small><a href=\'https://www.w3schools.com/tags/ref_language_codes.asp\'><u>https://www.w3schools.com/tags/ref_language_codes.asp</u></a></small>';
$string['language_setting'] = '言語ボタン設定';
$string['languageoptions'] = '言語';
$string['multilang2:desc'] = '多言語コンテンツの追加を支援します (多言語コンテンツ (v2) フィルタを有効にする必要があります)。';
$string['multilang2:langTagsInSelection'] = '選択されたテキストには言語タグが含まれています。タグをクリックして選択してください。';
$string['multilang2:language'] = '言語';
$string['multilang2:multiBlockElements'] = '選択されたテキストは複数の段落/ブロック要素に跨っています。1つのみ選択してください。';
$string['multilang2:other'] = 'フォールバック';
$string['multilang2:removetag'] = '言語タグを削除する';
$string['multilang2:viewlanguagemenu'] = 'TinyMCEエディタで言語ドロップダウンメニューを表示する';
$string['pluginname'] = '多言語コンテンツ (v2)';
$string['privacy:metadata'] = 'Tiny多言語コンテンツ (v2) フィルタプラグインはいかなる個人データも保存しません。';
$string['removealltags'] = 'すべての言語タグを削除する';
$string['requiremultilang2'] = '要多言語コンテンツ (v2) フィルタ';
$string['requiremultilang2_desc'] = 'この設定を有効にした場合、多言語コンテンツ (v2) フィルタが有効な場合のみ言語ドロップダウンメニューが表示されます。';
$string['showalllangs'] = 'すべての言語を表示する';
$string['showalllangs_desc'] = 'この設定を有効にした場合、言語ドロップダウンメニューにMoodleがサポートするすべての言語が表示されます。そうでない場合、インストールおよび有効化された言語のみ表示されます。';
