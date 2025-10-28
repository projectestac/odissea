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
 * Strings for component 'block_completion_progress', language 'ja', version '4.4'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = '完了したエレメントのHTMLカラーコードです。';
$string['completed_colour_title'] = '完了色';
$string['completion_not_enabled'] = 'このサイトでは完了トラッキングが有効にされていません。';
$string['completion_not_enabled_course'] = 'このコースでは完了トラッキングが有効にされていません。';
$string['completion_progress:addinstance'] = '新しい完了プログレスブロックを追加する';
$string['completion_progress:myaddinstance'] = 'マイホームページに完了プログレスブロックを追加する';
$string['completion_progress:overview'] = 'すべての学生の完了プログレスのコース概要を表示する';
$string['completion_progress:showbar'] = '完了プログレスブロック内にバーを表示する';
$string['config_activitiesincluded'] = '含まれる活動';
$string['config_activitycompletion'] = '完了が設定された活動すべて';
$string['config_default_title'] = '完了プログレス';
$string['config_group'] = '次のグループにのみ表示する';
$string['config_header_monitored'] = '監視';
$string['config_icons'] = 'バーにアイコンを表示する';
$string['config_longbars'] = 'ロングバーの表示方法';
$string['config_orderby'] = '並べ替え';
$string['config_orderby_course_order'] = 'コース内の並び順';
$string['config_orderby_due_time'] = '「 {$a} 」の時間を使用する';
$string['config_percentage'] = '学生にパーセンテージを表示する';
$string['config_scroll'] = 'スクロール';
$string['config_selectactivities'] = '活動を選択する';
$string['config_selectedactivities'] = '選択された活動';
$string['config_squeeze'] = '縮小';
$string['config_title'] = '代替タイトル';
$string['config_wrap'] = '折り返し';
$string['coursenametoshow'] = 'ダッシュボードに表示するコース名';
$string['defaultlongbars'] = 'ロングバーのデフォルト表示';
$string['forceiconsinbar'] = 'プログレスバーにアイコンを強制する';
$string['fullname'] = 'コースフルネーム';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'まだ完了していない未来のエレメントのHTMLカラーコードです。';
$string['futureNotCompleted_colour_title'] = '未来の未完了色';
$string['how_activitiesincluded_works'] = '活動の含みはどのように動作するのか';
$string['how_activitiesincluded_works_help'] = '<p>デフォルトでは活動完了が設定されている活動すべてがバーに含まれます。</p>
<p>あなたは手動で含める活動を選択することもできます。</p>';
$string['how_group_works'] = 'グループ表示はどのように動作するのか';
$string['how_group_works_help'] = '<p>グループを選択することによりこのブロックの表示を指定したグループのみに制限します。</p>';
$string['how_longbars_works'] = 'どのような長さにバーを表示するのか';
$string['how_longbars_works_help'] = '<p>バーが設定された長さを超えた場合、以下の方法で表示することができます。</p>
<ul>
<li>1つの水平バーに縮小する</li>
<li>収まりきらないバーの部分を表示するため横にスクロールする</li>
<li>バーのすべての部分を表示するため複数行に折り返す</li>
</ul>
<p>バーが折り返された場合、「現在」サインは表示されないことに留意してください。</p>';
$string['how_ordering_works'] = '並べ替えはどのように動作するのか';
$string['how_ordering_works_help'] = '<p>活動プログレスブロックで活動を並べ替えるための方法が2つあります。</p>
<ul>
<li><em>「完了予定日」の時間を使用する</em> (デフォルト)<br />バーの順番に活動/リソースの完了予定日が使用されます。活動/リソースに完了予定日がない場合、代わりにコース内の並び順が使用されます。</li>
<li><em>コースの並び順</em><br />活動/リソースはコースページの並び順と同じ順番に表示されます。このオプションが使用された場合、完了予定日は無視されます。このオプションが使用された場合、「現在」サインは表示されません。</li>
</ul>';
$string['how_selectactivities_works'] = '活動の含みはどのように動作するのか';
$string['how_selectactivities_works_help'] = '<p>手動で選択した活動をバーに含みます。「含まれる活動」に「選択された活動」が設定されていることを確認してください。</p>
<p>活動完了設定が設定された活動のみ含むことができます。</p>
<p>複数の活動を選択するにはCTRLキーを押したままにしてください。</p>';
$string['indeterminate'] = '?';
$string['lastonline'] = '最終コースアクセス';
$string['mouse_over_prompt'] = '情報を表示するにはバーの上にマウスポインタを移動するかバーをタッチしてください。';
$string['no_activities_config_message'] = '活動完了が設定された活動またはリソースがないか活動またはリソースが選択されていません。活動およびリソースの活動完了を設定した後、このブロックを設定してください。';
$string['no_activities_message'] = '監視されている活動またはリソースはありません。監視をセットアップするには設定を使用してください。';
$string['no_blocks'] = 'あなたのコースでは完了プログレスブロックは設定されていません。';
$string['no_courses'] = 'あなたはどのコースにも登録されていません。登録済みコースからのバーのみ表示されます。';
$string['no_visible_activities_message'] = '現在表示できる監視中の活動はありません。';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'まだ完了していない現在のエレメントのHTMLカラーコードです。';
$string['notCompleted_colour_title'] = '未完了色';
$string['not_all_expected_set'] = 'すべての活動の完了に「 {$a} 」日付セットが設定されているわけではありません。';
$string['now_indicator'] = '現在';
$string['overview'] = '学生概要';
$string['pluginname'] = '完了プログレス';
$string['progress'] = '進捗';
$string['progressbar'] = '完了プログレス';
$string['selectitem'] = '「 {$a} 」を選択する';
$string['shortname'] = 'コース省略名';
$string['showallinfo'] = 'すべての情報を表示する';
$string['showinactive'] = '活動していない学生を概要に表示する';
$string['showlastincourse'] = '学生の最後のコース時間を概要に表示する';
$string['submitted'] = '送信済み';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'まだ完了していない送信済みエレメントのHTMLカラーコードです。';
$string['submittednotcomplete_colour_title'] = '送信済み未完了色';
$string['time_expected'] = '予定日';
$string['why_set_the_title'] = 'なぜあなたはブロックインスタンスのタイトルを設定できるのですか?';
$string['why_set_the_title_help'] = '<p>完了プログレスブロックは複数インスタンス存在することができます。あなたは異なる一連の活動またはリソースを監視するため異なる完了プログレスブロックを使用することができます。例えばあなたは1つのブロックで課題の進捗を追跡して別のブロックで小テストを追跡することができます。この理由のためあなたはデフォルトタイトルをオーバーライドしてそれぞれのインスタンスにさらに適切なブロックタイトルを設定することができます。</p>';
$string['why_show_precentage'] = 'なぜ学生に進捗パーセンテージを表示しますか?';
$string['why_show_precentage_help'] = '<p>学生に全体の進捗のパーセンテージを表示することができます。</p>
<p>これは活動完了数をバーの合計活動数で除算して計算されます。</p>
<p>進捗のパーセンテージは学生がバーのアイテムの上にマウスポインタを移動するまで表示されます。</p>';
$string['why_use_icons'] = 'なぜあなたはアイコンを使用できるのですか?';
$string['why_use_icons_help'] = '<p>あなたはこのブロックが色覚が正常ではない学生にさらに視覚的に利用しやすいよう完了プログレスにチェックマークおよびバツ印アイコンを使用することができます。</p>
<p>あなたが文化的または個人的な理由で色が直感的ではないと考える場合、ブロックの意図をさらに明確にすることもできます。</p>';
$string['wrapafter'] = '折り返し時に次の行に制限する';
