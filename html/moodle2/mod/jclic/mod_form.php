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
 * The main jclic configuration form
 *
 * It uses the standard core Moodle formslib. For more info about them, please
 * visit: http://docs.moodle.org/en/Development:lib/formslib.php
 *
 * @package    mod
 * @subpackage jclic
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/course/moodleform_mod.php');
require_once('locallib.php');

/**
 * Module instance settings form
 */
class mod_jclic_mod_form extends moodleform_mod {

    /**
     * Defines forms elements
     */
    function definition() {
        global $CFG;

        $mform    =& $this->_form;

        //-------------------------------------------------------------------------------
        // Adding the "general" fieldset, where all the common settings are showed
        $mform->addElement('header', 'general', get_string('general', 'form'));

        // Adding the standard "name" field
        $mform->addElement('text', 'name', get_string('name'), array('size'=>'64'));
        if (!empty($CFG->formatstringstriptags)) {
            $mform->setType('name', PARAM_TEXT);
        } else {
            $mform->setType('name', PARAM_CLEANHTML);
        }
        $mform->addRule('name', null, 'required', null, 'client');
        $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');

        // Summary
        if (method_exists($this, 'standard_intro_elements')) {
            $this->standard_intro_elements();
        } else {
            $this->add_intro_editor();
        }

        //-------------------------------------------------------------------------------
        // Adding the jclic file
        $mform->addElement('select', 'filetype', get_string('filetype', 'jclic'), jclic::get_file_types());
        $mform->addHelpButton('filetype', 'filetype', 'jclic');
        $mform->addElement('text', 'url', get_string('jclicurl', 'jclic'), array('size' => 60));
        $mform->setType('url', PARAM_RAW);
        $mform->addHelpButton('url', 'jclicurl', 'jclic');
        $mform->disabledIf('url', 'filetype', 'eq', JCLIC_FILE_TYPE_LOCAL);

        $mform->addElement('filemanager', 'jclicfile', get_string('jclicfile', 'jclic'), array('optional'=>false), jclic::get_filemanager_options());
        $mform->addHelpButton('jclicfile', 'urledit', 'jclic');
        $mform->disabledIf('jclicfile', 'filetype', 'noteq', JCLIC_FILE_TYPE_LOCAL);


        // -------------------------------------------------------------------------------
        $mform->addElement('header', 'timing', get_string('timing', 'jclic'));

        $mform->addElement('date_time_selector', 'timeavailable', get_string('availabledate', 'jclic'), array('optional'=>true));
        $mform->addElement('date_time_selector', 'timedue', get_string('duedate', 'jclic'), array('optional'=>true));

        //---GRADING-------------------------------------------------------------------------------
        $this->standard_grading_coursemodule_elements();

        /*$mform->addElement('modgrade', 'maxxgrade', get_string('grade'));
        $mform->setDefault('grade', 100);

        $mform->addElement('date_time_selector', 'timeavailable', get_string('availabledate', 'jclic'), array('optional'=>true));
        $mform->setDefault('timeavailable', time());
        $mform->addElement('date_time_selector', 'timedue', get_string('duedate', 'jclic'), array('optional'=>true));
        $mform->setDefault('timedue', time()+7*24*3600);*/

        $options = array(-1 => get_string('unlimited','jclic'), 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 10 => 10);
        $mform->addElement('select', 'maxattempts', get_string('maxattempts', 'jclic'), $options);
        $mform->setDefault('maxattempts', '-1');

        $options = array('score' => get_string('avaluation_score','jclic'),'solved' => get_string('avaluation_solved','jclic'));
        $mform->addElement('select', 'avaluation', get_string('avaluation', 'jclic'), $options);
        $mform->setDefault('avaluation', '-1');

        //---OPTIONS---------------------------------------------------------------------------
        $mform->addElement('header', 'optionsheader', get_string('appearance'));

        $mform->addElement('text', 'exiturl', get_string('exiturl', 'jclic'), array('size'=>75));
        $mform->addHelpButton('exiturl', 'exiturl', 'jclic');
        $mform->setDefault('exiturl', '');
        $mform->setType('exiturl', PARAM_RAW);

        $options = jclic::get_languages();
        $mform->addElement('select', 'lang', get_string('lang', 'jclic'), $options);
        $mform->setDefault('lang', $CFG->lang);

        $options = jclic::get_skins();
        $mform->addElement('select', 'skin', get_string('skin', 'jclic'), $options);

        $mform->addElement('text', 'width', get_string('width', 'jclic'), array('size'=>'5'));
        $mform->setDefault('width', '800');
        $mform->setType('width', PARAM_TEXT);

        $mform->addElement('text', 'height', get_string('height', 'jclic'), array('size'=>'5'));
        $mform->setDefault('height', '600');
        $mform->setType('height', PARAM_TEXT);


        // add standard elements, common to all modules
        $this->standard_coursemodule_elements();
        //-------------------------------------------------------------------------------
        // add standard buttons, common to all modules
        $this->add_action_buttons();
    }

    function data_preprocessing(&$default_values) {
        if ($this->current->instance) {
            $draftitemid = file_get_submitted_draft_itemid('jclicfile');
            if ($draftitemid == 0 && !empty($this->current->url)) {
                $filearea = jclic_get_filearea($this->current->url);
            } else {
                $filearea = jclic_get_filearea($draftitemid);
            }
            file_prepare_draft_area($draftitemid, $this->context->id, 'mod_jclic', $filearea, 0, jclic::get_filemanager_options());
            $default_values['jclicfile'] = $draftitemid;
        }
    }

    public function validation($data, $files) {
        global $USER;

        $errors = parent::validation($data, $files);

        // Check open and close times are consistent.
        if ($data['timeavailable'] != 0 && $data['timedue'] != 0 &&
            $data['timedue'] < $data['timeavailable']) {
            $errors['timedue'] = get_string('closebeforeopen', 'jclic');
        }

        $type = $data['filetype'];
        if ($type === JCLIC_FILE_TYPE_LOCAL) {
            $usercontext = context_user::instance($USER->id);
            $fs = get_file_storage();
            if (!$files = $fs->get_area_files($usercontext->id, 'user', 'draft', $data['jclicfile'], 'sortorder, id', false)) {
                $errors['jclicfile'] = get_string('required');
            } else{
                $file = reset($files);
                $filename = $file->get_filename();
                if (!jclic_is_valid_file($filename)){
                    $errors['jclicfile'] = get_string('invalidjclicfile', 'jclic');
                }
            }
        } else if ($type === JCLIC_FILE_TYPE_EXTERNAL) {
            $reference = $data['url'];
            if (!jclic_is_valid_external_url($reference)) {
                $errors['url'] = get_string('invalidurl', 'jclic');
            }
        }

        return $errors;
    }

    // Need to translate the "url" field
    function set_data($default_values) {
        $default_values = (array)$default_values;

        if (isset($default_values['url'])) {
            if (jclic_is_valid_external_url($default_values['url'])) {
                $default_values['filetype'] = JCLIC_FILE_TYPE_EXTERNAL;
                $default_values['url'] = $default_values['url'];
            } else{
                $default_values['filetype'] = JCLIC_FILE_TYPE_LOCAL;
                $default_values['jclicfile'] = $default_values['url'];
                unset($default_values['url']);
            }
        }

        $this->data_preprocessing($default_values);
        parent::set_data($default_values);
    }

    function completion_rule_enabled($data) {
        return !empty($data['completionsubmit']);
    }


}
