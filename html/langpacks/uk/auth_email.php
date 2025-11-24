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
 * Strings for component 'auth_email', language 'uk', version '4.5'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Самостійна реєстрація на основі електронної пошти дозволяє користувачеві створювати власний обліковий запис через "Створити новий обліковий запис" на сторінці входу. Потім користувач отримує лист, що містить безпечне посилання на сторінку, де вони можуть підтвердити свій обліковий запис. Майбутні входи просто перевіряють ім\'я користувача і пароль в базі даних Moodle. </p><p>Примітка: Крім того, включення модуля самостійної реєстрації на основі електронної пошти також повинно бути обране у випадаючому меню на сторінці "Керування аутентифікацією". </p>';
$string['auth_emailnoemail'] = 'Спроба відправити Вам листа не вдалася!';
$string['auth_emailrecaptcha'] = 'Додає елемент форми візуального/аудіопідтвердження на сторінку реєстрації для користувачів, які самостійно реєструються електронною поштою. Це захищає ваш сайт від спамерів і сприяє корисній справі. Дивіться https://www.google.com/recaptcha для отримання додаткової інформації.';
$string['auth_emailrecaptcha_key'] = 'Включити ReCaptcha елемент';
$string['auth_emailsettings'] = 'Налаштування';
$string['pluginname'] = 'E-mail - ідентифікація';
$string['privacy:metadata'] = 'Плагін аутентифікації самореєстрації на основі електронної пошти не зберігає жодних особистих даних.';
