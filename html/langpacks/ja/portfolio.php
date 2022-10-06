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
 * Strings for component 'portfolio', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'アクティブエクスポートを解決する';
$string['activeportfolios'] = '利用可能なポートフォリオ';
$string['addalltoportfolio'] = 'すべてをポートフォリオにエクスポートする';
$string['addnewportfolio'] = '新しいポートフォリオを追加する';
$string['addtoportfolio'] = 'ポートフォリオにエクスポートする';
$string['alreadyalt'] = 'すでにエクスポートしています - この転送を解決するにはここをクリックしてください。';
$string['alreadyexporting'] = 'このセッションにはすでにアクティブなポートフォリオエクスポートがあります。続ける前にあなたはこのエクスポートを完了するか、キャンセルする必要があります。続けてもよろしいですか? (Noを選択するとキャンセルされます)';
$string['availableformats'] = '利用可能なエクスポートフォーマット';
$string['callbackclassinvalid'] = '指定されたコールバッククラスが無効またはportfolio_caller配下にありません。';
$string['callercouldnotpackage'] = 'あなたのエクスポートするデータをパッケージできませんでした: オリジナルエラーは次のとおりです - {$a}';
$string['cannotsetvisible'] = 'このインスタンスを表示できません - 設定が正しくないため、プラグインが完全に無効にされています。';
$string['commonportfoliosettings'] = 'ポートフォリオ共通設定';
$string['commonsettingsdesc'] = '<p>「中程度」または「高程度」の転送時間を必要だと見なされる状態に対して、ユーザが転送完了を待つことができるかどうか設定します。</p><p>「中程度」の閾値に達するまでユーザへの問いかけなしに処理が実行されます。また、「中程度」および「高程度」の転送ではユーザに対してオプションが提示されますが、時間を要することが警告されます。</p><p>さらに、いくつかのポートフォリオプラグインではこのオプションを完全に無視してすべての転送を強制的にキューに入れる場合があります。</p>';
$string['configexport'] = 'エクスポートデータを設定する';
$string['configplugin'] = 'ポートフォリオプラグインを設定する';
$string['configure'] = '設定';
$string['confirmcancel'] = '本当にこのエクスポートをキャンセルしてもよろしいですか?';
$string['confirmexport'] = 'このエクスポートを確認してください。';
$string['confirmsummary'] = 'あなたのエクスポート概要';
$string['continuetoportfolio'] = '続けてあなたのポートフォリオに移動する';
$string['deleteportfolio'] = 'ポートフォリオインスタンスを削除する';
$string['destination'] = 'エクスポート先';
$string['disabled'] = '申し訳ございません、このサイトではポートフォリオエクスポートは有効にされていません。';
$string['disabledinstance'] = '無効';
$string['displayarea'] = 'エクスポートエリア';
$string['displayexpiry'] = '転送有効時間';
$string['displayinfo'] = 'エクスポート情報';
$string['dontwait'] = '待たない';
$string['enabled'] = 'ポートフォリオを有効にする';
$string['enableddesc'] = 'この設定を有効にした場合、ユーザはフォーラム投稿および課題提出等のコンテンツを外部ポートフォリオまたはHTMLページにエクスポートすることができます。';
$string['err_uniquename'] = 'ポートフォリオ名は (プラグインごとに) ユニークにしてください。';
$string['exportalreadyfinished'] = 'ポートフォリオのエクスポートを完了しました!';
$string['exportalreadyfinisheddesc'] = 'ポートフォリオのエクスポートを完了しました!';
$string['exportcomplete'] = 'ポートフォリオのエクスポートが完了しました!';
$string['exportedpreviously'] = '前のエクスポート';
$string['exportexceptionnoexporter'] = '活動セッションでportfolio_export_exceptionがスローされましたが、エクスポーターオブジェクトがありません。';
$string['exportexpired'] = 'ポートフォリオエクスポート有効期限切れ';
$string['exportexpireddesc'] = 'あなたはいくつかの情報を繰り返しエクスポートしようとしているか、空のエクスポートを開始しようとしています。適切にエクスポートするにはオリジナルのロケーションに戻って再度エクスポートを開始する必要があります。エクスポートの後、あなたがブラウザの戻るボタンを使用したか無効なURLをブックマークした場合、この現象が時々発生します。';
$string['exporting'] = 'ポートフォリオへのエクスポート';
$string['exportingcontentfrom'] = '{$a} からコンテンツをエクスポートする';
$string['exportingcontentto'] = 'コンテンツの {$a} へのエクスポート';
$string['exportqueued'] = '転送のため、ポートフォリオエクスポートが正常にキューに入れられました。';
$string['exportqueuedforced'] = '転送のため、ポートフォリオエクスポートが正常にキューに入れられました (リモートシステムがキュー型の転送を強制しました)。';
$string['failedtopackage'] = 'パッケージするファイルが見つかりませんでした。';
$string['failedtosendpackage'] = '選択されたポートフォリオシステムにあなたのデータを送信できませんでした: オリジナルエラーは次のとおりです - {$a}';
$string['filedenied'] = 'このファイルへのアクセスが拒否されました。';
$string['filenotfound'] = 'ファイルが見つかりませんでした。';
$string['fileoutputnotsupported'] = 'このフォーマットではファイル出力のリライトはサポートされていません。';
$string['format_document'] = 'ドキュメント';
$string['format_file'] = 'ファイル';
$string['format_image'] = 'イメージ';
$string['format_leap2a'] = 'LEAP2Aポートフォリオフォーマット';
$string['format_mbkp'] = 'Moodleバックアップフォーマット';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'プレゼンテーション';
$string['format_richhtml'] = 'HTML+添付';
$string['format_spreadsheet'] = 'スプレッドシート';
$string['format_text'] = 'プレインテキスト';
$string['format_video'] = 'ビデオ';
$string['highdbsizethreshold'] = '高程度のデータベース転送サイズ';
$string['highdbsizethresholddesc'] = 'この数を超えると高程度の転送時間が必要だと見なされるデータベースレコード数です。';
$string['highfilesizethreshold'] = '高程度のファイル転送サイズ';
$string['highfilesizethresholddesc'] = 'この閾値を超えると高程度の転送時間が必要だと見なされるファイルサイズです。';
$string['insanebody'] = 'こんにちは! あなたはこのメッセージを {$a->sitename} の管理者として受信しています。

設定が正しくないため、いくつかのポートフォリオプラグインが自動的に無効にされました。これは現在のところ、ユーザがこれらのポートフォリオにコンテンツをエクスポートできないことを意味します。

無効にされたポートフォリオインスタンスのリストは以下のとおりです:

{$a->textlist}

{$a->fixurl} にアクセスして、この問題を可能な限り早く修正してください。';
$string['insanebodyhtml'] = '<p>こんにちは! あなたはこのメッセージを {$a->sitename} の管理者として受信しています。</p>
<p>いくつかのポートフォリオプラグインが設定ミスのため自動的に無効にされました。これは現在ユーザがこれらのポートフォリオにコンテンツをエクスポートできないことを意味します。</p>
<p>無効にされたポートフォリオプラグインの一覧は次のとおりです:</p>
{$a->htmllist}
<p>この問題を<a href="{$a->fixurl}">ポートフォリオ設定ページ</a>にアクセスして可能な限り早く修正してください。</p>';
$string['insanebodysmall'] = 'こんにちは! あなたはこのメッセージを {$a->sitename} の管理者として受信しています。いくつかのポートフォリオプラグインが設定ミスのため自動的に無効にされました。これは現在ユーザがこれらのポートフォリオにコンテンツをエクスポートできないことを意味します。{$a->fixurl} にアクセスしてこの問題を可能な限り早く修正してください。';
$string['insanesubject'] = 'いくつかのポートフォリオインスタンスが自動的に無効にされました。';
$string['instancedeleted'] = 'ポートフォリオが正常に削除されました。';
$string['instanceismisconfigured'] = 'ポートフォリオインスタンスの設定が正しくないため、スキップしています。エラー内容は次のとおりです: {$a}';
$string['instancenotdelete'] = 'ポートフォリオの削除に失敗しました。';
$string['instancenotsaved'] = 'ポートフォリオの保存に失敗しました。';
$string['instancesaved'] = 'ポートフォリオが正常に保存されました。';
$string['intro'] = 'あなたが作成した課題提出、フォーラム投稿およびブログエントリのようなコンテンツをポートフォリオにエクスポートまたはダウンロードすることができます。<br />
コンテンツをエクスポートするオプションとして一覧表示されないようあなたが使用したくないポートフォリオを非表示にすることができます。';
$string['invalidaddformat'] = '無効な追加フォーマットが「portfolio_add_button」に渡されました。({$a}) には「PORTFOLIO_ADD_XXX」の形式を使用してください。';
$string['invalidbuttonproperty'] = 'portfolio_buttonのプロパティ ({$a}) が見つかりませんでした。';
$string['invalidconfigproperty'] = '設定プロパティ ({$a->property} - {$a->class}) が見つかりませんでした。';
$string['invalidexportproperty'] = 'エクスポート設定プロパティ ({$a->property} - {$a->class}) が見つかりませんでした。';
$string['invalidfileareaargs'] = '無効なファイルエリア引数が「set_file_and_format_data」に渡されました - 「contextid」「filearea」「itemid」を含む必要があります。';
$string['invalidformat'] = '無効なフォーマットでエクスポートされています: {$a}';
$string['invalidinstance'] = 'ポートフォリオインスタンスが見つかりませんでした。';
$string['invalidpreparepackagefile'] = 'prepare_package_fileに対する無効なコールです - 単一または複数ファイルをセットする必要があります。';
$string['invalidproperty'] = 'プロパティ ({$a->property} - {$a->class}) が見つかりませんでした。';
$string['invalidsha1file'] = 'get_sha1_fileに対する無効なコールです - 単一または複数ファイルをセットする必要があります。';
$string['invalidtempid'] = '無効なエクスポートIDです。恐らく有効期限が切れています。';
$string['invaliduserproperty'] = 'ユーザ設定プロパティ ({$a->property} - {$a->class}) が見つかりませんでした。';
$string['leap2a_emptyselection'] = '必須値が選択されていません。';
$string['leap2a_entryalreadyexists'] = 'あなたはこのフィード内にすでに存在するID ({$a}) のLeap2Aエントリの追加を試みました。';
$string['leap2a_feedtitle'] = 'Moodleからの {$a} に対するLeap2Aエクスポート';
$string['leap2a_filecontent'] = 'ファイルサブクラスを使用せずに、Leap2Aエントリのコンテンツをファイルに追加しようとしました。';
$string['leap2a_invalidentryfield'] = 'あなたは存在しないエントリフィールド ({$a}) を設定しようとしたか、直接設定する権限がありません。';
$string['leap2a_invalidentryid'] = 'あなたはエントリに存在しないIDによるアクセスを試みました ({$a})。';
$string['leap2a_missingfield'] = '必須Leap2Aエントリフィールド {$a} がありません。';
$string['leap2a_nonexistantlink'] = 'Leap2Aエントリ ({$a->from}) が存在しないエントリ ({$a->to}) にrel {$a->rel} を使用してリンクを試みました。';
$string['leap2a_overwritingselection'] = 'エントリ ({$a}) のオリジナルタイプをmake_selection内の選択に上書きする';
$string['leap2a_selflink'] = 'Leap2Aエントリ ({$a->id}) がrel {$a->rel} を使用して自分へのリンクを試みました。';
$string['logs'] = '転送ログ';
$string['logsummary'] = '前回の転送成功';
$string['manageportfolios'] = 'ポートフォリオを管理する';
$string['manageyourportfolios'] = 'あなたのポートフォリオを管理する';
$string['mimecheckfail'] = 'ポートフォリオプラグイン {$a->plugin} はMIMEタイプ {$a->mimetype} をサポートしていません。';
$string['missingcallbackarg'] = 'クラス {$a->class} のコールバック変数 {$a->arg} がありません。';
$string['moderatedbsizethreshold'] = '中程度のデータベース転送サイズ';
$string['moderatedbsizethresholddesc'] = 'この数を超えると中程度の転送時間が必要だと見なされるデータベースレコード数です。';
$string['moderatefilesizethreshold'] = '中程度のファイル転送サイズ';
$string['moderatefilesizethresholddesc'] = 'この閾値を超えると中程度の転送時間が必要だと見なされるファイルサイズです。';
$string['multipleinstancesdisallowed'] = '複数インスタンスが許可されていないプラグイン ({$a}) に別のインスタンスの作成を試みました。';
$string['mustsetcallbackoptions'] = 'あなたはportfolio_add_buttonコンストラクタまたはset_callback_optionsメソッドの使用に関するコールバックオプションを設定する必要があります。';
$string['noavailableplugins'] = '申し訳ございません、あなたがエクスポートできるポートフォリオはありません。';
$string['nocallbackclass'] = '使用するコールバッククラス ({$a}) を見つけることができませんでした。';
$string['nocallbackcomponent'] = '{$a} で指定されたコンポーネントが見つかりませんでした。';
$string['nocallbackfile'] = 'あなたがエクスポートを試みているモジュールが壊れているようです - 必要なポートフォリオファイルを見つけることができませんでした。';
$string['noclassbeforeformats'] = 'portfolio_buttonでset_formatsをコールする前、あなたはコールバッククラスを設定する必要があります。';
$string['nocommonformats'] = '利用可能なすべてのポートフォリオプラグインおよび呼び出し元ロケーション {$a->location} (サポートフォーマット: {$a->formats}) 間に共通フォーマットがありません。';
$string['noinstanceyet'] = 'まだ選択されていません。';
$string['nologs'] = '表示するログはありません!';
$string['nomultipleexports'] = '申し訳ございません、送信先ポートフォリオ ({$a->plugin}) は複数エクスポートの同時送信をサポートしていません。<a href="{$a->link}">最初に現在のエクスポートを完了</a>した後、再度お試しください。';
$string['nonprimative'] = 'portfolio_add_buttonのコールバック変数として初期値なしの値が通過しました。処理を停止しました。キーは {$a->key} 、値は {$a->value} です。';
$string['nopermissions'] = '申し訳ございません、あなたにはこのエリアからファイルをエクスポートするために必要なパーミッションがありません。';
$string['notexportable'] = '申し訳ございません、あなたがエクスポートを試みているコンテンツタイプはエクスポートできません。';
$string['notimplemented'] = '申し訳ございません、あなたはまだ実装されていないフォーマット ({$a}) でコンテンツのエクスポートを試みています。';
$string['notyetselected'] = '未選択';
$string['notyours'] = 'あなたは自分に属していないポートフォリオエクスポートの再開を試みています!';
$string['nouploaddirectory'] = 'あなたのデータをまとめるための一時ディレクトリを作成できませんでした。';
$string['off'] = '有効 - 非表示';
$string['on'] = '有効 - 表示';
$string['plugin'] = 'ポートフォリオプラグイン';
$string['plugincouldnotpackage'] = 'あなたのエクスポートするデータをまとめることができませんでした: オリジナルエラーは次のとおりです - {$a}';
$string['pluginismisconfigured'] = 'ポートフォリオプラグインの設定が正しくありません。エラーは次のとおりです - {$a}';
$string['portfolio'] = 'ポートフォリオ';
$string['portfolios'] = 'ポートフォリオ';
$string['privacy:metadata'] = 'ポートフォリオサブシステムはプラグインから様々なポートフォリオプラグインへのリクエストを渡すためのチャネルとして動作します。';
$string['privacy:metadata:instance'] = 'ポートフォリオのIDです。';
$string['privacy:metadata:instancesummary'] = 'ポートフォリオのインスタンスおよびプリファレンスを保存します。';
$string['privacy:metadata:name'] = 'プリファレンス名です。';
$string['privacy:metadata:portfolio_log'] = 'ポートフォリオ転送のログです (後で重複を確認するため使用されます)。';
$string['privacy:metadata:portfolio_log:caller_class'] = '転送を作成するため使用されるクラス名です。';
$string['privacy:metadata:portfolio_log:caller_component'] = 'エクスポートに関与するコンポーネント名です。';
$string['privacy:metadata:portfolio_log:time'] = '転送時間です (キューに入れられた転送の場合、これはユーザが開始した時間ではなく、実際に転送が実行された時間です)。';
$string['privacy:metadata:portfolio_log:userid'] = 'コンテンツをエクスポートしたユーザのIDです。';
$string['privacy:metadata:portfolio_tempdata'] = 'ポートフォリオエクスポートの一時データを保存します。';
$string['privacy:metadata:portfolio_tempdata:data'] = 'データをエクスポートします。';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'このレコードの有効期限切れの日時です。';
$string['privacy:metadata:portfolio_tempdata:instance'] = '使用されるポートフォリオプラグインインスタンスです。';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'エクスポートを実施するユーザです。';
$string['privacy:metadata:userid'] = 'ユーザIDです。';
$string['privacy:metadata:value'] = 'プリファレンスの値です。';
$string['privacy:path'] = 'ポートフォリオインスタンスです。';
$string['queuesummary'] = '現在キューに入れられている転送';
$string['returntowhereyouwere'] = '戻る';
$string['save'] = '保存';
$string['selectedformat'] = '選択されたエクスポートフォーマット';
$string['selectedwait'] = '待機の選択?';
$string['selectplugin'] = 'エクスポート先を選択してください。';
$string['showhide'] = '表示/非表示';
$string['singleinstancenomultiallowed'] = '単一のポートフォリオプラグインインスタンスのみ利用可能です。1セッションでの複数エクスポートはサポートされていません。このプラグインを使用したセッション内にすでにアクティブなエクスポートが存在します!';
$string['somepluginsdisabled'] = '設定が正しくないまたは他の要因により、すべてのプラグインインスタンスは無効にされました:';
$string['sure'] = '本当に「 {$a} 」を削除してもよろしいですか? 元に戻すことはできません。';
$string['thirdpartyexception'] = 'ポートフォリオのエクスポート中 ({$a})、サードパーティ例外がスローされました。取得および再スローされましたが、これは修正すべきです。';
$string['transfertime'] = '転送時間';
$string['unknownplugin'] = '不明 (管理者が削除した可能性があります)';
$string['wait'] = '待つ';
$string['wanttowait_high'] = 'この転送が完了するまで、待つことはお勧めできません。あなたが何をしているか理解している場合、待つこともできます。';
$string['wanttowait_moderate'] = 'この転送を待ちますか? 転送完了まで数分かかります。';
