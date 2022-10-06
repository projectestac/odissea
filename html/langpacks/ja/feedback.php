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
 * Strings for component 'feedback', language 'ja', version '3.11'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = '質問を追加する';
$string['add_pagebreak'] = '改ページを追加する';
$string['adjustment'] = '表示方向';
$string['after_submit'] = '回答送信後';
$string['allowfullanonymous'] = '完全な匿名を許可する';
$string['analysis'] = '分析';
$string['anonymous'] = '匿名';
$string['anonymous_edit'] = 'ユーザ名を記録する';
$string['anonymous_entries'] = '匿名エントリ ({$a})';
$string['anonymous_user'] = '匿名ユーザ';
$string['answerquestions'] = '質問に回答する';
$string['append_new_items'] = '新しいアイテムを追加する';
$string['autonumbering'] = '質問の自動番号付け';
$string['autonumbering_help'] = 'それぞれの質問の自動ナンバリングを有効または無効にします。';
$string['average'] = '平均';
$string['bold'] = '太字';
$string['calendarend'] = '「{$a}」終了';
$string['calendarstart'] = '「{$a}」開始';
$string['cannotaccess'] = 'あなたはこのフィードバックにコースからのみアクセスすることができます。';
$string['cannotsavetempl'] = 'テンプレートの保存は許可されていません。';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captchaが設定されていません。';
$string['check'] = '多肢選択 - 複数回答';
$string['check_values'] = '考えられる回答';
$string['checkbox'] = '多肢選択 - 複数回答 (チェックボックス)';
$string['choosefile'] = 'ファイルを選択する';
$string['chosen_feedback_response'] = '選択されたフィードバックの回答';
$string['closebeforeopen'] = 'あなたは開始日時の前に終了日時を指定しました。';
$string['complete_the_form'] = '質問に回答する';
$string['completed'] = '完了';
$string['completed_feedbacks'] = '送信済み回答';
$string['completedon'] = '終了日時: {$a}';
$string['completiondetail:submit'] = 'フィードバックを送信する';
$string['completionsubmit'] = 'フィードバックが送信された場合、完了として表示する';
$string['configallowfullanonymous'] = 'この設定を有効にした場合、ログインを要求されせずにフィードバックを完了することができます。';
$string['confirmdeleteentry'] = '本当にこのエントリを削除してもよろしいですか?';
$string['confirmdeleteitem'] = '本当にこの要素を削除してもよろしいですか?';
$string['confirmdeletetemplate'] = '本当にこのテンプレートを削除してもよろしいですか?';
$string['confirmusetemplate'] = '本当にこのテンプレートを使用しますか?';
$string['continue_the_form'] = '質問への回答を続ける';
$string['count_of_nums'] = '桁数';
$string['courseid'] = 'コースID';
$string['creating_templates'] = 'これらの質問を新しいテンプレートとして保存する';
$string['delete_entry'] = 'エントリを削除する';
$string['delete_item'] = '質問を削除する';
$string['delete_old_items'] = '古いアイテムを削除する';
$string['delete_pagebreak'] = '改ページを削除する';
$string['delete_template'] = 'テンプレートを削除する';
$string['delete_templates'] = 'テンプレートを削除する ...';
$string['depending'] = '依存関係';
$string['depending_help'] = '依存アイテムを使用して他のアイテムの値に依存するアイテムを表示することができます。
<br />
<strong>以下、使用例です。</strong>
<br />
 <ul>
 <li>最初に他のアイテムが値を依存することになるアイテムを作成してください。</li>
<li>次に改ページを追加してください。</li>
<li>そして、最初に作成したアイテムの値に依存するアイテムを追加してください。アイテム作成フォーム内の「依存アイテム」リストから依存アイテム、そして「依存値」テキストボックスに必要な値を入力してください。</li>
</ul>
<strong>構造は次のようになります:</strong>
<ol>
<li>Item Q: あなたは自動車を所有していますか? A: yes/no</li>
<li>改ページ</li>
<li>Item Q: あなたの自動車の色は何色ですか?
<br />
(このアイテムはアイテム1の値=yesに依存します)</li>
<li>Item Q: あなたはなぜ自動車を所有していないのですか?
<br />
 (このアイテムはアイテム1の値=noに依存します)</li>
 <li>
 ... 他のアイテム</li>
</ol>';
$string['dependitem'] = 'アイテムに依存する';
$string['dependvalue'] = '値に依存する';
$string['description'] = '説明';
$string['do_not_analyse_empty_submits'] = '分析時に空を省略する';
$string['downloadresponseas'] = 'すべての回答をダウンロードする:';
$string['drop_feedback'] = 'このコースから削除する';
$string['dropdown'] = '多肢選択 - 単一回答 (ドロップダウンメニュ)';
$string['dropdown_values'] = '回答';
$string['dropdownlist'] = '多肢選択 - 単一回答 (ドロップダウンメニュ)';
$string['dropdownrated'] = 'ドロップダウンメニュ (評定)';
$string['edit_item'] = '質問を編集する';
$string['edit_items'] = '質問を編集する';
$string['email_notification'] = '送信通知を有効にする';
$string['email_notification_help'] = 'この設定を有効にした場合、フィードバック送信に関して教師に通知されます。';
$string['emailteachermail'] = '{$a->username} がフィードバック活動「 {$a->feedback} 」を完了しました。

あなたはここで閲覧することができます:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} がフィードバック活動「 {$a->feedback} 」を完了しました。</p>
<p>あなたは<a href="{$a->url}">ここ</a>で閲覧することができます。</p>';
$string['entries_saved'] = 'あなたの回答が保存されました。ありがとうございます。';
$string['eventresponsedeleted'] = '回答が削除されました。';
$string['eventresponsesubmitted'] = '回答が送信されました。';
$string['export_questions'] = '質問をエクスポートする';
$string['export_to_excel'] = 'Excelにエクスポートする';
$string['feedback:addinstance'] = '新しいフィードバックを追加する';
$string['feedback:complete'] = 'フィードバックを完了する';
$string['feedback:createprivatetemplate'] = 'プライベートテンプレートを作成する';
$string['feedback:createpublictemplate'] = 'パブリックテンプレートを作成する';
$string['feedback:deletesubmissions'] = '完了した送信を削除する';
$string['feedback:deletetemplate'] = 'テンプレートを削除する';
$string['feedback:edititems'] = 'アイテムを編集する';
$string['feedback:mapcourse'] = 'コースをグローバルフィードバックにマップする';
$string['feedback:receivemail'] = 'メール通知を受信する';
$string['feedback:view'] = 'フィードバックを表示する';
$string['feedback:viewanalysepage'] = '回答送信後、分析ページを表示する';
$string['feedback:viewreports'] = 'レポートを表示する';
$string['feedback_is_not_for_anonymous'] = '匿名ユーザはフィードバックを利用できません。';
$string['feedback_is_not_open'] = 'フィードバックは利用できません。';
$string['feedbackclose'] = 'フィードバック終了日時';
$string['feedbackcompleted'] = '{$a->username} が {$a->feedbackname} を完了しました。';
$string['feedbackopen'] = 'フィードバック開始日時';
$string['file'] = 'ファイル';
$string['filter_by_course'] = 'コースでフィルタする';
$string['handling_error'] = 'フィードバックモジュール処理中にエラーが発生しました。';
$string['hide_no_select_option'] = '「未選択」オプションを隠す';
$string['horizontal'] = '水平';
$string['import_questions'] = '質問をインポートする';
$string['import_successfully'] = '正常にインポートされました。';
$string['importfromthisfile'] = 'このファイルからインポートする';
$string['includeuserinrecipientslist'] = '{$a} を受信者リストに含む';
$string['indicator:cognitivedepth'] = 'フィードバック認知的';
$string['indicator:cognitivedepth_help'] = 'この指標はフィードバック活動で学生が到達した認識深度に基づきます。';
$string['indicator:cognitivedepthdef'] = 'フィードバック認知的';
$string['indicator:cognitivedepthdef_help'] = 'この分析間隔中、参加者がフィードバック活動から提供された認知的関与のこのパーセンテージに到達しました (レベル = 閲覧なし, 閲覧, 送信)。';
$string['indicator:socialbreadth'] = 'フィードバック社会的';
$string['indicator:socialbreadth_help'] = 'この指標はフィードバック活動で学生が到達した社会的広がりに基づきます。';
$string['indicator:socialbreadthdef'] = 'フィードバック社会的';
$string['indicator:socialbreadthdef_help'] = 'この分析間隔中、参加者がフィードバック活動から提供された社会的関与のこのパーセンテージに到達しました (レベル = 参加なし, 個人で参加, 他の人と参加)。';
$string['info'] = '情報';
$string['infotype'] = '情報タイプ';
$string['insufficient_responses'] = '不十分な回答';
$string['insufficient_responses_for_this_group'] = 'このグループの回答数は十分ではありません。';
$string['insufficient_responses_help'] = 'フィードバックを匿名にするには最低2つの回答が必要です。';
$string['item_label'] = 'ラベル';
$string['item_name'] = '質問';
$string['label'] = 'ラベル';
$string['labelcontents'] = 'コンテンツ';
$string['mapcourse'] = 'コースにフィードバックをマップする';
$string['mapcourse_help'] = 'デフォルトではあなたのホームページで作成したフィードバックフォームはサイト全体およびすべてのコースにフィードバックブロックを設置することで利用することができます。あなたはフィードバックをスティッキーブロックにすることで強制的に表示することもできます。また、特定のコースにマッピングすることでフィードバックフォームが表示されるコースを制限することもできます。';
$string['mapcourseinfo'] = 'このフィードバックはフィードバックブロックを使用してサイト全体で利用することができます。フィードバックをコースにマップすることにより、このフィードバックを利用できるコースを制限することができます。コースを検索してこのフィードバックをマップしてください。';
$string['mapcoursenone'] = 'マップされたコースはありません。このフィードバックはすべてのコースで利用できます。';
$string['mapcourses'] = 'フィードバックをコースにマップする';
$string['mappedcourses'] = 'マップ済みコース';
$string['mappingchanged'] = 'コースマッピングが変更されました。';
$string['maximal'] = '最大';
$string['messageprovider:message'] = 'フィードバックリマインダ';
$string['messageprovider:submission'] = 'フィードバック通知';
$string['minimal'] = '最小';
$string['mode'] = 'モード';
$string['modulename'] = 'フィードバック';
$string['modulename_help'] = 'フィードバック活動モジュールにおいて教師は多肢選択、○/×またはテキスト入力を含む様々な質問タイプを使用して参加者からフィードバックを収集できる独自調査を作成することができます。

必要であればフィードバック回答を匿名にすることができます。そして、結果を学生すべてに表示または教師にのみ閲覧制限することができます。サイトホームのフィードバックは非ログインユーザにより入力させることもできます。

フィードバック活動は以下のように使用することができます:

* 今後の参加者へのコンテンツ改善のためのコース評価として
* 参加者がコースモジュール、イベント等に参加できるようにするため
* コース選択、学校方針等のゲスト調査として
* 学生が匿名で内容を報告できるイジメ対策として';
$string['modulenameplural'] = 'フィードバック';
$string['move_item'] = 'この質問を移動する';
$string['multichoice'] = '多肢選択';
$string['multichoice_values'] = '多肢選択値';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = '多肢選択 (評定)';
$string['multichoicetype'] = '多肢選択タイプ';
$string['multiplesubmit'] = '複数回答を許可する';
$string['multiplesubmit_help'] = '匿名調査を有効にした場合、ユーザは無制限でフィードバックを送信することができます。';
$string['name'] = '名称';
$string['name_required'] = '名称を入力してください。';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = '次のページ';
$string['no_handler'] = 'アクションハンドラがありません:';
$string['no_itemlabel'] = 'ラベルなし';
$string['no_itemname'] = '無題';
$string['no_items_available_yet'] = '質問はまだ設定されていません。';
$string['no_templates_available_yet'] = 'テンプレートはまだ利用できません。';
$string['non_anonymous'] = 'ユーザ名を記録して回答と共に表示する';
$string['non_anonymous_entries'] = '非匿名エントリ ({$a})';
$string['non_respondents_students'] = '未回答の学生 ({$a})';
$string['not_completed_yet'] = 'まだ完了していません。';
$string['not_selected'] = '未選択';
$string['not_started'] = '未開始';
$string['numberoutofrange'] = '数字が範囲を超えています。';
$string['numeric'] = '数値回答';
$string['numeric_range_from'] = '開始数値';
$string['numeric_range_to'] = '終了数値';
$string['of'] = '/';
$string['oldvaluespreserved'] = 'すべての古い問題および割り当てられた値は保持されます';
$string['oldvalueswillbedeleted'] = '現在の問題およびすべてのユーザ回答が削除されます';
$string['only_one_captcha_allowed'] = '1フィードバックあたり1つのCAPTCHAのみ許可されています。';
$string['openafterclose'] = 'あなたは終了日の後に開始日を指定しました。';
$string['overview'] = '概要';
$string['page'] = 'ページ';
$string['page-mod-feedback-x'] = 'すべてのフィードバックモジュールページ';
$string['page_after_submit'] = '完了メッセージ';
$string['pagebreak'] = '改ページ';
$string['pluginadministration'] = 'フィードバック管理';
$string['pluginname'] = 'フィードバック';
$string['position'] = 'ポジション';
$string['previous_page'] = '前のページ';
$string['privacy:metadata:completed'] = 'フィードバックへの送信のレコードです。';
$string['privacy:metadata:completed:anonymousresponse'] = '送信が匿名で使用されるかどうか決定します。';
$string['privacy:metadata:completed:timemodified'] = '送信の最終修正時間です。';
$string['privacy:metadata:completed:userid'] = 'フィードバック活動を完了したユーザのIDです。';
$string['privacy:metadata:completedtmp'] = '進行中の送信のレコードです。';
$string['privacy:metadata:value'] = '質問への回答のレコードです。';
$string['privacy:metadata:value:value'] = '選択された回答です。';
$string['privacy:metadata:valuetmp'] = '進行中のサブシステムの質問に対する回答のレコードです。';
$string['public'] = '公開';
$string['question'] = '質問';
$string['questionandsubmission'] = '質問および回答設定';
$string['questions'] = '質問';
$string['questionslimited'] = '最初の {$a} 問の問題のみ表示しています。個別の回答またはすべてを確認するにはテーブルデータをダウンロードしてください。';
$string['radio'] = '多肢選択 - 単一回答';
$string['radio_values'] = '回答';
$string['ready_feedbacks'] = '準備済みフィードバック';
$string['required'] = '必須';
$string['resetting_data'] = 'フィードバック回答をリセットする';
$string['resetting_feedbacks'] = 'フィードバックのリセット';
$string['response_nr'] = '回答No';
$string['responses'] = '回答';
$string['responsetime'] = '回答時間';
$string['save_as_new_item'] = '新しい質問として保存する';
$string['save_as_new_template'] = '新しいテンプレートとして保存する';
$string['save_entries'] = 'あなたの回答を送信する';
$string['save_item'] = '質問を保存する';
$string['saving_failed'] = '保存に失敗しました。';
$string['search:activity'] = 'フィードバック - 活動情報';
$string['search_course'] = 'コースを検索する';
$string['searchcourses'] = 'コースを検索する';
$string['searchcourses_help'] = 'あなたがこのフィードバックに関連付けたいコースのコードまたは名称を検索してください。';
$string['selected_dump'] = '選択された$SESSION変数のインデックスは以下にダンプされます:';
$string['send'] = '送信';
$string['send_message'] = '通知を送信する';
$string['show_all'] = 'すべてを表示する';
$string['show_analysepage_after_submit'] = '分析ページを表示する';
$string['show_entries'] = '回答を表示する';
$string['show_entry'] = '回答を表示する';
$string['show_nonrespondents'] = '未回答者を表示する';
$string['site_after_submit'] = '回答送信後のサイト';
$string['sort_by_course'] = 'コース名で並べ替える';
$string['started'] = '開始済み';
$string['startedon'] = '開始日時: {$a}';
$string['subject'] = '件名';
$string['switch_item_to_not_required'] = '非必須に設定する';
$string['switch_item_to_required'] = '必須に設定する';
$string['template'] = 'テンプレート';
$string['template_deleted'] = 'テンプレートが削除されました。';
$string['template_saved'] = 'テンプレートが保存されました。';
$string['templates'] = 'テンプレート';
$string['textarea'] = '長文回答';
$string['textarea_height'] = '行数';
$string['textarea_width'] = '幅';
$string['textfield'] = '短文回答';
$string['textfield_maxlength'] = '最大文字数';
$string['textfield_size'] = 'テキストフィールド幅';
$string['there_are_no_settings_for_recaptcha'] = 'CAPTCHAが設定されていません。';
$string['this_feedback_is_already_submitted'] = 'あなたはすでにこの活動を完了しています。';
$string['typemissing'] = '「type」の値がありません。';
$string['update_item'] = '質問の変更を保存する';
$string['url_for_continue'] = '次の活動にリンクする';
$string['url_for_continue_help'] = 'フィードバック送信後、デフォルトではコースページにリンクされる「続ける」ボタンが表示されます。ここに活動のURLを入力した場合、代わりに次の活動へリンクすることができます。';
$string['use_one_line_for_each_value'] = 'それぞれの回答に1行使用してください!';
$string['use_this_template'] = 'このテンプレートを使用する';
$string['using_templates'] = 'テンプレートを使用する';
$string['vertical'] = '垂直';
