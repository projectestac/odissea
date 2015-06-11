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
 * Strings for component 'auth_email', language 'ru', branch 'MOODLE_28_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Плагин «Самостоятельная регистрация по электронной почте» позволяет пользователям самостоятельно создать учетные записи, воспользовавшись кнопкой «Создать учетную запись» на странице входа в систему. На указанный пользователем адрес электронной почты отправляется письмо с просьбой о подтверждении регистрации. Письмо содержит случайно созданную (безопасную) ссылку на страницу, где пользователь может подтвердить учетную запись. В дальнейшем при входах в систему осуществляется только сверка логина и пароля со значениями в базе данных Moodle.</p>
<p>Примечание: Кроме включения этого плагина необходимо также выбрать в поле «Самостоятельная регистрация» на странице «Настройки аутентификации» вариант «Самостоятельная регистрация по электронной почте».</p>';
$string['auth_emailnoemail'] = 'Отправить вам письмо не удалось!';
$string['auth_emailrecaptcha'] = 'Добавляет элемент для визуального / звукового подтверждения на страницу самостоятельной регистрации пользователей с использованием электронной почты. Это защищает ваш сайт от спамеров. Более подробную информацию см. на http://www.google.com/recaptcha/learnmore. <br /> <em>Требуется расширение PHP Curl.</em>';
$string['auth_emailrecaptcha_key'] = 'Включить reCAPTCHA';
$string['auth_emailsettings'] = 'Настройки';
$string['pluginname'] = 'Самостоятельная регистрация по электронной почте';
