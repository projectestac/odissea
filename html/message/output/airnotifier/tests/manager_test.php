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
 * Unit tests for message_airnotifier_manager.
 *
 * @package     message_airnotifier
 * @category    test
 * @copyright   2020 Juan Leyva <juan@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU Public License
 */
class message_airnotifier_manager_testcase extends advanced_testcase {

    /** Test check_configuration by default **/
    public function test_check_configuration_default() {
        global $CFG;
        $this->resetAfterTest(true);

        $manager = new message_airnotifier_manager();

        // Mock server responses.
        $CFG->airnotifierurl = 'localhost';
        curl::mock_response(json_encode(['status' => 'ok']));   // Mock first request to check URL.
        curl::mock_response(json_encode(['error' => 'Invalid access key']));  // Mock second request to check acces key.
        $checks = $manager->check_configuration();

        $this->assertEquals(core\check\result::OK, $checks[0]->get_status());   // Mobile service enabled.
        $this->assertEquals(core\check\result::OK, $checks[1]->get_status());   // Mobile notifications enabled.
        $this->assertEquals(core\check\result::ERROR, $checks[2]->get_status());    // Airnotifier NOT configured, missing key.
        $this->assertEquals(core\check\result::OK, $checks[3]->get_status());   // Airnotifier URL available.
        $this->assertEquals(core\check\result::ERROR, $checks[4]->get_status());    // Missing access key.
        $this->assertEquals(core\check\result::WARNING, $checks[5]->get_status());  // Only a few of default mobile notifications.
        $this->assertEquals(core\check\result::ERROR, $checks[6]->get_status());  // No registered devices yet.
    }

    /** Test check_configuration with token **/
    public function test_check_configuration_with_token() {
        global $CFG;
        $this->resetAfterTest(true);

        $manager = new message_airnotifier_manager();

        // Mock server responses.
        $CFG->airnotifierurl = 'localhost';
        curl::mock_response(json_encode(['status' => 'ok']));   // Mock first request to check URL.
        curl::mock_response(json_encode(['error' => 'Invalid access key']));  // Mock second request to check acces key.
        $CFG->airnotifieraccesskey = 'test';    // For enabling Airnotifier.
        $checks = $manager->check_configuration();

        $this->assertEquals(core\check\result::OK, $checks[0]->get_status());   // Mobile service enabled.
        $this->assertEquals(core\check\result::OK, $checks[1]->get_status());   // Mobile notifications enabled.
        $this->assertEquals(core\check\result::OK, $checks[2]->get_status());    // Airnotifier configured.
        $this->assertEquals(core\check\result::OK, $checks[3]->get_status());   // Airnotifier URL available.
        // The original function fourth check (access key valid in the remote Airnotifier server) is not mockable.
        $this->assertEquals(core\check\result::WARNING, $checks[4]->get_status());  // Only a few of default mobile notifications.
        $this->assertEquals(core\check\result::ERROR, $checks[5]->get_status());  // No registered devices yet.
    }

    /** Test check_configuration bad settings **/
    public function test_check_configuration_incorrect_settings() {
        global $CFG;
        $this->resetAfterTest(true);

        $manager = new message_airnotifier_manager();

        // Mock server responses.
        $CFG->airnotifierurl = 'localhost';
        curl::mock_response(json_encode(['status' => 'ok']));   // Mock first request to check URL.
        curl::mock_response(json_encode(['error' => 'Invalid access key']));  // Mock second request to check acces key.
        $CFG->airnotifieraccesskey = 'test';    // For enabling Airnotifier.
        $CFG->airnotifierappname .= ' ';
        $checks = $manager->check_configuration();

        $this->assertEquals(core\check\result::OK, $checks[0]->get_status());   // Mobile service enabled.
        $this->assertEquals(core\check\result::OK, $checks[1]->get_status());   // Mobile notifications enabled.
        $this->assertEquals(core\check\result::OK, $checks[2]->get_status());    // Airnotifier configured.
        $this->assertEquals(core\check\result::ERROR, $checks[3]->get_status());   // Airnotifier URL available.
        $this->assertEquals(core\check\result::OK, $checks[4]->get_status());   // Invalid setting (empty space).
        // The original function fifth check (access key valid in the remote Airnotifier server) is not mockable.
        $this->assertEquals(core\check\result::WARNING, $checks[5]->get_status());  // Only a few of default mobile notifications.
        $this->assertEquals(core\check\result::ERROR, $checks[6]->get_status());  // No registered devices yet.
    }

    /** Test has_enabled_devices **/
    public function test_has_enabled_devices() {
        global $CFG, $DB, $USER;
        $this->resetAfterTest(true);

        $CFG->airnotifieraccesskey = 'test';    // For mocking the request.
        $manager = new message_airnotifier_manager();

        // No devices yet for current user.
        curl::mock_response(json_encode(['status' => 'ok']));
        $this->assertFalse($manager->has_enabled_devices($CFG->airnotifiermobileappname));

        // Add devices.
        curl::mock_response(json_encode(['status' => 'ok']));
        $DB->insert_record('user_devices',
            ['userid' => $USER->id, 'appid' => $CFG->airnotifiermobileappname, 'platform' => 'ios',
            'timecreated' => time(), 'timemodified' => time()]);
        $this->assertTrue($manager->has_enabled_devices($CFG->airnotifiermobileappname));
    }
}
