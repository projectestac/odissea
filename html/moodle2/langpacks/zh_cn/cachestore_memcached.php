<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_memcached', language 'zh_cn', branch 'MOODLE_32_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = '缓冲区写入';
$string['bufferwrites_help'] = '启用或关闭“I/O缓冲”。启用后会把指令保存到缓冲区，而不是发送。任何检索数据的操作会将缓冲区写入远程连接。退出或关闭连接也将缓冲数据写入远程连接。';
$string['clustered'] = '启用集群服务器';
$string['clusteredheader'] = '拆分服务器';
$string['clustered_help'] = '这是用来允许"读一次，设置多个"的功能。

这样做是要建立一个改进的存储设计，来达到负载平衡的目标。这一存储设计将会从一个服务器(通常是本地主机)快速读取，然后存放到许多服务器上(在这负载平衡的集群服务器)。对于读取频繁的缓存而言，这会节省很大的网络开销。

当启动这一设置，以上所列出的服务器将会用做快速读取。';
$string['hash'] = 'Hash演算';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = '默认（一次一个）';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = '指定用于该项目的Hash演算。每种Hash演算都各有其优缺点，如果不清楚请保持默认值。';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = '共享缓存';
$string['pluginname'] = 'Memcached';
$string['prefix'] = '前缀键';
$string['prefix_help'] = '为你的项目设置专门“域”，使你在一个memcached上建立多个memcached缓存。<be />最多设置16个字符，以确保不会超过最大键长引起问题。';
$string['prefixinvalid'] = '无效的前缀。您只能使用A-Z，a-z，0-9和_。';
$string['serialiser_igbinary'] = 'igbinary系列化';
$string['serialiser_json'] = 'JSON系列化';
$string['serialiser_php'] = '默认PHP系列化';
$string['servers'] = '服务器';
$string['serversclusterinvalid'] = '当集群服务已启用时，只需要一个服务器';
$string['servers_help'] = '在此设置memcached所使用的服务器。
每行定义一个服务器，包含一个服务器地址和选用的端口和权重。
如果沒有提供端口，将使用默认端口（11211）。

例如:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

如果*启用集群服务器*已被启用，那么这儿必须只能有一个服务器列表，它通常是本地服务器，如127.0.0.1或localhost。';
$string['sessionhandlerconflict'] = '警告：有一个memcached实例({$a})已经被设置为使用相同的memcached服务器作为会话(sessinos)。清除所有缓存将会导致会话也会被清除。';
$string['setservers'] = '设置服务器';
$string['setservers_help'] = '这是一个服务器列表，当缓存中的数据被更改时，它们也会被更改。它们通常是在集群中每个服务器的完整名称。
它**必须**包含在以上*服务器*列表中，即使使用不同的主机名称。

应该每一行设置一个服务器，并包含服务器地址和端口。
若没有提供端口(port)，就会使用默认端口(11211)。

例如：
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = '测试服务器';
$string['testservers_desc'] = '设置用来进行测试的一个或多个服务器。
若有设置一个服务器，那么memcache的性能表现可能在网站管理的缓存测试性能页面上进行测试。
例如：127.0.0.1:11211';
$string['usecompression'] = '使用压缩';
$string['usecompression_help'] = '启用或禁用有效负载压缩。当启用时，文件长度越过一定界线(目前是100字节)，将会在存储时被压缩，且在读取时解压缩。';
