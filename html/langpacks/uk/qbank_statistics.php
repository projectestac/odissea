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
 * Strings for component 'qbank_statistics', language 'uk', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Потрібна перевірка?';
$string['discrimination_index_help'] = 'Питання вказано як ймовірно, що потребує перевірки на основі статистики запитання. Наприклад, якщо учні отримають низький бал за запитання, але високий бал за весь тест, або високий бал за запитання, але низький бал за весь тест, то може виникнути проблема із запитанням, наприклад неправильна відповідь вважається правильною. Хоча статистика не безпомилкова; це лише підказка, що питання слід перевірити.';
$string['discriminative_efficiency'] = 'Дискримінаційна ефективність';
$string['discriminative_efficiency_help'] = 'Дискримінаційна ефективність – це статистична оцінка того, наскільки добре студенти оцінюють запитання, причому більш високе значення є кращим. Особливо низьке значення може вказувати на проблему з питанням. Дуже складне або просте запитання (з індексом об’єктів близько 0% або 100%) також може призвести до низького значення.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Індекс закладу';
$string['facility_index_help'] = 'Індекс об’єктів дає середню оцінку (у відсотках), отриману за запитання (усі версії) у всіх тестах, у яких було створено запитання. Більше значення зазвичай вказує на легше запитання.';
$string['likely'] = 'Ймовірно';
$string['na'] = 'N/A';
$string['pluginname'] = 'Статистика запитань';
$string['privacy:metadata'] = 'Плагін Question statistics Bank не зберігає персональні дані.';
$string['unlikely'] = 'Малоймовірно';
$string['verylikely'] = 'Ймовірно';
