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
 * Strings for component 'qtype_multichoice', language 'uk', version '4.1'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'Скільки правильних відповідей?';
$string['answerhowmany_desc'] = 'Чи повинен бути за замовчуванням одна відповідь (тобто перемикач) або декілька відповідей (тобто прапорці).';
$string['answernumbering'] = 'Нумерувати відповіді?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'Стиль нумерації за замовчуванням.';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Без нумерації';
$string['answersingleno'] = 'Кілька правильних відповідей';
$string['answersingleyes'] = 'Одна правильна відповідь';
$string['choiceno'] = 'Варіант відповіді {$a}';
$string['choices'] = 'Доступні варіанти відповіді';
$string['clearchoice'] = 'Очистити мій вибір';
$string['clozeaid'] = 'Додайте необхідне';
$string['correctansweris'] = 'Правильна відповідь: {$a}';
$string['correctanswersare'] = 'Правильні відповіді: {$a}';
$string['correctfeedback'] = 'Для будь-якої правильної відповіді';
$string['deletedchoice'] = 'Цей вибір було вилучено після початку спроби.';
$string['errfractionsaddwrong'] = 'Позитивне оцінювання, вказане вами, не складає в сумі 100%%,<br />а лише {$a}%';
$string['errfractionsnomax'] = 'Один із варіантів відповіді повинен бути 100%%, тоді можна буде належним чином оцінити це питання.';
$string['errgradesetanswerblank'] = 'Є оцінка, але відповідь порожня';
$string['feedback'] = 'Коментар';
$string['fillouttwochoices'] = 'Вам потрібно заповнити як мінімум два варіанти відповідей. Не заповнені варіанти не будуть враховуватися.';
$string['fractionsaddwrong'] = 'Сума позитивного оцінювання питання повинна складати 100%%,<br /> натомість ви вказали лише на {$a}%<br />Чи бажаєте ви повернутися та внести корективи?';
$string['fractionsnomax'] = 'Одна з відповідей повинна бути оцінена в 100%,<br /> для того щоб питання було результативним.<br />Чи бажаєте ви повернутися та внести корективи?';
$string['incorrectfeedback'] = 'Для будь-якої неправильної відповіді';
$string['notenoughanswers'] = 'Тип такого питання потребує як мінімум {$a} варіант(у)ів відповідей';
$string['overallcorrectfeedback'] = 'Коментар для будь-якої правильної відповіді';
$string['overallfeedback'] = 'Коментар до результату';
$string['overallincorrectfeedback'] = 'Коментар для будь-якої неправильної відповіді';
$string['overallpartiallycorrectfeedback'] = 'Коментар для будь-якої частково правильної відповіді';
$string['partiallycorrectfeedback'] = 'Для будь-якої частково правильної відповіді';
$string['pleaseselectananswer'] = 'Будь ласка виберіть відповідь';
$string['pleaseselectatleastoneanswer'] = 'Будь ласка виберіть хоча б одну відповідь';
$string['pluginname'] = 'Багатоваріантне питання';
$string['pluginname_help'] = 'У відповідь на запитання (яке може містити зображення) респондент вибирає з кількох відповідей. Запитання з множинним вибором може мати одну або кілька правильних відповідей.';
$string['pluginname_link'] = 'запитання/тип/множинний вибір';
$string['pluginnameadding'] = 'Додавання багатоваріантного питання';
$string['pluginnameediting'] = 'Редагування  багатоваріантного питання';
$string['pluginnamesummary'] = 'Дозволяє вибирати одну або декілька відповідей з наданого списку.';
$string['privacy:metadata'] = 'Плагін типу запитання з кількома виборами дозволяє авторам запитання встановлювати параметри за замовчуванням як параметри користувача.';
$string['privacy:preference:answernumbering'] = 'Який стиль нумерації слід використовувати ("1, 2, 3, ...", "a, b, c, ..." тощо).';
$string['privacy:preference:defaultmark'] = 'Позначка за замовчуванням, встановлена для даного запитання.';
$string['privacy:preference:penalty'] = 'Штраф за кожну неправильну спробу, коли запитання запускаються з використанням поведінки «Інтерактивний із кількома спробами» або «Адаптивний режим».';
$string['privacy:preference:showstandardinstruction'] = 'Чи показані стандартні інструкції.';
$string['privacy:preference:shuffleanswers'] = 'Чи потрібно автоматично перемішувати відповіді.';
$string['privacy:preference:single'] = 'Незалежно від того, чи буде відповідь одна з перемикачами чи кілька з прапорцями.';
$string['regradeissuenumchoiceschanged'] = 'Кількість варіантів у питанні змінилася.';
$string['selectmulti'] = 'Виберіть одну або декілька відповідей:';
$string['selectone'] = 'Виберіть одну відповідь:';
$string['showstandardinstruction'] = 'Показати стандартні інструкції';
$string['showstandardinstruction_desc'] = 'Чи показувати інструкції «Виберіть один:» або «Виберіть один або кілька:» перед варіантами відповідей.';
$string['showstandardinstruction_help'] = 'Чи відображати інструкції «Виберіть один:» або «Виберіть один або кілька:» перед варіантами відповідей. Крім того, ви можете включити інструкції в текст запитання.';
$string['shuffleanswers'] = 'Перемішувати альтернативи?';
$string['shuffleanswers_desc'] = 'Чи повинні параметри випадково перемішуватися для кожної спроби за замовчуванням.';
$string['shuffleanswers_help'] = 'Якщо увімкнуто, порядок відповідей при кожній новій спробі буде випадковим чином перемішаний. Параметр "Випадковий порядок елементів (відповідей)" також повинен бути увімкнутий.';
$string['singleanswer'] = 'Виберіть одну відповідь.';
$string['toomanyselected'] = 'Ви вибрали занадто багато варіантів.';
