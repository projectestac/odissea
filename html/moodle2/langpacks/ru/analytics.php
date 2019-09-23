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
 * Strings for component 'analytics', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Анализируемый {$a->analysableid} не использован: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Анализируемый {$a->analysableid} является некорректным для этой цели: {$a->result}';
$string['analysisinprogress'] = 'Всё еще анализируется процессом, запущенным в предыдущий раз';
$string['analytics'] = 'Аналитика';
$string['analyticslogstore'] = 'Журнал событий, используемый для аналитики';
$string['analyticslogstore_help'] = 'Журнал событий, который будет использоваться API аналитики для считывания активности пользователей';
$string['analyticssettings'] = 'Настройки аналитики';
$string['coursetoolong'] = 'Курс слишком длинный';
$string['defaultpredictionsprocessor'] = 'Процессор прогнозов по умолчанию';
$string['defaultpredictoroption'] = 'Процессор по умолчанию ({$a})';
$string['disabledmodel'] = 'Модель отключена';
$string['enabledtimesplittings'] = 'Методы разделения по времени';
$string['erroralreadypredict'] = 'Файл {$a} уже используется для генерации прогнозов.';
$string['errorcannotreaddataset'] = 'Файл набора данных {$a} не может быть прочитан';
$string['errorcannotwritedataset'] = 'Файл набора данных {$a} не может быть записан';
$string['errorendbeforestart'] = 'Дата окончания ({$a}) раньше даты начала курса.';
$string['errorinvalidindicator'] = 'Недопустимый индикатор {$a}';
$string['errorinvalidtimesplitting'] = 'Неправильное разделение по времени; убедитесь, что вы добавили классу полностью корректное имя класса.';
$string['errornoindicators'] = 'У этой модели нет показателей.';
$string['errornopredictresults'] = 'Процессор прогнозов не вернул результат. Проверьте содержимое выходного каталога для получения дополнительной информации.';
$string['errornoroles'] = 'Роли студента или учителя не определены. Определите их на странице настроек аналитики.';
$string['errornotarget'] = 'У этой модели нет цели.';
$string['errornotimesplittings'] = 'У этой модели нет никакого метода разделения по времени.';
$string['errorpredictioncontextnotavailable'] = 'Контекст этого прогноза больше не доступен.';
$string['errorpredictionformat'] = 'Неверный формат расчета прогноза';
$string['errorpredictionnotfound'] = 'Прогноз не найден';
$string['errorpredictionsprocessor'] = 'Ошибка процессора прогнозов: {$a}';
$string['errorpredictwrongformat'] = 'Результат процессора прогнозов нельзя декодировать: «{$a}»';
$string['errorprocessornotready'] = 'Выбранный процессор прогнозов не готов: {$a}';
$string['errorsamplenotavailable'] = 'Образец прогноза больше не доступен';
$string['errorunexistingmodel'] = 'Модель {$a} не существует';
$string['errorunexistingtimesplitting'] = 'Выбранный метод разделения по времени недоступен.';
$string['errorunknownaction'] = 'Неизвестное действие';
$string['eventinsightsviewed'] = 'Просмотр информации';
$string['eventpredictionactionstarted'] = 'Начался процесс прогнозирования';
$string['fixedack'] = 'Признанный';
$string['insightinfomessage'] = 'Система сгенерировала для вас несколько инсайтов: {$a}';
$string['insightinfomessagehtml'] = 'Система сгенерировала для вас несколько инсайтов: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Новый инсайт для «{$a->contextname}»: {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Он не может быть проанализирован с помощью метода разделения по времени {$a}.';
$string['invalidtimesplitting'] = 'Модели с ID {$a} необходим метод разделения во времени до того, как ее можно будет использовать для обучения.';
$string['modeloutputdir'] = 'Каталог вывода моделей';
$string['modeloutputdirinfo'] = 'Каталог, в котором обработчики прогнозов хранят всю оцениваемую информацию. Полезно для отладки и исследований.';
$string['modeltimelimit'] = 'Ограничение времени анализа для модели';
$string['modeltimelimitinfo'] = 'Этот параметр ограничивает время, в течение которого каждая модель проводит анализ содержимого сайта.';
$string['nocourses'] = 'Нет курсов для анализа';
$string['nodata'] = 'Нет данных для анализа';
$string['noevaluationbasedassumptions'] = 'Модели, основанные на допущениях, не могут быть оценены.';
$string['noinsights'] = 'Нет инсайтов в отчете';
$string['noinsightsmodel'] = 'Эта модель не генерирует инсайты';
$string['nonewdata'] = 'Нет новых данных';
$string['nonewranges'] = 'Пока нет новых прогнозов';
$string['nonewtimeranges'] = 'Нет новых диапазонов времени; нечего прогнозировать.';
$string['nopredictionsyet'] = 'Пока еще нет прогнозов';
$string['noranges'] = 'Пока нет прогнозов';
$string['notrainingbasedassumptions'] = 'Модели, основанные на предположениях, не нуждаются в предварительном обучении';
$string['notuseful'] = 'Не пригодный';
$string['novaliddata'] = 'Нет доступных данных';
$string['novalidsamples'] = 'Нет доступных образцов';
$string['onlycli'] = 'Запуск процессов аналитики только из командной строки';
$string['onlycliinfo'] = 'Процессы аналитики, такие как модели оценки, алгоритмы машинного обучения или получение прогнозов, могут занять некоторое время. Они будут выполняться как задачи cron. Их также можно принудительно запустить из командной строки. Отключите этот параметр, если хотите, чтобы управляющие вашего сайта могли запускать эти процессы вручную через веб-интерфейс';
$string['predictionsprocessor'] = 'Обработчик прогнозов';
$string['predictionsprocessor_help'] = 'Обработчик прогнозов — это механизм машинного обучения, который обрабатывает наборы данных, генерируемые путем вычисления показателей и целей моделей. Каждая модель может использовать свой обработчик. Указанный здесь будет по умолчанию.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Вычисления индикаторов';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Контекст';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Время окончания вычисления';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Класс вычисления индикатора';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'ID примера';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Исходная таблица примера';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Время начала вычисления';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Когда был сделан прогноз';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Вычисленное значение';
$string['privacy:metadata:analytics:predictionactions'] = 'Прогнозируемые действия';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Название действия';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'ID прогноза';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Когда прогнозируемое действие было выполнено';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Пользователь, выполнивший действие';
$string['privacy:metadata:analytics:predictions'] = 'Прогнозы';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Вычисления индикаторов';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Контекст';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID модели';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Прогноз';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Прогнозируемый балл';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Индекс метода разделения по времени';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID примера';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Когда прогноз был сделан';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Время вычислений закончилось';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Время вычислений началось';
$string['processingsitecontents'] = 'Обработка содержимого сайта';
$string['successfullyanalysed'] = 'Успешно проанализировано';
$string['timesplittingmethod'] = 'Метод разделения по времени';
$string['timesplittingmethod_help'] = 'Метод разделения по времени делит продолжительность курса на части. Обработчик прогнозов будет работать в конце каждой из этих частей. Рекомендуется использовать только те методы разделения по времени, которые вас действительно интересуют. Процесс оценки будет выполняться повторно для каждого из задействованных методов разделения по времени, поэтому чем больше их будет задействовано, тем медленнее будет процесс оценки.';
$string['viewprediction'] = 'Просмотреть данные прогноза';
