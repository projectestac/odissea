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
 * Strings for component 'workshopeval_credit', language 'ja', version '4.4'.
 *
 * @package     workshopeval_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = '評価方法';
$string['mode_desc'] = '「参加による評価」のデフォルトの評価方法';
$string['mode_help'] = '評価方法はどのように成績評価が計算されるかを決定します。

* オール・オア・ナッシング - 評価者は割り当てられたすべての提出を評価することで、最高の成績評価を得ることができます。それ以外の場合は成績評価はゼロとなります。
* 割合に応じる - 評価した数の割合に応じた成績評価を得ます。割り当てられたすべての提出を評価した場合は最高の成績評価を、半分の提出を評価した場合は50%の成績評価となります。
* 一つ以上 - 評価者は割り当てられた提出のうち、一つ以上を評価することで、最高の成績評価を得ることができます。';
$string['modeall'] = 'オール・オア・ナッシング';
$string['modeone'] = '一つ以上';
$string['modeproportional'] = '割合に応じる';
$string['pluginname'] = '参加による評価';
$string['privacy:metadata'] = '「参加による評価」はいかなる個人データも保存しません。';
