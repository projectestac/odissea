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
 * Strings for component 'assignfeedback_structured', language 'zh_cn', version '3.11'.
 *
 * @package     assignfeedback_structured
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['close'] = '关闭';
$string['criteria'] = '反馈准则';
$string['criteria_help'] = '为要提供反馈准则的设置名称（以及可选的描述）。将忽略任何未命名的条件。一旦对任何标准给出反馈，所有字段都将被锁定。';
$string['criteriafieldsadd'] = '添加更多准则字段';
$string['criteriaset'] = '准则设置';
$string['criteriaset_help'] = '单击此按钮选择以前保存的准则集，以自动配置下面的准则详细信息。';
$string['criteriasetconfirmdelete'] = '是否确实要永久删除准则集“{$a}”？';
$string['criteriasetconfirmuse'] = '你确定吗？这将覆盖当前为此分配配置的准则。';
$string['criteriasetempty'] = '在保存为集之前，必须至少定义一个准则。';
$string['criteriasetemptytitle'] = '准则集为空';
$string['criteriasetname'] = '条件集名字';
$string['criteriasetname_help'] = '条件集的名称在整个网站上必须是唯一的，因此请仔细选择。';
$string['criteriasetnameedit'] = '编辑条件集名字';
$string['criteriasetnameenter'] = '输入唯一名称';
$string['criteriasetnameused'] = '不幸的是，已经有一个名为“{$a}”的条件集。请尝试其他名称。';
$string['criteriasetnameusedtitle'] = '名字已被占用';
$string['criteriasetnoname'] = '你必须给条件集设置一个名字';
$string['criteriasetnonametitle'] = '没有提供名字';
$string['criteriasetnotdeleted'] = '遗憾的是，无法删除条件集“{$a}”。请重试或向管理员报告此错误。';
$string['criteriasetnotsaved'] = '很遗憾，无法保存条件集。请重试或向管理员报告此错误。';
$string['criteriasetnotupdated'] = '很遗憾，无法更新条件集。请重试或向管理员报告此错误。';
$string['criteriasetpublish'] = '与其他用户共享';
$string['criteriasetpublish_help'] = '勾选此框以允许任何人复制此标准集。默认情况下，它仅对您可用。';
$string['criteriasetsave'] = '保存条件集';
$string['criteriasetsave_help'] = '单击此按钮并为条件集提供唯一的名称，以便将其轻松复制到其他工作分配中。';
$string['criteriasetsaved'] = '条件集已经保存';
$string['criteriasetsavedsuccess'] = '你的条件设置"{$a}" 已经被成功保存';
$string['criteriasetselect'] = '选择一个条件设置';
$string['criteriasetshared'] = '共享';
$string['criteriasetsmanage'] = '管理条件集';
$string['criteriasetsmanage_help'] = '单击此按钮可查看和管理您自己保存的条件集。';
$string['criteriasetsowned'] = '你的条件集';
$string['criteriasetssaved'] = '保存条件集';
$string['criteriasetsshared'] = '共享条件集';
$string['criteriasetsshowshared'] = '显示共享集';
$string['criteriasetupdated'] = '条件集已更新';
$string['criteriasetupdatedsuccess'] = '已成功更新您的条件集。';
$string['criteriasetuse'] = '使用这个设置';
$string['criteriasetusesaved'] = '使用保存的条件集';
$string['criteriaused'] = '无法再编辑此分配的标准，因为已经给出了一些反馈。';
$string['criteriondesc'] = '标准{$a}描述（可选）';
$string['default'] = '默认启用';
$string['default_help'] = '如果设置，默认情况下，将为所有新工作分配启用此反馈方法。';
$string['enabled'] = '结构化反馈';
$string['enabled_help'] = '如果启用，教师将能够定义任何数量的标准来提供具体反馈。';
$string['escapetocancel'] = '退出以取消';
$string['noownedsets'] = '您当前没有任何保存的集。';
$string['nopermissionstodelete'] = '很抱歉，您当前没有删除保存的条件集权限。';
$string['nopermissionstomanage'] = '很抱歉，您当前没有权限管理保存的条件集。';
$string['nopermissionstopublish'] = '很抱歉，您当前没有权限共享保存的条件集。';
$string['nopermissionstosave'] = '很抱歉，您当前没有保存条件集的权限。';
$string['nopermissionstoupdate'] = '很抱歉，您当前没有权限更新保存的条件集。';
$string['nosharedsets'] = '当前没有可用的共享集。';
$string['pluginname'] = '结构化反馈';
$string['privacy:metadata:assignmentid'] = '分配ID';
$string['privacy:metadata:commentpurpose'] = '评论文本';
$string['privacy:metadata:critdescpurpose'] = '评论所涉及条件的描述';
$string['privacy:metadata:criterionpurpose'] = '与评论相关的条件的名称。';
$string['privacy:metadata:filepurpose'] = '评分员为学生提供的反馈文件。';
$string['privacy:metadata:gradepurpose'] = '与反馈关联的等级ID。';
$string['privacy:metadata:tablesummary'] = '这将存储评分员的评论，作为学生对其提交内容特定方面的反馈。';
$string['privacy:path'] = '结构化反馈';
$string['structured:manageowncriteriasets'] = '管理自己保存的条件集';
$string['structured:publishcriteriasets'] = '使保存的条件集对其他用户可用';
