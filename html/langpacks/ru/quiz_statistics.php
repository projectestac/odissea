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
 * Strings for component 'quiz_statistics', language 'ru', version '3.11'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Фактический ответ';
$string['allattempts'] = 'все попытки';
$string['allattemptsavg'] = 'Средняя оценка по всем попыткам';
$string['allattemptscount'] = 'Общее количество полностью оцененных попыток';
$string['analysisnameonly'] = '«{$a->name}»';
$string['analysisno'] = '({$a->number}) «{$a->name}»';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" вариант {$a->variant}';
$string['analysisofresponses'] = 'Анализ ответов';
$string['analysisofresponsesfor'] = 'Анализ ответов на «{$a}»';
$string['analysisvariant'] = '«{$a->name}» вариант {$a->variant}';
$string['attempts'] = 'Попытки';
$string['attemptsall'] = 'все попытки';
$string['attemptsfirst'] = 'первая попытка';
$string['backtoquizreport'] = 'Вернуться к основной странице статистики';
$string['calculatefrom'] = 'Рассчитать статистику';
$string['calculatingallstats'] = 'Расчет статистики теста, вопросов и анализ данных ответов';
$string['cic'] = 'Коэффициент внутренней согласованности (для {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Количество';
$string['counttryno'] = 'Всего попыток {$a}';
$string['coursename'] = 'Название курса';
$string['detailedanalysis'] = 'Более детальный анализ ответов на этот вопрос';
$string['detailedanalysisforvariant'] = 'Более детальный анализ ответов на вариант {$a} этого вопроса';
$string['discrimination_index'] = 'Индекс дискриминации';
$string['discriminative_efficiency'] = 'Эффективность дискриминации';
$string['downloadeverything'] = 'Скачать полный отчет как';
$string['duration'] = 'Открыть на';
$string['effective_weight'] = 'Эффективный вес';
$string['errordeleting'] = 'Ошибка при удалении старых записей {$a}.';
$string['errormedian'] = 'Ошибка выборки среднего';
$string['errorpowerquestions'] = 'Ошибка выборки данных расчета дисперсии для оценок вопроса';
$string['errorpowers'] = 'Ошибка выборки данных расчета дисперсии для оценок вопроса';
$string['errorrandom'] = 'Ошибка получения данных случайных элементов';
$string['errorratio'] = 'Соотношение ошибок (для {$a})';
$string['errorstatisticsquestions'] = 'Ошибка выборки данных расчета статистики для оценок вопроса';
$string['facility'] = 'Индекс легкости';
$string['firstattempts'] = 'первые попытки';
$string['firstattemptsavg'] = 'Средняя оценка первых попыток';
$string['firstattemptscount'] = 'Количество полностью оцененных первых попыток';
$string['frequency'] = 'Частота';
$string['highestattempts'] = 'лучшая из оцененных попыток';
$string['highestattemptsavg'] = 'средняя оценка из лучших оцененных попыток';
$string['intended_weight'] = 'Намеченный вес';
$string['kurtosis'] = 'Оценка распределения эксцесса (для {$a})';
$string['lastattempts'] = 'последняя попытка';
$string['lastattemptsavg'] = 'Средняя оценка последних попыток';
$string['lastcalculated'] = 'Последние ранее рассчитанные попытки {$a->lastcalculated};  с тех пор - {$a->count}.';
$string['maximumfacility'] = 'Максимальная легкость';
$string['median'] = 'Медиана оценок (для {$a})';
$string['medianfacility'] = 'Средняя легкость';
$string['minimumfacility'] = 'Минимальная легкость';
$string['modelresponse'] = 'Модель ответа';
$string['nameforvariant'] = 'Вариант {$a->variant} в {$a->name}';
$string['negcovar'] = 'Отрицательная ковариация оценки с общей оценкой попытки';
$string['negcovar_help'] = 'Оценка этого вопроса в этом наборе попыток теста меняется в противоположную сторону от общей оценки попытки. Средняя общая оценка попытки склонна быть ниже средней когда оценка для этого вопроса выше средней, и наоборот.

В этом случае уравнение для эффективного веса вопроса не может быть решено. Можно рассчитать эффективный вес для других вопросов этого теста и эффективный вес для этого вопроса, если выделенным вопросам с отрицательной ковариацией задать максимальную оценку ноль.

Если при редактировании теста дать этим вопросам с отрицательной ковариацией максимальную оценку ноль, то эффективный вес этого вопроса будет равен нулю, а реальный эффективный вес других вопросов будет равным рассчитанному сейчас.';
$string['nogradedattempts'] = 'Никаких попыток не было в этом тесте, или у всех попыток есть вопросы, требующие оценивания вручную.';
$string['nostudentsingroup'] = 'В этой группе нет студентов';
$string['optiongrade'] = 'Частичный кредит';
$string['partofquestion'] = 'Часть вопроса';
$string['pluginname'] = 'Статистика';
$string['position'] = 'Позиция';
$string['positions'] = 'Позиция(и)';
$string['privacy:metadata'] = 'Хотя в плагине «Статистика теста» и есть таблицы базы данных, эти данные являются обобщенными и не характеризуют отдельного человека.';
$string['questioninformation'] = 'Информация вопроса';
$string['questionname'] = 'Название вопроса';
$string['questionnumber'] = '№';
$string['questionstatistics'] = 'Статистика вопроса';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Тип вопроса';
$string['quizinformation'] = 'Информация о тесте';
$string['quizname'] = 'Название теста';
$string['quizoverallstatistics'] = 'Общая статистика теста';
$string['quizstatisticscleanuptask'] = 'Очистить старые записи кэша статистики тестов';
$string['quizstructureanalysis'] = 'Анализ структуры теста';
$string['random_guess_score'] = 'Балл случайного угадывания';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Диапазон статистики по этим вопросам';
$string['recalculatenow'] = 'Пересчитать сейчас';
$string['reportsettings'] = 'Настройки статистического отчета';
$string['response'] = 'Ответ';
$string['skewness'] = 'Оценка асимметрии распределения (для {$a})';
$string['slotstructureanalysis'] = 'Структурный анализ для вопроса номер {$a}';
$string['standarddeviation'] = 'Стандартное отклонение (для {$a})';
$string['standarddeviationq'] = 'Стандартное отклонение';
$string['standarderror'] = 'Стандартная ошибка ( для {$a})';
$string['statistics'] = 'Статистика';
$string['statistics:view'] = 'Просматривать отчет «Статистика» по тесту';
$string['statisticsreport'] = 'Статистический отчет';
$string['statisticsreportgraph'] = 'Статистика по позиции вопроса';
$string['statsfor'] = 'Статистика теста (для {$a})';
$string['variant'] = 'Вариант';
$string['viewanalysis'] = 'Посмотреть детали';
$string['whichtries'] = 'Анализ ответов';
