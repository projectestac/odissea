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
 * Strings for component 'assign', language 'ru', version '4.1'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'Приложения к заданию';
$string['activitydate:submissionsdue'] = 'Срок сдачи:';
$string['activitydate:submissionsopen'] = 'Открывается:';
$string['activitydate:submissionsopened'] = 'Открыто с:';
$string['activityeditor'] = 'Инструкции к заданию';
$string['activityeditor_help'] = 'Действия, которые студент должен выполнить в этом задании. Текст отображается только на странице представления ответа, где учащиеся редактируют и отправляют свой ответ на задание.';
$string['activityoverview'] = 'У Вас есть задания, требующие внимания';
$string['addattempt'] = 'Разрешить еще одну попытку';
$string['addnewattempt'] = 'Добавить новый ответ';
$string['addnewattempt_help'] = 'Это создаст новый бланк для вашего ответа.';
$string['addnewattemptfromprevious'] = 'Добавить новый ответ на основе предыдущего';
$string['addnewattemptfromprevious_help'] = 'Это скопирует содержимое предыдущего ответа в бланк нового ответа на задание.';
$string['addnewgroupoverride'] = 'Добавить переопределение групп';
$string['addnewuseroverride'] = 'Добавить переопределение пользователя';
$string['addsubmission'] = 'Добавить ответ на задание';
$string['addsubmission_help'] = 'Вы пока не предоставили ответ на задание';
$string['allocatedmarker'] = 'Назначенный оценщик';
$string['allocatedmarker_help'] = 'Назначенный оценщик этой работы';
$string['allowsubmissions'] = 'Разрешить пользователю продолжать представлять ответы на это задание.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Описание задания и возможность отправки ответов доступны с <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Разрешить выполнение задания с';
$string['allowsubmissionsfromdate_help'] = 'Если дата установлена, то студенты не смогут отправить свои ответы до указанной даты. Если дата не установлена, то студенты могут представлять свои ответы сразу.';
$string['allowsubmissionsfromdatesummary'] = 'Ответы на это задание будут приниматься с <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Разрешить изменять ответы';
$string['alwaysshowdescription'] = 'Всегда показывать описание';
$string['alwaysshowdescription_help'] = 'Если «Нет», то студенты не смогут видеть описание задания до даты, заданной параметром «Разрешить выполнение задания с».';
$string['applytoteam'] = 'Применить оценки и отзывы для всей группы.';
$string['assign:addinstance'] = 'Добавлять новое задание';
$string['assign:editothersubmission'] = 'Редактировать работу другого студента';
$string['assign:exportownsubmission'] = 'Экспортировать собственные ответы на задание';
$string['assign:grade'] = 'Оценивать ответы на задание';
$string['assign:grantextension'] = 'Разрешать продление';
$string['assign:manageallocations'] = 'Управлять назначением оценщиков для работ';
$string['assign:managegrades'] = 'Проверять и опубликовывать оценки';
$string['assign:manageoverrides'] = 'Управлять переопределениями задания';
$string['assign:receivegradernotifications'] = 'Получать уведомления об отправке ответов на оценивание';
$string['assign:releasegrades'] = 'Опубликовывать оценки';
$string['assign:revealidentities'] = 'Раскрывать личности студентов после оценки вслепую';
$string['assign:reviewgrades'] = 'Проверять оценки';
$string['assign:showhiddengrader'] = 'Видеть личность скрытого оценщика';
$string['assign:submit'] = 'Отправлять ответ на задание';
$string['assign:view'] = 'Просматривать задание';
$string['assign:viewblinddetails'] = 'Видеть личности студентов при оценивании вслепую';
$string['assign:viewgrades'] = 'Просматривать оценки';
$string['assign:viewownsubmissionsummary'] = 'Видеть сводку своего ответа на задание.';
$string['assignfeedback'] = 'Модуль отзыва';
$string['assignfeedbackpluginname'] = 'Модуль отзыва';
$string['assignmentisdue'] = 'Задание должно быть сдано';
$string['assignmentmail'] = 'Пользователь {$a->grader} дал отзыв на Ваш ответ на задание «{$a->assignment}».

Вы можете просмотреть отзыв на странице отправки ответа на задание:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>Пользователь {$a->grader} дал отзыв на Ваш ответ на задание «<i>{$a->assignment}</i>». </p>
<p>Вы можете просмотреть отзыв на <a href="{$a->url}">странице отправки ответа на задание</a>.</p>';
$string['assignmentmailsmall'] = 'Пользователь {$a->grader} дал отзыв на Ваш ответ на задание «{$a->assignment}». Вы можете просмотреть отзыв на странице отправки ответа на задание.';
$string['assignmentname'] = 'Название задания';
$string['assignmentplugins'] = 'Модули задания';
$string['assignmentsperpage'] = 'Заданий на странице';
$string['assignsubmission'] = 'Модули представления ответов';
$string['assignsubmissionpluginname'] = 'Модули представления ответов';
$string['assigntimeleft'] = 'Оставшееся время';
$string['attemptheading'] = 'Попытка {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Предыдущие попытки';
$string['attemptnumber'] = 'Номер попытки';
$string['attemptreopenmethod'] = 'Дополнительные попытки';
$string['attemptreopenmethod_help'] = 'Этот параметр определяет, может ли студент предпринять дополнительные попытки выполнить задание. Для каждой попытки оценка и отзывы сохраняются и могут быть просмотрены учителем и учеником. Возможны следующие варианты:

* Никогда - возможна только одна попытка.
* Вручную - учитель может разрешить дополнительные попытки.
* Автоматически (до проходной оценки) — повторное представление студентом работы разрешается автоматически до тех пор, пока студент не достигнет значения проходной оценки, установленного для этого задания в Журнале оценок.';
$string['attemptreopenmethod_manual'] = 'Вручную';
$string['attemptreopenmethod_none'] = 'Никогда';
$string['attemptreopenmethod_untilpass'] = 'Автоматически (до проходной оценки)';
$string['attemptsettings'] = 'Настройки попытки';
$string['availability'] = 'Доступно';
$string['back'] = 'Назад';
$string['backtoassignment'] = 'Вернуться к заданию';
$string['batchoperationconfirmaddattempt'] = 'Разрешить повторную попытку для выбранных представленных ответов?';
$string['batchoperationconfirmdownloadselected'] = 'Скачать выбранные ответы?';
$string['batchoperationconfirmgrantextension'] = 'Предоставить отсрочку для всех выбранных ответов?';
$string['batchoperationconfirmlock'] = 'Заблокировать все выбранные ответы?';
$string['batchoperationconfirmremovesubmission'] = 'Удалить выбранные ответы на задания?';
$string['batchoperationconfirmreverttodraft'] = 'Вернуть выбранные ответы к статусу черновика?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Распределить закрепленных оценщиков для всех выбранных представленных ответов?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Установить для всех выбранных ответов состояние этапа оценивания?';
$string['batchoperationconfirmunlock'] = 'Разблокировать все выбранные ответы?';
$string['batchoperationlock'] = 'заблокировать ответы';
$string['batchoperationreverttodraft'] = 'вернуть представленные ответы к статусу черновика';
$string['batchoperationsdescription'] = 'С выбранными';
$string['batchoperationunlock'] = 'разблокировать представление ответов';
$string['batchsetallocatedmarker'] = 'Оценщики закреплены за выбранными пользователями - ({$a}).';
$string['batchsetmarkingworkflowstateforusers'] = 'Задано состояние этапа оценивания для выбранных пользователей - ({$a}).';
$string['beginassignment'] = 'Приступить к выполнению задания';
$string['blindmarking'] = 'Оценивание вслепую';
$string['blindmarking_help'] = 'Оценивание вслепую скрывает личности студентов от оценщиков. Настройки оценивания вслепую будут заблокированы после того, как будет представлен ответ или выставлена оценка по этому заданию.';
$string['blindmarkingenabledwarning'] = 'Для этого задания разрешен анонимный ответ. Оценки не будут добавлены в журнал оценок до тех пор, пока личности учащихся не будут раскрыты через меню действий по выставлению оценок.';
$string['cachedef_overrides'] = 'Информация о переопределении пользователя и группы';
$string['calendardue'] = '{$a} - надо сдать';
$string['calendargradingdue'] = '{$a} - должно быть оценено';
$string['caneditsubmission'] = 'Вы можете отредактировать свой ответ и отправить его по истечении срока, но он будет помечен как опоздавший.';
$string['changefilters'] = 'Изменить фильтры';
$string['changeuser'] = 'Изменить пользователя';
$string['choosegradingaction'] = 'Действия оценивания';
$string['choosemarker'] = 'Выберите ...';
$string['chooseoperation'] = 'Выберите действие';
$string['clickexpandreviewpanel'] = 'Нажмите, чтобы развернуть панель обзора';
$string['collapsegradepanel'] = 'Свернуть панель оценок';
$string['collapsereviewpanel'] = 'Свернуть панель обзора';
$string['comment'] = 'Отзыв';
$string['completiondetail:submit'] = 'Дать ответ на задание';
$string['completionsubmit'] = 'Студент должен представить ответ на задание';
$string['configshowrecentsubmissions'] = 'Все могут видеть уведомления об отправках в отчетах о последних действиях.';
$string['confirmbatchgradingoperation'] = 'Вы уверены, что хотите применить {$a->operation} для студентов - {$a->count}?';
$string['confirmstart'] = 'У вас есть {$a}, чтобы выполнить это задание. В случае начала таймер начнет обратный отсчет, и его нельзя будет приостановить.';
$string['confirmsubmission'] = 'Вы уверены, что хотите представить свою работу для оценивания? Вы больше не сможете изменить свой ответ.';
$string['confirmsubmissionheading'] = 'Подтвердить отправку ответа';
$string['conversionexception'] = 'Не удалось преобразовать задание. Исключение для: {$a}.';
$string['couldnotconvertgrade'] = 'Не удалось преобразовать оценку для пользователя {$a}.';
$string['couldnotconvertsubmission'] = 'Не удалось преобразовать ответ пользователя {$a}.';
$string['couldnotcreatecoursemodule'] = 'Не удалось создать модуль курса.';
$string['couldnotcreatenewassignmentinstance'] = 'Не удалось создать новый вариант задания.';
$string['couldnotfindassignmenttoupgrade'] = 'Не удалось найти старый вариант задания для обновления.';
$string['crontask'] = 'Фоновая обработка для модуля задания';
$string['currentassigngrade'] = 'Текущая оценка в задании';
$string['currentattempt'] = 'Попытка {$a}.';
$string['currentattemptof'] = 'Номер этой попытки -  {$a->attemptnumber}. (Разрешено попыток - {$a->maxattempts})';
$string['currentgrade'] = 'Текущая оценка в журнале';
$string['cutoffdate'] = 'Запретить отправку после';
$string['cutoffdate_help'] = 'Если задано, то ответы не будут приниматься  после этой даты с отсрочкой.';
$string['cutoffdatecolon'] = 'Запрет отправки: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Дата запрета отправки ответа должна быть установлена позже даты доступности задания';
$string['cutoffdatevalidation'] = 'Дата запрета отправки ответа должна быть позже срока сдачи задания.';
$string['defaultlayout'] = 'Восстановить расположение по умолчанию';
$string['defaultsettings'] = 'Настройки задания по умолчанию';
$string['defaultsettings_help'] = 'Эти параметры определяют значения по умолчанию для всех новых заданий.';
$string['defaultteam'] = 'Группа по умолчанию';
$string['deleteallsubmissions'] = 'Удалить все ответы';
$string['description'] = 'Описание';
$string['disabled'] = 'Отключено';
$string['downloadall'] = 'Скачать все ответы';
$string['downloadasfolders'] = 'Загружать ответы в папках';
$string['downloadasfolders_help'] = 'Если ответ на задание больше, чем один файл, то ответы могут быть представлены в папках. Каждый ответ помещается в отдельную папку, при этом структура папок сохраняется и для всех подпапок, а файлы не переименовываются.';
$string['downloadselectedsubmissions'] = 'Скачать выбранные ответы';
$string['duedate'] = 'Последний срок сдачи';
$string['duedate_help'] = 'Время завершения задания. Ответы, отправленные после этой даты, будут помечены как просроченные. Установите дату завершения ответов на задание, чтобы предотвратить их отправку после указанной даты.';
$string['duedateaftersubmissionvalidation'] = 'Срок сдачи задания должен быть позже даты разрешения представления ответа.';
$string['duedatecolon'] = 'Крайний срок сдачи: {$a}';
$string['duedatereached'] = 'Срок сдачи этого задания уже истек';
$string['duedatevalidation'] = 'Срок сдачи задания должен быть позже даты разрешения представления ответа.';
$string['duplicateoverride'] = 'Дублировать переопределение';
$string['editaction'] = 'Действия ...';
$string['editattemptfeedback'] = 'Редактировать оценку и отзыв для попытки номер {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Вы редактируете отзыв для прежней попытки. Это попытка номер {$a->attemptnumber} из {$a->totalattempts}.';
$string['editingstatus'] = 'Изменение статуса';
$string['editonline'] = 'Редактировать онлайн';
$string['editoverride'] = 'Редактировать переопределение';
$string['editsubmission'] = 'Редактировать ответ';
$string['editsubmission_help'] = 'Вы можете внести изменения в свой ответ';
$string['editsubmissionother'] = 'Редактирование ответа {$a}';
$string['enabled'] = 'Доступно';
$string['enabletimelimit'] = 'Разрешить ограничение времени на задания';
$string['enabletimelimit_help'] = 'При включенном параметре на странице настроек задания вы можете установить ограничение времени на выполнение задания.';
$string['errornosubmissions'] = 'Нет никаких ответов на задание';
$string['errorquickgradingvsadvancedgrading'] = 'Оценки не были сохранены, потому что в этом задании в настоящее время  используется передовое оценивание.';
$string['errorrecordmodified'] = 'Оценки не были сохранены, потому что кто-то изменил одну или несколько записей позже, чем Вы загрузили страницу.';
$string['eventallsubmissionsdownloaded'] = 'Все представленные работы загружены.';
$string['eventassessablesubmitted'] = 'Работа представлена.';
$string['eventbatchsetmarkerallocationviewed'] = 'Страница массового закрепления оценщиков просмотрена.';
$string['eventbatchsetworkflowstateviewed'] = 'Страница массовой установки этапа оценивания просмотрена.';
$string['eventextensiongranted'] = 'Предоставлено продление.';
$string['eventfeedbackupdated'] = 'Отзыв обновлен';
$string['eventfeedbackviewed'] = 'Отзыв просмотрен';
$string['eventgradingformviewed'] = 'Форма оценивания просмотрена';
$string['eventgradingtableviewed'] = 'Таблица оценивания просмотрена';
$string['eventidentitiesrevealed'] = 'Раскрыты личности студентов.';
$string['eventmarkerupdated'] = 'Распределение оценщиков обновлено';
$string['eventoverridecreated'] = 'Переопределение задания создано';
$string['eventoverridedeleted'] = 'Переопределение задания удалено';
$string['eventoverrideupdated'] = 'Переопределение задания обновлено';
$string['eventremovesubmissionformviewed'] = 'Убрать просмотренное подтверждение отправки.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Страница подтверждения раскрытия личностей студентов просмотрена';
$string['eventstatementaccepted'] = 'Пользователь принял заявление о представлении работы.';
$string['eventsubmissionconfirmationformviewed'] = 'Рассмотрена форма подтверждения представленных ответов';
$string['eventsubmissioncreated'] = 'Представлен ответ';
$string['eventsubmissionduplicated'] = 'Пользователь продублировал свой ответ.';
$string['eventsubmissionformviewed'] = 'Форма представления ответов просмотрена';
$string['eventsubmissiongraded'] = 'Представленный ответ был оценен.';
$string['eventsubmissionlocked'] = 'Возможность представление ответов для пользователя была заблокирована.';
$string['eventsubmissionremoved'] = 'Ответ удален.';
$string['eventsubmissionstatusupdated'] = 'Состояние представленного ответа было обновлено.';
$string['eventsubmissionstatusviewed'] = 'Страница состояния представленного ответа просмотрена';
$string['eventsubmissionunlocked'] = 'Возможность представления ответов для пользователя была разблокирована.';
$string['eventsubmissionupdated'] = 'Представленный ответ обновлен.';
$string['eventsubmissionviewed'] = 'Представленный ответ рассмотрен.';
$string['eventworkflowstateupdated'] = 'Этап оценивания был обновлен.';
$string['expandreviewpanel'] = 'Развернуть панель обзора';
$string['extensionduedate'] = 'Срок продления';
$string['extensionnotafterduedate'] = 'Дата продления должна быть позже установленной даты.';
$string['extensionnotafterfromdate'] = 'Дата продления должна быть позже даты разрешения представления ответа.';
$string['feedback'] = 'Отзыв';
$string['feedbackavailableanonhtml'] = 'Есть новый отзыв о вашем ответе на задание  «<i>{$a->assignment}</i>»<br /><br />
Вы можете увидеть его добавленным к <a href="{$a->url}">ответу на задание</a>.';
$string['feedbackavailableanonsmall'] = 'Новый отзыв для задания {$a->assignment}';
$string['feedbackavailableanontext'] = 'Есть новый отзыв о вашем ответе на задание  «{$a->assignment}»

Вы можете увидеть его добавленным к ответу на задание:

{$a->url}';
$string['feedbackavailablehtml'] = 'Пользователь {$a->username} дал отзыв на Ваш ответ на задание «<i>{$a->assignment}</i>».<br /><br />Вы можете просмотреть отзыв <a href="{$a->url}">к своему ответу</a>.';
$string['feedbackavailablesmall'] = 'Пользователь {$a->username} дал отзыв на Ваш ответ на задание «{$a->assignment}».';
$string['feedbackavailabletext'] = 'Пользователь {$a->username} дал отзыв на Ваш ответ на задание «{$a->assignment}».

Вы можете просмотреть отзыв на странице отправки ответа на задание:

    {$a->url}';
$string['feedbackplugin'] = 'Модуль отзыва';
$string['feedbackpluginforgradebook'] = 'Модуль отзыва, который будет размещать комментарии в журнале оценок';
$string['feedbackpluginforgradebook_help'] = 'Только один из модулей отзыва может помещать отзыв в журнал оценок';
$string['feedbackplugins'] = 'Модули отзыва';
$string['feedbacksettings'] = 'Настройки отзыва';
$string['feedbacktypes'] = 'Типы отзывов';
$string['filesubmissions'] = 'Ответ в виде файла';
$string['filter'] = 'Фильтр';
$string['filterdraft'] = 'Черновик';
$string['filtergrantedextension'] = 'Разрешено продление';
$string['filternone'] = 'Без фильтра';
$string['filternotsubmitted'] = 'Не представлено';
$string['filterrequiregrading'] = 'Требует оценки';
$string['filtersubmitted'] = 'Ответы и отзывы';
$string['fixrescalednullgrades'] = 'Это задание содержит некоторые ошибочные оценки. Вы можете <a href="{$a->link}"> автоматически исправить их</a>. Это может повлиять на итоговые оценки курса.';
$string['fixrescalednullgradesconfirm'] = 'Вы уверены, что хотите исправить ошибочные оценки? Все затронутые оценки будут удалены. Это может повлиять на итоговые оценки курса.';
$string['fixrescalednullgradesdone'] = 'Оценки исправлены.';
$string['gradeabovemaximum'] = 'Оценка должна быть меньше или равна {$a}.';
$string['gradebelowzero'] = 'Оценка должна быть больше или равна нулю.';
$string['gradecanbechanged'] = 'Оценка может быть изменена';
$string['gradechangessaveddetail'] = 'Сохранены изменения в оценке и отзыве';
$string['graded'] = 'Оценено';
$string['gradedby'] = 'Оценено';
$string['gradedfollowupsubmit'] = 'Оценено - получен исправленный ответ';
$string['gradedon'] = 'Оценено в';
$string['gradeitem:submissions'] = 'Ответы на задание';
$string['gradelocked'] = 'Эта оценка заблокирована или изменена в журнале оценок.';
$string['gradeoutof'] = 'Оценка из {$a}';
$string['gradeoutofhelp'] = 'Оценка';
$string['gradeoutofhelp_help'] = 'Введите здесь оценку для ответа студента. Вы можете использовать десятичные знаки.';
$string['gradersubmissionupdatedhtml'] = 'Пользователь {$a->username} отправил новый ответ на задание <i>«{$a->assignment}»</i>. Дата отправки ответа: <i>{$a->timeupdated}</i>.<br /><br />
Ответы на это задание <a href="{$a->url}">доступны на сайте</a>.';
$string['gradersubmissionupdatedsmall'] = 'Пользователь {$a->username} отправил новый ответ на задание «{$a->assignment}»';
$string['gradersubmissionupdatedtext'] = 'Пользователь {$a->username} отправил новый ответ на задание «{$a->assignment}». Дата отправки ответа: {$a->timeupdated}.

Ответы на это задание доступны на сайте:

    {$a->url}';
$string['gradestudent'] = 'Оценка студента: (ID = {$a->id}, ФИО = {$a->fullname}).';
$string['gradeuser'] = 'Оценка {$a}';
$string['grading'] = 'Оценивание';
$string['gradingchangessaved'] = 'Изменения оценки сохранены';
$string['gradingduedate'] = 'Напомнить мне о завершении оценивания';
$string['gradingduedate_help'] = 'Ожидаемая дата завершения оценивания ответов. Эта дата используется для уведомления учителя в личном кабинете.';
$string['gradingdueduedatevalidation'] = 'Напомнить мне, что дата оценки не может быть раньше установленного срока.';
$string['gradingduefromdatevalidation'] = 'Напомнить мне, что дата оценки не может быть раньше, чем разрешенная дата ответа.';
$string['gradingmethodpreview'] = 'Критерии оценивания';
$string['gradingoptions'] = 'Опции';
$string['gradingstatus'] = 'Состояние оценивания';
$string['gradingstudent'] = 'Оценивается студент';
$string['gradingsummary'] = 'Резюме оценивания';
$string['grantextension'] = 'Разрешить продление';
$string['grantextensionforusers'] = 'Продление разрешено для студентов - {$a}';
$string['groupoverrides'] = 'Переопределения групп';
$string['groupoverridesdeleted'] = 'Переопределения групп удалены';
$string['groupsnone'] = 'Нет групп, к которым вы имеете доступ.';
$string['groupsubmissionsettings'] = 'Настройки представления работ группы';
$string['hiddenuser'] = 'Участник';
$string['hidegrader'] = 'Скрыть личность оценщика от студентов';
$string['hidegrader_help'] = 'При включенном параметре скрывается личность любого пользователя, который оценивает ответ на задание, поэтому студенты не могут видеть, кто оценил их работу.

Обратите внимание, что этот параметр не влияет на поле комментариев на странице оценок.';
$string['hideshow'] = 'Скрыть / Показать';
$string['inactiveoverridehelp'] = '* Это переопределение неактивно, потому что доступ пользователя к активному элементу ограничен. Это может быть обусловлено назначением групп или ролей, другими ограничениями доступа или скрытым элементом.';
$string['indicator:cognitivedepth'] = 'Задание: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на  глубине познания, достигнутой студентом при выполнении Заданий.';
$string['indicator:cognitivedepthdef'] = 'Задание: познавательный аспект';
$string['indicator:cognitivedepthdef_help'] = 'Участник достиг определенного процента познавательного взаимодействия, предлагаемого заданиями в течение этого интервала анализа (уровни = нет просмотра, просмотр, отправка ответа, просмотр отзыва, комментарий к отзыву, повторный ответ после просмотра отзыва)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Задание: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при выполнении Задания.';
$string['indicator:socialbreadthdef'] = 'Задание: социальный аспект';
$string['indicator:socialbreadthdef_help'] = 'Участник достиг этого процента социальной активности, предлагаемой заданиями в течение этого интервала анализа (уровни = без участия, единственный участник, участник с другими)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['instructionfiles'] = 'Файл с инструкцией';
$string['introattachments'] = 'Дополнительные файлы';
$string['introattachments_help'] = 'Для использования в задании могут быть добавлены дополнительные файлы, такие как шаблоны ответов.';
$string['invalidfloatforgrade'] = 'Установленная оценка не понятна: {$a}';
$string['invalidgradeforscale'] = 'Установленная оценка не допустима для текущей шкалы';
$string['invalidoverrideid'] = 'Неверный ID переопределения';
$string['lastmodifiedgrade'] = 'Последнее изменение (оценка)';
$string['lastmodifiedsubmission'] = 'Последнее изменение (ответ)';
$string['latesubmissions'] = 'Поступившие представления';
$string['latesubmissionsaccepted'] = 'Разрешено до {$a}';
$string['loading'] = 'Идет загрузка...';
$string['locksubmissionforstudent'] = 'Предотвратить представление ответов студентами: (id={$a->id}, полное имя={$a->fullname}).';
$string['locksubmissions'] = 'Заблокировать ответы';
$string['manageassignfeedbackplugins'] = 'Управление модулями отзыва плагина «Задание»';
$string['manageassignsubmissionplugins'] = 'Управление модулями отправки ответа плагина «Задание»';
$string['marker'] = 'Оценщик';
$string['markerfilter'] = 'Фильтр оценщиков';
$string['markerfilternomarker'] = 'Нет оценщика';
$string['markingallocation'] = 'Использовать закрепленных оценщиков';
$string['markingallocation_help'] = 'При включенном параметре (при использовании поэтапного оценивания) оценщики могут быть закреплены за конкретными студентами.';
$string['markingworkflow'] = 'Использовать поэтапное оценивание';
$string['markingworkflow_help'] = 'При включенном параметре оценки пройдут через ряд этапов процесса оценивания, прежде чем станут доступны студентам. Это позволит провести  несколько циклов оценивания, а затем одновременно опубликовать оценки для всех студентов.';
$string['markingworkflowstate'] = 'Этап процесса оценивания';
$string['markingworkflowstate_help'] = 'Возможные состояния этапа процесса оценивания могут включать (в зависимости от Ваших прав):

* Еще не оценивалось - оценщик еще не приступил к оцениванию
* Оценивается - оценщик начал, но еще не закончил оценивание
* Оценивание завершено - оценщик закончил оценивание, но, возможно, вернется к нему для проверки/исправления
* Проверяется - оценка рассматривается учителем, ответственным за проверку качества
* Готово к публикации - учитель удовлетворен оцениванием, но выжидает, прежде чем дать студентам доступ к оценкам
* Опубликовано - студент может получить доступ к оценкам и отзывам';
$string['markingworkflowstateinmarking'] = 'Оценивается';
$string['markingworkflowstateinreview'] = 'Проверяется';
$string['markingworkflowstatenotmarked'] = 'Еще не оценивалось';
$string['markingworkflowstatereadyforrelease'] = 'Готово к публикации';
$string['markingworkflowstatereadyforreview'] = 'Оценивание завершено';
$string['markingworkflowstatereleased'] = 'Опубликовано';
$string['maxattempts'] = 'Максимальное количество попыток';
$string['maxattempts_help'] = 'Максимальное количество попыток представления работы, которое может сделать студент. После этого количества сделанных попыток студент не может представить ответ на задание.';
$string['maxgrade'] = 'Максимальная оценка';
$string['maxperpage'] = 'Максимальное количество ответов на странице';
$string['maxperpage_help'] = 'Максимальное количество ответов, которые могут быть показаны оценщику на странице оценивания задания. Рекомендуется использовать для предотвращения ошибок по тайм-ауту в курсах с большим количеством участников.';
$string['messageprovider:assign_notification'] = 'Уведомление о задании';
$string['modulename'] = 'Задание';
$string['modulename_help'] = 'Учебный элемент «Задание» позволяет преподавателям добавлять коммуникативные задания, собирать студенческие работы, оценивать их и предоставлять отзывы.

Студенты могут отправлять любой цифровой контент (файлы), такие как документы Word, электронные таблицы, изображения, аудио- или видеофайлы. Альтернативно или дополнительно преподаватель может потребовать от студента вводить свой ответ непосредственно в текстовом редакторе. «Задание» может быть использоваться и для ответов вне сайта, которые выполняются в автономном режиме (например, при создании предметов искусства) и не требовать представления в цифровом виде.

При оценивании задания преподаватель может оставлять отзывы в виде комментариев, загружать файл с исправленным ответом студента или аудио-отзыв. Ответы могут быть оценены баллами, пользовательской шкалой оценивания или «продвинутыми» методами, такими как рубрики. Итоговая оценка заносится в Журнал оценок.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'Задания';
$string['moreusers'] = '{$a} больше ...';
$string['multipleteams'] = 'Член нескольких групп';
$string['multipleteams_desc'] = 'Это задание требует представления в группах. Вы являетесь членом более чем одной группы. Чтобы представить ответ, вы должны быть участником только одной группы. Пожалуйста, свяжитесь со своим учителем, чтобы изменить ваше членство в группе.';
$string['multipleteamsgrader'] = 'Член нескольких групп, поэтому не может отправлять ответы на задание.';
$string['newsubmissions'] = 'Отправленные ответы на задания';
$string['nextuser'] = 'Следующий пользователь';
$string['noattempt'] = 'Ни одной попытки';
$string['noclose'] = 'Нет даты закрытия';
$string['nofiles'] = 'Файлы отсутствуют.';
$string['nofilters'] = 'Нет фильтров';
$string['nograde'] = 'Нет оценки.';
$string['nogroupoverrides'] = 'В настоящее время нет переопределений групп.';
$string['nomoresubmissionsaccepted'] = 'Разрешено только для участников, которым было предоставлено продление срока.';
$string['none'] = 'Никто';
$string['noonlinesubmissions'] = 'Ответ на задание должен быть представлен вне сайта';
$string['noopen'] = 'Нет даты открытия';
$string['nooverridedata'] = 'Вы должны переопределить хотя бы один параметр задания';
$string['nosavebutnext'] = 'Далее';
$string['nosubmission'] = 'Ничего не было представлено';
$string['nosubmissionyet'] = 'Ответы на задание еще не представлены';
$string['noteam'] = 'Не является членом какой-либо группы';
$string['noteam_desc'] = 'Это задание требует представления в группах. Вы не являетесь членом какой-либо группы, поэтому вы не можете представить ответ. Пожалуйста, свяжитесь с вашим учителем для добавления в группу.';
$string['noteamgrader'] = 'Не является членом какой-либо группы, поэтому не может отправлять ответы на задание.';
$string['notgraded'] = 'Не оценено';
$string['notgradedyet'] = 'Пока не оценен';
$string['notifications'] = 'Уведомления';
$string['nouseroverrides'] = 'В настоящее время нет переопределений пользователей.';
$string['nousers'] = 'Нет пользователей';
$string['nousersselected'] = 'Нет выбранных пользователей';
$string['numberofdraftsubmissions'] = 'Черновик';
$string['numberofparticipants'] = 'Участники';
$string['numberofsubmissionsneedgrading'] = 'Требуют оценки';
$string['numberofsubmissionsneedgradinglabel'] = 'Требуется оценка: {$a}';
$string['numberofsubmittedassignments'] = 'Ответы';
$string['numberofteams'] = 'Группы';
$string['offline'] = 'Ответ вне сайта';
$string['open'] = 'Открыто';
$string['opensubmissionexists'] = 'Уже есть ответ на открытое задание.';
$string['outlinegrade'] = 'Оценка {$a}';
$string['outof'] = '{$a->current} из {$a->total}';
$string['overdue'] = 'Задание просрочено на: {$a}';
$string['override'] = 'Переопределение';
$string['overridedeletegroupsure'] = 'Вы действительно хотите удалить переопределение для группы {$a}?';
$string['overridedeleteusersure'] = 'Вы действительно хотите удалить переопределение для пользователя {$a}?';
$string['overridegroup'] = 'Переопределение группы';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Переопределения';
$string['overrideuser'] = 'Переопределение пользователя';
$string['overrideusereventname'] = '{$a->assign} - Переопределение';
$string['page-mod-assign-view'] = 'Главная страница модуля «Задание» и страница представления';
$string['page-mod-assign-x'] = 'Любая страница модуля «Задание»';
$string['paramtimeremaining'] = '{$a} осталось';
$string['participant'] = 'Участник';
$string['pluginadministration'] = 'Управление заданием';
$string['pluginname'] = 'Задание';
$string['preventsubmissionnotingroup'] = 'Нужно быть в группе для отправки ответа';
$string['preventsubmissionnotingroup_help'] = 'При включенном параметре пользователи, не являющиеся членами групп, не смогут отправлять ответы.';
$string['preventsubmissions'] = 'Запретить пользователю повторно отвечать на это задание.';
$string['preventsubmissionsshort'] = 'Запретить изменять ответ';
$string['previous'] = 'Назад';
$string['previoususer'] = 'Предыдущий пользователь';
$string['privacy:attemptpath'] = 'попытка {$a}';
$string['privacy:blindmarkingidentifier'] = 'Идентификатор, используемый для слепого оценивания';
$string['privacy:gradepath'] = 'оценка';
$string['privacy:metadata:assigndownloadasfolders'] = 'Предпочтение пользователя в отношении того, следует ли загружать несколько файлов в папке';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Данные отзыва для задания';
$string['privacy:metadata:assignfilter'] = 'Параметры фильтра, такие как «Отправлено», «Не отправлено», «Требуется оценка» и «Предоставлено продление»';
$string['privacy:metadata:assigngrades'] = 'Хранит оценки пользователей за задание';
$string['privacy:metadata:assignmarkerfilter'] = 'Фильтр заданий по присвоенной оценке';
$string['privacy:metadata:assignmentid'] = 'ID задания';
$string['privacy:metadata:assignmessageexplanation'] = 'Уведомления отправляются студентам через систему обмена сообщениями.';
$string['privacy:metadata:assignoverrides'] = 'Хранит информацию о переопределении для Задания';
$string['privacy:metadata:assignperpage'] = 'Количество заданий, отображаемых на странице.';
$string['privacy:metadata:assignquickgrading'] = 'Настройка, используется ли быстрая оценка или нет.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Хранит информацию об ответах пользователей';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Данные ответа на задание.';
$string['privacy:metadata:assignuserflags'] = 'Хранит метаданные пользователя, такие как даты продления';
$string['privacy:metadata:assignusermapping'] = 'Соответствие для слепого оценивания';
$string['privacy:metadata:assignworkflowfilter'] = 'Фильтр по различным этапам рабочего процесса.';
$string['privacy:metadata:grade'] = 'Числовая оценка для этого задания. Может быть определена с помощью шкал, расширенных форм и т. д. Но всегда будет преобразована обратно в число с плавающей запятой.';
$string['privacy:metadata:grader'] = 'ID пользователя оценщика.';
$string['privacy:metadata:groupid'] = 'ID группы, членом которой является пользователь.';
$string['privacy:metadata:latest'] = 'Значительно упрощает запросы, если узнавать информацию только о последней попытке.';
$string['privacy:metadata:mailed'] = 'Пользователю было отправлено сообщение по почте?';
$string['privacy:metadata:timecreated'] = 'Время создания';
$string['privacy:metadata:timestarted'] = 'Время начала';
$string['privacy:metadata:userid'] = 'ID пользователя';
$string['privacy:studentpath'] = 'ответы студентов';
$string['privacy:submissionpath'] = 'ответ';
$string['quickgrading'] = 'Быстрая оценка';
$string['quickgrading_help'] = 'Быстрое оценивание позволяет добавить оценки (и результаты, навыки) прямо в таблице ответов. Быстрое оценивание не совместимо с «продвинутыми» методами оценивания и не рекомендуется, когда оценивание одновременно проводят несколько человек.';
$string['quickgradingchangessaved'] = 'Оценки сохранены';
$string['quickgradingresult'] = 'Быстрая оценка';
$string['recordid'] = 'Идентификатор';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} после начала курса';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} перед началом курса';
$string['relativedatessubmissiontimeleft'] = 'Рассчитывается для каждого студента';
$string['removeallgroupoverrides'] = 'Удалить все переопределения групп';
$string['removealluseroverrides'] = 'Удалить все переопределения пользователей';
$string['removesubmission'] = 'Удалить ответ';
$string['removesubmissionconfirm'] = 'Вы уверены, что хотите удалить представленный ответ на задание?';
$string['removesubmissionconfirmforstudent'] = 'Вы уверены, что хотите удалить ответ на задание, представленный студентом {$a}?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Вы уверены, что хотите удалить ответ для {$a}? Обратите внимание, что это не сбросит ограничение времени учащегося. Вы можете дать больше времени, добавив ограничение пользователя по времени.';
$string['removesubmissionconfirmwithtimelimit'] = 'Вы уверены, что хотите удалить свой ответ? Обратите внимание, что это не сбросит ваше ограничение по времени.';
$string['removesubmissionforstudent'] = 'Удалить ответ студента: (id={$a->id}, полное имя={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Режим «Автоматически (до проходной оценки)» не совместим с оцениванием вслепую, так как оценки не публикуются в журнале оценки до тех пор, пока не будут раскрыты личности студентов.';
$string['requireallteammemberssubmit'] = 'Требовать, чтобы все члены группы представили ответы';
$string['requireallteammemberssubmit_help'] = 'Если «Да», то все члены группы студентов должны нажать кнопку «Отправить» для того, чтобы ответ группы считался отправленным. Если «Нет», то ответ группы будет считаться представленным, как только любой член группы студентов нажмет на кнопку «Отправить».';
$string['requiresubmissionstatement'] = 'Требовать, чтобы студенты принимали условия представления ответов';
$string['requiresubmissionstatement_help'] = 'Требовать, чтобы студенты принимали условия представления ответов для всех заданий.';
$string['revealidentities'] = 'Раскрыть личности студентов';
$string['revealidentitiesconfirm'] = 'Вы уверены, что хотите раскрыть личности студентов для этого задания? Эта операция не может быть отменена. После того, как личности студентов будут раскрыты, баллы будут проставлены в журнале оценок.';
$string['reverttodefaults'] = 'Возврат к настройкам по умолчанию';
$string['reverttodraft'] = 'Вернуть представление к статусу черновика.';
$string['reverttodraftforgroup'] = 'Вернуть ответ группы {$a} в черновик.';
$string['reverttodraftforstudent'] = 'Вернуть к статусу черновика представление студента:
(id={$a->id}, полное имя={$a->fullname}).';
$string['reverttodraftshort'] = 'Вернуть представление к черновику.';
$string['reviewed'] = 'Просмотрено';
$string['save'] = 'Сохранить';
$string['saveallquickgradingchanges'] = 'Сохранить все оценки';
$string['saveandcontinue'] = 'Сохранить и продолжить';
$string['savechanges'] = 'Сохранить';
$string['savegradingresult'] = 'Оценка';
$string['savenext'] = 'Сохранить и показать следующее';
$string['saveoverrideandstay'] = 'Сохранить и начать другое переопределение';
$string['savingchanges'] = 'Сохранение изменений...';
$string['scale'] = 'Шкала';
$string['search:activity'] = 'Задание — информация об элементе курса';
$string['selectedusers'] = 'Выбранные пользователи';
$string['selectlink'] = 'Выберите ...';
$string['selectuser'] = 'Выберите {$a}';
$string['sendlatenotifications'] = 'Уведомлять преподавателей об отправках ответов после последнего срока сдачи задания';
$string['sendlatenotifications_help'] = 'Если «Да», то преподаватели получат специальные сообщения, когда студенты отправят свои ответы позже указанного срока. Метод сообщения задается.';
$string['sendnotifications'] = 'Уведомить преподавателей об отправке ответов';
$string['sendnotifications_help'] = 'Если этот параметр включен, то преподаватели получат  сообщения каждый раз, когда студенты отправят ответы на задание - ранее указанного срока, вовремя или позже. Метод сообщения задается.';
$string['sendstudentnotifications'] = 'Сообщить студентам';
$string['sendstudentnotifications_help'] = 'При включенном параметре студенты получают сообщение о обновлении оценки или отзыва.  Если для этого задания включен процесс оценивания  или оценки скрыты в отчете оценщика, то уведомления не будут отправляться до тех пор, пока оценка не станет «Опубликованной».';
$string['sendstudentnotificationsdefault'] = 'Значение по умолчанию для «Сообщить студентам»';
$string['sendstudentnotificationsdefault_help'] = 'По умолчанию устанавливает в форме оценивания флажок в поле «Сообщить студентам».';
$string['sendsubmissionreceipts'] = 'Отправлять студентам подтверждение о получении ответа';
$string['sendsubmissionreceipts_help'] = 'Этот параметр дает возможность подтверждать студентам получение их ответов на задание. Студенты будут получать уведомления каждый раз, когда они успешно представят ответ на задание.';
$string['setmarkerallocationforlog'] = 'Задано распределение оценщиков: (id={$a->id}, полное имя={$a->fullname}, оценщик={$a->marker}).';
$string['setmarkingallocation'] = 'Задать распределение оценщиков';
$string['setmarkingworkflowstate'] = 'Задать этап процесса оценивания';
$string['setmarkingworkflowstateforlog'] = 'Задан этап процесса оценивания: (id={$a->id}, полное имя={$a->fullname}, этап={$a->state}).';
$string['settings'] = 'Параметры задания';
$string['showrecentsubmissions'] = 'Показать последние ответы';
$string['status'] = 'Статус';
$string['studentnotificationworkflowstateerror'] = 'Чтобы уведомить студентов, необходимо перейти к этапу оценивания «Опубликовано».';
$string['submission'] = 'Ответ';
$string['submissionattachments'] = 'Показывать файлы только при отправке ответа.';
$string['submissionattachments_help'] = 'При включенном параметре файлы будут отображаться только на странице отправки ответа на задание.
Если этот параметр отключен, то файлы будут отображаться как на странице просмотра заданий, так и на страницах отправки ответа.';
$string['submissioncopiedhtml'] = '<p>Вы скопировали свой предыдущий ответ на задание «<i>{$a->assignment}</i>».</p>
<p>Вы можете просмотреть состояние <a href="{$a->url}">представленного Вами ответа</a>.</p>';
$string['submissioncopiedsmall'] = 'Вы скопировали свой предыдущий ответ на задание «{$a->assignment}»';
$string['submissioncopiedtext'] = 'Вы скопировали свой предыдущий ответ на задание «{$a->assignment}».

Вы можете просмотреть состояние представленного Вами ответа:

    {$a->url}';
$string['submissiondrafts'] = 'Требовать нажатия кнопки «Отправить»';
$string['submissiondrafts_help'] = 'Если «Да», то студент должен нажать на кнопку «Отправить», чтобы сообщить о завершении редактирования своего ответа. Это дает возможность студентам хранить черновики ответов в системе. Если этот параметр изменяется со значения «Нет» на значение «Да», то студенческие ответы будут рассматриваться как окончательные.';
$string['submissioneditable'] = 'Студент может править свой ответ';
$string['submissionempty'] = 'Ничего не было представлено';
$string['submissionlog'] = 'Студент: {$a->fullname}, Статус: {$a->status}';
$string['submissionmodified'] = 'У вас есть данные для представления. Покиньте эту страницу и повторите попытку.';
$string['submissionmodifiedgroup'] = 'Представление было изменено кем-то другим. Покиньте эту страницу и повторите попытку.';
$string['submissionnotcopiedinvalidstatus'] = 'Этот ответ не был скопирован, так как он был отредактирован при пересдаче работы.';
$string['submissionnoteditable'] = 'Студент не может исправлять этот ответ';
$string['submissionnotopen'] = 'Это задание не открыто для отправки ответов';
$string['submissionnotready'] = 'Это задание не готовы представить:';
$string['submissionplugins'] = 'Модули отправки ответа';
$string['submissionreceipthtml'] = '<p>Вы представили ответ на задание «<i>{$a->assignment}</i>».</p>
<p>Вы можете просмотреть состояние <a href="{$a->url}">представленного Вами ответа</a>.</p>';
$string['submissionreceiptotherhtml'] = 'Вы представили ответ на задание <i>«{$a->assignment}»</i>.<br /><br />
Вы можете просмотреть состояние <a href="{$a->url}">представленного Вами ответа</a>.';
$string['submissionreceiptothersmall'] = 'Вы представили ответ на задание «{$a->assignment}».';
$string['submissionreceiptothertext'] = 'Вы представили ответ на задание «{$a->assignment}».

Вы можете просмотреть состояние представленного Вами ответа:

    {$a->url}';
$string['submissionreceipts'] = 'Отправить подтверждение о получении ответа';
$string['submissionreceiptsmall'] = 'Вы отправили свой ответ на задание «{$a->assignment}»';
$string['submissionreceipttext'] = 'Вы отправили свой ответ на задание «{$a->assignment}»

Вы можете просмотреть состояние представленного Вами ответа:

    {$a->url}';
$string['submissionsclosed'] = 'Представление ответов закрыто';
$string['submissionsettings'] = 'Параметры ответа';
$string['submissionslocked'] = 'Ответы на это задание не принимаются';
$string['submissionslockedshort'] = 'Изменение ответов не допускается';
$string['submissionstatement'] = 'Заявление к представленному ответу';
$string['submissionstatement_help'] = 'Подтверждающее заявление к представленному ответу на задание';
$string['submissionstatementacceptedlog'] = 'Заявление к представленному ответу, принятое от пользователя {$a}';
$string['submissionstatementdefault'] = 'Это мой собственный ответ на задание, кроме случаев, когда подтверждено использование работ других людей.';
$string['submissionstatementteamsubmission'] = 'Подтверждающее заявление к групповому ответу на задание';
$string['submissionstatementteamsubmission_help'] = 'Заявление, которое каждый студент должен принять, чтобы представить работу своей группы.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Подтверждающее заявление к групповому ответу на задание, где отвечают все участники группы';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Заявление, которое каждый студент должен принять, чтобы представить свою работу в качестве члена группы.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Этот ответ является моей собственной работой в качестве члена группы, за исключением случаев, когда я признаю использование работ других людей.';
$string['submissionstatementteamsubmissiondefault'] = 'Этот ответ является работой моей группы, за исключением случаев, когда мы признали использование работ других людей.';
$string['submissionstatus'] = 'Состояние ответа на задание';
$string['submissionstatus_'] = 'Нет ответа на задание';
$string['submissionstatus_draft'] = 'Черновик (не отправлен на проверку)';
$string['submissionstatus_marked'] = 'Оценено';
$string['submissionstatus_new'] = 'Ответ не представлен';
$string['submissionstatus_reopened'] = 'Возобновлено';
$string['submissionstatus_submitted'] = 'Отправлено для оценивания';
$string['submissionstatusheading'] = 'Состояние ответа';
$string['submissionsummary'] = '{$a->status}. Последнее изменение -  {$a->timemodified}';
$string['submissionteam'] = 'Группы';
$string['submissiontypes'] = 'Типы представлений ответов';
$string['submitaction'] = 'Отправить';
$string['submitassignment'] = 'Отправить на проверку';
$string['submitassignment_help'] = 'Однажды представив ответ на это задание Вы больше не сможете  изменить его.';
$string['submitforgrading'] = 'Представить для оценивания';
$string['submitted'] = 'Ответы и отзывы';
$string['submittedearly'] = 'Ответ на задание представлен заранее - {$a}';
$string['submittedlate'] = 'Ответ на задание представлен с опозданием - {$a}';
$string['submittedlateshort'] = 'Срок выполнения закончился {$a} назад';
$string['submittedovertime'] = 'Ответ на задание было отправлен на {$a} позже установленного срока';
$string['submittedundertime'] = 'Ответ на задание было отправлен на {$a} раньше установленного срока';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Модуль отзыва';
$string['subplugintype_assignfeedback_plural'] = 'Модули отзыва';
$string['subplugintype_assignsubmission'] = 'Модуль отправки ответа';
$string['subplugintype_assignsubmission_plural'] = 'Модули отправки ответа';
$string['teamname'] = 'Команда: {$a}';
$string['teamsubmission'] = 'Групповой ответ студентов';
$string['teamsubmission_help'] = 'Если «Да», то студенты будут разделены на группы по умолчанию или определенные потоки. Ответ группы может быть распределен между членами группы. При этом все члены группы будут видеть изменения в представленных ответах.';
$string['teamsubmissiongroupingid'] = 'Поток из групп студентов';
$string['teamsubmissiongroupingid_help'] = 'Для задания может быть использован поток для выбора групп из групп студентов. Если не задано, то будут использованы наборы групп по умолчанию.';
$string['textinstructions'] = 'Инструкция к заданию';
$string['timelimit'] = 'Ограничение по времени';
$string['timelimit_help'] = 'При включенном параметре на странице задания указывается ограничение по времени, а во время выполнения задания отображается таймер обратного отсчета.';
$string['timelimitnotenabled'] = 'Ограничение по времени не включено для задания.';
$string['timelimitpassed'] = 'Срок истек';
$string['timemodified'] = 'Последнее изменение';
$string['timeremaining'] = 'Оставшееся время';
$string['timeremainingcolon'] = 'Оставшееся время: {$a}';
$string['togglezoom'] = 'Увеличить/уменьшить область';
$string['ungroupedusers'] = 'Включен параметр «Нужно быть в группе для отправки ответа». Некоторые пользователи не являются членами групп или являются членами нескольких групп, эти пользователи не смогут отправить ответы на задание.';
$string['ungroupedusersoptional'] = 'Включен параметр «Групповой ответ студентов» и некоторые пользователи либо не являются членами какой-либо группы, либо являются членами более чем одной группы. Учтите, что эти студенты будут представлены как члены «Группы по умолчанию».';
$string['unlimitedattempts'] = 'Не ограничено';
$string['unlimitedattemptsallowed'] = 'Разрешено неограниченное количество попыток';
$string['unlimitedpages'] = 'Не ограничено';
$string['unlocksubmissionforstudent'] = 'Разрешить представить ответы студентам: (ID = {$a->id}, ФИО = {$a->fullname}).';
$string['unlocksubmissions'] = 'Разблокировать ответы';
$string['unsavedchanges'] = 'Несохраненные изменения';
$string['unsavedchangesquestion'] = 'Есть несохраненные изменен в оценках или отзывах. Вы хотите сохранить изменения и продолжить?';
$string['updategrade'] = 'Обновить оценки';
$string['updatetable'] = 'Сохранить и обновить таблицу';
$string['upgradenotimplemented'] = 'Не выполнено обновление плагина ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Продлено до: {$a}';
$string['usergrade'] = 'Оценка пользователя';
$string['useridlistnotcached'] = 'Изменения оценок НЕ БЫЛИ сохранены, так как не удается определить, к какому ответу они относятся.';
$string['useroverrides'] = 'Переопределения пользователя';
$string['useroverridesdeleted'] = 'Переопределения пользователя удалены';
$string['usersnone'] = 'У студентов нет доступа к этому заданию.';
$string['usersubmissioncannotberemoved'] = 'Ответ {$a} не может быть удален.';
$string['userswhoneedtosubmit'] = 'Пользователи, которые должны представить ответ: {$a}';
$string['validmarkingworkflowstates'] = 'Допустимые этапы процесса оценивания';
$string['viewadifferentattempt'] = 'Посмотреть другую попытку';
$string['viewbatchmarkingallocation'] = 'Просмотр страницы этапа распределения оценивания.';
$string['viewbatchsetmarkingworkflowstate'] = 'Просмотр страницы массовой установки этапа процесса оценивания';
$string['viewfeedback'] = 'Просмотр отзывов';
$string['viewfeedbackforuser'] = 'Просмотреть отзыв для пользователя {$a}';
$string['viewfull'] = 'Посмотреть полностью';
$string['viewfullgradingpage'] = 'Открыть страницу полного оценивания для предоставления отзыва';
$string['viewgradebook'] = 'Просмотр Журнала оценок';
$string['viewgrading'] = 'Просмотр всех ответов';
$string['viewgradingformforstudent'] = 'Посмотреть страницу оценивания для студента: (ID = {$a->id}, полное имя = {$a->fullname}).';
$string['viewownsubmissionform'] = 'Посмотреть страницу своих ответов на задание.';
$string['viewownsubmissionstatus'] = 'Посмотреть страницу состояния своих ответов.';
$string['viewrevealidentitiesconfirm'] = 'Посмотреть страницу подтверждения раскрытия личностей студентов.';
$string['viewsubmission'] = 'Просмотр ответов';
$string['viewsubmissionforuser'] = 'Посмотреть представленный ответ для пользователя: {$a}';
$string['viewsubmissiongradingtable'] = 'Просмотреть таблицу с представленными ответами';
$string['viewsummary'] = 'Посмотреть резюме';
$string['workflowfilter'] = 'Фильтр этапов оценивания';
$string['xofy'] = '{$a->x} из {$a->y}';
