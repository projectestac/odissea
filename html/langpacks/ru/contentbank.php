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
 * Strings for component 'contentbank', language 'ru', version '3.11'.
 *
 * @package     contentbank
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['author'] = 'Автор';
$string['close'] = 'Закрыть';
$string['contentbank'] = 'Банк контента';
$string['contentbankpreferences'] = 'Настройки банка контента';
$string['contentdeleted'] = 'Контент был удален.';
$string['contentname'] = 'Название контента';
$string['contentnotdeleted'] = 'Произошла ошибка при удалении контента.';
$string['contentnotrenamed'] = 'Произошла ошибка при переименовании контента.';
$string['contentrenamed'] = 'Контент был переименован.';
$string['contentsmoved'] = 'Содержимое банка контента перемещено в {$a}.';
$string['contenttypenoaccess'] = 'Вы не можете просмотреть этот контент {$a}.';
$string['contenttypenoedit'] = 'Вы не можете редактировать этот контент';
$string['contentvisibilitychanged'] = 'Контент был создан {$a}.';
$string['contentvisibilitynotset'] = 'Произошла ошибка при попытке установить видимость контента.';
$string['contextnotallowed'] = 'В этом контексте вам не разрешен доступ к банку контента.';
$string['deletecontent'] = 'Удалить контент';
$string['deletecontentconfirm'] = 'Вы действительно хотите удалить контент <em>«{$a->name}»</em> и все связанные файлы? Это действие не может быть отменено.';
$string['deletecontentconfirmlinked'] = 'Содержимое будет удалено только из банка контента. Любые места, которые в настоящее время ссылаются на него, будут автоматически обновлены, чтобы вместо контента использовать его копию.';
$string['displaydetails'] = 'Отображать банк контента с атрибутами файлов';
$string['displayicons'] = 'Отображать банк контента с иконками';
$string['emptynamenotallowed'] = 'Пустое имя не допускается';
$string['errordeletingcontentfromcategory'] = 'Ошибка при удалении контента из категории {$a}.';
$string['errornofile'] = 'Для создания контента необходим совместимый файл.';
$string['eventcontentcreated'] = 'Контент создан';
$string['eventcontentdeleted'] = 'Контент удален';
$string['eventcontentreplaced'] = 'Контент заменен файлом';
$string['eventcontentupdated'] = 'Контент обновлен';
$string['eventcontentuploaded'] = 'Контент загружен';
$string['eventcontentviewed'] = 'Контент просмотрен';
$string['file'] = 'Загрузить контент';
$string['file_help'] = 'В банке контента могут храниться файлы для использования в курсах. Могут быть загружены только файлы, которые используют типы контента, разрешенные на сайте.';
$string['itemsfound'] = 'Найдено объектов: {$a}';
$string['lastmodified'] = 'Последнее изменение';
$string['name'] = 'Контент';
$string['nocontentavailable'] = 'Контент недоступен';
$string['nocontenttypes'] = 'Нет доступных типов контента';
$string['nopermissiontodelete'] = 'У вас нет разрешения на удаление контента.';
$string['nopermissiontomanage'] = 'У вас нет разрешения на управление контентом.';
$string['notavailable'] = 'К сожалению, этот контент недоступен.';
$string['notvalidpackage'] = 'К сожалению, этот файл непригоден.';
$string['privacy:metadata:content:contenttype'] = 'Плагин Тип контента для содержимого в банке контента.';
$string['privacy:metadata:content:name'] = 'Название контента в банке контента.';
$string['privacy:metadata:content:timecreated'] = 'Время создания контента.';
$string['privacy:metadata:content:timemodified'] = 'Время изменения контента.';
$string['privacy:metadata:content:usercreated'] = 'Пользователь, создавший контент.';
$string['privacy:metadata:content:usermodified'] = 'Последний пользователь, изменивший контент.';
$string['privacy:metadata:contentbankcontent'] = 'Хранит содержимое банка контента.';
$string['privacy:metadata:userid'] = 'ID пользователя, создающего или изменяющего содержимое банка контента.';
$string['privacy:request:preference:set'] = 'Значение параметра «{$a->name}» was «{$a->value}»';
$string['public'] = 'общедоступный';
$string['rename'] = 'Переименовать';
$string['renamecontent'] = 'Переименовать контент';
$string['replacecontent'] = 'Заменить файлом';
$string['searchcontentbankbyname'] = 'Поиск контента по названию';
$string['size'] = 'Размер';
$string['timecreated'] = 'Время создания';
$string['type'] = 'Тип';
$string['unlisted'] = 'вне списка';
$string['unsupported'] = 'Этот тип контента не поддерживается.';
$string['upload'] = 'Загрузить';
$string['visibilitychoicepublic'] = 'Общедоступный';
$string['visibilitychoiceunlisted'] = 'Вне списка';
$string['visibilitypref'] = 'Видимость контента по умолчанию';
$string['visibilitypref_help'] = 'Контент, создаваемый в банке контента, по умолчанию будет использовать эту настройку видимости.';
$string['visibilitysetpublic'] = 'Опубликовать';
$string['visibilitysetunlisted'] = 'Отметить вне списка';
$string['visibilitytitleunlisted'] = '{$a} (Вне списка)';
