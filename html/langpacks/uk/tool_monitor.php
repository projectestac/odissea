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
 * Strings for component 'tool_monitor', language 'uk', version '4.4'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Додати нове правило';
$string['allevents'] = 'Всі події';
$string['allmodules'] = 'Всі модулі';
$string['area'] = 'Зона';
$string['areatomonitor'] = 'Зона для моніторингу';
$string['cachedef_eventsubscriptions'] = 'Це зберігає список підписок на події для індивідуальних курсів';
$string['contactadmin'] = 'Зв’яжіться зі своїм адміністратором, щоб він включив це.';
$string['core'] = 'Ядро';
$string['coresubsystem'] = 'Підсистема ({$a})';
$string['currentsubscriptions'] = 'Ваші поточні розсилки';
$string['defaultmessagetemplate'] = 'Назва правила: {rulename}<br />Опис: {description}<br />Назва події: {eventname}';
$string['deleterule'] = 'Вилучити правило';
$string['deletesubscription'] = 'Вилучити розсилання';
$string['description'] = 'Опис:';
$string['disablefieldswarning'] = 'Деякі поля не можуть бути змінені, оскільки це правило вже має адресатів для розсилання.';
$string['duplicaterule'] = 'Здублювати правило';
$string['editrule'] = 'Редагувати правило';
$string['enablehelp'] = 'Включити/відключити моніторинг подій';
$string['enablehelp_help'] = 'Моніторинг подій повинен бути включеним, до того як ви почнете створювати правила та підписуватися на них. Врахуйте, що включення моніторингу подій може вплинути на продуктивність сайту.';
$string['errorincorrectevent'] = 'Виберіть подію пов’язану з вибраним модулем';
$string['event'] = 'Подія';
$string['eventnotfound'] = 'Події не знайдено';
$string['eventrulecreated'] = 'Створено правило';
$string['eventruledeleted'] = 'Вилучено правило';
$string['eventruleupdated'] = 'Оновлено правило';
$string['eventsubcreated'] = 'Створено розсилку';
$string['eventsubcriteriamet'] = 'Виникла ситуація, на сповіщення про яку створенна розсилка';
$string['eventsubdeleted'] = 'Вилучено розсилку';
$string['freqdesc'] = '{$a->freq} раз(ів) за {$a->mins} хв.';
$string['frequency'] = 'Межа для повідомлення';
$string['frequency_help'] = 'Число подій протягом певного часу, необхідне для відправки повідомлення зі сповіщенням.';
$string['inminutes'] = 'в хвилинах';
$string['invalidmodule'] = 'Неправильний модуль';
$string['manage'] = 'Керування';
$string['managerules'] = 'Правила моніторингу правил';
$string['manageruleslink'] = 'Ви можете керувати правилами на сторінці {$a}.';
$string['managesubscriptions'] = 'Керування підписками';
$string['managesubscriptionslink'] = 'Ви можете підписатися на сповіщення про спрацювання правил на сторінці  {$a}.';
$string['messageprovider:notification'] = 'Сповіщення про спрацювання правил';
$string['messagetemplate'] = 'Шаблон сповіщення';
$string['messagetemplate_help'] = 'Після досягнення порога сповіщення абонентам надсилається сповіщення.
Він може включати будь-який або всі з наступних заповнювачів:

* Посилання на місце проведення події {link}
* Посилання на зону моніторингу {modulelink}
* Назва правила {rulename}
* Опис {description}
* Подія {eventname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Екземпляр модуля';
$string['monitor:managerules'] = 'Керувати правилами моніторингу подій';
$string['monitor:managetool'] = 'Включати/відключати моніторинг подій';
$string['monitor:subscribe'] = 'Підписуватися на сповіщення про спрацювання правил';
$string['monitordisabled'] = 'Моніторинг подій наразі відключено.';
$string['monitorenabled'] = 'Моніторинг подій включено.';
$string['norules'] = 'Немає правил моніторингу подій.';
$string['pluginname'] = 'Монітор подій';
$string['privacy:createdrules'] = 'Створені мною правила монітора подій';
$string['privacy:metadata:description'] = 'Опис правила';
$string['privacy:metadata:eventname'] = 'Повна назва події';
$string['privacy:metadata:frequency'] = 'Частота сповіщень';
$string['privacy:metadata:historysummary'] = 'Зберігає історію надісланих сповіщень';
$string['privacy:metadata:inactivedate'] = 'Період часу в днях, після якого неактивна підписка буде повністю видалена';
$string['privacy:metadata:lastnotificationsent'] = 'Коли востаннє було надіслано сповіщення для цієї підписки.';
$string['privacy:metadata:messagesummary'] = 'Повідомлення надсилаються в систему повідомлень.';
$string['privacy:metadata:name'] = 'Назва правила';
$string['privacy:metadata:plugin'] = 'Frankenstlye назва плагіна';
$string['privacy:metadata:rulessummary'] = 'Тут зберігаються правила моніторингу.';
$string['privacy:metadata:subscriptionssummary'] = 'Зберігає підписки користувачів за різними правилами';
$string['privacy:metadata:template'] = 'Шаблон повідомлення';
$string['privacy:metadata:timecreatedrule'] = 'Коли було створено це правило';
$string['privacy:metadata:timecreatedsub'] = 'Коли ця підписка була створена';
$string['privacy:metadata:timemodifiedrule'] = 'Коли це правило було востаннє змінено';
$string['privacy:metadata:timesent'] = 'Коли повідомлення було надіслано';
$string['privacy:metadata:timewindow'] = 'Часове вікно в секундах';
$string['privacy:metadata:userid'] = 'Ідентифікатор користувача, який створив правило.';
$string['privacy:metadata:useridhistory'] = 'Ідентифікатор користувача, якому було надіслано це сповіщення';
$string['privacy:metadata:useridsub'] = 'Ідентифікатор абонента.';
$string['privacy:subscriptions'] = 'Мої підписки на монітор подій';
$string['processevents'] = 'Опрацювати події';
$string['ruleareyousure'] = 'Ви впевнені, що хочете вилучити правило "{$a}"?';
$string['ruleareyousureextra'] = 'В цього правила є адресати на розсилку ({$a}), які будуть також вилучені.';
$string['rulecopysuccess'] = 'Правило успішно здубльоване';
$string['ruledeletesuccess'] = 'Правило успішно вилучене';
$string['rulehelp'] = 'Інформація про правило';
$string['rulehelp_help'] = 'Це правило сппрацьовує, коли в компоненті «{$a->eventcomponent}» подія «{$a->eventname}» відбувається {$a->frequency} раз(ів) за {$a->minutes} хв.';
$string['rulename'] = 'Назва правила';
$string['rulenopermission'] = 'Ви не маєте  прав, щоб підписатися на будь-які події.';
$string['rulenopermissions'] = 'Ви не маєте прав здійснювати "правило {$a}"';
$string['rulescansubscribe'] = 'Правила, на сповіщення про спрацювання яких ви можете підписатися';
$string['selectacourse'] = 'Виберіть курс';
$string['selectcourse'] = 'Відкрийте цей звіт на рівні курсу, щоб отримати список можливих модулів';
$string['subareyousure'] = 'Ви впевнені, що бажаєте вилучити це розсилання на сповіщення про спрацювання правила "{$a}"?';
$string['subcreatesuccess'] = 'Розсилання успішно створено';
$string['subdeletesuccess'] = 'Розсилання успішно вилучено';
$string['subhelp'] = 'Інформація про розсилання';
$string['subhelp_help'] = 'Це розсилка на сповіщення про випадки, коли в модулі «{$a->moduleinstance}» подія «{$a->eventname}» відбувається {$a->frequency} раз(ів) за {$a->minutes} хв.';
$string['subscribeto'] = 'Підписатися на правило "{$a}"';
$string['taskchecksubscriptions'] = 'Активація/Деактивація неприпустимих правил підписки';
$string['taskcleanevents'] = 'Очищення подій монітора подій';
$string['unsubscribe'] = 'Анулювати підписку';
