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
 * Strings for component 'tool_analytics', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = '精度';
$string['allpredictions'] = 'すべての予測';
$string['analysingsitedata'] = 'サイト分析';
$string['analyticmodels'] = '分析モデル';
$string['bettercli'] = 'モデル評価および予測生成には多大な負荷が発生する可能性があります。これらの操作のコマンドラインによる実行をお勧めします。';
$string['cantguessenddate'] = '終了日を推測できません。';
$string['cantguessstartdate'] = '開始日を推測できません。';
$string['clearmodelpredictions'] = '本当にすべての「 {$a} 」予測を削除してもよろしいですか?';
$string['clearpredictions'] = '予測を削除する';
$string['clienablemodel'] = 'あなたは時間分割方法のIDを選択してモデルを有効にすることはできません。あなたが後でウェブインターフェースにより有効にできることにも留意してください  (「なし」により終了)。';
$string['clievaluationandpredictions'] = 'スケジュールタスクが有効にされているモデルを繰り返して予測を取得します。ウェブインターフェースによるモデル評価は無効にされます。<a href="{$a}">onlycli</a>アナリティクス設定を無効にすることにより、あなたはこれらの処理をウェブインターフェース経由で手動実行できるようにすることができます。';
$string['clievaluationandpredictionsnoadmin'] = 'スケジュールタスクでは有効にされたモデルにより繰り返し予測を取得します。ウェブインターフェースによるモデル評価は無効にされます。これはサイト管理者によって有効にすることができます。';
$string['disabled'] = '無効';
$string['editmodel'] = '「 {$a} 」モデルを編集する';
$string['edittrainedwarning'] = 'このモデルはすでに訓練されています。指標または時間分割方法を変更することにより前回の予測は削除され新しい予測が生成される点に留意してください。';
$string['enabled'] = '有効';
$string['errorcantenablenotimesplitting'] = 'あなたはモデルを有効にする前に時間分割方法を選択する必要があります。';
$string['errornoenabledandtrainedmodels'] = '予測するために有効化および訓練済みモデルはありません。';
$string['errornoenabledmodels'] = 'トレーニングするために有効にされたモデルはありません。';
$string['errornoexport'] = '訓練済みモデルのみエクスポートすることができます。';
$string['errornostaticedit'] = '仮定に基づくモデルを編集できません。';
$string['errornostaticevaluated'] = '仮定に基づくモデルを評価できません。どのように定義されたかにより常に100%正確です。';
$string['errornostaticlog'] = 'パフォーマンスログがないため、仮定に基づくモデルを評価できません。';
$string['erroronlycli'] = 'コマンドラインのみで実行が許可されています。';
$string['errortrainingdataexport'] = 'モデルトレーニングデータをエクスポートすることができませんでした。';
$string['evaluate'] = '評価';
$string['evaluatemodel'] = 'モデルを評価する';
$string['evaluationinbatches'] = 'サイトコンテンツはバッチ処理により計算および保存されます。評価処理はいつでも停止することができます。次回実行する場合、停止した箇所から継続されます。';
$string['export'] = 'エクスポート';
$string['exporttrainingdata'] = 'トレーニングデータをエクスポートする';
$string['extrainfo'] = '情報';
$string['generalerror'] = '評価エラーです。ステータスコード {$a}';
$string['getpredictions'] = '予測を取得する';
$string['getpredictionsresults'] = '{$a->name} コース継続時間分割を使用した結果';
$string['getpredictionsresultscli'] = '{$a->name} (id: {$a->id}) コース継続時間分割を使用した結果';
$string['goodmodel'] = 'これは適切なモデルであり予測に使用することができます。予測の取得を開始するには有効にしてください。';
$string['indicators'] = '指標';
$string['info'] = '情報';
$string['insights'] = '洞察';
$string['invalidanalysables'] = '無効なサイトエレメント';
$string['invalidanalysablesinfo'] = 'このページではこの予測モデルに使用できないサイトの分析可能エレメントを一覧表示します。一覧表示されたエレメントは予測モデルのトレーニングにも予測モデルがエレメントの予測を取得できるようになるためのトレーニングにも使用することはきません。';
$string['invalidanalysablestable'] = '無効なサイト分析可能エレメントテーブルです。';
$string['invalidprediction'] = '無効な予測の取得です。';
$string['invalidtraining'] = '無効なモデルのトレーニングです。';
$string['loginfo'] = 'ログ補足情報';
$string['modelid'] = 'モデルID';
$string['modelinvalidanalysables'] = '無効な「 {$a} 」モデルの分析可能エレメントです。';
$string['modelresults'] = '{$a} 結果';
$string['modeltimesplitting'] = '時間分割';
$string['nextpage'] = '次のページ';
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
$string['privacy:metadata'] = 'アナリティクスモデルプラグインはどのような個人データも保存しません。';
$string['sameenddate'] = '現在の終了日は適切です。';
$string['samestartdate'] = '現在の開始日は適切です。';
$string['target'] = 'ターゲット';
$string['timesplittingnotdefined'] = '時間分割が定義されていません。';
$string['timesplittingnotdefined_help'] = 'あなたはモデルを有効にする前に時間分割方法を選択する必要があります。';
$string['trainandpredictmodel'] = 'トレーニングモデルおよび予測計算';
$string['trainingprocessfinished'] = 'トレーニング処理が終了しました。';
$string['trainingresults'] = 'トレーニング結果';
$string['trainmodels'] = 'トレーニングモデル';
$string['viewlog'] = 'ログ';
$string['weeksenddateautomaticallyset'] = '終了日は開始日およびセクション数に基づき自動的に設定されます。';
$string['weeksenddatedefault'] = '終了日はコース開始日に基づき自動的に計算されます。';
