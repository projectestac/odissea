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
 * Strings for component 'gradeimport_xml', language 'uk', version '4.4'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Помилка - неправильний XML формат';
$string['errduplicategradeidnumber'] = 'Помилка - знайдено два елементи оцінювання з id-номером \'{$a}\' на цьому курсі. Коди повинні бути унікальними.';
$string['errduplicateidnumber'] = 'Помилка - дублювання id-номера';
$string['errincorrectgradeidnumber'] = 'Помилка - id-номер \'{$a}\' з файлу імпорту не належить до жодного елементу оцінювання.';
$string['errincorrectidnumber'] = 'Помилка - неправильний id-номер';
$string['errincorrectuseridnumber'] = 'Помилка - id-номер \'{$a}\' з файлу імпорту не належить жодному користувачу.';
$string['error'] = 'Виявилися помилки';
$string['errorduringimport'] = 'Виникла помилка підчас спроби імпорту: {$a}';
$string['fileurl'] = 'Зовнішній URL файлу';
$string['fileurl_help'] = 'Поле "Адреса віддаленого файлу" призначено для отримання даних з віддаленого сервера, наприклад, зі студентської інформаційної системи.';
$string['importxml'] = 'Імпорт XML';
$string['importxml_help'] = 'Оцінки можуть бути імпортовані через XML файл, який повинен містити Код користувача та Код діяльності. Щоб отримати правильний формат, спочатку експортуйте кілька оцінок в XML файл, та перегляньте отриманий файл.';
$string['importxml_link'] = 'grade/import/xml/index';
$string['pluginname'] = 'Файл XML';
$string['privacy:metadata'] = 'Імпорт оцінок із плагіна XML не зберігає жодних особистих даних.';
$string['xml:publish'] = 'Публікувати імпорт оцінок з XML';
$string['xml:view'] = 'Імпортувати з XML-файлу';
