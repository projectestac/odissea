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
 * Strings for component 'enrol_meta', language 'ru', version '4.1'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Добавить в группу';
$string['coursesort'] = 'Сортировать список курсов';
$string['coursesort_help'] = 'Определяет, должен ли список подключаемых курсов быть отсортированным в заданном порядке (то есть, в порядке, указанном в «Администрирование > Курсы > Управление курсами и категориями») или же в алфавитном порядке.';
$string['creategroup'] = 'Создать новую группу';
$string['defaultgroupnametext'] = 'Курс {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Задача синхронизации способа записи «Связанный метакурс»';
$string['linkedcourse'] = 'Связанный курс';
$string['meta:config'] = 'Настраивать экземпляры способа записи на курс «Связанный метакурс»';
$string['meta:selectaslinked'] = 'Выбирать курс в качестве связанного курса в способе записи на курс «Связанный метакурс»';
$string['meta:unenrol'] = 'Отчислять приостановленных пользователей';
$string['nosyncroleids'] = 'Роли, которые не синхронизируются';
$string['nosyncroleids_desc'] = 'По умолчанию, все назначенные роли уровня курса будут синхронизированы из родительского в дочерний курс. Выбранные здесь роли не будут включены в процесс синхронизации. Доступные для синхронизации роли будут обновлены при следующем выполнении cron.';
$string['pluginname'] = 'Связанный метакурс';
$string['pluginname_desc'] = 'Способ записи «Связанный метакурс» синхронизирует учащихся и роли в двух разных курсах';
$string['privacy:metadata:core_group'] = 'Плагин способа записи «Связанный метакурс» может создать новую группу или использовать существующую группу для добавления всех участников связанного курса.';
$string['syncall'] = 'Синхронизировать всех записанных пользователей';
$string['syncall_desc'] = 'Если параметр включен, то все записанные пользователи синхронизируются, даже если они не имеют роли в родительском курсе.
Если отключен, то только пользователи, имеющие хотя бы одну синхронизируемую роль, будут записаны на дочерний курс.';
$string['wscannotcreategroup'] = 'Нет разрешения на создание группы в связанном курсе id = {$a}.';
$string['wsinvalidcourse'] = 'Курс с ID = {$a} не существует или нет разрешения на способ записи «Связанный метакурс»';
$string['wsinvalidmetacourse'] = 'Метакурс с ID = {$a} не существует или нет разрешения на добавление экземпляра зачисления.';
$string['wsnoinstancesspecified'] = 'Экземпляры не указаны';
