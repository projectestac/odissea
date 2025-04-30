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
 * Strings for component 'qtype_essay', language 'uk', version '4.4'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Прийнятні типи файлів:';
$string['acceptedfiletypes_help'] = 'Прийнятні типи файлів можуть бути обмежені шляхом введення списку розширень файлів. Якщо поле залишається порожнім, то дозволені всі типи файлів.';
$string['allowattachments'] = 'Дозволяти прикріплені файли';
$string['answerfiles'] = 'Файли відповідей';
$string['answertext'] = 'Текст відповіді';
$string['attachedfiles'] = 'Вкладені файли: {$a}';
$string['attachmentsoptional'] = 'Прикріплення не є обов’язковим';
$string['attachmentsrequired'] = 'Прикріплення є обов’язковим';
$string['attachmentsrequired_help'] = 'Цей параметр визначає мінімальну кількість прикріплених файлів, необхідних для того, щоб відповідь можна було оцінювати.';
$string['err_maxminmismatch'] = 'Максимальна кількість слів має бути більшою за мінімальну кількість слів';
$string['err_maxwordlimit'] = 'Максимальний ліміт слів увімкнено, але не встановлено';
$string['err_maxwordlimitnegative'] = 'Максимальна кількість слів не може бути від’ємним числом';
$string['err_minwordlimit'] = 'Мінімальний ліміт слів увімкнено, але не встановлено';
$string['err_minwordlimitnegative'] = 'Мінімальна кількість слів не може бути від’ємним числом';
$string['formateditor'] = 'HTML-редактор';
$string['formateditorfilepicker'] = 'HTML-редактор з вибором файлу';
$string['formatmonospaced'] = 'Звичайний текст, моноширинний шрифт';
$string['formatnoinline'] = 'Без тексту в онлайн';
$string['formatplain'] = 'Звичайний текст';
$string['graderinfo'] = 'Інформація для оцінювачів';
$string['graderinfoheader'] = 'Інформація про оцінювання';
$string['maxbytes'] = 'Максимальний розмір файлу';
$string['maxwordlimit'] = 'Максимальна кількість слів';
$string['maxwordlimit_help'] = 'Якщо відповідь вимагає, щоб учні ввели текст, це максимальна кількість слів, яку кожен студент може ввести.';
$string['maxwordlimitboundary'] = 'Обмеження слів для цього запитання – {$a->limit} слів, і ви намагаєтеся надіслати {$a->count} слів. Скоротіть відповідь і повторіть спробу.';
$string['minwordlimit'] = 'Мінімальна кількість слів';
$string['minwordlimit_help'] = 'Якщо відповідь вимагає, щоб учні ввели текст, це мінімальна кількість слів, яку кожен студент може ввести.';
$string['minwordlimitboundary'] = 'На це запитання потрібна відповідь принаймні {$a->limit} слів, і ви намагаєтеся надіслати {$a->count} слів. Розширте свою відповідь і повторіть спробу.';
$string['mustattach'] = 'Якщо вибрано «Без тексту в Інтернеті» або відповіді не є обов’язковими, ви повинні дозволити принаймні одне вкладення.';
$string['mustrequire'] = 'Якщо вибрано опцію «Немає онлайн-текста» або відповіді є необов’язковими, потрібно мати принаймні один вкладений файл.';
$string['mustrequirefewer'] = 'Ви не можете вимагати більше файлів, ніж ви дозволили.';
$string['nlines'] = '{$a} рядків';
$string['nonexistentfiletypes'] = 'Не було розпізнано такі типи файлів: {$a}';
$string['pluginname'] = 'Есе';
$string['pluginname_help'] = 'У відповідь на запитання респондент може завантажити один або кілька файлів та/або ввести текст онлайн. Можна надати шаблон відповіді. Відповіді потрібно оцінювати вручну.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Додати питання типу Есе';
$string['pluginnameediting'] = 'Редагувати питання типу Есе';
$string['pluginnamesummary'] = 'Дозволяє отримати відповідь на завантаження файлу та/або онлайн-текст. Потім це потрібно оцінити вручну.';
$string['privacy:metadata'] = 'Плагін типу запитання Essay дозволяє авторам запитань встановлювати параметри за замовчуванням як параметри користувача.';
$string['privacy:preference:attachments'] = 'Кількість дозволених вкладень.';
$string['privacy:preference:attachmentsrequired'] = 'Кількість необхідних вкладень.';
$string['privacy:preference:defaultmark'] = 'Позначка за замовчуванням, встановлена для даного запитання.';
$string['privacy:preference:maxbytes'] = 'Максимальний розмір файлу.';
$string['privacy:preference:responsefieldlines'] = 'Кількість рядків, що вказують розмір поля введення (текстової області).';
$string['privacy:preference:responseformat'] = 'Який формат відповіді (редактор HTML, звичайний текст тощо)?';
$string['privacy:preference:responserequired'] = 'Чи потрібно учню вводити текст, чи введення тексту не є обов’язковим.';
$string['responsefieldlines'] = 'Розмір вікна для введення';
$string['responseformat'] = 'Формат відповіді';
$string['responseisrequired'] = 'Вимагати, від студенту введення тексту';
$string['responsenotrequired'] = 'Введення тексту є не обов’язковим';
$string['responseoptions'] = 'Варіанти відповідей';
$string['responserequired'] = 'Вимагати текст';
$string['responsetemplate'] = 'Шаблон відповіді';
$string['responsetemplate_help'] = 'Будь-який написаний тут текст буде введено в поле відповіді на початку нової спроби.';
$string['responsetemplateheader'] = 'Шаблон відповіді';
$string['wordcount'] = 'Кількість слів: {$a}';
$string['wordcounttoofew'] = 'Кількість слів: {$a->count}, менше необхідного {$a->limit} слів.';
$string['wordcounttoomuch'] = 'Кількість слів: {$a->count}, більше ніж ліміт слів у {$a->limit}.';
