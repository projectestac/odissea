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
 * Strings for component 'enrol_meta', language 'ru', version '4.4'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Добавить в группу';
$string['coursesort'] = 'Порядок списка исходных курсов';
$string['coursesort_help'] = 'Как следует упорядочивать исходные курсы при связывании исходного курса с целевым?';
$string['creategroup'] = 'Создать новую группу';
$string['defaultgroupnametext'] = 'Курс {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Задача синхронизации способа записи «Связанный метакурс»';
$string['linkedcourse'] = 'Связанный курс';
$string['meta:config'] = 'Настраивать экземпляры способа записи на курс «Связанный метакурс»';
$string['meta:selectaslinked'] = 'Выбирать курс в качестве связанного курса в способе записи на курс «Связанный метакурс»';
$string['meta:unenrol'] = 'Отчислять приостановленных пользователей';
$string['nosyncroleids'] = 'Роли, которые не синхронизируются';
$string['nosyncroleids_desc'] = 'Выберите любые роли, которые не должны синхронизироваться между исходным и целевым курсами.';
$string['pluginname'] = 'Связанный метакурс';
$string['pluginname_desc'] = 'Способ записи «Связанный метакурс» зачисления и роли исходного курса с целевым курсом.';
$string['privacy:metadata:core_group'] = 'Плагин способа записи «Связанный метакурс» может создать новую группу или использовать существующую группу для добавления участников из исходного курса.';
$string['samemetacourse'] = 'Нельзя связать метакурс с самим собой';
$string['syncall'] = 'Синхронизировать всех записанных пользователей';
$string['syncall_desc'] = 'Если параметр включен, то все записанные пользователи синхронизируются, даже если они не имеют роли в исходном курсе.
Если отключен, то только пользователи, имеющие хотя бы одну синхронизируемую роль, будут записаны в целевой курс.';
$string['unknownmetacourse'] = 'Неизвестное короткое название метакурса';
$string['wscannotcreategroup'] = 'Нет разрешения на создание группы в связанном курсе id = {$a}.';
$string['wsinvalidcourse'] = 'Курс с ID = {$a} не существует или у вас нет разрешения на добавление способа записи «Связанный метакурс»';
$string['wsinvalidmetacourse'] = 'Метакурс с ID = {$a} не существует или у вас нет разрешения на добавление экземпляра зачисления.';
$string['wsnoinstancesspecified'] = 'Экземпляры не указаны';
