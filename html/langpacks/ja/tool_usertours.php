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
 * Strings for component 'tool_usertours', language 'ja', version '3.11'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = '上';
$string['actions'] = '操作';
$string['appliesto'] = '適用';
$string['backdrop'] = 'バックドロップと共に表示する';
$string['backdrop_help'] = 'あなたが指し示すページの一部をハイライトするためバックドロップを使用できます。

注意: バックドロップはナビゲーションバーのようなページの一部に互換性がありません。';
$string['below'] = '下';
$string['block'] = 'ブロック';
$string['block_named'] = 'ブロック名「 {$a} 」';
$string['cachedef_stepdata'] = 'ユーザツアーステップ一覧';
$string['cachedef_tourdata'] = 'すべてのページで取得される有効なユーザツアー情報';
$string['confirmstepremovalquestion'] = '本当にこのステップを削除してもよろしいですか?';
$string['confirmstepremovaltitle'] = 'ステップの削除を確認する';
$string['confirmtourremovalquestion'] = '本当にこのツアーを削除してもよろしいですか?';
$string['confirmtourremovaltitle'] = 'ツアーの削除を確認する';
$string['content'] = 'コンテンツ';
$string['content_heading'] = 'コンテンツ';
$string['content_help'] = '必要であればステップを記述するコンテンツをマルチメディアタグ (multi-languageコンテンツフィルタを使用) で囲まれたプレインテキストで追加できます。

代わりにフォーマットID、コンポーネントに言語ストリングIDを入力できます (角括弧なしまたはカンマの後のスペースなし)。';
$string['cssselector'] = 'CSSセレクタ';
$string['defaultvalue'] = 'デフォルト ({$a})';
$string['delay'] = 'ステップ表示までの遅延';
$string['delay_help'] = 'あなたは任意でステップが表示されるまでの遅延を追加できます。

この遅延はミリ秒です。';
$string['description'] = '説明';
$string['done'] = '完了';
$string['duplicatetour'] = 'ツアーを複製する';
$string['duplicatetour_name'] = '{$a} (コピー)';
$string['editstep'] = '編集 「 {$a} 」';
$string['enabled'] = '有効';
$string['endtour'] = 'ツアー終了';
$string['event_step_shown'] = '表示ステップ';
$string['event_tour_ended'] = 'ツアー終了';
$string['event_tour_reset'] = 'ツアーリセット';
$string['event_tour_started'] = 'ツアー開始';
$string['exporttour'] = 'ツアーをエクスポートする';
$string['filter_accessdate'] = 'アクセス日';
$string['filter_accessdate_enabled'] = 'アクセス日フィルタを有効にする';
$string['filter_accessdate_enabled_help'] = '新しいユーザまたは最近サイトにアクセスしたユーザにのみツアーを表示します。';
$string['filter_category'] = 'カテゴリ';
$string['filter_category_help'] = '選択されたカテゴリ内のコースに関連するページにツアーを表示します。';
$string['filter_course'] = 'コース';
$string['filter_course_help'] = '選択されたコースに関連するページにツアーを表示します。';
$string['filter_courseformat'] = 'コースフォーマット';
$string['filter_courseformat_help'] = '選択されたコースフォーマットを使用しているコースに関連するページにツアーを表示します。';
$string['filter_cssselector'] = 'CSSセレクタ';
$string['filter_cssselector_help'] = '指定したCSSセレクタがページに見つかった場合のみツアーを表示します。';
$string['filter_date_account_creation'] = '次の期間以内のユーザアカウント作成日';
$string['filter_date_first_login'] = '次の期間以内のユーザ初回アクセス日';
$string['filter_date_last_login'] = '次の期間以内のユーザ最新アクセス日';
$string['filter_header'] = 'ツアーフィルタ';
$string['filter_help'] = 'ツアーが表示されるコンディションを選択してください。ツアーをユーザに表示するためにはフィルタすべてに合致する必要があります。';
$string['filter_role'] = 'ロール';
$string['filter_role_help'] = 'ツアー表示時にコンテクスト内の選択されたロールにユーザを制限できます。例えば一般的にコース内で学生ロールが割り当てられたユーザには学生ロールのユーザに制限されたダッシュボードツアーは動作しません。ダッシュボードツアーはシステムロールのユーザにのみ制限できます。';
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
$string['nextstep'] = '次へ';
$string['options_heading'] = 'オプション';
$string['orphan'] = 'ターゲットが見つからない場合に表示する';
$string['orphan_help'] = 'ページ上にターゲットが見つからない場合にステップを表示します。';
$string['pathmatch'] = 'URL合致を適用する';
$string['pathmatch_help'] = 'この値に合致するURLのページ上にツアーが表示されます。

あなたはすべてを意味するワイルドカードとして「%」文字を使用できます。
例として以下の値を含みます:

* /my/% - ダッシュボードに合致します。
* /course/view.php?id=2 - 特定のコースに合致します。
* /mod/forum/view.php% - フォーラムディスカッション一覧に合致します。
* /user/profile.php% - ユーザプロファイルページに合致します。

あなたがツアーをサイトホームに表示したい場合、次の値を使用できます:  FRONTPAGE';
$string['pausetour'] = '一時停止';
$string['placement'] = '配置';
$string['placement_help'] = 'ステップはターゲットの上下左右に配置できます。モバイル表示に最適に調整されるため上下をお勧めします。

指定された場所の特定ページにステップが適合しない場合、自動的に他の場所に配置されます。';
$string['pluginname'] = 'ユーザツアー';
$string['previousstep'] = '前へ';
$string['privacy:metadata:preference:completed'] = 'ユーザがユーザツアーを完了した時刻です。';
$string['privacy:metadata:preference:requested'] = 'ユーザが最後に手動でユーザツアーをリクエストした時刻です。';
$string['privacy:request:preference:completed'] = 'あなたは「 {$a->name} 」ユーザツアーを {$a->time} に完了マークしました。';
$string['privacy:request:preference:requested'] = 'あなたは「 {$a->name} 」ユーザツアーを {$a->time} にリクエストしました。';
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
$string['target_selector_targetvalue_help'] = 'ページのほとんどの要素をターゲットにするためCSSセレクタを使用できます。あなたのウェブブラウザの開発ツールを使用して適切なセレクタを簡単に探せます。';
$string['target_unattached'] = 'ページ中央に表示する';
$string['targettype'] = 'ターゲットタイプ';
$string['targettype_help'] = 'それぞれのステップはページ (ターゲット) の一部に関連付けられます。ターゲットタイプは以下のとおりです:

* ブロック - 指定されたブロックの隣に表示します。
* CSSセレクタ - CSSを使用して正確に定義されたターゲットエリアです。
* ページ中央に表示する - 特定のページの一部に関連付ける必要のないステップです。';
$string['title'] = 'タイトル';
$string['title_help'] = 'ステップのタイトルは必要であればマルチメディアタグ (multi-languageコンテンツフィルタを使用) で囲まれたプレインテキストで追加できます。

代わりにフォーマットID、コンポーネントに言語ストリングIDを入力できます (カンマの後に角括弧またはスペースなし)。';
$string['tour1_content_addingblocks'] = '実際、あなたのページにブロックを追加する場合、慎重に考えてください。ブロックはMoodleアプリで表示されないため、一般的にあなたのサイトがブロックなしでも正常に動作することを確認した方が良いでしょう。';
$string['tour1_content_blockregion'] = 'ここにまだブロック領域があります。すべての機能がBoostテーマの別の場所にあるため、ナビゲーションおよび管理ブロックを完全に削除することをお勧めします。';
$string['tour1_content_customisation'] = 'あなたのサイトおよびフロントページの概観をカスタマイズする場合、このヘッダの角にある設定メニューを使用してください。編集モードを開始してください。';
$string['tour1_content_end'] = 'あなたのユーザツアーの最後です。あなたがフッタ内のリンクをクリックしてリセットしない限り、再度表示されることはありません。あなたは管理者としてこのような独自のツアーを作成することもできます!';
$string['tour1_content_navigation'] = '主ナビゲーションはこのナビゲーションドロワを使用します。サイト内でのあなたの場所に応じてコンテンツが更新されます。ナビゲーションドロワを表示または非表示にするには最上部のボタンを使用してください。';
$string['tour1_content_welcome'] = 'Boostテーマにようこそ。あなたが前のバージョンからアップグレードした場合、このテーマが少しだけ違う点に気付くことでしょう。';
$string['tour1_title_addingblocks'] = 'ブロック追加';
$string['tour1_title_blockregion'] = 'ブロック領域';
$string['tour1_title_customisation'] = 'カスタマイゼーション';
$string['tour1_title_end'] = 'ツアー終了';
$string['tour1_title_navigation'] = 'ナビゲーション';
$string['tour1_title_welcome'] = 'ようこそ';
$string['tour2_content_addblock'] = '編集モードを開始した場合、あなたはナビゲーションドロワよりブロックを追加できます。しかし、あなたのページにブロックを設置する場合、慎重に考えてください。ブロックはMoodleアプリで表示されないため、最良のユーザ経験のためにあなたのコースワークがブロックなしでも正常に動作することを確認した方が良いでしょう。';
$string['tour2_content_addingblocks'] = 'このボタンを使用することにより、あなたはこのページにブロックを追加できます。しかし、あなたのページにブロックを設置する場合、慎重に考えてください。ブロックはMoodleアプリで表示されないため、最良のユーザ経験のためにあなたのコースワークがブロックなしでも正常に動作することを確認した方が良いでしょう。';
$string['tour2_content_customisation'] = 'コース設定を変更する場合、このヘッダの角にある設定メニューを使用してください。すべての活動のホームページにも似たような設定メニューがあります。編集モードを開始してください。';
$string['tour2_content_end'] = 'あなたのユーザツアーの最後です。あなたがフッタ内のリンクをクリックしてリセットしない限り、再度表示されることはありません。必要であればサイト管理者はこのサイトのツアーをさらに作成することができます。';
$string['tour2_content_navigation'] = 'ナビゲーションはこのナビゲーションドロワを使用します。ナビゲーションドロワを表示または非表示にするには最上部のボタンを使用してください。あなたのコースセクションへのリンクが表示されます。';
$string['tour2_content_opendrawer'] = 'ナビゲーションドロワを開いてみてください。';
$string['tour2_content_participants'] = 'ここで参加者を表示します。あなたがアクセスして学生を追加または削除する場所でもあります。';
$string['tour2_content_welcome'] = 'Boostテーマにようこそ。あなたのサイトが前のバージョンからアップグレードされている場合、このコースページが少しだけ異なる点に気付くことでしょう。';
$string['tour2_title_addblock'] = 'ブロックを追加する';
$string['tour2_title_addingblocks'] = 'ブロック追加';
$string['tour2_title_customisation'] = 'カスタマイゼーション';
$string['tour2_title_end'] = 'ツアー終了';
$string['tour2_title_navigation'] = 'ナビゲーション';
$string['tour2_title_opendrawer'] = 'ナビゲーションドロワを開く';
$string['tour2_title_participants'] = 'コース参加者';
$string['tour2_title_welcome'] = 'ようこそ';
$string['tour3_content_dashboard'] = 'あなたの新しいダッシュボードには最も重要な情報に簡単にアクセスするための多くの機能があります。';
$string['tour3_content_displayoptions'] = 'コースはコース名、コース省略名、または最終アクセス日で並べ替えれます。

あなたはコースを概要情報で一覧表示またはデフォルトの「カード」表示に選択できます。';
$string['tour3_content_overview'] = 'コース概要ブロックではあなたが登録しているすべてのコースを表示します。

あなたは現在進行中のコース、過去または未来のコース、あなたが星を付けたコースを表示できます。';
$string['tour3_content_recentcourses'] = '最近アクセスされたコースブロックはあなたが最近アクセスしたコースを表示して直接アクセスできるようにします。';
$string['tour3_content_starring'] = 'あなたはコースを目立つように星を付けることができます。また、あなたに重要ではなくなったコースを隠すこともできます。

これらの操作はあなたの表示にのみ影響します。

あなたはコースを一覧表示、概要情報と共に表示、またはデフォルトの「カード」表示にできます。';
$string['tour3_content_timeline'] = 'タイムラインブロックはあなたの到来する重要なイベントを表示します。

あなたは「未来」の中で来週、来月または未来の活動の表示を選択できます。

あなたは期限切れのアイテムを表示することもできます。';
$string['tour3_title_dashboard'] = 'あなたのダッシュボード';
$string['tour3_title_displayoptions'] = '表示オプション';
$string['tour3_title_overview'] = 'コース概要';
$string['tour3_title_recentcourses'] = '最近アクセスされたコース';
$string['tour3_title_starring'] = 'コースの星付けおよび非表示';
$string['tour3_title_timeline'] = 'タイムラインブロック';
$string['tour4_content_groupconvo'] = 'グループメッセージングが有効にされているグループのメンバーである場合、あなたにはここにグループの会話が表示されます。

コースグループ会話ではあなたのグループ内の他のメンバーとプライベートかつ便利な場所で会話することができます。';
$string['tour4_content_icon'] = 'このアイコンを使ってどのページからでもあなたのメッセージにアクセスできます。

あなたに未読メッセージがある場合、ここに未読メッセージ数も表示されます。

メッセージングドロワを開いてツアーを続けるにはアイコンをクリックしてください。';
$string['tour4_content_messaging'] = '新しいメッセージング機能にはコース内でのグループメッセージングを含みます。同時にあなたにメッセージを送信できる人をコントロールすることもできます。';
$string['tour4_content_settings'] = 'あなたは歯車アイコンでメッセージング設定にアクセスできます。新しいプライバシー設定により誰があなたにメッセージを送信できるか制限できます。';
$string['tour4_content_starred'] = 'あなたが簡単に探せるよう特定の会話に星を付けることができます。';
$string['tour4_title_groupconvo'] = 'グループメッセージ';
$string['tour4_title_icon'] = 'メッセージング';
$string['tour4_title_messaging'] = '新しいメッセージングインターフェース';
$string['tour4_title_settings'] = 'メッセージング設定';
$string['tour4_title_starred'] = '星付き';
$string['tour_activityinfo_activity_student_content'] = '活動日付および活動を完了するために何をすべきか活動ページに表示されます。';
$string['tour_activityinfo_activity_student_title'] = 'New: 活動情報';
$string['tour_activityinfo_activity_teacher_content'] = '活動日付および完了コンディションがそれぞれの活動ページ (および任意でコースページ) で学生に表示されるようになりました。

学生が手動で活動完了をマークする必要がある活動では活動ページに「完了マークする」ボタンが表示されます。';
$string['tour_activityinfo_activity_teacher_title'] = 'New: 活動情報';
$string['tour_activityinfo_course_student_content'] = '活動日付および活動を完了するために何をすべきかコースページに表示されます。';
$string['tour_activityinfo_course_student_title'] = 'New: 活動情報';
$string['tour_activityinfo_course_teacher_content'] = '新しいコース設定「完了コンディションを表示する」および「活動日付を表示する」では活動の完了条件 (設定されている場合) および日付をコースページで学生に表示するかどうか選択できます。';
$string['tour_activityinfo_course_teacher_title'] = 'New: 活動情報';
$string['tour_final_step_content'] = 'ここであなたのユーザツアーは終了します。あなたがフッタのリンクを使ってリセットしない限り、再度表示されることはありません。';
$string['tour_final_step_title'] = 'ツアー終了';
$string['tour_resetforall'] = 'ツアーの状態がリセットされました。再度すべてのユーザに表示されます。';
$string['tourconfig'] = 'インポートするツアー設定ファイル';
$string['tourisenabled'] = 'ツアー有効';
$string['tourlist_explanation'] = 'あなたは好きなだけツアーを作成してMoodleの異なる部分で有効にできます。1ページあたり1ツアーのみ作成できます。';
$string['tours'] = 'ツアー';
$string['usertours'] = 'ユーザツアー';
$string['usertours:managetours'] = 'ユーザツアーを作成、編集および削除する';
$string['viewtour_edit'] = 'あなたは<a href="{$a->editlink}">ツアーデフォルトを編集して</a>再度ユーザすべてに<a href="{$a->resetlink}">ツアーの表示を強制できます</a>。';
$string['viewtour_info'] = 'これは「 {$a->tourname} 」ツアーです。パス「 {$a->path} 」に適用されます。';
