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
 * Strings for component 'quiz_statistics', language 'uk', version '4.5'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Фактична відповідь';
$string['allattempts'] = 'усі спроби';
$string['allattemptsavg'] = 'Середня оцінка по всіх спробах';
$string['allattemptscount'] = 'Всього спроб';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" варіант {$a->variant}';
$string['analysisofresponses'] = 'Аналіз відповідей';
$string['analysisofresponsesfor'] = 'Аналіз відповідей для {$a}.';
$string['analysisvariant'] = '"{$a->name}" варіант {$a->variant}';
$string['attempts'] = 'Спроб';
$string['attemptsall'] = 'усі спроби';
$string['attemptsfirst'] = 'перша спроба';
$string['backtoquizreport'] = 'Повернутися до головної сторінки статистичних звітів.';
$string['calculatefrom'] = 'Підрахувати статистику з';
$string['calculatingallstats'] = 'Розрахунок статистики для тесту, питань та аналіз відповідей';
$string['cic'] = 'Коефіцієнт внутрішньої узгодженості (для {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Підрахувати';
$string['counttryno'] = 'Всього спроб';
$string['coursename'] = 'Назва курсу';
$string['detailedanalysis'] = 'Детальний аналіз відповідей на питання';
$string['detailedanalysisforvariant'] = 'Детальний аналіз відповідей на варіант {$a} цього питання';
$string['discrimination_index'] = 'Розрізнення';
$string['discriminative_efficiency'] = 'Ефективність розрізнення';
$string['downloadeverything'] = 'Завантажити повний звіт як';
$string['duration'] = 'Відкрити для';
$string['effective_weight'] = 'Ефективна вага';
$string['errordeleting'] = 'Помилка видалення старих {$a}  записів';
$string['errormedian'] = 'Помилка вибірки середньої';
$string['errorpowerquestions'] = 'Помилка вибірки даних для розрахунку дисперсії оцінок питання';
$string['errorpowers'] = 'Помилка вибірки даних для розрахунку дисперсії оцінок тесту';
$string['errorrandom'] = 'Помилка при отриманні піделементу даних';
$string['errorratio'] = 'Помилка відношення (для {$a})';
$string['errorstatisticsquestions'] = 'Помилка вибірки даних для розрахунку статистики оцінок питання';
$string['facility'] = 'Індекс легкості';
$string['firstattempts'] = 'перші спроби';
$string['firstattemptsavg'] = 'Середня оцінка по перших спробах';
$string['firstattemptscount'] = 'Кількість перших повністю оцінених спроб';
$string['frequency'] = 'Частота';
$string['highestattempts'] = 'найвище оцінена спроба';
$string['highestattemptsavg'] = 'Середня оцінка з найвище оцінених спроб';
$string['intended_weight'] = 'Призначена вага';
$string['kurtosis'] = 'Значення ексцесу розподілу (для {$a})';
$string['lastattempts'] = 'остання спроба';
$string['lastattemptsavg'] = 'Середня оцінка з останніх спроб';
$string['lastcalculated'] = 'Востаннє розраховувалося {$a->lastcalculated} тому, з того часу пройдено ще {$a->count} спроб(а).';
$string['maximumfacility'] = 'Максимальна легкість';
$string['median'] = 'Медіана оцінки (для {$a})';
$string['medianfacility'] = 'Середня легкість';
$string['minimumfacility'] = 'Мінімальна легкість';
$string['modelresponse'] = 'Модель відповіді';
$string['nameforvariant'] = 'Варіант {$a->variant} з {$a->name}';
$string['negcovar'] = 'Негативна коваріації оцінки із загальної оцінки спроби';
$string['negcovar_help'] = 'Оцінка цього питання в цьому наборі спроб тесту змінюється у протилежний бік від загальної оцінки спроби Середня загальна оцінка спроби схильна бути нижче середньої, коли оцінка для цього питання вище середньої, та навпаки.

В цьому випадку рівність для ефективної ваги питання не може бути вирішеною. Можна розрахувати ефективну вагу для інших питань цього тесту та ефективну вагу для цього питання, якщо виділеним питанням з від’ємною коваріацією задати максимальну оцінку нуль.

Якщо при редагуванні тесту дати цим питанням з від’ємною коваріацією максимальну оцінку нуль, то ефективна вага цього питання буде дорівнювати нулю, а реальна ефективна вага інших питань буде дорівнювати розрахованому зараз.';
$string['nogradedattempts'] = 'В цьому тесті ще не було спроб проходження або всі питання в спробах потребують ручного оцінювання.';
$string['nostudentsingroup'] = 'В цій групі ще немає студентів';
$string['optiongrade'] = 'Частковий кредит';
$string['partofquestion'] = 'Частина питання';
$string['pluginname'] = 'Статистика';
$string['position'] = 'Позиція';
$string['positions'] = 'Позиці(ї)я';
$string['privacy:metadata'] = 'Хоча плагін Quiz Statistics має таблиці бази даних, дані є сукупними даними і не описують унікальну особу.';
$string['questioninformation'] = 'Інформація питання';
$string['questionname'] = 'Назва питання';
$string['questionnumber'] = '№ пит.';
$string['questionstatistics'] = 'Статистика питань';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Тип питання';
$string['quizinformation'] = 'Інформація про тест';
$string['quizname'] = 'Назва тесту';
$string['quizoverallstatistics'] = 'Загальна статистика тесту';
$string['quizstructureanalysis'] = 'Аналіз структури тесту';
$string['random_guess_score'] = 'Оцінка навмання';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Діапазон статистичних даних для цих питань';
$string['recalculatenow'] = 'Перерахувати зараз';
$string['recalculatetask'] = 'Перерахувати статистику питань';
$string['reportsettings'] = 'Налаштування розрахунку статистики';
$string['response'] = 'Відповідь';
$string['skewness'] = 'Значення асиметрії розподілу (для {$a})';
$string['slotstructureanalysis'] = 'Структурний аналіз для питання номер {$a}';
$string['standarddeviation'] = 'Стандартне відхилення (для {$a})';
$string['standarddeviationq'] = 'Станд. відхилення';
$string['standarderror'] = 'Стандартна помилка (для {$a})';
$string['statistics'] = 'Статистика';
$string['statistics:view'] = 'Переглядати статистичний звіт';
$string['statisticsreport'] = 'Статистичний звіт';
$string['statisticsreportgraph'] = 'Статистика за позиціями питань';
$string['statsfor'] = 'Статистика тесту (для {$a})';
$string['variant'] = 'Варіант';
$string['viewanalysis'] = 'Докладніше';
$string['whichtries'] = 'Аналіз відповідей для';
