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
 * Strings for component 'block_completion_progress', language 'zh_cn', version '4.4'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour_descr'] = '已经完成任务的页面颜色代码';
$string['completed_colour_title'] = '已完成的颜色';
$string['completion_not_enabled'] = '网站没有启用完成进度跟踪';
$string['completion_not_enabled_course'] = '课程没有启用完成进度跟踪';
$string['completion_progress:addinstance'] = '添加一个新的完成进度版块';
$string['completion_progress:myaddinstance'] = '添加一个完成进度版块到我的个人主页';
$string['completion_progress:overview'] = '查看本课程所有学生的任务完成进度';
$string['completion_progress:showbar'] = '在完成进度版块中显示柱状图';
$string['config_activitiesincluded'] = '包含的活动';
$string['config_activitycompletion'] = '所有设置为完成的活动';
$string['config_default_title'] = '完成进度';
$string['config_group'] = '仅分组显示';
$string['config_header_monitored'] = '监督';
$string['config_icons'] = '在条形图中使用图标';
$string['config_longbars'] = '如何展示长的条形图';
$string['config_orderby'] = '条形图排序';
$string['config_orderby_course_order'] = '课程中的顺序';
$string['config_orderby_due_time'] = '时间使用 "{$a}" 日期';
$string['config_percentage'] = '对学生显示完成百分比';
$string['config_scroll'] = '滚动';
$string['config_selectactivities'] = '选择活动';
$string['config_selectedactivities'] = '已选择的活动';
$string['config_squeeze'] = '压缩';
$string['config_title'] = '备用标题';
$string['config_wrap'] = '换行';
$string['coursenametoshow'] = '在首页上显示的课程名';
$string['defaultlongbars'] = '长条形图的默认展示';
$string['forceiconsinbar'] = '在进度条上显示图标';
$string['fullname'] = '课程全名';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = '未来还没有完成活动的HTML页面颜色';
$string['futureNotCompleted_colour_title'] = '未来还没有完成的颜色';
$string['how_activitiesincluded_works'] = '如何包括活动任务';
$string['how_activitiesincluded_works_help'] = '<p>默认情况下，所有设置了完成要求的活动都会包含在进度图中。</p><p>你也可以手动选择需要包含的活动。</p>';
$string['how_group_works'] = '可视组如何工作';
$string['how_group_works_help'] = '<p>选择了分组后此版块会只显示组内情况。</p>';
$string['how_longbars_works'] = '显示多长的条形进度图';
$string['how_longbars_works_help'] = '<p>当条形超过设定的长度时，如何以以下方式之一显示它们。</p><ul><li>挤进一个水平条</li><li>横向滚动以显示溢出的条形段</li><li>换行以在多条线上显示所有条形段</li></ul><p>请注意，当选择换行条形图时，当前 指示符将不会显示。</p>';
$string['how_ordering_works'] = '排序是如何工作的';
$string['how_ordering_works_help'] = '<p>有两种方法可以对完成进度中的活动进行排序。</p><ul><li><em>使用“预期完成日期”的时间</em>（默认）<br />活动/资源的预期完成日期用于对条形进行排序。如果活动/资源没有预期完成日期，则改用课程中的顺序。使用此选项时，将显示 当前 指示符。</li><li><em>在 course</em><br />活动/资源 中的顺序与它们在课程页面上的顺序相同。使用此选项时，将忽略预期完成日期。使用此选项时，不会显示 当前 指示符。</li></ul>';
$string['how_selectactivities_works'] = '选择活动是如何实现的';
$string['how_selectactivities_works_help'] = '<p>要手动选择要包含在栏中的活动，请确保将 包含的活动 设置为 所选活动 。</p><p>只能包含设置了活动完成设置的活动。</p><p>按住 Ctrl 键可选择多个活动。</p>';
$string['indeterminate'] = '？';
$string['lastonline'] = '课程最新';
$string['mouse_over_prompt'] = '鼠标悬停或触摸以获取信息.';
$string['no_activities_config_message'] = '没有完成设置的活动或资源或没有选择活动或资源。请在活动和资源配置区块，进行活动完成设置。';
$string['no_activities_message'] = '未监控任何活动或资源。使用 配置 来设置监控。';
$string['no_blocks'] = '课程没有设置使用完成进度版块。';
$string['no_courses'] = '你没有选择任何课程，只显示已选择的课程。';
$string['no_visible_activities_message'] = '没有可见的已监控活动。';
$string['notCompleted_colour_descr'] = '还没有完成活动在页面上显示的颜色代码';
$string['notCompleted_colour_title'] = '未完成活动的颜色';
$string['not_all_expected_set'] = '并非全部设置了完成要求的活动有 "{$a}" 日期设置。';
$string['now_indicator'] = '当前';
$string['overview'] = '学生完成情况总览';
$string['pluginname'] = '完成进度';
$string['progress'] = '进度';
$string['progressbar'] = '完成进度';
$string['selectitem'] = '选择 \'{$a}\'';
$string['shortname'] = '课程简称';
$string['showallinfo'] = '显示所有信息';
$string['showinactive'] = '在总览中显示不活动的学生信息';
$string['showlastincourse'] = '在总览中显示学生在课程的最后时间';
$string['submitted'] = '已提交';
$string['submittednotcomplete_colour_descr'] = '已提交但未完成的任务在页面上显示的颜色';
$string['submittednotcomplete_colour_title'] = '已提交未未完成的颜色';
$string['time_expected'] = '期望';
$string['why_set_the_title'] = '为什么你可能希望设置版块名称？';
$string['why_set_the_title_help'] = '<p>完成进度 版块可以有多个实例。您可以使用不同的 完成进度 版块来监控不同的活动或资源集。例如，您可以在一个模块中跟踪作业进度，在另一个模块中跟踪测验进度。因此，您可以覆盖默认标题并为每个实例设置更合适的数据块标题。</p>';
$string['why_show_precentage'] = '为什么需要给学生显示进度百分比？';
$string['why_show_precentage_help'] = '<p>可以向学生显示进度的总体百分比。</p><p>其计算方式为：已完成的活动数除以条形图中的活动总数。</p><p>进度百分比一直显示，直到学生将鼠标悬停在栏中的某个项目上。</p>';
$string['why_use_icons'] = '为什么你可能想要使用图标？';
$string['why_use_icons_help'] = '<p>您可能希望在完成进度中添加勾号和叉号图标，以使色盲学生在视觉上更容易访问此模块。</p><p>如果您出于文化或个人原因认为颜色不直观，它也可能使块的含义更清晰。</p>';
$string['wrapafter'] = '当换行时，限制行长为';
