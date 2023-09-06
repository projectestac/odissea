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
 * Strings for component 'block_supervised', language 'ru', version '4.1'.
 *
 * @package     block_supervised
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Использовать эту аудиторию в сеансах?';
$string['active_help'] = 'При включенном параметре вы можете начинать и планировать новые сеансы в этой аудитории';
$string['activesessionsstudenttitle'] = 'У вас активных сеансов - {$a}';
$string['activesessiontitle'] = 'У вас есть активный сеанс';
$string['addclassroom'] = 'Добавить аудиторию ...';
$string['addclassroomnavbar'] = 'Добавить аудиторию';
$string['addclassroompagetitle'] = 'Добавить аудиторию';
$string['addingnewclassroom'] = 'Добавление аудитории';
$string['addingnewlessontype'] = 'Добавление типа занятия';
$string['addingnewsession'] = 'Запланировать сеанс';
$string['addlessontype'] = 'Добавить тип занятия ...';
$string['addlessontypenavbar'] = 'Добавить тип занятия';
$string['addlessontypepagetitle'] = 'Добавить тип занятия';
$string['addsessionpagetitle'] = 'Запланировать сеанс';
$string['allclassrooms'] = 'Все аудитории';
$string['allgroups'] = 'Все группы';
$string['alllessontypes'] = 'Все типы занятий';
$string['allstates'] = 'Все состояния';
$string['allsupervisers'] = 'Все преподаватели';
$string['allusers'] = 'Все пользователи';
$string['blocktitle'] = 'Supervised';
$string['cannotdeleteclassroom'] = 'В этой аудитории проводятся сеансы. Сначала удалите сеанс, использующий эту аудиторию. Вы можете скрыть аудиторию';
$string['cannotdeletelessontype'] = 'Вы не можете удалить этот тип занятия, потому что он используется в сеансах или тестах';
$string['classroom'] = 'Аудитория';
$string['classroomsbreadcrumb'] = 'Аудитории';
$string['classroomsdefinition'] = 'Определение аудиторий';
$string['classroomsdefinition_help'] = 'Любые сеансы проводятся в аудитории. Аудитория определяется IP-подсетью (спросите у администратора диапазон IP-адресов для вашей аудитории, если вы их не знаете). В контролируемом сеансе участвуют только студенты, работающие на компьютерах с указанными IP-адресами. Поэтому студенты из группы не могут обмануть вас, используя сайт из других мест, когда вы контролируете своих учащихся в какой-то аудитории. Аудитории доступны для всех курсов.';
$string['classroomsheader'] = 'Список аудиторий';
$string['classroomspagetitle'] = 'Список аудиторий';
$string['classroomsurl'] = 'Аудитории';
$string['coursesettings'] = 'Специальные настройки курса';
$string['createclassroom'] = 'До планирования или начала сеаснса вы должны создать (или сделать видимой) хотя бы одну аудиторию!';
$string['deleteclassroomcheck'] = 'Вы уверены, что хотите удалить эту аудиторию для всех курсов на этом сайте?';
$string['deletelessontypecheck'] = 'Вы уверены что хотите удалить этот тип занятия?';
$string['deletesessionnavbar'] = 'Удалить сеанс?';
$string['duration'] = 'Продолжительность (мин)';
$string['durationvalidationerror'] = 'Продолжительность должна быть больше нуля.';
$string['editclassroomnavbar'] = 'Редактировать аудиторию';
$string['editclassroompagetitle'] = 'Редактировать аудиторию';
$string['editingclassroom'] = 'Редактирование аудитории';
$string['editinglessontype'] = 'Редактирование типа занятия';
$string['editingsession'] = 'Редактирование сеанса';
$string['editlessontypenavbar'] = 'Редактировать тип занятия';
$string['editlessontypepagetitle'] = 'Редактировать тип занятия';
$string['editsessionnavbar'] = 'Редактировать сеанс';
$string['editsessionpagetitle'] = 'Редактировать запланированный сеанс';
$string['emaildeletesessionurl'] = 'Вы можете удалить это занятие: {$a}';
$string['emaileditedsession'] = 'Здравствуйте, {$a->teachername},

Ваш сеанс «{$a->sitename}» было отредактирован.
Редактор:        {$a->editorname}

Обновленная информация о сеансе:
{$a->sessioninfo}

{$a->editsession}
{$a->deletesession}

{$a->haveaniceday}';
$string['emaileditedsessionsubject'] = '{$a->sitename}: сеанс отредактирован в {$a->timestart}';
$string['emaileditsessionurl'] = 'Вы можете отредактировать этот сеанс: {$a}';
$string['emailnewsession'] = 'Здравствуйте, {$a->teachername}.

Для вас был создан новый сенас на сайте «{$a->sitename}».
Создатель:        {$a->creatorname}

{$a->sessioninfo}

{$a->editsession}
{$a->deletesession}

{$a->haveaniceday}';
$string['emailnewsessionsubject'] = '{$a->sitename}: новый сеанс в {$a->timestart}';
$string['emailremovedsession'] = 'Здравствуйте, {$a->teachername}.

Ваш сеанс на сайте «{$a->sitename}» был удален пользователем {$a->removername}.

{$a->sessioninfo}

{$a->custommessage}

{$a->haveaniceday}';
$string['emailremovedsessionmsg'] = 'Человек, удаливший этот сеанс, оставил Вам сообщение:
--------------------------------------------------
{$a}
--------------------------------------------------';
$string['emailremovedsessionsubject'] = '{$a->sitename}: сеанс был удален в {$a->timestart}';
$string['emailsessioncomment'] = 'Комментарии о сеансе:
--------------------------------------------------
{$a}
--------------------------------------------------';
$string['emailsessioninfo'] = 'Курс:         {$a->course}
Аудитория:      {$a->classroom}
Группа:          {$a->group}
Тип занятия:    {$a->lessontype}
Время начала:     {$a->timestart}
Продолжительность (мин.): {$a->duration}
Время окончания:       {$a->timeend}

{$a->comment}';
$string['enrollteacher'] = 'Чтобы запланировать сеанс, вы должны записать на курс хотя бы одного пользователя с возможностью контролировать сеансы!';
$string['eventaddclassroom'] = 'Добавлена новая аудитория';
$string['eventaddlessontype'] = 'Добавлен новый тип занятия';
$string['eventaddsession'] = 'Добавлен новый сеанс';
$string['eventdeleteclassroom'] = 'Аудитория была удалена';
$string['eventdeletelessontype'] = 'Тип занятия удален';
$string['eventdeletesession'] = 'Сеанс удален';
$string['eventfinishsession'] = 'Сеанс завершен';
$string['eventhideclassroom'] = 'Аудитория была скрыта';
$string['eventstartplannedsession'] = 'Запланированный сеанс начат';
$string['eventstartsession'] = 'Сеанс начат';
$string['eventunhideclassroom'] = 'Аудитория перестала быть скрытой';
$string['eventupdateactivesession'] = 'Активный сеанс обновлен';
$string['eventupdateclassroom'] = 'Аудитория изменена';
$string['eventupdatelessontype'] = 'Тип занятия изменен';
$string['eventupdatesession'] = 'Сеанс обновлен';
$string['filterlogsbyuser'] = 'Показать логи пользователя';
$string['finishedstate'] = 'Завершено';
$string['finishsession'] = 'Завершить сеанс';
$string['gotoclassrooms'] = 'Перейти на страницу аудиторий';
$string['gotoenrollment'] = 'Перейти на страницу записи пользователей';
$string['haveaniceday'] = 'Удачи!';
$string['increaseduration'] = 'Время окончания сеанса должно быть позже текущего времени.';
$string['insertclassroomerror'] = 'Ошибка! Не удалось внести аудиторию в базу данных';
$string['insertlessontypeerror'] = 'Ошибка! Не удалось внести тип занятия в базу данных';
$string['insertsessionerror'] = 'Ошибка! Не удалось внести сеанс в базу данных';
$string['invalidclassroomid'] = 'Вы пытаетесь использовать недопустимый ID аудитории';
$string['invalidlessontypeid'] = 'Вы пытаетесь использовать недопустимый ID типа занятий';
$string['invalidsessionid'] = 'Вы пытаетесь использовать недопустимый ID сеанса';
$string['iplist'] = 'Список IP-адресов';
$string['iplist_help'] = 'Список IP-адресов - это строка с определениями подсети, разделенными запятыми.

Строки подсети могут быть в одном из следующих форматов:

* xxx.xxx.xxx.xxx (полный IP-адрес)

* xxx.xxx.xxx.xxx/nn (количество бит в маске сети)

* xxx.xxx.xxx.xxx-yyy (диапазон IP-адресов в последней группе)

* xxx.xxx или xxx.xxx (неполный адрес)';
$string['lessontype'] = 'Тип занятия';
$string['lessontypesbreadcrumb'] = 'Типы занятий';
$string['lessontypesdefinition'] = 'Определение типов занятий';
$string['lessontypesdefinition_help'] = 'У вас может быть несколько разных типов занятий в курсах (например, экзамен, коллоквиум и т.п.) и вы можете получить информацию только для определенных занятий (напр., тест не должен быть доступен на коллоквиуме). Вы можете использовать типы занятий для их сортировки. Сеанс всегда создается для некоторого типа занятия. Вы можете ограничить доступность теста или других элементов сеансом с заданным типом занятия. В отличие от аудиторий, типы занятий создаются отдельно для каждого курса.';
$string['lessontypespagetitle'] = 'Типы занятий';
$string['lessontypesurl'] = 'Типы занятий';
$string['lessontypesview'] = 'Типы занятий в текущем курсе';
$string['logsbreadcrumb'] = 'Логи сеанса';
$string['logspagetitle'] = 'Логи сеанса';
$string['logsview'] = 'Логи сеанса';
$string['messageforteacher'] = 'Сообщение для преподавателя';
$string['nosessionsstudenttitle'] = 'У вас нет активных сеансов...';
$string['nosessionstitle'] = 'У вас нет активных или запланированных сеансов. Вы можете начать новый сеанс прямо сейчас';
$string['notifyteacher'] = 'Оповестить по эл. почте';
$string['notifyteacher_help'] = 'При установленном флажке выбранный преподаватель будет уведомлен о создании, удалении и любых изменениях в его сеансе. Если преподаватель будет изменен, то оба будут уведомлены.';
$string['notspecified'] = 'Не определено';
$string['pagesizevalidationerror'] = 'Размер страницы должен быть больше нуля.';
$string['plannedsessiontitle'] = 'У вас есть запланированный сеанс';
$string['plannedstate'] = 'Запланировано';
$string['plansession'] = 'Запланировать сеанс ...';
$string['plansessionnavbar'] = 'Планировать сеанс';
$string['pluginname'] = 'Контроль';
$string['sessiondeleteerror'] = 'Вы не можете удалить активный сеанс. Сначала закончите его.';
$string['sessiondeleteheader'] = 'Вы действительно хотите удалить этот сеанс?';
$string['sessiondeletetitle'] = 'Удалить сеанс';
$string['sessiondurationcourse'] = 'Длительность сеанса по умолчанию для данного курса (мин)';
$string['sessionediterror'] = 'Вы можете редактировать только запланированные сеансы';
$string['sessionendsbefore'] = 'Сеанс завершается до';
$string['sessioninfo'] = 'Информация о сеансе';
$string['sessionlogserror'] = 'Вы не можете просматривать логи запланированного сеанса - просматривать нечего';
$string['sessionsbreadcrumb'] = 'Сеансы';
$string['sessionsdefinition'] = 'Определение сеансов';
$string['sessionsdefinition_help'] = 'Контролер курса создает сеансы для определенных групп, типов занятия (например, лабораторной работы, экзамена и т.п.), аудитории и продолжительности. После этого студенты смогут начать тесты из этого курса при следующих условиях:

- сеанс активен;

- студент находится в группе, для которой был создан сеанс;

- студент находится в аудитории (контролер может указать IP-подсеть для каждой аудитории);

- сеанс был создан для типа занятия, который указан в тесте (перейти к настройкам теста -> Дополнительные ограничения для попытки).';
$string['sessionsheader'] = 'Список сеансов';
$string['sessionspagetitle'] = 'Сеансы';
$string['sessionstartsafter'] = 'Сеанс начинается после';
$string['sessionsurl'] = 'Сеансы';
$string['settingsdayspastdesc'] = 'Интервал времени по умолчанию для таблицы сеансов в днях (с текущей даты).';
$string['settingsdayspasttitle'] = 'Количество дней, за которые показывать сеансы';
$string['settingsdurationdesc'] = 'Продолжительность сеанса по умолчанию (в минутах).';
$string['settingsdurationtitle'] = 'Продолжительность сеанса';
$string['showlogs'] = 'Показать логи';
$string['showlogsbutton'] = 'Показать логи';
$string['showsessions'] = 'Показать сеансы';
$string['startsession'] = 'Начать';
$string['supervised:addinstance'] = 'Добавлять новый блок «Контроль»';
$string['supervised:besupervised'] = 'Участвовать в контролируемом сеансе (предназначенном для студентов и т.д.)';
$string['supervised:editclassrooms'] = 'Редактировать аудитории';
$string['supervised:editlessontypes'] = 'Редактировать типы занятий';
$string['supervised:manageallsessions'] = 'Управлять всеми сеансами: планировать, редактировать и удалять незавершенные сеансы';
$string['supervised:managefinishedsessions'] = 'Удалять завершенные сеансы';
$string['supervised:manageownsessions'] = 'Управлять своими сеансами: планировать, редактировать и удалять незавершенные сеансы';
$string['supervised:supervise'] = 'Возможность контролировать сеансы: начинать запланированные и новые, редактировать и заканчивать активные, просматривать журналы.';
$string['supervised:viewallsessions'] = 'Просматривать все сеансы (запланированные, активные и законченные) и их журналы';
$string['supervised:viewownsessions'] = 'Просматривать свои сеансы (запланированные, активные и законченные) и их журналы';
$string['supervisedsettings'] = 'Настройки контроля';
$string['superviser'] = 'Контролер';
$string['teacherhassession'] = 'У контролера уже есть сеанс в это время.';
$string['teachervalidationerror'] = 'Вы можете планировать сеанс только для себя.';
$string['timeend'] = 'Время окончания';
$string['timeendvalidationerror'] = 'Сеанс должен быть активным по крайней мере до {$a}.';
$string['timestart'] = 'Время начала';
$string['timetovalidationerror'] = 'Конец сеанса не должен быть ранее его начала.';
