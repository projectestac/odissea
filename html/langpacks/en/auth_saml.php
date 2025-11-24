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
 * Strings for component 'auth_saml', language 'en', version '4.5'.
 *
 * @package     auth_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_attrmapping_head'] = 'Sometimes the names of the attributes sent by the IdP dont match the names used by Moodle for the user accounts. In this section we can set the mapping between IdP fields and Moodle fields.';
$string['auth_saml_autologin'] = 'SAML automatic login';
$string['auth_saml_autologin_description'] = 'Automatically redirect to SAML IdP without showing a login form.';
$string['auth_saml_check_mapping_duplicates'] = 'Find course mapping duplicates';
$string['auth_saml_course_mapping_dsn'] = 'Course dsn';
$string['auth_saml_course_mapping_sql'] = 'Course sql';
$string['auth_saml_course_not_found'] = 'Course saml {\\$a->course} not found for the saml user {\\$a->user}\\n';
$string['auth_saml_coursemapping'] = 'Course Mapping';
$string['auth_saml_coursemapping_head'] = 'The IdP can use it\'s own course shortname/idnumber. Set in this section the mapping between IdP and Moodle courses. Accepts multiple valued comma separated.';
$string['auth_saml_courses'] = 'SAML course mapping';
$string['auth_saml_courses_description'] = 'SAML attribute that contains courses data';
$string['auth_saml_db_reset_button'] = 'Reset values to factory settings';
$string['auth_saml_db_reset_error'] = 'Error resetting the saml plugin values';
$string['auth_saml_disable_debugdisplay'] = '* Disable debugdisplay in order to hide errors in the login/enrollment process';
$string['auth_saml_disablejit'] = 'Disable Just-in-time provisioning';
$string['auth_saml_disablejit_description'] = 'Check it in order to disable the just-in-time provisioning. When JIT is disabled, account will be not created.';
$string['auth_saml_dontdisplaytouser'] = 'Don\'t display enrollment error message to user';
$string['auth_saml_dontdisplaytouser_description'] = 'By default, if a course/role/status provided by the IdP was not able to be mapped to a Moodle object, a warning message appers to the user. Enable this flag to prevent this';
$string['auth_saml_dosinglelogout'] = 'Single logout';
$string['auth_saml_dosinglelogout_description'] = 'Check it to enable the single logout. This will log out you from Moodle, the identity provider and all connected service providers.';
$string['auth_saml_duplicated_lms_data'] = 'The following lms data is duplicated:';
$string['auth_saml_duplicated_saml_data'] = 'The following saml data is duplicated:';
$string['auth_saml_error_attribute_course_mapping'] = 'Error in attribute names (index) of course table mapping. Check externalcoursemappingsql syntax';
$string['auth_saml_error_attribute_role_mapping'] = 'Error in attribute names (index) of role table mapping. Check externalrolemappingsql syntax';
$string['auth_saml_error_authentication_process'] = 'Error in authentication process of {\\$a}';
$string['auth_saml_error_complete_user_data'] = 'Failed to complete user data of {\\$a}';
$string['auth_saml_error_complete_user_login'] = 'Failed to complete user login of {\\$a}';
$string['auth_saml_error_creating_course_mapping'] = 'Error creating course_mapping in moodle database';
$string['auth_saml_error_creating_role_mapping'] = 'Error creating role_mapping in moodle database';
$string['auth_saml_error_executing'] = 'Error executing';
$string['auth_saml_error_executing_course_mapping_query'] = 'Error executing the course mapping query';
$string['auth_saml_error_executing_role_mapping_query'] = 'Error executing the role mapping query';
$string['auth_saml_error_role_not_found'] = 'Error when enrolling. Role {\\$a} not exist in Moodle';
$string['auth_saml_errorbadhook'] = 'Incorrect SAML plugin hook file: {\\$a}';
$string['auth_saml_errorbadlib'] = 'SimpleSAMLphp lib directory {\\$a} is not correct.';
$string['auth_saml_errorsamlexternal'] = 'It states that the source mapping for the course and the role would be external and so you must specify all the parameters of the DSN and SQL queries.';
$string['auth_saml_errorsp_source'] = 'SimpleSAMLphp SP source {\\$a} is not correct';
$string['auth_saml_form_error'] = 'There are some errors in the form. Please, see below for correcting them';
$string['auth_saml_hook_not_defined'] = 'saml_hook_get_course_info method not defined so can\'t get course info. Review that the hook file contain it and that its path is properly configured at the SAML settings';
$string['auth_saml_ignoreinactivecourses'] = 'Ignore Inactive';
$string['auth_saml_ignoreinactivecourses_description'] = 'If not checked the plugin will unenroll the \'inactive\' users from courses';
$string['auth_saml_initialize_roles'] = 'Initialize role';
$string['auth_saml_jit_not_active'] = 'User account {\\$a} does not exists and just-in-time provisioning is disabled';
$string['auth_saml_logextrainfo'] = 'Log extra info';
$string['auth_saml_logextrainfo_description'] = 'Enable it in order to log extra info like logins actions and user systemrole changes executed by the plugin';
$string['auth_saml_logfile'] = 'Log file path';
$string['auth_saml_logfile_description'] = 'Set a filename if you want log the SAML plugin errors in a different file than the syslog. (Use an absolute path or Moodle will save this file in the moodledata folder).';
$string['auth_saml_loginusing'] = 'Login here using your username and password';
$string['auth_saml_logo_info'] = 'SAML login description';
$string['auth_saml_logo_info_description'] = 'Description that will be shown below the SAML login button.';
$string['auth_saml_logo_path'] = 'SAML image';
$string['auth_saml_logo_path_description'] = 'Image path for the SAML login button.';
$string['auth_saml_mapping_dsn_description'] = 'Data Source Name string for connecting to the course/role mapping database.
(dsn must be an absolute path in case you are using SQLite)';
$string['auth_saml_mapping_dsn_examples'] = 'mysql://moodleuser:moodlepass@localhost/saml_course_mapping
sqlite:/<path-to-db>/mapping.sqlite3
oci8://user:pwd@host/sid
postgresql7://user:pwd@host/sid';
$string['auth_saml_mapping_export'] = 'Export them to a CSV';
$string['auth_saml_mapping_external_warning'] = 'Note: When database of mappinng and moodle are of the same type, connection fail. So in this case better use the internal coursemapping mode and previously dump all data inside db manually';
$string['auth_saml_mapping_sql_examples'] = 'SELECT field1 as lms_course_id, field2 as saml_course_id, field3 as saml_course_period FROM course_mapping
SELECT field1 as lms_role, field2 as saml_role from role_mapping';
$string['auth_saml_missed_data'] = 'The following data contain missed attributes:';
$string['auth_saml_moodle_course_id_field_warning'] = 'Before add any course maping, decide what id field (course shortname or number id) gonna be used to identify the moodle course. Once decided save the form and then short name or number id will appear at the Moodle Course Id select. Take in mind that numberid is by default not required at moodle but you should provide it if that is your selected option (or a blank option will appear for this course). If you switch the value of the field used to identify a course after providing some mappings, those mappings will be ignored (but still stored on the database)';
$string['auth_saml_not_authorize'] = '{\\$a} has no active CAV course.';
$string['auth_saml_role'] = 'SAML System role mapping';
$string['auth_saml_role_description'] = 'SAML attribute that contains the system role info of the user';
$string['auth_saml_role_mapping_dsn'] = 'Role dsn';
$string['auth_saml_role_mapping_sql'] = 'Role sql';
$string['auth_saml_role_not_found'] = 'Not able to retrive the role info. Review the role mapping, the SAMLResponse and the hook.';
$string['auth_saml_rolemapping'] = 'Role Mapping';
$string['auth_saml_rolemapping_head'] = 'The IdP can use it\'s own role shortname. Set in this section the mapping between IdP and Moodle roles. Accepts multiple valued comma separated.';
$string['auth_saml_samlhookfile'] = 'Hook file path';
$string['auth_saml_samlhookfile_description'] = 'Set a path if you want to use a hook file that contain your specific functions. The path can either be absolute or relative to your Moodle root directory.';
$string['auth_saml_samllib'] = 'SimpleSAMLphp library path';
$string['auth_saml_samllib_description'] = 'Library path for the SimpleSAMLphp environment you want to use, e.g.: /var/www/sp/simplesamlphp/lib.';
$string['auth_saml_sp_source'] = 'SimpleSAMLphp SP source';
$string['auth_saml_sp_source_description'] = 'Select the SP source you want to connect to Moodle. (Sources are in /config/authsources.php).';
$string['auth_saml_status_not_found'] = 'Not able to retrive the status info. Review the SAMLResponse and the hook.';
$string['auth_saml_sucess_creating_course_mapping'] = 'Table course_mapping created in moodle database';
$string['auth_saml_sucess_creating_role_mapping'] = 'Table course_role created in moodle database';
$string['auth_saml_supportcourses'] = 'SAML support courses';
$string['auth_saml_supportcourses_description'] = 'Select Internal to have Moodle auto-enrol users in courses by the enrol/saml plugin. The nosupport option will disable this feature';
$string['auth_saml_syncusersfrom'] = 'Synchronize users from module';
$string['auth_saml_syncusersfrom_description'] = 'Synchronize users into Moodle using another module. The users will be created with auth = \'saml\', even though they are actually synchronized by another module.
This allows you to create, update and delete users from for example LDAP, but log them in via SAML. Note that the module you wish to sync from must be enabled, and all sync settings should be controlled from that module, not from SAML.
To run the synchronization, add auth/saml/cli/sync_users.php to your cron.';
$string['auth_saml_username'] = 'SAML username mapping';
$string['auth_saml_username_description'] = 'SAML attribute that is mapped to Moodle username.';
$string['auth_saml_username_not_found'] = 'IdP returned a set of data that no contain the SAML username mapping field ({\\$a}). This field is required to login';
$string['auth_samldescription'] = 'Single sign-on using SimpleSAMLphp';
$string['auth_samltitle'] = 'SAML Authentication';
$string['pluginname'] = 'SAML Authentication';
$string['pluginnotenabled'] = 'Plugin not enabled!';
$string['syncfromnotenabled'] = 'No external plugin selected. SAML cannot synchronize users on its own.';
$string['unknownplugin'] = 'SAML does not know how to invoke the sync_users method of the specified plugin:';
