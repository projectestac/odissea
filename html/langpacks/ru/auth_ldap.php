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
 * Strings for component 'auth_ldap', language 'ru', version '4.4'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Не удается создать новую учетную запись в Active Directory. Убедитесь, что соблюдены все требования, необходимые для этой операции (соединение по протоколу LDAPS, достаточные права пользователя и т.д.)';
$string['auth_ldap_attrcreators'] = 'Список групп или контекстов, членам которых позволено создавать атрибуты. Чтобы указать несколько групп, используйте разделитель «;». Обычно это что-то вроде «cn=teachers, ou=staff, o=myorg».';
$string['auth_ldap_attrcreators_key'] = 'Создатели атрибутов';
$string['auth_ldap_auth_user_create_key'] = 'Создание пользователей во внешнем источнике';
$string['auth_ldap_bind_dn'] = 'Если для поиска пользователей требуется особый пользователь, укажите здесь его отличительное имя (DN, DistinguishedName). Например, «cn=ldapuser,ou=public,o=org»';
$string['auth_ldap_bind_dn_key'] = 'Отличительное имя';
$string['auth_ldap_bind_pw'] = 'Пароль для указанного пользователя';
$string['auth_ldap_bind_pw_key'] = 'Пароль';
$string['auth_ldap_bind_settings'] = 'Параметры подключения';
$string['auth_ldap_changepasswordurl_key'] = 'Адрес страницы смены пароля';
$string['auth_ldap_contexts'] = 'Список контейнеров, в которых хранятся учетные записи пользователей. Чтобы указать несколько контейнеров, используйте разделитель «;». Например: «ou=users,o=org; ou=others,o=org».';
$string['auth_ldap_contexts_key'] = 'Контейнеры';
$string['auth_ldap_create_context'] = 'Если Вы разрешили создание пользователей с подтверждением по электронной почте, укажите контейнер, в котором будут создаваться новые пользователи. Этот контейнер должен отличаться от других, чтобы избежать проблем, связанных с безопасностью. Нет необходимости повторно указывать этот контейнер в поле «Контейнеры», Moodle будет автоматически осуществлять поиск и в этом контейнере.';
$string['auth_ldap_create_context_key'] = 'Контейнер для новых пользователей';
$string['auth_ldap_create_error'] = 'Ошибка при создании пользователя в LDAP.';
$string['auth_ldap_expiration_desc'] = 'Выберите «{$a->no}» для отключения проверки срока действия пароля или «{$a->ldapserver}» для получения срока действия пароля с сервера LDAP';
$string['auth_ldap_expiration_key'] = 'Срок действия пароля';
$string['auth_ldap_expiration_warning_desc'] = 'За сколько дней предупреждать об окончании срока действия пароля.';
$string['auth_ldap_expiration_warning_key'] = 'Предупреждение об окончании срока действия пароля';
$string['auth_ldap_expireattr_desc'] = 'Необязательный параметр: переопределяет атрибут LDAP, в котором хранится время окончания срока действия пароля.';
$string['auth_ldap_expireattr_key'] = 'Атрибут окончания срока действия пароля';
$string['auth_ldap_graceattr_desc'] = 'Необязательный параметр. Позволяет переопределить атрибут, в котором хранится число оставшихся попыток входа по просроченному паролю';
$string['auth_ldap_gracelogin_key'] = 'Атрибут для числа попыток входа по просроченному паролю';
$string['auth_ldap_gracelogins_desc'] = 'Включить поддержку входа по просроченным паролям. После того, как срок действия пароля закончился, пользователь сможет входить в систему до тех пор, пока счетчик не уменьшится до 0. При включеннии этого параметра пользователю, входящему по просроченному пароля, будет отображаться специальное сообщение.';
$string['auth_ldap_gracelogins_key'] = 'Вход по просроченным паролям';
$string['auth_ldap_groupecreators'] = 'Список групп или контекстов, членам которых позволено создавать группы. Разделитель для несколько групп - «;». Обычно это что-то вроде «cn=teachers,ou=staff,o=myorg»';
$string['auth_ldap_groupecreators_key'] = 'Создатели групп';
$string['auth_ldap_host_url'] = 'Укажите сервер LDAP в формате URL, например «ldap://ldap.myorg.com/» или «ldaps://ldap.myorg.com/». Для обеспечения бесперебойной работы укажите несколько серверов, разделив их знаком «;».';
$string['auth_ldap_host_url_key'] = 'URL сервера';
$string['auth_ldap_ldap_encoding'] = 'Укажите кодировку, используемую сервером LDAP. Наиболее вероятно, что это «UTF-8». Если выбран LDAP v2, Active Directory, то используются кодировки cp1250 или cp1252.';
$string['auth_ldap_ldap_encoding_key'] = 'Кодировка LDAP';
$string['auth_ldap_login_settings'] = 'Настройки входа';
$string['auth_ldap_memberattribute'] = 'Необязательный параметр. Позволяет переопределить атрибут, отвечающий за принадлежность пользователя к группе. Обычно это «member»';
$string['auth_ldap_memberattribute_isdn'] = 'Переопределяет обработку значений атрибутов участников';
$string['auth_ldap_memberattribute_isdn_key'] = 'Использовать DN для определения членства';
$string['auth_ldap_memberattribute_key'] = 'Атрибут членства в группе';
$string['auth_ldap_no_mbstring'] = 'Для того, чтобы создавать пользователей в Active Directory необходимо установленное расширение mbstring языка PHP.';
$string['auth_ldap_noconnect'] = 'LDAP-модуль не сможет подключиться к серверу: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-модуль не может подключиться ни к одному из серверов: {$a}';
$string['auth_ldap_noextension'] = 'Похоже, что модуль LDAP языка PHP отсутствует. Убедитесь, что он установлен и включен, если вы хотите использовать этот плагин аутентификации.';
$string['auth_ldap_objectclass'] = 'Необязательный параметр: переопределяет objectClass, который используется для именования/поиска пользователей в ldap_user_type. Обычно вам не нужно его менять.';
$string['auth_ldap_objectclass_key'] = 'Класс объекта';
$string['auth_ldap_opt_deref'] = 'Определяет, каким образом псевдонимы (alias) обрабатываются во время поиска. Выберите одно из следующих значений: «Нет» (LDAP_DEREF_NEVER) или «Да» (LDAP_DEREF_ALWAYS).';
$string['auth_ldap_opt_deref_key'] = 'Учитывать псевдонимы';
$string['auth_ldap_passtype'] = 'Укажите формат для новых или измененных паролей на сервере LDAP.';
$string['auth_ldap_passtype_key'] = 'Формат пароля';
$string['auth_ldap_passwdexpire_settings'] = 'Настройки срока действия пароля LDAP';
$string['auth_ldap_preventpassindb'] = 'Выберите «Да», чтобы предотвратить сохранение паролей в базе данных Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Не кэшировать пароли';
$string['auth_ldap_rolecontext'] = 'контекст {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'Контекст LDAP используется для сопоставления <i>{$a->localname}</i>. В качестве разделителя групп используйте знак «;». Обычно выглядит как «cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role-groups,o=myorg».';
$string['auth_ldap_search_sub'] = 'Укажите «Да», если необходимо осуществлять поиск пользователей в дочерних контейнерах.';
$string['auth_ldap_search_sub_key'] = 'Поиск в дочерних контейнерах';
$string['auth_ldap_server_settings'] = 'Параметры сервера LDAP';
$string['auth_ldap_suspended_attribute'] = 'Необязательный параметр: если этот атрибут указан, то он будет использован для блокировки/разблокировки локально созданной учетной записи пользователя.';
$string['auth_ldap_suspended_attribute_key'] = 'Атрибут блокировки';
$string['auth_ldap_unsupportedusertype'] = 'Аутентификация: LDAP user_create () не поддерживает выбранный UserType: {$a}';
$string['auth_ldap_update_userinfo'] = 'Обновляйте пользовательскую информацию (Имя, Фамилию, адрес ..) от LDAP до системы. Смотрите /auth/ldap/attr_mappings.php для того, чтобы отобразить информацию.';
$string['auth_ldap_user_attribute'] = 'Необязательный параметр. Позволяет переопределить атрибут, используемый для поиска и обозначения учетных записей пользователей. Обычно это «cn».';
$string['auth_ldap_user_attribute_key'] = 'Атрибут пользователя';
$string['auth_ldap_user_exists'] = 'Пользователь с таким логином уже существует.';
$string['auth_ldap_user_settings'] = 'Настройки поиска пользователей';
$string['auth_ldap_user_type'] = 'Укажите, каким образом информация о пользователях хранится в LDAP. От этого параметра также зависит, как будет осуществляться создание пользователей и вход с просроченными паролями.';
$string['auth_ldap_user_type_key'] = 'Тип учетной записи пользователя';
$string['auth_ldap_usertypeundefined'] = 'config.user_type не определен или функция ldap_expirationtime2unix не поддерживает выбранный тип!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type не определен или функция ldap_unixi2expirationtime не поддерживает выбранный тип!';
$string['auth_ldap_version'] = 'Версия протокола LDAP, которая используется на Вашем сервере.';
$string['auth_ldap_version_key'] = 'Версия';
$string['auth_ldapdescription'] = 'Этот метод используется для аутентификации пользователя на сервере LDAP. Если пользователем указаны корректные логин и пароль, в базе данных Moodle создается новая пользовательская учетная запись. Этот модуль может считывать атрибуты пользователя из cервера LDAP и заполнять поля в Moodle. При дальнейших входах в систему на LDAP сервере будут проверяться только логин и пароль.';
$string['auth_ldapextrafields'] = 'Эти поля необязательные. Вы можете заполнить  некоторые поля пользователя данными, полученными с сервера LDAP.<p>Если не заполнять эти поля, будут использоваться значения по умолчанию, установленные в Moodle. </p><p>В любом случае, пользователь сможет редактировать эти поля после того, как зайдет в систему.</p>';
$string['auth_ldapnotinstalled'] = 'Невозможно использовать аутентификацию на сервере LDAP. Модуль LDAP языка PHP не установлен.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Выберите «Да» для осуществления попыток входа в систему по технологии NTLM SSO (Single Sign On) с использованием учетной записи, с которой пользователь вошел в домен. <strong>Примечание:</strong> для работы этой технологии требуются дополнительные настройки веб-сервера, см. <a href="https://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Включить';
$string['auth_ntlmsso_ie_fastpath'] = 'Выберите «Да» для быстрой проверки NTLM SSO (позволяет пропустить определенные шаги и работает только тогда, когда браузером клиента является Microsoft Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Нет, использовать долгую проверку NTLM во всех браузерах';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Быстрая проверка в MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Да, а в остальных браузерах использовать долгую проверку NTLM';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Да, а во всех остальных браузерах использовать стандартную форму входа в систему';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Невозможно определить логин пользователя из заголовка REMOTE_USER. Возможно, неверно настроен формат передаваемого логина.';
$string['auth_ntlmsso_missing_username'] = 'В формате передаваемого логина необходимо обязательно использовать подстановку %username%';
$string['auth_ntlmsso_remoteuserformat'] = 'При выборе типа аутентификации «NTLM» Вы можете указать здесь формат, в котором передается логин внешнего пользователя. Если оставить это поле пустым, то будет использоваться формат по умолчанию «ДОМЕН/логин». Вы можете использовать необязательную подстановку <b>%domain%</b>, чтобы указать положение названия домена, и обязательную подстановку <b>%username%</b>, чтобы указать положение логина пользователя.<br /><br />Некоторые широко используемые форматы: <tt>%domain%%username%</tt> (по умолчанию в MS Windows), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> или просто <tt>%username%</tt> (если нет доменной части).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Формат передаваемого логина';
$string['auth_ntlmsso_subnet'] = 'Попытка входа в систему по технологии NTLM SSO будет предприниматься только для клиентов из этой подсети. Формат: xxx.xxx.xxx.xxx/маска. Чтобы указать несколько подсетей используйте разделитель «,» (запятая).';
$string['auth_ntlmsso_subnet_key'] = 'Подсеть';
$string['auth_ntlmsso_type'] = 'Тип аутентификации, настроенный на веб-сервере (если есть сомнения, выберите NTLM)';
$string['auth_ntlmsso_type_key'] = 'Тип аутентификации';
$string['cannotmaprole'] = 'Роль «{$a->rolename}» не может быть сопоставлена, так как ее короткое название «{$a->shortname}» является слишком длинным и/или содержит дефисы. Чтобы разрешить сопоставление, короткое название нужно уменьшить максимум до {$a->charlimit} символов и убрать все дефисы. <a href="{$a->link}">Редактировать роль</a>';
$string['connectingldap'] = 'Подключение к серверу LDAP ...';
$string['connectingldapsuccess'] = 'Соединение с LDAP-сервером прошло успешно';
$string['creatingtemptable'] = 'Создание временной таблицы {$a}';
$string['diag_contextnotfound'] = 'Контекст {$a} не существует или не может быть определен.';
$string['diag_emptycontext'] = 'Обнаружен пустой контекст.';
$string['diag_genericerror'] = 'Ошибка LDAP {$a->code} при чтении {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Группа {$a->group} для роли {$a->localname} не существует или не может быть прочитана с привязкой к имени.';
$string['diag_toooldversion'] = 'Маловероятно, что современный сервер LDAP использует протокол LDAPv2. Неправильные настройки могут испортить значения в полях пользователей. Обратитесь к администратору LDAP.';
$string['didntfindexpiretime'] = 'Функция password_expire() не смогла определить срок действия пароля.';
$string['didntgetusersfromldap'] = 'Ошибка - не удалось получить ни одного пользователя с сервера LDAP - выход.';
$string['gotcountrecordsfromldap'] = 'Получено записей из LDAP - {$a}';
$string['invalidusererrors'] = 'Предупреждение: пропущено создание учетных записей пользователей - {$a}.';
$string['invaliduserexception'] = 'Ошибка: не удается создать учетную запись нового пользователя. Детали и причина:
{$a}
Пропуск этого пользователя.';
$string['ldapnotconfigured'] = 'URL-адрес хоста LDAP в настоящее время не настроен';
$string['morethanoneuser'] = 'В LDAP найдено более одной учетной записи пользователя. Используется только первая.';
$string['needbcmath'] = 'Для проверки срока действия пароля в Active Directory необходимо установленное расширение BCMath';
$string['needmbstring'] = 'Для смены паролей в Active Directory необходимо расширение mbstring языка PHP';
$string['nodnforusername'] = 'Ошибка в функции user_update_password(). Нет DN для: {$a->username}';
$string['noemail'] = 'Попытка отправить Вам письмо завершилась неудачно!';
$string['notcalledfromserver'] = 'Не может быть вызван с веб-сервера!';
$string['noupdatestobedone'] = 'Обновление данных не будет осуществляться';
$string['nouserentriestoremove'] = 'Нет пользователей, которых нужно удалить';
$string['nouserentriestorevive'] = 'Нет пользователей, которых нужно восстановить';
$string['nouserstobeadded'] = 'Нет пользователей для добавления';
$string['ntlmsso_attempting'] = 'Попытка входа по технологии NTLM Single Sign On ...';
$string['ntlmsso_failed'] = 'Автоматический вход не удался, попробуйте использовать обычную страницу входа ...';
$string['ntlmsso_isdisabled'] = 'Технология NTLM SSO отключена.';
$string['ntlmsso_unknowntype'] = 'Неизвестный тип NTLM SSO!';
$string['pagedresultsnotsupp'] = 'Постраничный вывод результатов LDAP не поддерживаются (либо эта функция не поддерживается Вашей версией PHP, либо Вы настроили Moodle на использование протокола LDAP версии 2, либо Moodle не может связаться с вашим сервером LDAP)';
$string['pagesize'] = 'Убедитесь, что это значение меньше, чем предельный размер результирующего набора сервера LDAP (максимальное количество записей, которые могут быть возвращены в одном запросе).';
$string['pagesize_key'] = 'Размер страницы';
$string['pluginname'] = 'Сервер LDAP';
$string['pluginnotenabled'] = 'Плагин не включен!';
$string['privacy:metadata'] = 'Плагин аутентификации «Сервер LDAP» не хранит никаких персональных данных.';
$string['renamingnotallowed'] = 'В LDAP переименования пользователей не допускаются';
$string['rootdseerror'] = 'Ошибка запроса RootDSE для Active Directory';
$string['start_tls'] = 'Использовать службу LDAP (порт 389) с шифрованием TLS';
$string['start_tls_key'] = 'Использовать TLS';
$string['sync_updateuserchunk'] = 'Задайте количество пользователей, которых вы хотите обновлять за транзакцию. Установка значения 0 обновит всех пользователей за одну транзакцию.';
$string['sync_updateuserchunk_key'] = 'Количество обновляемой части пользователей';
$string['syncroles'] = 'Синхронизировать системные роли из LDAP';
$string['synctask'] = 'Задача синхронизации пользователей LDAP';
$string['systemrolemapping'] = 'Сопоставление системных ролей';
$string['updatepasserror'] = 'Ошибка в функции user_update_password(). Код ошибки: {$a->errno}; описание ошибки: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Ошибка в функции user_update_password() при чтении срока действия пароля. Код ошибки: {$a->errno}; строка ошибки: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Ошибка в функции user_update_password() при изменении срока действия пароля и/или задании возможности входа при просроченном пароле. Код ошибки: {$a->errno}; строка ошибки: {$a->errstring}';
$string['updateremfail'] = 'Ошибка при обновлении записи на сервере LDAP. Код ошибки: {$a->errno}; описание ошибки: {$a->errstring}<br/>Ключ: {$a->key}, старое значение в Moodle: «{$a->ouvalue}», новое значение: «{$a->nuvalue}»';
$string['updateremfailamb'] = 'Не удалось обновить LDAP с неоднозначным полем {$a->key}; старое значение Moodle : «{$a->ouvalue}», новое значение:«{$a->nuvalue}»';
$string['updateusernotfound'] = 'Не удалось найти пользователя при внешнем обновлении. Имеющиеся сведения: база поиска: «{$a->userdn}»; фильтр поиска:«(objectClass=*)»; атрибуты поиска: «{$a->attribs}».';
$string['user_activatenotsupportusertype'] = 'Аутентификация: LDAP user_activate () не поддерживает выбранный тип пользователя: {$a}';
$string['user_disablenotsupportusertype'] = 'Аутентификация: LDAP user_disable () не поддерживает выбранный тип пользователя: {$a}';
$string['useracctctrlerror'] = 'Ошибка при получении UserAccountControl для {$a}';
$string['userentriestoadd'] = 'Записи пользователей, которые будут добавлены: {$a}';
$string['userentriestoremove'] = 'Записи пользователей, которые будут удалены: {$a}';
$string['userentriestorevive'] = 'Записи пользователей, которые будут восстановлены: {$a}';
$string['userentriestoupdate'] = 'Записи пользователей, которые будут обновлены: {$a}';
$string['usernotfound'] = 'Пользователь не найден в LDAP';
