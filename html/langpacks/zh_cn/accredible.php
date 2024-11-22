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
 * Strings for component 'accredible', language 'zh_cn', version '4.1'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = '添加证书/徽章实例';
$string['accredible:manage'] = '管理证书/徽章实例';
$string['accredible:student'] = '收回证书或徽章';
$string['accredible:view'] = '查看证书或徽章';
$string['accrediblegroup'] = '证书组';
$string['achievementid'] = '成就ID/群名称（必须唯一）';
$string['activitygroupdescription'] = '在颁发证书之前，需要在<a href="{$a}" target="_blank">证书表板</a>中创建证书组。如果没有显示，请检查API密钥以确保正确设置了集成。';
$string['activityname'] = '活动名称';
$string['additionalactivitiesone'] = '警告：你正在课程里创建多个活动。<br />所有活动都对学生可见，因此请确保给它们不同的名字。';
$string['additionalactivitiesthree'] = '这个名称将会出现在证书上。';
$string['additionalactivitiestwo'] = '在活动页面上只会显示以这个成就编号发布的证书/徽章。';
$string['apikeyhelp'] = '输入您来自accredible.com的API Key';
$string['apikeylabel'] = 'API密钥';
$string['autoissueheader'] = '自动发布条件';
$string['certificatename'] = '证书/徽章名称';
$string['certificateurl'] = '证书/徽章超链接';
$string['chooseexam'] = '选择最终测试';
$string['completionissuecheckbox'] = '是，课程结业后发放';
$string['completionissueheader'] = '自动发布条件：依据课程完成度';
$string['dashboardlink'] = 'Accredible控制面板链接';
$string['dashboardlinktext'] = '要删除或者设计证书的样式，请前往<a href="https://accredible.com/issuer/login" target="_blank">控制面板</a>';
$string['datecreated'] = '日期已创建';
$string['description'] = '描述';
$string['emptygradeattributekeyname'] = '最终的课程成绩将被映射到所选择的可扩展的自定义属性中。如果您还没有创建自定义属性，您可以在<a href="{$a}" target="_blank">可扩展平台</a>创建.';
$string['euhelp'] = '选择是否希望在欧盟（法兰克福）而不是美国托管数据';
$string['eulabel'] = '欧盟（法兰克福）服务器';
$string['eventcertificatecreated'] = '已发布的可扩展的认证';
$string['gotodashboard'] = '要更新徽章和证书外观，请访问：<a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = '选择纳入认证的Moodle成绩：';
$string['gradeattributekeynameselect'] = '选择一个可扩展设计属性：';
$string['gradeissueheader'] = '自动发布条件：根据期末测试成绩';
$string['groupselect'] = '组';
$string['id'] = '识别号';
$string['includegradeattributecheckbox'] = '是的，证书中包括成绩。';
$string['includegradeattributedescription'] = '将学生的成绩列入证书中';
$string['indexheader'] = '{$a}的所有证书和徽章';
$string['issued'] = '已发布';
$string['manualheader'] = '手动发布证书/徽章';
$string['modulename'] = 'Accredible证书和徽章';
$string['modulename_help'] = 'Accredible证书和徽章活动模块让你能在accredible.com上颁发课程证书或徽章给学生。

在你想让学生们看到他们的证书或徽章的地方添加活动';
$string['modulename_link'] = 'mod/accredible/view';
$string['modulenameplural'] = 'Accredible证书/徽章';
$string['nocertificates'] = '没有证书/徽章';
$string['nouserswarning'] = '你需要选择一个组以便看到用户列表。';
$string['overview'] = '总览';
$string['passinggrade'] = '通过课程所需的百分率分数（%）';
$string['pluginadministration'] = 'Accredible证书/徽章管理';
$string['pluginname'] = 'Accredible证书和徽章';
$string['privacy:metadata:accredible'] = '为了与Authorible集成，需要与该服务交换用户数据。';
$string['privacy:metadata:accredible:email'] = '您的电子邮件地址将发送至授权机构，以颁发凭证。';
$string['privacy:metadata:accredible:fullname'] = '您的完整名称将发送至授权机构，以颁发凭证。';
$string['privacy:metadata:accredible:quizgrade'] = '您的测验成绩可能会被发送到授权机构，以颁发证书。';
$string['recipient'] = '收件人';
$string['templatename'] = '群名称（来自控制面板）';
$string['unissueddescription'] = '这些用户已满足此证书的要求，但尚未颁发证书。选择要为其颁发证书的对象。';
$string['unissuedheader'] = '未发放的证书/勋章';
$string['usestemplatesdescription'] = '请确保你有一个和你的成就编号同名的群在控制面板上。';
$string['viewheader'] = '{$a} 的证书和徽章';
$string['viewimgcomplete'] = '请点击此处去浏览你的证书或徽章';
$string['viewimgincomplete'] = '课程仍在进行中';
$string['viewsubheader'] = '组编号：{$a}';
$string['viewsubheaderold'] = '成就编号：{$a}';
