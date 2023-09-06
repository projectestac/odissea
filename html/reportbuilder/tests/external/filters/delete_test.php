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

namespace core_reportbuilder\external\filters;

use core_reportbuilder_generator;
use external_api;
use externallib_advanced_testcase;
use core_reportbuilder\report_access_exception;
use core_reportbuilder\local\models\filter;
use core_user\reportbuilder\datasource\users;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once("{$CFG->dirroot}/webservice/tests/helpers.php");

/**
 * Unit tests of external class for deleting report filters
 *
 * @package     core_reportbuilder
 * @covers      \core_reportbuilder\external\filters\delete
 * @copyright   2021 Paul Holden <paulh@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class delete_test extends externallib_advanced_testcase {

    /**
     * Text execute method
     */
    public function test_execute(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        $report = $generator->create_report([
            'name' => 'My report',
            'source' => users::class,
            'default' => false,
        ]);

        // Add two filters.
        $filterfullname = $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:fullname']);
        $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:email']);

        // Delete the first filter.
        $result = delete::execute($report->get('id'), $filterfullname->get('id'));
        $result = external_api::clean_returnvalue(delete::execute_returns(), $result);
        $this->assertTrue($result['hasavailablefilters']);
        $this->assertEquals('User', $result['availablefilters'][0]['optiongroup']['text']);
        $this->assertNotEmpty($result['availablefilters'][0]['optiongroup']['values']);
        $this->assertTrue($result['hasactivefilters']);
        $this->assertCount(1, $result['activefilters']);
        $this->assertEquals('Email address', $result['activefilters'][0]['heading']);

        // Assert report filters.
        $filters = filter::get_filter_records($report->get('id'));
        $this->assertCount(1, $filters);
        $this->assertEquals('user:email', reset($filters)->get('uniqueidentifier'));
    }

    /**
     * Test execute method for a user without permission to edit reports
     */
    public function test_execute_access_exception(): void {
        $this->resetAfterTest();

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        $report = $generator->create_report(['name' => 'My report', 'source' => users::class]);
        $filter = $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:email']);

        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);

        $this->expectException(report_access_exception::class);
        $this->expectExceptionMessage('You cannot edit this report');
        delete::execute($report->get('id'), $filter->get('id'));
    }
}
