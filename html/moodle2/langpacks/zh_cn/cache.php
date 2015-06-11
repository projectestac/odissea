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
 * Strings for component 'cache', language 'zh_cn', branch 'MOODLE_28_STABLE'
 *
 * @package   cache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['addinstance'] = '添加实例';
$string['addlocksuccess'] = '成功添加一个新的锁定实例';
$string['addnewlockinstance'] = '添加一个新的锁定实例';
$string['addstore'] = '添加 {$a}存储';
$string['addstoresuccess'] = '成功添加一个新的 {$a}存储';
$string['area'] = '区域';
$string['cacheadmin'] = '缓存管理';
$string['cacheconfig'] = '配置';
$string['cachedef_calendar_subscriptions'] = '日历订阅';
$string['cachedef_config'] = '修改配置信息';
$string['cachedef_coursecat'] = '特定用户的课程目录列表';
$string['cachedef_coursecatrecords'] = '课程目录记录';
$string['cachedef_coursecattree'] = '课程目录树';
$string['cachedef_coursecontacts'] = '课程联系人列表';
$string['cachedef_coursemodinfo'] = '有关每一个课程章节和单元的汇总信息';
$string['cachedef_databasemeta'] = '数据库元信息';
$string['cachedef_eventinvalidation'] = '事件无效';
$string['cachedef_externalbadges'] = '给特定用户的外部徽章';
$string['cachedef_gradecondition'] = '快取用户的分数已用来评价条件的可用性';
$string['cachedef_groupdata'] = '课程组信息';
$string['cachedef_htmlpurifier'] = 'HTML净化器-清除不必要的内容';
$string['cachedef_langmenu'] = '可用的语言列表';
$string['cachedef_locking'] = '锁定中';
$string['cachedef_navigation_expandcourse'] = '浏览可以展开的课程清单';
$string['cachedef_observers'] = '事件观察者';
$string['cachedef_plugin_manager'] = '插件管理员';
$string['cachedef_questiondata'] = '试题定义';
$string['cachedef_repositories'] = '库实例资料';
$string['cachedef_string'] = '语言字符串缓存';
$string['cachedef_suspended_userids'] = '列出每一课程的已休学用户';
$string['cachedef_userselections'] = '持续用户选择所用的资料';
$string['cachedef_yuimodules'] = 'YUI模块定义';
$string['cachelock_file_default'] = '默认文件锁定';
$string['cachestores'] = '缓存储存';
$string['caching'] = '缓存';
$string['component'] = '组件';
$string['confirmlockdeletion'] = '确认锁定删除';
$string['confirmstoredeletion'] = '确认存储删除';
$string['default_application'] = '默认应用程序储存';
$string['defaultmappings'] = '当没有映射时所用的储存';
$string['defaultmappings_help'] = '为缓存定义，如果你没有映射一个多个存储，那将使用默认存储。';
$string['default_request'] = '默认为请求要储存';
$string['default_session'] = '默认为SESSION要储存';
$string['defaultstoreactions'] = '默认为储存不能被修改';
$string['definition'] = '定义';
$string['definitionsummaries'] = '已知的缓存定义';
$string['delete'] = '删除';
$string['deletelock'] = '解除锁定';
$string['deletelockconfirmation'] = '你真的要删除 {$a} 锁定？';
$string['deletelockhasuses'] = '因为它被一个或多个储存使用，你不能删除这个实例锁定。';
$string['deletelocksuccess'] = '成功删除锁定';
$string['deletestore'] = '删除储存';
$string['deletestoreconfirmation'] = '你真的要删除"{$a}"储存？';
$string['deletestorehasmappings'] = '因为这个储存存在映射，所以你不能删除。在你删除它之前，请先删除所有映射。';
$string['deletestoresuccess'] = '成功删除缓存存储。';
$string['editdefinitionmappings'] = '{$a}定义储存映射。';
$string['editdefinitionsharing'] = '为{$a}编辑定义共享';
$string['editmappings'] = '编辑映射';
$string['editsharing'] = '编辑共享';
$string['editstore'] = '编辑储存';
$string['editstoresuccess'] = '成功编辑缓存存储。';
$string['ex_configcannotsave'] = '不能保存缓存配置信息到文件。';
$string['ex_nodefaultlock'] = '没有找到默认的锁定实例。';
$string['ex_unabletolock'] = '无法从缓存中获得锁定。';
$string['ex_unmetstorerequirements'] = '你目前不能使用这个存储，请查阅文档以决定它的请求。';
$string['gethit'] = '获取-找到';
$string['getmiss'] = '获取-没有找到';
$string['inadequatestoreformapping'] = '因为所知的定义，存储不能匹配请求。定义是不适当的，将不使用选择的存储，而用默认的存储进行替代。';
$string['invalidlock'] = '无效锁定';
$string['invalidplugin'] = '无效插件';
$string['invalidstore'] = '提供无效的缓存存储。';
$string['lockdefault'] = '默认';
$string['lockingmeans'] = '锁定机制';
$string['lockmethod'] = '锁定方法';
$string['lockmethod_help'] = '当为锁定所要求存储时，所用的方法。';
$string['lockname'] = '名称';
$string['locknamedesc'] = '名称必须是唯一的，且只能包含 a-zA-Z_。';
$string['locknamenotunique'] = '你选择的名称不是唯一的，请选择一个唯一的名称。';
$string['locksummary'] = '缓存锁实例概要';
$string['locktype'] = '类型';
$string['lockuses'] = '用户';
$string['mappingdefault'] = '（默认）';
$string['mappingfinal'] = '最后存储';
$string['mappingprimary'] = '主要存储';
$string['mappings'] = '存储映射';
$string['mode'] = '模型';
$string['mode_1'] = '应用';
$string['mode_2'] = '会话';
$string['mode_4'] = '请求';
$string['modes'] = '模型';
$string['nativelocking'] = '这个插件会处理他自己的锁定。';
$string['none'] = '无';
$string['plugin'] = '插件';
$string['pluginsummaries'] = '安装缓存存储';
$string['purge'] = '清除';
$string['purgedefinitionsuccess'] = '请求定义已成功清除';
$string['purgestoresuccess'] = '请求存储已成功清除';
$string['requestcount'] = '以{$a}请求来进行测试';
$string['rescandefinitions'] = '重新扫描定义';
