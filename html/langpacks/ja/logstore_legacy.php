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
 * Strings for component 'logstore_legacy', language 'ja', version '4.1'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'レガシイベントが記録されました。';
$string['loglegacy'] = 'レガシデータを記録する';
$string['loglegacy_help'] = 'このプラグインではログデータをレガシログテーブル (mdl_log) に記録します。この機能は新しく効率の良いロギングプラグインに置き換えられました。そのため、あなたが古いログテーブルを直接参照している古いカスタムレポートを使用している場合のみ、このプラグインを動作させてください。レガシログに書き込むことにより負荷を上げることになるため、パフォーマンスの理由から必要でない場合はこのプラグインを無効にしてください。';
$string['pluginname'] = 'レガシログ';
$string['pluginname_desc'] = 'レガシログテーブルにログエントリを記録するログプラグインです。';
$string['privacy:metadata:log'] = '過去のイベント群です。';
$string['privacy:metadata:log:action'] = 'アクションの説明です。';
$string['privacy:metadata:log:info'] = '追加情報です。';
$string['privacy:metadata:log:ip'] = 'イベントの時間に使用されるIPアドレスです。';
$string['privacy:metadata:log:time'] = 'アクションが実施される日時です。';
$string['privacy:metadata:log:url'] = 'イベントに関連するURLです。';
$string['privacy:metadata:log:userid'] = 'アクションを実施するユーザのIDです。';
$string['taskcleanup'] = 'レガシログテーブルクリーンアップ';
