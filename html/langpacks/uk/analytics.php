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
 * Strings for component 'analytics', language 'uk', version '4.1'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Аналізований {$a->analysableid} не використовується: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Аналізований {$a->analysableid} недійсний для цієї цілі: {$a->result}';
$string['analysisinprogress'] = 'Досі аналізується попередня страта';
$string['analytics'] = 'Аналітика';
$string['analyticsdisabled'] = 'Аналітика вимкнена. Ви можете ввімкнути його в «Адміністрування сайту > Додаткові функції».';
$string['analyticslogstore'] = 'Журнал подій, який використовується для аналітики';
$string['analyticslogstore_help'] = 'Журнал подій, який буде використовуватися API аналітики для зчитування активності користувачів';
$string['analyticssettings'] = 'Налаштування аналітики';
$string['analyticssiteinfo'] = 'Інформація про сайт';
$string['calclifetime'] = 'Зберігайте аналітичні розрахунки для';
$string['configlcalclifetime'] = 'Це визначає час, протягом якого потрібно зберігати дані розрахунків – це не видаляє передбачення, а видаляє дані, які використовуються для створення прогнозів. Тут найкраще використовувати параметр за замовчуванням, оскільки він тримає під контролем використання вашого диска, однак, якщо ви використовуєте таблиці обчислень для інших цілей, ви можете збільшити це значення.';
$string['defaultpredictionsprocessor'] = 'Процесор передбачень за замовчуванням';
$string['defaultpredictoroption'] = 'Процесор за замовчуванням ({$a})';
$string['defaulttimesplittingmethods'] = 'Інтервали аналізу за замовчуванням для оцінки моделі';
$string['defaulttimesplittingmethods_help'] = 'Інтервал аналізу визначає, коли система обчислюватиме прогнози та частину журналів діяльності, яка буде врахована для цих передбачень. Процес оцінки моделі повторюватиме ці інтервали аналізу, якщо не вказано конкретний інтервал аналізу.';
$string['disabledmodel'] = 'Модель з інвалідністю';
$string['erroralreadypredict'] = 'Файл {$a} уже використовувався для створення передбачень.';
$string['errorcannotreaddataset'] = 'Неможливо прочитати файл набору даних {$a}.';
$string['errorcannotusetimesplitting'] = 'Наданий інтервал аналізу не можна використовувати в цій моделі.';
$string['errorcannotwritedataset'] = 'Неможливо записати файл набору даних {$a}.';
$string['errorexportmodelresult'] = 'Не можна експортувати модель машинного навчання.';
$string['errorimport'] = 'Помилка імпортування наданого файлу JSON.';
$string['errorimportmissingclasses'] = 'На цьому сайті недоступні такі аналітичні компоненти: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Надана модель вимагає встановлення таких плагінів: {$a}. Зауважте, що версії не обов’язково повинні збігатися з версіями, встановленими на вашому сайті. У більшості випадків установка тієї самої або новішої версії плагіна має бути нормальною.';
$string['errorimportversionmismatches'] = 'Версія наступних компонентів відрізняється від версії, встановленої на цьому сайті: {$a}. Ви можете використовувати опцію «Ігнорувати невідповідності версій», щоб ігнорувати ці відмінності.';
$string['errorinvalidcontexts'] = 'Деякі з вибраних контекстів не можна використовувати в цій цілі.';
$string['errorinvalidindicator'] = 'Недійсний індикатор {$a}';
$string['errorinvalidtarget'] = 'Недійсна ціль {$a}';
$string['errorinvalidtimesplitting'] = 'Недійсний інтервал аналізу; будь ласка, переконайтеся, що ви додали повну назву класу.';
$string['errornocontextrestrictions'] = 'Вибрана ціль не підтримує контекстні обмеження';
$string['errornoexportconfig'] = 'Виникла проблема з експортом конфігурації моделі.';
$string['errornoexportconfigrequirements'] = 'Можна експортувати лише нестатичні моделі з інтервалом аналізу.';
$string['errornoindicators'] = 'Дана модель не має жодних індикаторів.';
$string['errornopredictresults'] = 'Немає результатів від процесора передбачень. Перевірте вміст вихідного каталогу для отримання додаткової інформації.';
$string['errornoroles'] = 'Ролі учня чи вчителя не визначені. Визначте їх на сторінці налаштувань аналітики.';
$string['errornotarget'] = 'Ця модель не має мети.';
$string['errornotimesplittings'] = 'Ця модель не має інтервалу аналізу.';
$string['errorpredictioncontextnotavailable'] = 'Цей контекст прогнозування більше не доступний.';
$string['errorpredictionformat'] = 'Неправильний формат розрахунків прогнозу';
$string['errorpredictionnotfound'] = 'Прогноз не знайдено';
$string['errorpredictionsprocessor'] = 'Помилка процесора передбачення: {$a}';
$string['errorpredictwrongformat'] = 'Повернення процесора передбачення не може бути декодовано: "{$a}"';
$string['errorprocessornotready'] = 'Вибраний процесор передбачень не готовий: {$a}';
$string['errorsamplenotavailable'] = 'Прогнозований зразок більше недоступний.';
$string['errorunexistingmodel'] = 'Неіснуюча модель {$a}';
$string['errorunexistingtimesplitting'] = 'Вибраний інтервал аналізу недоступний.';
$string['errorunknownaction'] = 'Невідома дія';
$string['eventinsightsviewed'] = 'Переглянуто статистику';
$string['eventpredictionactionstarted'] = 'Розпочато процес прогнозування';
$string['fixedack'] = 'Прийняти';
$string['incorrectlyflagged'] = 'Неправильно позначено';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Система створила для вас інсайт.';
$string['insightinfomessageplain'] = 'Система згенерувала для вас статистику: {$a}';
$string['insightmessagesubject'] = 'Нове уявлення про "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Його неможливо проаналізувати за допомогою інтервалу аналізу {$a}.';
$string['invalidtimesplitting'] = 'Модель з ідентифікатором {$a} потребує інтервалу аналізу, перш ніж її можна буде використовувати для навчання.';
$string['levelinstitution'] = 'Рівень освіти';
$string['levelinstitutionisced0'] = 'Дошкільна освіта ("менше початкової" для досягнення освіти)';
$string['levelinstitutionisced1'] = 'Початкова освіта';
$string['levelinstitutionisced2'] = 'Нижча середня освіта';
$string['levelinstitutionisced3'] = 'Середня освіта';
$string['levelinstitutionisced4'] = 'Післясередня невища освіта (може включати корпоративне навчання або навчання у громаді/НУО)';
$string['levelinstitutionisced5'] = 'Вища освіта з коротким циклом (може включати корпоративне навчання або навчання у громаді/НУО)';
$string['levelinstitutionisced6'] = 'Рівень бакалавра або еквівалент';
$string['levelinstitutionisced7'] = 'Рівень магістра або еквівалент';
$string['levelinstitutionisced8'] = 'Докторський або еквівалентний рівень';
$string['modeinstruction'] = 'Режими навчання';
$string['modeinstructionblendedhybrid'] = 'Змішані або гібридні';
$string['modeinstructionfacetoface'] = 'Обличчям до обличчя';
$string['modeinstructionfullyonline'] = 'Повністю онлайн';
$string['modeloutputdir'] = 'Каталог виведення моделей';
$string['modeloutputdirinfo'] = 'Каталог, в якому обробники прогнозів зберігають всю оцінювану інформацію. Корисно для налагодження і досліджень.';
$string['modeloutputdirwithdefaultinfo'] = 'Каталог, де процесори прогнозування зберігають всю інформацію про оцінку. Корисно для налагодження та дослідження. Якщо порожній, то {$a} використовуватиметься за замовчуванням.';
$string['modeltimelimit'] = 'Обмеження часу аналізу для моделі';
$string['modeltimelimitinfo'] = 'Цей параметр обмежує час, протягом якого кожна модель проводить аналіз вмісту сайту.';
$string['neutral'] = 'Нейтральний';
$string['neverdelete'] = 'Ніколи не видаляйте розрахунки';
$string['nocourses'] = 'Немає курсів для аналізу';
$string['nodata'] = 'Немає даних для аналізу';
$string['noevaluationbasedassumptions'] = 'Моделі, засновані на припущеннях, не можуть бути оцінені.';
$string['noinsights'] = 'Про статистику не повідомляється';
$string['noinsightsmodel'] = 'Ця модель не генерує ідей';
$string['nonewdata'] = 'Немає нових даних. Модель буде проаналізована після наступного інтервалу аналізу.';
$string['nonewranges'] = 'Нових прогнозів поки немає. Модель буде проаналізована після наступного інтервалу аналізу.';
$string['nopredictionsyet'] = 'Прогнозів поки немає';
$string['noranges'] = 'Поки що немає прогнозів';
$string['notapplicable'] = 'Не застосовується';
$string['notrainingbasedassumptions'] = 'Моделі, засновані на припущеннях, не потребують навчання';
$string['notuseful'] = 'Не корисно';
$string['novaliddata'] = 'Достовірних даних немає';
$string['novalidsamples'] = 'Немає дійсних зразків';
$string['onlycli'] = 'Запуск процесів аналітики тільки з командного рядка';
$string['onlycliinfo'] = 'Процеси аналітики, такі як моделі оцінки, алгоритми машинного навчання або отримання прогнозів, можуть бути досить тривалою. Вони будуть виконуватися як завдання cron. Їх також можна примусово запустити з командного рядка. Вимкніть цей параметр, якщо хочете, щоб керуючі вашого сайту могли запускати ці процеси вручну через веб-інтерфейс';
$string['percentonline'] = 'Відсоток онлайн';
$string['percentonline_help'] = 'Якщо ваша організація пропонує змішані або змішані курси, який відсоток студентської роботи виконується онлайн в Moodle? Введіть число від 0 до 100.';
$string['predictionsprocessor'] = 'Оброблювач прогнозів';
$string['predictionsprocessor_help'] = 'Оброблювач прогнозів - це механізм машинного навчання, який обробляє набори даних, які генеруються шляхом обчислення показників і цілей моделей. Всі підготовлені алгоритми і прогнози будуть видалені, якщо ви перейдете на інший обробник прогнозів.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Аналітичні моделі';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Користувач, який змінив модель';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Журнал, який використовується для аналітичних моделей';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Користувач, який змінив журнал';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Індикаторні розрахунки';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Контекст';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Час закінчення розрахунку';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Клас калькулятора показників';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Ідентифікатор зразка';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Таблиця походження зразка';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Час початку розрахунку';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Коли був зроблений прогноз';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Розрахункове значення';
$string['privacy:metadata:analytics:predictionactions'] = 'Дії прогнозування';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Назва дії';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Ідентифікатор прогнозу';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Коли була виконана дія передбачення';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Користувач, який здійснив дію';
$string['privacy:metadata:analytics:predictions'] = 'Прогнози';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Індикаторні розрахунки';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Контекст';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Ідентифікатор моделі';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Прогноз';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Оцінка прогнозу';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Індекс інтервалу аналізу';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Ідентифікатор зразка';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Коли був зроблений прогноз';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Час розрахунків закінчується';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Початок розрахунків часу';
$string['processingsitecontents'] = 'Обробка вмісту сайту';
$string['successfullyanalysed'] = 'Успішно проаналізовано';
$string['timesplittingmethod'] = 'Інтервал аналізу';
$string['timesplittingmethod_help'] = 'Метод поділу за часом ділить тривалість курсу на частини. Оброблювач прогнозів буде працювати в кінці кожної з цих частин. Рекомендується використовувати тільки ті методи поділу за часом, які вас дійсно цікавлять. Процес оцінки буде виконуватися повторно для кожного із задіяних методів поділу за часом, тому чим більше їх буде задіяно, тим повільніше буде процес оцінки.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Тип закладу';
$string['typeinstitutionacademic'] = 'Академічний';
$string['typeinstitutionngo'] = 'неурядова організація (НУО)';
$string['typeinstitutiontraining'] = 'Корпоративне навчання';
$string['useful'] = 'Корисно';
$string['viewdetails'] = 'Докладніше';
$string['viewinsight'] = 'Переглянути інсайт';
$string['viewinsightdetails'] = 'Переглянути детальну інформацію';
$string['viewprediction'] = 'Переглянути деталі прогнозу';
$string['washelpful'] = 'це допомогло?';
