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
 * Strings for component 'antivirus', language 'uk', version '4.4'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Доступні модулі антивірусів';
$string['antiviruscommonsettings'] = 'Загальні налаштування антивірусу';
$string['antiviruses'] = 'Модулі антивірусів';
$string['antivirussettings'] = 'Керування модулями антивірусів';
$string['configantivirusplugins'] = 'Будь ласка, виберіть антивірусні модулі, які ви збираєтеся використовувати, та відсортуйте їх в порядку застосування.';
$string['dataerrordesc'] = 'Сталася помилка сканера даних.';
$string['dataerrorname'] = 'Помилка сканера даних';
$string['datainfecteddesc'] = 'Виявлено заражені дані.';
$string['datainfectedname'] = 'Дані заражені';
$string['datastream'] = 'Дані';
$string['emailadditionalinfo'] = 'Додаткові відомості, отримані з вірусної системи:';
$string['emailauthor'] = 'Завантажено:';
$string['emailcontenthash'] = 'Хеш вмісту:';
$string['emailcontenttype'] = 'Тип вмісту:';
$string['emaildate'] = 'Дата завантаження:';
$string['emailfilename'] = 'Ім\'я файлу:';
$string['emailfilesize'] = 'Розмір файлу:';
$string['emailgeoinfo'] = 'Геолокація:';
$string['emailinfectedfiledetected'] = 'Виявлено заражений файл';
$string['emailipaddress'] = 'IP-адреса:';
$string['emailreferer'] = 'Реферер:';
$string['emailreport'] = 'Звіт:';
$string['emailscanner'] = 'Сканер:';
$string['emailscannererrordetected'] = 'Сталася помилка сканера';
$string['emailsubject'] = '{$a} :: Clam AV повідомлення';
$string['enablequarantine'] = 'Увімкнути карантин';
$string['enablequarantine_help'] = 'Якщо ввімкнено, усі файли, які виявлені як віруси, будуть поміщені в папку карантину ([dataroot]/{$a}) для подальшої перевірки. Завантаження в Moodle не вдасться. Якщо у вас є сканування вірусів на рівні файлової системи, папку карантину слід виключити з антивірусної перевірки, щоб уникнути виявлення файлів на карантині.';
$string['fileerrordesc'] = 'Сталася помилка сканера файлів.';
$string['fileerrorname'] = 'Помилка сканера файлів';
$string['fileinfecteddesc'] = 'Виявлено заражений файл.';
$string['fileinfectedname'] = 'Файл заражений';
$string['notifyemail'] = 'Антивірусне сповіщення електронною поштою';
$string['notifyemail_help'] = 'Адреса електронної пошти для сповіщень про виявлення вірусу. Якщо залишити пустим, усі адміністратори сайту отримають сповіщення.';
$string['notifylevel'] = 'Рівень сповіщень';
$string['notifylevel_help'] = 'Різні рівні інформації, про які ви хочете отримувати сповіщення';
$string['notifylevelerror'] = 'Виявлені загрози та помилки сканера';
$string['notifylevelfound'] = 'Тільки виявлені загрози';
$string['privacy:metadata'] = 'Антивірусна система не зберігає персональні дані.';
$string['quarantinedfiles'] = 'Антивірусні файли на карантин';
$string['quarantinedisabled'] = 'Карантин вимкнено. Файл не зберігається.';
$string['quarantinetime'] = 'Максимальний час карантину';
$string['quarantinetime_desc'] = 'Файли, поміщені в карантин, старші за вказаний період, буде видалено.';
$string['taskcleanup'] = 'Очистіть файли на карантині.';
$string['threshold'] = 'Поріг для перевірки статусу';
$string['threshold_desc'] = 'Як далеко назад можна перевірити попередні результати на наявність помилок тощо, як зазначено в {$a}.';
$string['unknown'] = 'Невідомо';
$string['virusfound'] = '{$a->item} перевірено програмою перевірки на віруси та виявлено, що він заражений!';
