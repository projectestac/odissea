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
 * Strings for component 'search_solr', language 'zh_cn', version '4.5'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = '指定的Solr服务器不可用或指定的索引不存在';
$string['connectionsettings'] = '连接设置';
$string['errorcreatingschema'] = '创建Solr模式时出错：{$a}';
$string['errorsolr'] = 'Solr搜索引擎报告了一个错误：{$a}';
$string['errorvalidatingschema'] = '验证Solr模式时出错：字段{$a->fieldname}不存在。请 <a href="{$a->setupurl}">按照此链接</a>设置所需字段。';
$string['extensionerror'] = '未安装Apache Solr PHP扩展。请检查文件。';
$string['fileindexing'] = '启用文件索引';
$string['fileindexing_help'] = '如果您的Solr搜索引擎安装支持它，这个特性允许Moodle发送文件以被索引。<br/>您将需要重新索引所有的站点内容，使所有的文件都能被添加。';
$string['fileindexsettings'] = '文件索引设置';
$string['maxindexfilekb'] = '要索引的最大文件大小（kB）';
$string['maxindexfilekb_help'] = '大于此KB的文件将不包括在搜索索引中。如果设置为零，任何大小的文件都将被索引。';
$string['minimumsolr4'] = 'Moodle至少需要Solr 4.0';
$string['missingconfig'] = '您的Apache Solr服务器尚未在Moodle中配置。';
$string['multivaluedfield'] = '字段"{$a}"返回的是数组而不是标量。请删除当前索引，创建一个新的索引，并在Solr中索引数据前运行setup_schema.php。';
$string['nodatafromserver'] = '没有来自服务器的数据';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = '该插件从外部发送数据到链接的Solr搜索引擎。它不在本地存储数据。';
$string['privacy:metadata:data'] = '从搜索子系统传递的个人数据。';
$string['schemafieldautocreated'] = '字段"{$a}"已经存在于Solr架构中。你可能忘了在索引数据之前运行这个脚本，而字段是由Solr自动创建的。请删除当前的索引，创建一个新的索引，并在Solr中索引数据前再次运行setup_schema.php。';
$string['schemasetupfromsolr5'] = '你的Solr服务器版本低于5.0。这个脚本只有在你的Solr版本是5.0或更高的时候才能设置你的模式。你需要根据\\search_solr\\document::get_default_fields_definition()手动设置你模式中的字段。';
$string['searchinfo'] = '搜索查询';
$string['searchinfo_help'] = '要搜索的字段可以通过在搜索查询前面上“title:”、“content:”、“name:”或“intro:”来指定。例如，搜索“title:news”将返回标题中带有“news”一词的结果。

布尔运算符（\'AND\'，\'OR\'，\'NOT\'）可用于组合或排除关键字。

通配符（“*”或“？”）可用于表示搜索查询中的字符。';
$string['setupok'] = '该模式已准备好使用。';
$string['solrauthpassword'] = 'HTTP身份验证密码';
$string['solrauthuser'] = 'HTTP身份验证用户名';
$string['solrhttpconnectionport'] = '端口';
$string['solrhttpconnectiontimeout'] = '超时';
$string['solrhttpconnectiontimeout_desc'] = 'HTTP连接超时是HTTP数据传输操作允许的最长时间（以秒为单位）。';
$string['solrindexname'] = '索引名';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr引擎不是已配置的搜索引擎';
$string['solrsecuremode'] = '安全模式';
$string['solrserverhostname'] = '主机名';
$string['solrserverhostname_desc'] = 'Solr服务器的域名。';
$string['solrsetting'] = 'Solr设置';
$string['solrsslcainfo'] = 'SSL CA证书名称';
$string['solrsslcainfo_desc'] = '保存一个或多个CA证书以验证对等方的文件名';
$string['solrsslcapath'] = 'SSL CA证书路径';
$string['solrsslcapath_desc'] = '包含多个CA证书的目录路径，以与对等方进行验证';
$string['solrsslcert'] = 'SSL证书';
$string['solrsslcert_desc'] = 'PEM格式的专用证书的文件名';
$string['solrsslkey'] = 'SSL密钥';
$string['solrsslkey_desc'] = 'PEM格式私钥的文件名';
$string['solrsslkeypassword'] = 'SSL密钥密码';
$string['solrsslkeypassword_desc'] = 'PEM格式私钥文件的密码';
