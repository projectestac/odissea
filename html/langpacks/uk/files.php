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
 * Strings for component 'files', language 'uk', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Хеш вмісту';
$string['eventfileaddedtodraftarea'] = 'Файл додано до області чернеток';
$string['eventfiledeletedfromdraftarea'] = 'Файл видалено з області чернеток';
$string['privacy:metadata:core_userkey'] = 'Приватний маркер генерується та зберігається. Цей маркер можна використовувати для доступу до файлів Moodle, не вимагаючи входу в систему.';
$string['privacy:metadata:file_conversion:usermodified'] = 'Користувач, який почав конвертацію файлу.';
$string['privacy:metadata:file_conversions'] = 'Запис перетворень файлів, виконаних користувачем.';
$string['privacy:metadata:files'] = 'Запис завантажених або поширених користувачами файлів';
$string['privacy:metadata:files:author'] = 'Автор вмісту файлу';
$string['privacy:metadata:files:contenthash'] = 'Хеш вмісту файлу';
$string['privacy:metadata:files:filename'] = 'Ім\'я файлу в його файловій області';
$string['privacy:metadata:files:filepath'] = 'Шлях до файлу в його файловій області';
$string['privacy:metadata:files:filesize'] = 'Розмір файлу';
$string['privacy:metadata:files:license'] = 'Ліцензія на вміст файлу';
$string['privacy:metadata:files:mimetype'] = 'Тип MIME файлу';
$string['privacy:metadata:files:source'] = 'Джерело файлу';
$string['privacy:metadata:files:timecreated'] = 'Час створення файлу';
$string['privacy:metadata:files:timemodified'] = 'Час останньої зміни файлу';
$string['privacy:metadata:files:userid'] = 'Користувач, який створив файл';
$string['redactor'] = 'Редагування файлів';
$string['redactor:exifremover'] = 'Засіб для видалення EXIF';
$string['redactor:exifremover:emptyremovetags'] = 'Видалити теги не може бути порожнім!';
$string['redactor:exifremover:enabled'] = 'Увімкнути засіб видалення EXIF';
$string['redactor:exifremover:enabled_desc'] = 'За замовчуванням EXIF Remover підтримує лише файли JPG за допомогою PHP GD або ExifTool, якщо налаштовано.
Використання PHP GD для цієї мети може погіршити якість зображення.

Щоб покращити продуктивність EXIF Remover, налаштуйте параметри ExifTool нижче.

Більше інформації про встановлення ExifTool можна знайти на {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Помилка редагування: не вдалося обробити файл за допомогою ExifTool!';
$string['redactor:exifremover:failedprocessgd'] = 'Помилка редагування: не вдалося обробити файл за допомогою PHP gd!';
$string['redactor:exifremover:heading'] = 'Помилка редагування: не вдасться обробити файл за допомогою PHP gd!';
$string['redactor:exifremover:mimetype'] = 'Підтримувані типи MIME';
$string['redactor:exifremover:mimetype_desc'] = 'Щоб додати нові типи MIME, переконайтеся, що вони включені в <a href="./tool/filetypes/index.php">Типи файлів</a>.';
$string['redactor:exifremover:removetags'] = 'Теги EXIF, які буде видалено.';
$string['redactor:exifremover:removetags_desc'] = 'Теги EXIF, які потрібно видалити.';
$string['redactor:exifremover:tag:all'] = 'Все';
$string['redactor:exifremover:tag:gps'] = 'Тільки GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Помилка редагування: ExifTool не існує!';
$string['redactor:exifremover:toolpath'] = 'Шлях до ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Щоб використовувати ExifTool, укажіть шлях до виконуваного файлу ExifTool.
Як правило, у системах Unix/Linux це шлях /usr/bin/exiftool.';
