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
 * Strings for component 'grading', language 'uk', version '4.4'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' обрано як активний метод оцінювання для \'{$a->area}\' області';
$string['activemethodinfonone'] = 'Немає розширеного методу оцінювання вибраного для \'{$a->area}\' області. Буде використовуватися звичайний метод оцінювання.';
$string['changeactivemethod'] = 'Змінити активний метод оцінювання';
$string['clicktoclose'] = 'клацнути щоб закрити';
$string['error:gradingunavailable'] = 'Розширений метод оцінювання налаштовано неправильно. Будь ласка, перевірте всі параметри оцінювання форуму в налаштуваннях форуму.';
$string['error:notinrange'] = 'Invalid grade \'{$a->grade}\' provided.Grades must be between 0 and {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Не вдається створити форму оцінювання елементу';
$string['formnotavailable'] = 'Вибрано розширений метод оцінювання, але форму оцінки все ще потрібно визначити.';
$string['gradingformunavailable'] = 'Будь ласка, зверніть увагу: форма розширеного оцінювання не готова на цей момент. Буде задіяно метод звичайного оцінювання, поки форма не змінить статус.';
$string['gradingmanagement'] = 'Розширене оцінювання';
$string['gradingmanagementtitle'] = 'Розширене оцінювання: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Метод оцінювання';
$string['gradingmethod_help'] = 'Виберіть метод розширеного оцінювання, який буде використовуватися для підрахунку балів в цьому контексті. Для відміни розширеного оцінювання та повернення до звичайного методу, виберіть ’Просте оцінювання’.';
$string['gradingmethodnone'] = 'Просте оцінювання';
$string['gradingmethods'] = 'Методи оцінювання';
$string['manageactionclone'] = 'Створити нову форму оцінювання з шаблону';
$string['manageactiondelete'] = 'Вилучити визначену форму';
$string['manageactiondeleteconfirm'] = 'Ви збираєтеся видалити форму оцінювання {$a->formname}\' та всю пов’язану з нею інформацію з \'{$a->component} ({$a->area})\'. Будь ласка, переконайтеся, що ви розумієте такі наслідки:

* Не існує ніякої можливості скасувати цю операцію.
* Ви можете просто переключитися на інший метод оцінювання, включаючи ’просте оцінювання’, не видаляючи цю форму.
* Всі заповнені дані форми буде втрачено.
* Розрахований результат, збережений в журнал оцінок, не будуть втрачено. Однак пояснення того, як він був розрахований не буде доступним.
* Ця операція не впливає на цю форму в інших видах діяльності.';
$string['manageactiondeletedone'] = 'Форма була успішно вилучена';
$string['manageactionedit'] = 'Змінити поточне визначення форми';
$string['manageactionnew'] = 'Визначити нову форму оцінювання з нуля';
$string['manageactionshare'] = 'Публікувати форму як новий шаблон';
$string['manageactionshareconfirm'] = 'Ви збираєтеся зберегти форму оцінювання \'{$a}\' як новий загальнодоступний шаблон. Інші користувачі вашого сайту зможуть створювати свої форми оцінювання на основі цього шаблону.';
$string['manageactionsharedone'] = 'Форму було успішно збережено як шаблон';
$string['noitemid'] = 'Оцінювання не можливе. Не створено елемент оцінювання.';
$string['nosharedformfound'] = 'Шаблонів не знайдено';
$string['privacy:metadata:grading_definitions'] = 'Основна інформація про розширену форму оцінювання, визначену в області, що піддається градації.';
$string['privacy:metadata:grading_definitions:areaid'] = 'Ідентифікатор області, де визначено форму розширеного оцінювання.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'Ідентифікатор визначення оцінки, звідки це було скопійовано.';
$string['privacy:metadata:grading_definitions:description'] = 'Опис розширеного методу оцінювання.';
$string['privacy:metadata:grading_definitions:method'] = 'Метод оцінки, який відповідає за визначення.';
$string['privacy:metadata:grading_definitions:name'] = 'Назва розширеного визначення оцінки.';
$string['privacy:metadata:grading_definitions:options'] = 'Деякі налаштування цього визначення оцінки.';
$string['privacy:metadata:grading_definitions:status'] = 'Статус цього розширеного визначення оцінки.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Час, коли було скопійовано визначення оцінки.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Час, коли було створено визначення оцінки.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Час, коли визначення оцінки було востаннє змінено.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'Ідентифікатор користувача, який створив визначення оцінки.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'Ідентифікатор користувача, який востаннє змінював визначення оцінки.';
$string['privacy:metadata:grading_instances'] = 'Запис оцінки для одного оцінюваного пункту, оціненого одним оцінювачем.';
$string['privacy:metadata:grading_instances:feedback'] = 'Відгук, наданий користувачем.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Текстовий формат відгуку, який надає користувач.';
$string['privacy:metadata:grading_instances:raterid'] = 'Ідентифікатор користувача, який оцінив екземпляр оцінювання.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Оцінка для екземпляра оцінювання.';
$string['privacy:metadata:grading_instances:status'] = 'Статус цього екземпляра оцінювання.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Час, коли екземпляр оцінювання було востаннє змінено.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Дані для методу оцінки.';
$string['searchownforms'] = 'включати мої власні форми';
$string['searchtemplate'] = 'Пошук форм оцінювання';
$string['searchtemplate_help'] = 'Ви можете пошукати форму оцінювання та використати її як шаблон для нової форми оцінювання тут. Просто введіть слова, які повинні зустрічатися в назві форми, її опису, або тілі. Для пошуку фрази, візьміть весь запит в подвійні лапки. Типово, будуть показані тільки форми оцінювання збережені як загальнодоступні шаблони. Ви можете також включити в результати пошуку свої власні шаблони. Таким чином, ви можете просто повторно використовувати свої форми не ділячись ними. Тільки форми з позначкою \'Готово до використання\' можуть бути використані таким чином.';
$string['statusdraft'] = 'Чорновик';
$string['statusready'] = 'Готово до використання';
$string['templatedelete'] = 'Видалити';
$string['templatedeleteconfirm'] = 'Ви збираєтеся видалити загальнодоступний шаблон \'{$a}\'. Видалення шаблону не вплине на форми створені на його основі.';
$string['templateedit'] = 'Редагувати';
$string['templatepick'] = 'Використати цей шаблон';
$string['templatepickconfirm'] = 'Ви хочете використати форму оцінювання \'{$a->formname}\' як шаблон для нової форми в \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Використати цю форму як шаблон';
$string['templatesource'] = 'Розташування: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Власна форма';
$string['templatetypeshared'] = 'Загальний шаблон';
