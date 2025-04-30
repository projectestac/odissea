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
 * Strings for component 'gradingform_guide', language 'uk', version '4.4'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Додати в часто використовувані коментарі';
$string['addcriterion'] = 'Додати критерій';
$string['additionalcomments'] = 'Додаткові коментарі';
$string['additionalcommentsforcriterion'] = 'Додаткові коментарі до критерію, {$a}';
$string['alwaysshowdefinition'] = 'Показувати інструкцію студентам';
$string['backtoediting'] = 'Повернутися до редагування';
$string['clicktocopy'] = 'Клацніть для копіювання цього тексту в критерій відгуку';
$string['clicktoedit'] = 'Клацніть для редагування';
$string['clicktoeditname'] = 'Клацніть для редагування назви критерію';
$string['comment'] = 'Відгук';
$string['commentpickerforcriterion'] = 'Часто використовуваний засіб вибору коментарів для додаткових коментарів ({$a}).';
$string['comments'] = 'Часті коментарі';
$string['commentsdelete'] = 'Вилучити коментар';
$string['commentsempty'] = 'Клацніть для редагування коментаря';
$string['commentsmovedown'] = 'Перемістити нижче';
$string['commentsmoveup'] = 'Перемістити вище';
$string['confirmdeletecriterion'] = 'Ви впевнені, що бажаєте вилучити цей елемент?';
$string['confirmdeletelevel'] = 'Ви впевнені, що бажаєте вилучити цей рівень?';
$string['criterion'] = 'Назва критерію';
$string['criteriondelete'] = 'Вилучити критерій';
$string['criterionempty'] = 'Клацніть для редагування критерію';
$string['criterionmovedown'] = 'Перемістити нижче';
$string['criterionmoveup'] = 'Перемістити вище';
$string['criterionname'] = 'Назва критерію';
$string['criterionremark'] = 'Примітка до критерію {$a}';
$string['definemarkingguide'] = 'Визначити інструкцію оцінювання';
$string['description'] = 'Опис';
$string['descriptionmarkers'] = 'Опис для оцінювачів';
$string['descriptionstudents'] = 'Опис для студентів';
$string['err_maxscoreisnegative'] = 'Неправильний максимальний бал, від’ємне значення не дозволяється';
$string['err_maxscorenotnumeric'] = 'Максимальний бал за критерій повинен бути числом';
$string['err_nocomment'] = 'Коментар не може бути порожнім';
$string['err_nodescription'] = 'Опис для студентів не може бути порожнім';
$string['err_nodescriptionmarkers'] = 'Опис для оцінювачів не може бути порожнім';
$string['err_nomaxscore'] = 'Максимальний бал за критерій не може бути порожнім';
$string['err_noshortname'] = 'Назва критерію не може бути порожньою';
$string['err_scoreinvalid'] = 'Оцінка, надана \'{$a->criterianame}\', недійсна, максимальна оцінка: {$a->maxscore}';
$string['err_scoreisnegative'] = 'Неправильні бали виставлені за \'{$a->criterianame}\', від’ємне значення не дозволяється';
$string['err_shortnametoolong'] = 'Назва критерію може бути до 256 символів';
$string['gradingof'] = '{$a} оцінено';
$string['guide'] = 'Інструкція з оцінювання';
$string['guidemappingexplained'] = 'УВАГА: Ваш довідник оцінювача має максимальну оцінку <b>{$a->maxscore}</b>, проте максимальна оцінка встановлена в діяльності - {$a->modulegrade}. Максимальний бал в довіднику оцінювача повинен бути таким самим, як максимальний бал в діяльності.<br />Проміжкові бали будуть відповідним чином перетворені та округлені до найближчої оцінки.';
$string['guidenotcompleted'] = 'Будь ласка, вкажіть правильну оцінку для кожного критерію';
$string['guideoptions'] = 'Параметри інструкції з оцінювання';
$string['guidestatus'] = 'Поточний статус інструкції з оцінювання';
$string['hidemarkerdesc'] = 'Приховати описи критеріїв оцінювачів';
$string['hidestudentdesc'] = 'Приховати описи критеріїв студентів';
$string['informationforcriterion'] = '{$a} інформація';
$string['insertcomment'] = 'Додати часті відгуки';
$string['maxscore'] = 'Максимальні бали';
$string['name'] = 'Назва';
$string['needregrademessage'] = 'Визначення інструкції оцінювання було змінено після оцінювання студентських робіт. Студент не зможе бачити ці інструкції, доки ви їх не перевірите та не оновите оцінки.';
$string['outof'] = 'Оцінка з {$a}';
$string['pluginname'] = 'Інструкція з оцінювання';
$string['previewmarkingguide'] = 'Попередній перегляд інструкції з оцінювання';
$string['privacy:metadata:criterionid'] = 'Ідентифікатор критерію розширеного маркування.';
$string['privacy:metadata:fillingssummary'] = 'Зберігає інформацію про оцінку користувача та відгуки для посібника з оцінювання.';
$string['privacy:metadata:instanceid'] = 'Ідентифікатор оцінки, яку використовує діяльність.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Чи показувати описи критеріїв маркера';
$string['privacy:metadata:preference:showstudentdesc'] = 'Чи показувати описи критеріїв студента';
$string['privacy:metadata:remark'] = 'Зауваження щодо цього критерію оцінки.';
$string['privacy:metadata:score'] = 'Оцінка за цей критерій оцінки.';
$string['regrademessage1'] = 'Ви збираєтеся зберегти зміни в інструкції оцінювання, яка вже була застосована для оцінювання. Будь ласка, вкажіть, якщо поточні бали повинні бути переоцінені. При виборі цього параметра, інструкції будуть приховані від студентів до переоцінки.';
$string['regrademessage5'] = 'Ви збираєтеся зберегти значні зміни в інструкції оцінювання, яка вже була застосована для оцінювання. Значення в Журналі оцінок не будуть змінені, але інструкції будуть приховані від студентів до переоцінки.';
$string['regradeoption0'] = 'Не відмічати для переоцінювання';
$string['regradeoption1'] = 'Відмітити для переоцінювання';
$string['remark_help'] = 'Введіть будь-які додаткові коментарі щодо цього критерію.';
$string['restoredfromdraft'] = 'ЗАУВАЖЕННЯ: остання спроба оцінювання цього студента не збереглася правильно, тому була збережена як чернетка та може бути відновлена. Якщо ви бажаєте відмінити ці зміни, натисніть кнопку ’Відмінити’.';
$string['save'] = 'Зберегти';
$string['saveguide'] = 'Зберегти інструкцію з оцінювання і зробити її активною';
$string['saveguidedraft'] = 'Зберегти як чернетку';
$string['score'] = 'бали';
$string['score_help'] = 'Введіть оцінку для {$a->criterion} від 0 до {$a->maxscore}.';
$string['scoreforcriterion'] = 'Оцінка {$a}';
$string['showmarkerdesc'] = 'Показувати опис критерію оцінювачу';
$string['showmarkspercriterionstudents'] = 'Показувати бали за критерій студентам';
$string['showstudentdesc'] = 'Показувати опис критерію студентам';
