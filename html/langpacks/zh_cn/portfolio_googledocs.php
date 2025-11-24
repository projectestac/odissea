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
 * Strings for component 'portfolio_googledocs', language 'zh_cn', version '4.5'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = '客户端 ID';
$string['noauthtoken'] = '尚未收到来自 Google 的身份验证令牌。请确保您允许 Moodle 访问您的 Google 帐户';
$string['nooauthcredentials'] = '需要 OAuth 认证。';
$string['nooauthcredentials_help'] = '要使用 Google Drive 产品组合插件，您必须在产品组合设置中配置 OAuth 凭据。';
$string['nosessiontoken'] = '一个不存在的会话令牌阻止向 google 导出。';
$string['oauthinfo'] = '<p>要使用此插件，您必须按照文档 <a href="{$a->docsurl}">Google OAuth 2.0 设置中所述向 Google 注册</a>您的网站。</p><p>作为注册过程的一部分，您需要输入以下 URL 作为“授权重定向 URI”：</p><p>{$a->callbackurl}</p><p>注册后，您将获得可用于配置所有 Google Drive 插件的客户端 ID 和密钥。</p>';
$string['pluginname'] = 'Google 云盘';
$string['privacy:metadata'] = '此插件将数据从外部发送到链接的Google帐户，不在本地存储数据。';
$string['privacy:metadata:data'] = '从电子档案夹子系统传送的个人数据。';
$string['secret'] = '密匙';
$string['sendfailed'] = '文件 {$a} 未能成功传送到 google';
