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
 * Strings for component 'block', language 'ja', version '4.4'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = '{$a} ブロックを追加する';
$string['anypagematchingtheabove'] = '上に合致するページすべて';
$string['appearsinsubcontexts'] = 'サブコンテクストに表示する';
$string['assignrolesinblock'] = '{$a} ブロックにロールを割り当てる';
$string['blocksdrawertoggle'] = 'ブロックドロワを表示/非表示にする';
$string['blocksettings'] = 'ブロック設定';
$string['bracketfirst'] = '{$a} (最初)';
$string['bracketlast'] = '{$a} (最後)';
$string['configureblock'] = '{$a} ブロックを設定する';
$string['contexts'] = 'ページコンテクスト';
$string['contexts_help'] = 'コンテクストはオリジナルブロックのロケーション内でこのブロックを表示できる、より具体的なページのタイプです。オリジナルブロックのロケーションおよび現在のロケーションに応じて、あなたには異なるオプションがあります。例えばコースにブロックを追加して (すべてのサブページに表示されるようにした後) フォーラム内に移動します。再度ブロック設定を編集してフォーラムページ内でのみ表示されるよう制限することにより、あなたはコース内のフォーラムページのみでブロックを表示するよう制限できます。';
$string['createdat'] = 'オリジナルブロックロケーション';
$string['createdat_help'] = 'ブロックが作成されるオリジナルロケーションです。ブロック設定によりオリジナルロケーション内の他のロケーション (コンテクスト) にブロックを表示できます。例えばコースページに作成されたブロックはそのコースの活動内に表示できます。サイトホームに作成されたブロックはサイト全体を通して表示できます。';
$string['defaultregion'] = 'デフォルトの場所';
$string['defaultregion_help'] = 'テーマではブロックを表示するために1つまたはそれ以上の名称付きブロック領域を定義できます。この設定ではあなたがこのブロックをデフォルトで表示させたい場所を定義します。必要であれば、特定のページ上で場所をオーバーライドできます。';
$string['defaultweight'] = 'デフォルトの加重';
$string['defaultweight_help'] = 'デフォルトの加重では最上部または最下部等、あなたがブロックを表示したい場所を大まかに選択できます。最終的なロケーションはその場所のブロックすべてから計算されます (例えばブロック1つのみの場合、実質的にはトップに表示できます)。必要であれば、特定のページ上でこの値をオーバーライドできます。';
$string['deleteblock'] = '{$a} ブロックを削除する';
$string['deleteblockcheck'] = '本当にブロック {$a} を削除してもよろしいですか?';
$string['deleteblockinprogress'] = 'ブロック {$a} 削除中 ...';
$string['deleteblockwarning'] = '<p>あなたは他の場所に表示されているブロックを削除しようとしています。</p><p>オリジナルブロックのロケーション: {$a->location}<br />表示されているページタイプ: {$a->pagetype}</p><p>本当に続けてもよろしいですか?</p>';
$string['deletecheck'] = '{$a} ブロックを削除しますか?';
$string['deletecheck_modal'] = 'ブロックを削除してもよろしいですか?';
$string['hideblock'] = '{$a} ブロックを隠す';
$string['hidepanel'] = 'パネルを隠す';
$string['moveblock'] = '{$a} ブロックを移動する';
$string['moveblockafter'] = '{$a} ブロックの後にブロックを移動する';
$string['moveblockbefore'] = '{$a} ブロックの前にブロックを移動する';
$string['moveblockinregion'] = '{$a} の場所にブロックを移動する';
$string['movingthisblockcancel'] = 'このブロック ({$a}) を移動する';
$string['myblocks'] = 'マイブロック';
$string['onthispage'] = 'このページ';
$string['pagetypes'] = 'ページタイプ';
$string['pagetypewarning'] = '前回選択したページタイプを選択できないようになりました。以下より最も適切なページタイプを選択してください。';
$string['privacy:metadata:userpref:dockedinstance'] = 'ユーザがブロックをドックした時のレコードです。';
$string['privacy:metadata:userpref:hiddenblock'] = 'ユーザがブロックを折り畳み/非表示にした時のレコードです。';
$string['privacy:request:blockisdocked'] = 'ブロックがドックされたかどうか示します。';
$string['privacy:request:blockishidden'] = 'ブロックが折り畳み/非表示にされたかどうか示します。';
$string['region'] = '場所';
$string['restrictpagetypes'] = '表示するページタイプ';
$string['showblock'] = '{$a} ブロックを表示する';
$string['showoncontextandsubs'] = '「 {$a} 」およびその中のページすべてに表示する';
$string['showoncontextonly'] = '「 {$a} 」にのみ表示する';
$string['showonentiresite'] = 'サイト全体に表示する';
$string['showonfrontpageandsubs'] = 'サイトホームおよびサイトホームに追加されたページすべてに表示する';
$string['showonfrontpageonly'] = 'サイトホームにのみ表示する';
$string['subpages'] = 'ページを選択する';
$string['thisspecificpage'] = 'このページ';
$string['visible'] = '可視性';
$string['weight'] = '加重';
$string['wherethisblockappears'] = 'このブロックが表示される場所';
