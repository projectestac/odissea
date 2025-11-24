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
 * Strings for component 'tool_assignmentupgrade', language 'uk', version '4.5'.
 *
 * @package     tool_assignmentupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'Ви впевнені?';
$string['areyousuremessage'] = 'Ви впевнені, що бажаєте оновити завдання "{$a->name}"?';
$string['assignmentid'] = 'Код завдання';
$string['assignmentnotfound'] = 'Завдання не знайдено (id={$a})';
$string['assignmentsperpage'] = 'Кількість завдань на сторінку';
$string['assignmenttype'] = 'Тип завдання';
$string['backtoindex'] = 'Повернутися до списку';
$string['batchoperations'] = 'Пакетні операції';
$string['batchupgrade'] = 'Оновлення кількох завдань';
$string['confirmbatchupgrade'] = 'Підтвердження оновлення завдань';
$string['conversioncomplete'] = 'Завдання перетворено';
$string['conversionfailed'] = 'Оновлення завдання не вдалося. Див. журнал оновлень: <br />{$a}';
$string['listnotupgraded'] = 'Список завдань, які не було оновлено';
$string['listnotupgraded_desc'] = 'Тут ви можете оновити окремі завдання';
$string['noassignmentsselected'] = 'Завдання не вибрано';
$string['noassignmentstoupgrade'] = 'Немає завдань, які потрібно оновлювати';
$string['notupgradedintro'] = 'На цій сторінці перераховано завдання, створені в старішій версії Moodle. Вони не були оновлені до нового модуля "Завдання" в Moodle 2.3. Якщо завдання були створені за допомогою користувацького підтипу, то не всі вони можуть бути оновленими. Підтип повинен бути оновленим до нової версії "Завдання" для завершення оновлення.';
$string['notupgradedtitle'] = 'Не оновлені завдання';
$string['pluginname'] = 'Помічник оновлення завдань';
$string['select'] = 'Вибрати';
$string['submissions'] = 'Відповідей';
$string['supported'] = 'Оновити';
$string['unknown'] = 'Невідомо';
$string['updatetable'] = 'Таблиця оновлень';
$string['upgradable'] = 'Оновлення';
$string['upgradeall'] = 'Оновити всі завдання';
$string['upgradeallconfirm'] = 'Оновити всі завдання?';
$string['upgradeassignmentfailed'] = 'Результат: оновлення не вдалося. Див. журнал оновлень: <br/><div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'Результат: успішно оновлено';
$string['upgradeassignmentsummary'] = 'Оновлено завдання: {$a->name} (Course: {$a->shortname})';
$string['upgradeprogress'] = 'Оновлено завдань: {$a->current} з {$a->total}';
$string['upgradeselected'] = 'Оновити вибрані завдання';
$string['upgradeselectedcount'] = 'Оновити вибрані завдання - {$a} ?';
$string['upgradesingle'] = 'Оновлення одного завдання';
$string['viewcourse'] = 'Перегляд курсу з оновленими завданнями';
