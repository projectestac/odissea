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
 * Strings for component 'enrol_meta', language 'uk', version '4.4'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Додати до групи';
$string['coursesort'] = 'Порядок списку вихідних курсів';
$string['coursesort_help'] = 'Як слід упорядковувати вихідні курси під час зв’язування вихідного курсу з цільовим?';
$string['creategroup'] = 'Створити нову групу';
$string['defaultgroupnametext'] = '{$a->name} курс {$a->increment}';
$string['enrolmetasynctask'] = 'Завдання синхронізації мета-реєстрації';
$string['linkedcourse'] = 'Зв’язаний мета-курс';
$string['meta:config'] = 'Налаштовувати варіант зарахування через мета-курс';
$string['meta:selectaslinked'] = 'Вибирати курс пов’язаний з мета-курсом';
$string['meta:unenrol'] = 'Відраховувати заблокованих користувачів';
$string['nosyncroleids'] = 'Ролі, які не повинні синхронізуватися';
$string['nosyncroleids_desc'] = 'Виберіть будь-які ролі, які не слід синхронізувати між вихідним і цільовим курсами.';
$string['pluginname'] = 'Зв’язаний мета-курс';
$string['pluginname_desc'] = 'Метапосилання на курс синхронізує реєстрацію та ролі з вихідного курсу на цільовий курс.';
$string['privacy:metadata:core_group'] = 'Плагін для реєстрації метапосилання на курс може створити нову групу або використовувати наявну групу для додавання учасників із вихідного курсу.';
$string['samemetacourse'] = 'Ви не можете додати метапосилання до одного курсу.';
$string['syncall'] = 'Синхронізувати всіх зарахованих користувачів';
$string['syncall_desc'] = 'Якщо ввімкнено, усі зареєстровані користувачі синхронізуються з початкового курсу, навіть якщо вони не мають у ньому ролі. В іншому випадку до цільового курсу зараховуються лише користувачі, які мають принаймні одну роль.';
$string['unknownmetacourse'] = 'Невідома коротка назва метакурсу';
$string['wscannotcreategroup'] = 'Немає дозволу на створення групи у зв’язаному курсі id = {$a}.';
$string['wsinvalidcourse'] = 'Ідентифікатор курсу = {$a} не існує або у вас немає дозволу на додавання метапосилання на курс.';
$string['wsinvalidmetacourse'] = 'Ідентифікатор метакурсу = {$a} не існує або у вас немає дозволу на додавання екземпляра реєстрації.';
$string['wsnoinstancesspecified'] = 'Не вказано жодних випадків';
