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

namespace core_course\reportbuilder\local\entities;

use core_reportbuilder\local\entities\base;
use core_course\reportbuilder\local\formatters\completion as completion_formatter;
use core_reportbuilder\local\filters\boolean_select;
use core_reportbuilder\local\filters\date;
use core_reportbuilder\local\helpers\format;
use core_reportbuilder\local\report\column;
use core_reportbuilder\local\report\filter;
use lang_string;
use stdClass;

/**
 * Course completion entity implementation
 *
 * @package     core_course
 * @copyright   2022 David Matamoros <davidmc@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class completion extends base {

    /**
     * Database tables that this entity uses and their default aliases
     *
     * @return array
     */
    protected function get_default_table_aliases(): array {
        return [
            'course_completion' => 'ccomp',
            'course' => 'c',
            'grade_grades' => 'gg',
            'grade_items' => 'gi',
            'user' => 'u',
        ];
    }

    /**
     * The default title for this entity in the list of columns/conditions/filters in the report builder
     *
     * @return lang_string
     */
    protected function get_default_entity_title(): lang_string {
        return new lang_string('coursecompletion', 'completion');
    }

    /**
     * Initialise the entity
     *
     * @return base
     */
    public function initialise(): base {
        foreach ($this->get_all_columns() as $column) {
            $this->add_column($column);
        }

        // All the filters defined by the entity can also be used as conditions.
        foreach ($this->get_all_filters() as $filter) {
            $this
                ->add_filter($filter)
                ->add_condition($filter);
        }

        return $this;
    }

    /**
     * Returns list of all available columns
     *
     * @return column[]
     */
    protected function get_all_columns(): array {
        $coursecompletion = $this->get_table_alias('course_completion');
        $course = $this->get_table_alias('course');
        $grade = $this->get_table_alias('grade_grades');
        $gradeitem = $this->get_table_alias('grade_items');
        $user = $this->get_table_alias('user');

        // Completed column.
        $columns[] = (new column(
            'completed',
            new lang_string('completed', 'completion'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_BOOLEAN)
            ->add_field("CASE WHEN {$coursecompletion}.timecompleted > 0 THEN 1 ELSE 0 END", 'completed')
            ->add_field("{$user}.id", 'userid')
            ->set_is_sortable(true)
            ->add_callback(static function(bool $value, stdClass $row): string {
                if (!$row->userid) {
                    return '';
                }
                return format::boolean_as_text($value);
            });

        // Progress percentage column.
        $columns[] = (new column(
            'progresspercent',
            new lang_string('progress', 'completion'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$course}.id", 'courseid')
            ->add_field("{$user}.id", 'userid')
            ->set_is_sortable(false)
            ->add_callback([completion_formatter::class, 'completion_progress']);

        // Time enrolled.
        $columns[] = (new column(
            'timeenrolled',
            new lang_string('timeenrolled', 'enrol'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TIMESTAMP)
            ->add_field("{$coursecompletion}.timeenrolled")
            ->set_is_sortable(true)
            ->add_callback([format::class, 'userdate']);

        // Time started.
        $columns[] = (new column(
            'timestarted',
            new lang_string('timestarted', 'enrol'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TIMESTAMP)
            ->add_field("{$coursecompletion}.timestarted")
            ->set_is_sortable(true)
            ->add_callback([format::class, 'userdate']);

        // Time completed.
        $columns[] = (new column(
            'timecompleted',
            new lang_string('timecompleted', 'completion'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TIMESTAMP)
            ->add_field("{$coursecompletion}.timecompleted")
            ->set_is_sortable(true)
            ->add_callback([format::class, 'userdate']);

        // Time reaggregated.
        $columns[] = (new column(
            'reaggregate',
            new lang_string('timereaggregated', 'enrol'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TIMESTAMP)
            ->add_field("{$coursecompletion}.reaggregate")
            ->set_is_sortable(true)
            ->add_callback([format::class, 'userdate']);

        // Days taking course (days since course start date until completion or until current date if not completed).
        $currenttime = time();
        $columns[] = (new column(
            'dayscourse',
            new lang_string('daystakingcourse', 'course'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_INTEGER)
            ->add_field("(
                CASE
                    WHEN {$coursecompletion}.timecompleted > 0 THEN
                        {$coursecompletion}.timecompleted
                    ELSE
                        {$currenttime}
                END - {$course}.startdate) / " . DAYSECS, 'dayscourse')
            ->add_field("{$user}.id", 'userid')
            ->set_is_sortable(true)
            ->add_callback([completion_formatter::class, 'get_days']);

        // Days since last completion (days since last enrolment date until completion or until current date if not completed).
        $columns[] = (new column(
            'daysuntilcompletion',
            new lang_string('daysuntilcompletion', 'completion'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_INTEGER)
            ->add_field("(
                CASE
                    WHEN {$coursecompletion}.timecompleted > 0 THEN
                        {$coursecompletion}.timecompleted
                    ELSE
                        {$currenttime}
                END - {$coursecompletion}.timeenrolled) / " . DAYSECS, 'daysuntilcompletion')
            ->add_field("{$user}.id", 'userid')
            ->set_is_sortable(true)
            ->add_callback([completion_formatter::class, 'get_days']);

        // Student course grade.
        $columns[] = (new column(
            'grade',
            new lang_string('gradenoun'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->add_join("
                LEFT JOIN {grade_items} {$gradeitem}
                       ON ({$gradeitem}.itemtype = 'course' AND {$course}.id = {$gradeitem}.courseid)
            ")
            ->add_join("
                LEFT JOIN {grade_grades} {$grade}
                       ON ({$user}.id = {$grade}.userid AND {$gradeitem}.id = {$grade}.itemid)
            ")
            ->set_type(column::TYPE_INTEGER)
            ->add_fields("{$grade}.finalgrade")
            ->set_is_sortable(true)
            ->add_callback(function ($value) {
                if (!$value) {
                    return '';
                }
                return format_float($value, 2);
            });

        return $columns;
    }

    /**
     * Return list of all available filters
     *
     * @return filter[]
     */
    protected function get_all_filters(): array {
        $coursecompletion = $this->get_table_alias('course_completion');

        // Completed status filter.
        $filters[] = (new filter(
            boolean_select::class,
            'completed',
            new lang_string('completed', 'completion'),
            $this->get_entity_name(),
            "CASE WHEN {$coursecompletion}.timecompleted > 0 THEN 1 ELSE 0 END"
        ))
            ->add_joins($this->get_joins());

        // Time completed filter.
        $filters[] = (new filter(
            date::class,
            'timecompleted',
            new lang_string('timecompleted', 'completion'),
            $this->get_entity_name(),
            "{$coursecompletion}.timecompleted"
        ))
            ->add_joins($this->get_joins())
            ->set_limited_operators([
                date::DATE_ANY,
                date::DATE_NOT_EMPTY,
                date::DATE_EMPTY,
                date::DATE_RANGE,
                date::DATE_LAST,
                date::DATE_CURRENT,
            ]);

        return $filters;
    }
}
