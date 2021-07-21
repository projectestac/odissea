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
 * Strings for component 'availability_grade', language 'ru', version '3.11'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Элементы оценки кэшируются для оценивания условия доступности';
$string['cachedef_scores'] = 'Оценки пользователя кэшируются для оценивания условия доступности';
$string['description'] = 'Необходимо, чтобы студенты достигли указанной оценки.';
$string['error_backwardrange'] = 'При указании диапазона оценок минимальная оценка должна быть ниже максимальной.';
$string['error_invalidnumber'] = 'Диапазон оценок должен быть указан с действительными процентами.';
$string['error_selectgradeid'] = 'Вы должны выбрать элемент оценки для условия оценки.';
$string['label_max'] = 'Максимальная  оценка в процентах (исключается)';
$string['label_min'] = 'Минимальная оценка в процентах (включительно)';
$string['missing'] = '(недостающий элемент курса)';
$string['option_max'] = 'должна быть <';
$string['option_min'] = 'должна быть ≥';
$string['pluginname'] = 'Ограничение по оценкам';
$string['privacy:metadata'] = 'Плагин ограничения доступности «Ограничение по оценкам» не хранит никаких персональных данных.';
$string['requires_any'] = 'Вы получили оценку за <strong>{$a}</strong>';
$string['requires_max'] = 'Вы получили достойную оценку за <strong>{$a}</strong>';
$string['requires_min'] = 'Вы получили необходимую оценку за <strong>{$a}</strong>';
$string['requires_notany'] = 'Вы не получили оценку за <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Вы не получили заданную оценку за <strong>{$a}</strong>';
$string['requires_range'] = 'Вы получили заданную оценку за <strong>{$a}</strong>';
$string['title'] = 'Оценка';
