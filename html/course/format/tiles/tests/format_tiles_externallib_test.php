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
 * External tiles format functions unit tests.
 *
 * @package    format_tiles
 * @category   external
 * @copyright  2018 David Watson {@link http://evolutioncode.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_tiles;

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->dirroot . '/webservice/tests/helpers.php');
require_once($CFG->dirroot . '/course/format/tiles/classes/external/external.php');

/**
 * External course functions unit tests
 *
 * @package    format_tiles
 * @category   external
 * @copyright  2018 David Watson {@link http://evolutioncode.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class format_tiles_externallib_test extends \externallib_advanced_testcase {

    /**
     * The format options to use when setting up a course in tiles format.
     * @var array
     */
    private $tilescourseformatoptions = [
        'shortname' => 'aname',
        'fullname' => 'A Name',
        'numsections' => 5,
        'format' => 'tiles',
        'defaulttileicon' => 'user-o',
        'basecolour' => '#700000',
        'courseusesubtiles' => 1,
        'courseshowtileprogress' => 0,
        'displayfilterbar' => 1,
        'usesubtilesseczero' => 0,
        'courseusebarforheadings' => 1,
    ];

    /**
     * Test the setting of a course/tile icon using the web service.
     * @covers \format_tiles\external\external::set_image
     * @throws \coding_exception
     * @throws \dml_exception
     * @throws \invalid_parameter_exception
     * @throws \invalid_response_exception
     * @throws \moodle_exception
     * @throws \required_capability_exception
     * @throws \restricted_context_exception
     */
    public function test_set_image(): void {
        global $DB;

        $this->resetAfterTest(true);

        $course = self::getDataGenerator()->create_course($this->tilescourseformatoptions);

        // Teacher can do it.
        $teacher = self::getDataGenerator()->create_user();
        $teacherrole = $DB->get_record('role', ['shortname' => 'teacher']);
        $this->getDataGenerator()->enrol_user($teacher->id,
            $course->id,
            $teacherrole->id);
        $this->setUser($teacher);
        $contextid = \context_course::instance($course->id)->id;
        $roleid = $this->assignUserCapability('moodle/course:update', $contextid);

        $newicon = 'number_1';
        $sectionid = get_fast_modinfo($course)->get_section_info_all()[1]->id;

        $result = \format_tiles\external\external::set_image(
            $course->id, $sectionid, $newicon, 'tileicon', 0, 0
        );
        $result = \external_api::clean_returnvalue(\format_tiles\external\external::set_image_returns(), $result);
        // Check for 0 warnings.
        $this->assertTrue($result['status']);

        // Check it worked and data made it to db.
        $dbvalue = \format_tiles\local\format_option::get(
            $course->id, \format_tiles\local\format_option::OPTION_SECTION_ICON, $sectionid
        );

        $this->assertEquals($newicon, $dbvalue);

        // Call without required capability.
        $this->unassignUserCapability('moodle/course:update', $contextid, $roleid);
        $this->expectException('required_capability_exception');
        $result = \format_tiles\external\external::set_image(
            $course->id, $sectionid, $newicon, 'tileicon'
        );

        // Student not allowed to do it.
        $student1 = self::getDataGenerator()->create_user();
        $studentrole = $DB->get_record('role', ['shortname' => 'student']);
        $this->getDataGenerator()->enrol_user($student1->id,
            $course->id,
            $studentrole->id);
        $this->setUser($student1);
        $this->expectException('required_capability_exception');
        $result = \format_tiles\external\external::set_image($course->id, $sectionid, $newicon, 'tileicon');
        $result = \external_api::clean_returnvalue(\format_tiles\external\external::set_image_returns(), $result);

        // Fail when the user is not allow to access the course (enrolled) or is not teacher.
        $this->setGuestUser();
        $this->expectException('required_capability_exception');

        $result = \format_tiles\external\external::set_image($course->id, $sectionid, $newicon, 'tileicon');
        $result = \external_api::clean_returnvalue(\format_tiles\external\external::set_image_returns(), $result);
    }


    /**
     * Test the setting of a session screen width variable using the web service.
     * @covers \format_tiles\external\external::set_session_width
     * @throws \dml_exception
     * @throws \invalid_response_exception
     * @throws \moodle_exception
     */
    public function test_set_session_width(): void {
        global $DB, $SESSION, $CFG;
        $this->resetAfterTest(true);

        $course = self::getDataGenerator()->create_course($this->tilescourseformatoptions);

        // Teacher can do it.
        $teacher = self::getDataGenerator()->create_user();
        $teacherrole = $DB->get_record('role', ['shortname' => 'teacher']);
        $this->getDataGenerator()->enrol_user($teacher->id,
            $course->id,
            $teacherrole->id);
        $this->setUser($teacher);
        $contextid = \context_course::instance($course->id)->id;
        $roleid = $this->assignUserCapability('moodle/course:update', $contextid);

        $result = \format_tiles\external\external::set_session_width($course->id, 1366);
        $result = \external_api::clean_returnvalue(
            \format_tiles\external\external::set_session_width_returns(), $result
        );
        // Check for 0 warnings.
        $this->assertTrue($result['status']);

        // Check it worked and data made it to $SESSION.
        $sessionvarname = 'format_tiles_width_' . $course->id;
        $this->assertEquals(1366, $SESSION->$sessionvarname);

        // Student also allowed to do it.
        $student1 = self::getDataGenerator()->create_user();
        $studentrole = $DB->get_record('role', ['shortname' => 'student']);
        $this->getDataGenerator()->enrol_user($student1->id,
            $course->id,
            $studentrole->id);
        $this->setUser($student1);

        $result = \format_tiles\external\external::set_session_width($course->id, 1366);
        $result = \external_api::clean_returnvalue(
            \format_tiles\external\external::set_session_width_returns(), $result
        );
        // Check for 0 warnings.
        $this->assertTrue($result['status']);

        // Check it worked and data made it to $SESSION.
        $sessionvarname = 'format_tiles_width_' . $course->id;
        $this->assertEquals(1366, $SESSION->$sessionvarname);

        // Fail when the user is not allow to access the course (enrolled) or is not teacher.
        $this->setGuestUser();
        $this->expectException('require_login_exception');

        $result = \format_tiles\external\external::set_session_width($course->id, 1366);
        $result = \external_api::clean_returnvalue(
            \format_tiles\external\external::set_session_width_returns(), $result
        );
    }
}
