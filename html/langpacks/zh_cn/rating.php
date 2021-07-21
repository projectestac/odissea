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
 * Strings for component 'rating', language 'zh_cn', version '3.11'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = '平均分';
$string['aggregatecount'] = '评分数';
$string['aggregatemax'] = '最高分';
$string['aggregatemin'] = '最低分';
$string['aggregatenone'] = '无评分';
$string['aggregatesum'] = '评分总和';
$string['aggregatetype'] = '汇总类型';
$string['aggregatetype_help'] = '汇总类型定义了各个评分如何在成绩册中汇总为最终成绩。

* 平均分 - 所有评分的平均值
* 评分数 - 被评分的项目数成为最终成绩。注意，该总成绩不能超过活动设定的最高分。
* 最大值 - 最高的评分成为最终成绩
* 最小值 - 最低的评分成为最终成绩
* 总和 - 所有评分被加到一起。注意，该总成绩不能超过活动设定的最高分。

如果选择“无评分”，那么此活动不会出现在成绩册中。';
$string['allowratings'] = '可以给项目评分吗？';
$string['allratingsforitem'] = '所有已提交的评分';
$string['capabilitychecknotavailable'] = '在保存活动之前，能力检查不可用';
$string['couldnotdeleteratings'] = '抱歉，无法删除，因为有人已经对其进行了评分';
$string['norate'] = '不允许对项目评分！';
$string['noratings'] = '没有提交评分';
$string['noviewanyrate'] = '您只能查看您自己的项目的结果';
$string['noviewrate'] = '您没有查看项目评分的权限';
$string['privacy:metadata:rating'] = '用户输入的评分与被评分项目的映射一起存储。';
$string['privacy:metadata:rating:rating'] = '用户输入的数值评分。';
$string['privacy:metadata:rating:timecreated'] = '首次评分的时间。';
$string['privacy:metadata:rating:timemodified'] = '上次更新评分的时间。';
$string['privacy:metadata:rating:userid'] = '进行评分的用户。';
$string['rate'] = '评分';
$string['ratepermissiondenied'] = '您没有对此项目评分的权限';
$string['rating'] = '评分';
$string['ratinginvalid'] = '评分无效';
$string['ratings'] = '评分';
$string['ratingtime'] = '将评分项目限制在此日期范围内：';
$string['rolewarning'] = '具有评分权限的角色';
$string['rolewarning_help'] = '要提交评分的用户必须具有moodle/rating:rate权限和模块定义的相关权限。分配到如下角色的用户应该能评分。在管理版块页面里的权限链接里可以修改这个角色列表。';
$string['scaleselectionrequired'] = '当选择一个评分汇总类型时，您还必须选择使用一个量表或设置一个最高分。';
