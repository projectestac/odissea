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
 * Strings for component 'auth_oauth2', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Пользователь с таким логином уже существует на этом сайте. Если это ваша учетная запись, войдите в систему, введя свои логин и пароль и добавив ее в качестве связанного входа на странице настроек.';
$string['alreadylinked'] = 'Эта внешняя учетная запись уже связана с учетной записью на этом сайте';
$string['auth_oauth2description'] = 'Аутентификация на основе стандартов OAuth 2';
$string['auth_oauth2settings'] = 'Настройки аутентификации OAuth 2.';
$string['confirmaccountemail'] = 'Здравствуйте, {$a->fullname}.

На сайте «{$a->sitename}» была запрошена новая учетная запись с использованием Вашего адреса электронной почты.

Чтобы подтвердить Вашу новую учетную запись, перейдите по следующему адресу:

{$a->link}

В большинстве почтовых программ этот адрес должен выглядеть как синяя ссылка, на которую достаточно нажать. Если это не так, просто скопируйте этот адрес и вставьте его в строку адреса в верхней части окна Вашего браузера.

С уважением, администратор сайта,
{$a->admin}';
$string['confirmaccountemailsubject'] = '{$a}: подтверждение учетной записи';
$string['confirmationinvalid'] = 'Ссылка подтверждения недействительна или истек срок. Чтобы создать новое письмо с подтверждением, вновь запустите процесс регистрации.';
$string['confirmationpending'] = 'Эта учетная запись ожидает подтверждения по электронной почте.';
$string['confirmlinkedloginemail'] = 'Здравствуйте, {$a->fullname}.

На сайте «{$a->sitename}» был сделан запрос на связывание логина {$a->issuername} {$a->linkedemail} с Вашей учетной записью с использованием Вашего адреса электронной почты.

Чтобы подтвердить это действие и связать эти учетные записи, перейдите по следующему адресу:

{$a->link}

В большинстве почтовых программ этот адрес должен выглядеть как синяя ссылка, на которую достаточно нажать. Если это не так, просто скопируйте этот адрес и вставьте его в строку адреса в верхней части окна Вашего браузера.

С уважением, администратор сайта,
{$a->admin}';
$string['confirmlinkedloginemailsubject'] = '{$a}: подтверждение связанных учетных записей';
$string['createaccountswarning'] = 'Этот модуль аутентификации позволяет пользователям создавать учетные записи на вашем сайте. Вы можете включить настройку «authpreventaccountcreation» для использования этого плагина.';
$string['createnewlinkedlogin'] = 'Связать новую учетную запись ({$a})';
$string['emailconfirmlink'] = 'Связать свои аккаунты';
$string['emailconfirmlinksent'] = '<p>Существующая учетная запись с этим адресом электронной почты была найдена, но она еще не установлена. </p>
<p>Учетные записи должны быть связаны до входа в систему. </p>
<p>На ваш адрес <b>{$a}</b> должно быть отправлено письмо. </p>
<p>Оно содержит простые инструкции по связыванию ваших учетных записей. </p>
<p>Если у Вас возникли трудности, обратитесь к администратору сайта. </p>';
$string['info'] = 'Внешняя учетная запись';
$string['issuer'] = 'Служба OAuth 2';
$string['issuernologin'] = 'Этот эмитент не может использоваться для входа в систему';
$string['linkedlogins'] = 'Связанные логины';
$string['linkedloginshelp'] = 'Справка по связанным логинам';
$string['loginerror_authenticationfailed'] = 'Процесс аутентификации завершился неудачно.';
$string['loginerror_cannotcreateaccounts'] = 'Не удалось найти учетную запись с вашим адресом электронной почты.';
$string['loginerror_invaliddomain'] = 'Такой адрес электронной почты не разрешен на этом сайте.';
$string['loginerror_nouserinfo'] = 'Информация о пользователе не возвращена. Служба OAuth 2 может быть настроена неправильно.';
$string['loginerror_userincomplete'] = 'Возвращенная информация о пользователе не содержит логина и адреса электронной почты. Служба OAuth 2 может быть настроена неправильно.';
$string['noissuersavailable'] = 'Ни одна из настроенных служб OAuth 2 не позволяет связать учетные записи';
$string['notenabled'] = 'Извините, метод аутентификации OAuth 2 не разрешен';
$string['notloggedindebug'] = 'Ошибка входа в систему. Причина: {$a}';
$string['notwhileloggedinas'] = 'Управление связанными логинами не возможно при входе в систему от лица другого пользователя.';
$string['oauth2:managelinkedlogins'] = 'Управлять собственными связанными учетными записями';
$string['plugindescription'] = 'Этот модуль аутентификации отображает на странице входа список настроенных поставщиков проверки подлинности. Выбор поставщика  позволяет пользователям входить в систему со своими учетными данными от поставщика OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Аутентификация OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Этот плагин подключается к подсистеме аутентификации.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Токен подтверждения.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Момент времени, когда закончится срок действия токена подтверждения.';
$string['privacy:metadata:auth_oauth2:email'] = 'Внешний адрес электронной почты, который сопоставлен этой учетной записи.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID поставщика OAuth 2 для этого входа OAuth 2.';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Учетные записи OAuth 2, связанные с учетной записью пользователя в Moodle.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Момент времени, когда учетная запись пользователя была связана со входом OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Момент времени, когда эта запись была изменена.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID учетной записи пользователя, с которой связан вход OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID пользователя, изменившего эту учетную запись.';
$string['privacy:metadata:auth_oauth2:username'] = 'Внешний логин, который сопоставлен этой учетной записи.';
