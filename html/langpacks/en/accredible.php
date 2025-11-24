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
 * Strings for component 'accredible', language 'en', version '4.5'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Add a certificate/badge instance';
$string['accredible:manage'] = 'Manage a certificate/badge instance';
$string['accredible:student'] = 'Retrieve a certificate or badge';
$string['accredible:view'] = 'View a certificate or badge';
$string['accrediblecustomattributename'] = 'Choose an Accredible design attribute:';
$string['accrediblecustomattributeselectprompt'] = 'Select an Accredible custom attribute';
$string['accrediblegroup'] = 'Accredible Group';
$string['achievementid'] = 'Achievement id / cohort name (must be unique)';
$string['activitygroupdescription'] = 'Credentials groups need to have been created in the <a href="{$a}" target="_blank">Accredible Dashboard</a> before credentials can be issued. If none appear, check your API Key to make sure integration is set up correctly.';
$string['activityname'] = 'Activity name';
$string['additionalactivitiesone'] = 'Warning: You are adding more than one activity to a course.<br/>Both activities are viewable by students, so be sure to give them different names.';
$string['additionalactivitiesthree'] = 'This is the name that will appear on the ceriticate.';
$string['additionalactivitiestwo'] = 'Certificates/Badges will only be listed on the activity page if they were issued with this achievement id.';
$string['apikeyhelp'] = 'Enter your API key from accredible.com';
$string['apikeylabel'] = 'API key';
$string['attributemappingcoursecustomfields'] = 'Attribute mapping: course custom fields';
$string['attributemappingcoursefields'] = 'Attribute mapping: course fields';
$string['attributemappinguserprofilefields'] = 'Attribute mapping: user profile fields';
$string['autoissueheader'] = 'Automatic issuing criteria';
$string['certificatename'] = 'Certificate/Badge name';
$string['certificateurl'] = 'Certificate/Badge url';
$string['chooseexam'] = 'Choose final quiz';
$string['completionissuecheckbox'] = 'Yes, issue upon course completion';
$string['completionissueheader'] = 'Auto-issue criteria: by course completion';
$string['coursetotal'] = 'Course Total';
$string['dashboardlink'] = 'Accredible dashboard link';
$string['dashboardlinktext'] = 'To delete or style credentials, log in to the <a href="https://dashboard.accredible.com" target="_blank">dashboard</a>';
$string['datecreated'] = 'Date created';
$string['description'] = 'Description';
$string['emptygradeattributekeyname'] = 'The final course grade will be mapped to the selected Accredible custom attribute. If you have not yet created a custom attribute, you can do so on the <a href="{$a}" target="_blank">Accredible Platform</a>.';
$string['euhelp'] = 'Select if you would like to host data in the EU (Frankfurt) instead of the USA';
$string['eulabel'] = 'EU (Frankfurt) Server';
$string['eventcertificatecreated'] = 'A credential was posted to Accredible';
$string['gotodashboard'] = 'To update the appearance of your badges and certificates, visit: <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Choose Moodle grade to include:';
$string['gradeattributekeynameselect'] = 'Choose an Accredible design attribute:';
$string['gradeissueheader'] = 'Auto-issue criteria: by final quiz grade';
$string['groupselect'] = 'Group';
$string['id'] = 'ID';
$string['includegradeattributecheckbox'] = 'Yes, include grade in Credential.';
$string['includegradeattributedescription'] = 'Include Student\'s Grade in Credential';
$string['indexheader'] = 'All certificates/badges for {$a}';
$string['issued'] = 'Issued';
$string['manualheader'] = 'Manually issue certificates/badges';
$string['modulename'] = 'Accredible certificates & badges';
$string['modulename_help'] = 'The Accredible certificate & badge activity module allows you to issue course certificates or badges to students on accredible.com.

Add the activity wherever you want your students see their certificate or badge.';
$string['modulename_link'] = 'mod/accredible/view';
$string['modulenameplural'] = 'Accredible certificates/badges';
$string['moodlecoursecustomfield'] = 'Choose Moodle custom course field to include';
$string['moodlecoursefield'] = 'Choose Moodle course field to include';
$string['moodleuserprofilefield'] = 'Choose Moodle user profile field to include';
$string['nocertificates'] = 'There are no certificates/badges';
$string['nouserswarning'] = 'You need to choose an Accredible group in order to see the list of users.';
$string['overview'] = 'Overview';
$string['passinggrade'] = 'Percentage grade needed to pass course (%)';
$string['pluginadministration'] = 'Accredible certificates/badges administration';
$string['pluginname'] = 'Accredible certificates & badges';
$string['privacy:metadata:accredible'] = 'In order to integrate with Accredible, user data needs to be exchanged with that service.';
$string['privacy:metadata:accredible:email'] = 'Your email address is sent to Accredible to issue a credential.';
$string['privacy:metadata:accredible:fullname'] = 'Your full name is sent to Accredible to issue a credential.';
$string['privacy:metadata:accredible:quizgrade'] = 'Your quiz grade may be sent to Accredible to issue a credential.';
$string['recipient'] = 'Recipient';
$string['templatename'] = 'Cohort name (from dashboard)';
$string['unissueddescription'] = 'These users have met the requirements for this certificate but have not yet been issued a certificate. Select those you would like to issue certificates for.';
$string['unissuedheader'] = 'Unissued certificates/badges';
$string['usestemplatesdescription'] = 'Make sure you have a cohort on the dashboard with the same name as your achievement id.';
$string['viewheader'] = 'Certificates & badges for {$a}';
$string['viewimgcomplete'] = 'Click to view your certificate or badge';
$string['viewimgincomplete'] = 'Course still in progress';
$string['viewsubheader'] = 'Group ID: {$a}';
$string['viewsubheaderold'] = 'Achievement ID: {$a}';
