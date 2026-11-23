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
 * Strings for component 'block_grade_me', language 'ru', version '4.5'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = 'Перейти в журнал оценок «{$a->course_name}»…';
$string['alt_mark'] = 'проверить';
$string['alt_mod'] = 'Перейти в журнале оценок к «{$a->mod_name}»…';
$string['datetime'] = '%d/%m/%Y %H:%M';
$string['excess'] = 'Курсов, содержащих непроверенные работы, более {$a->maxcourses}.';
$string['expand'] = 'Свернуть / Развернуть всё';
$string['grade_me:addinstance'] = 'Добавить новый блок «Проверь меня!»';
$string['grade_me:myaddinstance'] = 'Добавлять новый блок «Проверь меня!» на главную страницу сайта.';
$string['grade_me_tools'] = 'Инструменты';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">Обновить результаты попыток прохождения теста, требующих оценки</a></p>';
$string['link_grade_img'] = 'Оценить задание…';
$string['link_gradebook'] = 'Перейти в «{$a->course_name}»…';
$string['link_gradebook_icon'] = 'Перейти в журнал оценок «{$a->course_name}»…';
$string['link_mod'] = 'Перейти к «{$a->mod_name}»';
$string['link_mod_img'] = 'Перейти в журнале оценок к «{$a->mod_name}»…';
$string['link_user_profile'] = 'Профиль «{$a->first_name}»…';
$string['nothing'] = 'Нет работ для проверки!';
$string['pluginname'] = 'Проверь меня!';
$string['pluginname-reset'] = 'Проверь меня! - сброс таблицы';
$string['quiz_update_ngrade_complete'] = 'Обновление завершено';
$string['quiz_update_ngrade_success'] = 'Список попыток прохождения теста успешно обновлен. В настоящее время есть вопросы, требующие оценки: {$a}.';
$string['settings_adminviewall'] = 'Администраторы видят все';
$string['settings_configadminviewall'] = 'Включите, чтобы дать администраторам права видеть все непроверенные работы, а не только в тех курсах, где они имеют роль оценивающего.';
$string['settings_configenablepre'] = 'Должен ли «Проверь меня!» показывать неоцененные элементы из модуля «{$a->plugin_name}»?';
$string['settings_configmaxage'] = 'Максимальный возраст отображаемых неоцененных элементов, в днях. Более старые элементы будут скрыты. Введите 0, если ограничение отсутствует.';
$string['settings_configmaxcourses'] = 'Задайте максимальное количество курсов с непроверенными работами, которое будет показано. Слишком большое значение может влиять на производительность.';
$string['settings_configshowhidden'] = 'Включить отображение элементов для оценивания в скрытых курсах';
$string['settings_enablepre'] = 'Показать';
$string['settings_maxage'] = 'Максимальный «возраст»';
$string['settings_maxcourses'] = 'Максимальное количество отображаемых курсов';
$string['settings_showhidden'] = 'Показать скрытые элементы курса';
$string['title'] = 'Проверь меня!';
