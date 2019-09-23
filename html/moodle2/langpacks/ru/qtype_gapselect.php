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
 * Strings for component 'qtype_gapselect', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   qtype_gapselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Шаблоны для еще {no} вариантов';
$string['answer'] = 'Ответ';
$string['choices'] = 'Варианты выбора';
$string['choicex'] = 'Вариант {no}';
$string['combinedcontrolnamegapselect'] = 'раскрывающийся список';
$string['combinedcontrolnamegapselectplural'] = 'раскрывающихся списков';
$string['correctansweris'] = 'Верный ответ: {$a}';
$string['errorblankchoice'] = 'Пожалуйста, проверьте варианты выбора: вариант {$a} пуст.';
$string['errormissingchoice'] = 'Пожалуйста, проверьте текст вопроса: вариант «{$a}» не найден среди вариантов выбора! Только номера ответов, которые указаны в вариантах выбора, могут быть использованы в качестве заполнителей.';
$string['errornoslots'] = 'Текст вопроса должен содержать метки-заполнители, например [[1]], для обозначения местонахождения пропущенных слов.';
$string['errorquestiontextblank'] = 'Вы должны ввести какой-либо текст.';
$string['group'] = 'Группа';
$string['pleaseputananswerineachbox'] = 'Пожалуйста, добавьте ответ в каждую ячейку';
$string['pluginname'] = 'Выбор пропущенных слов';
$string['pluginnameadding'] = 'Добавить вопрос «Выбор пропущенных слов»';
$string['pluginnameediting'] = 'Редактировать вопрос «Выбор пропущенных слов»';
$string['pluginname_help'] = 'Вопросы с выбором пропущенных слов требуют от респондента выбрать правильные ответы из выпадающих меню. [[1]], [[2]], [[3]], ... используются в качестве заполнителей в тексте вопроса, с правильными ответами, заданными в качестве вариантов выбора 1, 2, 3 соответственно. Дополнительные варианты выбора могут быть добавлены, чтобы усложнить вопрос. Варианты выбора могут быть сгруппированы, чтобы ограничить возможные ответы в каждом выпадающем меню.';
$string['pluginnamesummary'] = 'Пропущенные слова в тексте вопроса заполняются с помощью выпадающих меню.';
$string['privacy:metadata'] = 'Плагин «Выбор пропущенных слов» не хранит никаких персональных данных.';
$string['shuffle'] = 'Перемешать';
$string['tagsnotallowed'] = '{$a->tag} запрещен. (Можно использовать только {$a->allowed}.)';
$string['tagsnotallowedatall'] = '{$a->tag} запрещен. (Здесь нельзя использовать HTML.)';
