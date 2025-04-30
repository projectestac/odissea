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
 * Strings for component 'payment', language 'ru', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Архивировано';
$string['accountconfignote'] = 'Платежные шлюзы для этого счета будут настраиваться отдельно.';
$string['accountdeleteconfirm'] = 'Если в этом счете есть предыдущие платежи, он будет заархивирован, в противном случае его данные конфигурации будут удалены безвозвратно. Вы уверены что хотите продолжить?';
$string['accountidnumber'] = 'Идентификационный номер';
$string['accountidnumber_help'] = 'Идентификационный номер используется только при сопоставлении учетной записи с внешними системами и нигде на сайте не отображается. Если у учетной записи есть официальное кодовое имя, его можно ввести, в противном случае оставьте поле пустым.';
$string['accountname'] = 'Название счета';
$string['accountname_help'] = 'Как эта учетная запись будет идентифицироваться для учителей или менеджеров, которые настраивают платежи (например, в плагине регистрации на курс).';
$string['accountnotavailable'] = 'Недоступен';
$string['createaccount'] = 'Создать платежный счет';
$string['deleteorarchive'] = 'Удалить или заархивировать';
$string['editpaymentaccount'] = 'Редактировать платежный счет';
$string['eventaccountcreated'] = 'Платежный счет создан';
$string['eventaccountdeleted'] = 'Платежный счет удален';
$string['eventaccountupdated'] = 'Платежный счет обновлен';
$string['feeincludesurcharge'] = '{$a->fee} (включает {$a->surcharge}% доплаты за использование этого типа оплаты)';
$string['gatewaycannotbeenabled'] = 'Платежный шлюз не может быть включен, потому что конфигурация не завершена.';
$string['gatewaydisabled'] = 'Отключено';
$string['gatewayenabled'] = 'Включено';
$string['gatewaynotfound'] = 'Шлюз не найден';
$string['gotomanageplugins'] = 'Включение и отключение платежных шлюзов и установка доплат через {$a}.';
$string['gotopaymentaccounts'] = 'Вы можете создать несколько платежных счетов, используя любой из этих шлюзов на странице {$a}';
$string['hidearchived'] = 'Скрыть архив';
$string['noaccountsavilable'] = 'Нет доступных платежных счетов.';
$string['nocurrencysupported'] = 'Оплата в любой валюте не поддерживается. Убедитесь, что включен хотя бы один платежный шлюз.';
$string['nogateway'] = 'Нет платежного шлюза, который можно было бы использовать.';
$string['nogatewayselected'] = 'Сначала вам нужно выбрать платежный шлюз.';
$string['paymentaccount'] = 'Платежный счет';
$string['paymentaccounts'] = 'Платежные счета';
$string['paymentaccountsexplained'] = 'Создайте один или несколько платежных счетов для этого сайта. Каждый счет включает конфигурацию доступных платежных шлюзов. Человек, который настраивает платежи на сайте (например, оплату зачисления на курс), сможет выбирать из доступных счетов.';
$string['payments'] = 'Платежи';
$string['privacy:metadata:database:payments'] = 'Информация о платежах.';
$string['privacy:metadata:database:payments:amount'] = 'Сумма к оплате.';
$string['privacy:metadata:database:payments:currency'] = 'Валюта платежа.';
$string['privacy:metadata:database:payments:gateway'] = 'Платежный шлюз, который используется для оплаты.';
$string['privacy:metadata:database:payments:timecreated'] = 'Время, когда была произведена оплата.';
$string['privacy:metadata:database:payments:timemodified'] = 'Время последнего обновления платежной записи.';
$string['privacy:metadata:database:payments:userid'] = 'Пользователь, совершивший оплату.';
$string['restoreaccount'] = 'Восстановить';
$string['selectpaymenttype'] = 'Выберите способ оплаты';
$string['showarchived'] = 'Показать архив';
$string['supportedcurrencies'] = 'Принимаемые валюты';
$string['surcharge'] = 'Доплата (в процентах)';
$string['surcharge_desc'] = 'Доплата - это дополнительный процент, взимаемый с пользователей, которые выбирают оплату через этот платежный шлюз.';
