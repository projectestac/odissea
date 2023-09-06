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

namespace core_reportbuilder\output;

use advanced_testcase;
use core_reportbuilder_generator;
use core_reportbuilder\report_access_exception;
use core_user\reportbuilder\datasource\users;

/**
 * Unit tests for the filter heading editable class
 *
 * @package     core_reportbuilder
 * @covers      \core_reportbuilder\output\filter_heading_editable
 * @copyright   2022 Paul Holden <paulh@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class filter_heading_editable_test extends advanced_testcase {

    /**
     * Test update method
     */
    public function test_update(): void {
        global $PAGE;

        $this->resetAfterTest();
        $this->setAdminUser();

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        $report = $generator->create_report(['name' => 'My report', 'source' => users::class]);
        $filter = $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:lastname']);

        $editable = filter_heading_editable::update($filter->get('id'), 'New name');
        $result = $editable->export_for_template($PAGE->get_renderer('core'));
        $this->assertEquals('New name', $result['value']);

        // Reload persistent, assert update.
        $this->assertEquals('New name', $filter->read()->get('heading'));
    }

    /**
     * Test update method for a user without permission to edit reports
     */
    public function test_update_access_exception(): void {
        $this->resetAfterTest();

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        $report = $generator->create_report(['name' => 'My report', 'source' => users::class]);
        $filter = $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:lastname']);

        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);

        $this->expectException(report_access_exception::class);
        $this->expectExceptionMessage('You cannot edit this report');
        filter_heading_editable::update($filter->get('id'), 'New name');
    }

    /**
     * Test update method via component callback
     *
     * @covers ::core_reportbuilder_inplace_editable
     */
    public function test_update_callback(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        $report = $generator->create_report(['name' => 'My report', 'source' => users::class]);
        $filter = $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:lastname']);

        $params = ['filterheading', $filter->get('id'), 'New name'];
        $editable = component_callback('core_reportbuilder', 'inplace_editable', $params);
        $this->assertInstanceOf(filter_heading_editable::class, $editable);

        // Reload persistent, assert update.
        $this->assertEquals('New name', $filter->read()->get('heading'));
    }
}
