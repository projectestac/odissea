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
 * Strings for component 'assignsubmission_mahara', language 'en', version '4.1'.
 *
 * @package     assignsubmission_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_submission_mahara_description'] = 'Mahara functions used in Mahara portfolio Assign Submission plugin.<br />Publishing this service on a Moodle site has no effect. Subscribe to this service if you want to be able to use assignments with {$a}.<br />';
$string['assign_submission_mahara_name'] = 'Assign Submission Mahara services';
$string['collectionsby'] = 'Collections by {$a}';
$string['defaultlockpages'] = 'Default "{$a}"';
$string['defaultlockpages_help'] = 'Default setting to use for the "{$a}" setting in new Mahara assignments.';
$string['defaulton'] = 'Enabled by default';
$string['defaulton_help'] = 'If set, this submission method will be enabled by default for all new assignments.';
$string['defaultsite'] = 'Default "{$a}"';
$string['defaultsite_help'] = 'Default setting to use for the "{$a}" setting in new Mahara assignments.';
$string['emptysubmission'] = 'You have not chosen the page to submit.';
$string['enabled'] = 'Mahara portfolio';
$string['enabled_help'] = 'If enabled, students are able to submit Mahara pages for assessment in Moodle. The Mahara site must already be configured for mnet networking with this Moodle site.';
$string['errorinvalidhost'] = 'Invalid host id selected';
$string['errorinvalidstatus'] = 'Developer Error: Invalid submission status sent to assign_submission_mahara::set_mahara_submission_status()';
$string['errormnetrequest'] = 'Attempt to send mnet request resulted in error: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'The selected Mahara view or collection could not be submitted. Please choose another.';
$string['eventassessableuploaded'] = 'A Mahara page or collection has been submitted.';
$string['lockpages'] = 'Lock submitted pages';
$string['lockpages_help'] = 'If "Yes, keep locked" is selected, submitted Mahara pages and collections will be locked from editing in Mahara and will remain locked after grading. If "Yes, but unlock after grading", the page or collection will be unlocked after submission grading, or, if marking workflow has been used, they will be unlocked when marks are released to student.';
$string['mahara'] = 'Mahara portfolio';
$string['nomaharahostsfound'] = 'No mahara hosts found.';
$string['noneselected'] = 'None selected';
$string['noviewscreated'] = 'You have no available Mahara pages or collections. Please <a target="_blank" href="{$a->jumpurl}">click here</a> to visit "{$a->name}" and create a new one.';
$string['option_collections'] = 'Collections';
$string['option_views'] = 'Views';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (view id: {$a->viewid})';
$string['outputforlognew'] = 'New {$a} submission.';
$string['pluginname'] = 'Mahara portfolio';
$string['previousattemptsnotvisible'] = 'Previous attempts with the Mahara submission plugin are not visible.';
$string['privacy:metadata:assignment'] = 'The id of the Assignment';
$string['privacy:metadata:assignsubmission_mahara'] = 'Stores information about Mahara pages and collections submitted to assignments.';
$string['privacy:metadata:iscollection'] = 'Is this submission a page or collection';
$string['privacy:metadata:submission'] = 'The id of the submission';
$string['privacy:metadata:viewid'] = 'The id of the Mahara page or collection';
$string['privacy:metadata:viewstatus'] = 'The status of the Mahara page or collection';
$string['privacy:metadata:viewtitle'] = 'The title of the Mahara page or collection';
$string['privacy:metadata:viewurl'] = 'The url of the Mahara page or collection';
$string['privacy:path'] = 'Mahara pages and collections';
$string['selectmaharaview'] = 'Select one of your available portfolio pages or collections from the list below, or <a target="_blank" href="{$a->jumpurl}">click here</a> to visit "{$a->name}" and create a new one.';
$string['site'] = 'Site';
$string['site_help'] = 'This setting lets you select which Mahara site your students should submit their pages from.';
$string['viewsby'] = 'Pages by {$a}';
$string['yeskeeplocked'] = 'Yes, keep locked';
$string['yesunlock'] = 'Yes, but unlock after grading';
