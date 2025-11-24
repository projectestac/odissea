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
 * Strings for component 'attendance', language 'ru', version '4.5'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'Н';
$string['Afull'] = 'Не был';
$string['Eacronym'] = 'У';
$string['Efull'] = 'Уважительная причина';
$string['Lacronym'] = 'О';
$string['Lfull'] = 'Опоздал';
$string['Pacronym'] = 'П';
$string['Pfull'] = 'Присутствовал';
$string['absenteereport'] = 'Отчёт по отсутствующим';
$string['acronym'] = 'Сокращ.';
$string['add'] = 'Добавить';
$string['addedrecip'] = 'Добавлен {$a} новый получатель';
$string['addedrecips'] = 'Добавлены новые получатели: {$a}';
$string['addmultiplesessions'] = 'Несколько занятий';
$string['addsession'] = 'Добавить занятие';
$string['adduser'] = 'Добавить пользователя';
$string['addwarning'] = 'Добавить предупреждение';
$string['all'] = 'Все';
$string['allcourses'] = 'Все курсы';
$string['allowupdatestatus'] = 'Разрешить студентам обновлять свою посещаемость';
$string['allowupdatestatus_desc'] = 'Если включено, студенты смогут обновить свою посещаемость для занятия после того, как они уже самостоятельно её отметили.';
$string['allowupdatestatus_help'] = 'Если включено, студенты смогут обновить свою посещаемость для занятия после того, как они уже самостоятельно её отметили.';
$string['allpast'] = 'Все прошедшие';
$string['allsessions'] = 'Все занятия';
$string['allsessionstotals'] = 'Итоги для выбранных занятий';
$string['attendance:addinstance'] = 'Добавить новый элемент курса «Посещаемость»';
$string['attendance:canbelisted'] = 'Отображается в реестре';
$string['attendance:changeattendances'] = 'Редактирование посещаемости';
$string['attendance:changepreferences'] = 'Изменение настроек';
$string['attendance:export'] = 'Экспорт отчетов';
$string['attendance:import'] = 'Импортировать занятия из файла (CSV)';
$string['attendance:manageattendances'] = 'Управление посещаемостью';
$string['attendance:managetemporaryusers'] = 'Управлять временными пользователями';
$string['attendance:manualautomark'] = 'Разрешить автоматическую отметку посещаемости вручную';
$string['attendance:takeattendances'] = 'Отметка посещаемости';
$string['attendance:view'] = 'Просмотр посещаемости';
$string['attendance:viewreports'] = 'Просмотр отчетов';
$string['attendance:viewsummaryreports'] = 'Просматривать сводные отчеты по курсу';
$string['attendance:warningemails'] = 'Может быть подписан на письма электронной почты  с отсутствующими пользователями';
$string['attendance_already_submitted'] = 'Ваша посещаемость уже была отмечена.';
$string['attendance_no_status'] = 'Статус не доступен — возможно вы опоздали с отметкой посещаемости.';
$string['attendancedata'] = 'Информация о посещаемости';
$string['attendancefile'] = 'Файл посещаемости (формат CSV)';
$string['attendancefile_help'] = 'Файл должен быть CSV-файлом со строкой заголовка и полями для идентификации пользователя и времени, когда было отмечено посещение, например (email,scantime) или (username,time)';
$string['attendancegrade'] = 'Оценка за посещаемость';
$string['attendancenotset'] = 'Вы должны отметить свою посещаемость';
$string['attendancenotstarted'] = 'Пока нет отметок о посещаемости в данном курсе';
$string['attendancepercent'] = 'Процент посещаемости';
$string['attendancereport'] = 'Посещаемость';
$string['attendanceslogged'] = 'Отметки о посещаемости внесены в журнал';
$string['attendancestaken'] = 'Посещаемость отмечена';
$string['attendancesuccess'] = 'Информация о присутствии успешно запомнена';
$string['attendanceupdated'] = 'Информация о присутствии успешно обновлена';
$string['attendanceuserreport'] = 'Отчёт о посещаемости';
$string['attforblockdirstillexists'] = 'старый каталог mod/attforblock еще существует — вы должны удалить его на сервере перед запуском этого обновления.';
$string['attrecords'] = 'Отметок о посещаемости';
$string['autoassignstatus'] = 'Автоматически выбирать самый высокий доступный статус';
$string['autoassignstatus_help'] = 'Если параметр включен, студентам автоматически ставится самый высокий доступный статус.';
$string['automark'] = 'Автоматическая отметка';
$string['automark_help'] = 'Позволяет автоматически выполнять отметку посещаемости.
«Да» — студенты будут автоматически отмечены, исходя из их первого входа в курс.
«Помечать не отмеченными в конце занятия» — всем студентам, не отметившим свое присутствие на занятии, будет проставлен статус, выбранный в качестве статуса «не отмечен».';
$string['automarkall'] = 'Да';
$string['automarkclose'] = 'Помечать не отмеченными в конце занятия';
$string['automarkingcomplete'] = 'Завершить автоматическую отметку';
$string['automarkingnotavailableyet'] = 'Это занятие использует автоматическую отметку посещаемости по окончании занятия и занятие ещё не завершилось.';
$string['automarkingnotenabled'] = 'Автоматическая отметка не разрешена для этого занятия';
$string['automarktask'] = 'Отметить для занятий, требующих автоматической отметки посещаемости';
$string['automarkuseempty'] = 'Обработка доступности статусов при автоматической отметке';
$string['automarkuseempty_desc'] = 'Если включено, то статусы, у которых значение параметра «Доступно для студентов» пусто/не задано, будут доступны во время автоматической отметки';
$string['autorecorded'] = 'автоматически записан системой';
$string['availability'] = 'Доступность для самостоятельной отметки';
$string['availability_help'] = 'Ограничить доступность данного статуса. <br> Если выбран вариант «Ограниченное время», укажите количество минут, в течение которых этот статус будет доступен после начала занятия. Применимо, когда студенты сами отмечают свою посещаемость.';
$string['availabilityalways'] = 'Всегда';
$string['availabilitylimitedtime'] = 'Ограниченное время';
$string['availabilityno'] = 'Нет';
$string['availablebeforesession'] = 'Доступен до начала занятия';
$string['availablebeforesession_help'] = 'Если студенты сами отмечают свою посещаемость, разрешить выбирать этот статус до начала занятия.';
$string['averageattendance'] = 'Средняя посещаемость';
$string['averageattendancegraded'] = 'Средняя посещаемость';
$string['backtoparticipants'] = 'Назад к списку участников';
$string['below'] = 'Меньше {$a}%';
$string['calclose'] = 'Закрыть';
$string['calendarevent'] = 'Создавать событие в календаре для занятия';
$string['calendarevent_help'] = 'Если включен, в календаре будет создано событие для этого занятия.
Если отключен, все существующие события в календаре для этого занятия будут удалены.';
$string['caleventcreated'] = 'Событие в календаре для занятия успешно создано';
$string['caleventdeleted'] = 'Событие в календаре для занятия успешно удалено';
$string['calmonths'] = 'Январь,Февраль,Март,Апрель,Май,Июнь,Июль,Август,Сентябрь,Октябрь,Ноябрь,Декабрь';
$string['calshow'] = 'Выбрать дату';
$string['calweekdays'] = 'Вс,Пн,Вт,Ср,Чт,Пт,Сб';
$string['cannottakeforgroup'] = 'Вы не можете отмечать посещаемость для группы «{$a}»';
$string['cannottakethisgroup'] = 'Вы не являетесь членом группы курса, к которой относится данное занятие, ваша посещаемость не была записана.';
$string['cantaddstatus'] = 'Вы должны задать аббревиатуру и описание при добавлении нового статуса.';
$string['canthidestatus'] = 'Вы не можете скрыть этот статус, потому что он уже используется в рамках данного элемента «Посещаемость» в курсе';
$string['categoryreport'] = 'Отчет по категории курсов';
$string['changeattendance'] = 'Изменить посещаемость';
$string['changeduration'] = 'Изменить продолжительность';
$string['changesession'] = 'Изменить занятие';
$string['checkweekdays'] = 'Выберите дни недели, которые попадают в выбранный вами диапазон дат занятий.';
$string['closed'] = 'Это занятие сейчас не доступно для самостоятельной отметки посещаемости';
$string['column'] = 'колонка';
$string['columnmap'] = 'Соответствие колонок';
$string['columnmap_help'] = 'Для каждого из представленных полей выберите соответствующую колонку в CSV-файле';
$string['columns'] = 'колонок';
$string['commonsession'] = 'Все студенты';
$string['commonsessions'] = 'Все студенты';
$string['confirm'] = 'Подтвердить';
$string['confirmcolumnmappings'] = 'Подтвердить соответствие колонок';
$string['confirmdeletehiddensessions'] = 'Вы уверены, что хотите удалить занятия ({$a->count}), запланированные до даты начала курса ({$a->date})?';
$string['confirmdeleteuser'] = 'Вы уверены, что хотите удалить пользователя «{$a->full name}» ({$a->email})?<br/>Все записи о его посещаемости будут удалены безвозвратно.';
$string['copyfrom'] = 'Копировать данные посещаемости из занятия';
$string['countofselected'] = 'Выбрано занятий';
$string['course'] = 'Курс';
$string['coursemessage'] = 'Отправлять сообщение участникам курса';
$string['courseshortname'] = 'Краткое название курса';
$string['coursesummary'] = 'Сводный отчет по курсу';
$string['createmultiplesessions'] = 'Создать несколько занятий';
$string['createmultiplesessions_help'] = 'Эта функция позволяет создать несколько занятий за один шаг.
Занятия начинаются с даты основного занятия и продолжаются до даты «Повторять до».

  * <strong>Повторять по</strong>: Выберите дни недели, когда будут проходить занятия (например, Понедельник/Среда/Пятница).
  * <strong>Повторять каждые</strong>: Позволяет задать частоту занятий. Если ваши занятия будут проходить каждую неделю, выберите 1; если раз в две недели — выберите 2; раз в три недели — выберите 3 и т. д.
  * <strong>Повторять до</strong>: Выберите последний день занятий (последний день отметки вами посещаемости занятий).';
$string['createonesession'] = 'Создать одно занятие для курса';
$string['csvdelimiter'] = 'Разделитель CSV';
$string['currentlyselectedusers'] = 'Выбранные пользователи';
$string['customexportfields'] = 'Экспортировать пользовательские поля профиля пользователя';
$string['customexportfields_help'] = 'Дополнительные пользовательские поля профиля пользователя для отображения в отчете для экспорта.';
$string['customfields'] = 'Пользовательские поля для занятия';
$string['date'] = 'Дата';
$string['days'] = 'Дни';
$string['defaultdisplaymode'] = 'Режим отображения по умолчанию';
$string['defaults'] = 'По умолчанию';
$string['defaultsessionsettings'] = 'Настройки занятия по умолчанию';
$string['defaultsessionsettings_help'] = 'Эти настройки определяют значения по умолчанию для всех новых занятий';
$string['defaultsettings'] = 'Настройки посещаемости по умолчанию';
$string['defaultsettings_help'] = 'Эти настройки определяют значения по умолчанию для всех новых отметок посещаемости';
$string['defaultstatus'] = 'Набор статусов по умолчанию';
$string['defaultsubnet'] = 'Сетевой адрес по умолчанию';
$string['defaultsubnet_help'] = 'Отметка посещаемости может быть ограничена конкретными подсетями путем задания списка частичных или полных IP-адресов, перечисленных через запятую. Это значение по умолчанию будет использоваться при создании новых занятий.';
$string['defaultview'] = 'Вид по умолчанию при входе в систему';
$string['defaultview_desc'] = 'Этот вид по умолчанию будет показан учителям при первом входе в систему.';
$string['defaultwarnings'] = 'Набор предупреждений по умолчанию';
$string['defaultwarningsettings'] = 'Настройки предупреждений по умолчанию';
$string['defaultwarningsettings_help'] = 'Эти настройки определяют значения по умолчанию для всех новых предупреждений';
$string['delete'] = 'Удалить';
$string['deletecheckfull'] = 'Вы точно уверены, что хотите полностью удалить  «{$a}», включая все данные пользователей?';
$string['deletedgroup'] = 'Связанная с этим занятием группа была удалена';
$string['deletehiddensessions'] = 'Удалить все скрытые занятия';
$string['deletelogs'] = 'Удалить информацию о посещаемости';
$string['deleteselected'] = 'Удалить выбранные';
$string['deletesession'] = 'Удалить занятие';
$string['deletesessions'] = 'Удалить все занятия';
$string['deleteuser'] = 'Удалить пользователя';
$string['deletewarningconfirm'] = 'Вы уверены, что хотите удалить это предупреждение?';
$string['deletingsession'] = 'Удаление занятия из курса';
$string['deletingstatus'] = 'Удаление статуса из курса';
$string['description'] = 'Описание';
$string['display'] = 'Отображать';
$string['displaymode'] = 'Режим отображения';
$string['donotusepaging'] = 'Не разбивать на страницы';
$string['downloadexcel'] = 'Скачать в формате Excel';
$string['downloadooo'] = 'Скачать в формате OpenOffice';
$string['downloadtext'] = 'Скачать в текстовом формате';
$string['duration'] = 'Продолжительность';
$string['editsession'] = 'Редактировать занятие';
$string['edituser'] = 'Редактировать пользователя';
$string['emailcontent'] = 'Текст письма электронной почты';
$string['emailcontent_default'] = 'Здравствуйте, %userfirstname%!
Ваша посещаемость в курсе «%coursename%» (элемент «%attendancename%») упала ниже %warningpercent% и составляет сейчас %percent% — надеемся, что с Вами всё в порядке!

Чтобы получить максимум от этого курса, Вам нужно улучшить свою посещаемость. Пожалуйста напишите, если вам требуется какая-либо помощь.';
$string['emailcontent_help'] = 'Из этого поля берется текст письма для отправки студенту. Могут использоваться следующие подстановочные поля:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Тема письма';
$string['emailsubject_default'] = 'Предупреждение о посещаемости';
$string['emailsubject_help'] = 'Из этого поля берется тема письма при отправке предупреждения студенту.';
$string['emailuser'] = 'Отправлять письмо электронной почтой пользователю';
$string['emailuser_help'] = 'Если включен, предупреждение будет отправлено студенту.';
$string['emptyacronym'] = 'Пустые аббревиатуры не допускаются. Строка статуса не обновлена.';
$string['emptydescription'] = 'Пустые описания не допускаются. Строка статуса не обновлена.';
$string['enablecalendar'] = 'Создавать события в календаре';
$string['enablecalendar_desc'] = 'Если включен, для каждого занятия будет создано событие в календаре. После изменения этой настройки вы должны выполнить сброс календарного отчета.';
$string['enablewarnings'] = 'Включить предупреждения';
$string['enablewarnings_desc'] = 'Позволяет определить набор предупреждений для посещаемости и отправлять пользователям уведомления электронной почтой, когда посещаемость падает ниже заданного порога. <br/><strong>ВНИМАНИЕ: Это новая функция, она не была всесторонне протестирована. Пожалуйста, используйте её на свой страх и риск и оставьте отзыв в форумах на moodle.org, если сможете подтвердить, что она работает правильно.</strong>';
$string['encoding'] = 'Кодировка';
$string['encoding_help'] = 'Это относится к типу кодировки штрих-кода, используемого на идентификационной карте студента. Типичные типы схем кодирования штрих-кодов: Code-39, Code-128 и UPC-A.';
$string['endofperiod'] = 'Конец периода';
$string['endtime'] = 'Время завершения занятия';
$string['enrolmentend'] = 'Подписка на курс заканчивается {$a}';
$string['enrolmentstart'] = 'Подписка на курс начинается с {$a}';
$string['enrolmentsuspended'] = 'Подписка на курс приостановлена';
$string['enterpassword'] = 'Введите пароль';
$string['error:coursehasnoattendance'] = 'В  курсе с кратким названием «{$a}» нет элементов «Посещаемость».';
$string['error:coursenotfound'] = 'Не удается найти курс с кратким названием «{$a}».';
$string['error:qrcode'] = 'Разрешение студентам отмечать собственную посещаемость должно быть включено для использования QR-кода! Пропускаем.';
$string['error:sessioncourseinvalid'] = 'Курс для занятия не правильный! Пропускаем.';
$string['error:sessiondateinvalid'] = 'Дата для занятия не правильная! Пропускаем.';
$string['error:sessionendinvalid'] = 'Время окончания занятия не правильное! Пропускаем.';
$string['error:sessionstartinvalid'] = 'Время начала занятия не правильное! Пропускаем.';
$string['error:statusnotfound'] = 'Пользователю {$a->extuser} задано такое значение статуса, которое не удаётся найти: {$a->status}';
$string['error:timenotreadable'] = 'Пользователю {$a->extuser} задано такое значение времени сканирования, которое не удаётся преобразовать с помощью strtotime: {$a->scantime}';
$string['error:userduplicate'] = 'Пользователь {$a} дважды найден в файле импорта. Пожалуйста, включайте в файл импорта только по одной строке для каждого пользователя.';
$string['error:usernotfound'] = 'Пользователя со значением {$a->extuser} в поле {$a->userfield} не удаётся найти в этом курсе';
$string['errorgroupsnotselected'] = 'Выберите одну или более групп';
$string['errorinaddingsession'] = 'Ошибка при добавлении занятия';
$string['erroringeneratingsessions'] = 'Ошибка при создании занятий';
$string['eventdurationupdated'] = 'Продолжительность занятия изменена';
$string['eventreportviewed'] = 'Отчёт о посещаемости просмотрен';
$string['eventscreated'] = 'Созданы события в календаре';
$string['eventsdeleted'] = 'Удалены события в календаре';
$string['eventsessionadded'] = 'Занятие добавлено';
$string['eventsessiondeleted'] = 'Занятие удалено';
$string['eventsessionipshared'] = 'Конфликт IP-адреса при самостоятельной отметке посещаемости';
$string['eventsessionsimported'] = 'Занятия импортированы';
$string['eventsessionupdated'] = 'Занятие обновлено';
$string['eventstatusadded'] = 'Статус добавлен';
$string['eventstatusupdated'] = 'Статус обновлен';
$string['eventstudentattendancesessionsupdated'] = 'Отчёт о занятии обновлен';
$string['eventstudentattendancesessionsviewed'] = 'Отчёт о занятии просмотрен';
$string['eventtaken'] = 'Посещаемость отмечена';
$string['eventtakenbystudent'] = 'Посещаемость отмечена студентом';
$string['export'] = 'Экспорт';
$string['extrarestrictions'] = 'Дополнительные ограничения';
$string['formattexttype'] = 'Форматирование';
$string['from'] = 'с:';
$string['gradebookexplanation'] = 'Оценка в журнале оценок';
$string['gradebookexplanation_help'] = 'Ваша оценка в модуле «Посещаемость» рассчитывается как отношение количества баллов, полученных за посещаемость до текущей даты, к максимальному количеству баллов, которые вы могли получить за посещаемость до текущей даты; будущие занятия в этой оценке не учитываются. В журнале оценок ваша оценка основывается на доле баллов, полученных за посещаемость, и максимальном количестве баллов, которые вы можете получить за посещаемость за весь курс, включая будущие занятия.  Таким образом, оценки посещаемости в баллах, отображаемые в модуле «Посещаемость» и в журнале оценок могут различаться, однако доля (процент) будет совпадать.

Например, если вы на текущий момент заработали 8 баллов из 10 (80% посещаемости) и максимальный балл за посещаемость всего курса в журнале оценок — 50, то в модуле «Посещаемость» отобразится оценка «8/10», а в журнале оценок — «40/50». Вы еще не заработали 40 баллов, но на данный момент ваш процент посещаемости (80%) соответствует этим баллам. Ваши баллы в модуле «Посещаемость» никогда не могут уменьшаться, т. к. они зависят только от посещаемости на текущую дату; однако, оценка в журнале оценок может увеличиваться и уменьшаться, в зависимости от вашей будущей успеваемости, т. к. эта оценка зависит от посещаемости на протяжении всего курса.';
$string['graded'] = 'Оцененных занятий';
$string['gridcolumns'] = 'Колонки сетки';
$string['group'] = 'Группа';
$string['groups'] = 'Группы';
$string['groupsession'] = 'Группа студентов';
$string['groupsessionsby'] = 'Группировать занятия по';
$string['hiddensessions'] = 'Скрытых занятий';
$string['hiddensessions_help'] = 'Занятия скрываются, если они запланированы на даты ранее даты начала курса.

Вы можете использовать эту возможность для скрытия старых занятий вместо их удаления. Только видимые занятия будут учитываться в журнале оценок.';
$string['hiddensessionsdeleted'] = 'Все скрытые занятия были удалены';
$string['hideextrauserdetails'] = 'Скрыть дополнительную информацию о пользователях';
$string['hidensessiondetails'] = 'Скрыть информацию о занятии';
$string['identifyby'] = 'Идентифицировать студента по';
$string['import'] = 'Импортировать';
$string['importfile'] = 'Файл импорта';
$string['importfile_help'] = 'Импортировать файл';
$string['importsessions'] = 'Импортировать занятия';
$string['importstatus'] = 'Поле статуса';
$string['importstatus_help'] = 'Позволяет включить в импорт значение статуса — например, значения типа П, О или Н.';
$string['includeabsentee'] = 'Включать занятие в отчёт по отсутствующим';
$string['includeabsentee_help'] = 'Если включен, это занятие будет учтено при формировании отчёта по отсутствующим.';
$string['includeall'] = 'Включить все занятия';
$string['includedescription'] = 'Добавить описание занятия в заголовок';
$string['includenottaken'] = 'Включить не прошедшие занятия';
$string['includeqrcode'] = 'Включить QR-код';
$string['includeremarks'] = 'Включить примечания';
$string['incorrectpassword'] = 'Вы ввели неправильный пароль, поэтому Ваше посещение занятия не было отмечено. Пожалуйста, введите правильный пароль.';
$string['incorrectpasswordshort'] = 'Неправильный пароль, посещение не отмечено.';
$string['indetail'] = 'Подробнее...';
$string['indicator:cognitivedepth'] = 'Посещаемость: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на глубине познания, достигнутой студентом при выполнении Посещаемости.';
$string['indicator:cognitivedepthdef'] = 'Посещаемость: познавательный аспект';
$string['indicator:cognitivedepthdef_help'] = 'Участник достиг данного процента познавательного взаимодействия, предлагаемого посещаемостью в течение этого интервала анализа (уровни = нет просмотра, просмотр)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Посещаемость: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при выполнении Посещаемости.';
$string['indicator:socialbreadthdef'] = 'Посещаемость: социальный аспект';
$string['indicator:socialbreadthdef_help'] = 'Участник достиг данного процента социальной активности, предлагаемой посещаемостью в течение этого интервала анализа (уровни = без участия, единственный участник)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Вы должны выбрать действие';
$string['invalidemails'] = 'Вы должны указать адреса электронной почты существующих пользователей. Не удается найти: {$a}';
$string['invalidimportfile'] = 'Неправильный формат файла.';
$string['invalidsessionenddate'] = 'Эта дата не может быть ранее даты начала занятия';
$string['invalidsessionendtime'] = 'Время завершения должно быть больше времени начала';
$string['invalidstatus'] = 'Вы выбрали неправильный статус, попробуйте снова';
$string['iptimemissing'] = 'Неправильное количество минут для разъединения';
$string['jumpto'] = 'Перейти к занятию';
$string['keepsearching'] = 'Продолжать искать';
$string['lasttaken'] = 'Последние отмеченные посещаемости';
$string['manualtriggerauto'] = 'Вручную включать автоматическую отметку';
$string['marksessionimportcsvhelp'] = 'Эта форма позволяет Вам загрузить CSV-файл, содержащий идентификатор пользователя и статус — поле статуса может быть сокращением или временем, когда эта посещаемость была отмечена для данного пользователя. Если передаётся время, то система будет пытаться проставить статус с максимально возможным баллом, доступным в указанный момент времени.';
$string['maxpossible'] = 'Возможный максимум';
$string['maxpossible_help'] = 'Показывает балл, который каждый пользователь может получить, если он получит максимальные баллы за все не отмеченные занятия (прошедшие и будущие):
    <ul>
    <li><strong>Баллы</strong>: максимальный балл, который каждый пользователь может получить за все занятия.</li>
    <li><strong>Процент</strong>: максимальный процент, который каждый пользователь может получить за все занятия.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Максимальный возможный процент';
$string['maxpossiblepoints'] = 'Максимальные возможные баллы';
$string['maxwarn'] = 'Максимальное число предупреждений на электронную почту';
$string['maxwarn_help'] = 'Максимальное количество раз для отправки предупреждения (по каждому занятию отправляется только одно предупреждение)';
$string['mergeuser'] = 'Объединить пользователя';
$string['messagedselecteduserfailed'] = 'Не удалось отправить сообщение одному или нескольким пользователям. Пожалуйста, включите отладку, чтобы выяснить подробности.';
$string['mobilesessionfrom'] = 'Показывать занятия после даты';
$string['mobilesessionfrom_help'] = 'Позволяет ограничить список занятий для отметки посещаемости в приложении — показывать только те занятия, которые начались после этой даты';
$string['mobilesessionto'] = 'Показать будущие занятия';
$string['mobilesessionto_help'] = 'Позволяет ограничить список занятий, чтобы показать только небольшое количество будущих занятий.';
$string['mobilesettings'] = 'Настройки мобильного приложения';
$string['mobilesettings_help'] = 'Эти настройки управляют поведением мобильного приложения Moodle';
$string['modulename'] = 'Посещаемость';
$string['modulename_help'] = 'Модуль «Посещаемость» позволяет учителю вести учет посещаемости занятий, а студентам видеть информацию о их собственной посещаемости.

Учитель может создать несколько занятий и отмечать их посещаемость как статусы «Присутствовал», «Не был», «Опоздал», «Уважительная причина» или изменить эти статусы так, чтобы они соответствовали потребностям учителя.

В модуле доступны отчеты по всем студентам или по каждому студенту отдельно.';
$string['modulenameplural'] = 'Посещаемость';
$string['months'] = 'Месяц';
$string['moreattendance'] = 'Посещаемость отмечена на этой странице';
$string['moveleft'] = 'Переместить влево';
$string['moveright'] = 'Переместить вправо';
$string['multisessionexpanded'] = 'Развернуть «Несколько занятий»';
$string['multisessionexpanded_desc'] = 'Показывать по умолчанию настройки «Несколько занятий» в развернутом виде при создании новых занятий.';
$string['mustselectusers'] = 'Необходимо выбрать пользователей для экспорта';
$string['name'] = 'Имя';
$string['newdate'] = 'Новая дата';
$string['newduration'] = 'Новая продолжительность';
$string['newstatusset'] = 'Новый набор статусов';
$string['noabsentstatusset'] = 'Используемый набор статусов не содержит статус, который нужно использовать, когда посещение не отмечено.';
$string['noattendanceusers'] = 'Невозможно экспортировать данные, так как нет записанных на курс студентов.';
$string['noattforuser'] = 'Нет отметок посещаемости для этого пользователя';
$string['noautomark'] = 'Отключено';
$string['nocapabilitytotakethisattendance'] = 'Вы попытались изменить посещаемость занятия с cmid: {$a}, на изменение которого у вас нет прав.';
$string['nodescription'] = 'Обычное занятие';
$string['noeventstoreset'] = 'Нет событий в календаре, нуждающихся в обновлении.';
$string['nogroups'] = 'Данный элемент настроен на использование групп, но в курсе не создано ни одной группы.';
$string['noguest'] = 'Гость не может видеть информацию о посещаемости';
$string['noofdaysabsent'] = 'Дней пропусков';
$string['noofdaysexcused'] = 'Дней пропусков по ув. причине';
$string['noofdayslate'] = 'Дней опозданий';
$string['noofdayspresent'] = 'Дней присутствия';
$string['nosessiondayselected'] = 'Не выбран день занятия';
$string['nosessionexists'] = 'В данном курсе отсутствуют занятия';
$string['nosessionsselected'] = 'Не выбрано ни одного занятия';
$string['notfound'] = 'Элемент курса «Посещаемость» не найден в данном курсе!';
$string['notifytask'] = 'Отправлять предупреждения пользователям';
$string['notmember'] = 'не&nbsp;член';
$string['notset'] = 'не задан';
$string['nounmarkedstatusset'] = 'Для занятия (id:{$a->sessionid}) не настроен статус «не отмечено», чтобы исправить это, обновите <a href="{$a->url}">Набор статусов</a>.';
$string['noupgradefromthisversion'] = 'Модуль «Посещаемость» не может быть обновлен с установленной у вас версии attforblock. - Удалите attforblock или обновите его до последней версии перед установкой нового модуля attendance';
$string['numsessions'] = 'Число занятий';
$string['numsessionstaken'] = 'Количество отмеченных занятий';
$string['olddate'] = 'Старая дата';
$string['onactivitycompletion'] = 'По выполнению элемента курса';
$string['onlyselectedusers'] = 'Экспортировать конкретных пользователей';
$string['overallsessions'] = 'По всем занятиям';
$string['overallsessions_help'] = 'Показывает статистику по всем занятиям, включая еще не отмеченные (прошедшие и будущие):
    <ul>
    <li><strong>Занятия</strong>: общее число занятий.</li>
    <li><strong>Баллы</strong>: баллы, набранные за посещаемость на занятиях.</li>
    <li><strong>Процент</strong>: доля набранных баллов от максимально возможного количества баллов за все занятия.</li>
    </ul>';
$string['oversessionstaken'] = 'По отмеченным занятиям';
$string['oversessionstaken_help'] = 'Показывает статистику по занятиям, на которых отмечалась посещаемость:
    <ul>
    <li><strong>Занятия</strong>: число занятий, на которых отмечалась посещаемость.</li>
    <li><strong>Баллы</strong>: баллы, набранные за посещаемость на отмеченных занятиях.</li>
    <li><strong>Процент</strong>: доля набранных баллов от максимально возможного количества баллов за занятия, на которых отмечалась посещаемость.</li>
    </ul>';
$string['pageof'] = 'Страница {$a->page} из {$a->numpages}';
$string['participant'] = 'Участник';
$string['password'] = 'Пароль';
$string['passwordgrp'] = 'Пароль студента';
$string['passwordgrp_help'] = 'Если задан, студенты должны будут ввести пароль перед тем, как они смогут отметить свое присутствие на занятии. Если поле пустое, пароль не нужен.';
$string['passwordheader'] = 'Для отметки посещаемости используйте пароль, указанный ниже';
$string['passwordrequired'] = 'Вы должны ввести пароль перед тем как отметить своё посещение этого занятия.';
$string['percentage'] = 'Процент';
$string['percentageallsessions'] = 'Процент по всем занятиям';
$string['percentagesessionscompleted'] = 'Процент по всем посещенным занятиям';
$string['pluginadministration'] = 'Управление модулем «Посещаемость»';
$string['pluginname'] = 'Посещаемость';
$string['points'] = 'Баллы';
$string['pointsallsessions'] = 'Баллы по всем занятиям';
$string['pointssessionscompleted'] = 'Баллы по всем посещенным занятиям';
$string['preferences_desc'] = 'Изменения в наборе статусов повлияют на все существующие отметки посещаемости занятий и могут повлиять на оценку по курсу.';
$string['preventsharederror'] = 'Самостоятельная отметка посещаемости для занятия была отключена, так как это устройство, похоже, уже было использовано для отметки посещаемости другим студентом.';
$string['preventsharedip'] = 'Запретить студентам использовать общий IP-адрес';
$string['preventsharedip_help'] = 'Запретить студентам использовать одно и то же устройство (определяется по IP-адресу) для отметки посещаемости другими студентами.';
$string['preventsharediptime'] = 'Время, через которое IP-адрес может быть повторно использован (минуты)';
$string['preventsharediptime_help'] = 'Разрешить повторное использование IP-адреса для отметки посещения в этом занятии по истечении заданного времени.';
$string['preview'] = 'Просмотр файла';
$string['previewhtml'] = 'Просмотр в формате HTML';
$string['priorto'] = 'Дата занятия указана ранее даты начала курса ({$a}), поэтому новые занятия, запланированные до этой даты, будут скрыты (не доступны). Вы можете изменить дату начала курса в любой момент (смотрите настройки курса) для того, чтобы получить доступ к более ранним занятиям.<br><br>Пожалуйста, измените дату занятия или просто щелкните снова на кнопке «Добавить занятие» для подтверждения.';
$string['privacy:metadata:attendancelog'] = 'Журнал отметок о посещаемости пользователей.';
$string['privacy:metadata:attendancesessions'] = 'Занятия, для которых будет записываться посещаемость.';
$string['privacy:metadata:attendancewarningdone'] = 'Журнал предупреждений, отправленных пользователям по записям об их посещаемости.';
$string['privacy:metadata:duration'] = 'Продолжительность занятия в секундах';
$string['privacy:metadata:groupid'] = 'ID группы, связанной с занятием.';
$string['privacy:metadata:ipaddress'] = 'IP-адрес, с которого отмечена посещаемость.';
$string['privacy:metadata:lasttaken'] = 'Момент времени последней отметки посещаемости.';
$string['privacy:metadata:lasttakenby'] = 'ID последнего пользователя, посещаемость которого была отмечена в этом занятии';
$string['privacy:metadata:notifyid'] = 'ID отметки посещаемости занятия, с которой связано предупреждение.';
$string['privacy:metadata:remarks'] = 'Комментарии о посещаемости пользователя.';
$string['privacy:metadata:sessdate'] = 'Момент времени, когда занятие началось.';
$string['privacy:metadata:sessionid'] = 'ID занятия с отметкой посещаемости.';
$string['privacy:metadata:statusid'] = 'ID статуса посещения студента.';
$string['privacy:metadata:statusset'] = 'Набор статусов, к которому относится ID статуса.';
$string['privacy:metadata:studentid'] = 'ID студента, чья посещаемость была отмечена.';
$string['privacy:metadata:takenby'] = 'ID пользователя, который отмечал посещаемость студента.';
$string['privacy:metadata:timemodified'] = 'Момент времени, когда занятие последний раз корректировалось.';
$string['privacy:metadata:timesent'] = 'Момент времени, когда было отправлено предупреждение.';
$string['privacy:metadata:timetaken'] = 'Момент времени отметки посещаемости студента.';
$string['privacy:metadata:userid'] = 'ID пользователя, которому отправляется предупреждение.';
$string['processingfile'] = 'Обработка файла';
$string['qr_cookie_error'] = 'QR-код занятия просрочен.';
$string['qr_pass_wrong'] = 'QR-код пароля неправильный или просрочен.';
$string['qrcode'] = 'QR-код';
$string['qrcodeandpasswordheader'] = 'Отсканируйте QR-код ниже или используйте пароль, указанный ниже, чтобы отметить вашу посещаемость';
$string['qrcodeheader'] = 'Отсканируйте QR-код, показанный ниже, чтобы отметить вашу посещаемость';
$string['qrcodevalidafter'] = 'секунд';
$string['qrcodevalidbefore'] = 'QR-код действителен в течение';
$string['randompassword'] = 'Случайный пароль';
$string['remark'] = 'Примечание для: {$a}';
$string['remarks'] = 'Заметки';
$string['repeatasfollows'] = 'Повторить занятие выше следующим образом';
$string['repeatevery'] = 'Повторять каждые';
$string['repeaton'] = 'Повторять по';
$string['repeatuntil'] = 'Повторять до';
$string['report'] = 'Отчет';
$string['reportsessiondate'] = 'Дата занятия';
$string['reportsessionduration'] = 'Длительность занятия';
$string['reportsessionlasttaken'] = 'Время отметки последнего занятия (преподаватель)';
$string['required'] = 'Обязательное*';
$string['requiredentries'] = 'Временные записи заменяют записи о посещаемости участника';
$string['requiredentry'] = 'Руководство по объединению временных пользователей';
$string['requiredentry_help'] = 'p align="center"><b>Посещаемость</b></p>
<p align="left"><strong>Объединить учетные записи</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Пользователь Moodle</th>
<th>Временный пользователь</th>
<th>Действие</th>
</tr>
<tr>
<td>Данные о посещаемости</td>
<td>Данные о посещаемости</td>
<td>Временный пользователь заменит пользователя Moodle</td>
</tr>
<tr>
<td>Нет данных о посещаемости</td>
<td>Данные о посещаемости</td>
<td>Посещаемость временного пользователя будет передана пользователю Moodle</td>
</tr>
<tr>
<td>Данные о посещаемости</td>
<td>Нет данных о посещаемости</td>
<td>Временный пользователь будет удален</td>
</tr>
<tr>
<td>Нет данных о посещаемости</td>
<td>Нет данных о посещаемости</td>
<td>Временный пользователь будет удален</td>
</tr>
</table>

</p>
<p align="left"><strong>Временный пользователь будет удален во всех случаях после операции объединения</strong></p>';
$string['requiresubnet'] = 'Требовать сетевой адрес';
$string['requiresubnet_help'] = 'Отметка посещаемости может быть ограничена для конкретных подсетей путем указания перечня частичных или полных IP-адресов, разделяемых запятыми.';
$string['resetcaledarcreate'] = 'События в календаре были включены, но некоторые существующие занятия не имеют соответствующих событий. Вы хотите создать события в календаре для всех существующих занятий?';
$string['resetcaledardelete'] = 'События в календаре были отключены, но некоторые существующие занятия имеют соответствующие события, которые следует удалить. Вы хотите удалить все существующие события?';
$string['resetcalendar'] = 'Сбросить календарь';
$string['resetdescription'] = 'Внимание! Чистка данных посещаемости удаляет информацию из БД. Вы можете просто скрыть старые занятия, изменив дату начала курса!';
$string['resetstatuses'] = 'Восстановить набор статусов по умолчанию';
$string['restoredefaults'] = 'Востановить значения по умолчанию';
$string['resultsperpage'] = 'Результатов на странице';
$string['resultsperpage_desc'] = 'Количество студентов, отображаемых на странице';
$string['rotateqrcode'] = 'Менять QR-код';
$string['rotateqrcode_cleartemppass_task'] = 'Задача очистки временных паролей, сгенерированных функцией смены QR-кода.';
$string['rotateqrcodeexpirymargin'] = 'Срок действия просроченного QR-кода/пароля (секунды)';
$string['rotateqrcodeexpirymargin_desc'] = 'Интервал времени (в секундах), в течение которого можно использовать просроченный QR-код/пароль.';
$string['rotateqrcodeinterval'] = 'Интервал смены QR-кода/пароля (секунды)';
$string['rotateqrcodeinterval_desc'] = 'Интервал времени (в секундах), после которого меняется QR-код/пароль.';
$string['save'] = 'Сохранить посещаемость';
$string['saveandshownext'] = 'Сохранить и показать следующую страницу';
$string['scantime'] = 'Время сканирования';
$string['scantime_help'] = 'Позволяет включать метку времени в файл импорта — будет предпринята попытка преобразовать переданную метку времени с помощью функции PHP strtotime и затем использовать настройки статуса посещаемости, чтобы решить, какой статус установить для пользователя';
$string['search:activity'] = 'Посещаемость — информация элемента';
$string['selectactivity'] = 'Выбрать элемент';
$string['session'] = 'Занятие';
$string['session_help'] = 'Занятие';
$string['sessionadded'] = 'Занятие успешно добавлено';
$string['sessionalreadyexists'] = 'В этот день занятие уже существует';
$string['sessiondate'] = 'Дата';
$string['sessiondays'] = 'Дни занятий';
$string['sessiondeleted'] = 'Занятие успешно удалено';
$string['sessiondescription'] = 'Описание занятия';
$string['sessionduplicate'] = 'Занятие-дублер существует в курсе «{$a->course}» для элемента «Посещаемость» с названием «{$a->activity}», {$a->date}';
$string['sessionexist'] = 'Занятие не добавлено (уже существует)!';
$string['sessiongenerated'] = 'Одно занятие было успешно сгенерировано';
$string['sessions'] = 'Занятия';
$string['sessionsallcourses'] = 'Все курсы';
$string['sessionsbyactivity'] = 'Элемент «Посещаемость»';
$string['sessionsbycourse'] = 'Курс';
$string['sessionsbydate'] = 'Неделя';
$string['sessionscompleted'] = 'Посещенные занятия';
$string['sessionscurrentcourses'] = 'Текущие курсы';
$string['sessionsgenerated'] = 'Занятия созданы - {$a}';
$string['sessionsids'] = 'Идентификаторы занятий:';
$string['sessionsnotfound'] = 'В выбранный диапазон времени не попадает ни одно занятие';
$string['sessionstartdate'] = 'Дата начала занятий';
$string['sessionstotal'] = 'Общее число занятий';
$string['sessionsupdated'] = 'Занятия обновлены';
$string['sessiontype'] = 'Тип';
$string['sessiontype_help'] = 'Вы можете добавить занятия для всех студентов или для группы студентов. Возможность добавлять занятия различных типов зависит от группового режима элемента курса.

* В групповом режиме «Нет групп» можно добавлять только занятия для всех студентов.
* В групповом режиме «Изолированные группы» можно добавлять только занятия для группы студентов.
* В групповом режиме «Видимые группы» можно добавлять занятия обоих типов.';
$string['sessiontypeshort'] = 'Тип';
$string['sessionunknowngroup'] = 'Занятие содержит неизвестные группы: {$a}';
$string['sessionupdated'] = 'Занятие успешно изменено';
$string['set_by_student'] = 'Отмечено студентом';
$string['setallstatuses'] = 'Задать статус для';
$string['setallstatusesto'] = 'Установить статус «{$a}»';
$string['setperiod'] = 'Разрешить по истечении заданного времени в минутах';
$string['settings'] = 'Настройки';
$string['setunmarked'] = 'Автоматически задавать, если посещение не отмечено';
$string['setunmarked_help'] = 'Если включено, этот статус будет проставлен в занятии, если студент не отметил свое посещение.';
$string['showdefaults'] = 'Показать значения по умолчанию';
$string['showduration'] = 'Показать продолжительность';
$string['showextrauserdetails'] = 'Показать дополнительную информацию о пользователе';
$string['showqrcode'] = 'Показать QR-код';
$string['showsessiondescriptiononreport'] = 'Показать описание занятия в отчёте';
$string['showsessiondescriptiononreport_desc'] = 'Показывать описание занятия в отчетах о посещаемости.';
$string['showsessiondetails'] = 'Показывать информацию о занятии';
$string['somedisabledstatus'] = '(Некоторые параметры были удалены после начала занятия.)';
$string['sortedgrid'] = 'Таблица';
$string['sortedlist'] = 'Список';
$string['startofperiod'] = 'Начало периода';
$string['starttime'] = 'Время начала';
$string['status'] = 'Статус';
$string['statusall'] = 'все';
$string['statusdeleted'] = 'Статус удален';
$string['statuses'] = 'Статусы';
$string['statusset'] = 'Набор статусов {$a}';
$string['statussetsettings'] = 'Набор статусов';
$string['statustotalcount'] = 'Статус {$a} — Итог';
$string['statustotalcountcurrentweek'] = 'Статус {$a} — Итог на текущей неделе';
$string['statustotalcountpreviousweek'] = 'Статус {$a} — Итог на предыдущей неделе';
$string['statusunselected'] = 'не выбран';
$string['strftimedm'] = '%d.%m';
$string['strftimedmw'] = '<nobr>%a %d.%m</nobr>';
$string['strftimedmy'] = '%d.%m.%Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H.%M';
$string['strftimedmyw'] = '%d.%m.%y (%a)';
$string['strftimeh'] = '%H';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID студента';
$string['studentmarked'] = 'Ваша посещаемость в этом занятии была отмечена.';
$string['studentmarking'] = 'Отметка студентом';
$string['studentpassword'] = 'Пароль студента';
$string['studentrecordingexpanded'] = 'Развернуть «Отметка студентом»';
$string['studentrecordingexpanded_desc'] = 'Показывать по умолчанию настройки «Отметка студентом» в развернутом виде при создании новых занятий.';
$string['studentscanmark'] = 'Разрешить студентам отмечать их собственную посещаемость';
$string['studentscanmark_desc'] = 'Если включено, учителя могут разрешить студентам отмечать их собственную посещаемость.';
$string['studentscanmark_help'] = 'Если включено, то студенты смогут изменять изменять статус своей посещаемости занятий.';
$string['studentscanmarksessiontime'] = 'Студенты отмечают посещаемость на протяжении занятия';
$string['studentscanmarksessiontime_desc'] = 'Если включено, то студенты могут отметить свое посещение только во время занятия.';
$string['studentscanmarksessiontimeend'] = 'Конец отметки посещения занятия (минуты)';
$string['studentscanmarksessiontimeend_desc'] = 'Если для занятия не указано время окончания, то в течение скольких минут студенты могут отметить свое посещение занятия.';
$string['studentsearlyopentime'] = 'Открыть занятие заранее для отметки посещаемости';
$string['studentsearlyopentime_help'] = 'Позволяет преподавателям открывать занятие заранее, что дает возможность провести отметку посещаемости до реального времени начала занятия.';
$string['submit'] = 'Отправить';
$string['submitattendance'] = 'Отправить посещаемость';
$string['submitattendancefuture'] = 'Сообщить о будущем отсутствии';
$string['submitpassword'] = 'Отправить пароль';
$string['subnet'] = 'Подсеть';
$string['subnetactivitylevel'] = 'Разрешить настраивать подсеть на уровне элемента';
$string['subnetactivitylevel_desc'] = 'Если включено, то учителя могут переопределять подсеть по умолчанию на уровне элемента при создании элемента «Посещаемость». Иначе при создании занятия будет использовано значение по умолчанию для сайта.';
$string['subnetwrong'] = 'Посещаемость может быть отмечена только из определенных мест, этот компьютер не входит в список разрешенных.';
$string['summary'] = 'Обзор';
$string['tablerenamefailed'] = 'Переименование старой таблицы attforblock в attendance не удалось';
$string['tactions'] = 'Действие';
$string['takeattendance'] = 'Отметить посещаемость';
$string['takensessions'] = 'Посещенные занятия';
$string['tcreated'] = 'Создано';
$string['tempaddform'] = 'Добавить временного пользователя';
$string['tempexists'] = 'Уже существует временный пользователь с таким адресом электронной почты';
$string['temptable'] = 'Список временных пользователей';
$string['tempuser'] = 'Временный пользователь';
$string['tempusermerge'] = 'Объединить временного пользователя';
$string['tempusers'] = 'Временные пользователи';
$string['tempusersedit'] = 'Редактировать временного пользователя';
$string['tempuserslist'] = 'Временные пользователи';
$string['thirdpartyemails'] = 'Уведомить других пользователей';
$string['thirdpartyemails_help'] = 'Список других пользователей, которые будут уведомлены (требуется наличие права mod/attendance:viewreports).';
$string['thirdpartyemailsubject'] = 'Предупреждение о посещаемости';
$string['thirdpartyemailtext'] = 'Посещаемость пользователя «{$a->firstname} {$a->lastname}» в курсе «{$a->coursename}» (элемент посещаемости «{$a->aname}») ниже, чем {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Вы получили это сообщение, так как учитель этого курса добавил ваш адрес электронной почты в список получателей';
$string['thiscourse'] = 'Текущий курс';
$string['time'] = 'Время';
$string['timeahead'] = 'Не удается создать несколько занятий, превышающих один год. Пожалуйста, исправьте даты начала и окончания.';
$string['timemodified'] = 'Время изменения';
$string['timetaken'] = 'Время отметки посещаемости';
$string['to'] = 'до:';
$string['todate'] = 'на дату';
$string['totalnumsessions'] = 'Общее число занятий';
$string['triggered'] = 'Первое уведомление';
$string['tuseremail'] = 'Адрес электронной почты';
$string['tusername'] = 'Полное имя';
$string['ungraded'] = 'Занятия без оценки';
$string['unknowngroup'] = 'Неизвестная группа';
$string['unknownstatus'] = 'Неизвестный ID статуса: {$a}';
$string['update'] = 'Обновить';
$string['updateattendance'] = 'Обновить посещаемость';
$string['uploadattendance'] = 'Загрузить посещаемость в CSV';
$string['usedefaultsubnet'] = 'Использовать по умолчанию';
$string['usemessageform'] = 'или использовать форму ниже для отправки сообщения выбранным студентам';
$string['userexistingstatus'] = 'Ваша посещаемость уже отмечена как <strong>{$a}</strong>. При необходимости используйте форму ниже, чтобы её изменить.';
$string['userexists'] = 'Уже существует реальный пользователь с таким адресом электронной почты';
$string['userid'] = 'ID пользователя';
$string['userimportfield'] = 'Поле пользователя во внешней БД';
$string['userimportfield_help'] = 'Поле из загруженного CSV, которое содержит идентификатор пользователя';
$string['userimportto'] = 'Поле пользователя в Moodle';
$string['userimportto_help'] = 'Поле Moodle, которое соответствует данным из экспортированного CSV';
$string['users'] = 'Пользователи для экспорта';
$string['usersessiongrade'] = 'Оценка пользователя за занятие';
$string['usersessionremarks'] = 'Примечания по пользователю за занятие';
$string['usersessiontaken'] = 'Время отметки посещаемости по пользователю за занятие';
$string['userstatus'] = 'Статус пользователя за занятие';
$string['usestatusset'] = 'Набор статусов';
$string['variable'] = 'переменную';
$string['variablesupdated'] = 'Переменные успешно обновлены';
$string['versionforprinting'] = 'версия для печати';
$string['viewmode'] = 'Режим просмотра';
$string['warnafter'] = 'Количество отмеченных занятий для отправки предупреждения';
$string['warnafter_help'] = 'Предупреждения будут отправляться только в том случае, если посещаемость пользователей будет отмечена как минимум для указанного здесь количества занятий.';
$string['warningdeleted'] = 'Предупреждение удалено';
$string['warningdesc'] = 'Эти предупреждения автоматически будут добавлены ко всем новым элементам «Посещаемость». Если одновременно сработает несколько предупреждений, то будет отправлено только одно предупреждение с самым низким уровнем порога.';
$string['warningdesc_course'] = 'Заданные здесь пороги предупреждений влияют на отчёт о прогулах и позволяют уведомлять об этом студентов и третьих лиц. Если одновременно сработает несколько предупреждений, то будет отправлено только одно предупреждение с самым низким уровнем порога.';
$string['warningfailed'] = 'Вы не можете создать предупреждение, использующее такой же порог и число занятий.';
$string['warningpercent'] = 'Предупреждать, если процент упадет ниже';
$string['warningpercent_help'] = 'Предупреждение будет срабатывать, когда общий процент упадет ниже этого числа.';
$string['warnings'] = 'Набор предупреждений';
$string['warningthreshold'] = 'Порог предупреждения';
$string['warningupdated'] = 'Обновленные предупреждения';
$string['week'] = 'неделя(и)';
$string['weekcommencing'] = 'Начало недели';
$string['weeks'] = 'Неделя';
$string['youcantdo'] = 'Вы ничего не можете сделать';
