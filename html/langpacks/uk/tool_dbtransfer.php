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
 * Strings for component 'tool_dbtransfer', language 'uk', version '4.4'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Доступні драйвери для переміщення бази даних';
$string['cliheading'] = 'Переміщення бази даних - переконайтеся, що ніхто не має доступу до серверу під час переміщення!';
$string['climigrationnotice'] = 'Відбувається процес переміщення бази даних. Зачекайте, доки не закінчення переміщення та адміністратор не оновить конфігурацію серверу та видалить файл $CFG->dataroot/climaintenance.html';
$string['convertinglogdisplay'] = 'Відображення дій перетворення журналу';
$string['dbexport'] = 'Передача бази даних';
$string['dbtransfer'] = 'Переміщення бази даних';
$string['enablemaintenance'] = 'Включити режим обслуговування';
$string['enablemaintenance_help'] = 'Ця опція включає режим технічного обслуговування під час та після переміщення бази даних, при цьому запобігається доступ всіх користувачів до закінчення процесу. Зверніть увагу, що адміністратор повинен вручну видалити файл $CFG->dataroot/climaintenance.html та після оновлення налаштувати файл config.php для поновлення нормальної роботи.';
$string['exportdata'] = 'Експорт даних';
$string['notargetconectexception'] = 'Не вдається підключитися цільової бази даних.';
$string['options'] = 'Параметри';
$string['pluginname'] = 'Передача бази даних';
$string['privacy:metadata'] = 'Плагін передачі бази даних не зберігає жодних персональних даних.';
$string['targetdatabase'] = 'Цільова база даних';
$string['targetdatabasenotempty'] = 'Цільова база даних не повинна містити таблиці з таким префіксом!';
$string['transferdata'] = 'Передача даних';
$string['transferdbintro'] = 'Цей сценарій буде передавати весь вміст цієї бази даних на інший сервер баз даних. Він часто використовується для перенесення даних до бази даних іншого типу.';
$string['transferdbtoserver'] = 'Передати базу даних з цього Moodle до іншого серверу';
$string['transferringdbto'] = 'Передача цієї бази даних до {$a->dbtype} бази даних {$a->dbname} на {$a->dbhost}';
