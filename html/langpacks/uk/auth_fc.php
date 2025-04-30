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
 * Strings for component 'auth_fc', language 'uk', version '4.4'.
 *
 * @package     auth_fc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_fcchangepasswordurl'] = 'URL для зміни пароля';
$string['auth_fcconnfail'] = 'З’єднання не вдалося з помилкою номер: {$a->no} та Змістом помилки: {$a->str}';
$string['auth_fccreators'] = 'Список груп, членам яких дозволяють створити нові курси. Розділяйте списки груп з \';\'. Назви повинні бути записані по літерам точно як на сервері FirstClass. Система з обліком регістру.';
$string['auth_fccreators_key'] = 'Творці';
$string['auth_fcdescription'] = 'Цей метод використовує сервер FisrtClass, щоб перевірити, чи правильні це ім’я користувача і пароль.';
$string['auth_fcfppport'] = 'Порт Серверу (3333 типовий)';
$string['auth_fcfppport_key'] = 'Порт';
$string['auth_fchost'] = 'Адреса серверу FirstClass. Використовуйте номер IP або DNS ім’я серверу.';
$string['auth_fchost_key'] = 'Хост';
$string['auth_fcpasswd'] = 'Пароль для облікового запису.';
$string['auth_fcpasswd_key'] = 'Пароль';
$string['auth_fcuserid'] = 'Встановлення id користувача для FirstClass з правами \'Subadministrator\'.';
$string['auth_fcuserid_key'] = 'ID користувача';
$string['pluginname'] = 'Сервер FirstClass';
