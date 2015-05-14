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
 * Rcontent grade form
 *
 * @package    mod
 * @subpackage rcontent
 * @copyright  2015-onwards Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Pau Ferrer Ocaña <pferre22@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die('Direct access to this script is forbidden.');

/** Include formslib.php */
require_once ($CFG->libdir.'/formslib.php');
/** Include locallib.php */
require_once($CFG->dirroot . '/mod/rcontent/locallib.php');
/** Required for advanced grading */
require_once('HTML/QuickForm/input.php');
require_once($CFG->dirroot .'/rating/lib.php');


class mod_rcontent_grade_form extends moodleform {
    /** @var rcontent $rcontent */
    private $rcontent;

    /**
     * Define the form - called by parent constructor
     */
    function definition() {
        global $CFG;

        $mform = $this->_form;

        list($rcontent, $data, $params) = $this->_customdata;
        // visible elements
        $this->rcontent = $rcontent;

        $attemptelement = $mform->addElement('text', 'attempt', get_string('attempt', 'rcontent'), array('style' => 'border:none'));
        $mform->setType('attempt', PARAM_TEXT);
        $attemptelement->freeze();

        $durationelement = $mform->addElement('text', 'duration', get_string('time', 'rcontent'), array('style' => 'border:none'));
        $mform->setType('duration', PARAM_TEXT);
        $durationelement->freeze();

        $gradingelement = $mform->addElement('text', 'grade', get_string('score', 'rcontent'));
        $mform->setType('grade', PARAM_TEXT);

        $mform->addElement('editor', 'comment_editor', get_string('comments', 'rcontent'), null, null);
        $mform->setType('comment_editor', PARAM_RAW);

        // Hidden parameters
        $mform->addElement('hidden', 'id', $data->id);
        $mform->setType('id', PARAM_INT);
        $mform->addElement('hidden', 'gradeid', $data->id);
        $mform->setType('gradeid', PARAM_INT);
        $mform->addElement('hidden', 'user', $data->user);
        $mform->setType('user', PARAM_INT);
        $mform->addElement('hidden', 'action', 'submitgrade');
        $mform->setType('action', PARAM_ALPHA);

        $this->add_action_buttons(true, get_string('savechanges', 'assign'));
        $mform->closeHeaderBefore('buttonar');

        if ($data) {
            $this->set_data($data);
        }
    }

    /**
     * Perform minimal validation on the grade form
     * @param array $data
     * @param array $files
     */
    function validation($data, $files) {
        global $DB;
        $errors = parent::validation($data, $files);
        // advanced grading
        if (!array_key_exists('grade', $data)) {
            return $errors;
        }

        if (unformat_float($data['grade']) === null && (!empty($data['grade']))) {
            $errors['grade'] = get_string('invalidfloatforgrade', 'assign', $data['grade']);
        } else if (unformat_float($data['grade']) < 0) {
            $errors['grade'] = get_string('gradebelowzero', 'assign');
        }

        return $errors;
    }

}
