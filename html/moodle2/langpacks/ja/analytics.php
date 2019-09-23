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
 * Strings for component 'analytics', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '分析可能 {$a->analysableid} は使用されていません: {$a->errors}';
$string['analysablenotvalidfortarget'] = '分析可能 {$a->analysableid} はこのターゲットに有効ではありません: {$a->result}';
$string['analysisinprogress'] = '前の実行により現在も分析中です。';
$string['analytics'] = 'アナリティクス';
$string['analyticslogstore'] = 'アナリティクスに使用されるログストア';
$string['analyticslogstore_help'] = 'ユーザの活動を読むためアナリティクスAPIで使用されるログストアです。';
$string['analyticssettings'] = 'アナリティクス設定';
$string['coursetoolong'] = 'コースが長すぎます。';
$string['defaultpredictionsprocessor'] = 'デフォルト予測プロセッサ';
$string['defaultpredictoroption'] = 'デフォルトプロセッサ ({$a})';
$string['disabledmodel'] = '無効モデル';
$string['enabledtimesplittings'] = '時間分割方法';
$string['erroralreadypredict'] = '{$a} ファイルはすでに予測に使用されています。';
$string['errorcannotreaddataset'] = 'データセットファイル {$a} を読むことができません。';
$string['errorcannotwritedataset'] = 'データセットファイル {$a} に書き込むことができません。';
$string['errorendbeforestart'] = '終了日 ({$a}) はコース開始日の前になります。';
$string['errorinvalidindicator'] = '無効な {$a} 指標';
$string['errorinvalidtimesplitting'] = '無効な時間分割です。あなたが省略されていないクラス名を追加したことを確認してください。';
$string['errornoindicators'] = 'このモデルには指標はありません。';
$string['errornopredictresults'] = '予測プロセッサから戻された結果はありません。詳細はアウトプットディレクトリのコンテンツを確認してください。';
$string['errornoroles'] = '学生または教師ロールが定義されていません。アナリティクス設定ページで設定してください。';
$string['errornotarget'] = 'このモデルにはターゲットがありません。';
$string['errornotimesplittings'] = 'このモデルには時間分割方法がありません。';
$string['errorpredictioncontextnotavailable'] = 'この予測コンテクストは利用できなくなりました。';
$string['errorpredictionformat'] = '正しくない予測計算フォーマット';
$string['errorpredictionnotfound'] = '予測が見つかりませんでした。';
$string['errorpredictionsprocessor'] = '予測プロセッサエラー: {$a}';
$string['errorpredictwrongformat'] = '予測プロセッサ戻り値をデコードできません: 「 {$a} 」';
$string['errorprocessornotready'] = '選択された予測プロセッサの準備ができていません: {$a}';
$string['errorsamplenotavailable'] = '予測サンプルを利用できなくなりました。';
$string['errorunexistingmodel'] = '存在しないモデル {$a}';
$string['errorunexistingtimesplitting'] = '選択された時間分割方法は利用できません。';
$string['errorunknownaction'] = '不明な操作';
$string['eventinsightsviewed'] = '洞察を閲覧しました。';
$string['eventpredictionactionstarted'] = '予測処理が開始されました。';
$string['fixedack'] = '承認済み';
$string['insightinfomessage'] = 'システムがあなたに洞察を生成しました: {$a}';
$string['insightinfomessagehtml'] = 'システムがあなたに洞察を生成しました: <a href="{$a}">{$a}</a>';
$string['insightmessagesubject'] = '「 {$a->contextname} 」の新しい洞察: {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = '{$a} 時間分割方法を使用して分析できません。';
$string['invalidtimesplitting'] = 'トレーニングに使用する前にID {$a} のモデルには時間分割方法が必要です。';
$string['modeloutputdir'] = 'モデルアウトプットディレクトリ';
$string['modeloutputdirinfo'] = '予測プロセッサがすべての評価情報を保存するディレクトリです。デバッグおよび調査に有用です。';
$string['modeltimelimit'] = 'モデルごとの分析制限時間';
$string['modeltimelimitinfo'] = 'この設定ではそれぞれのモデルがサイトコンテンツの分析に費やすことのできる時間を制限します。';
$string['nocourses'] = '分析するコースはありません。';
$string['nodata'] = '分析するデータはありません。';
$string['noevaluationbasedassumptions'] = '仮定に基づくモデルを評価することはできません。';
$string['noinsights'] = '報告された洞察はありません。';
$string['noinsightsmodel'] = 'このモデルは洞察を生成しません。';
$string['nonewdata'] = '利用可能な新しいデータはありません。';
$string['nonewranges'] = 'まだ新しい予測はありません。';
$string['nonewtimeranges'] = '新しい時間範囲がないため予測するものはありません。';
$string['nopredictionsyet'] = 'まだ利用できる予測はありません。';
$string['noranges'] = 'まだ予測はありません。';
$string['notrainingbasedassumptions'] = '仮定に基づくモデルにトレーニングは必要ではありません。';
$string['notuseful'] = '有益ではない';
$string['novaliddata'] = '利用可能な有効なデータはありません。';
$string['novalidsamples'] = '利用可能な有効なサンプルはありません。';
$string['onlycli'] = 'アナリティクス処理をコマンドラインのみで実行する';
$string['onlycliinfo'] = '評価モデル、機械学習アルゴリズムまたは予測の取得等のアナリティクス処理には時間を要します。強制的にコマンドライン経由のcronタスクで実行します。あなたのサイト管理者がウェブインターフェース経由でこれらの処理を手動実行できるようにしたい場合、この設定を無効にしてください。';
$string['predictionsprocessor'] = '予測プロセッサ';
$string['predictionsprocessor_help'] = '予測プロセッサは計算モデルの指標およびターゲットにより生成されたデータセットを処理する機械学習バックエンドです。それぞれのモデルは異なるプロセッサで使用することができます。ここで指定したモデルはデフォルトとなります。';
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
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'いつ予測アクションが実施されたか示します。';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'アクションを実行したユーザです。';
$string['privacy:metadata:analytics:predictions'] = '予測です。';
$string['privacy:metadata:analytics:predictions:calculations'] = '指標計算です。';
$string['privacy:metadata:analytics:predictions:contextid'] = 'コンテクストです。';
$string['privacy:metadata:analytics:predictions:modelid'] = 'モデルIDです。';
$string['privacy:metadata:analytics:predictions:prediction'] = '予測です。';
$string['privacy:metadata:analytics:predictions:predictionscore'] = '予測スコアです。';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'タイム分割方法のインデックスです。';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'サンプルIDです。';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'いつ予測されたか示します。';
$string['privacy:metadata:analytics:predictions:timeend'] = '計算終了日時です。';
$string['privacy:metadata:analytics:predictions:timestart'] = '計算開始日時です。';
$string['processingsitecontents'] = 'サイトコンテンツの処理';
$string['successfullyanalysed'] = '正常に分析しました。';
$string['timesplittingmethod'] = '時間分割方法';
$string['timesplittingmethod_help'] = '時間分割方法はコース継続時間を分割します。予測エンジンはこれらの分割部分の最後に実行されます。あなたが使用に興味ある場合のみ時間分割方法を有効にしてください。すべてにおいて評価処理が繰り返されるため時間分割方法が増えるほど評価処理が遅くなります。';
$string['viewprediction'] = '予測詳細を表示する';
