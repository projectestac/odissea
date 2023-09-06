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
 * Strings for component 'tool_uploaduser', language 'zh_cn', version '4.1'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = '允许删除';
$string['allowrenames'] = '允许改名';
$string['allowsuspends'] = '允许账户注销和激活';
$string['assignedsysrole'] = '指派的系统角色{$a}';
$string['clidefault'] = '默认值：';
$string['clierrorargument'] = '参数--{$a->name}的值无效。允许的值：{$a->values}';
$string['clifile'] = '包含用户数据的CSV文件的路径。必须提供。';
$string['clifilenotreadable'] = '文件{$a}不存在或不可读';
$string['clihelp'] = '打印出这个帮助信息。';
$string['climissingargument'] = '参数--{$a}是必需的';
$string['clititle'] = '命令行上传用户工具。';
$string['clivalidationerror'] = '验证错误：';
$string['csvdelimiter'] = 'CSV分隔符';
$string['defaultvalues'] = '默认值';
$string['deleteerrors'] = '删除出错';
$string['encoding'] = '编码';
$string['errormnetadd'] = '不能添加远程用户';
$string['errorprefix'] = '错误：';
$string['errors'] = '错误';
$string['examplecsv'] = '示例文本文件';
$string['examplecsv_help'] = '要使用示例文本文件，请下载后用文本或电子表格编辑器打开它。保持第一行不变，然后编辑下面几行（记录）并添加用户数据，必要时增加更多行。将该文件保存为CSV格式，然后上传。示例文本文件也可用于测试，因为你可以预览用户数据，并可以在创建用户账户之前选择取消该操作。';
$string['infoprefix'] = '信息：';
$string['invalidtheme'] = '主题“{$a}”未安装，将被忽略。';
$string['invalidupdatetype'] = '该选项不能与所选的上传类型一起选择。';
$string['invaliduserdata'] = '检测到用户{$a}的无效数据，该数据已被自动清除。';
$string['linex'] = '第{$a}行';
$string['nochanges'] = '未改变';
$string['notheme'] = '没有为此用户定义主题。';
$string['pluginname'] = '用户上传';
$string['privacy:metadata'] = '用户上传插件不存储任何个人数据。';
$string['renameerrors'] = '改名时出现错误';
$string['requiredtemplate'] = '必须的。您可能使用这里的语法(%l = lastname, %f = firstname, %u = username)。更多信息查看帮助和举例。';
$string['rowpreviewnum'] = '预览行数';
$string['unassignedsysrole'] = '未指派的系统角色{$a}';
$string['uploadpicture_baduserfield'] = '用户指定属性无效，请重试。';
$string['uploadpicture_cannotmovezip'] = '不能移动zip文件到临时目录。';
$string['uploadpicture_cannotprocessdir'] = '不能解压文件。';
$string['uploadpicture_cannotsave'] = '不能保存用户{$a}的图片，片，检查原图片文件。';
$string['uploadpicture_cannotunzip'] = '不能解压图片文件。';
$string['uploadpicture_invalidfilename'] = '图片文件名含有非法字符，跳过。';
$string['uploadpicture_overwrite'] = '覆盖已有的用户头像？';
$string['uploadpicture_userfield'] = '用来匹配图片的用户属性：';
$string['uploadpicture_usernotfound'] = '用户字段\'{$a->userfield}\'，值 \'{$a->uservalue}\' 不存在，跳过。';
$string['uploadpicture_userskipped'] = '跳过用户{$a}(已经有一张图片)';
$string['uploadpicture_userupdated'] = '{$a}的图片已更新。';
$string['uploadpictures'] = '上传头像';
$string['uploadpictures_help'] = '用户头像可以通过zip文件或图片文件上传。图像文件应按chosen-user-attribute.extension的形式命名。例如，用户user1234的头像文件名应为user1234.jpg。';
$string['uploaduser:uploaduserpictures'] = '上传头像';
$string['uploadusers'] = '上传用户';
$string['uploadusers_help'] = '可以通过文本文件上传（并能直接选课）用户。文件的格式如下：

* 文件的每行包含一条记录
* 每条记录是一系列被逗号（或其它分隔符）分隔的数据
* 第一行记录是字段名列表，定义文件的格式
* username、password、firstname、lastname和email字段名是必须的';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = '预览';
$string['uploadusersresult'] = '上传用户结果';
$string['useraccountupdated'] = '已更新用户数据';
$string['useraccountuptodate'] = '用户更新';
$string['userdeleted'] = '用户已删除';
$string['userrenamed'] = '已修改用户名';
$string['userscreated'] = '已创建(多个)用户';
$string['usersdeleted'] = '用户已删除';
$string['usersrenamed'] = '已修改(多个)用户名';
$string['usersskipped'] = '用户已跳过';
$string['usersupdated'] = '已更新(多个)用户信息';
$string['usersweakpassword'] = '密码较弱的用户';
$string['userthemesnotallowed'] = '用户主题未被启用，所以任何包含在上传用户文件中的主题都会被忽略。';
$string['uubulk'] = '选择大量用户操作';
$string['uubulkall'] = '所有用户';
$string['uubulknew'] = '新用户';
$string['uubulkupdated'] = '用户已更新';
$string['uucsvline'] = 'CSV 行';
$string['uulegacy1role'] = '（最初的学生）typeN=1';
$string['uulegacy2role'] = '（最初的教师）typeN=2';
$string['uulegacy3role'] = '（最初的无编辑权限教师）typeN=3';
$string['uunoemailduplicates'] = '不允许相同的Email地址';
$string['uuoptype'] = '上传类型';
$string['uuoptype_addinc'] = '添加全部。如果需要就向用户名追加数字';
$string['uuoptype_addnew'] = '只添加新用户，跳过已存在的用户';
$string['uuoptype_addupdate'] = '添加新用户，更新已存在的用户';
$string['uuoptype_update'] = '只更新已存在的用户';
$string['uupasswordcron'] = '由cron生成';
$string['uupasswordnew'] = '新用户密码';
$string['uupasswordold'] = '现有的用户密码';
$string['uustandardusernames'] = '将用户名规范化';
$string['uuupdateall'] = '用文件和默认值覆盖';
$string['uuupdatefromfile'] = '用文件覆盖';
$string['uuupdatemissing'] = '从文件和默认值中填充缺失值';
$string['uuupdatetype'] = '已存在用户详细信息';
$string['uuusernametemplate'] = '用户名模板';
$string['warningprefix'] = '警告:';
