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
 * Strings for component 'gradeimport_xml', language 'ru', branch 'MOODLE_34_STABLE'
 *
 * @package   gradeimport_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Ошибка - неправильный формат XML';
$string['errduplicategradeidnumber'] = 'Ошибка - в этом курсе есть две оценки с идентификатором «{$a}». Это невозможно.';
$string['errduplicateidnumber'] = 'Ошибка - дублирующийся id номер';
$string['errincorrectgradeidnumber'] = 'Ошибка - идентификатор «{$a}» из импортированного файла не соответствует какой-либо оценке.';
$string['errincorrectidnumber'] = 'Ошибка - некорректный ID';
$string['errincorrectuseridnumber'] = 'Ошибка - идентификатор «{$a}» из импортированного файла не соответствует какому-либо пользователю.';
$string['error'] = 'Произошла ошибка';
$string['errorduringimport'] = 'Во время попытки импорта произошла следующая ошибка: {$a}';
$string['fileurl'] = 'Адрес файла';
$string['fileurl_help'] = 'Поле «Адрес файла» предназначено для получения данных с удаленного сервера, например, из информационной системы с данными о студентах.';
$string['importxml'] = 'Импорт XML';
$string['importxml_help'] = 'Оценки могут быть импортированы из файла XML, содержащего ID пользователей и ID элементов. Для получения правильного формата сначала экспортируйте несколько оценок в файл XML, а затем просмотрите файл.';
$string['pluginname'] = 'XML файл';
$string['privacy:metadata'] = 'Плагин «Импорт оценок из XML» не хранит никаких персональных данных.';
$string['xml:publish'] = 'Опубликовывать ссылку для импорта оценок в формате XML';
$string['xml:view'] = 'Импортировать оценки из файла XML';
