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
 * Strings for component 'auth_shibboleth', language 'uk', version '4.4'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Логотип методу аутентифікації';
$string['auth_shib_auth_logo_description'] = 'Надайте логотип для методу автентифікації Shibboleth, який знайомий вашим користувачам. Це може бути логотип вашої федерації Шибболет, напр. <tt>SWITCHaai Login</tt> або <tt>InCommon Login</tt> або подібне.';
$string['auth_shib_auth_method'] = 'Назва методу аутентифікації';
$string['auth_shib_auth_method_description'] = 'Введіть назву для методу  аутентифікації Shibboleth, яка знайома користувачам. Це може бути назва вашої федерації Shibboleth, наприклад, <tt> SWITCHaai Login </ TT> або <tt> InCommon Login</ TT> або аналогічний.';
$string['auth_shib_changepasswordurl'] = 'URL для зміни пароля';
$string['auth_shib_contact_administrator'] = 'У разі, якщо ви не пов\'язані з даними організаціями, але ви повинні мати доступ до курсу на цьому сервері, будь ласка, зв’яжіться з <a href="mailto:{$a}">Адміністратором</a>.';
$string['auth_shib_convert_data'] = 'Дані модифікації API';
$string['auth_shib_convert_data_description'] = 'Ви можете використовувати цей API для подальшої зміни даних, наданих Shibboleth. Прочитайте <a href="{$a}">README</a> для отримання подальших інструкцій.';
$string['auth_shib_convert_data_filepath_warning'] = 'Ви не можете використовувати файл, який знаходиться в поточному каталозі даних сайту ($CFG->dataroot), як API для зміни даних.';
$string['auth_shib_convert_data_warning'] = 'Файлу не існує або він не має прав читання для web-сервера!';
$string['auth_shib_idp_list'] = 'Ідентифікуючі провайдери';
$string['auth_shib_idp_list_description'] = 'Надання списку ідентифікуючих Провайдерів, щоб користувачі мали можливість вибрати з них на першій сторінці.<br />
В кожному рядку потрібно розділяти комою значення entityID для IdP (див. файл метаданих для Shibboleth) та назву IdP як вона буде показуватися у випадаючому списку.<br />
Як додатковий третій параметр можна використати мовні параметри для ідентифікатора Shibboleth сесії, який повинен бути використаним, якщо ваш Moodle є частиною мережевої установки.';
$string['auth_shib_instructions'] = 'Використовуйте <a href="{$a}">логін Shibboleth</a>, щоб отримати доступ через Shibboleth, якщо ваша установа підтримує його. В іншому випадку використовуйте звичайну форму входу, показану тут.';
$string['auth_shib_instructions_help'] = 'Тут Ви повинні забезпечити замовлені команди для ваших коритувачів, щоб пояснити Shibboleth. Це буде показано на сторінці входу в систему в розділі команд. Це повинно занести зв’язок в Захищений шиболетом ресурс, який переадресовує користувачів до " <b> {$a} </b> " так, щоб користувачі Шиболету могли ввійти в Moodle. Якщо Ви залишаєте це поле порожнім, то стандартні команди будуть використовуватись';
$string['auth_shib_instructions_key'] = 'Інструкції для входу';
$string['auth_shib_integrated_wayf'] = 'Сервіс Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Якщо ви ввімкнете це, Moodle використовуватиме власну службу WAYF замість тієї, що налаштована для Shibboleth. Moodle відобразить спадний список на цій альтернативній сторінці входу, де користувач має вибрати свого постачальника ідентифікаційних даних.';
$string['auth_shib_logout_return_url'] = 'Альтернативний URL для виходу';
$string['auth_shib_logout_return_url_description'] = 'Вкажіть URL, на який будуть перенаправлятися користувачі з Shibboleth-аутентифікацією після виходу з системи.<br />Якщо залишити порожнім, то користувачі будуть перенаправлятися за стандартним варіантом Moodle.';
$string['auth_shib_logout_url'] = 'Обробник URL виходу для Shibboleth Service Provider';
$string['auth_shib_logout_url_description'] = 'Вкажіть URL для обробника виходу Shibboleth Service Provider. Типово це <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Якщо ви бажаєте використовувати вбудований WAYF сервіс, вам потрібно надати через кому список Identity Provider entityIDs, їх назви та опціонально ідентифікатор сесії.';
$string['auth_shib_only'] = 'Тільки Shibboleth';
$string['auth_shib_only_description'] = 'Перевірити цю опцію, якщо Shibboleth аутентифікація обрана примусово';
$string['auth_shib_username_description'] = 'Назва Shibboleth веб-серверу параметрів, які будуть використовуватися як ім`я системи.';
$string['auth_shibboleth_errormsg'] = 'Будь ласка, виберіть організацію  з якої ви!';
$string['auth_shibboleth_login'] = 'Псевдо';
$string['auth_shibboleth_login_long'] = 'Вхід до Moodle через Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Ручний вхід';
$string['auth_shibboleth_select_member'] = 'Я член в ....';
$string['auth_shibboleth_select_organization'] = 'Для автентифікації через Shibboleth виберіть свою організацію зі спадного меню:';
$string['auth_shibbolethdescription'] = 'За допомогою цього методу користувачі створюються та аутентифікуються за допомогою Shibboleth. Щоб отримати докладнішу інформацію про налаштування, перегляньте <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Плагін аутентифікації Shibboleth не зберігає жодних особистих даних.';
$string['shib_invalid_account_error'] = 'Ви пройшли перевірку аутентифікації Shibboleth, але Moodle не вдається знайти ва в системі. Можливо ваш обліковий запис не існує або заблокований.';
$string['shib_no_attributes_error'] = 'Здається ви використовуєте Shibboleth аутентифікацію, але Moodle не отримує необхідних атрибутів користувача. Будь ласка, перевірте, що ваш постачальник ресурсу передає необхідні атрибути ({$a}) до системи Moodle або проінформуйте веб-майстра цього сервера.';
$string['shib_not_all_attributes_error'] = 'Moodle потребує певних атрибутів Shibboleth, яких немає у вашому випадку. Атрибути: {$a} <br /> Будь ласка, зв’яжіться з веб-майстром цього сервера або вашим провайдером.';
$string['shib_not_set_up_error'] = 'Схоже, автентифікація Shibboleth налаштована неправильно, оскільки для цієї сторінки немає змінних середовища Shibboleth. Будь ласка, зверніться до <a href="{$a}">README</a> для отримання додаткових інструкцій щодо налаштування автентифікації Shibboleth або зв’яжіться з веб-майстром цієї інсталяції Moodle.';
