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
 * Strings for component 'alternative', language 'zh_cn', version '4.1'.
 *
 * @package     alternative
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = '可供替代的';
$string['alternativename'] = '活动名称';
$string['alternativeoptions'] = '此备选方案的选项';
$string['alternativeoptions_help'] = '每个备选方案向用户显示多个选项。
这些选项在本表中描述。
如果未设置标题，则不会创建该选项（如果存在该选项，则会将其删除）。
可以在这些字段集之后使用按钮添加新选项。';
$string['changeallowed'] = '允许更改';
$string['changeallowed_help'] = '如果未选中，用户将无法更改其选择。
教师和所有具有“替代：强制注册”功能的角色都可以改变任何人的选择。';
$string['chooseteammembers'] = '请选择您的团队成员';
$string['chooseuser'] = '请选择要注册的用户';
$string['csv'] = '导入CSV';
$string['csv2ndfield'] = '第二个字段（位置）应为数字，0=无限制。';
$string['csv_help'] = '每行由 “标题 ; 地点 ; 日期 ; 描述“  这样的由\';\'分隔的4个部分的格式组成';
$string['csvbadfieldnb'] = '字段数错误：{$a}，而不是4个。';
$string['csvunableopen'] = '不能打开CSV文件。';
$string['datecomment'] = '日期';
$string['datecomment_help'] = '此字段可以包含任何文本，但用于日期或日期间隔。';
$string['displaycompact'] = '紧凑型显示器';
$string['displaycompact_help'] = '如果未选中，每个选项将显示在几行上，并带有明确的说明。
如果选中，每个选项将显示在一行上，并带有折叠的说明。';
$string['fieldsetcsv'] = '从CSV文件导入选项。';
$string['fieldsetmultiple'] = '多个注册的设置';
$string['fieldsetteam'] = '团队设置';
$string['forceregister'] = '强制注册';
$string['groupdependent'] = '依赖于组';
$string['groupdependent_help'] = '如果选中此框，则显示给每个用户的文本将取决于他的组。';
$string['individual'] = '个人的';
$string['instructionsforcereg'] = '您不能注册自己，但您的角色允许您注册任何选择的学生。';
$string['instructionsmultiple'] = '必须在{$a->multiplemin}和{$a->multiplemax}选项之间进行选择。';
$string['instructionsmultiplenomax'] = '您必须至少选择{$a->multiplemin}选项。';
$string['instructionsnochange'] = '保存选项后，将不允许更改它。';
$string['instructionsteam'] = '您可以注册为团队。团队成员必须介于{$A->teammin}和{$A->teammax}之间。
当您注册团队的其他成员时，您将成为团队领导。';
$string['messageprovider:reminder'] = 'mod/备用学生提醒';
$string['modulename'] = '可供替代的';
$string['modulename_help'] = '可选模块允许学生在给定列表中注册一个或多个选项。';
$string['modulenameplural'] = '备选方案';
$string['multiple'] = '倍数';
$string['multipleenable'] = '启用这些设置';
$string['multipleenable_help'] = '每个用户必须在最小值和最大值之间注册几个选项。';
$string['multiplemax'] = '最大用户注册数';
$string['multiplemin'] = '最小用户注册数';
$string['noselectedoption'] = '你必须选择一个选项';
$string['noselectedusers'] = '没有用户被选择';
$string['option'] = '选项';
$string['optionintro'] = '描述';
$string['optionname'] = '标题';
$string['options'] = '选项';
$string['places'] = '地区';
$string['placesavail'] = '可用的地区';
$string['pluginadministration'] = '替代管理';
$string['pluginname'] = '可供替代的';
$string['potentialteammembers'] = '潜在团队成员';
$string['private'] = '私人';
$string['public'] = '公众';
$string['publicreg'] = '公开注册';
$string['publicreg_help'] = '注册可以是：<dl>
<dt>公开的</dt> <dd>向所有人展示，</dd>
<dt>向组内公开</dt> <dd>用户可以查看至少共享一个组的用户注册</dd>
<dt>私有的</dt> <dd>仅向超级用户（教师等）显示。</dd>
</dl>';
$string['register'] = '注册';
$string['registrationforbidden'] = '你不能在这里注册';
$string['registrations'] = '注册';
$string['registrationsaved'] = '已保存你的注册选择';
$string['regteams'] = '注册团队';
$string['remains'] = '提醒';
$string['reminderBefore'] = '在 [[AlterUntil]]前';
$string['reminderFull'] = '您必须在活动“[[AlterName]]”中进行选择';
$string['reminderFullHtml'] = '您必须在活动“<i>[[AlterName]]”中进行选择';
$string['reminderSmall'] = '您必须在活动“[[AlterName]]”中进行选择';
$string['reminderSubject'] = '提醒：您必须在备选选项中进行选择';
$string['sendReminder'] = '发送提醒';
$string['separator'] = '分离器';
$string['students'] = '学生';
$string['synthesis'] = '合成';
$string['synthfree'] = '自由的';
$string['synthlimitplaces'] = '有限位置选项（个人）';
$string['synthlimitteamplaces'] = '有限位置选项（团队）';
$string['synthplaces'] = '地点（个人）';
$string['synthpotential'] = '潜在学生';
$string['synthregistered'] = '注册学生';
$string['synthreserved'] = '保留（有限）';
$string['synthteamplaces'] = '地点（团队）';
$string['synthunlimitplaces'] = '无限位置选项（个人）';
$string['synthunlimitteamplaces'] = '无限位置选项（团队）';
$string['synthunregistered'] = '未注册学生';
$string['team'] = '团队';
$string['teamenable'] = '允许的团队设置';
$string['teamenable_help'] = '设置团队的最小和最大规模。';
$string['teamleader'] = '团队负责人';
$string['teamleadernotamember'] = '团队负责人不应是团队成员。';
$string['teammax'] = '最大团队规模';
$string['teammin'] = '最小团队规模';
$string['teamplaces'] = '团队地点';
$string['teamplacesavail'] = '团队可用位置';
$string['teams'] = '团队';
$string['unique'] = '唯一的';
$string['unregister'] = '未注册';
$string['unregisterLeader'] = '注意：注销负责人将导致注销整个团队。';
$string['uploadoverwrites'] = '注意：上载新文件会删除以前的所有注册和选项。';
$string['userinfo'] = '已注册到{$a}选项。';
$string['usersnotreg'] = '未注册的用户';
$string['usersreg'] = '已注册的用户';
$string['viewallregistrations'] = '查看注册';
$string['viewallusersnotreg'] = '查看未注册的用户';
$string['viewallusersreg'] = '查看已注册的用户';
$string['viewsynthesis'] = '视图合成';
$string['viewteams'] = '查看团队';
$string['wrongteamsize'] = '你的队伍规模不在允许的范围内。';
