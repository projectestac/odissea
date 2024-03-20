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
 * Strings for component 'auth_cas', language 'uk', version '4.1'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Вибір аутентифікації';
$string['auth_cas_auth_logo'] = 'Логотип методу аутентифікації';
$string['auth_cas_auth_logo_description'] = 'Надайте логотип для методу автентифікації CAS, який знайомий вашим користувачам.';
$string['auth_cas_auth_name'] = 'Назва методу аутентифікації';
$string['auth_cas_auth_name_description'] = 'Укажіть назву для методу автентифікації CAS, знайому вашим користувачам.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Створення користувачів зовні';
$string['auth_cas_baseuri'] = 'URI серверу (нічого, якщо немає базового )Uri)<br />Наприклад, якщо CAS сервер відповідає на host.domaine.fr/CAS/ then<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Базовий URI';
$string['auth_cas_broken_password'] = 'Ви не можете обійтися без зміни пароля, однак немає доступної сторінки для його зміни. Будь ласка, зверніться до вашого Moodle адміністратора.';
$string['auth_cas_cantconnect'] = 'LDAP частина CAS-модуля не з’єднується з сервером: {$a}';
$string['auth_cas_casversion'] = 'Версія протоколу CAS';
$string['auth_cas_certificate_check'] = 'Виберіть ’Так’, якщо ви хочете перевірити сертифікат сервера.';
$string['auth_cas_certificate_check_key'] = 'Перевірка сервера';
$string['auth_cas_certificate_path'] = 'Шлях до файлу CA ланцюга (PEM формат) для перевірки сертифікату сервера';
$string['auth_cas_certificate_path_empty'] = 'Якщо ви включите сервер на перевірку, вам потрібно буде вказати шлях до сертифікату';
$string['auth_cas_certificate_path_key'] = 'Шлях до сертифікату';
$string['auth_cas_changepasswordurl'] = 'URL зміни паролю';
$string['auth_cas_create_user'] = 'Включіть це, якщо ви хочете додати  CAS-аутентифікацію користувачів у базі даних Moodle. Якщо ні, то увійти зможуть тільки користувачі, які вже існують у базі Moodle.';
$string['auth_cas_create_user_key'] = 'Створити користувача';
$string['auth_cas_curl_ssl_version'] = 'Використовується SSL версії (2 або 3). Типово РНР сам спробує визначити версію, але в деяких випадках потрібно вказати вручну.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Типово';
$string['auth_cas_curl_ssl_version_key'] = 'Версія cURL SSL';
$string['auth_cas_enabled'] = 'Включіть це, якщо ви хочете використовувати CAS аутентифікацію.';
$string['auth_cas_hostname'] = 'Ім’я CAS серверу<br />наприклад: host.domain.ua';
$string['auth_cas_hostname_key'] = 'Ім’я серверу';
$string['auth_cas_invalidcaslogin'] = 'На жаль, ваш логін неправильний - ви не можете бути авторизовані';
$string['auth_cas_language'] = 'Виберіть мову для сторінки аутентифікації';
$string['auth_cas_language_key'] = 'Мова';
$string['auth_cas_logincas'] = 'Доступ через безпечне з’єднання';
$string['auth_cas_logout_return_url'] = 'Вкажіть URL, куди користувачі CAS повинні бути перенаправлені після виходу. <br /> Якщо залишити порожнім, користувачі будуть перенаправлятися на сторінку, куди Moodle буде їх перенаправляти.';
$string['auth_cas_logout_return_url_key'] = 'Альтернативний URL сторінки виходу';
$string['auth_cas_logoutcas'] = 'Виберіть ’Так’, якщо ви хочете виходити з CAS коли відбувається розрив зв’язку з Moodle';
$string['auth_cas_logoutcas_key'] = 'Опція виходу з CAS';
$string['auth_cas_multiauth'] = 'Виберіть ’Так’, якщо ви хочете мати розширену аутентифікацію (CAS + інший вид)';
$string['auth_cas_multiauth_key'] = 'Розширена аутентифікація';
$string['auth_cas_port'] = 'Порт CAS серверу';
$string['auth_cas_port_key'] = 'Порт';
$string['auth_cas_proxycas'] = 'Виберіть ’Так’, якщо ви використовуєте CAS через проксі-сервер';
$string['auth_cas_proxycas_key'] = 'Режим проксі';
$string['auth_cas_server_settings'] = 'Налаштування CAS серверу';
$string['auth_cas_text'] = 'Безпечне з’єднання';
$string['auth_cas_use_cas'] = 'Використовувати CAS';
$string['auth_cas_version'] = 'Версія протоколу CAS';
$string['auth_casdescription'] = 'Цей метод використовує CAS сервер (Central Authentication Service) для аутентифікації користувачів в Single Sign On environment (SSO). Ви також можете використовувати простий метод LDAP аутентифікації. Якщо надані логін та пароль є в CAS, то Moodle створить нового користувача у своїй базі даних, приймаючи атрибути користувачів з LDAP, якщо потрібно. В подальшому логін та пароль користувача тільки перевіряються.';
$string['auth_casnotinstalled'] = 'Не вдається використати CAS аутентифікацію.  Не встановлено PHP LDAP модуль.';
$string['noldapserver'] = 'Ніякого LDAP сервера не налаштовано для CAS! Синхронізація відключена.';
$string['pluginname'] = 'CAS сервер (SSO)';
$string['privacy:metadata'] = 'Плагін аутентифікації сервера CAS (SSO) не зберігає жодних особистих даних.';
$string['synctask'] = 'Задача синхронізації користувачів CAS';
