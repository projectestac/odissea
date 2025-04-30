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
 * Strings for component 'auth_db', language 'uk', version '4.4'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Не вдається підключитися до зовнішньої бази даних.';
$string['auth_dbcannotreadtable'] = 'Неможливо прочитати зовнішню таблицю.';
$string['auth_dbcantconnect'] = 'Не вдається приєднатися до вказаної бази даних';
$string['auth_dbchangepasswordurl_key'] = 'URL зміни пароля';
$string['auth_dbcolumnlist'] = 'Зовнішня таблиця містить такі стовпці:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Налагодження ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Налагодження ADOdb з’єднання до зовнішньої бази даних - використовується, коли отримується порожня сторінка при спробі увійти. Не використовуйте на робочих сайтах.';
$string['auth_dbdeleteuser'] = 'Видалено користувача {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Помилка видалення користувача {$a}';
$string['auth_dbdescription'] = 'Цей метод використовує таблицю зовнішньої бази даних для перевірки правильності наданих імені користувача та пароля. Якщо обліковий запис новий, то інформація з інших полів також може бути скопійована до бази даних Moodle.';
$string['auth_dbextencoding'] = 'Кодування зовнішньої бази даних';
$string['auth_dbextencodinghelp'] = 'Кодування, яке використовується у зовнішній базі даних';
$string['auth_dbextrafields'] = 'Ці поля додаткові. Ви можете замінити передустановки деяких полів користувача інформацією з <b>полів зовнішньої бази даних</b>, які ви вкажете тут. <p>Якщо ви залишите поля порожніми, то будуть використовуватися типові значення.</p><p>У будь-якому випадку, користувач матиме можливість редагувати всі ці поля після авторизації.</p>';
$string['auth_dbfieldpass'] = 'Назва поля, що містить паролі';
$string['auth_dbfieldpass_key'] = 'Поле пароля';
$string['auth_dbfielduser'] = 'Комп\'ютер, на якому розміщено сервер бази даних. Використовуйте запис системного DSN, якщо використовується ODBC. Використовуйте запис PDO DSN, якщо використовується PDO.';
$string['auth_dbfielduser_key'] = 'Поле "Ім’я користувача"';
$string['auth_dbhost'] = 'Комп\'ютер, на якому розміщено сервер бази даних. Використовуйте запис системного DSN, якщо використовується ODBC. Використовуйте запис PDO DSN, якщо використовується PDO.';
$string['auth_dbhost_key'] = 'Хост';
$string['auth_dbinsertuser'] = 'Додано користувача {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Помилка вставки користувача {$a->username} - користувач з таким псевдоім’ям вже створено через модуль \'{$a->auth}\'';
$string['auth_dbinsertusererror'] = 'Помилка додавання користувача  {$a}';
$string['auth_dbname'] = 'Назва самої бази даних. Залиште порожнім, якщо використовується ODBC DSN. Залиште пустим, якщо ваш PDO DSN вже містить ім’я бази даних.';
$string['auth_dbname_key'] = 'Назва БД';
$string['auth_dbnoexttable'] = 'Зовнішня таблиця не вказана.';
$string['auth_dbnouserfield'] = 'Поле зовнішнього користувача не вказано.';
$string['auth_dbpass'] = 'Пароль відповідає імені користувача вище';
$string['auth_dbpass_key'] = 'Пароль';
$string['auth_dbpasstype'] = '<p>Вкажіть формат, який використовує поле пароля. Використовуйте \'internal\', якщо ви хочете, щоб зовнішня база даних керувала іменами користувачів та адресами електронної пошти, а Moodle - для керування паролями. Якщо ви використовуєте «внутрішнє», ви повинні вказати заповнене поле адреси електронної пошти у зовнішній базі даних, а також увімкнути заплановану задачу \\auth_db\\task\\sync_users. Moodle надішле новим користувачам електронний лист із тимчасовим паролем.</p>';
$string['auth_dbpasstype_key'] = 'Формат пароля';
$string['auth_dbreviveduser'] = 'Поновлений користувач {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Помилка поновлення користувача {$a}';
$string['auth_dbsaltedcrypt'] = 'Шифрування з одностороннім хешуванням';
$string['auth_dbsetupsql'] = 'Команда установки SQL';
$string['auth_dbsetupsqlhelp'] = 'SQL команда для специфічної установки БД, зазвичай використовується для встановлення кодування - наприклад в MySQL та PostgreSQL: SET NAMES \'utf8';
$string['auth_dbsuspenduser'] = 'Заблоковано користувача {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Помилка блокування користувача {$a}';
$string['auth_dbsybasequoting'] = 'Використовувати sybase квоти';
$string['auth_dbsybasequotinghelp'] = 'Sybase стиль квотування потрібен для Oracle, MS SQL та інших СУБД. Не використовується для MySQL!';
$string['auth_dbsyncuserstask'] = 'Синхронізувати завдання користувачів';
$string['auth_dbtable'] = 'Назва таблиці в базі даних';
$string['auth_dbtable_key'] = 'Таблиця';
$string['auth_dbtableempty'] = 'Зовнішня таблиця порожня.';
$string['auth_dbtype'] = 'Тип бази даних (див. документацію
 (Див. <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer for PHP</a> для деталей)';
$string['auth_dbtype_key'] = 'База даних';
$string['auth_dbupdateerror'] = 'Помилка оновлення зовнішньої бази даних.';
$string['auth_dbupdateusers'] = 'Оновлення користувачів';
$string['auth_dbupdateusers_description'] = 'Окрім додавання нових користувачів, оновіть наявних користувачів.';
$string['auth_dbupdatinguser'] = 'Оновлення користувача {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Логін користувача бази даних із правами тільки на читання';
$string['auth_dbuser_key'] = 'Користувач БД';
$string['auth_dbuserstoadd'] = 'Список користувачів для додавання: {$a}';
$string['auth_dbuserstoremove'] = 'Список користувачів для видалення: {$a}';
$string['pluginname'] = 'Зовнішня БД';
$string['privacy:metadata'] = 'Плагін аутентифікації зовнішньої бази даних не зберігає жодних персональних даних.';
