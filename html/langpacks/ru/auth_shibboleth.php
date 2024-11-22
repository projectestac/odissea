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
 * Strings for component 'auth_shibboleth', language 'ru', version '4.1'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Логотип метода аутентификации';
$string['auth_shib_auth_logo_description'] = 'Предоставьте знакомый  вашим пользователям логотип для метода аутентификации Shibboleth. Это может быть логотип вашей федерации Shibboleth, например <tt> SWITCHaai Login </ tt> или <tt> InCommon Login </ tt> или аналогичные.';
$string['auth_shib_auth_method'] = 'Название метода аутентификации';
$string['auth_shib_auth_method_description'] = 'Укажите название для метода аутентификации Shibboleth, которое знакомо вашим пользователям. Это может быть название вашего объединения Shibboleth, например <tt>SWITCHaai Login</tt> или <tt>InCommon Login</tt> или что-то подобное.';
$string['auth_shib_changepasswordurl'] = 'Адрес страницы смены пароля';
$string['auth_shib_contact_administrator'] = 'В случае, если Вы не связаны с указанными организациями, а Вам нужен доступ к курсу на этом сервере, свяжитесь с <a href="mailto:{$a}">администратором сайта Moodle</a>.';
$string['auth_shib_convert_data'] = 'API модификации данных';
$string['auth_shib_convert_data_description'] = 'Вы можете использовать этот API для дальнейшей модификации данных, предоставленных Shibboleth. Прочитайте в файле <a href="{$a}">README (на английском языке)</a> более подробные инструкции.';
$string['auth_shib_convert_data_filepath_warning'] = 'Вы не можете использовать файл, расположенный в текущем каталоге данных сайта ($CFG->dataroot) в качестве API изменения данных.';
$string['auth_shib_convert_data_warning'] = 'Этот файл не существует или не доступен для чтения веб-сервером!';
$string['auth_shib_idp_list'] = 'Поставщики удостоверений';
$string['auth_shib_idp_list_description'] = 'Введите перечень поставщиков удостоверений, чтобы пользователь мог выбирать из него на странице входа. <br /> В каждой строке должны быть разделенные запятыми записи entityID поставщика удостоверений (см. файл метаданных Shibboleth) и его название. Они будут отображаться в выпадающем списке.<br /> В качестве необязательного третьего параметра Вы можете добавить расположение инициатора сеанса Shibboleth, который используется в случае, если система Moodle является частью объединения.';
$string['auth_shib_instructions'] = 'Используйте <a href="{$a}">Вход через Shibboleth</a>, чтобы получить доступ через Shibboleth, если Ваша организация поддерживает его.<br /> В противном случае используйте обычную форму входа, показанную здесь.';
$string['auth_shib_instructions_help'] = 'Здесь Вы должны предоставить инструкции для пользователей, чтобы объяснить им как заходить с помощью Shibboleth. Эти инструкции будут отображаться на странице входа. Инструкции должны содержать ссылку на «<b>{$a}</b>», чтобы пользователи могли перейти по ней, когда захотят войти в систему.';
$string['auth_shib_instructions_key'] = 'Инструкции по входу';
$string['auth_shib_integrated_wayf'] = 'Встроенная в Moodle служба WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Если параметр включен, Moodle будет использовать свою собственную службу WAYF (служба выбора своей организации) вместо настроенной для Shibboleth. Moodle будет отображать раскрывающийся список на странице альтернативного входа, где пользователь сможет выбирать своего поставщика удостоверений.';
$string['auth_shib_logout_return_url'] = 'Альтернативный URL-адрес перенаправления при выходе';
$string['auth_shib_logout_return_url_description'] = 'Введите URL-адрес, куда пользователи Shibboleth должны быть перенаправлены после выхода из системы.<br /> Если оставить поле пустым, то пользователь будет перенаправлен в то место, куда  пользователей перенаправляет Moodle.';
$string['auth_shib_logout_url'] = 'URL-адрес обработчика выхода поставщика службы Shibboleth';
$string['auth_shib_logout_url_description'] = 'Введите URL-адрес обработчика выхода поставщика службы Shibboleth. Обычно, это <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Если Вы хотите использовать встроенную службу WAYF, Вы должны предоставить разделенный запятыми список поставщиков удостоверений: entityID, название и (не обязательно) инициатор сеанса.';
$string['auth_shib_only'] = 'Только Shibboleth';
$string['auth_shib_only_description'] = 'Выберите этот параметр для принудительного использования аутентификации Shibboleth';
$string['auth_shib_username_description'] = 'Имя переменной среды Shibboleth веб-сервера, которая должна использоваться в качестве логина Moodle';
$string['auth_shibboleth_errormsg'] = 'Пожалуйста, выберите свою организацию!';
$string['auth_shibboleth_login'] = 'Вход через Shibboleth';
$string['auth_shibboleth_login_long'] = 'Войти в Moodle через Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Ручной вход';
$string['auth_shibboleth_select_member'] = 'Я являюсь членом ...';
$string['auth_shibboleth_select_organization'] = 'Для аутентификации через Shibboleth, выберите организацию из выпадающего списка:';
$string['auth_shibbolethdescription'] = 'При использовании этого метода пользователи создаются и аутентифицируются с использованием Shibboleth.
Подробности см. в <a href="{$a}">README (на английском языке)</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Плагин аутентификации «Shibboleth» не хранит никаких персональных данных.';
$string['shib_invalid_account_error'] = 'Вы представляетесь как пользователь Shibboleth, но в Moodle нет действующей учетной записи с этим логином. Ваша учетная запись не существует или, возможно, была приостановлена.';
$string['shib_no_attributes_error'] = 'Вы представляетесь как пользователь Shibboleth, но система Moodle не получила никаких атрибутов пользователя. Пожалуйста, проверьте, что Ваш поставщик удостоверений представляет необходимые атрибуты ({$a}) для работы с Moodle или свяжитесь с администратором этого сайта Moodle.';
$string['shib_not_all_attributes_error'] = 'Системе Moodle требуются определенные атрибуты Shibboleth, которых не были предоставлены в Вашем случае. Эти атрибуты: {$a}<br />Пожалуйста, свяжитесь с администратором этого сайта Moodle или Вашим поставщиком удостоверений Shibboleth.';
$string['shib_not_set_up_error'] = 'Аутентификация Shibboleth, вероятно, не была настроена корректно, потому что никакие переменные среды Shibboleth не были переданы на эту страницу. Пожалуйста, обратитесь к <a href="{$a}">README</a> для более подробных инструкций о том, как настроить аутентификацию Shibboleth или свяжитесь с администратором этого сайта Moodle.';
