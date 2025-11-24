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
 * Strings for component 'qbank_statistics', language 'zh_cn', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = '需要检查吗？';
$string['discrimination_index_help'] = '根据问题统计，一个问题被指示为可能需要检查。 例如，如果学生在题目中获得低分但在整个测验中获得高分，或者在题目上获得高分但在整个测验中获得低分，则可能存在问题，例如错误答案被设置为正确。 不过，统计数据并非万无一失。 这只是暗示应该检查该问题。';
$string['discriminative_efficiency'] = '判别效率';
$string['discriminative_efficiency_help'] = '鉴别效率是对问题对学生的评估程度的统计估值，数值越高越好。特别低的数值可能表明该问题存在问题。非常困难或容易的问题（难易指数接近0%或100%）也可能导致数值低。';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['facility_index'] = '难易指数';
$string['facility_index_help'] = '难易指数给出了在所有尝试过该问题的测验中，该问题（所有版本）获得的平均分数（百分比）。数值越高，通常表明问题越容易。';
$string['likely'] = '可能的';
$string['pluginname'] = '问题统计';
$string['privacy:metadata'] = '问题统计题库插件不存储任何个人数据。';
$string['unlikely'] = '不太可能';
$string['verylikely'] = '很可能';
