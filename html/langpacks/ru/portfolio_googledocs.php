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
 * Strings for component 'portfolio_googledocs', language 'ru', version '4.5'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID клиента';
$string['noauthtoken'] = 'От Google не получен ключ аутентификации. Пожалуйста, убедитесь, что Вы разрешили Moodle получить доступ к Вашей учетной записи Google.';
$string['nooauthcredentials'] = 'Требуются учетные данные OAuth';
$string['nooauthcredentials_help'] = 'Для использования плагина портфолио Google Drive необходимо настроить учетные данные OAuth в настройках портфолио.';
$string['nosessiontoken'] = 'Отсутствующий ключ сеанса препятствует экспорту в Google.';
$string['oauthinfo'] = '<p>Для использования этого плагина Вы должны зарегистрировать свой сайт в Google, как описано в документации <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>В процессе регистрации Вам нужно будет ввести следующий URL в качестве «Authorized Redirect URIs»:</p><p>{$a->callbackurl} </p><p>После регистрации Вам будет предоставлен ID клиента и ключ, которые могут быть использованы для настройки всех плагинов Google Drive.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Этот плагин отправляет внешние данные в связанную учетную запись Google. Он не хранит данные локально.';
$string['privacy:metadata:data'] = 'Персональные данные, передаваемые из подсистемы портфолио.';
$string['secret'] = 'Секрет';
$string['sendfailed'] = 'Не удалось файл {$a}  передать Google';
