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
 * Strings for component 'enrol_lti', language 'zh_cn', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = '注意:建议启用站点管理设置“允许框架嵌入”，以便工具显示在框架中，而不是显示在新窗口中。';
$string['authltimustbeenabled'] = '注意:这个插件也需要启用LTI身份验证插件。';
$string['couldnotestablishproxy'] = '无法与使用者建立代理关系。';
$string['enrolenddate'] = '结束日期';
$string['enrolenddate_help'] = '如果启用，用户只能访问到此日期。';
$string['enrolenddateerror'] = '选课结束日期不能早于开始日期';
$string['enrolisdisabled'] = '“作为LTI工具发布”插件被禁用。';
$string['enrolmentfinished'] = '选课已完成。';
$string['enrolmentnotstarted'] = '选课尚未开始。';
$string['enrolperiod'] = '选课持续时间';
$string['enrolperiod_help'] = '选课有效的时间长度，从用户从远程系统选课时开始计算。如果禁用，选课时间将不受限制。';
$string['enrolstartdate'] = '开始日期';
$string['enrolstartdate_help'] = '如果启用，用户只能从此日期开始访问。';
$string['failedrequest'] = '失败的请求。原因: {$a->reason}';
$string['frameembeddingnotenabled'] = '要访问该工具，请点击下面的链接。';
$string['gradesync'] = '成绩同步';
$string['gradesync_help'] = '工具中的成绩是否发送到远程系统(LTI使用者)。';
$string['incorrecttoken'] = '令牌不正确。请检查URL并重试，或与此工具的管理员联系。';
$string['invalidrequest'] = '无效请求';
$string['invalidtoolconsumer'] = '无效的工具使用者';
$string['launchdetails'] = '启动细节';
$string['launchdetails_help'] = '配置工具需要cartridge URL(也称为配置URL)加上secret或启动 URL。';
$string['launchurl'] = '启动 URL';
$string['lti:config'] = '配置“作为LTI工具发布”实例';
$string['lti:unenrol'] = '取消用户选课';
$string['maxenrolled'] = '最大选课用户数';
$string['maxenrolled_help'] = '可以访问该工具的远程用户的最大数量。如果设置为零，则选课用户的数量是无限的。';
$string['maxenrolledreached'] = '允许访问该工具的远程用户的最大数量已经达到。';
$string['membersync'] = '用户同步';
$string['membersync_help'] = '计划任务是否将远程系统中已选课用户与本课程的选课用户同步，根据需要为每个远程用户创建帐户，并根据需要选课或取消选课。如果设置为否，则在远程用户访问该工具时，将为他们创建一个帐户，他们将自动选课。';
$string['membersyncmode'] = '用户同步模式';
$string['membersyncmode_help'] = '远程用户是否应该选课和/或取消选课本课程。';
$string['membersyncmodeenrolandunenrol'] = '新选课的和未选课的失踪用户';
$string['membersyncmodeenrolnew'] = '为新用户选课';
$string['membersyncmodeunenrolmissing'] = '未选课失踪的用户';
$string['notoolsprovided'] = '没有提供工具';
$string['opentool'] = '打开工具';
$string['pluginname'] = '作为LTI工具发布';
$string['pluginname_desc'] = '“作为LTI工具发布”插件和LTI身份验证插件允许远程用户访问选定的课程和活动。换句话说，Moodle的功能是提供LTI工具。';
$string['privacy:metadata:enrol_lti_users'] = '通过LTI提供者选课的用户列表';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = '用户最后一次访问课程的时间';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = '用户被记录的最后成绩';
$string['privacy:metadata:enrol_lti_users:timecreated'] = '用户选课的时间';
$string['privacy:metadata:enrol_lti_users:userid'] = '用户的ID';
$string['registration'] = '已发布的工具注册';
$string['registrationurl'] = '注册URL';
$string['registrationurl_help'] = '如果使用注册URL(也称为代理URL)，则自动配置该工具。';
$string['remotesystem'] = '远程系统';
$string['requirecompletion'] = '需要在成绩同步前完成课程或活动';
$string['returnurlnotset'] = '没有设置返回URL。';
$string['roleinstructor'] = '教师的角色';
$string['roleinstructor_help'] = '在工具中分配给远程教师的角色。';
$string['rolelearner'] = '学生的角色';
$string['rolelearner_help'] = '在工具中分配给远程学生的角色。';
$string['secret'] = '秘密短语';
$string['secret_help'] = '与远程系统(LTI使用者)共享的一串字符，用于提供对该工具的访问。';
$string['sharedexternaltools'] = '发布为LTI工具';
$string['successfulregistration'] = '成功注册';
$string['tasksyncgrades'] = '作为LTI工具发布成绩同步';
$string['tasksyncmembers'] = '作为LTI工具发布用户同步';
$string['toolsprovided'] = '已发布工具';
$string['toolsprovided_help'] = '工具可以通过提供启动细节或注册URL与其他站点共享。';
$string['tooltobeprovided'] = '即将发布的工具';
$string['toolurl'] = '工具URL';
$string['userdefaultvalues'] = '用户默认值';
