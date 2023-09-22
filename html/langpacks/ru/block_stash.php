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
 * Strings for component 'block_stash', language 'ru', version '4.1'.
 *
 * @package     block_stash
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Обменять';
$string['add'] = 'Добавить';
$string['additem'] = 'Добавить предмет';
$string['addnewdrop'] = 'Добавить новое расположение';
$string['addnewtradeitem'] = 'Добавить новый предмет этого обмена';
$string['addtoinventory'] = 'Добавить предмет в инвентарь';
$string['addtrade'] = 'Добавить виджет «Обмен»';
$string['addtradeitem'] = 'Добавить предмет обмена';
$string['advancedreset'] = 'Принудительный сброс';
$string['aftercreatinglocationhelp'] = 'После того, как вы создали предмет и расположение, вам нужно добавить фрагмент кода к своему курсу для отображаемого предмета. После настройки параметров отображения предмета обмена студентам, скопируйте ниже фрагмент и вставьте его в свой контент, например, в описание задания.';
$string['appearance'] = 'Вид';
$string['backtostart'] = 'Вернуться к главному экрану';
$string['buttontext'] = 'Текст кнопки';
$string['completed'] = 'Завершено';
$string['configurationtitle'] = 'Название тайника';
$string['copypaste'] = 'Скопируйте и вставьте при редактировании в любой активный элемент своего курса.';
$string['copytoclipboard'] = 'Копировать в буфер обмена';
$string['cost'] = 'Цена';
$string['createtrade'] = 'Отправить запрос на сделку';
$string['decline'] = 'Отклонить';
$string['delete'] = 'Удалить';
$string['deletedrop'] = 'Удалить {$a}';
$string['deleteitem'] = 'Удалить {$a}';
$string['deleteswap'] = 'Удалить сделку';
$string['deleteuseritem'] = 'Удалить {$a} для этого пользователя';
$string['details'] = 'Подробности';
$string['dropa'] = 'Расположение «{$a}»';
$string['dropname'] = 'Расположение';
$string['dropname_help'] = 'Название расположения - это полезно только для вас, при создании тайников. Не будет отображаться для студентов!';
$string['drops'] = 'Расположения';
$string['drops_help'] = '<p>Расположения - это места , где расположены ваши предметы в <em>виртуальном мире</em>. Без указания расположения студенты не смогут забрать предметы.</p>
<p>Расположения определяют, где и сколько будет размещено предметов, и как скоро они появятся после того как их забрали.</p>
<p> Например, если студентам для доступа к элементу курса необходимо <em>получить монету</em>, вы, скорее всего, настроите это так, чтобы студенты в этом месте могли её забрать только один раз. </p>
<p> Но если для доступа им нужно <em> 5 монет </em>, вы можете поставить интервал сбора - ежедневно, для мотивации студентов каждый день заходить в курс. </p>
<p> Обратите внимание, что для отображения предметов вам нужно будет добавить специальный код в контент своего курса. </p>';
$string['dropslist'] = 'Список расположений';
$string['dropsnippet'] = 'Фрагмент для «{$a}»';
$string['dropsummary'] = 'Резюме по расположению';
$string['edit'] = 'Редактировать';
$string['editdrop'] = 'Изменить расположение «{$a}»';
$string['edititem'] = 'Изменить предмет «{$a}»';
$string['edittrade'] = 'Редактировать виджет обмена «{$a}»';
$string['edittradeitem'] = 'Редактировать предмет обмена «{$a}»';
$string['eginthecastle'] = 'Например: В замке';
$string['enabled'] = 'Включено';
$string['eventitemacquired'] = 'Предмет получен';
$string['eventswapaccepted'] = 'Сделка пользователя принята';
$string['eventswapcreated'] = 'Сделка создана';
$string['filtershortcodesnotactive'] = 'Фильтр плагина КороткийКод установлен, но еще не включен для этого курса. Посетите <a href="{$a->activeurl}" target="_blank">эту страницу</a>, чтобы включить его для этого курса.';
$string['filtershortcodesnotenabled'] = 'Фильтр плагина Короткий Код установлен, но еще не <a href="{$a->enableurl}" target="_blank">включен</a>.';
$string['filtershortcodesnotinstalled'] = 'Рекомендуется установить <a href="{$a->installurl}" target="_blank">фильтр плагина Короткий Код</a>.  Это сделает работу с плагином проще и надежнее. И позволит использовать «Обмен».';
$string['filterstashdeprecated'] = 'Вы используете старую версию фильтра плагина «Тайник», которая больше не поддерживается. Мы рекомендуем установить и включить <a href="{$a->installurl}" target="_blank">фильтр Короткий Код</a>. Это позволит использовать «Обмен».';
$string['filterstashnotactive'] = 'Фильтр плагина установлен, но не включён в этом курсе. Откройте <a href="{$a->activeurl}" target="_blank">эту страницу</a> для включения фильтра в этом курсе.';
$string['filterstashnotenabled'] = 'Фильтр плагина установлен, но не <a href="{$a->enableurl}" target="_blank">включён</a>.';
$string['filterstashnotinstalled'] = 'Мы рекомендуем вам установить и включить <a href="{$a->installurl}" target="_blank">фильтр плагина Тайник</a>. Это сделает работу с плагином проще и надежнее. И позволит использовать «Обмен».';
$string['filterstashwrongversion'] = 'Установленная версия фильтра устарела, и не позволяет пользоваться «Обменом». Пожалуйста посетите <a href="{$a}" target="_blank">эту страницу</a> для установки актуальной версии.';
$string['from'] = 'Из';
$string['gain'] = 'Приобретение';
$string['gainloss'] = 'Приобрести или отдать';
$string['gaintitle'] = 'Название приобретения';
$string['gaintitle_help'] = 'Название столбца предметов, приобретаемых при обмене.';
$string['grouponly'] = 'Разрешить сделки только между студентами в их группах';
$string['image'] = 'Изображение';
$string['imageandbutton'] = 'Изображение и кнопка';
$string['item'] = 'Предмет';
$string['itemamountlimit'] = 'Предел количества';
$string['itemamountlimit_help'] = 'Максимальное количество этого редкого предмета, доступное всем студентам этого курса.';
$string['itemamountupdate'] = 'Номер для этого предмета был обновлен';
$string['itemdeleted'] = 'Предмет был удален';
$string['itemdetail'] = 'Подробности';
$string['itemdetail_help'] = 'Подробнее об этом предмете';
$string['itemimage'] = 'Изображение';
$string['itemimage_help'] = 'Это изображение будет использоваться для отображения предмета. Рекомендуется размер 100х100 пикселей.';
$string['itemname'] = 'Название предмета';
$string['itemname_help'] = 'Название предмета, которое будет отображаться для студентов.';
$string['items'] = 'Предметы';
$string['itemslist'] = 'Список предметов';
$string['locations'] = 'Расположения';
$string['loss'] = 'Отдача';
$string['losstitle'] = 'Название отдаваемого предмета';
$string['losstitle_help'] = 'Название столбца предметов, отдаваемых при обмене';
$string['maxnumber'] = 'Максимум предметов';
$string['maxpickup'] = 'Всего предметов';
$string['maxpickup_help'] = 'Сколько раз предмет может быть выбран каждым студентом в этом месте. Например, если вы установите значение «1», предмет будет доступен каждому студенту только один раз. Если вы установите значение «5», то каждый студент сможет пять раз приобрести предмет в этом месте. Значение, отличное от «1», лучше использовать в сочетании с «Интервалом сбора».';
$string['myitems'] = 'Мои предметы';
$string['myrequests'] = 'Мои запросы к другим';
$string['navdrops'] = 'Местонахождения';
$string['navinventory'] = 'Предметы тайника';
$string['navitems'] = 'Предметы';
$string['navreport'] = 'Отчёт';
$string['navtrade'] = 'Обмен';
$string['new'] = 'Новый';
$string['noitems'] = 'Предметы не выбраны';
$string['noitemstotrade'] = 'У вас нет предметов для обмена';
$string['nomorescarceitems'] = 'Максимальное количество этого предмета уже выделено. Рассмотрите возможность увеличения дефицита этого предмета.';
$string['none'] = 'Нисколько';
$string['notrecorded'] = 'Не записано';
$string['number'] = 'Номер';
$string['offerdetail'] = 'Вы запросили обмен у этого студента на следующие товары';
$string['offereditems'] = 'Предлагаемые товары';
$string['offers'] = 'Предложения';
$string['offers:zero'] = 'Нет предложений';
$string['offersdetail:zero'] = 'Отправляйтесь в торговый центр, чтобы начать сделку, или подождите, пока кто-нибудь предложит вам сделку.';
$string['participantswithitem'] = 'Участники с этим товаром';
$string['pickupa'] = 'Забрать «{$a}»';
$string['pickupinterval'] = 'Интервал сбора';
$string['pickupinterval_help'] = 'Это определяет время, необходимое для повторного появления предмета для студентов, которые уже выбрали этот предмет. Например, если вы создали элемент «торт», вы можете установить интервал его сбора до 24 часов, чтобы имитировать время, необходимое для того, чтобы пекарь испек еще один. Этот параметр не действует, если для параметра «Поставки» установлено значение «1».';
$string['pluginname'] = 'Тайник';
$string['privacy:metadata:pickup'] = 'Запись о предметах, найденных в конкретном местоположении.';
$string['privacy:metadata:pickup:dropid'] = 'Идентификатор местоположения.';
$string['privacy:metadata:pickup:lastpickup'] = 'Время последней находки.';
$string['privacy:metadata:pickup:pickupcount'] = 'Количество предметов, найденных в местоположении.';
$string['privacy:metadata:pickup:timecreated'] = 'Время создания записи.';
$string['privacy:metadata:pickup:timemodified'] = 'Время последней правки записи.';
$string['privacy:metadata:pickup:userid'] = 'ID пользователя, совершившего находку.';
$string['privacy:metadata:swap'] = 'Запись обменов между пользователями';
$string['privacy:metadata:swap:initiator'] = 'Человек, предлагающий обмен';
$string['privacy:metadata:swap:message'] = 'Сообщение об обмене';
$string['privacy:metadata:swap:messageformat'] = 'Формат сообщения';
$string['privacy:metadata:swap:receiver'] = 'Лицо, которое получает предложение обмена';
$string['privacy:metadata:swap:stashid'] = 'Предмет из тайника, участвующий в обмене';
$string['privacy:metadata:swap:status'] = 'Статус обмена';
$string['privacy:metadata:swap:timecreated'] = 'Время, когда было сделано предложение обмена';
$string['privacy:metadata:swap:timemodified'] = 'Каждый раз, когда торговое предложение обновляется';
$string['privacy:metadata:useritem'] = 'Запись о находках, принадлежащих пользователю.';
$string['privacy:metadata:useritem:itemid'] = 'Идентификатор предмета.';
$string['privacy:metadata:useritem:quantity'] = 'Количество предметов.';
$string['privacy:metadata:useritem:timecreated'] = 'Время создания записи.';
$string['privacy:metadata:useritem:timemodified'] = 'Время последней правки записи.';
$string['privacy:metadata:useritem:userid'] = 'ID пользователя, которому принадлежит предмет.';
$string['quantity'] = 'Количество';
$string['reallydeletedrop'] = 'Вы уверены, что хотите удалить это расположение?';
$string['reallydeleteitem'] = 'Вы уверены, что хотите удалить этот предмет?';
$string['reallyresetstashof'] = 'Вы уверены, что хотите полностью очистить тайник {$a}?';
$string['received'] = 'Полученный';
$string['removeswapdetails'] = 'Вы хотите удалить детали этой сделки?';
$string['report'] = 'Отчёт';
$string['reportadditional'] = 'Расширенное управление товарами пользователя';
$string['requestdetail'] = 'Этот студент запросил следующий обмен';
$string['requesteditems'] = 'Запрошенные товары';
$string['requestsent'] = 'Запрос был отправлен';
$string['requestsforme'] = 'Запросы для меня';
$string['requestswap'] = 'Сделай предложение';
$string['resetstashof'] = 'Очистить тайник {$a}';
$string['saveandnext'] = 'Сохранить и продолжить';
$string['savechanges'] = 'Сохранить изменения';
$string['savequantity'] = 'Сохранить количество для товара {$a}';
$string['scarceitem'] = 'Редкий предмет';
$string['scarceitem_help'] = 'Доступно ограниченное количество экземпляров этого предмета. Если вы ограничите предел 5, то только пять экземпляров будут находиться в курсе.';
$string['searchitems'] = 'Поиск предметов';
$string['selectanitem'] = 'Выберите товар';
$string['selectauser'] = 'Выберите пользователя';
$string['sendtraderequest'] = 'Отправить запрос на обмен';
$string['sent'] = 'Отправил';
$string['settings'] = 'Настройки';
$string['setup'] = 'Установить';
$string['shortcode:stashdrop'] = 'Отображает предмет, который должен подобрать пользователь';
$string['shortcode:stashtrade'] = 'Отображает виджет обмена';
$string['snippet'] = 'Фрагмент';
$string['stash'] = 'Тайник';
$string['stash:acquireitems'] = 'Забирать элементы';
$string['stash:addinstance'] = 'Добавлять блок на страницу';
$string['stash:view'] = 'Видеть тайник и его содержимое';
$string['stashdisabled'] = 'Тайник отключен. Блок добавлять в курс?';
$string['swapnolongerpossible'] = 'Это предложение больше невозможно, вероятно, потому, что либо у вас, либо у участника больше нет этих предметов';
$string['text'] = 'Текст';
$string['thedrophasbeendeleted'] = 'Расположение «{$a}» было удалено';
$string['theiritems'] = 'Их предметы';
$string['theitemhasbeendeleted'] = 'Элемент «{$a}» был удален';
$string['thestashofhasbeenreset'] = 'Тайник «{$a}» был очищен';
$string['thetradehasbeendeleted'] = 'Виджет обмена «{$a}» удален';
$string['thetradeitemhasbeendeleted'] = 'Предмет обмена удалён';
$string['tidyswap'] = 'Удалить все запросы на обмен, которые были выполнены';
$string['title'] = 'Название';
$string['to'] = 'к';
$string['trade'] = 'Обмен';
$string['tradecenter'] = 'Центр обмена';
$string['tradecenter:zero'] = 'Выше выберите товар или пользователя';
$string['tradecenterdetail:zero'] = 'Найдя предмет, вы получите список пользователей с этими предметами, чтобы начать обмен. При выборе пользователя отобразится список его предметов для обмена.';
$string['tradecreated'] = 'Создать обмен «{$a}»';
$string['tradedetails'] = 'Детали обмена';
$string['tradeitem'] = 'Предмет обмена';
$string['tradeitems'] = 'Предметы обмена';
$string['tradelist'] = 'Список виджетов обмена';
$string['tradename'] = 'Название обмена';
$string['tradename_help'] = 'Название виджета обмена, будет отображаться для студентов!';
$string['tradesnotenabled'] = 'Обмен запрещён';
$string['tradestatusapproved'] = 'Обмен одобрен';
$string['tradestatuscompleted'] = 'Обмен завершён';
$string['tradestatusdeclined'] = 'Обмен отклонен';
$string['tradestatusviewed'] = 'Обмен просмотрен';
$string['tradewidget'] = 'Создать обмен';
$string['tradewidget_help'] = '<p>Виджет обмена позволяет получать предметы из левого столбца в обмен на предметы правого столбца.</p>
<p>Нажмите символ «+» в нижней части окна, чтобы добавить элементы в этот столбец.</p >
<p>Количество элементов должно быть положительным числом. </p>';
$string['unlimited'] = 'Неограниченный';
$string['useritemswap'] = 'Разрешить студентам обмениваться товарами друг с другом';
$string['view'] = 'вид';
$string['whataredrops'] = 'Где находится?';
$string['whatisadrophelp'] = 'Расположение - это место, где хранится элемент.';
$string['whatisatradedrophelp'] = 'Расположение - место, где вы хотите расположить виджет обмена';
$string['whatisthisthing'] = 'Что это? Я уверен, Вы найдете ему применение!';
$string['whatsnext'] = 'Что дальше?';
$string['whatsthis'] = 'Что это?';
$string['yourinventoryisempty'] = 'Ваш инвентарь пуст.';
