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
 * Strings for component 'logstore_legacy', language 'uk', version '4.4'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'До журналу записана застаріла подія';
$string['loglegacy'] = 'Записувати дані в застарілу таблицю';
$string['loglegacy_help'] = 'Цей спосіб збереження журналу подій записує дані в застарілу таблицю журналу mdl_log. Ця функціональність замінена новими, функціональнішими та ефективнішими модулями збереження журналу. Ви повинні використовувати цей модуль лише тоді, якщо є старі користувацькі звіти, які отримують дані безпосередньо із застарілої таблиці журналу подій. Запис до застарілої таблиці збільшує навантаження, тому для підвищення продуктивності рекомендується відключити цей модуль, якщо в ньому немає потреби.';
$string['pluginname'] = 'Застарілий журнал подій';
$string['pluginname_desc'] = 'Модуль журналу подій, який зберігає записи подій у застарілій таблиці бази даних.';
$string['privacy:metadata:log'] = 'Збірка минулих подій';
$string['privacy:metadata:log:action'] = 'Опис дії';
$string['privacy:metadata:log:info'] = 'Додаткова інформація';
$string['privacy:metadata:log:ip'] = 'IP-адреса, яка використовується під час події';
$string['privacy:metadata:log:time'] = 'Час, коли відбувалася акція';
$string['privacy:metadata:log:url'] = 'URL-адреса, пов’язана з подією';
$string['privacy:metadata:log:userid'] = 'Ідентифікатор користувача, який виконав дію';
$string['taskcleanup'] = 'Очищення таблиці застарілого журналу подій';
