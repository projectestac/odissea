<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_filetypes', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Добавить новый тип файла';
$string['corestring'] = 'Строка альтернативного языка';
$string['corestring_help'] = 'Этот параметр может быть использован для выбора строки другого языка из базового языкового файла mimetypes.php. Обычно должен быть пустым. Для пользовательских типов заполняйте поле описания.';
$string['defaulticon'] = 'Значок по умолчанию для MIME-типа';
$string['defaulticon_help'] = 'Если есть несколько расширений файлов с одинаковым MIME-типом, выберите этот параметр для одного из расширений, чтобы его значок использовался при определении значка по MIME-типу.';
$string['deletea'] = 'Удалить {$a}';
$string['delete_confirmation'] = 'Вы абсолютно уверены, что хотите удалить <strong>.{$a}</strong>?';
$string['deletefiletypes'] = 'Удалить тип файла';
$string['description'] = 'Пользовательское описание';
$string['description_help'] = 'Простое описание типа файла, например, «электронная книга Kindle». Если ваш сайт поддерживает несколько языков и использует фильтр «Многоязыковое содержимое», Вы можете ввести в это поле мультиязычные теги, чтобы задать описание на разных языках.';
$string['descriptiontype'] = 'Описание типа';
$string['descriptiontype_custom'] = 'В этой форме указывается пользовательское описание';
$string['descriptiontype_default'] = 'По умолчанию (MIME-тип или соответствующая языковая строка, если возможно)';
$string['descriptiontype_help'] = 'Есть три возможных способа задать описание.

* По умолчанию использует MIME-тип. Если в файле mimetypes.php есть языковая строка, соответствующая этому MIME-типу, то будет использована она; в противном случае пользователям будет отображаться сам MIME-тип.
* Вы можете задать пользовательское описание в этой форме.
* Вы можете указать имя языковой строки в mimetypes.php для использования вместо MIME-типа.';
$string['descriptiontype_lang'] = 'Альтернативная языковая строка (из mimetypes.php)';
$string['displaydescription'] = 'Описание';
$string['editfiletypes'] = 'Редактировать существующий тип файла';
$string['emptylist'] = 'Типы файлов не определены.';
$string['error_addentry'] = 'Расширение типа файла, описание, MIME-тип и имя файла значка не должны содержать символы перевода строки и точки с запятой.';
$string['error_defaulticon'] = 'Другое расширение файла с тем же типом MIME уже отмечено как значок по умолчанию.';
$string['error_extension'] = 'Расширение файла <strong>{$a}</strong> уже существует или является некорректным. Расширения файлов должны быть уникальными и не должны содержать специальных символов.';
$string['error_notfound'] = 'Тип файла с расширением {$a} не найден.';
$string['extension'] = 'Расширение';
$string['extension_help'] = 'Расширение имени файла без точки, напр, «mobi»';
$string['groups'] = 'Группы типов';
$string['groups_help'] = 'Необязательный список групп типов файлов, к которым этот тип принадлежит. Это типичные категории, такие как «документы» и «изображения».';
$string['icon'] = 'Значок файла';
$string['icon_help'] = 'Имя файла значка.

Список значков берется из каталога /pix/f вашего сервера Moodle. При необходимости можно добавить свои значки в эту папку.';
$string['mimetype'] = 'MIME-тип';
$string['mimetype_help'] = 'MIME-тип, связанный с этим типом файла, например, «application/x-mobipocket-ebook»';
$string['pluginname'] = 'Типы файлов';
$string['revert'] = 'Вернуть {$a} к настройкам Moodle по умолчанию';
$string['revert_confirmation'] = 'Вы уверены, что хотите вернуть <strong>.{$a}</strong> к настройкам Moodle по умолчанию, отменив свои изменения?';
$string['revertfiletype'] = 'Восстановить тип файла';
$string['source'] = 'Тип';
$string['source_custom'] = 'Пользовательский';
$string['source_deleted'] = 'Удален';
$string['source_modified'] = 'Изменен';
$string['source_standard'] = 'Стандартный';
