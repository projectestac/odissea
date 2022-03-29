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
 * Strings for component 'block_dedication', language 'ja', version '3.11'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'デディケーションツール';
$string['access_info'] = '教師のみ:';
$string['connectionratiorow'] = '1日あたりの接続数';
$string['dedication:addinstance'] = 'コースデディケーションブロックの追加を許可する';
$string['dedication:use'] = 'コースデディケーションブロックの使用を許可する';
$string['dedication_estimation'] = 'あなたの推定デディケーション時間:';
$string['dedicationall'] = 'すべてのコースメンバーのデディケーションです。詳細を確認するにはメンバーの名前 (姓または名) をクリックしてください。';
$string['dedicationgroup'] = 'すべてのグループ<em>{$a}</em> メンバーのデディケーションです。任意のメンバーを選択した場合、そのメンバーの詳細コースデディケーションが表示されます。';
$string['dedicationrow'] = 'コースデディケーション';
$string['form'] = 'コースデディケーション設定';
$string['form_help'] = '時間はログエントリに適用されるセッションおよびセッション期間の概念に基づき推定されます。
<strong>クリック:</strong> ユーザがMoodle内ページにアクセスするたびにログエントリが保存されます。
<strong>セッション:</strong> 連続する2つ以上のクリックのうちクリック間の経過時間が設定された最大時間を超えないものです。
<strong>セッション継続時間:</strong> セッションの最初のクリックから最後のクリックまでの経過時間です。
<strong>デディケーション時間:</strong> ユーザのすべてのセッション時間の合計です。';
$string['form_text'] = '日付範囲および同一セッションのクリック間の最大時間を選択してください。';
$string['limit'] = 'クリック間制限 (分)';
$string['limit_help'] = 'クリック間制限は2つのクリックが同一セッションの一部であるかどうかを定義します。';
$string['maxtime'] = '期間終了';
$string['maxtime_help'] = 'この日付より前に終了するログエントリのみ考慮します。';
$string['meandedication'] = '<strong>平均デディケーション:</strong> {$a}';
$string['mintime'] = '期間開始';
$string['mintime_help'] = 'この日付より後のログエントリのみ考慮します。';
$string['pagetitle'] = '{$a}: コースデディケーション';
$string['period'] = '期間: <em>{$a->mintime}</em> - <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>経過時間:</strong> {$a}';
$string['perioddiffrow'] = '経過時間';
$string['pluginname'] = 'コースデディケーション';
$string['sessionduration'] = '継続時間';
$string['sessionstart'] = 'セッション開始';
$string['show_dedication'] = '学生にデディケーション時間を表示する';
$string['show_dedication_help'] = 'デフォルトでは教師のみデディケーション時間を閲覧できます。この設定により学生がブロック内で自分のデディケーション時間を確認できるようになります。';
$string['sincerow'] = '開始';
$string['submit'] = '計算する';
$string['torow'] = '終了';
$string['totaldedication'] = '<strong>合計デディケーション:</strong> {$a}';
$string['userdedication'] = '<em>{$a}</em> のコースデディケーション詳細です。';
