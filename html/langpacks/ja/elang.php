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
 * Strings for component 'elang', language 'ja', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = '許可するコンテンツ言語';
$string['allowedlanguages_desc'] = 'ビデオディクテーションを作成・編集するときに表示されるコンテンツ言語です。何も選ばなければ言語一覧全体が表示されます。あとでここから削除しても、活動は保存済みの言語を保持します。';
$string['allowtranscriptdownload'] = '学習者向けトランスクリプトのダウンロード';
$string['allowtranscriptdownload_help'] = 'この機能を有効にすると、学習者は、すべての空欄が塗りつぶされたトランスクリプトのワークシートを、PDF、Word、OpenDocument、またはテキストファイルとしてダウンロードできるようになります。
この機能はデフォルトでは無効になっています。教師は、この設定に関係なく、いつでもトランスクリプトをダウンロードできます。';
$string['allowtranscriptdownload_label'] = '学習者はワークシートをダウンロードできます';
$string['completiondetail_completionfinishattempt'] = '受験を終了する';
$string['completionfinishattempt'] = '受講者は受験を終了する必要があります';
$string['cuepausemode'] = '字幕の終わりでの一時停止';
$string['cuepausemode_auto'] = '自動';
$string['cuepausemode_help'] = '字幕の終わりでメディアを停止するかどうかです。

* 自動 — 再生は続き、その字幕に取り組んでいる間だけ、つまりその字幕か空欄のいずれかをクリックしたあと、あるいはキーボードフォーカスがそこにある間だけ、字幕の終わりで停止します。
* 未回答の字幕ごとに停止する — 空欄が残っている字幕の終わりで毎回停止し、再開を待ちます。
* 停止しない — メディアの終わりまで再生が続きます。

はじめの 2 つは、いずれも空欄がすべて埋まった字幕では停止しません。そこはすでに終わった作業であり、停止しても意味のないキー操作を求めることになるからです。そのため、演習の 2 周目は、まだ足りない箇所でだけ停止します。';
$string['cuepausemode_nostop'] = '停止しない';
$string['cuepausemode_stop'] = '未回答の字幕ごとに停止する';
$string['editcontent'] = 'コンテンツを編集する';
$string['editor_addcue'] = 'セグメントを追加する';
$string['editor_addgap'] = '選択範囲から空欄を作成する';
$string['editor_addhint'] = 'ヒントを追加する';
$string['editor_addvariant'] = '表記ゆれを追加する';
$string['editor_advanced'] = '詳細設定';
$string['editor_algoexact'] = '完全一致';
$string['editor_algorithm'] = '解答の照合';
$string['editor_algowordrecognized'] = '近い解答を許容する';
$string['editor_answers'] = '許容する表記ゆれ';
$string['editor_autosaved'] = 'すべての変更を保存しました。';
$string['editor_autosaveerror'] = '自動保存に失敗しました。「保存」でやり直してください。';
$string['editor_captureend'] = '再生位置から終了時刻を設定する';
$string['editor_capturestart'] = '再生位置から開始時刻を設定する';
$string['editor_cueactions'] = 'セグメントの操作';
$string['editor_cuecount'] = 'セグメント: {$a}';
$string['editor_currentmedia'] = '現在のメディア:';
$string['editor_deletecue'] = 'セグメントを削除する';
$string['editor_deletegap'] = '空欄を削除する';
$string['editor_emptytranscript'] = '(まだテキストがありません)';
$string['editor_endtime'] = '終了時刻';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = '空欄: {$a}';
$string['editor_gaprange'] = '空欄の位置 (文字数)';
$string['editor_gotomedia'] = 'メディアへ移動する';
$string['editor_heading'] = '字幕と空欄を編集する';
$string['editor_hints'] = 'ヒント';
$string['editor_hinttext'] = 'ヒントの文言';
$string['editor_hinttype'] = '種類';
$string['editor_hinttype_firstletter'] = '最初の文字';
$string['editor_hinttype_partial'] = '部分表示';
$string['editor_hinttype_solution'] = '解答';
$string['editor_hinttype_text'] = '自由記述';
$string['editor_hinttype_translation'] = '訳';
$string['editor_hinttype_wordlength'] = '語の長さ';
$string['editor_import'] = '字幕をインポートする';
$string['editor_importappend'] = '既存のセグメントに追加する';
$string['editor_importapply'] = 'インポートする';
$string['editor_importcancel'] = 'キャンセル';
$string['editor_importcheck'] = '内容を確認する';
$string['editor_importchecking'] = '確認しています…';
$string['editor_importcuecount'] = '見つかったセグメント';
$string['editor_importduration'] = '長さ';
$string['editor_importedcues'] = 'インポートしたセグメント: {$a}';
$string['editor_importfilehint'] = '字幕を含む WebVTT (.vtt) または SubRip (.srt) ファイルを選択してください。';
$string['editor_importformat'] = '形式';
$string['editor_importfromfile'] = 'ファイルをアップロードする';
$string['editor_importfromtext'] = 'テキストを貼り付ける';
$string['editor_importgapcount'] = '見つかった空欄';
$string['editor_importhint'] = 'WebVTT または SubRip の内容を貼り付け、セグメントとしてインポートします。';
$string['editor_importparseerror'] = 'この内容は WebVTT としても SubRip としても読み取れませんでした。';
$string['editor_importpastedtext'] = '貼り付けたテキスト';
$string['editor_importreaderror'] = 'ファイルを読み取れませんでした。';
$string['editor_importready'] = 'インポートの準備ができました';
$string['editor_importreplace'] = 'すべてのセグメントを置き換える';
$string['editor_importreplacedcues'] = 'セグメントを置き換えました。新たにインポート: {$a}';
$string['editor_importsource'] = '取り込み元';
$string['editor_importsummary'] = '見つかった内容';
$string['editor_importtoolarge'] = 'このファイルは {$a->size} です。インポートは最大 {$a->max} まで受け付けます。';
$string['editor_importwrongtype'] = '字幕ファイルを選択してください ({$a})。';
$string['editor_insertafter'] = '後ろにセグメントを挿入する';
$string['editor_insertbefore'] = '前にセグメントを挿入する';
$string['editor_invalidtime'] = '時刻を mm:ss.SSS の形式で入力してください。例: 01:05.400';
$string['editor_linkurl'] = '調べるためのリンク';
$string['editor_linkurl_help'] = '語を調べる場所として空欄の横に表示されます。リンクを表示しない場合は空のままにしてください。';
$string['editor_loaderror'] = 'エディタを読み込めませんでした。ページを再読み込みしてください。';
$string['editor_loading'] = 'エディタを読み込んでいます…';
$string['editor_maxlength'] = '最大文字数';
$string['editor_maxlength_help'] = '受講者が入力できる文字数を制限します。0 は制限なしを意味します。';
$string['editor_media'] = 'メディア';
$string['editor_mediafile'] = 'アップロードしたファイル';
$string['editor_mediakind'] = 'メディアの種類';
$string['editor_medianone'] = 'なし';
$string['editor_mediaprovider'] = '提供元';
$string['editor_mediaproviderref'] = '提供元の参照';
$string['editor_mediaproviderrefhint'] = '動画 ID またはリンク。一般的な形式で入力できます (例: youtu.be/…)。';
$string['editor_mediasaved'] = 'メディアを保存しました。';
$string['editor_mediaurl'] = 'メディアの直接 URL';
$string['editor_nocues'] = 'セグメントがまだありません。追加するか、字幕をインポートしてください。';
$string['editor_nocueselected'] = '編集するセグメントを一覧から選択してください。';
$string['editor_nocuesmatch'] = 'この検索に一致するセグメントはありません。';
$string['editor_nogaps'] = '空欄なし';
$string['editor_nomedia'] = 'なし';
$string['editor_nomedianotice'] = '先に「メディア」タブで動画または音声ファイルを追加してください。字幕はメディアに合わせて時刻が付けられるため、セグメントや空欄の作業にはメディアが必要です。';
$string['editor_novideotrack'] = 'このブラウザはこのメディアの映像トラックをデコードできません (音声のみ再生されます)。受講者には黒い画面が表示されます。ファイルを H.264/MP4 に再エンコードして (たとえば ffmpeg や HandBrake を使用)、アップロードし直してください。';
$string['editor_onboardinggaps'] = 'セグメント内の語を選択し、空欄にします。';
$string['editor_onboardingimport'] = 'WebVTT または SubRip の字幕をインポートするか、セグメントを手で追加します。';
$string['editor_onboardingintro'] = '3 つの手順で演習を作成します:';
$string['editor_onboardingmedia'] = 'メディアを選びます (アップロード、URL、提供元のいずれか)。';
$string['editor_onboardingtitle'] = '演習を始めましょう';
$string['editor_onlywarnings'] = '警告のあるセグメントのみ';
$string['editor_parsegaps'] = '空欄の記号を認識する: [語] はヒントを許可する空欄、{語} はヒントなしの空欄になります。';
$string['editor_penalty'] = '減点';
$string['editor_poster'] = 'サムネイル画像';
$string['editor_preview'] = '受講者向けプレビュー';
$string['editor_publish'] = '公開する';
$string['editor_published'] = 'バージョンを公開しました。';
$string['editor_removehint'] = 'ヒントを削除する';
$string['editor_removevariant'] = '削除する';
$string['editor_ruleapplied'] = 'ルールから空欄を %count% 件作成しました。';
$string['editor_ruleapply'] = '空欄 %count% 件を適用する';
$string['editor_ruleerror'] = '空欄を生成できませんでした。';
$string['editor_ruleeverynth'] = 'n 語ごと';
$string['editor_rulefound'] = 'ルールで空欄が %count% 件見つかりました。';
$string['editor_rulegenerate'] = '空欄を生成する';
$string['editor_ruleinterval'] = '間隔 (n)';
$string['editor_ruletype'] = '空欄のルール';
$string['editor_rulewordlist'] = '隠す語';
$string['editor_rulewords'] = '語のリスト';
$string['editor_save'] = '下書きを保存する';
$string['editor_saved'] = '下書きを保存しました。';
$string['editor_saveerror'] = '下書きを保存できませんでした。';
$string['editor_savemedia'] = 'メディアを保存する';
$string['editor_saving'] = '保存しています…';
$string['editor_searchcues'] = 'セグメントを検索する';
$string['editor_selecttext'] = 'まず書き起こしの中で隠す語を選択してください。';
$string['editor_solution'] = '解答';
$string['editor_starttime'] = '開始時刻';
$string['editor_transcript'] = '書き起こし';
$string['editor_unsaved'] = '未保存の変更';
$string['editor_uploadmedia'] = 'メディアファイルをアップロードする';
$string['editor_variantisregex'] = '{$a} を正規表現として扱う';
$string['editor_variantmatching'] = '許容する表記ゆれの照合方法';
$string['editor_warnemptysolution'] = '解答のない空欄';
$string['editor_warnnotranscript'] = 'テキストなし';
$string['editor_warntiming'] = '終了が開始より後になっていません';
$string['editor_waveform'] = '音声波形';
$string['elang:addinstance'] = '新しいビデオディクテーションを追加する';
$string['elang:attempt'] = 'ビデオディクテーションに取り組む';
$string['elang:deleteattempts'] = '受講者の受験を削除する';
$string['elang:exportreports'] = '個人データを含むレポートをエクスポートする';
$string['elang:exportsolution'] = '解答入りの完全な書き起こしをエクスポートする';
$string['elang:exporttranscript'] = 'ワークシートを文書としてエクスポートする';
$string['elang:manage'] = '演習コンテンツを作成・編集する';
$string['elang:useregex'] = '許容する解答で正規表現を使用する';
$string['elang:view'] = 'ビデオディクテーションを閲覧する';
$string['elang:viewreports'] = '受講者レポートを閲覧する';
$string['error_attemptnotinprogress'] = 'この受験はすでに進行中ではありません。';
$string['error_couldnotobtainlock'] = 'この処理のロックを取得できませんでした。もう一度お試しください。';
$string['error_draftrevisionmismatch'] = 'この下書きは読み込み後に変更されています。読み込み直してからやり直してください。';
$string['error_duplicatecuekey'] = '2 つのセグメントがキー「{$a}」を共有しています。各セグメントには一意のキーが必要です。';
$string['error_duplicategapkey'] = '同じセグメント内の 2 つの空欄がキー「{$a}」を共有しています。各空欄には一意のキーが必要です。';
$string['error_duplicatehintlevel'] = 'ある空欄のレベル {$a} にヒントが 2 つあります。各レベルは一意である必要があります。';
$string['error_gapnotinattemptversion'] = 'この空欄はこの受験の演習バージョンに属していません。';
$string['error_importnocues'] = 'この内容から字幕を読み取れませんでした。WebVTT または SubRip のファイルでは、各字幕の上に 00:00:01.000 --> 00:00:04.000 のような時刻行があります。';
$string['error_importnotutf8'] = 'このファイルは正しい UTF-8 ではありません。古い文字コードで保存された可能性があります。テキストエディタで開き、UTF-8 で保存し直してください。';
$string['error_importtoolarge'] = 'このファイルは {$a->size} です。インポートは最大 {$a->max} まで受け付けます。授業録画の字幕ファイルはこれよりはるかに小さいため、字幕ファイルではない可能性が高いです。';
$string['error_importtoomanycues'] = 'このファイルには字幕が {$a->count} 件含まれています。インポートは最大 {$a->max} 件まで受け付けます。';
$string['error_invalidcuepausemode'] = '字幕の終わりでの一時停止について、表示された選択肢から選んでください。';
$string['error_invalidgradingalgorithm'] = '評価アルゴリズム「{$a}」は exact でも wordrecognized でもありません。';
$string['error_invalidhinttype'] = 'ヒントの種類「{$a}」は許可された種類ではありません。';
$string['error_invalidisregex'] = '表記ゆれの正規表現フラグは 0 または 1 である必要があります。';
$string['error_invalidmediakind'] = '選択されたメディアの種類が file、url、provider のいずれでもありません。';
$string['error_invalidpenalty'] = 'ヒントの減点は 0 から 1 の間である必要があります。';
$string['error_invalidproviderref'] = '「{$a}」はこの提供元で認識できる動画 ID またはリンクではありません。';
$string['error_invalidregexpattern'] = '「{$a}」は正しい正規表現ではありません。';
$string['error_invalidsolutionavailability'] = '受講者が解答入りの書き起こしを見られる時期について、表示された選択肢から選んでください。';
$string['error_invalidsourceurl'] = 'http:// または https:// で始まる完全なアドレス、あるいは YouTube か Vimeo のリンクを入力してください。';
$string['error_invalidsubtitleposition'] = '字幕の表示位置について、表示された選択肢から選んでください。';
$string['error_invalidv1cuejson'] = 'バージョン 1 のこのセグメントを処理できませんでした。';
$string['error_negativegapoffset'] = '空欄の位置と長さを負の値にすることはできません。';
$string['error_noaccesstoattempt'] = 'この受験にアクセスする権限がありません。';
$string['error_nomorehints'] = 'この空欄にこれ以上のヒントはありません。';
$string['error_nopublishedversion'] = 'この演習にはまだ公開されたコンテンツがありません。';
$string['error_responsetoolong'] = '解答が長すぎます。この空欄の上限は {$a} 文字です。';
$string['error_solutionnotavailable'] = 'この活動では解答入りの書き起こしを利用できません。';
$string['error_staleattemptstate'] = 'この受験の表示は最新ではありません。現在の状態を読み込み直してからやり直してください。';
$string['error_transcriptnotavailable'] = 'この活動にダウンロードできる書き起こしはありません。';
$string['error_unknowngaprule'] = '空欄のルール種別「{$a}」は不明です。';
$string['error_unknownmediaprovider'] = '「{$a}」はサポートされているメディア提供元ではありません。';
$string['error_versionnotadraft'] = '編集できるのは下書き状態のバージョンだけです。';
$string['error_versionnotfound'] = 'この演習バージョンはすでに存在しません。';
$string['error_versionnotpublishable'] = 'このバージョンは公開できません: {$a}';
$string['export_audienceaftersubmission'] = '受講者は受験を終了した後にダウンロードできます';
$string['export_audiencealways'] = '受講者はいつでもダウンロードできます';
$string['export_audiencestaff'] = '権限のある教員のみ。受講者には表示されません';
$string['export_docx'] = 'Word 形式 (DOCX) でダウンロード';
$string['export_downloadpdf'] = 'PDF をダウンロード';
$string['export_heading'] = '書き起こしをエクスポートする';
$string['export_intro'] = 'この演習の書き起こしを複数の形式でダウンロードできます。';
$string['export_moreformats'] = 'その他の形式';
$string['export_nocontent'] = 'エクスポートできる公開済みの書き起こしはまだありません。';
$string['export_odt'] = 'OpenDocument 形式 (ODT) でダウンロード';
$string['export_pdf'] = 'PDF 形式でダウンロード';
$string['export_solution'] = '解答入りの書き起こし';
$string['export_solutionhint'] = 'すべての空欄の解答が表示された完全なテキストです。';
$string['export_text'] = 'テキストとしてダウンロード';
$string['export_versionnote'] = 'エクスポートはこの演習の現在公開されているバージョンに基づきます。';
$string['export_worksheet'] = 'ワークシート (空欄は非表示)';
$string['export_worksheethint'] = 'すべての空欄を隠したテキストです。受講者向け資料として配布できます。';
$string['exporttranscript'] = '書き起こしをエクスポートする';
$string['filearea_media'] = 'メディア';
$string['filearea_poster'] = 'サムネイル画像';
$string['gradingheading'] = '解答の評価';
$string['import_badtiming'] = '時刻行を読み取れませんでした: {$a}';
$string['import_emptytranscript'] = 'テキストのないセグメントをスキップしました。';
$string['import_warnlinetoolong'] = 'ブロック {$a->block} をスキップしました: {$a->max} 文字を超える行が含まれており、字幕行ではありません。';
$string['jarothreshold'] = '類似度のしきい値';
$string['jarothreshold_help'] = '「近い解答を許容する」に設定した空欄では、期待される解答と入力された解答の Jaro 類似度の下限です。1 は言語ごとの正規化後に完全一致を求めます。値を下げるほど、より異なる表記も許容されます。';
$string['jarothresholdrange'] = 'しきい値は 0 から 1 の間である必要があります。';
$string['language'] = 'コンテンツの言語';
$string['language_help'] = '演習コンテンツの言語を選びます。大文字小文字の扱いや翻字を含め、解答の照合方法を決めます。言語ごとの処理を行わない場合は「汎用 (指定なし)」を選んでください。新しいコンテンツバージョンはこの設定から始まります。';
$string['language_none'] = '汎用 (指定なし)';
$string['media_cuenote'] = 'メディアを変更しても既存の字幕と空欄は保持されます。時刻は自動調整されないため、その後エディタで確認してください。';
$string['media_current'] = '現在のメディア';
$string['media_heading'] = 'メディア';
$string['media_intro'] = 'この演習の土台となる動画または音声を選びます。字幕はこれに合わせて時刻が付けられるため、最初の手順になります。';
$string['media_none'] = 'この演習にはまだメディアが設定されていません。';
$string['media_othersource'] = 'その他の取り込み元';
$string['media_providerhint'] = '認識される提供元: {$a}。それ以外のアドレスは直接メディア URL として使用されます。';
$string['media_sourceurl'] = 'メディアの URL';
$string['media_sourceurl_help'] = 'ファイルをアップロードする代わりに動画のアドレスを貼り付けます。YouTube や Vimeo のリンク、またはメディアファイルの直接アドレスが使えます。

ここにアドレスを入力すると、アップロードしたファイルより優先されます。上のアップロードを使う場合は空のままにしてください。

提供元の動画は提供元自身のフレーム内で再生され、そのフレームは再生位置を通知しません。そのため、このような演習では字幕を常にメディアの下に表示し、字幕の終わりで停止することはありません。

**データの送信先について。** YouTube や Vimeo のフレームは、受講者一人ひとりのブラウザをその企業に接続し、企業は受講者の IP アドレスと端末情報を受け取ります。初期状態では、演習はその前に同意を求めます。所属機関が独自のメディアサーバー (Opencast、Panopto、Kaltura など) を運用している場合は、そこからファイルの直接アドレスを貼り付けてください。通常のメディア URL として扱われ、選択した字幕位置と一時停止の設定が保たれ、第三者は関与しません。';
$string['migratev1_approvalheading'] = '移行済み、確認待ち';
$string['migratev1_approvebutton'] = 'この移行を承認する';
$string['migratev1_approved'] = 'ビデオディクテーション {$a} を承認済みとして記録しました。';
$string['migratev1_colactivity'] = '活動';
$string['migratev1_colalgorithm'] = '評価アルゴリズム';
$string['migratev1_colcues'] = 'セグメント';
$string['migratev1_colgaps'] = '空欄';
$string['migratev1_colissues'] = '問題';
$string['migratev1_collearners'] = '受講者';
$string['migratev1_confirmdecommission'] = 'この操作はバージョン 1 の旧テーブルと elang.options 列を完全に削除します。取り消すことはできません。続行しますか?';
$string['migratev1_confirmmigrate'] = 'この操作は、上記の各活動についてバージョン 2 のデータを書き込むバックグラウンドタスクを登録します。バージョン 1 のテーブルと elang.options はそのまま残ります。続行しますか?';
$string['migratev1_decommissionblocked'] = '削除はまだ実行できません。以下の一覧をご覧ください。';
$string['migratev1_decommissionblockedintro'] = '削除は次の条件が満たされるまで実行できません:';
$string['migratev1_decommissionbutton'] = 'バージョン 1 の旧データを削除する';
$string['migratev1_decommissioned'] = 'バージョン 1 の旧データを削除しました。';
$string['migratev1_decommissionheading'] = 'バージョン 1 データの廃止';
$string['migratev1_decommissionready'] = 'バージョン 1 のすべての活動が移行され、承認されました。旧テーブルと elang.options を削除できます。この操作は取り消せません。';
$string['migratev1_heading'] = 'バージョン 1 の活動を移行する';
$string['migratev1_migratebutton'] = 'これらの活動を移行する';
$string['migratev1_noissues'] = 'なし';
$string['migratev1_nonepending'] = '移行待ちのバージョン 1 の活動はありません。';
$string['migratev1_nonependingapproval'] = '確認待ちの移行済み活動はありません。';
$string['migratev1_notablespresent'] = 'このサイトにバージョン 1 の旧テーブルは見つかりませんでした。移行するものはありません。';
$string['migratev1_parseerrorcount'] = '処理できなかったセグメント: {$a}';
$string['migratev1_pendingheading'] = '未移行';
$string['migratev1_queued'] = '移行タスクを登録しました。次回の cron 実行時、または admin/cli/adhoc_task.php --execute ですぐに実行されます。';
$string['migratev1_verifiedclean'] = '検証済み: 移行されたデータはバージョン 1 の元データと相違なく一致しています。';
$string['migratev1_verifieddiscrepancies'] = '検証でバージョン 1 の元データとの相違が見つかりました: {$a}';
$string['migratev1_verifyfailed'] = 'この活動を検証できませんでした: {$a}';
$string['modulename'] = 'ビデオディクテーション';
$string['modulename_help'] = 'ビデオディクテーションの活動では、受講者が動画を見たり聞いたりしながら、時刻付き字幕の空欄を埋めます。

教員は WebVTT または SubRip の字幕ファイルをインポートし、語や語句を空欄として指定し、解答をどの程度厳密に照合するかを設定します。受講者は書き起こしをセグメントごとに進め、減点付きのヒントを求め、その場で結果を確認できます。';
$string['modulenameplural'] = 'ビデオディクテーション';
$string['nav_exportshort'] = 'エクスポート';
$string['nav_media'] = 'メディア';
$string['nav_reports'] = '受験';
$string['nav_subtitles'] = '字幕と空欄';
$string['noinstances'] = 'このコースにビデオディクテーションはありません。';
$string['overview_attempts'] = '受験';
$string['playbackheading'] = '再生と字幕';
$string['playbackoverlayhint'] = '映像に重ねた字幕は再生中の字幕だけを表示するため、まだ埋めていない空欄が残る字幕の終わりでは必ず再生が止まります。ここで選ぶ項目はありません。';
$string['playbackproviderhint'] = 'YouTube や Vimeo の動画は提供元のフレーム内で再生され、そのフレームは再生位置を通知しません。そのため、このような演習では字幕を常にメディアの下に表示し、上でどれを選んでも字幕の終わりで停止することはありません。アップロードしたファイルと直接メディア URL は、どちらの設定にも従います。';
$string['player_check'] = '解答を確認する';
$string['player_consentaccept'] = '{$a} から動画を読み込む';
$string['player_consentdetail'] = '再生すると、お使いのブラウザが {$a} に接続します。{$a} は IP アドレスと端末に関する情報を受け取り、すでに保存されている Cookie を読み取ることがあります。動画の読み込みを選ぶまで、何も送信されません。';
$string['player_consentheading'] = 'この動画は {$a} が提供しています';
$string['player_finish'] = '受験を終了する';
$string['player_finished'] = '受験を終了しました。得点: %score%%';
$string['player_finishincomplete'] = '未入力の空欄: {$a}。このまま受験を終了しますか?';
$string['player_gaplabel'] = '空欄 %gap%';
$string['player_gaplink'] = 'リンクを開く';
$string['player_hint'] = 'ヒントを表示する';
$string['player_loaderror'] = '演習を読み込めませんでした。ページを再読み込みしてください。';
$string['player_loading'] = '演習を読み込んでいます…';
$string['player_nocontent'] = '演習コンテンツはまだ公開されていません。時間をおいてご確認ください。';
$string['player_novideotrack'] = 'お使いのブラウザはこのメディアの映像トラックを表示できません。音声は再生されます。担当教員にお知らせください。';
$string['player_outdatedattempt'] = 'この演習は、あなたがこの受験を始めたあとに更新されました。現在は以前のコンテンツで続けています。この受験を終了すると、次回から更新後の演習に取り組めます。';
$string['player_progress'] = '{$a->total} 件中 {$a->done} 件の空欄に解答済み';
$string['player_ready'] = '演習の準備ができました。';
$string['player_scorelabel'] = '得点: %score%%';
$string['player_stateaccepted'] = '許容';
$string['player_statecorrect'] = '正解';
$string['player_statehinted'] = 'ヒント使用';
$string['player_stateincorrect'] = '不正解';
$string['player_submitfailed'] = '解答を保存できませんでした。もう一度お試しください。';
$string['player_transcriptheading'] = '書き起こし';
$string['pluginadministration'] = 'ビデオディクテーションの管理';
$string['pluginname'] = 'ビデオディクテーション';
$string['privacy_metadata_elang'] = '各活動について、1.x コンテンツの一方向移行を誰が承認したかの記録。';
$string['privacy_metadata_elang_attempt'] = '演習の受験ごとに、誰がいつ行い、どこまで進み、どのように評価されたかを記録します。';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'この受験で受講者が解答した空欄の数。';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'そのユーザーと活動におけるこの受験の通し番号。';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'この受験で正解として認められた空欄の数。';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'この受験で文字どおり完全一致で解答された空欄の数。';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'この受験で受講者がヒントを求めた空欄の数。';
$string['privacy_metadata_elang_attempt_score'] = 'この受験で得た得点。';
$string['privacy_metadata_elang_attempt_state'] = '受験が進行中か、終了済みか、放棄されたか。';
$string['privacy_metadata_elang_attempt_timefinish'] = '受験を終了した時刻。';
$string['privacy_metadata_elang_attempt_timemodified'] = '受験を最後に更新した時刻。';
$string['privacy_metadata_elang_attempt_timestart'] = '受験を開始した時刻。';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'この受験が属する演習バージョンの空欄の総数。';
$string['privacy_metadata_elang_attempt_userid'] = '受験を行ったユーザーの ID。';
$string['privacy_metadata_elang_attempt_versionid'] = 'この受験が行われた演習バージョン。';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'この活動の mod_elang 1.x からの移行を承認したユーザー。承認をあとから確認できるように保存されます。';
$string['privacy_metadata_elang_response'] = '受験中に受講者が解答した空欄ごとに、解答の文言とその評価方法を記録します。';
$string['privacy_metadata_elang_response_accepted'] = 'この空欄で解答が正解として認められたかどうか。';
$string['privacy_metadata_elang_response_hintlevel'] = 'この空欄で受講者に表示された最も高いヒントレベル。';
$string['privacy_metadata_elang_response_responsetext'] = '受講者がこの空欄に入力した文字列。';
$string['privacy_metadata_elang_response_resultstate'] = '評価がこの解答に与えた分類 (完全一致、語として認識、不正解、未入力)。';
$string['privacy_metadata_elang_response_score'] = 'ヒントによる減点後に、この解答がもたらした得点。';
$string['privacy_metadata_elang_response_timecreated'] = 'この解答が最初に送信された時刻。';
$string['privacy_metadata_elang_response_timemodified'] = 'この解答が最後に更新された時刻。';
$string['privacy_metadata_elang_response_tries'] = '受講者がこの空欄に解答を送信した回数。';
$string['privacy_metadata_elang_version'] = 'コンテンツバージョンごとに、最後に変更したユーザーを記録します。';
$string['privacy_metadata_elang_version_usermodified'] = 'このコンテンツバージョンを最後に変更したユーザー。演習コンテンツを誰が編集したか確認できるように保存されます。';
$string['privacy_provider_externallink'] = '演習が YouTube や Vimeo の動画を使う場合、演習を開くと受講者のブラウザがその提供元に接続します。プラグイン自体は何も送信しませんが、接続は活動によって生じます。そもそも接続が起きるかどうかは、サイトの提供元同意の設定と受講者の同意によって決まります。';
$string['privacy_provider_ipaddress'] = '受講者のブラウザが接続する IP アドレス。';
$string['privacy_provider_useragent'] = 'ブラウザが送信するブラウザおよび端末の情報。';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'YouTube や Vimeo を埋め込む前に確認する';
$string['providerconsent_desc'] = 'YouTube や Vimeo の動画を使う演習は、動画の代わりに案内を表示し、受講者が同意したあとで埋め込みます。これがないと、ページを開いた時点で提供元が受講者の IP アドレスとブラウザ情報を受け取ります。誰かが再生を押す前の段階です。所属機関が別の方法でこの同意を得ている場合にのみ無効にしてください。';
$string['report_actions'] = '操作';
$string['report_answered'] = '解答済み';
$string['report_attemptnumber'] = '受験';
$string['report_back'] = 'すべての受験に戻る';
$string['report_correct'] = '正解';
$string['report_delete'] = '削除する';
$string['report_deleteconfirm'] = 'この受験とすべての解答を完全に削除しますか? 取り消すことはできません。';
$string['report_deleted'] = '受験を削除しました。';
$string['report_exact'] = '完全一致';
$string['report_export'] = 'エクスポートする';
$string['report_filterany'] = 'すべて';
$string['report_filterapply'] = 'フィルタを適用する';
$string['report_filterattempt'] = '受験番号';
$string['report_filterfrom'] = '開始日 (以降)';
$string['report_filterrangeerror'] = '期間の終わりが始まりより前になっています。';
$string['report_filterreset'] = 'フィルタを解除する';
$string['report_filterstate'] = '状態';
$string['report_filterto'] = '開始日 (以前)';
$string['report_filteruser'] = '受講者';
$string['report_finished'] = '終了済み';
$string['report_heading'] = '受験';
$string['report_hinted'] = 'ヒントあり';
$string['report_hints'] = 'ヒントレベル';
$string['report_kpianswered'] = '解答済み';
$string['report_kpiattempts'] = '表示中の受験';
$string['report_kpiaverage'] = '平均得点 (終了済み)';
$string['report_kpicorrect'] = '許容';
$string['report_kpiexact'] = '完全に正解';
$string['report_kpifinished'] = '終了済み';
$string['report_kpihinted'] = 'ヒントを使用';
$string['report_kpihintedgaps'] = 'ヒントが必要';
$string['report_noattempts'] = '受験はまだありません。';
$string['report_nogaps'] = 'この受験が行われたバージョンに空欄はありません。';
$string['report_nomatchingattempts'] = 'これらのフィルタに一致する受験はありません。';
$string['report_noresponse'] = '未解答';
$string['report_response'] = '解答';
$string['report_result'] = '結果';
$string['report_result_empty'] = '未入力';
$string['report_result_exact'] = '完全一致';
$string['report_result_incorrect'] = '不正解';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = '語として認識';
$string['report_score'] = '得点';
$string['report_solution'] = '解答';
$string['report_started'] = '開始';
$string['report_state'] = '状態';
$string['report_state_abandoned'] = '放棄';
$string['report_state_finished'] = '終了';
$string['report_state_inprogress'] = '進行中';
$string['report_transcript'] = '書き起こし';
$string['report_tries'] = '解答回数';
$string['report_user'] = '受講者';
$string['report_view'] = '表示する';
$string['reports'] = 'レポート';
$string['resetattempts'] = 'すべての受講者の受験と解答を削除する';
$string['solutionavailability'] = '受講者向けの解答入り書き起こし';
$string['solutionavailability_aftersubmission'] = '受験を終了した後';
$string['solutionavailability_always'] = 'いつでも';
$string['solutionavailability_help'] = '受講者が、すべての空欄の解答が表示された完全な書き起こしをダウンロードできる時期です。

* 表示しない — 教員のみがダウンロードできます。
* 受験を終了した後 — 受講者はこの活動で受験を終えるとダウンロードできます。
* いつでも — 受講者は解答前でもダウンロードできます。

権限のある教員は、この設定にかかわらず常にダウンロードできます。';
$string['solutionavailability_never'] = '表示しない';
$string['subplugintype_elangscript'] = '文字体系ハンドラ';
$string['subplugintype_elangscript_plural'] = '文字体系ハンドラ';
$string['subtitleposition'] = '字幕の表示';
$string['subtitleposition_below'] = 'メディアの下';
$string['subtitleposition_help'] = '対話的な字幕を表示する場所です。

* メディアの下 — 書き起こし全体がメディアの下の独立したスクロール領域に表示され、再生に追随します。
* 動画の中 (上または下) — 再生中の字幕だけがメディアに重ねて描画されます。

音声のみのメディアには重ねる映像がないため、常にメディアの下の表示が使われます。設定自体は保持され、活動が動画を使うようになれば再び有効になります。';
$string['subtitleposition_overlaybottom'] = '動画の中 — 下';
$string['subtitleposition_overlaytop'] = '動画の中 — 上';
$string['task_migratev1activities'] = 'バージョン 1 の活動を移行する';
$string['transcriptheading'] = '受講者向けの書き起こし';
$string['validate_cueafterend'] = '{$a->where}: {$a->endtime} ms で終わり、メディア ({$a->duration} ms) より後になっています。再生がそこに到達することはありません。';
$string['validate_cueendbeforestart'] = '{$a}: 終了が開始より後になっていません。';
$string['validate_cuewhere'] = 'セグメント {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = '{$a} の解答が空です。';
$string['validate_hintlevels'] = '{$a} のヒントレベルが 1 から始まる連続した並びになっていません。';
$string['validate_negativetime'] = '{$a}: 開始時刻が録音の先頭より前です。';
$string['validate_nocues'] = 'このバージョンにセグメントがありません。';
$string['validate_nogaps'] = 'このバージョンに解答する空欄がありません。';
$string['validate_nonpositivelength'] = '{$a} の文字数は正の値である必要があります。';
$string['validate_rangeoutside'] = '{$a} の文字範囲が書き起こしの外に出ています。';
$string['validate_rangeoverlap'] = '{$a} の文字範囲が別の空欄と重なっています。';
$string['validate_unknownalgorithm'] = '{$a->where} の評価アルゴリズム「{$a->algorithm}」は認識されません。';
$string['validate_where'] = 'セグメント {$a->cuekey} の空欄 {$a->gapkey}';
$string['verify_algorithmmismatch'] = '空欄 {$a->gapkey}: 評価アルゴリズムは「{$a->actual}」ですが、「{$a->expected}」が期待されていました。';
$string['verify_attemptcount'] = '移行された受験数は {$a->actual} ですが、1.x の受講者 {$a->expected} 人分が期待されていました。';
$string['verify_jarothreshold'] = '解答照合のしきい値は {$a->actual} ですが、{$a->expected} が期待されていました。';
$string['verify_missingattempt'] = 'ユーザー {$a}: 移行された受験が期待されましたが、見つかりませんでした。';
$string['verify_missingcue'] = 'セグメント {$a}: 移行されたセグメントがありません。';
$string['verify_missinggap'] = '空欄 {$a}: 移行された空欄がありません。';
$string['verify_missinghint'] = '空欄 {$a}: バージョン 1 ではここでヒントが許可されていましたが、移行されていません。';
$string['verify_orphancue'] = 'セグメント {$a}: 対応するバージョン 1 のセグメントが見つかりません。';
$string['verify_orphangap'] = '空欄 {$a}: 対応するバージョン 1 の空欄が見つかりません。';
$string['verify_rangemismatch'] = '空欄 {$a}: 文字範囲がバージョン 1 の元データと一致しません。';
$string['verify_responsecount'] = 'ユーザー {$a->userid}: 移行された解答数は {$a->actual} ですが、{$a->expected} が期待されていました。';
$string['verify_solutionmismatch'] = '空欄 {$a->gapkey}: 解答は「{$a->actual}」ですが、「{$a->expected}」が期待されていました。';
$string['verify_transcriptmismatch'] = 'セグメント {$a}: 書き起こしがバージョン 1 の元データと一致しません。';
$string['verify_unexpectedhint'] = '空欄 {$a}: バージョン 1 ではここでヒントが許可されていませんでしたが、移行されています。';
