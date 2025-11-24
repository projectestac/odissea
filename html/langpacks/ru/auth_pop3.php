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
 * Strings for component 'auth_pop3', language 'ru', version '4.5'.
 *
 * @package     auth_pop3
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_pop3changepasswordurl_key'] = 'Адрес страницы смены пароля';
$string['auth_pop3description'] = 'Этот метод аутентификации использует POP3-сервер для проверки пары логин/пароль.';
$string['auth_pop3host'] = 'Адрес POP3-сервера. Используйте IP-адрес, а не DNS-имя.';
$string['auth_pop3host_key'] = 'Сервер';
$string['auth_pop3mailbox'] = 'Имя почтового ящика для попытки подключения (обычно «INBOX»)';
$string['auth_pop3mailbox_key'] = 'Почтовый ящик';
$string['auth_pop3notinstalled'] = 'Не удается использовать авторизацию POP3. Модуль PHP IMAP  не установлен.';
$string['auth_pop3port'] = 'Номер порта сервера (обычно используется 110, для SSL обычно используется 995)';
$string['auth_pop3port_key'] = 'Порт';
$string['auth_pop3type'] = 'Тип сервера. Если ваш сервер использует защиту, основанную на сертификатах, используйте pop3cert.';
$string['auth_pop3type_key'] = 'Тип';
$string['pluginname'] = 'Сервер POP3';
