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
 * Strings for component 'tool_analytics', language 'ja', version '4.5'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = '精度';
$string['actionexecutedgroupedusefulness'] = 'グループアクション';
$string['actions'] = 'アクション';
$string['actionsexecutedbyusers'] = 'ユーザ実行アクション';
$string['actionsexecutedbyusersfor'] = '「 {$a} 」モデルのためにユーザが実行したアクション';
$string['allpredictions'] = 'すべての予測';
$string['alltimesplittingmethods'] = 'すべての分析間隔';
$string['analysingsitedata'] = 'サイト分析';
$string['analysis'] = '分析';
$string['analyticmodels'] = '分析モデル';
$string['bettercli'] = 'モデル評価および予測生成には多大な負荷が発生する可能性があります。これらの操作のコマンドラインによる実行をお勧めします。';
$string['cantguessenddate'] = '終了日を推測できません。';
$string['cantguessstartdate'] = '開始日を推測できません。';
$string['classdoesnotexist'] = 'クラス {$a} は存在しません。';
$string['clearmodelpredictions'] = '本当にすべての「 {$a} 」予測を削除してもよろしいですか?';
$string['clearpredictions'] = '予測を削除する';
$string['clienablemodel'] = 'あなたは分析間隔のIDを選択してモデルを有効にすることはできません。あなたが後でウェブインタフェースにより有効にできることにも留意してください  (「なし」により終了)。';
$string['clievaluationandpredictions'] = 'スケジュールタスクが有効にされているモデルを繰り返して予測を取得します。ウェブインタフェースによるモデル評価は無効にされます。<a href="{$a}">onlycli</a>アナリティクス設定を無効にすることにより、あなたはこれらの処理をウェブインタフェース経由で手動実行できるようにすることができます。';
$string['clievaluationandpredictionsnoadmin'] = 'スケジュールタスクでは有効にされたモデルにより繰り返し予測を取得します。ウェブインタフェースによるモデル評価は無効にされます。これはサイト管理者により有効にすることができます。';
$string['component'] = 'コンポーネント';
$string['componentcore'] = 'コア';
$string['componentselect'] = 'コンポーネント「 {$a} 」により提供されたモデルすべてを選択する';
$string['componentselectnone'] = 'すべての選択を解除する';
$string['contexts'] = 'コンテクスト';
$string['contexts_help'] = 'モデルはこの一連のコンテクストに制限されます。コンテクストが選択されない場合、コンテクスト制限なしが適用されます。';
$string['createmodel'] = 'モデルを作成する';
$string['currenttimesplitting'] = '現在の分析間隔';
$string['delete'] = '削除';
$string['deletemodelconfirmation'] = '本当に「 {$a} 」を削除してもよろしいですか? これらの変更は元に戻すことはできません。';
$string['disabled'] = '無効';
$string['editmodel'] = '「 {$a} 」モデルを編集する';
$string['edittrainedwarning'] = 'このモデルはすでに訓練されています。指標または分析間隔を変更することにより前回の予測は削除され新しい予測が生成される点に留意してください。';
$string['enabled'] = '有効';
$string['errorcantenablenotimesplitting'] = 'あなたはモデルを有効にする前に分析間隔を選択する必要があります。';
$string['errornoenabledandtrainedmodels'] = '予測するために有効化および訓練済みモデルはありません。';
$string['errornoenabledmodels'] = 'トレーニングするために有効にされたモデルはありません。';
$string['errornoexport'] = '訓練済みモデルのみエクスポートすることができます。';
$string['errornostaticevaluated'] = '仮定に基づくモデルを評価できません。どのように定義されたかにより常に100%正確です。';
$string['errornostaticlog'] = 'パフォーマンスログがないため、仮定に基づくモデルを評価できません。';
$string['erroronlycli'] = 'コマンドラインのみで実行が許可されています。';
$string['errortrainingdataexport'] = 'モデルトレーニングデータをエクスポートすることができませんでした。';
$string['evaluate'] = '評価';
$string['evaluatemodel'] = 'モデルを評価する';
$string['evaluationinbatches'] = 'サイトコンテンツはバッチ処理により計算および保存されます。評価処理はいつでも停止することができます。次回実行する場合、停止した箇所から継続されます。';
$string['evaluationmode'] = '評価モード';
$string['evaluationmode_help'] = '以下、2つの評価モデルがあります:

* 訓練済みモデル - サイトデータは訓練済みモデルの正確性を評価するためのテストデータとして使用されます。
* 設定 - サイトデータはモデル設定の正確性を訓練およびテストするため訓練用およびテスト用データに分割されます。

訓練済みモデルは訓練済みモデルがサイトにインポートされてサイトデータを使用して再訓練されていない場合のみ使用できます。';
$string['evaluationmodecolconfiguration'] = '設定';
$string['evaluationmodecoltrainedmodel'] = '訓練済みモデル';
$string['evaluationmodeconfiguration'] = 'モデル設定を評価する';
$string['evaluationmodeinfo'] = 'このモデルはサイトにインポートされました。あなたはサイトデータを使用してモデルのパフォーマンスを評価するか、モデル設定のパフォーマンスを評価することができます。';
$string['evaluationmodetrainedmodel'] = '訓練済みモデルを評価する';
$string['executescheduledanalysis'] = 'スケジュール分析を実行する';
$string['export'] = 'エクスポート';
$string['exportincludeweights'] = '訓練済みモデルの加重を含む';
$string['exportmodel'] = '設定をエクスポートする';
$string['exporttrainingdata'] = 'トレーニングデータをエクスポートする';
$string['extrainfo'] = '情報';
$string['generalerror'] = '評価エラーです。ステータスコード {$a}';
$string['goodmodel'] = 'これは適切なモデルであり予測に使用することができます。予測の取得を開始するには有効にしてください。';
$string['ignoreversionmismatches'] = 'バージョンミスマッチを無視する';
$string['ignoreversionmismatchescheckbox'] = 'このサイトバージョンとオリジナルのサイトバージョンとの差異を無視します。';
$string['importedsuccessfully'] = 'モデルが正常にインポートされました。ｌ';
$string['importmodel'] = 'モデルをインポートする';
$string['indicators'] = '指標';
$string['indicators_help'] = 'あなたの考える指標はターゲットの正確な予測に繋がります。';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = '指標数: {$a}';
$string['info'] = '情報';
$string['insights'] = '洞察';
$string['insightsreport'] = '洞察レポート';
$string['invalidanalysables'] = '無効なサイトエレメント';
$string['invalidanalysablesinfo'] = 'このページではこの予測モデルに使用できないサイトの分析可能エレメントを一覧表示します。一覧表示されたエレメントは予測モデルのトレーニングにも予測モデルがエレメントの予測を取得できるようになるためのトレーニングにも使用することはきません。';
$string['invalidanalysablestable'] = '無効なサイト分析可能エレメントテーブルです。';
$string['invalidcurrenttimesplitting'] = '現在の分析インターバルはこのモデルのターゲットに対して有効ではありません。異なるインターバルを選択してください。';
$string['invalidindicatorsremoved'] = '新しいモデルが追加されました。選択されたターゲットと連動しない指標は自動的に削除されました。';
$string['invalidprediction'] = '無効な予測の取得です。';
$string['invalidtimesplitting'] = '選択した分析インターバルは選択したターゲットに対して有効ではありません。';
$string['invalidtimesplittinginmodels'] = 'いくつかのモデルで使用されている分析インターバルが有効ではありません。次のモデルに異なるインターバルを選択してください: {$a}';
$string['invalidtraining'] = '無効なモデルのトレーニングです。';
$string['loginfo'] = 'ログ補足情報';
$string['missingmoodleversion'] = 'インポートされたファイルはバージョンナンバを定義しません。';
$string['modelid'] = 'モデルID';
$string['modelinvalidanalysables'] = '無効な「 {$a} 」モデルの分析可能エレメントです。';
$string['modelname'] = 'モデル名';
$string['modelresults'] = '{$a} 結果';
$string['modeltimesplitting'] = '分析間隔';
$string['newmodel'] = '新しいモデル';
$string['nextpage'] = '次のページ';
$string['noactionsfound'] = '生成された洞察で実行されたユーザのアクションはありません。';
$string['nodatatoevaluate'] = 'モデルを評価するためのデータがありません。';
$string['nodatatopredict'] = '予測を取得できる新しいエレメントはありません。';
$string['nodatatotrain'] = 'トレーニングに使用できる新しいデータはありません。';
$string['noinvalidanalysables'] = 'このサイトはどのような無効分析可能エレメントも含みません。';
$string['notdefined'] = '未定義';
$string['pluginname'] = 'アナリティクスモデル';
$string['predictionprocessfinished'] = '予測処理が終了しました。';
$string['predictionresults'] = '予測結果';
$string['predictmodels'] = '予測モデル';
$string['predictorresultsin'] = '{$a} ディレクトリの予測ログ情報';
$string['previouspage'] = '前のページ';
$string['privacy:metadata'] = 'アナリティクスモデルプラグインはいかなる個人データも保存しません。';
$string['restoredefault'] = 'デフォルトモデルをリストアする';
$string['restoredefaultempty'] = 'リストアするモデルを選択してください。';
$string['restoredefaultinfo'] = 'デフォルトモデルが見つからないか、インストール後に変更されています。あなたは選択されたデフォルトモデルをリストアできます。';
$string['restoredefaultnone'] = 'コアおよびインストール済みプラグインにより提供されたすべてのデフォルトモデルはすでに作成されています。新しいモデルが見つからなかったため、リストアするものはありません。';
$string['restoredefaultsome'] = '{$a->count} の新しいモデルを正常に再作成しました。';
$string['restoredefaultsubmit'] = '選択したものをリストアする';
$string['sameenddate'] = '現在の終了日は適切です。';
$string['samestartdate'] = '現在の開始日は適切です。';
$string['scheduledanalysisresults'] = '{$a->name} 時間分割方法を使用した結果';
$string['scheduledanalysisresultscli'] = '{$a->name} (id: {$a->id}) 時間分割方法を使用した結果';
$string['selecttimesplittingforevaluation'] = 'あなたがモデル設定の評価に使用したい分析間隔を選択してください。';
$string['target'] = 'ターゲット';
$string['target_help'] = 'ターゲットはモデルが予測するものです。';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = '分析間隔が定義されていません。';
$string['timesplittingnotdefined_help'] = 'あなたはモデルを有効にする前に分析間隔を選択する必要があります。';
$string['trainandpredictmodel'] = 'トレーニングモデルおよび予測計算';
$string['trainingprocessfinished'] = 'トレーニング処理が終了しました。';
$string['trainingresults'] = 'トレーニング結果';
$string['trainmodels'] = 'トレーニングモデル';
$string['versionnotsame'] = 'インポートされたファイルは現在のバージョン ({$a->version}) とは異なるバージョン ({$a->importedversion}) からインポートされたものです。';
$string['viewlog'] = '評価ログ';
$string['weeksenddateautomaticallyset'] = '終了日は開始日およびセクション数に基づき自動的に設定されます。';
$string['weeksenddatedefault'] = '終了日はコース開始日に基づき自動的に計算されます。';
