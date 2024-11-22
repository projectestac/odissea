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
 * Strings for component 'block_configurable_reports', language 'ja', version '4.1'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = '活動投稿';
$string['activityview'] = '活動閲覧';
$string['add'] = '追加';
$string['addreport'] = 'レポートを追加する';
$string['allowedsqlusers'] = 'SQLレポートユーザ';
$string['allowedsqlusersinfo'] = 'あなたが特定の管理ユーザのみにSQLレポートの管理を許可したい場合、カンマ区切りのユーザ名リストを追加してください。また、これらのユーザは「block/configurable_reports:managesqlreports」ケイパビリティを持つ必要があります。';
$string['anyone'] = '誰でも';
$string['anyone_summary'] = 'キャンパス内のどのユーザもこのレポートを閲覧できます。';
$string['availablemarks'] = '利用可能なマーク';
$string['average'] = '平均';
$string['badconditionexpr'] = '条件式が正しくありません。';
$string['badsize'] = 'サイズが正しくありません。単位は「%」または「px」にする必要があります。';
$string['badtablewidth'] = '幅が正しくありません。単位は「％」または絶対値にする必要があります。';
$string['bar'] = '棒グラフ';
$string['barsummary'] = '棒グラフ';
$string['blockname'] = '設定可能レポート';
$string['calcs'] = '計算';
$string['categories'] = 'カテゴリ';
$string['categoryfield'] = 'カテゴリフィールド';
$string['categoryfieldorder'] = 'カテゴリフィールド順';
$string['ccoursefield'] = 'コースフィールド条件式';
$string['cellalign'] = 'セル配列';
$string['cellsize'] = 'セルサイズ';
$string['cellwrap'] = 'セルラップ';
$string['checksql_execution'] = 'ブロック設定可能レポートSQL実行';
$string['checksql_execution_details'] = 'SQLコード実行許可により、ユーザが任意のコードを追加した場合にセキュリティ上の問題が発生する可能性があります。SQLコードの実行を禁止して、データの読み込み/検索のためのSQLクエリのみを許可するようにしてください。SQL実行は
config.phpファイルで$CFG->block_configurable_reports_enable_sql_executionを「0」に設定して無効にできます。';
$string['checksql_execution_ok'] = 'SQL実行は無効にされています。';
$string['checksql_execution_warning'] = 'あなたのサーバ内で任意のSQLコードが実行されるのを避けるため、SQL実行の無効化をお勧めします。';
$string['cohorts'] = 'コーホート';
$string['column'] = 'カラム';
$string['columnandcellproperties'] = 'カラムおよびセル属性';
$string['columncalculations'] = 'カラム計算';
$string['columns'] = 'カラム';
$string['comp_calcs'] = '計算';
$string['comp_calcs_help'] = '<p>ここであなたはカラム計算を追加できます。例) コースに登録されたユーザ数の平均</p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['comp_calculations'] = '計算';
$string['comp_calculations_help'] = '<p>ここであなたはカラム計算を追加できます。例) コースに登録されたユーザ数の平均</p>';
$string['comp_columns'] = 'カラム';
$string['comp_columns_help'] = '<p>ここであなたはレポートの種類に応じてレポートの様々なカラムを選択できます。</p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['comp_conditions'] = '条件式';
$string['comp_conditions_help'] = '<p>ここであなたは条件式を定義できます (例: このカテゴリのコースのみ、スペインからのユーザのみ等)。</p>

<p>複数の条件式を使用する場合、あなたは論理式を追加できます。</p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['comp_customsql'] = 'カスタムSQL';
$string['comp_customsql_help'] = '<p>動作するSQLクエリを追加してください。Moodleデータベース接頭辞 ($CFG->prefix) を使用せずに引用符なしで「prefix_」を使用してください。</p>
<p>例: SELECT * FROM prefix_course</p>

<p>あなたは次でSQLレポートを探せます: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc寄稿レポート</a></p>

<p>Moodleのテーブルおよび相互接続関係のレイアウトの更新: <a href="https://docs.moodle.org/dev/Database_Schema" target="_blank">データベーススキーマ</a></p>

<p>このブロックはTim Hunt氏のCustomSQL Queries Reportsをサポートしているため、どのようなクエリでも使用できます。</p>

<p>タイムトークンを含むレポートを使用する場合、忘れずに「時間フィルタ」を追加してください。 </p>

<p>フィルタの使用に関して次をご覧ください: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">SQLレポート作成チュートリアル</a></p>';
$string['comp_filters'] = 'フィルタ';
$string['comp_filters_help'] = '<p>ここであなたはどのフィルタを表示するか選択できます。</p>

<p>フィルタを使用した場合、ユーザはレポートからカラムを選択してレポート結果をフィルタリングできます。</p>

<p>あなたのレポートタイプがSQLの場合、フィルタの使用について次をご覧ください: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">SQLレポート作成チュートリアル</a></p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['comp_ordering'] = '並べ替え';
$string['comp_ordering_help'] = '<p>ここであなたはフィールドおよび方向でレポートの並べ替え順を選択できます。</p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['comp_permissions'] = 'パーミッション';
$string['comp_permissions_help'] = '<p>ここであなたはレポートを閲覧できる人を選択できます。</p>

<p>複数の条件を使用する場合、あなたは論理式を追加して最終評点を計算できます。</p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['comp_plot'] = 'プロット';
$string['comp_plot_help'] = '<p>ここであなたはレポートカラムおよび値に基づいてレポートにグラフを追加できます。</p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['comp_template'] = 'テンプレート';
$string['comp_template_help'] = '<p>あなたはテンプレートの作成でレポートレイアウトを変更できます。</p>

<p>ヘルプボタンまたは同じページに表示される情報を使用して、あなたがテンプレート作成時にヘッダ、フッタおよびそれぞれのレポートレコードで使用できる置換マークを参照してください。</p>

<p>参考資料: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">プラグインドキュメンテーション</a></p>';
$string['competencyframeworks'] = 'コンピテンシフレームワーク';
$string['competencytemplates'] = 'コンピテンシテンプレート';
$string['componenthelp'] = 'コンポーネントヘルプ';
$string['conditionexpr'] = '条件式';
$string['conditionexpr_conditions'] = '条件式';
$string['conditionexpr_conditions_help'] = '<p>あなたは論理式で条件を組み合わせできます。</p>

<p>次の演算子を使用して有効な論理式を入力してください: and, or</p>';
$string['conditionexpr_permissions'] = '条件式';
$string['conditionexpr_permissions_help'] = '<p>あなたは論理式で条件を組み合わせできます。</p>

<p>次の演算子を使用して有効な論理式を入力してください: and, or</p>';
$string['conditionexprhelp'] = '有効な条件式を入力してください。 例) (c1 and c2) または (c4 and c3)';
$string['conditions'] = '条件式';
$string['configurable_reports:addinstance'] = '新しい設定可能レポートブロックを追加する';
$string['configurable_reports:manageownreports'] = '自分のレポートを管理する';
$string['configurable_reports:managereports'] = 'レポートを管理する';
$string['configurable_reports:managesqlreports'] = 'SQLレポートを管理する';
$string['configurable_reports:myaddinstance'] = '新しい設定可能レポートブロックをマイホームページに追加する';
$string['configurable_reports:viewreports'] = 'レポートを表示する';
$string['confirmdeletereport'] = '本当にこのレポートを削除してもよろしいですか?';
$string['coursecategories'] = 'カテゴリコースフィルタ';
$string['coursecategory'] = 'カテゴリ内コース';
$string['coursechild'] = '次のコースの子コース';
$string['coursededicationtime'] = 'コース提供時間';
$string['coursefield'] = 'コースフィールド';
$string['coursefieldorder'] = 'コースフィールド順';
$string['coursemodules'] = 'コースモジュール';
$string['courseparent'] = '親コース';
$string['courses'] = 'コース';
$string['coursestats'] = 'コース統計';
$string['cron'] = '毎日自動実行';
$string['cron_help'] = 'このクエリを毎日 (夜) 実行するようスケジュールします。';
$string['crondescription'] = 'このクエリを毎日 (夜) 実行するようスケジュールします。';
$string['crrepository'] = 'レポートリポジトリ';
$string['crrepositoryinfo'] = '完全に機能するサンプルレポートのリモート共有リポジトリです (GitHubアカウント名+ スラッシュ (/)+ リポジトリ名）';
$string['currentreportcourse'] = '現在のレポートコース';
$string['currentreportcourse_summary'] = 'レポートが作成されたコースです。';
$string['currentuser'] = '現在のユーザ';
$string['currentuser_summary'] = 'レポートを閲覧しているユーザです。';
$string['currentusercourses'] = 'ユーザの現在登録中コース';
$string['currentusercourses_summary'] = '現在のユーザコース一覧です (表示されているコースのみ)。';
$string['currentuserfinalgrade'] = 'ユーザの現在コース内最終評点';
$string['currentuserfinalgrade_summary'] = 'このカラムは行コースの現在のユーザの最終評点を表示します。';
$string['cuserfield'] = 'ユーザフィールド条件式';
$string['custom'] = 'カスタム';
$string['customdateformat'] = 'カスタム日付フォーマット';
$string['customsql'] = 'カスタムSQL';
$string['datatables'] = 'DataTables JSライブラリを有効にする';
$string['datatables_emptytable'] = '表にデータはありません。';
$string['datatables_first'] = '最初';
$string['datatables_info'] = '_TOTAL_  エントリ中 _START_ ～ _END_ を表示中';
$string['datatables_infoempty'] = '0 エントリ中 0 ～ 0 を表示中';
$string['datatables_infofiltered'] = '(合計 _MAX_  エントリから抽出)';
$string['datatables_last'] = '最後';
$string['datatables_lengthmenu'] = '_MENU_ エントリを表示する';
$string['datatables_loadingrecords'] = '読込み中 ...';
$string['datatables_next'] = '次へ';
$string['datatables_previous'] = '前へ';
$string['datatables_processing'] = '処理中 ...';
$string['datatables_search'] = '検索:';
$string['datatables_sortascending'] = ': カラムを昇順に並べ替える';
$string['datatables_sortdescending'] = ': カラムを降順に並べ替える';
$string['datatables_zerorecords'] = '該当するレコードは見つかりませんでした。';
$string['datatablesinfo'] = 'DataTables JSライブラリ (カラムソート、固定ヘッダ、検索、ページング...)';
$string['date'] = '日付';
$string['dateformat'] = '日付フォーマット';
$string['dbhost'] = 'DBホスト';
$string['dbhostinfo'] = 'リモートデータベースホスト名です (私たちがSQLクエリを実行します)。';
$string['dbname'] = 'データベース名';
$string['dbnameinfo'] = 'リモートデータベース名です (私たちがSQLクエリを実行します)。';
$string['dbpass'] = 'DBパスワード';
$string['dbpassinfo'] = 'リモートデータベースパスワードです (上のユーザ名に対するパスワード)。';
$string['dbuser'] = 'DBユーザ名';
$string['dbuserinfo'] = 'リモートデータベースユーザ名です (上のDBのSELECT権限をを持つ必要あり)。';
$string['decimals'] = '小数点以下の桁数';
$string['description'] = '説明';
$string['description_help'] = 'フィルタページの概要に表示されるフィルタを説明するためのテキストです。';
$string['direction'] = '方向';
$string['disabled'] = '無効';
$string['displayglobalreports'] = 'グローバールレポートを表示する';
$string['displayreportslist'] = 'ブロック本体にレポート一覧を表示する';
$string['donotshowtime'] = 'データ情報を表示しない';
$string['download'] = 'ダウンロード';
$string['downloadreport'] = 'レポートをダウンロードする';
$string['email_message'] = 'メッセージ';
$string['email_send'] = '送信';
$string['email_subject'] = '件名';
$string['enabled'] = '有効';
$string['enableglobal'] = 'これはグローバルレポートです (どのコースからもアクセスできます)。';
$string['enablejsordering'] = 'JavaScript並べ替えを有効にします。';
$string['enablejspagination'] = 'JavaScriptページネーションを有効にする';
$string['endtime'] = '終了日';
$string['enrolledstudents'] = '登録済み学生';
$string['error_field'] = '使用できないフィールドです。';
$string['error_operator'] = '使用できない演算子です。';
$string['error_value_expected_integer'] = '期待される整数値';
$string['excludedeletedusers'] = '削除済みユーザを除く (SQLレポートのみ)';
$string['executeat'] = '実行予定時間';
$string['executeatinfo'] = 'Moodle CRONは選択した時間到来後にスケジュールされたSQLクエリを実行します (24時間に1回)。';
$string['export_csv'] = 'CSVフォーマットでエクスポートする';
$string['export_json'] = 'JSONフォーマットでエクスポートする';
$string['export_ods'] = 'ODSフォーマットでエクスポートする';
$string['export_xls'] = 'XLSフォーマットでエクスポートする';
$string['exportoptions'] = 'エクスポートオプション';
$string['exportreport'] = 'レポートをエクスポートする';
$string['fcoursefield'] = 'コースフィールドフィルタ';
$string['field'] = 'フィールド';
$string['filter'] = 'フィルタ';
$string['filter_all'] = 'すべて';
$string['filter_apply'] = '適用';
$string['filter_searchtext'] = 'テキスト検索';
$string['filter_searchtext_summary'] = 'フリーテキストフィルタ';
$string['filtercategories'] = 'フィルタカテゴリ';
$string['filtercategories_summary'] = 'カテゴリをフィルタするため';
$string['filtercohorts'] = 'コーホート';
$string['filtercohorts_summary'] = '次を使用する: %%FILTER_COHORTS:prefix_cohort.id%%';
$string['filtercompetencyframeworks'] = 'コンピテンシフレームワーク';
$string['filtercompetencyframeworks_summary'] = '次を使用する: %%FILTER_COMPETENCYFRAMEWORKS:prefix_competency_framework.id%%';
$string['filtercompetencytemplates'] = 'コンピテンシテンプレート';
$string['filtercompetencytemplates_summary'] = '次を使用する: %%FILTER_COMPETENCYTEMPLATES:prefix_competency_template.id%%';
$string['filtercoursecategories'] = 'カテゴリコースフィルタ';
$string['filtercoursecategories_summary'] = '任意の親カテゴリでコースをフィルタリングします。';
$string['filtercoursemodules'] = 'コースモジュール';
$string['filtercoursemodules_summary'] = 'コースモジュールをフィルタする';
$string['filtercourses'] = 'コース';
$string['filtercourses_summary'] = 'このフィルタではコース一覧を表示します。同時に選択できるのは1コースのみです。';
$string['filterenrolledstudents'] = 'コース登録済み学生';
$string['filterenrolledstudents_summary'] = '登録されたコースの学生からユーザを (IDで) フィルタします。';
$string['filterrole'] = 'ロール';
$string['filterrole_summary'] = 'システムロールでユーザをフィルタします (教師, 学生 ...)';
$string['filters'] = 'フィルタ';
$string['filtersemester'] = '学期 (ユダヤ歴)';
$string['filtersemester_list'] = 'סמסטר א,סמסטר ב,סמסטר ג,סמינריון';
$string['filtersemester_summary'] = 'מאפשר סינון לפני סמסטרים (בעברית, למשל: סמסטר א,סמסטר ב)';
$string['filterstartendtime_summary'] = '開始/終了日フィルタ';
$string['filtersubcategories'] = 'カテゴリ (サブカテゴリを含む)';
$string['filtersubcategories_summary'] = '次を使用する: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = '現在のコースユーザ';
$string['filteruser_summary'] = '現在のコースユーザからユーザ (id) をフィルタします。';
$string['filterusers'] = 'システムユーザ';
$string['filterusers_summary'] = 'システムユーザリストからユーザを (idで) フィルタします。';
$string['filteryearhebrew'] = '年 (ユダヤ歴)';
$string['filteryearhebrew_list'] = 'תשע,תשעא,תשעב,תשעג,תשעד,תשעה';
$string['filteryearhebrew_summary'] = 'フィルタはユダヤ歴の年 (תשעג,...) を使用しています。';
$string['filteryearnumeric'] = '年 (数値)';
$string['filteryearnumeric_summary'] = 'フィルタは数値の年 (2013,...) を使用しています。';
$string['filteryears'] = '年 (数値)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = '年でフィルタします (数値表現, 2014 ...)';
$string['finalgradeincurrentcourse'] = '現在のコースの最終評点';
$string['fixeddate'] = '固定日';
$string['footer'] = 'フッタ';
$string['forcemidnight'] = '深夜を強制する';
$string['fsearchuserfield'] = 'ユーザフィールド検索ボックス';
$string['fuserfield'] = 'ユーザフィールドフィルタ';
$string['generalcolorpalette'] = 'マップありパレット';
$string['generalcolorpalette_help'] = '円グラフで一般的に使用される16進数のカラーコードです。コードはあなたが円グラフで使用したい順に改行で区切ってください。';
$string['generalcolorpaletteheader'] = '一般カラーパレット';
$string['global'] = 'グローバルレポート';
$string['global_help'] = 'グローバルレポートはレポートURLに「&courseid=MY_COURSE_ID」を追加するだけでプラットフォーム上のどのコースからでもアクセスできます。';
$string['globalstatsshouldbeenabled'] = 'サイト統計を有効にする必要があります。「管理 -> サーバ -> 統計」にアクセスしてください。';
$string['groupseries'] = 'グループ連続';
$string['groupvalues'] = 'グループ同値 (合計)';
$string['head_color'] = 'グラフ背景色';
$string['head_data'] = 'グラフデータ';
$string['head_size'] = 'グラフサイズ';
$string['header'] = 'ヘッダ';
$string['height'] = '高さ';
$string['idnumber'] = 'IDナンバー';
$string['idnumber_help'] = '同じタイプのフィルタを区別するために使用されます。大文字小文字を区別します。使用例: %%FILTER_SEARCHTEXT_username:u.username:~%%';
$string['importfromrepository'] = 'リポジトリからレポートをインポートする';
$string['importreport'] = 'レポートをインポートする';
$string['includesubcats'] = 'サブカテゴリを含む';
$string['invalidcolorcode'] = '無効なカラーコードです。';
$string['jsordering'] = 'JavaScript並べ替え';
$string['jsordering_help'] = 'あなたはJavaScript並べ替えによりページをリロードすることなくレポートテーブルを並べ替えれます。';
$string['label'] = 'ラベル';
$string['label_field'] = 'ラベルフィールド';
$string['label_field_help'] = 'グラフで表現されるものの名称を提供するためのフィールドです。';
$string['label_help'] = 'レポートページに表示されるフィルタを説明するテキストです。';
$string['lastexecutiontime'] = '実行時間 = {$a} (秒)';
$string['legacylognotenabled'] = 'レガシログを有効にする必要があります。「サイト管理 / プラグイン / ロギング」に移動してレガシログを有効にした後、ログ設定の「レガシデータを記録する」を有効にしてください。';
$string['legendheader'] = 'マップなしパレット';
$string['legendheaderdesc'] = 'カラーコードを円グラフの凡例の特定のキーにマップします。';
$string['limitcategories'] = 'グラフのカテゴリを制限する';
$string['line'] = '折れ線グラフ';
$string['linesummary'] = '複数の系列データを含む折れ線グラフ';
$string['listofsqlreports'] = 'カーソルがエディタ内にある場合、F11キーを押してフルスクリーン編集に切り替わります。また、Escキーでフルスクリーン編集を終了できます。
<a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">SQL寄稿レポート一覧</a>';
$string['managereports'] = 'レポートを管理する';
$string['max'] = '最大';
$string['min'] = '最小';
$string['missingcolumn'] = 'カラムは必須です。';
$string['module'] = 'モジュール';
$string['newreport'] = '新しいレポート';
$string['nocalcsyet'] = 'まだ計算はありません。';
$string['nocolumnsyet'] = 'まだカラムはありません。';
$string['noconditionsyet'] = 'まだ条件式はありません。';
$string['noexplicitprefix'] = '明示的な接頭辞はありません。';
$string['nofiltersyet'] = 'まだフィルタはありません。';
$string['nofilteryet'] = 'まだフィルタはありません。';
$string['noorderingyet'] = 'まだ並べ替えはありません。';
$string['nopermissionsyet'] = 'まだパーミッションはありません。';
$string['noplotyet'] = 'まだプロットはありません。';
$string['norecordsfound'] = 'レコードは見つかりませんでした。';
$string['noreportsavailable'] = '利用可能なレポートはありません。';
$string['norowsreturned'] = '行が返されませんでした。';
$string['nosemicolon'] = 'セミコロンなし';
$string['notallowedwords'] = '禁止ワード';
$string['operator'] = '演算子';
$string['ordering'] = '並べ替え';
$string['others'] = 'その他';
$string['pagination'] = 'ページネーション';
$string['pagination_help'] = 'それぞれのページに表示するレコード数です。ゼロはページ分割なしを意味します。';
$string['parentcategory'] = '親カテゴリ';
$string['percent'] = 'パーセンテージ';
$string['permissions'] = 'パーミッション';
$string['pie'] = '円グラフ';
$string['pieareaname'] = '名称';
$string['pieareavalue'] = '値';
$string['piechart_add_colors'] = '色を追加する';
$string['piechart_label'] = 'キー - {$a}';
$string['piechart_label_color'] = '色 - {$a}';
$string['piesummary'] = '円グラフ';
$string['plot'] = 'プロット - グラフ';
$string['pluginname'] = '設定可能レポート';
$string['previousdays'] = '前の日';
$string['previousend'] = '前の終了';
$string['previousstart'] = '前の開始';
$string['printreport'] = 'レポートを印刷する';
$string['privacy:metadata:block_configurable_reports'] = '設定可能レポートブロックにはカスタマイズ可能なコースレポートが含まれます。';
$string['privacy:metadata:block_configurable_reports:components'] = 'レポート設定です。これにはクエリ、フィルタ等を含みます。';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'コースID';
$string['privacy:metadata:block_configurable_reports:global'] = 'すべてのコースからレポートにアクセスできるかどうかを指定します。';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'このレポートの前回実行時に要した時間 (ミリ秒) です。';
$string['privacy:metadata:block_configurable_reports:name'] = 'レポート名です。';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'レポートを作成したユーザのIDです。';
$string['privacy:metadata:block_configurable_reports:summary'] = 'レポート説明です。';
$string['privacy:metadata:block_configurable_reports:type'] = 'レポートタイプです。';
$string['privacy:metadata:block_configurable_reports:visible'] = 'レポートを表示するかどうかを示します。';
$string['puserfield'] = 'ユーザフィールド値';
$string['puserfield_summary'] = '選択されたフィールドに選択された値を持つユーザ';
$string['queryfailed'] = 'クエリ失敗 <code><pre>{$a}</pre></code>';
$string['querysql'] = 'SQLクエリ';
$string['remote'] = 'リモートDBで実行する';
$string['remote_help'] = 'リモートDBでこのクエリを実行しますか?';
$string['remotedescription'] = 'リモートDBでこのクエリを実行しますか?';
$string['remotequerysql'] = 'SQLクエリ';
$string['report'] = 'レポート';
$string['report_categories'] = 'カテゴリレポート';
$string['report_courses'] = 'コースレポート';
$string['report_sql'] = 'SQLレポート';
$string['report_timeline'] = 'タイムラインレポート';
$string['report_users'] = 'ユーザレポート';
$string['reportcategories'] = '1) リモートレポートカテゴリを選択する';
$string['reportcolumn'] = '他のレポートカラム';
$string['reportcreated'] = 'レポートが正常に作成されました。';
$string['reportlimit'] = 'レポート行数制限';
$string['reportlimitinfo'] = 'レポートテーブルに表示される行数を制限します (デフォルトは5000行です。ユーザがDBエンジンに過剰な負荷をかけないようにある程度の制限があった方が良いでしょう)。';
$string['reports'] = 'レポート';
$string['reportscapabilities'] = 'レポートケイパビリティ';
$string['reportscapabilities_summary'] = 'moodle/site:viewreportsケイパビリティを有効にしたユーザ';
$string['reportsincategory'] = '2) リストからレポートを選択する';
$string['reporttable'] = 'レポートテーブル';
$string['reporttable_help'] = '<p>これはレポートレコードを表示するテーブルの幅です。</p>

<p>あなたがテンプレートを使用する場合、このオプションは影響しません。</p>';
$string['reporttableui'] = 'レポートテーブルUI';
$string['reporttableuiinfo'] = 'レポートテーブル表示方法: シンプルでスクロール可能なHTMLテーブル、カラムソート付きjQueryまたはDataTables JSライブラリ (カラムソート、固定ヘッダ、検索、ページング...）';
$string['repository'] = 'レポートリポジトリ';
$string['repository_help'] = 'あなたは公開共有リポジトリからサンプルレポートをインポートできます。

リポジトリへの呼び出しには1日あたりの制限があることに留意してください。

リポジトリに接続できない場合、あなたは次からレポートを手動ダウンロードできます: <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a>。ダウンロード後、上に表示されている「レポートをインポートする」機能でレポートをインポートしてください。';
$string['role'] = 'ロール';
$string['roleincourse'] = '現在のレポートコースで選択されたロールを持つユーザ';
$string['roleusersn'] = 'ロールを持つユーザ数 ...';
$string['searchtext'] = 'テキスト検索';
$string['semester'] = '学期 (ユダヤ歴)';
$string['serieid'] = '連続カラム';
$string['sessionlimittime'] = 'クリック間隔を制限する (分)';
$string['sessionlimittime_help'] = 'クリック間隔の制限は2つのクリックが同じセッションの一部であるかどうかを定義します。';
$string['setcourseid'] = 'コースIDを設定する';
$string['sharedsqlrepository'] = '共有SQLリポジトリ';
$string['sharedsqlrepositoryinfo'] = 'GitHubアカウント名+ スラッシュ (/) + リポジトリ名';
$string['sqlsecurity'] = 'SQLセキュリティ';
$string['sqlsecurityinfo'] = 'データを挿入するステートメントを含むSQLクエリの実行を無効にします。';
$string['sqlsyntaxhighlight'] = 'SQL構文を強調表示する';
$string['sqlsyntaxhighlightinfo'] = 'コードエディタでSQL構文を強調表示します (CodeMirror JSライブラリ)。';
$string['startendtime'] = '開始/終了日フィルタ';
$string['starttime'] = '開始日';
$string['stat'] = '統計';
$string['statsactiveenrolments'] = '有効登録者数 (先週)';
$string['statslogins'] = 'プラットフォームにログインする';
$string['statstotalenrolments'] = '合計登録者数';
$string['student'] = '学生';
$string['subcategories'] = 'カテゴリ (サブカテゴリを含む)';
$string['sum'] = '合計';
$string['tablealign'] = 'テーブル配置';
$string['tablecellpadding'] = 'テーブルのセルパディング';
$string['tablecellspacing'] = 'テーブルのセル間隔';
$string['tableclass'] = 'テーブルクラス';
$string['tablewidth'] = 'テーブル幅';
$string['template'] = 'テンプレート';
$string['template_marks'] = 'テンプレートマーク';
$string['template_marks_help'] = '<p>あなたは以下の置換マークのどれでも使用できます:</p>

<ul>
<li>##reportname## - レポート名を含むため</li>
<li>##reportsummary## - レポート概要を含むため</li>
<li>##graphs## - グラフを含むため</li>
<li>##exportoptions## - エクスポートオプションを含むため</li>
<li>##calculationstable## - 計算テーブルを含むため</li>
<li>##pagination## - ページネーションを含むため</li>
</ul>';
$string['templaterecord'] = 'レコードテンプレート';
$string['timeinterval'] = '時間間隔';
$string['timeline'] = 'タイムライン';
$string['timemode'] = '時間モード';
$string['totalrecords'] = '合計レコード数 = {$a->totalrecords}';
$string['type'] = 'レポートタイプ';
$string['typeofreport'] = 'レポートタイプ';
$string['typeofreport_help'] = '作成するレポートのタイプを選択してください。セキュリティのため、SQLレポートには追加のケイパビリティが必要です。';
$string['user'] = 'コースユーザ (id)';
$string['usercompletion'] = 'ユーザコース完了ステータス';
$string['usercompletionsummary'] = 'コース完了ステータス';
$string['userfield'] = 'ユーザプロファイルフィールド';
$string['userfieldorder'] = 'ユーザフィールド並べ替え順';
$string['usermodactions'] = 'ユーザモジュール操作';
$string['usermodoutline'] = 'ユーザモジュール概要統計';
$string['users'] = 'システムユーザ (id)';
$string['usersincohorts'] = '複数のコホートに属するユーザ';
$string['usersincohorts_summary'] = '選択されたコホートのメンバであるユーザのみ';
$string['usersincoursereport'] = '現在のレポートコースのすべてのユーザ';
$string['usersincoursereport_summary'] = '現在のレポートコースのすべてのユーザ';
$string['usersincurrentcourse'] = '現在のレポートコースのユーザ';
$string['usersincurrentcourse_summary'] = 'レポートコースで選択されたロールを持つユーザ';
$string['userstats'] = 'ユーザ統計';
$string['value'] = '値';
$string['value_fields'] = '値フィールド';
$string['value_fields_help'] = 'グラフに表示するフィールドです。Ctrl+クリック (MacではCmd+クリック) で複数選択できます。
あなたがラベルフィールドまたは数値以外のフィールドを選択した場合、無視されます。';
$string['viewreport'] = 'レポートを表示する';
$string['width'] = '幅';
$string['xandynotequal'] = 'XおよびY軸は異なる必要があります。';
$string['xaxis'] = 'X軸';
$string['yaxis'] = 'Y軸';
$string['yearhebrew'] = '年 (ユダヤ歴)';
$string['yearnumeric'] = '年 (数値)';
$string['years'] = '年 (数値)';
$string['youmustselectarole'] = '少なくとも1つのロールが必要です。';
