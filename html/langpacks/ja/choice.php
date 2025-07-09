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
 * Strings for component 'choice', language 'ja', version '4.4'.
 *
 * @package     choice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoices'] = 'さらに選択肢を追加する';
$string['allowmultiple'] = '2つ以上の選択を許可する';
$string['allowupdate'] = '投票内容の更新を許可する';
$string['answered'] = '投票済み';
$string['atleastoneoption'] = 'あなたは少なくとも1つの考えられる答えを提供する必要があります。';
$string['calendarend'] = '「{$a}」終了';
$string['calendarstart'] = '「{$a}」開始';
$string['cannotsubmit'] = '申し訳ございません、あなたの投票送信時に問題が発生しました。再度お試しください。';
$string['choice'] = '選択肢';
$string['choice:addinstance'] = '新しい投票を追加する';
$string['choice:choose'] = '投票を記録する';
$string['choice:deleteresponses'] = '投票結果を修正および削除する';
$string['choice:downloadresponses'] = '投票結果をダウンロードする';
$string['choice:readresponses'] = '投票結果を表示する';
$string['choice:view'] = '投票活動を表示する';
$string['choiceclose'] = '回答終了日時';
$string['choicefull'] = 'あなたが選択した1つまたはそれ以上のオプションはすでに選択されています。あなたの回答は保存されませんでした。違うものを選択してください。';
$string['choicename'] = '投票名';
$string['choiceopen'] = '回答開始日時';
$string['choiceoptions'] = '投票オプション';
$string['choiceoptions_help'] = 'ここであなたは参加者が選択しなければならないオプションを指定します。

あなたはどのような数でも入力できます。オプションを空白にした場合、そのオプションは表示されません。あなたが8個以上のオプションを追加したい場合、「フィールド 3 個をフォームに追加する」ボタンをクリックしてください。';
$string['choicesaved'] = 'あなたの投票が保存されました。';
$string['choicetext'] = '説明文';
$string['chooseaction'] = '操作を選択する ...';
$string['chooseoption'] = '選択: {$a}';
$string['closebeforeopen'] = 'あなたは開始日時の前に終了日時を指定しました。';
$string['completiondetail:submit'] = '選択する';
$string['completionsubmit'] = '選択する';
$string['description'] = '説明';
$string['deselectalloption'] = 'すべての「 {$a} 」を選択解除する';
$string['displayhorizontal'] = '水平に表示する';
$string['displaymode'] = 'オプション表示モード';
$string['displayvertical'] = '垂直に表示する';
$string['eventanswercreated'] = '投票回答が追加されました。';
$string['eventanswerdeleted'] = '投票の回答が削除されました。';
$string['eventanswersubmitted'] = '投票が作成されました。';
$string['eventanswerupdated'] = '投票が更新されました。';
$string['eventreportdownloaded'] = '投票レポートがダウンロードされました。';
$string['eventreportviewed'] = '投票レポートが閲覧されました。';
$string['expired'] = 'この活動は {$a} に終了しました。';
$string['full'] = '(上限到達)';
$string['havetologin'] = 'あなたは投票する前にログインする必要があります。';
$string['includeinactive'] = '利用停止ユーザからの回答を含む';
$string['indicator:cognitivedepth'] = '投票認知的';
$string['indicator:cognitivedepth_help'] = 'この指標は投票活動で学生が到達した認識深度に基づきます。';
$string['indicator:cognitivedepthdef'] = '投票認知的';
$string['indicator:cognitivedepthdef_help'] = 'この分析間隔中、参加者が投票活動から提供された認知的関与のこのパーセンテージに到達しました (レベル = 閲覧なし, 閲覧, 送信, フィードバックの閲覧)。';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '投票社会的';
$string['indicator:socialbreadth_help'] = 'この指標は投票活動で学生が到達した社会的広がりに基づきます。';
$string['indicator:socialbreadthdef'] = '投票社会的';
$string['indicator:socialbreadthdef_help'] = 'この分析間隔中、参加者が投票活動から提供された社会的関与のこのパーセンテージに到達しました (レベル = 参加なし, 個人で参加, 他の人と参加)。';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['limit'] = '投票制限数';
$string['limita'] = '制限: {$a}';
$string['limitanswers'] = '投票可能数を制限する';
$string['limitanswers_help'] = 'このオプションではあなたは参加者がそれぞれの選択オプションを選択できる数を制限できます。制限数に達した場合、そのオプションを選択できないようになります。

あなたがグループモードで活動を使用する場合、制限はグループごとになることに留意してください。例えば、制限に5に設定された場合、それぞれのグループの5名のメンバがオプションを選択できます。グループが3つある場合、これは5 x 3 = 15名の参加者がオプションを選択できることになります。

制限が無効にされた場合、すべての参加者がそれぞれのオプションを選択できます。';
$string['limitno'] = '制限 {no}';
$string['modulename'] = '投票';
$string['modulename_help'] = '投票活動モジュールにおいて教師は単一の質問をたずねることおよび複数の一連の回答を提供できます。

投票結果は学生が回答した後に公開、特定の日時に公開または一切公開しないことができます。投票結果は学生の氏名と共にまたは匿名で公開できます (教師には常に学生名および回答が表示されます)。

投票活動は以下のように使用できます:

* 1つの話題に関しての考えを刺激するためのクイックポールとして
* 学生の理解に関するクイックテストとして
* 例えばコースの運用に関する投票を促すように学生の意思決定を促進するため';
$string['modulename_link'] = 'mod/choice/view';
$string['modulenameplural'] = '投票';
$string['moveselectedusersto'] = '選択したユーザを ...';
$string['multiplenotallowederror'] = 'この投票では複数回答は許可されていません。';
$string['mustchooseone'] = 'あなたは保存する前に答えを選択する必要があります。何も保存されませんでした。';
$string['noguestchoose'] = '申し訳ございません、ゲストは投票することができません。';
$string['noresultsviewable'] = '現在、投票結果は閲覧できません。';
$string['notanswered'] = '未投票';
$string['notenrolledchoose'] = '申し訳ございません、登録済みユーザのみ投票を利用することができます。';
$string['notopenyet'] = 'この活動は {$a} まで利用できません。';
$string['numberofuser'] = '投票者数';
$string['numberofuserinpercentage'] = '投票者数 (%)';
$string['openafterclose'] = 'あなたは終了日の後に開始日を指定しました。';
$string['option'] = 'オプション';
$string['optionno'] = 'オプション {no}';
$string['options'] = 'オプション';
$string['page-mod-choice-x'] = 'すべての投票モジュールページ';
$string['pluginadministration'] = '投票管理';
$string['pluginname'] = '投票';
$string['previewing'] = 'これはこの活動の利用可能なオプションのプレビューです。あなたは開始時にオプションを選択できます。';
$string['previewonly'] = 'これはこの活動で利用可能なオプションのプレビューです。あなたの投票は {$a} まで送信することができません。';
$string['privacy'] = '投票結果のプライバシー';
$string['privacy:metadata:choice_answers'] = '投票活動でユーザが選択した回答に関する情報です。';
$string['privacy:metadata:choice_answers:choiceid'] = '投票活動のIDです。';
$string['privacy:metadata:choice_answers:optionid'] = 'ユーザが選択したオプションのIDです。';
$string['privacy:metadata:choice_answers:timemodified'] = 'タイムスタンプはユーザによって投票が修正された日時を示します。';
$string['privacy:metadata:choice_answers:userid'] = 'この投票活動でのユーザ回答のIDです。';
$string['publish'] = '投票結果を公開する';
$string['publishafteranswer'] = '投票した後、学生に投票結果を表示する';
$string['publishafterclose'] = 'この投票全体が終了した場合のみ学生に投票結果を表示する';
$string['publishalways'] = '常に学生に投票結果を表示する';
$string['publishanonymous'] = '投票結果を匿名で公開する、学生の氏名を表示しない';
$string['publishinfoanonafter'] = 'あなたが回答した後、匿名で (誰が何を選んだのかは分からない形で) 全員の回答結果が参加者に公開されます。';
$string['publishinfoanonclose'] = '回答が締め切られた後、匿名で (誰が何を選んだのかは分からない形で) 全員の回答結果が参加者に公開されます。';
$string['publishinfofullafter'] = 'あなたが回答した後、(誰が何を選んだのかも分かる形で) 全員の回答結果が参加者に公開されます。';
$string['publishinfofullclose'] = '回答が締め切られた後、(誰が何を選んだのかも分かる形で) 全員の回答結果が参加者に公開されます。';
$string['publishinfonever'] = 'あなたが回答した後も、この回答結果が参加者に公開されることはありません。';
$string['publishnames'] = '投票結果すべてを公開する、学生の氏名および投票内容を表示する';
$string['publishnot'] = '学生に投票結果を公開しない';
$string['removemychoice'] = '私の投票を削除する';
$string['removeresponses'] = 'すべての投票結果を削除する';
$string['responses'] = '投票結果';
$string['responsesa'] = '回答: {$a}';
$string['responsesresultgraphheader'] = 'グラフ表示';
$string['responsesto'] = '{$a} へ投票する';
$string['results'] = '結果';
$string['savemychoice'] = '私の投票を保存する';
$string['search:activity'] = '投票 - 活動情報';
$string['selectalloption'] = 'すべての「 {$a} 」を選択解除する';
$string['showavailable'] = '投票可能数を表示する';
$string['showavailable_help'] = '参加者にそれぞれのオプションの制限および1オプションあたりの投票数を表示します。';
$string['showpreview'] = 'プレビューを表示する';
$string['showpreview_help'] = '投票の送信が開始される前に学生が利用可能なオプションをプレビューできるようにします。';
$string['showunanswered'] = '未投票のカラムを表示する';
$string['spaceleft'] = '件 (投票可能数)';
$string['spacesleft'] = '件 (投票可能数)';
$string['taken'] = '投票済み';
$string['userchoosethisoption'] = 'このオプションを選択したユーザ';
$string['viewallresponses'] = '{$a} 件の投票結果を表示する';
$string['viewchoices'] = '投票を表示する';
$string['withselected'] = '選択したものを';
$string['yourselection'] = 'あなたの投票';
