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
 * Strings for component 'qtype_numerical', language 'uk', version '4.5'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Допустима помилка';
$string['addmoreanswerblanks'] = 'Додати ще  {no} відповід(і)ей';
$string['addmoreunitblanks'] = 'Додати ще  {no} одиниці';
$string['answercolon'] = 'Відповідь:';
$string['answererror'] = 'Помилка';
$string['answermustbenumberorstar'] = 'У відповіді повинне бути число, наприклад -1.234 або 3e8, або \'*\'.';
$string['answerno'] = 'Відповідь {$a}';
$string['decfractionofquestiongrade'] = 'як частка (0-1) оцінки за питання';
$string['decfractionofresponsegrade'] = 'як частка (0-1) оцінки за відповідь';
$string['decimalformat'] = 'знаків після коми (крапки)';
$string['editableunittext'] = 'текстове поле';
$string['errornomultiplier'] = 'Ви повинні визначити коефіцієнт для цієї одиниці виміру.';
$string['errorrepeatedunit'] = 'Ви не можете мати дві одиниці виміру з однаковими назвами';
$string['geometric'] = 'Геометричний';
$string['invalidnumber'] = 'Ви повинні ввести правильне число.';
$string['invalidnumbernounit'] = 'Ви повинні ввести коректне число (десятковий знак - крапка!). Не додавайте назву одиниці виміру до своєї відповіді.';
$string['invalidnumericanswer'] = 'Одна з введених вами відповідей має неправильне число.';
$string['invalidnumerictolerance'] = 'Одна з введених вами похибок має неправильне число.';
$string['leftexample'] = 'ліворуч, наприклад $1.00 або £1.00';
$string['manynumerical'] = ' Одиниці є необов’язковими. Якщо введено одиницю вимірювання, вона використовується для перетворення відповіді на блок 1 перед оцінюванням.
';
$string['multiplier'] = 'Коефіцієнт';
$string['nominal'] = 'Абсолютний';
$string['noneditableunittext'] = 'Текст одиниці виміру №1 не для редагування';
$string['nonvalidcharactersinnumber'] = 'НЕ дійсні символи в числі';
$string['notenoughanswers'] = 'Ви повинні ввести хоча б одну відповідь';
$string['nounitdisplay'] = 'Немає одиниці оцінювання';
$string['numericalmultiplier'] = 'Коефіцієнт';
$string['numericalmultiplier_help'] = 'Коефіцієнт - це число, на яке буде множитися правильна числова відповідь.

Перша одиниця (Одиниця 1) за замовчуванням має множник 1. Таким чином, якщо правильна числова відповідь 5500 і ви встановили Вт в якості одиниці № 1, яка має коефіцієнт 1 за замовчуванням, правильну відповідь становить 5500 Вт.

Якщо додати одиницю кВт з коефіцієнтом 0,001, це додасть ще варіант правильної відповіді 5,5 кВт. Це означає, що відповіді 5500 Вт або 5,5 кВт будуть прийняті як правильні.

Відзначимо, що допустима помилка також множиться на коефіцієнт, тому помилка 100 Вт стане помилкою 0,1 кВт.';
$string['oneunitshown'] = 'Одиниця виміру №1 автоматично показується поруч з полем відповіді';
$string['onlynumerical'] = 'Одиниці виміру не використовуються. До уваги береться тільки числове значення.';
$string['pleaseenterananswer'] = 'Введіть відповідь';
$string['pleaseenteranswerwithoutthousandssep'] = 'Будь ласка, введіть вашу відповідь без використання роздільника тисяч ({$a}).';
$string['pluginname'] = 'Числовий';
$string['pluginname_help'] = 'З точки зору студента Числове питання виглядає так само, як питання типу Коротка відповідь. Різниця в тому, що числові відповіді дозволяють похибку. Це дозволяє певний фіксований діапазон відповідей оцінювати як одну відповідь. Наприклад, якщо відповісти 10 і встановлена похибка 2, тоді будь-яке число між 8 і 12 буде сприйматися як правильне.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Додати питання типу Числовий';
$string['pluginnameediting'] = 'Редагувати питання типу Числовий';
$string['pluginnamesummary'] = 'Дозволено числові відповіді, можливо, з одиницями виміру, які оцінюються шляхом порівняння з різними варіантами відповідей, можливо, з допусками.';
$string['privacy:metadata'] = 'Плагін числового типу запитання дозволяє авторам запитань встановлювати параметри за замовчуванням як параметри користувача.';
$string['privacy:preference:defaultmark'] = 'Позначка за замовчуванням, встановлена для даного запитання.';
$string['privacy:preference:multichoicedisplay'] = 'Чи відображаються одиниці вимірювання як елемент введення тексту, вибір із кількома варіантами чи спадне меню.';
$string['privacy:preference:penalty'] = 'Штраф за кожну неправильну спробу, коли запитання запускаються з використанням поведінки «Інтерактивний із кількома спробами» або «Адаптивний режим».';
$string['privacy:preference:unitgradingtypes'] = 'Чи застосовується одиничний штраф у вигляді частки (0-1) оцінки відповіді чи оцінки запитання.';
$string['privacy:preference:unitpenalty'] = 'Яка частка (0-1) оцінки відповідей або оцінки запитання слід застосовувати?';
$string['privacy:preference:unitrole'] = 'Незалежно від того, чи необхідний пристрій, необов’язковий чи непередбачуваний.';
$string['privacy:preference:unitsleft'] = 'Чи відображається одиниця зліва (наприклад, $, £) чи праворуч (наприклад, кг, км, см).';
$string['relative'] = 'Відносний';
$string['rightexample'] = 'праворуч, наприклад 1.00см або 1.00км';
$string['selectunit'] = 'Виберіть одну одиницю';
$string['selectunits'] = 'Виберіть одиниці виміру';
$string['studentunitanswer'] = 'Одиниці виміру мають бути введені';
$string['tolerancetype'] = 'Тип допустимого відхилення';
$string['unit'] = 'Одиниця виміру';
$string['unitappliedpenalty'] = 'Цей бал включає штраф {$a} за неправильну одиницю виміру';
$string['unitchoice'] = 'множинний вибір';
$string['unitedit'] = 'Редагувати одиницю виміру';
$string['unitgraded'] = 'Одиниця виміру має бути визначена і оцінена.';
$string['unithandling'] = 'Обробка одиниці виміру';
$string['unitincorrect'] = 'Ви не надали коректну одиницю виміру.';
$string['unitmandatory'] = 'Обов’язково';
$string['unitmandatory_help'] = '* Відповідь буде оцінено з використанням написаного. * Штраф буде застосовуватися, якщо поле порожнє.';
$string['unitnotselected'] = 'Ви маєте вибрати одиницю виміру.';
$string['unitonerequired'] = 'Ви маєте ввести хоча б одну одиницю виміру';
$string['unitoptional'] = 'Не обов’язкова одиниця виміру';
$string['unitoptional_help'] = '* Якщо поле не порожнє, відповідь буде оцінена з використанням цієї одиниці вимірювання.

* Якщо одиниця вимірювання неправильно написана або невідома, то відповідь буде вважатися недійсною.';
$string['unitpenalty'] = 'Штраф для одиниці виміру';
$string['unitpenalty_help'] = 'Штраф застосовується, якщо

* У відповідь надається невизначена назва одиниці вимірювання або
* Назва одиниці вимірювання надається замість числової відповіді';
$string['unitposition'] = 'Позиція одиниці вимірювання';
$string['units'] = 'Одиниці вимірювання';
$string['unitselect'] = 'випадаюче меню';
$string['unitx'] = 'Одиниця вимірювання {no}';
$string['xmustbenumeric'] = '{$a} повинно бути числом.';
$string['xmustnotbenumeric'] = '{$a} не може бути числом.';
$string['youmustenteramultiplierhere'] = 'Ви повинні ввести коефіцієнт тут.';
