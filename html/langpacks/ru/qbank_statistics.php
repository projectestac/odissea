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
 * Strings for component 'qbank_statistics', language 'ru', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Требуется проверка?';
$string['discrimination_index_help'] = 'Вопрос указывается как требующий проверки на основании статистики вопроса. Например, если учащиеся получили низкий балл за вопрос, но высокий балл за весь тест, или высокий балл за вопрос, но низкий балл за весь тест, то в вопросе может быть проблема, например, неправильный ответ был выставлен как правильный. Статистика не является непогрешимой; это лишь намек на то, что вопрос следует проверить.';
$string['discriminative_efficiency'] = 'Эффективность дискриминации';
$string['discriminative_efficiency_help'] = 'Эффективность дискриминации - это статистическая оценка того, насколько хорошо вопрос оценивает учащихся, причем более высокое значение является лучшим. Очень низкое значение может указывать на проблему с вопросом. Слишком трудный или легкий вопрос (с индексом сложности, близким к 0% или 100%) также может привести к низкому значению.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Индекс сложности';
$string['facility_index_help'] = 'Индекс сложности дает среднюю оценку (в процентах), полученную по данному вопросу (все варианты) во всех тестах, где этот вопрос пытались решить. Более высокое значение обычно указывает на более легкий вопрос.';
$string['likely'] = 'Вероятно';
$string['na'] = 'Н/Д';
$string['pluginname'] = 'Статистика вопросов';
$string['privacy:metadata'] = 'Плагин банка вопросов «Статистика вопросов» не хранит никаких личных данных.';
$string['unlikely'] = 'Маловероятно';
$string['verylikely'] = 'Очень вероятно';
