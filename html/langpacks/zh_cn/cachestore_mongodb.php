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
 * Strings for component 'cachestore_mongodb', language 'zh_cn', version '4.1'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = '数据库';
$string['database_help'] = '要使用的数据库名称';
$string['extendedmode'] = '使用扩展键';
$string['extendedmode_help'] = '如果启用，在使用该插件时将会使用完整的密钥集。这还没有在内部使用，但是如果您选择的话，您可以轻松地手动搜索和调查MongoDB插件。开启这个功能会增加一点开销，所以请在你需要的时候再启动。';
$string['password'] = '密码';
$string['password_help'] = '连接数据库所使用的用户密码';
$string['pleaseupgrademongo'] = '你正在使用旧版本的PHP扩展Mongo(<1.3)。以后将会放弃对旧版Mongo扩展的支持，请考虑升级这一扩展。';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = '作为缓存功能的一部分，MongoDB 缓存存储插件可以短暂地存储数据。这些数据存储在MongoDB服务器上，在该服务器上，数据会定期被清除。';
$string['privacy:metadata:mongodb:data'] = '在缓存中存储的各种数据';
$string['replicaset'] = '副本集';
$string['replicaset_help'] = '要连接到的副本集的名称。如果给定了此选项，则将通过在种子上使用ismaster数据库命令来确定主节点，因此驱动程序可能最终连接到一个甚至未列出的服务器。';
$string['server'] = '服务器';
$string['server_help'] = '这是你要使用的服务器连接字符串。你可以使用逗号分隔的字符串来指定多个服务器。';
$string['testserver'] = '测试服务器';
$string['testserver_desc'] = '用于测试的服务器的连接字符串。如果已指定测试服务器，则可以使用管理块中的“缓存性能”页面来测试MongoDB性能。例如：mongodb:/127.0.0.1:27017';
$string['username'] = '用户名称';
$string['username_help'] = '连接到服务器所使用的用户名称';
$string['usesafe'] = '使用安全';
$string['usesafe_help'] = '如果启用，将在插入、获取和删除操作期间使用“使用安全”选项。如果指定了副本集，则无论如何都会强制执行此操作。';
$string['usesafevalue'] = '“使用安全”的值';
$string['usesafevalue_help'] = '您可以选择为“使用安全”提供特定值。这将确定操作在被视为已完成之前必须在其上完成的服务器数量。';
