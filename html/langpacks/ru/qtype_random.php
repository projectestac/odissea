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
 * Strings for component 'qtype_random', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_random
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Можно ли при случайном выборе вопроса из категории использовать для случайного вопроса вручную оцениваемые вопросы?';
$string['includingsubcategories'] = 'Включая подкатегории';
$string['pluginname'] = 'Случайный';
$string['pluginnameediting'] = 'Редактирование случайного вопроса';
$string['pluginname_help'] = 'Случайный вопрос — это не вопрос как таковой, это способ добавления случайного вопроса из указанной категории в элемент курса.';
$string['privacy:metadata'] = 'Плагин «Тип вопроса Случайный» не хранит никаких персональных данных';
$string['randomqname'] = 'Случайный ({$a})';
$string['randomqnametags'] = 'Случайный ({$a->category}, теги: {$a->tags})';
$string['randomqplusname'] = 'Случайный ({$a} и подкатегории)';
$string['randomqplusnamecoursecattags'] = 'Случайный (Любая категория внутри категории курса{$a->category}, теги: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Случайный (Любая категория в этом курсе, теги: {$a->tags})';
$string['randomqplusnamemoduletags'] = 'Случайный (Любая категория этого теста, теги: {$a->tags})';
$string['randomqplusnamesystemtags'] = 'Случайный (Любая категория уровня системы (сайта), теги: {$a->tags})';
$string['randomqplusnametags'] = 'Случайный ({$a->category} и подкатегории, теги: {$a->tags})';
$string['selectedby'] = '{$a->questionname} выбран из {$a->randomname}';
$string['selectmanualquestions'] = 'Для случайных вопросов могут использоваться вручную оцениваемые вопросы';
