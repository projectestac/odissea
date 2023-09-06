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

namespace core_reportbuilder\external\reports;

use context_system;
use core_reportbuilder_generator;
use external_api;
use externallib_advanced_testcase;
use core_reportbuilder\report_access_exception;
use core_reportbuilder\local\models\report;
use core_user\reportbuilder\datasource\users;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once("{$CFG->dirroot}/webservice/tests/helpers.php");

/**
 * Unit tests of external class for listing reports
 *
 * @package     core_reportbuilder
 * @covers      \core_reportbuilder\external\reports\listing
 * @copyright   2022 Paul Holden <paulh@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class listing_test extends externallib_advanced_testcase {

    /**
     * Text execute method
     */
    public function test_execute(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        // Create three reports.
        $reportone = $generator->create_report(['name' => 'Report one', 'source' => users::class]);
        $reporttwo = $generator->create_report(['name' => 'Report two', 'source' => users::class]);
        $reportthree = $generator->create_report(['name' => 'Report three', 'source' => users::class]);

        // Create second user, with audience of both report one and two.
        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);

        $generator->create_audience(['reportid' => $reportone->get('id'), 'configdata' => []]);
        $generator->create_audience(['reportid' => $reporttwo->get('id'), 'configdata' => []]);

        // Switch to second user, get their report listing.
        $result = listing::execute();
        $result = external_api::clean_returnvalue(listing::execute_returns(), $result);

        $this->assertEquals(['Report one', 'Report two'], array_column($result['reports'], 'name'));
        $this->assertEmpty($result['warnings']);
    }

    /**
     * Test execute method for a user without permission to view reports
     */
    public function test_execute_access_exception(): void {
        global $DB;

        $this->resetAfterTest();

        $userrole = $DB->get_field('role', 'id', ['shortname' => 'user'], MUST_EXIST);
        assign_capability('moodle/reportbuilder:view', CAP_PROHIBIT, $userrole, context_system::instance(), true);

        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);

        $this->expectException(report_access_exception::class);
        $this->expectExceptionMessage('You cannot view this report');
        listing::execute();
    }
}
