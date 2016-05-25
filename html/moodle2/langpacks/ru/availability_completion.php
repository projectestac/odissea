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
 * Strings for component 'availability_completion', language 'ru', branch 'MOODLE_28_STABLE'
 *
 * @package   availability_completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Требовать от студентов завершения (или не завершения) другого элемента курса.';
$string['error_selectcmid'] = 'Вы должны указать элемент курса с состоянием завершения.';
$string['label_cm'] = 'Активный элемент или ресурс';
$string['label_completion'] = 'Требуется состояние завершения';
$string['missing'] = '(недостающий элемент курса)';
$string['option_complete'] = 'элемент должен быть отмечен как выполненный';
$string['option_fail'] = 'элемент должен быть завершен с оценкой ниже проходного балла';
$string['option_incomplete'] = 'элемент не должен быть отмечен как выполненный';
$string['option_pass'] = 'элемент должен быть завершен с оценкой выше проходного балла';
$string['pluginname'] = 'Ограничение по завершению элемента';
$string['requires_complete'] = 'Активный элемент <strong>{$a}</strong> отмечен завершенным';
$string['requires_complete_fail'] = 'Активный элемент <strong>{$a}</strong> является завершенным (не допускается)';
$string['requires_complete_pass'] = 'Активный элемент <strong>{$a}</strong> является завершенным (пропускается)';
$string['requires_incomplete'] = 'Активный элемент <strong>{$a}</strong> является незавершенным';
$string['requires_not_complete_fail'] = 'Активный элемент <strong>{$a}</strong> является незавершенным (не допускается)';
$string['requires_not_complete_pass'] = 'Активный элемент <strong>{$a}</strong> является незавершенным (пропускается)';
$string['title'] = 'Завершение элемента';
