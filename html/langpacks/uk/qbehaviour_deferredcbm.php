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
 * Strings for component 'qbehaviour_deferredcbm', language 'uk', version '4.1'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Точність';
$string['accuracyandbonus'] = 'Точність + Бонус';
$string['assumingcertainty'] = 'Ви не вибрали впевненості. Припускається: {$a}.';
$string['averagecbmmark'] = 'Середній бал з впевненістю';
$string['basemark'] = 'Базова оцінка {$a}';
$string['breakdownbycertainty'] = 'Розбивка за впевненістю';
$string['cbmbonus'] = 'Бонус впевнності';
$string['cbmgradeexplanation'] = 'Для впевненості, оцінка вище показує відношення до максимуму для всіх правильних відповідей для С=1.';
$string['cbmgrades'] = 'Оцінки впевненості';
$string['cbmgrades_help'] = 'З оцінюванням на базі впевненості кожному питанню з правильною відповіддю та C=1 (низькою впевненістю) дається оцінка 100%. Оцінка може бути вище ніж 300%, якщо кожне питання з правильною відповіддю та С = 3 (високою ступінню впевненості). Неправильні уявлення (впевнені неправильні відповіді) менші бали набагато більше, ніж неправильних відповідей, які визнані бути невизначеними. Це може навіть призвести до негативних загальних оцінок.

**Точність** є відсоток правильності з ігноруванням впевненості але зважено для максимальної оцінки за кожне питання. Успішне розрізнення більш і менш надійних відповідей дає кращу оцінку ніж вибір тієї ж впевненості для кожного питання. Це знайшло своє відображення у "Бонусі впевненості". "Точність" + "Бонус впевненості" є кращим показником знань, ніж "Точність". Неправильні уявлення можуть призвести до негативного бонусу, застерігаємо, що уважно потрібно дивитися, що є і що невідоме.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'Оцінка впевненості {$a}';
$string['certainty'] = 'Впевненість';
$string['certainty-1'] = 'Не знаю';
$string['certainty1'] = 'Не дуже (менше 67%)';
$string['certainty2'] = 'Достатньо (понад 67%)';
$string['certainty3'] = 'Впевнений (більше 80%)';
$string['certainty_help'] = 'Оцінка на базі впевненості вимагає від вас визначити вашу впевненість у правильності відповіді. Доступні рівні:

РІвень впевненості | C=1 (Недуже) | C=2 (Достатньо) | C=3 (Впевнений)
 ---------------------------- | --------------------- | ------------------------ | --------------------------
      Правильно        |          1           |            2            |             3
    Неправильно      |           0           |           -2            |            -6
Можливо правильно|         <67%     |         67-80%      |           >80%

Кращі бали отримуються з визначення невпевненості. Наприклад, якщо ви думаєте, що більше ніж 1 відповідь з 3 буде неправильною, вам краще вказати С=1 та уникнути ризику отримати негативні бали.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Не знаю';
$string['certaintyshort1'] = 'Не дуже';
$string['certaintyshort2'] = 'Достатньо';
$string['certaintyshort3'] = 'Впевнений';
$string['dontknow'] = 'Не знаю';
$string['foransweredquestions'] = 'Результати тільки для {$a} питань з відповідями';
$string['forentirequiz'] = 'Результати для всього тесту ({$a} питань)';
$string['howcertainareyou'] = 'Впевненість {$a->help}: {$a->choices}';
$string['judgementok'] = 'Гаразд';
$string['judgementsummary'] = 'Відповіді: {$a->responses}. Точність: {$a->fraction}. (Оптимальний інтервал з {$a->idealrangelow} до {$a->idealrangehigh}). Ви були {$a->judgement} використовуючи цей рівень впевненості.';
$string['noquestions'] = 'Без відповідей';
$string['overconfident'] = 'самовпевнно';
$string['pluginname'] = 'Після відправлення всього тесту з відміткою ступеня впевненості';
$string['privacy:metadata'] = 'Плагін «Відкладений відгук із поведінкою питань CBM» не зберігає жодних особистих даних.';
$string['slightlyoverconfident'] = 'трохи самовпевнено';
$string['slightlyunderconfident'] = 'трохи невпевнено';
$string['underconfident'] = 'невпевнено';
$string['weightx'] = 'Меню вибору';
