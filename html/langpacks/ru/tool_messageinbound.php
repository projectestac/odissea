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
 * Strings for component 'tool_messageinbound', language 'ru', version '4.5'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Название класса';
$string['component'] = 'Компонент';
$string['configmessageinboundhost'] = 'Адрес сервера, на котором Moodle должен проверять почту. Чтобы задать порт не по умолчанию, Вы можете использовать формат [сервер]:[порт]; например,  mail.example.com:993. Если оставить это поле пустым, то Moodle будет использовать порт по умолчанию для указанного типа почтового сервера.';
$string['defaultexpiration'] = 'Значение по умолчанию срока действия адреса';
$string['defaultexpiration_help'] = 'Если адрес электронной почты формируется обработчиком, можно установить, что срок действия адреса автоматически истекает после некоторого времени и адрес больше не может использоваться.  Рекомендуется задать срок действия адреса.';
$string['description'] = 'Описание';
$string['domain'] = 'Почтовый домен';
$string['edit'] = 'Редактировать';
$string['edithandler'] = 'Изменить настройки для обработчика {$a}';
$string['editinghandler'] = 'Редактирование «{$a}»';
$string['enabled'] = 'Включено';
$string['fixedenabled_help'] = 'Вы не можете изменить состояние данного обработчика. Причиной может быть то, что обработчик используется другими обработчиками.';
$string['fixedvalidateaddress'] = 'Подтвердить адрес отправителя';
$string['fixedvalidateaddress_help'] = 'Вы не можете изменить подтверждение адреса для этого обработчика. Причиной может быть то, что обработчику требуются специфические настройки.';
$string['handlerdisabled'] = 'Обработчик электронной почты, с которым Вы пытаетесь связаться, был отключен. Обработать сообщение сейчас невозможно.';
$string['incomingmailconfiguration'] = 'Настройка входящей почты';
$string['incomingmailserversettings'] = 'Настройки сервера входящей почты';
$string['incomingmailserversettings_desc'] = 'Moodle может подключаться к настроенным соответствующим образом серверам IMAP. Здесь Вы можете указать параметры подключения к серверу IMAP.';
$string['invalid_recipient_handler'] = 'Если получено корректное сообщение, но нет возможности убедиться в подлинности отправителя, сообщение сохраняется на сервере электронной почты. В этом случае на адрес электронной почты, указанный в профиле отправителя, отсылается специальное письмо. Пользователю предоставляется возможность ответить на него, чтобы подтвердить подлинность исходного сообщения.

Этот обработчик отправляет такие ответы.

Отключить проверку отправителя, осуществляемую этим обработчиком, нельзя. Это связано с тем, что пользователь может отвечать с неправильного адреса электронной почты, если его клиент электронной почты настроен неверно.';
$string['invalid_recipient_handler_name'] = 'Обработчик некорректного отправителя';
$string['invalidrecipientdescription'] = 'Не удается проверить подлинность отправленного Вами сообщения с темой «{$a->subject}», так как сообщение было отправлено с адреса электронной почты, отличающегося от указанного в Вашем профиле пользователя. Чтобы подтвердить подлинность отправленного ранее сообщения, Вам необходимо ответить на это сообщение.';
$string['invalidrecipientdescriptionhtml'] = 'Не удается проверить подлинность отправленного Вами сообщения с темой «{$a->subject}», так как сообщение было отправлено с адреса электронной почты, отличающегося от указанного в Вашем профиле пользователя. Чтобы подтвердить подлинность отправленного ранее сообщения, Вам необходимо ответить на это сообщение.';
$string['invalidrecipientfinal'] = 'Не удается проверить подлинность отправленного Вами сообщения с темой «{$a->subject}». Пожалуйста, убедитесь, что Вы отправляете сообщение с адреса электронной почты, указанного в Вашем профиле Moodle.';
$string['mailbox'] = 'Имя почтового ящика';
$string['mailboxconfiguration'] = 'Настройки почтового ящика';
$string['mailboxdescription'] = '[адрес]+субадрес@[домен]';
$string['mailsettings'] = 'Настройки почты';
$string['message_handlers'] = 'Обработчики сообщений';
$string['messageinbound'] = 'Входящие сообщения';
$string['messageinboundenabled'] = 'Включить обработку входящей почты';
$string['messageinboundenabled_desc'] = 'Обработка входящей почты должна быть включена, чтобы сообщения отправлялись с соответствующей информацией.';
$string['messageinboundgeneralconfiguration'] = 'Основные настройки';
$string['messageinboundgeneralconfiguration_desc'] = 'Обработка входящих сообщений позволяет получать и обрабатывать электронную почту через Moodle. Это можно использовать для того, чтобы путем отправки сообщений электронной почты отвечать на сообщения на форумах или добавлять файлы в область личных файлов пользователя.';
$string['messageinboundhost'] = 'Сервер входящей почты';
$string['messageinboundhostoauth_help'] = 'Служба OAuth 2 для доступа к серверу IMAP с использованием аутентификации XOAUTH2. Если служба еще не существует, вам нужно будет её создать.';
$string['messageinboundhostpass'] = 'Пароль';
$string['messageinboundhostpass_desc'] = 'Пароль для работы с указанной учетной записью электронной почты.';
$string['messageinboundhostssl'] = 'Использовать SSL';
$string['messageinboundhostssl_desc'] = 'Некоторые почтовые серверы поддерживают дополнительный уровень защиты с помощью шифрования связи между Moodle и сервером. Рекомендуется использовать шифрование SSL, если сервер его поддерживает.';
$string['messageinboundhosttype'] = 'Тип сервера';
$string['messageinboundhostuser'] = 'Логин';
$string['messageinboundhostuser_desc'] = 'Это логин учетной записи электронной почты.';
$string['messageinboundmailboxconfiguration_desc'] = 'При отправке сообщений используется формат «address+данные@example.com». Чтобы система Moodle могла генерировать корректные адреса, укажите имя почтового ящика (будет использоваться в адресе перед знаком «@») и домен (будет использоваться после знака «@»). В приведенном примере имя почтового ящика будет «address», а домен электронной почты - «example.com». Для этой цели следует использовать отдельную учетную запись электронной почты.';
$string['messageprocessingerror'] = 'Вы недавно отправили по электронной почте сообщение с темой «{$a->subject}», но, к сожалению, оно не может быть обработано.

Более полная информация об ошибке показана ниже.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Вы недавно отправили по электронной почте сообщение с темой «{$a->subject}», но, к сожалению, оно не может быть обработано.</p>
<p>Более полная информация об ошибке показана ниже.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Письмо с Вашим сообщением на тему «{$a->subject}» не может быть обработано. Произошла следующая ошибка: «{$a->message}».';
$string['messageprocessingfailedunknown'] = 'Письмо с Вашим сообщением на тему «{$a->subject}» не может быть обработано. Обратитесь к системному администратору для получения дополнительной информации.';
$string['messageprocessingsuccess'] = '{$a->plain}

Если Вы не хотите получать такие уведомления в будущем, то можете отредактировать свои личные настройки сообщений, открыв в браузере ссылку {$a->messagepreferencesurl}';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Если Вы не хотите получать такие уведомления в будущем, то можете <a href="{$a->messagepreferencesurl}">отредактировать свои личные настройки обмена сообщениями</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Сообщения для подтверждения того, что входящие сообщения пришли именно от Вас';
$string['messageprovider:messageprocessingerror'] = 'Предупреждение, о том, что входящее сообщение не может быть обработано';
$string['messageprovider:messageprocessingsuccess'] = 'Подтверждение того, что сообщение было успешно обработано';
$string['name'] = 'Название';
$string['noencryption'] = 'Откл. - без шифрования';
$string['noexpiry'] = 'Срок действия не ограничен';
$string['oldmessagenotfound'] = 'Вы пытаетесь вручную подтвердить подлинность сообщения, однако сообщение не найдено. Это может произойти из-за того, что сообщение уже было обработано, или из-за того, что сообщение просрочено.';
$string['oneday'] = 'Один день';
$string['onehour'] = 'Один час';
$string['oneweek'] = 'Одна неделя';
$string['oneyear'] = 'Один год';
$string['pluginname'] = 'Настройка входящих сообщений';
$string['privacy:metadata:coreuserkey'] = 'Ключи пользователя для подтверждения полученного письма';
$string['privacy:metadata:messagelist'] = 'Список идентификаторов сообщений, не прошедших проверку и требующих дальнейшего решения.';
$string['privacy:metadata:messagelist:address'] = 'Адрес, на который было отправлено письмо';
$string['privacy:metadata:messagelist:messageid'] = 'ID сообщения';
$string['privacy:metadata:messagelist:timecreated'] = 'Время, когда была сделана запись';
$string['privacy:metadata:messagelist:userid'] = 'ID пользователя, которому нужно одобрить сообщение.';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Подтверждать адрес отправителя';
$string['ssl'] = 'SSL (Автоматическое определение версии SSL)';
$string['sslv2'] = 'SSLv2 (Принудительно использовать SSL версии 2)';
$string['sslv3'] = 'SSLv3 (Принудительно использовать SSL версии 3)';
$string['taskcleanup'] = 'Удаление неподтвержденной входящей почты';
$string['taskpickup'] = 'Получение входящих сообщений электронной почты';
$string['tls'] = 'TLS (TLS; с согласованием параметров соединения через не зашифрованное соединение на уровне протокола; РЕКОМЕНДУЕМЫЙ способ инициации защищенного соединения)';
$string['tlsv1'] = 'TLSv1 (прямое соединение с сервером по протоколу TLS 1.x)';
$string['validateaddress'] = 'Подтвердить электронный адрес отправителя';
$string['validateaddress_help'] = 'При получении сообщения от пользователя, Moodle сверяет адрес электронной почты отправителя с адресом электронной почты в профиле пользователя.

Если адрес не совпадают, то пользователь получает уведомление, чтобы подтвердить, что он действительно отправлял письмо.

Если этот параметр отключен, то адрес электронной почты отправителя не проверяется вообще.';
