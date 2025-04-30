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

namespace core_badges\reportbuilder\datasource;

use core_badges_generator;
use core_reportbuilder_generator;
use core_reportbuilder\local\filters\{boolean_select, date, select, tags, text};
use core_reportbuilder\manager;
use core_reportbuilder\tests\core_reportbuilder_testcase;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once("{$CFG->libdir}/badgeslib.php");

/**
 * Unit tests for badges datasource
 *
 * @package     core_badges
 * @covers      \core_badges\reportbuilder\datasource\badges
 * @copyright   2022 Paul Holden <paulh@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class badges_test extends core_reportbuilder_testcase {

    /**
     * Test default datasource
     */
    public function test_datasource_default(): void {
        $this->resetAfterTest();

        $user1 = $this->getDataGenerator()->create_user(['firstname' => 'Alan', 'lastname' => 'Apple']);
        $user2 = $this->getDataGenerator()->create_user(['firstname' => 'Barry', 'lastname' => 'Banana']);

        /** @var core_badges_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_badges');

        $badgeone = $generator->create_badge(['name' => 'Badge 1', 'description' => 'My first badge']);
        $badgeone->issue($user1->id, true);
        $badgeone->issue($user2->id, true);

        // Second badge, not issued to any users.
        $badgetwo = $generator->create_badge(['name' => 'Badge 2', 'description' => 'My second badge']);

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');
        $report = $generator->create_report(['name' => 'Badges', 'source' => badges::class, 'default' => 1]);

        $content = $this->get_custom_report_content($report->get('id'));
        $this->assertCount(3, $content);

        // Default columns are badge, description, user, issued time. Sorted by badge, user, issued time.
        [$badgename, $badgedescription, $userfullname, $badgeissued] = array_values($content[0]);
        $this->assertEquals($badgeone->name, $badgename);
        $this->assertEquals($badgeone->description, $badgedescription);
        $this->assertEquals(fullname($user1), $userfullname);
        $this->assertNotEmpty($badgeissued);

        [$badgename, $badgedescription, $userfullname, $badgeissued] = array_values($content[1]);
        $this->assertEquals($badgeone->name, $badgename);
        $this->assertEquals($badgeone->description, $badgedescription);
        $this->assertEquals(fullname($user2), $userfullname);
        $this->assertNotEmpty($badgeissued);

        [$badgename, $badgedescription, $userfullname, $badgeissued] = array_values($content[2]);
        $this->assertEquals($badgetwo->name, $badgename);
        $this->assertEquals($badgetwo->description, $badgedescription);
        $this->assertEmpty($userfullname);
        $this->assertEmpty($badgeissued);
    }

    /**
     * Test datasource columns that aren't added by default
     */
    public function test_datasource_non_default_columns(): void {
        global $DB;

        $this->resetAfterTest();

        $user1 = $this->getDataGenerator()->create_user(['firstname' => 'Alan', 'lastname' => 'Apple']);
        $user2 = $this->getDataGenerator()->create_user(['firstname' => 'Barry', 'lastname' => 'Banana']);

        /** @var core_badges_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_badges');

        $badgeone = $generator->create_badge([
            'name' => 'Badge 1',
            'language' => 'de',
            'expireperiod' => HOURSECS,
            'tags' => ['cool'],
        ]);
        $badgeone->issue($user1->id, true);
        $badgeone->issue($user2->id, true);

        // Course badge, not issued to any users.
        $course = $this->getDataGenerator()->create_course();
        $badgetwo = $generator->create_badge(['name' => 'Badge 2', 'type' => BADGE_TYPE_COURSE, 'courseid' => $course->id]);

        // Create criteria for manually awarding by role.
        $managerrole = $DB->get_field('role', 'id', ['shortname' => 'manager']);
        $generator->create_criteria(['badgeid' => $badgeone->id, 'roleid' => $managerrole]);

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');
        $report = $generator->create_report(['name' => 'Badges', 'source' => badges::class, 'default' => 0]);

        // These two columns have been asserted previously, we're only adding them for consistent sorting.
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:name', 'sortenabled' => 1]);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:fullname', 'sortenabled' => 1]);

        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:namewithlink']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:criteria']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:image']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:language']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:version']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:status']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:expiry']);

        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'tag:name']);

        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge_issued:expire']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge_issued:visible']);

        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'course:fullname']);

        $content = $this->get_custom_report_content($report->get('id'));
        $this->assertCount(3, $content);

        $expectedbadgeonelink = \html_writer::link(new \moodle_url('/badges/overview.php',
            ['id' => $badgeone->id]), ($badgeone->name));

        // First badge, issued to user one.
        [$badgename, $fullname, $namewithlink, $criteria, $image, $language, $version, $status, $expiry, $tag, $expires,
            $visible, $coursename] = array_values($content[0]);
        $this->assertEquals($badgeone->name, $badgename);
        $this->assertEquals(fullname($user1), $fullname);
        $this->assertEquals($expectedbadgeonelink, $namewithlink);
        $this->assertStringContainsString('Awarded by: Manager', $criteria);
        $this->assertStringContainsString('Image caption', $image);
        $this->assertEquals('German', $language);
        $this->assertEquals(2, $version);
        $this->assertEquals('Available (criteria locked)', $status);
        $this->assertEquals('1 hour', $expiry);
        $this->assertEquals('cool', $tag);
        $this->assertNotEmpty($expires);
        $this->assertEquals('Yes', $visible);
        $this->assertEquals('PHPUnit test site', $coursename);

        // First badge, issued to user two.
        [$badgename, $fullname, $namewithlink, $criteria, $image, $language, $version, $status, $expiry, $tag, $expires,
            $visible, $coursename] = array_values($content[1]);
        $this->assertEquals($badgeone->name, $badgename);
        $this->assertEquals(fullname($user2), $fullname);
        $this->assertEquals($expectedbadgeonelink, $namewithlink);
        $this->assertStringContainsString('Awarded by: Manager', $criteria);
        $this->assertStringContainsString('Image caption', $image);
        $this->assertEquals('German', $language);
        $this->assertEquals(2, $version);
        $this->assertEquals('Available (criteria locked)', $status);
        $this->assertEquals('1 hour', $expiry);
        $this->assertEquals('cool', $tag);
        $this->assertNotEmpty($expires);
        $this->assertEquals('Yes', $visible);
        $this->assertEquals('PHPUnit test site', $coursename);

        $expectedbadgetwolink = \html_writer::link(new \moodle_url('/badges/overview.php',
            ['id' => $badgetwo->id]), ($badgetwo->name));

        // Course badge, not issues to any users.
        [$badgename, $fullname, $namewithlink, $criteria, $image, $language, $version, $status, $expiry, $tag, $expires,
            $visible, $coursename] = array_values($content[2]);
        $this->assertEquals($badgetwo->name, $badgename);
        $this->assertEmpty($fullname);
        $this->assertEquals($expectedbadgetwolink, $namewithlink);
        $this->assertEquals('Criteria for this badge have not been set up yet.', $criteria);
        $this->assertStringContainsString('Image caption', $image);
        $this->assertEquals('English', $language);
        $this->assertEquals(2, $version);
        $this->assertEquals('Available', $status);
        $this->assertEquals('Never', $expiry);
        $this->assertEmpty($tag);
        $this->assertEmpty($expires);
        $this->assertEmpty($visible);
        $this->assertEquals($course->fullname, $coursename);
    }

    /**
     * Test creating a report containing "expiry" as both a condition and a filter
     *
     * This is really testing that it's possible to do so, for a filter instance that returns SQL parameters
     */
    public function test_report_expiry_condition_and_filter(): void {
        $this->resetAfterTest();

        /** @var core_badges_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_badges');

        $badgeone = $generator->create_badge(['name' => 'Badge 1', 'expiredate' => 10]);
        $badgetwo = $generator->create_badge(['name' => 'Badge 2', 'expiredate' => 20]);
        $badgethree = $generator->create_badge(['name' => 'Badge 3', 'expiredate' => 30]);

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');
        $report = $generator->create_report(['name' => 'Badges', 'source' => badges::class, 'default' => 0]);

        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:name']);
        $generator->create_condition(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:expiry']);
        $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:expiry']);

        // Load report instance, set condition.
        $instance = manager::get_report_from_persistent($report);
        $instance->set_condition_values([
            'badge:expiry_operator' => date::DATE_RANGE,
            'badge:expiry_from' => 15,
        ]);

        // Set filter.
        $content = $this->get_custom_report_content($report->get('id'), 0, [
            'badge:expiry_operator' => date::DATE_RANGE,
            'badge:expiry_to' => 25,
        ]);

        $this->assertEquals([
            [$badgetwo->name],
        ], array_map('array_values', $content));
    }

    /**
     * Data provider for {@see test_datasource_filters}
     *
     * @return array[]
     */
    public static function datasource_filters_provider(): array {
        return [
            // Badge.
            'Filter badge name' => ['badge:name', [
                'badge:name_operator' => text::IS_EQUAL_TO,
                'badge:name_value' => 'Course badge',
            ], true],
            'Filter badge name (no match)' => ['badge:name', [
                'badge:name_operator' => text::IS_EQUAL_TO,
                'badge:name_value' => 'Other badge',
            ], false],
            'Filter badge version' => ['badge:version', [
                'badge:version_operator' => text::IS_EQUAL_TO,
                'badge:version_value' => '2.0',
            ], true],
            'Filter badge version (no match)' => ['badge:version', [
                'badge:version_operator' => text::IS_EQUAL_TO,
                'badge:version_value' => '1.0',
            ], false],
            'Filter badge status' => ['badge:status', [
                'badge:status_operator' => select::EQUAL_TO,
                'badge:status_value' => BADGE_STATUS_ACTIVE_LOCKED,
            ], true],
            'Filter badge status (no match)' => ['badge:status', [
                'badge:status_operator' => select::EQUAL_TO,
                'badge:status_value' => BADGE_STATUS_ACTIVE,
            ], false],
            'Filter badge expiry' => ['badge:expiry', [
                'badge:expiry_operator' => date::DATE_RANGE,
                'badge:expiry_from' => 1622502000,
            ], true],
            'Filter badge expiry (no match)' => ['badge:expiry', [
                'badge:expiry_operator' => date::DATE_RANGE,
                'badge:expiry_to' => 1622502000,
            ], false],
            'Filter badge type' => ['badge:type', [
                'badge:type_operator' => select::EQUAL_TO,
                'badge:type_value' => BADGE_TYPE_COURSE,
            ], true],
            'Filter badge type (no match)' => ['badge:type', [
                'badge:type_operator' => select::EQUAL_TO,
                'badge:type_value' => BADGE_TYPE_SITE,
            ], false],

            // Badge tag.
            'Filter tag name' => ['tag:name', [
                'tag:name_operator' => tags::NOT_EMPTY,
            ], true],
            'Filter tag name (no match)' => ['tag:name', [
                'tag:name_operator' => tags::EQUAL_TO,
                'tag:name_value' => [-1],
            ], false],

            // User.
            'Filter user fullname' => ['user:fullname', [
                'user:fullname_operator' => text::IS_EQUAL_TO,
                'user:fullname_value' => 'Zoe Zebra',
            ], true],
            'Filter user fullname (no match)' => ['user:fullname', [
                'user:fullname_operator' => text::IS_EQUAL_TO,
                'user:fullname_value' => 'Alice Aardvark',
            ], false],

            // Badge issued.
            'Filter badge issued date' => ['badge_issued:issued', [
                'badge_issued:issued_operator' => date::DATE_RANGE,
                'badge_issued:issued_from' => 1622502000,
            ], true],
            'Filter badge issued date (no match)' => ['badge_issued:issued', [
                'badge_issued:issued_operator' => date::DATE_RANGE,
                'badge_issued:issued_to' => 1622502000,
            ], false],
            'Filter badge issued expires' => ['badge_issued:expires', [
                'badge_issued:expires_operator' => date::DATE_RANGE,
                'badge_issued:expires_from' => 1622502000,
            ], true],
            'Filter badge issued expires (no match)' => ['badge_issued:expires', [
                'badge_issued:expires_operator' => date::DATE_RANGE,
                'badge_issued:expires_to' => 1622502000,
            ], false],
            'Filter badge issued visible' => ['badge_issued:visible', [
                'badge_issued:visible_operator' => boolean_select::CHECKED,
            ], true],
            'Filter badge issued visible (no match)' => ['badge_issued:visible', [
                'badge_issued:visible_operator' => boolean_select::NOT_CHECKED,
            ], false],

            // Course.
            'Filter course fullname' => ['course:fullname', [
                'course:fullname_operator' => text::IS_EQUAL_TO,
                'course:fullname_value' => 'Course 1',
            ], true],
            'Filter course fullname (no match)' => ['course:fullname', [
                'course:fullname_operator' => text::IS_EQUAL_TO,
                'course:fullname_value' => 'Course 2',
            ], false],
        ];
    }

    /**
     * Test datasource filters
     *
     * @param string $filtername
     * @param array $filtervalues
     * @param bool $expectmatch
     *
     * @dataProvider datasource_filters_provider
     */
    public function test_datasource_filters(string $filtername, array $filtervalues, bool $expectmatch): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course(['fullname' => 'Course 1']);
        $user = $this->getDataGenerator()->create_and_enrol($course, 'student', ['firstname' => 'Zoe', 'lastname' => 'Zebra']);

        /** @var core_badges_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_badges');
        $badge = $generator->create_badge([
            'name' => 'Course badge',
            'version' => '2.0',
            'type' => BADGE_TYPE_COURSE,
            'courseid' => $course->id,
            'expireperiod' => HOURSECS,
            'tags' => ['cool'],
        ]);
        $badge->issue($user->id, true);

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        // Create report containing single username column, and given filter.
        $report = $generator->create_report(['name' => 'Badges', 'source' => badges::class, 'default' => 0]);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'badge:name']);

        // Add filter, set it's values.
        $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => $filtername]);
        $content = $this->get_custom_report_content($report->get('id'), 0, $filtervalues);

        if ($expectmatch) {
            $this->assertCount(1, $content);
            $this->assertEquals($badge->name, reset($content[0]));
        } else {
            $this->assertEmpty($content);
        }
    }

    /**
     * Stress test datasource
     *
     * In order to execute this test PHPUNIT_LONGTEST should be defined as true in phpunit.xml or directly in config.php
     */
    public function test_stress_datasource(): void {
        if (!PHPUNIT_LONGTEST) {
            $this->markTestSkipped('PHPUNIT_LONGTEST is not defined');
        }

        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_and_enrol($course);

        /** @var core_badges_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_badges');
        $badge = $generator->create_badge(['name' => 'Course badge', 'type' => BADGE_TYPE_COURSE, 'courseid' => $course->id]);
        $badge->issue($user->id, true);

        $this->datasource_stress_test_columns(badges::class);
        $this->datasource_stress_test_columns_aggregation(badges::class);
        $this->datasource_stress_test_conditions(badges::class, 'badge:name');
    }
}
