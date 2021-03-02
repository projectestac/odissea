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
 * Strings for component 'course', language 'ru', version '3.8'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aria:coursecategory'] = 'Категория курса';
$string['aria:courseimage'] = 'Изображение курса';
$string['aria:coursename'] = 'Название курса';
$string['aria:courseshortname'] = 'Краткое название курса';
$string['aria:favourite'] = 'Курс является избранным';
$string['coursealreadyfinished'] = 'Курс уже завершен';
$string['coursenotyetfinished'] = 'Курс еще не завершен';
$string['coursenotyetstarted'] = 'Курс еще не начат';
$string['coursetoolong'] = 'Курс очень длинный';
$string['customfield_islocked'] = 'Заблокировано';
$string['customfield_islocked_help'] = 'Если поле заблокировано, только пользователи с правом изменять блокировку пользовательских полей могут менять его в настройках курса (по умолчанию, только пользователи с ролью менеджера).';
$string['customfield_notvisible'] = 'Никто';
$string['customfield_visibility'] = 'Виден';
$string['customfield_visibility_help'] = 'Этот параметр определяет, кто может просматривать название и значение пользовательского поля в списке курсов или в фильтре доступных пользовательских полей в Личном кабинете.';
$string['customfield_visibletoall'] = 'Все';
$string['customfield_visibletoteachers'] = 'Преподаватели';
$string['customfieldsettings'] = 'Общие настройки пользовательских полей курса';
$string['errorendbeforestart'] = 'Дата окончания ({$a}) раньше даты начала курса.';
$string['favourite'] = 'Избранный курс';
$string['nocourseendtime'] = 'Курс не имеет времени окончания';
$string['nocoursesections'] = 'Нет разделов курса';
$string['nocoursestudents'] = 'Нет студентов';
$string['privacy:completionpath'] = 'Завершение курса';
$string['privacy:favouritespath'] = 'Информация помеченного курса';
$string['privacy:metadata:completionsummary'] = 'Курс содержит информацию о завершении его пользователем.';
$string['privacy:metadata:favouritessummary'] = 'Курс содержит информацию, относящуюся к курсу, отмеченному пользователем.';
$string['privacy:perpage'] = 'Число курсов, показываемых на странице.';
$string['studentsatriskincourse'] = 'Студенты с проблемами в курсе {$a}';
$string['target:coursecompetencies'] = 'Студенты рискуют не достичь компетентностей, обеспечиваемых курсом';
$string['target:coursecompetencies_help'] = 'Эта цель характеризует, рискует ли студент не достичь компетентностей, обеспечиваемых курсом. Эта цель предполагает, что все компетентности, обеспечиваемые курсом, должны быть достигнуты к концу курса.';
$string['target:coursecompletion'] = 'Студенты с риском не выполнить условия завершения курса';
$string['target:coursecompletion_help'] = 'Эта цель характеризует, рискует ли студент не выполнить условия завершения курса.';
$string['target:coursedropout'] = 'Студенты с риском отчисления';
$string['target:coursedropout_help'] = 'Эта цель характеризует, рискует ли студент быть отчисленным.';
$string['target:coursegradetopass'] = 'Студенты, которые рискуют не набрать минимальную оценку для завершения курса';
$string['target:coursegradetopass_help'] = 'Эта цель характеризует, рискует ли студент не получить минимальную оценку для завершения курса.';
$string['target:noaccesssincecoursestart'] = 'Студенты, которые не посещали курс';
$string['target:noaccesssincecoursestart_help'] = 'Эта цель характеризует студентов, которые никогда не посещали курс, на который они зачислены.';
$string['target:noaccesssincecoursestartinfo'] = 'Следующие студенты зарегистрированы на курс, который начался, но они никогда не посещали курс.';
$string['target:norecentaccesses'] = 'Студенты, которые в последнее время не посещали курс';
$string['target:norecentaccesses_help'] = 'Эта цель определяет студентов, которые не посещали курс, на который они зачислены, в течение установленного времени (по умолчанию - за прошедший месяц).';
$string['target:norecentaccessesinfo'] = 'Следующие студенты не посещали курс, на который они зачислены, в течение установленного времени (по умолчанию - за прошедший месяц).';
$string['target:noteachingactivity'] = 'Курсы, которые могут не начаться';
$string['target:noteachingactivity_help'] = 'Эта цель характеризует, будет ли преподавательская деятельность на курсах, которые должны начаться на следующей неделе.';
$string['target:noteachingactivityinfo'] = 'Следующие курсы, которые должны начаться в ближайшие дни, могут не начаться, потому что в них нет учителей или студентов.';
$string['targetlabelstudentcompetenciesno'] = 'Студент, вероятно, достигнет компетентностей, обеспечиваемых курсом';
$string['targetlabelstudentcompetenciesyes'] = 'Студент рискует не достичь компетентностей, обеспечиваемых курсом';
$string['targetlabelstudentcompletionno'] = 'Студент, который, вероятно, соответствует условиям завершения курса';
$string['targetlabelstudentcompletionyes'] = 'Студент рискует не выполнить условия завершения курса';
$string['targetlabelstudentdropoutno'] = 'Без рисков';
$string['targetlabelstudentdropoutyes'] = 'Студент рискует бросить учебу';
$string['targetlabelstudentgradetopassno'] = 'Студент, скорее всего, получит минимальную оценку для прохождения курса.';
$string['targetlabelstudentgradetopassyes'] = 'Студент рискует не получить минимальную оценку для прохождения курса.';
$string['targetlabelteachingno'] = 'Курсы, которые могут не начаться';
$string['targetlabelteachingyes'] = 'Пользователи с правом преподавания, которые имеют доступ к курсу';
