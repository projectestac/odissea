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
 * Strings for component 'block_point_view', language 'en', version '4.5'.
 *
 * @package     block_point_view
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpix'] = 'Site default:';
$string['blacktrack'] = 'Black track';
$string['blockdisabled'] = '<h3 class="text-danger">The block is disabled</h3>';
$string['blockonlyonmainpage'] = 'This block will not show difficulty tracks or reactions on course module pages because it is not shown in this course subcontexts.';
$string['bluetrack'] = 'Blue track';
$string['cleanupcoursereactions'] = 'Cleanup <b>{$a}</b> course reactions';
$string['cleanupreactions'] = 'Cleanup reactions';
$string['cleanupreactions_help'] = 'Cleanup (delete) reactions of users that are no longer enrolled in the course';
$string['cleanupreactionsconfirmation'] = 'Are you sure you want to cleanup (delete) reactions of users that are no longer enrolled in course <b>{$a}</b>? This action can not be undone.';
$string['confirmshowinsubcontexts'] = 'Are you sure to make this block visible in subcontexts?<br>
(This can be turned back in the block configuration, in "Where this block appears").';
$string['contentinputlabel'] = 'Block Content';
$string['contentinputlabel_help'] = 'This field allows to modify the text visible in the block. If left empty, the block will be invisible to students.';
$string['customemoji'] = 'Custom emoji';
$string['customemoji_help'] = 'Custom emoji to use for reactions can be defined here.<h5 class="text-danger">Important:</h5>Name the files <b><code>[emoji_name].png</code></b> for the emoji pictures: <code>easy.png</code>, <code>better.png</code> and <code>hard.png</code>. Also need groups of emojis <b><code>group_[emojis_initials].png</code></b>, for instance: <code>group_EB.png</code> for the group of Easy and Better reactions. Don\'t forget the file <b><code>group_.png</code></b> for the none vote image. The recommended image size is 200x200 for emojis and 400x200 for groups.<br/><br/> 11 files expected: <code>easy.png</code>, <code>better.png</code>, <code>hard.png</code>, <code>group_.png</code>, <code>group_E.png</code>, <code>group_B.png</code>, <code>group_H.png</code>, <code>group_EB.png</code>, <code>group_EH.png</code>, <code>group_BH.png</code> and <code>group_EBH.png</code>';
$string['custompix'] = 'Custom:';
$string['defaultpix'] = 'Default:';
$string['defaulttextbetter'] = 'I\'m getting better!';
$string['defaulttextcontent'] = 'This plugin gives the possibility to react and to give difficulties levels to activities.<br/><br/>This plugin is developed by <a href="mailto:q.fombaron@outlook.fr?subject=%22Point%20of%20view%22%20Moodle%20plugin%20-%20Feedback">Quentin Fombaron</a>.<br /><br />You can edit or delete this text in the block configuration menu.<br /><br />';
$string['defaulttexteasy'] = 'Easy!';
$string['defaulttexthard'] = 'So hard...';
$string['delete_custom_pix'] = 'Delete custom emoji';
$string['deleteemojiconfirmation'] = 'Are you sure you want to delete custom emoji for this block?
This will delete currently saved emoji and files in the draft area below. This action can not be undone.';
$string['disable_type'] = 'Disable reactions for all <b>{$a}</b>';
$string['disableall'] = 'Disable reactions for all in <b>{$a}</b>';
$string['emojidesc'] = 'Emoji description';
$string['emojidesc_help'] = 'Custom text to be displayed on top of the reaction';
$string['emojitouse'] = 'Emoji to use';
$string['emojitouse_help'] = 'Choose emoji to be used as reactions in this course.<br>You can add your own, custom emoji by selecting "Custom".';
$string['enable_disable_section'] = 'Enable/Disable reactions for all in this section';
$string['enable_disable_section_help'] = 'Enable or disable reactions for all activity modules in this section.';
$string['enable_disable_type'] = 'Enable/Disable reactions for all of this type';
$string['enable_disable_type_help'] = 'Enable or disable reactions for all activity modules of this type in course.';
$string['enable_type'] = 'Enable reactions for all <b>{$a}</b>';
$string['enableall'] = 'Enable reactions for all in <b>{$a}</b>';
$string['enablecustompix'] = 'Use custom Reaction emojis';
$string['enabledifficulties'] = 'Enable <b>Difficulty tracks</b>';
$string['enableforfuturemodules'] = 'Enable for future modules';
$string['enableforfuturemodules_help'] = 'Automatically enable reactions on new modules created in this course.';
$string['enablepoint_views'] = 'Enable <b>Reactions</b>';
$string['errorfilemanager'] = '<b>ERROR</b>: The name of <b>{$a}.png</b> is not conform.';
$string['errorfilemanagerempty'] = 'Please provide at least one file.';
$string['eventreactionadded'] = 'Reaction added';
$string['eventreactionremoved'] = 'Reaction removed';
$string['eventreactionupdated'] = 'Reaction updated';
$string['forthismodule'] = 'For this module ({$a}):';
$string['greentrack'] = 'Green track';
$string['header_activities'] = 'Configuration of Reaction and Difficulty tracks';
$string['header_images'] = 'Emojis configuration';
$string['highlightactivityrows'] = 'Highlight activity rows on course page';
$string['highlightactivityrows_help'] = 'Display a gray gradient background on hover over activities on the course page. This is meant to help with vertical alignment of reactions on activities, but can be safely disabled.';
$string['module'] = 'Module';
$string['noactivity'] = 'No activity';
$string['nonetrack'] = 'No track';
$string['noreactionsyet'] = 'There is no course module with reactions yet.';
$string['pluginname'] = 'Point of view';
$string['point_view:access_overview'] = 'View reactions details';
$string['point_view:addinstance'] = 'Add a Point of View block instance';
$string['point_view:addreaction'] = 'See reaction zone and add reactions';
$string['point_view:myaddinstance'] = 'Add a Point of View block instance on dashboard';
$string['privacy:metadata:activity_votes_database:cmid'] = 'Course activity ID';
$string['privacy:metadata:activity_votes_database:courseid'] = 'Course ID';
$string['privacy:metadata:activity_votes_database:userid'] = 'User ID';
$string['privacy:metadata:activity_votes_database:vote'] = 'Vote: 1 (Easy!), 2 (I\'m getting better!), 3 (So hard...)';
$string['privacy:metadata:block_point_view'] = 'The Point of View block stores the user\'s votes on each activity.';
$string['reactions'] = 'Reactions';
$string['reactionscleanedupsuccessfully'] = 'Reactions have been cleaned up successfully.';
$string['reactionsdetails'] = 'Reactions details';
$string['reactionsresetsuccessfully'] = 'Reactions have been reset successfully.';
$string['reactionsunavailable'] = 'You can not add or remove your reaction on this module.';
$string['redtrack'] = 'Red track';
$string['resetcoursereactions'] = 'Reset <b>{$a}</b> course reactions';
$string['resetreactions'] = 'Reset reactions';
$string['resetreactions_help'] = 'Reset (delete) all users reactions in the course';
$string['resetreactionsbymodule'] = 'Reset reactions by module:';
$string['resetreactionsconfirmation'] = 'Are you sure you want to reset (delete) all users reactions of course <b>{$a}</b>? This action can not be undone.';
$string['resetreactionsheader'] = 'Cleanup or reset reactions';
$string['resetreactionsonmoduleconfirmation'] = 'Are you sure you want to reset (delete) all users reactions on this module? This action can not be undone.';
$string['showinsubcontexts'] = 'Also show this block on subcontexts.';
$string['showotherreactions'] = 'Show other users reactions';
$string['showotherreactions_help'] = 'Allow students to see the number of reactions of each type from other users on a module.';
$string['totalreactions'] = 'Total reactions: {$a}';
