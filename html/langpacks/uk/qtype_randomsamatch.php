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
 * Strings for component 'qtype_randomsamatch', language 'uk', version '4.5'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Недостатні можливості для автоматичного створення цього типу питання, тому воно не може бути використано в цьому тесті. Будь ласка, повідомте свого викладача.';
$string['nosaincategory'] = 'Не має питань типу "Коротка відповідь" в категорії, яку ви вибрали: \'{$a->catname}\'. Виберіть іншу категорію, та зробіть декілька питань в цій категорії.';
$string['notenoughsaincategory'] = 'Тільки {$a->nosaquestions} питань типу "Коротка відповідь" у вибраній вами категорії: \'{$a->catname}\'. Виберіть іншу категорію, та зробіть ще кілька питань в цій категорії або вкажіть меншу кількість питань для вибірки.';
$string['pluginname'] = 'Випадкові питання на відповідність';
$string['pluginname_help'] = 'Для студента таке питання виглядає так само, як питання "На відповідність". Різниця в тому, що перелік питань для відповідності  вибирається випадково з питань типу "Коротка відповідь" з вказаної категорії. В категорії повинна бути достатня кількість не використовуваних питань типу "Коротка відповідь", інакше з’явиться повідомлення про помилку.';
$string['pluginname_link'] = 'question/type/randomsamatch';
$string['pluginnameadding'] = 'Додавання Випадкового питання на відповідність';
$string['pluginnameediting'] = 'Редагування Випадкового питання на відповідність';
$string['pluginnamesummary'] = 'Схоже на питання "На відповідність", але створюється з питань типу "Коротка відповідь", які вибираються випадковим чином з вказаної категорії.';
$string['privacy:metadata'] = 'Плагін типу запитання з випадковою короткою відповіддю не зберігає жодних особистих даних.';
$string['randomsamatch'] = 'Випадкове питання на відповідність';
$string['randomsamatchintro'] = 'Для кожного з наступних питань виберіть відповідну відповідь з випадаючого меню.';
$string['randomsamatchnumber'] = 'Кількість питань для вибору';
$string['subcats'] = 'Включно з підкатегоріями';
$string['subcats_help'] = 'Якщо вибрано, то питання з підкатегорій також будуть задіяні.';
