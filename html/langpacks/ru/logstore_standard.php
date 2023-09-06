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
 * Strings for component 'logstore_standard', language 'ru', version '4.1'.
 *
 * @package     logstore_standard
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Размер буфера записи';
$string['jsonformat'] = 'Формат JSON';
$string['jsonformat_desc'] = 'Использовать стандартный формат JSON вместо сериализованных данных PHP в поле «other» базы данных.';
$string['pluginname'] = 'Стандартный журнал событий';
$string['pluginname_desc'] = 'Способ хранения журнала событий в таблице базы данных Moodle.';
$string['privacy:metadata:log'] = 'Перечень прошлых событий';
$string['privacy:metadata:log:anonymous'] = 'Было ли событие помечено как анонимное';
$string['privacy:metadata:log:eventname'] = 'Название события';
$string['privacy:metadata:log:ip'] = 'IP-адрес, использованный во время события.';
$string['privacy:metadata:log:origin'] = 'Происхождение события.';
$string['privacy:metadata:log:other'] = 'Дополнительная информация о событии';
$string['privacy:metadata:log:realuserid'] = 'ID реального пользователя в случае, когда он действует от имени другого пользователя.';
$string['privacy:metadata:log:relateduserid'] = 'ID пользователя, связанного с этим событием';
$string['privacy:metadata:log:timecreated'] = 'Время, когда произошло событие';
$string['privacy:metadata:log:userid'] = 'ID пользователя, который вызвал это событие';
$string['taskcleanup'] = 'Очистка таблицы стандартного журнала событий';
