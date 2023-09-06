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
 * Strings for component 'qtype_ddwtos', language 'ru', version '4.1'.
 *
 * @package     qtype_ddwtos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Шаблоны для еще {no} вариантов';
$string['answer'] = 'Ответ';
$string['blank'] = 'пусто';
$string['correctansweris'] = 'Верный ответ: {$a}';
$string['errorlimitedchoice'] = 'Вариант [[{$a}]] использовался более одного раза без установленного значения «Несколько». Пожалуйста, перепроверьте этот вопрос.';
$string['infinite'] = 'Несколько';
$string['pleaseputananswerineachbox'] = 'Пожалуйста, введите ответ в каждое поле';
$string['pluginname'] = 'Перетаскивание в текст';
$string['pluginname_help'] = 'Вопросы с перетаскиванием в текст требуют, чтобы отвечающий перетаскивал слова или фразы в нужные места в тексте вопроса. [[1]], [[2]], [[3]], ... используются в качестве заполнителей в тексте вопроса, а правильные ответы соответственно указаны как варианты ответов 1, 2, 3, ... . Варианты ответов могут быть сгруппированы таким образом, чтобы все ответы в определенной группе были окрашены так же, как пробелы для них в тексте вопроса. Варианты ответов, помеченные как «Несколько», могут использоваться более чем в одном месте.';
$string['pluginname_link'] = 'question/type/ddwtos';
$string['pluginnameadding'] = 'Добавить «Перетаскивание в текст»';
$string['pluginnameediting'] = 'Редактирование «Перетаскивание в текст»';
$string['pluginnamesummary'] = 'Пропущенные слова в тексте заполняются с помощью перетаскивания';
$string['privacy:metadata'] = 'Плагин «Тип вопроса Перетаскивание в текст» позволяет авторам вопросов устанавливать параметры по умолчанию как пользовательские настройки.';
$string['privacy:preference:defaultmark'] = 'Оценка по умолчанию, установленная для данного вопроса.';
$string['privacy:preference:penalty'] = 'Штраф за каждую неправильную попытку, когда вопросы задаются с использованием режимов поведения «Интерактивный с несколькими попытками» или «Адаптивный».';
$string['privacy:preference:shuffleanswers'] = 'Следует ли автоматически перемешивать ответы.';
