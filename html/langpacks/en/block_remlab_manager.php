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
 * Strings for component 'block_remlab_manager', language 'en', version '4.5'.
 *
 * @package     block_remlab_manager
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Available';
$string['active_help'] = 'Whether this remote lab is operative at the moment or not.';
$string['block_title'] = 'Remote Laboratories Manager';
$string['cancel_delete_button'] = 'No';
$string['configure_existing_local_experience'] = 'Configure local experience';
$string['configure_lab'] = 'Configure remote lab';
$string['configure_new_local_experience'] = 'Create new local experience';
$string['confirm_delete_button'] = 'Yes';
$string['confirm_deletion'] = 'Are you sure you want to delete the selected experience?';
$string['dailyslots'] = 'Daily slots of work';
$string['dailyslots_help'] = 'Daily amount of maximum slots each student will be allowed to work with this lab. Also, if the lab is in free access mode, it determines the maximum number of consecutive time slots in which the lab can be used.';
$string['default_communication_set'] = 'Communication settings. (Only important if you are also using ENLARGE)';
$string['delete_enlarge_keys'] = 'Delete ENLARGE keys';
$string['delete_existing_local_experience'] = 'Delete local experience';
$string['delete_sarlab_keys'] = 'Delete Sarlab keys';
$string['enlarge_header'] = 'Configure ENLARGE for this block instance';
$string['enlarge_lti_url'] = 'URL to the ENLARGE LTI activity';
$string['enlargedesigner'] = 'ENLARGE designer';
$string['enlargedesigner_desc'] = 'ENLARGE designers can create, delete, edit and use ENLARGE experiences';
$string['enlargemanager'] = 'ENLARGE manager';
$string['enlargemanager_desc'] = 'ENLARGE managers can edit and use existing ENLARGE experiences';
$string['existing_practice_id'] = 'WARNING: This practice identifier already exists. Choose a different name.';
$string['free_access'] = 'Free access';
$string['free_access_help'] = 'Enable free access mode (no need to make a booking) for this remote lab.';
$string['go_to_enlarge'] = 'Go to ENLARGE';
$string['go_to_sarlab'] = 'Go to Sarlab';
$string['inserterror'] = 'Error while trying to save the configuration for the remote lab experience';
$string['ip_lab'] = 'IP address';
$string['ip_lab_help'] = 'Experimental system IP address.';
$string['ip_lab_required'] = 'WARNING: You need to provide a valid IP address.';
$string['mail_content1_lab_down'] = 'One of your previously operative remote labs (';
$string['mail_content1_lab_not_checkable'] = 'The state of one of your remote labs (';
$string['mail_content1_lab_up'] = 'One of your previously not accessible remote labs (';
$string['mail_content2_lab_down'] = '- IP:';
$string['mail_content2_lab_not_checkable'] = '- IP:';
$string['mail_content2_lab_up'] = '- IP:';
$string['mail_content3_lab_down'] = ') has ceased to be accessible. \\r\\n';
$string['mail_content3_lab_not_checkable'] = ') could not be checked.';
$string['mail_content3_lab_up'] = ') is operative once again.';
$string['mail_content4_lab_down'] = 'A list of the inaccessible or inoperative devices is given below: \\r\\n';
$string['mail_subject_lab_down'] = 'Lab Down Alert';
$string['mail_subject_lab_not_checkable'] = 'Not Checkable Lab State Alert';
$string['mail_subject_lab_up'] = 'Lab Up Notice';
$string['myFrontier_IP'] = 'Name and IP address of the ENLARGE server(s)';
$string['myFrontier_IP_description'] = 'If you are using ENLARGE (a system that manages connections to remote laboratories resources), you need to provide the IP address of the server that runs the ENLARGE system you want to use. Otherwise, this value will not be used, so you can leave the default value. If you have more than one ENLARGE server (for example, one at 127.0.0.1 and a second one at 127.0.0.2), insert the IP addresses separated by semicolons: 127.0.0.1;127.0.0.2. Additionally, you can provide a name in order to identify each ENLARGE server: \'ENLARGE Madrid\'127.0.0.1;\'ENLARGE Huelva\'127.0.0.2';
$string['myFrontier_port'] = 'ENLARGE communication port(s)';
$string['myFrontier_port_description'] = 'If you are using ENLARGE (a system that manages connections to remote laboratories resources), you need to provide a valid port for establishing the communications with the ENLARGE server. Otherwise, this value will not be used, so you can leave the default value. If you have more than one ENLARGE server (for example, one using port 443 and a second one also using port 443), insert the values separated by semicolons: 443;443';
$string['or'] = 'or';
$string['ping_remote_labs'] = 'Check if remote lab equipments are alive';
$string['pluginname'] = 'Remlab manager';
$string['port'] = 'Port';
$string['port_help'] = 'The port used to establish the communication.';
$string['port_required'] = 'WARNING: You need to provide a valid port.';
$string['practiceintro'] = 'Practice identifier';
$string['practiceintro_help'] = 'The identifier of the practice you want to label this configuration with.';
$string['practiceintro_required'] = 'WARNING: You need to specify one practice.';
$string['privacy:metadata'] = 'The Remlab Manager block only provides configuration options for remote lab experiences.';
$string['reboottime'] = 'Idle time (minutes)';
$string['reboottime_help'] = 'Minimum elapsed time (in minutes) between someone stops using a remote lab and somebody else can start using it. Useful for giving time to the remote lab to reboot and/or turn back to its initial state.';
$string['refresh_usestate_field'] = 'Refresh the use state of remote labs';
$string['remlab_manager:addinstance'] = 'Add a new Remlab Manager block';
$string['remlab_manager:myaddinstance'] = 'Add a new Remlab Manager block to My home';
$string['remlab_manager:view'] = 'View the Remlab Manager block';
$string['sarlab_lti_url'] = 'URL to the Sarlab LTI activity';
$string['sarlabdesigner'] = 'Sarlab designer';
$string['sarlabdesigner_desc'] = 'Sarlab designers can create, delete, edit and use Sarlab experiences';
$string['sarlabmanager'] = 'Sarlab manager';
$string['sarlabmanager_desc'] = 'Sarlab managers can edit and use existing Sarlab experiences';
$string['slotsduration'] = 'Slots duration (minutes)';
$string['slotsduration_help'] = 'Duration of the time slots (in minutes) in which users will be able to work with this lab.';
$string['synchronise_myFrontier_users'] = 'Synchronise ENLARGE users';
$string['synchronise_sarlab_users'] = 'Synchronise Sarlab users';
$string['totalslots'] = 'Total slots of work';
$string['totalslots_help'] = 'Total amount of maximum slots each student will be allowed to work with this lab.';
$string['weeklyslots'] = 'Weekly slots of work';
$string['weeklyslots_help'] = 'Weekly amount of maximum slots each student will be allowed to work with this lab.';
