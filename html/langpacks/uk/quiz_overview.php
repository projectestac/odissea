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
 * Strings for component 'quiz_overview', language 'uk', version '4.1'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Показати усі спроби';
$string['allattemptscontributetograde'] = 'Всі спроби впливають на фінальну оцінку.';
$string['allstudents'] = 'Показати всі {$a}';
$string['attemptsonly'] = 'Показати {$a} тільки зі спробами';
$string['attemptsprepage'] = 'Спроб на сторінку';
$string['deleteselected'] = 'Видалити виділені спроби';
$string['done'] = 'Зроблено';
$string['err_failedtodeleteregrades'] = 'Помилка видалення балів розрахованої спроби';
$string['err_failedtorecalculateattemptgrades'] = 'Помилка переоцінення спроби';
$string['highlightinggraded'] = 'Спроба, оцінка якої є фінальною, поставлена на перше місце.';
$string['needed'] = 'Потребує';
$string['noattemptsonly'] = 'Показати {$a} без спроб';
$string['noattemptstoregrade'] = 'Немає спроб з потребою переоцінення';
$string['nogradepermission'] = 'Ви не маєте прав для оцінення цього тесту.';
$string['onlyoneattemptallowed'] = 'В цьому тесті кожному користувачу дозволена тільки одна спроба.';
$string['optallattempts'] = 'усі спроби';
$string['optallstudents'] = 'всі {$a}, які мають або не мають спроби тесту';
$string['optattemptsonly'] = '\'{$a}\' зі спробами';
$string['optnoattemptsonly'] = '\'{$a}\' без спроб';
$string['optonlyregradedattempts'] = 'що були переоцінені / відмічені як ті, що потребують переоцінку';
$string['overview'] = 'Оцінки';
$string['overviewdownload'] = 'Переглянути завантаження';
$string['overviewfilename'] = 'оцінки';
$string['overviewreport'] = 'Звіт по оцінках';
$string['overviewreportgraph'] = 'Загальна кількість студентів за діапазонами оцінювання';
$string['overviewreportgraphgroup'] = 'Кількості студентів у групі \'{$a}\' по діапазонах оцінювання';
$string['pagesize'] = 'Розмір сторінки';
$string['pluginname'] = 'Оцінки';
$string['preferencespage'] = 'Налаштування тільки для цієї сторінки';
$string['preferencessave'] = 'Показати звіт';
$string['preferencesuser'] = 'Ваші уподобання для цього звіту';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Чи показувати позначки для кожного місця запитання.';
$string['privacy:preference:slotmarks:no'] = 'Позначки не відображаються поруч із прорізом запитання.';
$string['privacy:preference:slotmarks:yes'] = 'Позначки відображаються поруч із прорізом запитання.';
$string['regrade'] = 'Переоцінка';
$string['regradeall'] = 'Переоцінити все';
$string['regradealldry'] = 'Виявити усі спроби для переоцінки';
$string['regradealldrydo'] = 'Переоцінити спроби, що помічені як ті, що потребують переоцінки ({$a})';
$string['regradealldrydogroup'] = 'Переоцінити спроби ({$a->countregradeneeded}) позначені, як такі, що потребують переоцінки в групі \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Виявити усі спроби для переоцінки в групі \'{$a->groupname}';
$string['regradeallgroup'] = 'Повна переоцінка для групи \'{$a->groupname}';
$string['regradecomplete'] = 'Переоцінка завершена';
$string['regradedsuccessfullyxofy'] = 'Завершено переоцінку ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Переоцінення';
$string['regradeselected'] = 'Переоцінити виділені спроби';
$string['regradingattemptissue'] = 'Слот {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Переоцінка спроби ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Наведені нижче запитання не вдалося переглянути під час спроби {$a->attemptnum} {$a->name} (ідентифікатор {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Спроба переоцінки ({$a->done}/{$a->count}) – спроба {$a->attemptnum} від {$a->name} (ідентифікатор {$a->attemptid})';
$string['show'] = 'Показати / завантажити';
$string['showattempts'] = 'Тільки показати / завантажити спроби';
$string['showdetailedmarks'] = 'Бали по кожному питанню';
$string['showinggraded'] = 'Показано для кожного користувача тільки спробу, оцінка якої є фінальною.';
$string['showinggradedandungraded'] = 'Автоматична переоцінка спроб може бути виконана у разі змін правильних відповідей або балів для окремих питань.<br>Для ручного коригування оцінки конкретної спроби перейдіть у режим ’Перегляд спроби’. Там для кожного питання можна ’Зробити коментар або змінити оцінку’.<br><br>Показ оцінених та неоцінених спроб кожного користувача. Одна спроба кожного користувача, яка має оцінку, підсвічена. Метод оцінювання у цьому тесті - ’{$a}’.';
$string['studentingroup'] = '\'{$a->coursestudent}\' в групі \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' в цій групі';
