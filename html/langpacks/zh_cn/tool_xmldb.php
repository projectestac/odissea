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
 * Strings for component 'tool_xmldb', language 'zh_cn', version '4.4'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = '实际';
$string['addpersistent'] = '添加必需的持续字段';
$string['aftertable'] = '放在此表后：';
$string['back'] = '后退';
$string['backtomainview'] = '返回主视图';
$string['cannotuseidfield'] = '不能插入“id”字段。它是自动编号的列';
$string['change'] = '更改';
$string['charincorrectlength'] = '字符字段的不正确长度';
$string['check_bigints'] = '查询不正确 DB 整数';
$string['check_defaults'] = '查找不一致的默认值';
$string['check_foreign_keys'] = '搜索无效的外键';
$string['check_indexes'] = '查找缺失的数据库索引';
$string['check_oracle_semantics'] = '查找长度不正确的语义';
$string['checkbigints'] = '检查整数';
$string['checkdefaults'] = '检查默认值';
$string['checkforeignkeys'] = '检查外键';
$string['checkindexes'] = '检查索引';
$string['checkoraclesemantics'] = '检查语义';
$string['completelogbelow'] = '（查看下面完整的搜索日志）';
$string['confirmcheckbigints'] = '此功能将在 Moodle 服务器中搜索 <a href=“https://tracker.moodle.org/browse/MDL-11038”>可能的错误整数字段</a>，自动生成（但不执行！）所需的 SQL 语句，以正确定义数据库中的所有整数。

一旦生成，你就可以复制这样的语句，并使用你最喜欢的SQL接口安全地执行它们（在这样做之前不要忘记备份你的数据）。

强烈建议在执行错误整数搜索之前，先运行 Moodle 版本的最新（+ 版本）。

此功能不会对数据库执行任何操作（仅从中读取），因此可以随时安全地执行。';
$string['confirmcheckdefaults'] = '此功能将在 Moodle 服务器中搜索不一致的默认值，生成（但不执行）所需的 SQL 语句以正确定义所有默认值。

一旦生成，你就可以复制这样的语句，并使用你最喜欢的SQL接口安全地执行它们（在这样做之前不要忘记备份你的数据）。

强烈建议在执行不一致的默认值搜索之前，先运行 Moodle 版本的最新 （+ 版本） 。

此功能不会对数据库执行任何操作（仅从中读取），因此可以随时安全地执行。';
$string['confirmcheckforeignkeys'] = '此功能将搜索可能违反 install.xml定义中定义的外键的情况。（Moodle 当前不会在数据库中生成实际的外键约束，这就是可能存在无效数据的原因。

强烈建议在执行搜索可能违反外键的情况之前，先运行 Moodle 版本的最新 （+ 版本） 。

此功能不会对数据库执行任何操作（仅从中读取），因此可以随时安全地执行。';
$string['confirmcheckindexes'] = '此功能将在您的 Moodle 服务器中搜索可能缺失的索引，自动生成（但不执行！）所需的 SQL 语句以保持所有内容的更新。

一旦生成，你就可以复制这样的语句，并使用你最喜欢的SQL接口安全地执行它们（在这样做之前不要忘记备份你的数据）。

强烈建议在执行缺失索引搜索之前，先运行 Moodle 版本的最新（+ 版本）。

此功能不会对数据库执行任何操作（仅从中读取），因此可以随时安全地执行。';
$string['confirmcheckoraclesemantics'] = '此功能将在 Moodle 服务器中使用 BYTE 语义搜索 <a href=“https://tracker.moodle.org/browse/MDL-29322”>Oracle varchar2 列</a>，自动生成（但不执行！）所需的 SQL 语句，以将所有列转换为使用 CHAR 语义（更适合跨数据库兼容性和增加内容最大长度）。

一旦生成，你就可以复制这样的语句，并使用你最喜欢的SQL接口安全地执行它们（在这样做之前不要忘记备份你的数据）。

强烈建议在执行 BYTE 语义搜索之前，先运行 Moodle 版本的最新（+ 版本）。

此功能不会对数据库执行任何操作（仅从中读取），因此可以随时安全地执行。';
$string['confirmdeletefield'] = '您是否非常确定要删除此字段：';
$string['confirmdeleteindex'] = '您是否非常确定要删除此索引：';
$string['confirmdeletekey'] = '您是否非常确定要删除此键值：';
$string['confirmdeletetable'] = '您是否非常确定要删除此表：';
$string['confirmdeletexmlfile'] = '您是否非常确定要删除此文件：';
$string['confirmrevertchanges'] = '您是否非常确定要恢复对此所做的改变：';
$string['create'] = '创建';
$string['createtable'] = '创建表：';
$string['defaultincorrect'] = '不正确的缺省值';
$string['delete'] = '删除';
$string['delete_field'] = '删除字段';
$string['delete_index'] = '删除索引';
$string['delete_key'] = '删除键值';
$string['delete_table'] = '删除表';
$string['delete_xml_file'] = '删除 XML 文件';
$string['doc'] = '文档';
$string['docindex'] = '文档索引：';
$string['documentationintro'] = '本文档从XMLDB数据库定义中直接生成。它只有英文版。';
$string['down'] = '向下';
$string['duplicate'] = '复制';
$string['duplicatefieldname'] = '同名字段已经存在';
$string['duplicatefieldsused'] = '使用了重复的字段';
$string['duplicateindexname'] = '索引名重复';
$string['duplicatekeyname'] = '同名键值已经存在';
$string['duplicatetablename'] = '同名表已经存在';
$string['edit'] = '编辑';
$string['edit_field'] = '编辑字段';
$string['edit_field_save'] = '保存字段';
$string['edit_index'] = '编辑索引';
$string['edit_index_save'] = '保存索引';
$string['edit_key'] = '编辑键值';
$string['edit_key_save'] = '保存键值';
$string['edit_table'] = '编辑表';
$string['edit_table_save'] = '保存表';
$string['edit_xml_file'] = '编辑 XML 文件';
$string['enumvaluesincorrect'] = '枚举字段中不正确的值';
$string['expected'] = '预期';
$string['extensionrequired'] = '抱歉 - 此动作需要调用PHP扩展“{$a}”。如果您要使用此特性，请安装此扩展。';
$string['extraindexesfound'] = '发现额外的索引';
$string['field'] = '字段';
$string['fieldnameempty'] = '字段名为空';
$string['fields'] = '字段';
$string['fieldsnotintable'] = '字段在表中不存在';
$string['fieldsusedinindex'] = '此字段被用做索引';
$string['fieldsusedinkey'] = '此字段被用作主键。';
$string['filemodifiedoutfromeditor'] = '警告：在使用XMLDB编辑时，文件保存将会覆盖本地修改。';
$string['filenotwriteable'] = '文件不可写';
$string['fkunknownfield'] = '表 {$a->tablename} 的外键 {$a->keyname} 指向参照表 {$a->reftable} 上的一个不存在的字段 {$a->reffield}。';
$string['fkunknowntable'] = '表 {$a->tablename} 的外键 {$a->keyname} 指向一个不存在的表 {$a->reftable}。';
$string['fkviolationdetails'] = '表{$a->tablename}的{$a->numrows}行数据中，有{$a->numviolations}行的外键{$a->keyname}是无效的。';
$string['float2numbernote'] = '注意：虽然XMLDB完全支持“float”字段，但仍建议用“number”字段代替它。';
$string['floatincorrectdecimals'] = '浮点字段的小数位数不正确';
$string['floatincorrectlength'] = '浮点字段的长度不正确';
$string['generate_all_documentation'] = '所有文档';
$string['generate_documentation'] = '文档';
$string['gotolastused'] = '定位到上次使用的文件';
$string['incorrectfieldname'] = '不正确的名字';
$string['incorrectindexname'] = '索引名不正确';
$string['incorrectkeyname'] = '键名有错';
$string['incorrecttablename'] = '表名不正确';
$string['index'] = '索引';
$string['indexes'] = '索引';
$string['indexnameempty'] = '索引名为空';
$string['integerincorrectlength'] = '整数字段的长度不正确';
$string['key'] = '键值';
$string['keynameempty'] = '键名不可为空';
$string['keys'] = '键值';
$string['listreservedwords'] = '保留字列表<br/>（用来保持 <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB 保留字</a>的更新)';
$string['load'] = '载入';
$string['main_view'] = '主视图';
$string['masterprimaryuniqueordernomatch'] = '您的外键中的所有字段的定义顺序，都必须与它们在对应的表中的UNIQUE KEY中的定义顺序相同。';
$string['missing'] = '缺失';
$string['missingindexes'] = '发现缺失的索引';
$string['mustselectonefield'] = '您必须选择一个字段来查看与字段相关的动作！';
$string['mustselectoneindex'] = '您必须选择一个索引来查看与索引相关的动作！';
$string['mustselectonekey'] = '您必须选择一个键值来查看与键值相关的动作！';
$string['new_table_from_mysql'] = '从 MySQL 建新表';
$string['newfield'] = '新建字段';
$string['newindex'] = '新建索引';
$string['newkey'] = '新建键值';
$string['newtable'] = '创建新表';
$string['newtablefrommysql'] = '从 MySQL 建新表';
$string['nofieldsspecified'] = '未指定任何字段';
$string['nomasterprimaryuniquefound'] = '外键引用的列必须包含在被引用表的主 KEY 或唯一 KEY 中。请注意，位于 UNIQUE INDEX 中的列不够好。';
$string['nomissingorextraindexesfound'] = '没有发现缺失或额外的索引，因此不需要采取进一步动作。';
$string['noreffieldsspecified'] = '为指定任何对应字段';
$string['noreftablespecified'] = '未找到对应字段';
$string['noviolatedforeignkeysfound'] = '未发现无效的外键';
$string['nowrongdefaultsfound'] = '未发现不一致的默认值，您的数据库不需要做任何操作。';
$string['nowrongintsfound'] = '未发现整数错误，您的数据库不需要做任何操作。';
$string['nowrongoraclesemanticsfound'] = '未发现使用BYTE语义的Oracle列，您的数据库不需要做任何操作。';
$string['numberincorrectdecimals'] = '数字字段的小数位数不正确';
$string['numberincorrectlength'] = '数字字段的长度不正确';
$string['numberincorrectwholepart'] = '数字字段的整数部分太大';
$string['pendingchanges'] = '注意：您已经修改了此文件。它随时都可能被保存。';
$string['pendingchangescannotbesaved'] = '此文件有修改，但不能保存！请确认Web服务器对目录和它里面的install.xml文件都有写权限。';
$string['pendingchangescannotbesavedreload'] = '此文件中有更改，但无法保存！请确认目录和其中的“install.xml”都具有对 Web 服务器的写入权限。然后重新加载此页面，您应该能够保存这些更改。';
$string['persistentfieldscomplete'] = '已添加以下字段：';
$string['persistentfieldsconfirm'] = '是否要添加以下字段：';
$string['persistentfieldsexist'] = '以下字段已存在：';
$string['pluginname'] = 'XMLDB 编辑器';
$string['primarykeyonlyallownotnullfields'] = '主键不可为 null';
$string['privacy:metadata'] = 'XMLDB编辑器插件不存储任何个人数据。';
$string['reconcile_files'] = '查找需要调整的XMLDB文件';
$string['reconcile_files_intro'] = '该功能查看所有XMLDB文件的内容，以验证它们是否与从XMLDB编辑器生成的结果一致。

将显示需要调整（重新生成）的文件列表，可以使用XMLDB编辑器来修复它们。';
$string['reconcile_files_no'] = '所有文件都正常。无需调整。';
$string['reconcile_files_yes'] = '找到要调整的文件：';
$string['reconcilefiles'] = '调整XMLDB文件';
$string['reserved'] = '保留';
$string['reservedwords'] = '保留字';
$string['revert'] = '恢复';
$string['revert_changes'] = '恢复变化';
$string['save'] = '保存';
$string['searchresults'] = '查找结果';
$string['selectaction'] = '选择动作：';
$string['selectdb'] = '选择数据库：';
$string['selectfieldkeyindex'] = '选择字段/主键/索引：';
$string['selectonecommand'] = '为了查看 PHP 代码，请在列表中选择一个动作';
$string['selectonefieldkeyindex'] = '为了查看 PHP 代码，请在列表中选择一个字段/主键/索引';
$string['selecttable'] = '选择表：';
$string['table'] = '表';
$string['tablenameempty'] = '表名不能为空';
$string['tables'] = '表';
$string['unknownfield'] = '针对一个未知的字段';
$string['unknowntable'] = '针对一个未知的表格';
$string['unload'] = '卸载';
$string['up'] = '向上';
$string['view'] = '查看';
$string['view_reserved_words'] = '查看保留字';
$string['view_structure_php'] = '查看结构化 PHP';
$string['view_structure_sql'] = '查看结构化 SQL';
$string['view_table_php'] = '查看表 PHP';
$string['view_table_sql'] = '查看表 SQL';
$string['viewedited'] = '查看编辑过的';
$string['vieworiginal'] = '查看原始代码';
$string['viewphpcode'] = '查看 PHP 代码';
$string['viewsqlcode'] = '查看 SQL 代码';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = '无效的外键';
$string['violatedforeignkeysfound'] = '发现无效的外键';
$string['violations'] = '无效';
$string['wrong'] = '错误';
$string['wrongdefaults'] = '发现错误的默认值';
$string['wrongints'] = '发现错误的整型数';
$string['wronglengthforenum'] = '枚举字段的长度不正确';
$string['wrongnumberofreffields'] = '对应字段个数有误';
$string['wrongoraclesemantics'] = '发现错误的Oracle BYTE语义';
$string['wrongreservedwords'] = '当前使用的保留字<br />（表名如果使用了$CFG->prefix，就不用留意这个问题）';
$string['yesextraindexesfound'] = '发现了以下附加索引。';
$string['yesmissingindexesfound'] = '<p>在您的数据库中发现了一些缺失的索引。以下是它们的详细信息以及使用您最喜欢的 SQL 接口执行以创建所有 SQL 语句所需的 SQL 语句。请记住先备份您的数据！</p>
<p>执行此操作后，强烈建议再次执行此实用程序，以检查是否找不到更多缺失的索引。</p>';
$string['yeswrongdefaultsfound'] = '<p>在您的数据库中发现了一些不一致的默认值。以下是它们的详细信息以及使用您最喜欢的 SQL 接口执行所需的 SQL 语句，以修复所有这些问题。请记住先备份您的数据！</p>
<p>执行此操作后，强烈建议再次执行此实用程序，以检查是否找不到更多不一致的默认值。</p>';
$string['yeswrongintsfound'] = '<p>在您的数据库中发现了一些错误的整数。以下是它们的详细信息以及使用您最喜欢的 SQL 接口执行以修复它们所需的 SQL 语句。请记住先备份您的数据！</p>
<p>修复它们后，强烈建议再次执行此实用程序，以检查是否找到了更多的错误整数。</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>在您的数据库中发现了一些使用 BYTE 语义的 Oracle 列。以下是它们的详细信息以及使用您最喜欢的 SQL 接口执行以转换它们所需的 SQL 语句。请记住先备份您的数据！</p>
<p>执行此操作后，强烈建议再次执行此实用程序，以检查是否不再发现错误的语义。</p>';
