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
 * Strings for component 'dbtransfer', language 'ru', version '4.1'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Проверка структуры таблиц исходной базы данных';
$string['copyingtable'] = 'Копирование таблицы {$a}';
$string['copyingtables'] = 'Копирование содержимого таблиц';
$string['creatingtargettables'] = 'Создание таблиц в целевой базе данных';
$string['dbexport'] = 'Экспорт базы данных';
$string['dbtransfer'] = 'Перенос базы данных';
$string['differenttableexception'] = 'Несоответствие структуры таблицы {$a}.';
$string['done'] = 'Выполнено';
$string['exportschemaexception'] = 'Текущая структура базы данных соответствует не всем файлам install.xml.<br /> {$a}';
$string['importschemaexception'] = 'Текущая структура базы данных соответствует не всем файлам install.xml<br />{$a}';
$string['importversionmismatchexception'] = 'Текущая версия {$a->currentver} не соответствует экспортируемой версии {$a->schemaver}.';
$string['malformedxmlexception'] = 'Обнаружен некорректный XML-файл, продолжение невозможно.';
$string['tablex'] = 'Таблица {$a}:';
$string['unknowntableexception'] = 'В файле экспорта обнаружена неизвестная таблица {$a}.';
