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
 * Strings for component 'quiz_overview', language 'ru', version '3.11'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Все попытки';
$string['allattemptscontributetograde'] = 'Все попытки влияют на окончательную оценку студента';
$string['allstudents'] = 'Все {$a}';
$string['attemptsonly'] = '{$a}, которые сделали попытки';
$string['attemptsprepage'] = 'Попыток на странице';
$string['deleteselected'] = 'Удалить выбранные попытки';
$string['done'] = 'Готово';
$string['err_failedtodeleteregrades'] = 'Невозможно удалить вычисленные оценки попытки';
$string['err_failedtorecalculateattemptgrades'] = 'Невозможно пересчитать оценки попытки';
$string['highlightinggraded'] = 'Попытки, влияющие на окончательный результат подсвечены.';
$string['needed'] = 'Нужно';
$string['noattemptsonly'] = 'только {$a}, которые не сделали попытки';
$string['noattemptstoregrade'] = 'Нет попыток, требующих переоценки';
$string['nogradepermission'] = 'У вас нет разрешения на оценивание результатов этого теста.';
$string['onlyoneattemptallowed'] = 'Для этого теста каждому пользователю доступна только одна попытка.';
$string['optallattempts'] = 'все попытки';
$string['optallstudents'] = 'все «{$a}»';
$string['optattemptsonly'] = 'только «{$a}» с попытками';
$string['optnoattemptsonly'] = 'только «{$a}» без попыток';
$string['optonlyregradedattempts'] = 'были переоценены / отмечены для переоценки';
$string['overview'] = 'Оценки';
$string['overviewdownload'] = 'Загрузить результаты просмотра';
$string['overviewfilename'] = 'оценки';
$string['overviewreport'] = 'Отчет по оценкам';
$string['overviewreportgraph'] = 'График количества студентов, получивших оценки в диапазонах.';
$string['overviewreportgraphgroup'] = 'Количество студентов в группе «{$a}», достигших диапазона оценок';
$string['pagesize'] = 'Размер страницы';
$string['pluginname'] = 'Оценки';
$string['preferencespage'] = 'Настройки только для этой страницы';
$string['preferencessave'] = 'Сохранить настройки';
$string['preferencesuser'] = 'Ваши настройки для этого отчета';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Показывать ли оценки для каждого вопроса.';
$string['privacy:preference:slotmarks:no'] = 'Оценки не отображаются рядом с вопросом.';
$string['privacy:preference:slotmarks:yes'] = 'Оценки отображаются рядом с вопросом.';
$string['regrade'] = 'Переоценить';
$string['regradeall'] = 'Переоценить все';
$string['regradealldry'] = 'Пробный прогон переоценки';
$string['regradealldrydo'] = 'Переоценить попытки, отмеченные для переоценки ({$a})';
$string['regradealldrydogroup'] = 'Переоценить попытки ({$a->countregradeneeded}), отмеченные для переоценки в группе «{$a->groupname}»';
$string['regradealldrygroup'] = 'Пробный прогон полного переоценивания для группы «{$a->groupname}»';
$string['regradeallgroup'] = 'Полностью переоценить группу «{$a->groupname}»';
$string['regradecomplete'] = 'Переоценивание успешно завершено';
$string['regradedsuccessfullyxofy'] = 'Успешно переоценено ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Переоценивание';
$string['regradeselected'] = 'Переоценить выбранные попытки';
$string['regradingattemptxofy'] = 'Переоценка попыток ({$a->done}/{$a->count})';
$string['regradingattemptxofywithdetails'] = 'Переоценивание попыток ({$a->done}/{$a->count}) - Попытка {$a->attemptnum} от {$a->name} (id {$a->attemptid})';
$string['show'] = 'Включить';
$string['showattempts'] = 'Только показать / скачать попытки';
$string['showdetailedmarks'] = 'Баллы для каждого вопроса';
$string['showinggraded'] = 'Показывать только попытки, оцененные для каждого пользователя.';
$string['showinggradedandungraded'] = 'Показывать оцененные и неоцененные попытки для каждого пользователя. Единственная оцененная попытка для каждого пользователя подсвечена. Для этого опроса выбран метод оценивания {$a}.';
$string['studentingroup'] = '«{$a->coursestudent}» в группе «{$a->groupname}»';
$string['studentingrouplong'] = '«{$a->coursestudent}» в этой группе';
