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
 * Strings for component 'booktool_wordimport', language 'uk', version '4.4'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Не вдається відкрити тимчасовий файл <b>{$a}</b>';
$string['embeddedimageswarning'] = 'Попередження: цей файл потрібно відкрити за допомогою Word 2020 або Word 365, щоб правильно обробляти вбудовані зображення.';
$string['encodedimageswarning'] = 'Попередження: цей файл містить закодовані зображення. Перегляньте <a href="http://www.moodle2word.net/mod/page/view.php?id=143">додаткову інформацію про те, як перетворити їх назад у вбудовані зображення</a>.';
$string['exportbook'] = 'Експортувати книгу в Microsoft Word';
$string['exportchapter'] = 'Експортуйте цей розділ до Microsoft Word';
$string['exportformat'] = 'Формат експорту.';
$string['exportformat_desc'] = 'Формат експорту.';
$string['exportformat_embedded'] = 'Word 2010';
$string['exportformat_encoded'] = 'Word 2020';
$string['exportformat_help'] = 'Виберіть формат, сумісний з Word 2020/365, якщо у вас є доступ до Word 2019, Word 2020 або Word 365. В іншому випадку виберіть Word 2010, для якого потрібен зовнішній шаблон Word, щоб можна було конвертувати зображення у зручний для використання формат. Перегляньте <a href="http://www.moodle2word.net/mod/page/view.php?id=143">додаткову інформацію про те, як перетворити їх назад у вбудовані зображення</a>.';
$string['heading1stylelevel'] = 'Рівень елемента заголовка для стилю заголовка 1';
$string['heading1stylelevel_desc'] = 'Рівень елемента заголовка HTML, на який має бути зіставлено стиль Word "Заголовок 1".';
$string['importchapters'] = 'Імпорт із Microsoft Word';
$string['insertionpoint'] = 'Вставити перед поточною главою';
$string['insertionpoint_help'] = 'Вставте вміст перед поточною главою, зберігаючи весь наявний вміст';
$string['nochapters'] = 'Не знайдено розділів книги, тому не вдається експортувати в Microsoft Word.';
$string['pluginname'] = 'Імпорт/експорт файлу Microsoft Word (книга)';
$string['privacy:metadata'] = 'Інструмент імпорту/експорту файлів Microsoft Word для книг не зберігає особисті дані.';
$string['replacebook'] = 'Замінити книгу';
$string['replacebook_help'] = 'Видаліть поточний вміст книги перед імпортуванням';
$string['replacechapter'] = 'Замінити поточний розділ';
$string['replacechapter_help'] = 'Замініть розділ вмісту першим розділом із файлу, але збережіть усі інші розділи';
$string['settings'] = 'Налаштування імпорту/експорту файлів Microsoft Word (книги).';
$string['splitonsubheadings'] = 'Створіть підрозділи на основі підзаголовків';
$string['splitonsubheadings_help'] = 'Підрозділи створюватимуться у стилях «Заголовок 2».';
$string['stylesheetunavailable'] = 'Таблиця стилів XSLT <b>{$a}</b> недоступна';
$string['transformationfailed'] = 'Помилка трансформації XSLT';
$string['wordfile'] = 'Файл Microsoft Word';
$string['wordfile_help'] = 'Завантажте файл <i>.docx</i>, збережений з Microsoft Word або LibreOffice';
$string['wordimport:export'] = 'Експортувати файл Microsoft Word';
$string['wordimport:import'] = 'Імпорт файлу Microsoft Word';
$string['xsltunavailable'] = 'Щоб зберегти цей файл Word, вам потрібна бібліотека XSLT, встановлена в PHP';
