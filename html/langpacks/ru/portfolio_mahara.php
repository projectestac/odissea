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
 * Strings for component 'portfolio_mahara', language 'ru', version '3.11'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Включить поддержку Leap2A (требуется Mahara 1.3 или выше)';
$string['err_invalidhost'] = 'Некорректный сайт MNet';
$string['err_invalidhost_help'] = 'Этот плагин настроен на неправильный (или уже удаленный) сервер сети MNet. Этот плагин может корректно работать только на серверах сети MNet, которые опубликовали службу «Поставщик учетных данных SSO», подписались на службу «Поставщик услуг SSO» и подписались <b>и</b> опубликовали службу «Портфолио Mahara».';
$string['err_networkingoff'] = 'Сетевое взаимодействие MNet выключено';
$string['err_networkingoff_help'] = 'Аутентификация MNet в настоящее время отключена. Включите её перед настройкой этого плагина. Все экземпляры этого плагина будут невидимы, пока MNet не будет включен. Вы должны будете вручную сделать их видимыми.';
$string['err_nomnetauth'] = 'Плагин «Аутентификация для пользователей сети MNet» отключен';
$string['err_nomnetauth_help'] = 'Требуемый для этой службы плагин «Аутентификация для пользователей сети MNet» отключен.';
$string['err_nomnethosts'] = 'Необходима настройка MNet';
$string['err_nomnethosts_help'] = 'Этот плагин может корректно работать только на серверах сети MNet, которые опубликовали службу «Поставщик учетных данных SSO», подписались на службу «Поставщик услуг SSO» и подписались <b>и</b> опубликовали службу «Портфолио Mahara». Также необходимо, чтобы был включен плагин аутентификации «Аутентификация для пользователей сети MNet». До тех пор, пока все эти условия не будут выполнены, все экземпляры этого плагина будут скрыты. После настройки необходимых параметров будет необходимо сделать их видимыми вручную.';
$string['failedtojump'] = 'Не удалось установить соединение с удаленным сервером';
$string['failedtoping'] = 'Не удалось установить соединение с удаленным сервером: {$a}';
$string['mnet_nofile'] = 'Не удается найти файл в объекте передачи - странная ошибка';
$string['mnet_nofilecontents'] = 'Найден файл в объекте передачи, но не удалось получить содержимое - странная ошибка: {$a}';
$string['mnet_noid'] = 'Не удалось найти соответствующую запись передачи для этого ключа';
$string['mnet_notoken'] = 'Не удалось найти ключ, соответствующий этой передаче';
$string['mnet_wronghost'] = 'Внешний сайт не соответствует передаче для этого ключа';
$string['mnethost'] = 'Сайт сети MNet';
$string['pf_description'] = 'Эта служба позволяет пользователям Вашего сайта передавать контент из Moodle на сайт «{$a}».<br />
Подпишитесь на эту службу <b>и</b> опубликуйте ее, чтобы дать пользователям Вашего сайта возможность передавать контент на сайт «{$a}».<br />
<ul><li> <em>Зависимость:</em> Вы также должны <strong>опубликовать</strong> службу «Поставщик учетных данных SSO» для сайта «{$a}». </li><li> <em>Зависимость:</em> Вы также должны <strong>подписаться</strong> на службу «Поставщик услуг SSO» сайта «{$a}».</li><li> <em>Зависимость:</em> Вы также должны включить плагин аутентификации «Аутентификация  для пользователей сети MNet». </li></ul><br />';
$string['pf_name'] = 'Портфолио Mahara';
$string['pluginname'] = 'Портфолио Mahara';
$string['privacy:metadata'] = 'Этот плагин отправляет внешние данные в связанное приложение Mahara. Он не хранит данные локально.';
$string['privacy:metadata:data'] = 'Персональные данные, передаваемые из подсистемы портфолио.';
$string['senddisallowed'] = 'Сейчас Вы не можете передать файлы на Mahara';
$string['url'] = 'URL';
