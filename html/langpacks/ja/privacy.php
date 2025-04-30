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
 * Strings for component 'privacy', language 'ja', version '4.4'.
 *
 * @package     privacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['broughtbymoodle'] = 'このデータエクスポートはMoodleから提供されます。';
$string['exportfrom'] = 'エクスポート元 {$a}';
$string['exporttime'] = 'エクスポート日時 {$a}';
$string['exportuser'] = '{$a} のデータ';
$string['navigation'] = 'ナビゲーション';
$string['privacy:metadata'] = 'プライバシーサブシステムはどのような自身のデータも保存しません。データを記述、エクスポート、削除するためコンポーネントおよびインタフェース間でチャネルとして動作するよう設計されています。';
$string['privacy:subsystem:empty'] = 'このサブシステムはどのようなデータも保存しません。';
$string['trace:deletingapproved'] = '{$a->total} 承認済みコンテクストの削除実行 ({$a->datetime})';
$string['trace:deletingapprovedusers'] = 'コンテクスト {$a->contextid} の {$a->total} 承認済みコンポーネントのユーザ削除実行 ({$a->datetime})';
$string['trace:deletingcontext'] = '{$a->total} コンポーネントからのコンテクストの削除実行 ({$a->datetime})';
$string['trace:deletinguser'] = '{$a->total} コンポーネントからのユーザ削除実行 ({$a->datetime})';
$string['trace:done'] = '完了';
$string['trace:exportcomplete'] = 'エクスポート完了';
$string['trace:exportingapproved'] = '{$a->total} コンポーネントの主エクスポート実行 ({$a->datetime})';
$string['trace:exportingrelated'] = '{$a->total} コンポーネントの関連エクスポート実行 ({$a->datetime})';
$string['trace:fetchcomponents'] = '{$a->total} コンポーネントからのデータ取得 ({$a->datetime})';
$string['trace:finalisingexport'] = 'エクスポート最終処理';
$string['trace:preprocessingcomponent'] = '前処理 {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
$string['trace:processingcomponent'] = '処理 {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
$string['viewdata'] = 'データを表示するにはナビゲーションのリンクをクリックしてください。';
