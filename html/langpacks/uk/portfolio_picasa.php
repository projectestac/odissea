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
 * Strings for component 'portfolio_picasa', language 'uk', version '4.4'.
 *
 * @package     portfolio_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Код клієнта';
$string['noauthtoken'] = 'Аутентифікація не була отриман від Google. Будь ласка, переконайтеся,а що ви дозволяєте Moodle доступ до облікового запису Google';
$string['nooauthcredentials'] = 'Потрібні облікові дані OAuth';
$string['nooauthcredentials_help'] = 'Для використання модуля портфоліо Picasa необхідно налаштувати облікові дані OAuth в налаштуваннях портфоліо';
$string['oauthinfo'] = '<p>Для використання цього модуля ви повинні зареєструвати свій сайт в  Google, як описано в документації <a href="{$a->docsurl}">Google OAuth 2.0 </a>.</p><p>При реєстрації вам потрібно буде вказати  як \'Адресу перенаправлення авторизації\' такий URL:</p><p>{$a->callbackurl}</p>Після реєстрації вам буде надано Код клієнта та ключ, які можна використати для налаштування всіх модулів Google Drive та Picasa.</p>';
$string['pluginname'] = 'Picasa';
$string['secret'] = 'Ключ';
$string['sendfailed'] = 'Помилка передачі файлу {$a} до Picasa';
