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
 * Strings for component 'fileconverter_unoconv', language 'uk', version '4.4'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Шлях до програми unoconv - конвертера документів';
$string['pathtounoconv_help'] = 'Шлях до конвертера документів unoconv. Це виконуваний файл, який може конвертувати між форматами документів, які підтримує LibreOffice. Це необов’язково, але якщо вказано, Moodle використовуватиме його для автоматичного перетворення між форматами документів. Це використовується для підтримки ширшого діапазону вхідних файлів для функції анотації присвоювання PDF.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Плагін конвертера документів Unoconv не зберігає жодних особистих даних.';
$string['test_unoconv'] = 'Перевірити шлях до unoconv';
$string['test_unoconvdoesnotexist'] = 'Шлях до unoconv не вказує на програму unoconv. Будь ласка, перевірте ваші налаштування.';
$string['test_unoconvdownload'] = 'Завантажити конвертований до pdf тестовий файл.';
$string['test_unoconvempty'] = 'Шлях unoconv не встановлено. Будь ласка, перегляньте налаштування свого шляху.';
$string['test_unoconvisdir'] = 'Шлях до unoconv вказує на каталог, будь ласка, включіть програму unoconv до вказаного вами шляху';
$string['test_unoconvnotestfile'] = 'Тестовий документ, який потрібно конвертувати в PDF, відсутній.';
$string['test_unoconvnotexecutable'] = 'Шлях до unoconv вказує на файл, який не має права виконання';
$string['test_unoconvok'] = 'Шлях до unoconv здається вказано правильно.';
$string['test_unoconvversionnotsupported'] = 'Встановлена вами версія unoconv не підтримується. Функція в оцінюванні завдання Moodle вимагає версію 0.7 або вище.';
