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
 * Strings for component 'course', language 'ru', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Нижний колонтитул выбора элементов';
$string['activitychooseractivefooter_desc'] = 'Средство выбора элементов может поддерживать плагины, которые добавляют элементы в нижний колонтитул.';
$string['activitychoosercategory'] = 'Выбор элементов';
$string['activitychooserhidefooter'] = 'Без нижнего колонтитула';
$string['activitychooserrecommendations'] = 'Рекомендованные элементы';
$string['activitychoosersettings'] = 'Настройки выбора элементов';
$string['activitychoosertabmode'] = 'Вкладки выбора элементов';
$string['activitychoosertabmode_desc'] = 'Средство выбора позволяет учителю легко выбирать активные элементы и ресурсы для добавления в свой курс. Этот параметр определяет, какие вкладки в нем должны отображаться.
Обратите внимание, что вкладка «Помеченные» отображается пользователю только если он пометил один или несколько элементов, а вкладка «Рекомендуемые» отображается только в том случае, если администратор сайта указал некоторые рекомендуемые элементы.';
$string['activitychoosertabmodeone'] = 'Помеченные, Все, Активные элементы, Ресурсы, Рекомендованные';
$string['activitychoosertabmodethree'] = 'Помеченные, Активные элементы, Ресурсы, Рекомендованные';
$string['activitychoosertabmodetwo'] = 'Помеченные, Все, Рекомендованные';
$string['activitydate:closed'] = 'Закрыто c:';
$string['activitydate:closes'] = 'Закрывается:';
$string['activitydate:opened'] = 'Открыто с:';
$string['activitydate:opens'] = 'Открывается:';
$string['aria:coursecategory'] = 'Категория курса';
$string['aria:courseimage'] = 'Изображение курса';
$string['aria:coursename'] = 'Название курса';
$string['aria:courseshortname'] = 'Краткое название курса';
$string['aria:defaulttab'] = 'Элементы по умолчанию';
$string['aria:favourite'] = 'Курс является избранным';
$string['aria:favouritestab'] = 'Помеченные элементы';
$string['aria:modulefavourite'] = 'Помечено элементов: {$a}';
$string['aria:recommendedtab'] = 'Рекомендованные элементы';
$string['browsecourseadminindex'] = 'Посмотреть управление курса с этим индексом.';
$string['browsesettingindex'] = 'Посмотреть настройки с этим индексом.';
$string['completion_automatic:done'] = 'Выполнено:';
$string['completion_automatic:failed'] = 'Не удалось выполнить:';
$string['completion_automatic:todo'] = 'Надо сделать:';
$string['completion_manual:aria:done'] = '{$a} отмечен как выполненный. Нажмите, чтобы отменить.';
$string['completion_manual:aria:markdone'] = 'Отметить {$a} как выполненный';
$string['completion_manual:done'] = 'Выполнено';
$string['completion_manual:markdone'] = 'Отметить как выполненный';
$string['completion_setby:auto:done'] = 'Выполнено: {$a->condition} (задано {$a->setby})';
$string['completion_setby:auto:todo'] = 'Надо сделать: {$a->condition} (задано {$a->setby})';
$string['completion_setby:manual:done'] = 'Элемент курса «{$a->activityname}» помечен {$ ->setby} как выполненный. Нажмите, чтобы отменить.';
$string['completion_setby:manual:markdone'] = 'Элемент курса «{$a->activityname}» помечен {$a->setby} как невыполненный. Нажмите, чтобы отметить как выполненный.';
$string['completionrequirements'] = 'Требования для выполнения {$a}';
$string['courseaccess'] = 'Доступ к курсу';
$string['coursealreadyfinished'] = 'Курс уже завершен';
$string['coursecontentnotification'] = 'Отправить уведомление об изменении содержания.';
$string['coursecontentnotification_help'] = 'Установите флажок, чтобы уведомить участников курса о новом или измененном активном элементе или ресурсе. Уведомление получат только те пользователи, у которых есть доступ к активному элементу или ресурсу.';
$string['coursecontentnotifnew'] = 'Новое содержимое курса {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> является новым в курсе <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Измените настройки своих уведомлений.</a></p>';
$string['coursecontentnotifupdate'] = 'Новое содержимое курса {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> был изменен в курсе <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Измените настройки своих уведомлений.</a></p>';
$string['coursenotyetfinished'] = 'Курс еще не завершен';
$string['coursenotyetstarted'] = 'Курс еще не начат';
$string['courseparticipants'] = 'Участники курса';
$string['coursetoolong'] = 'Курс очень длинный';
$string['customfield_islocked'] = 'Заблокировано';
$string['customfield_islocked_help'] = 'Если поле заблокировано, только пользователи с правом изменять блокировку пользовательских полей могут менять его в настройках курса (по умолчанию, только пользователи с ролью менеджера).';
$string['customfield_notvisible'] = 'Никому';
$string['customfield_visibility'] = 'Видно';
$string['customfield_visibility_help'] = 'Этот параметр определяет, кто может просматривать название и значение пользовательского поля в списке курсов или в фильтре доступных пользовательских полей в Личном кабинете.';
$string['customfield_visibletoall'] = 'Всем';
$string['customfield_visibletoteachers'] = 'Преподавателям';
$string['customfieldsettings'] = 'Общие настройки пользовательских полей курса';
$string['daystakingcourse'] = 'Число дней прохождения курса';
$string['downloadcontent'] = 'Включить в скачиваемый курс';
$string['downloadcontent_help'] = 'Следует ли включать этот активный элемент или ресурс в zip-файл контента курса, доступного для скачивания? Файл, Папка, Страница и Пояснение могут быть скачаны полностью. Для всех остальных элементов и ресурсов загружаются только название и описание. Эта опция требует, чтобы скачивание контента курса была разрешено в настройках курса.

Этот параметр не влияет на скачивание содержимого мобильным приложением для использования в автономном режиме.';
$string['downloadcourseconfirmation'] = 'Вы собираетесь скачать zip-файл с контентом курса (за исключением элементов, которые нельзя скачать и любых файлов, размер которых превышает {$a}).';
$string['downloadcoursecontent'] = 'Скачивать материалы курса';
$string['downloadcoursecontent_help'] = 'Этот параметр определяет, может ли контент курса быть скачан пользователями с правом скачивания контента курса (по умолчанию пользователи с ролью студента или учителя).';
$string['enabledownloadcoursecontent'] = 'Разрешить скачивание содержимого курса.';
$string['errorendbeforestart'] = 'Дата окончания ({$a}) раньше даты начала курса.';
$string['favourite'] = 'Избранный курс';
$string['gradetopassnotset'] = 'В этом курсе нет проходных оценок. Их можно задать в элементах оценок курса (настройка Журнала уоценок).';
$string['informationformodule'] = 'Информация о модуле {$a}';
$string['module'] = 'Элемент';
$string['namewithlink'] = 'Название категории со ссылкой';
$string['noaccesssincestartinfomessage'] = 'Здравствуйте, {$a->userfirstname}!
<p>Несколько студентов курса «{$a->coursename}» никогда в него не заходили.</p>';
$string['nocourseactivity'] = 'Недостаточная активность между началом и концом курса';
$string['nocourseendtime'] = 'Курс не имеет времени окончания';
$string['nocoursesections'] = 'Нет разделов курса';
$string['nocoursestudents'] = 'Нет студентов';
$string['norecentaccessesinfomessage'] = 'Здравствуйте, {$a->userfirstname}!
<p>Несколько студентов курса «{$a->coursename}» давно в него не заходили.</p>';
$string['noteachinginfomessage'] = 'Здравствуйте, {$a->userfirstname}!
<p>У курсов, которые начинаются на следующей неделе, нет преподавателей или в них не записаны студенты.</p>';
$string['participants:perpage'] = 'Число участников на странице';
$string['participants:perpage_help'] = 'Количество пользователей, отображаемых на странице участников в каждом курсе.';
$string['participantsnavigation'] = 'Третичная навигация по участникам.';
$string['privacy:completionpath'] = 'Завершение курса';
$string['privacy:favouritespath'] = 'Информация помеченного курса';
$string['privacy:metadata:activityfavouritessummary'] = 'В курсе содержится информация о том, какие активные элементы были помечены пользователем.';
$string['privacy:metadata:completionsummary'] = 'Курс содержит информацию о завершении его пользователем.';
$string['privacy:metadata:favouritessummary'] = 'Курс содержит информацию, относящуюся к курсу, отмеченному пользователем.';
$string['privacy:perpage'] = 'Число курсов, показываемых на странице.';
$string['recommend'] = 'Рекомендовать';
$string['recommendcheckbox'] = 'Рекомендованные элементы: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} после начала курса';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} перед началом курса';
$string['searchactivitiesbyname'] = 'Поиск активных элементов по названию';
$string['searchresults'] = 'Результаты поиска: {$a}';
$string['studentsatriskincourse'] = 'Студенты в зоне риска в курсе «{$a}»';
$string['studentsatriskinfomessage'] = 'Здравствуйте, {$a->userfirstname}!
<p>Студенты курса «{$a->coursename}» находятся в зоне риска.</p>';
$string['submitsearch'] = 'Подать';
$string['target:coursecompetencies'] = 'Студенты рискуют не достичь компетенций, обеспечиваемых курсом';
$string['target:coursecompetencies_help'] = 'Эта цель характеризует, рискует ли студент не достичь компетенций, обеспечиваемых курсом. Эта цель предполагает, что все компетенции, обеспечиваемые курсом, должны быть достигнуты к концу курса.';
$string['target:coursecompletion'] = 'Студенты с риском не выполнить условия завершения курса';
$string['target:coursecompletion_help'] = 'Эта цель характеризует, рискует ли студент не выполнить условия завершения курса.';
$string['target:coursedropout'] = 'Студенты с риском отчисления';
$string['target:coursedropout_help'] = 'Эта цель характеризует, рискует ли студент быть отчисленным.';
$string['target:coursegradetopass'] = 'Студенты, которые рискуют не набрать минимальную оценку для завершения курса';
$string['target:coursegradetopass_help'] = 'Эта цель характеризует, рискует ли студент не получить минимальную оценку для завершения курса.';
$string['target:noaccesssincecoursestart'] = 'Студенты, которые ещё не заходили в курс';
$string['target:noaccesssincecoursestart_help'] = 'Эта цель характеризует студентов, которые никогда не заходили в курс, на который они зачислены.';
$string['target:noaccesssincecoursestartinfo'] = 'Следующие студенты зачислены в курс, который начался, но они никогда не заходили в него.';
$string['target:norecentaccesses'] = 'Студенты, которые давно не заходили в курс';
$string['target:norecentaccesses_help'] = 'Эта цель определяет студентов, которые не заходили в курс, на который они зачислены, в течение установленного времени (по умолчанию — за прошедший месяц).';
$string['target:norecentaccessesinfo'] = 'Следующие студенты не заходили в курс, на который они зачислены, в течение установленного времени (по умолчанию — за прошедший месяц).';
$string['target:noteachingactivity'] = 'Курсы, которые могут не начаться';
$string['target:noteachingactivity_help'] = 'Эта цель характеризует, будет ли преподавательская деятельность в курсах, которые должны начаться на следующей неделе.';
$string['target:noteachingactivityinfo'] = 'Следующие курсы должны начаться в ближайшие дни, но есть риск того, что они не начнутся, так как в курсах нет записанных учителей или зачисленных студентов.';
$string['targetlabelstudentcompetenciesno'] = 'Студент, вероятно, достигнет компетенций, обеспечиваемых курсом';
$string['targetlabelstudentcompetenciesyes'] = 'Студент рискует не достичь компетенций, обеспечиваемых курсом';
$string['targetlabelstudentcompletionno'] = 'Студент, который, вероятно, соответствует условиям завершения курса';
$string['targetlabelstudentcompletionyes'] = 'Студент рискует не выполнить условия завершения курса';
$string['targetlabelstudentdropoutno'] = 'Вне зоны риска';
$string['targetlabelstudentdropoutyes'] = 'Студент рискует бросить учебу';
$string['targetlabelstudentgradetopassno'] = 'Студент, скорее всего, получит минимальную оценку для прохождения курса.';
$string['targetlabelstudentgradetopassyes'] = 'Студент рискует не получить минимальную оценку для прохождения курса.';
$string['targetlabelteachingno'] = 'Курсы, которые могут не начаться';
$string['targetlabelteachingyes'] = 'Пользователи с правом преподавания, которые имеют доступ к курсу';
