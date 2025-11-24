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
 * Strings for component 'block_grade_me', language 'zh_cn', version '4.5'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = '转到{$a->course_name} 的成绩册...';
$string['alt_mark'] = '检查';
$string['alt_mod'] = '转到成绩册中的 {$a->mod_name}…';
$string['excess'] = '有超过 {$a->maxcourses}数量的课程存在未评分作业。';
$string['expand'] = '收起或展开全部l';
$string['grade_me:addinstance'] = '添加一个新的待评分模块';
$string['grade_me:myaddinstance'] = '添加一个新待评分模块到我的个人主页';
$string['grade_me_tools'] = '工具';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">刷新需要评分的测验</a></p>';
$string['link_grade_img'] = '评分作业…';
$string['link_gradebook'] = '转到{$a->course_name}…';
$string['link_gradebook_icon'] = '转到{$a->course_name} 成绩册…';
$string['link_mod'] = '转到 {$a->mod_name}';
$string['link_mod_img'] = '转到成绩册中的 {$a->mod_name}…';
$string['link_user_profile'] = '{$a->first_name}的个人信息…';
$string['nothing'] = '没有待评分的内容！';
$string['pluginname'] = '评分';
$string['pluginname-reset'] = '评分 - 重置表';
$string['quiz_update_ngrade_complete'] = '更新完成';
$string['quiz_update_ngrade_success'] = '测验清单刷新完成，当前有 {$a} 个问题需要评分。';
$string['settings_adminviewall'] = '管理员可查看全部';
$string['settings_configadminviewall'] = '给管理员查看所有未评份内容的权限  — 不限于那些有评分权限的课程。';
$string['settings_configenablepre'] = '评分模块要显示来自 "{$a->plugin_name}"  的未评估的活动吗?';
$string['settings_configmaxage'] = '显示最大可评分的作业期限（按天显示）。比这个期限更早的内容不显示， 0 表示没有限制。';
$string['settings_configmaxcourses'] = '设置最大可显示的未评分课程的数量，如果数量过大会导致网站反应缓慢。';
$string['settings_configshowhidden'] = '允许显示隐藏课程的待评分内容。';
$string['settings_enablepre'] = '显示';
$string['settings_maxage'] = '最大期限';
$string['settings_maxcourses'] = '最大显示的课程';
$string['settings_showhidden'] = '显示隐藏课程内容';
$string['title'] = '评分';
