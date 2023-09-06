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
 * Strings for component 'enrol_paypal', language 'ru', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Назначить роль';
$string['businessemail'] = 'Адрес электронной почты PayPal';
$string['businessemail_desc'] = 'Адрес электронной почты Вашего аккаунта PayPal';
$string['cost'] = 'Стоимость зачисления';
$string['costerror'] = 'Стоимость зачисления не является числом';
$string['costorkey'] = 'Выберите один из следующих способов зачисления.';
$string['currency'] = 'Валюта';
$string['defaultrole'] = 'Назначение роли по умолчанию';
$string['defaultrole_desc'] = 'Выберите роль, которая должна быть назначена зачисленным пользователям PayPal.';
$string['enrolenddate'] = 'Дата окончания';
$string['enrolenddate_help'] = 'Если параметр включен, то пользователи могут обучаться только до этой даты.';
$string['enrolenddaterror'] = 'Дата окончания зачисления не может быть установлена ранее даты начала';
$string['enrolperiod'] = 'Продолжительность обучения';
$string['enrolperiod_desc'] = 'Продолжительность зачисления на курс по умолчанию. Если установлен ноль, то по умолчанию продолжительность обучения будет неограниченной.';
$string['enrolperiod_help'] = 'Продолжительность обучения, начинается с момента зачисления пользователя. Если параметр выключен, то продолжительность обучения не ограничена.';
$string['enrolstartdate'] = 'Дата начала';
$string['enrolstartdate_help'] = 'Если параметр включен, то пользователи могут обучаться только начиная с этой даты.';
$string['errdisabled'] = 'Плагин зачисления PayPal отключен и не обрабатывает уведомления о платежах.';
$string['erripninvalid'] = 'Уведомление о текущем платеже не было подтверждено PayPal.';
$string['errpaypalconnect'] = 'Не удалось подключиться к {$a->url}, чтобы проверить уведомление о текущем платеже: {$a->result}';
$string['expiredaction'] = 'Действие при истечении срока зачисления';
$string['expiredaction_help'] = 'Выберите проводимое действие при истечении зачисления пользователя. Пожалуйста, обратите внимание, что некоторые пользовательские данные и настройки будут очищены из курса во время отчисления.';
$string['mailadmins'] = 'Сообщение администратору';
$string['mailstudents'] = 'Уведомить студентов';
$string['mailteachers'] = 'Сообщение преподавателям';
$string['messageprovider:paypal_enrolment'] = 'Сообщения о зачислении PayPal';
$string['nocost'] = 'Зачисление на этот курс бесплатно!';
$string['paypal:config'] = 'Настраивать экземпляры способа записи на курс «PayPal»';
$string['paypal:manage'] = 'Управлять записанными на курс пользователями';
$string['paypal:unenrol'] = 'Исключать пользователей из курса';
$string['paypal:unenrolself'] = 'Отчислять себя из курса';
$string['paypalaccepted'] = 'Принятые платежи PayPal';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Модуль PayPal позволяет создавать платные курсы. Если стоимость курса равна нулю, то студента не попросят заплатить за вход. Вы можете задать стоимость по умолчанию для любого курса всего сайта. В настройках отдельного курса можно установить его стоимость. Стоимость конкретного курса перекрывает стоимость курса всего сайта по умолчанию.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Информация о транзакциях PayPal для зачислений.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Адрес электронной почты или ID учетной записи PayPal получателя платежа (продавца).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID курса, который продан.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID экземпляра регистрации в курсе.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Полное название курса, зачисление на который было продано.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Примечание, введенное покупателем в поле примечания к платежам на веб-сайте PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'ФИО покупателя.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'В случае возврата, отмены или отмены отмены это будет ID транзакции исходной транзакции.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Состояние платежа.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Сведения о платеже - он произведен с помощью eCheck или с баланса PayPal, кредитной карты или текущего перевода.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Причина, по которой платеж ожидает рассмотрения (если это так).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Причина, по которой статус платежа - «Аннулирован», «Возмещен», «Отменен, аннулирован» или «Отклонен» (если статус является одним из них).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Основной адрес электронной почты получателя платежа (продавца).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Уникальный идентификатор учетной записи PayPal получателя платежа (продавца).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Сумма налога, взимаемого при оплате.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Время, когда PayPal уведомит Moodle о платеже.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Оригинальный идентификационный номер транзакции продавца для платежа от покупателя.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID пользователя, который оплатил запись на курс.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Плагин зачисления PayPal передает данные пользователя из Moodle на веб-сайт PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Адрес пользователя, покупающего курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Город пользователя, покупающего курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Страна пользователя, покупающего курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Строка, разделенная дефисом, содержащая ID пользователя (покупателя), ID курса, ID экземпляра регистрации.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Адрес электронной почты пользователя, покупающего курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Имя пользователя, покупающего курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Фамилия пользователя, покупающего курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'ФИО покупателя.';
$string['processexpirationstask'] = 'Отправка уведомлений об истечении срока действия зачисления PayPal';
$string['sendpaymentbutton'] = 'Оплатить через PayPal';
$string['status'] = 'Разрешить запись из PayPal';
$string['status_desc'] = 'Позволить пользователям использовать PayPal для зачисления в курс  по умолчанию.';
$string['transactions'] = 'Транзакции PayPal';
$string['unenrolselfconfirm'] = 'Вы действительно хотите исключить себя из курса «{$a}»?';
