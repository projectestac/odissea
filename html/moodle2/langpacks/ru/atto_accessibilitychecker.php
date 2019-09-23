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
 * Strings for component 'atto_accessibilitychecker', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   atto_accessibilitychecker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytext'] = 'Пустой текст';
$string['entiredocument'] = 'Весь документ';
$string['imagesmissingalt'] = 'Для изображений требуется указать альтернативный текст. Чтобы решить эту проблему, добавьте атрибут ALT к используемым тегам IMG. Пустой атрибут ALT может быть использован, но только в том случае, когда изображение является чисто декоративным и не несет никакой информации.';
$string['needsmorecontrast'] = 'Цвета основного текста и фона не контрастны. Чтобы исправить это предупреждение, измените основной или фоновый цвет так, чтобы текст легче читался.';
$string['needsmoreheadings'] = 'Введен большой объем текста, но нет заголовков. Заголовки облегчают пользователям чтение с экрана и делают навигацию по странице более удобной.';
$string['nowarnings'] = 'Поздравляем, никаких проблем с доступностью не обнаружено!';
$string['pluginname'] = 'Проверка доступности для лиц с ограниченными возможностями';
$string['privacy:metadata'] = 'Плагин atto_accessibilitychecker не хранит никаких персональных данных.';
$string['report'] = 'Отчет о доступности:';
$string['tablesmissingcaption'] = 'Желательно указать названия таблиц. Хотя не обязательно, чтобы у каждой таблицы было название, в большинстве случаев названия оказываются очень полезны.';
$string['tablesmissingheaders'] = 'В таблицах желательно использовать заголовки строк и столбцов.';
$string['tableswithmergedcells'] = 'В таблицах не желательно применять объединенные ячейки. Несмотря на то, что стандарт разметки таблиц используется в течение многих лет, некоторые браузеры до сих пор не в полной мере поддерживают сложные таблицы. По возможности, попробуйте упростить таблицу и избежать объединенных ячеек.';
