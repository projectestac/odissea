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
 * Strings for component 'auth_oidc', language 'ru', version '3.11'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_oidcdescription'] = 'Подключаемый модуль OpenID Connect обеспечивает функцию единого входа с использованием настраиваемых провайдеров идентификации.';
$string['cfg_autoappend_desc'] = 'Автоматически добавлять эту строку при входе в систему с использованием метода аутентификации «Учетные данные пароля владельца ресурса». Это полезно, если при идентификации требуется общий домен, но вы не хотите, чтобы пользователи вводили его при входе в систему. Например, если полный логин пользователя OpenID Connect - «james@example.com» и вы здесь введете «@example.com», то пользователь должен будет только ввести «james» в качестве своего логина.
<br /><b>Примечание:</b> В случае, когда существуют конфликтующие логины - уже есть пользователь Moodle с тем же логином, то используется приоритет подключаемого модуля аутентификации для определения того, какой пользователь выиграл.';
$string['cfg_autoappend_key'] = 'Автоматически добавлять';
$string['cfg_customicon_desc'] = 'Если вы хотите использовать свой собственный значок, загрузите его здесь. Это отменяет любую иконку, выбранную выше. <br /> <br /> <b> Примечания по использованию пользовательских значков: </b> <ul> <li> Размер этого изображения <b> не будет </b> изменяться на странице входа, поэтому мы рекомендуем загрузить изображение размером не более 35x35 пикселей. </li> <li> Если вы загрузили пользовательский значок и хотите вернуться к одному из стандартных значков, щелкните пользовательский значок в поле выше, затем нажмите «Удалить», затем нажмите «ОК», затем нажмите «Сохранить изменения» в нижней части этой формы. Выбранный значок появится на странице входа в Moodle. </li> </ul>';
$string['cfg_customicon_key'] = 'Свой значок';
$string['cfg_debugmode_desc'] = 'При включенном параметре в журнал Moodle будет заноситься информация, которая может помочь в выявлении проблем.';
$string['cfg_debugmode_key'] = 'Запись отладочных сообщений';
$string['cfg_domainhint_desc'] = 'При использовании метода аутентификации «Код авторизации» передайте это значение в качестве параметра «domain_hint». «domain_hint» используется некоторыми провайдерами OpenID Connect, чтобы облегчить пользователям процесс входа в систему. Узнайте у своего провайдера, используют ли они этот параметр.';
$string['cfg_domainhint_key'] = 'Подсказка домена (Domain Hint)';
$string['cfg_err_invalidauthendpoint'] = 'Неверная конечная точка авторизации';
$string['cfg_err_invalidclientid'] = 'Неверный ID клиента';
$string['cfg_err_invalidclientsecret'] = 'Неверный ключ клиента';
$string['cfg_err_invalidtokenendpoint'] = 'Неверная конечная точка авторизации';
$string['cfg_field_mapping_desc'] = 'Данные профиля пользователя Moodle можно сопоставить с данными провайдера идентификации (IdP) OpenID Connect.<br/>
<ул>
<li>Основные данные профиля доступны из токенов ID всех провайдеров идентификации.</li>
<li>Если  в качестве IdP используется Azure AD, то дополнительные данные профиля можно сделать доступными, установив и настроив <a href="https://moodle.org/plugins/local_o365">подключаемый модуль интеграции Microsoft 365 (local_o365)< /а>.</li>
<li>Если в подключаемом модуле local_o365 включена функция синхронизации профиля SDS, то определенные поля профиля можно синхронизировать из SDS в Moodle при выполнении запланированной задачи "Синхронизация с SDS". <br/>При этом синхронизации не будет ни при выполнении запланированной задачи "Синхронизация пользователей с Azure AD", ни при входе пользователя в систему.</li>
</ul>';
$string['cfg_forceredirect_desc'] = 'При включенном параметре страница входа в систему будет пропущена и произойдет перенаправление на страницу OpenID Connect. Можно обойти с помощью параметра URL  ?noredirect=1';
$string['cfg_forceredirect_key'] = 'Принудительно перенаправлять';
$string['cfg_icon_desc'] = 'Значок, отображаемый рядом с именем провайдера на странице входа.';
$string['cfg_icon_key'] = 'Значок';
$string['cfg_iconalt_check'] = 'Значок галочки';
$string['cfg_iconalt_go'] = 'Зеленый круг';
$string['cfg_iconalt_group'] = 'Значок группы';
$string['cfg_iconalt_group2'] = 'Альтернативный значок группы';
$string['cfg_iconalt_key'] = 'Значок ключа';
$string['cfg_iconalt_lock'] = 'Значок замка';
$string['cfg_iconalt_locked'] = 'Значок закрытого замка';
$string['cfg_iconalt_mnet'] = 'Значок MNET';
$string['cfg_iconalt_o365'] = 'Значок Microsoft 365';
$string['cfg_iconalt_plus'] = 'Значок плюс';
$string['cfg_iconalt_rightarrow'] = 'Значок стрелки вправо';
$string['cfg_iconalt_stop'] = 'Красный круг';
$string['cfg_iconalt_user'] = 'Значок пользователя';
$string['cfg_iconalt_user2'] = 'Альтернативный значок пользователя';
$string['cfg_iconalt_userlock'] = 'Значок пользователя с замком';
$string['cfg_loginflow_authcode'] = 'Код авторизации (рекомендуется)';
$string['cfg_loginflow_authcode_desc'] = 'Используя этот метод, пользователь щелкает на названии провайдера идентификации (см. выше «Название провайдера») на странице входа в Moodle и перенаправляется к провайдеру для входа. После успешного входа пользователь перенаправляется обратно в Moodle, где вход в Moodle происходит автоматически. Это стандартный и наиболее безопасный способ входа.';
$string['cfg_loginflow_key'] = 'Метод аутентификации';
$string['cfg_loginflow_rocreds'] = 'Предоставление учетных данных пароля владельца ресурса';
$string['cfg_loginflow_rocreds_desc'] = 'Используя этот метод, пользователь вводит свои логин и пароль в форму входа в Moodle, как при ручном входе. Это авторизует пользователя у провайдера идентификации, но не создает сеанс на сайте провайдера. Например, если вы используете  Microsoft 365 с OpenID Connect, то пользователь будет входить в Moodle, но не через веб-приложения  Microsoft 365. Рекомендуется использовать запрос авторизации, если вы хотите, чтобы пользователи входили как в Moodle, так и в провайдера идентификации. Обратите внимание, что не все провайдеры идентификации поддерживают этот метод. Эту опцию следует использовать только в том случае, если другие типы прав доступа недоступны.';
$string['cfg_logoutendpoint_desc'] = 'Используемый URI конечной точки выхода из системы от вашего провайдера идентификации.';
$string['cfg_logoutendpoint_key'] = 'Конечная точка выхода';
$string['cfg_opname_desc'] = 'Этот параметр определяет тип учетных данных, которые пользователь должен использовать для входа в систему. Данные используются пользователем во всех частях этого плагина для идентификации своим провайдером.';
$string['cfg_opname_key'] = 'Название провайдера';
$string['cfg_redirecturi_desc'] = 'Это URI для регистрации в качестве «URI перенаправления». Ваш провайдер идентификации OpenID Connect должен запросить его при регистрации Moodle в качестве клиента. <br /> <b> ПРИМЕЧАНИЕ: </b> Вы должны ввести эти данные своего провайдера OpenID Connect *точно так*, как это показано здесь. Любое несоответствие помешает входу в систему с использованием OpenID Connect.';
$string['cfg_redirecturi_key'] = 'URI перенаправления';
$string['cfg_signoffintegration_desc'] = 'При включенном параметре, когда пользователь Moodle, использующий метод проверки подлинности OIDC, выходит из Moodle, то Moodle также пытается выйти из системы Office 365.

Обратите внимание, что URL-адрес сайта Moodle ({$a}) необходимо добавить в качестве URI перенаправления в приложение Azure, созданное для интеграции Moodle с Office 365.';
$string['cfg_signoffintegration_key'] = 'Общий выход';
$string['cfg_userrestrictions_desc'] = 'Разрешить вход в систему только пользователям, которые отвечают определенным ограничениям. <br /> <b> Как использовать пользовательские ограничения: </b> <ul> <li> введите <a href="https://en.wikipedia.org/wiki/Regular_expression"> регулярное выражение </a > в шаблон, которое совпадает с логинами, которым вы хотите разрешить вход. </li> <li> Вводите один шаблон в строке </li> <li> Если вы введете несколько шаблонов, пользователь получит разрешение, если он соответствуют ЛЮБОМУ из шаблонов. </li> <li> Символ "/" следует экранировать с помощью "\\". </li> <li> Если вы  выше не введете какие-либо ограничения, все пользователи, которые могут войти в систему поставщика OpenID Connect, будут приняты Moodle. </li> <li> Любой пользователь, который не соответствует ни одному из введенных шаблонов, не сможет войти в систему с помощью OpenID Connect. </li> </ul>';
$string['cfg_userrestrictions_key'] = 'Ограничения пользователя';
$string['cfg_userrestrictionscasesensitive_key'] = 'Ограничения для пользователей с учетом регистра';
$string['cleanup_oidc_tokens'] = 'Очистка токенов OpenID Connect';
$string['delete_token'] = 'Удалить токен';
$string['delete_token_and_reference'] = 'Удалить токен и ссылку';
$string['errorauthdisconnectemptypassword'] = 'Пароль не может быть пустым';
$string['errorauthdisconnectemptyusername'] = 'Логин не может быть пустым';
$string['errorauthdisconnectifmanual'] = 'Введите ниже учетные данные при использовании ручного метода входа в систему.';
$string['errorauthdisconnectinvalidmethod'] = 'Получен неверный метод входа';
$string['errorauthdisconnectnewmethod'] = 'Использовать метод входа';
$string['errorauthdisconnectusernameexists'] = 'Это имя пользователя уже занято. Пожалуйста, выберите другое.';
$string['errorauthgeneral'] = 'При входе в систему произошла ошибка. Обратитесь за помощью к администратору.';
$string['errorauthinvalididtoken'] = 'Получен неверный id_token.';
$string['errorauthloginfailednouser'] = 'Неудачный вход: пользователь не найден в Moodle. Если на этом сайте включен параметр «authpreventaccountcreation», это может означать, что сначала вам понадобится администратор для создания учетной записи.';
$string['errorauthnoauthcode'] = 'Код авторизации не был получен с сервера идентификации. Журналы ошибок могут содержать больше информации.';
$string['errorauthnohttpclient'] = 'Установите HTTP-клиента.';
$string['errorauthnoidtoken'] = 'ID токена OpenID Connect не получен.';
$string['errorauthunknownstate'] = 'Неизвестное состояние.';
$string['errorauthuseralreadyconnected'] = 'Вы уже подключены к другому пользователю OpenID Connect.';
$string['errorauthuserconnectedtodifferent'] = 'Аутентифицированный пользователь OpenID Connect уже подключен к пользователю Moodle.';
$string['errorbadloginflow'] = 'Указан неверный тип аутентификации. Примечание: Если вы получили это сообщение после недавней установки или обновления, очистите кэш Moodle.';
$string['errorinvalidredirect_message'] = 'Не существует URL, на который вы пытаетесь перенаправить,';
$string['errorjwtbadpayload'] = 'Не удалось прочитать полезные данные JWT.';
$string['errorjwtcouldnotreadheader'] = 'Не удалось прочитать заголовок JWT';
$string['errorjwtempty'] = 'Получен пустой или нестроковый JWT.';
$string['errorjwtinvalidheader'] = 'Неверный заголовок JWT';
$string['errorjwtmalformed'] = 'Получен неверный JWT.';
$string['errorjwtunsupportedalg'] = 'JWS Alg или JWE не поддерживаются';
$string['errorlogintoconnectedaccount'] = 'Этот пользователь Microsoft 365 подключен к учетной записи Moodle, но вход в систему OpenID Connect не включен для этой учетной записи Moodle.
Войдите в учетную запись Moodle, используя определенный метод аутентификации учетной записи, чтобы использовать функции Microsoft 365.';
$string['errornodisconnectionauthmethod'] = 'Невозможно отключиться, потому что нет включенного  плагина аутентификации, к которому можно было бы вернуться. (либо предыдущий метод входа пользователя, либо метод входа вручную).';
$string['erroroidccall'] = 'Ошибка в OpenID Connect. Проверьте журналы событий для получения дополнительной информации.';
$string['erroroidccall_message'] = 'Ошибка в OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Для этого токен конечной точки должен использовать SSL/TLS.';
$string['erroroidcclientinvalidendpoint'] = 'Получен неверный URI конечной точки.';
$string['erroroidcclientnoauthendpoint'] = 'Не установлена конечная точка авторизации. Пожалуйста, установите с $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Установите учетные данные клиента с помощью setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Не установлен токен конечной точки. Пожалуйста, установите с $this->setendpoints';
$string['erroroidcnotenabled'] = 'Плагин аутентификации OpenID Connect не включен.';
$string['errorrestricted'] = 'Этот сайт имеет ограничения для пользователей, которые могут входить в систему с помощью OpenID Connect. Эти ограничения в настоящее время не позволяют вам выполнить эту попытку входа в систему.';
$string['errorucpinvalidaction'] = 'Получено неверное действие.';
$string['errorusermatched'] = 'Учетная запись Microsoft 365 "{$a->aadupn}" уже сопоставлена с пользователем Moodle "{$a->username}". Чтобы завершить подключение, сначала войдите в систему как этот пользователь Moodle и следуйте инструкциям в блоке Microsoft.';
$string['event_debug'] = 'Сообщение об отладке';
$string['eventuserauthed'] = 'Пользователь авторизован с OpenID Connect';
$string['eventuserconnected'] = 'Пользователь подключен к OpenID Connect';
$string['eventusercreated'] = 'Пользователь создан с OpenID Connect';
$string['eventuserdisconnected'] = 'Пользователь отключен от OpenID Connect';
$string['eventuserloggedin'] = 'Пользователь вошел с OpenID Connect';
$string['mismatched'] = 'Несоответствие';
$string['mismatched_details'] = 'Запись токена содержит имя пользователя "{$a->tokenusername}"; соответствующий пользователь Moodle имеет имя пользователя "{$a->moodleusername}".';
$string['na'] = 'нет данных';
$string['no_token_to_cleanup'] = 'Нет токена OIDC для очистки.';
$string['oidc:manageconnection'] = 'Разрешить OpenID подключение и отключение';
$string['oidc:manageconnectionconnect'] = 'Разрешить OpenID подключение';
$string['oidc:manageconnectiondisconnect'] = 'Разрешить OpenID отключение';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'Аутентификация OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Предыдущие способы входа в систему для отмены подключений Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Предыдущий метод входа';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Поле предыдущего (зашифрованного) пароля пользователя.';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'ID пользователя Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Токены OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'Код авторизации для токена';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'Срок действия токена';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'ID токена';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'Уникальный идентификатор пользователя OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Логин пользователя OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Токен обновления';
$string['privacy:metadata:auth_oidc_token:scope'] = 'Область действия токена';
$string['privacy:metadata:auth_oidc_token:token'] = 'Токен';
$string['privacy:metadata:auth_oidc_token:tokenresource'] = 'Ресурс токена';
$string['privacy:metadata:auth_oidc_token:userid'] = 'ID пользователя Moodle.';
$string['privacy:metadata:auth_oidc_token:username'] = 'Логин пользователя Moodle.';
$string['settings_fieldmap_feild_not_mapped'] = '(не сопоставлено)';
$string['table_action'] = 'Действие';
$string['table_matching_details'] = 'Подробности';
$string['table_oidc_username'] = 'Логин OIDC';
$string['table_token_id'] = 'ID записи токена';
$string['table_token_unique_id'] = 'Уникальный ID OIDC';
$string['task_cleanup_oidc_state_and_token'] = 'Очистить состояние OIDC и недопустимый токен';
$string['token_deleted'] = 'Токен был успешно удален';
$string['ucp_disconnect_details'] = 'Это отключит вашу учетную запись Moodle от {$a}. Вам нужно будет создать логин и пароль для входа в Moodle.';
$string['ucp_disconnect_title'] = 'Отключение {$a}';
$string['ucp_general_intro'] = 'Здесь вы можете управлять своим соединением с {$a}. Если включено, вы сможете использовать свою учетную запись {$a} для входа в Moodle вместо отдельного логина и пароля. После подключения вам больше не придется запоминать логин и пароль для Moodle, все входы в систему будут обрабатываться {$a}.';
$string['ucp_login_start'] = 'Начать использовать {$a} для входа в Moodle';
$string['ucp_login_start_desc'] = 'Это переключит вашу учетную запись на использование {$a} для входа в Moodle. Вы будете входить в систему, используя свои учетные данные {$a} - ваши логин и пароль Moodle не будут работать. Вы  в любое время можете отключить свою учетную запись и вернуться к входу в систему в обычном режиме.';
$string['ucp_login_stop'] = 'Прекратить использовать {$a} для входа в Moodle';
$string['ucp_login_stop_desc'] = 'Сейчас для входа в Moodle вы используете {$a}. Нажатие «Прекратить использовать {$a} для входа в Moodle» отключит вашу учетную запись Moodle от {$a}. Вы больше не сможете войти в Moodle под своей учетной записью {$a}. Вам будет предложено создать логин и пароль, и потом вы сможете напрямую войти в Moodle.';
$string['ucp_o365accountconnected'] = 'Эта учетная запись Microsoft 365 уже связана с другой учетной записью Moodle.';
$string['ucp_status_disabled'] = 'Отключено';
$string['ucp_status_enabled'] = 'Включено';
$string['ucp_title'] = 'Управление {$a}';
$string['update_oncreate_and_onlogin_and_usersync'] = 'При создании, при каждом входе и при каждом запуске синхронизации пользователя';
$string['update_onlogin_and_usersync'] = 'При каждом входе и при каждом запуске синхронизации пользователя';
