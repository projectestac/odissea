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
 * Strings for component 'tool_uploadcourse', language 'uk', version '4.5'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Дозволити видалення';
$string['allowdeletes_help'] = 'Визначає дозвіл на використання поля видалення курсу.';
$string['allowrenames'] = 'Дозволити перейменування';
$string['allowrenames_help'] = 'Визначає дозвіл на використання поля перейменування курсу.';
$string['allowresets'] = 'Дозволити очищення';
$string['allowresets_help'] = 'Визначає дозвіл на використання поля очищення курсу.';
$string['cachedef_helper'] = 'Помічник кешування';
$string['cannotdeletecoursenotexist'] = 'Не можна видалити курс, який не створено';
$string['cannotforcelang'] = 'Немає дозволу на примусову мову для цього курсу';
$string['cannotgenerateshortnameupdatemode'] = 'Не можна згенерувати коротку назву, коли дозволено оновлення';
$string['cannotreadbackupfile'] = 'Не вдається прочитати файл резервної копії';
$string['cannotrenamecoursenotexist'] = 'Не можна перейменувати курс, який не створено';
$string['cannotrenameidnumberconflict'] = 'Не можна перейменувати курс, Код курсу конфліктує з уже існуючим курсом';
$string['cannotrenameshortnamealreadyinuse'] = 'Не можна перейменувати курс, така коротка назва вже існує';
$string['cannotupdatefrontpage'] = 'Вам заборонено змінювати домашню сторінку сайту.';
$string['canonlyrenameinupdatemode'] = 'Можна лише перейменувати курс, коли дозволено оновлення';
$string['canonlyresetcourseinupdatemode'] = 'Можна лише очистити курс в режимі оновлення';
$string['couldnotresolvecatgorybyid'] = 'Не вдалося визначити категорію за ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Не вдалося визначити категорію за кодом';
$string['couldnotresolvecatgorybypath'] = 'Не вдалося визначити категорію за шляхом';
$string['coursecreated'] = 'Курс створено';
$string['coursedeleted'] = 'Курс видалено';
$string['coursedeletionnotallowed'] = 'Видалення курсу не дозволено';
$string['coursedoesnotexistandcreatenotallowed'] = 'Курс не існує, і створення курс не дозволено';
$string['courseexistsanduploadnotallowed'] = 'Курс існує але оновлення не дозволено';
$string['coursefile'] = 'Файл';
$string['coursefile_help'] = 'Цей файл повинен бути формату CSV.';
$string['courseidnumberincremented'] = 'Код курсу змінився {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Процес';
$string['courserenamed'] = 'Курс перейменовано';
$string['courserenamingnotallowed'] = 'Перейменування курсу не дозволено';
$string['coursereset'] = 'Очищення';
$string['courseresetnotallowed'] = 'Очищення курсу не дозволено';
$string['courserestored'] = 'Курс відновлено';
$string['coursescreated'] = 'Курси створено: {$a}';
$string['coursesdeleted'] = 'Курси видалено: {$a}';
$string['courseserrors'] = 'Помилки в курсах: {$a}';
$string['courseshortnamegenerated'] = 'Згенеровано коротку назву курсу: {$a}';
$string['courseshortnameincremented'] = 'Змінено коротку назву курсу {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Всього курсів: {$a}';
$string['coursesupdated'] = 'Оновлено курсів: {$a}';
$string['coursetemplatename'] = 'Відновити з цього курсу після завантаження';
$string['coursetemplatename_help'] = 'Введіть коротку назву існуючого курсу, який буде використовуватися як шаблон для створення всіх курсів.';
$string['coursetorestorefromdoesnotexist'] = 'Курс для відновлення не існує';
$string['courseupdated'] = 'Курс оновлено';
$string['createall'] = 'Створити всі, за необхідності змінити коротку назву';
$string['createnew'] = 'Тільки створити нові курси, пропускаючи існуючі';
$string['createorupdate'] = 'Створити нові та оновити існуючі курси';
$string['csvdelimiter'] = 'CSV роздільник';
$string['csvdelimiter_help'] = 'Символ, що розділяє ряд даних у кожному записі.';
$string['csvfileerror'] = 'З форматом файлу CSV щось не так. Будь ласка, перевірте, чи збігається кількість заголовків і стовпців, а також правильність роздільника та кодування файлу. {$a}';
$string['csvline'] = 'Рядок';
$string['customfieldinvalid'] = 'Спеціальне поле "{$a}" порожнє або містить недійсні дані';
$string['defaultvalues'] = 'Типові значення курсу';
$string['defaultvaluescustomfieldcategory'] = 'Значення за замовчуванням для "{$a}"';
$string['downloadcontentnotallowed'] = 'Налаштування завантаження вмісту курсу заборонено';
$string['encoding'] = 'Кодування';
$string['encoding_help'] = 'Кодування CSV файлу.';
$string['errorcannotcreateorupdateenrolment'] = 'Не вдається створити або оновити метод реєстрації "{$a}"';
$string['errorcannotdeleteenrolment'] = 'Не вдається видалити метод реєстрації "{$a}"';
$string['errorcannotdisableenrolment'] = 'Не вдається вимкнути метод реєстрації "{$a}"';
$string['errorwhiledeletingcourse'] = 'Виникла помилка під час видалення курсу';
$string['errorwhilerestoringcourse'] = 'Виникла помилка під час відновлення курсу';
$string['generatedshortnamealreadyinuse'] = 'Згенерована коротка назва вже використовується';
$string['generatedshortnameinvalid'] = 'Згенерована коротка назва неправильна';
$string['id'] = 'Код';
$string['idnumberalreadyinuse'] = 'Такий код вже використовується курсом';
$string['importoptions'] = 'Опції імпорту';
$string['invalidbackupfile'] = 'Неправильний файл резервної копії';
$string['invalidcourseformat'] = 'Неправильний формат курсу';
$string['invalidcsvfile'] = 'Неправильний вхідний CSV файл';
$string['invaliddownloadcontent'] = 'Недійсне завантаження значення вмісту курсу';
$string['invalidencoding'] = 'Неправильне кодування';
$string['invalideupdatemode'] = 'Неправильно вибраний режим оновлення';
$string['invalidfullnametoolong'] = 'Поле повного імені обмежено до {$a} символів';
$string['invalidmode'] = 'Неправильно вибраний режим';
$string['invalidroles'] = 'Неправильна назва ролі: {$a}';
$string['invalidshortname'] = 'Неправильне коротка назва';
$string['invalidshortnametoolong'] = 'Поле короткого імені обмежено до {$a} символів';
$string['invalidvisibilitymode'] = 'Недійсний режим видимості';
$string['missingmandatoryfields'] = 'Не вистачає обов’язкових полів: {$a}';
$string['missingshortnamenotemplate'] = 'Відсутні повна та коротка назви шаблону';
$string['mode'] = 'Режим завантаження';
$string['mode_help'] = 'Це дозволяє вказати, що курси можуть бути створені та/або оновлені.';
$string['nochanges'] = 'Без змін';
$string['pluginname'] = 'Курс завантажено';
$string['preview'] = 'Попередній перегляд';
$string['privacy:metadata'] = 'Плагін завантаження курсу не зберігає жодних персональних даних.';
$string['reset'] = 'Очистити курс після завантаження';
$string['reset_help'] = 'Чи потрібно очищувати курс після створення / оновлення.';
$string['restoreafterimport'] = 'Відновити після імпортування';
$string['result'] = 'Результат';
$string['rowpreviewnum'] = 'Попередній перегляд рядків';
$string['rowpreviewnum_help'] = 'Кількість рядків із файлу CSV, які будуть попередньо переглянуті на наступній сторінці. Цей параметр призначений для обмеження розміру наступної сторінки.';
$string['shortnametemplate'] = 'Шаблон генерування короткої назви';
$string['shortnametemplate_help'] = 'Коротка назва курсу з’являється в навігаційному рядку.  Ви можете використати шаблон з таким синтаксисом (%f = fullname, %i = idnumber) або ввести початкове значення, яке збільшуватиметься.';
$string['templatefile'] = 'Відновити з цього файлу після завантаження';
$string['templatefile_help'] = 'Виберіть файл, який буде використовуватися';
$string['unknownimportmode'] = 'Невідомий режим імпортування';
$string['updatemissing'] = 'Заповнити відсутні дані з CSV файлу та типовими';
$string['updatemode'] = 'Режим оновлення';
$string['updatemode_help'] = 'Якщо ви дозволяєте оновлювати курси, то ви повинні вказати інструмент, з яким оновлення повинно відбуватися.';
$string['updatemodedoessettonothing'] = 'Режим оновлення не допускайте, щоб щось було оновленим';
$string['updateonly'] = 'Тільки оновити існуючі курси';
$string['updatewithdataonly'] = 'Оновити тільки даними з файлу';
$string['updatewithdataordefaults'] = 'Оновити даними з файлу та типовими';
$string['uploadcourses'] = 'Завантажити курси';
$string['uploadcourses_help'] = 'Курси можна завантажити через текстовий файл. Формат файлу має бути таким:

* Кожен рядок файлу містить один запис
* Кожен запис являє собою ряд даних, розділених вибраним роздільником
* Перший запис містить список імен полів, що визначають формат решти файлу
* Обов’язкові назви полів: коротке ім’я, повне ім’я та категорія';
$string['uploadcoursespreview'] = 'Попередній перегляд завантаження';
$string['uploadcoursesresult'] = 'Результати завантаження курсів';
