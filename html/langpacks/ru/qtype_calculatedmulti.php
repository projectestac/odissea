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
 * Strings for component 'qtype_calculatedmulti', language 'ru', version '3.11'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Параметры выбора';
$string['answeroptions_help'] = 'Предлагаемый выбор формула ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Множественный Вычисляемый';
$string['pluginname_help'] = 'Множественные Вычисляемые вопросы устроены так же, как вопросы типа «Множественный выбор», с тем отличием, что ответами в них служат числовые результаты формул. Эти формулы составляются с использованием подстановочных знаков в фигурных скобках, которые заменяются конкретными значениями при прохождении теста. Например, ответом на вопрос «Какова площадь прямоугольника с длиной {L} и шириной {W}?» будет служить формула {= {L} * {W}}, где * означает умножение.';
$string['pluginnameadding'] = 'Добавление множественного Вычисляемого вопроса';
$string['pluginnameediting'] = 'Редактирование множественного Вычисляемого вопроса';
$string['pluginnamesummary'] = 'Множественные Вычисляемые вопросы устроены так же, как вопросы типа «Множественный выбор», с тем отличием, что ответами в них служат числовые результаты формул. Значения в формулах выбираются из заранее определенного набора значений случайным образом при прохождении теста.';
$string['privacy:metadata'] = 'Плагин «Тип вопроса Множественный Вычисляемый» не хранит никаких персональных данных.';
