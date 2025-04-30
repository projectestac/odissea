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
 * Strings for component 'qtype_ddmarker', language 'uk', version '4.4'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Бланки для {no} додаткових маркерів';
$string['alttext'] = 'Альтернативний текст';
$string['answer'] = 'Відповідь';
$string['bgimage'] = 'Фонове зображення';
$string['clearwrongparts'] = 'Перемістити неправильно розташовані маркери назад на стартову позицію';
$string['coords'] = 'Координати';
$string['correctansweris'] = 'Правильна відповідь: {$a}';
$string['draggableimage'] = 'Зображення перетягування';
$string['draggableitem'] = 'Елемент перетягування';
$string['draggableitemheader'] = 'Елемент перетягування  {$a}';
$string['draggableitemtype'] = 'Тип';
$string['draggableword'] = 'Текст перетягування';
$string['dropbackground'] = 'Картинка тла для розміщення на ній маркерів';
$string['dropzone'] = 'Зона відповіді  {$a}';
$string['dropzoneheader'] = 'Зони відповіді';
$string['dropzones'] = 'Зони відповіді';
$string['dropzones_help'] = 'Зони перекидання можна визначити за координатами або перетягнути на місце в попередньому перегляді вище.

Якщо спочатку вибрати фігуру (коло, прямокутник або багатокутник), у верхньому лівому куті попереднього перегляду буде додано нову форму зони випадання. Можливо, буде корисно згорнути розділ «Маркери», щоб ви могли бачити попередній перегляд під час редагування зон відкидання.

Редагування фігури починається з клацання фігури в попередньому перегляді, щоб відобразити маркери редагування. Ви можете переміщувати фігуру за допомогою центрального маркера або регулювати розміри фігури за допомогою маркерів вершин.

Лише для багатокутників утримування кнопки керування (кнопка команди на Mac) під час натискання маркера вершини додасть нову вершину до багатокутника. Будь ласка, зберігайте форму багатокутника якомога простішою, без перетину ліній.

Для інформації три фігури використовують координати таким чином:

* Коло: центр_x, центр_y; радіус<br>наприклад: <code>80, 100; 50</code>
* Багатокутник: x1, y1; x2, y2; ...; xn, yn<br>наприклад: <code>20, 60; 100, 60; 20, 100</code>
* Прямокутник: лівий_верхній_х, лівий_верхній_y, ширина, висота<br>наприклад: <code>20, 60; 80, 40</code>

 Вибір тексту маркера додасть цей текст до фігури в попередньому перегляді.';
$string['followingarewrong'] = 'Маркери розміщено в неправильній області: {$a}.';
$string['followingarewrongandhighlighted'] = 'Неправильно розміщені маркери: {$a}. Виділені маркери тепер відображаються з правильним розташуванням. Натисніть на маркер, щоб виділити дозволену область.';
$string['formerror_dragrequired'] = 'Ви повинні додати принаймні один маркер до цього запитання.';
$string['formerror_droprequired'] = 'Ви повинні визначити принаймні одну зону випадання для цього запитання.';
$string['formerror_nobgimage'] = 'Вам потрібно вибрати картинку в якості тла, на якій будуть розміщувати маркери відповідей.';
$string['formerror_noitemselected'] = 'Ви визначили зону відповіді але не вказали маркер, який потрібно буде туди перетягнути.';
$string['formerror_nosemicolons'] = 'В описі координат відсутня крапка з комою. Ваші координати {$a->shape} мають бути виражені як - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Тільки теги "{$a}" дозволено в тексті на маркерах.';
$string['formerror_onlyusewholepositivenumbers'] = 'Будь ласка, використовуйте тільки цілі  додатні числа для визначення координат х,у та/або ширина і висоти фігур. Ваші координати для {$a->shape} повинні бути надані як - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Для багатокутника необхідно вказати принаймні 3 точки. Ваші координати  {$a->shape}  повинні бути виражені як  - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Ви двічі вказали ті ж самі координати. Кожна точка повинна бути унікальна. Ваші координати для {$a->shape} повинні бути надані як - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Задана вами фігура вийшла за межі зображення тла.';
$string['formerror_toomanysemicolons'] = 'Ви вказали занадто багато частин розділених середником в якості координат. Ваші координати для {$a->shape} повинні бути надані як - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Не вдалося розпізнати вказані вами ширину і висоту. Ваші координати для {$a->shape} повинні бути надані як - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Не вдалося розпізнати вказані вами координати х,у. Ваші координати для {$a->shape} повинні бути надані як - {$a->coordsstring}.';
$string['infinite'] = 'Багаторазово';
$string['marker'] = 'Маркер';
$string['marker_n'] = 'Маркер  {no}';
$string['markers'] = 'Маркери';
$string['nolabel'] = 'Відсутній текст';
$string['noofdrags'] = 'Кількість';
$string['pleasedragatleastonemarker'] = 'Ваша відповідь не повна; вам потрібно розмістити на картинці хоча б один маркер.';
$string['pluginname'] = 'Перетягування маркерів';
$string['pluginname_help'] = 'Питання з перетягування маркерів вимагає від студента перетягнути текстову мітку і покласти її у визначену зону відповіді на картинці тла.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Додавання питання з перетягуванням маркерів';
$string['pluginnameediting'] = 'Редагування питання з перетягуванням маркерів';
$string['pluginnamesummary'] = 'Маркери перетягуються на фонове зображення.

Примітка. Цей тип запитання недоступний для користувачів із вадами зору.';
$string['previewareaheader'] = 'Попередній перегляд';
$string['previewareamessage'] = 'Виберіть файл фонового зображення, введіть текстові мітки для маркерів і визначте зони перенесення на фоновому зображенні, до яких їх потрібно перетягнути.';
$string['privacy:metadata'] = 'Плагін типу запитання для маркерів перетягування дозволяє авторам запитань встановлювати параметри за замовчуванням як параметри користувача.';
$string['privacy:preference:defaultmark'] = 'Позначка за замовчуванням, встановлена для даного запитання.';
$string['privacy:preference:penalty'] = 'Штраф за кожну неправильну спробу, коли запитання запускаються з використанням поведінки «Інтерактивний із кількома спробами» або «Адаптивний режим».';
$string['privacy:preference:shuffleanswers'] = 'Чи потрібно автоматично перемішувати відповіді.';
$string['refresh'] = 'Оновити попередній перегляд';
$string['shape'] = 'Область';
$string['shape_circle'] = 'Коло';
$string['shape_circle_coords'] = 'x,y;r (де x,y - координати центру кола, а r - радіус)';
$string['shape_circle_lowercase'] = 'коло';
$string['shape_polygon'] = 'Багатокутник';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (де x1, y1 -координати першої вершини, x2, y2 - координати другої вершини і т.д. Не потрібно повторювати координати першої вершини, щоб замкнути багатокутник.)';
$string['shape_polygon_lowercase'] = 'багатокутник';
$string['shape_rectangle'] = 'Прямокутник';
$string['shape_rectangle_coords'] = 'x,y;w,h (де x,y - координати верхнього лівого кута прямокутника; w - ширина, h - висота прямокутника)';
$string['shape_rectangle_lowercase'] = 'прямокутник';
$string['showmisplaced'] = 'Виділіть зони випадання, на які не було опущено правильний маркер';
$string['shuffleimages'] = 'Перемішуйте елементи в випадковому порядку при кожній спробі запитання';
$string['stateincorrectlyplaced'] = 'Показати маркери, які неправильно розміщені';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Зона відповіді  {$a}';
$string['ytop'] = 'Згори';
