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
 * Strings for component 'analytics', language 'ru', version '4.4'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Анализируемый {$a->analysableid} не использован: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Анализируемый {$a->analysableid} является некорректным для этой цели: {$a->result}';
$string['analysisinprogress'] = 'Всё еще анализируется процессом, запущенным в предыдущий раз';
$string['analytics'] = 'Аналитика';
$string['analyticsdisabled'] = 'Аналитика отключена. Вы можете включить его в «Администрирование > Расширенные возможности».';
$string['analyticslogstore'] = 'Журнал событий, используемый для аналитики';
$string['analyticslogstore_help'] = 'Журнал событий, который будет использоваться API аналитики для чтения активности пользователей';
$string['analyticssettings'] = 'Настройки аналитики';
$string['analyticssiteinfo'] = 'Информация о сайте';
$string['calclifetime'] = 'Хранить расчеты аналитики';
$string['configlcalclifetime'] = 'Это определяет продолжительность времени, в течение которого вы хотите хранить данные расчетов - это не приведет к удалению прогнозов, а удалит данные, используемые для создания прогнозов. Здесь лучше всего использовать параметр по умолчанию, поскольку он позволяет контролировать использование вашего диска, однако, если вы используете таблицы вычислений для других целей, вы можете увеличить это значение.';
$string['defaultpredictionsprocessor'] = 'Процессор прогнозов по умолчанию';
$string['defaultpredictoroption'] = 'Процессор по умолчанию ({$a})';
$string['defaulttimesplittingmethods'] = 'Интервалы анализа по умолчанию для оценки модели';
$string['defaulttimesplittingmethods_help'] = 'Интервал анализа определяет, когда система будет рассчитывать прогнозы и порции записей журналов, которые будут учитываться для этих прогнозов. Процесс оценки модели будет повторяться через эти интервалы анализа, если не указан конкретный интервал анализа.';
$string['disabledmodel'] = 'Модель отключена';
$string['erroralreadypredict'] = 'Файл {$a} уже используется для генерации прогнозов.';
$string['errorcannotreaddataset'] = 'Файл данных {$a} не может быть прочитан.';
$string['errorcannotusetimesplitting'] = 'Указанный интервал анализа не может быть использован в этой модели.';
$string['errorcannotwritedataset'] = 'Файл данных {$a} не может быть записан.';
$string['errorexportmodelresult'] = 'Модель машинного обучения не может быть экспортирована.';
$string['errorimport'] = 'Ошибка импорта предоставленного JSON-файла.';
$string['errorimportmissingclasses'] = 'Следующие аналитические компоненты на данном сайте недоступны: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Поставляемая модель требует установки следующих плагинов: {$a}. Обратите внимание, что версии не обязательно должны совпадать с версиями, установленными на вашем сайте. Установка той же или более новой версии плагина должна быть в большинстве случаев удачной.';
$string['errorimportversionmismatches'] = 'Версия следующих компонентов отличается от версии, установленной на этом сайте: {$a}. Вы можете использовать опцию «Игнорировать несовпадения версий», чтобы игнорировать эти различия.';
$string['errorinvalidcontexts'] = 'Некоторые из выбранных контекстов не могут быть использованы в этой цели.';
$string['errorinvalidindicator'] = 'Недопустимый индикатор {$a}';
$string['errorinvalidtarget'] = 'Недействительный {$a} объект';
$string['errorinvalidtimesplitting'] = 'Неправильный интервал анализа; убедитесь, что вы добавили корректное имя класса.';
$string['errornocontextrestrictions'] = 'Выбранная цель не поддерживает ограничения контекста';
$string['errornoexportconfig'] = 'При экспорте конфигурации модели возникла проблема.';
$string['errornoexportconfigrequirements'] = 'Только нестатические модели с интервалом анализа могут быть экспортированы.';
$string['errornoindicators'] = 'У этой модели нет показателей.';
$string['errornopredictresults'] = 'Процессор прогнозов не вернул результат. Проверьте содержимое выходного каталога для получения дополнительной информации.';
$string['errornoroles'] = 'Роли студента или учителя не определены. Определите их на странице настроек аналитики.';
$string['errornotarget'] = 'У этой модели нет цели.';
$string['errornotimesplittings'] = 'У этой модели нет интервала анализа.';
$string['errorpredictioncontextnotavailable'] = 'Этот контекст прогнозирования больше недоступен.';
$string['errorpredictionformat'] = 'Неверный формат расчета прогноза';
$string['errorpredictionnotfound'] = 'Прогноз не найден';
$string['errorpredictionsprocessor'] = 'Ошибка процессора прогнозов: {$a}';
$string['errorpredictwrongformat'] = 'Результат процессора прогнозов нельзя декодировать: «{$a}»';
$string['errorprocessornotready'] = 'Выбранный процессор прогнозов не готов: {$a}';
$string['errorsamplenotavailable'] = 'Прогнозируемая выборка больше недоступна.';
$string['errorunexistingmodel'] = 'Модель {$a} не существует';
$string['errorunexistingtimesplitting'] = 'Выбранный интервал анализа недоступен.';
$string['errorunknownaction'] = 'Неизвестное действие';
$string['eventinsightsviewed'] = 'Просмотрены инсайты';
$string['eventpredictionactionstarted'] = 'Начался процесс прогнозирования';
$string['fixedack'] = 'Подтвердить инсайт';
$string['incorrectlyflagged'] = 'Неправильно помечено';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Cистема сгенерировала инсайт для вас.';
$string['insightinfomessageplain'] = 'Cистема сгенерировала инсайт для вас: {$a}';
$string['insightmessagesubject'] = 'Новый инсайт для «{$a}»';
$string['invalidanalysablefortimesplitting'] = 'Не может быть проанализировано с использованием интервала анализа {$a}.';
$string['invalidtimesplitting'] = 'Модели с ID {$a} необходимо задать интервал анализа до того, как ее можно будет использовать для обучения.';
$string['levelinstitution'] = 'Уровень образования';
$string['levelinstitutionisced0'] = 'ISCED 0. Дошкольное образование («меньше начального»)';
$string['levelinstitutionisced1'] = 'ISCED 1. Начальное образование';
$string['levelinstitutionisced2'] = 'ISCED 1. Среднее образование (нижняя ступень)';
$string['levelinstitutionisced3'] = 'ISCED 2. Среднее образование (верхняя ступень)';
$string['levelinstitutionisced4'] = 'ISCED 3. Образование после получения среднего, но не высшее (может включать корпоративное обучение или обучение в сообществе/НПО)';
$string['levelinstitutionisced5'] = 'ISCED 4. Краткосрочное высшее образование (может включать корпоративное обучение или обучение в сообществе/НПО)';
$string['levelinstitutionisced6'] = 'ISCED 5. Бакалавриат или эквивалентный уровень';
$string['levelinstitutionisced7'] = 'ISCED 6. Магистратура или эквивалентный уровень';
$string['levelinstitutionisced8'] = 'ISCED 7. Аспирантура/докторантура или эквивалентный уровень';
$string['modeinstruction'] = 'Режимы обучения';
$string['modeinstructionblendedhybrid'] = 'Смешанное или гибридное';
$string['modeinstructionfacetoface'] = 'Лицом к лицу';
$string['modeinstructionfullyonline'] = 'Полностью онлайн';
$string['modeloutputdir'] = 'Каталог вывода моделей';
$string['modeloutputdirwithdefaultinfo'] = 'Каталог, в котором обработчики прогнозирования хранят всю информацию об оценке. Полезно для отладки и исследования. Если пусто, то по умолчанию будет использоваться {$a}.';
$string['modeltimelimit'] = 'Ограничение времени анализа для модели';
$string['modeltimelimitinfo'] = 'Этот параметр ограничивает время, в течение которого каждая модель проводит анализ содержимого сайта.';
$string['neutral'] = 'Нейтрально';
$string['neverdelete'] = 'Никогда не удалять расчеты';
$string['nocourses'] = 'Нет курсов для анализа';
$string['nodata'] = 'Нет данных для анализа';
$string['noevaluationbasedassumptions'] = 'Модели, основанные на допущениях, не могут быть оценены.';
$string['noinsights'] = 'Нет инсайтов в отчёте';
$string['noinsightsmodel'] = 'Эта модель не генерирует инсайты';
$string['nonewdata'] = 'Нет новых данных. Модель будет проанализирована после следующего интервала анализа.';
$string['nonewranges'] = 'Пока нет новых прогнозов. Модель будет проанализирована после следующего интервала анализа.';
$string['nopredictionsyet'] = 'Пока еще нет прогнозов';
$string['noranges'] = 'Пока нет прогнозов';
$string['notapplicable'] = 'Непригодно';
$string['notrainingbasedassumptions'] = 'Модели, основанные на предположениях, не нуждаются в предварительном обучении';
$string['notuseful'] = 'Ошибка в инсайте';
$string['novaliddata'] = 'Нет доступных данных';
$string['novalidsamples'] = 'Нет доступных образцов';
$string['onlycli'] = 'Запуск процессов аналитики только из командной строки';
$string['onlycliinfo'] = 'Процессы аналитики, такие как модели оценки, алгоритмы машинного обучения или получение прогнозов, могут занять некоторое время. Они будут выполняться как задачи cron. Их также можно принудительно запустить из командной строки. Отключите этот параметр, чтобы эти процессы можно было запускать вручную через веб-интерфейс';
$string['percentonline'] = 'Процент в Moodle';
$string['percentonline_help'] = 'Если ваша организация предлагает смешанные или гибридные курсы, какой процент студенческой работы проводится онлайн в Moodle? Введите число от 0 до 100.';
$string['predictionsprocessor'] = 'Обработчик прогнозов';
$string['predictionsprocessor_help'] = 'Обработчик прогнозов — это механизм машинного обучения, который обрабатывает наборы данных, генерируемые путем вычисления показателей и целей моделей. Каждая модель может использовать свой обработчик. Указанный здесь будет по умолчанию.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Модели аналитики';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Пользователь, изменивший модель';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Журнал, используемый для Моделей аналитики';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Пользователь, который изменил журнал';
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
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Индекс интервала анализа';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID примера';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Когда прогноз был сделан';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Время вычислений закончилось';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Время вычислений началось';
$string['processingsitecontents'] = 'Обработка содержимого сайта';
$string['successfullyanalysed'] = 'Успешно проанализировано';
$string['timesplittingmethod'] = 'Интервал анализа';
$string['timesplittingmethod_help'] = 'Интервал анализа определяет, когда система будет рассчитывать прогнозы и часть журналов активности, которые будут учитываться для этих прогнозов. Например, продолжительность курса может быть разделена на части, с прогнозами, создаваемыми в конце каждой части.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Тип учреждения';
$string['typeinstitutionacademic'] = 'Академический';
$string['typeinstitutionngo'] = 'Неправительственная организация (НПО)';
$string['typeinstitutiontraining'] = 'Корпоративное обучение';
$string['useful'] = 'Пригодно';
$string['viewdetails'] = 'Посмотреть детали';
$string['viewinsight'] = 'Посмотреть инсайт';
$string['viewinsightdetails'] = 'Посмотреть детали инсайта';
$string['viewprediction'] = 'Просмотреть данные прогноза';
$string['washelpful'] = 'Было ли это полезно?';
