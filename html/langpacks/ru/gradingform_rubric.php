<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'gradingform_rubric', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_rubric
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Добавить критерий';
$string['additionalfeedback'] = 'Дополнительный отзыв';
$string['alwaysshowdefinition'] = 'Разрешить пользователям просматривать рубрики (иначе рубрики будут доступны только после оценки)';
$string['backtoediting'] = 'Вернуться к редактированию';
$string['confirmdeletecriterion'] = 'Вы уверены, что хотите удалить этот критерий?';
$string['confirmdeletelevel'] = 'Вы уверены, что хотите удалить этот уровень?';
$string['criterion'] = 'Критерий {$a}';
$string['criterionaddlevel'] = 'Добавить уровень';
$string['criteriondelete'] = 'Удалить критерий';
$string['criterionduplicate'] = 'Дублировать критерий';
$string['criterionempty'] = 'Редактировать критерий';
$string['criterionmovedown'] = 'Переместить вниз';
$string['criterionmoveup'] = 'Переместить вверх';
$string['criterionremark'] = 'Примечание к критерию {$a->description}: {$a->remark}';
$string['definerubric'] = 'Определить рубрику';
$string['description'] = 'Описание';
$string['enableremarks'] = 'Разрешить оценивающему добавлять текстовые примечания к каждому критерию';
$string['err_mintwolevels'] = 'Каждый критерий  должен содержать не менее двух уровней';
$string['err_nocriteria'] = 'Рубрика должна содержать хотя бы один критерий';
$string['err_nodefinition'] = 'Определение уровня не может быть пустым';
$string['err_nodescription'] = 'Описание критерия не может быть пустым';
$string['err_novariations'] = 'Уровни критериев не могут содержать одинаковое количество пунктов';
$string['err_scoreformat'] = 'Количество баллов за каждый уровень должно быть действительным неотрицательным числом';
$string['err_totalscore'] = 'Максимальное число баллов при методе оценивания с рубриками должно быть больше нуля';
$string['gradingof'] = '{$a} оценено';
$string['level'] = 'Уровень {$a->definition}, {$a->score} баллов.';
$string['leveldefinition'] = 'Определение уровня {$a}';
$string['leveldelete'] = 'Удалить уровень {$a}';
$string['levelempty'] = 'Редактировать уровень';
$string['levelsgroup'] = 'Группа уровней';
$string['lockzeropoints_help'] = 'Этот параметр применяется только в том случае, если сумма минимального количества баллов для каждого критерия больше 0. Если параметр отмечен, минимальная оценка для рубрики будет больше 0. Если параметр не отмечен, минимальный возможный балл для рубрики будет соответствовать минимальной оценке для элемента курса (которая равна 0, если не используется шкала).';
$string['name'] = 'Название';
$string['needregrademessage'] = 'Определение рубрики было изменено после оценивания ответа студента. Студент не может видеть эту рубрику, пока Вы не проверите рубрику и не обновите оценку.';
$string['pluginname'] = 'Рубрика';
$string['previewrubric'] = 'Предпросмотр рубрики';
$string['privacy:metadata:fillingssummary'] = 'Хранит информацию об оценках пользователей, созданных согласно рубрике.';
$string['regrademessage1'] = 'Вы собираетесь сохранить изменения в рубрике, которая уже была использована для оценивания. Пожалуйста, укажите, если существующие оценки должны быть пересмотрены. При установке этого параметра рубрика будет скрыта от студентов до переоценки этого элемента.';
$string['regrademessage5'] = 'Вы собираетесь сохранить существенные изменения в рубрике, которая уже была использована для оценивания. Значения в журнале оценок останутся неизменными, но рубрика будет скрыта от студентов до переоценки этого элемента.';
$string['regradeoption0'] = 'Не помечать для переоценивания';
$string['regradeoption1'] = 'Пометить  для переоценивания';
$string['restoredfromdraft'] = 'ПРИМЕЧАНИЕ: последняя попытка оценивания этим человеком не была сохранена правильно, поэтому была сохранена как черновик и может быть восстановлена. Если Вы хотите отменить эти изменения, нажмите ниже на кнопку «Отменить».';
$string['rubric'] = 'Рубрика';
$string['rubricmapping'] = 'Правила сопоставления баллов в оценке';
$string['rubricmappingexplained'] = 'Минимальное количество баллов для этой рубрики  <b>{$a->minscore} </b> и оно будет преобразовано к минимальной оценке, доступной в данном модуле (равняется нулю, если используется шкала). Максимальное количество баллов <b>{$a->maxscore}</b>  будет преобразовано в максимальную оценку.  Промежуточные баллы будут соответственно преобразованы и округлены до ближайшей доступной оценки.

 Если для оценивания используется шкала, то баллы будут преобразованы в элементы шкалы (как если бы они были целыми числами).

Этот рассчитываемая оценка может быть изменена путем редактирования формы и пометкой  поля «Рассчитать оценку на основе рубрики с минимальным баллом 0».';
$string['rubricnotcompleted'] = 'Пожалуйста, выберите что-нибудь для каждого критерия';
$string['rubricoptions'] = 'Опции рубрики';
$string['rubricstatus'] = 'Текущий статус рубрики';
$string['save'] = 'Сохранить';
$string['saverubric'] = 'Сохранить и сделать рубрику активной';
$string['saverubricdraft'] = 'Сохранить как черновик';
$string['scoreinputforlevel'] = 'Ввести оценку для уровня {$a}';
$string['scorepostfix'] = '{$a} пунктов';
$string['showdescriptionstudent'] = 'Показывать оцениваемым студентам описание рубрики';
$string['showdescriptionteacher'] = 'Показать описание рубрики при оценивании';
$string['showremarksstudent'] = 'Показать примечания оцениваемым студентам';
$string['showscorestudent'] = 'Показывать оцениваемым студентам пункты для каждого уровня';
$string['showscoreteacher'] = 'Показывать пункты для каждого уровня при оценивании';
$string['sortlevelsasc'] = 'Сортировка по уровням:';
$string['sortlevelsasc0'] = 'В порядке убывания пунктов';
$string['sortlevelsasc1'] = 'В порядке возрастания пунктов';
$string['zerolevelsabsent'] = 'Предупреждение: минимальный возможный балл для этой рубрики не равен 0, это может привести к неожиданным оценкам за элемент курса. Чтобы этого избежать, каждый критерий должен иметь уровень в 0 баллов. <br>
Это предупреждение можно игнорировать, если для оценивания используется шкала, а минимальные уровни в рубрике соответствуют минимальному значению шкалы.';
