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
 * Strings for component 'enrol_database', language 'uk', version '4.1'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Налаштовувати окремі екземпляри бази даних';
$string['database:unenrol'] = 'Відраховувати заблокованих користувачів';
$string['dbencoding'] = 'Кодування бази даних';
$string['dbhost'] = 'Сервер бази даних';
$string['dbhost_desc'] = 'Введіть IP-адресу сервера бази даних або ім\'я хоста. Використовуйте ім’я системного DSN, якщо використовується ODBC. Використовуйте PDO DSN, якщо використовуєте PDO.';
$string['dbname'] = 'Назва бази даних';
$string['dbname_desc'] = 'Залишіть порожнім, якщо використовується DSN ім’я для хоста бази даних.';
$string['dbpass'] = 'Пароль бази даних';
$string['dbsetupsql'] = 'Команда налаштування для бази даних';
$string['dbsetupsql_desc'] = 'SQL команда для спеціального налаштування бази даних, найчастіше використовується команда кодування - наприклад, для MySQL та PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Використовувати sybase квоти';
$string['dbsybasequoting_desc'] = 'Sybase стиль квотування потрібен для Oracle, MS SQL та інших СУБД. Не використовується для MySQL!';
$string['dbtype'] = 'Драйвер бази даних';
$string['dbtype_desc'] = 'Назва драйвера бази даних ADOdb, тип зовнішньої бази даних.';
$string['dbuser'] = 'Користувач бази даних';
$string['debugdb'] = 'Налагодження ADOdb';
$string['debugdb_desc'] = 'Налаштуйте під’єднання ADOdb до зовнішньої бази даних - використовуйте при отриманні пустої сторінки при входженні в систему. Не потрібний для виробничих (працюючих) сайтів.';
$string['defaultcategory'] = 'Типова категорія для нових курсів';
$string['defaultcategory_desc'] = 'Типова категорія для автоматично створених курсів. Використовується, коли не вказано код нової категорії або не знаходиться.';
$string['defaultrole'] = 'Типова роль';
$string['defaultrole_desc'] = 'Роль, на яку будуть зараховуватися автоматично, якщо іншої ролі не вказано у зовнішній таблиці.';
$string['ignorehiddencourses'] = 'Ігнорувати сховані курси';
$string['ignorehiddencourses_desc'] = 'Якщо включено, то користувачі не будуть зараховуватися до курсів, які приховано від студентів.';
$string['localcategoryfield'] = 'Локальне поле категорії';
$string['localcoursefield'] = 'Локальне поле курсу';
$string['localrolefield'] = 'Локальне поле ролі';
$string['localuserfield'] = 'Локальне поле користувача';
$string['newcoursecategory'] = 'Поле коду категорії для нових курсів';
$string['newcoursefullname'] = 'Поле повної назви нових курсів';
$string['newcourseidnumber'] = 'Поле коду  нового курсу';
$string['newcourseshortname'] = 'Поле короткої назви нового курсу';
$string['newcoursetable'] = 'Зовнішня таблиця нових курсів';
$string['newcoursetable_desc'] = 'Вкажіть назву таблиці, в якій зберігається список курсів, які потрібно створити автоматично. Якщо залишити порожнім, то ніякі курси створюватися не будуть.';
$string['pluginname'] = 'Зовнішня база даних';
$string['pluginname_desc'] = 'Ви можете використовувати зовнішні бази даних (майже будь-які) для управління студентами. Передбачається, що зовнішні бази даних містить принаймні поле, що містить код курсу, і поле, що містить ідентифікатор користувача. Вони повинні співвідноситися з полями, які є в локальних таблицях курсів та користувачів.';
$string['privacy:metadata'] = 'Плагін реєстрації зовнішньої бази не зберігає жодних персональних даних.';
$string['remotecoursefield'] = 'Зовнішнє поле курсів';
$string['remotecoursefield_desc'] = 'Ім\'я поля у зовнішній таблиці, яке буде використовуватися, щоб погодити записи з таблицею курсу.';
$string['remoteenroltable'] = 'Зовнішня таблиці зарахування користувачів';
$string['remoteenroltable_desc'] = 'Вкажіть назву таблиці, в якій зберігається список зарахувань користувачів. Якщо залишити порожнім, то зарахування користувачів не синхронізуються.';
$string['remoteotheruserfield'] = 'Віддалене поле інший користувач';
$string['remoteotheruserfield_desc'] = 'Назва поля у віддаленій таблиці, яке використовується для позначення призначених ролей "Інший користувач"';
$string['remoterolefield'] = 'Зовнішнє поле ролі';
$string['remoterolefield_desc'] = 'Ім\'я поля у зовнішній таблиці , яке буде використовуватися, щоб погодити записи з таблицею ролей.';
$string['remoteuserfield'] = 'Зовнішнє поле користувача';
$string['remoteuserfield_desc'] = 'Ім\'я поля у зовнішній таблиці , яке буде використовуватися, щоб погодити записи з таблицею користувачів.';
$string['settingsheaderdb'] = 'З’єднання із зовнішньою базою даних';
$string['settingsheaderlocal'] = 'Розташування локальних полів';
$string['settingsheadernewcourses'] = 'Створення нових курсів';
$string['settingsheaderremote'] = 'Видалити синхронізацію зарахувань';
$string['syncenrolmentstask'] = 'Синхронізувати завдання реєстрації зовнішньої бази даних';
$string['templatecourse'] = 'Шаблон нових курсів';
$string['templatecourse_desc'] = 'Додатково: при автоматичному створенні курсів можна копіювати їх налаштування з курсу-шаблону. Вкажіть тут коротку назву курсу-шаблону';
