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
 * Strings for component 'webservice', language 'ru', version '4.5'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Исключительная ситуация контроля доступа';
$string['actwebserviceshhdr'] = 'Активные протоколы веб-служб';
$string['addaservice'] = 'Добавить службу';
$string['addcapabilitytousers'] = 'Проверить права пользователей';
$string['addcapabilitytousersdescription'] = 'Пользователи должны иметь два права — «webservice:createtoken» и право, связанное с используемым протоколом, например, «webservice/rest:use», «webservice/soap:use». Для этого создайте для веб-службы отдельную роль, дайте ей соответствующие права и назначьте ее пользователям веб-службы на странице назначения глобальных ролей.';
$string['addexternalservice'] = 'Добавить внешнюю службу';
$string['addfunction'] = 'Добавить функцию';
$string['addfunctionhelp'] = 'Выберите функцию, добавляемую к службе.';
$string['addfunctions'] = 'Добавить функции';
$string['addfunctionsdescription'] = 'Выберите необходимые функции для вновь созданной службы.';
$string['addrequiredcapability'] = 'Назначение (отмена назначения) необходимых прав';
$string['addservice'] = 'Добавить новую службу: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Добавить функции службы «{$a}»';
$string['allusers'] = 'Все пользователи';
$string['apiexplorer'] = 'Проводник API';
$string['apiexplorernotavalaible'] = 'Проводник API недоступен';
$string['arguments'] = 'Аргументы';
$string['authmethod'] = 'Способ аутентификации';
$string['callablefromajax'] = 'Вызывается из AJAX';
$string['cannotcreatetoken'] = 'Нет разрешения на создание веб-службы, отмеченной для службы {$a}.';
$string['cannotgetcoursecontents'] = 'Не удается получить содержание курса';
$string['checkusercapability'] = 'Проверить права пользователя';
$string['checkusercapabilitydescription'] = 'У пользователя должны быть соответствующие права, связанные с используемыми протоколами, например «webservice/rest:use», «webservice/soap:use». Для этого создайте для веб-службы отдельную роль, дайте ей соответствующие права и назначьте ее пользователю веб-службы на странице назначения глобальных ролей.';
$string['configwebserviceplugins'] = 'По соображениям безопасности следует включать только те протоколы, которые действительно используются.';
$string['context'] = 'Контекст';
$string['createservicedescription'] = 'Задайте набор функций веб-службы. Это позволит пользователю получить доступ к новой службе. На странице <strong>Добавить службу</strong> отметьте параметры «Включено» и «Только авторизованные пользователи». Выберите вариант «Никакие дополнительные права не требуются».';
$string['createserviceforusersdescription'] = 'Задайте набор функций веб-службы. Это позволит пользователям получить доступ к новой службе. На странице <strong>Добавить службу</strong> отметьте параметр «Включена». НЕ отмечайте параметр «Только авторизованные пользователи» . Выберите вариант «Никакие дополнительные права не требуются».';
$string['createtoken'] = 'Создать ключ';
$string['createtokenforuser'] = 'Создать ключ для пользователя';
$string['createtokenforuserdescription'] = 'Создайте ключ для пользователя веб-службы';
$string['createuser'] = 'Создать специального пользователя';
$string['createuserdescription'] = 'Для представления системы, которая будет управлять Moodle требуется специальный пользователь.';
$string['criteriaerror'] = 'Отсутствует разрешение для поиска по критериям';
$string['default'] = 'По умолчанию - «{$a}»';
$string['deleteaservice'] = 'Удалить службу';
$string['deleteservice'] = 'Удалить службу: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Удаление службы приведет к удалению всех ключей, связанных с этой службой. Вы действительно хотите удалить внешнюю службу «{$a}»?';
$string['deletetoken'] = 'Удалить токен';
$string['deletetokenconfirm'] = 'Вы действительно хотите удалить ключ пользователя <strong>{$a->user}</strong> для веб-службы <strong>«{$a->service}»</strong>?';
$string['deprecated'] = 'Устарело';
$string['disabledwarning'] = 'Все протоколы веб-служб отключены. Параметр «Включить веб-службы» можно на странице «Администрирование - Расширенные возможности».';
$string['doc'] = 'Документация';
$string['docaccessrefused'] = 'Вам не разрешено просматривать документацию, свзанную с этим ключом.';
$string['downloadfiles'] = 'Можно скачивать файлы';
$string['downloadfiles_help'] = 'При включенном параметре любой пользователь может скачать файлы с их ключами безопасности. Конечно, они ограничены файлами, которые загружены на сайт.';
$string['editaservice'] = 'Редактировать службу';
$string['editexternalservice'] = 'Редактировать внешнюю службу';
$string['editservice'] = 'Редактировать службу: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Включена';
$string['enabledocumentation'] = 'Включить информацию для разработчиков';
$string['enabledocumentationdescription'] = 'Для включенных протоколов доступна подробная документация по использованию веб-службах.';
$string['enableprotocols'] = 'Включить протоколы';
$string['enableprotocolsdescription'] = 'Необходимо включить хотя бы один протокол. По соображениям безопасности следует включать только те протоколы, которые будут использоваться.';
$string['enablews'] = 'Включить веб-службы';
$string['enablewsdescription'] = 'Необходимо включить веб-службы на странице «Администрирование - Расширенные возможности».';
$string['entertoken'] = 'Введите ключ безопасности:';
$string['error'] = 'Ошибка: {$a}';
$string['errorcatcontextnotvalid'] = 'Вы не можете выполнять функции в контексте категории (id категории:{$a->catid}). Сообщение об ошибке контекста: {$a->message}';
$string['errorcodes'] = 'Сообщение об ошибке';
$string['errorcoursecontextnotvalid'] = 'Вы не можете выполнять функции в контексте курса (id курса:{$a->catid}). Сообщение об ошибке контекста: {$a->message}';
$string['errorinvalidparam'] = 'Недопустимый параметр «{$a}».';
$string['errornotemptydefaultparamarray'] = 'Параметр с именем «{$a}» в описании веб-службы является одиночной или множественной структурой. По умолчанию может использоваться только пустой массив. Сверьтесь с документацией веб-службы.';
$string['erroroptionalparamarray'] = 'Параметр с именем «{$a}» в описании веб-службы является одиночной или множественной структурой. Он не может быть установлен в виде VALUE_OPTIONAL. Проверьте описание веб-службы.';
$string['eventwebservicefunctioncalled'] = 'Осуществлен вызов функции веб-службы';
$string['eventwebserviceloginfailed'] = 'Ошибка авторизации в веб-службе';
$string['eventwebserviceservicecreated'] = 'Веб-служба создана';
$string['eventwebserviceservicedeleted'] = 'Веб-служба удалена';
$string['eventwebserviceserviceupdated'] = 'Веб-служба обновлена';
$string['eventwebserviceserviceuseradded'] = 'Пользователь веб-службы добавлен';
$string['eventwebserviceserviceuserremoved'] = 'Пользователь веб-службы удален';
$string['eventwebservicetokencreated'] = 'Ключ веб-службы создан';
$string['eventwebservicetokensent'] = 'Ключ веб-службы отправлен';
$string['execute'] = 'Выполнить';
$string['executewarnign'] = 'ВНИМАНИЕ: Если Вы нажмете «Выполнить», то база данных будет изменена и изменения не смогут быть отменены автоматически!';
$string['externalservice'] = 'Внешняя служба';
$string['externalservicefunctions'] = 'Функции внешних служб';
$string['externalservices'] = 'Внешние службы';
$string['externalserviceusers'] = 'Пользователи внешней службы';
$string['failedtolog'] = 'Не удалось войти';
$string['filenameexist'] = 'Название файла уже существует: {$a}';
$string['forbiddenwsuser'] = 'Нельзя создать ключ для неподтвержденной, удаленной, заблокированной или гостевой учетной записи.';
$string['function'] = 'Функция';
$string['functions'] = 'Функции';
$string['generalstructure'] = 'Основная структура';
$string['information'] = 'Информация';
$string['installexistingserviceshortnameerror'] = 'Веб-служба с кратким названием «{$a}» уже существует. Невозможно установить/обновить другую веб-службу с этим кратким названием.';
$string['installserviceshortnameerror'] = 'Ошибка кодирования: краткое название службы «{$a}» должно содержать только цифры, буквы и знаки «_», «-», «.».';
$string['invalidextparam'] = 'Неверный параметр внешнего API: {$a}';
$string['invalidextresponse'] = 'Неверный ответ внешнего API: {$a}';
$string['invalidiptoken'] = 'Ключ недействителен - этот IP-адрес не разрешен';
$string['invalidtimedtoken'] = 'Ключ недействителен - ключ истек';
$string['invalidtoken'] = 'Ключ недействителен - ключ не найден.';
$string['iprestriction'] = 'Ограничение IP-адресов';
$string['iprestriction_help'] = 'Пользователю нужно будет вызвать веб-службу с перечисленных (через запятую) IP-адресов.';
$string['key'] = 'Ключ';
$string['keyshelp'] = 'Ключи используются для предоставления внешним приложениям доступа к Вашей учетной записи Moodle.';
$string['loginrequired'] = 'Только для пользователей, вошедших в систему';
$string['manageprotocols'] = 'Управление протоколами';
$string['managetokens'] = 'Управление ключами';
$string['missingcaps'] = 'Отсутствуют права';
$string['missingcaps_help'] = 'Список необходимых прав для использования службы, которые отсутствуют у выбранного пользователя. Недостающие права должны быть добавлены к роли пользователя, чтобы он мог использовать службу.';
$string['missingpassword'] = 'Отсутствует пароль';
$string['missingrequiredcapability'] = 'Требуется возможность {$a}.';
$string['missingusername'] = 'Отсутствует логин';
$string['missingversionfile'] = 'Ошибка в исходном коде: отсутствует файл version.php для компонента «{$a}»';
$string['nameexists'] = 'Это имя уже используется другой службой';
$string['nocapabilitytouseparameter'] = 'Пользователь не имеет права использовать параметр {$a}';
$string['nofunctions'] = 'Эта служба не имеет функций.';
$string['norequiredcapability'] = 'Никакие дополнительные права не требуются';
$string['notoken'] = 'Список ключей безопасности пуст';
$string['onesystemcontrolling'] = 'Разрешить внешней системе контролировать Moodle';
$string['onesystemcontrollingdescription'] = 'Следующие шаги помогут Вам настроить веб-службы Moodle таким образом, чтобы разрешить внешней системе взаимодействовать с Moodle. Эти действия включают настройку аутентификации с использованием ключей безопасности (токенов).';
$string['onlyseecreatedtokens'] = 'Вы можете только просматривать созданные вами токены.';
$string['operation'] = 'Операция';
$string['optional'] = 'Необязательно';
$string['passwordisexpired'] = 'Пароль истек.';
$string['phpparam'] = 'XML-RPC (структура PHP)';
$string['phpresponse'] = 'XML-RPC (структура PHP)';
$string['postrestparam'] = 'PHP код для REST (запрос POST)';
$string['potusers'] = 'Не аутентифицированные пользователи';
$string['potusersmatching'] = 'Подходящие не аутентифицированные пользователи';
$string['print'] = 'Печатать всё';
$string['privacy:metadata'] = 'API веб-службы не хранит никаких данных';
$string['protocol'] = 'Протокол';
$string['removefunction'] = 'Удалить';
$string['removefunctionconfirm'] = 'Вы действительно хотите удалить функцию «{$a->function}» для службы «{$a->service}»?';
$string['requireauthentication'] = 'Этот метод требует аутентификации с правами xxx.';
$string['required'] = 'Требуется';
$string['requiredcapability'] = 'Необходимо иметь право';
$string['requiredcapability_help'] = 'Если параметр установлен, то доступ к службе смогут получить только пользователи, имеющие указанное здесь право.';
$string['requiredcaps'] = 'Необходимые права';
$string['resettokencomplete'] = 'Выбранный токен был сброшен';
$string['resettokenconfirm'] = 'Вы действительно хотите сбросить ключ этой веб-службы пользователю  <strong>{$a->user}</strong> для службы <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Вы действительно хотите сбросить этот ключ? Любые сохраненные ссылки, содержащие старый ключ, больше не будут работать.';
$string['response'] = 'Ответ';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Прежде чем получить ключ, восстановленной учетной записи необходимо сбросить пароль.';
$string['restparam'] = 'REST (параметры POST)';
$string['restrictedusers'] = 'Только авторизованные пользователи';
$string['restrictedusers_help'] = 'Этот параметр определяет, смогут ли все пользователи с правом создания ключа веб-службы создавать ключ для этой службы на странице управления ключами безопасности, или же только авторизованные пользователи смогут это делать.';
$string['securitykey'] = 'Ключ безопасности (токен)';
$string['securitykeys'] = 'Ключи безопасности';
$string['selectauthorisedusers'] = 'Выберите авторизованных пользователей';
$string['selectedcapability'] = 'Выбранные';
$string['selectedcapabilitydoesntexit'] = 'Право «{$a}», установленное ранее как необходимое, больше не существует. Пожалуйста, измените его и сохраните изменения.';
$string['selectservice'] = 'Выбрать службу';
$string['selectspecificuser'] = 'Выбрать определенного пользователя';
$string['selectspecificuserdescription'] = 'Добавьте пользователя веб-службы в список авторизованных пользователей веб-службы.';
$string['service'] = 'Служба';
$string['servicehelpexplanation'] = 'Служба - это набор функций. К службе могут иметь доступ все пользователи или только определенные пользователи.';
$string['servicename'] = 'Имя службы';
$string['servicenotavailable'] = 'Веб-служба недоступна (она не существует или отключена)';
$string['servicerequireslogin'] = 'Веб-служба недоступна. (Сеанс завершён или истёк.)';
$string['servicesbuiltin'] = 'Встроенные службы';
$string['servicescustom'] = 'Пользовательские службы';
$string['serviceusers'] = 'Авторизованные пользователи';
$string['serviceusersettings'] = 'Настройки пользователя';
$string['serviceusersmatching'] = 'Подходящие авторизованные пользователи';
$string['serviceuserssettings'] = 'Изменить параметры для авторизованных пользователей';
$string['shortnametaken'] = 'Краткое название уже используется для другой службы ({$a})';
$string['simpleauthlog'] = 'Простой авторизованный вход';
$string['step'] = 'Шаг';
$string['supplyinfo'] = 'Подробнее';
$string['testauserwithtestclientdescription'] = 'Проверьте доступ к веб-службам извне при помощи клиента для тестирования веб-служб. Перед тем, как воспользоваться им, войдите в систему от имени пользователя, имеющего право «moodle/webservice:createtoken» и создайте ключ безопасности (токен), используя страницу настроек пользователя. Вам потребуется этот ключ для работы с клиентом для тестирования. В клиенте для тестирования веб-служб выберите включенный протокол, поддерживающий аутентификацию с использованием секретного ключа (токена). <strong>ПРЕДУПРЕЖДЕНИЕ: Функции, которые Вы тестируете, БУДУТ ПО-НАСТОЯЩЕМУ ЗАПУЩЕНЫ от имени соответствующего пользователя, так что будьте осторожны, выбирая, что именно тестировать!</strong>';
$string['testclient'] = 'Клиент для тестирования веб-служб';
$string['testclientdescription'] = '* Клиент для тестирования веб-служб <strong>запускает</strong> функции <strong>ПО-НАСТОЯЩЕМУ</strong>. Не тестируйте неизвестные Вам функции.<br/>* Не все существующие функции веб-служб реализованы в клиенте для тестирования.<br/>* Для проверки того, что пользователь не может получить доступ к некоторым функциям, Вы можете попробовать запустить некоторые функции, которые Вам не разрешены.<br/>* Чтобы увидеть более подробные сообщения об ошибках, установите режим отладки (параметре {$a->atag}) в значение <strong>{$a->mode}</strong>.';
$string['testwithtestclient'] = 'Проверьте работоспособность службы';
$string['testwithtestclientdescription'] = 'Имитировать внешний доступ к службе с использованием тестовый клиент веб-службы. Используйте включенный протокол с аутентификацией через ключ. <strong>ПРЕДУПРЕЖДЕНИЕ: Функции, которые Вы проверяете БУДУТ ЗАПУЩЕНЫ, поэтому будьте осторожны во время теста! </strong>';
$string['token'] = 'Ключ безопасности (токен)';
$string['tokenauthlog'] = 'Аутентификация с помощью ключа безопасности (токена)';
$string['tokencopied'] = 'Текст скопирован в буфер обмена.';
$string['tokencreatedbyadmin'] = 'Может быть сброшен только администратором (*)';
$string['tokencreator'] = 'Создатель';
$string['tokenfilter'] = 'Фильтр токенов';
$string['tokenfilterreset'] = 'Показать все ключи';
$string['tokenfiltersubmit'] = 'Показать только сопоставленные токены';
$string['tokenname'] = 'Имя';
$string['tokennamehint'] = 'Если вы не введете имя, то будет использоваться случайное имя.';
$string['tokennameprefix'] = 'Веб-служба - {$a}';
$string['tokennewmessage'] = 'Скопируйте токен сейчас. Он больше не будет отображаться после того, как вы покинете эту страницу.';
$string['unknownoptionkey'] = 'Неизвестный ключ параметра ({$a})';
$string['unnamedstringparam'] = 'Строковой параметр не имеет названия.';
$string['updateusersettings'] = 'Обновить';
$string['uploadfiles'] = 'Разрешить загрузку файлов';
$string['uploadfiles_help'] = 'При включенном параметре любой пользователь сможет загружать файлы с использование ключей безопасности в свою область личных файлов или в область для файлов-черновиков. К любому файлу пользователя будут применяться соответствующие квоты.';
$string['userasclients'] = 'Пользователи в качестве клиентов';
$string['userasclientsdescription'] = 'Следующие шаги помогут Вам настроить веб-службы Moodle таким образом, чтобы разрешить пользователям подключаться к Moodle. Эти действия включают настройку аутентификации с использованием ключей безопасности (токенов). В этом случае пользователи должны будут самостоятельно сгенерировать себе ключи безопасности (токены) на странице соответствующей странице настроек пользователя.';
$string['usermissingcaps'] = 'Отсутствующие права: {$a}';
$string['usernameorid'] = 'Логин / идентификатор пользователя';
$string['usernameorid_help'] = 'Введите логин или идентификатор пользователя.';
$string['usernotallowed'] = 'Пользователь не разрешен для этой службы. В первую очередь Вам нужно разрешить этого пользователя на странице управления разрешенными пользователями {$a}';
$string['userservices'] = 'Службы пользователя: {$a}';
$string['usersettingssaved'] = 'Настройки пользователя сохранены';
$string['validuntil'] = 'Действителен до';
$string['validuntil_empty'] = 'У этого токена нет срока годности.';
$string['validuntil_help'] = 'Если параметр установлен, то для этого пользователя служба будет отключена после указанной даты';
$string['webservice'] = 'Веб-служба';
$string['webservices'] = 'Веб-службы';
$string['webservicesoverview'] = 'Обзор';
$string['webservicetokens'] = 'Ключи веб-службы';
$string['wrongusernamepassword'] = 'Неверный логин или пароль';
$string['wsaccessuserdeleted'] = 'Оказано в доступе к веб-службе для удаленного пользователя: {$a}';
$string['wsaccessuserexpired'] = 'Оказано в доступе к веб-службе для пользователя с истекшим паролем: {$a}';
$string['wsaccessusernologin'] = 'Оказано в доступе к веб-службе для неавторизованного пользователя: {$a}';
$string['wsaccessusersuspended'] = 'Оказано в доступе к веб-службе для приостановленного пользователя: {$a}';
$string['wsaccessuserunconfirmed'] = 'Оказано в доступе к веб-службе для неподтвержденного пользователя: {$a}';
$string['wsclientdoc'] = 'Документация клиента веб-службы Moodle';
$string['wsdocapi'] = 'Документация API';
$string['wsdocumentation'] = 'Документация веб-службы';
$string['wsdocumentationdisable'] = 'Документация веб-службы отключена';
$string['wsdocumentationintro'] = 'Перед созданием клиента рекомендуется прочитать {$a->doclink}';
$string['wsdocumentationlogin'] = 'или введите для веб-службы логин и пароль:';
$string['wspassword'] = 'Пароль для доступа к веб-службе';
$string['wsusername'] = 'Логин для доступа к веб-службе';
