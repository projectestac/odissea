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
 * Strings for component 'block_configurable_reports', language 'ru', branch 'MOODLE_26_STABLE'
 *
 * @package   block_configurable_reports
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Действия в элементе курса';
$string['activityview'] = 'Просмотры элемента курса';
$string['addreport'] = 'Добавить отчет';
$string['anyone'] = 'Любой пользователь';
$string['anyone_summary'] = 'Любой пользователь сможет просмотреть этот отчет';
$string['availablemarks'] = 'Доступные знаки';
$string['average'] = 'Среднее';
$string['badconditionexpr'] = 'Некорректное выражение для условия';
$string['badsize'] = 'Некорректный размер, он должен быть в процентах или пикселях.';
$string['badtablewidth'] = 'Неправильная ширина, она должна быть или в процентах, или без указания единицы измерения.';
$string['blockname'] = 'Настраиваемые отчеты';
$string['calcs'] = 'Вычисления';
$string['categories'] = 'Категории';
$string['categoryfield'] = 'Поле категории';
$string['categoryfieldorder'] = 'Порядок полей категории';
$string['ccoursefield'] = 'Условие поля курса';
$string['cellalign'] = 'Выравнивание ячейки';
$string['cellsize'] = 'Размер ячейки';
$string['cellwrap'] = 'Перенос в ячейке';
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
$string['componenthelp'] = 'Справка по использованию компонента';
$string['comp_ordering'] = 'Сортировка';
$string['comp_ordering_help'] = 'p>Здесь Вы можете выбрать, как упорядочить отчет с использованием полей и направлений.</p>

<p>Дополнительная инфоормация: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Документация (на английском языке)</a></p>';
$string['comp_permissions'] = 'Разрешения';
$string['comp_permissions_help'] = '<p>Здесь Вы можете выбрать, кто может просматривать отчет.</p>

<p>Вы можете добавить логическое выражение, чтобы рассчитать итоговое значение, если используется несколько условий.</p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_plot'] = 'График';
$string['comp_plot_help'] = '<p>Здесь Вы можете добавить к отчету графики, построенные на основании данных отчета.</p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['comp_template'] = 'Шаблон';
$string['comp_template_help'] = '<p>Вы можете изменить представление отчета путем создания шаблона.</p>

<p>Для создания шаблона, используйте подстановочные знаки, которые можно использовать в заголовке, «подвале» и в каждой из строк отчета. Для этого можно использовать кнопки справки и информацию на соответствующей странице.</p>

<p> Дополнительную информацию можно найти в  <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">документации (на английском языке).</a> </p>';
$string['conditionexpr'] = 'Условие';
$string['conditionexpr_conditions'] = 'Условие';
$string['conditionexpr_conditions_help'] = '<p>Вы можете объединять условия с помощью логических операторов.</p>

<p>Введите корректное логическое выражение с использованием операторов «and» и «or».</p>';
$string['conditionexprhelp'] = 'Введите корректное условие, например: (c1 and c2) or (c4 and c3)';
$string['conditionexpr_permissions'] = 'Условие';
$string['conditionexpr_permissions_help'] = '<p>Вы можете объединять условия с помощью логических операторов.</p>

<p>Введите корректное логическое выражение с использованием операторов «and» и «or».</p>';
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
$string['coursefield'] = 'Поле курса';
$string['coursefieldorder'] = 'Порядок полей курса';
$string['coursemodules'] = 'Модуль курса';
$string['courseparent'] = 'Курсы, которые находятся в категории';
$string['courses'] = 'Курсы';
$string['coursestats'] = 'Статистика курса';
$string['cron'] = 'Автоматически выполнять ежедневно';
$string['crondescription'] = 'Запланировать выполнение этого запроса ежедневно (например, ночью)';
$string['cron_help'] = 'Запланировать выполнение этого запроса ежедневно (например, ночью)';
$string['crrepository'] = 'Репозиторий отчетов';
$string['crrepositoryinfo'] = 'Репозиторий созданных сообществом образцов полностью функциональных отчетов';
$string['currentreportcourse'] = 'Текущий курс';
$string['currentreportcourse_summary'] = 'Курс, в котором создан отчет';
$string['currentuser'] = 'Текущий пользователь';
$string['currentusercourses'] = 'Курсы, на которые записан текущий пользователь';
$string['currentusercourses_summary'] = 'Список курсов текущего пользователя (только видимые курсы)';
$string['currentuserfinalgrade'] = 'Итоговая оценка текущего пользователя в курсе';
$string['currentuserfinalgrade_summary'] = 'Эта колонка отображает итоговую оценку текущего пользователя в строке, соответствующей курсу.';
$string['currentuser_summary'] = 'Пользователь, который просматривает отчет';
$string['cuserfield'] = 'Условие по полю профиля пользователя';
$string['custom'] = 'Пользовательский';
$string['customdateformat'] = 'Пользовательский формат даты';
$string['customsql'] = 'Пользовательский SQL-запрос';
$string['datatables'] = 'Использовать javascript-библиотеку DataTables';
$string['datatablesinfo'] = 'Javascript-библиотека DataTables позволяет средствами браузера осуществлять сортировку и поиск, делать неподвижным заголовок, разбивать данные на страницы и т.п.';
$string['date'] = 'Дата';
$string['dateformat'] = 'Формат даты';
$string['dbhost'] = 'Сервер базы данных';
$string['dbhostinfo'] = 'Имя сервера внешней базы данных (в которой будут выполняться запросы)';
$string['dbname'] = 'Имя базы данных';
$string['dbnameinfo'] = 'Имя внешней базы данных (в которой будут выполняться запросы)';
$string['dbpass'] = 'Пароль';
$string['dbpassinfo'] = 'Пароль для доступа к внешней базе данных (в которой будут выполняться запросы)';
$string['dbuser'] = 'Логин';
$string['dbuserinfo'] = 'Логин для подключения к внешней базе данных (пользователь должен иметь разрешения для выполнения SELECT-запросов )';
$string['direction'] = 'Направление';
$string['disabled'] = 'Отключено';
$string['displayglobalreports'] = 'Отображать глобальные отчеты';
$string['displayreportslist'] = 'Отображать список отчетов в теле блока';
$string['donotshowtime'] = 'Не отображать дату';
$string['download'] = 'Загрузить';
$string['downloadreport'] = 'Загрузить отчет';
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
$string['executeat'] = 'Запускать в указанное время';
$string['executeatinfo'] = 'Планировщик заданий moodle будет выполнять запланированные SQL-запросы в указанное время один раз в сутки.';
$string['export_csv'] = 'Экспорт в формате CSV';
$string['export_ods'] = 'Экспорт в формате ODS';
$string['exportoptions'] = 'Параметры экспорта';
$string['exportreport'] = 'Экспорт отчета';
$string['export_xls'] = 'Экспорт в формате XLS';
$string['fcoursefield'] = 'Фильтр по полю курса';
$string['field'] = 'Поле';
$string['filter'] = 'Фильтр';
$string['filter_all'] = 'Все';
$string['filter_apply'] = 'Применить';
$string['filtercategories'] = 'Категория курсов';
$string['filtercategories_summary'] = 'Фильтр для выбора категории курсов';
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
$string['filter_searchtext'] = 'Текст для поиска';
$string['filter_searchtext_summary'] = 'Фильтр для ввода искомой части строки';
$string['filtersemester'] = 'Семестр (иврит)';
$string['filtersemester_list'] = 'סמסטר א,סמסטר ב,סמסטר ג,סמינריו';
$string['filtersemester_summary'] = 'מאפשר סינון לפני סמסטרים (בעברית, למשל: סמסטר א,סמסטר ב';
$string['filterstartendtime_summary'] = 'Фильтр для ввода даты начала и окончания';
$string['filtersubcategories'] = 'Категория (включая подкатегории)';
$string['filtersubcategories_summary'] = 'Использование: %% FILTER_CATEGORIES: mdl_course_category.path %%';
$string['filteruser'] = 'Пользователь текущего курса';
$string['filterusers'] = 'Пользователь сайта';
$string['filterusers_summary'] = 'Фильтр для выбора пользователя из списка пользователей сайта';
$string['filteruser_summary'] = 'Фильтр для выбора пользователя из списка пользователей текущего курса';
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
$string['footer'] = '«Подвал»';
$string['forcemidnight'] = 'Считать от полуночи, а не от текущего момента времени';
$string['fuserfield'] = 'Фильтр по пользовательскому полю';
$string['global'] = 'Глобальный отчет';
$string['global_help'] = 'Доступ к глобальному отчету можно получить из любого курса на сайте путём добавления &courseid=id_курса к URL-адресу отчета';
$string['globalstatsshouldbeenabled'] = 'На сайте должен быть включен сбор статистики. Перейдите к Администрирование - Расширенные возможности - Включить статистику';
$string['groupseries'] = 'Группировать серии';
$string['groupvalues'] = 'Группировать одинаковые выражения (при суммировании)';
$string['header'] = 'Заголовок';
$string['importfromrepository'] = 'Импорт отчета из репозитория';
$string['importreport'] = 'Импортировать отчет';
$string['includesubcats'] = 'Включая подкатегории';
$string['jsordering'] = 'Сортировка средствами JavaScript';
$string['jsordering_help'] = 'Сортировка средствами JavaScript позволяет осуществлять сортировку таблицы отчета без перезагрузки страницы';
$string['lastexecutiontime'] = 'Время выполнения = {$a} (сек.)';
$string['legacylognotenabled'] = 'Необходимо включить устаревший журнал событий.
Для этого пройдите по пути Администрирование - Плагины - Журнал событий - Управление способами хранения журнала событий, включите пункт «Устаревший журнал событий».';
$string['line'] = 'График';
$string['linesummary'] = 'График с несколькими рядами данных';
$string['listofsqlreports'] = 'Для переключения в полный экран редактирования нажмите клавишу F11 при нахождении курсора в редакторе. Для выхода из полного экрана редактирования используйте клавишу  Esc. <br/><br/> <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Список доступных SQL-отчетов</a>';
$string['managereports'] = 'Управление отчетами';
$string['max'] = 'Максимум';
$string['min'] = 'Минимум';
$string['missingcolumn'] = 'Требуется столбец';
$string['module'] = 'Модуль';
$string['newreport'] = 'Новый отчет';
$string['nocalcsyet'] = 'Не добавлено ещё ни одного вычисления';
$string['nocolumnsyet'] = 'Не добавлено ещё ни одного столбца';
$string['noconditionsyet'] = 'Не добавлено ещё ни одного условия';
$string['noexplicitprefix'] = 'Нет явного префикса имен таблиц';
$string['nofiltersyet'] = 'Не добавлено ещё ни одного фильтра';
$string['nofilteryet'] = 'Не добавлено ещё ни одного фильтра';
$string['noorderingyet'] = 'Не добавлено ещё ни одного столбца для сортировки';
$string['nopermissionsyet'] = 'Не добавлено ещё ни одного разрешения';
$string['noplotyet'] = 'Не добавлено ещё ни одного графика';
$string['norecordsfound'] = 'Не найдено ни одной записи';
$string['noreportsavailable'] = 'Нет доступных отчетов';
$string['norowsreturned'] = 'Запрос не вернул ни одной строки';
$string['nosemicolon'] = 'В запросе нельзя использовать знак «;» (точка с запятой)';
$string['notallowedwords'] = 'В запросе используется одно из запрещенных слов (alter, create, delete, drop, grant, insert, into, truncate, update, set, vacuum, reindex, discard, lock)';
$string['operator'] = 'Оператор';
$string['ordering'] = 'Сортировка';
$string['pagination'] = 'Разбиение на страницы';
$string['pagination_help'] = 'Количество записей, отображаемое на каждой странице. Ноль означает отсутствие разбиения на страницы.';
$string['parentcategory'] = 'Родительская категория';
$string['permissions'] = 'Разрешения';
$string['pie'] = 'Круговая диаграмма';
$string['pieareaname'] = 'Название';
$string['pieareavalue'] = 'Значение';
$string['piesummary'] = 'Круговая диаграмма';
$string['plot'] = 'Графики';
$string['pluginname'] = 'Настраиваемые отчеты';
$string['previousdays'] = 'Дней назад';
$string['previousend'] = 'Окончание отчета (дней назад)';
$string['previousstart'] = 'Начало отчета (дней назад)';
$string['printreport'] = 'Печать отчета';
$string['puserfield'] = 'Значение поля пользовательского профиля';
$string['puserfield_summary'] = 'Пользователь с этим значением в указанном поле профиля';
$string['queryfailed'] = 'Не удалось выполнить запрос';
$string['querysql'] = 'SQL-запрос';
$string['remote'] = 'Запустить на внешней БД';
$string['remotedescription'] = 'Вы хотите выполнить этот запрос на внешней базе данных?';
$string['remote_help'] = 'Вы хотите выполнить этот запрос на внешней базе данных?';
$string['remotequerysql'] = 'SQL-запрос';
$string['report'] = 'Отчет';
$string['reportcategories'] = '1) Выберите категорию SQL-запроса для загрузки репозитория';
$string['report_categories'] = 'Отчет по категориям';
$string['reportcolumn'] = 'Другой столбыц отчета';
$string['report_courses'] = 'Отчет по курсам';
$string['reportcreated'] = 'Отчет успешно создан';
$string['reportlimit'] = 'Ограничение на количество строк отчета';
$string['reportlimitinfo'] = 'Ограничьте количество строк, которые отображаются в таблице отчета. (Значение по умолчанию - 5000 строк. Желательно указать некоторое ограничение, чтобы пользователи не слишком нагружали базу данных.)';
$string['reports'] = 'Отчеты';
$string['reportscapabilities'] = 'Пользователь с правом просмотра системных отчетов';
$string['reportscapabilities_summary'] = 'Пользователи, имеющие право moodle/site:viewreports';
$string['reportsincategory'] = '2) Выберите SQL-запрос из списка';
$string['report_sql'] = 'SQL-отчет';
$string['reporttable'] = 'Таблица отчета';
$string['reporttable_help'] = '<p> Это ширина таблицы, в которой будут отображаться записи отчета. </p>

<p>При использовании шаблона этот параметр не оказывает никакого эффекта.</p>';
$string['reporttableui'] = 'Пользовательский интерфейс таблицы отчета';
$string['reporttableuiinfo'] = 'Отображение таблицы отчета в виде: простой HTML-таблицы с прокруткой, библиотеки jQuery  со столбцом сортировки или библиотеки DataTables JS (столбец сортировки, фиксированный заголовок, поиск, разбивка на страницы ...)';
$string['report_timeline'] = 'Отчет по времени';
$string['report_users'] = 'Отчет по пользователям';
$string['repository'] = 'Репозиторий отчетов';
$string['repository_help'] = 'Вы можете импортировать образцы отчетов из общего хранилища.

Пожалуйста, обратите внимание, что есть дневной лимит обращения к репозиторию.

Если подключение к хранилищу не работает, Вы можете вручную <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">скачать здесь отчет</a>, а затем импортировать его при помощи функции «Импорт отчета», отображаемой ниже.';
$string['role'] = 'Роль';
$string['roleincourse'] = 'Пользователь с указанной ролью в текущем курсе';
$string['roleusersn'] = 'Число пользователей с ролью ...';
$string['searchtext'] = 'Текст для поиска';
$string['semester'] = 'Семестр (иврит)';
$string['serieid'] = 'Столбец Серия';
$string['setcourseid'] = 'Выбор ID курса';
$string['sharedsqlrepository'] = 'Репозиторий общих SQL';
$string['sharedsqlrepositoryinfo'] = 'С именем владельца аккаунта GitHub + слэш + имя репозитория';
$string['sqlsecurity'] = 'Безопасный SQL';
$string['sqlsecurityinfo'] = 'Отключить выполнение SQL-запросов с предложениями для вставки данных (владелец аккаунта GitHub + слэш + имя репозитория)';
$string['sqlsyntaxhighlight'] = 'Подсветка синтаксиса SQL';
$string['sqlsyntaxhighlightinfo'] = 'Выделение синтаксиса SQL в редакторе кода (javascript библиотека CodeMirror)';
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
$string['template_marks'] = 'Знаки шаблона';
$string['template_marks_help'] = '<p> Вы можете использовать любой из этих подстановочных знаков: </p>

<ul>
<li>##reportname## - для включения названия отчета</li>
<li>##reportsummary## - для включения краткого отчета</li>
<li>##graphs## - для включения графиков</li>
<li>##exportoptions## - для включения опции экспорта</li>
<li>##calculationstable## - для включения таблицы расчетов</li>
<li>##pagination## - для включения разбивки на страницы </li>

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
$string['usersincohorts'] = 'Пользователи, которые являются членами глобальной группы';
$string['usersincohorts_summary'] = 'Только пользователи, которые являются членами выбранных(ой) глобальных(ой) групп(ы)';
$string['usersincoursereport'] = 'Любой пользователь курса';
$string['usersincoursereport_summary'] = 'Любой пользователь текущего курса';
$string['usersincurrentcourse'] = 'Пользователи этого курса с указанной ролью';
$string['usersincurrentcourse_summary'] = 'Пользователи текущего курса, которым назначена указанная роль';
$string['userstats'] = 'Статистика по пользователю';
$string['value'] = 'Значение';
$string['viewreport'] = 'Просмотр отчета';
$string['xaxis'] = 'Ось X';
$string['yaxis'] = 'Ось Y';
$string['yearhebrew'] = 'Год (на иврите)';
$string['yearnumeric'] = 'Год (числовой)';
$string['years'] = 'Год (числовой)';
$string['youmustselectarole'] = 'Необходимо выбрать хотя бы одну роль';
