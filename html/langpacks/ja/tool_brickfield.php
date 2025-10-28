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
 * Strings for component 'tool_brickfield', language 'ja', version '4.4'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'アクセシビリティ';
$string['accessibilitydisabled'] = 'このサイトではBrickfieldアクセシビリティツールキットが有効にされていません。有効にするにはあなたのサイト管理者にご連絡ください。';
$string['accessibilityreport'] = 'アクセシビリティツールキット';
$string['accessibilitytool'] = 'Brickfieldアクセシビリティツール';
$string['accessibilitytools'] = 'Brickfieldアクセシビリティツール';
$string['activate'] = 'アクティブ';
$string['activated'] = 'プラグインは有効化されて利用可能です。';
$string['activationform'] = 'Brickfield登録';
$string['activationheader'] = 'Brickfield有効化';
$string['activationinfo'] = '<p>このプラグインを使用するにはあなたはこのフォームでこのサイトの有効なキーを提供する必要があります。</p><p>あなたがまだキーを取得していない場合、これらのキーを取得するため<a href="{$a}" data-action="send_info" target="_blank">Brickfieldポータルで登録してください (新しいウィンドウが開きます) </a>。</p><p>有効化された後、あなたのキーはスケジュールcronタスクで認証されます。</p>';
$string['activityresults:pluginname'] = '活動ブレイクダウンアクセシビリティツールレポート';
$string['activityresults:toolname'] = '活動ブレイクダウン概要';
$string['activityresults:toolshortname'] = '活動ブレイクダウン';
$string['advanced:pluginname'] = '高度なアクセシビリティツールレポート';
$string['advanced:toolname'] = '高度な概要';
$string['advanced:toolshortname'] = '高度';
$string['allcourses'] = 'すべてのレビュー済みコース ({$a})';
$string['allcoursescat'] = 'カテゴリ {$a->catname} ({$a->count}) のすべてのレビュー済みコース';
$string['analysis:byrequest'] = 'リクエスト';
$string['analysis:disabled'] = '無効';
$string['analysistype'] = '分析リクエストを有効にする';
$string['analysistype_desc'] = 'コンテンツアクセシビリティ分析をリクエストできるようにする';
$string['analysistypedisabled'] = 'コンテンツ分析は無効にされています。';
$string['bannercontentone'] = 'エンタプライズアクセシビリティツールキットにはあなたの組織のコースアクセシビリティ向上に役立つ機能が満載されています。<a href="{$a}">Brickfield Education Labs</a>にご連絡くだされば、高度な機能の無料デモをご利用頂けます。';
$string['bannercontenttwo'] = 'ガイドラインを満たしていないコンテンツを発見、問題を修正、アクセス可能なファイル、エディタ、強化された機能を備えたあなたのMoodleコースコンテンツを将来にわたって保証することにより、効果的で包括的な教育および学習プラットフォームを構築します。';
$string['bannerheadingone'] = 'エンタプライズ版アクセシビリティツールキットにアップグレードする';
$string['batch'] = 'バッチ制限';
$string['brickfield'] = 'Brickfieldツールキット';
$string['brickfield:viewcoursetools'] = 'コースごとのレポートを表示する';
$string['brickfield:viewsystemtools'] = 'すべてのコースのレポートを表示する';
$string['bulkprocesscaches'] = 'バルクキャッシング処理';
$string['bulkprocesscourses'] = 'バルクバッチアクセシビリティチェック処理';
$string['buttonone'] = '無料デモを取得する';
$string['cachepending'] = '概要データがコンパイルされます。';
$string['checkdesc:alinksdontopennewwindow'] = 'リンクを新しいウィンドウで開く場合、事前にユーザに警告してください。';
$string['checkdesc:amustcontaintext'] = '認識のためテキストにはリンクを含む必要があります。';
$string['checkdesc:areadontopennewwindow'] = 'イメージマップで使用するエリアを新しいウィンドウで開く場合、事前にユーザに警告してください。';
$string['checkdesc:areahasaltvalue'] = 'イメージマップで使用されるエリアではイメージと同じくalt (代替) テキストは必須です。';
$string['checkdesc:asuspiciouslinktext'] = 'リンクテキストは説明的およびリンク先のコンテクストを示す必要があります。';
$string['checkdesc:basefontisnotused'] = 'basefont要素 (従来からフォーマットに使用) はアクセシブルではないため使用しないでください。';
$string['checkdesc:blinkisnotused'] = 'オンとオフを繰り返すblink要素はアクセシブルではないため使用しないでください。';
$string['checkdesc:boldisnotused'] = '太字 (b) 要素は使用しないでください。代わりに「strong」を使用してください。';
$string['checkdesc:contenttoolong'] = 'ページ全体のコンテンツの長さは500ワードを超えないようにしてください。';
$string['checkdesc:csstexthascontrast'] = '文字と背景色のコントラストが低すぎます。';
$string['checkdesc:embedhasassociatednoembed'] = '埋め込み要素 (マルチメディア埋め込み用) には対応する「noembed」要素を欠くべきではありません。';
$string['checkdesc:headerh3'] = 'H3ヘッダ (エディタのラージヘッダオプション) の後に続くヘッダでページの見出し階層を壊さないでください。';
$string['checkdesc:headershavetext'] = '認識しやすいようにヘッダにテキストを含む必要があります。';
$string['checkdesc:iisnotused'] = 'イタリック (i) 要素は使用せず代わりに「em」を使用してください。';
$string['checkdesc:imgaltisdifferent'] = 'イメージalt (代替) テキストはイメージのファイル名にしないでください。';
$string['checkdesc:imgaltistoolong'] = 'イメージalt (代替) テキストは画像を説明するのに十分簡潔であることをご確認ください。';
$string['checkdesc:imgaltnotemptyinanchor'] = 'イメージalt (代替) テキストは空にしないでください。イメージに別の場所へのリンクがある場合、特に注意が必要です。';
$string['checkdesc:imgaltnotplaceholder'] = 'イメージalt (代替) テキストは「image」のような単純なプレースホルダテキストにしないでください。';
$string['checkdesc:imghasalt'] = 'イメージalt (代替) テキストは意味のない純粋な装飾ではない限りイメージ要素に欠くべきではありません。';
$string['checkdesc:imgwithmaphasusemap'] = 'クリッカブルエリアを持つイメージマップでは「usemap」および「map」要素を一致させる必要があります。';
$string['checkdesc:legendtextnotempty'] = 'フィールドセット要素のキャプションに使用されるレジェンド要素にはテキストを含む必要があります。';
$string['checkdesc:marqueeisnotused'] = 'マーキー (自動スクロール) 要素はアクセスできないため使用しないでください。';
$string['checkdesc:noheadings'] = 'ヘッダーがない場合、コンテンツが構造化されないため読みづらくなります。';
$string['checkdesc:objectmusthaveembed'] = 'object要素 (外部リソースを埋め込むための要素) は対応する「embed」要素を欠くべきではありません。';
$string['checkdesc:objectmusthavetitle'] = 'object要素 (外部リソースを埋め込むための要素) は対応する「title」記述を欠くべきではありません。';
$string['checkdesc:objectmusthavevalidtitle'] = 'object要素 (外部リソースを埋め込むための要素) は対応する「タイトル」をテキストで表示する必要があります。';
$string['checkdesc:strikeisnotused'] = 'ストライク (文字に中央線を引く) 要素は使用せず代わりに「del」(削除済み) を使用してください。';
$string['checkdesc:tabledatashouldhaveth'] = '理想的にはテーブルにヘッダーがないといけません。';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'テーブル概要とキャプションは同一であってはいけません。';
$string['checkdesc:tabletdshouldnotmerge'] = '理想的にはテーブルにマージされたセルを持つべきではありません。';
$string['checkdesc:tablethshouldhavescope'] = 'テーブル行または列スコープ (行および列をそれぞれのセルにマッピングするため使用) を宣言する必要があります。';
$string['checkidvalidation'] = '無効なチェックIDのチェックタスク';
$string['checkscompleted'] = 'チェック完了: {$a}';
$string['checktype'] = 'グループをチェックする';
$string['checktype:form'] = 'フォーム';
$string['checktype:image'] = 'イメージ';
$string['checktype:layout'] = 'レイアウト';
$string['checktype:link'] = 'リンク';
$string['checktype:media'] = 'メディア';
$string['checktype:table'] = 'テーブル';
$string['checktype:text'] = 'テキスト';
$string['checktyperesults:pluginname'] = 'コンテンツタイプアクセシビリティツールレポート';
$string['checktyperesults:toolname'] = 'コンテンツタイプ概要';
$string['checktyperesults:toolshortname'] = 'コンテンツタイプ';
$string['cmpercent'] = '活動全体の割合';
$string['cmpercenterrors'] = 'エラー全体の割合';
$string['cmpercenttitle'] = '活動内エラーに関する全体的な割合の内訳';
$string['confirmationmessage'] = 'このコースは分析が予定されています。分析は最短で
遅くとも {$a} までには完了します。それ以降にご確認ください。';
$string['contactadmin'] = '登録を完了するにはあなたの管理者にご連絡ください。';
$string['contactus'] = 'お問い合わせ';
$string['contentfive'] = '古いHTMLタグを自動的に修正します。';
$string['contentfour'] = 'どの活動に最もアクセシビリティ問題があるか特定して取り組みの優先順位をつけます。';
$string['contentone'] = 'アクセシビリティに問題がないかコースコンテンツおよび評価を自動的に評価します。';
$string['contentsix'] = 'より良いコンテンツを作るためのヒントを教師に適宜提供します。';
$string['contentthree'] = 'オーディオ、ePub、電子点字等、アクセシブルなフォーマットで学生にコンテンツを提供します。';
$string['contenttwo'] = 'Webリンク、画像説明文、動画字幕等、不鮮明なテキストまたは欠落しているテキストを一括更新します。';
$string['contenttypeerrors'] = 'コースごとおよびコンテンツタイプごとの活動コンテンツテストの結果合計です。';
$string['contentyperesults'] = 'コースごとのコンテンツ領域の合計合格/不合格数です。';
$string['contextid'] = 'コンテクストID';
$string['core_course'] = 'コース';
$string['core_question'] = '問題バンク';
$string['count'] = 'カウント';
$string['country'] = '国';
$string['country_help'] = 'サイトの国';
$string['coursecount'] = 'コース数';
$string['deletehistoricaldata'] = '過去のチェック結果を削除する';
$string['dependency'] = '依存';
$string['emptycategory'] = 'カテゴリ {$a} にコースは見つかりませんでした。';
$string['emptytagcourses'] = 'タグが設定されているコースの検索結果はありません。';
$string['enableaccessibilitytools'] = 'アクセシビリティツールを有効にする';
$string['enableaccessibilitytools_desc'] = 'アクセシビリティツールキットはコースにおけるアクセシビリティ問題の特定に役立ちます。';
$string['error:nocoursespecified'] = '概要レポートには有効なコースIDが必要です。コース内のアクションメニューからアクセシビリティツールキットにアクセスしてください。';
$string['errorlink'] = '{$a} のエラーインスタンスを編集する';
$string['errors'] = 'エラー: {$a}';
$string['errors:pluginname'] = 'エラーリストアクセシビリティツール';
$string['errors:toolname'] = 'エラーリスト概要';
$string['errors:toolshortname'] = 'エラーリスト';
$string['eventanalysis_requested'] = 'コンテンツ分析がリクエストされました。';
$string['eventanalysis_requesteddesc'] = 'コース {$a} のコンテンツ分析がリクエストされました。';
$string['eventreport_downloaded'] = 'アクセシビリティ概要がダウンロードされました。';
$string['eventreport_downloadeddesc'] = 'コースID {$a} のアクセシビリティ概要がダウンロードされました。';
$string['eventreport_viewed'] = 'アクセシビリティレポートが閲覧されました。';
$string['eventreport_vieweddesc'] = 'アクセシビリティレポートはコースID {$a->course}、カテゴリID {$a->category}、タブ {$a->tab} で表示されました。';
$string['failed'] = '失敗';
$string['failedcount'] = '失敗: {$a}';
$string['footerheading'] = 'フッタセクション';
$string['fullcachedone'] = 'キャッシングの再実行を無効にする';
$string['hashcorrect'] = '入力されたコードは正常です。';
$string['hashincorrect'] = '入力されたコードが正しくありません。';
$string['headingfive'] = 'HTML修正';
$string['headingfour'] = '集中力';
$string['headingone'] = 'コンテンツ評価';
$string['headingsix'] = 'パフォーマンスサポート';
$string['headingthree'] = 'アクセス可能なファイルフォーマット';
$string['headingtwo'] = '修正';
$string['hideshow'] = '表示/非表示';
$string['icon:analytics-custom'] = 'アナリティクスアイコン';
$string['icon:file-edit-custom'] = 'ファイルアイコンを編集する';
$string['icon:hands-helping-custom'] = 'ヘルプハンドアイコン';
$string['icon:search-plus-custom'] = '検索アイコン';
$string['icon:tools-custom'] = 'ツールアイコン';
$string['icon:wand-magic-custom'] = '魔法の杖アイコン';
$string['inactive'] = 'このプラグインはアクティブではないため使用できません。有効な登録キーを入力して「有効にする」を押してください。';
$string['innercontextid'] = '内部コンテクストID';
$string['installed'] = 'プラグインがインストールされました。';
$string['installedcli'] = 'コマンドライン経由でプラグインがインストールされました。';
$string['installeddescription'] = 'プラグインがインストールされました。アクティベーションフォームにリダイレクトします。';
$string['invalidaccessibilitytool'] = '無効なアクセシビリティサブプラグインがリクエストされました。';
$string['invalidcategoryid'] = '無効なカテゴリです。あなたの入力をご確認ください。';
$string['invalidcourseid'] = '無効なコースです。あなたの入力をご確認ください。';
$string['invalidlinkphrases'] = 'click|click here|here|more|more here|info|info here|information|information here|read more|read more here|further information|further information here|further details|further details here';
$string['language'] = '言語';
$string['language_help'] = 'サイト言語';
$string['messageprovider:warningcheckid'] = '無効なチェックIDの警告';
$string['mobileservice'] = 'モバイルサービス有効 ({$a})';
$string['module'] = 'モジュール';
$string['modulename'] = '名称';
$string['moreinfo'] = '詳細情報';
$string['newwindowphrases'] = '新しいウィンドウ|新しいウィンドウ|新しいウィンドウ';
$string['noerrorsfound'] = 'あなたの検索パラメータに一般的なアクセシビリティエラーは見つかりませんでした。おめでとうございます!';
$string['norecords'] = 'あなたの検索パラメータに該当するレコードは見つかりませんでした。';
$string['notregistered'] = 'あなたのアクセシビリティツールキットの登録が必要です。';
$string['notvalidated'] = 'あなたのアクセシビリティツールキットは検証中も機能します。';
$string['numcourses'] = 'コース数 ({$a})';
$string['numfactivities'] = '活動数 ({$a})';
$string['numfiles'] = 'ファイル数 ({$a})';
$string['numinstances'] = 'インスタンス数';
$string['numusers'] = 'ユーザ数 ({$a})';
$string['pagedesc:checktype'] = '<p>実施されたさまざまなチェックの結果をまとめて分析するため、私たちはこれらのチェックを異なるコンテンツタイプに分類しています。したがって、イメージに関連するアクセシビリティチェックの結果はすべて「Image」コンテンツタイプグループ、レイアウトに関連するアクセシビリティチェックの結果はすべて「Layout」コンテンツタイプグループにというように分類しています。</p><p>活動はコース自体に関連する活動、リソース、コンテンツエリアのいずれかに含まれます。</p><p>コンテンツタイプチャートページではコンテンツタイプグループごとにエラーの内訳が表示されます: イメージ、レイアウト、リンク、メディア、テーブルおよびテキスト</P>';
$string['pagedesc:pertarget'] = '<p>アクティビティごとのチェック結果をまとめて分析するため、私たちはこれらのチェック結果を検出された異なる活動に分類しています。</p><p>活動は活動、リソース、またはコース自体に関連するその他のコンテンツ領域のいずれかとして含まれます。検出されたエラーの活動は合格とカウントされます。1つまたはそれ以上の検出されたエラーのある活動は不合格とカウントされます。そして、合格した活動および不合格の活動の比率が表示されます。</p><p>活動の内訳表ページでは課題、コース、ラベルなどの活動ごとに合格したインスタンスおよび失敗したインスタンスの合計の比率が表示されます。</p>';
$string['pagedesctitle:checktype'] = 'コンテンツタイプ説明';
$string['pagedesctitle:pertarget'] = '活動の内訳説明';
$string['passed'] = '合格';
$string['passedcount'] = '合格: {$a}';
$string['passrate'] = '合格率: {$a}%';
$string['pdf:filename'] = 'Brickfield_Summaryreport_CourseID-{$a}';
$string['percheckerrors'] = 'コースごとチェックごとの特定のテストおよびエラー数です。';
$string['perpage'] = 'ページごとに表示するアイテム';
$string['pluginname'] = 'アクセシビリティツールキット';
$string['printable:downloadpdf'] = 'PDFをダウンロードする';
$string['printable:pluginname'] = '概要レポートアクセシビリティツールレポート';
$string['printable:printreport'] = '印刷可能レポート';
$string['printable:toolname'] = '概要レポート';
$string['printable:toolshortname'] = '概要レポート';
$string['privacy:metadata'] = 'アクセシビリティチェックレポートプラグインはいかなる個人データも保存しません。';
$string['processanalysisrequests'] = 'コンテンツ分析リクエストを処理する';
$string['registernow'] = '今すぐご登録ください。';
$string['registration'] = '登録フォーム';
$string['registrationinfo'] = '<p>この登録作業により登録したMoodleサイトでBrickfieldアクセシビリティツールキット starter versionを使用ができます。</p><p>この使用は<a href="{$a}" target="_blank">Brickfield Education Labs利用規約 (新しいウィンドウが開きます)</a>に従うものであり、あなたは本製品の使用によりこれに同意するものとします。</p>';
$string['release'] = 'Moodleリリース ({$a})';
$string['remaining'] = '({$a} エラー存在中)';
$string['response:0'] = 'このURLはどこも指していません。';
$string['response:404'] = 'このURLページは見つかりませんでした。';
$string['schedule:blocknotscheduled'] = '<p>このコースにはまだ一般的なアクセシビリティの問題を見つけるための分析の予定はありません。</p>';
$string['schedule:notscheduled'] = '<p>このコースで一般的なアクセシビリティの問題を見つけるための分析がまだ実施されていません。</p><p>「分析のために送信する」ボタンをクリックすることによりコースセクションの説明、活動の説明、問題、ページ等、あなたに関連するすべてのコースHTMLコンテンツの分析がスケジュールされることを確認します。</p><p>この分析ではあなたのコースのHTMLコンテンツに対して複数の一般的なアクセシビリティチェック実施します。そして、その結果をアクセシビリティツールキットのレポートページに表示します。分析はスケジュールされたタスクによってバックグラウンドで処理されるため、完了までのスピードはタスクのタイミングおよびタスクの実行スケジュールに依存します。</p>';
$string['schedule:requestanalysis'] = '分析のために送信する';
$string['schedule:scheduled'] = 'このコースは分析を予定しています。';
$string['schedule:sitenotscheduled'] = '<p>グローバル (コースに依存しない) コンテンツでは共通のアクセシビリティ問題を見つけるための分析がまだスケジュールされていません。</p><p>「分析のために送信する」ボタンをクリックすることにより、あなたの関連するすべてのグローバル (コースに依存しない) コンテンツの分析がスケジュールされることを確認します。</p><p>この分析ではこのコンテンツに対して複数の一般的なアクセシビリティチェックが実施されます。そして、その結果がアクセシビリティツールキットのレポートページに表示されます。分析はスケジュールされたタスクによってバックグラウンドで処理されるため、完了までの速度はタスクのタイミングおよびタスクの実行スケジュールに依存します。</p>';
$string['schedule:sitescheduled'] = 'グローバル (コースに依存しない) コンテンツの分析が予定されています。';
$string['secretkey'] = 'APIキー';
$string['secretkey_help'] = 'このコードは登録後にメールで送信されます。';
$string['sendfollowinginfo'] = '<p>次の情報は全体の統計に寄与するためのみ定期的に送信されます。この情報は中央のリストには公開されません。</p> {$a}';
$string['settings'] = 'アクセシビリティツールキット設定';
$string['sitehash'] = '秘密鍵';
$string['sitehash_help'] = 'このコードは登録後にメールで送信されます。';
$string['taberrors'] = 'チェックエラー';
$string['targetavetitle'] = '活動あたりの平均エラー数';
$string['targetpercentage'] = '活動ごとのインスタンスの合格/不合格の割合';
$string['targetratio'] = '活動合格率';
$string['tblcheck'] = 'チェック';
$string['tblcheckexample'] = '例';
$string['tblcheckfailed'] = 'チェック失敗';
$string['tblchecksummary'] = '概要';
$string['tbledit'] = '編集';
$string['tblerrorcount'] = 'エラー';
$string['tblhtmlcode'] = '既存のHTMLコード';
$string['tblinstance'] = 'インスタンス';
$string['tblline'] = '行';
$string['tbloverallpercentage'] = '全体的なエラー %';
$string['tblpercentage'] = 'パーセンテージ';
$string['tblpreview'] = 'プレビュー';
$string['tbltarget'] = '活動';
$string['tblupdateto'] = 'アップデート予定';
$string['titleactivityresultsall'] = '活動ごとの結果: すべてのレビュー済みコース ({$a->count} courses)';
$string['titleactivityresultspartial'] = '活動ごとの結果: コース {$a->name}';
$string['titleall'] = 'エラー詳細: すべてのレビュー済みコース ({$a->count} コース)';
$string['titlechecktyperesultsall'] = 'コンテンツタイプごとの結果: すべてのレビュー済みコース ({$a->count} courses)';
$string['titlechecktyperesultspartial'] = 'コンテンツタイプごとの結果: コース {$a->name}';
$string['titleerrorsall'] = 'エラー詳細: すべてのレビュー済みコース ({$a->count} コース)';
$string['titleerrorscount'] = 'エラー詳細: (最初の {$a} 件のエラーを表示中)';
$string['titleerrorspartial'] = 'エラー詳細: コース {$a->name}';
$string['titlepartial'] = 'エラー詳細: コース {$a->name}';
$string['titleprintableall'] = 'コース {$a->name}';
$string['titleprintablepartial'] = 'コース {$a->name}';
$string['tools'] = 'レポート';
$string['toperrors'] = 'エラー上位';
$string['toptargets'] = '失敗活動';
$string['totalactivities'] = '合計活動数';
$string['totalactivitiescount'] = '合計活動数: {$a}';
$string['totalareas'] = '合計エリア数';
$string['totalerrors'] = '合計エラー数';
$string['totalgrouperrors'] = 'コンテンツタイプごとの合計 (総計) エラー数';
$string['updatesummarydata'] = 'サイト概要データを更新する';
$string['usersmobileregistered'] = 'モバイルデバイスを登録しているユーザ数 ({$a})';
$string['validationerror'] = '登録キーの検証に失敗しました。登録したサイトのURLおよびキーが正しいかご確認ください。';
$string['warningcheckidbody'] = 'Brickfieldのチェックに問題があります。有効ですがデータベースに登録されていません。調査してください。';
$string['warningcheckidsubject'] = 'BrickfieldツールキットチェックID警告';
