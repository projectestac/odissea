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
 * Strings for component 'sms', language 'uk', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Дії';
$string['countrycode'] = 'Код країни за умовчанням';
$string['countrycode_help'] = 'Код країни додається до телефонних номерів, якщо користувачі не вводять власний код країни. Введіть число без символу «+» на початку.';
$string['createnewgateway'] = 'Створіть новий SMS-шлюз';
$string['delete_sms_gateway'] = 'Видалити SMS-шлюз';
$string['delete_sms_gateway_confirmation'] = 'Це призведе до видалення SMS-шлюзу {$a->gateway}.';
$string['edit_sms_gateway'] = 'Редагувати {$a->gateway} SMS-шлюз';
$string['gateway'] = 'Шлюз';
$string['gateway_name'] = 'Назва шлюзу';
$string['manage_sms_gateways'] = 'Керуйте SMS-шлюзами';
$string['phonenumbernotvalid'] = 'Формат номера телефону не розпізнається: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Зберігає повідомлення, надіслані через SMS';
$string['privacy:metadata:sms_messages:content'] = 'Текст повідомлення';
$string['privacy:metadata:sms_messages:id'] = 'Ідентифікатор повідомлення';
$string['privacy:metadata:sms_messages:recipient'] = 'Номер телефону, на який надіслано повідомлення';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Користувач, якому було надіслано повідомлення, якщо відомо';
$string['privacy:metadata:sms_messages:status'] = 'Статус повідомлення';
$string['privacy:metadata:sms_messages:timecreated'] = 'Час створення повідомлення';
$string['privacy:sms:sensitive_not_shown'] = 'Вміст цього повідомлення не було збережено, оскільки воно було позначено як таке, що містить конфіденційний вміст.';
$string['select_sms_gateways'] = 'Провайдер SMS шлюзу';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Неможливо видалити SMS-шлюз {$a->gateway}. Шлюз або використовується, або виникла проблема з базою даних. Перевірте, чи активний шлюз, або зверніться по допомогу до адміністратора бази даних.';
$string['sms_gateway_deleted'] = '{$a->gateway} Шлюз SMS видалено';
$string['sms_gateway_disable_failed'] = 'Cannot disable the SMS gateway. The gateway is either in use or there\'s a database issue. Check if the gateway is active or contact your database administrator for help.';
$string['sms_gateways'] = 'SMS-шлюзи';
$string['sms_gateways_info'] = 'Створюйте та керуйте SMS-шлюзами для надсилання SMS-повідомлень із вашого сайту.';
$string['status:gateway_failed'] = 'Шлюзу не вдалося надіслати повідомлення';
$string['status:gateway_not_available'] = 'Шлюз недоступний для надсилання повідомлення';
$string['status:gateway_queued'] = 'Повідомлення ставиться в чергу для надсилання шлюзом';
$string['status:gateway_rejected'] = 'Шлюз відхилив повідомлення';
$string['status:gateway_sent'] = 'Повідомлення надіслано шлюзом';
$string['status:message_over_size'] = 'Повідомлення завелике для надсилання через шлюз';
$string['status:unknown'] = 'Не вдалося визначити статус повідомлення';
