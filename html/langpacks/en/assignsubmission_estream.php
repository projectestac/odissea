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
 * Strings for component 'assignsubmission_estream', language 'en', version '3.11'.
 *
 * @package     assignsubmission_estream
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentsubmission'] = 'Current Submission';
$string['default'] = 'Enabled by default';
$string['default_help'] = 'If set, this submission method will be enabled by default for all newly created assignments.';
$string['emptyoverride'] = 'Override "No File Uploaded" Message';
$string['emptyoverride_help'] = 'Change the message that is displayed when users complete a submission without uploading a file using the activated Planet eStream plugin. Depending on your institutional policies you may want to change this to an Error message rather than feedback.';
$string['enabled'] = 'Planet eStream Submissions enabled';
$string['enabled_help'] = 'If enabled, students are able to submit upload video/audio files for assessment via Planet eStream when using the text editor plugins.';
$string['error_force'] = 'Your must upload a Planet eStream item. Please ensure you complete the upload process in the Planet eStream window BEFORE saving the Moodle submission.';
$string['forcesubmit'] = 'Force Submission';
$string['forcesubmit_help'] = 'Force users to complete the submission process. Some schools create assignments where submission of a Planet eStream item is optional, and this setting should thus remain off.';
$string['helptext'] = 'Help Text';
$string['helptext_help'] = 'Add optional text above the plugin window to assist users.';
$string['nosubmission'] = 'Nothing has yet been submitted';
$string['notyetconfigured'] = 'Sorry, the Planet eStream Assignment Submission Plugin is not yet configured.';
$string['overwriteblank'] = 'Overwrite Using Empty Submissions';
$string['overwriteblank_help'] = 'Enable to force the overwrite of existing submissions with empty ones. Some schools wish to treat a submission with no eStream content as a new submission, and this setting should be turned on.';
$string['pluginname'] = 'Planet eStream Submission Plugin';
$string['privacy:metadata:assignsubmission_estream'] = 'In order to integrate with Planet eStream, user information must be relayed.';
$string['privacy:metadata:assignsubmission_estream:assignment'] = 'The ID of the assignment.';
$string['privacy:metadata:assignsubmission_estream:cdid'] = 'The Planet eStream item ID.';
$string['privacy:metadata:assignsubmission_estream:email'] = 'Your email is used to complete authentication between Moodle and Planet eStream.';
$string['privacy:metadata:assignsubmission_estream:embedcode'] = 'The Planet eStream embed code for the item.';
$string['privacy:metadata:assignsubmission_estream:fullname'] = 'Your full name is sent to Planet eStream to display in the uploaded item.';
$string['privacy:metadata:assignsubmission_estream:submission'] = 'The ID of the submission.';
$string['privacy:metadata:assignsubmission_estream:userid'] = 'Your user ID is sent from Moodle to Planet eStream to save your submission.';
$string['privacy:metadata:assignsubmission_estream:userip'] = 'Your IP address is used as a security measure when sending data between Moodle and Planet eStream.';
$string['settingsurl'] = 'Planet eStream URL';
$string['settingsurl_help'] = 'Enter the URL to your Planet eStream server.<br />e.g. http://videoserver.mysite.org<br />or https://videoserver.mysite.org<br /><br />Please note that if your Moodle is accessed via a https link then the above URL must also be https';
$string['settingsusemail'] = 'Use Email Address for Authentication';
$string['settingsusemail_help'] = 'By default, the Planet eStream plugins will use the username for authentication. Tick this box to instead use the user email address.';
$string['shortname'] = 'Video/Audio Submission';
$string['upload'] = 'Upload a Video or Audio file';
$string['upload_help'] = '';
$string['uploadfailed'] = 'Upload Failed<br /><br />Please refresh the page and try again';
$string['uploadok'] = 'File Upload Complete<br /><br />WARNING: The Submission is NOT yet complete!<br /><br />To finish submission,
please click &apos;Save changes&apos; below to save.';
