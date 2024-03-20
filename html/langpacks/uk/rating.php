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
 * Strings for component 'rating', language 'uk', version '4.1'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Середня оцінка';
$string['aggregatecount'] = 'Кількість оцінок';
$string['aggregatemax'] = 'Максимальна оцінка';
$string['aggregatemin'] = 'Мінімальна оцінка';
$string['aggregatenone'] = 'Не розраховувати';
$string['aggregatesum'] = 'Сума оцінок';
$string['aggregatetype'] = 'Тип підсумку';
$string['aggregatetype_help'] = 'Тип об’єднання визначає, як оцінки будуть комбінуватися у фінальну оцінку в журналі.

* Середня оцінка - Середня зі всіх оцінок
* Кількість оцінок - Кількість елементів, які складають фінальну оцінку. Зауважимо, що загальне не може перевищувати максимальну оцінку за свою діяльність.
* Максимум - Найбільша оцінка буде представлена як фінальна
* Мінімум - Найменша оцінка буде представлена як фінальна
* Сума - всі оцінки будуть просумовані. Зауважимо, що загальне не може перевищувати максимальну оцінку за свою діяльність.

Якщо вибрано "Без оцінювання", то діяльність не з’явиться в журналі оцінок.';
$string['allowratings'] = 'Дозволити оцінювати елементи?';
$string['allratingsforitem'] = 'Всі оцінки';
$string['capabilitychecknotavailable'] = 'Неможливо перевірити до збереження елементу діяльності';
$string['couldnotdeleteratings'] = 'Не може бути видалено, оскільки люди вже оцінили його';
$string['norate'] = 'Оцінювання елементів не дозволено!';
$string['noratings'] = 'Немає оцінок';
$string['noviewanyrate'] = 'Ви можете тільки подивитися на результати по елементах, які ви виконали';
$string['noviewrate'] = 'Ви не можете переглядати оцінювання елементів';
$string['privacy:metadata:rating'] = 'Оцінка, введена користувачем, зберігається разом із зіставленням елемента, який був оцінений.';
$string['privacy:metadata:rating:rating'] = 'Числовий рейтинг, який ввів користувач.';
$string['privacy:metadata:rating:timecreated'] = 'Час, коли вперше був складений рейтинг.';
$string['privacy:metadata:rating:timemodified'] = 'Час останнього оновлення рейтингу.';
$string['privacy:metadata:rating:userid'] = 'Користувач, який склав рейтинг.';
$string['rate'] = 'Оцінити';
$string['ratepermissiondenied'] = 'Ви не можете оцінювати цей елемент';
$string['rating'] = 'Оцінка';
$string['ratinginvalid'] = 'Неправильна оцінка';
$string['ratings'] = 'Рейтинги';
$string['ratingtime'] = 'Обмежити оцінювання елементів наступним діапазоном дат:';
$string['rolewarning'] = 'Ролі, що мають право оцінювати';
$string['rolewarning_help'] = 'Ролі з дозволом оцінювати – це ролі з можливостями moodle/rating:rate плюс будь-які можливості оцінювання певної діяльності. Ви можете надати більше ролей дозвіл оцінювати на сторінці Дозволи.';
$string['scaleselectionrequired'] = 'Коли вибрано тип об’єднання оцінок ви повинні також вказати для їх використання шкалу або максимум балів.';
