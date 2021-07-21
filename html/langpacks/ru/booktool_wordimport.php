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
 * Strings for component 'booktool_wordimport', language 'ru', version '3.11'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Не могу открыть временный файл <b>{$a}</b>';
$string['exportbook'] = 'Экспорт Книги в Microsoft Word';
$string['exportchapter'] = 'Экспорт этой главы в Microsoft Word';
$string['heading1stylelevel'] = 'Заголовок уровня Элемент для Заголовка 1 стиля';
$string['heading1stylelevel_desc'] = 'Укажите уровень заголовка HTML, который будет сопоставляться заголовку из Word со стилем "Заголовок 1"';
$string['importchapters'] = 'Импорт из Microsoft Word';
$string['insertionpoint'] = 'Вставка перед текущей главой';
$string['insertionpoint_help'] = 'Добавление контента (вставки) перед текущей главой с сохранением существующего контента';
$string['nochapters'] = 'Не найдены книжные главы для экспорта в Microsoft Word';
$string['pluginname'] = 'Импорт/экспорт файла Microsoft Word';
$string['privacy:metadata'] = 'Инструмент импорта/экспорта файлов Microsoft Word для Книги не хранит персональные данные.';
$string['replacebook'] = 'Замените Книгу';
$string['replacebook_help'] = 'Удалите текущее содержание Книги перед импортом';
$string['replacechapter'] = 'Заменить текущую главу';
$string['replacechapter_help'] = 'Заменить контент первой главы контентом первой главы из файла, не изменяя остальных глав';
$string['settings'] = 'Настройки импорта файла Word';
$string['splitonsubheadings'] = 'Создать подразделы на основе подзаголовков';
$string['splitonsubheadings_help'] = 'Подразделы будут созданы с учетом «Заголовка 2» Word.';
$string['wordfile'] = 'Файл Microsoft Word';
$string['wordfile_help'] = 'Загрузите .docx файл, созданный в Microsoft Word или LibreOffice';
$string['wordimport:export'] = 'Экспорт в файл Microsoft Word';
$string['wordimport:import'] = 'Импорт из файла Microsoft Word';
$string['xsltunavailable'] = 'Вам нужна библиотека XSLT, установленная в PHP, чтобы сохранить этот файл Word';
