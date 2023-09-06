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
 * Strings for component 'cachestore_redis', language 'zh_cn', version '4.1'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = '没有压缩。';
$string['compressor_php_gzip'] = '使用gzip压缩。';
$string['compressor_php_zstd'] = '使用Zstandard压缩。';
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
$string['serializer_igbinary'] = '二进制序列化程序。';
$string['serializer_php'] = '默认PHP序列化程序。';
$string['server'] = '服务器';
$string['server_help'] = '这将设置要使用的Redis服务器的主机名或IP地址。';
$string['task_ttl'] = '释放 Redis 缓存中过期条目使用的内存';
$string['test_password'] = '测试服务器密码';
$string['test_password_desc'] = 'Redis测试服务器密码。';
$string['test_serializer'] = '序列化程序';
$string['test_serializer_desc'] = '用于测试的序列化程序。';
$string['test_server'] = '测试服务器';
$string['test_server_desc'] = '用于测试的Redis服务器。';
$string['test_ttl'] = '测试 TTL';
$string['test_ttl_desc'] = '使用需要TTL（较慢的集合）的缓存运行性能测试。';
$string['usecompressor'] = '使用压缩器';
$string['usecompressor_help'] = '指定序列化后要使用的压缩器。它是在Moodle缓存API级别完成的，而不是在php redis级别。';
$string['useserializer'] = '使用序列化程序';
$string['useserializer_help'] = '指定用于序列化的序列化程序。
有效的序列化程序是 Redis::SERIALIZER_PHP 或 Redis::SERIALIZER_IGBINARY。
后者只有在phpredis配置了--enable-redis-igbinary选项并且加载了igbinary扩展时才被支持。';
