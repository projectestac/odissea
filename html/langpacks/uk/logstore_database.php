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
 * Strings for component 'logstore_database', language 'uk', version '4.4'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Розмір буфера';
$string['buffersize_help'] = 'Кількість записів журналу подій, які додаються в базу даних за одну операцію, використовується для підвищення продуктивності.';
$string['conectexception'] = 'Не вдалося під’єднатися до бази даних';
$string['create'] = 'Створення';
$string['databasecollation'] = 'Порівняння бази даних';
$string['databasehandlesoptions'] = 'База даних обробляє параметри';
$string['databasehandlesoptions_help'] = 'Чи обробляє віддалена база даних власні параметри.';
$string['databasepersist'] = 'Постійне з’єднання з базою даних';
$string['databaseschema'] = 'Схема бази даних';
$string['databasesettings'] = 'Налаштування бази даних';
$string['databasesettings_help'] = 'Налаштування з’єднання із зовнішньою базою даних журналу: {$a}';
$string['databasetable'] = 'Таблиця бази даних';
$string['databasetable_help'] = 'Назва таблиці, де будуть зберігатися записи журналу. Ця таблиця повинна мати структуру, ідентичну тій, яка використовується стандартним журналом  (mdl_logstore_standard_log).';
$string['filters'] = 'Фільтрувати події';
$string['filters_help'] = 'Включити фільтри, які будуть запобігати записуванню до журналу визначених подій';
$string['includeactions'] = 'Запис до журналу подій цих типів';
$string['includelevels'] = 'Включити дії з цими навальними рівнями';
$string['jsonformat'] = 'Формат JSON';
$string['jsonformat_desc'] = 'Використовуйте стандартний формат JSON замість серійних даних PHP у полі бази даних «інша».';
$string['logguests'] = 'Записувати дії гостей';
$string['other'] = 'Інше';
$string['participating'] = 'Учасники';
$string['pluginname'] = 'Журнал подій у зовнішній базі даних';
$string['pluginname_desc'] = 'Спосіб збереження журналу подій, при якому дані зберігаються в таблиці зовнішньої бази даних.';
$string['privacy:metadata:log'] = 'Збірка минулих подій';
$string['privacy:metadata:log:anonymous'] = 'Чи позначено подію як анонімну';
$string['privacy:metadata:log:eventname'] = 'Назва події';
$string['privacy:metadata:log:ip'] = 'IP-адреса, яка використовується під час події';
$string['privacy:metadata:log:origin'] = 'Походження події';
$string['privacy:metadata:log:other'] = 'Додаткова інформація про подію';
$string['privacy:metadata:log:realuserid'] = 'Ідентифікатор реального користувача, який стоїть за подією під час маскування користувача.';
$string['privacy:metadata:log:relateduserid'] = 'Ідентифікатор користувача, пов’язаного з цією подією';
$string['privacy:metadata:log:timecreated'] = 'Час, коли сталася подія';
$string['privacy:metadata:log:userid'] = 'Ідентифікатор користувача, який ініціював цю подію';
$string['read'] = 'Читання';
$string['tablenotfound'] = 'Визначену таблицю не знайдено';
$string['teaching'] = 'Викладачі';
$string['testingsettings'] = 'Тестування налаштувань бази даних...';
$string['testsettings'] = 'Перевірити з’єднання';
$string['update'] = 'Оновлення';
