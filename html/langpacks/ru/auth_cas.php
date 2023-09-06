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
 * Strings for component 'auth_cas', language 'ru', version '4.1'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Выбор аутентификации';
$string['auth_cas_auth_logo'] = 'Логотип метода аутентификации';
$string['auth_cas_auth_logo_description'] = 'Представьте знакомый пользователям логотип для метода аутентификации CAS.';
$string['auth_cas_auth_name'] = 'Название метода аутентификации';
$string['auth_cas_auth_name_description'] = 'Представьте знакомое пользователям название для метода аутентификации CAS.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Создание внешних пользователей';
$string['auth_cas_baseuri'] = 'URI-сервера (ничего, если нет BaseURI) <br /> Например, если сервер CAS расположен на host.domaine.fr/CAS/ , тогда<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Базовый URI';
$string['auth_cas_broken_password'] = 'Вы не можете обойтись без изменения пароля, однако нет доступных страниц для его изменения. Пожалуйста, свяжитесь с администратором Moodle.';
$string['auth_cas_cantconnect'] = 'CAS-модуль не может подключиться к серверу: {$a}';
$string['auth_cas_casversion'] = 'Версия протокола CAS';
$string['auth_cas_certificate_check'] = 'Выберите «Да», если хотите проверить сертификат сервера';
$string['auth_cas_certificate_check_key'] = 'Проверить сервер';
$string['auth_cas_certificate_path'] = 'Путь к файлу последовательности CA (PEM формат) для проверки сертификата сервера';
$string['auth_cas_certificate_path_empty'] = 'При включении проверки подлинности сервера необходимо указать путь к сертификату';
$string['auth_cas_certificate_path_key'] = 'Путь к сертификату';
$string['auth_cas_changepasswordurl'] = 'Адрес страницы смены пароля';
$string['auth_cas_create_user'] = 'Включите этот параметр, если хотите внести CAS-аутентификацию пользователей в базу данных Moodle. Если нет, то только те пользователи, которые уже существуют в базе данных Moodle, смогут войти в систему.';
$string['auth_cas_create_user_key'] = 'Создать пользователя';
$string['auth_cas_curl_ssl_version'] = 'Используемая версия SSL (2 или 3). По умолчанию PHP попытается сам определить версию, но в некоторых случаях ее необходимо задать вручную.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'По умолчанию';
$string['auth_cas_curl_ssl_version_key'] = 'Версия cURL SSL';
$string['auth_cas_enabled'] = 'Включите этот параметр, если хотите использовать CAS-аутентификацию.';
$string['auth_cas_hostname'] = 'Имя сервера CAS. <br /> Например: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Имя хоста';
$string['auth_cas_invalidcaslogin'] = 'К сожалению, вход не удался - Вы не авторизованы.';
$string['auth_cas_language'] = 'Выберите язык';
$string['auth_cas_language_key'] = 'Язык';
$string['auth_cas_logincas'] = 'Безопасный доступ';
$string['auth_cas_logout_return_url'] = 'Введите URL-адрес, куда пользователи CAS должны быть перенаправлены после выхода из системы. <br /> Если оставить пустым, то пользователь будет перенаправлен в то место, куда  пользователей перенаправляет Moodle.';
$string['auth_cas_logout_return_url_key'] = 'Альтернативный URL-адрес перенаправления при выходе';
$string['auth_cas_logoutcas'] = 'Выберите «Да», если хотите выйти из CAS при выходе из Moodle';
$string['auth_cas_logoutcas_key'] = 'Параметр выхода из CAS';
$string['auth_cas_multiauth'] = 'Выберите «Да», если Вы хотите иметь множественную аутентификацию (CAS + другие аутентификации)';
$string['auth_cas_multiauth_key'] = 'Множественная аутентификация';
$string['auth_cas_port'] = 'Порт сервера CAS';
$string['auth_cas_port_key'] = 'Порт';
$string['auth_cas_proxycas'] = 'Выберите «Да», если Вы используете CAS в режиме прокси';
$string['auth_cas_proxycas_key'] = 'Режим прокси';
$string['auth_cas_server_settings'] = 'Конфигурация сервера CAS';
$string['auth_cas_text'] = 'Безопасное соединение';
$string['auth_cas_use_cas'] = 'Использовать CAS';
$string['auth_cas_version'] = 'Использовать версию протокола CAS';
$string['auth_casdescription'] = 'Этот метод использует сервер CAS (Центральная служба проверки подлинности) для аутентификации пользователей в контексте единого входа в систему (SSO). Вы также можете использовать простую LDAP аутентификацию. Если данное имя пользователя и его пароль действительны в соответствии с CAS, то, при необходимости, Moodle создаст новую запись пользователя в своей базе данных, принимая атрибуты пользователя из LDAP. При следующем входе проверяются только имя пользователя и пароль.';
$string['auth_casnotinstalled'] = 'Невозможно использовать CAS-аутентификацию. Модуль PHP LDAP не установлен.';
$string['noldapserver'] = 'LDAP сервер не настроен для CAS! Синхронизация отключена.';
$string['pluginname'] = 'Сервер CAS (SSO)';
$string['privacy:metadata'] = 'Плагин аутентификации «Сервер CAS (SSO)» не хранит никаких персональных данных.';
$string['synctask'] = 'Задача синхронизации пользователей CAS';
