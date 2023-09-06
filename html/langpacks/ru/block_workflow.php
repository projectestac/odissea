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
 * Strings for component 'block_workflow', language 'ru', version '4.1'.
 *
 * @package     block_workflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetasktitle'] = '️Текущая задача:';
$string['addanotherworkflow'] = 'Добавить другой процесс';
$string['addroletostep'] = 'Добавить роль к шагу';
$string['addstep'] = 'Добавить шаг к этому процессу';
$string['addstepafter'] = 'Добавить шаг после этой точки';
$string['addtask'] = 'Добавить задачу';
$string['appliesto'] = 'Этот процесс относится к';
$string['atendfinishworkflow'] = 'Завершить процесс';
$string['atendgobackatworkflowcreate'] = 'При создании рабочего процесса нельзя указать временную настройку возврата к шагу, так как шагов для ссылки не существует';
$string['atendgobacktostep'] = 'В конце шага  {$a}';
$string['atendgobacktostepinfo'] = 'После шага {$a->stepcount} вернуться к шагу номер {$a->atendgobacktostep}';
$string['atendgobacktostepno'] = 'Назад к шагу {$a->stepno} ({$a->name})';
$string['atendstop'] = 'После шага {$a->stepcount} этот процесс закончится.';
$string['automaticallyfinish'] = 'Автоматически завершить';
$string['cannotdeleteworkflowinuseby'] = 'Невозможно удалить, этот процесс уже используется в {$a} месте(ах).';
$string['cannotremoveemailinuse'] = 'Невозможно удалить шаблон email - в настоящее время он используется в работе';
$string['cannotremoveonlystep'] = 'Невозможно удалить шаг. В этом шаге есть только процесс контроля';
$string['cannotremovestepsinuse'] = 'Невозможно удалить шаг.  В настоящее время он используется в процессе {$a}';
$string['cannotremoveworkflowinuse'] = 'Невозможно удалить процесс -- в настоящее время он используется';
$string['cannotstepflowinuse'] = 'Невозможно удалить шаг -- в настоящее время он используется';
$string['clone'] = 'Дублировать';
$string['clonedname'] = '{$a} (дублирован)';
$string['clonedshortname'] = '{$a}_дублирован';
$string['cloneworkflow'] = 'Дублировать процесс';
$string['cloneworkflowinstructions'] = 'Инструкции по дублированию процесса';
$string['cloneworkflowname'] = 'Дублировать рабочий процесс «{$a}»';
$string['commentlabel'] = 'Обновить комментарий рабочего процесса';
$string['comments'] = 'Комментарии:';
$string['confirm'] = 'Согласиться';
$string['confirmfinishstep'] = 'Вы уверены, что хотите отметить этот шаг ({$a}) как выполненный?';
$string['confirmjumptostep'] = 'Вы уверены, что хотите перейти к следующему шагу {$a->stepno} ({$a->stepname})?';
$string['emailmessage'] = 'Сообщение';
$string['stepactivation_link'] = 'block/workflow';
$string['stepcompletion_link'] = 'block/workflow';
$string['stepextranotify_link'] = 'block/workflow';
