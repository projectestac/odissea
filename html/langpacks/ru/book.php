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
 * Strings for component 'book', language 'ru', version '3.11'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Добавить главу';
$string['addafterchapter'] = 'Добавить новую главу после «{$a->title}»';
$string['book:addinstance'] = 'Добавлять новую книгу';
$string['book:edit'] = 'Редактировать главы книги';
$string['book:read'] = 'Просматривать книгу';
$string['book:viewhiddenchapters'] = 'Просматривать скрытые главы книги';
$string['chapterandsubchaptersdeleted'] = 'Глава «{$a->title}» и ее подглавы {$a->subchapters} были удалены';
$string['chapterdeleted'] = 'Глава «{$a->title}» была удалена';
$string['chapters'] = 'Главы';
$string['chaptertitle'] = 'Название главы';
$string['confchapterdelete'] = 'Вы действительно хотите удалить эту главу?';
$string['confchapterdeleteall'] = 'Вы действительно хотите удалить эту главу и все ее подглавы?';
$string['content'] = 'Содержимое';
$string['customtitles'] = 'Нестандартные заголовки';
$string['customtitles_help'] = 'Обычно название главы отображается в оглавлении и в виде заголовка над содержимым.

При отмеченном параметре название главы не отображается в виде заголовка над содержимым. Другое название (возможно, более длинное, чем название главы) может быть введено как часть содержимого';
$string['deletechapter'] = 'Удалить главу «{$a}»';
$string['editchapter'] = 'Редактировать главу «{$a}»';
$string['editingchapter'] = 'Редактирование главы';
$string['errorchapter'] = 'Ошибка чтения главы книги.';
$string['eventchaptercreated'] = 'Глава создана';
$string['eventchapterdeleted'] = 'Глава удалена';
$string['eventchapterupdated'] = 'Глава обновлена';
$string['eventchapterviewed'] = 'Глава просмотрена';
$string['hidechapter'] = 'Скрыть главу «{$a}»';
$string['indicator:cognitivedepth'] = 'Книга: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на  глубине познания, достигнутой студентом при изучении Книг.';
$string['indicator:cognitivedepthdef'] = 'Книга: познавательный аспект';
$string['indicator:cognitivedepthdef_help'] = 'Участник достиг этого процента познавательного взаимодействия, предлагаемого Книгами в течение этого интервала анализа (Уровни = Нет просмотра, Просмотр)';
$string['indicator:socialbreadth'] = 'Книга: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при работе с ресурсом Книга.';
$string['indicator:socialbreadthdef'] = 'Книга: социальный аспект';
$string['indicator:socialbreadthdef_help'] = 'Участник достиг этого процента социальной активности, предлагаемой Книгами в течение этого интервала анализа (Уровни = нет участия, единственный участник)';
$string['modulename'] = 'Книга';
$string['modulename_help'] = 'Модуль Книга позволяет преподавателю создать многостраничный ресурс, подобный книге, с главами и подглавами. Книги могут содержать медиа-файлы, а также длинную текстовую информацию, которая может быть разбита на разделы.

Книга может быть использована

* для отображения обучающего материала по отдельным разделам
* в качестве справочника
* как портфолио образцов студенческих работ';
$string['modulenameplural'] = 'Книги';
$string['movechapterdown'] = 'Переместить главу «{$a}» вниз';
$string['movechapterup'] = 'Переместить главу «{$a}» вверх';
$string['navexit'] = 'Покинуть книгу';
$string['navimages'] = 'Изображения';
$string['navnext'] = 'Следующая';
$string['navnexttitle'] = 'Далее: {$a}';
$string['navoptions'] = 'Доступные настройки навигационных ссылок';
$string['navoptions_desc'] = 'Настройки отображения навигации на страницах книги';
$string['navprev'] = 'Предыдущая';
$string['navprevtitle'] = 'Назад: {$a}';
$string['navstyle'] = 'Стиль навигации';
$string['navstyle_help'] = '* Изображения - Значки используются для навигации
* Текст - Названия глав используются для навигации';
$string['navtext'] = 'Текст';
$string['navtoc'] = 'Только оглавление';
$string['nocontent'] = 'Содержимое в эту книгу еще не добавлено.';
$string['numbering'] = 'Форматирование глав';
$string['numbering0'] = 'Отсутствует';
$string['numbering1'] = 'Номера';
$string['numbering2'] = 'Маркеры';
$string['numbering3'] = 'Отступ';
$string['numbering_help'] = '* Отсутствует - к главам и подразделам не применяется нумерация и форматирование.

* Номера - главы и подразделы нумеруются числами 1, 1.1, 1.2, 2, ...

* Маркеры - подразделы отображаются с отступом и помечаются маркерами в оглавлении

* Отступ - подразделы отображаются с отступом в оглавлении';
$string['numberingoptions'] = 'Доступные параметры форматирования глав';
$string['numberingoptions_desc'] = 'Выберите параметры нумерации, которые должны быть доступны при создании новых книг.';
$string['page-mod-book-x'] = 'Страница любого модуля Книга';
$string['pluginadministration'] = 'Управление книгой';
$string['pluginname'] = 'Книга';
$string['previouschapter'] = 'Предыдущая глава';
$string['privacy:metadata'] = 'Элемент курса «Книга» не хранит никаких персональных данных.';
$string['removeallbooktags'] = 'Удалить все теги книги';
$string['search:activity'] = 'Книга — информация о ресурсе';
$string['search:chapter'] = 'Книга — главы';
$string['showchapter'] = 'Показать главу «{$a}»';
$string['subchapter'] = 'Подраздел';
$string['subchapternotice'] = '(Создана только одна первая глава)';
$string['subplugintype_booktool'] = 'Инструмент плагина «Книга»';
$string['subplugintype_booktool_plural'] = 'Инструменты плагина «Книга»';
$string['tagarea_book_chapters'] = 'Главы книги';
$string['tagsdeleted'] = 'Тэги книг были удалены';
$string['toc'] = 'Оглавление';
$string['top'] = 'наверх';
