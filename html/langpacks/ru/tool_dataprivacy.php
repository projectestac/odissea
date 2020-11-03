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
 * Strings for component 'tool_dataprivacy', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Элементы курса и ресурсы';
$string['addcategory'] = 'Добавить категорию';
$string['addnewdefaults'] = 'Добавить новый модуль по умолчанию';
$string['addpurpose'] = 'Добавить цель';
$string['addroleoverride'] = 'Добавить переопределение роли';
$string['approve'] = 'Одобрить';
$string['approverequest'] = 'Одобрить запрос';
$string['automaticdeletionrequests'] = 'Автоматическое создание запросов на  удаление данных';
$string['automaticdeletionrequests_desc'] = 'При включенном параметре запрос на удаление данных будет создан автоматически для любых учетных записей, удаленных вручную.';
$string['bulkapproverequests'] = 'Одобрить запросы';
$string['bulkdenyrequests'] = 'Отклонить запросы';
$string['cachedef_contextlevel'] = 'Уровни контекста цели и категории';
$string['cachedef_purpose'] = 'Цели данных';
$string['cachedef_purpose_overrides'] = 'Переопределение целей в инструменте конфиденциальности данных';
$string['cancelrequest'] = 'Отменить запрос';
$string['cancelrequestconfirmation'] = 'Вы действительно хотите отменить этот запрос данных?';
$string['cannotreset'] = 'Невозможно сбросить этот запрос. Только отклоненные запросы могут быть сброшены.';
$string['categories'] = 'Категории';
$string['categorieslist'] = 'Список категорий данных';
$string['category'] = 'Категория';
$string['categorycreated'] = 'Категория создана';
$string['categorydefault'] = 'Категория по умолчанию';
$string['categorydefault_help'] = 'Категория по умолчанию — это категория данных, применяемая ко всем новым экземплярам. Если выбрано «Наследовать», применяется категория данных из вышестоящего контекста. Контексты (снизу вверх): Блоки > Элементы курса > Курсы > Категории курсов > Пользователь > Сайт.';
$string['category_help'] = 'Категория в реестре данных описывает тип данных. Может быть добавлена новая категория или, если выбрано «Наследовать», применяется категория данных из вышестоящего контекста. Контектсы (снизу вверх): Блоки > Элементы курса > Курсы > Категории курсов > Сайт.';
$string['categoryupdated'] = 'Категория обновлена';
$string['close'] = 'Закрыть';
$string['confirmapproval'] = 'Вы действительно хотите одобрить этот запрос данных?';
$string['confirmbulkapproval'] = 'Вы действительно хотите массово одобрить выбранные запросы данных?';
$string['confirmbulkdenial'] = 'Вы действительно хотите массово отклонить выбранные запросы данных?';
$string['confirmcompletion'] = 'Вы действительно хотите отметить этот запрос пользователя как завершенный?';
$string['confirmcontextdeletion'] = 'Вы действительно хотите подтвердить удаление выбранных уровней? Это также удалит все пользовательские данные для их соответствующих подуровней.';
$string['confirmdenial'] = 'Вы действительно хотите отклонить этот запрос данных?';
$string['confirmrequestresubmit'] = 'Вы действительно хотите отменить текущее состояние «{$a->type}» запроса для пользователя {$a->username} и повторно отправить его?';
$string['contactdataprotectionofficer'] = 'Связь с сотрудником по вопросам конфиденциальности';
$string['contactdataprotectionofficer_desc'] = 'При включенном параметре пользователи смогут связаться с сотрудником по вопросам конфиденциальности и сделать запрос данных по ссылке на странице своего профиля.';
$string['contactdpoviaprivacypolicy'] = 'Пожалуйста, свяжитесь с сотрудником по конфиденциальности, как описано в политике конфиденциальности.';
$string['contextlevelname10'] = 'Сайт';
$string['contextlevelname30'] = 'Пользователи';
$string['contextlevelname40'] = 'Категории курсов';
$string['contextlevelname50'] = 'Курсы';
$string['contextlevelname70'] = 'Элементы курса';
$string['contextlevelname80'] = 'Блоки';
$string['contextpurposecategorysaved'] = 'Цель и категория сохранены.';
$string['createcategory'] = 'Создать категорию данных';
$string['createnewdatarequest'] = 'Создать новый запрос данных';
$string['createpurpose'] = 'Создать цель данных';
$string['creationauto'] = 'Автоматически';
$string['creationmanual'] = 'Вручную';
$string['datadeletion'] = 'Удаление данных';
$string['datadeletionpagehelp'] = 'Здесь перечислены данные, для которых истек срок хранения. Просмотрите и подтвердите удаление данных, которое затем будет выполнено запланированной задачей «Удалить устаревшие контексты».';
$string['dataprivacy:downloadallrequests'] = 'Скачивать экспортированные данные для всех';
$string['dataprivacy:downloadownrequest'] = 'Скачивать свои экспортированные данные';
$string['dataprivacy:makedatarequestsforchildren'] = 'Запрашивать данные для несовершеннолетних';
$string['dataprivacy:managedataregistry'] = 'Управлять реестром данных';
$string['dataprivacy:managedatarequests'] = 'Управлять запросами данных';
$string['dataregistry'] = 'Реестр данных';
$string['dataregistryinfo'] = 'Реестр данных позволяет устанавливать категории (типы данных) и цели (причины обработки данных) для всего контента на сайте — от пользователей и курсов до элементов курса и блоков. Для каждой цели может быть установлен срок хранения. По истечении срока хранения данные помечаются и отображаются как ожидающие удаления. Для удаления требуется подтверждение администратора.';
$string['datarequestcreatedforuser'] = 'Запрос данных создан для {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Автоматически создается из запланированной задачи (удаление ранее существовавшего пользователя).';
$string['datarequestcreatedupondelete'] = 'Автоматически создается при удалении пользователя.';
$string['datarequestemailsubject'] = 'Запрос данных: {$a}';
$string['datarequests'] = 'Запросы данных';
$string['dataretentionexplanation'] = 'Эта сводка показывает цели и категории по умолчанию  для сохранения пользовательских данных. Определенные области могут иметь более конкретные категории и цели, чем перечисленные здесь.';
$string['dataretentionsummary'] = 'Сводка хранения данных';
$string['datecomment'] = '[{$a->date}]:
{$a->comment}';
$string['daterequested'] = 'Дата запроса';
$string['daterequesteddetail'] = 'Дата запроса:';
$string['defaultexpired'] = 'Данные для всех пользователей';
$string['defaultexpiredexcept'] = 'Данные для всех пользователей, кроме тех, кто имеет одну из следующих ролей: <br>{$a->unexpired}';
$string['defaultsinfo'] = 'Цели и категории  по умолчанию применяются ко всем новым и существующим экземплярам, для которых не задано значение.';
$string['defaultssaved'] = 'Сохранены значения по умолчанию';
$string['defaultswarninginfo'] = 'Предупреждение. Изменение этих значений по умолчанию может повлиять на срок хранения существующих экземпляров.';
$string['defaultunexpired'] = 'Только данные для пользователей, имеющих одну из следующих ролей: <br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Только данные для пользователей, имеющих одну из следующих ролей: <br>
{$a->expired}
Кроме случаев, когда они также имеют одну из следующих ролей: <br>
{$a->unexpired}';
$string['deletecategory'] = 'Удалить категорию';
$string['deletecategorytext'] = 'Вы уверены, что хотите удалить категорию «{$a}»?';
$string['deletedefaults'] = 'Удалить значения по умолчанию: {$a}';
$string['deletedefaultsconfirmation'] = 'Вы уверены, что хотите удалить цель и категорию по умолчанию для модулей ({$a})?';
$string['deleteexistingdeleteduserstask'] = 'Создать запрос на удаление данных удаленных ранее существовавших пользователей';
$string['deleteexpiredcontextstask'] = 'Удалить просроченные контексты';
$string['deletemyaccount'] = 'Удалите мой аккаунт';
$string['deletepurpose'] = 'Удалить цель';
$string['deletepurposetext'] = 'Вы уверены, что хотите удалить цель «{$a}»?';
$string['deny'] = 'Отклонить';
$string['denyrequest'] = 'Отклонить запрос';
$string['deprecated'] = 'Устарел';
$string['deprecatedexplanation'] = 'Этот плагин реализует устаревшую версию одного из интерфейсов конфиденциальности и должен быть обновлен.';
$string['download'] = 'Загрузить';
$string['downloadexpireduser'] = 'Срок загрузки истек. Подайте новый запрос, если вы хотите экспортировать свои личные данные.';
$string['duplicaterole'] = 'Роль уже определена';
$string['editcategories'] = 'Редактировать категории';
$string['editcategory'] = 'Редактировать категорию';
$string['editdefaults'] = 'Редактировать значения по умолчанию: {$a}';
$string['editmoduledefaults'] = 'Редактировать модуль по умолчанию';
$string['editpurpose'] = 'Редактировать цель';
$string['editpurposes'] = 'Редактировать цели';
$string['errorinvalidrequestcreationmethod'] = 'Неверный метод создания запроса!';
$string['explanationtitle'] = 'Обозначения, используемые на этой странице.';
$string['external'] = 'Дополнительный';
$string['externalexplanation'] = 'Дополнительный плагин, установленный на этом сайте.';
$string['frontpagecourse'] = 'Главная страница курса';
$string['gdpr_art_9_2_b_name'] = 'Закон о занятости и социальном обеспечении/защите (GDPR, ст. 9.2 (b))';
$string['hide'] = 'Свернуть все';
$string['httpwarning'] = 'Любые данные, загружаемые с этого сайта, не защищены шифрованием. Обратитесь к системному администратору и попросите настроить SSL на этом сайте.';
$string['inherit'] = 'Наследовать';
$string['lawfulbases'] = 'Законные основания';
$string['message'] = 'Сообщение';
$string['messagelabel'] = 'Сообщение:';
$string['messageprovider:contactdataprotectionofficer'] = 'Запросы данных';
$string['mypersonaldatarequests'] = 'Запросы моих персональных данных';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['newrequest'] = 'Новый запрос';
$string['noassignedroles'] = 'Нет назначенных ролей в этом контексте';
$string['nocategories'] = 'Категорий еще нет';
$string['nodatarequests'] = 'Нет запросов данных';
$string['nodatarequestsmatchingfilter'] = 'Нет запросов данных, соответствующих данному фильтру';
$string['noexpiredcontexts'] = 'Для этого уровня контекста нет данных, для которых истек срок хранения.';
$string['nopurposes'] = 'Целей еще нет';
$string['nosubjectaccessrequests'] = 'Нет запросов данных, на которые нужно реагировать';
$string['nosystemdefaults'] = 'Цель и категория сайта еще не определены.';
$string['notset'] = 'Не задано (используется значение по умолчанию)';
$string['overrideinstances'] = 'Сбросить экземпляры с пользовательскими значениями';
$string['pluginname'] = 'Конфиденциальность данных';
$string['pluginregistry'] = 'Реестр конфиденциальности плагинов';
$string['pluginregistrytitle'] = 'Реестр реализации плагинами API конфиденциальности';
$string['privacy'] = 'Конфиденциальность';
$string['privacy:metadata:request:requestedby'] = 'ID пользователя, делающего запрос от имени другого пользователя.';
$string['privacy:metadata:request:userid'] = 'ID пользователя, которому принадлежит запрос';
$string['privacyrequestexpiry'] = 'Срок действия запроса данных';
$string['privacyrequestexpiry_desc'] = 'Срок, когда утвержденные запросы данных могут быть скачаны до истечения срока действия. Если установлен ноль, то ограничения по времени нет.';
$string['protected'] = 'Защитить';
$string['protectedlabel'] = 'Сохранение этих данных имеет более высокий правовой приоритет по сравнению с запросом пользователя на удаление. Эти данные будут удалены только после истечения срока хранения.';
$string['purpose'] = 'Цель';
$string['purposecreated'] = 'Цель создана';
$string['purposedefault'] = 'Цель по умолчанию';
$string['purposedefault_help'] = 'Целью по умолчанию применяется к любым новым экземплярам. Если выбрано «Наследовать», то применяется цель из вышестоящего контекста. Контексты (снизу вверх): Блоки > Элементы курса > Курсы > Категории курсов > Пользователь > Сайт.';
$string['purpose_help'] = 'Цель описывает причину обработки данных. Может быть добавлена новая цель, или, если выбрано «Наследовать», применяется цель из вышестоящего контекста. Контексты (снизу вверх):  Блоки > Элементы курса > Курсы > Категории курсов > Пользователь > Сайт.';
$string['purposes'] = 'Цели';
$string['purposeslist'] = 'Список целей данных';
$string['purposeupdated'] = 'Цель обновлена';
$string['replyto'] = 'Ответ пользователю';
$string['requestactions'] = 'Действия';
$string['requestapproved'] = 'Запрос был одобрен';
$string['requestby'] = 'Автор запроса';
$string['requestbydetail'] = 'Автор запроса';
$string['requestcomments'] = 'Комментарии';
$string['requestcomments_help'] = 'Вы можете ввести сюда любую дополнительную информацию о запросе своих данных.';
$string['requestcreation'] = 'Создание';
$string['requestfor'] = 'Пользователь';
$string['requestorigin'] = 'Сайт';
$string['requeststatus'] = 'Состояние';
$string['requestsubmitted'] = 'Ваш запрос был отправлен сотруднику по вопросам конфиденциальности';
$string['requesttype'] = 'Тип';
$string['requesttypedelete'] = 'Удалить все мои персональные данные';
$string['requesttypedeleteshort'] = 'Удалить';
$string['requesttypeexport'] = 'Экспортировать все мои персональные данные';
$string['requesttypeexportshort'] = 'Экспортировать';
$string['requesttype_help'] = 'Выберите причину, по которой вы хотите связаться с сотрудником по вопросам конфиденциальности. Учтите, что удаление всех персональных данных приведет к тому, что Вы больше не сможете зайти на сайт.';
$string['requesttypeothersshort'] = 'Сообщение';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Считать курсы без даты окончания активными';
$string['requireallenddatesforuserdeletion_desc'] = 'При расчете срока действия пользователя учитывается несколько факторов:
* время последнего входа пользователя в систему сравнивается с периодом хранения для пользователей;
* активен ли пользователь в каких-либо курсах.

При проверке активной регистрации в курсе, если у курса нет даты окончания, этот параметр используется для определения того, считается ли этот курс активным или нет.

Если у курса нет даты окончания, и этот параметр включен, то пользователь не может быть удален.';
$string['requiresattention'] = 'Требует внимания.';
$string['requiresattentionexplanation'] = 'Этот плагин не реализует API конфиденциальности Moodle. Если этот плагин хранит какие-либо личные данные, они не могут быть экспортированы или удалены средствами системы конфиденциальности Moodle.';
$string['resubmitrequestasnew'] = 'Повторно отправить как новый запрос';
$string['resubmittedrequest'] = 'Существующий запрос {$a->type} для {$a->username} был отменен и отправлен повторно';
$string['retentionperiod'] = 'Срок хранения';
$string['retentionperiod_help'] = 'Срок хранения - период времени, в течение которого должны храниться данные. По истечении срока хранения данные помечаются в списке для удаления в ожидании подтверждения администратора.';
$string['retentionperiodnotdefined'] = 'Срок хранения не был определен';
$string['retentionperiodzero'] = 'Нет срока хранения';
$string['reviewdata'] = 'Просмотр данных';
$string['role'] = 'Роль';
$string['role_help'] = 'Роль, к которой следует применить переопределение.';
$string['roleoverride'] = 'Переопределение роли';
$string['roleoverrideoverview'] = 'Политику хранения по умолчанию можно переопределить для указанных пользовательских ролей, что позволяет задать политику более длинного или более короткого хранения. Срок действия пользователя истекает только после истечения срока действия всех его ролей.';
$string['roleoverrides'] = 'Переопределения роли';
$string['selectbulkaction'] = 'Выберите массовое действие.';
$string['send'] = 'Отправить';
$string['sensitivedatareasons'] = 'Причины обработки персональных данных';
$string['setdefaults'] = 'Значения по умолчанию';
$string['showdataretentionsummary'] = 'Показать сводку хранения данных';
$string['showdataretentionsummary_desc'] = 'Если этот параметр включен, то ссылка на сводную информацию о хранении данных отображается в нижнем колонтитуле страницы и на странице профиля пользователя.';
$string['statusapproved'] = 'Одобренный';
$string['statusawaitingapproval'] = 'В ожидании одобрения';
$string['statuscancelled'] = 'Отмененный';
$string['statuscomplete'] = 'Выполненный';
$string['statusdeleted'] = 'Удаленный';
$string['statusdetail'] = 'Состояние:';
$string['statusexpired'] = 'Истекший';
$string['statuspending'] = 'На рассмотрении';
$string['statuspreprocessing'] = 'Предварительная обработка';
$string['statusprocessing'] = 'Обработка';
$string['statusready'] = 'Готов к скачиванию';
$string['statusrejected'] = 'Отклоненный';
$string['subjectscope_help'] = 'Перечень ролей, которые могут быть назначены в этом контексте.';
$string['summary'] = 'Сводная информация о конфигурации реестра';
$string['systemconfignotsetwarning'] = 'Цель и категория сайта не определены. Если они не определены, все данные будут удалены при обработке запросов на удаление.';
$string['tobedeleted'] = 'Данные для удаления';
$string['user'] = 'Пользователь';
$string['userlistexplanation'] = 'Этот плагин реализует основной провайдер, но для полной поддержки API конфиденциальности необходима реализация провайдера списка пользователей.';
$string['userlistnoncompliant'] = 'Не реализован провайдер списка пользователей';
$string['viewrequest'] = 'Посмотреть запрос';
$string['visible'] = 'Развернуть все';
