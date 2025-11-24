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
 * Strings for component 'portfolio_googledocs', language 'uk', version '4.5'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Код клієнта';
$string['noauthtoken'] = 'Аутентифікація не була підтверджена від google. Будь ласка, переконайтеся, що ви дозволяєте moodle доступ до вашого облікового запису google.';
$string['nooauthcredentials'] = 'Потрібні облікові дані OAuth';
$string['nooauthcredentials_help'] = 'Для використання модуля портфоліо Google Docs потрібно налаштувати облікові дані OAuth в налаштуваннях портфоліо.';
$string['nosessiontoken'] = 'Сесія не створена для експорту до google.';
$string['oauthinfo'] = '<p>Для використання цього модуля ви повинні зареєструвати свій сайт в  Google, як описано в документації <a href="{$a->docsurl}">Google OAuth 2.0 </a>.</p><p> У рамках процесу реєстрації вам потрібно буде ввести таку URL-адресу як «Authorized Redirect URI»:
</p><p>{$a->callbackurl}</p> Після реєстрації вам буде надано ідентифікатор клієнта та секрет, які можна використовувати для налаштування всіх плагінів Google Drive.
</p>';
$string['pluginname'] = 'Google Docs';
$string['privacy:metadata'] = 'Цей плагін надсилає дані назовні до зв’язаного облікового запису Google. Він не зберігає дані локально.';
$string['privacy:metadata:data'] = 'Персональні дані, що передаються з підсистеми портфеля.';
$string['secret'] = 'Ключ';
$string['sendfailed'] = 'Файл {$a} не вдалося перенести до google';
