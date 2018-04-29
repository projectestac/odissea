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
 * Strings for component 'assignfeedback_editpdf', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'クイックリストを追加する';
$string['annotationcolour'] = 'アノテーション色';
$string['black'] = '黒';
$string['blue'] = '青';
$string['cannotopenpdf'] = 'PDFファイルを開くことができません。ファイルが破損しているか未サポートのフォーマットです。';
$string['clear'] = 'クリア';
$string['colourpicker'] = 'カラーピッカ';
$string['command'] = 'コマンド:';
$string['comment'] = 'コメント';
$string['commentcolour'] = 'コメント色';
$string['commentcontextmenu'] = 'コメントコンテクストメニュー';
$string['couldnotsavepage'] = 'ページ {$a} を保存できませんでした。';
$string['currentstamp'] = 'スタンプ';
$string['deleteannotation'] = 'アノテーションを削除する';
$string['deletecomment'] = 'コメントを削除する';
$string['deletefeedback'] = 'フィードバックPDFを削除する';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'フィードバックPDFをダウンロードする';
$string['draftchangessaved'] = 'アノテーション下書きが保存されました。';
$string['drag'] = 'ドラッグ';
$string['editpdf'] = 'PDFに注釈をつける';
$string['editpdf_help'] = 'ブラウザ内で直接学生の提出に注釈を付けて、ダウンロード可能な編集済みPDFを作成します。';
$string['enabled'] = 'PDFに注釈をつける';
$string['enabled_help'] = 'この設定を有効にした場合、教師は作成時に注釈付きのPDFを作成することができます。これにより、教師はコメント、スケッチおよびスタンプを直接学生の課題のトップに追加することができます。注釈はブラウザ内で作成します。また、別途ソフトウェアを必要としません。';
$string['errorgenerateimage'] = 'Ghostscriptイメージ生成中にエラーが発生しました。デバッグ情報: {$a}';
$string['errorpdfpage'] = 'このページの生成中にエラーが発生しました。';
$string['filter'] = 'コメントをフィルタする ...';
$string['generatefeedback'] = 'フィードバックPDFを生成する';
$string['generatingpdf'] = 'PDF生成中 ...';
$string['gotopage'] = 'ページに移動する';
$string['green'] = '緑';
$string['gsimage'] = 'Ghostscriptテストイメージ';
$string['highlight'] = 'ハイライト';
$string['jsrequired'] = 'PDFに注釈を付けるにはJavaScriptを必要とします。この機能を使用したい場合、あなたのブラウザのJavaScriptを有効にしてください。';
$string['launcheditor'] = 'PDFエディタを起動する ...';
$string['line'] = '行';
$string['loadingeditor'] = 'PDFエディタ読み込み中';
$string['navigatenext'] = '次のページ';
$string['navigateprevious'] = '前のページ';
$string['output'] = 'アウトプット:';
$string['oval'] = '楕円';
$string['pagenumber'] = 'ページ {$a}';
$string['pagexofy'] = 'ページ {$a->page} / {$a->total}';
$string['pathtogspathdesc'] = 'PDFに注釈を付けるには「 {$a} 」にGhostscriptのパスを設定する必要があることに留意してください。';
$string['pathtounoconvpathdesc'] = 'PDFに注釈を付けるには「 {$a} 」にunoconvのパスを設定する必要があることに留意してください。';
$string['pen'] = 'ペン';
$string['pluginname'] = 'PDF注釈';
$string['preparesubmissionsforannotation'] = 'アノテーションのために提出を準備する';
$string['rectangle'] = '長方形';
$string['red'] = '赤';
$string['result'] = '結果:';
$string['searchcomments'] = 'コメントを検索する';
$string['select'] = '選択';
$string['stamp'] = 'スタンプ';
$string['stamppicker'] = 'スタンプピッカ';
$string['stamps'] = 'スタンプ';
$string['stampsdesc'] = 'スタンプはイメージファイルである必要があります (推奨サイズ: 40x40)。これらのイメージはスタンプツールでPDFに注釈を付けるために使用することができます。';
$string['test_doesnotexist'] = 'Ghostscriptのパスは存在しないファイルを指しています。';
$string['test_empty'] = 'Ghostscriptのパスが空白です - 正しいパスを入力してください。';
$string['testgs'] = 'Ghostscriptのパスをテストする';
$string['test_isdir'] = 'Ghostscriptのパスはフォルダを指しています。あなたが指定するパス内にGhostscriptプログラムを含んでください。';
$string['test_notestfile'] = 'テストPDFがありません。';
$string['test_notexecutable'] = 'Ghostscriptは実行できないファイルを指しています。';
$string['test_ok'] = 'Ghostscriptのパスに問題はないようですが - 下のイメージ内にメッセージが表示されることを確認してください。';
$string['test_unoconv'] = 'unoconvパスをテストする';
$string['test_unoconvdoesnotexist'] = 'unoconvパスはunoconvプログラムを指していません。あなたのパス設定を確認してください。';
$string['test_unoconvdownload'] = '変換済みPDFテストファイルをダウンロードします。';
$string['test_unoconvisdir'] = 'unoconvパスはフォルダを指しています。あなたが指定するパス内にunoconvプログラムを含んでください。';
$string['test_unoconvnotestfile'] = 'PDFに変換されるテストドキュメントがありません。';
$string['test_unoconvnotexecutable'] = 'unoconvパスが実行可能ではないファイルを指しています。';
$string['test_unoconvok'] = 'unoconvパスは適切に設定されているようです。';
$string['test_unoconvversionnotsupported'] = 'あなたがインストールしているunoconvのバージョンはサポートされません。Moodle課題評定機能ではバージョン0.7またはそれ以上を必要とします。';
$string['tool'] = 'ツール';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = '注釈付きPDFを表示する ...';
$string['white'] = '白';
$string['yellow'] = '黄色';
