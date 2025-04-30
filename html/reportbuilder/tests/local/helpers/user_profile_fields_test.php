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

namespace core_reportbuilder\local\helpers;

use core_reportbuilder_generator;
use core_reportbuilder\local\entities\user;
use core_reportbuilder\local\filters\boolean_select;
use core_reportbuilder\local\filters\date;
use core_reportbuilder\local\filters\select;
use core_reportbuilder\local\filters\text;
use core_reportbuilder\local\report\column;
use core_reportbuilder\local\report\filter;
use core_reportbuilder\tests\core_reportbuilder_testcase;
use core_user\reportbuilder\datasource\users;

/**
 * Unit tests for user profile fields helper
 *
 * @package     core_reportbuilder
 * @covers      \core_reportbuilder\local\helpers\user_profile_fields
 * @copyright   2021 David Matamoros <davidmc@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class user_profile_fields_test extends core_reportbuilder_testcase {

    /**
     * Generate custom profile fields, one of each type
     *
     * @return user_profile_fields
     */
    private function generate_userprofilefields(): user_profile_fields {
        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'checkbox', 'name' => 'Checkbox field', 'datatype' => 'checkbox']);

        // This field is available only to admins.
        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'datetime', 'name' => 'Date field', 'datatype' => 'datetime', 'param2' => 2022, 'param3' => 0,
                'visible' => PROFILE_VISIBLE_NONE]);

        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'menu', 'name' => 'Menu field', 'datatype' => 'menu', 'param1' => "Cat\nDog"]);

        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'Social', 'name' => 'msn', 'datatype' => 'social', 'param1' => 'msn']);

        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'text', 'name' => 'Text field', 'datatype' => 'text']);

        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'textarea', 'name' => 'Textarea field', 'datatype' => 'textarea']);

        $userentity = new user();
        $useralias = $userentity->get_table_alias('user');

        // Create an instance of the userprofilefield helper.
        return new user_profile_fields("$useralias.id", $userentity->get_entity_name());
    }

    /**
     * Test for get_columns
     */
    public function test_get_columns(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        // Get pre-existing user profile fields.
        $userentity = new user();
        $initialcolumns = (new user_profile_fields(
            $userentity->get_table_alias('user') . '.id',
            $userentity->get_entity_name(),
        ))->get_columns();

        // Create a field which will duplicate one of the subsequently generated fields (case-insensitive shortname).
        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'CHECKBOX',
            'name' => 'Duplicate checkbox field',
            'datatype' => 'checkbox',
        ]);

        // Add new custom profile fields.
        $userprofilefields = $this->generate_userprofilefields();

        // Ensure pre-existing fields are ignored in subsequent assertions.
        $columns = array_slice($userprofilefields->get_columns(), count($initialcolumns));
        $this->assertCount(6, $columns);
        $this->assertContainsOnlyInstancesOf(column::class, $columns);

        // Column titles.
        $this->assertEquals([
            'Checkbox field',
            'Date field',
            'Menu field',
            'MSN ID',
            'Text field',
            'Textarea field',
        ], array_map(
            fn(column $column): string => $column->get_title(),
            $columns,
        ));

        // Column types.
        $this->assertEquals([
            column::TYPE_BOOLEAN,
            column::TYPE_TIMESTAMP,
            column::TYPE_TEXT,
            column::TYPE_TEXT,
            column::TYPE_TEXT,
            column::TYPE_LONGTEXT,
        ], array_map(
            fn(column $column): int => $column->get_type(),
            $columns,
        ));

        // Column sortable.
        $this->assertEquals([
            true,
            true,
            true,
            true,
            true,
            false,
        ], array_map(
            fn(column $column): bool => $column->get_is_sortable(),
            $columns,
        ));

        // Column available.
        $this->assertEquals([
            true,
            true,
            true,
            true,
            true,
            true,
        ], array_map(
            fn(column $column): bool => $column->get_is_available(),
            $columns,
        ));

        // Column available, for non-privileged user.
        $this->setUser(null);
        $this->assertEquals([
            true,
            false,
            true,
            true,
            true,
            true,
        ], array_map(
            fn(column $column): bool => $column->get_is_available(),
            array_slice($userprofilefields->get_columns(), count($initialcolumns)),
        ));
    }

    /**
     * Test for add_join
     */
    public function test_add_join(): void {
        $this->resetAfterTest();

        $userprofilefields = $this->generate_userprofilefields();
        $columns = $userprofilefields->get_columns();
        $this->assertCount(1, ($columns[0])->get_joins());

        $userprofilefields->add_join('JOIN {test} t ON t.id = id');
        $columns = $userprofilefields->get_columns();
        $this->assertCount(2, ($columns[0])->get_joins());
    }

    /**
     * Test for add_joins
     */
    public function test_add_joins(): void {
        $this->resetAfterTest();

        $userprofilefields = $this->generate_userprofilefields();
        $columns = $userprofilefields->get_columns();
        $this->assertCount(1, ($columns[0])->get_joins());

        $userprofilefields->add_joins(['JOIN {test} t ON t.id = id', 'JOIN {test2} t2 ON t2.id = id']);
        $columns = $userprofilefields->get_columns();
        $this->assertCount(3, ($columns[0])->get_joins());
    }

    /**
     * Test for get_filters
     */
    public function test_get_filters(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        // Get pre-existing user profile fields.
        $userentity = new user();
        $initialfilters = (new user_profile_fields(
            $userentity->get_table_alias('user') . '.id',
            $userentity->get_entity_name(),
        ))->get_filters();

        // Create a field which will duplicate one of the subsequently generated fields (case-insensitive shortname).
        $this->getDataGenerator()->create_custom_profile_field([
            'shortname' => 'CHECKBOX',
            'name' => 'Duplicate checkbox field',
            'datatype' => 'checkbox',
        ]);

        // Add new custom profile fields.
        $userprofilefields = $this->generate_userprofilefields();

        // Ensure pre-existing fields are ignored in subsequent assertions.
        $filters = array_slice($userprofilefields->get_filters(), count($initialfilters));
        $this->assertCount(6, $filters);
        $this->assertContainsOnlyInstancesOf(filter::class, $filters);

        // Filter headers.
        $this->assertEquals([
            'Checkbox field',
            'Date field',
            'Menu field',
            'MSN ID',
            'Text field',
            'Textarea field',
        ], array_map(
            fn(filter $filter): string => $filter->get_header(),
            $filters,
        ));

        // Filter available.
        $this->assertEquals([
            true,
            true,
            true,
            true,
            true,
            true,
        ], array_map(
            fn(filter $filter): bool => $filter->get_is_available(),
            $filters,
        ));

        // Filter available, for non-privileged user.
        $this->setUser(null);
        $this->assertEquals([
            true,
            false,
            true,
            true,
            true,
            true,
        ], array_map(
            fn(filter $filter): bool => $filter->get_is_available(),
            array_slice($userprofilefields->get_filters(), count($initialfilters)),
        ));
    }

    /**
     * Test that adding user profile field columns to a report returns expected values
     */
    public function test_custom_report_content(): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        $userprofilefields = $this->generate_userprofilefields();

        // Create test subject with user profile fields content.
        $user = $this->getDataGenerator()->create_user([
            'firstname' => 'Zebedee',
            'profile_field_checkbox' => true,
            'profile_field_datetime' => '2021-12-09',
            'profile_field_menu' => 'Cat',
            'profile_field_Social' => 12345,
            'profile_field_text' => 'Hello',
            'profile_field_textarea' => 'Goodbye',
        ]);

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');
        $report = $generator->create_report(['name' => 'Users', 'source' => users::class, 'default' => 0]);

        // Add user profile field columns to the report.
        $firstname = $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:firstname']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:profilefield_checkbox']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:profilefield_datetime']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:profilefield_menu']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:profilefield_social']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:profilefield_text']);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:profilefield_textarea']);

        // Sort the report, Admin -> Zebedee for consistency.
        report::toggle_report_column_sorting($report->get('id'), $firstname->get('id'), true);

        $content = $this->get_custom_report_content($report->get('id'));
        $this->assertEquals([
            [
                'c0_firstname' => 'Admin',
                'c1_data' => '',
                'c2_data' => '',
                'c3_data' => '',
                'c4_data' => '',
                'c5_data' => '',
                'c6_data' => '',
            ], [
                'c0_firstname' => 'Zebedee',
                'c1_data' => 'Yes',
                'c2_data' => '9 December 2021',
                'c3_data' => 'Cat',
                'c4_data' => '12345',
                'c5_data' => 'Hello',
                'c6_data' => '<div class="no-overflow">Goodbye</div>',
            ],
        ], $content);
    }

    /**
     * Data provider for {@see test_custom_report_filter}
     *
     * @return array[]
     */
    public function custom_report_filter_provider(): array {
        return [
            'Filter by checkbox profile field' => ['user:profilefield_checkbox', [
                'user:profilefield_checkbox_operator' => boolean_select::CHECKED,
            ], 'testuser'],
            'Filter by checkbox profile field (empty)' => ['user:profilefield_checkbox', [
                'user:profilefield_checkbox_operator' => boolean_select::NOT_CHECKED,
            ], 'admin'],
            'Filter by datetime profile field' => ['user:profilefield_datetime', [
                'user:profilefield_datetime_operator' => date::DATE_RANGE,
                'user:profilefield_datetime_from' => 1622502000,
            ], 'testuser'],
            'Filter by datetime profile field (empty)' => ['user:profilefield_datetime', [
                'user:profilefield_datetime_operator' => date::DATE_EMPTY,
            ], 'admin'],
            'Filter by menu profile field' => ['user:profilefield_menu', [
                'user:profilefield_menu_operator' => select::EQUAL_TO,
                'user:profilefield_menu_value' => 'Dog',
            ], 'testuser'],
            'Filter by menu profile field (empty)' => ['user:profilefield_menu', [
                'user:profilefield_menu_operator' => select::NOT_EQUAL_TO,
                'user:profilefield_menu_value' => 'Dog',
            ], 'admin'],
            'Filter by social profile field' => ['user:profilefield_social', [
                'user:profilefield_social_operator' => text::IS_EQUAL_TO,
                'user:profilefield_social_value' => '12345',
            ], 'testuser'],
            'Filter by social profile field (empty)' => ['user:profilefield_social', [
                'user:profilefield_social_operator' => text::IS_EMPTY,
            ], 'admin'],
            'Filter by text profile field' => ['user:profilefield_text', [
                'user:profilefield_text_operator' => text::IS_EQUAL_TO,
                'user:profilefield_text_value' => 'Hello',
            ], 'testuser'],
            'Filter by text profile field (empty)' => ['user:profilefield_text', [
                'user:profilefield_text_operator' => text::IS_NOT_EQUAL_TO,
                'user:profilefield_text_value' => 'Hello',
            ], 'admin'],
            'Filter by textarea profile field' => ['user:profilefield_textarea', [
                'user:profilefield_textarea_operator' => text::IS_EQUAL_TO,
                'user:profilefield_textarea_value' => 'Goodbye',
            ], 'testuser'],
            'Filter by textarea profile field (empty)' => ['user:profilefield_textarea', [
                'user:profilefield_textarea_operator' => text::DOES_NOT_CONTAIN,
                'user:profilefield_textarea_value' => 'Goodbye',
            ], 'admin'],
        ];
    }

    /**
     * Test filtering report by custom profile fields
     *
     * @param string $filtername
     * @param array $filtervalues
     * @param string $expectmatchuser
     *
     * @dataProvider custom_report_filter_provider
     */
    public function test_custom_report_filter(string $filtername, array $filtervalues, string $expectmatchuser): void {
        $this->resetAfterTest();
        $this->setAdminUser();

        $userprofilefields = $this->generate_userprofilefields();

        // Create test subject with user profile fields content.
        $user = $this->getDataGenerator()->create_user([
            'username' => 'testuser',
            'profile_field_checkbox' => true,
            'profile_field_datetime' => '2021-12-09',
            'profile_field_menu' => 'Dog',
            'profile_field_Social' => '12345',
            'profile_field_text' => 'Hello',
            'profile_field_textarea' => 'Goodbye',
        ]);

        /** @var core_reportbuilder_generator $generator */
        $generator = $this->getDataGenerator()->get_plugin_generator('core_reportbuilder');

        // Create report containing single column, and given filter.
        $report = $generator->create_report(['name' => 'Users', 'source' => users::class, 'default' => 0]);
        $generator->create_column(['reportid' => $report->get('id'), 'uniqueidentifier' => 'user:username']);

        // Add filter, set it's values.
        $generator->create_filter(['reportid' => $report->get('id'), 'uniqueidentifier' => $filtername]);
        $content = $this->get_custom_report_content($report->get('id'), 0, $filtervalues);

        $this->assertCount(1, $content);
        $this->assertEquals($expectmatchuser, reset($content[0]));
    }

    /**
     * Stress test user datasource using profile fields
     *
     * In order to execute this test PHPUNIT_LONGTEST should be defined as true in phpunit.xml or directly in config.php
     */
    public function test_stress_datasource(): void {
        if (!PHPUNIT_LONGTEST) {
            $this->markTestSkipped('PHPUNIT_LONGTEST is not defined');
        }

        $this->resetAfterTest();

        $userprofilefields = $this->generate_userprofilefields();
        $user = $this->getDataGenerator()->create_user([
            'profile_field_checkbox' => true,
            'profile_field_datetime' => '2021-12-09',
            'profile_field_menu' => 'Dog',
            'profile_field_Social' => '12345',
            'profile_field_text' => 'Hello',
            'profile_field_textarea' => 'Goodbye',
        ]);

        $this->datasource_stress_test_columns(users::class);
        $this->datasource_stress_test_columns_aggregation(users::class);
        $this->datasource_stress_test_conditions(users::class, 'user:idnumber');
    }
}
