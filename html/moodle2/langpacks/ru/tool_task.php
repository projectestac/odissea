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
 * Strings for component 'tool_task', language 'ru', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'При первой же возможности';
$string['blocking'] = 'Блокирующая задача';
$string['component'] = 'Компонент';
$string['corecomponent'] = 'Ядро';
$string['default'] = 'По умолчанию';
$string['disabled'] = 'Задача отключена';
$string['disabled_help'] = 'Отключенные задания не будут запускаться при вызове cron. Тем не менее, вы можете запустить их выполнение вручную с помощью инструмента командной строки.';
$string['edittaskschedule'] = 'Изменение расписания задачи «{$a}»';
$string['faildelay'] = 'Задержка после неудачного запуска';
$string['lastruntime'] = 'Последний запуск';
$string['nextruntime'] = 'Следующий запуск';
$string['plugindisabled'] = 'Плагин отключен';
$string['pluginname'] = 'Планировщик задач';
$string['resettasktodefaults'] = 'Установить расписание по умолчанию';
$string['resettasktodefaults_help'] = 'При включении этого параметра расписание задачи будет сброшено к настройкам по умолчанию.';
$string['scheduledtaskchangesdisabled'] = 'Изменения в списке запланированных задач не разрешены в настройках Moodle';
$string['scheduledtasks'] = 'Планировщик задач';
$string['taskdisabled'] = 'Задача отключена';
$string['taskscheduleday'] = 'День месяца';
$string['taskscheduleday_help'] = 'Поле дня месяца для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры: <br/><ul><li> <strong>*</strong> Каждый день </li><li> <strong>*/2</strong> Каждый 2-й день </li><li> <strong>1</strong> Первый день каждого месяца </li><li> <strong>1,15</strong> Первый и пятнадцатый дни каждого месяца </li></ul>';
$string['taskscheduledayofweek'] = 'День недели';
$string['taskscheduledayofweek_help'] = 'Поле дня недели поле для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры: <br/><ul><li> <strong>*</strong> Каждый день </li><li> <strong>0</strong> Каждое воскресенье </li><li> <strong>6</strong> Каждую субботу </li><li> <strong>1,5</strong> Каждые понедельник и пятницу. </li></ul>';
$string['taskschedulehour'] = 'Час';
$string['taskschedulehour_help'] = 'Поле часа для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры: <br/><ul><li> <strong>*</strong> Каждый час </li><li> <strong>*/2</strong> Каждые 2 часа </li><li> <strong>2-10</strong> Каждый час с 2 ночи до 10 утра (включительно) </li><li> <strong>2,6,9</strong> В 2 часа ночи, в 6 и в 9 часов утра </li></ul>';
$string['taskscheduleminute'] = 'Минута';
$string['taskscheduleminute_help'] = 'Поле минут для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры: <br/><ul><li> <strong>*</strong> Каждую минуту </li><li> <strong>*/5</strong> Каждые 5 минут </li><li> <strong>2-10</strong> Каждую минуту со 2 до 10 минуты часа (включительно) </li><li> <strong>2,6,9</strong> 2, 6 и 9 минута часа </li></ul>';
$string['taskschedulemonth'] = 'Месяц';
$string['taskschedulemonth_help'] = 'Поле месяца для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры: <br/><ul><li> <strong>*</strong> Каждый месяц </li><li> <strong>*/2</strong> Каждый второй месяц </li><li> <strong>1</strong> Ежегодно в январе </li><li> <strong>1,5</strong> Ежегодно в январе и в мае </li></ul>';
