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
 * Strings for component 'publication', language 'ru', version '4.5'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Добавление файлов';
$string['allfiles'] = 'Отправка файлов';
$string['allowedfiletypes'] = 'Разрешенные типы файлов';
$string['allowedfiletypes_err'] = 'Проверьте ввод! Неправильные расширения файла или разделители';
$string['allowedfiletypes_help'] = 'Разрешенные типы файлов могут быть ограничены списком MIME-типов (с разделителем-запятой), например, \'video/mp4, audio/mp3, image/png, image/jpeg\', или расширением файла (включая точку), например, \'.png, .jpg\'. Если поле оставить пустым, то будут разрешены все типы файлов.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Подробности задания и форму подачи можно получить по адресу <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'От';
$string['allowsubmissionsfromdate_help'] = 'Если эта опция включена, участники не смогут отправлять свои файлы до этой даты. Если эта опция отключена, участники могут сразу же начать отправку файлов.';
$string['allowsubmissionsfromdate_import'] = 'Одобрение от';
$string['allowsubmissionsfromdate_upload'] = 'Загрузка с';
$string['allowsubmissionsfromdatesummary'] = 'На это задание будет дать ответы с <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Всегда показывать описание';
$string['alwaysshowdescription_help'] = 'Если этот параметр отключен, приведенное выше описание задания станет видно учащимся только с даты «Загрузка/одобрение с».';
$string['approval_required'] = 'Решение ожидается';
$string['approval_timeover'] = 'Вы можете изменить свое согласие только в период редактирования.';
$string['approvalchange'] = 'Статус публикации изменен';
$string['approved'] = 'Одобрено';
$string['approveusers'] = 'Одобрить';
$string['assignment'] = 'Задание';
$string['assignment_help'] = 'Выберите задание для импорта файлов из индивидуальных или групповых ответов.';
$string['assignment_notfound'] = 'Задание, из которого были импортированы файлы,  не найдено.';
$string['assignment_notset'] = 'Ни одно задание не выбрано.';
$string['availability'] = 'Период редактирования (загрузка или одобрение)';
$string['choose'] = 'Выберите ...';
$string['completiondetail:upload'] = 'Загрузить файл';
$string['completionupload'] = 'Студент должен загрузить файл';
$string['configautoimport'] = 'Если вы предпочитаете, чтобы ответы учащихся автоматически импортировались в папки учащихся. Эту функцию можно включить/отключить для папки  каждого студента отдельно.';
$string['configmaxbytes'] = 'Максимальный размер по умолчанию для всех файлов в папке студента.';
$string['configmaxfiles'] = 'Максимальное количество вложений, разрешенное по умолчанию для одного пользователя.';
$string['courseuploadlimit'] = 'Ограничение загрузки курса';
$string['currentlynotapproved'] = '* В настоящее время не одобрено или отклонено к публикации.';
$string['cutoffdate'] = 'Предельный срок';
$string['cutoffdate_help'] = 'Если этот параметр установлен, задание без продления не будет принимать ответы после этой даты.';
$string['cutoffdate_import'] = 'Последнее одобрение';
$string['cutoffdate_upload'] = 'Последняя загрузка до';
$string['cutoffdatefromdatevalidation'] = 'Крайняя дата должна быть после даты, с которой разрешена подача ответов.';
$string['cutoffdatevalidation'] = 'Дата окончания не может быть раньше ожидаемой даты.';
$string['details'] = 'Подробности';
$string['downloadall'] = 'Скачать все отправленные файлы';
$string['duedate'] = 'До';
$string['duedate_help'] = 'Когда задание должно быть выполнено. Подача ответов по-прежнему будет разрешена после этой даты, но любые ответы на задания, отправленные после этой даты, будут помечены как просроченные. Чтобы предотвратить отправкуответов после определенной даты, установите дату окончания задания.';
$string['duedate_import'] = 'Одобрить до';
$string['duedate_upload'] = 'Загрузить до';
$string['duedatevalidation'] = 'Срок сдачи должен быть позже даты, с которой разрешена подача ответов.';
$string['edit_timeover'] = 'Файлы можно редактировать только в период редактирования.';
$string['edit_uploads'] = 'Редактировать/загружать файлы';
$string['entiresperpage'] = 'Участники, показанные на странице';
$string['eventpublicationapprovalchanged'] = 'Одобрение публикации файла изменено';
$string['eventpublicationduedateextended'] = 'Срок публикации продлен';
$string['eventpublicationfiledeleted'] = 'Удаление публикации файла';
$string['eventpublicationfileimported'] = 'Импорт  публикации файла';
$string['eventpublicationfileuploaded'] = 'Загрузка публикации файла';
$string['extensionduedate'] = 'Срок продления';
$string['extensionnotafterduedate'] = 'Дата продления должна быть позже установленной даты.';
$string['extensionnotafterfromdate'] = 'Дата продления должна быть позже даты, с которой разрешена подача ответов.';
$string['extensionto'] = 'Продление до';
$string['filedetails'] = 'Подробности';
$string['filesofthesetypes'] = 'Могут быть добавлены файлы следующих типов:';
$string['filter'] = 'Фильтр';
$string['filter:allfiles'] = 'Все отправленные файлы';
$string['filter:approvalrequired'] = 'Решение ожидается';
$string['filter:approved'] = 'Одобренные отправки файлов';
$string['filter:nofiles'] = 'Нет отправленного файла';
$string['filter:nofilter'] = 'Нет фильтра';
$string['filter:rejected'] = 'Отклоненные отправки файлов';
$string['giveapproval'] = 'Одобрить';
$string['go'] = 'Вперед';
$string['grantextension'] = 'Разрешить расширение';
$string['guideline'] = 'Публикация представленных файлов';
$string['hidden'] = 'Не опубликовано';
$string['importfrom_err'] = 'Вам нужно выбрать задание, из которого вы хотите импортировать отправленные файлы.';
$string['maxbytes'] = 'Максимальный размер вложения';
$string['maxfiles'] = 'Максимальное количество вложений';
$string['messageprovider:publication_updates'] = 'Уведомления о публикациях';
$string['mode'] = 'Режим';
$string['mode_help'] = 'Выберите, могут ли учащиеся загружать сюда документы или их ответы на задания должны быть импортированы.';
$string['modeimport'] = 'Импорт файлов из задания';
$string['modeupload'] = 'Загружать файлы в текущем активном элементе';
$string['modulename'] = 'Папка студента';
$string['modulename_help'] = 'Папка студента предлагает следующие функции:<br><ul><li>Учащиеся могут загружать файлы, которые будут опубликованы автоматически или после того, как учителя просмотрят и одобрит их публикацию.</li><li>Задание можно выбрать как основу для ученической папки. Преподаватель может решить, какие файлы задания будут опубликованы (видны всем учащимся). Учитель также может позволить учащимся самим решать, должны ли их файлы быть видны всем.</li></ul>';
$string['modulenameplural'] = 'Студенческие папки';
$string['myfiles'] = 'Собственные файлы';
$string['mygroupfiles'] = 'Файлы моей группы';
$string['name'] = 'Название папки студента';
$string['noentries'] = 'Нет записей';
$string['nofiles'] = 'Нет доступных файлов';
$string['nofilestodisplay'] = 'На данный момент нет доступных или еще не опубликованных файлов.';
$string['nofilestozip'] = 'Нет файлов для архивирования';
$string['nonexistentfiletypes'] = 'Следующие типы файлов не были распознаны: {$a}';
$string['nopublicationsincourse'] = 'В этом курсе нет экземпляра папки студента.';
$string['nothing_to_show_groups'] = 'Ничего отображать – нет доступных групп.';
$string['nothing_to_show_users'] = 'Ничего отображать – нет доступных учащихся.';
$string['nothingtodisplay'] = 'Нет записей для отображения';
$string['notice'] = '<strong>Уведомление: </strong>';
$string['notice_obtainapproval_import_both'] = 'Как преподаватель, вы можете в любой момент отклонить одобрение публикации, если файл не соответствует установленным требованиям.';
$string['notice_obtainapproval_import_studentonly'] = 'В духе закона об авторском праве мы просим вас запросить одобрение на публикацию файлов отдельных учащихся.<br>
Как преподаватель, вы можете в любой момент отклонить одобрение публикации, если файл не соответствует установленным требованиям.';
$string['notice_obtainapproval_upload_automatic'] = 'В духе закона об авторском праве мы просим вас запросить одобрение на публикацию файлов отдельных учащихся.<br>
Как преподаватель, вы можете в любой момент отклонить одобрение публикации, если файл не соответствует установленным требованиям.';
$string['notice_obtainapproval_upload_teacher'] = 'В духе закона об авторском праве мы просим вас запросить одобрение на публикацию файлов отдельных учащихся.<br>
Как преподаватель, вы можете в любой момент отклонить одобрение публикации, если файл не соответствует установленным требованиям.';
$string['notice_obtainteacherapproval_studentsapproval'] = 'В духе закона об авторском праве мы просим вас запросить одобрение на публикацию файлов у отдельных участников.';
$string['notifications'] = 'Уведомления';
$string['notifystudents'] = 'Уведомлять учащихся об изменениях публикации';
$string['notifystudents_help'] = 'Если эта функция включена, учащиеся получат уведомление при изменении статуса публикации одного из загруженных ими файлов.';
$string['notifyteacher'] = 'Уведомлять учителей о отправленных файлах';
$string['notifyteacher_help'] = 'Если эта функция включена, учителя будут получать уведомление, когда учащиеся загружают файл.';
$string['obtainstudentapproval'] = 'Публикация представленных файлов';
$string['obtainstudentapproval_help'] = 'Этот параметр определяет, как будет происходить публикация (видимость) отправленных файлов: <br><ul><li><strong>Требуется одобрение учителей</strong> — отправленные файлы будут проверены и опубликованы учителями.</li>< li><strong>Требуется одобрение учащихся и преподавателей</strong>. Учащиеся и преподаватели должны дать согласие на публикацию записей, иначе они не будут видны</li></ul>';
$string['obtainstudentapproval_yes'] = 'Требуется одобрение учащихся и учителей';
$string['obtainteacherapproval'] = 'Публикация представленных файлов';
$string['obtainteacherapproval_help'] = 'Решите, будут ли файлы видны сразу после загрузки или нет: <br><ul><li> Да — все файлы будут видны всем сразу</li><li> Нет — файлы будут опубликованы только после одобрения преподавателем.</li></ul>';
$string['obtainteacherapproval_no'] = 'Требуется одобрение учителей';
$string['obtainteacherapproval_yes'] = 'Одобрять автоматически';
$string['optionalsettings'] = 'Параметры';
$string['overdue'] = 'Срок редактирования истек';
$string['overview'] = 'Обзор';
$string['pending'] = 'В ожидании';
$string['pluginadministration'] = 'Управление папкой студента';
$string['pluginname'] = 'Папка студента';
$string['privacy:metadata:approval'] = 'Одобрит ли участник группы публикацию или отклонит ее.';
$string['privacy:metadata:contenthash'] = 'Хэш SHA1 содержимого файла, используемый для определения того, изменился ли файл.';
$string['privacy:metadata:extduedates'] = 'Хранит информацию о переопределенных/продленных сроках выполнения для mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'Срок сдачи действителен для учащихся в связи с переопределением/продлением.';
$string['privacy:metadata:fileid'] = 'Идентификатор файла.';
$string['privacy:metadata:filename'] = 'Имя файла.';
$string['privacy:metadata:files'] = 'Хранит информацию (идентификатор, кому он принадлежит, откуда он взялся, хэш содержимого, имя файла и одобрение преподавателем и/или учащимся) о файлах, загруженных/импортированных в mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Хранит информацию об одобрении или отклонении файлов участниками группы, импортировано из группового ответа.';
$string['privacy:metadata:publicationfileexplanation'] = 'Файлы и преобразованные онлайн-текстовые ответы для этого плагина сохраняются через файловый API Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Сколько записей должно отображаться на одной странице таблицы!';
$string['privacy:metadata:studentapproval'] = 'Одобрил или отклонил учащийся публикацию файла.';
$string['privacy:metadata:teacherapproval'] = 'Одобрил или отклонил учитель публикацию файла.';
$string['privacy:metadata:timecreated'] = 'Время и дата создания записи данных.';
$string['privacy:metadata:timemodified'] = 'Время и дата последнего обновления/изменения записи данных.';
$string['privacy:metadata:type'] = 'Отмечает происхождение файла (загруженного учащимся, импортированного из ответа на задание или преобразованного онлайн-текста из ответа на задание).';
$string['privacy:metadata:userid'] = 'Идентификатор пользователя.';
$string['privacy:path:files'] = 'Файлы';
$string['privacy:path:resources'] = 'Ресурсы';
$string['privacy:type:import'] = 'Импортированный файл';
$string['privacy:type:onlinetext'] = 'Импортированный онлайн-текст';
$string['privacy:type:upload'] = 'Загруженный файл';
$string['publication:addinstance'] = 'Добавлять новую Папку студента';
$string['publication:approve'] = 'Решать, следует ли публиковать файлы (видны всем участникам).';
$string['publication:grantextension'] = 'Разрешать расширение';
$string['publication:receiveteachernotification'] = 'Получать уведомления для учителей';
$string['publication:upload'] = 'Загружать файлы в Папку студента';
$string['publication:view'] = 'Просматривать Папку студента';
$string['publicationstatus'] = 'Публикация';
$string['publicationstatus_help'] = 'Статус публикации представляет собой одобрение преподавателя и окончательную публикацию: <ul><li><i class="fa fa-check text-success fa-fw"></i> Файл опубликован и поэтому виден всем участникам.</li><li><i class="fa fa-times text-danger fa-fw"></i> Файл не опубликован (одобрение еще не получено или отклонено) и поэтому не отображается.</li></ul>';
$string['publicfiles'] = 'Опубликованные файлы';
$string['published_aftercheck'] = 'Требуется одобрение учителей';
$string['published_immediately'] = 'Одобрять автоматически';
$string['rejected'] = 'Отклонено';
$string['rejectusers'] = 'Отклонить';
$string['reset'] = 'Вернуть';
$string['reset_userdata'] = 'Все данные';
$string['resetstudentapproval'] = 'Отменить одобрение';
$string['save_changes'] = 'Сохранить изменения';
$string['saveapproval'] = 'Сохранить изменения';
$string['savestudentapprovalwarning'] = 'Вы уверены, что хотите сохранить эти изменения? Статус публикации нельзя будет изменить после того, как он установлен.';
$string['saveteacherapproval'] = 'Сохранить изменения';
$string['search:activity'] = 'Папка студента - информация об элементе';
$string['show_details'] = 'Показать детали';
$string['status'] = 'Статус';
$string['status:approved'] = 'Одобрено';
$string['status:approvednot'] = 'Отклонено';
$string['student_approve'] = 'Одобрить';
$string['student_approved'] = 'Одобрено';
$string['student_pending'] = 'Решение ожидается';
$string['student_reject'] = 'Отклонить';
$string['student_rejected'] = 'Отклонено';
$string['studentapproval'] = 'Одобрение (учащиеся)';
$string['studentapproval_help'] = 'В графе «Одобрение (учащиеся)» отображаются отзывы учащихся:<br><ul><li><i class="fa fa-question fa-fw text-warning"></i> - Ожидается решение </li><li><i class="fa fa-check text-success fa-fw"></i> – Одобрение получено</li><li><i class="fa fa-times text-danger fa-fw"></i> - Одобрение отклонено</li></ul>';
$string['teacher_approve'] = 'Одобрить';
$string['teacher_approved'] = 'Опубликовано';
$string['teacher_pending'] = 'Решение ожидается';
$string['teacher_reject'] = 'Отклонить';
$string['teacher_rejected'] = 'Не опубликовано (отклонено)';
$string['teacherapproval'] = 'Одобрение';
$string['teacherapproval_help'] = 'Текущее одобрение/отклонение файлов, т. е. видны ли они всем участникам: <br><ul><li><strong>Выбрать...</strong> — решение ожидается/одобрение не дано или отклонено, эти файлы невидимы.</li><li><strong>Одобрить</strong> — одобрение получено, эти файлы опубликованы и, следовательно, видны всем.</li><li><strong>Отклонить</strong> — одобрение не получено, эти файлы не публикуются и поэтому не видны.</li></ul>';
$string['total'] = 'Всего';
$string['updatefiles'] = 'Обновить файлы';
$string['updatefileswarning'] = 'Уже импортированные файлы будут заменены или удалены, если исходные файлы в задании были обновлены или удалены. Настройки учащегося, такие как разрешение на публикацию, остаются без изменений.';
$string['uploaded'] = 'Загружено';
$string['visibility'] = 'Опубликовано';
$string['visible'] = 'Опубликовано';
$string['visibleforstudents'] = 'Опубликовано';
$string['visibleforstudents_no'] = 'Этот файл не опубликован (не виден учащимся).';
$string['visibleforstudents_yes'] = 'Этот файл опубликован (виден учащимся).';
$string['withselected'] = 'С выбранным...';
