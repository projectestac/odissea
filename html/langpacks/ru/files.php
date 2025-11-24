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
 * Strings for component 'files', language 'ru', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Хэш контента';
$string['eventfileaddedtodraftarea'] = 'Файл добавлен к черновикам';
$string['eventfiledeletedfromdraftarea'] = 'Файл удален из области черновиков';
$string['privacy:metadata:core_userkey'] = 'Приватный токен генерируется и сохраняется. Этот токен можно использовать для доступа к файлам Moodle без необходимости входа в систему.';
$string['privacy:metadata:file_conversion:usermodified'] = 'Пользователь, запустивший преобразование файла.';
$string['privacy:metadata:file_conversions'] = 'Запись преобразований файлов, выполненных пользователем.';
$string['privacy:metadata:files'] = 'Сведения о файлах, загруженных или совместно используемых пользователями';
$string['privacy:metadata:files:author'] = 'Автор содержимого файла';
$string['privacy:metadata:files:contenthash'] = 'Хэш содержимого файла';
$string['privacy:metadata:files:filename'] = 'Имя файла в его области файлов';
$string['privacy:metadata:files:filepath'] = 'Путь к файлу в его области файлов';
$string['privacy:metadata:files:filesize'] = 'Размер файла';
$string['privacy:metadata:files:license'] = 'Лицензия для содержимого файла';
$string['privacy:metadata:files:mimetype'] = 'MIME-тип файла';
$string['privacy:metadata:files:source'] = 'Источник файла';
$string['privacy:metadata:files:timecreated'] = 'Время создания файла';
$string['privacy:metadata:files:timemodified'] = 'Время последнего изменения файла';
$string['privacy:metadata:files:userid'] = 'Пользователь, создавший файл';
$string['redactor'] = 'Редактирование файла';
$string['redactor:exifremover'] = 'EXIF Remover';
$string['redactor:exifremover:emptyremovetags'] = 'Редактирование файла';
$string['redactor:exifremover:enabled'] = 'Включить EXIF remover';
$string['redactor:exifremover:enabled_desc'] = 'По умолчанию EXIF Remover поддерживает только файлы JPG с использованием PHP GD или ExifTool, если они настроены.
Использование PHP GD может ухудшить качество изображения.

Чтобы повысить производительность EXIF Remover, настройте параметры ExifTool ниже.

Дополнительную информацию об установке ExifTool можно найти по адресу {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Редактирование файла';
$string['redactor:exifremover:failedprocessgd'] = 'Редактирование файла';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'Поддерживаемые типы MIME';
$string['redactor:exifremover:mimetype_desc'] = 'Чтобы добавить новые типы MIME, убедитесь, что они включены в <a href="./tool/filetypes/index.php">Типы файлов</a>.';
$string['redactor:exifremover:removetags'] = 'EXIF-теги, которые нужно удалить.';
$string['redactor:exifremover:removetags_desc'] = 'EXIF-теги, которые необходимо удалить.';
$string['redactor:exifremover:tag:all'] = 'Все';
$string['redactor:exifremover:tag:gps'] = 'Только GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Редактирование файла';
$string['redactor:exifremover:toolpath'] = 'Путь к ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Чтобы использовать ExifTool, укажите путь к исполняемому файлу ExifTool.
Обычно в системах Unix/Linux путь выглядит так: /usr/bin/exiftool.';
