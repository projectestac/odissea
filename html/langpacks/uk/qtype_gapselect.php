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
 * Strings for component 'qtype_gapselect', language 'uk', version '4.4'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Бланки для {no} додаткових варіантів';
$string['answer'] = 'Відповідь';
$string['blanknumber'] = 'Пусто {$a}';
$string['choices'] = 'Доступні варіанти';
$string['choicex'] = 'Варіант [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'випадне меню';
$string['combinedcontrolnamegapselectplural'] = 'випадні меню';
$string['correctansweris'] = 'Правильна відповідь: {$a}';
$string['errorblankchoice'] = 'Будь ласка, перевірте варіанти відповідей: варіант "{$a}" порожній.';
$string['errormissingchoice'] = 'Перевірте текст запитання: {$a} не знайдено у варіантах! В якості заповнювачів дозволяється використовувати лише числа з відповідями на вибір.';
$string['errornoslots'] = 'Текст питання повинен містити маркери виду [[1]], які позначають місця пропущених слів.';
$string['errorquestiontextblank'] = 'Вам потрібно вписати текст питання.';
$string['group'] = 'Група';
$string['pleaseputananswerineachbox'] = 'Будь ласка, вкажіть відповідь для кожного поля.';
$string['pluginname'] = 'Визначити пропущені слова';
$string['pluginname_help'] = 'Запитання щодо вибору пропущених слів вимагають від респондента вибрати правильні відповіді зі спадних меню. [[1]], [[2]], [[3]], ... використовуються як заповнювачі в тексті запитання, а правильні відповіді вказуються як відповіді на вибір 1, 2, 3, ... відповідно. Можна додати додаткові відповіді з вибором, щоб ускладнити запитання. Відповіді на вибір можна згрупувати, щоб обмежити відповіді, доступні в кожному спадному меню.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Додавання питання з пропущеними словами';
$string['pluginnameediting'] = 'Редагування питання з пропущеними словами';
$string['pluginnamesummary'] = 'Пропущені слова в тексті запитання заповнюються за допомогою спадних меню.';
$string['privacy:metadata'] = 'Додаток типу запитання «Виберіть відсутні слова» дозволяє авторам запитань встановлювати параметри за замовчуванням як параметри користувача.';
$string['privacy:preference:defaultmark'] = 'Позначка за замовчуванням, встановлена для даного запитання.';
$string['privacy:preference:penalty'] = 'Штраф за кожну неправильну спробу, коли запитання запускаються з використанням поведінки «Інтерактивний із кількома спробами» або «Адаптивний режим».';
$string['privacy:preference:shuffleanswers'] = 'Чи потрібно автоматично перемішувати відповіді.';
$string['regradeissuenumchoiceschanged'] = 'Змінено кількість варіантів у групі {$a}.';
$string['regradeissuenumgroupsschanged'] = 'Змінилася кількість груп вибору.';
$string['shuffle'] = 'Перемішати';
$string['tagsnotallowed'] = '{$a->tag} не дозволяється. (Можна тільки {$a->allowed} )';
$string['tagsnotallowedatall'] = '{$a->tag} не дозволяється. (Ніякого HTML тут)';
