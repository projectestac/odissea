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
 * Strings for component 'qtype_shortanswer', language 'ru', version '3.11'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Добавить {no} варианта(ов) ответа(ов)';
$string['answer'] = 'Ответ: {$a}';
$string['answermustbegiven'] = 'Вы должны ввести для каждого варианта ответа оценку или отзыв.';
$string['answerno'] = 'Вариант ответа {$a}';
$string['caseno'] = 'Нет, регистр не имеет значения';
$string['casesensitive'] = 'Чувствительность к регистру';
$string['caseyes'] = 'Да, регистр учитывается';
$string['correctansweris'] = 'Правильный ответ: {$a}';
$string['correctanswers'] = 'Правильные ответы';
$string['filloutoneanswer'] = 'Вам необходимо указать хотя бы один возможный ответ. Пустые ответы не будут использоваться. Символ «*» можно использовать в качестве шаблона, соответствующего любым символам. Первый подходящий ответ будет использоваться для определения оценки и отзыва.';
$string['notenoughanswers'] = 'Этот тип вопроса требует не менее {$a} ответов.';
$string['pleaseenterananswer'] = 'Пожалуйста, введите ответ.';
$string['pluginname'] = 'Короткий ответ';
$string['pluginname_help'] = 'В качестве ответа на вопрос (который может включать изображение) студент впечатывает одно слово или короткую фразу. Можно указать несколько возможных правильных вариантов ответа, причем каждый с разной оценкой. Если выбран параметр «Учитывать регистр», то студент получит разные оценки за ответы «Слово» и «слово».';
$string['pluginnameadding'] = 'Добавление вопроса «Короткий ответ»';
$string['pluginnameediting'] = 'Редактирование вопроса «Короткий ответ».';
$string['pluginnamesummary'] = 'Позволяет вводить в качестве ответа одно или несколько слов. Ответы оцениваются путем сравнения с разными образцами ответов, в которых могут использоваться подстановочные знаки.';
$string['privacy:metadata'] = 'Плагин «Тип вопроса Короткий ответ» позволяет авторам вопросов устанавливать параметры по умолчанию как пользовательские настройки.';
$string['privacy:preference:defaultmark'] = 'Оценка по умолчанию, установленная для данного вопроса.';
$string['privacy:preference:penalty'] = 'Штраф за каждую неправильную попытку, когда вопросы задаются с использованием режимов поведения «Интерактивный с несколькими попытками» или «Адаптивный».';
$string['privacy:preference:usecase'] = 'Учитывать ли регистр в ответах.';
