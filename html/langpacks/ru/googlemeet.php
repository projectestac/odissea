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
 * Strings for component 'googlemeet', language 'ru', version '4.5'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['at'] = 'в';
$string['calendareventname'] = '{$a} запланировано для';
$string['checkweekdays'] = 'Выберите дни недели, которые попадают в выбранный диапазон дат.';
$string['creatoremail'] = 'Адрес электронной почты организатора';
$string['creatoremail_error'] = 'Введите правильный адрес электронной почты';
$string['creatoremail_help'] = 'Адрес электронной почты организатора мероприятия';
$string['date'] = 'Дата';
$string['duration'] = 'Продолжительность';
$string['earlierto'] = 'Дата мероприятия не может быть ранее, чем дата начала курса ({$a}).';
$string['emailcontent'] = 'Текст письма';
$string['emailcontent_default'] = '<p>Здравствуйте, %userfirstname%!</p> <p>Напоминаем Вам о том, что в «%coursename%» состоится мероприятие в Google Meet.</p> <p><b>%googlemeetname%</b></p> <p>Когда: %eventdate% %duration% %timezone%</p> <p>Ссылка для входа: %url%</p>';
$string['emailcontent_help'] = 'При отправке уведомления студенту, система берёт текст письма из данного поля. Можно использовать следующие подстановочные поля: <ul> <li>%userfirstname%</li> <li>%userlastname%</li> <li>%coursename%</li> <li>%googlemeetname%</li> <li>%eventdate%</li> <li>%duration%</li> <li>%timezone%</li> <li>%url%</li> <li>%cmid%</li> </ul>';
$string['entertheroom'] = 'Войти в собрание';
$string['eventdate'] = 'Дата мероприятия';
$string['eventdetails'] = 'Подробности о мероприятии';
$string['from'] = 'с';
$string['googlemeet:addinstance'] = 'Добавлять новый Google Meet™ для Moodle';
$string['googlemeet:editrecording'] = 'Редактировать записи';
$string['googlemeet:removerecording'] = 'Удалять записи';
$string['googlemeet:syncgoogledrive'] = 'Сихронизировать с Google Диск';
$string['googlemeet:view'] = 'Просматривать содержимое Google Meet™ для Moodle';
$string['hide'] = 'Скрыть';
$string['invalideventenddate'] = 'Эта дата не может быть ранее, чем «Дата мероприятия»';
$string['invalideventendtime'] = 'Время окончания должно быть позднее, чем время начала';
$string['invalidissuerid'] = 'Служба OAuth, выбранная в настройках Google Meet™ for Moodle не поддерживается Google';
$string['invalidstoredurl'] = 'Не возможно отобразить этот ресурс, URL-адрес Google Meet некорректный.';
$string['isnotcreatoremail'] = 'Войдите с учетной записью организатора или измените в настройках адрес электронной почты организатора для синхронизации записей.';
$string['issuerid'] = 'Служба OAuth';
$string['issuerid_desc'] = '<a href="https://github.com/ronefel/moodle-mod_googlemeet/wiki/How-to-create-Client-ID-and-Client-Secret" target="_blank">Как настроить службу OAuth</a>';
$string['jstableinfo'] = 'Показаны записи с {start} по {end} из {rows}';
$string['jstableinfofiltered'] = 'Показаны записи с {start} по {end} из {rows} (отфильтровано из {rowsTotal} записей)';
$string['jstableloading'] = 'Загрузка...';
$string['jstablenorows'] = 'Не найдены записи';
$string['jstableperpage'] = 'Записей на странице - {select}';
$string['jstablesearch'] = 'Поиск...';
$string['lastsync'] = 'Последняя синхронизация:';
$string['loading'] = 'Загрузка';
$string['loggedinaccount'] = 'Подключённая учётная запись Google';
$string['logintoaccount'] = 'Войти в Вашу учётную запись Google';
$string['logintoyourgoogleaccount'] = 'Войдите в Вашу учётную запись Google, чтобы URL-адрес Google Meet мог автоматически создаваться';
$string['logout'] = 'Выйти';
$string['manage'] = 'Управление';
$string['messageprovider:notification'] = 'Уведомление о начале мероприятия Google Meet';
$string['minutesbefore'] = 'Минут до начала';
$string['minutesbefore_help'] = 'Число минут до начала мероприятия, когда будет отправляться уведомление.';
$string['modulename'] = 'Google Meet™ для Moodle';
$string['modulename_help'] = 'Модуль «Google Meet™ для Moodle» позволяет учителю создавать комнату Google Meet как ресурс в курсе и после мероприятий делать доступными для студентов записи, сохранённые на Google Диске. <p>©2018 Google LLC All rights reserved.<br/> Google Meet и  логотип Google Meet logo — зарегистрированные торговые марки Google LLC.</p>';
$string['modulenameplural'] = 'Экземпляры Google Meet™ для Moodle';
$string['multieventdateexpanded'] = 'Развернуть «Повторять дату мероприятия»';
$string['multieventdateexpanded_desc'] = 'Показывать настройки «Повторять дату мероприятия» в развёрнутом виде по умолчанию при создании новой комнаты.';
$string['name'] = 'Название';
$string['never'] = 'Никогда';
$string['notification'] = 'Уведомление';
$string['notificationexpanded'] = 'Развернуть «Уведомление»';
$string['notify'] = 'Отправлять уведомление студенту';
$string['notify_help'] = 'Если включено, уведомление о дате начала мероприятия будет отправлено студенту.';
$string['notifycationexpanded_desc'] = 'При создании нового собрания по умолчанию показывать настройки уведомлений в развёрнутом виде.';
$string['notifytask'] = 'Задача уведомления Google Meet™ для Moodle';
$string['or'] = 'или';
$string['play'] = 'Воспроизвести';
$string['pluginadministration'] = 'Управление Google Meet™ для Moodle';
$string['pluginname'] = 'Google Meet™ для Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Записывает отправляемые пользователям уведомления о начале мероприятий. Эти данные являются временными и удаляются после даты начала мероприятия.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'ID события';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'Момент времени, показывающий, когда пользователь получил уведомление';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'ID пользователя';
$string['recording'] = 'Запись';
$string['recordings'] = 'Записи';
$string['recordingswiththename'] = 'Записи с названием:';
$string['recurrenceeventdate'] = 'Повторять дату мероприятия';
$string['recurrenceeventdate_help'] = 'Это функция позволяет создавать несколько повторных мероприятий с указанной даты. <br>* <strong>Повторять в</strong>: Выберите дни недели, по которым ваш класс будет встречаться (например, Понедельник / Среда / Пятница). <br>* <strong>Повторять каждые</strong>: Позволяет настроить частоту. Если Ваш класс встречается каждую неделю, выберите 1; каждые две недели — выберите 2; каждые 3 недели — выберите 3, и т.д. <br>* <strong>Повторять до</strong>: Выберите последний день мероприятий (последний день, в который должно повторяться мероприятие).';
$string['repeatasfollows'] = 'Повторять дату мероприятия выше следующим образом';
$string['repeatevery'] = 'Повторять каждые';
$string['repeaton'] = 'Повторять в';
$string['repeatuntil'] = 'Повторять до';
$string['roomcreator'] = 'Организатор:';
$string['roomname'] = 'Название собрания';
$string['roomurl'] = 'URL-адрес собрания';
$string['roomurl_caution'] = '<strong>Внимание!</strong> Если изменить URL-адрес собрания или адрес электронной почты организатора, синхронизированные записи могут быть удалены при следующей синхронизации.';
$string['roomurl_desc'] = 'URL-адрес собрания будет автоматически сгенерирован.';
$string['roomurlexpanded'] = 'Развернуть «URL-адрес собрания»';
$string['roomurlexpanded_desc'] = 'При создании нового собрания по умолчанию показывать настройки URL-адреса собрания в развёрнутом виде.';
$string['servicenotenabled'] = 'Доступ не настроен. Убедитесь, что службы «Google Диск API» и «Google Календарь API» включены.';
$string['sessionexpired'] = 'Сессия Вашей учётной записи Google истекла в середине процесса, пожалуйста, авторизуйтесь заново.';
$string['show'] = 'Показать';
$string['strftimedm'] = '%a %d.%m';
$string['strftimedmy'] = '%a %d.%m.%Y';
$string['strftimedmyhm'] = '%a %d.%m.%Y %H:%M';
$string['strftimehm'] = '%H:%M';
$string['sync_info'] = 'Подождите не менее 10 минут, пока файл записи будет создан и сохранен в «Мой диск > Записи Meet» организатора.
<p></p>
Чтобы удалить запись, сначала удалите файл записи с Google Диска, а затем нажмите кнопку синхронизации, расположенную выше.
<p></p>
Чтобы записать собрание, убедитесь, что:
<ul>
    <li>Вы не исчерпали свою личную квоту на Диске.</li>
    <li>Ваша организация не превысила свою квоту на Диске.</li>
</ul>
Если у вас есть место на Диске, но у вашей организации его недостаточно, вы не сможете записать собрание.
<p></p>
Дополнительные сведения см. в этой статье Справочного центра:
<br>
<a href="https://notifications.google.com/g/p/APNL1TjJltVk6EcLPyFTJ8V_9ty1FeTAD0XSSJVLiaWPezIaQKfIPd1kGURFUMVV3I5yHgVZoOgxkl4gySV-4SCf2pZ27Vk8Iy9DnHSQBqtK51uG3Gyz" target="_blank" rel="nofollow noopener">https://support.google.com/meet/answer/9308681</a>';
$string['sync_notloggedin'] = 'Войдите в Вашу учётную запись Google, чтобы синхронизировать записи Google Meet с Moodle';
$string['syncwithgoogledrive'] = 'Синхронизировать с Google Диск';
$string['thereisnorecordingtoshow'] = 'Нет записей для показа.';
$string['timeahead'] = 'Невозможно создать множество повторений мероприятия, так как диапазон дат превышает один год, измените даты начала и окончания.';
$string['timedate'] = '%d.%m.%Y %H:%M';
$string['to'] = 'до';
$string['today'] = 'Сегодня';
$string['upcomingevents'] = 'Предстоящие мероприятия';
$string['url_failed'] = 'Требуется корректный URL-адрес Google Meet';
$string['url_help'] = 'Например, https://meet.google.com/aaa-aaaa-aaa';
$string['visible'] = 'Видимость';
$string['week'] = 'Неделю(и)';
