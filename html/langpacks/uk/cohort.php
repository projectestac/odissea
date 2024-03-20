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
 * Strings for component 'cohort', language 'uk', version '4.1'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Додати нову групу';
$string['allcohorts'] = 'Всі групи';
$string['anycohort'] = 'Будь-яка';
$string['assign'] = 'Члени';
$string['assigncohorts'] = 'Зарахувати членів гурту';
$string['assignto'] = 'Учасники гурту \'{$a}';
$string['backtocohorts'] = 'Назад до гуртів';
$string['bulkadd'] = 'Додати до гурту';
$string['bulknocohort'] = 'Не знайдено доступних гуртів';
$string['categorynotfound'] = 'Категірію <b>{$a}</b> не знайдено, або ж ви не маєте прав для створення в ній гуртів. Буде використано типовий контекст.';
$string['cohort'] = 'Гурт';
$string['cohortmember'] = 'Член когорти';
$string['cohorts'] = 'Групи';
$string['cohortsin'] = '{$a}: доступні групи';
$string['component'] = 'Джерело';
$string['contextnotfound'] = 'Контекст <b>{$a}</b> не знайдено, або ж ви не маєте прав для створення в ньому гуртів. Буде використано типовий контекст.';
$string['csvcontainserrors'] = 'В даних CSV було виявлено помилку. Див. деталі нижче.';
$string['csvcontainswarnings'] = 'В даних CSV було виявлено попередження. Див. деталі нижче.';
$string['csvextracolumns'] = 'Колонку(и) <b>{$a}</b> буде проігноровано.';
$string['currentusers'] = 'Поточні користувачі';
$string['currentusersmatching'] = 'Відібрані поточні користувачі';
$string['defaultcontext'] = 'Типовий контекст';
$string['delcohort'] = 'Видалити гурт';
$string['delconfirm'] = 'Ви дійсно бажаєте видалити гурт \'{$a}\'?';
$string['description'] = 'Опис';
$string['displayedrows'] = 'Показано {$a->displayed} рядків з {$a->total}.';
$string['duplicateidnumber'] = 'Гурт з таким кодом вже існує';
$string['editcohort'] = 'Редагувати гурт';
$string['editcohortidnumber'] = 'Редагувати код гурта';
$string['editcohortname'] = 'Редагувати назву гурта';
$string['eventcohortcreated'] = 'Створено гурт';
$string['eventcohortdeleted'] = 'Вилучено гурт';
$string['eventcohortmemberadded'] = 'Користувача введено в гурт';
$string['eventcohortmemberremoved'] = 'Користувача виведено з гурту';
$string['eventcohortupdated'] = 'Оновлено гурт';
$string['external'] = 'Зовнішній гурт';
$string['idnumber'] = 'Ідентифікатор групи';
$string['invalidtheme'] = 'Тема когорти не існує';
$string['memberofcohort'] = 'Член когорти';
$string['memberscount'] = 'Розмір групи';
$string['name'] = 'Назва';
$string['namecolumnmissing'] = 'З форматом файлу CSV щось не так. Будь ласка, переконайтеся, що він містить правильні назви стовпців. Щоб додати користувачів до когорти, перейдіть до «Завантажити користувачів» в Адміністрації сайту.';
$string['namefieldempty'] = 'Назва поля не може бути порожньою';
$string['newidnumberfor'] = 'Новий код для гурта {$a}';
$string['newnamefor'] = 'Нова назва для гурта {$a}';
$string['nocomponent'] = 'Створена вручну';
$string['potusers'] = 'Потенційні користувачі';
$string['potusersmatching'] = 'Відповідні потенційні користувачі';
$string['preview'] = 'Перегляд';
$string['privacy:metadata:cohort_members'] = 'Інформація про когорту користувачів.';
$string['privacy:metadata:cohort_members:cohortid'] = 'Ідентифікатор когорти';
$string['privacy:metadata:cohort_members:timeadded'] = 'Позначка часу, яка вказує, коли користувача було додано до когорти';
$string['privacy:metadata:cohort_members:userid'] = 'Ідентифікатор користувача, пов’язаного з когортою';
$string['removeuserwarning'] = 'Виведення користувача з гурту може призвести до його відрахування з деяких курсів, включно з його налаштуваннями на курсах, оцінками, членством у групах курсу та інше.';
$string['search'] = 'Пошук';
$string['searchcohort'] = 'Шукати групу';
$string['selectfromcohort'] = 'Вибрати учасників гурту';
$string['systemcohorts'] = 'Системні групи';
$string['unknowncohort'] = 'Невідомий гурт ({$a})!';
$string['uploadcohorts'] = 'Завантаження груп';
$string['uploadcohorts_help'] = 'Когорти можна завантажити за допомогою текстового файлу. Формат файлу має бути таким:

* Кожен рядок файлу містить один запис
* Кожен запис являє собою ряд даних, розділених вибраним роздільником
* Перший запис містить список імен полів, що визначають формат решти файлу
* Обов’язкове ім’я поля – ім’я
* Додаткові назви полів: idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Завантажено {$a} гурт(ів)';
$string['useradded'] = 'Користувача введено до гурту "{$a}"';
$string['visible'] = 'Доступність студентам';
$string['visible_help'] = 'Будь-який гурт може бути видимим користувачам з правом \'moodle/cohort:view\' в контексті гурту. <br /> Видимі гурти також можуть бачити користувачі підлеглих курсів.';
