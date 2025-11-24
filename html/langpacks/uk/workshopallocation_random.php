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
 * Strings for component 'workshopallocation_random', language 'uk', version '4.5'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Додати самооцінювання';
$string['allocationaddeddetail'] = 'Нове оцінювання, яке будезроблено: <strong>{$a->reviewername}</strong>  рецензент  <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Неможливо звільнити оцінку вже оціненого: рецензент  <strong>{$a->reviewername}</strong>, автор відповіді: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Повторне оцінювання: <strong>{$a->reviewername}</strong> зберігається як рецензент <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Налаштування розподілу';
$string['assessmentdeleteddetail'] = 'Оцінювання звільнилося: <strong>{$a->reviewername}</strong> більше не рецензент <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Учасники можуть оцінювати без надання власної відповіді';
$string['confignumofreviews'] = 'Типова кількість матеріалів, які будуть випадковим чином розподілені';
$string['excludesamegroup'] = 'Заборонити відгуки з боку колег з тієї ж групи';
$string['noallocationtoadd'] = 'Немає виділення для додавання';
$string['nogroupusers'] = '<p>Увага: Якщо семінар має режим \'видимі групи\' або \'окремі групи\', то користувачі повинні бути частиною хоча б однієї групи, щоб мати можливість оцінювання завдань, покладених на них цим інструментом. Користувачі, які не входять в жодну з груп, можуть робити самооцінювання або видаляти вже існуючі оцінки.</p> <p>Ці користувачі наразі не в групі: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Звільнення {$a} оцінювань';
$string['numofrandomlyallocatedsubmissions'] = 'Випадкове виділення {$a} відповідей';
$string['numofreviews'] = 'Кількість рецензентів';
$string['numofselfallocatedsubmissions'] = 'Саморозподілення {$a} відповідей';
$string['numperauthor'] = 'за відповідями';
$string['numperreviewer'] = 'за рецензентами';
$string['pluginname'] = 'Випадкове виділення';
$string['privacy:metadata'] = 'Плагін випадкового розподілу не зберігає жодних персональних даних. Фактичні персональні дані про те, хто кого буде оцінювати, зберігаються в самому модулі Workshop і є основою для експорту деталей оцінки.';
$string['randomallocationdone'] = 'Випадкове виділення проведено';
$string['removecurrentallocations'] = 'Видалити поточні розподілення';
$string['resultnomorepeers'] = 'Більше немає доступних відповідних рецензентів';
$string['resultnomorepeersingroup'] = 'Немає доступних відповідних рецензентів в цій окремій групі';
$string['resultnotenoughpeers'] = 'Немає доступних відповідних рецензентів';
$string['resultnumperauthor'] = 'Спроба розподілити {$a} рецензії(й) за авторами';
$string['resultnumperreviewer'] = 'Спроба розподілити {$a} рецензії(й) за рецензентами';
$string['stats'] = 'Статистика поточного виділення';
