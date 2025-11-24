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
 * Strings for component 'gradingform_rubric', language 'uk', version '4.5'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Додати критерій';
$string['additionalfeedback'] = 'Додатковий відгук';
$string['alwaysshowdefinition'] = 'Дозволити користувачам переглядати рубрику (інакше вона відображатиметься лише після оцінювання)';
$string['backtoediting'] = 'Повернутися до редагування';
$string['confirmdeletecriterion'] = 'Ви впевнені, що хочете видалити цей критерій?';
$string['confirmdeletelevel'] = 'Ви впевнені, що хочете видалити цей рівень?';
$string['criterion'] = 'Критерій {$a}';
$string['criterionaddlevel'] = 'Додати рівень';
$string['criteriondelete'] = 'Видалити критерій';
$string['criterionduplicate'] = 'Дублювати критерій';
$string['criterionempty'] = 'Клацніть, щоб змінити критерій';
$string['criterionmovedown'] = 'Перемістити нижче';
$string['criterionmoveup'] = 'Перемістити вище';
$string['criterionremark'] = 'Примітка до критерію {$a->description}: {$a->remark}';
$string['definerubric'] = 'Визначити рубрику';
$string['description'] = 'Опис';
$string['enableremarks'] = 'Дозволити при оцінюванні додавати коментарі по кожному критерію';
$string['err_mintwolevels'] = 'Кожен критерій повинен мати хоча б два рівня';
$string['err_nocriteria'] = 'Рубрика повинна містити хоча б один критерій';
$string['err_nodefinition'] = 'Визначення рівня не може бути порожнім';
$string['err_nodescription'] = 'Визначення критерію не може бути порожнім';
$string['err_novariations'] = 'Рівні критерію не можуть мати однакову кількість балів';
$string['err_scoreformat'] = 'Кількість балів для кожного рівня має бути дійсним числом';
$string['err_totalscore'] = 'Максимальна кількість балів при оціненні рубрики повинна бути більше нуля';
$string['gradingof'] = '{$a} оцінено';
$string['level'] = 'Рівень {$a->definition}, {$a->score} балів.';
$string['leveldefinition'] = 'Визначення рівня {$a}';
$string['leveldelete'] = 'Видалити рівень {$a}';
$string['levelempty'] = 'Клацніть для зміни рівня';
$string['levelsgroup'] = 'Група рівнів';
$string['lockzeropoints'] = 'Обчисліть оцінку, яка має мінімальний бал мінімально досяжної оцінки за рубрику';
$string['lockzeropoints_help'] = 'Це налаштування застосовується лише в тому випадку, якщо сума мінімальної кількості балів за кожним критерієм більше 0. Якщо поставлено галочку, мінімальним балом діяльності буде мінімальна досяжна оцінка для рубрики. Якщо зняти позначку, мінімально можлива оцінка за рубрику буде зіставлена з мінімальною оцінкою, доступною для діяльності (який дорівнює 0, якщо не використовується шкала).';
$string['name'] = 'Назва';
$string['needregrademessage'] = 'Визначення рубрики було змінено після чого студент був оцінений. Студент не буде бачити цієї рубрики поки ви перевіряєте рубрику та оновлюєте бали.';
$string['notset'] = 'Не встановлено';
$string['pluginname'] = 'Рубрика';
$string['pointsvalue'] = '{$a} балів';
$string['previewrubric'] = 'Попередній перегляд рубрики';
$string['privacy:metadata:criterionid'] = 'Ідентифікатор для певного критерію, що оцінюється.';
$string['privacy:metadata:fillingssummary'] = 'Зберігає інформацію про оцінку користувача, створену рубрикою.';
$string['privacy:metadata:instanceid'] = 'Ідентифікатор, що відноситься до оцінки в діяльності.';
$string['privacy:metadata:levelid'] = 'Рівень, отриманий в рубриці.';
$string['privacy:metadata:remark'] = 'Зауваження щодо критерію рубрики, що оцінюється.';
$string['regrademessage1'] = 'Ви збираєтеся зберегти зміни в рубриках, по яких вже було проведено оцінювання. Прохання вказати, що існуючі бали повинні бути переоцінені. Якщо ви це вкажете, то студентам будуть недоступні дані цих рубрик. доки вони не будуть переоцінені.';
$string['regrademessage5'] = 'Ви збираєтеся зберегти значні зміни в рубриках, по яких вже було проведено оцінювання. Значення в журналі оцінок залишиться незмінним, але рубрики будуть сховані від студентів, поки ці елементи не будуть переоцінені.';
$string['regradeoption0'] = 'Не позначати для переоцінення';
$string['regradeoption1'] = 'Позначити для переоцінення';
$string['restoredfromdraft'] = 'ПРИМІТКА: Остання спроба оцінити цю особу була не збережена, тому повернулися до чорнових балів. Якщо ви хочете відмінити ці зміни, то скористайтеся нижче кнопкою ’Відмінити’.';
$string['rubric'] = 'Рубрика';
$string['rubricmapping'] = 'Правила оцінення';
$string['rubricmappingexplained'] = 'Мінімальна можлива оцінка для цієї рубрики становить <b>{$a->minscore}</b> балів. Він буде перетворений на мінімальну оцінку, доступну для діяльності (яка дорівнює 0, якщо не використовується шкала). Максимальний бал у <b>{$a->maxscore}</b> балів буде перетворено на максимальну оцінку. Проміжні бали будуть відповідно перетворені. Якщо для оцінювання використовується шкала, оцінка буде округлена та перетворена в елементи шкали, як якщо б вони були послідовними цілими числами. Цей розрахунок оцінки можна змінити, відредагувавши форму та поставивши галочку в полі «Розрахувати оцінку, маючи мінімальний бал мінімально досяжної оцінки для рубрики».';
$string['rubricnotcompleted'] = 'Виберіть що-небудь для кожного критерію';
$string['rubricoptions'] = 'Параметри рубрики';
$string['rubricstatus'] = 'Поточний статус рубрики';
$string['save'] = 'Зберегти';
$string['saverubric'] = 'Зберегти рубрику як закінчену';
$string['saverubricdraft'] = 'Зберегти як чернетку';
$string['scoreinputforlevel'] = 'Ввести бали для рівня {$a}';
$string['scorepostfix'] = '{$a} балів';
$string['showdescriptionstudent'] = 'Показувати опис рубрики для вже оцінених';
$string['showdescriptionteacher'] = 'Показувати опис рубрики в процесі оцінення';
$string['showremarksstudent'] = 'Показувати зауваження для вже оцінених';
$string['showscorestudent'] = 'Показувати бали кожного рівня для вже оцінених';
$string['showscoreteacher'] = 'Показувати бали кожного рівня в процесі оцінення';
$string['sortlevelsasc'] = 'Сортування рівнів:';
$string['sortlevelsasc0'] = 'За зменшенням балів';
$string['sortlevelsasc1'] = 'За збільшенням балів';
$string['zerolevelsabsent'] = 'Увага: Мінімально можливі бали для цієї рубрики не є 0; це може привести до несподіваних оцінок діяльності. Щоб уникнути цього, кожен критерій повинен мати рівень від 0 балів. <br>
Ви можете проігнорувати це попередження, якщо для градації використовується спеціальна шкала, і мінімальні значення в рубриці відповідають мінімальним значенням шкали.';
