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
 * Strings for component 'tool_health', language 'en', version '4.4'.
 *
 * @package     tool_health
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_loop_parents'] = 'The following categories form a loop of parents:';
$string['category_missing_parents'] = 'The following categories are missing their parents:';
$string['healthnoproblemsfound'] = 'No health problems were found!';
$string['healthproblemsdetected'] = 'Health problems detected!';
$string['healthproblemsolution'] = 'Health problem solution';
$string['healthreturntomain'] = 'Continue';
$string['healthsolution'] = 'Solution';
$string['pluginname'] = 'Health center';
$string['privacy:metadata'] = 'The Health center plugin does not store any personal data.';
$string['problem_000002_description'] = 'Your Moodle configuration file config.php or another library file, contains some characters after the closing PHP tag (?>). This causes Moodle to exhibit several kinds of problems (such as broken downloaded files) and must be fixed.';
$string['problem_000002_solution'] = 'You need to edit {$a}/config.php and remove all characters (including spaces and returns) after the ending ?> tag. These two characters should be the very last in that file. The extra trailing whitespace may be also present in other PHP files that are included from lib/setup.php.';
$string['problem_000002_title'] = 'Extra characters at the end of config.php or other library function';
$string['problem_000003_description'] = 'Your config.php says that your "data root" directory is {$a}. However, this directory either does not exist or cannot be written to by Moodle. This means that a variety of problems will be present, such as users not being able to log in and not being able to upload any files. It is imperative that you address this problem for Moodle to work correctly.';
$string['problem_000003_solution'] = 'First of all, make sure that the directory {$a} exists. If the directory does exist, then you must make sure that Moodle is able to write to it. Contact your web server administrator and request that he gives write permissions for that directory to the user that the web server process is running as.';
$string['problem_000003_title'] = '$CFG->dataroot does not exist or does not have write permissions';
$string['problem_000004_description'] = 'The cron.php mainenance script has not been run in the expected interval, the interval can be defined over $CFG->expectedcronfrequency. This probably means that your server is not configured to automatically run this script in regular time intervals. If this is the case, then Moodle will mostly work as it should but some operations (notably sending email to users) will not be carried out at all.';
$string['problem_000004_link_cron'] = 'Cron - MoodleDocs';
$string['problem_000004_solution'] = 'For detailed instructions on how to enable cron, see the links below.';
$string['problem_000004_title'] = 'cron.php is not set up to run automatically';
$string['problem_000005_description'] = 'Your PHP configuration includes an enabled setting, session.auto_start, that must be disabled in order for Moodle to work correctly. Notable symptoms arising from this misconfiguration include fatal errors and/or blank pages when trying to log in.';
$string['problem_000005_solution'] = 'There are two ways you can solve this problem:';
$string['problem_000005_solution_step_one'] = 'If you have access to your main php.ini file, then find the line that looks like this: "session.auto_start = 1" and change it to "session.auto_start = 0" and then restart your web server. Be warned that this, as any other PHP setting change, might affect other web applications running on the server.';
$string['problem_000005_solution_step_two'] = 'Finally, you may be able to change this setting just for your site by creating or editing the file {$a}/.htaccess to contain this line: "php_value session.auto_start 0"';
$string['problem_000005_title'] = 'PHP: session.auto_start is enabled';
$string['problem_000007_description'] = 'Your PHP configuration includes a disabled setting, file_uploads, that must be enabled to let Moodle offer its full functionality. Until this setting is enabled, it will not be possible to upload any files into Moodle. This includes, for example, course content and user pictures.';
$string['problem_000007_solution'] = 'There are two ways you can solve this problem:';
$string['problem_000007_solution_step_one'] = 'If you have access to your main php.ini file, then find the line that looks like this: "file_uploads = Off" and change it to "file_uploads = On" and then restart your web server. Be warned that this, as any other PHP setting change, might affect other web applications running on the server.';
$string['problem_000007_solution_step_two'] = 'Finally, you may be able to change this setting just for your site by creating or editing the file {$a}/.htaccess to contain this line: "php_value file_uploads On"';
$string['problem_000007_title'] = 'PHP: file_uploads is disabled';
$string['problem_000008_description'] = 'The settings for PHP on your server do not allow a script to request more memory during its execution. This means that there is a hard limit of {$a} for each script. It is possible that certain operations within Moodle will require more than this amount in order to complete successfully, especially if there are lots of data to be processed.';
$string['problem_000008_solution'] = 'It is recommended that you contact your web server administrator to address this issue.';
$string['problem_000008_title'] = 'PHP: memory_limit cannot be controlled by Moodle';
$string['problem_000009_description'] = 'The user account your are connecting to the database server with is set up without a password. This is a very big security risk and is only somewhat lessened if your database is configured to not accept connections from any hosts other than the server Moodle is running on. Unless you use a strong password to connect to the database, you risk unauthorized access to and manipulation of your data.';
$string['problem_000009_description_root'] = 'This is especially alarming because such access to the database would be as the superuser (root)!';
$string['problem_000009_solution'] = 'You should change the password of the user {$a} both in your database and in your Moodle config.php immediately!';
$string['problem_000009_solution_root'] = 'It would also be a good idea to change the user account from root to something else, because this would lessen the impact in the event that your database is compromised anyway.';
$string['problem_000009_title'] = 'SQL: using account without password';
$string['problem_000012_description'] = 'For random questions, question.parent should equal question.id. There are some questions in your database for which this is not true. One way that this could have happened is for random questions restored from backup before MDL-5482 was fixed.';
$string['problem_000012_solution'] = 'Upgrade to Moodle 1.9.1 or later, or manually execute the SQL';
$string['problem_000012_title'] = 'Random questions data consistency';
$string['problem_000014_description'] = 'You have questions that violate this in your databse. You will need to investigate to determine how this happened.';
$string['problem_000014_link_cron'] = 'Quiz forum';
$string['problem_000014_solution'] = 'It is impossible to give a solution without knowing more about how the problem was caused. You may be able to get help from the Quiz forum.';
$string['problem_000014_title'] = 'Only multianswer and random questions should be the parent of another question';
$string['problem_000016_description'] = 'When one question category is the parent of another, then they should both belong to the same context. This is not true for the following categories:';
$string['problem_000016_description_child'] = 'Child category';
$string['problem_000016_description_context'] = 'Context ID';
$string['problem_000016_description_id'] = 'ID';
$string['problem_000016_description_name'] = 'Name';
$string['problem_000016_description_parent'] = 'Parent category';
$string['problem_000016_link_cron'] = 'Quiz forum';
$string['problem_000016_solution'] = 'An automated solution is difficult. It depends whether the parent or child category is in the wrong place. People in the Quiz forum may be able to help.';
$string['problem_000016_title'] = 'Question categories should belong to the same context as their parent';
$string['problem_000017_description'] = 'The question categories should be arranged into tree structures by the question_categories.parent field. Sometimes this tree structure gets messed up.';
$string['problem_000017_solution'] = 'Consider executing the following SQL queries. These fix the problem by moving some categories to the top level.';
$string['problem_000017_title'] = 'Question categories tree structure';
$string['problem_000018_description'] = 'The course categories should be arranged into tree structures by the course_categories.parent field. Sometimes this tree structure gets messed up.';
$string['problem_000018_solution'] = 'Consider executing the following SQL queries. These fix the problem by moving some categories to the top level.';
$string['problem_000018_title'] = 'Course categories tree structure';
