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
 * Strings for component 'tool_lpmigrate', language 'uk', version '4.1'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Дозволені курси';
$string['allowedcourses_help'] = 'Обрати курси для міграції до нових репозиторіїв компетентностей. Якщо жодного курсу не вказати, то мігруватимуть усі курси.';
$string['continuetoframeworks'] = 'Продовжити до репозиторіїв';
$string['coursecompetencymigrations'] = 'Міграція компетентностей курсу';
$string['coursemodulecompetencymigrations'] = 'Міграція компетентностей діяльностей і ресурсів курсу';
$string['coursemodulesfound'] = 'Діяльності і ресурси знайдених курсів';
$string['coursesfound'] = 'Знайдені курси';
$string['coursestartdate'] = 'Дата початку курсу';
$string['coursestartdate_help'] = 'Якщо налаштування активоване, то курси, що починаються раніше вказаної дати, не будуть перенесені';
$string['disallowedcourses'] = 'Не дозволені курси';
$string['disallowedcourses_help'] = 'Оберіть курси, які не підлягають міграції до нових репозиторіїв компетентностей.';
$string['errorcannotmigratetosameframework'] = 'Не можна мігрувати з і до того самого репозиторію.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Неможливо встановити відповідність з жодною компетентністю цього репозиторію.';
$string['errors'] = 'Помилки';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Помилки під час міграції компетентності курсу: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Помилки під час міграції компетентності діяльності або ресурсу: {$a}';
$string['excludethese'] = 'Виключити';
$string['explanation'] = 'Цей засіб може використовуватися для оновлення репозиторіїв компетентностей до нової версії. Він розшукує в курсі та діяльностях компетентності, що використовували колишній репозиторій і оновлює зв\'язки так, щоб посилатися на новий репозиторій. Не рекомендується змінювати напряму старий репозиторій компетентностей, тому що це змінить усі компетентності, які вже відмічені як досягнуті в навчальних планах користувачів. Типове застосування цього засобу починається з імпорту нової версії репозиторію, приховування попередньої версії й використання цього засобу для міграції нових курсів до нового репозиторію.';
$string['findingcoursecompetencies'] = 'Пошук компетентностей курсу';
$string['findingmodulecompetencies'] = 'Пошук компетентностей ресурсів і діяльностей';
$string['frameworks'] = 'Репозиторії';
$string['limittothese'] = 'Лише для курсів';
$string['lpmigrate:frameworksmigrate'] = 'Міграція репозиторіїв';
$string['migrateframeworks'] = 'Міграція репозиторіїв';
$string['migratefrom'] = 'Мігрувати з';
$string['migratefrom_help'] = 'Обрати колишній репозиторій, що зараз використовується.';
$string['migratemore'] = 'Ще мігрувати';
$string['migrateto'] = 'Мігрувати до';
$string['migrateto_help'] = 'Обрати нову версію репозиторію. Неможливо обрати прихований репозиторій.';
$string['migratingcourses'] = 'Міграція курсу';
$string['missingmappings'] = 'Відсутні відповідності';
$string['performmigration'] = 'Здійснити міграцію';
$string['pluginname'] = 'Засіб міграції компетентностей';
$string['privacy:metadata'] = 'Плагін інструмента переміщення компетенцій не зберігає жодних персональних даних.';
$string['results'] = 'Результати';
$string['startdatefrom'] = 'Дата початку -';
$string['unmappedin'] = 'Нема відповідності в {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Ця компетентність курсу не може бути видаленою.';
$string['warningcouldnotremovemodulecompetency'] = 'Компетентність ресурсу або діяльності не може бути видаленою.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Компетентність курсу призначення вже існує.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Компетентність ресурсу або діяльності призначення вже існує.';
$string['warnings'] = 'Попередження';
