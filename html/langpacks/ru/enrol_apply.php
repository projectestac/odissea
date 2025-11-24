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
 * Strings for component 'enrol_apply', language 'ru', version '4.5'.
 *
 * @package     enrol_apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationcancelednotification'] = 'Ваша заявка на зачисление была отклонена.';
$string['applicationconfirmednotification'] = 'Ваша заявка на зачисление была одобрена.';
$string['applicationdeferrednotification'] = 'Ваша заявка на зачисление на курс была отложена (в настоящее время вы находитесь в списке ожидания).';
$string['apply:config'] = 'Настраивать экземпляры способа «Подтверждение записи на курс»';
$string['apply:manage'] = 'Управлять зачислением';
$string['apply:manageapplications'] = 'Управлять заявками на зачисление';
$string['apply:unenrol'] = 'Отчислять пользователей из курса';
$string['apply:unenrolself'] = 'Отчислять себя из курса';
$string['applycomment'] = 'Комментарий';
$string['applydate'] = 'Дата записи';
$string['applymanage'] = 'Управление заявками на запись';
$string['applyuser'] = 'Имя / Фамилия';
$string['applyusermail'] = 'Адрес электронной почты';
$string['btncancel'] = 'Отказать';
$string['btnconfirm'] = 'Подтвердить';
$string['btnwait'] = 'Отложить';
$string['cancelmail_heading'] = 'Письмо с отказом';
$string['cancelmailcontent'] = 'Текст письма с отказом';
$string['cancelmailcontent_desc'] = 'Пожалуйста, используйте следующие специальные обозначения для замены контента в тексте письма данными из Moodle.<br/>{first name}:Имя пользователя; {content}:Название курса;{lastname}:Фамилия пользователя;{username}:Логин пользователя';
$string['cancelmailsubject'] = 'Тема письма с отказом';
$string['cantenrol'] = 'Зачисление отключено или неактивно';
$string['comment'] = 'Комментарий';
$string['confirmenrol'] = 'Управление заявкой';
$string['confirmmail_heading'] = 'Письмо с подтверждением';
$string['confirmmailcontent'] = 'Текст письма с подтверждением';
$string['confirmmailcontent_desc'] = 'Пожалуйста, используйте следующие специальные обозначения для замены контента в тексте письма данными из Moodle.<br/>{first name}:Имя пользователя; {content}:Название курса;{lastname}:Фамилия пользователя;{username}:Логин пользователя';
$string['confirmmailsubject'] = 'Тема письма с подтверждением';
$string['confirmusers'] = 'Записать подтвержденных';
$string['confirmusers_desc'] = 'Отложенные заявки помечены серым цветом';
$string['coursename'] = 'Курс';
$string['custom_label'] = 'Собственное название';
$string['defaultperiod'] = 'Продолжительность зачисления по умолчанию';
$string['defaultperiod_desc'] = 'Продолжительность зачисления по умолчанию. Если задано значение 0, то продолжительность зачисления не ограничена.';
$string['defaultperiod_help'] = 'Продолжительность зачисления, начиная с момента записи на курс. Если отключено, то по умолчанию продолжительность зачисления не ограничена.';
$string['editdescription'] = 'Редактирование описания';
$string['enrolname'] = 'Подтверждение записи на курс';
$string['enrolperiod'] = 'Продолжительность зачисления';
$string['enrolperiod_desc'] = 'Значение по умолчанию для продолжительности зачисления на курс. Если задан 0, то зачисление не будет ограничиваться.';
$string['enrolperiod_help'] = 'Период времени, в течение которого зачисление действительно, начиная с момента зачисления пользователя. Если отключено, то продолжительность зачисления будет неограниченной.';
$string['enrolusers'] = 'Зачислить пользователей';
$string['expiredaction'] = 'Действие по истечении срока зачисления';
$string['expiredaction_help'] = 'Выберите действие, которое будет выполняться по истечении срока зачисления пользователя. Обратите внимание, что некоторые данные и настройки пользователя удаляются из курса при его отчислении.';
$string['expiry_heading'] = 'Настройки отчисления';
$string['expirymessageenrolledbody'] = 'Уважаемый(ая) {$a->user},

Оповещаем Вас о том, что ваше зачисление на курс «{$a->course}» истекает {$a->timeend}.

При возникновении вопросов, пожалуйста, свяжитесь с {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Оповещение об истечении зачисления на курс';
$string['expirymessageenrollerbody'] = 'Зачисление на курс «{$a->course}» истекает {$a->threshold} для следующих пользователей:

{$a->users}

Чтобы продлить время зачисления, перейдите по ссылке {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Оповещение об истечении зачисления на курс';
$string['expirynotifyall'] = 'Учителя и записанные пользователи';
$string['expirynotifyenroller'] = 'Только учителя';
$string['group'] = 'Групповые назначения';
$string['group_help'] = 'Вы можете назначить несколько групп либо ни одной';
$string['mailtoteacher_suject'] = 'Новый запрос на зачисление!';
$string['maxenrolled'] = 'Максимальное число зачисленных';
$string['maxenrolled_help'] = 'Указывает максимальное количество пользователей, которые могут самостоятельно записаться на курс. 0 - ограничений нет.';
$string['maxenrolled_tip_1'] = 'из';
$string['maxenrolled_tip_2'] = 'все места заняты';
$string['maxenrolledreached_left'] = 'Разрешённое количество зачислений';
$string['maxenrolledreached_right'] = 'было достигнуто';
$string['messageprovider:cancelation'] = 'Сообщение об отклонении заявки';
$string['messageprovider:confirmation'] = 'Сообщение об одобрении заявки';
$string['messageprovider:expiry_notification'] = 'Сообщение об истечении срока зачисления на курс';
$string['messageprovider:waitinglist'] = 'Сообщение об отложении рассмотрения заявки';
$string['newapplicationnotification'] = 'Была подана новая заявка на зачисление.';
$string['newenrols'] = 'Разрешить создавать новые заявки';
$string['notification'] = '<b>Заявка на запись успешно отправлена</b>. <br/><br/>После подтверждения заявки Вы получите уведомление по электронной почте.';
$string['notify_desc'] = 'Определите, кто будет получать оповещения о новых заявках';
$string['notify_heading'] = 'Настройки оповещения';
$string['notifycoursebased'] = 'Оповещение о новых заявках (в рамках курса)';
$string['notifycoursebased_desc'] = 'По умолчанию для новых заявок: Оповещать всех с правом «Управлять заявками на зачисление» для соответствующего курса (например, Учитель либо Управляющий)';
$string['notifyglobal'] = 'Оповещения о новых заявках (в рамках системы)';
$string['notifyglobal_desc'] = 'Определяет, кто будет получать оповещения о новых заявках на любые курсы.';
$string['opt_commentaryzone'] = 'Поле комментария';
$string['opt_commentaryzone_help'] = 'Да -> Включить поле для комментария в форме заявки на зачисление';
$string['pluginname'] = 'Подтверждение записи на курс';
$string['pluginname_desc'] = 'Этот плагин позволяет пользователям подавать заявки для записи на курс. После этого учитель или управляющий сайтом должен подтвердить заявку, чтобы пользователь был записан на курс.';
$string['privacy:metadata'] = 'Плагин подтверждения зачисления на курс не хранит никаких личных данных.';
$string['sendexpirynotificationstask'] = 'Фоновая задача рассылки сообщений об истечении срока зачисления';
$string['show_extra_user_profile'] = 'Показать дополнительные поля профиля пользователя на странице записи.';
$string['show_standard_user_profile'] = 'Показать стандартные поля профиля пользователя на странице записи.';
$string['status'] = 'Разрешить подтверждение записи на курс';
$string['status_desc'] = 'Разрешить доступ к курсу уже записанным пользователям.';
$string['submitted_info'] = 'Информация о зачислениях';
$string['user_profile'] = 'Профиль пользователя';
$string['waitmail_heading'] = 'Письмо об отложенной обработке заявки';
$string['waitmailcontent'] = 'Текст письма об отложенной обработке заявки';
$string['waitmailcontent_desc'] = 'Пожалуйста используйте специальные обозначения в тексте, что бы на их место подставлялись значения из данных Moodle.<br/>{firstname}: Имя адресата; {content}: Название курса; {lastname}: Фамилия адресата; {username}: логин в системе';
$string['waitmailsubject'] = 'Тема письма об отложенной обработке заявки';
