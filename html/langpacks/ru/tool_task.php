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
 * Strings for component 'tool_task', language 'ru', version '4.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Разовая';
$string['adhocempty'] = 'Очередь разовых задач пуста';
$string['adhocqueueold'] = 'Самая старая необработанная задача – {$a->age}, что превышает {$a->max}.';
$string['adhocqueuesize'] = 'В очереди разовых задач: {$a}';
$string['adhoctaskid'] = 'ID разовой задачи: {$a}';
$string['adhoctaskrun'] = 'Инициирован запуск разовой задачи';
$string['adhoctasks'] = 'Разовые задачи';
$string['adhoctasksdue'] = 'Разовые задачи, подлежащие выполнению';
$string['adhoctasksfailed'] = 'Неудачные разовые задачи';
$string['adhoctasksfuture'] = 'Будущие разовые задачи';
$string['adhoctasksrunning'] = 'Текущие разовые задачи';
$string['asap'] = '<abbr title="Как можно скорее">Как можно скорее</abbr>';
$string['backtoadhoctasks'] = 'Вернуться к разовым задачам';
$string['backtoscheduledtasks'] = 'Вернуться к запланированным задачам';
$string['blocking'] = 'Блокирующая задача';
$string['cannotfindthepathtothecli'] = 'Не удается найти путь к исполняемому файлу PHP CLI, поэтому выполнение задачи прервано. Установите параметр «Путь к PHP CLI» в разделе «Администрирование сайта / Сервер / Системные пути».';
$string['checkadhocqueue'] = 'Очередь разовых задач';
$string['checkcronrunning'] = 'Запуск Cron';
$string['checklongrunningtaskcount'] = 'Имеются длительные задачи - {$a}';
$string['checklongrunningtasks'] = 'Длительные задачи';
$string['checkmaxfaildelay'] = 'Максимальная задержка при сбое задач';
$string['classname'] = 'Название класса';
$string['clearfaildelay_confirm'] = 'Вы уверены что хотите очистить задержку для задачи «{$a}»? После очистки задача запустится в соответствии с обычным расписанием.';
$string['component'] = 'Компонент';
$string['corecomponent'] = 'Ядро';
$string['crondisabled'] = 'Cron отключен. Никакие новые задачи запускаться не будут. Система не будет работать должным образом без включенного Cron\'а.';
$string['cronok'] = 'Cron работает часто';
$string['default'] = 'По умолчанию';
$string['defaultx'] = 'По умолчанию: {$a}';
$string['disabled'] = 'Отключено';
$string['disabled_help'] = 'Отключенные задачи не будут запускаться при вызове cron. Тем не менее, вы можете запустить их выполнение вручную с помощью инструмента командной строки.';
$string['edittaskschedule'] = 'Изменение расписания задачи «{$a}»';
$string['enablerunnow'] = 'Разрешить команду «Запустить сейчас» в планировщике задач';
$string['enablerunnow_desc'] = 'Позволяет администраторам запустить любую из задач в любой момент, а не ждать, пока она будет запущена по расписанию. Эта функция требует, чтобы «Путь к PHP CLI» (pathtophp) был установлен в разделе «Системные пути». Задачи выполняются на веб-сервере, поэтому на некоторых сайтах эта функция может быть отключена, чтобы избежать возможного снижения производительности.';
$string['faildelay'] = 'Задержка после неудачного запуска';
$string['failed'] = 'Неудачные';
$string['fromcomponent'] = 'Из компонента: {$a}';
$string['hostname'] = 'Имя хоста';
$string['lastcronstart'] = 'Время с момента последнего запуска cron: {$a}';
$string['lastruntime'] = 'Последний запуск';
$string['lastupdated'] = 'Последнее обновление: {$a}.';
$string['nextruntime'] = 'Следующий запуск';
$string['noclassname'] = 'Имя класса не указано';
$string['notasks'] = 'Нет задач для запуска';
$string['payload'] = 'Полезная информация';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Плагин отключен';
$string['pluginname'] = 'Планировщик задач';
$string['privacy:metadata'] = 'Плагин Планировщик задач не хранит персональные данные.';
$string['resettasktodefaults'] = 'Установить расписание по умолчанию';
$string['resettasktodefaults_help'] = 'При включении этого параметра расписание задачи будет сброшено к настройкам по умолчанию.';
$string['run_adhoctasks'] = 'Запуск разовых задач';
$string['runadhoc'] = 'Запустить разовые задачи сейчас?';
$string['runadhoc_confirm'] = 'Задачи будут запускаться на веб-сервере, и их выполнение может занять некоторое время.';
$string['runadhoctask'] = 'Запустить задачу «{$a->task}» с ID {$a->taskid}';
$string['runadhoctasks'] = 'Запустить все задачи - «{$a}»';
$string['runadhoctasksfailed'] = 'Запустить неудачные задачи - «{$a}»';
$string['runagain'] = 'Запустить снова';
$string['runclassname'] = 'Запустить все';
$string['runclassnamefailedonly'] = 'Запустить все неудачные';
$string['runningalltasks'] = 'Запуск всех задач';
$string['runningfailedtasks'] = 'Запуск неудачных задач';
$string['runningtasks'] = 'Выполняемые сейчас задачи';
$string['runnow'] = 'Запустить сейчас';
$string['runnow_confirm'] = 'Вы действительно хотите запустить эту задачу «{$a}» сейчас? Задача будет выполняться на веб-сервере и может занять некоторое время.';
$string['runpattern'] = 'Пример запуска';
$string['scheduled'] = 'Запланированная';
$string['scheduledtaskchangesdisabled'] = 'Изменения в списке запланированных задач не разрешены в настройках Moodle';
$string['scheduledtasks'] = 'Планировщик задач';
$string['showall'] = 'Показать все';
$string['showfailedonly'] = 'Показать только неудачные';
$string['showsummary'] = 'Показать сводку разовых задач';
$string['slowtask'] = 'Задача выполнялась дольше, чем {$a}';
$string['started'] = 'Запущена';
$string['taskage'] = 'Время выполнения';
$string['taskdetails'] = 'Задачи ({$a->count}) выполняются более {$a->time} (макс. {$a->maxtime})';
$string['taskdisabled'] = 'Задача отключена';
$string['taskfailures'] = 'Неудачных задач: {$a}';
$string['taskid'] = 'ID задачи';
$string['tasklogs'] = 'Журнал задач';
$string['tasknofailures'] = 'Нет неудачных задач';
$string['taskrunningtime'] = 'Задача выполнена в течение {$a}';
$string['taskscheduleday'] = 'День месяца';
$string['taskscheduleday_help'] = 'Поле дня месяца для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры:

* <strong>*</strong> Каждый день
* <strong>*/2</strong> Каждый 2-й день
* <strong>1</strong> Первый день каждого месяца
* <strong>1,15</strong> Первый и пятнадцатый дни каждого месяца';
$string['taskscheduledayofweek'] = 'День недели';
$string['taskscheduledayofweek_help'] = 'Поле дня недели поле для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры:

* <strong>*</strong> Каждый день
* <strong>0</strong> Каждое воскресенье
* <strong>6</strong> Каждую субботу
* <strong>1,5</strong> Каждые понедельник и пятницу';
$string['taskschedulehour'] = 'Час';
$string['taskschedulehour_help'] = 'Поле часа для задачи расписания. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры:

* <strong>*</strong> Каждый час
* <strong>*/2</strong> Каждые 2 часа
* <strong>2-10</strong> Каждый час с 2 ночи до 10 утра (включительно)
* <strong>2,6,9</strong> В 2 часа ночи, в 6 и в 9 часов утра';
$string['taskscheduleminute'] = 'Минута';
$string['taskscheduleminute_help'] = 'Поле минут для планирования задачи. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры:

* <strong>*</strong> Каждую минуту
* <strong>*/5</strong> Каждые 5 минут
* <strong>2-10</strong> Каждую минуту со 2 до 10 минуты часа (включительно)
*  <strong>2,6,9</strong> 2, 6 и 9 минута часа';
$string['taskschedulemonth'] = 'Месяц';
$string['taskschedulemonth_help'] = 'Поле месяца для планирования задачи. Поле использует тот же формат, что и UNIX Cron. Некоторые примеры:

* <strong>*</strong> Каждый месяц
* <strong>*/2</strong> Каждый второй месяц
* <strong>1</strong> Ежегодно в январе
* <strong>1,5</strong> Ежегодно в январе и в мае';
$string['viewlogs'] = 'Смотреть журналы для {$a}';
