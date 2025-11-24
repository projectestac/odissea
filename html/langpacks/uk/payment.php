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
 * Strings for component 'payment', language 'uk', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Заархівовано';
$string['accountconfignote'] = 'Платіжні шлюзи для цього облікового запису будуть налаштовані окремо';
$string['accountdeleteconfirm'] = 'Якщо цей обліковий запис мав попередні платежі, він буде заархівований, інакше дані його конфігурації будуть видалені назавжди. Ви впевнені, що хочете продовжити?';
$string['accountidnumber'] = 'ID номер';
$string['accountidnumber_help'] = 'Ідентифікаційний номер використовується лише під час зіставлення облікового запису із зовнішніми системами і не відображається ніде на сайті. Якщо обліковий запис має офіційну кодову назву, його можна ввести, інакше поле можна залишити порожнім.';
$string['accountname'] = 'Ім\'я облікового запису';
$string['accountname_help'] = 'Як цей обліковий запис буде ідентифіковано для викладачів або менеджерів, які налаштовують платежі (наприклад, у плагіні для реєстрації на курс).';
$string['accountnotavailable'] = 'Недоступний';
$string['createaccount'] = 'Створити платіжний рахунок';
$string['deleteorarchive'] = 'Видалити або заархівувати';
$string['editpaymentaccount'] = 'Редагувати платіжний рахунок';
$string['eventaccountcreated'] = 'Створено платіжний рахунок';
$string['eventaccountdeleted'] = 'Платіжний рахунок видалено';
$string['eventaccountupdated'] = 'Платіжний рахунок оновлено';
$string['feeincludesurcharge'] = '{$a->fee} (включає {$a->surcharge}% надбавку за використання цього типу оплати)';
$string['gatewaycannotbeenabled'] = 'Платіжний шлюз не можна ввімкнути, оскільки конфігурація неповна.';
$string['gatewaydisabled'] = 'Вимкнено';
$string['gatewayenabled'] = 'Увімкнено';
$string['gatewaynotfound'] = 'Шлюз не знайдено';
$string['gotomanageplugins'] = 'Увімкнути та вимикати платіжні шлюзи та встановлювати доплати через {$a}.';
$string['gotopaymentaccounts'] = 'Ви можете створити кілька платіжних облікових записів за допомогою будь-якого з цих шлюзів на сторінці {$a}';
$string['hidearchived'] = 'Сховати в архіві';
$string['noaccountsavilable'] = 'Немає доступних платіжних рахунків.';
$string['nocurrencysupported'] = 'Оплата в будь-якій валюті не підтримується. Переконайтеся, що принаймні один платіжний шлюз увімкнено.';
$string['nogateway'] = 'Немає платіжного шлюзу, яким можна скористатися.';
$string['nogatewayselected'] = 'Спочатку потрібно вибрати платіжний шлюз.';
$string['paymentaccount'] = 'Платіжний рахунок';
$string['paymentaccounts'] = 'Платіжні рахунки';
$string['paymentaccountsexplained'] = 'Створіть один або кілька платіжних облікових записів для цього сайту. Кожен обліковий запис містить конфігурацію доступних платіжних шлюзів. Людина, яка налаштовує платежі на сайті (наприклад, оплата за реєстрацію на курс), зможе вибрати з доступних облікових записів.';
$string['payments'] = 'Виплати';
$string['privacy:metadata:database:payments'] = 'Інформація про виплати.';
$string['privacy:metadata:database:payments:amount'] = 'Сума для оплати.';
$string['privacy:metadata:database:payments:currency'] = 'Валюта платежу.';
$string['privacy:metadata:database:payments:gateway'] = 'Платіжний шлюз, який використовується для здійснення платежу.';
$string['privacy:metadata:database:payments:timecreated'] = 'Час, коли був здійснений платіж.';
$string['privacy:metadata:database:payments:timemodified'] = 'Час останнього оновлення платіжного запису.';
$string['privacy:metadata:database:payments:userid'] = 'Користувач, який здійснив платіж.';
$string['restoreaccount'] = 'Відновлення';
$string['selectpaymenttype'] = 'Виберіть тип оплати';
$string['showarchived'] = 'Показати в архіві';
$string['supportedcurrencies'] = 'Підтримувані валюти';
$string['surcharge'] = 'Доплата (у відсотках)';
$string['surcharge_desc'] = 'Додаткова плата — це додатковий відсоток, який стягується з користувачів, які вирішують платити за допомогою цього платіжного шлюзу.';
