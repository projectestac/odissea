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
 * Strings for component 'repository_googledocs', language 'ru', branch 'MOODLE_32_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID клиента';
$string['configplugin'] = 'Настроить модуль «Google Drive»';
$string['googledocs:view'] = 'Просматривать хранилище файлов «Google Drive»';
$string['oauthinfo'] = '<p>Для использования этого плагина Вы должны зарегистрировать свой сайт в Google, как описано в документации <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>В процессе регистрации Вам нужно будет ввести следующий URL в качестве «Authorized Redirect URIs»:</p><p>{$a->callbackurl} </p><p>После регистрации Вам будет предоставлен ID клиента и ключ, которые могут быть использованы для настройки всех плагинов Google Drive и Picasa.</p><p>Пожалуйста, обратите внимание, что Вам необходимо включить службу «Drive API».</p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Ключ';
$string['servicenotenabled'] = 'Доступ не настроен. Убедитесь, что служба «Drive API» включена.';
