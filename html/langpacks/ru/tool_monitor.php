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
 * Strings for component 'tool_monitor', language 'ru', version '4.1'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Добавить новое правило';
$string['allevents'] = 'Все события';
$string['allmodules'] = 'Все модули';
$string['area'] = 'Область';
$string['areatomonitor'] = 'Область для отслеживания';
$string['cachedef_eventsubscriptions'] = 'Здесь хранится список подписок на события для отдельных курсов';
$string['contactadmin'] = 'Обратитесь к администратору, чтобы включить его.';
$string['core'] = 'Ядро';
$string['currentsubscriptions'] = 'Ваши текущие подписки';
$string['defaultmessagetemplate'] = 'Название правила: {rulename}<br />Описание: {description}<br />Название события: {eventname}';
$string['deleterule'] = 'Удалить правило';
$string['deletesubscription'] = 'Удалить подписку';
$string['description'] = 'Описание:';
$string['disablefieldswarning'] = 'Некоторые поля не могут быть изменены, так как это правило уже имеет подписки.';
$string['duplicaterule'] = 'Дублировать правило';
$string['editrule'] = 'Редактировать правило';
$string['enablehelp'] = 'Включить/отключить отслеживание событий';
$string['enablehelp_help'] = 'Необходимо включить отслеживание событий, чтобы Вы могли создавать правила отслеживания и подписываться на них. Учтите, что включение отслеживания событий может повлиять на производительность сайта.';
$string['errorincorrectevent'] = 'Выберите событие, связанное с выбранным плагином';
$string['event'] = 'Событие';
$string['eventnotfound'] = 'Событие не найдено';
$string['eventrulecreated'] = 'Правило создано';
$string['eventruledeleted'] = 'Правило удалено';
$string['eventruleupdated'] = 'Правило обновлено';
$string['eventsubcreated'] = 'Подписка создана';
$string['eventsubcriteriamet'] = 'Возникла ситуация, на уведомление о которой осуществлена подписка';
$string['eventsubdeleted'] = 'Подписка на уведомление о срабатывании правила удалена';
$string['freqdesc'] = '{$a->freq} раз за {$a->mins} мин.';
$string['frequency'] = 'Минимальное количество срабатываний';
$string['frequency_help'] = 'Количество событий в течение определенного периода времени, необходимое для отправки сообщения с уведомлением.';
$string['inminutes'] = 'за период (в минутах)';
$string['invalidmodule'] = 'Некорректный модуль';
$string['manage'] = 'Управление';
$string['managerules'] = 'Правила отслеживания событий';
$string['manageruleslink'] = 'Вы можете управлять правилами на странице «{$a}».';
$string['managesubscriptions'] = 'Отслеживание событий';
$string['managesubscriptionslink'] = 'Вы можете подписаться на уведомления о срабатывании правил на странице «{$a}».';
$string['messageprovider:notification'] = 'Уведомления о срабатывании правил';
$string['messagetemplate'] = 'Шаблон сообщения';
$string['messagetemplate_help'] = 'Это шаблон сообщения, которое будет отправлено пользователям при возникновении заданной правилом ситуации. При этом допускается использовать следующие подстановки:
<br /><br />
* Ссылка на расположение произошедшего события {link}<br />
* Ссылка на экземпляр модуля, где произошло это событие {modulelink}<br />
* Название этого правила {rulename}<br />
* Описание правила {description}<br />
* Название события, связанного с правилом {eventname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Экземпляр модуля';
$string['monitor:managerules'] = 'Управлять правилами отслеживания событий';
$string['monitor:managetool'] = 'Включать/отключать отслеживание событий';
$string['monitor:subscribe'] = 'Подписываться на уведомления о срабатывании правил';
$string['monitordisabled'] = 'Мониторинг событий в настоящее время отключен.';
$string['monitorenabled'] = 'Мониторинг событий в настоящее время включен.';
$string['norules'] = 'Нет правил для мониторинга событий.';
$string['pluginname'] = 'Отслеживание событий';
$string['privacy:createdrules'] = 'Созданные мной правила монитора событий';
$string['privacy:metadata:description'] = 'Описание правила';
$string['privacy:metadata:eventname'] = 'Полное название события';
$string['privacy:metadata:frequency'] = 'Частота уведомлений';
$string['privacy:metadata:historysummary'] = 'Хранит историю отправленных уведомлений';
$string['privacy:metadata:inactivedate'] = 'Период времени в днях, по истечении которого неактивная подписка будет полностью удалена';
$string['privacy:metadata:lastnotificationsent'] = 'Когда в последний раз было отправлено уведомление об этой подписке.';
$string['privacy:metadata:messagesummary'] = 'Уведомления отправляются в систему сообщений.';
$string['privacy:metadata:name'] = 'Название правила';
$string['privacy:metadata:plugin'] = 'Плагин Frankenstlye';
$string['privacy:metadata:rulessummary'] = 'Хранит правила отслеживания';
$string['privacy:metadata:subscriptionssummary'] = 'Хранит подписки пользователей на различные правила';
$string['privacy:metadata:template'] = 'Шаблон сообщения';
$string['privacy:metadata:timecreatedrule'] = 'Когда это правило было создано';
$string['privacy:metadata:timecreatedsub'] = 'Когда была создана эта подписка';
$string['privacy:metadata:timemodifiedrule'] = 'Когда это правило было в последний раз изменено';
$string['privacy:metadata:timesent'] = 'Когда было отправлено сообщение';
$string['privacy:metadata:timewindow'] = 'Временное окно в секундах';
$string['privacy:metadata:userid'] = 'ID пользователя, создавшего правило.';
$string['privacy:metadata:useridhistory'] = 'ID пользователя, которому было отправлено это уведомление';
$string['privacy:metadata:useridsub'] = 'ID подписчика';
$string['privacy:subscriptions'] = 'Мои подписки на отслеживание событий.';
$string['processevents'] = 'Обработать события';
$string['ruleareyousure'] = 'Вы уверены, что хотите удалить правило «{$a}»?';
$string['ruleareyousureextra'] = 'Есть подписки на это правило ({$a}), которые также будут удалены.';
$string['rulecopysuccess'] = 'Правило скопировано';
$string['ruledeletesuccess'] = 'Правило удалено';
$string['rulehelp'] = 'Информация о правиле';
$string['rulehelp_help'] = 'Это правило срабатывает, когда в компоненте «{$a->eventcomponent}» событие «{$a->eventname}» происходит {$a->frequency} раз(а) за {$a->minutes} мин.';
$string['rulename'] = 'Название правила';
$string['rulenopermission'] = 'Вы не имеете права подписываться на какие-либо события.';
$string['rulenopermissions'] = 'У Вас нет прав осуществлять действие «{$a}» над правилом';
$string['rulescansubscribe'] = 'Правила, на уведомление о срабатывании которых Вы можете подписаться';
$string['selectacourse'] = 'Выберите курс';
$string['selectcourse'] = 'Откройте этот отчет на уровне курса, чтобы получить список возможных модулей';
$string['subareyousure'] = 'Вы уверены, что хотите удалить эту подписку на уведомления о срабатывании правила «{$a}»?';
$string['subcreatesuccess'] = 'Подписка создана';
$string['subdeletesuccess'] = 'Подписка удалена';
$string['subhelp'] = 'Информация о подписке';
$string['subhelp_help'] = 'Это подписка на уведомления о случаях, когда в модуле «{$a->moduleinstance}» событие «{$a->eventname}» происходит {$a->frequency} раз(а) за {$a->minutes} мин.';
$string['subscribeto'] = 'Подписаться на правило «{$a}»';
$string['taskchecksubscriptions'] = 'Активировать/деактивировать подписки на неработающие правила';
$string['taskcleanevents'] = 'Очистить данные отслеживания событий';
$string['unsubscribe'] = 'Отказаться от подписки';
