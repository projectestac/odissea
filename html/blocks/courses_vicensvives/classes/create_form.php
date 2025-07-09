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

namespace block_courses_vicensvives;

defined('MOODLE_INTERNAL') || die;

require_once($CFG->dirroot.'/lib/formslib.php');

class create_form extends \moodleform {

    public function definition() {
        global $CFG;

        $mform = $this->_form;

        $mform->addElement('header', 'addcourse', get_string('addcourse', 'block_courses_vicensvives'));

        $label = get_string('fullname', 'block_courses_vicensvives');
        $mform->addElement('static', 'fullname', $label, $this->_customdata['fullname']);

        $label = get_string('level', 'block_courses_vicensvives');
        $mform->addElement('static', 'level', $label, $this->_customdata['level']);

        $label = get_string('subject', 'block_courses_vicensvives');
        $mform->addElement('static', 'subject', $label, $this->_customdata['subject']);

        $label = get_string('isbn', 'block_courses_vicensvives');
        $mform->addElement('static', 'isbn', $label, $this->_customdata['isbn']);

        $options = [
            'vv' => 'Vicens Vives',
            'topics' => get_string('standardformat', 'block_courses_vicensvives'),
        ];
        $mform->addElement('select', 'format', get_string('format', 'block_courses_vicensvives'), $options);
        $mform->setType('format', PARAM_ALPHA);

        $text = get_string('createwarning', 'block_courses_vicensvives');
        $content = \html_writer::div($text, 'vicensvives_create_warning');
        $mform->addElement('static', 'warning', '', $content);

        $buttonarray = [];
        $label = get_string('create', 'block_courses_vicensvives');
        $buttonarray[] = $mform->createElement('submit', 'submitbutton', $label);
        $label = get_string('cancel', 'block_courses_vicensvives');
        $buttonarray[] = $mform->createElement('cancel', 'cancel', $label);;
        $mform->addGroup($buttonarray, 'buttonar', '', [' '], false);
        $mform->closeHeaderBefore('buttonar');
    }
}
