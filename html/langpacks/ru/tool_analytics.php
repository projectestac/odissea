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
 * Strings for component 'tool_analytics', language 'ru', version '3.11'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Точность';
$string['actionexecutedgroupedusefulness'] = 'Сгруппированные действия';
$string['actions'] = 'Действия';
$string['actionsexecutedbyusers'] = 'Действия, выполняемые пользователями';
$string['actionsexecutedbyusersfor'] = 'Действия, выполняемые пользователями для модели «{$a}»';
$string['allpredictions'] = 'Все прогнозы';
$string['alltimesplittingmethods'] = 'Анализ всех интервалов';
$string['analysingsitedata'] = 'Анализ сайта';
$string['analysis'] = 'Анализ';
$string['analyticmodels'] = 'Модели аналитики';
$string['bettercli'] = 'Оценка моделей и создание прогнозов могут включать длительные вычисления. Рекомендуется запускать эти действия из командной строки.';
$string['cantguessenddate'] = 'Невозможно предположить дату окончания';
$string['cantguessstartdate'] = 'Невозможно предположить дату начала';
$string['classdoesnotexist'] = 'Класс {$a} не существует';
$string['clearmodelpredictions'] = 'Вы уверены, что хотите очистить все прогнозы «{$a}»?';
$string['clearpredictions'] = 'Очистить прогнозы';
$string['clienablemodel'] = 'Вы можете включить модель, выбрав интервал анализа по его идентификатору. Обратите внимание, что вы также можете включить её позже, используя веб-интерфейс («нет» для выхода).';
$string['clievaluationandpredictions'] = 'Запланированное задание выполняется путем повторного использования включенных моделей и получает прогнозы. Оценка моделей через веб-интерфейс отключена. Вы можете разрешить выполнение этих процессов вручную через веб-интерфейс, отключив параметр <a href="{$a}">«только с командной строки»</a> в настройках аналитики.';
$string['clievaluationandpredictionsnoadmin'] = 'Запланированное задание выполняется путем повторного использования включенных моделей и получает прогнозы. Оценка моделей через веб-интерфейс отключена. Её может включить администратор сайта.';
$string['component'] = 'Компонент';
$string['componentcore'] = 'Ядро';
$string['componentselect'] = 'Выбрать все модели, имеющие компонент «{$a}»';
$string['componentselectnone'] = 'Отменить выбор';
$string['contexts'] = 'Контексты';
$string['contexts_help'] = 'Модель будет ограничена этим набором контекстов. Если контексты не выбраны, то ограничения по контексту применяться не будут.';
$string['createmodel'] = 'Создать модель';
$string['currenttimesplitting'] = 'Текущий интервал анализа';
$string['delete'] = 'Удалить';
$string['deletemodelconfirmation'] = 'Вы действительно хотите удалить «{$a}»? Эти изменения нельзя отменить.';
$string['disabled'] = 'Отключено';
$string['editmodel'] = 'Изменить модель «{$a}»';
$string['edittrainedwarning'] = 'Эта модель уже прошла обучение. Обратите внимание, что изменение её показателей или интервалов анализа удалит прогнозы модели и даст начало созданию новых прогнозов.';
$string['enabled'] = 'Включено';
$string['errorcantenablenotimesplitting'] = 'Перед включением модели нужно выбрать интервал анализа.';
$string['errornoenabledandtrainedmodels'] = 'Нет включенных и обученных моделей для прогнозирования.';
$string['errornoenabledmodels'] = 'Нет доступных моделей для обучения.';
$string['errornoexport'] = 'Можно экспортировать только обученные модели';
$string['errornostaticevaluated'] = 'Модели, основанные на предположениях, не могут быть оценены. Они всегда на 100% правильны в соответствии с тем, как они были определены.';
$string['errornostaticlog'] = 'Модели, основанные на предположениях, не могут быть оценены, потому что нет журнала выполнения.';
$string['erroronlycli'] = 'Выполнение разрешено только с командной строки';
$string['errortrainingdataexport'] = 'Данные обучения модели не могут быть экспортированы';
$string['evaluate'] = 'Оценить';
$string['evaluatemodel'] = 'Оценить модель';
$string['evaluationinbatches'] = 'Содержимое сайта рассчитывается и хранится партиями. Процесс оценки может быть остановлен в любое время. В следующий раз, когда процесс будет запущен, он будет продолжен с момента остановки.';
$string['evaluationmode'] = 'Режим оценивания';
$string['evaluationmode_help'] = 'Есть два режима оценки:

* Обученная модель - данные сайта используются в качестве данных тестирования для оценки точности обученной модели.
* Конфигурация - данные сайта разделены на данные обучения и тестирования, чтобы обучить и проверить точность конфигурации модели.

Обученная модель доступна только в том случае, если обученная модель была импортирована на сайт и еще не была повторно обучена с использованием данных сайта.';
$string['evaluationmodecolconfiguration'] = 'Конфигурация';
$string['evaluationmodecoltrainedmodel'] = 'Обученная модель';
$string['evaluationmodeconfiguration'] = 'Оценить конфигурацию модели';
$string['evaluationmodeinfo'] = 'Эта модель была импортирована на сайт. Вы можете либо оценить выполнение модели, либо оценить выполнение конфигурации модели, используя данные сайта.';
$string['evaluationmodetrainedmodel'] = 'Оценить обученную модель';
$string['executescheduledanalysis'] = 'Выполнить запланированный анализ';
$string['export'] = 'Экспорт';
$string['exportincludeweights'] = 'Включить веса обученной модели';
$string['exportmodel'] = 'Экспорт конфигурации';
$string['exporttrainingdata'] = 'Экспорт данных обучения';
$string['extrainfo'] = 'Информация';
$string['generalerror'] = 'Ошибка оценки. Код состояния {$a}';
$string['getpredictions'] = 'Получить прогнозы';
$string['goodmodel'] = 'Это хорошая модель для прогнозирования. Включите её, чтобы начать получать прогнозы.';
$string['ignoreversionmismatches'] = 'Игнорировать несовпадения версий';
$string['ignoreversionmismatchescheckbox'] = 'Игнорировать различия между версией этого сайта и версией исходного сайта.';
$string['importedsuccessfully'] = 'Модель успешно импортирована.';
$string['importmodel'] = 'Импортировать модель';
$string['indicators'] = 'Показатели';
$string['indicators_help'] = 'Показатели - это то, что, по вашему мнению, приведет к точному предсказанию цели.';
$string['indicatorsnum'] = 'Количество показателей: {$a}';
$string['info'] = 'Информация';
$string['insights'] = 'Прогноз для курса';
$string['insightsreport'] = 'Отчёт о прогнозе';
$string['invalidanalysables'] = 'Непрогнозируемые элементы сайта';
$string['invalidanalysablesinfo'] = 'На этой странице перечислены анализируемые элементы, которые не могут использоваться этой моделью прогнозирования. Перечисленные элементы нельзя использовать для обучения модели и модель не может выдать прогнозы для них.';
$string['invalidanalysablestable'] = 'Таблица элементов сайта, непригодных для анализа';
$string['invalidcurrenttimesplitting'] = 'Текущий интервал анализа непригоден для цели этой модели. Выберите другой интервал.';
$string['invalidindicatorsremoved'] = 'Добавлена новая модель. Показатели, которые не работают с выбранной целью, были автоматически удалены.';
$string['invalidprediction'] = 'Непригодно для получения прогнозов';
$string['invalidtimesplitting'] = 'Выбранный интервал анализа непригоден для выбранной цели.';
$string['invalidtimesplittinginmodels'] = 'Интервал анализа непригоден для использования некоторыми моделями. Выберите другой интервал для следующих моделей: {$a}';
$string['invalidtraining'] = 'Непригодно для обучения модели';
$string['loginfo'] = 'Журнал дополнительной информации';
$string['missingmoodleversion'] = 'В импортированном файле не определен номер версии';
$string['modelid'] = 'ID модели';
$string['modelinvalidanalysables'] = 'Непригодные к анализу элементы для модели «{$a}»';
$string['modelname'] = 'Название модели';
$string['modelresults'] = 'Результатов: {$a}';
$string['modeltimesplitting'] = 'Интервал анализа';
$string['newmodel'] = 'Новая модель';
$string['nextpage'] = 'Следующая страница';
$string['noactionsfound'] = 'Пользователи не выполняли никаких действий, учитываемых в прогнозе.';
$string['nodatatoevaluate'] = 'Нет данных для оценки модели';
$string['nodatatopredict'] = 'Нет новых элементов для получения прогнозов.';
$string['nodatatotrain'] = 'Нет новых данных, которые можно было бы использовать для обучения.';
$string['noinvalidanalysables'] = 'Этот сайт не содержит непригодных для анализа элементов.';
$string['notdefined'] = 'Еще не определено';
$string['pluginname'] = 'Модели аналитики';
$string['predictionprocessfinished'] = 'Процесс прогнозирования завершен';
$string['predictionresults'] = 'Результаты прогноза';
$string['predictmodels'] = 'Модели прогноза';
$string['predictorresultsin'] = 'Информация журнала прогноза в каталоге {$a}';
$string['previouspage'] = 'Предыдущая страница';
$string['privacy:metadata'] = 'Плагин Модели аналитики не хранит никаких личных данных.';
$string['restoredefault'] = 'Восстановить модели по умолчанию';
$string['restoredefaultempty'] = 'Выберите модели для восстановления.';
$string['restoredefaultinfo'] = 'Параметры по умолчанию для этих моделей отсутствуют или были изменены с момента установки. Вы можете восстановить выбранные модели по умолчанию.';
$string['restoredefaultnone'] = 'Созданы все модели по умолчанию, предоставляемые ядром и установленными плагинами. Новых моделей не обнаружено; восстанавливать нечего.';
$string['restoredefaultsome'] = 'Успешно воссоздано новых моделей: {$a->count}';
$string['restoredefaultsubmit'] = 'Восстановить выбранное';
$string['sameenddate'] = 'Подходящая текущая дата окончания';
$string['samestartdate'] = 'Подходящая текущая дата начала';
$string['scheduledanalysisresults'] = 'Результаты с использованием интервала анализа {$a->name}';
$string['scheduledanalysisresultscli'] = 'Результаты с использованием интервала анализа {$a->name}  (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Выберите интервал анализа, который вы хотите использовать для оценки конфигурации модели.';
$string['target'] = 'Цель';
$string['target_help'] = 'Цель - это то, что предсказывает модель.';
$string['timesplittingnotdefined'] = 'Интервал анализа не определен.';
$string['timesplittingnotdefined_help'] = 'Перед включением модели нужно выбрать интервал анализа.';
$string['trainandpredictmodel'] = 'Обучение модели и расчет прогнозов';
$string['trainingprocessfinished'] = 'Процесс обучения завершен';
$string['trainingresults'] = 'Результаты обучения';
$string['trainmodels'] = 'Обучение моделей';
$string['versionnotsame'] = 'Импортированный файл был из версии ({$a->importversion}), отличной от текущей ({$a->version})';
$string['viewlog'] = 'Журнал оценки';
$string['weeksenddateautomaticallyset'] = 'Дата окончания устанавливается автоматически в зависимости от даты начала и количества разделов';
$string['weeksenddatedefault'] = 'Дата окончания автоматически рассчитывается от даты начала курса.';
