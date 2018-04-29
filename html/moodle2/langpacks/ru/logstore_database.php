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
 * Strings for component 'logstore_database', language 'ru', branch 'MOODLE_32_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Размер буфера';
$string['buffersize_help'] = 'Количество записей журнала событий, добавляемых в базу данных за одну операцию, используется для повышения производительности.';
$string['conectexception'] = 'Не удалось подключиться к базе данных.';
$string['create'] = 'Создание';
$string['databasecollation'] = 'Сравнение (collation) базы данных';
$string['databasehandlesoptions'] = 'Параметры соединения определяются базой данных';
$string['databasehandlesoptions_help'] = 'Заданы ли во внешней базе данных значения по умолчанию для параметров соединения (схема, collation), чтобы можно было не передавать их из moodle?';
$string['databasepersist'] = 'Постоянное соединение с базой данных';
$string['databaseschema'] = 'Схема базы данных';
$string['databasesettings'] = 'Настройки базы данных';
$string['databasesettings_help'] = 'Настройки соединения с внешней базой данных журнала: {$a}';
$string['databasetable'] = 'Таблица базы данных';
$string['databasetable_help'] = 'Имя таблицы, где будут храниться записи журнала. Эта таблица должна иметь структуру, идентичную той, которая используется стандартным журналом (mdl_logstore_standard_log).';
$string['filters'] = 'Фильтровать события';
$string['filters_help'] = 'Включить фильтры, которые предотвратят запись в журнал некоторых действий.';
$string['includeactions'] = 'Записывать в журнал события этих типов';
$string['includelevels'] = 'Записывать в журнал события этих образовательных уровней';
$string['logguests'] = 'Записывать в журнал действия гостей';
$string['other'] = 'Другие';
$string['participating'] = 'Участники';
$string['pluginname'] = 'Журнал событий во внешней базе данных';
$string['pluginname_desc'] = 'Способ хранения журнала событий, при котором данные сохраняются в таблице внешней базы данных.';
$string['read'] = 'Чтение';
$string['tablenotfound'] = 'Указанная таблица не найдена';
$string['teaching'] = 'Обучение';
$string['testingsettings'] = 'Тестирование настроек базы данных  ..';
$string['testsettings'] = 'Протестировать соединение';
$string['update'] = 'Обновление';
