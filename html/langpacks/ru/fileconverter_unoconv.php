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
 * Strings for component 'fileconverter_unoconv', language 'ru', version '4.5'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Путь к конвертеру документов unoconv';
$string['pathtounoconv_help'] = 'Путь к конвертеру документов unoconv. Это исполняемый файл, предназначенный для конвертации документов между форматами, поддерживаемыми LibreOffice. Заполнение этого параметра необязательно, но, если этот параметр задан, Moodle будет использовать unoconv для автоматического преобразования документов. Это позволит использовать больше форматов входных файлов для функции аннотирования PDF в заданиях.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Плагин конвертера документов Unoconv не хранит никаких личных данных.';
$string['test_unoconv'] = 'Проверить путь unoconv';
$string['test_unoconvdoesnotexist'] = 'Путь unoconv не указывает на программу unoconv. Пожалуйста, проверьте свои настройки пути.';
$string['test_unoconvdownload'] = 'Скачать конвертированный в PDF тестовый файл.';
$string['test_unoconvempty'] = 'Путь к unoconv не задан. Проверьте настройки пути.';
$string['test_unoconvisdir'] = 'Путь unoconv указывает на папку, пожалуйста, включите программу unoconv в указанный вами путь';
$string['test_unoconvnotestfile'] = 'Тестовый документ для конвертации в PDF отсутствует';
$string['test_unoconvnotexecutable'] = 'Путь unoconv указывает на файл, который не является исполняемым';
$string['test_unoconvok'] = 'Путь unoconv выглядит правильно настроенным.';
$string['test_unoconvversionnotsupported'] = 'Установленная вами версия unoconv не поддерживается. Возможность оценки задания в Moodle требует версию 0.7 или выше.';
