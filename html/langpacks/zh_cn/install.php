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
 * Strings for component 'install', language 'zh_cn', version '4.4'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = '指定的管理目录不正确';
$string['admindirname'] = '管理目录';
$string['admindirsetting'] = '个别网站主机的/admin用在了如控制面板之类的特殊功能上。这与标准的Moodle管理页面冲突了。修改管理目录的名称并将新名称填写在这里就可以避免冲突。例如: <br /> <br /><b>moodleadmin</b><br /> <br />
这将修正Moodle中的管理链接。';
$string['admindirsettinghead'] = '设定管理目录...';
$string['admindirsettingsub'] = '个别网站主机的/admin用在了如控制面板之类的特殊功能上。这与标准的Moodle管理页面冲突了。修改管理目录的名称并将新名称填写在这里就可以避免冲突。例如: <br /> <br /><b>moodleadmin</b><br /> <br />
这将修正Moodle中的管理链接。';
$string['availablelangs'] = '可用语言包';
$string['caution'] = '原因';
$string['chooselanguage'] = '选择一种语言';
$string['chooselanguagehead'] = '选择一种语言';
$string['chooselanguagesub'] = '请选择在安装过程中使用的语言。这个语言也会成为网站的缺省语言，不过以后可以随时更改。';
$string['cliadminemail'] = '新的管理员电子邮件地址';
$string['cliadminpassword'] = '新管理用户密码';
$string['cliadminusername'] = '管理帐号用户名';
$string['clialreadyconfigured'] = '配置文件 config.php 已存在。请使用 admin/cli/install_database.php 为此站点安装 Moodle。';
$string['clialreadyinstalled'] = '配置文件 config.php 已存在。请使用 admin/cli/install_database.php 升级此站点的 Moodle。';
$string['cliinstallfinished'] = '安装圆满成功。';
$string['cliinstallheader'] = 'Moodle {$a}命令行安装程序';
$string['climustagreelicense'] = '在非交互模式下，您必须通过指定 --agree-license 选项来同意许可证';
$string['cliskipdatabase'] = '跳过数据库安装。';
$string['clisupportemail'] = '支持电子邮件地址';
$string['clitablesexist'] = '数据库表已经存在，命令行安装无法继续。';
$string['compatibilitysettings'] = '检查您的PHP设置...';
$string['compatibilitysettingshead'] = '检查您的PHP设置...';
$string['compatibilitysettingssub'] = '要正确地安装Moodle，您的服务器需要通过以下测试';
$string['configfilenotwritten'] = '安装脚本无法自动创建一个包含您设置的config.php文件，极可能是由于Moodle目录是不能写的。您可以复制如下的代码到Moodle根目录下的config.php文件中。';
$string['configfilewritten'] = '已经成功创建了config.php文件';
$string['configurationcomplete'] = '配置完毕';
$string['configurationcompletehead'] = '配置完毕';
$string['configurationcompletesub'] = 'Moodle会尝试将配置存储在您的Moodle根目录中。';
$string['database'] = '数据库';
$string['databasehead'] = '数据库设置';
$string['databasehost'] = '数据库主机';
$string['databasename'] = '数据库名';
$string['databasepass'] = '数据库密码';
$string['databaseport'] = '数据库服务端口';
$string['databasesocket'] = 'Unix套接字';
$string['databasetypehead'] = '选择数据库驱动';
$string['databasetypesub'] = 'Moodle支持若干种数据库服务器。如果您不知道该使用哪一种，请联系服务器管理员。';
$string['databaseuser'] = '数据用户名';
$string['dataroot'] = '数据目录';
$string['datarooterror'] = '找不到也无法创建您指定的“数据目录”，请更正路径或手工创建它。';
$string['datarootpermission'] = '数据目录权限';
$string['datarootpublicerror'] = '因指定的“数据目录”可以通过 Web 直接访问，您必须使用另一个目录。';
$string['dbconnectionerror'] = '无法连接到您指定的数据库，请检查您的数据库设置。';
$string['dbcreationerror'] = '数据库创建错误。无法用设定中的名称创建数据库。';
$string['dbhost'] = '服务器主机';
$string['dbpass'] = '密码';
$string['dbport'] = '端口';
$string['dbprefix'] = '表格名称前缀';
$string['dbtype'] = '类型';
$string['directorysettings'] = '<p>请确认此 Moodle 装置的位置。</p>

<p><b>网址：</b>
指定将访问 Moodle 的完整 Web 地址。如果您的网站可通过多个 URL 访问，请选择您的学生最常使用的。 不包括末尾斜杠。</p>

<p><b>Moodle 目录：</b>
指定此安装的完整目录路径并确保大写/小写正确。</p>

<p><b>数据目录：</b>
您需要一个 Moodle 可以保存上传文件的地方。 这个目录应可由 Web 服务器用户读取和写入（通常为 \'nobody\' 或 \'apache\'），但不得直接通过 WEB访问。如果不存在，安装程序将尝试创建它。</p>';
$string['directorysettingshead'] = '请确认安装Moodle的位置';
$string['directorysettingssub'] = '<<b>网址：</b>
指定将访问 Moodle 的完整 Web 地址。如果您的网站可通过多个 URL 访问，请选择您的学生最常使用的。 不包括末尾斜杠。
<br />
<br />
<b>Moodle 目录：</b>
指定此安装的完整目录路径并确保大写/小写正确。
<br />
<br />
<b>数据目录：</b>
您需要一个 Moodle 可以保存上传文件的地方。 这个目录必须可由 Web 服务器用户读取写入通常为 \'nobody\' 或 \'apache\'），但不得直接通过 WEB访问。如果不存在，安装程序将尝试创建它。';
$string['dirroot'] = 'Moodle 目录';
$string['dirrooterror'] = '“Moodle目录”的设置看上去不对——在那里找不到安装好的Moodle。下面的值已经重置了。';
$string['download'] = '下载';
$string['downloadlanguagebutton'] = '下载“{$a}”语言包';
$string['downloadlanguagehead'] = '下载语言包';
$string['downloadlanguagenotneeded'] = '您可以使用缺省的语言包“{$a}”继续安装过程。';
$string['downloadlanguagesub'] = '您现在可以下载一个语言包并以该种语言继续安装过程。<br /><br />如果您无法下载语言包，安装过程将会以英文继续。(当安装过程结束后，您就有机会下载并安装更多的语言包了。)';
$string['doyouagree'] = '您同意吗？(yes/no):';
$string['environmenthead'] = '检测您的运行环境...';
$string['environmentsub'] = '我们正在检查您系统中的某些组件是否符合需求';
$string['environmentsub2'] = '每个Moodle的发行版都有一些对PHP版本的最低要求和几个必须安装的PHP扩展。在每次安装和升级前会做完整的环境检查。如果您不知道如何安装新版或启用PHP扩展，请与服务器管理员联系。';
$string['errorsinenvironment'] = '环境检查失败！';
$string['fail'] = '失败';
$string['fileuploads'] = '上传文件';
$string['fileuploadserror'] = '这应当是开启的';
$string['fileuploadshelp'] = '<p>您的服务器好像关闭了文件上传功能。</p>

<p>您仍然可以继续安装Moodle，但没有这个功能，将不能上传课程文件或用户头像。</p>

<p>要激活文件上传，您（或您的系统管理员）需要修改系统的php.ini文件，将其中<b>file_uploads</b>的值改为\'1\'。</p>';
$string['inputdatadirectory'] = '数据目录：';
$string['inputwebadress'] = 'Web地址：';
$string['inputwebdirectory'] = 'Moodle 目录：';
$string['installation'] = '安装';
$string['invaliddbprefix'] = '前缀无效。 前缀只能由小写字母和下划线组成。';
$string['langdownloaderror'] = '很不幸，无法下载“{$a}”语言包。安装过程将以英文继续。';
$string['langdownloadok'] = '语言“{$a}”已经成功安装了。安装过程将会以此语言继续。';
$string['memorylimit'] = '内存限制';
$string['memorylimiterror'] = 'PHP内存限制设置的太低了...以后您会遇到问题的。';
$string['memorylimithelp'] = '<p>您服务器的PHP内存限制是{$a}。</p>

<p>这会使Moodle在将来运行是碰到内存问题，特别是您安装了很多模块并且/或者有很多用户。</p>

<p>我们建议可能的话把限制设定的高一些，譬如40M。有几种方法可以做到这一点：</p>
<ol>
<li>如果可以，重新编译PHP并使用<i>--enable-memory-limit</i>选项。这允许Moodle自己设定内存限制。</li>
<li>如果可以访问php.ini文件，您可以修改<b>memory_limit</b>的设置为其它值，如40M。如果您无法访问，可以让您的管理员帮您修改一下。</li>
<li>在一些PHP服务器上，您可以在Moodle目录中创建一个.htaccess文件并包含如下内容:
<blockquote>php_value memory_limit 40M</blockquote>
<p>然而，在一些服务器上这会让<b>所有</b>PHP页面无法正常工作(在访问页面时会有错误)，因此您可能不得不删除.htaccess文件。</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP 没有正确配置 MySQLi 扩展，无法与 MySQL 通信。请检查您的 php.ini 文件或重新编译 PHP。';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>数据库是存储大部分 Moodle 设置和数据的地方，必须在此处进行配置。</p>
<p>数据库名称、用户名和密码为必填字段； 表前缀是可选的。</p>
<p>数据库名称只能包含字母数字字符、美元 ($) 和下划线 (_)。</p>
<p>如果数据库当前不存在，并且您指定的用户有权限，Moodle 将尝试创建一个具有正确权限和设置的新数据库。</p>
<p>此驱动程序与旧版 MyISAM 引擎不兼容。</p>';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>数据库是大多数 Moodle 设置和数据存储的位置，必须在此处进行配置。</p>
<p>数据库名称、用户名和密码是必填字段;表前缀是可选的。</p>
<p>数据库名称只能包含字母数字字符、美元 （$） 和下划线 （_）。</p>
<p>如果数据库当前不存在，并且您指定的用户具有权限，则 Moodle 将尝试创建具有正确权限和设置的新数据库。</p>
<p>此驱动程序与传统的 MyISAM 引擎不兼容。</p>';
$string['nativemysqli'] = '改进的MySQL (native/mysqli)';
$string['nativemysqlihelp'] = '<p>数据库是大多数 Moodle 设置和数据存储的位置，必须在此处进行配置。</p>
<p>数据库名称、用户名和密码是必填字段;表前缀是可选的。</p>
<p>数据库名称只能包含字母数字字符、美元 （$） 和下划线 （_）。</p>
<p>如果数据库当前不存在，并且您指定的用户具有权限，则 Moodle 将尝试创建具有正确权限和设置的新数据库。</p>';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = '现在，您需要配置数据库，Moodle的大部分数据都将保存于此。
这个数据库必须已经创建，并且有用户名和密码可以访问它。必须设置表前缀。';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>数据库是大多数 Moodle 设置和数据存储的位置，必须在此处进行配置。</p>
<p>数据库名称、用户名、密码和表前缀是必填字段。</p>
<p>数据库必须已存在，并且用户必须具有对数据库的读取和写入访问权限。</p>';
$string['nativesqlsrv'] = 'SQL*服务器Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = '现在，您需要配置数据库，Moodle的大部分数据都将保存于此。
这个数据库必须已经创建，并且有用户名和密码可以访问它。必须设置表前缀。';
$string['nativesqlsrvnodriver'] = 'Microsoft 为 PHP 提供的 SQL Server 驱动程序未安装或者未正确配置。';
$string['ociextensionisnotpresentinphp'] = 'PHP的OCI8扩展并未安装正确，因此无法与Oracle通信。请检查您的php.ini文件或重新编译PHP。';
$string['pass'] = '通过';
$string['paths'] = '路径';
$string['pathserrcreatedataroot'] = '安装程序无法建立数据目录({$a->dataroot})。';
$string['pathshead'] = '确认路径';
$string['pathsrodataroot'] = '数据目录不可写';
$string['pathsroparentdataroot'] = '父目录({$a->parent})不可写。安装程序无法建立数据目录({$a->dataroot})。';
$string['pathssubadmindir'] = '有些网络主机使用/admin这个URL来访问控制面板或其它功能。很不幸，这个设置和Moodle管理页面的标准路径冲突。这个问题可以解决，只需在您的安装目录中把admin目录换名，然后把新名字输入到这里。例如<em>moodleadmin</em>。这么做会改变Moodle中的管理链接。';
$string['pathssubdataroot'] = '<p>Moodle 将在其中存储用户上传的所有文件内容的目录。</p>
<p>此目录应可由 Web 服务器用户（通常为 \'www-data\'、\'nobody\' 或 \'apache\'）读取和写入。</p>
<p>它不能通过 Web 直接访问。</p>
<p>如果该目录当前不存在，则在安装过程中将尝试创建该目录。</p>';
$string['pathssubdirroot'] = '<p>包含 Moodle 代码的目录的完整路径。</p>';
$string['pathssubwwwroot'] = '<p>将访问 Moodle 的完整地址，即用户在浏览器的地址栏中输入以访问Moodle 的地址。</p>
<p>无法使用多个地址访问 Moodle。如果您的网站可以通过多个地址访问，请选择最简单的地址并为其他每个地址设置永久重定向。</p>
<p>如果您的网站可以从 Internet 和内部网络（有时称为 Intranet）访问，请使用此处的公共地址。</p>
<p>如果当前地址不正确，请更改浏览器地址栏中的 URL 并重新开始安装。</p>';
$string['pathsunsecuredataroot'] = '数据目录所在位置不安全';
$string['pathswrongadmindir'] = '管理目录不存在';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP的PGSQL扩展并未安装正确，因此无法与PostgreSQL通信。请检查您的php.ini文件或重新编译PHP。';
$string['phpextension'] = '{$a} PHP扩展';
$string['phpversion'] = 'PHP版本';
$string['phpversionhelp'] = '<p>Moodle 需要至少 5.6.5 或 7.1 的 PHP 版本（7.0.x 有一些引擎限制）。</p>
<p>您当前运行的是版本 {$a}。</p>
<p>您必须升级 PHP 或移动到具有较新 PHP 版本的主机。</p>';
$string['releasenoteslink'] = '有关此版本 Moodle 的信息，请参阅 {$a} 的发行说明';
$string['safemode'] = '安全模式';
$string['safemodeerror'] = '在安全模式下运行Moodle可能会有麻烦';
$string['safemodehelp'] = '<p>Moodle 在开启安全模式时可能会遇到各种问题，尤其是可能不允许创建新文件。</p>

<p>安全模式通常仅由公共 Web 主机启用，因此您可能已经为您的 Moodle 网站找到一家新的网络托管公司。</p>

<p>如果您愿意，可以尝试继续安装，但预计以后会出现一些问题。</p>';
$string['sessionautostart'] = '自动开启会话';
$string['sessionautostarterror'] = '这应当是关闭的';
$string['sessionautostarthelp'] = '<p>Moodle需要会话支持，否则便无法正常工作。</p>

<p>通过修改php.ini文件可以激活会话支持...找找session.auto_start参数</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP的SQLite扩展配置不正确。请检查php.ini文件或者重新编译PHP。';
$string['upgradingqtypeplugin'] = '正在升级题目/类型插件';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = '您看到这个页面表明您已经成功地在您的计算机上安装并启用了<strong>{$a->packname} {$a->packversion}</strong>软件包。恭喜您！';
$string['welcomep30'] = '<strong>{$a->installername}</strong>的此发行版包含了可以创建<strong>Moodle</strong>运行环境的应用程序：';
$string['welcomep40'] = '这个软件包还包含了<strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>。';
$string['welcomep50'] = '此软件包中所有应用程序的使用均受其各自许可证的约束。完整的 <strong>{$a->installername}</strong> 软件包是 <a href="https://www.opensource.org/docs/definition_plain.html">开源</a>的，并在 <a href="https://www.gnu.org/copyleft/gpl.html">GPL </a>许可证下分发。';
$string['welcomep60'] = '接下来的页面会引导您通过一系列步骤在您的计算机上安装并配置好<strong>Moodle</strong>。您可以接受缺省的设置，或者根据需要修改它们。';
$string['welcomep70'] = '点击“向后”按钮以继续<strong>Moodle</strong>的安装过程。';
$string['wwwroot'] = '网站地址';
$string['wwwrooterror'] = '这个网站地址似乎是错的——在那里并没有安装好的Moodle。下面的值会被重置。';
