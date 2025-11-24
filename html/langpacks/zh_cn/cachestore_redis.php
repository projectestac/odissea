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
 * Strings for component 'cachestore_redis', language 'zh_cn', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'CA 文件路径';
$string['ca_file_help'] = '证书颁发机构文件的位置';
$string['clustermode'] = '集群模式';
$string['clustermode_help'] = '启用集群模式将运行 Redis 集群功能，让您的服务器能够为多个服务器提供服务，同时处理并发请求。';
$string['clustermodeunavailable'] = 'Redis 集群不可用，请确保 PHP Redis 扩展支持 Redis 集群功能。';
$string['compressor_none'] = '没有压缩。';
$string['compressor_php_gzip'] = '使用gzip压缩。';
$string['compressor_php_zstd'] = '使用Zstandard压缩。';
$string['connectiontimeout'] = '连接超时';
$string['connectiontimeout_help'] = '这将设置尝试连接到 Redis 服务器时的超时时间。';
$string['encrypt_connection'] = '使用 TLS 加密';
$string['encrypt_connection_help'] = '使用 TLS 连接到 Redis，请勿在 Redis 的主机名中使用“tls://”，而应使用此选项。';
$string['password'] = '密码';
$string['password_help'] = '这设置了Redis服务器的密码。';
$string['pluginname'] = 'Redis公司';
$string['prefix'] = '密钥前缀';
$string['prefix_help'] = '此前缀用于Redis服务器上的所有密钥名称。

* 如果您只有一个使用此服务器的Moodle实例，则可以将此值保留为默认值。
* 由于密钥长度限制，最多允许5个字符。';
$string['prefixinvalid'] = '⽆效的前缀。您只能使⽤a-z，A-Z， 0-9或 _。';
$string['privacy:metadata:redis'] = '作为缓存功能的一部分，Redis 缓存存储插件可以短暂地存储数据。这些数据存储在Redis服务器上，在该服务器的数据会被定期删除。';
$string['privacy:metadata:redis:data'] = '缓存中存储的各种数据';
$string['serializer_igbinary'] = '二进制序列化程序';
$string['serializer_php'] = '默认PHP序列化程序';
$string['server'] = '服务器';
$string['server_help'] = '用于测试的 Redis 服务器。

一些示例值：

* testredis.abc.com - 按主机名连接到 Redis 服务器（默认为端口 6379）。
* testredis.abc.com:1234 - 通过具有特定端口的主机名连接到 Redis 服务器。
* 1.2.3.4 - 通过 IP 地址（默认为端口 6379）连接到 Redis 服务器。
* 1.2.3.4：1234 - 通过具有特定端口的 IP 地址连接到 Redis 服务器。
* unix:///var/redis.sock - 使用 Unix 套接字连接到 Redis 服务器。
* /var/redis.sock - 使用 Unix 套接字（替代格式）连接到 Redis 服务器。
如果启用了集群模式，请指定用新行分隔的服务器，例如：<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

有关详细信息，请参阅 <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">接受客户端连接</a>和 <a href="https://redis.io/resources/clients/#php">Redis PHP 客户端</a>。';
$string['task_ttl'] = '释放 Redis 缓存中过期条目使用的内存';
$string['test_clustermode'] = '集群模式';
$string['test_clustermode_desc'] = '启用 Redis 集群模式下的测试';
$string['test_password'] = '测试服务器密码';
$string['test_password_desc'] = 'Redis测试服务器密码。';
$string['test_serializer'] = '序列化程序';
$string['test_serializer_desc'] = '用于测试的序列化程序。';
$string['test_server'] = '测试服务器';
$string['test_server_desc'] = '用于测试的 Redis 服务器。

一些示例值：

* testredis.abc.com - 按主机名连接到 Redis 服务器（默认为端口 6379）。
* testredis.abc.com:1234 - 通过具有特定端口的主机名连接到 Redis 服务器。
* 1.2.3.4 - 通过 IP 地址（默认为端口 6379）连接到 Redis 服务器。
* 1.2.3.4：1234 - 通过具有特定端口的 IP 地址连接到 Redis 服务器。
* unix:///var/redis.sock - 使用 Unix 套接字连接到 Redis 服务器。
* /var/redis.sock - 使用 Unix 套接字（替代格式）连接到 Redis 服务器。

如果启用了集群模式，请指定用新行分隔的服务器，例如：<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

有关详细信息，请参阅 <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">接受客户端连接</a>和 <a href="https://redis.io/resources/clients/#php">Redis PHP 客户端</a>。';
$string['test_ttl'] = '测试 TTL';
$string['test_ttl_desc'] = '使用需要TTL（较慢的集合）的缓存运行性能测试。';
$string['usecompressor'] = '使用压缩器';
$string['usecompressor_help'] = '指定序列化后要使用的压缩器。它是在Moodle缓存API级别完成的，而不是在php redis级别。';
$string['useserializer'] = '使用序列化程序';
$string['useserializer_help'] = '指定用于序列化的序列化程序。
有效的序列化程序是 Redis::SERIALIZER_PHP 或 Redis::SERIALIZER_IGBINARY。
后者只有在phpredis配置了--enable-redis-igbinary选项并且加载了igbinary扩展时才被支持。';
