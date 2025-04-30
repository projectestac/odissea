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
 * Strings for component 'availability_completion', language 'ru', version '4.4'.
 *
 * @package     availability_completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_previous_cache'] = 'Информация о зависимости от предыдущего активного элемента';
$string['description'] = 'Требовать от студентов выполнения (или невыполнения) другого элемента курса.';
$string['error_selectcmid'] = 'Вы должны выбрать элемент курса для условия выполнения.';
$string['error_selectcmidpassfail'] = 'Вы должны выбрать элемент с заданным условием выполнения «Требуется оценка».';
$string['label_cm'] = 'Элемент курса или ресурс';
$string['label_completion'] = 'Требуется состояние «Выполнено»';
$string['missing'] = '(элемент курса отсутствует)';
$string['option_complete'] = 'элемент должен быть отмечен как выполненный';
$string['option_fail'] = 'элемент должен быть выполнен с оценкой ниже проходного балла';
$string['option_incomplete'] = 'элемент не должен быть отмечен как выполненный';
$string['option_pass'] = 'элемент должен быть выполнен с оценкой выше проходного балла';
$string['option_previous'] = 'Предыдущий активный элемент с выполнением';
$string['pluginname'] = 'Ограничение по выполнению элемента';
$string['privacy:metadata'] = 'Плагин ограничения доступности «Ограничение по выполнению элемента» не хранит никаких персональных данных.';
$string['requires_complete'] = 'Элемент курса <strong>{$a}</strong> должен быть отмечен как выполненный';
$string['requires_complete_fail'] = 'Элемент курса <strong>{$a}</strong> должен быть отмечен как выполненный, оценка должна быть ниже проходного балла';
$string['requires_complete_pass'] = 'Элемент курса <strong>{$a}</strong> должен быть отмечен как выполненный, оценка должна быть выше проходного балла';
$string['requires_incomplete'] = 'Элемент курса <strong>{$a}</strong> не должен быть отмечен как выполненный';
$string['requires_not_complete_fail'] = 'Элемент курса <strong>{$a}</strong> не должен быть отмечен как выполненный, оценка должна быть ниже проходного балла';
$string['requires_not_complete_pass'] = 'Элемент курса <strong>{$a}</strong> не должен быть отмечен как выполненный, оценка должна быть выше проходного балла';
$string['requires_previous_complete'] = '<strong> Предыдущий активный элемент с выполнением </strong> помечен как выполненный.';
$string['requires_previous_complete_fail'] = '<strong>Предыдущий активный элемент с выполнением </strong> завершен неуспешно.';
$string['requires_previous_complete_pass'] = '<strong>Предыдущий активный элемент с выполнением </strong> завершен успешно.';
$string['requires_previous_incomplete'] = '<strong>Предыдущий активный элемент с выполнением </strong> не завершен.';
$string['requires_previous_not_complete_fail'] = '<strong>Предыдущий активный элемент с выполнением </strong> не завершен и пройден неуспешно.';
$string['requires_previous_not_complete_pass'] = '<strong>Предыдущий активный элемент с выполнением </strong> не завершен и пройден успешно.';
$string['title'] = 'Выполнение элемента';
