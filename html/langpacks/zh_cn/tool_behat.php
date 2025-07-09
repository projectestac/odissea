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
 * Strings for component 'tool_behat', language 'zh_cn', version '4.4'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = '此管理工具帮助开发人员和测试编写人员创建描述Moodle功能的.feature文件并自动运行它们。下面列出了可在.feature文件中使用的步骤定义。';
$string['allavailablesteps'] = '所有可用的步骤定义';
$string['errorbehatcommand'] = '运行behat CLI命令时出错。尝试从CLI中手动运行“{$a}--help”，以了解有关该问题的更多信息。';
$string['errorcomposer'] = '未安装编写器依赖项。';
$string['errordataroot'] = '$CFG->behat_datatoot未设置或无效。';
$string['errorsetconfig'] = '需要在config.php中设置$CFG->behat_dataroot、$CFG->behat_prefix和$CFG->behat_wwwroot。';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot 的值需要与 $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot and $CFG->phpunit_prefix 的值不同。<br/>或者如果 $CFG->behat_prefix 相同, $CFG->behat_dbname 或者 $CFG->behat_dbhost 需要与 $CFG->phpunit_dbname 和 $CFG->phpunit_dbhost 和 $CFG->dbname 和 $CFG->dbhost 不同。';
$string['fieldvalueargument'] = '字段值参数';
$string['fieldvalueargument_help'] = '此参数应由字段值完成。字段类型有很多，包括简单的字段类型（如复选框、选择或文本区域）或复杂的字段类型（如日期选择器）。有关预期字段值的详细信息，请参阅开发文档 <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a>。';
$string['giveninfo'] = '给定设置环境的过程';
$string['infoheading'] = '信息';
$string['installinfo'] = '阅读{$a}以获取安装和测试执行信息';
$string['newstepsinfo'] = '请阅读{$a}，以了解如何添加新步骤定义的信息。';
$string['newtestsinfo'] = '阅读{$a}以获取有关如何编写新测试的信息';
$string['nostepsdefinitions'] = '没有任何符合这个过滤器的步骤定义';
$string['pluginname'] = '验收测试';
$string['privacy:metadata'] = '验收测试插件不存储任何个人数据。';
$string['stepsdefinitionscomponent'] = '区域';
$string['stepsdefinitionscontains'] = '包含';
$string['stepsdefinitionsfilters'] = '步骤定义';
$string['stepsdefinitionstype'] = '类型';
$string['theninfo'] = '然后进行检查以确保结果符合预期';
$string['unknownexceptioninfo'] = 'Selenium或您的浏览器出现问题。请确保您使用的是最新版本的Selenium。错误：';
$string['viewsteps'] = '筛选';
$string['warndirrootconfigfound'] = '在{$a}发现了一个配置文件。该文件不会自动更新，可能会过时。我们建议删除这个文件。';
$string['wheninfo'] = '当引发事件的行为';
$string['wrongbehatsetup'] = 'behat设置有问题，因此无法列出步骤定义：<b>{$a->errormsg}</b><br/><br/>请检查：<ul>
<li>$CFG->behat_dataroot、$CFG->behat_prefix和$CFG->behat_wwwroot在config.php中被设置，其值与$CFG->dataroot、$CFG->prefix和$CFG->wwwroot不同</li>
<li>您从Moodle根目录运行了“{$a->behatinit}”</li>
<li>依赖项安装在供应商/中，{$a->behatcommand}文件具有执行权限。</li></ul>';
