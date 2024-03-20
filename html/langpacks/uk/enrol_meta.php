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
 * Strings for component 'enrol_meta', language 'uk', version '4.1'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Додати до групи';
$string['coursesort'] = 'Відсортувати список курсів';
$string['coursesort_help'] = 'Це визначає, як курси будуть відсортовані (тобто порядок, встановлений в Керування сайтом > Курси > Робота з курсами) в списку.';
$string['creategroup'] = 'Створити нову групу';
$string['defaultgroupnametext'] = '{$a->name} курс {$a->increment}';
$string['enrolmetasynctask'] = 'Завдання синхронізації мета-реєстрації';
$string['linkedcourse'] = 'Зв’язаний мета-курс';
$string['meta:config'] = 'Налаштовувати варіант зарахування через мета-курс';
$string['meta:selectaslinked'] = 'Вибирати курс пов’язаний з мета-курсом';
$string['meta:unenrol'] = 'Відраховувати заблокованих користувачів';
$string['nosyncroleids'] = 'Ролі, які не повинні синхронізуватися';
$string['nosyncroleids_desc'] = 'Типово всі призначені ролі рівня курсу синхронізуються від батьківського курсу до дочірніх. Ролі вибрані тут не будуть включатися у процес синхронізації. Поточні ролі будуть оновлені у наступному сеансі запуску cron.';
$string['pluginname'] = 'Зв’язаний мета-курс';
$string['pluginname_desc'] = 'Модуль зарахування через зв’язаний мета-курс синхронізує зарахування та ролі в двох різних курсах.';
$string['privacy:metadata:core_group'] = 'Мета-плагін «Реєстрація» може створити нову групу або використати наявну групу, щоб додати всіх учасників курсу, пов’язаних.';
$string['syncall'] = 'Синхронізувати всіх зарахованих користувачів';
$string['syncall_desc'] = 'Якщо включено, то всі зараховані користувачі будуть синхронізуватися, навіть якщо вони не мають ролі в батьківському курсі, а при відключеному будуть зараховуватися тільки ті, які мають відповідну роль для синхронізації.';
$string['wscannotcreategroup'] = 'Немає дозволу на створення групи у зв’язаному курсі id = {$a}.';
$string['wsinvalidcourse'] = 'Ідентифікатор курсу = {$a} не існує або не має дозволу на посилання в мета-реєстрації.';
$string['wsinvalidmetacourse'] = 'Ідентифікатор метакурсу = {$a} не існує або немає дозволу на додавання екземпляра реєстрації.';
$string['wsnoinstancesspecified'] = 'Не вказано жодних випадків';
