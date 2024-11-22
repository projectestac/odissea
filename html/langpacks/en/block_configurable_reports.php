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
 * Strings for component 'block_configurable_reports', language 'en', version '4.1'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Activity posts';
$string['activityview'] = 'Activity views';
$string['add'] = 'Add';
$string['addreport'] = 'Add report';
$string['allowedsqlusers'] = 'SQL report users';
$string['allowedsqlusersinfo'] = 'If you wish to only allow certain admin users to manage sql reports, add a list of usernames separated by commas. They must also have the block/configurable_reports:managesqlreports capability.';
$string['anyone'] = 'Anyone';
$string['anyone_summary'] = 'Any user in the Campus will be able to view this report';
$string['availablemarks'] = 'Available marks';
$string['average'] = 'Average';
$string['badconditionexpr'] = 'Incorrect condition expression';
$string['badsize'] = 'Incorrect size, it must be in &#37; or px';
$string['badtablewidth'] = 'Incorrect width, it must be in &#37; or absolute value';
$string['bar'] = 'Bar';
$string['barsummary'] = 'A bar graph';
$string['blockname'] = 'Configurable Reports';
$string['calcs'] = 'Calculations';
$string['categories'] = 'Categories';
$string['categoryfield'] = 'Category field';
$string['categoryfieldorder'] = 'Category field order';
$string['ccoursefield'] = 'Course field condition';
$string['cellalign'] = 'Cell align';
$string['cellsize'] = 'Cell size';
$string['cellwrap'] = 'Cell wrap';
$string['checksql_execution'] = 'Block Configurable Reports SQL execution';
$string['checksql_execution_details'] = 'By allowing SQL code execution there is a potential security issue with users adding
arbitrary code. SQL code execution should be disable to only allow SQL queries for reading/retreaving data. SQL execution can
be disabled in your config.php file by setting $CFG->block_configurable_reports_enable_sql_execution to 0';
$string['checksql_execution_ok'] = 'SQL execution is disabled.';
$string['checksql_execution_warning'] = 'It is recommended to disable SQL execution to avoid execution of arbitrary SQL code in
your server.';
$string['cohorts'] = 'Cohorts';
$string['column'] = 'Column';
$string['columnandcellproperties'] = 'Column and cell properties';
$string['columncalculations'] = 'Column Calculations';
$string['columns'] = 'Columns';
$string['comp_calcs'] = 'Calcs';
$string['comp_calcs_help'] = '<p>Here you can add calculations for columns, i.e: average of number of users enrolled in courses</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Calcs';
$string['comp_calculations_help'] = '<p>Here you can add calculations for columns, i.e: average of number of users enrolled in courses</p>';
$string['comp_columns'] = 'Columns';
$string['comp_columns_help'] = '<p>Here you can choose the different columns of your report depending on the type of report</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_conditions'] = 'Conditions';
$string['comp_conditions_help'] = '<p>Here you can define the conditions (i.e, only courses from this category, only users from Spain, etc.. </p>

<p>You can add a logical expression if you are using more than one condition.</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_customsql'] = 'Custom SQL';
$string['comp_customsql_help'] = '<p>Add a working SQL query. Do no use the moodle database prefix $CFG->prefix instead use "prefix_" without quotes</p>
<p>Example: SELECT * FROM prefix_course</p>

<p>You can find a lot of SQL Reports here: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p>

<p>An updated layout of Moodle\'s tables and their interconnected relations: <a href="https://docs.moodle.org/dev/Database_Schema" target="_blank">Database schema</a></p>

<p>Since this block supports Tim Hunt\'s CustomSQL Queries Reports, you can use any query.</p>

<p>Remember to add a "Time filter" if you are going to use reports with time tokens. </p>

<p>For using filters see: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>';
$string['comp_filters'] = 'Filters';
$string['comp_filters_help'] = '<p>Here you can choose which filters will be displayed</p>

<p>A filter lets an user to choose columns from the report to filter the report results</p>

<p>For using filters if your report type is SQL see: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_ordering'] = 'Ordering';
$string['comp_ordering_help'] = '<p>Here you can choose how to order the report using fields and directions</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_permissions'] = 'Permissions';
$string['comp_permissions_help'] = '<p>Here you can choose who can view a report.</p>

<p>You can add a logical expression to calculate the final permission if you are using more than one condition.</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_plot'] = 'Plot';
$string['comp_plot_help'] = '<p>Here you can add graphs to your report based on the report columns and values</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_template'] = 'Template';
$string['comp_template_help'] = '<p>You can modify the report\'s layout by creating a template</p>

<p>For creating a template see the replacemnet marks you can use in header, footer and for each report record using the help buttons or the information displayed in the same page.</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['competencyframeworks'] = 'Competency Frameworks';
$string['competencytemplates'] = 'Competency Templates';
$string['componenthelp'] = 'Component help';
$string['conditionexpr'] = 'Condition';
$string['conditionexpr_conditions'] = 'Condition';
$string['conditionexpr_conditions_help'] = '<p>You can combine conditions using a logic expression</p>

<p>Enter a valid logic expression with these operators: and, or.</p>';
$string['conditionexpr_permissions'] = 'Condition';
$string['conditionexpr_permissions_help'] = '<p>You can combine conditions using a logic expression</p>

<p>Enter a valid logic expression with these operators: and, or.</p>';
$string['conditionexprhelp'] = 'Enter a valid condition i.e: (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Conditions';
$string['configurable_reports:addinstance'] = 'Add a new configurable reports block';
$string['configurable_reports:manageownreports'] = 'Manage own reports';
$string['configurable_reports:managereports'] = 'Manage reports';
$string['configurable_reports:managesqlreports'] = 'Manage SQL reports';
$string['configurable_reports:myaddinstance'] = 'Add a new configurable reports block to MY HOME page';
$string['configurable_reports:viewreports'] = 'View reports';
$string['confirmdeletereport'] = 'Are you sure you want to delete this report?';
$string['coursecategories'] = 'Category course filter';
$string['coursecategory'] = 'Course in category';
$string['coursechild'] = 'Courses that are children of';
$string['coursededicationtime'] = 'Course dedication time';
$string['coursefield'] = 'Course field';
$string['coursefieldorder'] = 'Course field order';
$string['coursemodules'] = 'Course module';
$string['courseparent'] = 'Courses whose parent is';
$string['courses'] = 'Courses';
$string['coursestats'] = 'Course stats';
$string['cron'] = 'Auto run daily';
$string['cron_help'] = 'Schedule this query to run each day (At night)';
$string['crondescription'] = 'Schedule this query to run each day (At night)';
$string['crrepository'] = 'Reports repository';
$string['crrepositoryinfo'] = 'Remote shared repository with sample reports fully functional (Name of GitHub account owner + slash + repository name)';
$string['csvdelimiter'] = 'CSV delimiter';
$string['csvdelimiterinfo'] = 'CSV delimiter: "colon" for ":", "comma" for ",", semicolon for ";",  "tab" for "\\t" and "cfg" for character configured in "CFG->CSV_DELIMITER" of the config.php file.';
$string['currentreportcourse'] = 'Current report course';
$string['currentreportcourse_summary'] = 'The course where the report has been created';
$string['currentuser'] = 'Current user';
$string['currentuser_summary'] = 'The user that is viewing the report';
$string['currentusercourses'] = 'Current user enrolled courses';
$string['currentusercourses_summary'] = 'A list of the current users courses (only visible courses)';
$string['currentuserfinalgrade'] = 'Current user final grade in course';
$string['currentuserfinalgrade_summary'] = 'This column shows the final grade of the current user in the row-course';
$string['cuserfield'] = 'User field condition';
$string['custom'] = 'Custom';
$string['customdateformat'] = 'Custom date format';
$string['customsql'] = 'Custom SQL';
$string['datatables'] = 'Enable DataTables JS library';
$string['datatables_emptytable'] = 'No data available in table';
$string['datatables_first'] = 'First';
$string['datatables_info'] = 'Showing _START_ to _END_ of _TOTAL_ entries';
$string['datatables_infoempty'] = 'Showing 0 to 0 of 0 entries';
$string['datatables_infofiltered'] = '(filtered from _MAX_ total entries)';
$string['datatables_last'] = 'Last';
$string['datatables_lengthmenu'] = 'Show _MENU_ entries';
$string['datatables_loadingrecords'] = 'Loading...';
$string['datatables_next'] = 'Next';
$string['datatables_previous'] = 'Previous';
$string['datatables_processing'] = 'Processing...';
$string['datatables_search'] = 'Search:';
$string['datatables_sortascending'] = ': activate to sort column ascending';
$string['datatables_sortdescending'] = ': activate to sort column descending';
$string['datatables_zerorecords'] = 'No matching records found';
$string['datatablesinfo'] = 'DataTables JS library (Column sort, fixed header, search, paging...)';
$string['date'] = 'Date';
$string['dateformat'] = 'Date format';
$string['dbhost'] = 'DB Host';
$string['dbhostinfo'] = 'Remote Database host name (on which, we will be executing our SQL queries)';
$string['dbname'] = 'DB Name';
$string['dbnameinfo'] = 'Remote Database name (on which, we will be executing our SQL queries)';
$string['dbpass'] = 'DB Password';
$string['dbpassinfo'] = 'Remote Database password (for above username)';
$string['dbuser'] = 'DB Username';
$string['dbuserinfo'] = 'Remote Database username (should have SELECT privileges on above DB)';
$string['decimals'] = 'Number of decimals';
$string['description'] = 'Description';
$string['description_help'] = 'Text used to describe the filter that will be displayed in the summary on the filters page.';
$string['direction'] = 'Direction';
$string['disabled'] = 'Disabled';
$string['displayglobalreports'] = 'Display global reports';
$string['displayprintbutton'] = 'Print Button';
$string['displayprintbuttondescription'] = 'Displays the print button at the bottom of the report';
$string['displayreportslist'] = 'Display the reports list in the block body';
$string['displaytotalrecords'] = 'Total Records';
$string['displaytotalrecordsdescription'] = 'Displays the total number of results in the report';
$string['donotshowtime'] = 'Do not show date information';
$string['download'] = 'Download';
$string['downloadreport'] = 'Download report';
$string['email_message'] = 'Message';
$string['email_send'] = 'Send';
$string['email_subject'] = 'Subject';
$string['embedlink'] = 'Embed Link';
$string['embedlinkdescription'] = 'You can copy this link to embed the report in an HTML block';
$string['embedoptions'] = 'Embed options';
$string['enabled'] = 'Enabled';
$string['enableglobal'] = 'This is a global report (accesible from any course)';
$string['enablejsordering'] = 'Enable JavaScript ordering';
$string['enablejspagination'] = 'Enable JavaScript Pagination';
$string['endtime'] = 'End date';
$string['enrolledstudents'] = 'Enrolled students';
$string['error_field'] = 'Field not allowed';
$string['error_operator'] = 'Operator not allowed';
$string['error_value_expected_integer'] = 'Expected integer value';
$string['excludedeletedusers'] = 'Exclude deleted users (only for SQL reports)';
$string['executeat'] = 'Execute at';
$string['executeatinfo'] = 'Moodle CRON will run scheduled SQL queries after selected time. Once in 24h';
$string['export_csv'] = 'Export in CSV format';
$string['export_json'] = 'Export in JSON format';
$string['export_ods'] = 'Export in ODS format';
$string['export_slk'] = 'Export in SYLK format';
$string['export_xls'] = 'Export in XLS format';
$string['exportoptions'] = 'Export options';
$string['exportreport'] = 'Export report';
$string['fcoursefield'] = 'Course field filter';
$string['field'] = 'Field';
$string['filter'] = 'Filter';
$string['filter_all'] = 'All';
$string['filter_apply'] = 'Apply';
$string['filter_searchtext'] = 'Search text';
$string['filter_searchtext_summary'] = 'Free text filter';
$string['filtercategories'] = 'Filter categories';
$string['filtercategories_summary'] = 'To filter by category';
$string['filtercohorts'] = 'Cohorts';
$string['filtercohorts_summary'] = 'Use: %%FILTER_COHORTS:prefix_cohort.id%%';
$string['filtercompetencyframeworks'] = 'Competency Frameworks';
$string['filtercompetencyframeworks_summary'] = 'Use: %%FILTER_COMPETENCYFRAMEWORKS:prefix_competency_framework.id%%';
$string['filtercompetencytemplates'] = 'Competency templates';
$string['filtercompetencytemplates_summary'] = 'Use: %%FILTER_COMPETENCYTEMPLATES:prefix_competency_template.id%%';
$string['filtercoursecategories'] = 'Category course filter';
$string['filtercoursecategories_summary'] = 'Filter courses by their any parent category';
$string['filtercoursemodules'] = 'Course module';
$string['filtercoursemodules_summary'] = 'Filter course modules';
$string['filtercourses'] = 'Courses';
$string['filtercourses_summary'] = 'This filter shows a list of courses. Only one course can be selected at the same time';
$string['filterenrolledstudents'] = 'Enrolled course students';
$string['filterenrolledstudents_summary'] = 'Filter a user (by id) from enrolled course students';
$string['filterrole'] = 'role';
$string['filterrole_summary'] = 'Filter system Roles (Teacher, Student, ...)';
$string['filters'] = 'Filters';
$string['filtersemester'] = 'Semester (Hebrew)';
$string['filtersemester_list'] = 'סמסטר א,סמסטר ב,סמסטר ג,סמינריון';
$string['filtersemester_summary'] = 'מאפשר סינון לפני סמסטרים (בעברית, למשל: סמסטר א,סמסטר ב)';
$string['filterstartendtime_summary'] = 'Start / End date filter';
$string['filtersubcategories'] = 'Category (Include sub categories)';
$string['filtersubcategories_summary'] = 'Use: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Current course user';
$string['filteruser_summary'] = 'Filter a user (id) from current course users';
$string['filterusers'] = 'System user';
$string['filterusers_summary'] = 'Filter a user (by id) from system user list';
$string['filteryearhebrew'] = 'Year (Hebrew)';
$string['filteryearhebrew_list'] = 'תשע,תשעא,תשעב,תשעג,תשעד,תשעה';
$string['filteryearhebrew_summary'] = 'Filter is using Hebrew years (תשעג,...)';
$string['filteryearnumeric'] = 'Year (Numeric)';
$string['filteryearnumeric_summary'] = 'Filter is using numeric years (2013,...)';
$string['filteryears'] = 'Year (Numeric)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filter by years (numeric representation, 2012...)';
$string['finalgradeincurrentcourse'] = 'Final grade in current course';
$string['fixeddate'] = 'Fixed date';
$string['footer'] = 'Footer';
$string['forcemidnight'] = 'Force midnight';
$string['fsearchuserfield'] = 'User field search box';
$string['fuserfield'] = 'User field filter';
$string['generalcolorpalette'] = 'Unmapped Palette';
$string['generalcolorpalette_help'] = 'Hexadecimal color codes for general use in the pie chart. Codes should be separated
by new lines in the order you wish them to be used in the pie chart.';
$string['generalcolorpaletteheader'] = 'General color palette';
$string['global'] = 'Global report';
$string['global_help'] = 'Global report can be accessed from any course in the platform just appending &courseid=MY_COURSE_ID in the report URL';
$string['globalstatsshouldbeenabled'] = 'Site statistics must be enabled. Go to Admin -> Server -> Statistics';
$string['groupseries'] = 'Group series';
$string['groupvalues'] = 'Group same values (sum)';
$string['head_color'] = 'Graph background color';
$string['head_data'] = 'Graph data';
$string['head_size'] = 'Graph size';
$string['header'] = 'Header';
$string['height'] = 'Height';
$string['idnumber'] = 'ID Number';
$string['idnumber_help'] = 'Used to differentiate between filters of the same type. Case-sensitive.
Example usage: %%FILTER_SEARCHTEXT_username:u.username:~%%';
$string['importfromrepository'] = 'Import report from repository';
$string['importreport'] = 'Import report';
$string['includesubcats'] = 'Include subcategories';
$string['invalidcolorcode'] = 'Invalid color code';
$string['jsordering'] = 'JavaScript Ordering';
$string['jsordering_help'] = 'JavaScript Ordering allow you to order the report table without reloading the page';
$string['label'] = 'Label';
$string['label_field'] = 'Label field';
$string['label_field_help'] = 'The field that provides names for the things represented in the graph';
$string['label_help'] = 'Text describing the filter to be displayed on the report page.';
$string['lastexecutiontime'] = 'Execution time = {$a} (Sec)';
$string['legacylognotenabled'] = 'Legacy logs must be enabled.
 Go to Site administration / Plugins / Logging Enable the Legacy log and inside the log settings check Log legacy data';
$string['legendheader'] = 'Mapped Palette';
$string['legendheaderdesc'] = 'Map color codes to specific keys in the pie chart legend.';
$string['limitcategories'] = 'Limit categories in a graph';
$string['line'] = 'Line graph';
$string['linesummary'] = 'A line graph with multiple series of data';
$string['listofsqlreports'] = 'Press F11 when cursor is in the editor to toggle full screen editing. Esc can also be used to exit
full screen editing.<br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">List of SQL Contributed reports</a>';
$string['managereports'] = 'Manage reports';
$string['max'] = 'Maximum';
$string['min'] = 'Minimum';
$string['missingcolumn'] = 'A column is required';
$string['module'] = 'Module';
$string['newreport'] = 'New report';
$string['nocalcsyet'] = 'No calculations yet';
$string['nocolumnsyet'] = 'No columns yet';
$string['noconditionsyet'] = 'No conditions yet';
$string['noexplicitprefix'] = 'No explicit prefix';
$string['nofiltersyet'] = 'No filters yet';
$string['nofilteryet'] = 'No filters yet';
$string['noorderingyet'] = 'No ordering yet';
$string['nopermissionsyet'] = 'No permissions yet';
$string['noplotyet'] = 'No plots yet';
$string['norecordsfound'] = 'No records found';
$string['noreportsavailable'] = 'No reports available';
$string['norowsreturned'] = 'No rows returned';
$string['nosemicolon'] = 'No semicolon';
$string['notallowedwords'] = 'Not allowed words';
$string['operator'] = 'Operator';
$string['ordering'] = 'Ordering';
$string['others'] = 'Others';
$string['pagination'] = 'Pagination';
$string['pagination_help'] = 'Number of records to show in each page. Zero means no pagination';
$string['parentcategory'] = 'Parent category';
$string['percent'] = 'Percentage';
$string['permissions'] = 'Permissions';
$string['pie'] = 'Pie';
$string['pieareaname'] = 'Name';
$string['pieareavalue'] = 'Value';
$string['piechart_add_colors'] = 'Add color';
$string['piechart_label'] = 'Key - {$a}';
$string['piechart_label_color'] = 'Color - {$a}';
$string['piesummary'] = 'A pie graph';
$string['plot'] = 'Plot - Graphs';
$string['pluginname'] = 'Configurable Reports';
$string['previousdays'] = 'Previous days';
$string['previousend'] = 'Previous end';
$string['previousstart'] = 'Previous start';
$string['printreport'] = 'Print report';
$string['privacy:metadata:block_configurable_reports'] = 'The configurable reports block contains customizable course reports.';
$string['privacy:metadata:block_configurable_reports:components'] = 'The configuration of the report. It contains the query,
 the filters...';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'Course ID';
$string['privacy:metadata:block_configurable_reports:global'] = 'Whether the report is accessible from all the courses or not';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'Time this report took to run last time it was executed,
 in milliseconds.';
$string['privacy:metadata:block_configurable_reports:name'] = 'The name of the report';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'The ID of the user who created the report';
$string['privacy:metadata:block_configurable_reports:summary'] = 'The description of the report';
$string['privacy:metadata:block_configurable_reports:type'] = 'The type of the report';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Whether the report is visible or not';
$string['puserfield'] = 'User field value';
$string['puserfield_summary'] = 'User with the selected value in the selected field';
$string['queryfailed'] = 'Query failed <code><pre>{$a}</pre></code>';
$string['querysql'] = 'SQL Query';
$string['remote'] = 'Run on remote db';
$string['remote_help'] = 'Do you want to run this query on the remote db';
$string['remotedescription'] = 'Do you want to run this query on the remote db';
$string['remotequerysql'] = 'SQL query';
$string['report'] = 'Report';
$string['report_categories'] = 'Categories report';
$string['report_courses'] = 'Courses report';
$string['report_sql'] = 'SQL Report';
$string['report_timeline'] = 'Timeline report';
$string['report_users'] = 'Users report';
$string['reportcategories'] = '1) Choose a remote report categories';
$string['reportcolumn'] = 'Other report column';
$string['reportcreated'] = 'Report successfully created';
$string['reportlimit'] = 'Report row limit';
$string['reportlimitinfo'] = 'Limit the number of rows that are displayed in the report table
    (Default is 5000 rows. Better to have some limit, so users will not over load the DB engine)';
$string['reports'] = 'Reports';
$string['reportscapabilities'] = 'Report Capabilities';
$string['reportscapabilities_summary'] = 'Users with the capability moodle/site:viewreports enabled';
$string['reportsincategory'] = '2) Choose a report form the list';
$string['reporttable'] = 'Report table';
$string['reporttable_help'] = '<p>This is the width of the table that will display the report records.</p>

<p>If you use a Template this option has no effect</p>';
$string['reporttableui'] = 'Report table UI';
$string['reporttableuiinfo'] = 'Display the report table as: Simple scrollable HTML table, jQuery with column sorting Or
DataTables JS library (Column sort, fixed header, search, paging...)';
$string['repository'] = 'Reports repository';
$string['repository_help'] = 'You can import sample reports from a public shared repository.

Please, notice that there is a daily limit of calls to the repository.

If the connection to the repository is not working, you can download manually here <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> a report and then import it using the "Import report" feature displayed bellow';
$string['role'] = 'Role';
$string['roleincourse'] = 'User with the selected role/s in the current report course';
$string['roleusersn'] = 'Number of users with role...';
$string['searchtext'] = 'Search text';
$string['semester'] = 'Semester (Hebrew)';
$string['serieid'] = 'Serie column';
$string['sessionlimittime'] = 'Limit between clicks (in minutes)';
$string['sessionlimittime_help'] = 'The limit between clicks defines if two clicks are part of the same session or not';
$string['setcourseid'] = 'Set courseid';
$string['sharedsqlrepository'] = 'Shared sql repository';
$string['sharedsqlrepositoryinfo'] = 'Name of GitHub account owner + slash + repository name';
$string['sqlsecurity'] = 'SQL Security';
$string['sqlsecurityinfo'] = 'Disable for executing SQL queries with statements for inserting data';
$string['sqlsyntaxhighlight'] = 'Highlight SQL syntax';
$string['sqlsyntaxhighlightinfo'] = 'Highlight SQL syntax in code editor (CodeMirror JS library)';
$string['startendtime'] = 'Start / End date filter';
$string['starttime'] = 'Start date';
$string['stat'] = 'Statistic';
$string['statsactiveenrolments'] = 'Active (last week) enrolments';
$string['statslogins'] = 'Logins in the platform';
$string['statstotalenrolments'] = 'Total enrolments';
$string['student'] = 'Student';
$string['subcategories'] = 'Category (Include sub categories)';
$string['sum'] = 'Sum';
$string['tablealign'] = 'Table align';
$string['tablecellpadding'] = 'Table cellpadding';
$string['tablecellspacing'] = 'Table cellspacing';
$string['tableclass'] = 'Table class';
$string['tablewidth'] = 'Table width';
$string['template'] = 'Template';
$string['template_marks'] = 'Template marks';
$string['template_marks_help'] = '<p>You can use any of this replacement marks:</p>

<ul>
<li>##reportname## - For including the report name</li>
<li>##reportsummary## - For including the reports summary</li>
<li>##graphs## - For including the graphs</li>
<li>##exportoptions## - For including the export options</li>
<li>##calculationstable## - For including the calculations table</li>
<li>##pagination## - For including the pagination </li>

</ul>';
$string['templaterecord'] = 'Record template';
$string['timeinterval'] = 'Time interval';
$string['timeline'] = 'Timeline';
$string['timemode'] = 'Time mode';
$string['totalrecords'] = 'Total record count = {$a->totalrecords}';
$string['type'] = 'Type of report';
$string['typeofreport'] = 'Type of report';
$string['typeofreport_help'] = 'Choose the type of report you want to create.
For security, SQL Report requires an additional capability';
$string['user'] = 'Course user (id)';
$string['usercompletion'] = 'User course completion status';
$string['usercompletionsummary'] = 'Course completion status';
$string['userfield'] = 'User profile field';
$string['userfieldorder'] = 'User field order';
$string['usermodactions'] = 'User module actions';
$string['usermodoutline'] = 'User module outline stats';
$string['users'] = 'System user (id)';
$string['usersincohorts'] = 'User who are member of a/several cohorts';
$string['usersincohorts_summary'] = 'Only the users who are members of the selected cohorts';
$string['usersincoursereport'] = 'Any user in the current report course';
$string['usersincoursereport_summary'] = 'Any user in the current report course';
$string['usersincurrentcourse'] = 'Users in current report course';
$string['usersincurrentcourse_summary'] = 'Users with the role/s selected in the report course';
$string['userstats'] = 'User statistics';
$string['value'] = 'Value';
$string['value_fields'] = 'Value fields';
$string['value_fields_help'] = 'Fields that should be represented in the graph. Ctrl+click (Cmd+click on Mac) to select multiple.
If you select the Label field or a field with non-numeric values it will be ignored';
$string['viewreport'] = 'View report';
$string['width'] = 'Width';
$string['xandynotequal'] = 'X and Y axis need to be different';
$string['xaxis'] = 'X Axis';
$string['yaxis'] = 'Y Axis';
$string['yearhebrew'] = 'Year (Hebrew)';
$string['yearnumeric'] = 'Year (Numeric)';
$string['years'] = 'Year (Numeric)';
$string['youmustselectarole'] = 'At least a role is required';
