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
 * Strings for component 'sms', language 'ru', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['countrycode'] = 'Код страны по умолчанию';
$string['countrycode_help'] = 'Код страны, который будет добавлен перед номерами телефонов, если пользователи не введут свой собственный код страны. Введите номер без начального символа «+».';
$string['createnewgateway'] = 'Создать новый СМС-шлюз';
$string['delete_sms_gateway'] = 'Удалить СМС-шлюз';
$string['delete_sms_gateway_confirmation'] = 'Это приведет к удалению СМС-шлюза {$a->gateway}.';
$string['edit_sms_gateway'] = 'Изменить СМС-шлюз {$a->gateway}';
$string['gateway'] = 'Шлюз';
$string['gateway_name'] = 'Название шлюза';
$string['manage_sms_gateways'] = 'Управление СМС-шлюзами';
$string['phonenumbernotvalid'] = 'Формат номера телефона не распознан: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Сохраняет сообщения, отправленные через СМС';
$string['privacy:metadata:sms_messages:content'] = 'Текст сообщения';
$string['privacy:metadata:sms_messages:id'] = 'ID сообщения';
$string['privacy:metadata:sms_messages:recipient'] = 'Номер телефона, на который было отправлено сообщение';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Пользователь, которому было отправлено сообщение, если он известен';
$string['privacy:metadata:sms_messages:status'] = 'Статус сообщения';
$string['privacy:metadata:sms_messages:timecreated'] = 'Время создания сообщения';
$string['privacy:sms:sensitive_not_shown'] = 'Содержимое этого сообщения не было сохранено, поскольку оно было помечено как содержащее конфиденциальную информацию.';
$string['select_sms_gateways'] = 'Провайдер СМС-шлюза';
$string['sms'] = 'СМС';
$string['sms_gateway_delete_failed'] = 'Невозможно удалить СМС-шлюз {$a->gateway}. Шлюз либо используется, либо возникла проблема с базой данных. Проверьте, активен ли шлюз или обратитесь за помощью к администратору базы данных.';
$string['sms_gateway_deleted'] = 'СМС-шлюз {$a->gateway} удален';
$string['sms_gateway_disable_failed'] = 'Невозможно отключить СМС-шлюз. Шлюз либо используется, либо возникла проблема с базой данных. Проверьте, активен ли шлюз или обратитесь за помощью к администратору базы данных.';
$string['sms_gateways'] = 'СМС-шлюзы';
$string['sms_gateways_info'] = 'Создавайте СМС-шлюзы и управляйте ими для отправки СМС-сообщений с вашего сайта.';
$string['status:gateway_failed'] = 'Не удалось отправить сообщение через шлюз';
$string['status:gateway_not_available'] = 'Шлюз недоступен для отправки сообщения';
$string['status:gateway_queued'] = 'Сообщение поставлено в очередь для отправки через шлюз';
$string['status:gateway_rejected'] = 'Шлюз отклонил сообщение';
$string['status:gateway_sent'] = 'Сообщение было отправлено через шлюз';
$string['status:message_over_size'] = 'Сообщение слишком большое для отправки через шлюз';
$string['status:unknown'] = 'Не удалось определить статус сообщения';
