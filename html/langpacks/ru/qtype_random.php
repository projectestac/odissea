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
 * Strings for component 'qtype_random', language 'ru', version '4.1'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Можно ли при случайном выборе вопроса из категории использовать для случайного вопроса вручную оцениваемые вопросы?';
$string['includingsubcategories'] = 'Включая подкатегории';
$string['pluginname'] = 'Случайный';
$string['pluginname_help'] = 'Случайный вопрос — это не вопрос как таковой, это способ добавления случайного вопроса из указанной категории в элемент курса.';
$string['pluginnameediting'] = 'Редактирование случайного вопроса';
$string['privacy:metadata'] = 'Плагин «Тип вопроса Случайный» не хранит никаких персональных данных';
$string['randomqname'] = 'Случайный ({$a})';
$string['randomqnamefromtop'] = 'Негодный случайный вопрос! Удалите этот вопрос.';
$string['randomqnamefromtoptags'] = 'Негодный случайный вопрос! Удалите этот вопрос.';
$string['randomqnametags'] = 'Случайный ({$a->category}, теги: {$a->tags})';
$string['randomqplusname'] = 'Случайный ({$a} и подкатегории)';
$string['randomqplusnamecourse'] = 'Случайный (из любой категории в этом курсе)';
$string['randomqplusnamecoursecat'] = 'Случайный (из любой категории внутри категорий курса {$a})';
$string['randomqplusnamecoursecattags'] = 'Случайный (Любая категория внутри категории курса{$a->category}, теги: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Случайный (Любая категория в этом курсе, теги: {$a->tags})';
$string['randomqplusnamemodule'] = 'Случайный (из любой категории теста)';
$string['randomqplusnamemoduletags'] = 'Случайный (Любая категория этого теста, теги: {$a->tags})';
$string['randomqplusnamesystem'] = 'Случайный ( из любой категории уровня сайта)';
$string['randomqplusnamesystemtags'] = 'Случайный (Любая категория уровня системы (сайта), теги: {$a->tags})';
$string['randomqplusnametags'] = 'Случайный ({$a->category} и подкатегории, теги: {$a->tags})';
$string['selectedby'] = '{$a->questionname} выбран из {$a->randomname}';
$string['selectmanualquestions'] = 'Для случайных вопросов могут использоваться вручную оцениваемые вопросы';
$string['taskunusedrandomscleanup'] = 'Удалить неиспользуемые случайные вопросы';
