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
 * Strings for component 'tool_task', language 'uk', version '4.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'Черга спеціальних завдань порожня';
$string['adhocqueueold'] = 'Найстарішим необробленим завданням є {$a->age}, що перевищує {$a->max}';
$string['adhocqueuesize'] = 'Черга спеціальних задач містить {$a} задач';
$string['adhoctaskid'] = 'Ідентифікатор спеціального завдання: {$a}';
$string['adhoctaskrun'] = 'Розпочато виконання спеціального завдання';
$string['adhoctasks'] = 'Спеціальні задачі';
$string['adhoctasksdue'] = 'Термін виконання спеціальних завдань';
$string['adhoctasksfailed'] = 'Термін виконання спеціальних завдань';
$string['adhoctasksfuture'] = 'Майбутні спеціальні завдання';
$string['adhoctasksrunning'] = 'Виконуються спеціальні завдання';
$string['asap'] = 'За першої ж нагоди';
$string['backtoadhoctasks'] = 'Повернутися до спеціальних завдань';
$string['backtoscheduledtasks'] = 'Назад до запланованих задач';
$string['blocking'] = 'Блокуюча задачі';
$string['cannotfindthepathtothecli'] = 'Не вдається знайти шлях до виконуваного файлу CLI PHP, тому виконання завдання перервано. Встановіть параметр «Шлях до PHP CLI» у розділі Адміністрування сайту / Сервер / Шляхи системи.';
$string['checkadhocqueue'] = 'Спеціальна черга завдань';
$string['checkcronrunning'] = 'Cron працює';
$string['checklongrunningtaskcount'] = 'Тривалі завдання: {$a}';
$string['checklongrunningtasks'] = 'Тривалі завдання';
$string['checkmaxfaildelay'] = 'Максимальна затримка на помилку задачі';
$string['classname'] = 'Назва класу';
$string['clearfaildelay_confirm'] = 'Ви впевнені, що хочете видалити затримку збою для завдання "{$a}"? Після усунення затримки завдання виконуватиметься за звичайним розкладом.';
$string['component'] = 'Компонент';
$string['corecomponent'] = 'Ядро';
$string['crondisabled'] = 'Крон вимкнено. Нові задачі не будуть виконуватися. Система не буде функціонувати потрібним чином доки знову не ввімкнути.';
$string['cronok'] = 'Cron часто працює';
$string['default'] = 'Типово';
$string['defaultx'] = 'За умовчанням: {$a}';
$string['disabled'] = 'Відключено';
$string['disabled_help'] = 'Відключені завдання не будуть запускатися при виклику cron. Тим не менш, ви можете запустити їх виконання вручну за допомогою інструменту командного рядка.';
$string['edittaskschedule'] = 'Зміна розкладу задачі: {$a}';
$string['enablerunnow'] = 'Дозволити команду «Запустити зараз» у запланованих завданнях';
$string['enablerunnow_desc'] = 'Дозволяє адміністраторам запустить будь-яке із завдань в будь-який момент, а не чекати, поки воно буде запущено за розкладом. Завдання виконуються на веб-сервері, тому на деяких сайтах ця функція може бути відключена, щоб уникнути можливого зниження продуктивності.';
$string['faildelay'] = 'Затримка після невдачі';
$string['failed'] = 'Не вдалося';
$string['fromcomponent'] = 'З компонента: {$a}';
$string['hostname'] = 'Ім\'я хоста';
$string['lastcronstart'] = 'Час з моменту останнього запуску cron: {$a}';
$string['lastruntime'] = 'Останній запуск';
$string['lastupdated'] = 'Востаннє оновлено {$a}.';
$string['nextruntime'] = 'Наступний запуск';
$string['noclassname'] = 'Назва класу не вказана';
$string['notasks'] = 'Немає завдань для виконання';
$string['payload'] = 'Корисне навантаження';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Модуль відключено';
$string['pluginname'] = 'Налаштування запланованого завдання';
$string['privacy:metadata'] = 'Плагін налаштування запланованих завдань не зберігає жодних особистих даних.';
$string['resettasktodefaults'] = 'Встановити типовий розклад';
$string['resettasktodefaults_help'] = 'При включенні цього параметра розклад задачі буде скинуто до типових налаштувань.';
$string['run_adhoctasks'] = 'Виконуйте спеціальні завдання';
$string['runadhoc'] = 'Виконати тимчасові завдання зараз?';
$string['runadhoc_confirm'] = 'Завдання виконуватимуться на веб-сервері й можуть зайняти деякий час.';
$string['runagain'] = 'Запустити знову';
$string['runclassname'] = 'Запустити все';
$string['runclassnamefailedonly'] = 'Запустити все невдале';
$string['runningalltasks'] = 'Виконання всіх завдань';
$string['runningfailedtasks'] = 'Виконання невдалих завдань';
$string['runningtasks'] = 'Виконати задачі зараз';
$string['runnow'] = 'Запустити зараз';
$string['runnow_confirm'] = 'Ви впевнені, що хочете запустити це завдання "{$a}" зараз? Завдання виконуватиметься на веб-сервері і може зайняти деякий час.';
$string['runpattern'] = 'Виконайте шаблон';
$string['scheduled'] = 'За розкладом';
$string['scheduledtaskchangesdisabled'] = 'Зміни в списку запланованих задач не дозволено в налаштуваннях Moodle.';
$string['scheduledtasks'] = 'Заплановані завдання';
$string['showall'] = 'Показати все';
$string['showfailedonly'] = 'Показати не вдалося';
$string['showsummary'] = 'Показати зведення спеціальних завдань';
$string['slowtask'] = 'Завдання виконується більше ніж {$a}';
$string['started'] = 'Почалося';
$string['taskage'] = 'Час роботи';
$string['taskdetails'] = 'Завдання, які виконуються понад {$a->time} (макс. {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'Задача відключена';
$string['taskfailures'] = 'Помилка завдань ({$a}).';
$string['taskid'] = 'ID завдання';
$string['tasklogs'] = 'Журнали завдань';
$string['tasknofailures'] = 'Немає не виконаних запланованих задач';
$string['taskrunningtime'] = 'Завдання виконано для {$a}';
$string['taskscheduleday'] = 'День';
$string['taskscheduleday_help'] = 'Поле дня місяця для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Щодня
* <strong>*/2</strong> Кожен 2-й день
* <strong>1</strong> Перше число кожного місяця
* <strong>1,15</strong> Перше та п’ятнадцяте числа кожного місяця';
$string['taskscheduledayofweek'] = 'День тижня';
$string['taskscheduledayofweek_help'] = 'Поле день тижня для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Щодня
* <strong>0</strong> Кожної неділі
* <strong>6</strong> Щосуботи
* <strong>1,5</strong> Щопонеділка та п’ятниці';
$string['taskschedulehour'] = 'Година';
$string['taskschedulehour_help'] = 'Поле години для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Кожну годину
* <strong>*/2</strong> кожні 2 години
* <strong>2-10</strong> Кожну годину з 2:00 до 10:00 (включно)
* <strong>2,6,9</strong> 2 ранку, 6 ранку та 9 ранку';
$string['taskscheduleminute'] = 'Хвилина';
$string['taskscheduleminute_help'] = 'Поле хвилини для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Кожну хвилину
* <strong>*/5</strong> кожні 5 хвилин
* <strong>2-10</strong> Кожну хвилину з 2 до 10 після години (включно)
* <strong>2,6,9</strong> 2, 6 і 9 хвилин після години';
$string['taskschedulemonth'] = 'Місяць';
$string['taskschedulemonth_help'] = 'Поле на місяць для розкладу завдань. Поле використовує той самий формат, що й unix cron. Деякі приклади:

* <strong>*</strong> Щомісяця
* <strong>*/2</strong> Кожного другого місяця
* <strong>1</strong> Кожного січня
* <strong>1,5</strong> Кожного січня та травня';
$string['viewlogs'] = 'Переглянути журнали для {$a}';
