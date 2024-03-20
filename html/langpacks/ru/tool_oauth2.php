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
 * Strings for component 'tool_oauth2', language 'ru', version '4.1'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Я понимаю, что отключение проверки электронной почты может привести к проблемам с безопасностью.';
$string['acceptrisk_help'] = 'Отключение проверки электронной почты потенциально позволяет пользователям аутентифицироваться под другим именем.';
$string['authconfirm'] = 'Это действие предоставит постоянный доступ API к Moodle для аутентифицированной учетной записи. Это предназначено для использования в качестве системной учетной записи для управления файлами, принадлежащими Moodle.';
$string['authconnected'] = 'Системная учетная запись теперь подключена для автономного доступа';
$string['authnotconnected'] = 'Системная учетная запись не была подключена для автономного доступа';
$string['clever_service'] = 'Clever';
$string['configured'] = 'Настроенные';
$string['configuredstatus'] = 'Настроенные';
$string['connectsystemaccount'] = 'Подключение к системной учетной записи';
$string['createfromtemplate'] = 'Создать службу OAuth 2 из шаблона';
$string['createfromtemplatedesc'] = 'Выберите ниже один из шаблонов службы OAuth 2, чтобы создать службу OAuth с допустимой конфигурацией одного из известных типов служб. Он создаст службу OAuth 2 со всеми правильными конечными точками и параметрами, необходимыми для аутентификации, хотя вам все равно потребуется ввести ID пользователя и ключ для новой службы, прежде чем она сможет использоваться.';
$string['createnewendpoint'] = 'Создать новую конечную точку для эмитента «{$a}»';
$string['createnewfacebookissuer'] = 'Создать новую службу Facebook';
$string['createnewgoogleissuer'] = 'Создать новую службу Google';
$string['createnewissuer'] = 'Создание новой персонализированной службы';
$string['createnewmicrosoftissuer'] = 'Создание новой службы Microsoft';
$string['createnewnextcloudissuer'] = 'Создать новую службу Nextcloud';
$string['createnewservice'] = 'Создать новую службу:';
$string['createnewuserfieldmapping'] = 'Создать сопоставление новых пользовательских полей для эмитента «{$a}»';
$string['custom_service'] = 'Пользовательская';
$string['deleteconfirm'] = 'Вы уверены, что хотите удалить эмитента «{$a}»? Все плагины, зависящие от этого эмитента, перестанут работать.';
$string['deleteendpointconfirm'] = 'Вы уверены, что хотите удалить конечную точку "{$a->endpoint}" для эмитента "{$a->Issuer}"? Все плагины, использующие эту конечную точку, перестанут работать.';
$string['deleteuserfieldmappingconfirm'] = 'Вы уверены, что хотите удалить сопоставление пользовательских полей для эмитента «{$a}»?';
$string['discovered'] = 'Успешное открытие службы';
$string['discovered_help'] = 'Обнаружение означает, что конечные точки OAuth 2 могут быть автоматически определены из базового URL-адреса для службы OAuth. Не все службы должны быть «обнаружены», но если это не так, то конечные точки и информацию о сопоставлении пользователей необходимо будет вводить вручную.';
$string['discoverystatus'] = 'Обнаружение';
$string['editendpoint'] = 'Изменить конечную точку: {$a->endpoint} для эмитента {$a->issuer}';
$string['editendpoints'] = 'Настройка конечных точек';
$string['editissuer'] = 'Изменить эмитента идентичности: {$a}';
$string['edituserfieldmapping'] = 'Изменить сопоставление пользовательских полей для эмитента {$a}';
$string['edituserfieldmappings'] = 'Настройка сопоставлений полей пользователя';
$string['endpointdeleted'] = 'Конечная точка удалена';
$string['endpointname'] = 'Имя';
$string['endpointname_help'] = 'Ключ, используемый для поиска этой конечной точки. Должен заканчиваться на «_endpoint».';
$string['endpointsforissuer'] = 'Конечные точки для эмитента: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL для этой конечной точки. Необходимо использовать протокол https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Домены входа';
$string['issueralloweddomains_help'] = 'Этот установленный параметр представляет собой разделенный запятыми список доменов, которым будет разрешен вход при использовании этого провайдера.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'Базовый URL-адрес службы';
$string['issuerbaseurl_help'] = 'Базовый URL-адрес, используемый для доступа к службе.';
$string['issuerclientid'] = 'ID пользователя';
$string['issuerclientid_help'] = 'ID клиента OAuth для этого эмитента.';
$string['issuerclientsecret'] = 'Пароль клиента';
$string['issuerclientsecret_help'] = 'Пароль клиента OAuth для этого эмитента.';
$string['issuerdeleted'] = 'Эмитент удален';
$string['issuerdisabled'] = 'Эмитент отключен';
$string['issuerenabled'] = 'Эмитент включен';
$string['issuerimage'] = 'URL-адрес логотипа';
$string['issuerimage_help'] = 'URL-адрес изображения, используемого для отображения логотипа этого эмитента. Может отображаться на странице входа в систему.';
$string['issuerloginpagename'] = 'Название, отображаемое на странице входа в систему';
$string['issuerloginpagename_help'] = 'Если указано, то это название будет использоваться на странице входа вместо названия службы.';
$string['issuerloginparams'] = 'Дополнительные параметры, включенные в запрос на вход.';
$string['issuerloginparams_help'] = 'Для чтения основного профиля пользователя некоторые системы требуют дополнительных параметров запроса на вход.';
$string['issuerloginparamsoffline'] = 'Дополнительные параметры, включенные в запрос на вход для автономного доступа.';
$string['issuerloginparamsoffline_help'] = 'Каждая система OAuth определяет различный способ запроса автономного доступа. Например. Google требует дополнительных параметров: «access_type=offline&prompt=consent». Эти параметры должны быть в формате  запроса URL.';
$string['issuerloginscopes'] = 'Области, включенные в запрос на вход.';
$string['issuerloginscopes_help'] = 'Некоторые системы требуют дополнительных областей для запроса на вход, чтобы прочитать основной профиль пользователя. Стандартными областями для системы, совместимой с OpenID Connect, являются «электронная почта с открытым доступом».';
$string['issuerloginscopesoffline'] = 'Области, включенные в запрос на вход для автономного доступа.';
$string['issuerloginscopesoffline_help'] = 'Каждая система OAuth определяет свой способ запроса автономного доступа. Например. Microsoft требует дополнительной области «offline_access».';
$string['issuername'] = 'Название';
$string['issuername_help'] = 'Название эмитента. Может отображаться на странице входа в систему.';
$string['issuerrequireconfirmation'] = 'Требовать подтверждение адреса электронной почты';
$string['issuerrequireconfirmation_help'] = 'Требовать, чтобы все пользователи подтвердили свой адрес электронной почты, прежде чем они смогут войти в систему с помощью OAuth. Это относится к вновь создаваемым учетным записям при входе в систему или когда существующая учетная запись Moodle подключается к OAuth через соответствующие адреса электронной почты.';
$string['issuers'] = 'Эмитенты';
$string['issuersetup'] = 'Подробные инструкции по настройке общих служб OAuth 2';
$string['issuersetuptype'] = 'Подробные инструкции по настройке поставщика OAuth 2 {$a}';
$string['issuershowonloginpage'] = 'Показать на странице входа';
$string['issuershowonloginpage_help'] = 'Если включен плагин аутентификации OAuth 2, этот идентификатор входа будет указан на странице входа, чтобы пользователи могли войти в систему с учетными записями от этого эмитента.';
$string['issuersservicesallow'] = 'Разрешить службы';
$string['issuersservicesnotallow'] = 'Не разрешать службы';
$string['issuerusedforinternal'] = 'Внутренние службы';
$string['issuerusedforlogin'] = 'Логин';
$string['issuerusein'] = 'Эту службу могут использовать:';
$string['issuerusein_help'] = 'Службы OAuth 2 могут использоваться для внутренних служб, на странице входа или в обоих случаях, если требуется.';
$string['issueruseineverywhere'] = 'Страница входа и внутренние службы';
$string['issueruseininternalonly'] = 'Только внутренние службы';
$string['issueruseinloginonly'] = 'Только страница входа';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Отображать на странице входа как';
$string['loginissuer'] = 'Вход разрешен';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Не настроено';
$string['notdiscovered'] = 'Не удалось обнаружить службу';
$string['notloginissuer'] = 'Вход не разрешен';
$string['pluginname'] = 'Службы OAuth 2';
$string['privacy:metadata'] = 'Плагин служб OAuth 2 не хранит никаких личных данных.';
$string['savechanges'] = 'Сохранить изменения';
$string['serviceshelp'] = 'Инструкции по настройке поставщика службы.';
$string['systemaccountconnected'] = 'Системная учетная запись подключена';
$string['systemaccountconnected_help'] = 'Системные учетные записи используются для обеспечения расширенной функциональности для плагинов.  Только для функций входа в систему они не требуются, но другие плагины, использующие службу OAuth, могут предлагать уменьшенный набор функций, если системная учетная запись не была подключена. Например,  без системной учетной записи репозитории не могут поддерживать «управляемые ссылки» для выполнения операций с файлами.';
$string['systemaccountnotconnected'] = 'Системная учетная запись не подключена';
$string['systemauthstatus'] = 'Системная учетная запись подключена';
$string['usebasicauth'] = 'Запрашивать токены аутентификации через заголовки HTTP';
$string['usebasicauth_help'] = 'Использовать схему проверки подлинности HTTP Basic при отправке ID клиента и пароля с запросом на обновление токена. Рекомендуется стандартом OAuth 2, но может быть недоступен у некоторых эмитентов.';
$string['userfieldexternalfield'] = 'Имя внешнего поля';
$string['userfieldexternalfield_error'] = 'Это поле не может содержать HTML.';
$string['userfieldexternalfield_help'] = 'Имя поля, предоставленного внешней системой OAuth.';
$string['userfieldinternalfield'] = 'Имя внутреннего поля';
$string['userfieldinternalfield_help'] = 'Имя поля пользователя Moodle, которое должно отображаться из внешнего поля.';
$string['userfieldmappingdeleted'] = 'Сопоставление поля пользователя удалено';
$string['userfieldmappingsforissuer'] = 'Сопоставления пользовательских полей для эмитента: {$a}';
