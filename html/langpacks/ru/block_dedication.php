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
 * Strings for component 'block_dedication', language 'ru', version '4.5'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Название курса';
$string['admin_filter_courseid_help'] = 'Применить фильтр по названию курса';
$string['admin_filter_form'] = 'Настройка курса с учетом затраченного времени';
$string['admin_filter_form_help'] = 'Оценка времени производится на основе понятий «сеанс» и «длительность сеанса», применяемых к записям в журнале событий.

<strong>Клик:</strong> запись в журнале создается каждый раз, когда пользователь переходит на страницу в Moodle.

<strong>Сеанс:</strong> последовательность из двух или более кликов, при которой время, прошедшее между любыми двумя соседними кликами, не превышает установленного максимального значения.

<strong>Длительность сеанса:</strong> время, прошедшее между первым и последним кликом в рамках сеанса.

<strong>Затраченное время:</strong> сумма длительностей всех сеансов пользователя.';
$string['admin_filter_form_text'] = 'Выберите диапазон дат и максимальное время между кликами в рамках одного сеанса работы.';
$string['admin_filter_maxtime'] = 'Конец периода';
$string['admin_filter_maxtime_help'] = 'Учитывать только записи в журнале событий до указанной даты';
$string['admin_filter_mintime'] = 'Начало периода';
$string['admin_filter_mintime_help'] = 'Учитывать только записи в журнале событий после указанной даты';
$string['admin_filter_submit'] = 'Вычислить';
$string['allloglifetime'] = 'Хранить историю сеансов';
$string['averagetimespent'] = '<strong>Среднее время, затраченное на курс:</strong> {$a}';
$string['cleanuptask'] = 'Очистка истории сеансов';
$string['collect_dedication'] = 'Сбор данных для блока о затраченном времени';
$string['configallloglifetime'] = 'Здесь задается срок хранения данных о продолжительности сеансов. Сеансы, срок давности которых превышает этот период, автоматически удаляются.';
$string['connectionratiorow'] = 'Подключений в день';
$string['dedication:addinstance'] = 'Добавлять блок о затраченном времени';
$string['dedication:myaddinstance'] = 'Добавлять блок о затраченном времени в Личный кабинет';
$string['dedication:viewreports'] = 'Разрешить просматривать отчеты о затраченном времени';
$string['dedicationall'] = 'Затраченное время для всех участников курса. Нажмите на любое имя, чтобы просмотреть подробные данные для этого участника.';
$string['dedicationrow'] = 'Время, проведенное в курсе';
$string['enrolmententity'] = 'Запись на курс';
$string['enrolmentmethod'] = 'Способ записи на курс';
$string['entity_dedication'] = 'Затраченное время';
$string['excludesessionslessthan'] = 'Исключать сеансы короче, чем {$a}';
$string['group'] = 'Группа';
$string['groupentity'] = 'Группа';
$string['ignore_sessions_limit'] = 'Игнорировать ограничение сеанса';
$string['ignore_sessions_limit_desc'] = 'Исключает короткие сеансы: любые сеансы длительностью менее указанного значения (в минутах) не будут учитываться в отчете о затраченном времени.';
$string['lastupdated'] = 'Последнее обновление: {$a}';
$string['period'] = 'Период с <em>{$a->mintime}</em> до <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Прошло времени:</strong>  {$a}';
$string['pluginname'] = 'Учет затраченного времени';
$string['privacy:metadata'] = 'Плагин block_dedication сохраняет данные о времени, которое пользователи затратили на прохождение курсов.';
$string['privacy:metadata:block_dedication:courseid'] = 'ID курса с учетом затраченного времени пользователя';
$string['privacy:metadata:block_dedication:timespent'] = 'Время, проведенное в курсе';
$string['privacy:metadata:block_dedication:timestart'] = 'Время начала сбора данных';
$string['privacy:metadata:block_dedication:userid'] = 'ID пользователя с учетом затраченного времени';
$string['report_dedication'] = 'Отчет о расчетном проведенном времени';
$string['report_timespent'] = 'Отчет о затраченном времени';
$string['session_limit'] = 'Ограничение сеанса';
$string['session_limit_desc'] = 'Ограничение сеанса для фильтров страницы отчета';
$string['sessionduration'] = 'Длительность сеанса';
$string['sessiondurationsum'] = 'Продолжительность сеанса (суммарно)';
$string['sessionstart'] = 'Начало сеанса';
$string['showestimatedtime'] = 'Показывать пользователям предполагаемое затраченное время';
$string['showestimatedtime_help'] = 'Этот параметр позволяет пользователям видеть в блоке расчетное время, проведенное ими в курсе.';
$string['timespent_estimation'] = 'Расчетное время, затраченное вами на прохождение курса, составляет:';
$string['timespentincourse'] = 'Время, проведенное в курсе';
$string['timespentreport'] = 'Полный отчет';
$string['timespenttasknotrunning'] = 'Задача расчета проведенного времени еще не запускалась';
$string['totaltimespent'] = '<strong>Общее время, затраченное на курс:</strong> {$a}';
$string['user_dedication_datasource'] = 'Пользователь с учетом затраченного времени';
$string['userdedication'] = 'Подробности курса с учетом затраченного времени пользователем <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Просмотреть отчет по длительности сеансов';
