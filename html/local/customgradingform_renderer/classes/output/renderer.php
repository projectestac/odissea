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
 * Renders the "Import rubric from CSV" button for the grading form interface.
 *
 * @package   local_customgradingform_renderer
 * @copyright 2025 Richard Rangel
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_customgradingform_renderer\output;

use plugin_renderer_base;
use moodle_url;

/**
 * Custom grading form renderer.
 */
class renderer extends plugin_renderer_base {

    /**
     * Renders a button to initiate rubric import from a CSV file.
     *
     * @param int $areaid The ID of the grading area.
     * @param int $contextid The context ID (usually from the course module).
     * @param string $returnurl Optional return URL to redirect back after import.
     * @return string HTML button markup.
     */
    public function gradingform_new_form_from_file_button(int $areaid, int $contextid, string $returnurl = ''): string {

        // Build return URL back to grading form management.
        $returnurl = new moodle_url('/grade/grading/manage.php', [
            'contextid' => $contextid,
            'component' => 'mod_' . $this->page->cm->modname,
            'area' => 'submissions',
        ]);

        // URL for the import interface.
        $url = new moodle_url('/local/customgradingform_renderer/import.php', [
            'areaid' => $areaid,
            'contextid' => $contextid,
            'returnurl' => $returnurl->out(false),
        ]);

        // Render the button using core renderer.
        return $this->output->single_button(
            $url,
            get_string('importfromcsv', 'local_customgradingform_renderer'),
            'get'
        );
    }
}
