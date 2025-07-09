<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * File called from JClic player to save students' results
 *
 * @package    mod
 * @subpackage jclic
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

header('Content-type: text/xml');

//  JClic Services to save activities.

$payload = file_get_contents("php://input");

require_once '../../../config.php';
require_once 'beans.lib.php';
require_once '../lib.php';
require_once '../locallib.php';

global $DB;

$dbman = $DB->get_manager(); // loads ddl manager and xmldb classes

$elements = [];
$oldElements = [];
$thisElement = '';

$beans = [];
$currentBean = -1;
$params = [];

$xml_parser = xml_parser_create('');
xml_set_element_handler($xml_parser, 'startElement', 'endElement');
xml_parse($xml_parser, $payload);
xml_parser_free($xml_parser);

switch ($beans[0]['ID']) {
    case 'get_properties':
        echo '<?xml version="1.0" encoding="UTF-8"?' . '>';
        echo '<bean id="get_properties">';
        $settings = $DB->get_records('jclic_settings');
        foreach ($settings as $setting) {
            echo ' <param name="' . $setting->setting_key . '" value="' . $setting->setting_value . '"/>';
        }
        break;

    case 'add session':
        $jclic_session = new stdClass();

        $jclic_session->jclicid = $beans[0]['PARAMS']['key'];
        $jclic_session->user_id = $beans[0]['PARAMS']['user'];
        $jclic_session->session_datetime = date('Y-m-d h:i:s', round($beans[0]['PARAMS']['time'] / 1000));
        $jclic_session->session_id = 'X';  // @TODO: Review
        $jclic_session->project_name = $beans[0]['PARAMS']['project'];

        try {
            jclic_normalize_date();
            $sessionid = $DB->insert_record("jclic_sessions", $jclic_session);
            $jclic_session->id = $sessionid;
            $jclic_session->session_id = $sessionid;
            $DB->update_record("jclic_sessions", $jclic_session);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
            print_r($e);
        }

        if (!$DB->get_record('jclic_users', ['user_id' => $beans[0]['PARAMS']['user'] . '']) &&
            $user = $DB->get_record('user', ['id' => $beans[0]['PARAMS']['user'] . ''])) {
            $jclic_user = new stdClass();
            $jclic_user->user_id = $beans[0]['PARAMS']['user'];
            $jclic_user->group_id = '1';
            $jclic_user->user_name = $user->firstname . ' ' . $user->lastname;
            $DB->insert_record('jclic_users', $jclic_user);
        }

        echo '<?xml version="1.0" encoding="UTF-8"?' . '>';
        echo '<bean id="add session">';
        echo ' <param name="session" value="' . $jclic_session->session_id . '"/>';
        break;

    case 'multiple':
        $jclic_activity = null;

        foreach ($beans as $bean) {
            if ($bean['ID'] === 'add activity') {

                // Sometimes, the function getPrecision returns a value referred to 100, but the maximum grade is
                // not 100. So, we need to scale the qualification.
                $qualification = round(getPrecision($bean['ACTIVITY']['minActions'], $bean['ACTIVITY']['actions'], '' . $bean['ACTIVITY']['solved'], $bean['ACTIVITY']['score']));

                $query = 'SELECT maxgrade
                          FROM {jclic} j
                          LEFT JOIN {jclic_sessions} js ON js.jclicid = j.id
                          WHERE js.session_id=\''. $bean['PARAMS']['session'] .'\'';
                $maxgrade = ($rs = $DB->get_record_sql($query)) ? (int)$rs->maxgrade : 0;

                if ($maxgrade > 0) {
                    $scaled_qualification = ($qualification / 100) * $maxgrade;
                } else {
                    $scaled_qualification = $qualification; // If maxgrade is 0, don't scale the qualification.
                }

                $jclic_activity = new stdClass();
                $jclic_activity->session_id = $bean['PARAMS']['session'];
                $jclic_activity->activity_id = $bean['PARAMS']['num'];
                $jclic_activity->activity_name = substr($bean['ACTIVITY']['name'], 0, 50);
                $jclic_activity->num_actions = $bean['ACTIVITY']['actions'];
                $jclic_activity->activity_solved = $bean['ACTIVITY']['solved'] == 'true' ? 1 : 0;
                $jclic_activity->score = $bean['ACTIVITY']['score'];
                $jclic_activity->grade = $jclic_activity->score;
                $jclic_activity->qualification = round($scaled_qualification);
                $jclic_activity->total_time = getSeconds($bean['ACTIVITY']['time']);
                $DB->insert_record('jclic_activities', $jclic_activity);
            }
        }

        if (isset($jclic_activity) && $jclic_session = $DB->get_record('jclic_sessions', array('session_id' => $jclic_activity->session_id))) {
            $jclic = $DB->get_record('jclic', array('id' => $jclic_session->jclicid));
            $cm = get_coursemodule_from_instance('jclic', $jclic->id, $jclic->course, false, MUST_EXIST);
            $jclic->cmidnumber = $cm->idnumber;
            jclic_update_grades($jclic, $jclic_session->user_id);
        }

        echo '<?xml version="1.0" encoding="UTF-8"?' . '>';
        echo '<bean id="add activity">';
        echo ' <param name="activity" value="' . $jclic_activity->activity_id . '"/>';
        break;

    default:
        echo '<?xml version="1.0" encoding="UTF-8"?' . '>';
        echo '<bean id="' . $beans[0]['ID'] . '">';
        echo ' <param name="error" value="bean not defined"/>';
}

echo '</bean>';

// <bean id="get_properties"><param name="TIME_LAP" value="10"/><param name="ALLOW_CREATE_GROUPS" value="false"/><param name="USER_TABLES" value="true"/><param name="ALLOW_CREATE_USERS" value="true"/><param name="SHOW_GROUP_LIST" value="true"/><param name="SHOW_USER_LIST" value="true"/></bean>
// <bean id="multiple"><bean id="add activity"><param name="num" value="0"/><param name="session" value="test_3425234562345"/><activity name="senya-04.ass" start="12456535767" time="3212" solved="true" score="1" minActions="1" actions="11"/><bean id="add activity"><param name="num" value="1"/><param name="session" value="test_3425234562345"/><activity name="senya-05.ass" start="12456535765" time="2222" solved="false" score="0" minActions="1" actions="1"/></bean>
// <bean id="add session"><param name="key" value="k01"/><param name="user" value="user01"/><param name="time" value="12588458"/></bean>
