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

namespace report_configlog\reportbuilder\local\entities;

use lang_string;
use core_reportbuilder\local\entities\base;
use core_reportbuilder\local\helpers\format;
use core_reportbuilder\local\report\column;
use core_reportbuilder\local\report\filter;
use core_reportbuilder\local\filters\date;
use core_reportbuilder\local\filters\text;

/**
 * Config change entity class implementation
 *
 * Defines all the columns and filters that can be added to reports that use this entity.
 *
 * @package    report_configlog
 * @copyright  2020 Paul Holden <paulh@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class config_change extends base {

    /**
     * Database tables that this entity uses and their default aliases
     *
     * @return array
     */
    protected function get_default_table_aliases(): array {
        return ['config_log' => 'cl'];
    }

    /**
     * The default title for this entity
     *
     * @return lang_string
     */
    protected function get_default_entity_title(): lang_string {
        return new lang_string('entityconfigchange', 'report_configlog');
    }

    /**
     * Initialize the entity
     *
     * @return base
     */
    public function initialise(): base {
        $columns = $this->get_all_columns();
        foreach ($columns as $column) {
            $this->add_column($column);
        }

        $filters = $this->get_all_filters();
        foreach ($filters as $filter) {
            $this->add_filter($filter);
        }

        return $this;
    }

    /**
     * Returns list of all available columns
     *
     * @return column[]
     */
    protected function get_all_columns(): array {
        $tablealias = $this->get_table_alias('config_log');

        // Time modified column.
        $columns[] = (new column(
            'timemodified',
            new lang_string('timemodified', 'report_configlog'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TIMESTAMP)
            ->add_fields("{$tablealias}.timemodified")
            ->set_is_sortable(true)
            ->add_callback([format::class, 'userdate']);

        // Plugin column.
        $columns[] = (new column(
            'plugin',
            new lang_string('plugin', 'report_configlog'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$tablealias}.plugin")
            ->set_is_sortable(true)
            ->add_callback(static function(?string $plugin): string {
                return $plugin ?? 'core';
            });

        // Setting column.
        $columns[] = (new column(
            'setting',
            new lang_string('setting', 'report_configlog'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$tablealias}.name")
            ->set_is_sortable(true);

        // New value column.
        $columns[] = (new column(
            'newvalue',
            new lang_string('valuenew', 'report_configlog'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$tablealias}.value")
            ->set_is_sortable(true)
            ->add_callback(static function(?string $value): string {
                return format_text($value, FORMAT_PLAIN);
            });

        // Old value column.
        $columns[] = (new column(
            'oldvalue',
            new lang_string('valueold', 'report_configlog'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$tablealias}.oldvalue")
            ->set_is_sortable(true)
            ->add_callback(static function(?string $oldvalue): string {
                return format_text($oldvalue, FORMAT_PLAIN);
            });

        return $columns;
    }

    /**
     * Return list of all available filters
     *
     * @return filter[]
     */
    protected function get_all_filters(): array {
        $tablealias = $this->get_table_alias('config_log');

        // Time modified filter.
        $filters[] = (new filter(
            date::class,
            'timemodified',
            new lang_string('timemodified', 'report_configlog'),
            $this->get_entity_name(),
            "{$tablealias}.timemodified"
        ))
            ->add_joins($this->get_joins())
            ->set_limited_operators([
                date::DATE_ANY,
                date::DATE_RANGE,
                date::DATE_PREVIOUS,
                date::DATE_CURRENT,
            ]);

        // Setting filter.
        $filters[] = (new filter(
            text::class,
            'setting',
            new lang_string('setting', 'report_configlog'),
            $this->get_entity_name(),
            "{$tablealias}.name"
        ))
            ->add_joins($this->get_joins());

        // New value filter.
        $filters[] = (new filter(
            text::class,
            'value',
            new lang_string('valuenew', 'report_configlog'),
            $this->get_entity_name(),
            "{$tablealias}.value"
        ))
            ->add_joins($this->get_joins());

        // Old value filter.
        $filters[] = (new filter(
            text::class,
            'oldvalue',
            new lang_string('valueold', 'report_configlog'),
            $this->get_entity_name(),
            "{$tablealias}.oldvalue"
        ))
            ->add_joins($this->get_joins());

        return $filters;
    }
}
