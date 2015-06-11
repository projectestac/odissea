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
 * Strings for component 'atto_accessibilitychecker', language 'ru', branch 'MOODLE_28_STABLE'
 *
 * @package   atto_accessibilitychecker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['imagesmissingalt'] = 'Изображениям требуется альтернативный текст. Чтобы исправить это предупреждение, добавьте атрибут ALT к используемым тегам IMG. Пустой атрибут ALT может быть использован, но только в том случае, когда изображение является чисто декоративным и не несет никакой информации.';
$string['needsmorecontrast'] = 'Цвета основного текста и фона не контрастны. Чтобы исправить это предупреждение, измените основной или фоновый цвет так, чтобы текст легче читался.';
$string['needsmoreheadings'] = 'Много текста не имеет заголовков. Заголовки облегчают пользователям чтение с экрана и делают навигацию по странице более удобной.';
$string['nowarnings'] = 'Поздравляем, никаких проблем с доступностью нет!';
$string['pluginname'] = 'Проверка доступности';
$string['report'] = 'Отчет о доступности:';
$string['tablesmissingcaption'] = 'К таблицам желательны названия. Хотя названия не являются обязательными для каждой таблицы, в большинстве случаев они очень полезны.';
$string['tablesmissingheaders'] = 'В таблицах желательно использовать заголовки строк и столбцов.';
$string['tableswithmergedcells'] = 'В таблицах не желательно применять объединенные ячейки. Несмотря на то, что стандарт разметки таблиц используется в течение многих лет, некоторые браузеры до сих пор не в полной мере поддерживают сложные таблицы. По возможности, попробуйте «выравнять» таблицу и избежать объединенных ячеек.';
