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
 * Main block class for block_importrubric.
 *
 * @package   block_importrubric
 * @copyright 2025 Richard Rangel
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * This is a DocBlock for block_importrubric.
 */
class block_importrubric extends block_base {
    /**
     * Initialize block title.
     */
    public function init(): void {
        $this->title = get_string('pluginname', 'block_importrubric');
    }

    /**
     * Define where the block can be added.
     *
     * @return array
     */
    public function applicable_formats(): array {
        return [
            'mod' => true, // Only available in activity modules.
        ];
    }

    /**
     * Generate block content.
     *
     * @return stdClass
     */
    public function get_content(): stdClass {
        global $DB;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '';

        // Get course module ID from the URL.
        $cmid = optional_param('id', 0, PARAM_INT);

        if (!$cmid) {
            $this->content->text = html_writer::div('<em>' . get_string('errornoid', 'block_importrubric') . '</em>', 'debug');
            return $this->content;
        }

        // Retrieve the module name (e.g., 'assign').
        $sql = 'SELECT m.name
                  FROM {course_modules} cm
                  JOIN {modules} m ON cm.module = m.id
                 WHERE cm.id = :cmid';
        $modulename = $DB->get_field_sql($sql, ['cmid' => $cmid]);

        // Only show the button if the module is an assignment.
        if ($modulename !== 'assign') {
            return $this->content;
        }

        // Check user capability.
        $context = context_module::instance($cmid);
        if (!has_capability('block/importrubric:addinstance', $context)) {
            return $this->content;
        }

        // Generate the import URL.
        $url = new moodle_url('/local/customgradingform_renderer/initimport.php', [
            'cmid' => $cmid,
        ]);

        // Render the import button.
        $this->content->text .= html_writer::link(
            $url,
            get_string('importfromcsv', 'block_importrubric'),
            [
                'class' => 'btn btn-primary',
                'style' => 'display:block;text-align:center;padding:10px;margin-top:10px;',
            ]
        );

        return $this->content;
    }
}
