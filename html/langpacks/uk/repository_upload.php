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
 * Strings for component 'repository_upload', language 'uk', version '4.1'.
 *
 * @package     repository_upload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configplugin'] = 'Налаштування для модуля завантаження';
$string['pluginname'] = 'Завантажити файл';
$string['pluginname_help'] = 'Завантажити файл до Moodle';
$string['privacy:metadata'] = 'Плагін Upload a file repository не зберігає та не передає жодних особистих даних.';
$string['upload:view'] = 'Використовувати завантаження у сховище файлів';
$string['upload_error_cant_write'] = 'Помилка під час запису файлу на диск';
$string['upload_error_extension'] = 'Розширення РНР зупинило завантаження файлу.';
$string['upload_error_form_size'] = 'Завантаження перевищує директиву MAX_FILE_SIZE, зазначену у формі HTML.';
$string['upload_error_ini_size'] = 'Завантаження перевищує директиву upload_max_filesize, зазначену у php.ini.';
$string['upload_error_invalid_file'] = 'Файл \'{$a}\' порожній, або ж це каталог. Для завантаження каталогів спочатку заархівуйте їх у zip.';
$string['upload_error_no_file'] = 'Файл не завантажено.';
$string['upload_error_no_tmp_dir'] = 'РНР потрібен тимчасовий каталог.';
$string['upload_error_partial'] = 'Завантажуваний файл було завантажено частково.';
