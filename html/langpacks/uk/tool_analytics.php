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
 * Strings for component 'tool_analytics', language 'uk', version '4.5'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Точність';
$string['actionexecutedgroupedusefulness'] = 'Згруповані дії';
$string['actions'] = 'Дії';
$string['actionsexecutedbyusers'] = 'Дії, що виконуються користувачами';
$string['actionsexecutedbyusersfor'] = 'Дії, що виконуються користувачами для моделі "{$a}".';
$string['allpredictions'] = 'Всі прогнози';
$string['alltimesplittingmethods'] = 'Усі інтервали аналізу';
$string['analysingsitedata'] = 'Аналіз сайту';
$string['analysis'] = 'Аналіз';
$string['analyticmodels'] = 'Моделі аналітики';
$string['bettercli'] = 'Оцінка моделей та генерація прогнозів може передбачати високе навантаження. Рекомендується запускати ці дії з командного рядка.';
$string['cantguessenddate'] = 'Не можу вгадати дату закінчення';
$string['cantguessstartdate'] = 'Не можу вгадати дату початку';
$string['classdoesnotexist'] = 'Клас {$a} не існує';
$string['clearmodelpredictions'] = 'Ви впевнені, що хочете очистити всі прогнози "{$a}"?';
$string['clearpredictions'] = 'Очистити прогноз';
$string['clienablemodel'] = 'Ви можете включити модель, вибравши інтервал аналізу за її ідентифікатором. Зауважте, що ви також можете ввімкнути його пізніше за допомогою веб-інтерфейсу ("none" для виходу).';
$string['clievaluationandpredictions'] = 'Заплановане завдання повторюється через ввімкнені моделі та отримує прогнози. Оцінка моделей через веб-інтерфейс відключена. Ви можете дозволити ці процеси виконувати вручну через веб-інтерфейс, вимкнувши  налаштування аналітики лише для <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Заплановане завдання повторюється через ввімкнені моделі та отримує прогнози. Оцінка моделей через веб-інтерфейс відключена. Це може бути включено адміністратором сайту.';
$string['component'] = 'Компонент';
$string['componentcore'] = 'Ядро';
$string['componentselect'] = 'Виберіть усі моделі, надані компонентом \'{$a}\'';
$string['componentselectnone'] = 'Скасувати вибір усіх';
$string['contexts'] = 'Контексти';
$string['contexts_help'] = 'Модель буде обмежена цим набором контекстів. Жодні контекстні обмеження не застосовуватимуться, якщо контексти не вибрані.';
$string['createmodel'] = 'Створити модель';
$string['currenttimesplitting'] = 'Поточний інтервал аналізу';
$string['delete'] = 'Видалити';
$string['deletemodelconfirmation'] = 'Ви впевнені, що хочете видалити "{$a}"? Ці зміни неможливо скасувати.';
$string['disabled'] = 'Вимкнено';
$string['editmodel'] = 'Редагувати "{$a}" модель';
$string['edittrainedwarning'] = 'Ця модель вже пройшла навчання. Зауважте, що зміна його показників або інтервалу аналізу видалить попередні передбачення та почне генерувати нові прогнози.';
$string['enabled'] = 'Включено';
$string['errorcantenablenotimesplitting'] = 'Перш ніж увімкнути модель, потрібно вибрати інтервал аналізу';
$string['errornoenabledandtrainedmodels'] = 'Немає ввімкнених і навчених моделей для передбачення.';
$string['errornoenabledmodels'] = 'Немає ввімкнених моделей для навчання.';
$string['errornoexport'] = 'Експортувати можна лише навчені моделі';
$string['errornostaticevaluated'] = 'Моделі, засновані на припущеннях, не можуть бути оцінені. Вони завжди на 100% правильні відповідно до того, як вони були визначені.';
$string['errornostaticlog'] = 'Моделі, засновані на припущеннях, не можна оцінити, оскільки немає журналу продуктивності.';
$string['erroronlycli'] = 'Виконання дозволено лише через командний рядок';
$string['errortrainingdataexport'] = 'Не вдалося експортувати навчальні дані моделі';
$string['evaluate'] = 'Оцінити';
$string['evaluatemodel'] = 'Оцінити модель';
$string['evaluationinbatches'] = 'Вміст сайту розраховується і зберігається пакетами. Процес оцінювання може бути зупинений в будь-який момент. Під час наступного запуску він продовжиться з того моменту, коли його було зупинено.';
$string['evaluationmode'] = 'Режим оцінки';
$string['evaluationmode_help'] = 'Є два режими оцінки:

* Навчальна модель – дані сайту використовуються як дані тестування для оцінки точності навченої моделі.
* Конфігурація – дані сайту поділяються на дані навчання та тестування, щоб як навчати, так і перевірити точність конфігурації моделі.

Навчена модель доступна, лише якщо навчена модель була імпортована на сайт і ще не була повторно навчена за допомогою даних сайту.';
$string['evaluationmodecolconfiguration'] = 'Конфігурація';
$string['evaluationmodecoltrainedmodel'] = 'Навчена модель';
$string['evaluationmodeconfiguration'] = 'Оцініть конфігурацію моделі';
$string['evaluationmodeinfo'] = 'Ця модель була імпортована на сайт. Ви можете або оцінити продуктивність моделі, або ви можете оцінити продуктивність конфігурації моделі за допомогою даних сайту.';
$string['evaluationmodetrainedmodel'] = 'Оцініть навчену модель';
$string['executescheduledanalysis'] = 'Виконайте запланований аналіз';
$string['export'] = 'Експорт';
$string['exportincludeweights'] = 'Включіть ваги тренованої моделі';
$string['exportmodel'] = 'Експортувати конфігурацію';
$string['exporttrainingdata'] = 'Експорт тренувальних даних';
$string['extrainfo'] = 'Інфо';
$string['generalerror'] = 'Помилка оцінки. Код статусу {$a}';
$string['goodmodel'] = 'Це гарна модель для отримання прогнозів. Увімкніть його, щоб почати отримувати прогнози.';
$string['ignoreversionmismatches'] = 'Ігноруйте невідповідності версій';
$string['ignoreversionmismatchescheckbox'] = 'Ігноруйте відмінності між цією версією сайту та оригінальною версією сайту.';
$string['importedsuccessfully'] = 'Модель успішно імпортована.';
$string['importmodel'] = 'Імпортна модель';
$string['indicators'] = 'Показник';
$string['indicators_help'] = 'Індикатори – це те, що, на вашу думку, приведе до точного прогнозу цілі.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Кількість індикаторів: {$a}';
$string['info'] = 'Інфо';
$string['insights'] = 'Статистика';
$string['insightsreport'] = 'Статистичний звіт';
$string['invalidanalysables'] = 'Помилка елементу сайту';
$string['invalidanalysablesinfo'] = 'На цій сторінці перелічено аналізовані елементи, які не можуть використовуватися цією моделлю передбачення. Перераховані елементи не можуть використовуватися ні для навчання моделі передбачення, ні для отримання передбачення для них.';
$string['invalidanalysablestable'] = 'Недійсна таблиця елементів, що аналізуються';
$string['invalidcurrenttimesplitting'] = 'Поточний інтервал аналізу недійсний для цілі цієї моделі. Виберіть інший інтервал.';
$string['invalidindicatorsremoved'] = 'Додано нову модель. Індикатори, які не працюють з вибраною цілью, були автоматично видалені.';
$string['invalidprediction'] = 'Помилка отримання прогнозу';
$string['invalidtimesplitting'] = 'Вибраний інтервал аналізу недійсний для вибраної цілі.';
$string['invalidtimesplittinginmodels'] = 'Інтервал аналізу, який використовується деякими моделями, недійсний. Виберіть інший інтервал для таких моделей: {$a}';
$string['invalidtraining'] = 'Помилка тренувальної моделі';
$string['loginfo'] = 'Введіть додаткову інформацію';
$string['missingmoodleversion'] = 'Імпортований файл не визначає номер версії';
$string['modelid'] = 'Ідентифікатор моделі';
$string['modelinvalidanalysables'] = 'Недійсні елементи аналізу для моделі "{$a}"';
$string['modelname'] = 'Назва моделі';
$string['modelresults'] = '{$a} результати';
$string['modeltimesplitting'] = 'Інтервал аналізу';
$string['newmodel'] = 'Нова модель';
$string['nextpage'] = 'Наступна сторінка';
$string['noactionsfound'] = 'Користувачі не виконували жодних дій щодо згенерованих статистичних даних.';
$string['nodatatoevaluate'] = 'Немає даних для оцінки моделі';
$string['nodatatopredict'] = 'Немає нових елементів для отримання прогнозів.';
$string['nodatatotrain'] = 'Немає нових даних, які можна використовувати для навчання.';
$string['noinvalidanalysables'] = 'Цей сайт не містить недійсних елементів, які можна аналізувати.';
$string['notdefined'] = 'Ще не визначено';
$string['pluginname'] = 'Аналітичні моделі';
$string['predictionprocessfinished'] = 'Процес прогнозування завершено';
$string['predictionresults'] = 'Результати передбачення';
$string['predictmodels'] = 'Передбачити моделі';
$string['predictorresultsin'] = 'Прогнозована інформація в каталозі {$a}';
$string['previouspage'] = 'Попередня сторінка';
$string['privacy:metadata'] = 'Плагін Analytic models не зберігає жодних персональних даних.';
$string['restoredefault'] = 'Відновити моделі за замовчуванням';
$string['restoredefaultempty'] = 'Будь ласка, виберіть моделі для відновлення.';
$string['restoredefaultinfo'] = 'Ці моделі за замовчуванням відсутні або змінилися після встановлення. Ви можете відновити вибрані моделі за замовчуванням.';
$string['restoredefaultnone'] = 'Створено всі моделі за замовчуванням, надані ядром і встановленими плагінами. Жодних нових моделей не знайдено; нема чого відновлювати.';
$string['restoredefaultsome'] = 'Успішно повторно створено нові моделі ({$a->count}).';
$string['restoredefaultsubmit'] = 'Відновити вибране';
$string['sameenddate'] = 'Поточна дата завершення вдала';
$string['samestartdate'] = 'Поточна дата початку вдала';
$string['scheduledanalysisresults'] = 'Результати з використанням інтервалу аналізу {$a->name}';
$string['scheduledanalysisresultscli'] = 'Результати за допомогою інтервалу аналізу {$a->name} (id: {$a->id}).';
$string['selecttimesplittingforevaluation'] = 'Виберіть інтервал аналізу, який потрібно використовувати для оцінки конфігурації моделі.';
$string['target'] = 'Ціль';
$string['target_help'] = 'Ціль – це те, що передбачить модель.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Ще не визначено';
$string['timesplittingnotdefined_help'] = 'Перед включенням моделі потрібно вибрати метод поділу за часом.';
$string['trainandpredictmodel'] = 'Модель навчання та розрахунки прогнозів';
$string['trainingprocessfinished'] = 'Навчальний процес завершено';
$string['trainingresults'] = 'Результати тренувань';
$string['trainmodels'] = 'Моделі потягів';
$string['versionnotsame'] = 'Імпортований файл був з іншої версії ({$a->importedversion}), ніж поточна ({$a->version})';
$string['viewlog'] = 'Журнал оцінки';
$string['weeksenddateautomaticallyset'] = 'Дата завершення встановлюється автоматично на основі дати початку та кількості розділів';
$string['weeksenddatedefault'] = 'Дата закінчення автоматично обчислюється від дати початку курсу.';
