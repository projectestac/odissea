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

namespace block_mnet_hosts;

use advanced_testcase;
use block_mnet_hosts;
use context_course;

/**
 * PHPUnit block_mnet_hosts tests
 *
 * @package    block_mnet_hosts
 * @category   test
 * @copyright  2021 Sara Arjona (sara@moodle.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @coversDefaultClass \block_mnet_hosts
 */
class mnet_hosts_test extends advanced_testcase {
    public static function setUpBeforeClass(): void {
        require_once(__DIR__ . '/../../moodleblock.class.php');
        require_once(__DIR__ . '/../block_mnet_hosts.php');
    }

    /**
     * Test the behaviour of can_block_be_added() method.
     *
     * @covers ::can_block_be_added
     */
    public function test_can_block_be_added(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        // Create a course and prepare the page where the block will be added.
        $course = $this->getDataGenerator()->create_course();
        $page = new \moodle_page();
        $page->set_context(context_course::instance($course->id));
        $page->set_pagelayout('course');

        $block = new block_mnet_hosts();
        $pluginclass = \core_plugin_manager::resolve_plugininfo_class('auth');

        // If mnet authentication is enabled, the method should return true.
        $pluginclass::enable_plugin('mnet', 1);
        $this->assertTrue($block->can_block_be_added($page));

        // However, if the mnet authentication is disabled, the method should return false.
        $pluginclass::enable_plugin('mnet', 0);
        $this->assertFalse($block->can_block_be_added($page));
    }
}
