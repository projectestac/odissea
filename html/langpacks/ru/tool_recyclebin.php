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
 * Strings for component 'tool_recyclebin', language 'ru', version '3.8'.
 *
 * @package     tool_recyclebin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertdeleted'] = 'Удалено: «{$a->name}»';
$string['alertemptied'] = 'Корзина была очищена.';
$string['alertrestored'] = 'Восстановлено: «{$a->name}»';
$string['autohide'] = 'Автоматически скрывать';
$string['autohide_desc'] = 'Автоматически скрывает ссылку на пустую корзину.';
$string['categorybinenable'] = 'Разрешить корзину категории';
$string['categorybinexpiry'] = 'Срок жизни курса';
$string['categorybinexpiry_desc'] = 'Как долго удаленный курс должен оставаться в корзине?';
$string['coursebinenable'] = 'Разрешить корзину курса';
$string['coursebinexpiry'] = 'Срок жизни элемента';
$string['coursebinexpiry_desc'] = 'Как долго удаленный объект должен оставаться в корзине?';
$string['datedeleted'] = 'Дата удаления';
$string['deleteall'] = 'Удалить все';
$string['deleteallconfirm'] = 'Вы уверены, что хотите удалить все объекты из корзины?';
$string['deleteconfirm'] = 'Вы уверены, что хотите удалить выбранный объект из корзины?';
$string['deleteexpirywarning'] = 'Содержимое будет навсегда удалено после {$a}.';
$string['eventitemcreated'] = 'Объект создан';
$string['eventitemcreated_desc'] = 'Создан объект с ID {$a->objectid}.';
$string['eventitemdeleted'] = 'Объект удален';
$string['eventitemdeleted_desc'] = 'Удален объект с ID {$a->objectid}.';
$string['eventitemrestored'] = 'Объект восстановлен';
$string['eventitemrestored_desc'] = 'Восстановлен объект с ID {$a->objectid}.';
$string['invalidcontext'] = 'Задан неправильный контекст.';
$string['noitemsinbin'] = 'Нет объектов в корзине.';
$string['notenabled'] = 'Извините, но корзина была отключена администратором.';
$string['pluginname'] = 'Корзина';
$string['recyclebin:deleteitems'] = 'Удалять объекты из корзины';
$string['recyclebin:restoreitems'] = 'Восстанавливать объекты из корзины';
$string['recyclebin:viewitems'] = 'Просматривать объекты в корзине';
$string['taskcleanupcategorybin'] = 'Очистка корзины категории';
$string['taskcleanupcoursebin'] = 'Очистка корзины курса';
