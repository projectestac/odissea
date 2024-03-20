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
 * Strings for component 'workshopallocation_scheduled', language 'uk', version '4.1'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Фонова обробка для запланованого розподілу';
$string['currentstatus'] = 'Поточний статус';
$string['currentstatusexecution'] = 'Статус';
$string['currentstatusexecution1'] = 'Виконано {$a->datetime}';
$string['currentstatusexecution2'] = 'Повинно бути виконано повторно до {$a->datetime}';
$string['currentstatusexecution3'] = 'Повинно бути виконано до {$a->datetime}';
$string['currentstatusexecution4'] = 'Очікується виконання';
$string['currentstatusnext'] = 'Наступне виконання';
$string['currentstatusnext_help'] = 'В деяких випадках розподіл повинен бути запланованим на автоматичне повторення після того, як вже був проведений. Наприклад, це може трапитися при продовженні терміну подання матеріалів.';
$string['currentstatusreset'] = 'Скинути';
$string['currentstatusreset_help'] = 'Збереження форми з відміченими елементами призведе також до відміни поточного стану. Вся інформація про здійснену роботу буде видалена, розподіл може бути повтореним (якщо попередньо включений).';
$string['currentstatusresetinfo'] = 'Відмітьте та збережіть форму для скидання результатів виконання';
$string['currentstatusresult'] = 'Нещодавній результат виконання';
$string['enablescheduled'] = 'Включити запланований розподіл';
$string['enablescheduledinfo'] = 'Автоматичний розподіл подання матеріалів наприкінці етапу подання';
$string['pluginname'] = 'Запланований розподіл';
$string['privacy:metadata'] = 'Плагін запланованого розподілу не зберігає жодних персональних даних. Фактичні персональні дані про те, хто кого буде оцінювати, зберігаються в самому модулі Workshop і є основою для експорту деталей оцінки.';
$string['randomallocationsettings'] = 'Налаштування розподілу';
$string['randomallocationsettings_help'] = 'Тут визначаються параметри для методу випадкового розподілу. Вони використовуватимуться модулем випадкового розподілу для фактичного розподілу представлених матеріалів.';
$string['resultdisabled'] = 'Запланований розподіл вимкнуто';
$string['resultenabled'] = 'Запланований розподіл увімкнуто';
$string['resultexecuted'] = 'Виконано';
$string['resultfailed'] = 'Вимкнути автоматичний розподіл подання матеріалів';
$string['resultfailedconfig'] = 'Запланований розподіл не налаштовано';
$string['resultfaileddeadline'] = 'Не встановлено крайній термін для подання матеріалів';
$string['resultfailedphase'] = 'Семінар не на етапі подання матеріалів';
$string['resultvoid'] = 'Матеріали не розподілено';
$string['resultvoiddeadline'] = 'Термін подачі робіт ще не закінчено';
$string['resultvoidexecuted'] = 'Розподіл вже проведено';
$string['scheduledallocationsettings'] = 'Налаштування запланованого розподілу';
$string['scheduledallocationsettings_help'] = 'Якщо включено, то метод запланованого автоматичного розподілу буде автоматично розподіляти подані матеріали для оцінення в кінці етапу подання робіт. Закінчення етапу можна визначити параметром ’Кінцевий термін подання’.

Розподіл випадковим методом виконується з параметрами, попередньо визначені в цій формі. Це означає, що запланований розподіл спрацює, якщо викладач створив випадковий розподіл для кінця етапу подання матеріалів використовуючи налаштування нижче.

Зверніть увагу, що запланований розподіл *НЕ* виконується, якщо ви вручну перемикнули семінар в етап оцінювання до закінчення строку подання матеріалів. В цьому випадку ви повинні самостійно розподілити подані матеріали. Запланований розподіл корисний при використанні разом з автоматичним перемиканням етапів.';
$string['setup'] = 'Створити запланований розподіл';
