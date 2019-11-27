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
 * Strings for component 'antivirus_clamav', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'ClamAVの起動に失敗しました。 エラーメッセージは {$a} です。Clamからの出力結果は次のとおりです:';
$string['clamfailureonupload'] = 'ClamAV失敗時';
$string['configclamactlikevirus'] = 'ファイルをウイルスとして扱う';
$string['configclamdonothing'] = 'ファイルをOKとして扱う';
$string['configclamfailureonupload'] = 'あなたがアップロードファイルをスキャンするようClamを設定しているにもかかわらず設定が正しくない場合、または不明な理由で実行に失敗した場合、どのように処理しますか? あなたが「ファイルをウイルスとして扱う」を選択した場合、ファイルは隔離エリアに移動されるか削除されます。あなたが「ファイルをOKとして扱う」を選択した場合、ファイルは宛先ディレクトリに移動されます。どちらにしても、管理者にはClamが失敗した旨が通知されます。あなたが「ファイルをウイルスとして扱う」を選択したにもかかわらず何らかの理由によりClamの実行に失敗した場合 (通常、あなたが無効なpathtoclamを入力した場合)、アップロードされたファイルすべては隔離エリアに移動されるか削除されます。この設定には注意してください。';
$string['errorcantopensocket'] = 'Unixドメインソケット接続エラー {$a}';
$string['errorclamavnoresponse'] = 'ClamAVが応答しません。デーモンの動作状況を確認してください。';
$string['errornounixsocketssupported'] = 'このシステムではUnixドメインソケットトランスポートがサポートされていません。代わりにコマンドラインオプションを使用してください。';
$string['invalidpathtoclam'] = 'Moodleはファイルアップロード時にclamが動作するよう設定されていますが、ClamAVのパス {$a} が正しくありません。';
$string['pathtoclam'] = 'コマンドライン';
$string['pathtoclamdesc'] = '実行方法が「コマンドライン」の場合、ここにClamAVのパスを入力してください。Linuxでは「/usr/bin/clamscan」または「/usr/bin/clamdscan」のようになります。';
$string['pathtounixsocket'] = 'Unixドメインソケット';
$string['pathtounixsocketdesc'] = '実行方法が「Unixドメインソケット」の場合、ここにClamAV Unixソケットのパスを入力してください。Debian Linuxでは「/var/run/clamav/clamd.ctl」のようになります。アップロードされるファイルにclamavデーモンのリードアクセスがあることを確認してください。これを確実にする方法はあなたのウェブサーバグループ (Debian Linuxの場合は「www-data」) に「clamav」ユーザを追加することです。';
$string['pluginname'] = 'ClamAVアンチウイルス';
$string['privacy:metadata'] = 'ClamAVアンチウイルスプラグインはいかなる個人データも保存しません。';
$string['quarantinedir'] = '隔離ディレクトリ';
$string['runningmethod'] = '実行方法';
$string['runningmethodcommandline'] = 'コマンドライン';
$string['runningmethoddesc'] = 'ClamAVの実行方法です。デフォルトでコマンドラインが使用されます。Unixシステムの場合、システムソケットを使用した方が良いパフォーマンスを得ることができます。';
$string['runningmethodunixsocket'] = 'Unixドメインソケット';
$string['unknownerror'] = 'Calmに不明なエラーが発生しました。';
