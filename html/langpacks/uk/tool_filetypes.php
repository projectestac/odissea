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
 * Strings for component 'tool_filetypes', language 'uk', version '4.5'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Додати новий тип файлу';
$string['corestring'] = 'Альтернатива мовному рядку';
$string['corestring_help'] = 'Це налаштування може бути використано для вибору іншого мовного рядка з мовного файлу mimetypes.php. Зазвичай це поле можна залишати порожнім. Для спеціальних типів використовуйте поле опису.';
$string['defaulticon'] = 'Типова піктограма для типу файлу';
$string['defaulticon_help'] = 'Якщо є кілька розширень файлів для однакового типа MIME, виберіть цей параметр для одного з розширень, щоб його піктограмка використовувалася при визначенні значка цього типу MIME.';
$string['delete_confirmation'] = 'Ви впевнені, що хочете видалити <strong>.{$a}</strong>?';
$string['deletea'] = 'Видалити {$a}';
$string['deletefiletypes'] = 'Видалити тип файлу';
$string['description'] = 'Спеціальний опис';
$string['description_help'] = 'Простий опис типу файлу, напр. «Електронна книга Kindle». Якщо ваш сайт підтримує кілька мов і використовує багатомовний фільтр, ви можете ввести багатомовні теги в це поле, щоб надати опис різними мовами.';
$string['descriptiontype'] = 'Опис типу';
$string['descriptiontype_custom'] = 'Спеціальний опис специфікації в цій формі';
$string['descriptiontype_default'] = 'Типово (тип MIME або відповідний рядок мови за наявності)';
$string['descriptiontype_help'] = 'Є три можливих шляхи визначити опис.

* Типова поведінка використовує тип MIME. Якщо є відповідний мовний рядок в mimetypes.php, що відповідає цьому типу MIME, буде використовуватися він; в іншому випадку для користувачів  буде показуватися власний тип MIME.
* Ви можете вказати специфічний опис в цій формі.
* Ви можете вказати ім\'я мовного рядки в mimetypes.php,  щоб використовувати замість типу MIME.';
$string['descriptiontype_lang'] = 'Альтернативний мовний рядок (з mimetypes.php)';
$string['displaydescription'] = 'Опис';
$string['editfiletypes'] = 'Редагувати створений тип файлу';
$string['emptylist'] = 'Не визначено типи файлів.';
$string['error_addentry'] = 'Розширення типу файлу, опис, тип MIME та піктограма не повинні містити знаки закінчення рядка та крапки з комою.';
$string['error_defaulticon'] = 'Інше розширення файлу з таким же типом MIME позначено як типова піктограма.';
$string['error_extension'] = 'Розширення типу файлу <strong>{$a}</strong> вже створено або містить помилку. Розширення файлу повинно бути унікальним та не містити спеціальні символи.';
$string['error_notfound'] = 'Тип файлу з розширенням {$a} не знайдено.';
$string['extension'] = 'Розширення';
$string['extension_help'] = 'Розширення імені файлу без крапки, напр. \'mobi\'';
$string['groups'] = 'Групи типу файлу';
$string['groups_help'] = 'Додатковий список груп типів файлів, до яких належить цей тип. Це загальні категорії, такі як «документ» і «зображення».';
$string['icon'] = 'Піктограма файлу';
$string['icon_help'] = 'Ім’я файлу піктограми.

Список піктограм береться з каталогу /pix/f в каталозі встановлення Moodle. Ви можете додати туди файли з картинками, якщо це потрібно.';
$string['mimetype'] = 'Тип MIME';
$string['mimetype_help'] = 'Тип MIME, пов’язаний з цим типом файлу, напр. \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Типи файлів';
$string['privacy:metadata'] = 'Плагін Типи файлів не зберігає жодних персональних даних.';
$string['revert'] = 'Відновити {$a} до типових';
$string['revert_confirmation'] = 'Ви впевнені, що хочете відновити <strong>.{$a}</strong>  відновити до типового та відмінити ваші зміни?';
$string['revertfiletype'] = 'Відновити тип файлу';
$string['source'] = 'Тип';
$string['source_custom'] = 'Специфічний';
$string['source_deleted'] = 'Видалено';
$string['source_modified'] = 'Змінено';
$string['source_standard'] = 'Стандарт';
