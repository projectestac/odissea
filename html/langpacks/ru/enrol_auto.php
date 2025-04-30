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
 * Strings for component 'enrol_auto', language 'ru', version '4.4'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Настройка автоматической регистрации';
$string['auto:manage'] = 'Управлять зарегистрированными пользователями';
$string['auto:unenrol'] = 'Отчислять пользователей от курса';
$string['auto:unenrolself'] = 'Отчислять себя от курса';
$string['courseview'] = 'Просмотр курса';
$string['customwelcomemessage'] = 'Настраиваемое сообщение приветствия';
$string['customwelcomemessage_help'] = 'Пользовательское приветственное сообщение может быть добавлено в виде обычного текста или формата Moodle-auto,  с HTML-тегамии мультиязычными тегами.

В сообщение могут быть включены следующие подстановки:

* Наименование курса {$a->coursename}
* Ссылка на профиль пользователя {$a->profileurl}';
$string['defaultrole'] = 'Назначение ролей по умолчанию';
$string['defaultrole_desc'] = 'Выберите роль, которая должна быть назначена пользователям во время автоматического зачисления.';
$string['editenrolment'] = 'Редактировать зачисление';
$string['enrolon'] = 'Записаться';
$string['enrolon_desc'] = 'Событие, которое вызовет автоматическое зачисление.';
$string['enrolon_help'] = 'Выберите событие, которое должно вызвать автоматическое зачисление.

**Просмотр курса** - зачисление пользователя на просмотренный курс.<br>

**Вход пользователя** - зачисление пользователей, как только они входят в систему.<br>

** Просмотр ресурсов курса** - зачисление пользователя при просмотре одного из выбранных видов ресурсов/активных элементов.<br>
*Примечание:* для этого параметра требуется гостевой доступ.';
$string['modview'] = 'Просмотр ресурсов / активных элементов  курса';
$string['modviewmods'] = 'Ресурсы / активные элементы';
$string['modviewmods_desc'] = 'Просмотр любого из выбранных ресурсов / активных элементов вызовет автоматическое зачисление.';
$string['pluginname'] = 'Автоматическое зачисление';
$string['pluginname_desc'] = 'Плагин автоматического зачисления автоматически зачисляет пользователей при просмотре курса / активного элемента / ресурса.';
$string['privacy:metadata'] = 'Плагин автоматического зачисления не хранит никаких личных данных.';
$string['requirepassword'] = 'Требуется кодовое слово';
$string['requirepassword_desc'] = 'Требовать кодовое слово в новых курсах и предотвращать удаление кодового слова из существующих курсов.';
$string['role'] = 'Роль по умолчанию';
$string['sendcoursewelcomemessage'] = 'Отправить приветственное сообщение курса';
$string['sendcoursewelcomemessage_help'] = 'Если включено, то при автоматической регистрации пользователи получают приветственное сообщение по электронной почте.';
$string['status'] = 'Разрешить автоматическое зачисление';
$string['status_desc'] = 'По умолчанию разрешить автоматическое зачисление пользователей на курс.';
$string['status_help'] = 'Этот параметр определяет, включен ли плагин автоматического зачисления для данного курса.';
$string['unenrol'] = 'Отчислить пользователя';
$string['unenrolselfconfirm'] = 'Вы действительно хотите исключить себя из курса "{$a}"?';
$string['unenroluser'] = 'Вы действительно хотите отчислить пользователя «{$a->user}» из курса «{$a->course}»?';
$string['userlogin'] = 'Логин пользователя';
$string['welcometocourse'] = 'Добро пожаловать в {$a}';
$string['welcometocoursetext'] = 'Добро пожаловать в курс «{$a->coursename}»!

Если вы еще не сделали этого, вы можете отредактировать свой профиль, чтобы мы могли больше узнать о вас:

{$a->profileurl}';
