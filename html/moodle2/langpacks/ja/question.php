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
 * Strings for component 'question', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '動作';
$string['addanotherhint'] = '別のヒントを追加する';
$string['addcategory'] = 'カテゴリを追加する';
$string['addmorechoiceblanks'] = 'さらに {no} 個の選択肢入力欄を追加する';
$string['adminreport'] = 'あなたの問題データベースで可能性のある不具合をレポートします。';
$string['advancedsearchoptions'] = '検索オプション';
$string['alltries'] = 'すべての受験';
$string['answer'] = '答え';
$string['answers'] = '答え';
$string['answersaved'] = '解答保存済み';
$string['attemptfinished'] = '受験終了';
$string['attemptfinishedsubmitting'] = '送信を終了した受験:';
$string['attemptoptions'] = '受験オプション';
$string['availableq'] = '利用可能?';
$string['badbase'] = '**: {$a}** の前のbaseが正しくありません。';
$string['behaviour'] = '動作';
$string['behaviourbeingused'] = '使用されている動作: {$a}';
$string['broken'] = 'これは存在しないファイルをポイントする「壊れたリンク」です。';
$string['byandon'] = '<em>{$a->time}</em> (ユーザ: <em>{$a->user}</em>)';
$string['cannotcopybackup'] = 'バックアップファイルをコピーできませんでした。';
$string['cannotcreate'] = 'question_attemptsテーブルに新しいエントリを作成できませんでした。';
$string['cannotcreatepath'] = 'パスを作成できません: {$a}';
$string['cannotdeletebehaviourinuse'] = 'あなたは動作「 {$a} 」を削除することはできません。この動作は問題の受験に使用されています。';
$string['cannotdeletecate'] = 'このコンテクストのデフォルトカテゴリのため、あなたはカテゴリを削除できません。';
$string['cannotdeleteneededbehaviour'] = '問題動作「 {$a} 」を削除することはできません。インストール済みの他の動作が依存しています。';
$string['cannotdeleteqtypeinuse'] = 'あなたは問題タイプ「 {$a} 」を削除することはできません。このタイプの問題が問題バンクに登録されています。';
$string['cannotdeleteqtypeneeded'] = 'あなたは問題タイプ「 {$a} 」を削除することはできません。インストール済みの他の問題タイプが依存しています。';
$string['cannotenable'] = '問題タイプ {$a} は直接作成できません。';
$string['cannotenablebehaviour'] = '問題動作 {$a} は直接使用することはできません。内部でのみ使用することができます。';
$string['cannotfindcate'] = 'カテゴリレコードが見つかりませんでした。';
$string['cannotfindquestionfile'] = 'ZIP内に問題データファイルが見つかりませんでした。';
$string['cannotgetdsfordependent'] = 'データセットに依存した問題のデータセットを取得できませんでした! (問題: {$a->id}, データセットアイテム: {$a->item})';
$string['cannotgetdsforquestion'] = '指定された計算問題のデータセットを取得できませんでした! (問題: {$a})';
$string['cannothidequestion'] = '問題を非表示にできませんでした。';
$string['cannotimportformat'] = '申し訳ございません、このフォーマットでのインポートはまだ実装されていません!';
$string['cannotinsertquestion'] = '新しい問題を追加できませんでした!';
$string['cannotinsertquestioncatecontext'] = 'コンテクストID {$a->ctx} が無効のため、新しい問題カテゴリ {$a->cat} を追加できませんでした。';
$string['cannotloadquestion'] = '問題を読み込めませんでした。';
$string['cannotmovequestion'] = '異なる場所のファイルと関連付けてある問題を移動するために、あなたはこのスクリプトを使用できません。';
$string['cannotopenforwriting'] = '書き込みオープンできません: {$a}';
$string['cannotpreview'] = 'あなたはこれらの問題をプレビューできません。';
$string['cannotread'] = 'インポートファイルを読めません (またはファイルが空です)。';
$string['cannotretrieveqcat'] = '問題カテゴリを検索できませんでした。';
$string['cannotunhidequestion'] = '問題の非表示解除に失敗しました。';
$string['cannotunzip'] = 'ZIPファイルを展開できません。';
$string['cannotwriteto'] = '{$a} にエクスポート問題を書き込めません。';
$string['categories'] = 'カテゴリ';
$string['category'] = 'カテゴリ';
$string['categorycurrent'] = '現在のカテゴリ';
$string['categorycurrentuse'] = 'このカテゴリを使用する';
$string['categorydoesnotexist'] = 'このカテゴリは存在しません。';
$string['categoryinfo'] = 'カテゴリ情報';
$string['categorymove'] = 'カテゴリ {$a->name} には {$a->count} 問の問題があります (いくつかの問題は非表示の問題か小テストで使用中のランダム問題です)。移動するために他のカテゴリを選択してください。';
$string['categorymoveto'] = 'カテゴリに保存する';
$string['categorynamecantbeblank'] = 'カテゴリ名は空白にすることができません。';
$string['changeoptions'] = 'オプションを変更する';
$string['changepublishstatuscat'] = 'コース内<a href="{$a->caturl}">カテゴリ「 {$a->name} 」</a>の共有ステータスが<strong>{$a->changefrom}から{$a->changeto}</strong>に変更されます。';
$string['check'] = 'チェック';
$string['chooseqtypetoadd'] = '追加する問題タイプを選択する';
$string['clearwrongparts'] = '正しくない解答をクリアする';
$string['clickflag'] = '問題にフラグを付ける';
$string['clicktoflag'] = '将来的な参照のため、この問題にフラグを付けます。';
$string['clicktounflag'] = 'フラグを外す';
$string['clickunflag'] = 'フラグを外す';
$string['closepreview'] = 'プレビューを閉じる';
$string['combinedfeedback'] = '総合フィードバック';
$string['comment'] = 'コメント';
$string['commented'] = 'コメント: {$a}';
$string['commentormark'] = 'コメントを追加または評点を更新する';
$string['comments'] = 'コメント';
$string['commentx'] = 'コメント: {$a}';
$string['complete'] = '完了';
$string['contexterror'] = 'あなたがカテゴリを別のコンテクストに移動しない場合、ここには移動できません。';
$string['copy'] = '{$a} からコピーしてリンクを変更します。';
$string['correct'] = '正解';
$string['correctfeedback'] = 'すべての正答';
$string['correctfeedbackdefault'] = 'あなたの答えは正解です。';
$string['created'] = '作成日時';
$string['createdby'] = '作成者';
$string['createdmodifiedheader'] = '作成日時/最終更新日時';
$string['createnewquestion'] = '新しい問題を作成する ...';
$string['cwrqpfs'] = 'ランダム問題がサブカテゴリより問題を選択しています。';
$string['cwrqpfsinfo'] = '<p>Moodle 1.9へのアップグレード中、問題カテゴリは異なるコンテクストに移動されます。あなたのサイトのいくつかの問題カテゴリおよび問題では共有ステータスを変更する必要があります。これは (このサイトに関して) 小テストの1つまたはそれ以上の「ランダム」問題が共有および未共有のカテゴリ内から混在して問題を選択するよう設定されている場合に生じる、まれなケースに対処するため必要です。「ランダム」問題がサブカテゴリ群より問題を選択し、ランダム問題が作成される1またはそれ以上のサブカテゴリが親カテゴリに対して異なる共有ステータスを持っている場合、この問題が生じます。</P>
<p>Moodle 1.9へのアップグレード中、「ランダム」問題が選択されている次のカテゴリの親カテゴリは「ランダム」問題が作成されているカテゴリと同じ共有ステータスに変更されます。次のカテゴリでは共有ステータスが変更されます。あなたが小テストより削除するまで、影響を受ける問題はすべての小テスト内で継続して動作します。</p>';
$string['cwrqpfsnoprob'] = 'あなたのサイト内で「サブカテゴリから問題を選択しているランダム問題」に関する問題に影響している問題カテゴリはありません。';
$string['decimalplacesingrades'] = '評点の小数位';
$string['defaultfor'] = '{$a} のデフォルト';
$string['defaultinfofor'] = 'コンテクスト「 {$a} 」で共有される問題のデフォルトカテゴリです。';
$string['defaultmark'] = 'デフォルト評点';
$string['defaultmarkmustbepositive'] = 'デフォルトの評点はプラスである必要があります。';
$string['deletecoursecategorywithquestions'] = 'このコースカテゴリに関連する問題バンクに問題が登録されています。あなたが続けた場合、問題が削除されてしまいます。問題バンクのインターフェースを使用して、最初に問題を移動してください。';
$string['deletequestioncheck'] = '本当に「 {$a} 」を削除してもよろしいですか?';
$string['deletequestionscheck'] = '本当に以下の問題を削除してもよろしいですか?<br /></br />{$a}';
$string['deletingbehaviour'] = '問題動作「 {$a} 」の削除中';
$string['deletingqtype'] = '問題タイプ「 {$a} 」の削除中';
$string['didnotmatchanyanswer'] = '[合致する答えはありませんでした]';
$string['disabled'] = '利用不可';
$string['displayoptions'] = '表示オプション';
$string['disterror'] = 'ディストリビューション {$a} が問題の原因となっています。';
$string['donothing'] = 'ファイルをコピーまたは移動しない、またはリンクを変更しない。';
$string['editcategories'] = 'カテゴリを編集する';
$string['editcategories_help'] = 'あなたのすべての問題を1つの大きなリストに保持するよりカテゴリおよびサブカテゴリ内に問題を入れることができます。

それぞれのカテゴリにはどこでカテゴリ内の問題が使用されるか決定するコンテクストが割り当てられます:

* 活動コンテクスト - 活動モジュールのみで使用できる問題
* コースコンテクスト - コース内の活動モジュールすべてで使用できる問題
* コースカテゴリコンテクスト - コースカテゴリ内すべての活動モジュールおよびコースで使用できる問題
* システムコンテクスト - サイト内すべてのコースおよび活動で使用できる問題

ランダム問題が特定カテゴリから問題を選択するためにカテゴリを使用することもできます。';
$string['editcategory'] = 'カテゴリを編集する';
$string['editingcategory'] = 'カテゴリの編集';
$string['editingquestion'] = '問題の編集';
$string['editquestion'] = '問題を編集する';
$string['editquestions'] = '問題を編集する';
$string['editthiscategory'] = 'このカテゴリを編集する';
$string['emptyxml'] = '不明なエラー - imsmanifest.xmlが空です。';
$string['enabled'] = '利用可能';
$string['erroraccessingcontext'] = 'コンテクストにアクセスできません。';
$string['errordeletingquestionsfromcategory'] = 'カテゴリ {$a} から問題を削除中にエラーが発生しました。';
$string['errorduringpost'] = '後処理中にエラーが発生しました!';
$string['errorduringpre'] = '前処理中にエラーが発生しました!';
$string['errorduringproc'] = '処理中にエラーが発生しました!';
$string['errorduringregrade'] = '問題 {$a->qid} を再評定できませんでした。状態 {$a->stateid} に移動します。';
$string['errorfilecannotbecopied'] = 'エラー: ファイル {$a} をコピーできません。';
$string['errorfilecannotbemoved'] = 'エラー: ファイル {$a} を移動できません。';
$string['errorfileschanged'] = 'エラー: 問題からリンクされているファイルがフォーム表示後に変更されました。';
$string['erroritemappearsmorethanoncewithdifferentweight'] = '問題 ({$a}) では小テストの異なる位置において1つ以上の異なる加重が設定されています。現在、統計レポートではこのような設定はサポートされていません。また、この小テスト統計の信頼性が損なわれる恐れがあります。';
$string['errormanualgradeoutofrange'] = '問題 {$a->name} の評点 {$a->grade} がゼロおよび {$a->maxgrade} の範囲にありません。評点およびコメントは保存されませんでした。';
$string['errormovingquestions'] = 'ID {$a} の問題の移動中にエラーが発生しました。';
$string['errorpostprocess'] = '後処理中にエラーが発生しました!';
$string['errorpreprocess'] = '前処理中にエラーが発生しました!';
$string['errorprocess'] = '処理中にエラーが発生しました!';
$string['errorprocessingresponses'] = 'あなたの解答処理中にエラーが発生しました ({$a})。あなたが表示していたページに戻って再度解答するには「続ける」をクリックしてください。';
$string['errorsavingcomment'] = '問題 {$a->name} のコメントのデータベース保存中にエラーが発生しました。';
$string['errorsavingflags'] = 'フラグ状態の保存中にエラーが発生しました。';
$string['errorupdatingattempt'] = 'データベース内の受験結果 {$a->id} 更新中にエラーが発生しました。';
$string['eventquestioncategorycreated'] = '小テストカテゴリが作成されました。';
$string['export'] = 'エクスポート';
$string['exportcategory'] = 'エクスポートカテゴリ';
$string['exportcategory_help'] = 'この設定では問題のエクスポート元カテゴリを決定します。

GIFTおよびMoodle XMLのような特定のインポートフォーマットではエクスポートファイルにカテゴリおよびコンテクストデータを含むこと、インポート時に (任意で) 再作成することができます。必要な場合、適切なチェックボックスをチェックしてください。';
$string['exporterror'] = 'エクスポート中にエラーが発生しました!';
$string['exportfilename'] = 'questions';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = '問題をファイルにエクスポートする';
$string['exportquestions_help'] = 'この機能では1つのカテゴリ (およびすべてのサブカテゴリ) の問題すべてをテキストファイルにエクスポートすることができます。選択されたファイルフォーマットにより、いくつかの問題および特定の問題タイプはエクスポートされないことに留意してください。';
$string['feedback'] = 'フィードバック';
$string['filecantmovefrom'] = 'あなたには問題の移動を試みている移動元からファイルを削除するためのパーミッションがないため、問題ファイルを移動することができません。';
$string['filecantmoveto'] = 'あなたには問題のコピーを試みている移動先にファイルを追加するためのパーミッションがないため、問題ファイルを移動またはコピーすることができません。';
$string['fileformat'] = 'ファイルフォーマット';
$string['filesareacourse'] = 'コースファイルエリア';
$string['filesareasite'] = 'サイトファイルエリア';
$string['filestomove'] = '{$a} にファイルを移動/コピーしますか?';
$string['fillincorrect'] = '正解を表示する';
$string['firsttry'] = '最初の受験';
$string['flagged'] = 'フラグ付け済み';
$string['flagthisquestion'] = 'この問題にフラグを付ける';
$string['formquestionnotinids'] = '問題IDがない問題がフォームに含まれています。';
$string['fractionsnomax'] = 'この問題で満点を取ることができるよう答えの1つに評点100%を指定してください。';
$string['generalfeedback'] = '全般に対するフィードバック';
$string['generalfeedback_help'] = '全般に対するフィードバックは問題の受験後、学生に表示されるテキストです。問題タイプおよび学生の解答によって決まるフィードバックとは異なり、同じ全般に対するフィードバックテキストがすべての学生に表示されます。

あなたは学生に工夫を凝らした回答を与える場として全般的なフィードバックを使用することができます。学生が問題を理解できない場合、さらなる情報のリンクを与えて利用できるようにすることもできます。';
$string['getcategoryfromfile'] = 'ファイルからカテゴリを取得する';
$string['getcontextfromfile'] = 'ファイルからコンテクストを取得する';
$string['hintn'] = 'ヒント {no}';
$string['hintnoptions'] = 'ヒント {no} オプション';
$string['hinttext'] = 'ヒントテキスト';
$string['howquestionsbehave'] = '問題動作';
$string['howquestionsbehave_help'] = '学生は小テスト内の問題に対して、様々に異なる方法で接することができます。例えばあなたが学生にそれぞれの問題で答えを入力した後、評定またはフィードバックの前に小テストすべてを送信してもらいたい場合もあるでしょう。これには「遅延フィードバック」モードを使用します。

代わりにあなたが学生に即時フィードバックを与えて、すぐに正解できない場合に評点の低い次の受験に挑戦させたいとします。これには「複数受験インタラクティブ」モードを使用します。

恐らく、これらは最も一般的に使用される動作モードです。';
$string['ignorebroken'] = 'リンク切れを無視する';
$string['import'] = 'インポート';
$string['importcategory'] = 'インポートカテゴリ';
$string['importcategory_help'] = 'この設定では問題のインポート先カテゴリを決定します。

GIFTおよびMoodle XMLのような特定のインポートフォーマットではインポートファイルにカテゴリおよびコンテクストデータを含むことができます。選択されたカテゴリではなく、このデータを使用するには適切なチェックボックスをチェックしてください。インポートファイル内で指定されたカテゴリが存在しない場合、作成されます。';
$string['importerror'] = 'インポート処理中にエラーが発生しました。';
$string['importerrorquestion'] = '問題インポートエラー';
$string['importfromcoursefiles'] = '... またはインポートするコースファイルを選択します。';
$string['importfromupload'] = 'アップロードするファイルを選択する ...';
$string['importingquestions'] = 'ファイルより {$a} 問の問題をインポート';
$string['importparseerror'] = 'インポートファイルの構文解析時にエラーが見つかりました。問題はインポートされませんでした。正常な問題をインポートするには「エラーで中止する」を「No」にして再度お試しください。';
$string['importquestions'] = 'ファイルから問題をインポートする';
$string['importquestions_help'] = 'この機能ではテキストファイルを使用して様々なフォーマットで問題をインポートすることができます。ファイルにはUTF-8文字コードを使用する必要があることに留意してください。';
$string['importwrongfiletype'] = 'あなたが選択したファイルタイプ ({$a->actualtype}) はこのインポートフォーマット ({$a->expectedtype}) に期待されるタイプに合致しません。';
$string['impossiblechar'] = '丸括弧として使用できない文字 {$a} が見つかりました。';
$string['includesubcategories'] = 'サブカテゴリの問題も表示する';
$string['incorrect'] = '不正解';
$string['incorrectfeedback'] = 'すべての不正解';
$string['incorrectfeedbackdefault'] = 'あなたの答えは正しくありません。';
$string['information'] = '情報';
$string['invalidanswer'] = '不完全な答え';
$string['invalidarg'] = '有効ではない引数が提供されたか、サーバ設定が正しくありません。';
$string['invalidcategoryidforparent'] = '親カテゴリに対するカテゴリIDが無効です!';
$string['invalidcategoryidtomove'] = '移動するカテゴリIDが無効です!';
$string['invalidconfirm'] = '確認ストリングが正しくありません。';
$string['invalidcontextinhasanyquestions'] = '無効なコンテクストが「question_context_has_any_questions」に渡されました。';
$string['invalidgrade'] = '評点 ({$a}) が評定オプションと合致しません - 問題をスキップしました。';
$string['invalidpenalty'] = '無効なペナルティ';
$string['invalidwizardpage'] = 'ウィザードページが正しくないか、指定されていません!';
$string['lastmodifiedby'] = '最終更新 by';
$string['lasttry'] = '最後の受験';
$string['linkedfiledoesntexist'] = 'リンクファイル {$a} がありません。';
$string['makechildof'] = '「 {$a} 」の子にする';
$string['makecopy'] = 'コピーを作成する';
$string['maketoplevelitem'] = 'トップレベルに移動する';
$string['manualgradeinvalidformat'] = 'これは有効な数字ではありません。';
$string['manualgradeoutofrange'] = 'この評点は有効範囲の外にあります。';
$string['manuallygraded'] = '手動評定: {$a->mark} - コメント: {$a->comment}';
$string['mark'] = '評点';
$string['markedoutof'] = '評点';
$string['markedoutofmax'] = '最大評点 {$a}';
$string['markoutofmax'] = '{$a->mark} / {$a->max}';
$string['marks'] = '評点';
$string['matchgrades'] = '評点の合致';
$string['matchgradeserror'] = '評点が一覧にない場合、エラーにする';
$string['matchgrades_help'] = 'インポートされた評点は次の有効な評点一覧に合致する必要があります - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (マイナス値も使用することができます)。そうでない場合、2つのオプションがあります:

* 評点が一覧にない場合、エラーにする - 一覧にない評点が問題に含まれている場合、エラーが表示され、その問題はインポートされません。
* 評点が一覧にない場合、最も近い評点を使用する - 一覧にない評点が問題に含まれている場合、評点は一覧の中で一番近い値に変更されます。';
$string['matchgradesnearest'] = '評点が一覧にない場合、最も近い評点を使用する';
$string['missingcourseorcmid'] = 'print_questionに対して、コースIDまたはコースモジュールIDを提供する必要があります。';
$string['missingcourseorcmidtolink'] = 'get_question_edit_linkに対して、コースIDまたはコースモジュールIDを提供する必要があります。';
$string['missingimportantcode'] = 'この問題タイプには重要なコードがありません: {$a}';
$string['missingoption'] = '穴埋め問題 (Cloze) {$a} のオプションがありません。';
$string['modified'] = '最終更新日時';
$string['move'] = '{$a} から移動およびリンクを変更する。';
$string['movecategory'] = 'カテゴリを移動する';
$string['movedquestionsandcategories'] = '問題および問題カテゴリを {$a->oldplace} から {$a->newplace} に移動しました。';
$string['movelinksonly'] = 'リンクが指している場所のみ変更して、ファイルを移動およびコピーしない。';
$string['moveq'] = '問題を移動する';
$string['moveqtoanothercontext'] = '問題を別のコンテクストに移動する';
$string['moveto'] = '移動 >>';
$string['movingcategory'] = 'カテゴリの移動';
$string['movingcategoryandfiles'] = '本当にカテゴリ「 {$a->name} 」およびすべての子カテゴリを「 {$a->contextto} 」のコンテクストに移動してもよろしいですか?<br /> {$a->urlcount} のファイルが {$a->fromareaname} の問題にリンクされているようです。これらのファイルを {$a->toareaname} にコピーまたは移動してもよろしいですか?';
$string['movingcategorynofiles'] = '本当にカテゴリ「 {$a->name} 」およびすべての子カテゴリを「 {$a->contextto} 」のコンテクストに移動してもよろしいですか?';
$string['movingquestions'] = '問題およびすべてのファイルの移動';
$string['movingquestionsandfiles'] = '本当に問題 {$a->questions} を<strong>「 {$a->tocontext} 」</strong>のコンテクストに移動してもよろしいですか?<br /> {$a->urlcount} のファイルが {$a->fromareaname} の問題にリンクされているようです。これらのファイルを {$a->toareaname} にコピーまたは移動してもよろしいですか?';
$string['movingquestionsnofiles'] = '本当に問題 {$a->questions} を<strong>「 {$a->tocontext} 」</strong>のコンテクストに移動してもよろしいですか?<br />{$a->fromareaname} の問題にリンクされているファイルは<strong>ありません</strong>。';
$string['needtochoosecat'] = 'このカテゴリを移動するにはカテゴリを選択してください。または「キャンセル」をクリックしてください。';
$string['nocate'] = 'カテゴリがありません  {$a} !';
$string['nopermissionadd'] = 'あなたには問題をここに追加するパーミッションがありません。';
$string['nopermissionmove'] = 'あなたには問題をここから移動するパーミッションがありません。あなたはこのカテゴリに問題を保存するか、新しい問題として保存する必要があります。';
$string['noprobs'] = 'あなたの問題データベースに問題は見つかりませんでした。';
$string['noquestions'] = 'エクスポートできる問題が見つかりませんでした。あなたがエクスポートする問題が含まれるカテゴリを選択したか確認してください。';
$string['noquestionsinfile'] = 'インポートファイルには問題がありません。';
$string['noresponse'] = '[解答なし]';
$string['notanswered'] = '未解答';
$string['notchanged'] = '前回の受験より変更なし';
$string['notenoughanswers'] = 'このタイプの問題には少なくとも {$a} 件の答えが必要です。';
$string['notenoughdatatoeditaquestion'] = '問題ID、カテゴリIDおよび問題タイプが指定されていません。';
$string['notenoughdatatomovequestions'] = 'あなたが移動したい問題の問題IDを提供する必要があります。';
$string['notflagged'] = 'フラグなし';
$string['notgraded'] = '未評定';
$string['notshown'] = '非表示';
$string['notyetanswered'] = '未解答';
$string['notyourpreview'] = 'これはあなたのプレビューではありません。';
$string['novirtualquestiontype'] = '問題タイプ {$a} にはバーチャル問題タイプがありません。';
$string['numqas'] = '問題受験数';
$string['numquestions'] = '問題数';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} 非表示)';
$string['options'] = 'オプション';
$string['page-question-category'] = '問題カテゴリページ';
$string['page-question-edit'] = '問題編集ページ';
$string['page-question-export'] = '問題エクスポートページ';
$string['page-question-import'] = '問題インポートページ';
$string['page-question-x'] = 'すべての問題ページ';
$string['parent'] = '親';
$string['parentcategory'] = '親カテゴリ';
$string['parentcategory_help'] = '親カテゴリは新しいカテゴリが配置されるカテゴリです。「トップ」はこのカテゴリが他のカテゴリに含まれていないことを意味します。カテゴリコンテクストは太字で表示されます。それぞれのコンテクストには少なくとも1つのカテゴリが必要です。';
$string['parenthesisinproperclose'] = '{$a}** 内の ** の前で丸括弧が適切に閉じられていません。';
$string['parenthesisinproperstart'] = '{$a}** 内の ** の前で丸括弧が適切に始まっていません。';
$string['parsingquestions'] = 'インポートファイルより問題を解析しています。';
$string['partiallycorrect'] = '部分的に正解';
$string['partiallycorrectfeedback'] = 'すべての部分的に正しい解答';
$string['partiallycorrectfeedbackdefault'] = 'あなたの答えは部分的に正解です。';
$string['penaltyfactor'] = 'ペナルティ要素';
$string['penaltyfactor_help'] = 'ここではそれぞれの間違った解答に対して、差し引く評点の割合を指定することができます。これは問題に繰り返し答えることのできる、アダプティブモードで小テストが動作している場合のみ関係があります。

ペナルティ要素は0から1の間に設定してください。ペナルティ要素が１の場合、学生は単位を得るため、最初の解答で正解する必要があります。ペナルティ要素が0の場合、学生は満点になるまで何度でも好きなだけ受験することができます。';
$string['penaltyforeachincorrecttry'] = 'それぞれの不正解に対するペナルティ';
$string['penaltyforeachincorrecttry_help'] = '学生が問題を正解できるまで複数回受験できるようあなたが「複数受験インタラクティブ」または「アダプティブモード」動作を使用して問題を実行する場合、このオプションではそれぞれの不正解の受験に何点のペナルティが課せられるかコントロールします。

ペナルティは問題評点合計の割合です。そのため、問題の正解が3点、ペナルティが0.3333333の場合、学生が最初に正解することで3点を取得します。2回目の受験で正解した場合、学生は2点を取得します。そして、3回目の受験で正解した場合、学生は1点を取得します。';
$string['permissionedit'] = 'この問題を編集する';
$string['permissionmove'] = 'この問題を移動する';
$string['permissionsaveasnew'] = 'この問題を新しい問題として保存する';
$string['permissionto'] = 'あなたには以下のパーミッションがあります:';
$string['previewquestion'] = '問題をプレビューする: {$a}';
$string['published'] = '共有';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">問題「 {$a->name}」({$a->qtype})</a>はこの問題カテゴリ内にありますが、別のコース「 {$a->coursename} 」の<a href="{$a->qurl}">小テスト「 {$a->quizname} 」</a>でも使用されています。';
$string['questionbank'] = '問題バンク';
$string['questionbehaviouradminsetting'] = '問題動作設定';
$string['questionbehavioursdisabled'] = '無効にする問題動作';
$string['questionbehavioursdisabledexplained'] = 'あなたがドロップダウンメニューに表示したくない動作のリストをカンマ区切りで入力してください。';
$string['questionbehavioursorder'] = '問題動作順';
$string['questionbehavioursorderexplained'] = 'あなたがドロップダウンメニューに表示したい動作のリストをカンマ区切りで順番に入力してください。';
$string['questioncategory'] = '問題カテゴリ';
$string['questioncatsfor'] = '「 {$a} 」の問題カテゴリ';
$string['questiondoesnotexist'] = 'この問題は存在しません。';
$string['questionidmismatch'] = '問題IDが一致しません。';
$string['questionname'] = '問題名';
$string['questionnamecopy'] = '{$a} (コピー)';
$string['questionno'] = '問題 {$a}';
$string['questionpreviewdefaults'] = '問題プレビューデフォルト';
$string['questionpreviewdefaults_desc'] = 'これらのデフォルトはユーザが問題バンク内の問題を最初にプレビューする時点で使用されます。ユーザが問題をプレビューした場合、パーソナルプリファレンスがユーザプリファレンスとして保存されます。';
$string['questions'] = '問題';
$string['questionsaveerror'] = '問題の保存中にエラーが発生しました - ({$a})';
$string['questionsinuse'] = '(* アスタリスクでマークされている問題はすでにいくつかの小テストで使用されています。これらの問題は小テストからは削除されませんが、カテゴリリストからのみ削除されます)';
$string['questionsmovedto'] = '使用中の問題が親コースカテゴリの「 {$a} 」に移動されました。';
$string['questionsrescuedfrom'] = '問題がコンテクスト {$a} より保存されました。';
$string['questionsrescuedfrominfo'] = 'いくつかの小テストまたは他の活動で使用されているため、これらの問題 (いくつかは非表示) はコンテクスト {$a} 削除時に保存されました。';
$string['questiontext'] = '問題テキスト';
$string['questiontype'] = '問題タイプ';
$string['questionuse'] = 'この活動で問題を使用する';
$string['questionvariant'] = '問題変形';
$string['questionx'] = '問題 {$a}';
$string['requiresgrading'] = '要評定';
$string['responsehistory'] = '解答履歴';
$string['restart'] = '再開する';
$string['restartwiththeseoptions'] = 'これらのオプションで再開する';
$string['reviewresponse'] = '解答をレビューする';
$string['rightanswer'] = '正解';
$string['rightanswer_help'] = '自動的に生成される正解の概要です。これは制限できるため、あなたは問題の全体的なフィードバックの中で正解を説明して、このオプションを無効にしても良いでしょう。';
$string['save'] = '保存';
$string['savechangesandcontinueediting'] = '変更を保存して編集を続ける';
$string['saved'] = '保存: {$a}';
$string['saveflags'] = 'フラグの状態を保存する';
$string['selectacategory'] = 'カテゴリを選択してください:';
$string['selectaqtypefordescription'] = '説明を表示するには問題タイプを選択してください。';
$string['selectcategoryabove'] = '上記カテゴリを選択する';
$string['selectquestionsforbulk'] = 'バルク処理の問題を選択する';
$string['settingsformultipletries'] = '複数受験';
$string['shareincontext'] = '{$a} のコンテクストで共有する';
$string['showhidden'] = '古い問題も表示する';
$string['showmarkandmax'] = '評点および最大評点を表示する';
$string['showmaxmarkonly'] = '最大評点のみ表示する';
$string['shown'] = '表示';
$string['shownumpartscorrect'] = '正答数を表示する';
$string['shownumpartscorrectwhenfinished'] = '問題終了後、正答数を表示する';
$string['showquestiontext'] = '問題リスト内に問題テキストを表示する';
$string['specificfeedback'] = '特定フィードバック';
$string['specificfeedback_help'] = '学生の解答に応じて与えられるフィードバックです。';
$string['started'] = '開始';
$string['state'] = '状態';
$string['step'] = 'ステップ';
$string['stoponerror'] = 'エラーで中止する';
$string['stoponerror_help'] = 'この設定ではエラー検出時にインポート処理を停止するかどうか決定します。結果として問題が全くインポートされない、またはエラーを含んだ問題を無視して有効な問題のみインポートされます。';
$string['submissionoutofsequence'] = '範囲外のアクセスです。小テスト問題に取り組む場合、戻るボタンをクリックしないでください。';
$string['submissionoutofsequencefriendlymessage'] = 'あなたは正常な連続の外にデータを入力しました。あなたのブラウザの「戻る」または「進む」ボタンを使用した場合、この現象が発生することがあります。受験中、これらのボタンを使用しないでください。ページが読み込まれている最中に何らかのボタンをクリックした場合も、この現象が発生することがあります。再開するには<strong>続ける</strong>ボタンをクリックしてください。';
$string['submit'] = '送信';
$string['submitandfinish'] = '送信して終了する';
$string['submitted'] = '送信: {$a}';
$string['tagarea_question'] = '問題';
$string['technicalinfo'] = '技術情報';
$string['technicalinfo_help'] = '恐らく、この技術情報は新しい問題タイプを開発している開発者にとって有用です。また、問題のトラブル診断のためにも有用です。';
$string['technicalinfomaxfraction'] = '最大割合: {$a}';
$string['technicalinfominfraction'] = '最小割合: {$a}';
$string['technicalinfoquestionsummary'] = '問題概要: {$a}';
$string['technicalinforesponsesummary'] = '解答概要: {$a}';
$string['technicalinforightsummary'] = '正解概要: {$a}';
$string['technicalinfostate'] = '問題状態: {$a}';
$string['technicalinfovariant'] = '問題変形: {$a}';
$string['tofilecategory'] = 'ファイルにカテゴリを書き出す';
$string['tofilecontext'] = 'ファイルにコンテクストを書き出す';
$string['uninstallbehaviour'] = 'この問題動作をアンインストールします。';
$string['uninstallqtype'] = 'この問題タイプをアンインストールします。';
$string['unknown'] = '不明';
$string['unknownbehaviour'] = '不明な動作: {$a}';
$string['unknownorunhandledtype'] = '不明またはサポート対象外の問題タイプ: {$a}';
$string['unknownquestion'] = '不明な問題: {$a}';
$string['unknownquestioncatregory'] = '不明な問題カテゴリ: {$a}';
$string['unknownquestiontype'] = '不明な問題タイプ: {$a}';
$string['unknowntolerance'] = '不明な許容誤差タイプ: {$a}';
$string['unpublished'] = '非共有';
$string['unusedcategorydeleted'] = 'コースを削除した後、カテゴリ内の問題が使用されなかったため、このカテゴリは削除されました。';
$string['updatedisplayoptions'] = '表示オプションを更新する';
$string['upgradeproblemcategoryloop'] = '問題カテゴリのアップグレード中に問題が発生しました。カテゴリツリーにループがあります。影響のあるカテゴリIDは {$a} です。';
$string['upgradeproblemcouldnotupdatecategory'] = '問題カテゴリ「 {$a->name} ({$a->id}) 」をアップグレードできませんでした。';
$string['upgradeproblemunknowncategory'] = '問題カテゴリのアップグレード中に問題が発生しました。カテゴリ「 {$a->id} 」が存在しない親カテゴリ「 {$a->parent} 」を参照しています。問題を修正するため、親カテゴリを変更しました。';
$string['whethercorrect'] = '答えの正誤';
$string['whethercorrect_help'] = 'ここでは「部分的正解」または「不正解」のテキスト記述の両方をカバーします。色付けされた強調表示は同じ情報を意味します。';
$string['whichtries'] = '受験対象';
$string['withselected'] = '選択したものを';
$string['wrongprefix'] = '問題名接頭辞のフォーマット「 {$a} 」が正しくありません。';
$string['xoutofmax'] = '{$a->mark} / {$a->max}';
$string['yougotnright'] = 'あなたは {$a->num} 件を正しく選択しました。';
$string['youmustselectaqtype'] = 'あなたは問題タイプを選択する必要があります。';
$string['yourfileshoulddownload'] = 'まもなくあなたのエクスポートファイルのダウンロードが始まります。ダウンロードされない場合、<a href="{$a}">ここをクリックしてください</a>。';
