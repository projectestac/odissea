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
 * Form definition for rubric CSV upload.
 *
 * @package   local_customgradingform_renderer
 * @copyright 2025 Richard Rangel
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

/**
 * Import form for uploading a rubric CSV file.
 */
class import_form extends moodleform {
    /**
     * Define form elements.
     */
    public function definition() {
        $mform = $this->_form;

        // File picker.
        $mform->addElement(
            'filepicker',
            'rubriccsv',
            get_string('choosecsvfile', 'local_customgradingform_renderer'),
            null,
            [
                'accepted_types' => ['.csv'],
                'maxbytes' => 0,
                'subdirs' => 0,
            ]
        );
        $mform->addRule('rubriccsv', null, 'required');

        // Hidden elements to maintain state.
        $mform->addElement('hidden', 'areaid');
        $mform->setType('areaid', PARAM_INT);

        $mform->addElement('hidden', 'contextid');
        $mform->setType('contextid', PARAM_INT);

        $mform->addElement('hidden', 'returnurl');
        $mform->setType('returnurl', PARAM_LOCALURL);

        $this->add_action_buttons(true, get_string('submitcsv', 'local_customgradingform_renderer'));
    }
}
