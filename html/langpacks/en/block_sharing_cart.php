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
 * Strings for component 'block_sharing_cart', language 'en', version '3.11'.
 *
 * @package     block_sharing_cart
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_string'] = 'Activity:';
$string['backup'] = 'Copy to Sharing Cart';
$string['backup_heavy_load_warning_message'] = 'If section contains several activites, processing time will be longer.';
$string['bulkdelete'] = 'Bulk delete';
$string['clicktomove'] = 'Click to move here';
$string['clipboard'] = 'Copying this shared item';
$string['confirm_backup'] = 'Are you sure you want to copy this activity/resource into Sharing Cart?';
$string['confirm_backup_section'] = 'Do you want to copy this course section and its activities / resources into Sharing Cart?';
$string['confirm_delete'] = 'Are you sure you want to delete?';
$string['confirm_delete_selected'] = 'Are you sure you want to delete all selected items?';
$string['confirm_restore'] = 'Are you sure you want to copy this item to course?';
$string['confirm_userdata'] = 'Do you want to include user data in a copy of this activity/resource?
OK - Copy *with* user data
Cancel - Copy *without* user data';
$string['conflict_description'] = 'Do you want to overwrite section information to course?';
$string['conflict_description_note'] = '*Section summary formats (font color, images, etc.) and availability settings will overwrite after copied to course.';
$string['conflict_no_overwrite'] = 'Keep the current section name and settings <strong>"{$a}"</strong>';
$string['conflict_overwrite_title'] = 'Overwrite section name and settings to <strong>"{$a}"</strong>';
$string['conflict_submit'] = 'Continue';
$string['copy_section'] = 'Copy section';
$string['copy_section_title'] = 'Copy selected section';
$string['copyhere'] = 'Copy here';
$string['define_required_capabilities'] = 'Please define the required capabilities';
$string['delete_folder'] = 'and all its content';
$string['folder_string'] = 'Folder:';
$string['forbidden'] = 'You don\'t have any permissions to access this shared item';
$string['inprogess_pleasewait'] = 'Please wait…';
$string['invalidoperation'] = 'An invalid operation detected';
$string['label_image_replaced_text'] = '(Label: Image)';
$string['missing_capabilities'] = 'Required capabilities missing: {$a}';
$string['missing_capability'] = 'Required capability missing: {$a}';
$string['modal_bulkdelete_confirm'] = 'Delete selected';
$string['modal_bulkdelete_title'] = 'Sure you want to delete';
$string['modal_checkbox'] = 'Do you want to copy user data? (Eg. glossary/wiki/database entries)';
$string['modal_confirm_backup'] = 'Confirm';
$string['modal_confirm_delete'] = 'Delete';
$string['movedir'] = 'Move into folder';
$string['no_backup_support'] = 'No backup support for this module';
$string['notarget'] = 'Target not found';
$string['pluginname'] = 'Sharing Cart';
$string['privacy:metadata:block_sharing_cart'] = 'Sharing cart data is stored here';
$string['privacy:metadata:block_sharing_cart:ctime'] = 'Created time';
$string['privacy:metadata:block_sharing_cart:modicon'] = 'Activity module icon';
$string['privacy:metadata:block_sharing_cart:modname'] = 'The name of activity module';
$string['privacy:metadata:block_sharing_cart:modtext'] = 'The title of the activity module';
$string['privacy:metadata:block_sharing_cart:tree'] = 'The title of sharing cart folder that display in the block';
$string['privacy:metadata:block_sharing_cart:userid'] = 'The ID of user';
$string['privacy:metadata:block_sharing_cart:weight'] = 'Order of items, sorting in ascending order';
$string['privacy:metadata:block_sharing_cart_plugins'] = 'Sharing cart plugins data is stored here';
$string['privacy:metadata:block_sharing_cart_plugins:data'] = 'Sharing cart plugins data';
$string['privacy:metadata:block_sharing_cart_plugins:plugin'] = 'The name of the plugin';
$string['privacy:metadata:block_sharing_cart_plugins:userid'] = 'The ID of user';
$string['recordnotfound'] = 'Shared item not found';
$string['requireajax'] = 'Sharing Cart requires AJAX';
$string['requirejs'] = 'Sharing Cart requires JavaScript enabled in your browser';
$string['restore'] = 'Copy to course';
$string['restore_heavy_load_warning_message'] = 'Load time are longer, because more than 10 activities/resources are being processed.';
$string['section_name_conflict'] = 'Section conflict';
$string['settings:userdata_copyable_modtypes'] = 'User data copyable module types';
$string['settings:userdata_copyable_modtypes_desc'] = 'While copying an activity into the Sharing Cart,
a dialog shows an option whether a copy of an activity includes its user data or not,
if its module type is checked in the above and an operator has <strong>moodle/backup:userinfo</strong>,
<strong>moodle/backup:anonymise</strong> and <strong>moodle/restore:userinfo</strong> capabilities.
(By default, only manager role has those capabilities.)';
$string['settings:workaround_qtypes'] = 'Workaround for question types';
$string['settings:workaround_qtypes_desc'] = 'The workaround for question restore issue will be performed if its question type is checked.
When the questions to be restored already exist, however, those data look like inconsistent,
this workaround will try to make another duplicates instead of reusing existing data.
It may be useful for avoiding some restore errors, such as <i>error_question_match_sub_missing_in_db</i>.';
$string['sharing_cart'] = 'Sharing Cart';
$string['sharing_cart:addinstance'] = 'Add a new Sharing Cart block';
$string['sharing_cart_help'] = '<div>
    <strong>Copying from course to Sharing Cart</strong>
        <p>You will notice a small "Copy to Sharing Cart" icon which appears after each
            resource or activity in a course.
            Click on that icon to send a copy of that resource/activity into Sharing Cart.
            Only the activity itself, without user data, will be cloned.</p>
    <strong>Copying from Sharing Cart to course</strong>
        <p>Click a "Copy to course" icon in Sharing Cart and select one of target markers on each section.
            Or click "Cancel" icon which is above those.</p>
    <strong>Making folders inside Sharing Cart</strong>
        <p>Click a "Move into folder" icon in a Sharing Cart item.
            An input box for new folder name will appear if there\'s no folder.
            Or you can select an existing folder in drop-down list.
            Which will be replaced with an input box if you click "Edit" icon.</p>
</div>';
$string['unexpectederror'] = 'An unexpected error occurred';
$string['uninstalled_plugin_warning_title'] = 'This plugin is uninstalled. Trying to recover this without reinstalling the plugin: {$a} will cause errors. Restoration is disabled';
$string['variouscourse'] = 'from various courses';
