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
 * Strings for component 'gradingform_guide', language 'ru', version '3.11'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Добавить в часто используемые комментарии';
$string['addcriterion'] = 'Добавить критерий';
$string['additionalcomments'] = 'Дополнительный комментарий';
$string['additionalcommentsforcriterion'] = 'Дополнительные комментарии к критерию, {$a}';
$string['alwaysshowdefinition'] = 'Показывать студентам справочник определений';
$string['backtoediting'] = 'Вернуться к редактированию';
$string['clicktocopy'] = 'Нажмите, чтобы скопировать текст в отзыв для критерия';
$string['clicktoedit'] = 'Нажмите для редактирования';
$string['clicktoeditname'] = 'Нажмите для редактирования названия критерия';
$string['comment'] = 'Комментарий';
$string['commentpickerforcriterion'] = 'Средство выбора часто используемых дополнительных комментариев: {$a}';
$string['comments'] = 'Часто используемые комментарии';
$string['commentsdelete'] = 'Удалить комментарий';
$string['commentsempty'] = 'Нажмите для редактирования комментария';
$string['commentsmovedown'] = 'Переместить вниз';
$string['commentsmoveup'] = 'Переместить вверх';
$string['confirmdeletecriterion'] = 'Вы уверены, что хотите удалить этот элемент?';
$string['confirmdeletelevel'] = 'Вы уверены, что хотите удалить этот уровень?';
$string['criterion'] = 'Название критерия';
$string['criteriondelete'] = 'Удалить критерий';
$string['criterionempty'] = 'Нажмите для редактирования критерия';
$string['criterionmovedown'] = 'Переместить вниз';
$string['criterionmoveup'] = 'Переместить вверх';
$string['criterionname'] = 'Название критерия';
$string['criterionremark'] = 'Примечание к критерию {$a}';
$string['definemarkingguide'] = 'Составить Справочник оценщика';
$string['description'] = 'Описание';
$string['descriptionmarkers'] = 'Описание для оценщиков';
$string['descriptionstudents'] = 'Описание для студентов';
$string['err_maxscoreisnegative'] = 'Некорректный максимальный балл, отрицательные значения не допускаются';
$string['err_maxscorenotnumeric'] = 'Максимальный балл за критерий должен быть числом';
$string['err_nocomment'] = 'Поле комментария не может быть пустым';
$string['err_nodescription'] = 'Описание для студента не может быть пустым полем';
$string['err_nodescriptionmarkers'] = 'Описание для оценщика не может быть пустым полем';
$string['err_nomaxscore'] = 'Максимальный балл за критерий не может быть пустым полем';
$string['err_noshortname'] = 'Название критерия не может быть пустым полем';
$string['err_scoreinvalid'] = 'За критерий «{$a->criterianame}» назначен некорректный балл, максимальный балл: {$a->maxscore}';
$string['err_scoreisnegative'] = 'Выставленная за критерий «{$a->criterianame}» оценка некорректна, отрицательные значения не допускаются';
$string['err_shortnametoolong'] = 'Имя критерия должно быть менее 256 символов';
$string['gradingof'] = '{$a} оценено';
$string['guide'] = 'Руководство по оцениванию';
$string['guidemappingexplained'] = 'ПРЕДУПРЕЖДЕНИЕ: Ваш справочник оценщика содержит максимальную оценку  <b>{$a->maxscore} баллов </b>, но максимальная оценка, установленная для элемента курса - {$a->modulegrade}.
Максимальный балл, заданный в справочнике оценщика, должен соответствовать максимальной оценке модуля.<br />
Промежуточные баллы будут соответственно преобразованы и округлены до ближайшей доступной оценки.';
$string['guidenotcompleted'] = 'Пожалуйста, укажите обоснованную оценку для каждого критерия';
$string['guideoptions'] = 'Опции справочника оценщика';
$string['guidestatus'] = 'Текущий статус справочника оценщика';
$string['hidemarkerdesc'] = 'Скрыть описания критериев от оценщиков';
$string['hidestudentdesc'] = 'Скрыть описания критериев от студентов';
$string['informationforcriterion'] = 'Информация о {$a}';
$string['insertcomment'] = 'Добавить часто используемый комментарий';
$string['maxscore'] = 'Максимальный балл';
$string['name'] = 'Название';
$string['needregrademessage'] = 'Определение справочника оценщика было изменено после оценивания ответа студента. Студент не сможет видеть этот справочник, пока Вы не проверите справочник оценщика и не обновите оценку.';
$string['outof'] = 'Оценка (максимум {$a})';
$string['pluginname'] = 'Справочник оценщика';
$string['previewmarkingguide'] = 'Предпросмотр справочника оценщика';
$string['privacy:metadata:criterionid'] = 'ID критерия продвинутого оценивания.';
$string['privacy:metadata:fillingssummary'] = 'Хранит информацию об оценках пользователей и отзывах для Справочника оценщика.';
$string['privacy:metadata:instanceid'] = 'ID оценки за активный элемент';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Показывать ли описания критериев оценщику';
$string['privacy:metadata:preference:showstudentdesc'] = 'Показывать ли описания критериев студенту';
$string['privacy:metadata:remark'] = 'Комментарии, относящиеся к этому критерию оценки.';
$string['privacy:metadata:score'] = 'Балл за этот критерий оценки.';
$string['regrademessage1'] = 'Вы собираетесь сохранить изменения в справочнике оценщика, который уже был использован для оценивания. Пожалуйста, укажите, если существующие оценки должны быть пересмотрены. При выборе этого параметра справочник оценщика будет скрыт от студентов до переоценки элементов.';
$string['regrademessage5'] = 'Вы собираетесь сохранить существенные изменения в справочнике оценщика, который уже был использован для оценивания. Значения в журнале оценок  не будут изменены, но справочник оценщика будет скрыт от студентов до переоценки  элементов.';
$string['regradeoption0'] = 'Не помечать для переоценки';
$string['regradeoption1'] = 'Пометить для переоценки';
$string['remark_help'] = 'Введите любые дополнительные комментарии по этому критерию.';
$string['restoredfromdraft'] = 'ПРИМЕЧАНИЕ: последняя попытка оценивания не была сохранена правильно, поэтому была сохранена как черновик и может быть восстановлена. Если Вы хотите отменить эти изменения, нажмите ниже на кнопку «Отменить».';
$string['save'] = 'Сохранить';
$string['saveguide'] = 'Сохранить справочник оценщика и сделать его активным';
$string['saveguidedraft'] = 'Сохранить как черновик';
$string['score'] = 'баллы';
$string['score_help'] = 'Введите балл для {$a->criterion} от 0 до {$a->maxscore}.';
$string['showmarkerdesc'] = 'Показывать оценщику описания критериев';
$string['showmarkspercriterionstudents'] = 'Показывать студентам баллы за критерий';
$string['showstudentdesc'] = 'Показывать студентам описания критериев';
