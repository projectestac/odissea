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
 * Strings for component 'organizer', language 'ru', version '4.5'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = 'Окончание регистрации';
$string['absolutedeadline_help'] = 'Установите этот флажок, чтобы определить время, по истечении которого дальнейшие действия студентов будут невозможны.';
$string['actionlink_delete'] = 'удалить';
$string['actionlink_edit'] = 'редактировать';
$string['actionlink_eval'] = 'оценить';
$string['actionlink_print'] = 'распечатать';
$string['actions'] = 'Действие';
$string['actions_help'] = 'Требуемое действие';
$string['addappointment'] = 'Добавить встречу';
$string['addslots_placesinfo'] = 'Это действие создаст новые возможные места ({$a->numplaces}), в результате чего общее количество возможных мест для {$a->numstudents} студентов составит {$a->totalplaces}.';
$string['addslots_placesinfo_group'] = 'Это действие создаст новые возможные места ({$a->numplaces}), в результате чего общее количество возможных мест для {$a->numgroups} групп составит {$a->totalplaces}.';
$string['allowcreationofpasttimeslots'] = 'Создание прошедших временных интервалов';
$string['allowedprofilefieldsprint'] = 'Разрешенные поля профиля пользователя';
$string['allowedprofilefieldsprint2'] = 'Разрешенные поля профиля пользователя для печати уникальных временных интервалов';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Подробная информация об организаторе и регистрационная форма будут доступны с <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Начало регистрации';
$string['allowsubmissionsfromdate_help'] = 'Поставьте флажок, если хотите сделать этот органайзер доступным для студентов после определенного времени';
$string['allowsubmissionsfromdatesummary'] = 'Этот органайзер будет принимать заявки начиная с даты <strong>{$a}</strong>';
$string['allowsubmissionstodate'] = 'Окончание регистрации';
$string['alwaysshowdescription'] = 'Всегда показывать описание';
$string['alwaysshowdescription_help'] = 'Если параметр отключен, то приведенное выше описание задания будет доступно студентам только с момента начала регистрации.';
$string['applicant'] = 'Человек, зарегистрировавший группу';
$string['appointment_reminder_student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса {$a->coursefullname} ({$a->courseid}) у вас назначена встреча {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['appointment_reminder_student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса  {$a->coursefullname} ({$a->courseid}) у вас назначена групповая встреча {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['appointment_reminder_student:group:smallmessage'] = 'У вас назначена групповая встреча {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - напоминание о групповой встрече';
$string['appointment_reminder_student:smallmessage'] = 'У вас назначена встреча  {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - напоминание о встрече';
$string['appointment_reminder_teacher:digest:fullmessage'] = 'Здравствуйте, {$a->receivername}!

На завтра у вас назначены следующие встречи:

{$a->digest}

Система обмена сообщениями Moodle';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Вам пришло краткое сообщение о ваших завтрашних встречах.';
$string['appointment_reminder_teacher:digest:subject'] = 'Краткое сообщение о встречах';
$string['appointment_reminder_teacher:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса  {$a->coursefullname} ({$a->courseid}) у вас назначена встреча со студентами на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = 'Здравствуйте, {$a->receivername}!

На завтра у вас назначены следующие встречи:

{$a->digest}

Система обмена сообщениями Moodle';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Вам пришло краткое сообщение о ваших завтрашних встречах.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Краткое сообщение о встречах';
$string['appointment_reminder_teacher:smallmessage'] = 'У вас назначена встреча со студентами на {$a->date} в {$a->time} в {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - напоминание о встрече';
$string['appointmentcomments'] = 'Комментарии';
$string['appointmentcomments_help'] = 'Здесь можно добавить дополнительную информацию о назначенных встречах.';
$string['appointmentdatetime'] = 'Дата и время';
$string['appointmentdeleted_notify_student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

Ваша запись на курс {$a->courseshortname} на {$a->date} в {$a->time} в {$a->location} была удалена.';
$string['appointmentdeleted_notify_student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

Ваша запись на курс {$a->courseshortname} на {$a->date} в {$a->time} в {$a->location} была удалена.';
$string['appointmentdeleted_notify_student:group:smallmessage'] = 'Ваша запись на {$a->date} в {$a->time} в органайзере «{$a->organizername}» была удалена.';
$string['appointmentdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - запись удалена.';
$string['appointmentdeleted_notify_student:smallmessage'] = 'Ваша запись на {$a->date} в {$a->time} в органайзере «{$a->organizername}» была удалена.';
$string['appointmentdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - запись удалена';
$string['assign'] = 'Распределить';
$string['assign_notify_student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} Вам была назначена встреча с {$a->slot_teacher} на {$a->date} в {$a->time} с помощью {$a->sendername}.

Учитель: {$a->slot_teacher}
Местоположение: {$a->slot_location}
Дата: {$a->date} в {$a->time}

Система обмена сообщениями Moodle';
$string['assign_notify_student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} вашей группе {$a->groupname} была назначена встреча с {$a->slot_teacher} на {$a->date} в {$a->time} с помощью {$a->sendername}.

Учитель: {$a->slot_teacher}
Местоположение: {$a->slot_location}
Дата: {$a->date} в {$a->time}

Система обмена сообщениями Moodle';
$string['assign_notify_student:group:smallmessage'] = 'Вашей группе {$a->groupname} была назначена встреча с {$a->slot_teacher} на {$a->date} в {$a->time} с помощью {$a->sendername}.';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Встреча, назначенная учителем';
$string['assign_notify_student:smallmessage'] = 'Вам назначена встреча с {$a->slot_teacher} на {$a->date} в {$a->time} с помощью {$a->sendername}.';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Встреча, назначенная учителем';
$string['assign_notify_teacher:fullmessage'] = 'Здравствуйте {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} вам была назначена встреча с {$a->participantname} на {$a->date} в {$a->time} с помощью {$a->sendername}.

Участник курса: {$a->participantname}
Местоположение: {$a->slot_location}
Дата: {$a->date} в {$a->time}

Система обмена сообщениями Moodle';
$string['assign_notify_teacher:group:fullmessage'] = 'Здравствуйте {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} вам была назначена встреча с группой {$a->groupname} на {$a->date} в {$a->time} с помощью {$a->sendername}.

Группа: {$a->groupname}
Местоположение: {$a->slot_location}
Дата: {$a->date} в {$a->time}

Система обмена сообщениями Moodle';
$string['assign_notify_teacher:group:smallmessage'] = 'Вам была назначена встреча с группой {$a->groupname} на {$a->date} в {$a->time} с помощью {$a->sendername}.';
$string['assign_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Назначенная встреча';
$string['assign_notify_teacher:smallmessage'] = 'Вам была назначена встреча с {$a->sendername} на {$a->date} в {$a->time} с помощью {$a->sendername}.';
$string['assign_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Назначенная встреча';
$string['assign_title'] = 'Назначить встречу';
$string['assignsuccess'] = 'Временной интервал был успешно назначен, и участники были уведомлены.';
$string['assignsuccessnotsent'] = 'Временной интервал был успешно назначен, НО участники НЕ были уведомлены об этом.';
$string['atlocation'] = 'в';
$string['attended'] = 'присутствовал';
$string['auth'] = 'Способ аутентификации';
$string['availability'] = 'Доступность';
$string['availablefrom'] = 'Заявки принимаются за';
$string['availablefrom_help'] = 'Установите временные рамки, в течение которых студентам будет разрешено зарегистрироваться на эти временные интервалы. В качестве альтернативы, установите флажок "Начать сейчас", чтобы включить регистрацию немедленно.';
$string['availablegrouplist'] = 'Доступные группы';
$string['availableslotsfor'] = 'Временные интервалы для';
$string['back'] = 'Назад';
$string['btn_add'] = 'Добавить новые интервалы';
$string['btn_assign'] = 'Назначить встречу в этом временном интервале';
$string['btn_comment'] = 'Редактировать свой комментарий';
$string['btn_delete'] = 'Удалить выбранные временные интервалы';
$string['btn_deleteappointment'] = 'Удалить встречу';
$string['btn_deletesingle'] = 'Удалить выбранный временной интервал';
$string['btn_edit'] = 'Редактировать выбранные временные интервалы';
$string['btn_editsingle'] = 'Редактировать выбранный временный интервал';
$string['btn_eval'] = 'Выставить оценки за выбранные временные интервалы';
$string['btn_eval_short'] = 'Оценить';
$string['btn_evalsingle'] = 'Выставить оценку за выбранный временный интервал';
$string['btn_print'] = 'Печатать выбранные временные интервалы';
$string['btn_printsingle'] = 'Печатать выбранный временный интервал';
$string['btn_queue'] = 'Очередь';
$string['btn_reeval'] = 'Повторная оценка';
$string['btn_register'] = 'Записаться на встречу';
$string['btn_remind'] = 'Отправить напоминание';
$string['btn_reregister'] = 'Повторно записаться на встречу';
$string['btn_save'] = 'Сохранить комментарий';
$string['btn_send'] = 'Отправить';
$string['btn_sendall'] = 'Отправить напоминания всем участникам, у которых недостаточно встреч:';
$string['btn_start'] = 'Начать';
$string['btn_unqueue'] = 'Удалить из очереди';
$string['btn_unregister'] = 'Отписаться';
$string['calendarsettings'] = 'Настройки календаря';
$string['can_reregister'] = 'Вы можете перезаписаться на другую встречу.';
$string['cannot_eval'] = 'Невозможно оценить, у студента ...';
$string['cfg_dontshowidentity'] = 'Сделать анонимным';
$string['cfg_dontshowidentity_desc'] = 'Скрыть личность участника в списке временных интервалов';
$string['cfg_limitedwidth'] = 'Компактная область содержимого';
$string['cfg_limitedwidth_desc'] = 'Используйте более компактную область содержимого органайзера в стиле moodle 4.x. Moodle использует стандартный размер по умолчанию, но этот может оказаться слишком широким в случае длинных записей в таблице.';
$string['changegradewarning'] = 'Этот органайзер выставляет оценки за встречи, но изменение настроек оценок не приведет к автоматическому пересчету существующих оценок. Если вы хотите изменить оценку, то должны повторно выставить оценки по всем существующим встречам.';
$string['collision'] = 'Предупреждение! Обнаружено совпадение со следующими событиями и/или временными интервалами:';
$string['configabsolutedeadline'] = 'Смещение по умолчанию селектора даты и времени от текущих даты и времени.';
$string['configahead'] = 'впереди';
$string['configallowcreationofpasttimeslots'] = 'Разрешено ли создавать прошлые временные интервалы?';
$string['configday'] = 'день';
$string['configdays'] = 'дн.';
$string['configdigest'] = 'Отправлять учителю сводку о назначенных на следующий день встречах.';
$string['configdigest_label'] = 'Рассылать учителям короткое сообщение о назначенных встречах';
$string['configdontsend'] = 'НЕ рассылать';
$string['configemailteachers'] = 'Отправлять учителям уведомления по электронной почте об изменении статуса записей.';
$string['configemailteachers_label'] = 'Отправлять учителям уведомления по электронной почте';
$string['confighour'] = 'час';
$string['confighours'] = 'час.';
$string['configintro'] = 'Значения, которые вы задаете здесь, определяют значения по умолчанию, которые используются в форме настроек при создании нового органайзера.';
$string['configlocationlink'] = 'Ссылка на поисковую систему, используемая для указания пути к местоположению. Поместите строку поиска в URL-адрес, по которому выполняется запрос';
$string['configlocationslist'] = 'Местоположения для поля автозаполнения';
$string['configlocationslist_desc'] = 'Каждое местоположение должно быть выделено в отдельную строку!';
$string['configmaximumgrade'] = 'Устанавливает значение по умолчанию, выбранное в поле оценка при создании нового органайзера. Это максимальная оценка, которую можно выставить студенту за встречу.';
$string['configminute'] = 'минута';
$string['configminutes'] = 'мин.';
$string['configmonth'] = 'месяц';
$string['configmonths'] = 'мес.';
$string['confignever'] = 'Никогда';
$string['configrelativedeadline'] = 'Время по умолчанию перед встречей, когда участники должны быть уведомлены о ней.';
$string['configrequiremodintro'] = 'Отключите эту опцию, если вы не хотите заставлять пользователей вводить описание каждого занятия.';
$string['configsingleslotprintfield'] = 'поле пользователя, которое будет распечатано при печати одного временного интервала';
$string['configweek'] = 'неделя';
$string['configweeks'] = 'нед.';
$string['configyear'] = 'год';
$string['confirm_conflicts'] = 'Вы уверены, что хотите проигнорировать совпадения и создать временные интервалы?';
$string['confirm_delete'] = 'Удалить';
$string['confirm_organizer_remind_all'] = 'Отправить';
$string['create'] = 'Создать';
$string['created'] = 'Созданные';
$string['createsubmit'] = 'Создать временные интервалы';
$string['crontaskname'] = 'Работа органайзера через Cron';
$string['datapreviewtitle'] = 'Предварительный просмотр данных';
$string['datapreviewtitle_help'] = 'Нажмите на [+] или [-], чтобы отобразить или скрыть столбцы.';
$string['datetemplate'] = '%d.%m.%Y';
$string['datetime'] = 'Дата-время';
$string['datetime_help'] = 'Дата и время временного интервала';
$string['day'] = 'день';
$string['day_0'] = 'Понедельник';
$string['day_1'] = 'Вторник';
$string['day_2'] = 'Среда';
$string['day_3'] = 'Четверг';
$string['day_4'] = 'Пятница';
$string['day_5'] = 'Суббота';
$string['day_6'] = 'Воскресенье';
$string['day_pl'] = 'дн.';
$string['dbid'] = 'ID DB';
$string['defaultsingleslotprintfields'] = 'Поля профиля пользователя по умолчанию при печати одного временного интервала';
$string['delete_organizer_grades'] = 'Удаление оценок для всех элементов органайзера';
$string['deleteappointmentheader'] = 'Удалить эту встречу';
$string['deleteheader'] = 'Удаление следующих временных интервалов:';
$string['deletekeep'] = 'Следующие встречи будут отменены. Зарегистрированные студенты будут уведомлены об этом, а свободные временные интервалы будут удалены:';
$string['deletenoslots'] = 'Не выбрано ни одного интервала, который можно удалить';
$string['deleteorganizergrades'] = 'Удалить оценки из журнала оценок';
$string['details'] = 'Сведения о состоянии';
$string['details_help'] = 'Текущее состояние этого интервала.';
$string['downloadfile'] = 'Скачать файл';
$string['duedate'] = 'Срок исполнения';
$string['duedateerror'] = 'Срок окончания не может быть задан ранее даты доступности!';
$string['duration'] = 'Продолжительность';
$string['duration_help'] = 'Определяет продолжительность встреч. Время между началом и концом будет разделено на интервалы, продолжительность которых определяется здесь. Любое оставшееся время останется неиспользованным (например, если общее время составляет 40 минут, а продолжительность встреч установлена на 15 минут, то в общей сложности будет 2 интервала с дополнительными 10 неиспользованными минутами).';
$string['edit_notify_student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} были изменены сведения о встрече {$a->sendername} на {$a->date} в {$a->время}.

Учитель: {$a->slot_teacher}
Местоположение: {$a->slot_location}
Максимальное количество участников: {$a->slot_maxparticipants}
Комментарии:
{$a->slot_comments}

Система обмена сообщениями Moodle';
$string['edit_notify_student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} были изменены сведения о групповой встрече {$a->sendername} на {$a->date} в {$a->время}.

Учитель: {$a->slot_teacher}
Местоположение: {$a->slot_location}
Максимальное количество участников: {$a->slot_maxparticipants}
Комментарии:
{$a->slot_comments}

Система обмена сообщениями Moodle';
$string['edit_notify_student:group:smallmessage'] = 'Были изменены сведения о групповой встрече {$a->sendername} на {$a->date} в {$a->time}.';
$string['edit_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Изменены сведения о встрече';
$string['edit_notify_student:smallmessage'] = 'Были изменены сведения о встрече {$a->sendername} на {$a->date} в {$a->time}.';
$string['edit_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Изменены сведения о встрече';
$string['edit_notify_teacher:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} информация о временном интервале на {$a->date} в {$a->time} изменена {$a->sendername}.

Учитель(я): {$a->slot_teacher}
Местоположение: {$a->slot_location}
Максимальное количество участников: {$a->slot_maxparticipants}
Комментарии: {$a->slot_comments}

Система обмена сообщениями Moodle';
$string['edit_notify_teacher:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В рамках курса {$a->courseid} {$a->coursefullname} информация о временном интервале на {$a->date} в {$a->time} изменена {$a->sendername}.

Учитель(я): {$a->slot_teacher}
Местоположение: {$a->slot_location}
Максимальное количество участников: {$a->slot_maxparticipants}
Комментарии: {$a->slot_comments}

Система обмена сообщениями Moodle';
$string['edit_notify_teacher:group:smallmessage'] = 'Информация о временном интервале на {$a->date} в {$a->time} изменена {$a->sendername}.';
$string['edit_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] -  Изменены сведения о встрече';
$string['edit_notify_teacher:smallmessage'] = 'Информация о временном интервале на {$a->date} в {$a->time} изменена {$a->sendername}.';
$string['edit_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] -  Изменены сведения о встрече';
$string['edit_submit'] = 'Зафиксировать изменения';
$string['emailteachers'] = 'Отправить учителям уведомления по электронной почте';
$string['emailteachers_help'] = 'Уведомления для учителей обычно отключаются, когда студенты впервые регистрируется на определенный временной интервал, чтобы избежать рассылки спама. Установите этот флажок, чтобы органайзер мог отправлять уведомления учителям и в этом случае. Обратите внимание, что уведомления об отмене регистрации и изменении временных интервалов отправляются всегда.';
$string['enableprintslotuserfields'] = 'Разрешить внесение изменений в поля профиля пользователя';
$string['enableprintslotuserfieldsdesc'] = 'Этот параметр определяет, разрешено ли учителям изменять значения по умолчанию в ниже выбранных полях профиля пользователя';
$string['err_availablefromearly'] = 'Эта дата не может быть установлена позже даты начала!';
$string['err_availablefromlate'] = 'Эта дата не может быть установлена позже даты окончания!';
$string['err_availablepastdeadline'] = 'Этот интервал не может быть доступен после крайнего срока, установленного планировщиком ({$a->deadline})!';
$string['err_collision'] = 'Этот диапазон времени совпадает с другими диапазонами:';
$string['err_comments'] = 'Вы обязательно должны ввести описание!';
$string['err_enddate'] = 'Дата окончания не может быть установлена раньше даты начала!';
$string['err_fromto'] = 'Время окончания не может быть установлено раньше времени начала!';
$string['err_fullminute'] = 'Продолжительность должна составлять целую минуту.';
$string['err_fullminutegap'] = 'Промежуток должен составлять целую минуту.';
$string['err_isgrouporganizer_app'] = 'Невозможно изменить групповой режим, так как в этом органайзере уже есть запланированные встречи!';
$string['err_location'] = 'Вы обязательно должны указать местоположение!';
$string['err_norecipients'] = 'Получатели не выбраны!';
$string['err_noslots'] = 'Ни один временной интервал не был выбран!';
$string['err_posint'] = 'Вы должны ввести положительное целое число!';
$string['err_startdate'] = 'Дата начала не может быть установлена ранее сегодняшней даты ({$a->now})!';
$string['eval_attended'] = 'Присутствовали';
$string['eval_feedback'] = 'Отзыв';
$string['eval_grade'] = 'Оценка';
$string['eval_header'] = 'Выбранные временные интервалы';
$string['eval_link'] = 'новая встреча';
$string['eval_no_participants'] = 'В этом временном интервале не было участников';
$string['eval_not_occured'] = 'Этого интервала еще не было';
$string['eval_notify_newappointment:student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} была оценена ваша встреча {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.
Вам разрешается повторно зарегистрироваться на любой доступный временный интервал в органайзере {$a->organizername}.

Система обмена сообщениями Moodle';
$string['eval_notify_newappointment:student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} была оценена ваша групповая встреча {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.

Вам разрешается повторно зарегистрироваться на любой доступный временный интервал в органайзере {$a->organizername}.

Система обмена сообщениями Moodle';
$string['eval_notify_newappointment:student:group:smallmessage'] = 'Ваша групповая встреча на {$a->date} в {$a->time} в {$a->location} была оценена.';
$string['eval_notify_newappointment:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Встреча оценена';
$string['eval_notify_newappointment:student:smallmessage'] = 'Ваша встреча на {$a->date} в {$a->time} в {$a->location} была оценена.';
$string['eval_notify_newappointment:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Встреча оценена';
$string['eval_notify_student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} была оценена ваша встреча {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['eval_notify_student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} была оценена ваша групповая встреча {$a->sendername} на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['eval_notify_student:group:smallmessage'] = 'Ваша групповая встреча на {$a->date} в {$a->time} в {$a->location} была оценена.';
$string['eval_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - встреча оценена';
$string['eval_notify_student:smallmessage'] = 'Ваша встреча на {$a->date} в {$a->time} в {$a->location} была оценена.';
$string['eval_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - встреча оценена';
$string['evaluate'] = 'Оценить';
$string['event'] = 'Событие календаря';
$string['eventappointmentadded'] = 'Студент зарегистрировался в определенном временном интервале.';
$string['eventappointmentassigned'] = 'Встреча была назначена учителем';
$string['eventappointmentcommented'] = 'Встреча была прокомментирована.';
$string['eventappointmentdeleted'] = 'Встреча была удалена учителем.';
$string['eventappointmentevaluated'] = 'Встреча была оценена.';
$string['eventappointmentlistprinted'] = 'Список назначенных встреч был распечатан.';
$string['eventappointmentremindersent'] = 'Отправлено напоминание о встрече.';
$string['eventappointmentremoved'] = 'Студент отменил свою регистрацию на временной интервал.';
$string['eventappwith:group'] = 'Групповая встреча';
$string['eventappwith:single'] = 'Встреча';
$string['eventnoparticipants'] = 'Без участников';
$string['eventqueueadded'] = 'Добавлено в список ожидания';
$string['eventqueueremoved'] = 'Удалено из списка ожидания';
$string['eventregistrationsviewed'] = 'Просмотрена вкладка регистрации.';
$string['eventslotcreated'] = 'Созданы новые временные интервалы.';
$string['eventslotdeleted'] = 'Временной интервал удален';
$string['eventslotupdated'] = 'Временной интервал обновлен';
$string['eventslotviewed'] = 'Временные интервалы просмотрены.';
$string['eventteacheranonymous'] = 'Анонимный учитель';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br /> Место: {$a->location}<br />';
$string['eventtemplatecomment'] = 'Комментарий:<br />{$a}<br />';
$string['eventtemplatewithoutlinks'] = '{$a->coursename} / {$a->organizername}: {$a->appwith} {$a->with} {$a->participants}<br /> Место: {$a->location}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'С';
$string['eventwithout'] = 'С';
$string['exportsettings'] = 'Настройки экспорта';
$string['filtertable'] = 'Фильтрация этой таблицы';
$string['filtertable_help'] = 'Поиск общих строк во временных интервалах.';
$string['finalgrade'] = 'Это значение было установлено в журнале оценок и не может быть изменено в органайзере.';
$string['font_large'] = 'большой';
$string['font_medium'] = 'средний';
$string['font_small'] = 'маленький';
$string['format'] = 'Формат';
$string['format_csv_comma'] = 'CSV (;)';
$string['format_csv_tab'] = 'CSV (таб.)';
$string['format_ods'] = 'ODS';
$string['format_pdf'] = 'PDF';
$string['format_xls'] = 'XLS';
$string['format_xlsx'] = 'XLSX';
$string['fulldatelongtemplate'] = '%A %d. %B %Y';
$string['fulldatetemplate'] = '%a %d.%m.%Y';
$string['fulldatetimelongtemplate'] = '%A %d. %B %Y %H:%M';
$string['fulldatetimetemplate'] = '%a %d.%m.%Y %H:%M';
$string['fullname_template'] = '{$a->lastname} {$a->firstname}';
$string['gap'] = 'Промежуток';
$string['gap_help'] = 'Определяет промежуток времени между двумя встречами.';
$string['grade'] = 'Максимальная оценка';
$string['grade_help'] = 'Определяет наибольшее количество баллов, которое может быть выставлено за любую оцениваемую встречу.';
$string['gradeaggregationmethod'] = 'Метод расчета итога';
$string['gradeaggregationmethod_help'] = 'Этот параметр определяет, каким образом получается оценка в категории, выставляемая в журнал оценок в курсе.

* Средняя оценка - Сумма всех оценок, деленная на общее количество оценок
* Минимальная оценка - Оценкой становится минимальная из выставленных оценок.
* Максимальная оценка - Оценкой становится максимальная из выставленных оценок.
* Сумма оценок - Все оценки складываются';
$string['grading_desc_grade'] = 'Оценивание активно.';
$string['grading_desc_nograde'] = 'Оценивание не активно.';
$string['group_registration_notify:student:queue:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname}, {$a->sendername} добавил вашу группу {$a->groupname} в список ожидания на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:queue:group:smallmessage'] = '{$a->sendername} добавил вашу группу {$a->groupname} в список ожидания на {$a->date} в {$a->time}.';
$string['group_registration_notify:student:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Группа занесена в список ожидания';
$string['group_registration_notify:student:register:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} {$a->sendername} зарегистрировал вашу группу {$a->groupname} во временной интервал на {$a>date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:register:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} {$a->sendername} зарегистрировал вашу группу {$a->groupname} во временной интервал на {$a>date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:register:group:smallmessage'] = '{$a->sendername} зарегистрировал вашу группу {$a->groupname} во временной интервал на {$a>date} в {$a->time}.';
$string['group_registration_notify:student:register:group:subject'] = '[{$a->courseid} {$a->courseshortname} / {$a->organizername}] - группа зарегистрирована';
$string['group_registration_notify:student:register:smallmessage'] = '{$a->sendername} зарегистрировал вашу группу {$a->groupname} во временной интервал на {$a>date} в {$a->time}.';
$string['group_registration_notify:student:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа зарегистрирована';
$string['group_registration_notify:student:reregister:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} {$a->sendername} перерегистрировал вашу группу {$a->groupname} в новый временной интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:reregister:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} {$a->sendername} перерегистрировал вашу группу {$a->groupname} в новый временной интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:reregister:group:smallmessage'] = '{$a->sendername} перерегистрировал вашу группу {$a->groupname} в новый временной интервал на {$a->date} в {$a->time}.';
$string['group_registration_notify:student:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа перерегистрирована';
$string['group_registration_notify:student:reregister:smallmessage'] = '{$a->sendername} перерегистрировал вашу группу {$a->groupname} на новый временной интервал на {$a->date} в {$a->time}.';
$string['group_registration_notify:student:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа перерегистрирована';
$string['group_registration_notify:student:unqueue:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} {$a->sendername} удалил вашу группу {$a->groupname} из списка ожидания на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:unqueue:group:smallmessage'] = '{$a->sendername} удалил вашу группу {$a->groupname} из списка ожидания на {$a->date} в {$a->time} в {$a->location}.';
$string['group_registration_notify:student:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа удалена из списка ожидания';
$string['group_registration_notify:student:unregister:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} {$a->sendername} отменил регистрацию вашей группы {$a->groupname} из временного интервала на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:unregister:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} {$a->sendername} отменил регистрацию вашей группы {$a->groupname} из временного интервала на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:unregister:group:smallmessage'] = '{$a->sendername} отменил регистрацию вашей группы {$a->groupname} из временного интервала на {$a->date} в {$a->time}.

Система обмена сообщениями Moodle';
$string['group_registration_notify:student:unregister:group:subject'] = '[{$a->courseid} {$a->courseshortname} / {$a->organizername}] - регистрация группы отменена';
$string['group_registration_notify:student:unregister:smallmessage'] = '{$a->sendername} отменил регистрацию вашей группы {$a->groupname} из временного интервала на {$a->date} в {$a->time}.';
$string['group_registration_notify:student:unregister:subject'] = '[{$a->courseid} {$a->courseshortname} / {$a->organizername}] - регистрация группы отменена';
$string['group_slot_available'] = 'временной интервал доступен';
$string['group_slot_full'] = 'временной интервал занят';
$string['groupmodeexistingcoursegroups'] = 'Использовать группы, уже имнющиеся в курсе';
$string['groupmodenogroups'] = 'Групповых встреч нет';
$string['groupmodeslotgroups'] = 'Создание группы в пустом временном интервале';
$string['groupmodeslotgroupsappointment'] = 'Создание группы в забронированном временном интервале';
$string['groupoptions'] = 'Настройки группы';
$string['grouporganizer_desc_novalidgroup'] = 'Это органайзер группы. Вы не являетесь членом группы, входящей в этот органайзер!';
$string['grouppicker'] = 'Выбор группы';
$string['groupwarning'] = 'Проверьте ниже параметры группы!';
$string['headerfooter'] = 'Печатать верхний/нижний колонтитул';
$string['headerfooter_help'] = 'При отмеченном параметре будут распечатаны верхний/нижний колонтитулы';
$string['hidecalendar'] = 'Скрыть календарь';
$string['hidecalendar_help'] = 'Установите флажок, чтобы скрыть календарь в этом органайзере';
$string['hour'] = 'час';
$string['hour_pl'] = 'час.';
$string['id'] = 'ID';
$string['img_title_due'] = 'Временной интервал можно забронировать';
$string['img_title_evaluated'] = 'Временной интервал оценен';
$string['img_title_full'] = 'Временной интервал заполнен';
$string['img_title_no_participants'] = 'Во временном интервале нет участников';
$string['img_title_past_deadline'] = 'Срок действия временного интервала истек';
$string['img_title_pending'] = 'Временной интервал ожидает оценки.';
$string['includetraineringroups'] = 'Включить учителей в группы';
$string['includetraineringroups_help'] = 'Если вы отметите галочкой этот параметр, то в группы будут включены не только участники временного интервала, но и его учителя.';
$string['infobox_app_countdown'] = 'До встречи осталось: {$a->days} дн., {$a->hours} час., {$a->minutes} мин., {$a->seconds} сек.';
$string['infobox_app_inprogress'] = 'Встреча продолжается.';
$string['infobox_app_occured'] = 'Встреча уже прошла.';
$string['infobox_appointmentsstatus_pl'] = 'Для достижения минимального количества необходимо еще забронировать {$a->tooless}. На ближайшие временные интервалы ({$a->slots}) есть доступные места: {$a->places}.';
$string['infobox_appointmentsstatus_sg'] = 'Для достижения минимального количества необходимо еще забронировать {$a->tooless}. На ближайшие временные интервалы ({$a->slots}) есть доступные места: {$a->places}.';
$string['infobox_counter_slotrows'] = 'временные интервалы показаны';
$string['infobox_deadline_countdown'] = 'До крайнего срока осталось: {$a->days} дн., {$a->hours} час., {$a->minutes} мин., {$a->seconds} сек.';
$string['infobox_deadline_passed'] = 'Срок регистрации истек. Вы больше не можете изменять регистрационные данные.';
$string['infobox_deadline_passed_slot'] = 'Не удалось создать интервалы ({$a->slots}), поскольку истек срок регистрации.';
$string['infobox_deadline_passed_slotphp'] = 'Не удалось создать интервалы ({$a->slots}), поскольку истек срок регистрации.';
$string['infobox_deadlines_title'] = 'Крайние сроки выполнения';
$string['infobox_description_title'] = 'Описание органайзера';
$string['infobox_feedback_title'] = 'Отзыв';
$string['infobox_group'] = 'Моя группа: {$a->groupname}';
$string['infobox_link'] = 'Показать/Скрыть';
$string['infobox_messages_title'] = 'Системные сообщения';
$string['infobox_minmax'] = 'Бронирования для пользователя: минимум {$a->min} - максимум {$a->max}.';
$string['infobox_mycomments_title'] = 'Мои комментарии';
$string['infobox_myslot_noslot'] = 'В данный момент вы не зарегистрированы ни в одном временном интервале.';
$string['infobox_myslot_title'] = 'Мои временные интервалы';
$string['infobox_myslot_userslots_left'] = 'У вас остались возможности бронирования: {$a->left}.';
$string['infobox_myslot_userslots_left_group'] = 'У вашей группы остались возможности бронирования: {$a->left}.';
$string['infobox_myslot_userslots_max_reached'] = 'Вы забронировали максимальное количество временных интервалов: {$a->max}.';
$string['infobox_myslot_userslots_max_reached_group'] = 'Ваша группа забронировала максимальное количество временных интервалов: {$a->max}.';
$string['infobox_myslot_userslots_min_not_reached'] = 'Вы еще не забронировали необходимое количество временных интервалов: {$a->min}.';
$string['infobox_myslot_userslots_min_not_reached_group'] = 'Ваша группа еще не забронировала необходимое количество временных интервалов: {$a->min}.';
$string['infobox_myslot_userslots_min_reached'] = 'Вы забронировали необходимое количество временных интервалов: {$a->min}.';
$string['infobox_myslot_userslots_min_reached_group'] = 'Ваша группа забронировала необходимое количество временных интервалов: {$a->min}.';
$string['infobox_myslot_userslots_status'] = 'Забронировано временных интервалов: {$a->booked} из {$a->max}.';
$string['infobox_organizer_expired'] = 'Срок действия этого органайзера истек {$a->date} в {$a->time}.';
$string['infobox_organizer_expires'] = 'Срок действия этого органайзера истекает {$a->date} в {$a->time}.';
$string['infobox_organizer_never_expires'] = 'Срок действия этого органайзера не ограничен.';
$string['infobox_registrationstatistic_title'] = 'Сводный отчет';
$string['infobox_showallparticipants'] = 'Показать всех участников';
$string['infobox_showfreeslots'] = 'Только свободные временные интервалы';
$string['infobox_showhiddenslots'] = 'Скрытые временные интервалы';
$string['infobox_showmyslotsonly'] = 'Только мои временные интервалы';
$string['infobox_showregistrationsonly'] = 'Только забронированные временные интервалы';
$string['infobox_showslots'] = 'Также прошедшие временные интервалы';
$string['infobox_slotoverview_title'] = 'Обзор временных интервалов';
$string['infobox_slotsviewoptions'] = 'Специальные параметры фильтра';
$string['infobox_slotsviewoptions_help'] = 'Эти параметры фильтра объединяются союзами AND!';
$string['infobox_statistic_maxreached'] = 'Участники ({$a->maxreached} из {$a->entries}) забронировали максимальное количество ({$a->max}) всех временных интервалов.';
$string['infobox_statistic_maxreached_group'] = 'Группы ({$a->maxreached} из {$a->entries}) забронировали максимальное количество ({$a->max}) всех временных интервалов.';
$string['infobox_statistic_minreached'] = 'Участники ({$a->minreached} из {$a->entries}) забронировали необходимое количество ({$a->min}) временных интервалов.';
$string['infobox_statistic_minreached_group'] = 'Группы ({$a->minreached} из {$a->entries}) достигли необходимое количество ({$a->min}) временных интервалов.';
$string['infobox_title'] = 'Информационный блок';
$string['introeditor_error'] = 'Обязательно указать описание органайзера!';
$string['invalidgrouping'] = 'Вы должны выбрать поток!';
$string['inwaitingqueue'] = 'Список ожидания';
$string['isgrouporganizer'] = 'Групповые встречи';
$string['isgrouporganizer_help'] = 'Установите флажок, если хотите, чтобы этот органайзер имел дело с группами, а не с отдельными пользователями.
«Использовать имеющиеся группы»: один участник группы бронирует временной интервал для группы.
«Создание группы в пустом временном интервале»: группа курса создается для каждого нового интервала.
«Создание группы в забронированном временном интервале»: группа курса создается для каждого забронированного интервала.';
$string['location'] = 'Местоположение';
$string['location_help'] = 'Место, где находится временной интервал.';
$string['locationlink'] = 'URL-адрес ссылки местоположения';
$string['locationlink_help'] = 'Введите здесь полный адрес веб-сайта, на который направляет ссылка на местоположение. Этот сайт должен как минимум содержать информацию о том, как добраться до местоположения. Пожалуйста, введите полный адрес (включая http://)';
$string['locationlinkenable'] = 'автоматическая ссылка на информацию о местоположении';
$string['locationmandatory'] = 'Указание местоположения временного интервала является обязательным.';
$string['locationsettings'] = 'Настройки местоположения временного интервала';
$string['maillink'] = 'Органайзер доступен <a href=\'{$a}\'>здесь</a>.';
$string['maxparticipants'] = 'Макс. участников';
$string['maxparticipants_help'] = 'Определяет максимальное количество студентов, которые могут зарегистрироваться в эти временные интервалы. В случае группового органайзера это количество всегда ограничено одним.';
$string['message_autogenerated2'] = 'Автоматически сгенерированное сообщение';
$string['message_custommessage'] = 'Настраиваемое сообщение';
$string['message_custommessage_help'] = 'Используйте это поле для ввода личного текста в автоматически сгенерированное сообщение.';
$string['message_error_action_notallowed'] = 'Это действие больше невозможно. Пожалуйста, вернитесь назад и обновите страницу браузера!';
$string['message_error_groupsynchronization'] = 'Синхронизация группы интервала не удалась!';
$string['message_error_noactionchosen'] = 'Выберите действие, прежде чем нажать кнопку «Пуск».';
$string['message_error_slot_full_group'] = 'Этот временной интервал уже занят!';
$string['message_error_slot_full_single'] = 'В этом временном интервале не осталось свободных мест!';
$string['message_error_unknown_unqueue'] = 'Ваша запись в списке ожидания не может быть удалена! Неизвестная ошибка.';
$string['message_error_unknown_unregister'] = 'Ваша регистрация не может быть удалена! Неизвестная ошибка.';
$string['message_info_appointment_deleted'] = 'Встреча была удалена. Участник уведомлен.';
$string['message_info_appointment_deleted_group'] = 'Встречи одной группы удалены. Участники уведомлены.';
$string['message_info_appointment_not_deleted'] = 'Возникла проблема при удалении встречи.';
$string['message_info_queued'] = 'Вас добавили в список ожидания во временной интервал.';
$string['message_info_queued_group'] = 'Ваша группа была добавлена в список ожидания во временной интервал.';
$string['message_info_registered'] = 'Вы успешно зарегистрировались в интервале.';
$string['message_info_registered_group'] = 'Ваша группа успешно зарегистрировалась в интервале.';
$string['message_info_reminders_sent_pl'] = 'Напоминания ({$a->count}) были отправлены.';
$string['message_info_reminders_sent_sg'] = 'Напоминание отправлено: {$a->count}.';
$string['message_info_reregistered'] = 'Вы успешно перерегистрировались в интервале.';
$string['message_info_reregistered_group'] = 'Ваша группа успешно перерегистрировалась в интервале.';
$string['message_info_slots_added_pl'] = 'Новые интервалы ({$a->count}) были добавлены.';
$string['message_info_slots_added_sg'] = 'Добавлен новый интервал: {$a->count}.';
$string['message_info_slots_deleted_pl'] = 'Интервалы ({$a->deleted}) были удалены. Участники ({$a->notified}) уведомлены.';
$string['message_info_slots_deleted_sg'] = 'Один интервал был удален. Участники ({$a->notified}) были уведомлены.';
$string['message_info_slots_edited_pl'] = 'Интервалы ({$a->count}) были отредактированы.';
$string['message_info_slots_edited_sg'] = '{$a->count} временной интервал был отредактирован.';
$string['message_info_slots_evaluated_pl'] = 'Временные интервалы ({$a->count}) были оценены.';
$string['message_info_slots_evaluated_sg'] = '{$a->count} временной интервал был оценен.';
$string['message_info_unqueued'] = 'Вы были исключены из списка ожидания на временной интервал.';
$string['message_info_unqueued_group'] = 'Ваша группа была исключена из списка ожидания на временной интервал.';
$string['message_info_unregistered'] = 'Вы отменили регистрацию в временном интервале.';
$string['message_info_unregistered_group'] = 'Ваша группа отменила регистрацию в временном интервале.';
$string['message_warning_no_slots_added'] = 'Новые временные интервалы не добавлены!';
$string['message_warning_no_slots_selected'] = 'Сначала вам необходимо выбрать хотя бы один временной интервал!';
$string['message_warning_no_visible_slots_selected'] = 'Сначала вам необходимо выбрать хотя бы один ВИДИМЫЙ временной интервал!';
$string['messageprovider:appointment_reminder_student'] = 'Напоминание органайзера о встрече';
$string['messageprovider:appointment_reminder_teacher'] = 'Напоминание органайзера о встрече (учитель)';
$string['messageprovider:appointmentdeleted_notify_student'] = 'Встреча в органайзере удалена';
$string['messageprovider:assign_notify_student'] = 'Назначение в органайзер от учителя';
$string['messageprovider:assign_notify_teacher'] = 'Назначение в органайзер';
$string['messageprovider:edit_notify_student'] = 'Изменения в органайзере';
$string['messageprovider:edit_notify_teacher'] = 'Изменения в органайзере (учительские)';
$string['messageprovider:eval_notify_student'] = 'Уведомление органайзера об оценке';
$string['messageprovider:group_registration_notify_student'] = 'Уведомление органайзера о регистрации группы';
$string['messageprovider:manual_reminder_student'] = 'Напоминание о встрече вручную через органайзер';
$string['messageprovider:register_notify_teacher'] = 'Уведомление органайзера о регистрации';
$string['messageprovider:register_notify_teacher_queue'] = 'Уведомление органайзера о постановке в очередь';
$string['messageprovider:register_notify_teacher_register'] = 'Уведомление органайзера о регистрации';
$string['messageprovider:register_notify_teacher_reregister'] = 'Уведомление органайзера о перерегистрации';
$string['messageprovider:register_notify_teacher_unqueue'] = 'Уведомление органайзера об исключении из очереди';
$string['messageprovider:register_notify_teacher_unregister'] = 'Уведомление органайзера об отмене подписки';
$string['messageprovider:register_promotion_student'] = 'Уведомление органайзера о продвижении в очереди';
$string['messageprovider:register_reminder_student'] = 'Напоминание о регистрации в органайзере';
$string['messageprovider:slotdeleted_notify_student'] = 'Временные интервалы органайзера отменены';
$string['messageprovider:test'] = 'Тестовое сообщение органайзера';
$string['messages_all'] = 'Все регистрации, перерегистрации и отмены регистраций';
$string['messages_none'] = 'Нет уведомлений о регистрации';
$string['messages_re_unreg'] = 'Только перерегистрации и отмены регистрации';
$string['min'] = 'мин.';
$string['min_pl'] = 'мин.';
$string['modformwarningplural'] = 'Эти поля не могут быть отредактированы, так как в этом органайзере уже есть назначенные встречи!';
$string['modformwarningsingular'] = 'Это поле не может быть отредактировано, так как в этом органайзере уже есть назначенные встречи!';
$string['modulename'] = 'Органайзер';
$string['modulename_help'] = 'Органайзеры позволяют учителям назначать встречи со студентами, создавая временные интервалы, на которые студенты могут зарегистрироваться.';
$string['modulenameplural'] = 'Органайзеры';
$string['monthlyview'] = 'Просмотр за месяц';
$string['multimember'] = 'Пользователи не могут принадлежать к нескольким группам внутри одного потока!';
$string['multimemberspecific'] = 'Пользователь {$a->username} ({$a->idnumber}) зарегистрирован более чем в одной группе! ({$a->groups})';
$string['multipleappointmentenddate'] = 'Дата окончания';
$string['multipleappointmentstartdate'] = 'Дата начала';
$string['mymoodle_app_slot'] = 'Встреча на {$a->date} в {$a->time}';
$string['mymoodle_attended'] = '{$a->attended} из {$a->total} студентов участвовали во встрече';
$string['mymoodle_attended_group'] = '{$a->attended} из {$a->total} групп участвовали во встрече';
$string['mymoodle_attended_group_short'] = '{$a->attended} из {$a->total} групп посетили хотя бы одну встречу';
$string['mymoodle_attended_short'] = '{$a->attended} из {$a->total} участников посетили хотя бы одну встречу';
$string['mymoodle_completed_app'] = 'Вы участвовали во встрече {$a->date} в {$a->time}';
$string['mymoodle_completed_app_group'] = 'Ваша группа {$a->groupname} участвовала во встрече {$a->date} в {$a->time}';
$string['mymoodle_missed_app'] = 'Вы не присутствовали на встрече {$a->date} в {$a->time}';
$string['mymoodle_missed_app_group'] = 'Ваша группа {$a->groupname} не присутствовала на встрече {$a->date} в {$a->time}';
$string['mymoodle_next_slot'] = 'Следующий временной интервал на {$a->date} в {$a->time}.';
$string['mymoodle_no_reg_slot'] = 'Вы забронировали временные интервалы ({$a->booked}), но еще не достигли минимального количества временных интервалов ({$a->slotsmin}).';
$string['mymoodle_no_reg_slot_group'] = 'Ваша группа {$a->groupname} забронировала временные интервалы ({$a->booked}), но еще не достигла минимального количества временных интервалов ({$a->slotsmin}).';
$string['mymoodle_no_slots'] = 'Нет предстоящих временных интервалов.';
$string['mymoodle_organizer_expired'] = 'Срок действия этого органайзера истек {$a->date} в {$a->time}. Вы больше не можете его использовать.';
$string['mymoodle_organizer_expires'] = 'Срок действия этого органайзера истекает {$a->date} в {$a->time}';
$string['mymoodle_pending_app'] = 'Ваша встреча ожидает оценки';
$string['mymoodle_pending_app_group'] = 'Встреча вашей группы {$a->groupname} ожидает оценки';
$string['mymoodle_reg_slot'] = 'Вы забронировали временные интервалы ({$a->booked}) и, таким образом, достигли минимума бронирований ({$a->slotsmin}) .';
$string['mymoodle_reg_slot_group'] = 'Ваша группа {$a->groupname} временные интервалы ({$a->booked}) и, таким образом, достигла минимума бронирований ({$a->slotsmin}).';
$string['mymoodle_registered'] = '{$a->registered}/{$a->total} студентов зарегистрировались на встречу';
$string['mymoodle_registered_group'] = '{$a->registered}/{$a->total} групп зарегистрировались на встречу';
$string['mymoodle_registered_group_short'] = '{$a->registered} из {$a->total} групп забронировали минимальное количество интервалов: {$a->slotsmin}.';
$string['mymoodle_registered_short'] = '{$a->registered} из {$a->total} участников забронировали минимальное количество интервалов: {$a->slotsmin}.';
$string['mymoodle_upcoming_app'] = 'Ваша встреча состоится {$a->date} в {$a->time} в {$a->location}.';
$string['mymoodle_upcoming_app_group'] = 'Встреча вашей группы {$a->groupname} состоится {$a->date} в {$a->time} в {$a->location}.';
$string['newslot'] = 'Добавить еще временные интервалы';
$string['no_due_my_slots'] = 'Все ваши временные интервалы в этом органайзере истекли и/или скрыты';
$string['no_due_slots'] = 'Все временные интервалы, созданные в этом органайзере, истекли.';
$string['no_my_slots'] = 'Вы не создали временные интервалы в этом органайзере';
$string['no_slots'] = 'В этом органайзере не создано ни одного временного интервала';
$string['no_slots_defined'] = 'На данный момент нет свободных интервалов для записи на встречу.';
$string['no_slots_defined_teacher'] = 'На данный момент нет интервалов для встреч. Нажмите <a href=\'{$a->link}\'>здесь</a>, чтобы создать их сейчас.';
$string['nocalendareventslotcreation'] = 'В календаре нет событий для пустых интервалов';
$string['nocalendareventslotcreation_help'] = 'Если вы отметите этот параметр, то при создании интервалов не будут создаваться события календаря. Только встречи будут создавать события интервалов в календаре.';
$string['nofreeslots'] = 'Свободных интервалов нет.';
$string['nogroup'] = 'Нет групп';
$string['nolocationplaceholder'] = '[Будет определено]';
$string['noparticipants'] = 'Нет участников';
$string['norightpage'] = 'Вам не разрешено открывать эту страницу.';
$string['nosingleslotprintfields'] = 'Печать невозможна. Не определены поля пользователя. Смотрите настройки органайзера.';
$string['noslots'] = 'Нет временных интервалов';
$string['noslotsselected'] = 'Интервалы не выбраны!';
$string['notificationtime'] = 'Напомнить о назначенной встрече';
$string['notificationtime_help'] = 'Определяет, за какое время до назначенной встречи следует напомнить о ней студенту.';
$string['novalidparticipants'] = 'Нет действительных участников';
$string['numentries'] = 'Количество записей на странице';
$string['numentries_help'] = 'Выберите «оптимально», чтобы оптимизировать распределение списка записей в соответствии с выбранным размером текста и ориентацией страницы, если на вашем курсе зарегистрировано много участников.';
$string['organizer'] = 'Органайзер';
$string['organizer:addinstance'] = 'Добавлять новый органайзер';
$string['organizer:addslots'] = 'Добавлять новые временные интервалы';
$string['organizer:assignslots'] = 'Назначать временной интервал студенту';
$string['organizer:comment'] = 'Добавлять комментарии';
$string['organizer:deleteappointments'] = 'Удалять встречи';
$string['organizer:deleteslots'] = 'Удалять имеющиеся временные интервалы';
$string['organizer:editslots'] = 'Редактировать имеющиеся временные интервалы';
$string['organizer:evalslots'] = 'Оценивать временные интервалы';
$string['organizer:leadslots'] = 'Проводить временные интервалы.';
$string['organizer:printslots'] = 'Распечатывать имеющиеся временные интервалы';
$string['organizer:receivemessagesstudent'] = 'Получать сообщения, отправленные студентам';
$string['organizer:receivemessagesteacher'] = 'Получать сообщения, отправленные учителям';
$string['organizer:register'] = 'Регистрироваться во временном интервале';
$string['organizer:sendreminders'] = 'Отправлять студентам напоминания о регистрации';
$string['organizer:unregister'] = 'Отменять регистрацию во временном интервале';
$string['organizer:viewallslots'] = 'Просматривать все временные интервалы от лица учителя';
$string['organizer:viewmyslots'] = 'Просматривать свои временные интервалы от лица учителя';
$string['organizer:viewregistrations'] = 'Просматривать статусы регистрации студентов';
$string['organizer:viewstudentview'] = 'Просматривать все временные интервалы от лица студента';
$string['organizer_remind_all_no_recepients'] = 'Нет реальных получателей.';
$string['organizer_remind_all_recepients_pl'] = 'Следующим получателям будут отправлены сообщения (всего {$a->count}):';
$string['organizer_remind_all_recepients_sg'] = 'Следующим получателям будут отправлены сообщения (всего {$a->count}):';
$string['organizer_remind_all_title'] = 'Отправить напоминания';
$string['organizercommon'] = 'Настройки органайзера';
$string['organizername'] = 'Название органайзера';
$string['orientationlandscape'] = 'альбомная';
$string['orientationportrait'] = 'книжная';
$string['otherheader'] = 'Другое';
$string['pageorientation'] = 'Ориентация страницы';
$string['participants'] = 'Участник(и)';
$string['participants_help'] = 'Список участников, забронировавших этот временной интервал.';
$string['pasttimeslotstring'] = 'Не удалось создать временные интервалы ({$a->slots}), поскольку создание прошедших интервалов запрещено.';
$string['pasttimeslotstringphp'] = 'Не удалось создать временные интервалы ({$a->slots}), поскольку создание прошедших интервалов запрещено.';
$string['pdf_notactive'] = 'не активен';
$string['pdfsettings'] = 'Настройки PDF.';
$string['places_inqueue'] = 'Студентов в списке ожидания: {$a->inqueue}.';
$string['places_inqueue_withposition'] = 'Вы находитесь на {$a->queueposition} месте в списке ожидания.';
$string['places_taken_pl'] = 'Занято мест: {$a->numtakenplaces}/{$a->totalplaces}.';
$string['places_taken_sg'] = 'Занято мест: {$a->numtakenplaces}/{$a->totalplaces}.';
$string['pluginadministration'] = 'Управление органайзером';
$string['pluginname'] = 'Органайзер';
$string['position'] = 'Место в очереди';
$string['print_return'] = 'Вернуться к обзору интервалов';
$string['printout'] = 'Распечатать';
$string['printpreview'] = 'Предварительный просмотр печати (первые 10 записей)';
$string['printslotuserfieldsnotenabled'] = 'Функция «Печать полей пользователя интервала» не включена администратором.';
$string['printsubmit'] = 'Отобразить таблицу для печати';
$string['privacy:metadata:applicantidappointment'] = 'Идентификатор пользователя, забронировавшего этот интервал для группы.';
$string['privacy:metadata:applicantidqueue'] = 'Идентификатор пользователя, сделавшего эту запись для группы в очереди ожидания.';
$string['privacy:metadata:attended'] = 'Посещали интервал или нет пользователь или группа.';
$string['privacy:metadata:comments'] = 'Комментарии учителей к этому интервалу.';
$string['privacy:metadata:feedback'] = 'Учителя дают отзыв при оценивании интервала.';
$string['privacy:metadata:grade'] = 'Оценка, полученная пользователем или группой за этот интервал.';
$string['privacy:metadata:groupidappointment'] = 'Идентификатор группы пользователей, забронировавшей этот интервал.';
$string['privacy:metadata:groupidqueue'] = 'Идентификатор группы, которая сделала эту запись в очереди ожидания для интервала.';
$string['privacy:metadata:organizerslotappointments'] = 'Таблица, в которой хранятся данные о встречах в интервалах.';
$string['privacy:metadata:organizerslotqueues'] = 'Таблица, в которой хранятся записи об очереди ожидания для интервалов.';
$string['privacy:metadata:organizerslottrainer'] = 'Таблица, в которой хранятся сведения об учителях интервала.';
$string['privacy:metadata:showfreeslotsonly'] = 'Пользовательские настройки: в таблице должны отображаться только свободные интервалы.';
$string['privacy:metadata:showhiddenslots'] = 'Пользовательские настройки: должны ли в таблице отображаться скрытые интервалы.';
$string['privacy:metadata:showmyslotsonly'] = 'Пользовательские настройки: в таблице должны отображаться только мои интервалы.';
$string['privacy:metadata:showpasttimeslots'] = 'Пользовательские настройки: должны ли в таблице отображаться также и прошлые интервалы.';
$string['privacy:metadata:showregistrationsonly'] = 'Пользовательские настройки: в таблице интервалов должны отображаться только регистрации.';
$string['privacy:metadata:teacherapplicantid'] = 'Идентификатор учителя, который назначил этот временной интервал участнику или группе.';
$string['privacy:metadata:teacherapplicanttimemodified'] = 'Время, когда учитель назначил этот временной интервал участнику или группе.';
$string['privacy:metadata:trainerid'] = 'Идентификатор учителя временного интервала.';
$string['privacy:metadata:useridappointment'] = 'Идентификатор пользователя, забронировавшего этот временной интервал.';
$string['privacy:metadata:useridqueue'] = 'Идентификатор пользователя, сделавшего эту запись в очереди ожидания временного интервала.';
$string['queue'] = 'Очереди ожидания';
$string['queue_help'] = 'Очереди ожидания позволяют пользователям регистрироваться во временном интервале, даже если максимальное количество участников уже достигнуто.
Пользователи добавляются в очередь ожидания и назначаются в интервал (по порядку), как только интервал становится доступным.';
$string['recipientname'] = '_имя получателя_';
$string['reg_not_occured'] = 'Этот временной интервал еще не появился';
$string['reg_status'] = 'Статус регистрации';
$string['reg_status_not_registered'] = 'Не зарегистрирован';
$string['reg_status_organizer_expired'] = 'Срок действия органайзера истек';
$string['reg_status_registered'] = 'Зарегистрирован';
$string['reg_status_slot_attended'] = 'Присутствовал';
$string['reg_status_slot_available'] = 'Временной интервал доступен';
$string['reg_status_slot_expired'] = 'Срок действия временного интервала истек';
$string['reg_status_slot_full'] = 'Временной интервал заполнен';
$string['reg_status_slot_not_attended'] = 'Не присутствовал';
$string['reg_status_slot_past_deadline'] = 'Временной интервал просрочен';
$string['reg_status_slot_pending'] = 'Временной интервал ожидает оценки';
$string['register_notify_teacher:queue:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} занял очередь на интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:queue:group:smallmessage'] = 'Студент {$a->sendername} занял очередь для группы {$a->groupname} на интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа в списке ожидания.';
$string['register_notify_teacher:queue:smallmessage'] = 'Студент {$a->sendername} занял очередь на интервал на {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:queue:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - студент занял очередь.';
$string['register_notify_teacher:register:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} зарегистрировался на интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:register:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} зарегистрировал группу {$a->groupname} на интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:register:group:smallmessage'] = 'Студент {$a->sendername} зарегистрировал группу {$a->groupname} на интервал на {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа зарегистрирована.';
$string['register_notify_teacher:register:smallmessage'] = 'Студент {$a->sendername} зарегистрировался на интервал на {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - студент зарегистрирован.';
$string['register_notify_teacher:reregister:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} перерегистрировался на новый временной интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:reregister:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} перерегистрировал группу {$a->groupname} на новый временной интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:reregister:group:smallmessage'] = 'Студент {$a->sendername} перерегистрировал группу {$a->groupname} на новый временной интервал на {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа перерегистрирована.';
$string['register_notify_teacher:reregister:smallmessage'] = 'Студент {$a->sendername} перерегистрировался на новый временной интервал на {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:unqueue:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} исключил группу {$a->groupname} из списка ожидания на интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:unqueue:group:smallmessage'] = 'Студент {$a->sendername} исключил группу {$a->groupname} из списка ожидания на интервал на {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - группа исключена из списка ожидания.';
$string['register_notify_teacher:unqueue:smallmessage'] = 'Студент {$a->sendername} исключил себя из списка ожидания на интервал на {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:unqueue:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - студент исключен из списка ожидания.';
$string['register_notify_teacher:unregister:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} отменил регистрацию на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:unregister:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

В курсе {$a->courseid} {$a->coursefullname} студент {$a->sendername} отменил регистрацию группы {$a->groupname} на интервал на {$a->date} в {$a->time} в {$a->location}.

Система обмена сообщениями Moodle';
$string['register_notify_teacher:unregister:group:smallmessage'] = 'Студент {$a->sendername} отменил регистрацию группы {$a->groupname} во временном интервале {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Группа не зарегистрирована';
$string['register_notify_teacher:unregister:smallmessage'] = 'Студент {$a->sendername} отменил регистрацию во временном интервале {$a->date} в {$a->time} в {$a->location}.';
$string['register_notify_teacher:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Студент не зарегистрирован';
$string['register_promotion_student:fullmessage'] = 'Ваша регистрация на временной интервал переведена из статуса «в списке ожидания» в статус «забронировано».';
$string['register_promotion_student:group:fullmessage'] = 'Регистрация вашей группы на временной интервал переведена из статуса «в списке ожидания» в статус «забронировано».';
$string['register_promotion_student:group:smallmessage'] = 'Регистрация вашей группы на временной интервал переведена из статуса «в списке ожидания» в статус «забронировано».';
$string['register_promotion_student:group:subject'] = 'Органайзер Moodle: Группа перемещена в очереди';
$string['register_promotion_student:smallmessage'] = 'Ваша регистрация на временной интервал переведена из статуса «в списке ожидания» в статус «забронировано».';
$string['register_promotion_student:subject'] = 'Органайзер Moodle: Перемещение в очереди';
$string['register_reminder_student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

Вы еще не зарегистрировались на требуемое количество временных интервалов в курсе {$a->courseid} {$a->coursefullname}.

{$a->custommessage}

Система обмена сообщениями Moodle';
$string['register_reminder_student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

Ваша группа {$a->groupname} еще не зарегистрировалась на требуемое количество временных интервалов в курсе {$a->courseid} {$a->coursefullname}.

{$a->custommessage}

Система обмена сообщениями Moodle';
$string['register_reminder_student:group:smallmessage'] = 'Пожалуйста, зарегистрируйте свою группу на требуемое количество временных интервалов.';
$string['register_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Напоминание о регистрации';
$string['register_reminder_student:smallmessage'] = 'Пожалуйста, зарегистрируйтесь на требуемое количество временных интервалов.';
$string['register_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Напоминание о регистрации';
$string['relative_deadline_before'] = 'до встречи';
$string['relative_deadline_now'] = 'Начать сейчас';
$string['relativedeadline'] = 'Относительный крайний срок';
$string['relativedeadline_help'] = 'Устанавливает крайний срок подачи заявки на указанный  заранее интервал. Студенты не смогут изменить регистрацию или отменить регистрацию после истечения крайнего срока.';
$string['remindall_desc'] = 'Отправить напоминания всем участникам без назначенных встреч';
$string['remindallmultiple_desc'] = 'Отправить напоминания всем участникам, у которых недостаточно назначенных встреч';
$string['requiremodintro'] = 'Требуется описание активного элемента';
$string['reset_organizer_all'] = 'Удаление слотов, встреч и связанных событий';
$string['resetorganizerall'] = 'Очистить все данные органайзера (интервалы и встречи)';
$string['reviewsubmit'] = 'Пересмотр временных интервалов';
$string['rewievslotsheader'] = 'Пересмотр временных интервалов';
$string['search:activity'] = 'Органайзер - информация об активном элементе';
$string['searchfilter'] = 'Поиск/Фильтр';
$string['sec'] = 'сек.';
$string['sec_pl'] = 'сек.';
$string['select'] = 'Выбрать интервалы';
$string['select_all_entries'] = 'Выбрать все записи';
$string['select_all_slots'] = 'Выбрать все видимые интервалы';
$string['select_help'] = 'Выберите один или несколько интервалов, с которыми хотите поработать.';
$string['selectedgrouplist'] = 'Выбранные группы';
$string['selectedslots'] = 'Выбранные интервалы';
$string['showmore'] = 'Показать больше';
$string['signature'] = 'Подпись';
$string['singleslotcommands'] = 'Действие с одним интервалом';
$string['singleslotcommands_help'] = 'Нажмите на кнопку действия, чтобы работать непосредственно с одним интервалом.';
$string['singleslotprintfield'] = 'Печатать поле пользователя';
$string['singleslotprintfield0'] = 'Печатать поле пользователя';
$string['singleslotprintfield0_help'] = 'Эти поля пользователя будут использоваться для каждого участника при распечатке одного интервала.';
$string['singleslotprintfields'] = 'Поля профиля пользователя при печати одного интервала';
$string['singleslotprintfields_help'] = 'ПОДДЕЛЬНЫЙ ТЕКСТ - необходимо изменить, добавив больше информации о полях профиля и о том, как они заданы в настройках администратора.';
$string['slot'] = 'Встреча';
$string['slot_anonymous'] = 'Анонимный интервал';
$string['slot_slotvisible'] = 'Участники видны, только если у них есть интервал';
$string['slot_visible'] = 'Участники интервала видны всегда';
$string['slotassignedby'] = 'Интервал назначен';
$string['slotdeleted_notify_student:fullmessage'] = 'Здравствуйте, {$a->receivername}!

Ваша встреча в курсе {$a->courseshortname} на {$a->date} в {$a->time} в {$a->location} была отменена.';
$string['slotdeleted_notify_student:group:fullmessage'] = 'Здравствуйте, {$a->receivername}!

Ваша групповая встреча в рамках курса {$a->courseshortname} на {$a->date} в {$a->time} в {$a->location} была отменена.';
$string['slotdeleted_notify_student:group:smallmessage'] = 'Ваша групповая встреча на {$a->date} в {$a->time} в {$a->location} была отменена.';
$string['slotdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - групповая встреча отменена.';
$string['slotdeleted_notify_student:smallmessage'] = 'Ваша встреча на {$a->date} в {$a->time} в органайзере «{$a->organizername}» была отменена.';
$string['slotdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - встреча отменена.';
$string['slotdetails'] = 'Подробная информация об интервале';
$string['slotfrom'] = 'с';
$string['slotlistempty'] = 'Временные интервалы не найдены.';
$string['slotoptionstable'] = 'Расширение этой таблицы';
$string['slotoptionstable_help'] = 'Показывать также прошедшие или скрытые временные интервалы.';
$string['slotperiodendtime'] = 'Дата окончания';
$string['slotperiodheader'] = 'Сгенерировать интервалы для диапазона дат';
$string['slotperiodheader_help'] = 'Укажите начальную и конечную дату, к которой будут применяться ежедневные временные рамки (раздел ниже). Укажите здесь также, будет ли интервал виден студентам.';
$string['slotperiodstarttime'] = 'Дата начала';
$string['slottimeframesheader'] = 'Конкретные временные рамки';
$string['slottimeframesheader_help'] = 'Этот раздел позволяет задавать временные интервалы в будние дни, которые будут заполнены интервалами встреч со свойствами, указанными выше. В день может быть более одного временного интервала. Если выбран временной интервал в понедельник, он будет генерировать временные интервалы для каждого понедельника между датами начала и окончания (включительно).';
$string['slotto'] = 'до';
$string['status'] = 'Подробности о статусе';
$string['status_help'] = 'Текущий статус этого интервала.';
$string['status_no_entries'] = 'В этом органайзере студенты не зарегистрированы.';
$string['stroptimal'] = 'оптимально';
$string['studentcomment_title'] = 'Комментарии студентов';
$string['synchronizegroupmembers'] = 'Синхронизировать участников группы';
$string['synchronizegroupmembers_help'] = 'Если участники группы Moodle изменятся, то изменения будут внесены в забронированные слоты.';
$string['taballapp'] = 'Встречи';
$string['tabstatus'] = 'Статус регистрации';
$string['tabstud'] = 'Вид для студента';
$string['teacher'] = 'Учитель';
$string['teacher_help'] = 'Список учителей этого интервала.';
$string['teacher_unchanged'] = '-- без изменений --';
$string['teachercomment_title'] = 'Комментарии учителя';
$string['teacherfeedback_title'] = 'Отзывы учителя';
$string['teacherid'] = 'Учитель';
$string['teacherid_help'] = 'Выберите учителя, который будет вести занятия.';
$string['teacherinvisible'] = 'Учитель не виден';
$string['teachervisible'] = 'Учитель виден';
$string['teachervisible_help'] = 'Установите этот флажок, если вы хотите разрешить студентам видеть учителя, связанного с этим временным интервалом.';
$string['textsize'] = 'Размер текста';
$string['th_actions'] = 'Действие';
$string['th_appdetails'] = 'Подробности';
$string['th_attended'] = 'Присут.';
$string['th_bookings'] = 'Всего забронировано';
$string['th_comments'] = 'Комментарий участника';
$string['th_datetime'] = 'Дата и время';
$string['th_datetimedeadline'] = 'Дата и время';
$string['th_details'] = 'Статус';
$string['th_duration'] = 'Продолжительность';
$string['th_email'] = 'Эл. почта';
$string['th_evaluated'] = 'Оценка';
$string['th_feedback'] = 'Отзыв';
$string['th_firstname'] = 'Имя';
$string['th_grade'] = 'Оценка';
$string['th_group'] = 'Группа';
$string['th_groupname'] = 'Группа';
$string['th_idnumber'] = 'Номер ID';
$string['th_lastname'] = 'Фамилия';
$string['th_location'] = 'Местоположение';
$string['th_participant'] = 'Участник';
$string['th_participants'] = 'Участники';
$string['th_status'] = 'Статус';
$string['th_teacher'] = 'Учитель';
$string['th_teachercomments'] = 'Комментарий учителя';
$string['timeshift'] = 'Перенос абсолютного крайнего срока';
$string['timeslot'] = 'Временной интервал органайзера';
$string['timetemplate'] = '%H:%M';
$string['title_add'] = 'Добавить новые интервалы для встреч';
$string['title_comment'] = 'Редактирование своего комментария';
$string['title_delete'] = 'Удаление выбранных временных интервалов';
$string['title_delete_appointment'] = 'Удаление назначенной встречи';
$string['title_edit'] = 'Редактирование выбранных временных интервалов';
$string['title_eval'] = 'Оценивание выбранных временных интервалов';
$string['title_print'] = 'Печать интервалов';
$string['totalday'] = 'xxx интервалов для yyy человек';
$string['totalday_groups'] = 'xxx интервалов для yyy групп';
$string['totalslots'] = 'от {$a->starttime} до {$a->endtime}, {$a->duration} {$a->unit} каждый, всего интервалов - {$a->totalslots}';
$string['totaltotal'] = 'Всего: xxx интервалов для yyy человек';
$string['totaltotal_groups'] = 'Всего: xxx интервалов для yyy групп';
$string['trainer'] = 'Учитель';
$string['trainerid'] = 'Учитель';
$string['trainerid_help'] = 'Выберите учителя, который будет вести занятия.';
$string['unavailableslot'] = 'Этот интервал доступен с';
$string['unknown'] = 'Неизвестно';
$string['userslots_mingreatermax'] = 'Минимальное количество интервалов для пользователя больше максимального.';
$string['userslotsdailymax'] = 'Максимальное количество интервалов для участника или группы в день';
$string['userslotsdailymax_help'] = 'Количество интервалов, которые участник или группа могут забронировать в день. «0» означает, что ежедневного ограничения нет.';
$string['userslotsmax'] = 'Максимальное количество интервалов для участника или группы';
$string['userslotsmax_help'] = 'Количество интервалов, которые участник или группа могут забронировать.';
$string['userslotsmin'] = 'Минимальное количество интервалов для участника или группы';
$string['userslotsmin_help'] = 'Минимальное количество интервалов, которое должен забронировать участник или группа.';
$string['visibility'] = 'Видимость участников - предварительная настройка';
$string['visibility_all'] = 'Видимы';
$string['visibility_anonymous'] = 'Анонимны';
$string['visibility_help'] = 'Определение параметра видимости по умолчанию, с которым будет создан новый интервал.<br/><b>Анонимны:</b> Участники этого интервала всегда невидимы для всех.<br/><b>Видимы:</b> Все участники этого интервала всегда видны всем.<br/><b>Видны только участникам интервала:</b> Только участники интервала могут видеть друг друга.';
$string['visibility_slot'] = 'Видны только участникам интервала';
$string['visible'] = 'Интервал виден';
$string['waitinglists_desc_active'] = 'Списки ожидания активированы.';
$string['waitinglists_desc_notactive'] = 'Списки ожидания не активированы.';
$string['warning_groupingid'] = 'Групповой режим включен. Необходимо выбрать допустимый поток.';
$string['warninggroupmode'] = 'Для создания органайзера группы необходимо включить групповой режим и выбрать группу!';
$string['warningtext1'] = 'Выбранные интервалы содержат в этом поле разные значения!';
$string['warningtext2'] = 'ВНИМАНИЕ! Содержимое этого поля было изменено!';
$string['weekdaylabel'] = 'Будничный интервал';
$string['with'] = 'с';
