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
 * Strings for component 'tool_customlang', language 'ja', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'ストリングを言語パックに保存する';
$string['checkout'] = '編集のために言語パックを開く';
$string['checkoutdone'] = '言語パックが読み込まれました。';
$string['checkoutinprogress'] = '言語パック読み込み中';
$string['cliexportfileexists'] = 'ファイル {$a->lang} がすでに存在するためスキップします。あなたがオーバーライドしたい場合、「--override=true」オプションを付加してください。';
$string['cliexportfilenotfoundforcomponent'] = '言語 {$a->lang} のファイル {$a->filepath} が見つかりませんでした。このファイルをスキップします。';
$string['cliexportheading'] = '言語ファイルのエクスポートを開始します。';
$string['cliexportnofilefoundforlang'] = 'エクスポートするファイルが見つかりませんでした。この言語のエクスポートをスキップします。';
$string['cliexportstartexport'] = '言語 {$a} をエクスポートする';
$string['cliexportzipdone'] = 'ZIP書庫が作成されました: {$a}';
$string['cliexportzipfail'] = 'ZIP書庫 {$a} を作成できません。';
$string['clifiles'] = '{$a} にインポートするファイル';
$string['cliimporting'] = 'ファイルストリングをインポートする (モード {$a})';
$string['climissingfiles'] = '有効なファイルがありません。';
$string['climissinglang'] = '言語がありません。';
$string['climissingmode'] = 'モードがないか無効です (有効なモードは次のとおりです: all, new, update)。';
$string['climissingsource'] = 'ファイルまたはフォルダがありません。';
$string['clinolog'] = '{$a} にインポートするものがありません。';
$string['confirmcheckin'] = 'あなたは修正をローカル言語パックに保存しようとしています。修正済みストリングはトランスレータからサイトデータディレクトリにエクスポートされます。同時にあなたのサイトは修正済みストリングの使用を開始します。保存を続けるには「続ける」を押してください。';
$string['customlang:edit'] = 'ローカル翻訳を編集する';
$string['customlang:export'] = 'ローカル翻訳をエクスポートする';
$string['customlang:view'] = 'ローカル翻訳を表示する';
$string['export'] = 'カスタムストリングをエクスポートする';
$string['exportfilter'] = 'エクスポートするコンポーネントを選択する';
$string['filter'] = 'フィルタ設定';
$string['filtercomponent'] = 'ストリングを表示するコンポーネント';
$string['filtercustomized'] = 'カスタマイズのみ';
$string['filtermodified'] = 'このセッションの修正のみ';
$string['filteronlyhelps'] = 'ヘルプのみ';
$string['filtershowstrings'] = 'ストリングを表示する';
$string['filterstringid'] = 'ストリング識別子';
$string['filtersubstring'] = '次のテキストを含むストリングのみ';
$string['headingcomponent'] = 'コンポーネント';
$string['headinglocal'] = 'ローカルカスタマイゼーション';
$string['headingstandard'] = '標準テキスト';
$string['headingstringid'] = 'ストリング';
$string['import'] = 'カスタムストリングをインポートする';
$string['import_all'] = 'コンテンツからすべてのストリングを作成または更新する';
$string['import_mode'] = 'インポートモード';
$string['import_new'] = 'ローカルカスタマイゼーションのないストリングのみ作成する';
$string['import_update'] = 'ローカルカスタマイゼーションのあるストリングのみ更新する';
$string['importfile'] = 'ファイルをインポートする';
$string['langpack'] = '言語コンポーネント';
$string['markinguptodate'] = 'カスタマイゼーションを最新版としてマークする';
$string['markinguptodate_help'] = 'あなたのサイトでストリングがカスタマイズされた後、英語オリジナルまたはマスタ翻訳が修正された場合、カスタマイズされた翻訳は旧版となります。カスタマイズされた翻訳をレビューしてください。あなたが最新版であると確認した場合、チェックボックスをチェックしてください。そうでない場合、内容を編集してください。';
$string['markuptodate'] = '最新版としてマークする';
$string['modifiedno'] = '保存する修正済みストリングはありません。';
$string['modifiednum'] = '{$a} 件の修正済みストリングがあります。あなたのローカル言語パックにこれらの修正を保存しますか?';
$string['nolocallang'] = 'ローカルストリングが見つかりませんでした。';
$string['nostringsfound'] = 'ストリングが見つかりませんでした。フィルタ設定を修正してください。';
$string['notice_ignorenew'] = 'カスタマイズされていないため、ストリング {$a->component}/{$a->stringid} を無視します。';
$string['notice_ignoreupdate'] = 'すでに定義されているため、ストリング {$a->component}/{$a->stringid} を無視します。';
$string['notice_inexitentstring'] = 'ストリング {$a->component}/{$a->stringid} が見つかりませんでした。';
$string['notice_missingcomponent'] = 'コンポーネント {$a->component} がありません。';
$string['notice_success'] = 'ストリング {$a->component}/{$a->stringid} が正常に更新されました。';
$string['placeholder'] = 'プレースホルダ';
$string['placeholder_help'] = 'プレースホルダはストリングの中で使用される {$a} または {$a->something} のような特別な記述です。これらの記述はストリングが実際に表示される時点で値と置換されます。

プレースホルダはオリジナルのストリングと同じようにコピーすることが重要です。また、翻訳したり左右の向きを変えないでください。';
$string['placeholderwarning'] = 'プレースホルダを含むストリング';
$string['pluginname'] = '言語カスタマイゼーション';
$string['privacy:metadata'] = '言語カスタマイゼーションプラグインはいかなる個人データも保存しません。';
$string['savecheckin'] = '修正を言語パックに保存する';
$string['savecontinue'] = '修正を適用して編集を続ける';
