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
 * Strings for component 'googlemeet', language 'uk', version '4.4'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkweekdays'] = 'Оберіть дні тижня, що потрапляють в заданий інтервал.';
$string['date'] = 'Дата';
$string['duration'] = 'Тривалість';
$string['earlierto'] = 'Дата зустрічі не може бути раніше дати початку курсу (${a})';
$string['emailcontent'] = 'Зміст листа';
$string['emailcontent_default'] = '<p>Добридень %userfirstname%,</p> <p>Це нагадування для Вас, що відбудеться зустріч у Google meet у курсі %coursename%</p> <p><b>%googlemeetname%</b></p> <p>Коли: %eventdate% %duration% %timezone%</p> <p>Посилання для зістрічі: %url%</p>';
$string['emailcontent_help'] = 'Коли буде надсилатися нагадування студенту, зміст листа заповнити з наступних полів. Можуть бути використані наступні підстановки: <ul> <li>%userfirstname%</li> <li>%userlastname%</li> <li>%coursename%</li> <li>%googlemeetname%</li> <li>%eventdate%</li> <li>%duration%</li> <li>%timezone%</li> <li>%url%</li> <li>%cmid%</li> </ul>';
$string['entertheroom'] = 'Приєднатися';
$string['eventdate'] = 'Дата зустрічі';
$string['from'] = 'з';
$string['googlemeet:addinstance'] = 'Додати Google Meet™ for Moodle';
$string['googlemeet:editrecording'] = 'Скорегувати записи';
$string['googlemeet:removerecording'] = 'Видалити записи';
$string['googlemeet:syncgoogledrive'] = 'Синхронізація з Google Drive';
$string['googlemeet:view'] = 'Перегляд змісту Google Meet™ for Moodle';
$string['hide'] = 'Сховати';
$string['invalideventenddate'] = 'Ця дата не може біти раніше "Дата зустрічі"';
$string['invalideventendtime'] = 'Час завершення має бути після часу початку';
$string['invalidstoredurl'] = 'Не можливо відобразити цей ресурс, недопустиме посилання Google Meet.';
$string['jstableinfo'] = 'Відображаються записи з {start} до {end} з усього {rows} записів';
$string['jstableinfofiltered'] = 'Відображаються записи з {start} до {end} з усього {rows} (відібрані з {rowsTotal} записів)';
$string['jstableloading'] = 'Завантаження...';
$string['jstablenorows'] = 'Записів не знайдено';
$string['jstableperpage'] = '{select} записів на сторінку';
$string['jstablesearch'] = 'Пошук...';
$string['lastsync'] = 'Остання синхронізація:';
$string['loading'] = 'Завантаження';
$string['messageprovider:notification'] = 'Нагадування про початок';
$string['minutesbefore'] = 'За скільки хвилин до зустрічі в Google Meet';
$string['minutesbefore_help'] = 'Кількість хвилин до початку зустрічі, коли має бути надіслано нагадування.';
$string['modulename_help'] = 'Модуль Google Meet™ for Moodle дозволяє викладачам створювати зустрічі як ресурси  курсу а також дозволяє студентам зберігати записи на Google Drive.<p>©2018 Google LLC All rights reserved.<br/> Google Meet and the Google Meet logo are registered trademarks of Google LLC.</p>';
$string['modulenameplural'] = 'екземплярів Google Meet™ for Moodle';
$string['multieventdateexpanded'] = 'Додаткові параметри повторення зустрічі';
$string['multieventdateexpanded_desc'] = 'Відображати розгорнутим "Налаштування повторення зустрічі" при створенні нової.';
$string['name'] = 'Назва';
$string['never'] = 'Ніколи';
$string['notification'] = 'Нагадування';
$string['notificationexpanded'] = 'Розгорнуте нагадування';
$string['notify'] = 'Надсилати нагадування студентам';
$string['notify_help'] = 'Якщо відмічено, студенту буде надіслано нагадування щодо початку зустрічі.';
$string['notifycationexpanded_desc'] = 'Відображати розгорнутим налаштування "Нагадування" за замовченням для нової зустрічі.';
$string['notifytask'] = 'задача нагадування Google Meet™ for Moodle';
$string['or'] = 'або';
$string['play'] = 'Відтворення';
$string['pluginadministration'] = 'Налаштування Google Meet™ for Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Фіксувати відправлені користувачам нагадування щодо початку зустрічі. Ці дані тимчасові й видаляються після початку зустрічі.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'id зустрічі';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'Часова мітка коли користувач отримав нагадування';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'id користувача';
$string['recording'] = 'Запис';
$string['recordings'] = 'Записи';
$string['recordingswiththename'] = 'Записи з назвою:';
$string['recurrenceeventdate'] = 'Налаштування повторення зустрічі';
$string['recurrenceeventdate_help'] = 'Ця функція дозволяє створити декілька повторень з дати зустрічі.<br>* <strong>Повторити</strong>: Оберіть дні тижня повторення зустрічі (наприклад, Понеділок / Середа / П\'ятниця).<br> * <strong>Повторювати кожен(жні)</strong> Якщо зустріч щотижня оберіть 1; Кожні два тижні, оберіть 2; кожні 3, оберіть 3 і т.д.<br>* <strong>Повторювати до</strong> оберіть останній день зустрічі.';
$string['repeatasfollows'] = 'Повторити зустріч наступним чином';
$string['repeatevery'] = 'Повторювати кожні';
$string['repeaton'] = 'Повторити';
$string['repeatuntil'] = 'Повторювати до';
$string['roomcreator'] = 'Ініціатор зустрічі:';
$string['roomname'] = 'Назва зустрічі';
$string['roomurl'] = 'Посилання зустрічі (повний url)';
$string['roomurlexpanded'] = 'Розширене посилання (url) зустрічі';
$string['roomurlexpanded_desc'] = 'Відображати налаштування "Посилання на зустріч" для нової зустрічі розгорнутими.';
$string['show'] = 'Відображати';
$string['syncwithgoogledrive'] = 'Синхронізувати з Google Drive';
$string['thereisnorecordingtoshow'] = 'Немає записів для відображення.';
$string['timeahead'] = 'Не можливо створити повторювання протягом більше одного року, скорегуйте дату початку та кінця.';
$string['to'] = 'до';
$string['today'] = 'Сьогодні';
$string['upcomingevents'] = 'Наступні події';
$string['url_failed'] = 'Необхідне дійсне посилання Google Meet';
$string['visible'] = 'Видимий';
$string['week'] = 'Тиждень(дня)';
