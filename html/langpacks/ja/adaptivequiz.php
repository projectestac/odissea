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
 * Strings for component 'adaptivequiz', language 'ja', version '4.1'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = '推定能力';
$string['abilityestimated_help'] = '受験者の推定能力は、その受験者が50％の確率で正答できる問題の難易度と一致します。能力値と出題範囲(\'/\'印の後の範囲を参照)を比較することで、能力レベルを特定することができます。';
$string['activityreports'] = '受験レポート';
$string['adaptivequiz:addinstance'] = '新しいアダプティブクイズを追加する';
$string['adaptivequiz:attempt'] = 'アダプティブクイズを受験する';
$string['adaptivequiz:reviewattempts'] = 'アダプティブクイズの提出を確認する';
$string['adaptivequiz:viewreport'] = 'アダプティブクイズのレポートを見る';
$string['adaptivequizname'] = '名称';
$string['adaptivequizname_help'] = 'アダプティブクイズのインスタンスの名前を入力します。';
$string['all_attempts_deleted'] = 'すべてのアダプティブクイズの受験は削除されました。';
$string['all_grades_removed'] = 'すべてのアダプティブクイズの成績は削除されました。';
$string['answer'] = '解答';
$string['answerdistgraph_numrightwrong'] = '不正解の数 (-)  /  正解の数 (+)';
$string['answerdistgraph_questiondifficulty'] = '問題の難易度';
$string['answerdistgraph_right'] = '正解';
$string['answerdistgraph_title'] = '{$a->firstname} {$a->lastname} の回答分布';
$string['answerdistgraph_wrong'] = '不正解';
$string['answers_display_name'] = '解答';
$string['attempt_questiondetails'] = '受験した問題の詳細';
$string['attempt_state'] = '受験状態';
$string['attempt_summary'] = '受験の概要';
$string['attempt_user'] = 'ユーザ';
$string['attemptclosed'] = 'この受験は手動で終了されました。';
$string['attemptclosedstatus'] = '{$a->current_user_name} (user-id: {$a->current_user_id}) により {$a->now} に手動で終了されました。';
$string['attemptdeleted'] = 'A{$a->timecompleted}に提出された{$a->name}の受験が削除されました。';
$string['attemptfeedback'] = '受験のフィードバック';
$string['attemptfeedback_help'] = '受験が終了すると、受験のフィードバックがユーザに表示されます';
$string['attemptfeedbackdefaulttext'] = '受験を終え、クイズに答えていただき、ありがとうございました!';
$string['attemptfinishedtimestamp'] = '受験終了時刻';
$string['attemptfirst'] = '最初の受験';
$string['attemptlast'] = '最後の受験';
$string['attemptnofirstquestion'] = '申し訳ありませんが、受験を開始するための最初の問題を定義できませんでした。';
$string['attemptquestion_ability'] = '能力測定';
$string['attemptquestion_abilitylogits'] = '測定された能力 (logits)';
$string['attemptquestion_difficulty'] = '問題の難易度 (logits)';
$string['attemptquestion_diffsum'] = '難易度の総和';
$string['attemptquestion_error'] = '標準誤差 (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = '問題の難易度';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = '正解/不正解';
$string['attemptquestion_stderr'] = '標準誤差 (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = '問題の進捗状況: {$a}';
$string['attemptquestionsprogress_help'] = 'ここに表示されている最大問題数は、必ずしも小テスト中にあなたが受けなければならない問題数ではありません。あなたが受験する可能性のある最大問題数であり、能力測定が十分に定義されている場合、クイズはより早く終了する可能性があります。';
$string['attemptsallowed'] = '受験回数';
$string['attemptsallowed_help'] = 'このアクティビティを受験できる回数';
$string['attemptstarttime'] = '受験開始時刻';
$string['attemptstate'] = '受験状況';
$string['attemptstopcriteria'] = '受験中止の理由';
$string['attemptsusernoprevious'] = 'あなたはまだこの問題を受験していません。';
$string['attemptsuserprevious'] = '過去の受験';
$string['attempttotaltime'] = 'トータルタイム (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; 全ての問題に戻る';
$string['bestscore'] = '最高得点';
$string['bestscorestderror'] = '最高得点の標準誤差';
$string['browsersecurity'] = 'ブラウザのセキュリティ';
$string['browsersecurity_help'] = 'フルスクリーンポップアップとJavaScriptセキュリティが選択された場合、学生がJavaScriptを有効にしたウェブブラウザを使用している場合のみ小テストが開始され、他のすべてのウィンドウを覆うフルスクリーンのポップアップウィンドウに表示され、ナビゲーションコントロールはなく、学生はコピー＆ペースト等の機能を可能な限り使用することができなくなります。';
$string['calcerrorwithinlimits'] = '計算された標準誤差 {$a->calerror} は、活動によって課される限界の範囲内である {$a->definederror}。';
$string['closeattempt'] = '受験を閉じる';
$string['completionattemptcompletedcminfo'] = '受験を完了する';
$string['completionattemptcompletedform'] = 'このアクティビティに少なくとも1回以上挑戦していること。';
$string['confirmcloseattempt'] = '本当に{$a->name}の受験を終了してよいですか？';
$string['confirmcloseattemptscore'] = '{$a->num_questions} 個の問題に回答し、これまでの結果は {$a->measure} {$a->standarderror} となりました。';
$string['confirmcloseattemptstats'] = 'この受験は{$a->started}に開始され、{$a->modified}に更新されました。';
$string['confirmdeleteattempt'] = '{$a->timecompleted}に提出された{$a->name}からの受験の削除要求を確認しています。';
$string['deleteattemp'] = '受験の削除';
$string['discrimination_display_name'] = '差異';
$string['downloadcsv'] = 'CSVファイルのダウンロード';
$string['enterrequiredpassword'] = 'パスワードを入力してください';
$string['errorattemptstate'] = '受験状態の判定にエラーが発生しました';
$string['errorclosingattempt_alreadycomplete'] = 'この受験はすでに完了しているため、手動で閉じることはできません。';
$string['errorfetchingquest'] = '適切なレベルの問題を取り出すことができません {$a->level}';
$string['errorlastattpquest'] = '最後に受験した問題の回答チェックのエラー';
$string['errornumattpzero'] = '問題数がゼロであるにもかかわらず、ユーザが前の問題の答えを提出した場合のエラー';
$string['errorsumrightwrong'] = '正解と不正解の合計が、受験した問題の総数と一致しません。';
$string['eventattemptcompleted'] = '受験完了';
$string['formelementdecimal'] = '小数を入力します。整数部分は最大10桁、小数点以下は最大5桁。';
$string['formelementempty'] = '1～999の正の整数を入力します。';
$string['formelementnegative'] = '1から999までの正の整数を入力する';
$string['formelementnumeric'] = '1～999の正の整数を入力する';
$string['formlowlevelgreaterthan'] = '最低レベルは最高レベルより低くなければならない';
$string['formminquestgreaterthan'] = '最小設問数は最大設問数より少なくなければならない';
$string['formquestionpool'] = '問題のカテゴリーを1つ以上選択する';
$string['formstartleveloutofbounds'] = '開始レベルは、最低レベルと最高レベルの中間の数値である必要があります。';
$string['formstderror'] = '0%以上50%未満の値を入力する必要があります。';
$string['functiondisabledbysecuremode'] = '現在、その機能は無効になっています。';
$string['gradehighest'] = '最高の成績';
$string['grademethod'] = '採点方法';
$string['grademethod_help'] = '複数回の受験が認められている場合、最終的な小テストの成績は以下の方法で算出することができます。

* 全受験回数中、最も高い成績
* 最初の受験（それ以外の受験は無視されます。）
* 最後の受験（それ以外の受験は無視されます。）';
$string['graphlegend_error'] = '標準誤差';
$string['graphlegend_target'] = '目標レベル';
$string['highestlevel'] = '最高難易度';
$string['highestlevel_help'] = '評価が問題を選択できる最高または最も難しいレベルです。受験の間、アクティビティはこの難易度を超えることはありません。';
$string['highlevelusers'] = '問題の難易度レベルより上位のユーザ';
$string['id'] = 'ID';
$string['indvuserreport'] = '個別ユーザ {$a} の受験レポート';
$string['leveloutofbounds'] = '要求されたレベル {$a->level} は受験のバンド幅を超えています';
$string['lowestlevel'] = '最低難易度';
$string['lowestlevel_help'] = '評価で問題を選択できる最低または最難関のレベルです。受験中、アクティビティはこの難易度レベルを超えることはありません。';
$string['lowlevelusers'] = '問題の難易度レベルより下位のユーザ';
$string['maximumquestions'] = '最大問題数';
$string['maximumquestions_help'] = '受講者が受験できる最大問題数';
$string['maxquestattempted'] = '最大受験問題数';
$string['midlevelusers'] = '問題の難易度レベルの近傍にいるユーザ';
$string['minimumquestions'] = '最小限の問題数';
$string['minimumquestions_help'] = '受講者が受験しなければならない最低限の問題数';
$string['missingtagprefix'] = 'タグプレフィックスの欠落';
$string['modformshowattemptprogress'] = '学生に受験の進捗状況を表示する';
$string['modformshowattemptprogress_help'] = '選択すると、受験中に、最大数のうち何問に回答したかを示すプログレスバーが表示されます。';
$string['modulename'] = 'アダプティブクイズ';
$string['modulename_help'] = 'アダプティブクイズは、教師が受験者の能力を効率的に測定するための小テストを作成するためのアクティビティです。アダプティブクイズは、問題バンクから選択され、難易度のスコアが付けられた問題で構成されています。問題は、現在の受験者の推定能力レベルに合わせて選択されます。受験者がある問題に正解すると、次はより難しい問題が出題されます。もし、受験者が不正解であれば、次はより難易度の低い問題が出題されます。このような手法は、受験者の有効な能力レベルに収束していく一連の問題に発展していきます。クイズは、受験者の能力が必要な精度で決定されたときに停止します。

このアクティビティは、一次元の尺度に沿って能力測定を行う場合に最も適しています。尺度は非常に広くても構いませんが、問題はすべて同じ尺度で能力または適性の尺度を提供しなければなりません。例えば、クラス分けテストでは、初心者が正解できるような低いスケールの問題は、専門家も回答できるようにし、高いスケールの問題は、専門家または幸運な推測のみが回答できるようにします。異なる能力の受験者を区別できない問題は、テストの効果がなく、結論の出ない結果をもたらす可能性があります。

アダプティブクイズで使用される問題は、以下の通りです。

 * 正解/不正解として自動的に採点される * \'adpq_\'の後に小テストの範囲内の正の整数を付けて、難易度のタグ付けを行う

アダプティブクイズは、以下のような設定が可能です。

 * 測定する問題-難易度/ユーザ能力の範囲を定義します。1-10、1-16、1-100は有効な範囲の例です。 * クイズが停止するまでに必要な精度を定義します。しばしば、能力測定における5%の誤差が適切な停止ルールとなります * 回答される問題の最小数を要求する * 回答可能な問題の最大数を要求する

この説明とこのアクティビティにおけるテストプロセスは、<a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing に基づいています。A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago.MESAメモランダムNo.69。';
$string['modulenameplural'] = 'アダプティブクイズ';
$string['na'] = '利用不可';
$string['name'] = '名称';
$string['noattemptsallowed'] = 'この活動にはこれ以上受験できません';
$string['nonewmodules'] = 'ダプティブクイズのインスタンスは見つかりませんでした。';
$string['nopermission'] = 'このリソースを表示する権限がありません。';
$string['notinprogress'] = 'この受験は現在進行中ではありません。';
$string['notyourattempt'] = 'この活動は、あなたの受験ではありません';
$string['numofattemptshdr'] = '受験回数';
$string['numright'] = '正解の数';
$string['numwrong'] = '不正解の数';
$string['percent_correct_display_name'] = '正答率(%)';
$string['pluginadministration'] = 'アダプティブクイズ';
$string['pluginname'] = 'アダプティブクイズ';
$string['question_report'] = '問題分析';
$string['questionanalysisbtn'] = '問題分析';
$string['questionnumber'] = '問題 #';
$string['questionpool'] = '問題プール';
$string['questionpool_help'] = '受験中にアクティビティが問題を取得する問題カテゴリを選択します。';
$string['questions_report'] = '問題レポート';
$string['questionsattempted'] = '受験した問題数';
$string['questionspoolerrornovalidstartingquestions'] = '選択した問題カテゴリに、選択した開始時の難易度に合うように適切にタグ付けされた問題が含まれていません。';
$string['recentactquestionsattempted'] = '出題される問題: {$a}';
$string['recentattemptstate'] = '受験状況:';
$string['recentcomplete'] = '完了です';
$string['recentinprogress'] = '進行中';
$string['reportattemptanswerdistributiontab'] = '回答分布';
$string['reportattemptanswerdistributiontabletitle'] = '回答分布表';
$string['reportattemptgraphtab'] = '回答グラフ';
$string['reportattemptgraphtabletitle'] = '回答グラフ表';
$string['reportattemptquestionsdetailstab'] = '問題の詳細';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - {$a->finished}に提出された{$a->fullname}による受験をレビューする';
$string['reportattemptsbothenrolledandnotenrolled'] = '受験したことのあるすべてのユーザー';
$string['reportattemptsdownloadfilename'] = '{$a}_受験_レポート';
$string['reportattemptsenrolledwithattempts'] = '受験した参加者';
$string['reportattemptsenrolledwithnoattempts'] = '未受験の参加者';
$string['reportattemptsfilterformheader'] = 'フィルタリング';
$string['reportattemptsfilterformsubmit'] = 'フィルター';
$string['reportattemptsfilterincludeinactiveenrolments'] = '登録が無効なユーザーを含める';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = '利用停止中のユーザーを含めるかどうか。';
$string['reportattemptsfilterusers'] = '表示する';
$string['reportattemptsnotenrolled'] = '受験したユーザーを登録しない';
$string['reportattemptspersistentfilter'] = '永続的なフィルター';
$string['reportattemptspersistentfilter_help'] = 'チェックすると、以下のフィルター設定が送信時に保存され、レポートページにアクセスするときに適用されます。';
$string['reportattemptsprefsformheader'] = 'レポートの設定';
$string['reportattemptsprefsformsubmit'] = '適用';
$string['reportattemptsresetfilter'] = 'フィルターのリセット';
$string['reportattemptsshowinitialbars'] = 'イニシャルバーを表示する';
$string['reportattemptsummarytab'] = '受験概要';
$string['reportattemptsusersperpage'] = '表示されるユーザー数:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - {$a->username}の受験個別レポート';
$string['reportquestionanalysispageheading'] = '{$a} - 受験レポート';
$string['reportuserattemptstitleshort'] = '{$a}の受験';
$string['requirepassword'] = 'パスワードが必要です';
$string['requirepassword_help'] = '受験を開始する前に、パスワードの入力が必要です';
$string['requirepasswordmessage'] = 'この問題を受験するには、問題のパスワードを知っている必要があります。';
$string['resetadaptivequizsall'] = 'すべてのアダプティブクイズの受験を削除する。';
$string['result'] = '結果';
$string['reviewattempt'] = '受験のレビュー';
$string['reviewattemptreport'] = '{$a->finished}に提出された{$a->fullname}による受験をレビューする。';
$string['score'] = '得点';
$string['showabilitymeasure'] = '測定した能力を生徒に提示する';
$string['showabilitymeasure_help'] = '時にはアダプティブクイズを受験した後、学生に能力推定値を表示することが有用な場合があります。この設定を有効にした場合、学生は受験の概要および受験を終了した直後に能力推定値を見ることができます。';
$string['standarderror'] = '停止する標準誤差';
$string['standarderror_help'] = '能力測定の誤差がこの値を下回ると、クイズは停止します。この値をデフォルトの5%からチューニングすることで、能力測定の精度を上げることも下げることもできます。';
$string['standarderrorhdr'] = '標準誤差';
$string['startattemptbtn'] = '受験開始';
$string['startinglevel'] = 'スタート時の難易度';
$string['startinglevel_help'] = '学生が受験を開始すると、難易度に応じた問題がランダムに選択されます。';
$string['statistic'] = '統計';
$string['stopingconditionshdr'] = '停止の条件';
$string['submitanswer'] = '答えを送信する';
$string['times_used_display_name'] = '所要時間';
$string['updateattempterror'] = '受験記録を更新しようとするとエラーになる';
$string['user'] = 'ユーザ';
$string['value'] = '値';
$string['wrongpassword'] = 'パスワードが正しくありません';
