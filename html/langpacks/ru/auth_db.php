<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_db', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Не удается подключиться к внешней базе данных.';
$string['auth_dbcannotreadtable'] = 'Не удается прочитать внешнюю таблицу.';
$string['auth_dbcantconnect'] = 'Невозможно подключиться к указанной базе данных аутентификации ...';
$string['auth_dbchangepasswordurl_key'] = 'Адрес страницы смены пароля';
$string['auth_dbcolumnlist'] = 'Внешняя таблица содержит следующие столбцы:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Отладка ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Отладка соединения ADOdb с внешней базой данных — используйте, если во время входа в систему получаете пустую страницу. Режим не предназначен для сайтов в промышленной эксплуатации.';
$string['auth_dbdeleteuser'] = 'Удалить пользователя «{$a->name}» id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Ошибка при удалении пользователя «{$a}»';
$string['auth_dbdescription'] = 'Этот метод аутентификации использует внешнюю базу данных для проверки пары логин/пароль. При создании новой учетной записи информация из полей внешней БД может быть скопирована в систему.';
$string['auth_dbextencoding'] = 'Кодировка внешней базы данных';
$string['auth_dbextencodinghelp'] = 'Кодировка, используемая во внешней базе данных';
$string['auth_dbextrafields'] = '<p>Эти поля не являются обязательными. Чтобы предварительно заполнить поля пользовательских данных информацией из базы данных, укажите здесь названия соответствующих <b>полей внешней базы данных</b>.</p><p>Если не указывать название поля, будут использованы настройки по умолчанию.</p><p>В любом случае пользователь сможет отредактировать эти поля после того, как зайдет в систему.</p>';
$string['auth_dbfieldpass'] = 'Название поля, содержащего пароль';
$string['auth_dbfieldpass_key'] = 'Поле пароля';
$string['auth_dbfielduser'] = 'Название поля, содержащего логин. Тип данных этого поля - varchar.';
$string['auth_dbfielduser_key'] = 'Поле логина';
$string['auth_dbhost'] = 'Компьютер, на котором расположен сервер базы данных. Используйте название системного источника данных DSN при применении ODBC.
Используйте запись PDO DSN при применении PDO.';
$string['auth_dbhost_key'] = 'Сервер базы данных';
$string['auth_dbinsertuser'] = 'Добавлен пользователь «{$a->name}» id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Ошибка вставки пользователя {$a->username} - пользователь с таким логином уже был создан с помощью плагина «{$a->auth}».';
$string['auth_dbinsertusererror'] = 'Ошибка при добавлении пользователя «{$a}»';
$string['auth_dbname'] = 'Название базы данных. Оставьте поле пустым при использовании ODBC DSN.
Оставьте пустым, если ваш PDO DSN уже содержит имя базы данных.';
$string['auth_dbname_key'] = 'Название базы данных';
$string['auth_dbnoexttable'] = 'Внешняя таблица не указана.';
$string['auth_dbnouserfield'] = 'Не указано поле внешнего пользователя.';
$string['auth_dbpass'] = 'Пароль, соответствующий указанному логину';
$string['auth_dbpass_key'] = 'Пароль';
$string['auth_dbpasstype'] = '<p>Определяет формат используемого поля пароля. </p><p>Используйте режим «внутренний», если Вы хотите, чтобы во внешней базе данных хранились логины и адреса электронной почты, а паролями управляла система Moodle. При использовании режима «внутренний» <i>необходимо</i> обеспечить заполнение поля адреса электронной почты во внешней базе данных и регулярно запускать скрипты admin/cron.php и auth/db/cli/sync_users.php. Moodle по электронной почте будет отправлять новым пользователям сообщения с временным паролем.</p>';
$string['auth_dbpasstype_key'] = 'Формат пароля';
$string['auth_dbreviveduser'] = 'Восстановлен пользователь «{$a->name}» id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Ошибка восстановления пользователя «{$a}»';
$string['auth_dbsaltedcrypt'] = 'Шифровать строки с использованием односторонней хэш-функции';
$string['auth_dbsetupsql'] = 'Команда настройки SQL';
$string['auth_dbsetupsqlhelp'] = 'SQL-команда для дополнительной настройки базы данных, часто используется при установке соответствующей кодировки, например для MySQL и PostgreSQL:<em> SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Заблокирована учетная запись пользователя «{$a->name}» id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Ошибка блокировки пользователя «{$a}»';
$string['auth_dbsybasequoting'] = 'Кавычки как в Sybase';
$string['auth_dbsybasequotinghelp'] = 'Экранирование апострофа в стиле Sybase - необходимо для Oracle, MS SQL и некоторых других баз данных. Не используйте для MySQL!';
$string['auth_dbsyncuserstask'] = 'Задача синхронизации пользователей';
$string['auth_dbtable'] = 'Название таблицы в базе данных';
$string['auth_dbtableempty'] = 'Внешняя таблица пуста.';
$string['auth_dbtable_key'] = 'Таблица';
$string['auth_dbtype'] = 'Тип базы данных (подробнее в <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer for PHP</a>).';
$string['auth_dbtype_key'] = 'База данных';
$string['auth_dbupdateerror'] = 'Ошибка обновления внешней базы данных.';
$string['auth_dbupdateusers'] = 'Обновить пользователей';
$string['auth_dbupdateusers_description'] = 'Помимо добавления новых пользователей обновляются существующие пользователи.';
$string['auth_dbupdatinguser'] = 'Обновление пользователя «{$a->name}» id {$a->id}';
$string['auth_dbuser'] = 'Имя пользователя базы данных с доступом на чтение';
$string['auth_dbuser_key'] = 'Пользователь базы данных';
$string['auth_dbuserstoadd'] = 'Записи пользователей для добавления: {$a}';
$string['auth_dbuserstoremove'] = 'Записи пользователей для удаления: {$a}';
$string['pluginname'] = 'Внешняя база данных';
$string['privacy:metadata'] = 'Плагин аутентификации «Внешняя база данных» не хранит никаких персональных данных.';
