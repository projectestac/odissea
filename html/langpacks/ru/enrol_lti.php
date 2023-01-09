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
 * Strings for component 'enrol_lti', language 'ru', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Обратите внимание: Рекомендуется включить параметр сайта «Разрешить встраивание во фрейм», чтобы инструменты отображались внутри фрейма, а не в новом окне.';
$string['authltimustbeenabled'] = 'Обратите внимание: для этого плагина требуется, чтобы также был включен плагин аутентификации LTI.';
$string['cartridgeurl'] = 'URL картриджа';
$string['couldnotestablishproxy'] = 'Не удалось установить прокси с потребителем.';
$string['deletedactivity'] = 'Активный элемент удален';
$string['deletedactivityalt'] = 'Удален активный элемент, совместно используемый этим экземпляром';
$string['deletedactivitydescription'] = 'Удален активный элемент, совместно используемый этим экземпляром. Вы можете выбрать другой элемент для совместного использования, отредактировав экземпляр, или, если он больше не нужен, вы можете просто удалить экземпляр. При удалении экземпляра будут удалены все связанные с ним зачисления пользователей.';
$string['enrolenddate'] = 'Дата окончания';
$string['enrolenddate_help'] = 'Если параметр включен, пользователи могут получить доступ только до этой даты.';
$string['enrolenddateerror'] = 'Дата окончания записи на курс не может быть раньше даты начала';
$string['enrolisdisabled'] = 'Плагин «Опубликовать как инструмент LTI» отключен.';
$string['enrolmentfinished'] = 'Запись на курс завершена.';
$string['enrolmentnotstarted'] = 'Запись на курс еще не началась.';
$string['enrolperiod'] = 'Продолжительность обучения';
$string['enrolperiod_help'] = 'Длина периода времени, в течение которого запись на курс будет активной, начиная с момента, когда пользователь записался из внешней системы. Если параметр отключен, продолжительность обучения будет неограниченной.';
$string['enrolstartdate'] = 'Дата начала';
$string['enrolstartdate_help'] = 'Если параметр включен, пользователи могут получить доступ только начиная с этой даты.';
$string['failedrequest'] = 'Сбой запроса. Причина: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Для доступа к инструменту пожалуйста перейдите по ссылке внизу.';
$string['gradesync'] = 'Синхронизация оценок';
$string['gradesync_help'] = 'Передаются ли оценки из инструмента во внешнюю систему (клиент LTI).';
$string['incorrecttoken'] = 'Токен был неверным. Проверьте URL-адрес и попробуйте еще раз или обратитесь к администратору этого инструмента.';
$string['invalidrequest'] = 'Неверный запрос';
$string['invalidtoolconsumer'] = 'Неверный потребитель инструмента.';
$string['launchdetails'] = 'Подробности запуска';
$string['launchdetails_help'] = 'Для настройки инструмента требуется URL-адрес картриджа (также называемый URL-адресом конфигурации) плюс пароль или URL-адрес запуска.';
$string['launchurl'] = 'URL-адрес запуска';
$string['lti:config'] = 'Настраивать экземпляры способа записи на курс «Опубликовать как инструмент LTI»';
$string['lti:unenrol'] = 'Отчислить пользователей из курса';
$string['maxenrolled'] = 'Максимальное число записанных пользователей';
$string['maxenrolled_help'] = 'Максимальное число внешних пользователей, которые могут получить доступ к инструменту. Если параметр равен 0, число записанных пользователей не будет ограничено.';
$string['maxenrolledreached'] = 'Достигнуто максимальное число внешних пользователей, которым разрешен доступ к инструменту.';
$string['membersync'] = 'Синхронизация пользователей';
$string['membersync_help'] = 'При выполнении запланированного задания синхронизировать ли зарегистрированных во внешней системе пользователей с зачислениями на этот курс, при необходимости создавая учетную запись для каждого отдаленного пользователя, а также зачислять или отчислять их при необходимости.

Если установлено значение «Нет», то при обращении отдаленного пользователя к инструменту для него будет создана учетная запись и он автоматически будет записан на курс.';
$string['membersyncmode'] = 'Режим синхронизации пользователей';
$string['membersyncmode_help'] = 'Должны ли внешние пользователи быть зачислены и/или отчислены из этого курса.';
$string['membersyncmodeenrolandunenrol'] = 'Зачислять новых и отчислять отсутствующих пользователей';
$string['membersyncmodeenrolnew'] = 'Зачислять новых пользователей';
$string['membersyncmodeunenrolmissing'] = 'Отчислять отсутствующих пользователей';
$string['notoolsprovided'] = 'Нет предоставляемых инструментов';
$string['opentool'] = 'Открыть инструмент';
$string['pluginname'] = 'Опубликовать как инструмент LTI';
$string['pluginname_desc'] = 'Плагин «Опубликовать как инструмент LTI», вместе с плагином аутентификации LTI, позволяет внешним пользователям получить доступ к курсам и элементам. Другими словами, Moodle функционирует как провайдер инструментов LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Список пользователей, зачисленных через поставщика LTI.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Время, когда пользователь последний раз обращался к курсу';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Последняя оценка пользователя была записана как имеющая силу';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Время, когда пользователь был зачислен';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID пользователя';
$string['registration'] = 'Регистрация опубликованного инструмента';
$string['registrationurl'] = 'URL-адрес регистрации';
$string['registrationurl_help'] = 'Если используется URL-адрес регистрации (также называемый URL-адресом прокси), инструмент настраивается автоматически.';
$string['remotesystem'] = 'Внешняя система';
$string['requirecompletion'] = 'Требуется завершение курса или выполнение элемента до синхронизации оценок';
$string['returnurlnotset'] = 'URL-адрес возврата не задан.';
$string['roleinstructor'] = 'Роль для учителя';
$string['roleinstructor_help'] = 'Роль, которая назначается в инструменте внешнему учителю.';
$string['rolelearner'] = 'Роль для студента';
$string['rolelearner_help'] = 'Роль, которая назначается в инструменте внешнему студенту.';
$string['secret'] = 'Секретный ключ';
$string['secret_help'] = 'Строка символов, которая является общей с внешней системой (клиентом LTI) для обеспечения доступа к инструменту.';
$string['sharedexternaltools'] = 'Опубликовать как инструменты LTI';
$string['successfulregistration'] = 'Успешная регистрация.';
$string['tasksyncgrades'] = 'Синхронизация оценок плагина «Опубликовать как инструмент LTI»';
$string['tasksyncmembers'] = 'Синхронизация пользователей плагина «Опубликовать как инструмент LTI»';
$string['toolsprovided'] = 'Опубликованные инструменты';
$string['toolsprovided_help'] = 'Инструмент можно использовать совместно с другим сайтом, предоставив либо сведения о запуске, либо URL-адрес регистрации.';
$string['tooltobeprovided'] = 'Инструмент, который должен быть опубликован';
$string['toolurl'] = 'URL инструмента';
$string['userdefaultvalues'] = 'Значения по умолчанию для пользователей';
