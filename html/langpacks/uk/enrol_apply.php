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
 * Strings for component 'enrol_apply', language 'uk', version '4.4'.
 *
 * @package     enrol_apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationcancelednotification'] = 'Вашу заявку на зарахування на курс скасовано.';
$string['applicationconfirmednotification'] = 'Вашу заявку на зарахування на курс підтверджено.';
$string['applicationdeferrednotification'] = 'Вашу заявку на зарахування на курс було відкладено (ви зараз у списку очікування).';
$string['apply:config'] = 'Налаштування випадків зарахування';
$string['apply:manage'] = 'Управління запитами на зарахування';
$string['apply:manageapplications'] = 'Керувати реєстрацією заявки';
$string['apply:unenrol'] = 'Відписати користувачів з курсу';
$string['apply:unenrolself'] = 'Відписатися від курсу';
$string['applycomment'] = 'Коментар';
$string['applydate'] = 'Дата зарахування';
$string['applymanage'] = 'Управлінням зарахуваннями';
$string['applyuser'] = 'Ім\'я / Прізвище';
$string['applyusermail'] = 'Email';
$string['btncancel'] = 'Скасувати запити';
$string['btnconfirm'] = 'Підтвердити запити';
$string['btnwait'] = 'Відкласти запити';
$string['cancelmail_heading'] = 'Електронна пошта про скасування';
$string['cancelmailcontent'] = 'Відключити вміст електронного листа';
$string['cancelmailcontent_desc'] = 'Будь-ласка використовуйте спеціальні блоки для автоматичної заміни у листі.<br>
{firstname} : Ім\'я користувача ;{lastname} : Прізвище користувача; {content} : Назва курсу; {username} : Логін користувача';
$string['cancelmailsubject'] = 'Відключити заголовок електронного листа';
$string['cantenrol'] = 'Реєстрація вимкнена або неактивна';
$string['comment'] = 'Коментар';
$string['confirmenrol'] = 'Управління поданнями на зарахування';
$string['confirmmail_heading'] = 'Електронний лист підтвердження';
$string['confirmmailcontent'] = 'Підтвердити вміст електронного листа';
$string['confirmmailcontent_desc'] = 'Будь-ласка використовуйте спеціальні блоки для автоматичної заміни у листі.<br>
Будь ласка, використовуйте такі спеціальні позначки, щоб замінити вміст електронної пошти даними з Moodle.<br/>{firstname}: ім’я користувача; {content}:Назва курсу;{lastname}:Прізвище користувача;{username}:Ім’я користувача для реєстрації користувачів;{timeend}: Дата закінчення реєстрації';
$string['confirmmailsubject'] = 'Підтвердити заголовок електронного листа';
$string['confirmusers'] = 'Підтвердити зарахування';
$string['confirmusers_desc'] = 'Користувачі в сірих рядках знаходяться в листі очікування.';
$string['coursename'] = 'Курс';
$string['custom_label'] = 'Спеціальна мітка';
$string['defaultperiod'] = 'Тривалість реєстрації за замовчуванням';
$string['defaultperiod_desc'] = 'Період дії реєстрації за замовчуванням. Якщо встановлено значення нуль, тривалість реєстрації буде необмежена за замовчуванням.';
$string['defaultperiod_help'] = 'Період дії за замовчуванням, починаючи з моменту реєстрації користувача. Якщо вимкнено, тривалість реєстрації буде необмежена за замовчуванням.';
$string['editdescription'] = 'Опис текстового поля';
$string['enrolname'] = 'Підтвердження зарахування користувача';
$string['enrolperiod'] = 'Тривалість реєстрації';
$string['enrolperiod_desc'] = 'Період дії реєстрації за замовчуванням. Якщо встановлено значення нуль, тривалість реєстрації буде необмежена за замовчуванням.';
$string['enrolperiod_help'] = 'Час дії реєстрації, починаючи з моменту реєстрації користувача. Якщо вимкнено, тривалість реєстрації буде необмеженою.';
$string['enrolusers'] = 'Зарахувати користувачів';
$string['expiredaction'] = 'Дія закінчення реєстрації';
$string['expiredaction_help'] = 'Виберіть дію, яку потрібно виконати, коли закінчиться термін реєстрації користувача. Зверніть увагу, що деякі дані користувача та налаштування видаляються з курсу під час скасування реєстрації на курс.';
$string['expiry_heading'] = 'Налаштування терміну дії';
$string['expirymessageenrolledbody'] = 'Шановний {$a->user}!

Це сповіщення про те, що ваша реєстрація на курс \'{$a->course}\' закінчується {$a->timeend}.

Якщо вам потрібна допомога, зв’яжіться з {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Застосувати сповіщення про закінчення реєстрації';
$string['expirymessageenrollerbody'] = 'Термін дії заявки на реєстрацію на курс "{$a->course}" закінчиться протягом наступного {$a->threshold} для таких користувачів:

     {$a->users}

Щоб продовжити їх реєстрацію, перейдіть на сторінку {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Застосувати сповіщення про закінчення реєстрації';
$string['expirynotifyall'] = 'Викладач і зареєстрований користувач';
$string['expirynotifyenroller'] = 'Тільки вчитель';
$string['group'] = 'Групове завдання';
$string['group_help'] = 'Ви можете призначити жодну або декілька груп';
$string['mailtoteacher_suject'] = 'Нові запити на зарахування!';
$string['maxenrolled'] = 'Максимальна кількість зареєстрованих користувачів';
$string['maxenrolled_help'] = 'Вказує максимальну кількість користувачів, які можуть самостійно зареєструватися. 0 означає відсутність обмежень.';
$string['maxenrolled_tip_1'] = 'з';
$string['maxenrolled_tip_2'] = 'місця вже заброньовані.';
$string['maxenrolledreached_left'] = 'Максимально дозволена кількість користувачів';
$string['maxenrolledreached_right'] = 'вже досягнуто.';
$string['messageprovider:application'] = 'Повідомлення про зарахування на курс';
$string['messageprovider:cancelation'] = 'Повідомлення про скасування заявки на зарахування на курс';
$string['messageprovider:confirmation'] = 'Повідомлення про підтвердження заявки про зарахування на курс';
$string['messageprovider:expiry_notification'] = 'Застосувати сповіщення про закінчення реєстрації';
$string['messageprovider:waitinglist'] = 'Заява про зарахування на курс відкладає повідомлення';
$string['newapplicationnotification'] = 'Очікує на розгляд нова заявка на зарахування на курс.';
$string['newenrols'] = 'Дозволити запит на реєстрацію нового курсу';
$string['notification'] = '<b>Заявку на зарахування успішно відправлено</b>. <br/><br/>Як тільки вашу заявку буде оброблено - вас буде проінформовано електронною поштою. Якщо ви хочете подати заявки на інші курси - клацніть на "Перегляд курсів" у меню зверху.';
$string['notify_desc'] = 'Визначте, хто отримує сповіщення про нові заявки на реєстрацію.';
$string['notify_heading'] = 'Налаштування сповіщень';
$string['notifycoursebased'] = 'Повідомлення про нову заявку на зарахування (на основі екземпляра, наприклад, викладачі курсу)';
$string['notifycoursebased_desc'] = 'За замовчуванням для нових екземплярів: сповістити всіх, хто має можливість «Керувати реєстрацією застосувати» для відповідного курсу (наприклад, викладачів та менеджерів)';
$string['notifyglobal'] = 'Повідомлення про нову заявку на реєстрацію (глобальне, наприклад, глобальні менеджери та адміністратори)';
$string['notifyglobal_desc'] = 'Визначте, хто отримує сповіщення про нові заявки на зарахування на будь-який курс.';
$string['opt_commentaryzone'] = 'Поле для коментарів';
$string['opt_commentaryzone_help'] = 'Так -> Увімкнути поле для коментарів у формі реєстрації';
$string['pluginname'] = 'Підтвердження запиту на зарахування';
$string['pluginname_desc'] = 'З даним модулем користувачі можуть подавати запити на участь у курсі. Викладачі можуть підтвердити чи відхилити дані заявки.';
$string['privacy:metadata'] = 'Плагін підтвердження реєстрації на курс не зберігає жодних персональних даних.';
$string['sendexpirynotificationstask'] = 'Застосувати реєстрацію, надіслати завдання сповіщень про закінчення терміну дії';
$string['show_extra_user_profile'] = 'Показати додаткові поля профілю користувача на екрані реєстрації';
$string['show_standard_user_profile'] = 'Показати стандартні поля профілю користувача на екрані реєстрації';
$string['status'] = 'Дозволити підтвердження запитів';
$string['status_desc'] = 'Дозволити доступ до курсу для користувачів, зарахованих внутрішнім способом.';
$string['submitted_info'] = 'Інформація про реєстрацію';
$string['user_profile'] = 'Профіль користувача';
$string['waitmail_heading'] = 'Лист очікування';
$string['waitmailcontent'] = 'Вміст листів списку очікування';
$string['waitmailcontent_desc'] = 'Будь ласка, використовуйте такі спеціальні позначки, щоб замінити вміст електронної пошти даними від Moodle.{firstname}:Ім’я користувача; {content}:Назва курсу;{lastname}:Прізвище користувача;{username}:Ім’я користувача для реєстрації користувачів';
$string['waitmailsubject'] = 'Тема листа очікування';
