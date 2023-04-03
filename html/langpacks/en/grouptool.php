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
 * Strings for component 'grouptool', language 'en', version '3.11'.
 *
 * @package     grouptool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Activated group';
$string['activated_groups'] = 'Activated groups!';
$string['active'] = 'Active';
$string['activegroups'] = 'Active groups';
$string['add_member'] = 'Add <strong>{$a->username}</strong> to group <strong>{$a->groupname}</strong>';
$string['added_member'] = 'Added <strong>{$a->username}</strong> to group <strong>{$a->groupname}</strong>';
$string['administration'] = 'Administration';
$string['administration_alt'] = 'Group(ing) creation, and settings for active groups of this instance';
$string['agroups'] = 'Active groups';
$string['ajax_edit_size_help'] = 'Save new size with &lt;Enter&gt;, use &lt;ESC&gt; to get abort, leave empty to delete individual size';
$string['all_groups_full'] = '<strong>{$a}</strong> could not be registered in any group because all groups are full!';
$string['allow_multiple'] = 'Multiple registrations';
$string['allow_multiple_help'] = 'Enable students to register in more than 1 group at the same time. You have to specify how many groups they have to choose at least (= minimum groups to choose) and how many groups they are allowed to choose maximum (= maximum groups to choose).';
$string['allow_reg'] = 'Enable self registration';
$string['allow_reg_help'] = 'Enable self registration for students so they can register themselves in the active groups, which are chosen below.';
$string['allow_unreg'] = 'Allow deregistration';
$string['allow_unreg_help'] = 'Enable students to deregister from or change to other groups before (optional) the due-date.';
$string['allowed'] = 'Allowed';
$string['already_marked'] = 'This group was already marked for registration!';
$string['already_member'] = '<strong>{$a->username}</strong> is already member of group <strong>{$a->groupname}</strong>';
$string['already_occupied'] = 'The place in group <strong>{$a->grpname}</strong> is already occupied because another user completed the registration faster. Please look for another group!';
$string['already_queued'] = '<strong>{$a->username}</strong> is already queued in group <strong>{$a->groupname}</strong>!';
$string['already_registered'] = '<strong>{$a->username}</strong> is already registered in group <strong>{$a->groupname}</strong>!';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the grouptool description above will only become visible to students on the "Registration start" date.';
$string['asterisk_marks_moodle_registrations'] = 'Users with leading asterisk (*) are already registered in the respective Moodle-Group';
$string['availabledate'] = 'Registration start';
$string['availabledate_help'] = 'Begin of the registration period. After this date students are able to register themselves in the selected groups (if enabled).';
$string['availabledateno'] = 'Always available';
$string['cant_enrol'] = 'Can\'t enrol user automatically in course.';
$string['cfg_addinstanceset_head'] = 'Additional Instance Settings';
$string['cfg_addinstanceset_head_info'] = 'Additional settings for grouptool.';
$string['cfg_admin_head'] = 'Default settings in view administration';
$string['cfg_admin_head_info'] = 'Standard settings for administration tab in grouptool-view.';
$string['cfg_allow_multiple'] = 'Multiple registrations';
$string['cfg_allow_multiple_desc'] = 'Enable students to be registered in more than 1 group at the same time by default.';
$string['cfg_allow_reg'] = 'Allow self registration';
$string['cfg_allow_reg_desc'] = 'Enable students to register themselves by default';
$string['cfg_allow_unreg'] = 'Allow deregistration';
$string['cfg_allow_unreg_desc'] = 'Should users be able to deregister themselves and to change groups?';
$string['cfg_choose_max'] = 'Choose maximum';
$string['cfg_choose_max_desc'] = 'How many groups should users be able to register in at the same time by default?';
$string['cfg_choose_min'] = 'Choose minimum';
$string['cfg_choose_min_desc'] = 'How many groups have users to choose minimum by default?';
$string['cfg_force_dereg'] = 'Force deregistration in grouptool';
$string['cfg_force_dereg_desc'] = 'Force deregistration not only from grouptool but also from moodle-group.';
$string['cfg_force_importreg'] = 'Force registration in grouptool';
$string['cfg_force_importreg_desc'] = 'Force via grouptool in moodle-group imported users to be force-registered in that grouptool instance also.';
$string['cfg_groups_queues_limit'] = 'Queue places per group';
$string['cfg_groups_queues_limit_desc'] = 'Determines how many different students can be queued in a group at the same time by default.';
$string['cfg_grpsize'] = 'Global standard group size';
$string['cfg_grpsize_desc'] = 'Standard group size used everywhere in grouptool';
$string['cfg_ifgroupdeleted'] = 'If groups get deleted';
$string['cfg_ifgroupdeleted_desc'] = 'Should deleted groups be recreated for the grouptool-instance or should the references in grouptool (including group-data, registrations and queue) be deleted? Note: If you select "recreate group", then groups wills be recreated automatically after deletion under "Course administration / Users / Groups".';
$string['cfg_ifmemberadded'] = 'If group members are added';
$string['cfg_ifmemberadded_desc'] = 'Should new group members added via moodle be also registered in grouptool or be ignored?';
$string['cfg_ifmemberremoved'] = 'If group members are removed';
$string['cfg_ifmemberremoved_desc'] = 'Should grouptool registrations be deleted if users are deleted from the corresponding moodle-group?';
$string['cfg_immediate_reg'] = 'Immediate registration';
$string['cfg_immediate_reg_desc'] = 'Should every registration be passed through to the moodle-groups?';
$string['cfg_importfields'] = 'Compare fields for import/ deregistration';
$string['cfg_importfields_desc'] = 'Defines which fields in user table are to be compared to the data when importing/ deregistrating users. The fields are searched one-by-one until a unique match is found. Possible/useful values are for example: username, idnumber, email. ATTENTION: there\'s no check for correct field names. Permitted characters: a-z, A-Z and \',\'';
$string['cfg_instance_head'] = 'Default instance settings';
$string['cfg_instance_head_info'] = 'Default settings for new grouptool instances.';
$string['cfg_max_queues'] = 'Max. simultaneous queue-places per participant';
$string['cfg_max_queues_desc'] = 'Determines in how many different groups a user can be queued at the same time by default.';
$string['cfg_moodlesync_head'] = 'Synchronisation behaviour';
$string['cfg_moodlesync_head_info'] = 'How grouptools should behave if moodle group members are added/deleted or single groups are deleted';
$string['cfg_name_scheme'] = 'Standard name scheme';
$string['cfg_name_scheme_desc'] = 'Standard name scheme used for group creation';
$string['cfg_show_members'] = 'Show group members';
$string['cfg_show_members_desc'] = 'Determines if group members should be visible by default';
$string['cfg_use_individual'] = 'Use individual size';
$string['cfg_use_individual_desc'] = 'If individual group size for each group should be used by default';
$string['cfg_use_queue'] = 'Use queueing';
$string['cfg_use_queue_desc'] = 'If queueing registrations on full groups should be used by default.';
$string['cfg_use_size'] = 'Use group size';
$string['cfg_use_size_desc'] = 'If group size should be limited by default';
$string['cfg_users_queues_limit'] = 'Queue places per user';
$string['cfg_users_queues_limit_desc'] = 'Determines in how many different groups a user can be queued at the same time by default.';
$string['change_group'] = 'Change group';
$string['change_group_to'] = 'Continue with group-change to <strong>{$a->groupname}</strong>?';
$string['change_group_to_success'] = 'Group-change successful! <strong>{$a->username}</strong> is now registered in group <strong>{$a->groupname}</strong>!';
$string['changes_saved'] = 'Changes saved';
$string['checkbox_control_header'] = 'De-/select groups and groupings';
$string['checkbox_control_header_help'] = '<p>By using this function you can activate/deactivate groups of one or more groupings within your grouptool:
    <ol>
        <li>Choose in the multiple-select field "All" (all available groups will be activated/deactivated), one grouping or several groupings (by switching to multiselect using the small icon next to it and using Ctrl + Click).</li>
        <li>Use one of the following options "Select/ Deselect/ Invert":
            <ul>
                <li><b>Select:</b> The groups of the chosen grouping(s) will be activated.</li>
                <li><b>Deselect:</b> The groups of the chosen grouping(s) will be deactivated </li>
                <li><b>Invert:</b> All groups of the non-chosen groupings will be activated. </li>
            </ul>
        </li>
        <li>Asume your choice by clicking on the button "Go".</li>
    </ol>
</p>';
$string['choose'] = 'Choose...';
$string['choose_group'] = 'You must choose a target group!';
$string['choose_max'] = 'Maximum groups to choose';
$string['choose_max_text'] = 'You are allowed to choose <strong>{$a}</strong> group(s) at most!';
$string['choose_min'] = 'Minimum groups to choose';
$string['choose_min_max_text'] = 'You have to choose between <strong>{$a->min}</strong> and <strong>{$a->max}</strong> groups!';
$string['choose_min_text'] = 'You have to choose at least <strong>{$a}</strong> group(s)!';
$string['choose_minmax_title'] = 'Groups to choose';
$string['choose_targetgroup_import'] = 'Import into group(s)';
$string['choose_targetgroup_unregister'] = 'Deregister from group(s)';
$string['chooseactivity'] = 'You have to choose an activity before data can be displayed!';
$string['completiondetail:register'] = 'Register in groups: {$a}';
$string['completionregister'] = 'Student must be registered in groups:';
$string['condition_prevent_access'] = 'The current conditions prevent you from accessing the grouptool instance!';
$string['confirm_delete'] = 'You are about to completely delete the group. This will remove all members from this group irrecoverable. Are you SURE you want to continue?';
$string['confirm_delete_title'] = 'Do you really want to delete this element?';
$string['copied_grade_feedback'] = 'Group grading<br />
+Submission from: <strong>{$a->student}</strong><br />
+Graded by: <strong>{$a->teacher}</strong><br />
+Original Date/Time: <strong>{$a->date}</strong><br />
+Feedback: <strong>{$a->feedback}</strong>';
$string['copy'] = 'Copy';
$string['copy_chosen'] = 'Copy chosen';
$string['copy_grade_confirm'] = 'Continue copying this grade?';
$string['copy_grade_overwrite_confirm'] = 'Continue copying this grade? Existing previous grades will be overwritten!';
$string['copy_grades_confirm'] = 'Continue copying these grades?';
$string['copy_grades_errors'] = 'At least 1 error occurred during copying of grades:';
$string['copy_grades_overwrite_confirm'] = 'Continue copying these grades? Existing previous grades get overwritten!';
$string['copy_grades_success'] = 'The following grades where successfully updated:';
$string['copy_refgrades_feedback'] = 'Copy reference grades and feedback for selected groups other group members';
$string['copygrade'] = 'Copy grade';
$string['could_not_add'] = 'Could not add <strong>{$a->username}</strong> to group <strong>{$a->groupname}</strong>';
$string['couldnt_move_down'] = 'Could not move group down!';
$string['couldnt_move_up'] = 'Could not move group up!';
$string['createGroups'] = 'Create groups';
$string['create_1_person_groups'] = 'Create 1 person groups';
$string['create_1_person_groups_help'] = 'Create 1-person-groups - here a group for each chosen user is created. Besides # and @ you can use the following tags which will be replaced with the users data:
<ul>
<li>[username] - the user\'s username</li>
<li>[firstname] - the user\'s first name</li>
<li>[lastname] - the user\'s last name</li>
<li>[idnumber] - the user\'s idnumber</li>
</ul>
If some data is missing the tag will be replaced by tagnameXX where XX stands for the number of the group.';
$string['create_assign_groupings'] = 'Create/Assign groupings';
$string['create_fromto_groups'] = 'Create groups with numbers from an interval (i.e. from 34 to 89), <strong>without automatic allocation</strong> of group members';
$string['create_fromto_groups_help'] = 'Create groups with numbers from an interval (i.e. from 34 to 89) - use this mode to create (missing) groups (i.e. Group 4, Group 5, Group 6). Just insert limits and how many digits you wish to use at least for the names (i.e. 1, 01, 001, 0001...). It is possible to define a certain group size with "Number of group Members M". There will be <strong>no automatic allocation</strong> of group members.';
$string['create_groupings_confirm'] = 'Continue to create groupings as previewed above?';
$string['create_groupings_confirm_problem'] = 'At least 1 error occurred (refer to preview above)!';
$string['create_groups_confirm'] = 'Continue to create groups as previewed above?';
$string['create_groups_confirm_problem'] = 'When trying to create the new groups based on the given name schema conflicts are encountered - see preview - Moodle groups must have unique names. The conflict can be due to existing groups with the same name or a syntax error in the naming scheme (... eg. empty, missing # symbol).';
$string['create_n_m_groups'] = 'Create N groups for M members, <strong>without automatic allocation</strong> of group members';
$string['create_n_m_groups_help'] = 'Create N groups for M members - Create with this modus a specific number of groups (N groups) with a specific groupsize (M members), e.g. seven groups with space for three members each. There will be <strong>no automatic allocation</strong> of group members.';
$string['createinsertgrouping'] = 'Add to grouping';
$string['deactivated_group'] = 'Deactivated group';
$string['deactivated_groups'] = 'Deactivated groups!';
$string['define_amount_groups'] = 'Define number of groups N';
$string['define_amount_groups_help'] = 'Define number of groups N - You choose users from which role to use for group creation and enter the desired amount of groups in Group/Member count text field. In name scheme you can enter a name scheme for the groups using
<ul>
<li># (will be replaced with the group-number) and</li>
<li>@ (will be replaced with a letter-representation of the group number)</li>
</ul>
Then the chosen users get spread on the desired amount of groups.';
$string['define_amount_members'] = 'Define number of group members M';
$string['define_amount_members_help'] = 'Define number of group members M - Here you tell the grouptool how many members each group should ideally have. The needed amount of groups will be calculated automatically. If you check prevent last small group the users in this group get spread on the others if the last groups fill-ratio lies under 70%.';
$string['delete_reference'] = 'Delete from grouptool';
$string['description'] = 'Description';
$string['deselect'] = 'Deselect';
$string['determinismerror'] = 'The registration end can\'t be before the registration start or in the past.';
$string['digits'] = 'Minimum digits';
$string['disabled'] = 'Disabled';
$string['drag'] = 'Move';
$string['due'] = 'Grouptool due';
$string['duedate'] = 'Registration end';
$string['duedate_help'] = 'End of registration period. After this date students are no longer able to register themselves and teacher get access to resolving-queues-functionality, etc.';
$string['duedateno'] = 'No due date';
$string['early'] = '{$a} early';
$string['error_activating_group'] = 'Error while activating group <strong>{$a->groupid}</strong> in grouptool <strong>{$a->grouptoolid}</strong>!';
$string['error_at'] = 'Error at';
$string['error_deactivating_group'] = 'Error while deactivating group <strong>{$a->groupid}</strong> in grouptool <strong>{$a->grouptoolid}</strong>!';
$string['error_getting_data'] = 'Error while getting group data! Either none or more than 1 group where returned!';
$string['error_saving_new_order'] = 'Error while saving new order for groups: <strong>{$a}</strong>';
$string['eventagrpcreated'] = 'Active-group created';
$string['eventagrpdeleted'] = 'Active-group deleted';
$string['eventagrpsupdated'] = 'Active-groups updated';
$string['eventdequeuingstarted'] = 'Dequeuing started';
$string['eventgroupcreationstarted'] = 'Group-creation started';
$string['eventgroupgraded'] = 'Group graded';
$string['eventgroupingscreated'] = 'Groupings created';
$string['eventgrouprecreated'] = 'Group recreated';
$string['eventoverviewexported'] = 'Exported overview';
$string['eventqueueentrycreated'] = 'Queue entry created';
$string['eventqueueentrydeleted'] = 'Queue entry deleted';
$string['eventregistrationcreated'] = 'Registration created';
$string['eventregistrationdeleted'] = 'Registration deleted';
$string['eventregistrationpushstarted'] = 'Registration push started';
$string['eventuserimported'] = 'User imported';
$string['eventuserlistexported'] = 'Exported user-list';
$string['eventusermoved'] = 'User moved';
$string['exceedgroupqueuelimit'] = 'Exceeding group\'s queue limit!';
$string['exceedgroupsize'] = 'Exceeding group\'s size!';
$string['exceeduserqueuelimit'] = 'Exceeding user\'s queue limit!';
$string['exceeduserreglimit'] = 'Exceeding user\'s registration limit!';
$string['feedbackplural'] = 'Feedbacks';
$string['filters_legend'] = 'Filter data';
$string['filterunoccupied'] = 'Show only groups with free spots';
$string['followchanges'] = 'Follow changes';
$string['forceregistration'] = 'Force registration in grouptool';
$string['forceregistration_help'] = 'Note that groups of the grouptool fundamentally differ from the moodle standard groups of the course. Tick the checkbox if you want to import the users into the grouptool group as well as into the moodle standard group.';
$string['found_multiple'] = 'Can\'t identify uniquely, found multiple users:';
$string['free'] = 'Free';
$string['fromgttoerror'] = 'To-value has to be greater than or equal from-value';
$string['fullgroup'] = 'Group is full';
$string['general_information'] = 'General information';
$string['general_registration_exception'] = 'A general registration exception occured and we can\'t determine why automatically!';
$string['global_userstats'] = '<strong>{$a->reg_users}</strong> of <strong>{$a->users}</strong> users are registered. <strong>{$a->notreg_users}</strong> still without registration.';
$string['grading'] = 'Grading';
$string['grading_activity_title'] = 'Activity';
$string['grading_alt'] = 'Tools for copying grades from 1 group member to all others in the group, either for 1 group or for a set of groups.';
$string['grading_filter_select_title'] = 'Group or groups';
$string['grading_filter_select_title_help'] = 'Choose which group or groups to use:<ul><li>Without conflicts - all groups, in which only 1 group member got graded for the chosen activity</li><li>All - all groups</li><li>"Group-name" - only the specifically selected group</li></ul>';
$string['grading_grouping_select_title'] = 'Filter grouping';
$string['group_administration'] = 'Administrate groups';
$string['group_administration_alt'] = 'Administrate (active) groups and groupings';
$string['group_assign_error'] = 'Couldn\'t assign group!';
$string['group_assign_error_prev'] = 'Can\'t assign group!';
$string['group_creation'] = 'Create groups';
$string['group_creation_alt'] = 'Create groups';
$string['group_creation_failed'] = 'Creation of groups failed!';
$string['group_creation_success'] = 'Successfully created groups!';
$string['group_not_found'] = 'Group <strong>{$a->groupid}</strong> couldn\'t be found in grouptool <strong>{$a->grouptoolid}</strong>!';
$string['group_not_in_grouping'] = 'Chosen group is not member of chosen grouping!';
$string['group_or_member_count'] = 'Group/Member count';
$string['group_places'] = 'Group places';
$string['group_places_help'] = 'The field \'group place\' informs (separated by backslash) firstly about the total number of group places, secondly about the number of free places and thirdly about the number of group places that are already occupied.';
$string['groupchange_from_non_unique_reg'] = 'Can\'t change group due to non unique former group!';
$string['groupcreation'] = 'Group creation';
$string['groupcreationmode'] = 'Mode';
$string['groupfromtodigits'] = 'From, to &amp; digits in group names:';
$string['groupinfo'] = 'Group information';
$string['grouping_assign_error'] = 'Couldn\'t be successfully assigned to the grouping:';
$string['grouping_assign_error_prev'] = 'Can\'t be successfully assigned to the grouping:';
$string['grouping_assign_success'] = 'Were successfully assigned:';
$string['grouping_assign_success_prev'] = 'Can be successfully assigned:';
$string['grouping_creation_error'] = 'Couldn\'t create grouping!';
$string['grouping_creation_error_prev'] = 'Can\'t create grouping!';
$string['grouping_creation_only_success'] = 'Grouping successfully created!';
$string['grouping_creation_only_success_prev'] = 'Grouping can be successfully created!';
$string['grouping_creation_success'] = 'Successfully created grouping and assigned group <strong>{$a}</strong> to it!';
$string['grouping_creation_success_prev'] = 'Can successfully create grouping and assign group <strong>{$a}</strong> to it!';
$string['grouping_exists_error'] = 'Couldn\'t create grouping because there already exists a grouping with this name!';
$string['grouping_exists_error_prev'] = 'Can\'t create grouping because there already exists a grouping with this name!';
$string['groupings_created_and_groups_added'] = 'Grouping(s) created and/or group(s) added!';
$string['groupingscreation'] = 'Create and assign groupings';
$string['groupingselect'] = 'Groupings for selected groups';
$string['groupingselect_help'] = 'Create groupings for selected groups:<ul>
<li>Create ONE grouping for all selected groups. The name of the grouping can be chosen freely.</li>
<li>Create a grouping for EACH selected group. The grouping is named after the respective group.</li>
<li>Add selected groups to an existing grouping</li></ul>';
$string['groupoverview'] = 'Group overview';
$string['groups_created'] = 'Groups successfully created!';
$string['groups_queues_limit'] = 'Queue places per group';
$string['groups_queues_limit_help'] = 'Limits the available queue places per group if activated';
$string['groupselection'] = 'Group selection';
$string['groupselection_help'] = 'Choose the groups/persons for which you wish to copy the chosen reference-grade and -feedback by activating the corresponding checkboxes. If only 1 group is displayed you select the source for copying chosen grade by using the corresponding button right of the entry.';
$string['groupsize'] = 'Group size';
$string['groupsize_gets_enabled'] = 'If you continue groupsize will be enabled automatically. Prevent this behaviour by using 0 as <strong>{$a->field}</strong>';
$string['groupsize_individual_gets_enabled'] = 'If you continue individual groupsize will be enabled automatically. Prevent this behaviour by using 0 as <strong>{$a->field}</strong> to not use group size at all or use <strong>{$a->globalsize}</strong> to enable global group size only!';
$string['groupstatus'] = 'Status';
$string['groupstatus_help'] = 'The current status of a group is visualized by the color:<ul><li>Green - active group. The group is assigned to this grouptool. If self registration is active, students may register to this group.</li><li>Grey - inactive group. The group is not available in this grouptool.</li></ul>By clicking on the symbol the status can be changed.';
$string['grouptool'] = 'Grouptool';
$string['grouptool:addinstance'] = 'Add a grouptool instance to course.';
$string['grouptool:administrate_groups'] = 'Administrate (active) groups and groupings';
$string['grouptool:create_groupings'] = 'Create groupings using grouptool.';
$string['grouptool:create_groups'] = 'Create groups using grouptool';
$string['grouptool:export'] = 'Export group and registration data to different formats';
$string['grouptool:grade'] = 'Copy grades from a group-member to others';
$string['grouptool:grade_own_group'] = 'Copy grades from a group-member to others if the original grade has been given by me';
$string['grouptool:move_students'] = 'Move students to other groups.';
$string['grouptool:register'] = 'Register self in an active group using grouptool';
$string['grouptool:register_students'] = 'Register students in an active group using grouptool. (Also used for resolving queues)';
$string['grouptool:unregister_students'] = 'Deregister students from groups using grouptool.';
$string['grouptool:view_description'] = 'View grouptools description';
$string['grouptool:view_groups'] = 'View active groups';
$string['grouptool:view_own_registration'] = 'View own registration(s).';
$string['grouptool:view_registrations'] = 'View who\'s registered/queued in which active group using grouptool';
$string['grouptool:view_regs_course_overview'] = 'View a userlist containing who\'s registered/queued in which active group using grouptool.';
$string['grouptool:view_regs_course_view'] = 'View a userlist containing who\'s registered/queued in which active group using grouptool.';
$string['grouptool:view_regs_group_overview'] = 'View a grouped list containing who\'s registered/queued in which active group using grouptool.';
$string['grouptool:view_regs_group_view'] = 'View a grouped list containing who\'s registered/queued in which active group using grouptool.';
$string['grouptoolfieldset'] = 'Instance settings';
$string['grouptoolname'] = 'Grouptool name';
$string['grouptoolname_help'] = 'The name of the grouptool-instance';
$string['groupuser_import'] = 'Import group users';
$string['groupuser_unregister'] = 'Deregister group users';
$string['grp_marked'] = 'Marked for registration';
$string['grpsizezeroerror'] = 'Group size has to be greater than or equal 1. Letters or other signs are not allowed.';
$string['ifgroupdeleted'] = 'If groups get deleted';
$string['ifgroupdeleted_help'] = 'Should deleted groups be recreated for the grouptool-instance or should the references in grouptool (additional group-data, registrations and queue) be deleted? Note: If you select "recreate group", then groups wills be recreated automatically after deletion under "Course administration / Users / Groups".';
$string['ifmemberadded'] = 'If group members get added';
$string['ifmemberadded_help'] = 'Should new group members added via moodle be also registered in grouptool or be ignored?';
$string['ifmemberremoved'] = 'If group members get removed';
$string['ifmemberremoved_help'] = 'Should grouptool registrations be deleted if users are deleted from the corresponding moodle-group';
$string['ignorechanges'] = 'Ignore changes';
$string['ignored_not_found_users'] = 'At least one user could not be added to the group!';
$string['ignored_not_found_users_unregister'] = 'At least one user could not be found!';
$string['ignoring_not_found_users'] = 'At least one user has not been found in database. All those users will be ignored!';
$string['immediate_reg'] = 'Immediate registration';
$string['immediate_reg_help'] = 'If enabled the (de)registrations will be forwarded to the moodle-system. If not enabled the registrations get cached in grouptool and can be pushed to the moodle-system by the teacher.';
$string['import'] = 'Import';
$string['import_conflict_user_queued'] = 'User <strong>{$a->fullname}</strong> is already queued in group <strong>{$a->groupname}</strong>!';
$string['import_desc'] = 'Import users via list of ID-numbers into certain groups';
$string['import_in_inactive_group_rejected'] = 'The registration in grouptool group <strong>{$a}</strong> has been rejected due to it\'s inactivity. Activate the group in this grouptool to enable the registration.';
$string['import_in_inactive_group_warning'] = 'Note: Group <strong>{$a}</strong> is currently inactive in the grouptool context and will therefore not be displayed.';
$string['import_progress_completed'] = 'Import completed';
$string['import_progress_import'] = 'Import user';
$string['import_progress_preview_completed'] = 'Importpreview completed';
$string['import_progress_search'] = 'Search user';
$string['import_progress_start'] = 'Start import';
$string['import_skipped'] = 'Skipped user <strong>{$a->fullname}</strong> for group <strong>{$a->groupname}</strong>!';
$string['import_user'] = 'Import <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) in group <strong>{$a->groupname}</strong> succeeded.';
$string['import_user_prev'] = 'Import <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) in group <strong>{$a->groupname}</strong>.';
$string['import_user_problem'] = 'Problem during import of <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong> - <strong>{$a->id}</strong>) in group <strong>{$a->groupname}</strong>.';
$string['importbutton'] = 'Import users';
$string['inactive'] = 'Inactive';
$string['inactivegroups'] = 'Inactive groups';
$string['inactivegroups_hide'] = 'Hide inactive groups';
$string['inactivegroups_show'] = 'Show inactive groups';
$string['includedeleted'] = 'Include deleted users';
$string['includedeleted_help'] = 'If checked, deleted users won\'t get filtered out of the list. Deleted user-accounts can\'t be enroled in the course during import process.';
$string['includeonlyactiveenrol'] = 'Include only active enrolments';
$string['includeonlyactiveenrol_help'] = 'If enabled, suspended users will not be included in groups.';
$string['incomplete_only_label'] = 'Show only groups with missing grades';
$string['incorrect_tab'] = 'Incorrect tab, this tab is not available!';
$string['individual_size_info'] = '* Groupsize of grouptool settings';
$string['intro'] = 'Description';
$string['invert'] = 'Invert';
$string['landscape'] = 'Landscape';
$string['late'] = '{$a} late';
$string['limit'] = 'limit';
$string['loading'] = 'loading...';
$string['max_queues_reached'] = 'Maximum queues reached!';
$string['max_regs_reached'] = 'Maximum registrations reached!';
$string['maxmembers'] = 'Global group size';
$string['messageprovider:grouptool_moveupreg'] = 'Registration by moving up the queue';
$string['missing_source_selection'] = 'No source selected!';
$string['modulename'] = 'Grouptool';
$string['modulename_help'] = 'The grouptool-module serves different kind of group-related tasks:<ul><li>It allows to create groups in different modes (amount of groups/group members, single-person-groups, interval of groups) as well as groupings for each group.</li><li>Furthermore it can be used to give students the possibility to register themselves to certain groups during a defined period.</li><li>The module also has the ability of group-grading - i.e. copying activity grades from 1 group member to other group members.</li><li>Import of users into groups via list of ID-numbers</li><li>overview over every course group including all registrations, members, queues, etc. And the ability to export this data into different files-formats (PDF/XLSX/ODS/TXT).</li><li>Exportable list of all course-users including their registrations, queues, etc.</li></ul><p>(!) Note that groups of the grouptool fundamentally differ from the moodle standard groups of the course. To ensure consistency among the group types set parameters of the section "Behaviour on changes in moodle" to "follow changes".</p>';
$string['modulenameplural'] = 'Grouptools';
$string['moodlesync'] = 'Behaviour on changes in moodle';
$string['moodlesync_help'] = 'How grouptools should behave if moodle group members are added/deleted or single groups are deleted';
$string['moreregsthanpossible'] = 'Required registrations for completion cannot be higher than maximum allowed registrations';
$string['move_user'] = 'Move from queue to group';
$string['movedown'] = 'Move 1 down';
$string['moveup'] = 'Move 1 up';
$string['multiple'] = 'Manage group users';
$string['multiple_desc'] = 'Multiple Registrations/Deregistrations';
$string['must_specify_groupingname'] = 'You have to provide a name for the grouping!';
$string['mustbegt0'] = 'Minimum groups to choose have to be greater than or equal 0. Letters or other signs are not allowed.';
$string['mustbegtoeqmin'] = 'Has to be greater than or equal the minimum';
$string['mustbeposint'] = 'Maximum groups to choose have to be greater than or equal 1. Letters or other signs are not allowed.';
$string['mygroups_only_label'] = 'Show only sources entries I graded';
$string['myoverview_registrations_missing'] = 'Registrations missing';
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['nameschemenotunique'] = 'Group names from this name scheme are not unique (<strong>{$a}</strong>). Please choose another one or use # (numeric index) or @ (alphabetic index) to create unique group names.';
$string['namingscheme'] = 'Name scheme';
$string['namingscheme_help'] = '<p>The Name scheme defines how groups will be named automatically when you add new groups.</p>
<p>Please take note of:<br />
<ol><li>The name of a group has to be unique within your moodle course. </li>
<li>If you want to create more than one group at once, you have to use tags to create unique names. </li></ol></p>
<p>Each of this tags will be replaced in the final group names. The tags in [] are related to the users data and the # and @ symbols will be replaced through the groups serial number. If JavaScript is enabled you can simply click on the tags to append them to the name-scheme. Please consider that the group names have to be unique in each course and therefore you may have to alter the name scheme until it\'s conflict-free.</p>';
$string['no_conflictfree_to_display'] = 'No conflict-free groups to display. So we try to display all instead!';
$string['no_data_to_display'] = 'No group(s) data to display!';
$string['no_grades_present'] = 'No grades to show';
$string['no_groupmembers_to_display'] = 'No group members to display. So we try to display all groups instead!';
$string['no_groups_to_display'] = 'No groups to display!';
$string['no_queues_to_resolve'] = 'No queues present to resolve!';
$string['no_registrations'] = 'No registrations';
$string['no_target_selected'] = 'There\'s no destination for the copy operation selected. You must select at least 1 destination!';
$string['no_users_to_display'] = 'No users to display!';
$string['noaccess'] = 'You have no access to this module (maybe you do not belong to the right group?)!';
$string['nobody_queued'] = 'Nobody queued';
$string['nodeletion'] = 'Deletion of this group is disabled, due to at least one grouptool instance in this course being set to recreate the group on deletion!';
$string['nogroupingselected'] = 'No grouping(s) have been selected!';
$string['nogroups'] = 'No groups in this course.';
$string['nogroupsactive'] = 'No active groups in this grouptool.';
$string['nogroupschoose'] = 'Choose groups';
$string['nogroupscreate'] = 'Create groups';
$string['nogroupsinactive'] = 'No inactive groups in this grouptool.';
$string['nogrouptools'] = 'There are no grouptools!';
$string['nonconflicting'] = 'Without conflicts';
$string['noregistrationdue'] = 'unlimited';
$string['nosmallgroups'] = 'Prevent small groups';
$string['nosmallgroups_help'] = 'If enabled ensures that each group is at least filled by 70% of it\'s size! If a (or more precise the last) group would be filled less than 70% the users for this group get spread over the other groups, causing them to have more members than specified!';
$string['not_allowed_to_show_members'] = 'You have no permission to view this information!';
$string['not_graded_by_me'] = 'Graded by another user';
$string['not_in_queue_or_registered'] = '<strong>{$a->username}</strong> is neither registered nor queued in group <strong>{$a->groupname}</strong>';
$string['not_permitted'] = 'Not permitted';
$string['not_registered'] = 'You\'re not yet registered!';
$string['not_synced_reg_present'] = 'not syncronized registrations present';
$string['notenoughregs'] = 'User\'s needs more registations!';
$string['nothing_to_push'] = 'Nothing to push!';
$string['notification:group_recreated'] = 'The group <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a> has been recreated due to grouptool <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">{$a->grouptoolname}</a> being set to recreate deleted groups.';
$string['notification:registrations_recreated'] = 'The group\'s <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a> members have been added again due to grouptool <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">$a->grouptoolname}</a> being set to recreate deleted groups. The group itself was recrated by another grouptool instance.';
$string['nowhere_queued'] = 'Not queued';
$string['number_of_groups'] = 'Number of groups N';
$string['number_of_members'] = 'Number of group members M';
$string['number_of_students'] = 'Number of students';
$string['occupied'] = 'Occupied';
$string['onenewgrouping'] = 'In ONE new grouping';
$string['onenewgroupingpergroup'] = 'One grouping PER group';
$string['orientation'] = 'PDF-orientation';
$string['outdated'] = 'deviating';
$string['overflowwarning'] = 'If you continue importing the group size in instance <strong>{$a->instancename}</strong> will be exceeded!';
$string['overview'] = 'Overview';
$string['overview_alt'] = 'Overview over groups and group members';
$string['overview_tab'] = 'Group view';
$string['overview_tab_alt'] = 'Open group view';
$string['overwrite_label'] = 'Overwrite existing grades';
$string['place_allocated_in_group_success'] = 'Group <strong>{$a->groupname}</strong> has successfully been marked for registration';
$string['pluginadministration'] = 'Grouptool administration';
$string['pluginname'] = 'Grouptool';
$string['portrait'] = 'Portrait';
$string['preview'] = 'Preview';
$string['privacy:metadata:agrpid'] = 'Identifier of the Moodle-group\'s representation in grouptool.';
$string['privacy:metadata:enrolexplanation'] = 'Grouptool enroles not already enroled users in the course during import in order to be able to add them to the group(s) to import into.';
$string['privacy:metadata:gradesexplanation'] = 'Grouptool is able to copy grades from one user to other members of the same group.';
$string['privacy:metadata:groupexplanation'] = 'Grouptool is managing members of Moodle\'s groups.';
$string['privacy:metadata:messageexplanation'] = 'Grouptool sends messages to users being promoted from the queue to being registered.';
$string['privacy:metadata:mod_grouptool_group_filter'] = 'What group to filter for?';
$string['privacy:metadata:mod_grouptool_mygroups_only'] = 'Should only own groups be considered/shown.';
$string['privacy:metadata:modified_by'] = 'Identifier of the user if modyfied by someone else.';
$string['privacy:metadata:queued'] = 'Contains all queued users.';
$string['privacy:metadata:registered'] = 'Contains the registered users and users marked for registration.';
$string['privacy:metadata:timestamp'] = 'Datetime the record got modified last.';
$string['privacy:metadata:userid'] = 'Identifier of the user.';
$string['queue'] = 'Queue';
$string['queue_and_multiple_reg_title'] = 'Queues and multiple registrations';
$string['queue_in_group'] = 'Proceed queueing <strong>{$a->username}</strong> in group <strong>{$a->groupname}</strong>?';
$string['queue_in_group_success'] = 'Successfully queued <strong>{$a->username}</strong> in group <strong>{$a->groupname}</strong>!';
$string['queue_you_in_group'] = 'Proceed queueing you in group <strong>{$a->groupname}</strong>?';
$string['queue_you_in_group_success'] = 'Successfully queued you in group <strong>{$a->groupname}</strong>!';
$string['queued'] = 'Queued';
$string['queued_in_group_info'] = '<strong>{$a->username}</strong> queued in group <strong>{$a->groupname}</strong>';
$string['queued_on_rank'] = 'Queued on rank #{$a}';
$string['queueing_is'] = 'Queueing is';
$string['queues'] = 'Queues';
$string['queues_max'] = 'Max. simultaneous queue-places per participant';
$string['queuesgrp'] = 'Queue and maximum queue places';
$string['queuesgrp_help'] = 'If queues are enabled, students who try to register in a full group, get queued until someone deregisters from the very same group. After the deadline the teacher has the ability to move students to other groups if they are still queued, where groups are filled using the current sort order of the group list. You should define a maximum number of groups in whom a user can be queued.<br />Limits the maximum simultaneous queue entries for each person in this grouptool.';
$string['queuesizeerror'] = 'Queue places have to be greater than or equal 0. Letters or other signs are not allowed.';
$string['queuespresent'] = 'Queues are already present! These will be deleted if you continue. To continue hit the save button again!';
$string['queuespresenterror'] = 'There are users listet in queues. You can\'t deactivate queues until these are resolved.';
$string['rank'] = 'Rank';
$string['recreate_group'] = 'Recreate group';
$string['reference_grade_feedback'] = 'Reference-grade / Feedback';
$string['refresh_table_button'] = 'Refresh preview';
$string['reg_in_full_group'] = 'Registration of <strong>{$a->username}</strong> in group <strong>{$a->groupname}</strong> not possible, as group is full!';
$string['reg_not_open'] = 'The registration is not possible at the moment. Maybe the deadline\'s over or it was not allowed at all.';
$string['reg_you_in_full_group'] = 'Registration in group <strong>{$a->groupname}</strong> not possible, as group is full!';
$string['register'] = 'Register';
$string['register_in_group'] = 'Are you sure you want to register <strong>{$a->username}</strong> in group <strong>{$a->groupname}</strong>?';
$string['register_in_group_success'] = 'Successfully registered <strong>{$a->username}</strong> in group <strong>{$a->groupname}</strong>!';
$string['register_you_in_group'] = 'Are you sure you want to register in group <strong>{$a->groupname}</strong>?';
$string['register_you_in_group_success'] = 'You successfully registered in group <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmail'] = 'You successfully registered in group <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmailhtml'] = 'You successfully registered in group <strong>{$a->groupname}</strong>!';
$string['registered'] = 'Registered';
$string['registered_in_group_info'] = '{$a->username} registered in group <strong>{$a->groupname}</strong>';
$string['registered_on_rank'] = 'Registered on rank #{$a}';
$string['registration_missing'] = '1 registration missing';
$string['registration_period_end'] = 'End of registration for';
$string['registration_period_start'] = 'Begin of registration for';
$string['registrationdue'] = 'Registration end';
$string['registrationnotification'] = '{$a->course->shortname} -> {$a->modulenameplural} -> {$a->grouptoolname}
----------------------------------------------------------
{$a->message}
----------------------------------------------------------';
$string['registrations'] = 'Group-registrations';
$string['registrations_missing'] = '{$a} registrations missing';
$string['regpresent'] = 'User\'s already {$a}';
$string['rename_failed'] = 'Rename failed!';
$string['renamed_group'] = 'Renamed group!';
$string['require_registration'] = 'Require registrations';
$string['require_registration_help'] = 'The minimum amount of groups students need to register to in order to mark this activity as completed. Spots in queues are not considered by the rule. If the number is higher than 1, "Multiple registrations" needs to be activated and "Maximum groups to choose" needs to be greater or equal to this value.';
$string['reset_agrps'] = 'Reset active groups';
$string['reset_agrps_help'] = 'Resets all course groups to be inactive for grouptools. This will also delete every registration and queue in grouptools of this course!';
$string['reset_queues'] = 'Reset queues';
$string['reset_queues_help'] = 'Queues get automatically deleted if active groups get reset.';
$string['reset_registrations'] = 'Reset registrations';
$string['reset_registrations_help'] = 'Registrations get automatically deleted if active groups get reset.';
$string['reset_transparent_unreg'] = 'Deregister all pushed group members';
$string['reset_transparent_unreg_help'] = 'Remove all users from those groups which are represented by active grouptool-groups';
$string['resize'] = 'Resize';
$string['resized_group'] = 'Changed group size!';
$string['resolve_queue'] = 'Resolve queues';
$string['resolve_queue_legend'] = 'Resolve queues';
$string['resolve_queue_title'] = 'Resolve pending queues';
$string['search:activity'] = 'Grouptool - activity information';
$string['select'] = 'Select';
$string['selected'] = 'Selected';
$string['selectfromcohort'] = 'Select members from cohort';
$string['selectfromgroup'] = 'Select members from group';
$string['selectfromgroup_help'] = 'Only allocate members of the given group into newly created groups';
$string['selectfromgrouping'] = 'Select members from grouping';
$string['selectfromgrouping_help'] = 'Only allocate members of the given grouping into newly created groups';
$string['selectmultiple'] = 'select multiple';
$string['selectsingle'] = 'select single';
$string['selfregistration'] = 'Registration';
$string['selfregistration_alt'] = 'Register to one or more groups (depending on settings)';
$string['setactive'] = 'Activate';
$string['setinactive'] = 'Deactivate';
$string['settingspage'] = 'Edit group settings';
$string['show_members'] = 'Show group members';
$string['show_members_help'] = 'Enables students (under certain circumstances) to see who\'s already registered in a group.<br />
<ul>
    <li><strong>No:</strong> don\'t show groups\' members at all</li>
    <li><strong>All - after due date:</strong> show groups\' members for all groups after the due date</li>
    <li><strong>Own - after due date:</strong> show user\'s own groups\' members after the due date</li>
    <li><strong>Own - after registration:</strong> show user\'s own groups\' members after he/she registered himself/herself or has been registered by someone else</li>
    <li><strong>Yes:</strong> show groups\' members</li>
</ul>';
$string['showafterdue'] = 'All - after due date';
$string['showownafterdue'] = 'Own - after due date';
$string['showownafterreg'] = 'Own - after registration';
$string['size'] = 'Group size';
$string['size_grp'] = 'Group size settings';
$string['size_grp_help'] = 'If group size is activated the maximum members for each group get limited (set for the whole instance via text field). If additionally the "individual size" is activated, the group size for each group can be defined in the following list.';
$string['skip_user_import'] = 'Skip for import';
$string['skipped'] = 'Skipped';
$string['sortlist_no_data'] = 'There are no groups present at the moment!';
$string['source'] = 'Source';
$string['source_missing'] = 'There\'s no source to copy from!';
$string['sources_missing'] = 'There\'s at least 1 group without a chosen source to copy from!';
$string['start'] = 'Start';
$string['status'] = 'Status';
$string['status_help'] = '<ul>
<li><strong>✔</strong> registered in Moodle-group and grouptool</li>
<li><strong>?</strong> registered in Moodle-group but not in grouptool</li>
<li><strong>+</strong> registered in grouptool but not in Moodle-group</li>
<li><strong>1, 2, 3...</strong> queued in grouptool</li>
</ul>';
$string['successfully_deleted_groups'] = 'Successfully deleted groups!';
$string['swapped_groups'] = 'Swapped groups <strong>{$a->a}</strong> (order <strong>{$a->aorder}</strong>) and <strong>{$a->b}</strong> (order <strong>{$a->border}</strong>)!';
$string['switched_to_all_groups'] = 'Changed group filter to all groups!';
$string['target'] = 'Target';
$string['too_many_queue_places'] = 'Can\'t queue <strong>{$a->username}</strong> in group <strong>{$a->groupname}</strong> because <strong>{$a->username}</strong> is already queued in too many groups!';
$string['too_many_regs'] = 'User is registered/queued in too many groups already!';
$string['toolessregspresent'] = 'At least 1 user is registered in too less groups, therefore the minimum groups to choose has to be at most {$a}.';
$string['toomanyregs'] = 'Attention: In at least one group there are more group members than specified by the desired new group size.<br />Reduce the group members in the groups before changing the group size.';
$string['toomanyregspresent'] = 'At least 1 user is registered in too many groups, therefore the maximum groups to choose has to be at least {$a}.';
$string['total'] = 'Total';
$string['unqueue'] = 'Remove from queue';
$string['unqueue_from_group'] = 'Continue removing <strong>{$a->username}</strong> from the queue of group <strong>{$a->groupname}</strong>?';
$string['unqueue_from_group_success'] = 'Successfully removed <strong>{$a->username}</strong> from the queue of group <strong>{$a->groupname}</strong>!';
$string['unqueue_you_from_group'] = 'Continue removing you from the queue of group <strong>{$a->groupname}</strong>?';
$string['unqueue_you_from_group_success'] = 'Successfully removed you from the queue of group <strong>{$a->groupname}</strong>!';
$string['unreg'] = 'Deregister';
$string['unreg_from_group'] = 'Continue deregistrating <strong>{$a->username}</strong> from group <strong>{$a->groupname}</strong>?';
$string['unreg_from_group_success'] = 'Successfully deregistered <strong>{$a->username}</strong> from group <strong>{$a->groupname}</strong>!';
$string['unreg_is'] = 'Deregistration';
$string['unreg_not_allowed'] = 'Deregistration is not allowed!';
$string['unreg_you_from_group'] = 'Continue deregistering you from group <strong>{$a->groupname}</strong>?';
$string['unreg_you_from_group_success'] = 'Successfully deregistered you from group <strong>{$a->groupname}</strong>!';
$string['unregfrommgroups'] = 'Force deregistration from grouptool';
$string['unregfrommgroups_help'] = 'Deregister users not only from grouptool, but also form moodle-group.';
$string['unregister'] = 'Deregistration';
$string['unregister_conflict_user_not_in_group'] = 'User <strong>{$a->fullname}</strong> is not in group <strong>{$a->groupname}</strong>!';
$string['unregister_desc'] = 'Deregister mutiple users';
$string['unregister_from_inactive_group_warning'] = 'Note: Group <strong>{$a}</strong> is currently inactive in the grouptool context and will therefore not be displayed.';
$string['unregister_in_inactive_group_warning'] = 'Note: Group <strong>{$a}</strong> is currently inactive in the grouptool context and will therefore not be displayed.';
$string['unregister_progress_completed'] = 'Deregistration completed';
$string['unregister_progress_preview_completed'] = 'Deregistrationpreview completed';
$string['unregister_progress_start'] = 'Start deregistration';
$string['unregister_progress_unregister'] = 'Deregister user';
$string['unregister_skipped'] = 'Skipped user <strong>{$a->fullname}</strong> for group <strong>{$a->groupname}</strong>!';
$string['unregister_user'] = 'Deregistration of <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) from group <strong>{$a->groupname}</strong> succeeded.';
$string['unregister_user_from_moodle_group'] = 'Deregistration of <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) from moodle group <strong>{$a->groupname}</strong> succeeded.';
$string['unregister_user_not_in_group'] = 'User <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) not in group <strong>{$a->groupname}</strong>!';
$string['unregister_user_only_in_moodle_group'] = 'User <strong>{$a->fullname}</strong> is only in moodle group <strong>{$a->groupname}</strong> but not in grouptool group!';
$string['unregister_user_prev'] = 'Deregistrating <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) from group <strong>{$a->groupname}</strong>.';
$string['unregisterbutton'] = 'Deregister users';
$string['update_grouplist_success'] = 'Successfully updated active groups!';
$string['updatemdlgrps'] = 'Register in moodle-groups';
$string['uptodate'] = 'up to date';
$string['use_all_or_chosen'] = 'Use all or selected';
$string['use_all_or_chosen_help'] = 'Select "All" to create a grouping for every course group. Use "Selected" to create groupings for checked groups only.';
$string['use_individual'] = 'Use individual size per group';
$string['use_individual_help'] = 'Override global group size with individual value for each group. These get set via the sortable group list on the bottom.';
$string['use_queue'] = 'Use queues';
$string['use_queue_help'] = 'Students can queue up for already full groups. This setting can only be used if self registration is enabled and a group size limit is set.';
$string['use_size'] = 'Activate';
$string['user'] = 'User';
$string['user_has_too_less_regs'] = 'Deregistration/dequeue not possible because <strong>{$a->username}</strong> is registered/queued in too less groups!';
$string['user_is_deleted'] = 'The found user-account (ID <strong>{$a->id}</strong>, Name <strong>{$a->fullname}</strong>) is already deleted. Therefore enrolment in this course isn\'t possible.';
$string['user_move_prev'] = '<strong>{$a->user}</strong> will be moved from the queue of group <strong>{$a->from_group}</strong> to group <strong>{$a->to_group}</strong>!';
$string['user_moved'] = '<strong>{$a->user}</strong> has been moved from the queue of group <strong>{$a->from_group}</strong> to group <strong>{$a->to_group}</strong>!';
$string['user_not_found'] = 'User <strong>{$a}</strong> couldn\'t be found!';
$string['userlist'] = 'User list';
$string['userlist_alt'] = 'View list of users and their registrations. Export data about users and their groups in different formats (PDF, plain text, Excel, etc.).';
$string['userlist_help'] = 'List of ID-numbers separated by one or more of the following characters <ul><li>[,] comma</li><li>[;] semicolon</li><li>[ ] space</li><li>[\\n] newline</li><li>[\\r] carriage return</li><li>[\\t] tabulator</li></ul>';
$string['userlist_tab'] = 'Course view';
$string['userlist_tab_alt'] = 'Open course view';
$string['users_queues_limit'] = 'Queue places per user';
$string['users_queues_limit_help'] = 'Limits the available queue places per user if activated';
$string['users_tab'] = 'Participants';
$string['users_tab_alt'] = 'Show Participants';
$string['view_registrations'] = 'View registrations';
$string['viewmoodlegroups'] = 'To Moodle groups';
$string['with_selection'] = 'With selected...';
$string['you_are_already_marked'] = 'You marked the group <strong>{$a->groupname}</strong> already for registration!';
$string['you_are_already_queued'] = 'You are already queued in group <strong>{$a->groupname}</strong>!';
$string['you_are_already_registered'] = 'You are already registered in group <strong>{$a->groupname}</strong>!';
$string['you_are_not_in_queue_or_registered'] = 'You are neither registered nor queued in group <strong>{$a->groupname}</strong>';
$string['you_change_group_to_success'] = 'Group-change successful! You are now registered in group <strong>{$a->groupname}</strong>!';
$string['you_have_too_less_regs'] = 'Deregistration/dequeue not possible because you\'re registered/queued in too less groups!';
$string['you_have_too_many_queue_places'] = 'Can\'t queue you in group <strong>{$a->groupname}</strong> because you are already queued in too many groups!';
$string['your_place_allocated_in_group_success'] = 'You successfully marked group <strong>{$a->groupname}</strong> for registration';
