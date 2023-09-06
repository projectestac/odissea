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

namespace core_badges\reportbuilder\local\entities;

use context_course;
use context_helper;
use context_system;
use html_writer;
use lang_string;
use moodle_url;
use stdClass;
use core_reportbuilder\local\entities\base;
use core_reportbuilder\local\filters\{select, text};
use core_reportbuilder\local\report\{column, filter};

defined('MOODLE_INTERNAL') or die;

global $CFG;
require_once("{$CFG->libdir}/badgeslib.php");

/**
 * Badge entity
 *
 * @package     core_badges
 * @copyright   2022 Paul Holden <paulh@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class badge extends base {

    /**
     * Database tables that this entity uses and their default aliases
     *
     * @return array
     */
    protected function get_default_table_aliases(): array {
        return [
            'badge' => 'b',
            'context' => 'bctx',
        ];
    }

    /**
     * The default title for this entity
     *
     * @return lang_string
     */
    protected function get_default_entity_title(): lang_string {
        return new lang_string('badgedetails', 'core_badges');
    }

    /**
     * Initialise the entity
     *
     * @return base
     */
    public function initialise(): base {
        $columns = $this->get_all_columns();
        foreach ($columns as $column) {
            $this->add_column($column);
        }

        // All the filters defined by the entity can also be used as conditions.
        $filters = $this->get_all_filters();
        foreach ($filters as $filter) {
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
        global $DB;

        $badgealias = $this->get_table_alias('badge');
        $contextalias = $this->get_table_alias('context');

        // Name.
        $columns[] = (new column(
            'name',
            new lang_string('name'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$badgealias}.name")
            ->set_is_sortable(true);

        // Description (note, this column contains plaintext so requires no post-processing).
        $descriptionfieldsql = "{$badgealias}.description";
        if ($DB->get_dbfamily() === 'oracle') {
            $descriptionfieldsql = $DB->sql_order_by_text($descriptionfieldsql, 1024);
        }
        $columns[] = (new column(
            'description',
            new lang_string('description', 'core_badges'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_LONGTEXT)
            ->add_field($descriptionfieldsql, 'description');

        // Criteria.
        $columns[] = (new column(
            'criteria',
            new lang_string('bcriteria', 'core_badges'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$badgealias}.id")
            ->set_disabled_aggregation_all()
            ->add_callback(static function($badgeid): string {
                global $PAGE;
                if (!$badgeid) {
                    return '';
                }
                $badge = new \core_badges\badge($badgeid);

                $renderer = $PAGE->get_renderer('core_badges');
                return $renderer->print_badge_criteria($badge, 'short');
            });

        // Image.
        $columns[] = (new column(
            'image',
            new lang_string('badgeimage', 'core_badges'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->add_join("LEFT JOIN {context} {$contextalias}
                    ON {$contextalias}.contextlevel = " . CONTEXT_COURSE . "
                   AND {$contextalias}.instanceid = {$badgealias}.courseid")
            ->set_type(column::TYPE_INTEGER)
            ->add_fields("{$badgealias}.id, {$badgealias}.type, {$badgealias}.courseid")
            ->add_field($DB->sql_cast_to_char("{$badgealias}.imagecaption"), 'imagecaption')
            ->add_fields(context_helper::get_preload_record_columns_sql($contextalias))
            ->set_disabled_aggregation_all()
            ->add_callback(static function(?int $badgeid, stdClass $badge): string {
                if (!$badgeid) {
                    return '';
                }
                if ($badge->type == BADGE_TYPE_SITE) {
                    $context = context_system::instance();
                } else {
                    context_helper::preload_from_record($badge);
                    $context = context_course::instance($badge->courseid);
                }

                $badgeimage = moodle_url::make_pluginfile_url($context->id, 'badges', 'badgeimage', $badgeid, '/', 'f2');
                return html_writer::img($badgeimage, $badge->imagecaption);
            });

        // Language.
        $columns[] = (new column(
            'language',
            new lang_string('language'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$badgealias}.language")
            ->set_is_sortable(true)
            ->add_callback(static function($language): string {
                $languages = get_string_manager()->get_list_of_languages();
                return $languages[$language] ?? $language ?? '';
            });

        // Version.
        $columns[] = (new column(
            'version',
            new lang_string('version', 'core_badges'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$badgealias}.version")
            ->set_is_sortable(true);

        // Status.
        $columns[] = (new column(
            'status',
            new lang_string('status', 'core_badges'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TEXT)
            ->add_field("{$badgealias}.status")
            ->set_is_sortable(true)
            ->add_callback(static function($status): string {
                return $status ? get_string("badgestatus_{$status}", 'core_badges') : '';
            });

        // Expiry date/period.
        $columns[] = (new column(
            'expiry',
            new lang_string('expirydate', 'core_badges'),
            $this->get_entity_name()
        ))
            ->add_joins($this->get_joins())
            ->set_type(column::TYPE_TIMESTAMP)
            ->add_fields("{$badgealias}.expiredate, {$badgealias}.expireperiod, {$badgealias}.id")
            ->set_is_sortable(true, ["{$badgealias}.expiredate", "{$badgealias}.expireperiod"])
            ->set_disabled_aggregation_all()
            ->add_callback(static function(?int $expiredate, stdClass $badge): string {
                if (!$badge->id) {
                    return '';
                } else if ($expiredate) {
                    return userdate($expiredate);
                } else if ($badge->expireperiod) {
                    return format_time($badge->expireperiod);
                } else {
                    return get_string('never', 'core_badges');
                }
            });

        // Image author details.
        foreach (['imageauthorname', 'imageauthoremail', 'imageauthorurl'] as $imageauthorfield) {
            $columns[] = (new column(
                $imageauthorfield,
                new lang_string($imageauthorfield, 'core_badges'),
                $this->get_entity_name()
            ))
                ->add_joins($this->get_joins())
                ->set_type(column::TYPE_TEXT)
                ->add_field("{$badgealias}.{$imageauthorfield}")
                ->set_is_sortable(true);
        }

        return $columns;
    }

    /**
     * Return list of all available filters
     *
     * @return filter[]
     */
    protected function get_all_filters(): array {
        $badgealias = $this->get_table_alias('badge');

        // Name.
        $filters[] = (new filter(
            text::class,
            'name',
            new lang_string('name'),
            $this->get_entity_name(),
            "{$badgealias}.name"
        ))
            ->add_joins($this->get_joins());

        // Status.
        $filters[] = (new filter(
            select::class,
            'status',
            new lang_string('status', 'core_badges'),
            $this->get_entity_name(),
            "{$badgealias}.status"
        ))
            ->add_joins($this->get_joins())
            ->set_options([
                BADGE_STATUS_INACTIVE => new lang_string('badgestatus_0', 'core_badges'),
                BADGE_STATUS_ACTIVE => new lang_string('badgestatus_1', 'core_badges'),
                BADGE_STATUS_INACTIVE_LOCKED => new lang_string('badgestatus_2', 'core_badges'),
                BADGE_STATUS_ACTIVE_LOCKED => new lang_string('badgestatus_3', 'core_badges'),
                BADGE_STATUS_ARCHIVED => new lang_string('badgestatus_4', 'core_badges'),
            ]);

        // Type.
        $filters[] = (new filter(
            select::class,
            'type',
            new lang_string('type', 'core_badges'),
            $this->get_entity_name(),
            "{$badgealias}.type"
        ))
            ->add_joins($this->get_joins())
            ->set_options([
                BADGE_TYPE_SITE => new lang_string('site'),
                BADGE_TYPE_COURSE => new lang_string('course'),
            ]);

        return $filters;
    }
}
