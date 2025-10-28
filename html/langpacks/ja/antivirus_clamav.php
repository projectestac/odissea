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
 * Strings for component 'antivirus_clamav', language 'ja', version '4.4'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = '現在、アンチウイルススキャニングに問題が発生しています。あなたのファイル {$a->item} はアップロードされませんでした。後ほど再度お試しください。';
$string['clamfailed'] = 'ClamAVの起動に失敗しました。 エラーメッセージは {$a} です。Clamからの出力結果は次のとおりです:';
$string['clamfailureonupload'] = 'ClamAV失敗時';
$string['configclamactlikevirus'] = 'ファイルをウイルスとして扱う';
$string['configclamdonothing'] = 'ファイルをOKとして扱う';
$string['configclamfailureonupload'] = '「ファイルをOKとして扱う」が選択された場合、ファイルは指定されたディレクトリに移動されます。「アップロードを拒否する、もう一度」が選択された場合、ユーザには後で再度アップロードするようメッセージが表示されます。「ファイルをウイルスとして扱う」が選択された場合、ファイルは隔離エリアに移動されるか削除されます。警告: 何らかの理由によりClamの実行に失敗した場合 (通常、あなたが無効なpathtoclamを入力した場合)、すべてのアップロードされたファイルは指定された隔離エリアに移動されるか削除されます。';
$string['configclamtryagain'] = 'アップロードを拒否する、もう一度';
$string['errorcantopensocket'] = 'Unixドメインソケット接続エラー {$a}';
$string['errorclamavnoresponse'] = 'ClamAVが応答しません。デーモンの動作状況をご確認ください。';
$string['errornounixsocketssupported'] = 'このシステムではUnixドメインソケットトランスポートがサポートされていません。代わりにコマンドラインオプションを使用してください。';
$string['invalidpathtoclam'] = 'Moodleはファイルアップロード時にclamが動作するよう設定されていますが、ClamAVのパス {$a} が正しくありません。';
$string['pathtoclam'] = 'コマンドライン';
$string['pathtoclamdesc'] = '実行方法が「コマンドライン」の場合、ここにClamAVのパスを入力してください。Linuxでは「/usr/bin/clamscan」または「/usr/bin/clamdscan」のようになります。';
$string['pathtounixsocket'] = 'Unixドメインソケット';
$string['pathtounixsocketdesc'] = '実行方法が「Unixドメインソケット」の場合、ここにClamAV Unixソケットのパスを入力してください。Debian Linuxでは「/var/run/clamav/clamd.ctl」のようになります。アップロードされるファイルにclamavデーモンのリードアクセスがあることをご確認ください。これを確実にする方法はあなたのウェブサーバグループ (Debian Linuxの場合は「www-data」) に「clamav」ユーザを追加することです。';
$string['pluginname'] = 'ClamAVアンチウイルス';
$string['privacy:metadata'] = 'ClamAVアンチウイルスプラグインはいかなる個人データも保存しません。';
$string['quarantinedir'] = '隔離ディレクトリ';
$string['runningmethod'] = '実行方法';
$string['runningmethodcommandline'] = 'コマンドライン';
$string['runningmethoddesc'] = 'ClamAVの実行方法です。デフォルトでコマンドラインが使用されます。Unixシステムの場合、システムソケットを使用した方が良いパフォーマンスを得ることができます。';
$string['runningmethodtcpsocket'] = 'TCPソケット';
$string['runningmethodunixsocket'] = 'Unixドメインソケット';
$string['tcpsockethost'] = 'TCPソケットホスト名';
$string['tcpsockethostdesc'] = 'ClamAVサーバのドメイン名';
$string['tcpsocketport'] = 'TCPソケットポート';
$string['tcpsocketportdesc'] = 'ClamAVへの接続時に使用するポートです。';
$string['tries'] = 'スキャニング試行';
$string['tries_desc'] = 'スキャニング処理中にエラーが発生した場合のClamAVの試行回数です。';
$string['tries_notice'] = 'ClamAVスキャニングが {$a->tries} 回実行されました。
{$a->notice}';
$string['unknownerror'] = 'Calmに不明なエラーが発生しました。';
