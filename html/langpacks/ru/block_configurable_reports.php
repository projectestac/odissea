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
 * Strings for component 'block_configurable_reports', language 'ru', version '4.4'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Действия в элементе курса';
$string['activityview'] = 'Просмотры элемента курса';
$string['add'] = 'Добавить';
$string['addreport'] = 'Добавить отчет';
$string['allowedsqlusers'] = 'Пользователи SQL-отчетов';
$string['allowedsqlusersinfo'] = 'Если вы хотите разрешить управление SQL-отчетами только определенным лицам, добавьте список имен пользователей, разделенных запятыми. У них также должно быть право block/configurable_reports:managesqlreports.';
$string['anyone'] = 'Любой пользователь';
$string['anyone_summary'] = 'Любой пользователь сможет просмотреть этот отчет';
$string['availablemarks'] = 'Доступные выражения';
$string['average'] = 'Среднее';
$string['badconditionexpr'] = 'Некорректное выражение для условия';
$string['badsize'] = 'Некорректный размер, он должен быть в процентах или пикселях.';
$string['badtablewidth'] = 'Неправильная ширина, она должна быть или в процентах, или без указания единицы измерения.';
$string['bar'] = 'Столбиковая';
$string['barsummary'] = 'Столбиковая диаграмма';
$string['blockname'] = 'Настраиваемые отчеты';
$string['calcs'] = 'Вычисления';
$string['categories'] = 'Категории';
$string['categoryfield'] = 'Поле категории';
$string['categoryfieldorder'] = 'Порядок полей категории';
$string['ccoursefield'] = 'Условие поля курса';
$string['cellalign'] = 'Выравнивание ячейки';
$string['cellsize'] = 'Размер ячейки';
$string['cellwrap'] = 'Перенос в ячейке';
$string['checksql_execution'] = 'Блокировать выполнение настраиваемых отчетов SQL';
$string['checksql_execution_details'] = 'Разрешение выполнения кода SQL создает потенциальную проблему безопасности, связанную с добавлением произвольного кода пользователями. Выполнение кода SQL следует отключить, чтобы разрешить только запросы SQL для чтения / восстановления данных. Выполнение SQL можно отключить в файле config.php, установив для $CFG->block_configurable_reports_enable_sql_execution значение 0';
$string['checksql_execution_ok'] = 'Выполнение SQL отключено.';
$string['checksql_execution_warning'] = 'Рекомендуется отключить выполнение SQL, чтобы избежать выполнения произвольного SQL-кода на вашем сервере.';
$string['cohorts'] = 'Глобальные группы';
$string['column'] = 'Столбец';
$string['columnandcellproperties'] = 'Свойства столбцов и ячеек';
$string['columncalculations'] = 'Вычисления';
$string['columns'] = 'Столбцы';
$string['comp_calcs'] = 'Вычисления';
$string['comp_calcs_help'] = '<p> Здесь Вы можете добавить вычисления на основе данных в столбцах, например, среднее от количества пользователей, обучающихся в курсах. </p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_calculations'] = 'Вычисления';
$string['comp_calculations_help'] = '<p> Здесь Вы можете добавить вычисления на основе данных в столбцах, например, среднее от количества пользователей, обучающихся в курсах. </p>';
$string['comp_columns'] = 'Столбцы';
$string['comp_columns_help'] = '<p> Здесь Вы можете выбрать различные столбцы данных для отчета в зависимости от его типа. </p>


<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_conditions'] = 'Условия';
$string['comp_conditions_help'] = '<p> Здесь Вы можете задать условия (например,  выбрать только курсы из указанной категории, только пользователи из России, и т.п. ... </p>

<p> Вы можете использовать логические выражения для объединения нескольких условий. </p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_customsql'] = 'Пользовательские SQL-запросы';
$string['comp_customsql_help'] = '<p> Добавьте работающий SQL- запрос. Не используйте префикс базы данных Moodle ($CFG->prefix), вместо этого используйте «prefix_» (без кавычек).</p>
<p> Пример: SELECT * FROM prefix_course </p>

<p> Вы можете найти много готовых SQL-отчетов на странице <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc_contributed_reports (на английском языке)</a> </p>

<p> В этом блоке можно использовать любые запросы, созданные для модуля CustomSQL Queries Reports (report_customsql).</p>

<p> Не забудьте добавить фильтр по времени, если собираетесь использовать отчеты с отметками времени. </p>

<p> Для информации об использовании фильтров изучите <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">руководство по созданию SQL-отчетов (на английском языке).</a> </p>';
$string['comp_filters'] = 'Фильтры';
$string['comp_filters_help'] = '<p> Здесь Вы можете выбрать, какие фильтры будут отображаться. </p>

<p> Фильтр дает пользователю возможность ограничить количество данных, выбрав конкретные значения для некоторых из столбцов отчета. </p>

<p> Для информации об использовании фильтров изучите <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">руководство по созданию SQL-отчетов (на английском языке).</a> </p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_ordering'] = 'Сортировка';
$string['comp_ordering_help'] = 'p>Здесь Вы можете выбрать, как упорядочить отчет с использованием полей и направлений.</p>

<p>Дополнительная инфоормация: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Документация (на английском языке)</a></p>';
$string['comp_permissions'] = 'Разрешения';
$string['comp_permissions_help'] = '<p>Здесь Вы можете выбрать, кто может просматривать отчет.</p>

<p>Вы можете указать логическое выражение для расчета итогового значения, если используется несколько условий.</p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_plot'] = 'График';
$string['comp_plot_help'] = '<p>Здесь Вы можете добавить к отчету графики, построенные на основе данных отчета.</p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_template'] = 'Шаблон';
$string['comp_template_help'] = '<p>Вы можете изменить представление отчета путем создания шаблона.</p>

<p>Для создания шаблона, используйте подстановочные выражения, которые можно использовать в заголовке, «подвале» и в каждой из строк отчета. Для этого можно использовать кнопки справки и информацию на этой странице.</p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['competencyframeworks'] = 'Структуры компетенций';
$string['competencytemplates'] = 'Шаблоны компетенций';
$string['componenthelp'] = 'Справка по использованию компонента';
$string['conditionexpr'] = 'Условие';
$string['conditionexpr_conditions'] = 'Условие';
$string['conditionexpr_conditions_help'] = '<p>Вы можете объединять условия с помощью логических операторов.</p>

<p>Введите корректное логическое выражение с использованием операторов «and» и «or».</p>';
$string['conditionexpr_permissions'] = 'Условие';
$string['conditionexpr_permissions_help'] = '<p>Вы можете объединять условия с помощью логических операторов.</p>

<p>Введите корректное логическое выражение с использованием операторов «and» и «or».</p>';
$string['conditionexprhelp'] = 'Введите корректное условие, например: (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Условия';
$string['configurable_reports:addinstance'] = 'Добавлять новый блок «Настраиваемые отчеты»';
$string['configurable_reports:manageownreports'] = 'Управлять собственными отчетами';
$string['configurable_reports:managereports'] = 'Управлять отчетами';
$string['configurable_reports:managesqlreports'] = 'Управлять SQL-отчетами';
$string['configurable_reports:myaddinstance'] = 'Добавлять новый блок «Настраиваемые отчеты» на домашнюю страницу';
$string['configurable_reports:viewreports'] = 'Просматривать отчеты';
$string['confirmdeletereport'] = 'Вы уверены, что хотите удалить этот отчет?';
$string['coursecategories'] = 'Категория курса';
$string['coursecategory'] = 'Курс из категории';
$string['coursechild'] = 'Курсы, которые находятся в указанной категории';
$string['coursededicationtime'] = 'Время, посвященное курсу';
$string['coursefield'] = 'Поле';
$string['coursefieldorder'] = 'Порядок полей курса';
$string['coursemodules'] = 'Модуль курса';
$string['courseparent'] = 'Курсы, которые находятся в категории';
$string['courses'] = 'Курсы';
$string['coursestats'] = 'Статистика курса';
$string['cron'] = 'Автоматически выполнять ежедневно';
$string['cron_help'] = 'Опция позволяет включить автоматическое формирование отчета раз в сутки (например, ночью)';
$string['crondescription'] = 'Запланировать выполнение этого запроса каждые сутки';
$string['crrepository'] = 'Репозиторий отчетов';
$string['crrepositoryinfo'] = 'Репозиторий созданных сообществом образцов отчетов (Логин владельца аккаунта GitHub + слеш + имя репозитория)';
$string['csvdelimiter'] = 'Разделитель CSV';
$string['csvdelimiterinfo'] = 'Разделитель CSV: «colon» для «:», «comma» для «,», «semicolon» для «;», «tab» для «\\t» и «cfg» для символа, настроенного в «CFG->CSV_DELIMITER» файла config.php.';
$string['currentreportcourse'] = 'Текущий курс';
$string['currentreportcourse_summary'] = 'Курс, в котором создан отчет';
$string['currentuser'] = 'Текущий пользователь';
$string['currentuser_summary'] = 'Пользователь, который просматривает отчет';
$string['currentusercourses'] = 'Курсы, на которые записан текущий пользователь';
$string['currentusercourses_summary'] = 'Список курсов текущего пользователя (только видимые курсы)';
$string['currentuserfinalgrade'] = 'Итоговая оценка текущего пользователя в курсе';
$string['currentuserfinalgrade_summary'] = 'Эта колонка отображает итоговую оценку текущего пользователя в строке, соответствующей курсу.';
$string['cuserfield'] = 'Условие по полю профиля пользователя';
$string['custom'] = 'Пользовательский';
$string['customdateformat'] = 'Пользовательский формат даты';
$string['customsql'] = 'Пользовательский SQL-запрос';
$string['datatables'] = 'Использовать javascript-библиотеку DataTables';
$string['datatables_emptytable'] = 'В таблице нет доступных данных';
$string['datatables_first'] = 'Первая';
$string['datatables_info'] = 'Показаны _START_ по _END_ из _TOTAL_ строк';
$string['datatables_infoempty'] = 'Отображение 0 из 0 записей';
$string['datatables_infofiltered'] = '(отфильтровано из _MAX_ строк)';
$string['datatables_last'] = 'Последняя';
$string['datatables_lengthmenu'] = 'Показать строки _MENU_';
$string['datatables_loadingrecords'] = 'Загрузка...';
$string['datatables_next'] = 'Следующая';
$string['datatables_previous'] = 'Предыдущая';
$string['datatables_processing'] = 'Обработка...';
$string['datatables_search'] = 'Поиск:';
$string['datatables_sortascending'] = ': активируйте для сортировки по возрастанию';
$string['datatables_sortdescending'] = ': активируйте для сортировки по убыванию';
$string['datatables_zerorecords'] = 'Не найдено записей, соответствующих условию.';
$string['datatablesinfo'] = 'Javascript-библиотека DataTables позволяет средствами браузера осуществлять сортировку и поиск, делать неподвижным заголовок, разбивать данные на страницы и т.п.';
$string['date'] = 'Дата';
$string['dateformat'] = 'Формат даты';
$string['dbhost'] = 'Сервер базы данных';
$string['dbhostinfo'] = 'Имя сервера внешней базы данных (в которой будут выполняться запросы)';
$string['dbname'] = 'Имя базы данных';
$string['dbnameinfo'] = 'Имя внешней базы данных (в которой будут выполняться запросы)';
$string['dbpass'] = 'Пароль';
$string['dbpassinfo'] = 'Пароль для доступа к внешней базе данных (в которой будут выполняться запросы)';
$string['dbuser'] = 'Пользователь БД';
$string['dbuserinfo'] = 'Логин для подключения к внешней базе данных (пользователь должен иметь разрешения для выполнения SELECT-запросов )';
$string['decimals'] = 'Число десятичных знаков';
$string['description'] = 'Описание';
$string['description_help'] = 'Текст, используемый для описания фильтра, который будет отображаться в сводке на странице фильтров.';
$string['direction'] = 'Направление';
$string['disabled'] = 'Отключено';
$string['displayglobalreports'] = 'Отображать глобальные отчеты';
$string['displayreportslist'] = 'Отображать список отчетов в теле блока';
$string['donotshowtime'] = 'Не отображать дату';
$string['download'] = 'Скачать';
$string['downloadreport'] = 'Скачать отчет';
$string['email_message'] = 'Сообщение';
$string['email_send'] = 'Отправить';
$string['email_subject'] = 'Тема';
$string['enabled'] = 'Включено';
$string['enableglobal'] = 'Это глобальный отчет (доступен из любого курса)';
$string['enablejsordering'] = 'Включить сортировку средствами JavaScript';
$string['enablejspagination'] = 'Включить разбиение на страницы средствами JavaScript';
$string['endtime'] = 'Дата окончания';
$string['enrolledstudents'] = 'Записанные на курс студенты';
$string['error_field'] = 'Поле не разрешено';
$string['error_operator'] = 'Оператор не разрешен';
$string['error_value_expected_integer'] = 'Ожидается целое значение';
$string['excludedeletedusers'] = 'Исключить удаленных пользователей (только для отчетов SQL)';
$string['executeat'] = 'Запускать в указанное время';
$string['executeatinfo'] = 'Планировщик заданий moodle будет выполнять запланированные SQL-запросы в указанное время один раз в сутки.';
$string['export_csv'] = 'Экспорт в формате CSV';
$string['export_json'] = 'Экспорт в формате JSON';
$string['export_ods'] = 'Экспорт в формате ODS';
$string['export_xls'] = 'Экспорт в формате XLS';
$string['exportoptions'] = 'Параметры экспорта';
$string['exportreport'] = 'Экспорт отчета';
$string['fcoursefield'] = 'Фильтр по полю курса';
$string['field'] = 'Поле';
$string['filter'] = 'Фильтр';
$string['filter_all'] = 'Все';
$string['filter_apply'] = 'Применить';
$string['filter_searchtext'] = 'Текст для поиска';
$string['filter_searchtext_summary'] = 'Фильтр для ввода искомой части строки';
$string['filtercategories'] = 'Категория курсов';
$string['filtercategories_summary'] = 'Фильтр для выбора категории курсов';
$string['filtercohorts'] = 'Глобальные группы';
$string['filtercohorts_summary'] = 'Используйте: %%FILTER_COHORTS:prefix_cohort.id%%';
$string['filtercompetencyframeworks'] = 'Структуры компетенций';
$string['filtercompetencyframeworks_summary'] = 'Используйте: %%FILTER_COMPETENCYFRAMEWORKS:prefix_competency_framework.id%%';
$string['filtercompetencytemplates'] = 'Шаблоны компетенции';
$string['filtercompetencytemplates_summary'] = 'Используйте: %%FILTER_COMPETENCYTEMPLATES:prefix_competency_template.id%%';
$string['filtercoursecategories'] = 'Категория курсов';
$string['filtercoursecategories_summary'] = 'Фильтр для выбора курса из категории (включая подкатегории)';
$string['filtercoursemodules'] = 'Модуль курса';
$string['filtercoursemodules_summary'] = 'Фильтра для выбора модуля курса';
$string['filtercourses'] = 'Курс';
$string['filtercourses_summary'] = 'Фильтр для выбора одного курса из списка курсов';
$string['filterenrolledstudents'] = 'Записанный на курс студент';
$string['filterenrolledstudents_summary'] = 'Фильтр для выбора пользователя из числа записанных на курс студентов';
$string['filterrole'] = 'Роль';
$string['filterrole_summary'] = 'Фильтр для выбора роли (Учитель, Студент,...)';
$string['filters'] = 'Фильтры';
$string['filtersemester'] = 'Семестр (иврит)';
$string['filtersemester_list'] = 'סמסטר א,סמסטר ב,סמסטר ג,סמינריו';
$string['filtersemester_summary'] = 'מאפשר סינון לפני סמסטרים (בעברית, למשל: סמסטר א,סמסטר ב';
$string['filterstartendtime_summary'] = 'Фильтр для ввода даты начала и окончания';
$string['filtersubcategories'] = 'Категория (включая подкатегории)';
$string['filtersubcategories_summary'] = 'Используйте: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Пользователь текущего курса';
$string['filteruser_summary'] = 'Фильтр для выбора пользователя из списка пользователей текущего курса';
$string['filterusers'] = 'Пользователь сайта';
$string['filterusers_summary'] = 'Фильтр для выбора пользователя из списка пользователей сайта';
$string['filteryearhebrew'] = 'Год (на иврите)';
$string['filteryearhebrew_list'] = 'תשע,תשעא,תשעב,תשעג,תשעד,תשעה';
$string['filteryearhebrew_summary'] = 'Фильтр для выбора года на иврите (תשעג, ...)';
$string['filteryearnumeric'] = 'Год (числовой)';
$string['filteryearnumeric_summary'] = 'Фильтр для выбора года (2013, ...)';
$string['filteryears'] = 'Год (числовой)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Фильтр для выбора года (2013, ...)';
$string['finalgradeincurrentcourse'] = 'Итоговая оценка в текущем курсе';
$string['fixeddate'] = 'Заданная дата';
$string['footer'] = 'Нижний колонтитул';
$string['forcemidnight'] = 'Считать от полуночи, а не от текущего момента времени';
$string['fsearchuserfield'] = 'Поиск пользовательских полей';
$string['fuserfield'] = 'Фильтр по пользовательскому полю';
$string['generalcolorpalette'] = 'Несопоставленная палитра';
$string['generalcolorpalette_help'] = 'Шестнадцатеричные цветовые коды для общего использования на круговой диаграмме. Коды следует разделять новыми строками в том порядке, в котором вы хотите, чтобы они использовались на круговой диаграмме.';
$string['generalcolorpaletteheader'] = 'Общая цветовая палитра';
$string['global'] = 'Глобальный отчет';
$string['global_help'] = 'Доступ к глобальному отчету можно получить из любого курса на сайте путем добавления &courseid=id_курса к URL-адресу отчета';
$string['globalstatsshouldbeenabled'] = 'На сайте должен быть включен сбор статистики. Перейдите к Администрирование - Расширенные возможности - Включить статистику';
$string['groupseries'] = 'Группировать серии';
$string['groupvalues'] = 'Группировать одинаковые выражения (при суммировании)';
$string['head_color'] = 'Цвет фона графика';
$string['head_data'] = 'Данные графика';
$string['head_size'] = 'Размер графика';
$string['header'] = 'Заголовок';
$string['height'] = 'Высота';
$string['idnumber'] = 'Номер ID';
$string['idnumber_help'] = 'Используется для различения фильтров одного типа. Чувствителен к регистру. Пример использования: %%FILTER_SEARCHTEXT_username:u.username:~%%';
$string['importfromrepository'] = 'Импорт отчета из репозитория';
$string['importreport'] = 'Импортировать отчет';
$string['includesubcats'] = 'Включая подкатегории';
$string['invalidcolorcode'] = 'Неверный цветовой код';
$string['jsordering'] = 'Сортировка средствами JavaScript';
$string['jsordering_help'] = 'Сортировка средствами JavaScript позволяет осуществлять сортировку таблицы отчета без перезагрузки страницы';
$string['label'] = 'Метка';
$string['label_field'] = 'Метка поля';
$string['label_field_help'] = 'Поле, которое обозначает наименование для данных, представленных на графике.';
$string['label_help'] = 'Описывающий фильтр текст, который будет отображаться на странице отчета.';
$string['lastexecutiontime'] = 'Время выполнения = {$a} (сек.)';
$string['legacylognotenabled'] = 'Необходимо включить устаревший журнал событий.
Для этого пройдите по пути Администрирование - Плагины - Журнал событий - Управление способами хранения журнала событий и включите пункт «Устаревший журнал событий».';
$string['legendheader'] = 'Сопоставленная палитра';
$string['legendheaderdesc'] = 'Сопоставьте цветовые коды с определенными ключами в легенде круговой диаграммы.';
$string['limitcategories'] = 'Ограничение категорий в графике';
$string['line'] = 'График';
$string['linesummary'] = 'График с несколькими рядами данных';
$string['listofsqlreports'] = 'Для переключения в полный экран редактирования нажмите клавишу F11 при нахождении курсора в редакторе. Для выхода из полного экрана редактирования используйте клавишу  Esc. <br/><br/> <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Список доступных SQL-отчетов</a>';
$string['managereports'] = 'Управление отчетами';
$string['max'] = 'Максимум';
$string['min'] = 'Минимум';
$string['missingcolumn'] = 'Требуется столбец';
$string['module'] = 'Модуль';
$string['newreport'] = 'Новый отчет';
$string['nocalcsyet'] = 'Не добавлено еще ни одного вычисления';
$string['nocolumnsyet'] = 'Не добавлено еще ни одного столбца';
$string['noconditionsyet'] = 'Не добавлено еще ни одного условия';
$string['noexplicitprefix'] = 'Нет явного префикса имен таблиц';
$string['nofiltersyet'] = 'Не добавлено еще ни одного фильтра';
$string['nofilteryet'] = 'Не добавлено еще ни одного фильтра';
$string['noorderingyet'] = 'Не добавлено еще ни одного столбца для сортировки';
$string['nopermissionsyet'] = 'Не добавлено еще ни одного разрешения';
$string['noplotyet'] = 'Не добавлено еще ни одного графика';
$string['norecordsfound'] = 'Не найдено ни одной записи';
$string['noreportsavailable'] = 'Нет доступных отчетов';
$string['norowsreturned'] = 'Запрос не вернул ни одной строки';
$string['nosemicolon'] = 'В запросе нельзя использовать знак «;» (точка с запятой)';
$string['notallowedwords'] = 'В запросе используется одно из запрещенных слов (alter, create, delete, drop, grant, insert, into, truncate, update, set, vacuum, reindex, discard, lock)';
$string['operator'] = 'Оператор';
$string['ordering'] = 'Сортировка';
$string['others'] = 'Другие';
$string['pagination'] = 'Разбиение на страницы';
$string['pagination_help'] = 'Количество записей, отображаемое на каждой странице. Ноль означает отсутствие разбиения на страницы.';
$string['parentcategory'] = 'Родительская категория';
$string['percent'] = 'Процент';
$string['permissions'] = 'Разрешения';
$string['pie'] = 'Круговая диаграмма';
$string['pieareaname'] = 'Название';
$string['pieareavalue'] = 'Значение';
$string['piechart_add_colors'] = 'Добавить цвет';
$string['piechart_label'] = 'Ключ - {$a}';
$string['piechart_label_color'] = 'Цвет - {$a}';
$string['piesummary'] = 'Круговая диаграмма';
$string['plot'] = 'Графики';
$string['pluginname'] = 'Настраиваемые отчеты';
$string['previousdays'] = 'Дней назад';
$string['previousend'] = 'Окончание отчета (дней назад)';
$string['previousstart'] = 'Начало отчета (дней назад)';
$string['printreport'] = 'Печать отчета';
$string['privacy:metadata:block_configurable_reports'] = 'Блок настраиваемых отчетов содержит настраиваемые отчеты по курсу.';
$string['privacy:metadata:block_configurable_reports:components'] = 'Конфигурация отчета. Он содержит запрос, фильтры ...';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'ID курса';
$string['privacy:metadata:block_configurable_reports:global'] = 'Доступен ли отчет со всех курсов или нет';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'Время последнего выполнения этого отчета,
  в миллисекундах.';
$string['privacy:metadata:block_configurable_reports:name'] = 'Название отчета';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'ID пользователя, создавшего отчет';
$string['privacy:metadata:block_configurable_reports:summary'] = 'Описание отчета';
$string['privacy:metadata:block_configurable_reports:type'] = 'Тип отчета';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Виден ли отчет или нет';
$string['puserfield'] = 'Значение поля пользовательского профиля';
$string['puserfield_summary'] = 'Пользователь с этим значением в указанном поле профиля';
$string['queryfailed'] = 'Не удалось выполнить запрос: <code><pre>{$a}</pre></code>';
$string['querysql'] = 'SQL-запрос';
$string['remote'] = 'Запускать во внешней БД';
$string['remote_help'] = 'Запрос будет выполняться на отдельной копии базы данных системы, чтобы не перегружать текущую (производственную) БД.';
$string['remotedescription'] = 'Вы хотите выполнять этот запрос во внешней базе данных?';
$string['remotequerysql'] = 'SQL-запрос';
$string['report'] = 'Отчет';
$string['report_categories'] = 'Отчет по категориям';
$string['report_courses'] = 'Отчет по курсам';
$string['report_sql'] = 'Отчет SQL';
$string['report_timeline'] = 'Отчет по времени';
$string['report_users'] = 'Отчет по пользователям';
$string['reportcategories'] = '1) Выберите категорию SQL-запроса для загрузки из репозитория';
$string['reportcolumn'] = 'Другой столбец отчета';
$string['reportcreated'] = 'Отчет успешно создан';
$string['reportlimit'] = 'Ограничение на количество строк отчета';
$string['reportlimitinfo'] = 'Ограничение на количество строк, которые отображаются в таблице отчета. Значение по умолчанию - 5000 строк. Желательно указать некоторое ограничение, чтобы пользователи не слишком нагружали базу данных.';
$string['reports'] = 'Отчеты';
$string['reportscapabilities'] = 'Пользователь с правом просмотра системных отчетов';
$string['reportscapabilities_summary'] = 'Пользователи, имеющие право moodle/site:viewreports';
$string['reportsincategory'] = '2) Выберите SQL-запрос из списка';
$string['reporttable'] = 'Таблица отчета';
$string['reporttable_help'] = '<p> Это ширина таблицы, в которой будут отображаться записи отчета. </p>

<p>При использовании шаблона этот параметр не оказывает никакого эффекта.</p>';
$string['reporttableui'] = 'Пользовательский интерфейс таблицы отчета';
$string['reporttableuiinfo'] = 'Варианты отображения таблицы отчета: Simple - простая HTML-таблица с прокруткой; jQuery - таблица с возможностью сортировки; DataTables JS - таблица с возможностью сортировки, закрепления заголовка, поиска и разбивки на страницы';
$string['repository'] = 'Репозиторий отчетов';
$string['repository_help'] = 'Вы можете импортировать образцы отчетов из публичного репозитория.

Пожалуйста, обратите внимание, что есть ограничение на количество обращений к репозиторию за день.

Если подключение к хранилищу не работает, Вы можете вручную скачать отчеты <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">здесь</a>, а затем импортировать их при помощи функции «Импорт отчета».';
$string['role'] = 'Роль';
$string['roleincourse'] = 'Пользователь с указанной ролью в текущем курсе';
$string['roleusersn'] = 'Число пользователей с ролью ...';
$string['searchtext'] = 'Текст для поиска';
$string['semester'] = 'Семестр (иврит)';
$string['serieid'] = 'Столбец Серия';
$string['sessionlimittime'] = 'Ограничение между щелчками (в минутах)';
$string['sessionlimittime_help'] = 'Ограничение между щелчками определяет, являются ли эти два щелчка частями одной сессии или нет';
$string['setcourseid'] = 'Выбор ID курса';
$string['sharedsqlrepository'] = 'Репозиторий SQL-запросов';
$string['sharedsqlrepositoryinfo'] = 'Логин владельца аккаунта GitHub + слеш + имя репозитория';
$string['sqlsecurity'] = 'Безопасный SQL';
$string['sqlsecurityinfo'] = 'Запретить выполнение SQL-запросов с инструкциями для изменения данных';
$string['sqlsyntaxhighlight'] = 'Подсветка синтаксиса SQL';
$string['sqlsyntaxhighlightinfo'] = 'Выделение синтаксиса SQL в редакторе кода (JavaScript библиотека CodeMirror)';
$string['startendtime'] = 'Фильтр по дате начала/окончания';
$string['starttime'] = 'Дата начала';
$string['stat'] = 'Статистика';
$string['statsactiveenrolments'] = 'Активных (за последнюю неделю) записей на курс';
$string['statslogins'] = 'Входов в систему';
$string['statstotalenrolments'] = 'Всего записанных на курс';
$string['student'] = 'Студент';
$string['subcategories'] = 'Категория (включая подкатегории)';
$string['sum'] = 'Сумма';
$string['tablealign'] = 'Выравнивание таблицы';
$string['tablecellpadding'] = 'Отступ в ячейке до ее рамки';
$string['tablecellspacing'] = 'Расстояние между ячейками таблицы';
$string['tableclass'] = 'Класс таблицы';
$string['tablewidth'] = 'Ширина таблицы';
$string['template'] = 'Шаблон';
$string['template_marks'] = 'Подстановочные выражения шаблона';
$string['template_marks_help'] = '<p> Вы можете использовать любое из этих подстановочных выражений: </p>

<ul>
<li>##reportname## - для вставки названия отчета</li>
<li>##reportsummary## - для вставки описания отчета</li>
<li>##graphs## - для вставки графиков</li>
<li>##exportoptions## - для вставки вариантов экспорта</li>
<li>##calculationstable## - для вставки таблицы с расчетами</li>
<li>##pagination## - для вставки элементов, отвечающих за разбивку на страницы</li>
</ul>';
$string['templaterecord'] = 'Шаблон записи';
$string['timeinterval'] = 'Интервал времени';
$string['timeline'] = 'Шкала времени';
$string['timemode'] = 'Временной режим';
$string['totalrecords'] = 'Общее количество записей = {$a->totalrecords}';
$string['type'] = 'Тип отчета';
$string['typeofreport'] = 'Тип отчета';
$string['typeofreport_help'] = 'Выберите тип создаваемого отчета. В целях безопасности, создавать SQL-отчеты могут только пользователи с соответствующим правом (block/configurable_reports:managesqlreports).';
$string['user'] = 'Пользователь курса (id)';
$string['usercompletion'] = 'Состояние завершения курса';
$string['usercompletionsummary'] = 'Состояние завершения курса пользователем';
$string['userfield'] = 'Поле профиля пользователя';
$string['userfieldorder'] = 'Порядок полей профиля пользователя';
$string['usermodactions'] = 'Действия пользователя в модуле';
$string['usermodoutline'] = 'Обзор результатов пользователя в модуле';
$string['users'] = 'Пользователь сайта (id)';
$string['usersincohorts'] = 'Пользователь, входящий в несколько глобальных групп';
$string['usersincohorts_summary'] = 'Только пользователи, входящие в выбранные глобальные группы';
$string['usersincoursereport'] = 'Любой пользователь курса';
$string['usersincoursereport_summary'] = 'Любой пользователь текущего курса';
$string['usersincurrentcourse'] = 'Пользователи этого курса с указанной ролью';
$string['usersincurrentcourse_summary'] = 'Пользователи текущего курса, которым назначена указанная роль';
$string['userstats'] = 'Статистика по пользователю';
$string['value'] = 'Значение';
$string['value_fields'] = 'Значение полей';
$string['value_fields_help'] = 'Поля, которые должны быть представлены на графике. Ctrl+щелчок (Cmd+щелчок на Mac) для выбора нескольких полей. Если вы выберете поле «Метка» или поле с нечисловыми значениями — они будут проигнорированы';
$string['viewreport'] = 'Просмотр отчета';
$string['width'] = 'Ширина';
$string['xandynotequal'] = 'Оси X и Y должны быть различными';
$string['xaxis'] = 'Ось X';
$string['yaxis'] = 'Ось Y';
$string['yearhebrew'] = 'Год (на иврите)';
$string['yearnumeric'] = 'Год (числовой)';
$string['years'] = 'Год (числовой)';
$string['youmustselectarole'] = 'Необходимо выбрать хотя бы одну роль';
