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
 * Strings for component 'book', language 'uk', version '4.4'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Додати новий розділ';
$string['addafterchapter'] = 'Додати нову главу після "{$a->title}"';
$string['book:addinstance'] = 'Додавати нові книги';
$string['book:edit'] = 'Редагувати розділи книги';
$string['book:read'] = 'Переглянути книгу';
$string['book:viewhiddenchapters'] = 'Бачити приховані розділи книги';
$string['chapterandsubchaptersdeleted'] = 'Розділ "{$a->title}" та його {$a->subchapters} підрозділи видалено';
$string['chapterdeleted'] = 'Розділ "{$a->title}" видалено';
$string['chapters'] = 'Розділи';
$string['chaptertitle'] = 'Назва розділу';
$string['confchapterdelete'] = 'Ви дійсно бажаєте видалити цей розділ?';
$string['confchapterdeleteall'] = 'Ви дійсно бажаєте видалити цей розділ та всі його підрозділи?';
$string['content'] = 'Повний текст';
$string['customtitles'] = 'Без заголовків';
$string['customtitles_help'] = 'Зазвичай назва розділу показується в змісті та як заголовок перед текстом.

Якщо заголовки не  застосовувати, то вони не будуть показуватися перед текстом. Деякі заголовки (можливо, якщо вони дуже довгі) краще оформлювати як частину основного тесту книги.';
$string['deletechapter'] = 'Вилучити розділ "{$a}"';
$string['editchapter'] = 'Вилучити розділ "{$a}"';
$string['editingchapter'] = 'Редагування розділу';
$string['errorchapter'] = 'Помилка читання розділу книги';
$string['eventchaptercreated'] = 'Створено розділ';
$string['eventchapterdeleted'] = 'Вилучено розділ';
$string['eventchapterupdated'] = 'Оновлено розділ';
$string['eventchapterviewed'] = 'Переглянуто розділ';
$string['hidechapter'] = 'Приховати розділ "{$a}"';
$string['indicator:cognitivedepth'] = 'Книга: пізнавальний аспект';
$string['indicator:cognitivedepth_help'] = 'Цей показник базується на глибині пізнання, досягнутої студентом у ресурсі «Книга».';
$string['indicator:cognitivedepthdef'] = 'Книга пізнавальна';
$string['indicator:cognitivedepthdef_help'] = 'Учасник досяг цього відсотка когнітивної активності, запропонованої діяльністю Книги, протягом цього інтервалу аналізу (Рівні = Немає перегляду, Перегляд)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Книга: соціальний аспект';
$string['indicator:socialbreadth_help'] = 'Цей показник базується на соціальному розширенні, досягнутому студентом на ресурсі Book.';
$string['indicator:socialbreadthdef'] = 'Книга соціальна';
$string['indicator:socialbreadthdef_help'] = 'Учасник досяг цього відсотка соціальної залученості, запропонованої діяльністю Книги, протягом цього інтервалу аналізу (Рівні = Без участі, лише учасник)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Книга';
$string['modulename_help'] = '<p>Модуль <b>Книга</b> дозволяє викладачам створювати багатосторінкові ресурси у вигляді книги з розділами, підрозділами, змістом та зручною навігацією між розділами.</p>
<p><b>Книги</b> можуть містити мультимедійні файли, а також текст і корисні уривки інформації, які можуть бути розділені на розділи.</p>
<p><b>Книгу</b> можна роздрукувати, як всю цілком, так і окремі розділи. <b>Книгу</b> можна вивантажити у спеціальний архів, та імпортувати в інші курси.</p>
<p><b>Книга</b> може бути використана:</p>
<ul>
  <li>Для перегляду матеріалів та читання окремих модулів навчання</li>
  <li>Як керівництво користувача</li>
  <li>Як представлення кращих студентських робіт</li>
</ul>';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Книги';
$string['movechapterdown'] = 'Перемістити нижче розділ "{$a}"';
$string['movechapterup'] = 'Перемістити вище розділ "{$a}"';
$string['navexit'] = 'Закрити книгу';
$string['navimages'] = 'Піктограми';
$string['navnext'] = 'Наступний';
$string['navnexttitle'] = 'Далі: {$a}';
$string['navoptions'] = 'Доступні налаштування для навігаційних посилань';
$string['navoptions_desc'] = 'Опції для показу навігації на сторінках книги';
$string['navprev'] = 'Попередній';
$string['navprevtitle'] = 'Попередній: {$a}';
$string['navstyle'] = 'Стиль навігації';
$string['navstyle_help'] = '* Піктограми - для навігації використовуються картинки вперед/назад
* Текст - для навігації використовуються текстові назви попереднього та наступного розділів';
$string['navtext'] = 'Текст';
$string['navtoc'] = 'Тільки зміст';
$string['nocontent'] = 'В цій книзі ще нічого не писали.';
$string['numbering'] = 'Позначення розділів';
$string['numbering0'] = 'без позначення';
$string['numbering1'] = 'цифрове';
$string['numbering2'] = 'маркероване';
$string['numbering3'] = 'відступами';
$string['numbering_help'] = '* без позначення - Назви розділів та підрозділів не форматуються
* цифрове - Назви розділів та підрозділів нумеруються 1, 1.1, 1.2, 2, ...
* маркероване - Підрозділи в змісті показуються з відступом та маркеруються
* відступами -  Підрозділи в змісті показуються з відступом';
$string['numberingoptions'] = 'Доступні опції для форматування розділів';
$string['numberingoptions_desc'] = 'Налаштування показу розділів та підрозділів у змісті';
$string['page-mod-book-x'] = 'Будь-яка сторінка модуля Книга';
$string['pluginadministration'] = 'Керування книгою';
$string['pluginname'] = 'Книга';
$string['previouschapter'] = 'Попередній розділ';
$string['privacy:metadata'] = 'Модуль «Книжкова діяльність» не зберігає жодних персональних даних.';
$string['removeallbooktags'] = 'Видаліть усі теги книги';
$string['search:activity'] = 'Книга - інформація про діяльність';
$string['search:chapter'] = 'Книга - розділи';
$string['showchapter'] = 'Показати розділ "{$a}"';
$string['subchapter'] = 'Підрозділ';
$string['subchapternotice'] = '(Доступно тільки після створення першого розділу)';
$string['subplugintype_booktool'] = 'Інструмент книги';
$string['subplugintype_booktool_plural'] = 'Інструменти книги';
$string['tagarea_book_chapters'] = 'Розділи книги';
$string['tagsdeleted'] = 'Теги книги видалено';
$string['toc'] = 'Зміст';
$string['top'] = 'вгорі';
