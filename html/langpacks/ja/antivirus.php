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
 * Strings for component 'antivirus', language 'ja', version '4.5'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = '利用可能なアンチウイルスプラグイン';
$string['antiviruscommonsettings'] = '一般アンチウイルス設定';
$string['antiviruses'] = 'アンチウイルスプラグイン';
$string['antivirussettings'] = 'アンチウイルスプラグインを管理する';
$string['configantivirusplugins'] = 'あなたが使用したいアンチウイルスプラグインを選択して、適用順に並べ替えてください。';
$string['dataerrordesc'] = 'データスキャナエラーが発生しました。';
$string['dataerrorname'] = 'データスキャナエラー';
$string['datainfecteddesc'] = '感染データが検知されました。';
$string['datainfectedname'] = '感染データ';
$string['datastream'] = 'データ';
$string['emailadditionalinfo'] = 'ウイルスエンジンからの追加詳細戻り値:';
$string['emailauthor'] = 'アップロード by:';
$string['emailcontenthash'] = 'コンテンツハッシュ:';
$string['emailcontenttype'] = 'コンテンツタイプ:';
$string['emaildate'] = 'アップロード日時:';
$string['emailfilename'] = 'ファイル名:';
$string['emailfilesize'] = 'ファイルサイズ:';
$string['emailgeoinfo'] = 'ジオロケーション:';
$string['emailinfectedfiledetected'] = '感染ファイル検出';
$string['emailipaddress'] = 'IPアドレス:';
$string['emailreferer'] = 'リファラ:';
$string['emailreport'] = 'レポート:';
$string['emailscanner'] = 'スキャナ:';
$string['emailscannererrordetected'] = 'スキャナエラーが発生しました。';
$string['emailsubject'] = '{$a} :: アンチウイルス通知';
$string['enablequarantine'] = '隔離を有効にする';
$string['enablequarantine_help'] = 'この設定を有効にした場合、ウイルスとして検出されたすべてのファイルは後で調査するため隔離フォルダ ([dataroot]/{$a}) に置かれます。
Moodleへのアップロードは失敗します。
あなたがファイルシステムレベルのウイルススキャニングを導入している場合、隔離ファイルの検出を避けるため隔離フォルダをアンチウイルスチェックから除外してください。';
$string['fileerrordesc'] = 'ファイルスキャナエラーが発生しました。';
$string['fileerrorname'] = 'ファイルスキャナエラー';
$string['fileinfecteddesc'] = '感染ファイルが検出されました。';
$string['fileinfectedname'] = '感染ファイル';
$string['notifyemail'] = 'アンチウイルス警告通知メール';
$string['notifyemail_help'] = 'ウイルス検出時に通知するメールアドレスです。空白にした場合、サイト管理者に通知が送信されます。';
$string['notifylevel'] = '通知レベル';
$string['notifylevel_help'] = 'あなたが通知を希望する情報のレベルの違いです。';
$string['notifylevelerror'] = '検出された脅威およびスキャナエラー';
$string['notifylevelfound'] = '検出された脅威のみ';
$string['privacy:metadata'] = 'アンチウイルスシステムはいかなる個人データも保存しません。';
$string['quarantinedfiles'] = 'アンチウイルス隔離ファイル';
$string['quarantinedisabled'] = '隔離は無効にされています。ファイルは保存されません。';
$string['quarantinetime'] = '最大隔離時間';
$string['quarantinetime_desc'] = '指定された期間より古い隔離ファイルは削除されます。';
$string['taskcleanup'] = '隔離ファイルをクリーンアップする';
$string['threshold'] = 'ステータスチェック閾値';
$string['threshold_desc'] = '{$a} で報告されたエラー等を以前の結果と比較してどのくらいさかのぼってチェックするか決定します。';
$string['unknown'] = '不明';
$string['virusfound'] = '{$a->item} をウイルスチェッカでスキャンした結果、感染が発見されました!';
