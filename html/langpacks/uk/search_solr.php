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
 * Strings for component 'search_solr', language 'uk', version '4.4'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Вказаний сервер Solr недоступний або вказаний індекс не існує.';
$string['connectionsettings'] = 'Налаштування з’єднання';
$string['errorcreatingschema'] = 'Помилка створення схеми Solr: {$a}';
$string['errorsolr'] = 'Пошукова система Solr повідомила про помилку: {$a}';
$string['errorvalidatingschema'] = 'Помилка перевірки схеми Solr: поле {$a->fieldname} не існує. Будь ласка,  <a href="{$a->setupurl}">перейдіть за цією ланкою</a>, щоб налаштувати обов’язкові поля.';
$string['extensionerror'] = 'Розширення РНР для Apache Solr не встановлено. Будь ласка, зверніться до документації.';
$string['fileindexing'] = 'Включити індексування файлів';
$string['fileindexing_help'] = 'Якщо ваша установка Solr підтримує це, ця функція дозволяє Moodle надсилати файли для індексації. <br/>Після ввімкнення цієї опції для додавання всіх файлів вам потрібно буде переіндексувати весь вміст сайту.';
$string['fileindexsettings'] = 'Налаштування індексування файлів';
$string['maxindexfilekb'] = 'Максимальний розмір файлу для індексування (Кб)';
$string['maxindexfilekb_help'] = 'Файли більше заданого об’єму (в кілобайтах) не будуть включені до індексування для пошуку. Якщо встановити в нуль, індексуватимуться файли будь-якого розміру.';
$string['minimumsolr4'] = 'Solr 4.0 - мінімальна версія необхідна для Moodle';
$string['missingconfig'] = 'Ваш сервер Apache Solr ще не налаштовано в Moodle.';
$string['multivaluedfield'] = 'Поле "{$a}" повернуло масив замість скаляра. Будь ласка, видаліть поточний індекс, створіть новий та запустіть setup_schema.php перед індексацією даних в Solr.';
$string['nodatafromserver'] = 'Немає даних від сервера';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Цей плагін надсилає дані назовні до пов’язаної пошукової системи Solr. Він не зберігає дані локально.';
$string['privacy:metadata:data'] = 'Персональні дані передаються з підсистеми пошуку.';
$string['schemafieldautocreated'] = 'Поле "{$a}" вже існує в схемі Solr. Можливо ви забулися запустити цей скрипт перед початком індексації даних і поля були автоматично створені у Solr. Будь ласка, видаліть поточний індекс, створіть новий та запустіть setup_schema.php перед індексацією даних в Solr.';
$string['schemasetupfromsolr5'] = 'Версія вашого сервера Solr нижча за 5.0. Цей скрипт може встановити вашу схему, лише якщо ваша версія Solr 5.0 або вище. Вам потрібно вручну встановити поля у вашій схемі відповідно до \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Пошукові запити';
$string['searchinfo_help'] = 'Поле для пошуку може бути визначено за допомогою префікса в пошуковому запиті \'title:\', \'content:\', \'name:\', або \'intro:\'. Наприклад, пошук для \'title:новини\' поверне результати для слова \'новини\' в заголовку.

Булеві оператори (\'AND\', \'OR\', \'NOT\') можуть використовуватися для комбінування або виключення слів.

Символи підстановки (\'*\' або \'?\' ) можуть використовуватися для заміни символів у пошуковому запиті.';
$string['setupok'] = 'Схема готова до використання.';
$string['solrauthpassword'] = 'Пароль аутентифікації HTTP';
$string['solrauthuser'] = 'Ім’я користувача аутентифікації HTTP';
$string['solrhttpconnectionport'] = 'Порт';
$string['solrhttpconnectiontimeout'] = 'Таймаут';
$string['solrhttpconnectiontimeout_desc'] = 'Таймаут з’єднання HTTP - максимальний час в секундах дозволений для передачі даних.';
$string['solrindexname'] = 'Назва індекса';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Рушій Solr не налаштований як пошукова машина';
$string['solrsecuremode'] = 'Режим безпеки';
$string['solrserverhostname'] = 'Назва хоста';
$string['solrserverhostname_desc'] = 'Назва домену для сервера Solr.';
$string['solrsetting'] = 'Налаштування Solr';
$string['solrsslcainfo'] = 'Назва SSL CA-сертифікату';
$string['solrsslcainfo_desc'] = 'Ім’я файлу, яке містить один або кілька СА-сертифікатів для перевірки з’єднання';
$string['solrsslcapath'] = 'Шлях до SSL CA-сертифікату';
$string['solrsslcapath_desc'] = 'Шлях до каталогу, де знаходяться кілька СА-сертифікатів для перевірки з’єднання';
$string['solrsslcert'] = 'SSL сертифікат';
$string['solrsslcert_desc'] = 'Назва файлу для закритого сертифікату у форматі РЕМ';
$string['solrsslkey'] = 'Ключ SSL';
$string['solrsslkey_desc'] = 'Назва файлу для закритого ключа у форматі РЕМ';
$string['solrsslkeypassword'] = 'Пароль ключа SSL';
$string['solrsslkeypassword_desc'] = 'Пароль файлу для закритого ключа у форматі РЕМ';
