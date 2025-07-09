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

class filter_form extends \moodleform {

    public function definition() {
        global $CFG;

        $mform = $this->_form;
        $levels = $this->_customdata['levels'];
        $subjects = $this->_customdata['subjects'];
        $search = $this->_customdata['search'];

        $mform->addElement('header', 'search', get_string('search'));
        if (!$search['fullname'] && !$search['idsubject'] && !$search['idlevel'] && !$search['isbn']) {
            $mform->setExpanded('search', false, true);
        }

        $string = get_string('fullname', 'block_courses_vicensvives');
        $mform->addElement('text', 'fullname', $string);
        $mform->setType('fullname', PARAM_TEXT);
        $mform->setDefault('fullname', $search['fullname']);

        $string = get_string('subject', 'block_courses_vicensvives');
        $mform->addElement('select', 'idsubject', $string, $subjects);
        $mform->setType('idsubject', PARAM_INT);
        $mform->setDefault('idsubject', $search['idsubject']);

        $string = get_string('level', 'block_courses_vicensvives');
        $mform->addElement('select', 'idlevel', $string, $levels);
        $mform->setType('idlevel', PARAM_INT);
        $mform->setDefault('idlevel', $search['idlevel']);

        $string = get_string('isbn', 'block_courses_vicensvives');
        $mform->addElement('text', 'isbn', $string);
        $mform->setType('isbn', PARAM_TEXT);
        $mform->setDefault('isbn', $search['isbn']);

        $buttonarray = [];
        $buttonarray[] = &$mform->createElement('submit', 'search', get_string('search'));
        $buttonarray[] = &$mform->createElement('cancel', 'reset', get_string('reset'));
        $mform->addGroup($buttonarray, 'buttonar', '', [' '], false);
    }
}
