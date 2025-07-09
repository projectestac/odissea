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

declare(strict_types=1);

namespace core_courseformat\external;

defined('MOODLE_INTERNAL') || die();

use core_courseformat\stateactions;
use core_courseformat\stateupdates;

global $CFG;
require_once($CFG->dirroot . '/webservice/tests/helpers.php');

/**
 * Tests for the delete section test class.
 *
 * @package    core_courseformat
 * @copyright  2025 Laurent David <laurent.david@moodle.com>
 * @category   test
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @coversDefaultClass \core_courseformat\stateactions
 */
final class delete_section_test extends \externallib_advanced_testcase {

    /**
     * Setup to ensure that fixtures are loaded.
     */
    public static function setupBeforeClass(): void { // phpcs:ignore
        global $CFG;
        require_once($CFG->dirroot . '/course/format/tests/fixtures/format_theunittestdelete.php');
    }

    /**
     * Test the webservice can execute the section_delete action.
     *
     * @covers ::section_delete
     * @dataProvider section_delete_provider
     * @param int $sectionum
     * @param string $format
     * @param array $formatoptions
     * @param int $expectedsectionum
     *
     * @throws \moodle_exception
     */
    public function test_delete_section(int $sectionum, string $format, array $formatoptions, int $expectedsectionum): void {
        $this->resetAfterTest();

        $course =
            $this->getDataGenerator()->create_course(array_merge(
                ['numsections' => $sectionum, 'format' => $format],
                $formatoptions,
            ));
        $teacher = $this->getDataGenerator()->create_and_enrol($course, 'editingteacher');
        // Execute the method.
        $courseformat = course_get_format($course->id);
        $updates = new stateupdates($courseformat);
        $modinfo = get_fast_modinfo($course);
        $sections  = $modinfo->get_section_info_all();
        $sectionsid = array_map(function ($section) {
            return $section->id;
        }, $sections);
        $actions = new stateactions();
        $this->setUser($teacher);
        $actions->section_delete(
            $updates,
            $course,
            $sectionsid
        );
        // Check result.
        $modinfo = get_fast_modinfo($course);
        $sections  = $modinfo->get_section_info_all();
        $this->assertCount($expectedsectionum, $sections);
        if ($format == 'theunittestdelete') {
            $this->assertDebuggingCalled();
        }
    }

    /**
     * Data provider for the test_delete_section method.
     *
     * @return array
     */
    public static function section_delete_provider(): array {
        return [
            'format topic' => [
                'sectionum' => 4,
                'format' => 'topics',
                'formatoptions' => [],
                'expectedsectionum' => 1,
            ],
            'format theunittestdelete' => [
                'sectionum' => 4,
                'format' => 'theunittestdelete',
                'formatoptions' => [],
                'expectedsectionum' => 5,
            ],
            'format theunittestdelete can delete' => [
                'sectionum' => 4,
                'format' => 'theunittestdelete',
                'formatoptions' => ['can_delete_sections' => true],
                'expectedsectionum' => 1,
            ],
        ];
    }
}
