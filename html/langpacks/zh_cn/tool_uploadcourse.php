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
 * Strings for component 'tool_uploadcourse', language 'zh_cn', version '3.11'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = '允许删除';
$string['allowdeletes_help'] = '不管被删除的字段被接受还是没有。';
$string['allowrenames'] = '允许重命名';
$string['allowrenames_help'] = '不管被重命名的字段被接受还是没有。';
$string['allowresets'] = '允许重置';
$string['allowresets_help'] = '不管被重置的字段被接受还是没有。';
$string['cachedef_helper'] = '帮助缓存';
$string['cannotdeletecoursenotexist'] = '不能删除一个不存在的课程';
$string['cannotgenerateshortnameupdatemode'] = '当允许更新时，无法产生简称';
$string['cannotreadbackupfile'] = '无法读取备份包';
$string['cannotrenamecoursenotexist'] = '无法重新命名一个不存在的课程';
$string['cannotrenameidnumberconflict'] = '无法重命名该课程，编号与现有课程相冲突';
$string['cannotrenameshortnamealreadyinuse'] = '无法重命名该课程，简称已经被使用';
$string['cannotupdatefrontpage'] = '禁止修改首页';
$string['canonlyrenameinupdatemode'] = '只有允许更新时，才能重命名一课程';
$string['canonlyresetcourseinupdatemode'] = '只有在更新模式时才能重置一课程';
$string['couldnotresolvecatgorybyid'] = '不能以ID来决定类别';
$string['couldnotresolvecatgorybyidnumber'] = '不能以ID编号来决定类别';
$string['couldnotresolvecatgorybypath'] = '不能以路径来决定类别';
$string['coursecreated'] = '创建课程';
$string['coursedeleted'] = '删除课程';
$string['coursedeletionnotallowed'] = '不允许删除课程';
$string['coursedoesnotexistandcreatenotallowed'] = '该课程不存在，且不允许建立课程';
$string['courseexistsanduploadnotallowed'] = '该课程存在，且不允许更新';
$string['coursefile'] = '文件';
$string['coursefile_help'] = '文件的格式必须为 CSV 格式。';
$string['courseidnumberincremented'] = '课程编号递增{$a->from} -> {$a->to}';
$string['courseprocess'] = '课程处理';
$string['courserenamed'] = '课程已重新命名';
$string['courserenamingnotallowed'] = '不允许课程重新命名';
$string['coursereset'] = '课程重设';
$string['courseresetnotallowed'] = '现在允许课程重设';
$string['courserestored'] = '课程已恢复';
$string['coursescreated'] = '课程已建立：{$a}';
$string['coursesdeleted'] = '课程已删除：{$a}';
$string['courseserrors'] = '课程错误：{$a}';
$string['courseshortnamegenerated'] = '课程简称已生成：{$a}';
$string['courseshortnameincremented'] = '课程简称递增 {$a->from} -> {$a->to}';
$string['coursestotal'] = '课程总数：{$a}';
$string['coursesupdated'] = '课程已更新：{$a}';
$string['coursetemplatename'] = '上传之后，从这个课程开始恢复';
$string['coursetemplatename_help'] = '输入一个已有的课程简称作为模板使用';
$string['coursetorestorefromdoesnotexist'] = '要恢复的课程来源不存在';
$string['courseupdated'] = '课程已更新';
$string['createall'] = '建立全部，若需要增加简称';
$string['createnew'] = '仅创建新课程，忽略已经存在的课程';
$string['createorupdate'] = '创建新课程，或者更新已经存在的课程';
$string['csvdelimiter'] = 'CSV 分隔符';
$string['csvdelimiter_help'] = 'CSV 文件的分隔符。';
$string['csvfileerror'] = '这个CSV文件格式有问题。请检查标题的数目和字段是否符合，且分隔符号和文件编码是否正确：{$a}';
$string['csvline'] = '行';
$string['defaultvalues'] = '默认课程值';
$string['encoding'] = '编码格式';
$string['encoding_help'] = 'CSV 文件的编码格式。';
$string['errorwhiledeletingcourse'] = '在删除课程的时候出现错误';
$string['errorwhilerestoringcourse'] = '在恢复课程的时候出现错误';
$string['generatedshortnamealreadyinuse'] = '生成的短名称已经被使用';
$string['generatedshortnameinvalid'] = '生成的短名称无效';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'ID 值已经被其他课程使用';
$string['importoptions'] = '导入选项';
$string['invalidbackupfile'] = '无效的备份文件';
$string['invalidcourseformat'] = '无效的课程格式';
$string['invalidcsvfile'] = '无效的 CSV 上传文件';
$string['invalidencoding'] = '无效的编码格式';
$string['invalideupdatemode'] = '更新模式选择无效';
$string['invalidmode'] = '上传模式选择无效';
$string['invalidroles'] = '无效的角色名称：{$a}';
$string['invalidshortname'] = '无效的短名称';
$string['missingmandatoryfields'] = '必须字段{$a}的值缺失';
$string['missingshortnamenotemplate'] = '缺少简称，而且没有设定简称模板';
$string['mode'] = '上传模式';
$string['mode_help'] = '这里允许你对上传的课程进行新建还是更新。';
$string['nochanges'] = '无修改';
$string['pluginname'] = '课程上传';
$string['preview'] = '预览';
$string['reset'] = '课程上传完成后重置课程';
$string['reset_help'] = '在建立/更新之后，是否重置课程？';
$string['restoreafterimport'] = '导入后恢复';
$string['result'] = '结果';
$string['rowpreviewnum'] = '预览记录';
$string['rowpreviewnum_help'] = '下一页中显示预览 CSV 文件中的数据数量，这个选项的数量将决定下一页显示的大小，请选择合理的值。';
$string['shortnametemplate'] = '用于产生一个简称的模板';
$string['shortnametemplate_help'] = '在导航中显示的短名称。在这里你可以使用模板的语法(%f = 全名 、%i = ID编号)，或输入一个递增的初始值。';
$string['templatefile'] = '从上传之后的这个文件恢复';
$string['templatefile_help'] = '选择一个文件作为模板，用来建立所有的课程';
$string['unknownimportmode'] = '未知导入模式';
$string['updatemissing'] = '用CSV文档资料和默认值来填充缺失的项目';
$string['updatemode'] = '更新模式';
$string['updatemode_help'] = '如果你允许课程被更新，你需要告诉本工具课程需要更新成什么。';
$string['updatemodedoessettonothing'] = '更新模式不允许任何东西被更新';
$string['updateonly'] = '仅更新已存在的课程';
$string['updatewithdataonly'] = '只以CSV文档资料来更新';
$string['updatewithdataordefaults'] = '以CSV文档资料和默认值来更新';
$string['uploadcourses'] = '上传课程';
$string['uploadcourses_help'] = '课程可以通过文件文件上传。上传的文件可是可以为下面的格式：

* 文件的每一行只包含一条记录
* 每条记录通过逗号分隔符进行分隔，或者其他分隔符
* 第一条记录需要包含有字段列表来标识文件的所有数据
* 必须的字段包括有 shortname（短名），fullname（长名），和 category（分类）';
$string['uploadcoursespreview'] = '课程上传预览';
$string['uploadcoursesresult'] = '课程上传结果';
