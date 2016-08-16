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
 * Strings for component 'auth_mnet', language 'ru', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'Если установлено значение «Да», то локальная запись пользователя создается автоматически при первом входе внешнего пользователя в систему.';
$string['auth_mnetdescription'] = 'Аутентификация пользователей с использованием сети доверия, определенной в настройках «Сетевое взаимодейтсвие MNet».';
$string['auth_mnet_roamin'] = 'Пользователи этих сайтов могут путешествовать по Вашему сайту';
$string['auth_mnet_roamout'] = 'Ваши пользователи могут путешествовать по этим сайтам';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Тайм-аут (в секундах) для аутентификации по протоколу XML-RPC.';
$string['auto_add_remote_users'] = 'Автоматически добавлять внешних пользователей';
$string['pluginname'] = 'Аутентификация для пользователей сети MNet';
$string['rpc_negotiation_timeout'] = 'Тайм-аут передачи по протоколу RPC';
$string['sso_idp_description'] = 'Публикация этой службы позволит пользователям Вашего сайта переходить на сайт «{$a}» без необходимости повторного ввода логина и пароля. <ul><li><em>Зависимость:</em> Вы должны также <strong>подписаться</strong> на службу «Поставщик услуг SSO» сайта «{$a}». </li></ul><br />
Подпишитесь на эту службу, чтобы дать авторизованным пользователям сайта «{$a}» возможность переходить на Ваш сайт без необходимости повторного ввода логина и пароля. <ul><li> <em>Зависимость:</em> Вы также должны <strong>опубликовать</strong> службу «Поставщик услуг SSO» для сайта «{$a}». </li></ul><br />';
$string['sso_idp_name'] = 'Поставщик учетных данных SSO';
$string['sso_mnet_login_refused'] = 'Пользователю {$a->user} не разрешен вход в систему при переходе с сайта «{$a->host}».';
$string['sso_sp_description'] = 'Публикация этой службы позволит авторизованным пользователям сайта «{$a}» переходить на Ваш сайт без необходимости повторного ввода логина и пароля. <ul><li> <em>Зависимость:</em> Вы должны также <strong>подписаться</strong> на службу «Поставщик учетных данных SSO» сайта «{$a}». </li></ul><br />
Подпишитесь на эту службу, чтобы дать пользователям Вашего сайта возможность переходить на сайт «{$a}» без необходимости повторного ввода логина и пароля.<ul><li> <em>Зависимость:</em> Вы также должны <strong>опубликовать</strong> службу «Поставщик учетных данных SSO» для сайта «{$a}».</li></ul><br />';
$string['sso_sp_name'] = 'Поставщик услуг SSO';
