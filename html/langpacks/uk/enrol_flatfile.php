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
 * Strings for component 'enrol_flatfile', language 'uk', version '4.5'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Кодування файлу';
$string['expiredaction'] = 'Дія закінчення реєстрації';
$string['expiredaction_help'] = 'Вибір дій до виконання при закінченні реєстрації користувача. Будь ласка, зверніть увагу, що деякі дані користувача і налаштування будуть очищені в курсі під час процесу відрахування з курсу.';
$string['filelockedmail'] = 'Текстовий файл ({$a}), що використовується вами для реєстрації не вдається видалити за допомогою процеса cron. Зазвичай це означає неправильну установку прав доступу. Будь ласка, виправте права доступу до файлу, так щоб система могла його видалити.';
$string['filelockedmailsubject'] = 'Важлива помилка: Файл реєстрації';
$string['flatfile:manage'] = 'Управляти зарахуванням користувачів вручну';
$string['flatfile:unenrol'] = 'Відраховувати користувачів з курсу вручну';
$string['flatfileenrolments'] = 'Flat file (CSV) реєстрація';
$string['flatfilesync'] = 'Простий файл зарахування';
$string['location'] = 'Шлях до файлу';
$string['location_desc'] = 'Визначіть повний шлях до файлу зарахування. Файл буде автоматично вилучено після процесу зарахування.';
$string['mapping'] = 'Формат файлу';
$string['messageprovider:flatfile_enrolment'] = 'Файл з повідомленням про зарахування';
$string['notifyadmin'] = 'Повідомити адміністратора';
$string['notifyenrolled'] = 'Повідомити студентів';
$string['notifyenroller'] = 'Повідомити відповідального за студентів';
$string['pluginname'] = 'Файл (CSV)';
$string['pluginname_desc'] = 'Цим методом перевіряється та обробляється текстовий файл спеціального формату за вказаним вами шляхом.
Форматування файлу виконується за допомогою коми (,), яка поділяє текстовий рядок на інформаційні поля. Файл може мати чотири або шість полів по рядах:

 * операція, роль, idnumber(користувача), idnumber(курсу) [, час початку, час закінчення]

де:

* операція = add | del
* роль = student | teacher | teacheredit
* idnumber(користувача) = idnumber в таблиці користувачів (user)
* idnumber(курсу) = idnumber в таблиці курсів (course)
* час початку = час початку (в секундах з початку Епохи Unix) - додатково
* час закінчення = час закінчення (в секундах з початку Епохи Unix) - додатково

Файл може виглядати приблизно так:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Плагін реєстрації Flat file (CSV) може зберігати особисті дані, що стосуються майбутніх реєстрацій, у таблиці enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Дія реєстрації очікується на вказану дату';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'Ідентифікатор курсу, до якого відноситься реєстрація';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'Ідентифікатор ролі, яка буде призначена або не призначена';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Час, коли закінчується реєстрація';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Час, коли реєстрація змінюється';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Час початку реєстрації';
$string['privacy:metadata:enrol_flatfile:userid'] = 'Ідентифікатор користувача, до якого відноситься призначення ролі';
