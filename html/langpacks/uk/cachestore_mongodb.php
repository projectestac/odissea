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
 * Strings for component 'cachestore_mongodb', language 'uk', version '4.5'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'База даних';
$string['database_help'] = 'Назва бази даних, яка буде використовуватися.';
$string['extendedmode'] = 'Використовувати розширені ключі';
$string['extendedmode_help'] = 'Якщо ввімкнено, під час роботи з плагіном використовуватимуться повні набори ключів. Це ще не використовується внутрішньо, але дозволить вам легко шукати та досліджувати плагін MongoDB вручну, якщо ви так забажаєте. Увімкнення цього параметра призведе до невеликих витрат, тому його слід робити лише в разі потреби.';
$string['password'] = 'Пароль';
$string['password_help'] = 'Пароль користувача, який використовує з’єднання.';
$string['pleaseupgrademongo'] = 'Ви використовуєте стару версію розширення РНР Mongo (<1.3). В майбутньому старі версії підтримуватися не будуть. Подумайте про оновлення.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'Плагін MongoDB cachestore коротко зберігає дані як частину функцій кешування. Ці дані зберігаються на сервері MongoDB, де дані регулярно видаляються.';
$string['privacy:metadata:mongodb:data'] = 'Різні дані, що зберігаються в кеші';
$string['replicaset'] = 'Набір реплік';
$string['replicaset_help'] = 'Назва набору реплік для підключення. Якщо набір реплік вказано, то основна репліка буде визначена з використанням команди ismaster бази даних. Таким чином, драйвер може в решті підключитися до сервера, якого навіть не має у списку.';
$string['server'] = 'Сервер';
$string['server_help'] = 'Це рядок підключення до сервера, який ви збираєтеся використовувати. Можна вказати кілька серверів, розділяючи їх комами.';
$string['testserver'] = 'Тестовий сервер';
$string['testserver_desc'] = 'Це рядок підключення до тестового сервера, який ви збираєтеся використовуватися. Якщо тестовий сервер був зазначений, то продуктивність MongoDB може бути перевірена за допомогою сторінки продуктивності кеша в блоці управління. Як приклад: mongodb://127.0.0.1:27017';
$string['username'] = 'Ім’я користувача';
$string['username_help'] = 'Ім’я користувача, яке використовується при створенні з’єднання';
$string['usesafe'] = 'Використовувати безпечні операції';
$string['usesafe_help'] = 'При включенні цього параметра під час операцій вставки, отримання та видалення буде використовуватися параметр safe. Якщо ви вказали набір реплік, то цей параметр буде включено примусово.';
$string['usesafevalue'] = 'Значення рівня безпеки';
$string['usesafevalue_help'] = 'Ви можете вказати певне значення для параметра safe. Це число визначає кількість серверів, на який операція повинна успішно виконатися, щоб вважатися закінченою.';
