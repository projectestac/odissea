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
 * Strings for component 'enrol_paypal', language 'uk', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Призначення ролі';
$string['businessemail'] = 'Ел.пошта бізнесового PayPal';
$string['businessemail_desc'] = 'Адреса електронної пошти вашого бізнес акаунту PayPal';
$string['cost'] = 'Вартість реєстрації';
$string['costerror'] = 'Вартість реєстрації не є числовою';
$string['costorkey'] = 'Будь ласка, виберіть один з наступних методів реєстрації.';
$string['currency'] = 'Валюта';
$string['defaultrole'] = 'Призначення типової ролі';
$string['defaultrole_desc'] = 'Вкажіть роль, на яку повинні бути призначені користувачі через PayPal реєстрацію';
$string['enrolenddate'] = 'Дата завершення';
$string['enrolenddate_help'] = 'Якщо цей параметр включений, користувачі можуть реєструватися до цієї дати.';
$string['enrolenddaterror'] = 'Дата завершення реєстрації не може бути ранішою за дату початку';
$string['enrolperiod'] = 'Період знаходження на курсі після реєстрації';
$string['enrolperiod_desc'] = 'Типовий термін періоду реєстрації (в секундах).';
$string['enrolperiod_help'] = 'Період часу, впродовж якого реєстрація є дійсною з моменту запису студента на курс. Якщо вимкнуто (заборонено), цей період буде необмеженим.';
$string['enrolstartdate'] = 'Дата початку';
$string['enrolstartdate_help'] = 'Якщо цей параметр включений, користувачі можуть бути зараховані тільки з цієї дати.';
$string['errdisabled'] = 'Плагін реєстрації PayPal вимкнено і не обробляє сповіщення про платежі.';
$string['erripninvalid'] = 'Повідомлення про миттєвий платіж не було перевірено PayPal.';
$string['errpaypalconnect'] = 'Не вдалося підключитися до {$a->url}, щоб перевірити сповіщення про миттєвий платіж: {$a->result}';
$string['expiredaction'] = 'Дія по закінченню реєстрації';
$string['expiredaction_help'] = 'Виберіть дію до виконання при закінченні реєстрації користувача. Будь ласка, зверніть увагу, що деякі дані користувача і налаштування будуть очищені в курсу під час процесу відрахування з курсу.';
$string['mailadmins'] = 'Повідомляти адміністратора';
$string['mailstudents'] = 'Повідомляти студентів';
$string['mailteachers'] = 'Повідомляти викладачів';
$string['messageprovider:paypal_enrolment'] = 'PayPal повідомлення про зарахування';
$string['nocost'] = 'Немає платних зарахувань в цьому курсі!';
$string['paypal:config'] = 'Налаштовувати варіанти зарахування PayPal';
$string['paypal:manage'] = 'Управляти зарахованими користувачами';
$string['paypal:unenrol'] = 'Відраховувати користувачів з курсу';
$string['paypal:unenrolself'] = 'Відраховувати себе з курсу';
$string['paypalaccepted'] = 'Налаштовувати варіанти зарахування PayPal';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Модуль PayPal дозволяє вам встановити платні курси. Якщо вартість будь-якого курсу дорівнює нулю, то оплата у студентів при зарахуванні не вимагається. Існує вартість на веб-сайті, яка буде застосовуватися як типова для всіх курсів цього сайту, а також курс може мати індивідуальні налаштування вартості. Вартість курсу перевизначає вартість сайту.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Інформація про транзакції PayPal для реєстрації PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Адреса електронної пошти або ідентифікатор облікового запису PayPal одержувача платежу (тобто продавця).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'Ідентифікатор курсу, який продається.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'Ідентифікатор екземпляра зарахування на курс.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Повна назва курсу, зарахування на який продано.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Примітка, яка була введена покупцем у поле примітки про платежі веб-сайту PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Повне ім\'я покупця.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'У разі відшкодування, сторнування чи скасованої сторнування це буде ідентифікатор трансакції вихідної трансакції.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Статус платежу.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Указує, чи був платіж профінансований за допомогою eCheck (echeck), чи був профінансований балансом PayPal, кредитною карткою чи миттєвим переказом (миттєвим).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Причина, чому статус платежу очікує на розгляд (якщо є).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Причина, чому статус платежу — Скасовано, Відшкодовано, Скасовано_Скасовано або Відмовлено (якщо статус один із них).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Основна електронна адреса одержувача платежу (тобто продавця).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Унікальний ідентифікатор облікового запису PayPal одержувача платежу (тобто продавця).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Сума податку, нарахованого при оплаті.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Час сповіщення Moodle від PayPal про платіж.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Оригінальний ідентифікаційний номер транзакції продавця для платежу від покупця, проти якого зареєстровано справу';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'Ідентифікатор користувача, який придбав реєстрацію на курс.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Плагін для реєстрації PayPal передає дані користувача з Moodle на веб-сайт PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Адреса користувача, який купує курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Місто користувача, який купує курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Країна користувача, який купує курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Рядок, розділений дефісом, що містить ідентифікатор користувача (покупця), ідентифікатор курсу, ідентифікатор екземпляра реєстрації.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Адреса електронної пошти користувача, який купує курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Ім’я користувача, який купує курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Прізвище користувача, який купує курс.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Повне ім\'я покупця.';
$string['processexpirationstask'] = 'Завдання надсилання сповіщень про закінчення терміну дії реєстрації PayPal';
$string['sendpaymentbutton'] = 'Оплатити з допомогою Paypal';
$string['status'] = 'Дозволити зарахування через PayPal';
$string['status_desc'] = 'Дозволити користувачам використовувати PayPal для зарахування до курсу.';
$string['transactions'] = 'Трансакції PayPal';
$string['unenrolselfconfirm'] = 'Ви дійсно бажаєте відрахуватися з курсу "{$a}"?';
