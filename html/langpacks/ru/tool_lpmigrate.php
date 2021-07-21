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
 * Strings for component 'tool_lpmigrate', language 'ru', version '3.11'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Разрешенные курсы';
$string['allowedcourses_help'] = 'Выберите курсы, которые должны быть мигрированы на новый фреймворк. Если ни один курс не будет указан, все курсы будут мигрированы.';
$string['continuetoframeworks'] = 'Продолжить с фреймворками';
$string['coursecompetencymigrations'] = 'Миграции компетенций курсов';
$string['coursemodulecompetencymigrations'] = 'Миграции компетенций элементов и ресурсов курса';
$string['coursemodulesfound'] = 'Найдены элементы или ресурсы курса';
$string['coursesfound'] = 'Найдены курсы';
$string['coursestartdate'] = 'Дата начала курсов';
$string['coursestartdate_help'] = 'Если параметр включен, курсы с датой начала до указанной даты не будут мигрированы.';
$string['disallowedcourses'] = 'Запрещенные курсы';
$string['disallowedcourses_help'] = 'Выберите любые курсы, которые НЕ должны быть мигрированы на новый фреймворк.';
$string['errorcannotmigratetosameframework'] = 'Не удается мигрировать фреймворк сам в себя.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Не удается связать ни одну компетенцию в этом фреймворке.';
$string['errors'] = 'Ошибки';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Ошибка в процессе миграции компетенции курса: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Ошибка в процессе миграции компетенции элемента или ресурса: {$a}';
$string['excludethese'] = 'Исключить следующие';
$string['explanation'] = 'Этот инструмент можно использовать для обновления фреймворка компетенций до более новой версии. Он ищет компетенции в курсах и элементах, используя старый фреймворк, и обновляет ссылки так, чтобы они указывали на новый фреймворк.

Не рекомендуется напрямую редактировать старый набор компетенций, так как это приведет к изменению всех компетенций, которые были получены в учебных планах пользователей.

Обычно импортируется новая версия фреймворка, скрывается старый фреймворк, а затем используется этот инструмент для миграции новых курсов на новый фреймворк.';
$string['findingcoursecompetencies'] = 'Выполняем поиск компетенций курсов';
$string['findingmodulecompetencies'] = 'Выполняем поиск компетенций элементов и ресурсов';
$string['frameworks'] = 'Фремворки';
$string['limittothese'] = 'Ограничить следующими';
$string['lpmigrate:frameworksmigrate'] = 'Мигрировать фреймворки';
$string['migrateframeworks'] = 'Мигрировать фреймворки';
$string['migratefrom'] = 'Мигрировать из';
$string['migratefrom_help'] = 'Выберите старый фреймворк, который сейчас используется.';
$string['migratemore'] = 'Мигрировать еще';
$string['migrateto'] = 'Мигрировать в';
$string['migrateto_help'] = 'Выберите новую версию фреймворка. Можно выбрать только фреймворк, который не является скрытым.';
$string['migratingcourses'] = 'Мигрирование курсов';
$string['missingmappings'] = 'Отсутствующие связи';
$string['performmigration'] = 'Выполнить миграцию';
$string['pluginname'] = 'Инструмент миграции компетенций';
$string['privacy:metadata'] = 'Плагин Инструмент переноса компетентностей не хранит никаких личных данных.';
$string['results'] = 'Результаты';
$string['startdatefrom'] = 'Дата начала действия';
$string['unmappedin'] = 'Убрана связь в {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Компетенция курса не может быть удалена.';
$string['warningcouldnotremovemodulecompetency'] = 'Компетенция элемента или ресурса не может быть удалена.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Целевая компетенция курса уже существует.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Целевая компетенция элемента или ресурса уже существует.';
$string['warnings'] = 'Предупреждения';
