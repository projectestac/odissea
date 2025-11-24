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
 * Strings for component 'assignfeedback_structured', language 'en', version '4.5'.
 *
 * @package     assignfeedback_structured
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['close'] = 'Close';
$string['criteria'] = 'Feedback criteria';
$string['criteria_help'] = 'Enter a name (and optionally a description) for each criterion you want to provide feedback on. Any unnamed criteria will be ignored. All fields will be locked once feedback has been given for any criteria.';
$string['criteriafieldsadd'] = 'Add more criteria fields';
$string['criteriaset'] = 'Criteria set';
$string['criteriaset_help'] = 'Click this button to select a previously saved criteria set to automatically configure the criteria details below.';
$string['criteriasetconfirmdelete'] = 'Are you sure you want to permanently delete the criteria set "{$a}"?';
$string['criteriasetconfirmuse'] = 'Are you sure? This will overwrite the criteria that are currently configured for this assignment.';
$string['criteriasetdelete'] = 'Delete criteria set';
$string['criteriasetempty'] = 'You must define at least one criterion before saving as a set.';
$string['criteriasetemptytitle'] = 'Criteria set is empty';
$string['criteriasetname'] = 'Criteria set name';
$string['criteriasetname_help'] = 'The name of a criteria set must be unique across the whole site, so please choose it carefully.';
$string['criteriasetnameedit'] = 'Edit criteria set name';
$string['criteriasetnameenter'] = 'Enter a unique name';
$string['criteriasetnameused'] = 'Unfortunately there is already a criteria set named "{$a}". Please try a different name.';
$string['criteriasetnameusedtitle'] = 'Name already used';
$string['criteriasetnoname'] = 'You must provide a name for your criteria set.';
$string['criteriasetnonametitle'] = 'No name provided';
$string['criteriasetnotdeleted'] = 'Unfortunately the criteria set "{$a}" could not be deleted. Please try again or report this error to your administrator.';
$string['criteriasetnotsaved'] = 'Unfortunately the criteria set could not be saved. Please try again or report this error to your administrator.';
$string['criteriasetnotupdated'] = 'Unfortunately the criteria set could not be updated. Please try again or report this error to your administrator.';
$string['criteriasetpublish'] = 'Share with other users';
$string['criteriasetpublish_help'] = 'Tick this box to enable anyone to make a copy of this criteria set. By default it is available only to you.';
$string['criteriasetsave'] = 'Save criteria set';
$string['criteriasetsave_help'] = 'Click this button and provide a unique name for your criteria set to enable it to be copied easily into other assignments.';
$string['criteriasetsaved'] = 'Criteria set saved';
$string['criteriasetsavedsuccess'] = 'Your criteria set "{$a}" was saved successfully.';
$string['criteriasetselect'] = 'Select a criteria set ...';
$string['criteriasetshared'] = 'Shared';
$string['criteriasetsmanage'] = 'Manage criteria sets';
$string['criteriasetsmanage_help'] = 'Click this button to view and manage your own saved criteria sets.';
$string['criteriasetsowned'] = 'Your criteria sets';
$string['criteriasetssaved'] = 'Saved criteria sets';
$string['criteriasetsshared'] = 'Shared criteria sets';
$string['criteriasetsshowshared'] = 'Show shared sets';
$string['criteriasetupdated'] = 'Criteria set updated';
$string['criteriasetupdatedsuccess'] = 'Your criteria set was updated successfully.';
$string['criteriasetuse'] = 'Use this set';
$string['criteriasetusesaved'] = 'Use a saved criteria set';
$string['criteriaused'] = 'The criteria for this assignment can no longer be edited because some feedback has already been given.';
$string['criteriondesc'] = 'Criterion {$a} description (optional)';
$string['criterionheader'] = '{$a->name}: {$a->desc}';
$string['criterionname'] = 'Criterion {$a} name';
$string['criteriontitle'] = '<span class="criterion-name">{$a->name}:</span> <span class="criterion-desc">{$a->desc}</span>';
$string['default'] = 'Enabled by default';
$string['default_help'] = 'If set, this feedback method will be enabled by default for all new assignments.';
$string['defaultcritdesc'] = 'Default description for first criterion';
$string['defaultcritdesc_help'] = 'Optional default description for the first feedback criterion in all new assignments.';
$string['defaultcritname'] = 'Default name for first criterion';
$string['defaultcritname_help'] = 'Optional default name for the first feedback criterion in all new assignments.<br>Note that entering a value here will automatically enable the structured feedback method for all new assignments.';
$string['enabled'] = 'Structured feedback';
$string['enabled_help'] = 'If enabled, the teacher will be able to define any number of criteria on which to provide specific feedback.';
$string['escapetocancel'] = 'Escape to cancel';
$string['noownedsets'] = 'You don\'t currently have any saved sets.';
$string['nopermissionstodelete'] = 'Sorry, but you do not currently have permissions to delete your saved criteria sets.';
$string['nopermissionstomanage'] = 'Sorry, but you do not currently have permissions to manage your saved criteria sets.';
$string['nopermissionstopublish'] = 'Sorry, but you do not currently have permissions to share your saved criteria sets.';
$string['nopermissionstosave'] = 'Sorry, but you do not currently have permissions to save criteria sets.';
$string['nopermissionstoupdate'] = 'Sorry, but you do not currently have permissions to update your saved criteria sets.';
$string['nosharedsets'] = 'There are currently no shared sets available.';
$string['pluginname'] = 'Structured feedback';
$string['privacy:metadata:assignmentid'] = 'Assignment ID';
$string['privacy:metadata:commentpurpose'] = 'The comment text.';
$string['privacy:metadata:critdescpurpose'] = 'The description of the criterion that the comment relates to.';
$string['privacy:metadata:criterionpurpose'] = 'The name of the criterion that the comment relates to.';
$string['privacy:metadata:filepurpose'] = 'Feedback files from the grader for the student.';
$string['privacy:metadata:gradepurpose'] = 'The grade ID associated with the feedback.';
$string['privacy:metadata:tablesummary'] = 'This stores comments made by the graders as feedback for the student on specific aspects of their submission.';
$string['privacy:path'] = 'Structured feedback';
$string['structured:manageowncriteriasets'] = 'Manage own saved criteria sets';
$string['structured:publishcriteriasets'] = 'Make saved criteria sets available to other users';
$string['structuredfilename'] = 'structured.html';
