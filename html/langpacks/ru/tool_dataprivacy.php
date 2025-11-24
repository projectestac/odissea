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
 * Strings for component 'tool_dataprivacy', language 'ru', version '4.5'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Элементы курса и ресурсы';
$string['addcategory'] = 'Добавить категорию';
$string['addnewdefaults'] = 'Добавить новый модуль по умолчанию';
$string['addpurpose'] = 'Добавить цель';
$string['addroleoverride'] = 'Добавить переопределение роли';
$string['allowfiltering'] = 'Разрешить выборочный экспорт данных';
$string['allowfiltering_desc'] = 'При включенном параметре сотрудник по вопросам конфиденциальности может выбрать экспорт пользовательских данных из выбранных курсов, а не из всех курсов. При этом запросы на экспорт начинаются с состояния «Ожидание» и могут быть одобрены только после завершения фоновой задачи.';
$string['approve'] = 'Одобрить';
$string['approvedrequestsubmitted'] = 'Ваш запрос отправлен и скоро будет обработан.';
$string['approverequest'] = 'Одобрить запрос';
$string['approverequestall'] = 'Одобрить запрос (все данные)';
$string['approveselectedcourses'] = 'Одобрить выбранные курсы';
$string['automaticdatadeletionapproval'] = 'Автоматическое одобрение запроса на удаление данных';
$string['automaticdatadeletionapproval_desc'] = 'При включенном параметре запросы на удаление данных одобряются автоматически. <br/> Обратите внимание, что автоматическое одобрение будет применяться только к новым запросам на удаление данных при включенном этом параметре. Имеющиеся ожидающие одобрения запросы на удаление данных по-прежнему должны быть  вручную одобрены ответственным за конфиденциальность.';
$string['automaticdataexportapproval'] = 'Автоматическое одобрение запроса на экспорт данных';
$string['automaticdataexportapproval_desc'] = 'При включенном параметре запросы на экспорт данных одобряются автоматически. <br/> Обратите внимание, что автоматическое одобрение будет применяться только к новым запросам на экспорт данных при включенном этом параметре. Имеющиеся ожидающие одобрения запросы на экспорт данных по-прежнему должны быть  вручную одобрены ответственным за конфиденциальность.';
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
$string['category_help'] = 'Категория в реестре данных описывает тип данных. Может быть добавлена новая категория или, если выбрано «Наследовать», применяется категория данных из вышестоящего контекста. Контектсы (снизу вверх): Блоки > Элементы курса > Курсы > Категории курсов > Сайт.';
$string['categorycreated'] = 'Категория создана';
$string['categorydefault'] = 'Категория по умолчанию';
$string['categorydefault_help'] = 'Категория по умолчанию — это категория данных, применяемая ко всем новым экземплярам. Если выбрано «Наследовать», применяется категория данных из вышестоящего контекста. Контексты (снизу вверх): Блоки > Элементы курса > Курсы > Категории курсов > Пользователь > Сайт.';
$string['categoryupdated'] = 'Категория обновлена';
$string['close'] = 'Закрыть';
$string['compliant'] = 'Соответствует требованиям';
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
$string['createdeletedatarequest'] = 'Создать запрос на удаление данных';
$string['createnewdatarequest'] = 'Создать новый запрос данных';
$string['createpurpose'] = 'Создать цель данных';
$string['creationauto'] = 'Автоматически';
$string['creationmanual'] = 'Вручную';
$string['datadeletion'] = 'Удаление данных';
$string['datadeletionpagehelp'] = 'Здесь перечислены данные, для которых истек срок хранения. Просмотрите и подтвердите удаление данных, которое затем будет выполнено запланированной задачей «Удаление просроченных персональных данных».';
$string['dataprivacy:downloadallrequests'] = 'Скачивать экспортированные данные для всех';
$string['dataprivacy:downloadownrequest'] = 'Скачивать свои экспортированные данные';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Запрашивать удаление данных для несовершеннолетних';
$string['dataprivacy:makedatarequestsforchildren'] = 'Запрашивать данные для несовершеннолетних';
$string['dataprivacy:managedataregistry'] = 'Управлять реестром данных';
$string['dataprivacy:managedatarequests'] = 'Управлять запросами данных';
$string['dataprivacy:requestdelete'] = 'Запрашивать удаление своих личных данных';
$string['dataprivacy:requestdeleteforotheruser'] = 'Запрашивать удаление данных от имени другого пользователя';
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
$string['deleteexpiredcontextstask'] = 'Удаление просроченных персональных данных';
$string['deleteexpireddatarequeststask'] = 'Удаление просроченных файлов экспорта для запросов данных';
$string['deletemyaccount'] = 'Удалить мой аккаунт';
$string['deletepurpose'] = 'Удалить цель';
$string['deletepurposetext'] = 'Вы уверены, что хотите удалить цель «{$a}»?';
$string['deny'] = 'Отклонить';
$string['denyrequest'] = 'Отклонить запрос';
$string['deprecated'] = 'Устарел';
$string['deprecatedexplanation'] = 'Этот плагин реализует устаревшую версию одного из интерфейсов конфиденциальности и должен быть обновлен.';
$string['download'] = 'Загрузить';
$string['downloadexpireduser'] = 'Срок загрузки истек. Подайте новый запрос, если вы хотите экспортировать свои личные данные.';
$string['dporolemapping'] = 'Сопоставление ролей ответственного за конфиденциальность';
$string['dporolemapping_desc'] = 'Ответственный за конфиденциальность может управлять запросами данных. Для роли, указанной в параметре сопоставления ролей ответственного за конфиденциальность, должно быть разрешено право tool/dataprivacy:managedatarequests.';
$string['duplicaterole'] = 'Роль уже определена';
$string['editcategories'] = 'Редактировать категории';
$string['editcategory'] = 'Редактировать категорию';
$string['editdefaults'] = 'Редактировать значения по умолчанию: {$a}';
$string['editmoduledefaults'] = 'Редактировать модуль по умолчанию';
$string['editpurpose'] = 'Редактировать цель';
$string['editpurposes'] = 'Редактировать цели';
$string['effectiveretentionperiodcourse'] = '{$a} (после даты окончания курса)';
$string['effectiveretentionperioduser'] = '{$a} (с момента последнего посещения сайта пользователем)';
$string['emailsalutation'] = 'Уважаемый(ая) {$a},';
$string['errorcannotrequestdeleteforother'] = 'У вас нет права на создание запроса для удаления этого пользователя.';
$string['errorcannotrequestdeleteforself'] = 'У вас нет права на создание запроса для удаления самого себя.';
$string['errorcannotrequestexportforself'] = 'У вас нет права на создание запроса на экспорт для себя.';
$string['errorcontactdpodisabled'] = 'Возможность связаться с ответственным за конфиденциальность отключена.';
$string['errorcontexthasunexpiredchildren'] = 'В контексте «{$a}» имеются подконтексты, срок действия которых еще не истек. Ни один контекст не отмечен для удаления.';
$string['errorinvalidrequestcomments'] = 'Поле комментариев может содержать только обычный текст.';
$string['errorinvalidrequestcreationmethod'] = 'Неверный метод создания запроса!';
$string['errorinvalidrequeststatus'] = 'Неверное состояние запроса!';
$string['errorinvalidrequesttype'] = 'Неверный тип запроса!';
$string['errornocapabilitytorequestforothers'] = 'Пользователь {$a->requiredby} не имеет возможности отправлять запросы данных от имени пользователя {$a->userid}.';
$string['errornoexpiredcontexts'] = 'Нет истекших контекстов для обработки';
$string['errornoselectedcourse'] = 'Вы должны выбрать хотя бы один курс';
$string['errorrequestalreadyexists'] = 'У вас уже есть текущий запрос.';
$string['errorrequestnotfound'] = 'Запрос не найден';
$string['errorrequestnotwaitingforapproval'] = 'Запрос не ожидает одобрения. Либо он еще не готов, либо уже обработан.';
$string['errorsendingmessagetodpo'] = 'Произошла ошибка при попытке отправить сообщение для {$a}.';
$string['exceptionnotificationbody'] = '<p> Отказ при вызове <b> {$a->fullmethodname} </b>. <br> Это означает, что плагин <b> {$a->component} </b> не завершил обработку данных. Разработчику плагина может быть передана следующая информация об отказе: </p> <pre> {$a->message} <br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Отказ при обработке конфиденциальных данных';
$string['expandplugin'] = 'Развернуть и свернуть плагин.';
$string['expandplugintype'] = 'Развернуть и свернуть тип плагина.';
$string['expiredretentionperiodtask'] = 'Срок действия истек';
$string['expiredrolewithretention'] = '{$a->retention} (срок действия истек)';
$string['expiry'] = 'Срок действия';
$string['explanationtitle'] = 'Обозначения, используемые на этой странице.';
$string['external'] = 'Дополнительный';
$string['externalexplanation'] = 'Дополнительный плагин, установленный на этом сайте.';
$string['filterexportdata'] = 'Одобрить запрос (данные из выбранных курсов)';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Главная страница курса';
$string['gdpr_art_6_1_a_description'] = 'Субъект данных дал согласие на обработку своих персональных данных для одной или нескольких конкретных целей.';
$string['gdpr_art_6_1_a_name'] = 'Согласие (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Обработка необходима для выполнения договора, стороной которого является субъект данных, или для принятия мер по запросу субъекта данных до заключения договора.';
$string['gdpr_art_6_1_b_name'] = 'Договор (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Обработка необходима для соблюдения законного обязательства, которому подчиняется субъект.';
$string['gdpr_art_6_1_c_name'] = 'Законное обязательство (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Обработка необходима для защиты жизненно важных интересов субъекта данных или другого физического лица.';
$string['gdpr_art_6_1_d_name'] = 'Жизненно важные интересы (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Обработка необходима для выполнения задачи, выполняемой в общественных интересах или при осуществлении официальных полномочий, возложенных на ответственное лицо.';
$string['gdpr_art_6_1_e_name'] = 'Общественная задача (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Обработка необходима с целью обеспечения законных интересов, реализуемых ответственным лицом или третьей стороной, за исключением случаев, когда такие интересы перекрываются интересами или основными правами и свободами субъекта данных, которые требуют защиты персональных данных, в частности, когда субъект данных - ребенок.';
$string['gdpr_art_6_1_f_name'] = 'Законные интересы (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'Субъект данных дал явное согласие на обработку этих личных данных для одной или нескольких указанных целей, за исключением случаев, когда закон Союза или государства-члена предусматривает, что запрет, упомянутый в пункте 1 статьи 9 GDPR, не может быть отменен субъектом данных.';
$string['gdpr_art_9_2_a_name'] = 'Явное согласие (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Обработка необходима для выполнения обязательств и реализации определенных прав ответственного лица или субъекта данных в области занятости, социального обеспечения и законодательства о социальной защите в той мере, в какой это разрешено законодательством Союза или государства-члена или коллективным договором в соответствии с законодательством государства-члена, предусматривающим соответствующие гарантии основных прав и интересов субъекта данных .';
$string['gdpr_art_9_2_b_name'] = 'Закон о занятости и социальном обеспечении/защите (GDPR, ст. 9.2 (b))';
$string['gdpr_art_9_2_c_description'] = 'Обработка необходима для защиты жизненно важных интересов субъекта данных или другого физического лица, если субъект данных физически или юридически не может дать согласие.';
$string['gdpr_art_9_2_c_name'] = 'Защита жизненно важных интересов (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Обработка осуществляется в ходе законной деятельности (с соответствующими гарантиями) фонда, ассоциации или любого другого некоммерческого органа с политической, философской, религиозной или профсоюзной целью и при условии, что обработка касается исключительно членов или бывших членов органа или лиц, которые регулярно контактируют с ними в связи с их целями, и что личные данные не раскрываются за пределами этого органа без согласия субъектов данных.';
$string['gdpr_art_9_2_d_name'] = 'Законная деятельность в отношении членов (близких знакомых) фонда, ассоциации или другого некоммерческого органа (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Обработка относится к личным данным, которые явно опубликованы субъектом данных.';
$string['gdpr_art_9_2_e_name'] = 'Данные опубликованы субъектом данных (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Обработка необходима для установления, исполнения или защиты судебных исков или когда суды действуют в своем судебном праве.';
$string['gdpr_art_9_2_f_name'] = 'Законные требования и судебные иски (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Обработка необходима по причине значительного общественного интереса на основании законодательства Союза или государства-члена, который должен быть соразмерным преследуемой цели, уважать право субъекта на защиту данных и предусматривать подходящие и конкретные меры для защиты основных прав и интересов субъекта данных.';
$string['gdpr_art_9_2_g_name'] = 'Значительный общественный интерес (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Обработка необходима в целях профилактической или профессиональной медицины, для оценки работоспособности сотрудника, медицинского диагноза, оказания медицинской или социальной помощи или лечения или управления системами и услугами здравоохранения или социальной помощи на основе Законодательства Союза или государства-члена или в соответствии с контрактом со специалистом в области здравоохранения и в соответствии с условиями и гарантиями, указанными в пункте 3 статьи 9 GDPR.';
$string['gdpr_art_9_2_h_name'] = 'В медицинских целях (GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Обработка необходима по причинам общественного интереса в области общественного здравоохранения, таких как защита от серьезных угроз здоровью или обеспечение высоких стандартов качества и безопасности медицинской помощи и лекарственных продуктов или медицинских устройств на основе закона Союза или государства-члена, который предусматривает подходящие и конкретные меры для защиты прав и свобод субъекта данных, в частности профессиональной тайны.';
$string['gdpr_art_9_2_i_name'] = 'Общественное здравоохранение (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Обработка необходима для архивирования данных в интересах общества, научных или исторических исследований или статистических целей в соответствии со Статьей 89(1) на основании законодательства Союза или государства-члена, которое должно быть соразмерным преследуемой цели, уважать прав субъекта на защиту данных и предусмотреть подходящие и конкретные меры для защиты основных прав и интересов субъекта данных.';
$string['gdpr_art_9_2_j_name'] = 'Общественный интерес или научные/исторические/статистические исследования (GDPR Art. 9.2(j))';
$string['hide'] = 'Свернуть все';
$string['httpwarning'] = 'Любые данные, загружаемые с этого сайта, не защищены шифрованием. Обратитесь к системному администратору и попросите настроить SSL на этом сайте.';
$string['inherit'] = 'Наследовать';
$string['lawfulbases'] = 'Законные основания';
$string['lawfulbases_help'] = 'Выберите хотя бы один вариант, который послужит законным основанием для обработки персональных данных. Подробнее об этих законных основаниях см. <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank"> GDPR Art. 6.1 </a>';
$string['markcomplete'] = 'Отметить как выполненный';
$string['markedcomplete'] = 'Ваш запрос был отмечен сотрудником по вопросам конфиденциальности как выполненный.';
$string['message'] = 'Сообщение';
$string['messagelabel'] = 'Сообщение:';
$string['messageprovider:contactdataprotectionofficer'] = 'Запросы данных';
$string['messageprovider:datarequestprocessingresults'] = 'Результаты обработки запроса данных';
$string['messageprovider:notifyexceptions'] = 'Уведомления об отклонениях запросов данных';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Запросы моих персональных данных';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = 'Детей: {$a}';
$string['newrequest'] = 'Новый запрос';
$string['noactivitiestoload'] = 'Нет активных элементов';
$string['noassignedroles'] = 'Нет назначенных ролей в этом контексте';
$string['noblockstoload'] = 'Нет блоков';
$string['nocategories'] = 'Категорий еще нет';
$string['nocoursestoload'] = 'Нет курсов';
$string['nocoursetofilter'] = 'Пользователь не зачислен ни на один курс, который можно выбрать';
$string['nodatarequests'] = 'Нет запросов данных';
$string['nodatarequestsmatchingfilter'] = 'Нет запросов данных, соответствующих данному фильтру';
$string['noexpiredcontexts'] = 'Для этого уровня контекста нет данных, для которых истек срок хранения.';
$string['nopersonaldatarequests'] = 'У вас нет запросов на личные данные';
$string['nopurposes'] = 'Целей еще нет';
$string['nosubjectaccessrequests'] = 'Нет запросов данных, на которые нужно реагировать';
$string['nosystemdefaults'] = 'Цель и категория сайта еще не определены.';
$string['notset'] = 'Не задано (используется значение по умолчанию)';
$string['notyetexpired'] = '{$a} (время еще не истекло)';
$string['overrideinstances'] = 'Сбросить экземпляры с пользовательскими значениями';
$string['pluginname'] = 'Конфиденциальность данных';
$string['pluginname_help'] = 'Плагин конфиденциальности данных';
$string['pluginregistry'] = 'Реестр конфиденциальности плагинов';
$string['pluginregistrytitle'] = 'Реестр соблюдения конфиденциальности плагинами';
$string['privacy'] = 'Конфиденциальность';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Фильтры, применяемые в настоящее время на странице запросов данных.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Количество запросов данных, которые пользователь предпочитает видеть на одной странице.';
$string['privacy:metadata:purpose'] = 'Информация о целях для этого сайта.';
$string['privacy:metadata:purpose:usermodified'] = 'ID пользователя, изменившего цель';
$string['privacy:metadata:request'] = 'Запросы информации с персональными данными (запросы на доступ и удаление), сделанные для этого сайта.';
$string['privacy:metadata:request:comments'] = 'Комментарии любых пользователей, сопровождающие запрос.';
$string['privacy:metadata:request:dpocomment'] = 'Любые комментарии к запросу, сделанные сотрудником по вопросам конфиденциальности сайта.';
$string['privacy:metadata:request:requestedby'] = 'ID пользователя, делающего запрос от имени другого пользователя.';
$string['privacy:metadata:request:timecreated'] = 'Отметка времени, указывающая, когда запрос был сделан пользователем.';
$string['privacy:metadata:request:userid'] = 'ID пользователя, которому принадлежит запрос';
$string['privacyofficeronly'] = 'Только пользователи, которым назначена роль ответственного за конфиденциальность ({$a}), имеют доступ к этому контенту.';
$string['privacyrequestexpiry'] = 'Срок действия запроса данных';
$string['privacyrequestexpiry_desc'] = 'Срок, в течение которого данных могут быть скачаны ответы на одобренные запросы данных. Если установлен ноль, то ограничения по времени нет.';
$string['protected'] = 'Защитить';
$string['protectedlabel'] = 'Сохранение этих данных имеет более высокий правовой приоритет по сравнению с запросом пользователя на удаление. Эти данные будут удалены только после истечения срока хранения.';
$string['purpose'] = 'Цель';
$string['purpose_help'] = 'Цель описывает причину обработки данных. Может быть добавлена новая цель, или, если выбрано «Наследовать», применяется цель из вышестоящего контекста. Контексты (снизу вверх):  Блоки > Элементы курса > Курсы > Категории курсов > Пользователь > Сайт.';
$string['purposecreated'] = 'Цель создана';
$string['purposedefault'] = 'Цель по умолчанию';
$string['purposedefault_help'] = 'Целью по умолчанию применяется к любым новым экземплярам. Если выбрано «Наследовать», то применяется цель из вышестоящего контекста. Контексты (снизу вверх): Блоки > Элементы курса > Курсы > Категории курсов > Пользователь > Сайт.';
$string['purposeoverview'] = 'Цель описывает предполагаемое использование и политику сохранения хранимых данных. Основание для хранения и сохранения этих данных также описано в цели.';
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
$string['requestdenied'] = 'Запрос был отклонен';
$string['requestemailintro'] = 'Вы получили запрос данных:';
$string['requestfor'] = 'Пользователь';
$string['requestmarkedcomplete'] = 'Запрос отмечен как выполненный';
$string['requestorigin'] = 'Сайт';
$string['requestsapproved'] = 'Одобренные запросы';
$string['requestsdenied'] = 'Отклоненные запросы';
$string['requeststatus'] = 'Состояние';
$string['requestsubmitted'] = 'Ваш запрос был отправлен сотруднику по вопросам конфиденциальности';
$string['requesttype'] = 'Тип';
$string['requesttype_help'] = 'Выберите причину, по которой вы хотите связаться с сотрудником по вопросам конфиденциальности. Учтите, что удаление всех персональных данных приведет к тому, что Вы больше не сможете зайти на сайт.';
$string['requesttypedelete'] = 'Удалить все мои персональные данные';
$string['requesttypedeleteshort'] = 'Удалить';
$string['requesttypeexport'] = 'Экспортировать все мои персональные данные';
$string['requesttypeexportallowfiltering'] = 'Экспортировать мои личные данные';
$string['requesttypeexportshort'] = 'Экспортировать';
$string['requesttypeothers'] = 'Общий запрос';
$string['requesttypeothersshort'] = 'Сообщение';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Считать курсы без даты окончания активными';
$string['requireallenddatesforuserdeletion_desc'] = 'При расчете срока действия пользователя учитывается несколько факторов:
* время последнего входа пользователя в систему сравнивается с периодом хранения для пользователей;
* активен ли пользователь в каких-либо курсах.

При проверке активной регистрации в курсе, если у курса нет даты окончания, этот параметр используется для определения того, считается ли этот курс активным или нет.

Если у курса нет даты окончания, и этот параметр включен, то пользователь не может быть удален.';
$string['requiresattention'] = 'Требует внимания.';
$string['requiresattentionexplanation'] = 'Этот плагин не обеспечивает API конфиденциальности Moodle. Если этот плагин хранит какие-либо личные данные, они не могут быть экспортированы или удалены средствами системы конфиденциальности Moodle.';
$string['resubmitrequest'] = 'Повторно отправить запрос {$a->type} для {$a->username}';
$string['resubmitrequestasnew'] = 'Повторно отправить как новый запрос';
$string['resubmittedrequest'] = 'Существующий запрос {$a->type} для {$a->username} был отменен и отправлен повторно';
$string['resultdeleted'] = 'Вы недавно запросили удаление своей учетной записи и личных данных из {$a}. Этот процесс завершен, и вы больше не можете войти в систему.';
$string['resultdownloadready'] = 'Копия ваших личных данных из {$a}, которую вы недавно запросили, теперь доступна для загрузки по следующей ссылке.';
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
$string['selectcourses'] = 'Выберите курсы для экспорта';
$string['selectdatarequests'] = 'Выберите запросы данных.';
$string['selectuserdatarequest'] = 'Выберите запрос данных {$a->requesttype} пользователя {$a->username}.';
$string['send'] = 'Отправить';
$string['sensitivedatareasons'] = 'Причины обработки персональных данных';
$string['sensitivedatareasons_help'] = 'Выберите одну или несколько подходящих причин, освобождающих от запрета на обработку конфиденциальных персональных данных, связанных с этой целью. Для получения дополнительной информации см. <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank"> GDPR Art. 9.2 </a>';
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
$string['subjectscope'] = 'Тематика';
$string['subjectscope_help'] = 'Перечень ролей, которые могут быть назначены в этом контексте.';
$string['summary'] = 'Сводная информация о конфигурации реестра';
$string['systemconfignotsetwarning'] = 'Цель и категория сайта не определены. Если они не определены, все данные будут удалены при обработке запросов на удаление.';
$string['tobedeleted'] = 'Данные для удаления';
$string['unexpiredrolewithretention'] = '{$a->retention} (срок действия истек)';
$string['user'] = 'Пользователь';
$string['userlistexplanation'] = 'Этот плагин имеет основного провайдера, но для полной поддержки конфиденциальности также необходим провайдер списка пользователей.';
$string['userlistnoncompliant'] = 'Отсутствует провайдер списка пользователей';
$string['viewrequest'] = 'Посмотреть запрос';
$string['visible'] = 'Развернуть все';
