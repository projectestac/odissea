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
 * Strings for component 'enrol_lti', language 'ru', version '4.1'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Добавить содержимое';
$string['adddeployment:deploymentid'] = 'ID размещения';
$string['adddeployment:deploymentid_help'] = 'Каждому размещению инструмента (этого сайта) на платформе будет присвоен уникальный ID размещения. ID размещения должен быть зарегистрирован для инструмента (на этом сайте), прежде чем будет разрешен запуск из соответствующего размещения инструмента.';
$string['adddeployment:invaliddeploymentiderror'] = 'Неверный ID размещения. Для этой регистрации приложения уже имеется ID размещения.';
$string['adddeployment:name'] = 'Название размещения';
$string['addtocourse'] = 'Добавить в курс';
$string['addtogradebook'] = 'Добавить в журнал оценок';
$string['allowframeembedding'] = 'Обратите внимание: Рекомендуется включить параметр сайта «Разрешить встраивание во фрейм», чтобы инструменты отображались внутри фрейма, а не в новом окне.';
$string['authltimustbeenabled'] = 'Обратите внимание: для этого плагина требуется, чтобы также был включен плагин аутентификации LTI.';
$string['cartridgeurl'] = 'URL картриджа';
$string['copiedtoclipboard'] = '{$a} скопирован в буфер обмена';
$string['copytoclipboard'] = 'Скопировать в буфер обмена';
$string['couldnotestablishproxy'] = 'Не удалось установить прокси с потребителем.';
$string['customproperties'] = 'Пользовательские свойства';
$string['deeplinkingurl'] = 'URL-адрес глубокой ссылки';
$string['deletedactivity'] = 'Активный элемент удален';
$string['deletedactivityalt'] = 'Удален активный элемент, совместно используемый этим экземпляром';
$string['deletedactivitydescription'] = 'Удален активный элемент, совместно используемый этим экземпляром. Вы можете выбрать другой элемент для совместного использования, отредактировав экземпляр, или, если он больше не нужен, вы можете просто удалить экземпляр. При удалении экземпляра будут удалены все связанные с ним зачисления пользователей.';
$string['deploymentadd'] = 'Добавить размещение';
$string['deploymentaddnotice'] = 'Размещение добавлено';
$string['deploymentdelete'] = 'Удалить размещение';
$string['deploymentdeleteconfirm'] = 'Предупреждение: Удаление размещения приведет к потере доступа для всех пользователей, перешедших по ссылкам на ресурсы, связанным с этим размещением инструмента на платформе. Службы синхронизации участников и оценок также будут удалены для этих ресурсов. Вы уверены, что хотите удалить ID размещения «{$a}»?';
$string['deploymentdeletenotice'] = 'Размещение удалено';
$string['deploymentid'] = 'ID размещения';
$string['deployments'] = 'Размещения';
$string['deploymentsinfo'] = 'ID размещения будет создан платформой, когда инструмент станет доступным в контексте. Это может произойти во время регистрации или позже, когда инструмент станет доступным для определенного курса или категории. ID размещения должен быть введен здесь перед разрешением запусков из развертывания этого инструмента.';
$string['details'] = 'Сведения';
$string['editplatformdetails'] = 'Редактировать сведения о платформе';
$string['endpointltiversionnotice'] = 'Приведенные ниже конечные точки инструмента предназначены только для ручной настройки LTI 1.3. Для более ранних версий (1.1/2.0) сведения для потребителей можно найти на странице «Опубликовано как инструменты LTI», доступной через навигацию курса.';
$string['enrolenddate'] = 'Дата окончания';
$string['enrolenddate_help'] = 'Если параметр включен, пользователи могут получить доступ только до этой даты.';
$string['enrolenddateerror'] = 'Дата окончания записи на курс не может быть раньше даты начала';
$string['enrolisdisabled'] = 'Плагин «Опубликовать как инструмент LTI» отключен.';
$string['enrolltiversionincorrect'] = 'Ресурс не настроен для использования поверх устаревшего LTI (версии 1.1/2.0). Свяжитесь с администратором этого инструмента.';
$string['enrolmentfinished'] = 'Запись на курс завершена.';
$string['enrolmentnotstarted'] = 'Запись на курс еще не началась.';
$string['enrolperiod'] = 'Продолжительность обучения';
$string['enrolperiod_help'] = 'Длина периода времени, в течение которого запись на курс будет активной, начиная с момента, когда пользователь записался из внешней системы. Если параметр отключен, продолжительность обучения будет неограниченной.';
$string['enrolstartdate'] = 'Дата начала';
$string['enrolstartdate_help'] = 'Если параметр включен, пользователи могут получить доступ только начиная с этой даты.';
$string['existingregistrationerror'] = 'Этот эмитент и ID клиента уже зарегистрирован.';
$string['failedrequest'] = 'Сбой запроса. Причина: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Для доступа к инструменту пожалуйста перейдите по ссылке внизу.';
$string['gradesync'] = 'Синхронизация оценок';
$string['gradesync_help'] = 'Передаются ли оценки из инструмента во внешнюю систему (клиент LTI).';
$string['incorrecttoken'] = 'Токен был неверным. Проверьте URL-адрес и попробуйте еще раз или обратитесь к администратору этого инструмента.';
$string['invalidexpiredregistrationurl'] = 'Недействительный или просроченный URL-адрес регистрации. Создайте новый URL-адрес регистрации и повторите попытку.';
$string['invalidrequest'] = 'Неверный запрос';
$string['invalidtoolconsumer'] = 'Неверный потребитель инструмента.';
$string['jwksurl'] = 'URL-адрес JWKS';
$string['launchdetails'] = 'Особенности запуска';
$string['launchdetails_help'] = 'Для настройки инструмента требуется URL-адрес картриджа (также называемый URL-адресом конфигурации) плюс пароль или URL-адрес запуска.';
$string['launchurl'] = 'URL-адрес запуска';
$string['loginurl'] = 'URL-адрес инициирования входа';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Особенности запуска';
$string['lti13launchdetails_help'] = 'URL-адрес запуска и настраиваемые свойства требуются только при ручной настройке ссылки на ресурс в платформе. Там, где это возможно, преподаватели должны отдавать предпочтение выбору контента (глубокие ссылки) для создания ссылок на ресурсы.';
$string['lti:config'] = 'Настраивать экземпляры способа записи на курс «Опубликовать как инструмент LTI»';
$string['lti:unenrol'] = 'Отчислить пользователей из курса';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Возникла проблема с получением конфигурации OpenID с платформы. Результат  - недействительный JSON. Проблема может быть вызвана настройкой заблокированных хостов. Убедитесь, что ваш сайт настроен для подключения к домену платформы, и повторите попытку, используя новый URL-адрес регистрации.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Неверные данные запуска или конфигурация инструмента. Не удалось найти размещение (ID размещения: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Неверные данные запуска. Ресурс «{$a}» недоступен или не существует.';
$string['ltiadvlauncherror:invalidregistration'] = 'Неверные данные запуска или конфигурация инструмента. Не удалось найти платформу регистрации (эмитент: {$a->platform}, ID клиента: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Неверные данные запуска. Необходим «ID» заявленного настраиваемого поля для запуска активного элемента или ресурса через LTI Advantage.';
$string['ltilegacy'] = 'Устаревшие версии LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Унаследованные инструменты LTI (1.1/2.0) устарели. Контентом теперь можно делиться с помощью LTI Advantage.';
$string['ltiversion'] = 'Версия LTI';
$string['ltiversion_help'] = 'Версия LTI, которая будет использоваться для доступа к опубликованному контенту.

LTI Advantage позволяет публиковать контент на предварительно зарегистрированных платформах без необходимости вносить изменения в платформу всякий раз, когда публикуется новый контент. Контракт безопасности заключается между платформой и инструментом.

Устаревшие версии (1.1 и 2.0) требуют, чтобы новая регистрация инструмента создавалась на потребителе для каждой части недавно опубликованного контента, поскольку каждая его часть имеет собственный контракт безопасности с сайтом потребителя и должна быть настроена в каждом конкретном случае.';
$string['managedeployments'] = 'Управление размещениями';
$string['maxenrolled'] = 'Максимальное число записанных пользователей';
$string['maxenrolled_help'] = 'Максимальное число внешних пользователей, которые могут получить доступ к инструменту. Если параметр равен 0, число записанных пользователей не будет ограничено.';
$string['maxenrolledreached'] = 'Достигнуто максимальное число внешних пользователей, которым разрешен доступ к инструменту.';
$string['membersync'] = 'Синхронизация пользователей';
$string['membersync_help'] = 'При выполнении запланированного задания синхронизировать ли зарегистрированных во внешней системе пользователей с зачислениями на этот курс, при необходимости создавая учетную запись для каждого отдаленного пользователя, а также зачислять или отчислять их при необходимости.

Если установлено значение «Нет», то при обращении отдаленного пользователя к инструменту для него будет создана учетная запись и он автоматически будет записан на курс.';
$string['membersyncmode'] = 'Режим синхронизации пользователей';
$string['membersyncmode_help'] = 'Должны ли внешние пользователи быть зачислены и/или отчислены из этого курса.';
$string['membersyncmodeenrolandunenrol'] = 'Зачислять новых и отчислять отсутствующих пользователей';
$string['membersyncmodeenrolnew'] = 'Зачислять новых пользователей';
$string['membersyncmodeunenrolmissing'] = 'Отчислять отсутствующих пользователей';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Размещения инструмента не найдены';
$string['nopublishedcontent'] = 'Ресурсы или активные элементы еще не опубликованы';
$string['noregisteredplatforms'] = 'Нет зарегистрированных платформ';
$string['notoolsprovided'] = 'Нет предоставляемых инструментов';
$string['opensslconfiginvalid'] = 'Для LTI 1.3 требуется, чтобы действующий файл openssl.cnf был настроен и доступен для вашего веб-сервера. Пожалуйста, свяжитесь с администратором сайта, чтобы настроить и включить openssl для этого сайта.';
$string['opentool'] = 'Открыть инструмент';
$string['platformdetails'] = 'Сведения о платформе';
$string['platformdetailsinfo'] = 'После того, как инструмент будет настроен на платформе для завершения регистрации здесь необходимо указать сведения о платформе.
<ul>
<li>Для динамических регистраций эта информация устанавливается автоматически и никаких дополнительных изменений не требуется.</li>
<li>Для регистрации вручную эту информацию необходимо вручную скопировать с платформы.</li>
</ul>';
$string['pluginname'] = 'Опубликовать как инструмент LTI';
$string['pluginname_desc'] = 'Плагин «Опубликовать как инструмент LTI», вместе с плагином аутентификации LTI, позволяет внешним пользователям получить доступ к курсам и элементам. Другими словами, Moodle функционирует как поставщик инструментов LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Список пользователей, зачисленных через поставщика LTI.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Время, когда пользователь последний раз обращался к курсу';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Последняя оценка пользователя была записана как имеющая силу';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Время, когда пользователь был зачислен';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID пользователя';
$string['provisioningmode'] = 'Режим подготовки';
$string['provisioningmode_help'] = 'Этот параметр определяет, как учетные записи обрабатываются при первом запуске. Поддерживается несколько режимов:
<ul>
<li>Только новые учетные записи (автоматически). Учетные записи будут автоматически созданы для пользователей, запускающихся с платформы. Это значение по умолчанию для студенческих запусков.</li>
<li>Имеющиеся и новые учетные записи (с подсказкой). Пользователю будет предоставлен выбор, что делать. Они могут связать имеющуюся учетную запись или создать для себя новую учетную запись. Это наиболее гибкий вариант, который используется по умолчанию для запуска учителем.</li>
<li>Только имеющиеся учетные записи (с подсказкой). Пользователю будет предложено связать имеющуюся учетную запись. Без этого он не сможет получить доступ к ресурсам инструмента.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Режим подготовки первого запуска студентом';
$string['provisioningmodeteacherlaunch'] = 'Режим подготовки первого запуска учителем';
$string['publishedcontent'] = 'Опубликованный контент';
$string['publishedcontent_help'] = 'Опубликованный ресурс или активный элемент можно использовать на зарегистрированных платформах путем выбора контента (глубокая ссылка). Кроме того, ссылку на ресурс можно создать на платформе вручную, используя URL-адрес запуска и предоставленные настраиваемые свойства.';
$string['registeredplatforms'] = 'Зарегистрированные платформы';
$string['registeredplatformsltiversionnotice'] = 'Перечисленные ниже платформы зарегистрированы для связи LTI 1.3. Для более ранних версий регистрация потребителя не требуется.';
$string['registerplatform:accesstokenurl'] = 'URL-адрес токена доступа';
$string['registerplatform:accesstokenurl_help'] = 'URL-адрес, на который инструмент будет отправлять запросы токена доступа. Будет предоставлено платформой.';
$string['registerplatform:authrequesturl'] = 'URL-адрес запроса аутентификации';
$string['registerplatform:authrequesturl_help'] = '';
$string['registerplatform:clientid'] = 'ID клиента';
$string['registerplatform:clientid_help'] = 'Строка, используемая для идентификации регистрации инструмента на платформе. Будет предоставлено платформой.';
$string['registerplatform:duplicateregistrationerror'] = 'Неверный ID клиента. Этот ID клиента уже зарегистрирован для предоставленного платформой ID.';
$string['registerplatform:invalidurlerror'] = 'Неправильный  URL-адрес. Вы указали http:// или https://?';
$string['registerplatform:jwksurl'] = 'URL-адрес открытого набора ключей';
$string['registerplatform:jwksurl_help'] = 'Открытый набор ключей или URL-адрес JWKS, используемый для получения открытого ключа платформы. Будет предоставлено платформой.';
$string['registerplatform:name'] = 'Название платформы';
$string['registerplatform:name_help'] = 'Краткое название, описывающее платформу. Его можно изменить в любое время.';
$string['registerplatform:platformid'] = 'ID платформы (эмитента)';
$string['registerplatform:platformid_help'] = 'URL-адрес, идентифицирующий стороннюю учебную платформу. Будет предоставлен платформой.';
$string['registerplatformadd'] = 'Зарегистрировать платформу';
$string['registerplatformaddnotice'] = 'Добавлена регистрация платформы';
$string['registerplatformdelete'] = 'Удалить регистрацию платформы';
$string['registerplatformdeleteconfirm'] = 'Вы уверены, что хотите удалить регистрацию для платформы «{$a}»? Это также удалит все размещения инструментов, хранящиеся в этой регистрации.';
$string['registerplatformdeletenotice'] = 'Регистрация платформы удалена';
$string['registerplatformedit'] = 'Редактировать регистрацию платформы';
$string['registerplatformeditnotice'] = 'Регистрация платформы обновлена';
$string['registration'] = 'Регистрация опубликованного инструмента';
$string['registrationdeeplinklabel'] = 'Добавить контент из {$a}';
$string['registrationdynamic'] = 'Динамическая регистрация';
$string['registrationmanual'] = 'Ручная регистрация';
$string['registrationresourcelinklabel'] = 'Запустить контент из {$a}';
$string['registrationstatus'] = 'Состояние';
$string['registrationstatusactive'] = 'Активное';
$string['registrationstatuspending'] = 'В ожидании';
$string['registrationurl'] = 'URL-адрес регистрации';
$string['registrationurl_help'] = 'Если используется URL-адрес регистрации (также называемый URL-адресом прокси), инструмент настраивается автоматически.';
$string['registrationurlinfomessage'] = 'Если платформа поддерживает динамическую регистрацию, используйте указанный ниже URL-адрес регистрации. Дополнительную информацию о динамической регистрации см. в документации по <a href="{$a}">Публикации инструмента LTI</a>.';
$string['remotesystem'] = 'Внешняя система';
$string['requirecompletion'] = 'Требуется завершение курса или выполнение элемента до синхронизации оценок';
$string['returnurlnotset'] = 'URL-адрес возврата не задан.';
$string['roleinstructor'] = 'Роль для учителя';
$string['roleinstructor_help'] = 'Роль, которая назначается в инструменте внешнему учителю.';
$string['rolelearner'] = 'Роль для студента';
$string['rolelearner_help'] = 'Роль, которая назначается в инструменте внешнему студенту.';
$string['secret'] = 'Секретный ключ';
$string['secret_help'] = 'Строка символов, которая является общей с внешней системой (клиентом LTI) для обеспечения доступа к инструменту.';
$string['sharedexternaltools'] = 'Опубликовать как инструменты LTI';
$string['successfulregistration'] = 'Успешная регистрация.';
$string['tasksyncgrades'] = 'Синхронизация оценок плагина «Опубликовать как инструмент LTI»';
$string['tasksyncmembers'] = 'Синхронизация пользователей плагина «Опубликовать как инструмент LTI»';
$string['tooldetails'] = 'Сведения об инструменте';
$string['toolsprovided'] = 'Опубликованные инструменты';
$string['toolsprovided_help'] = 'Инструмент можно использовать совместно с другим сайтом, предоставив либо сведения о запуске, либо URL-адрес регистрации.';
$string['tooltobeprovided'] = 'Инструмент, который должен быть опубликован';
$string['toolurl'] = 'URL инструмента';
$string['userdefaultvalues'] = 'Значения по умолчанию для пользователей';
$string['viewplatformdetails'] = 'Просмотр сведений о платформе';
$string['viewtoolendpoints'] = 'Просмотр конечных точек инструмента';
