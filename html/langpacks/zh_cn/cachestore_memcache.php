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
 * Strings for component 'cachestore_memcache', language 'zh_cn', version '3.11'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = '启用集群服务器';
$string['clustered_help'] = '这是用来允许"读一次，设置多个"的功能。

这样做是要建立一个改进的存储设计，来达到负载平衡的目标。这一存储设计将会从一个服务器(通常是本地主机)快速读取，然后存放到许多服务器上(在这负载平衡的集群服务器)。对于读取频繁的缓存而言，这会节省很大的网络开销。

当启动这一设置，以上所列出的服务器将会用做快速读取。';
$string['clusteredheader'] = '拆分服务器';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Key prefix';
$string['prefix_help'] = '此前缀是用于 memcache 服务器上的所有键名。
*如果这台服务器上只运行着一个Moodle网站，请保留默认值。
*由于密钥长度限制，最多设置5个字符。';
$string['prefixinvalid'] = '无效的前缀。您只能使用A-Z，a-z，0-9和_。';
$string['servers'] = '服务器';
$string['servers_help'] = '在此设置memcache所使用的服务器。
每行定义一个服务器，包含一个服务器地址和选用的端口和权重。
如果沒有提供端口，将使用默认端口（11211）。
例如:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

如果*启用集群服务器*已被启用，那么这儿必须只能有一个服务器列表，它通常是本地服务器，如127.0.0.1或localhost。';
$string['serversclusterinvalid'] = '当启用集群时，只需要用到一个服务器。';
$string['sessionhandlerconflict'] = '警告：有一个memcache实例({$a})已经被设置为使用相同的memcache服务器作为会话(sessinos)。清除所有缓存将会导致会话也会被清除。';
$string['setservers'] = '设置服务器';
$string['setservers_help'] = '这是一个服务器列表，娄在缓存中的数据被更改时，它们也会被更改。它们通常是在集群中每个服务器的完整名称。
它**必须**包含在以上*服务器*列表中，即使使用不同的主机名称。

应该每一行设置一个服务器，并包含服务器地址和端口。
若没有提供端口(port)，就会使用默认端口(11211)。

例如：
<pre>
server.url.com
ipaddress:port
</pre>\'';
$string['testservers'] = '测试服务器';
$string['testservers_desc'] = '设置用来进行测试的一个或多个服务器。
若有设置一个服务器，那么memcache的性能表现可能在网站管理的缓存测试性能页面上进行测试。
例如：127.0.0.1::11211';
