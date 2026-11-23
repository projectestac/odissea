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
 * Strings for component 'availability_role', language 'ru', version '4.5'.
 *
 * @package     availability_role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Допустить только пользователей с указанной в курсе ролью.';
$string['error_selectrole'] = 'Вы должны выбрать роль';
$string['missing'] = '[Отсутствует роль]';
$string['nonsensical_warning'] = '<b>Внимание:</b><br />У этой роли вообще нет доступа к этому типу активного элемента.<br /> Это ограничение не будет иметь никакого эффекта.';
$string['pluginname'] = 'Ограничение по роли в курсе';
$string['privacy:metadata'] = 'Плагин «Ограничение по роли» не хранит никаких персональных данных.';
$string['requires_notrole'] = 'Вы не <em>{$a}</em>';
$string['requires_role'] = 'Вы <em>{$a}</em>';
$string['role:addinstance'] = 'Добавить условия роли для активного элемента';
$string['setting_coursecatroles'] = 'Поддерживаемые роли категорий';
$string['setting_courseroles'] = 'Поддерживаемые роли курса';
$string['setting_globalroles'] = 'Поддерживаемые глобальные роли';
$string['setting_specialrolesheading'] = 'Особые роли';
$string['setting_supportedrolesheading'] = 'Поддерживаемые роли';
$string['setting_supportedrolesheading_desc'] = 'С помощью этих настроек можно ограничить роли, которые можно использовать в условии. По умолчанию в условии можно использовать все роли, которые можно назначить в контексте курса, но роли, назначаемые на уровне категории или на глобальном уровне, по умолчанию отключены.';
$string['setting_supportedrolesheading_note'] = 'Обратите внимание: если вы измените один из этих параметров и запретите использование роли, это не повлияет на существующие условия, и отключенная роль по-прежнему будет действовать в имеющихся условиях.';
$string['setting_supportguestrole'] = 'Роль гостя';
$string['setting_supportguestrole_desc'] = 'Если активировано, доступность элементов курса может быть ограничена или запрещена пользователям, которые просматривают курс в качестве гостя.';
$string['setting_supportnotloggedinrole'] = 'Роль не вошедшего в систему пользователя';
$string['setting_supportnotloggedinrole_desc'] = 'Если активировано, доступность элементов курса может быть ограничена или запрещена для пользователей, которые не вошли в ситстему.';
$string['title'] = 'Роль';
