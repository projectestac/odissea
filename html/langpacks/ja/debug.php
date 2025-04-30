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
 * Strings for component 'debug', language 'ja', version '4.4'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = '認証プラグイン {$a} が見つかりませんでした。';
$string['blocknotexist'] = '{$a} ブロックが存在しません。';
$string['cannotbenull'] = '{$a} にはnullを使用できません!';
$string['cannotdowngrade'] = '{$a->plugin} を {$a->oldversion} から {$a->newversion} にダウングレードできません。';
$string['cannotfindadmin'] = '管理ユーザが見つかりませんでした!';
$string['cannotinitpage'] = 'ページを完全に初期化できません: 無効な {$a->name} ID {$a->id}';
$string['cannotsetuptable'] = '{$a} テーブルを正常に設定できませんでした!';
$string['codingerror'] = 'コーディングエラーが検出されました。プログラマによって修正される必要があります: {$a}';
$string['configmoodle'] = 'まだMoodleは設定されていません。あなたは最初にconfig.phpを編集する必要があります。';
$string['debuginfo'] = 'デバッグ情報';
$string['erroroccur'] = 'この処理中にエラーが発生しました。';
$string['invalidarraysize'] = '{$a} の変数内の配列サイズが正しくありません。';
$string['invalideventdata'] = '正しくないイベントデータが送信されました: {$a}';
$string['invalidparameter'] = '無効なパラメータ値が検出されました。';
$string['invalidresponse'] = '無効なレスポンス値が検知されました。';
$string['line'] = '行';
$string['missingconfigversion'] = 'configテーブルにバージョンが含まれていません。あなたは続けることはできません。';
$string['modulenotexist'] = '{$a} モジュールが存在しません。';
$string['morethanonerecordinfetch'] = 'fetch()で2レコード以上のレコードが見つかりました!';
$string['mustbeoveride'] = '抽象メソッド {$a} はオーバーライドする必要があります。';
$string['noadminrole'] = '管理者ロールが見つかりませんでした。';
$string['noblocks'] = 'ブロックがインストールされていません!';
$string['nocate'] = 'カテゴリがありません!';
$string['nomodules'] = 'モジュールが見つかりませんでした!!';
$string['nopageclass'] = '{$a} がインポートされましたが、ページクラスがありません。';
$string['noreports'] = 'アクセスできるレポートはありません。';
$string['notables'] = 'テーブルがありません!';
$string['outputbuffer'] = '出力バッファ';
$string['phpvaroff'] = 'PHPサーバ変数「 {$a->name} 」をOffにしてください - {$a->link}';
$string['phpvaron'] = 'PHPサーバ変数「 {$a->name} 」がOnにされていません - {$a->link}';
$string['reactive_highlightoff'] = 'ハイライトOFF';
$string['reactive_highlighton'] = 'ハイライトON';
$string['reactive_instances'] = 'リアクティブインスタンス:';
$string['reactive_noinstances'] = 'このページにはリアクティブインスタンスはありません。';
$string['reactive_pin'] = 'ピン留め';
$string['reactive_readmodeoff'] = 'リードモードOFF';
$string['reactive_readmodeon'] = 'リードモードON';
$string['reactive_resetpanel'] = 'パネルをリセットする';
$string['reactive_saveingwarning'] = '警告: 状態を編集した場合、予期しない結果になることがあります。';
$string['reactive_statedata'] = '状態データ';
$string['reactive_unpin'] = 'ピン留め解除';
$string['sessionmissing'] = 'セッションに {$a} オブジェクトがありません。';
$string['sqlrelyonobsoletetable'] = 'このSQLは古いテーブル {$a} を参照しています! あなたのコードは開発者によって修正される必要があります。';
$string['stacktrace'] = 'スタックトレース';
$string['withoutversion'] = 'メインversion.phpファイルが存在しないか、読めない、または壊れています。';
$string['xmlizeunavailable'] = 'xmlize関数を利用できません。';
