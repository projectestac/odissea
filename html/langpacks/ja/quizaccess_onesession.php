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
 * Strings for component 'quizaccess_onesession', language 'ja', version '3.11'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = '小テストの受験を開始したものと別のコンピュータ、デバイス、またはブラウザから新たな受験を開始しようとしています。誤ってブラウザを閉じてしまった場合は、教師に連絡してください。';
$string['eventattemptblocked'] = '学生による別のデバイスを使用した受験はブロックされました。';
$string['eventattemptunlocked'] = '学生は別のデバイスを使用して受験を継続することを許可されました';
$string['onesession'] = '並列接続の禁止';
$string['onesession:unlockattempt'] = '受験のロックを解除';
$string['onesession_help'] = '有効の場合、ユーザは同じブラウザ・セッションでのみ小テストの受験を継続できます。別のコンピュータ、デバイス、またはブラウザを使用して同じ小テストを開くことは禁止されます。これは、誰かが他のコンピュータで同じ小テストを受験して学生を助けないようにするために役立つ場合があります。';
$string['pluginname'] = '並列セッションを禁止するアクセスルール';
$string['privacy:metadata'] = 'このプラグインでは、クライアント・デバイスのセッションを識別するために使用されるハッシュを保存します。元の文字列にはクライアントのIPアドレスとクライアントのブラウザから送信されたUser-Agentヘッダが含まれていますが、ハッシュからこれらの情報を抽出することはできません。ハッシュは小テストのセッション終了直後に削除されます。';
$string['studentinfo'] = '注意! この小テストの受験中に利用デバイスを変更することは禁止されています。受験開始後、他のコンピュータ、デバイス、及びブラウザを使用してこの小テストにアクセスすることは禁止されます。受験終了までブラウザ・ウィンドウを閉じないでください。ブラウザ・ウィンドウを閉じると受験を完了することはできません。';
$string['unlockthisattempt'] = '学生が別のデバイスを使用してこの受験を続けることを許可';
$string['unlockthisattempt_header'] = '並列接続の禁止';
$string['whitelist'] = 'IP検査をしないネットワーク';
$string['whitelist_desc'] = 'このオプションは、ユーザがモバイル・ネットワークを経由して小テストを受験する際に、受験途中でIPアドレスが切り替わることによる誤検出を軽減することを目的としています。ほとんどの状況では必要ありません。半角カンマ区切りで複数のサブネットを指定できます(例: 88.0.0.0/8, 77.77.0.0./16)。IPアドレスがこれらのネットワーク内に該当する場合、IPアドレスは検査されません。IP検査を完全に無効にするには、0.0.0.0/0の値を設定します。';
