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

/**
 * Format option class for format tiles.
 * @package    format_tiles
 * @copyright  2023 David Watson {@link http://evolutioncode.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_tiles\local;

/**
 * Format option class for format tiles.
 * @package    format_tiles
 * @copyright  2023 David Watson {@link http://evolutioncode.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_option {

    /**
     * When we store the photo in db format_tiles_tile_options table, specify if it's a section or cm photo.
     */

    /**
     * Option type identifier for section photo.
     */
    const OPTION_SECTION_PHOTO = 1;

    /**
     * Option type identifier for section icon.
     */
    const OPTION_SECTION_ICON = 3;

    /**
     * Tiles filter bar course setting - show no filters.
     */
    const FILTER_NONE = 0;

    /**
     * Tiles filter bar course setting - show tile number filter buttons only.
     */
    const FILTER_NUMBERS_ONLY = 1;

    /**
     * Tiles filter bar course setting - show outcome filter buttons only.
     */
    const FILTER_OUTCOMES_ONLY = 2;

    /**
     * Tiles filter bar course setting - show filter buttons for tile numbers and outcomes.
     */
    const FILTER_OUTCOMES_AND_NUMBERS = 3;

    /**
     * Get a course format option full record from the format_tiles_tile_options table.
     * @param int $courseid
     * @param int $optiontype
     * @param int $elementid
     * @return false|mixed|\stdClass
     */
    public static function get_db_record(int $courseid, int $optiontype, int $elementid) {
        global $DB;
        try {
                self::validate_option_type($optiontype);
            return $DB->get_record(
                'format_tiles_tile_options',
                ['courseid' => $courseid, 'optiontype' => $optiontype, 'elementid' => $elementid]
            );
        } catch (\Exception $e) {
            debugging('Could not get record from db format_tiles_tile_options table ' . $e->getMessage(), DEBUG_DEVELOPER);
            return false;
        }
    }

    /**
     * Get a course format option value from the format_tiles_tile_options table.
     * @param int $courseid
     * @param int $optiontype
     * @param int $elementid the id of the element (e.g. section or cm id).
     * @return false|mixed
     */
    public static function get(int $courseid, int $optiontype, int $elementid) {
        $record = self::get_db_record($courseid, $optiontype, $elementid);
        return $record ? $record->optionvalue : false;
    }

    /**
     * Get multiple options of a type for a course.
     * @param int $courseid
     * @param int $optiontype
     * @return array
     * @throws \dml_exception
     * @throws \moodle_exception
     */
    public static function get_multiple(int $courseid, int $optiontype): array {
        global $DB;
        self::validate_option_type($optiontype);
        return $DB->get_records_sql(
            "SELECT elementid, optionvalue
                FROM {format_tiles_tile_options} WHERE courseid = ? AND optiontype = ?",
            [$courseid, $optiontype]
        );
    }

    /**
     * Unset a course format option value in the format_tiles_tile_options table.
     * @param int $courseid
     * @param int $optiontype
     * @param int $elementid
     * @return bool
     */
    public static function unset(int $courseid, int $optiontype, int $elementid) {
        global $DB;
        try {
            $record = self::get_db_record($courseid, $optiontype, $elementid);
            if ($record) {
                return $DB->delete_records('format_tiles_tile_options', ['id' => $record->id]);
            }
        } catch (\Exception $e) {
            debugging('Could not unset records ' . $e->getMessage(), DEBUG_DEVELOPER);
        }
        return false;
    }

    /**
     * Unset multiple options of specifcied types for a course and element.
     * @param int $courseid
     * @param int $elementid
     * @param array $optiontypes
     * @return bool
     * @throws \dml_exception
     */
    public static function unset_multiple_types(int $courseid, int $elementid, array $optiontypes): bool {
        global $DB;
        $result = false;
        foreach ($optiontypes as $optiontype) {
            $params = ['courseid' => $courseid, 'elementid' => $elementid, 'optiontype' => $optiontype];
            if ($DB->delete_records('format_tiles_tile_options', $params)) {
                $result = true;
            }
        }
        return $result;
    }

    /**
     * Unset all course format option values in the format_tiles_tile_options table for a course.
     * @param int $courseid
     * @return bool
     */
    public static function unset_all_course(int $courseid): bool {
        global $DB;
        try {
            $result = $DB->delete_records('format_tiles_tile_options', ['courseid' => $courseid]);

            // Delete legacy tile icon choices.
            return $result && $DB->delete_records_select(
                'course_format_options',
                "courseid = :courseid AND format = 'tiles' AND name IN('tilephoto', 'tileicon')",
                ['courseid' => $courseid]
            );
        } catch (\Exception $e) {
            debugging('Could not unset records ' . $e->getMessage(), DEBUG_DEVELOPER);
            return false;
        }
    }

    /**
     * Set a course format option in the format_tiles_tile_options table.
     * @param int $courseid
     * @param int $optiontype
     * @param int $elementid
     * @param string $optionvalue
     * @return bool
     * @throws \dml_exception|\moodle_exception
     */
    public static function set(int $courseid, int $optiontype, int $elementid, string $optionvalue): bool {
        global $DB;
        self::validate_option_type($optiontype);

        $optiongroups = [[self::OPTION_SECTION_PHOTO, self::OPTION_SECTION_ICON]];
        foreach ($optiongroups as $optiongroup) {
            if (in_array($optiontype, $optiongroup)) {
                self::unset_multiple_types($courseid, $elementid, $optiongroup);
            }
        }
        if ($optionvalue) {
            $record = (object)[
                'courseid' => $courseid, 'elementid' => $elementid,
                'optiontype' => $optiontype, 'optionvalue' => $optionvalue,
            ];
            return $DB->insert_record('format_tiles_tile_options', $record);
        }
        return true;
    }
    /**
     * Validate an option type for format_tiles_tile_options table.
     * @param int $optiontype
     * @return bool
     * @throws \moodle_exception
     */
    public static function validate_option_type(int $optiontype) {
        $oclass = new \ReflectionClass(__CLASS__);
        foreach ($oclass->getConstants() as $k => $v) {
            if (strpos($k, 'OPTION_') === 0 && $v == $optiontype) {
                return true;
            }
        }
        throw new \moodle_exception('invalidargument', 'format_tiles', '', '', 'Unexpected option type ' . $optiontype);
    }

    /**
     * For a given course (with optional section) migrate any legacy course format options to new style.
     * @param int $courseid
     * @param int $sectionid
     * @throws \dml_exception|\moodle_exception
     */
    public static function migrate_legacy_format_options(int $courseid, int $sectionid = 0) {
        // First the tile photos.
        self::migrate_legacy_format_option_type($courseid, self::OPTION_SECTION_PHOTO, $sectionid);
        // First the tile icons.
        self::migrate_legacy_format_option_type($courseid, self::OPTION_SECTION_ICON, $sectionid);
    }

    /**
     * Migrate a specific type of legacy format option in a course to the new table.
     * @param int $courseid
     * @param int $optiontype
     * @param int $sectionid optional section ID to limit to.
     * @throws \dml_exception
     * @throws \invalid_parameter_exception
     * @throws \moodle_exception
     */
    public static function migrate_legacy_format_option_type(int $courseid, int $optiontype, int $sectionid = 0) {
        global $DB;

        // If we have any legacy course format options which need moving to format_tiles_tile_options table, move them.
        $legacyoptions = self::get_legacy_format_options_recordset($courseid, $optiontype, $sectionid);
        $context = \context_course::instance($courseid);
        if (!$legacyoptions->valid()) {
            return;
        }
        foreach ($legacyoptions as $legacyoption) {
            if ($legacyoption->value) {

                // If this is a photo to migrate and an icon already set, remove the icon as photo takes priority.
                if ($optiontype == self::OPTION_SECTION_PHOTO) {
                    $icon = self::get($courseid, self::OPTION_SECTION_ICON, $legacyoption->sectionid);
                    if ($icon) {
                        self::unset($courseid, self::OPTION_SECTION_ICON, $legacyoption->sectionid);
                    }
                }

                // If this is an icon and there is a photo already set, skip as photo takes priority.
                if ($optiontype == self::OPTION_SECTION_ICON) {
                    $photo = self::get($courseid, self::OPTION_SECTION_PHOTO, $legacyoption->sectionid);
                    if ($photo) {
                        // We already have a photo set so can ignore this icon - nothing to migrate.
                        $DB->delete_records('course_format_options', ['id' => $legacyoption->id]);
                        continue;
                    }
                }

                $existing = self::get($courseid, $optiontype, $legacyoption->sectionid);
                // Only if we don't already have a new style option for this item.
                if (!$existing) {
                    // If it's a photo, check we have a file, and skip if not.
                    if ($optiontype == self::OPTION_SECTION_PHOTO) {
                        if (!tile_photo::get_file_from_ids($context->id, $legacyoption->sectionid, $legacyoption->value)) {
                            $DB->delete_records('course_format_options', ['id' => $legacyoption->id]);
                            continue;
                        }
                    }
                    $result = self::set(
                        $courseid,
                        $optiontype,
                        $legacyoption->sectionid,
                        $legacyoption->value
                    );
                    if ($result) {
                        $DB->delete_records('course_format_options', ['id' => $legacyoption->id]);
                    }
                } else {
                    // We do already have a new option set for this item so we should discard the old setting.
                    $DB->delete_records('course_format_options', ['id' => $legacyoption->id]);
                }
            } else {
                $DB->delete_records('course_format_options', ['id' => $legacyoption->id]);
            }
        }
        $legacyoptions->close();
    }

    /**
     * For a given course, get any legacy format options from the DB.
     * @param int $courseid
     * @param string $optiontype
     * @param int $sectionid
     * @return \moodle_recordset
     * @throws \dml_exception
     * @throws \invalid_parameter_exception
     */
    public static function get_legacy_format_options_recordset(
            int $courseid, string $optiontype, int $sectionid = 0): \moodle_recordset {
        global $DB;
        if (!in_array($optiontype, [self::OPTION_SECTION_PHOTO, self::OPTION_SECTION_ICON])) {
            // We cannot migrate cm icons or photos as they did not exist in legacy.
            throw new \invalid_parameter_exception('Invalid option type: ' . $optiontype);
        }
        $queryparams = ['format' => 'tiles', 'courseid' => $courseid];
        $queryparams['name'] = $optiontype == self::OPTION_SECTION_PHOTO ? 'tilephoto' : 'tileicon';
        if ($sectionid) {
            $queryparams['sectionid'] = $sectionid;
        }
        return $DB->get_recordset(
            'course_format_options', $queryparams, 'courseid, sectionid', 'id, sectionid, value'
        );
    }

    /**
     * Following Tiles plugin 4.3 upgrade, cron should migrate tile icons and photos to a new database table.
     * @see \format_tiles\task\migrate_legacy_data
     * @param int $courseid
     * @return bool
     * @throws \dml_exception
     */
    public static function needs_migration_incomplete_warning(int $courseid): bool {
        global $DB;
        $haslegacyoptions = $DB->record_exists_sql(
            "SELECT id FROM {course_format_options}
                WHERE courseid = ? and format = 'tiles' AND name IN ('tilephoto', 'tileicon')",
            [$courseid]
        );
        if (!$haslegacyoptions) {
            return false;
        }
        $hasmigratedoptions = $DB->record_exists_sql(
            "SELECT id FROM {format_tiles_tile_options} WHERE courseid = ? AND optiontype IN (?, ?)",
            [$courseid, self::OPTION_SECTION_PHOTO, self::OPTION_SECTION_ICON]
        );
        return !$hasmigratedoptions;
    }

    /**
     * Set temporary legacy course format options in the DB.
     * Used during course backup, to make the course export backwards compatible.
     * @param int $courseid
     * @return void
     * @throws \dml_exception
     */
    public static function set_legacy_format_options(int $courseid) {
        global $DB;
        $courseformattable = 'course_format_options';

        $mapping = ['tilephoto' => self::OPTION_SECTION_PHOTO, 'tileicon' => self::OPTION_SECTION_ICON];

        foreach ($mapping as $legacytype => $newtype) {
            $elements = self::get_multiple($courseid, $newtype);
            if (!empty($elements)) {
                foreach ($elements as $element) {
                    $params = [
                        'courseid' => $courseid,
                        'format' => 'tiles',
                        'sectionid' => $element->elementid,
                        'name' => $legacytype,
                    ];
                    $existingrecord = $DB->get_record($courseformattable, $params);
                    if ($existingrecord) {
                        $existingrecord->value = $element->optionvalue;
                        $DB->update_record($courseformattable, $existingrecord);
                    } else {
                        $params['value'] = $element->optionvalue;
                        $DB->insert_record('course_format_options', (object)$params);
                    }
                }
            }
        }
    }

    /**
     * Where temporary legacy course format options have been added during course backup, delete them.
     * @param int $courseid
     * @return void
     * @throws \dml_exception
     */
    public static function delete_legacy_format_options(int $courseid) {
        global $DB;
        $legacyoptions = $DB->get_recordset_sql(
        "SELECT id, sectionid, name FROM {course_format_options}
            WHERE courseid = ? AND format = 'tiles' AND name IN ('tilephoto', 'tileicon')",
            [$courseid]
        );
        if ($legacyoptions->valid()) {
            foreach ($legacyoptions as $legacyoption) {
                // Only delete the legacy record if we are sure that a new record exists.
                $newrecordexists = $DB->record_exists_sql(
                    "SELECT id FROM {format_tiles_tile_options}
                        WHERE courseid = :courseid AND optiontype IN (:sectionphoto, :sectionicon)
                        AND elementid = :sectionid",
                    [
                        'courseid' => $courseid, 'sectionid' => $legacyoption->sectionid,
                        'sectionphoto' => self::OPTION_SECTION_PHOTO, 'sectionicon' => self::OPTION_SECTION_ICON,
                    ]
                );
                if ($newrecordexists) {
                    $DB->delete_records('course_format_options', [
                        'courseid' => $courseid,
                        'format' => 'tiles',
                        'sectionid' => $legacyoption->sectionid,
                        'name' => $legacyoption->name,
                    ]);
                }
            }
        }
        $legacyoptions->close();
    }
}
