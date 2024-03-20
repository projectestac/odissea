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
 * Strings for component 'publication', language 'ru', version '4.1'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Добавление файлов';
$string['allowedfiletypes'] = 'Разрешенные типы файлов';
$string['allowedfiletypes_err'] = 'Проверьте ввод! Неправильные расширения файла или разделители';
$string['allowedfiletypes_help'] = 'Разрешенные типы файлов могут быть ограничены списком MIME-типов (с разделителем-запятой), например, \'video/mp4, audio/mp3, image/png, image/jpeg\', или расширением файла (включая точку), например, \'.png, .jpg\'. Если поле оставить пустым, то будут разрешены все типы файлов.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Подробности задания и форму подачи можно получить по адресу <strong>{$a}</strong>';
$string['allowsubmissionsfromdate_import'] = 'Одобрение от';
$string['allowsubmissionsfromdate_upload'] = 'Загрузка с';
$string['allowsubmissionsfromdatesummary'] = 'На это задание будет дать ответы с <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Всегда показывать описание';
$string['alwaysshowdescription_help'] = 'Если этот параметр отключен, приведенное выше описание задания станет видно учащимся только с даты «Загрузка/одобрение с».';
$string['approved'] = 'Одобрено';
$string['assignment'] = 'Задание';
$string['assignment_notfound'] = 'Задание, из которого были импортированы файлы,  не найдено.';
$string['assignment_notset'] = 'Ни одно задание не выбрано.';
$string['choose'] = 'Выберите ...';
$string['configautoimport'] = 'Если вы предпочитаете, чтобы ответы учащихся автоматически импортировались в папки учащихся. Эту функцию можно включить/отключить для папки  каждого студента отдельно.';
$string['configmaxbytes'] = 'Максимальный размер по умолчанию для всех файлов в папке студента.';
$string['configmaxfiles'] = 'Максимальное количество вложений, разрешенное по умолчанию для одного пользователя.';
$string['configobtainteacherapproval'] = 'Документы учащихся по умолчанию видны всем остальным участникам.';
$string['configrequiremodintro'] = 'Отключите эту опцию, если вы не хотите заставлять пользователей вводить описание каждого задания.';
$string['courseuploadlimit'] = 'Ограничение загрузки курса';
$string['cutoffdate'] = 'Предельный срок';
$string['cutoffdate_help'] = 'Если этот параметр установлен, задание без продления не будет принимать ответы после этой даты.';
$string['cutoffdate_import'] = 'Последнее одобрение';
$string['cutoffdate_upload'] = 'Последняя загрузка до';
$string['cutoffdatefromdatevalidation'] = 'Крайняя дата должна быть после даты, с которой разрешена подача ответов.';
$string['cutoffdatevalidation'] = 'Дата окончания не может быть раньше ожидаемой даты.';
$string['details'] = 'Подробности';
$string['duedate_help'] = 'Когда задание должно быть выполнено. Подача ответов по-прежнему будет разрешена после этой даты, но любые ответы на задания, отправленные после этой даты, будут помечены как просроченные. Чтобы предотвратить отправкуответов после определенной даты, установите дату окончания задания.';
$string['duedate_import'] = 'Одобрить до';
$string['duedate_upload'] = 'Загрузить до';
$string['duedatevalidation'] = 'Срок сдачи должен быть позже даты, с которой разрешена подача ответов.';
$string['edit_uploads'] = 'Редактировать/загружать файлы';
$string['emailteachermail'] = '-------------------------------------------------- -------------------\\n{$a->username} загрузил(а) \'{$a->filename}\'
для \'{$a->publication}\' в {$a->dayupdated} в {$a->timeupdated}.

См. здесь:

     {$a->url}------------------------------------------- --------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} загрузил(а) \'{$a->filename}\'
для <i>\'{$a->publication}\' в {$a->dayupdated} в {$a->timeupdated}</i><br /><br />
 См.<a href="{$a->url}"> на веб-сайте</a>.';
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
$string['go'] = 'Вперед';
$string['grantextension'] = 'Разрешить расширение';
$string['maxbytes'] = 'Максимальный размер вложения';
$string['maxfiles'] = 'Максимальное количество вложений';
$string['messageprovider:publication_updates'] = 'Уведомления о публикациях';
$string['mode'] = 'Режим';
$string['modulename'] = 'Папка студента';
$string['modulenameplural'] = 'Студенческие папки';
$string['myfiles'] = 'Собственные файлы';
$string['mygroupfiles'] = 'Файлы моей группы';
$string['name'] = 'Название папки студента';
$string['noentries'] = 'Нет записей';
$string['nofiles'] = 'Нет доступных файлов';
$string['nofilestozip'] = 'Нет файлов для архивирования';
$string['nonexistentfiletypes'] = 'Следующие типы файлов не были распознаны: {$a}';
$string['nothing_to_show_users'] = 'Ничего отображать – нет доступных учащихся.';
$string['nothingtodisplay'] = 'Нет записей для отображения';
$string['notifications'] = 'Уведомления';
$string['obtainteacherapproval_help'] = 'Решите, будут ли файлы видны сразу после загрузки или нет: <br><ul><li> Да — все файлы будут видны всем сразу</li><li> Нет — файлы будут опубликованы только после одобрения преподавателем.</li></ul>';
$string['optionalsettings'] = 'Параметры';
$string['pending'] = 'В ожидании';
$string['pluginadministration'] = 'Управление папкой студента';
$string['pluginname'] = 'Папка студента';
$string['privacy:metadata:contenthash'] = 'Хэш SHA1 содержимого файла, используемый для определения того, изменился ли файл.';
$string['privacy:metadata:extduedates'] = 'Хранит информацию о переопределенных/продленных сроках выполнения для mod_publication.';
$string['privacy:metadata:fileid'] = 'Идентификатор файла.';
$string['privacy:metadata:filename'] = 'Имя файла.';
$string['privacy:metadata:files'] = 'Хранит информацию (идентификатор, кому он принадлежит, откуда он взялся, хэш содержимого, имя файла и одобрение преподавателем и/или учащимся) о файлах, загруженных/импортированных в mod_publication.';
$string['privacy:metadata:publicationfileexplanation'] = 'Файлы и преобразованные онлайн-текстовые ответы для этого плагина сохраняются через файловый API Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Сколько записей должно отображаться на одной странице таблицы!';
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
$string['publication:grantextension'] = 'Разрешать расширение';
$string['publication:receiveteachernotification'] = 'Получать уведомления для учителей';
$string['publication:upload'] = 'Загружать файлы в Папку студента';
$string['publication:view'] = 'Просматривать Папку студента';
$string['rejected'] = 'Отклонено';
$string['requiremodintro'] = 'Требовать описание активного элемента';
$string['reset'] = 'Вернуть';
$string['reset_userdata'] = 'Все данные';
$string['save_changes'] = 'Сохранить изменения';
$string['search:activity'] = 'Папка студента - информация об элементе';
$string['show_details'] = 'Показать детали';
$string['status'] = 'Статус';
$string['status:approved'] = 'Одобрено';
$string['status:approvednot'] = 'Отклонено';
$string['student_approve'] = 'Одобрить';
$string['student_approved'] = 'Одобрено';
$string['student_reject'] = 'Отклонить';
$string['student_rejected'] = 'Отклонено';
$string['studentapproval'] = 'Статус';
$string['teacherapproval'] = 'Одобрение';
$string['total'] = 'Всего';
$string['updatefiles'] = 'Обновить файлы';
$string['uploaded'] = 'Загружено';
$string['warning_changefromobtainstudentapproval'] = 'Если вы внесете это изменение, только вы сможете решить, какие файлы будут видны всем учащимся. Одобрение учащихся не будет запрошено. Все файлы, отмеченные как одобренные, станут видны всем учащимся независимо от их решения.';
$string['warning_changefromobtainteacherapproval'] = 'После активации этой настройки все загруженные файлы будут видны другим участникам. Все загруженное станет видимым. Вы можете вручную сделать файлы невидимыми для определенных учащихся.';
$string['warning_changetoobtainstudentapproval'] = 'Если вы внесете это изменение, учащимся будет предложено одобрить все файлы, помеченные как видимые. Файлы станут видимыми только после одобрения учащимися.';
$string['warning_changetoobtainteacherapproval'] = 'После отключения этой настройки загруженные файлы не будут видны другим участникам автоматически. Вам придется определить, какие файлы будут видимыми. Уже видимые файлы станут невидимыми.';
$string['withselected'] = 'С выбранным...';
