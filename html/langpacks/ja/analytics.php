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
 * Strings for component 'analytics', language 'ja', version '4.4'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '分析可能 {$a->analysableid} は使用されていません: {$a->errors}';
$string['analysablenotvalidfortarget'] = '分析可能 {$a->analysableid} はこのターゲットに有効ではありません: {$a->result}';
$string['analysisinprogress'] = '前の実行により現在も分析中です。';
$string['analytics'] = 'アナリティクス';
$string['analyticsdisabled'] = 'アナリティクスは無効にされています。あなたは「サイト管理 > 拡張機能」で有効にできます。';
$string['analyticslogstore'] = 'アナリティクスに使用されるログストア';
$string['analyticslogstore_help'] = 'ユーザの活動を読むためアナリティクスAPIで使用されるログストアです。';
$string['analyticssettings'] = 'アナリティクス設定';
$string['analyticssiteinfo'] = 'サイト情報';
$string['calclifetime'] = 'アナリティクス計算保持期間';
$string['configlcalclifetime'] = 'ここではあなたが計算データを保持したい期間を指定します - これは予測を削除しませんが、予測の生成に使用されたデータを削除します。あなたのディスク利用を管理下に置くため、デフォルトオプションの使用が最良です。あなたが計算テーブルを他の目的で使用している場合、この値を増やした方が良いかもしれません。';
$string['defaultpredictionsprocessor'] = 'デフォルト予測プロセッサ';
$string['defaultpredictoroption'] = 'デフォルトプロセッサ ({$a})';
$string['defaulttimesplittingmethods'] = 'モデル評価のデフォルト分析間隔';
$string['defaulttimesplittingmethods_help'] = '分析間隔ではシステムが予測計算するタイミングおよび予測時に考慮される活動ログの割り当てを定義します。特定の分析間隔が指定されない限り、モデル評価処理はこれらの分析間隔を通して繰り返されます。';
$string['disabledmodel'] = '無効モデル';
$string['erroralreadypredict'] = '{$a} ファイルはすでに予測の生成に使用されています。';
$string['errorcannotreaddataset'] = 'データセットファイル {$a} を読めません。';
$string['errorcannotusetimesplitting'] = '提供された分析インターバルはこのモデルで使用できません。';
$string['errorcannotwritedataset'] = 'データセットファイル {$a} に書き込めません。';
$string['errorexportmodelresult'] = '機械学習モデルはエクスポートできません。';
$string['errorimport'] = '提供されたJSONファイルのインポート時にエラーが発生しました。';
$string['errorimportmissingclasses'] = '次のアナリティクスコンポーネントはこのサイトで利用できません:
{$a->missingclasses}';
$string['errorimportmissingcomponents'] = '提供されたモデルには次のプラグインがインストールされている必要があります: {$a} あなたのサイトにインストールされているバージョンがバージョンに合致する必要がないことに留意してください。多くの場合、同じまたは新しいバージョンのプラグインのインストールで十分です。';
$string['errorimportversionmismatches'] = '次のコンポーネントのバージョンがこのサイトにインストールされているバージョンと異なります: {$a} あなたはオプション「バージョンミスマッチを無視する」を使用してこれらの差異を無視できます。';
$string['errorinvalidcontexts'] = 'いくつかの選択済みコンテクストはこのターゲットでは使用できません。';
$string['errorinvalidindicator'] = '無効な {$a} 指標';
$string['errorinvalidtarget'] = '無効な {$a} ターゲット';
$string['errorinvalidtimesplitting'] = '無効な分析間隔です。あなたが省略されていないクラス名を追加したことを確認してください。';
$string['errornocontextrestrictions'] = '選択済みターゲットはコンテクスト制限をサポートしません。';
$string['errornoexportconfig'] = 'モデル設定のエクスポート時に問題が発生しました。';
$string['errornoexportconfigrequirements'] = '分析間隔の非静的モデルのみエクスポートできます。';
$string['errornoindicators'] = 'このモデルに指標はありません。';
$string['errornopredictresults'] = '予測プロセッサから戻された結果はありません。詳細はアウトプットディレクトリのコンテンツを確認してください。';
$string['errornoroles'] = '学生または教師ロールが定義されていません。アナリティクス設定ページで設定してください。';
$string['errornotarget'] = 'このモデルにはターゲットがありません。';
$string['errornotimesplittings'] = 'このモデルには分析間隔がありません。';
$string['errorpredictioncontextnotavailable'] = 'この予測コンテクストは利用できなくなりました。';
$string['errorpredictionformat'] = '正しくない予測計算フォーマット';
$string['errorpredictionnotfound'] = '予測が見つかりませんでした。';
$string['errorpredictionsprocessor'] = '予測プロセッサエラー: {$a}';
$string['errorpredictwrongformat'] = '予測プロセッサ戻り値をデコードできません: 「 {$a} 」';
$string['errorprocessornotready'] = '選択された予測プロセッサの準備ができていません: {$a}';
$string['errorsamplenotavailable'] = '予測サンプルを利用できなくなりました。';
$string['errorunexistingmodel'] = '存在しないモデル {$a}';
$string['errorunexistingtimesplitting'] = '選択された分析間隔は利用できません。';
$string['errorunknownaction'] = '不明な操作';
$string['eventinsightsviewed'] = '洞察を閲覧しました。';
$string['eventpredictionactionstarted'] = '予測処理が開始されました。';
$string['fixedack'] = '承認';
$string['incorrectlyflagged'] = '不正確なフラグ付け';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'システムがあなたに洞察を生成しました。';
$string['insightinfomessageplain'] = 'システムがあなたに洞察を生成しました: {$a}';
$string['insightmessagesubject'] = '「 {$a} 」の新しい洞察';
$string['invalidanalysablefortimesplitting'] = '{$a} 分析間隔を使用して分析できません。';
$string['invalidtimesplitting'] = 'トレーニングに使用するにはID {$a} のモデルに分析間隔が必要です。';
$string['levelinstitution'] = '教育レベル';
$string['levelinstitutionisced0'] = '幼児教育 (教育的達成のための初等教育未満)';
$string['levelinstitutionisced1'] = '初等教育';
$string['levelinstitutionisced2'] = '前期中等教育';
$string['levelinstitutionisced3'] = '後期中等教育';
$string['levelinstitutionisced4'] = '中等以降高等以前教育 (企業またはコミュニティ/NGO研修を含む)';
$string['levelinstitutionisced5'] = '短期高等教育 (企業またはコミュニティ/NGO研修を含む)';
$string['levelinstitutionisced6'] = '学士または同等レベル';
$string['levelinstitutionisced7'] = '修士または同等レベル';
$string['levelinstitutionisced8'] = '博士または同等レベル';
$string['modeinstruction'] = 'インストラクションモード';
$string['modeinstructionblendedhybrid'] = 'ブレンド型またはハイブリッド型';
$string['modeinstructionfacetoface'] = '対面';
$string['modeinstructionfullyonline'] = 'フルオンライン';
$string['modeloutputdir'] = 'モデルアウトプットディレクトリ';
$string['modeloutputdirwithdefaultinfo'] = '予測プロセッサがすべての評価情報を保存するディレクトリです。デバックおよび調査に有用です。空白の場合、デフォルトとして {$a} が使用されます。';
$string['modeltimelimit'] = 'モデルごとの分析制限時間';
$string['modeltimelimitinfo'] = 'この設定ではそれぞれのモデルがサイトコンテンツの分析に費やすことのできる時間を制限します。';
$string['neutral'] = '中立';
$string['neverdelete'] = '計算を削除しない';
$string['nocourses'] = '分析するコースはありません。';
$string['nodata'] = '分析するデータはありません。';
$string['noevaluationbasedassumptions'] = '仮定に基づくモデルは評価できません。';
$string['noinsights'] = '報告された洞察はありません。';
$string['noinsightsmodel'] = 'このモデルは洞察を生成しません。';
$string['nonewdata'] = '利用可能な新しいデータはありません。モデルは次の分析間隔後に分析されます。';
$string['nonewranges'] = 'まだ新しい予測はありません。モデルは次の分析間隔後に分析されます。';
$string['nopredictionsyet'] = 'まだ利用できる予測はありません。';
$string['noranges'] = 'まだ予測はありません。';
$string['notapplicable'] = '不適用';
$string['notrainingbasedassumptions'] = '仮定に基づくモデルにトレーニングは必要ではありません。';
$string['notuseful'] = '有益ではない';
$string['novaliddata'] = '利用可能な有効なデータはありません。';
$string['novalidsamples'] = '利用可能な有効なサンプルはありません。';
$string['onlycli'] = 'アナリティクス処理をコマンドラインのみで実行する';
$string['onlycliinfo'] = '評価モデル、機械学習アルゴリズムまたは予測の取得等のアナリティクス処理には時間を要します。cronタスクとして実行、またはコマンドラインにより強制的に実行できます。この設定を無効にした場合、ウェブインタフェース経由でアナリティクス処理を手動実行できます。';
$string['percentonline'] = 'オンラインの割合';
$string['percentonline_help'] = 'あなたの組織がブレンド型またはハイブリッド型のコースを提供する場合、学生の作業がMoodle上でオンラインで実施される割合を指定してください。0から100までの数字を使用してください。';
$string['predictionsprocessor'] = '予測プロセッサ';
$string['predictionsprocessor_help'] = '予測プロセッサは計算モデルの指標およびターゲットにより生成されたデータセットを処理する機械学習バックエンドです。それぞれのモデルは異なるプロセッサで使用できます。ここで指定したモデルはデフォルトとなります。';
$string['privacy:metadata:analytics:analyticsmodels'] = '分析モデル';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'モデルを修正したユーザ';
$string['privacy:metadata:analytics:analyticsmodelslog'] = '分析モデルで使用するログ';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'ログを修正したユーザ';
$string['privacy:metadata:analytics:indicatorcalc'] = '指標計算です。';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'コンテクストです。';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = '計算終了日時です。';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = '指標計算クラスです。';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'サンプルIDです。';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'サンプルの元になるテーブルです。';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = '計算開始日時です。';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'いつ予測されたか示します。';
$string['privacy:metadata:analytics:indicatorcalc:value'] = '計算値です。';
$string['privacy:metadata:analytics:predictionactions'] = '予測アクションです。';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'アクション名です。';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = '予測Dです。';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'いつ予測アクションが実行されたか示します。';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'アクションを実行したユーザです。';
$string['privacy:metadata:analytics:predictions'] = '予測です。';
$string['privacy:metadata:analytics:predictions:calculations'] = '指標計算です。';
$string['privacy:metadata:analytics:predictions:contextid'] = 'コンテクストです。';
$string['privacy:metadata:analytics:predictions:modelid'] = 'モデルIDです。';
$string['privacy:metadata:analytics:predictions:prediction'] = '予測です。';
$string['privacy:metadata:analytics:predictions:predictionscore'] = '予測スコアです。';
$string['privacy:metadata:analytics:predictions:rangeindex'] = '分析間隔のインデックスです。';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'サンプルIDです。';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'いつ予測されたか示します。';
$string['privacy:metadata:analytics:predictions:timeend'] = '計算終了日時です。';
$string['privacy:metadata:analytics:predictions:timestart'] = '計算開始日時です。';
$string['processingsitecontents'] = 'サイトコンテンツの処理';
$string['successfullyanalysed'] = '正常に分析しました。';
$string['timesplittingmethod'] = '分析間隔';
$string['timesplittingmethod_help'] = '分析間隔ではシステムが予測計算するタイミングおよび予測時に考慮される活動ログの割り当てを定義します。例えばコース継続時間を部分に分割して、それぞれの部分の最後に予測を生成できます。';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'インスティテューションタイプ';
$string['typeinstitutionacademic'] = '高等教育';
$string['typeinstitutionngo'] = '非政府組織 (NGO)';
$string['typeinstitutiontraining'] = '企業研修';
$string['useful'] = '有益';
$string['viewdetails'] = '詳細を表示する';
$string['viewinsight'] = '洞察を表示する';
$string['viewinsightdetails'] = '洞察詳細を表示する';
$string['viewprediction'] = '予測詳細を表示する';
$string['washelpful'] = 'これは参考になりましたか?';
