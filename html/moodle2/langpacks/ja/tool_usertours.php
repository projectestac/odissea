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
 * Strings for component 'tool_usertours', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = '上';
$string['actions'] = '操作';
$string['appliesto'] = '適用';
$string['backdrop'] = 'バックドロップと共に表示する';
$string['backdrop_help'] = 'あなたが指し示すページの一部をハイライトするためにバックドロップを使用することができます。

注意: バックドロップはナビゲーションバーのような一部のページに互換性がありません。';
$string['below'] = '下';
$string['block'] = 'ブロック';
$string['block_named'] = 'ブロック名「 {$a} 」';
$string['cachedef_stepdata'] = 'ユーザツアーステップ一覧';
$string['cachedef_tourdata'] = 'すべてのページに取得される有効なユーザツアー情報';
$string['confirmstepremovalquestion'] = '本当にこのステップを削除してもよろしいですか?';
$string['confirmstepremovaltitle'] = 'ステップの削除を承認する';
$string['confirmtourremovalquestion'] = '本当にこのツアーを削除してもよろしいですか?';
$string['confirmtourremovaltitle'] = 'ツアーの削除を承認する';
$string['content'] = 'コンテンツ';
$string['content_heading'] = 'コンテンツ';
$string['content_help'] = 'ステップを記述するコンテンツは必要であればマルチメディアタグ (multi-languageコンテンツフィルタを使用) で囲まれたプレインテキストで追加することができます。

代わりにフォーマットID、コンポーネントに言語ストリングIDを入力することができます (角括弧なしまたはカンマの後のスペースなし)。';
$string['cssselector'] = 'CSSセレクタ';
$string['defaultvalue'] = 'デフォルト ({$a})';
$string['delay'] = 'ステップ表示までの遅延';
$string['delay_help'] = 'あなたは任意でステップが表示されるまでの遅延を追加することができます。

この遅延はミリ秒です。';
$string['description'] = '説明';
$string['done'] = '完了';
$string['editstep'] = '編集 「 {$a} 」';
$string['enabled'] = '有効';
$string['endtour'] = 'ツアー終了';
$string['event_step_shown'] = '表示ステップ';
$string['event_tour_ended'] = 'ツアー終了';
$string['event_tour_reset'] = 'ツアーリセット';
$string['event_tour_started'] = 'ツアー開始';
$string['exporttour'] = 'ツアーをエクスポートする';
$string['filter_header'] = 'ツアーフィルタ';
$string['filter_help'] = 'ツアーが表示されるコンディションを選択してください。ツアーをユーザに表示するためにはフィルタすべてに合致する必要があります。';
$string['filter_role'] = 'ロール';
$string['filter_role_help'] = 'ツアーでは表示時にコンテクスト内の選択されたロールにユーザを制限することができます。例えば一般的にコース内で学生ロールが割り当てられたユーザには学生ロールのユーザに制限されたダッシュボードツアーは動作しません。ダッシュボードツアーはシステムロールのユーザにのみ制限することができます。';
$string['filter_theme'] = 'テーマ';
$string['filter_theme_help'] = '選択されたテーマをユーザが使用している場合にツアーを表示します。';
$string['importtour'] = 'ツアーをインポートする';
$string['left'] = '左';
$string['modifyshippedtourwarning'] = 'これはMoodleに同梱されているユーザツアーです。あなたの修正すべては次のサイトアップグレードで上書きされる可能性があります。';
$string['movestepdown'] = 'ステップを下に移動する';
$string['movestepup'] = 'ステップを上に移動する';
$string['movetourdown'] = 'ツアーを下に移動する';
$string['movetourup'] = 'ツアーを上に移動する';
$string['name'] = '名称';
$string['newstep'] = '新しいステップ';
$string['newtour'] = '新しいツアーを作成する';
$string['next'] = '次へ';
$string['options_heading'] = 'オプション';
$string['orphan'] = 'ターゲットが見つからない場合に表示する';
$string['orphan_help'] = 'ページ上にターゲットが見つからない場合にステップを表示します。';
$string['pathmatch'] = 'URL合致を適用する';
$string['pathmatch_help'] = 'この値に合致するURLのページ上にツアーが表示されます。

あなたはすべてを意味するワイルドカードとして「%」文字を使用することができます。
例として以下の値を含みます:

* /my/% - ダッシュボードに合致します。
* /course/view.php?id=2 - 特定のコースに合致します。
* /mod/forum/view.php% - フォーラムディスカッション一覧に合致します。
* /user/profile.php% - ユーザプロファイルページに合致します。

あなたがツアーをサイトホームページに表示したい場合、次の値を使用することができます:  FRONTPAGE';
$string['pausetour'] = '一時停止';
$string['placement'] = '配置';
$string['placement_help'] = 'ステップはターゲットの上下左右に配置することができます。モバイル表示に最適に調整されるため、上下をお勧めします。

指定された場所の特定のページにステップが適合しない場合、自動的に他の場所に配置されます。';
$string['pluginname'] = 'ユーザツアー';
$string['reflex'] = 'クリックで進む';
$string['reflex_help'] = 'ターゲットがクリックされた場合、次のステップに進みます。';
$string['resettouronpage'] = 'このページのユーザツアーをリセットする';
$string['resumetour'] = '再開';
$string['right'] = '右';
$string['select_block'] = 'ブロックを選択する';
$string['selector_defaulttitle'] = '記述的なタイトルを入力してください。';
$string['selectordisplayname'] = 'CSSセレクタ合致「 {$a} 」';
$string['selecttype'] = 'ステップタイプを選択する';
$string['sharedtourslink'] = 'ツアーリポジトリ';
$string['skip'] = 'スキップ';
$string['target'] = 'ターゲット';
$string['target_block'] = 'ブロック';
$string['target_heading'] = 'ステップターゲット';
$string['target_selector'] = 'セレクタ';
$string['target_selector_targetvalue'] = 'CSSセレクタ';
$string['target_selector_targetvalue_help'] = 'ページのほとんどの要素をターゲットにするため、CSSセレクタを使用することができます。あなたのウェブブラウザの開発ツールを使用することにより適切なセレクタを簡単に探すことができます。';
$string['targettype'] = 'ターゲットタイプ';
$string['targettype_help'] = 'それぞれのステップはページ (ターゲット) の一部に関連付けられます。

* ブロック - 指定されたブロックの隣に表示します。
* CSSセレクタ - CSSを使用して正確に定義されたターゲットエリアです。
* ページ中央に表示する - 特定のページの一部に関連付ける必要のないステップです。';
$string['target_unattached'] = 'ページ中央に表示する';
$string['title'] = 'タイトル';
$string['title_help'] = 'ステップのタイトルは必要であればマルチメディアタグ (multi-languageコンテンツフィルタを使用) で囲まれたプレインテキストで追加することができます。

代わりにフォーマットID、コンポーネントに言語ストリングIDを入力することができます (角括弧なしまたはカンマの後のスペースなし)。';
$string['tour1_content_addingblocks'] = '実際、あなたのページにブロックを追加する場合、慎重に考えてください。ブロックはMoodleモバイルアプリで表示されないため、一般的にあなたのサイトがブロックなしでも正常に動作することを確認した方が良いでしょう。';
$string['tour1_content_blockregion'] = 'ここにまだブロック領域があります。すべての機能がBoostテーマの他の場所にあるため、ナビゲーションを削除して管理ブロックを完全に設定することをお勧めします。';
$string['tour1_content_customisation'] = 'あなたのサイトの概観をカスタマイズする場合、このヘッダの角にある設定メニューを使用してください。編集モードを開始してください。';
$string['tour1_content_end'] = 'これはMoodle 3.2の新たな機能、ユーザツアーです。あなたがフッタ内のリンクをクリックしてリセットしない限り、再度表示されることはありません。あなたは管理者としてこのような独自のツアーを作成することもできます!';
$string['tour1_content_navigation'] = '主ナビゲーションはこのナビゲーションドロワを使用します。サイト内でのあなたの場所に応じてコンテンツが更新されます。ナビゲーションドロワを表示または非表示にするには最上部のボタンを使用してください。';
$string['tour1_content_welcome'] = 'Moodle 3.2 Boostテーマにようこそ。あなたが以前Moodleを使用していた場合、少しだけ違う点に気付くことでしょう。';
$string['tour1_title_addingblocks'] = 'ブロック追加';
$string['tour1_title_blockregion'] = 'ブロック領域';
$string['tour1_title_customisation'] = 'カスタマイゼーション';
$string['tour1_title_end'] = 'ツアー終了';
$string['tour1_title_navigation'] = 'ナビゲーション';
$string['tour1_title_welcome'] = 'ようこそ';
$string['tour2_content_addblock'] = '編集モードを開始した場合、あなたはナビゲーションドロワよりブロックを追加することができます。しかし、あなたのページにブロックを設置する場合、慎重に考えてください。ブロックはMoodleモバイルアプリで表示されないため、学生の最良の経験のためにあなたのコースワークがブロックなしでも正常に動作することを確認した方が良いでしょう。';
$string['tour2_content_addingblocks'] = 'このボタンを使用することにより、あなたはこのページにブロックを追加することができます。しかし、あなたのページにブロックを設置する場合、慎重に考えてください。ブロックはMoodleモバイルアプリで表示されないため、学生の最良の経験のためにあなたのコースワークがブロックなしでも正常に動作することを確認した方が良いでしょう。';
$string['tour2_content_customisation'] = 'コース設定を変更する場合、このヘッダの角にある設定メニューを使用してください。すべての活動のホームページにも似たような設定メニューがあります。編集モードを開始してください。';
$string['tour2_content_end'] = 'これはMoodle 3.2の新たな機能、ユーザツアーです。あなたがフッタ内のリンクをクリックしてリセットしない限り、再度表示されることはありません。必要であればサイト管理者はこのサイトのツアーをさらに作成することができます。';
$string['tour2_content_navigation'] = 'ナビゲーションはこのナビゲーションドロワを使用します。ナビゲーションドロワを表示または非表示にするには最上部のボタンを使用してください。あなたのコースセクションへのリンクが表示されます。';
$string['tour2_content_opendrawer'] = 'ナビゲーションドロワを開いてみます。';
$string['tour2_content_participants'] = 'ここで参加者を表示します。あなたがアクセスして学生を追加または削除する場所でもあります。';
$string['tour2_content_welcome'] = 'Moodle 3.2 Boostテーマにようこそ。あなたが以前Moodleを使用していた場合、このコースページが少しだけ違う点に気付くことでしょう。';
$string['tour2_title_addblock'] = 'ブロックを追加する';
$string['tour2_title_addingblocks'] = 'ブロック追加';
$string['tour2_title_customisation'] = 'カスタマイゼーション';
$string['tour2_title_end'] = 'ツアー終了';
$string['tour2_title_navigation'] = 'ナビゲーション';
$string['tour2_title_opendrawer'] = 'ナビゲーションドロワを開く';
$string['tour2_title_participants'] = 'コース参加者';
$string['tour2_title_welcome'] = 'ようこそ';
$string['tourconfig'] = 'インポートするツアー設定ファイル';
$string['tourisenabled'] = 'ツアー有効';
$string['tourlist_explanation'] = 'あなたは好きなだけツアーを作成してMoodleの異なる部分で有効にすることができます。1ページあたり1ツアーのみ作成することができます。';
$string['tour_resetforall'] = 'ツアーの状態がリセットされました。再度すべてのユーザに表示されます。';
$string['tours'] = 'ツアー';
$string['usertours'] = 'ユーザツアー';
$string['usertours:managetours'] = 'ユーザツアーを作成、編集および削除する';
$string['viewtour_edit'] = 'あなたは<a href="{$a->editlink}">ツアーデフォルトを編集して</a>再度ユーザすべてに<a href="{$a->resetlink}">ツアーの表示を強制する</a>ことができます。';
$string['viewtour_info'] = 'これは「 {$a->tourname} 」ツアーです。パス「 {$a->path} 」に適用されます。';
