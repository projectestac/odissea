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
 * Strings for component 'qtype_gapfill', language 'ja', version '4.4'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = '編集フォームにヒントテキストを追加する';
$string['addhinttext_text'] = 'フォームの複数受験セクションに最初の2つのヒントを追加します。';
$string['additemsettings'] = 'ギャップ設定を追加する';
$string['answerdisplay'] = '解答を表示する';
$string['answerdisplay_help'] = 'ドラッグ&ドロップはギャップにドラッグできる語句のリストを表示します。ギャップフィルは語句のオプションがないギャップを表示します。ドロップダウンはそれぞれのフィールドの正解  (および可能であれば不正解) の同一リストを表示します。';
$string['blank'] = '空白';
$string['cannotimport'] = 'インポート不可';
$string['casesensitive'] = '大文字小文字を区別する';
$string['casesensitive_help'] = 'この設定が有効にされた場合、正解が「CAT」の場合に「cat」は不正解と見なされます。';
$string['correct'] = '正解のフィードバック';
$string['correctanswer'] = '正解';
$string['course'] = 'インポートヘルプ';
$string['coursenotfound'] = 'コースが見つかりませんでした。コース省略名を確認してください。';
$string['courseshortname'] = 'コース省略名';
$string['courseshortname_help'] = '問題をインポートするコースの省略名を入力してください。これはギャップフィル問題タイプフォルダ内のexample_questions.xmlファイルから標準的なXML問題のインポートを実行します。';
$string['delimitchars'] = 'デリミタ文字';
$string['delimitchars_help'] = 'デフォルトの [] からフィールドのデリミタ文字を変更します。プログラミング言語問題に有用です。';
$string['delimitset_text'] = 'ギャップのデリミタを設定してください。あなたは The %cat% sat on the %mat% のために % % を追加できます。';
$string['disableregex'] = '正規表現を無効にする';
$string['disableregex_help'] = '正規表現処理を無効にして標準的な文字比較を実行します。これは山括弧 (&lt; and &gt;) を逐語的に扱うHTML問題、また、「*」のような記号を表現ではなく逐語的に扱う計算問題に有用です。';
$string['disableregexset_text'] = '解答を処理するための正規表現を無効にします。';
$string['displaydragdrop'] = 'ドラッグ&ドロップ';
$string['displaydropdown'] = 'ドロップダウン';
$string['displaygapfill'] = 'ギャップフィル';
$string['distractor1'] = 'blue,shoe,small';
$string['distractor2'] = 'blue,shoe,small';
$string['duplicatepartialcredit'] = 'あなたの解答が重複しているため評点は部分点です。';
$string['editquestiontext'] = '問題テキストを編集する';
$string['example1'] = 'ギャップに動詞をドラッグしてください。He [laughed] and [sat] down';
$string['example2'] = 'ドロップダウンから動詞を選択してください。He [laughed] and [sat] down';
$string['example3'] = 'カンガルーはどこから来ましたか? [Australia]. 次のギャップは「cat」または「dog」を受け入れます。 [cat|dog]';
$string['fixedgapsize'] = '固定ギャップサイズ';
$string['fixedgapsize_help'] = '問題を受験する場合、すべてのギャップは最大ギャップと同じサイズとして設定されます。これにより正解のヒントとしてのギャップのサイズを取り除きます。例) ギャップが [red] および [yellow] の場合、「yellow」が最大ギャップになるのは明白です。';
$string['fixedgapsizeset_text'] = 'すべてのギャップのサイズを最大ギャップサイズに設定します。';
$string['gap_plural'] = 'ギャップ';
$string['gap_singular'] = 'ギャップ';
$string['gapfill'] = 'ギャップフィル';
$string['importexamples'] = 'インポート';
$string['incorrect'] = '不正解に対するフィードバック';
$string['itemsettings_button'] = 'アイテム設定';
$string['itemsettings_button_help'] = 'これをクリックすることにより設定モードを正解または不正解に対するフィードバックのようなギャップごとの設定に切り替えます。記号で囲まれたギャップ文字をクリックすることにより設定フォームをポップアップします。';
$string['itemsettingsbutton'] = 'ギャップ設定';
$string['itemsettingserror'] = 'Attoエディタでのみ動作します。エディタプリファレンスに移動してAttoに切り替えてください。';
$string['letterhint0'] = 'あなたが「もう一度受験する」をクリックした場合、それぞれの不正解のギャップに正解の最初の文字が追加されます。';
$string['letterhint1'] = 'あなたが「もう一度受験する」をクリックした場合、正解の次の文字が追加されます。';
$string['letterhints'] = '文字ヒント';
$string['letterhints_help'] = '解答が不正解の場合、インタラクティブモードのヒントとして正解からの文章を追加します。これを動作させるには複数受験にヒントを記述する必要があります。';
$string['letterhints_text'] = '解答が不正解の場合、インタラクティブモードのヒントとして正解からの文章を追加します。';
$string['moreoptions'] = 'さらにオプションを表示する';
$string['noduplicates'] = '重複なし';
$string['noduplicates_help'] = 'この設定を有効にした場合、それぞれの解答はユニークである必要があります。それぞれのフィールドに「|」演算子がある場合に有用です。例) 「オリンピックのメダルの色は?」という問題に [金|銀|銅] のフィールドが3つある場合に学生がすべてのフィールドで「金」と解答した場合、最初のフィールドのみ得点します (他はまだ解答できますが)。これは採点目的のためだけに重複解答を破棄するようなものです。';
$string['optionsaftertext'] = 'テキストの後のオプション';
$string['optionsaftertext_help'] = 'ドラッグ可能な解答オプションがテキスト本文の上ではなく後に表示されます。';
$string['optionsaftertext_text'] = 'ドラッグ可能な解答オプションをテキスト本文の後に設定する';
$string['or'] = 'または';
$string['pleaseenterananswer'] = '解答を入力してください。';
$string['pluginname'] = 'ギャップフィル';
$string['pluginname_help'] = '完成するには角括弧内に語句を入力してください。例) The [cat] sat on the [mat]. 「mat」まはた「rug」を受け付ける場合、[mat|rug] を使用してください。ドロップダウンおよびドラッグ&ドロップモードにシャッフルした正解リストを表示できます。また、任意の不正解の選択肢を含めます。';
$string['pluginname_link'] = 'question/type/gapfill';
$string['pluginnameadding'] = 'ギャップフィル問題を追加する';
$string['pluginnameediting'] = 'ギャップフィルを編集する';
$string['pluginnamesummary'] = 'ギャップスタイル問題の解答を入力します。不正解の選択肢をドラッグ&ドロップまたはドロップダウンで選択できます。構文は簡単に学べます。';
$string['privacy:null_reason'] = 'ギャップフィル問題タイプはいかなるデータにも影響を及ぼしません。また、いかなるデータも保存しません。';
$string['questioncatnotfound'] = '問題カテゴリが見つかりませんでした。<a href={$a}>ここをクリック</a>して初期化した後、ブラウザの戻るボタンをクリックしてください。';
$string['questionsmissing'] = 'あなたの問題テキストにはフィールドが含まれていません。';
$string['questiontext'] = '問題テキスト';
$string['questiontext_help'] = '文字の周りにテキストとなるデリミタを置いてください。';
$string['singleuse'] = 'ドラッグ可能選択肢の1回限定使用';
$string['singleuse_help'] = 'ドラッグ可能選択肢がギャップにドロップされた場合、リストから削除します。';
$string['singleuse_text'] = 'ドラッグ可能選択肢がギャップにドロップされた場合、リストから削除します。';
$string['visitquestions'] = '問題にアクセスするには<a href={$a}>ここ</a>をクリックしてください。';
$string['wronganswers'] = '不正解の選択肢';
$string['wronganswers_help'] = '正解から注意をそらすための不正解の語句のリストです。それぞれの語句をカンマで区切ってください。ドラッグ&ドロップ/ドロップダウンモードにのみ適用されます。';
$string['yougotnrightcount'] = 'あなたは次を正解で完了しました: {$a->num} {$a->gaporgaps} / {$a->outof}.';
