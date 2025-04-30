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
 * Strings for component 'qtype_shortanswer', language 'uk', version '4.4'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Додати ще {no} відповіді';
$string['answer'] = 'Відповідь: {$a}';
$string['answermustbegiven'] = 'Ви повинні додати відповідь, якщо є оцінка або коментар.';
$string['answerno'] = 'Відповідь {$a}';
$string['caseno'] = 'Ні, регістр неважливий (малі чи великі літери не відрізняються)';
$string['casesensitive'] = 'Чутливість відповіді до регістра';
$string['caseyes'] = 'Так, регістр має відповідати (малі та великі літери відрізняються)';
$string['correctansweris'] = 'Правильна відповідь: {$a}';
$string['correctanswers'] = 'Правильні відповіді';
$string['filloutoneanswer'] = 'Необхідно заповнити хоча б одну можливу відповідь, інакше питання не буде використовуватися. Порожні варіанти також не використовуватимуться. Символ ’*’ (зірочка) може відповідати будь-якій послідовності символів. Перший варіант, що збігся з відповіддю, буде використовуватися для оцінювання та коментування.';
$string['notenoughanswers'] = 'Цей тип питання потребує хоча б {$a} відповіді';
$string['pleaseenterananswer'] = 'Будь ласка введіть відповідь';
$string['pluginname'] = 'Коротка відповідь';
$string['pluginname_help'] = 'У відповідь на запитання (яке може містити зображення) респондент вводить слово чи коротку фразу. Може бути кілька можливих правильних відповідей, кожна з яких має різну оцінку. Якщо вибрано опцію «Чувти до регістру», тоді ви можете мати різні оцінки для «Word» або «word».';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = 'Додати питання типу Коротка відповідь';
$string['pluginnameediting'] = 'Редагувати питання типу Коротка відповідь';
$string['pluginnamesummary'] = 'Дозволяє відповідь одним або кількома словами (фразою або реченням), які оцінюються шляхом порівняння з відповідними зразками, які можуть містити символи підстановки (*).';
$string['privacy:metadata'] = 'Плагін типу запитання для короткої відповіді дозволяє авторам запитань встановлювати параметри за замовчуванням як параметри користувача.';
$string['privacy:preference:defaultmark'] = 'Позначка за замовчуванням, встановлена для даного запитання.';
$string['privacy:preference:penalty'] = 'Штраф за кожну неправильну спробу, коли запитання запускаються з використанням поведінки «Інтерактивний із кількома спробами» або «Адаптивний режим».';
$string['privacy:preference:usecase'] = 'Чи відповіді мають бути чутливими до регістру.';
