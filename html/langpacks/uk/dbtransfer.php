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
 * Strings for component 'dbtransfer', language 'uk', version '4.4'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Перевірка структури вихідної таблиці';
$string['copyingtable'] = 'Копіювання таблиці {$a}';
$string['copyingtables'] = 'Копіювання контенту таблиці';
$string['creatingtargettables'] = 'Створення таблиці в цільовій базі даних';
$string['dbexport'] = 'Експорт бази даних';
$string['dbtransfer'] = 'Передача бази даних';
$string['differenttableexception'] = 'Структура таблиці {$a} не відповідна.';
$string['done'] = 'Гаразд';
$string['exportschemaexception'] = 'Поточна структура бази даних не відповідає всім install.xml файлам. <br />{$a}';
$string['importschemaexception'] = 'Поточна структура бази даних не відповідає всім install.xml файлам. <br />{$a}';
$string['importversionmismatchexception'] = 'Поточна версія {$a->currentver} відповідає експортованій версії {$a->schemaver}.';
$string['malformedxmlexception'] = 'Виявлено неправильний XML, продовження неможливе.';
$string['tablex'] = 'Таблиця {$a}:';
$string['unknowntableexception'] = 'У файлі експорту знайдено невідому таблицю {$a}';
