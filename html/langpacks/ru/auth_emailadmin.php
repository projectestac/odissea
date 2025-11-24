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
 * Strings for component 'auth_emailadmin', language 'ru', version '4.5'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Здравствуйте, администратор Moodle.

 На сайте «{$a->sitename}» запрошена новая учетная запись со следующими данными:

Любой конкретный пример пользовательского поля:
пользователь->фамилия: {$a->lastname}

Все настраиваемые поля:
{$a->customfields}

Все пользовательские поля + настраиваемые поля:
{$a->userdata}

Чтобы подтвердить новую учетную запись, перейдите по этому адресу:

{$a->link}

В большинстве почтовых программ это должно отображаться в виде синей ссылки, по которой вы можете просто щелкнуть. Если это не сработает, то вырежьте и вставьте адрес в адресную строку в верхней части окна веб-браузера.

Вы также можете подтвердить аккаунты в Moodle, перейдя в
Администрирование сайта -> Пользователи';
$string['auth_emailadminconfirmationsubject'] = '{$a}: подтверждение аккаунта';
$string['auth_emailadminconfirmsent'] = '<p>
Ваша учетная запись была зарегистрирована и ожидает подтверждения от администратора. Вам следует ожидать получения подтверждения либо с вами свяжутся для уточнения.
</p>';
$string['auth_emailadmindescription'] = '<p>Самостоятельная регистрация по электронной почте с подтверждением администратора позволяет пользователю создать свою учетную запись с помощью кнопки «Создать новую учетную запись» на странице входа в систему. Администраторы сайта получают электронное письмо, содержащее защищенную ссылку на страницу, где они могут подтвердить учетную запись. В будущем при входе в систему имя пользователя и пароль просто сверяются с сохраненными значениями в базе данных Moodle.</p><p>Примечание. В дополнение к включению плагина необходимо выбрать саморегистрацию на основе электронной почты с подтверждением администратора и саморегистрацию в раскрывающемся меню на странице «Управление аутентификацией».</p>';
$string['auth_emailadminnoadmin'] = 'Администратор не найден на основе стратегии уведомления. Пожалуйста, проверьте конфигурацию auth_emailadmin.';
$string['auth_emailadminnoemail'] = 'Пытался отправить вам электронное письмо, но не смог!';
$string['auth_emailadminnotif_failed'] = 'Не удалось отправить уведомление о регистрации по адресу:';
$string['auth_emailadminnotif_strategy'] = 'Определяет стратегию отправки уведомлений о регистрации. Доступные опции: «первый» администратор, «все» администраторы или один конкретный администратор.';
$string['auth_emailadminnotif_strategy_all'] = 'Все администраторы';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Все администраторы и пользователи с возможностью обновления пользователей';
$string['auth_emailadminnotif_strategy_first'] = 'Первый администратор';
$string['auth_emailadminnotif_strategy_key'] = 'Стратегия уведомления:';
$string['auth_emailadminrecaptcha'] = 'Добавляет элемент формы визуального/аудио подтверждения на страницу самостоятельной регистрации пользователей по электронной почте. Это защищает ваш сайт от спамеров. См. http://www.google.com/recaptcha/learnmore для получения дополнительной информации. <br/><em>Требуется расширение PHP cURL.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Включить проверку reCAPTCHA';
$string['auth_emailadminsettings'] = 'Настройки';
$string['pluginname'] = 'Саморегистрация по электронной почте с подтверждением администратора';
