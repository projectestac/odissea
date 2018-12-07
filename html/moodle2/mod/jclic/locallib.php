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
 * Internal library of functions for module jclic
 *
 * All the jclic specific functions, needed to implement the module
 * logic, should go here. Never include this file from your lib.php!
 *
 * @package    mod
 * @subpackage jclic
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/filelib.php");

/**
 * Standard base class for mod_jclic
 *
 * @package   mod_jclic
 * @copyright 2014 Pau Ferrer Ocaña
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class jclic {

    /** @var stdClass the jclic record that contains the global settings for this jclic instance */
    private $instance;

    /** @var stdClass the course this jclic instance belongs to */
    private $course;

    /** @var context the context of the course module for this jclic instance
     *               (or just the course if we are creating a new one)
     */
    private $context;

    /** @var stdClass the course module for this jclic instance */
    private $coursemodule;

    /**
     * Constructor for the base jclic class.
     *
     * @param mixed $coursemodulecontext context|null the course module context
     *                                   (or the course context if the coursemodule has not been
     *                                   created yet).
     * @param mixed $coursemodule the current course module if it was already loaded,
     *                            otherwise this class will load one from the context as required.
     * @param mixed $course the current course  if it was already loaded,
     *                      otherwise this class will load one from the context as required.
     * @param mixed $instance the current instance
     */
    public function __construct($coursemodulecontext, $coursemodule = null, $course = null, $instance = null) {
        global $DB;

        $this->context = $coursemodulecontext;

        if ($coursemodule) {
            $this->coursemodule = $coursemodule;
        } else if ($this->context && $this->context->contextlevel == CONTEXT_MODULE) {
            // Get coursemodule instance ID from $instance instead of $coursemodulecontext (actually filled with course data by 'jclic_display')
            $this->coursemodule = get_coursemodule_from_instance('jclic', $instance ? $instance->id : $this->context->instanceid);
        }

        if ($course) {
            $this->course = $course;
        } else if ($this->coursemodule) {
            $params = array('id' => $this->coursemodule->course);
            $this->course = $DB->get_record('course', $params);
        }

        if ($this->coursemodule) {
            $params = array('id' => $this->coursemodule->instance);
            $this->instance = $DB->get_record('jclic', $params);
        }

        if ($instance && empty($this->instance)) {
            $this->set_instance($instance);
        }
    }

    /**
     * Set the submitted form data.
     *
     * @param stdClass $data The form data (instance)
     */
    public function set_instance(stdClass $data) {
        global $DB;
        $this->instance = $data;
        // Cache some info.
        $this->course = $DB->get_record('course', array('id' => $data->course), '*', MUST_EXIST);
        $this->coursemodule = get_coursemodule_from_instance('jclic', $data->id, 0, false, MUST_EXIST);
        $this->context = context_module::instance($this->coursemodule->id);
    }

    /**
     * Get the settings for the current instance of this jclic
     *
     * @return stdClass The settings
     */
    public function get_instance() {
        global $DB;
        if ($this->instance) {
            return $this->instance;
        }
        if ($this->get_course_module()) {
            $params = array('id' => $this->get_course_module()->instance);
            $this->instance = $DB->get_record('jclic', $params, '*', MUST_EXIST);
        }
        if (!$this->instance) {
            throw new coding_exception('Improper use of the jclic class. ' .
                                       'Cannot load the jclic record.');
        }
        return $this->instance;
    }

        /**
     * Get the current course module.
     *
     * @return mixed stdClass|null The course module
     */
    public function get_course_module() {
        if ($this->coursemodule) {
            return $this->coursemodule;
        }
        if (!$this->context) {
            return null;
        }

        if ($this->context->contextlevel == CONTEXT_MODULE) {
            $this->coursemodule = get_coursemodule_from_id('jclic',
                                                           $this->context->instanceid,
                                                           0,
                                                           false,
                                                           MUST_EXIST);
            return $this->coursemodule;
        }
        return null;
    }

    /**
     * Add this instance to the database.
     *
     * @param stdClass $formdata The data submitted from the form
     * @return mixed false if an error occurs or the int id of the new instance
     */
    public function add_instance(stdClass $formdata) {
        global $DB;

        // Add the database record.
        $update = new stdClass();
        $update->name = $formdata->name;
        $update->timemodified = time();
        $update->timecreated = $update->timemodified;
        $update->course = $formdata->course;
        $update->intro = $formdata->intro;
        $update->introformat = $formdata->introformat;

        if (isset($formdata->filetype) && $formdata->filetype == JCLIC_FILE_TYPE_LOCAL) {
            $update->url = $formdata->jclicfile;
        } else {
            $formdata->filetype = JCLIC_FILE_TYPE_EXTERNAL;
            $update->url = $formdata->url;
        }
        $update->skin = empty($formdata->skin) ? 'default' : $formdata->skin;
        $update->avaluation = $formdata->avaluation;
        $update->grade = $formdata->grade;
        if ($update->grade >= 0 ) {
            $update->maxgrade = $update->grade;
        }

        $update->lang = $formdata->lang;
        $update->exiturl = $formdata->exiturl;
        $update->timeavailable = $formdata->timeavailable;
        $update->timedue = $formdata->timedue;
        if (!empty($formdata->maxattempts)) {
            $update->maxattempts = $formdata->maxattempts;
        }

        // Store the JClic and verify
        $returnid = $DB->insert_record('jclic', $update);
        // We need to use context now, so we need to make sure all needed info is already in db
        $DB->set_field('course_modules', 'instance', $returnid, array('id' => $formdata->coursemodule));

        $instance = $DB->get_record('jclic', array('id' => $returnid), '*', MUST_EXIST);
        $this->set_instance($instance);

        if ($formdata->filetype == JCLIC_FILE_TYPE_LOCAL) {
            $update = new StdClass();
            $update->id = $returnid;
            $update->url = $this->set_mainfile();
            $DB->update_record('jclic', $update);
        }

        // In the case of upgrades the coursemodule has not been set,
        // so we need to wait before calling these two.
        $this->update_file($formdata->filetype);
        $this->update_calendar($formdata->coursemodule);
        $this->update_gradebook(false, $formdata->coursemodule);

        return $returnid;
    }

    /**
     * Update this instance in the database.
     *
     * @param stdClass $formdata - the data submitted from the form
     * @return bool false if an error occurs
     */
    public function update_instance($formdata) {
        global $DB;

        $update = new stdClass();
        $update->id = $formdata->instance;
        $update->name = $formdata->name;
        $update->timemodified = time();
        $update->course = $formdata->course;
        $update->intro = $formdata->intro;
        $update->introformat = $formdata->introformat;
        if (isset($formdata->filetype) && $formdata->filetype == JCLIC_FILE_TYPE_LOCAL) {
            $update->url = $formdata->jclicfile;
        } else {
            $formdata->filetype = JCLIC_FILE_TYPE_EXTERNAL;
            $update->url = $formdata->url;
        }
        $update->skin = empty($formdata->skin) ? 'default' : $formdata->skin;
        $update->width = empty($formdata->width) ? '800' : $formdata->width;
        $update->height = empty($formdata->height) ? '600' : $formdata->height;
        $update->avaluation = $formdata->avaluation;
        $update->grade = $formdata->grade;
        if ($update->grade >= 0 ) {
            $update->maxgrade = $update->grade;
        }

        $update->lang = $formdata->lang;
        $update->exiturl = $formdata->exiturl;
        $update->timeavailable = $formdata->timeavailable;
        $update->timedue = $formdata->timedue;
        if (!empty($formdata->maxattempts)) {
            $update->maxattempts = $formdata->maxattempts;
        }

        // Store the JClic and verify
        $result = $DB->update_record('jclic', $update);
        $instance = $DB->get_record('jclic', array('id' => $update->id), '*', MUST_EXIST);
        $this->set_instance($instance);
        $this->update_file($formdata->filetype, $formdata->jclicfile);
        $this->update_calendar($this->coursemodule->id);
        $this->update_gradebook(false, $this->coursemodule->id);

        return $result;
    }

    function update_file($filetype){
        global $DB;

        // We need to use context now, so we need to make sure all needed info is already in db.
        $cmid = $this->coursemodule->id;
        $DB->set_field('course_modules', 'instance', $this->instance->id, array('id'=>$cmid));
        $context = context_module::instance($cmid);

        $fs = get_file_storage();

        //Erase content files to force regeneration and package to reset old files
        $fs->delete_area_files($context->id, 'mod_jclic', 'content');
        $fs->delete_area_files($context->id, 'mod_jclic', 'package');

        if ($filetype === JCLIC_FILE_TYPE_LOCAL) {
            $this->save_package();
        } else {
            $fs->delete_area_files($context->id, 'mod_jclic', $this->get_filearea());
        }
        // Remove activity type to calculate again it (because file/URL can be different)
        $this->get_instance()->type = -1;
        if (is_numeric($this->get_instance()->url)){
            $this->get_instance()->url = $this->set_mainfile();
        }
        $DB->update_record('jclic', $this->get_instance());

    }
    /**
     * Delete this instance from the database.
     *
     * @return bool false if an error occurs
     */
    public function delete_instance() {
        global $DB;
        $result = true;

        $id = $this->instance->id;

        // Delete files associated with this jclic.
        $fs = get_file_storage();
        if (! $fs->delete_area_files($this->context->id) ) {
            $result = false;
        }

        // Delete any dependent records.
        $rs = $DB->get_records('jclic_sessions', array('jclicid' => $id));
        foreach ($rs as $session) {
            $DB->delete_records('jclic_activities', array('session_id' => $session->session_id));
        }

        $DB->delete_records('jclic_sessions', array('jclicid' => $id));


        // Delete items from the gradebook.
        if (! $this->delete_grades()) {
            $result = false;
        }

        // Delete the instance.
        $DB->delete_records('jclic', array('id' => $id));

        return $result;
    }

    /**
     * Delete all grades from the gradebook for this jclic.
     *
     * @return bool
     */
    protected function delete_grades() {
        global $CFG;
        require_once($CFG->libdir.'/gradelib.php');

        $result = grade_update('mod/jclic',
                               $this->course->id,
                               'mod',
                               'jclic',
                               $this->instance->id,
                               0,
                               null,
                               array('deleted' => 1));
        return $result == GRADE_UPDATE_OK;
    }

    /**
     * Update the gradebook information for this jclic.
     *
     * @param bool $reset If true, will reset all grades in the gradbook for this jclic
     * @param int $coursemoduleid This is required because it might not exist in the database yet
     * @return bool
     */
    public function update_gradebook($reset, $coursemoduleid) {
        global $CFG;

        require_once($CFG->dirroot.'/mod/jclic/lib.php');
        $jclic = clone $this->instance;
        $jclic->cmidnumber = $coursemoduleid;
        $param = null;
        if ($reset) {
            $param = 'reset';
        }

        return jclic_grade_item_update($jclic, $param);
    }

    /**
     * Update the calendar entries for this jclic.
     *
     * @param int $coursemoduleid - Required to pass this in because it might
     *                              not exist in the database yet.
     * @return bool
     */
    public function update_calendar($coursemoduleid) {
        global $DB, $CFG;
        require_once($CFG->dirroot.'/calendar/lib.php');

        // Special case for add_instance as the coursemodule has not been set yet.
        $instance = $this->instance;

        if ($instance->timedue) {
            $event = new stdClass();

            $params = array('modulename' => 'jclic', 'instance' => $instance->id);
            $event->id = $DB->get_field('event', 'id', $params);
            $event->name = $instance->name;
            $event->timestart = $instance->timedue;
            $event->description = format_module_intro('jclic', $instance, $this->coursemodule->id);

            if ($event->id) {
                $calendarevent = calendar_event::load($event->id);
                $calendarevent->update($event);
            } else {
                unset($event->id);
                $event->courseid    = $instance->course;
                $event->groupid     = 0;
                $event->userid      = 0;
                $event->modulename  = 'jclic';
                $event->instance    = $instance->id;
                $event->eventtype   = 'due';
                $event->timeduration = 0;
                calendar_event::create($event);
            }
        } else {
            $DB->delete_records('event', array('modulename' => 'jclic', 'instance' => $instance->id));
        }
    }

    public function get_filetype () {
        if (empty($this->instance->filetype)) {
            if (jclic_is_valid_external_url($this->instance->url)) {
                $this->instance->filetype = JCLIC_FILE_TYPE_EXTERNAL;
            } else{
                $this->instance->filetype = JCLIC_FILE_TYPE_LOCAL;
            }
        }
        return $this->instance->filetype;
    }



    public function set_mainfile() {
        $fs = get_file_storage();
        $fileid = $this->instance->url;

        if ($fileid) {
            file_save_draft_area_files($fileid, $this->context->id, 'mod_jclic', $this->get_filearea(), 0, self::get_filemanager_options());
        }

        $files = $fs->get_area_files($this->context->id, 'mod_jclic', $this->get_filearea(), 0, 'sortorder', false);
        if (count($files) == 1) {
            // only one file attached, set it as main file automatically
            $file = reset($files);
            file_set_sortorder($this->context->id, 'mod_jclic', $this->get_filearea(), 0, $file->get_filepath(), $file->get_filename(), 1);
            return $file->get_filename();
        }
        return null;
    }

    function save_package() {
        $fs = get_file_storage();
        $cmid = $this->coursemodule->id;
        $draftitemid = $this->instance->url;

        $context = context_module::instance($cmid);
        if ($draftitemid) {
            file_save_draft_area_files($draftitemid, $context->id, 'mod_jclic', $this->get_filearea(), 0, jclic::get_filemanager_options());
        }
        if ($this->get_filearea() == 'package') {
            $this->extract_package(true);
        }
    }

    /**
     * Extracts JClic package, sets up all variables.
     * @param bool $force_extract force full update if true
     * @return void
     */
    function extract_package($force_extract = false) {
        global $DB;

        if ($this->get_filearea() == 'package'){
            $fs = get_file_storage();
            $cmid = $this->coursemodule->id;
            $context = $this->context;
            $files = $fs->get_area_files($context->id, 'mod_jclic', 'package', 0, 'sortorder', false);
            if (count($files) == 1) {
                // Only one file attached, set it as main file automatically
                $package = reset($files);
                file_set_sortorder($context->id, 'mod_jclic', 'package', 0, $package->get_filepath(), $package->get_filename(), 1);

                if ($force_extract) {
                    // Now extract files
                    $fs->delete_area_files($context->id, 'mod_jclic', 'content');

                    $packer = get_file_packer('application/zip');
                    $package->extract_to_storage($packer, $context->id, 'mod_jclic', 'content', 0, '/');
                }
            }
        }
        return false;
    }

   public function is_html5 ($fs = false) {
        global $DB;

        if ($this->get_instance()->type == -1) {
            // Activity type is not defined so it's necessary to calculate it
            if (substr(trim($this->get_instance()->url), -10) === '.jclic.zip') {
                $this->get_instance()->type = JCLIC_ACTIVITY_TYPE_JAVA;
            } else {
                $this->get_instance()->type = JCLIC_ACTIVITY_TYPE_HTML5;
            }

            /*
            switch ($this->get_filetype()) {
                case JCLIC_FILE_TYPE_LOCAL:
                    $this->extract_package($this->coursemodule->id);
                    if (!$fs) {
                        $fs = get_file_storage();
                    }
                    $this->instance->type = JCLIC_ACTIVITY_TYPE_JAVA;
                    if ($fs->get_file($this->context->id, 'mod_jclic', 'content', 0, '/', 'project.json')){
                        $this->instance->type = JCLIC_ACTIVITY_TYPE_HTML5;
                    }

                    if ($this->instance->type === JCLIC_ACTIVITY_TYPE_JAVA) {
                        // If is an applet, remove 'content' files (they're not necessary)
                        $fs->delete_area_files($this->context->id, 'mod_jclic', 'content');
                    }
                    break;

                case JCLIC_FILE_TYPE_EXTERNAL:
                    if (substr($this->get_instance()->url, -6) === '.jclic') {
                        // It's not necessary to download: this files are always HTML5
                        $this->instance->type = JCLIC_ACTIVITY_TYPE_HTML5;
                    } else {
                        // It's necessary to download and extract file to guess activity type
                        $file = jclic_download_file_content($this->get_instance(), $this->context);
                        $zip = new ZipArchive();
                        $this->instance->type = JCLIC_ACTIVITY_TYPE_JAVA;
                        if ($zip->open($file) === TRUE ) {
                            if ($zip->locateName('project.json') !== FALSE) {
                                $this->instance->type = JCLIC_ACTIVITY_TYPE_HTML5;
                            }
                        }
                    }
                    break;
            }
            */

            if ($this->instance->type !== -1) {
                // Save value in database (to avoid calculate again)
                $DB->update_record('jclic', $this->get_instance());
            }
        }
        return ($this->instance->type == JCLIC_ACTIVITY_TYPE_HTML5);
    }

    public static function get_filemanager_options() {
        return array('return_types' => 3,  // 3 == FILE_EXTERNAL & FILE_INTERNAL. These two constant names are defined in repository/lib.php
                    'accepted_types' => 'archive',
                    'maxbytes' => 0,
                    'subdirs' => 0,
                    'maxfiles' => 1,
                    );
    }

    /**
     * Get an array with the languages
     *
     * @return array   The array with each language.
     */
    public static function get_languages() {
        return get_string_manager()->get_list_of_translations();
    }

    /**
     * Get an array with the skins
     *
     * @return array   The array with each skin.
     */
    public static function get_skins() {
        return array(
            '@default.xml' => 'default',
            '@blue.xml' => 'blue',
            '@orange.xml' => 'orange',
            '@green.xml' => 'green',
            '@simple.xml' => 'simple',
            '@mini.xml' => 'mini'
            );
    }

    /**
     * Get an array with the file types
     *
     * @return array   The array with each file type
     */
    public static function get_file_types() {
        return  array(
            JCLIC_FILE_TYPE_LOCAL => get_string('filetypelocal', 'jclic'),
            JCLIC_FILE_TYPE_EXTERNAL => get_string('filetypeexternal', 'jclic')
            );
    }

    public function get_context() {
        return $this->context;
    }

    /**
     * For Java type, filearea is content and for HTML5 is package
     * @param  jclic $jclic JClic instance
     * @return string       Filearea name
     */
    function get_filearea () {
        return jclic_get_filearea($this->get_instance()->url);
    }

}


class jclic_package_file_info extends file_info_stored {
    public function get_parent() {
        if ($this->lf->get_filepath() === '/' and $this->lf->get_filename() === '.') {
            return $this->browser->get_file_info($this->context);
        }
        return parent::get_parent();
    }
    public function get_visible_name() {
        if ($this->lf->get_filepath() === '/' and $this->lf->get_filename() === '.') {
            return $this->topvisiblename;
        }
        return parent::get_visible_name();
    }
}


/**
 * Display the jclic intro
 *
 */
function jclic_view_intro($jclic, $cm) {
    global $OUTPUT;
    echo $OUTPUT->box_start('generalbox boxaligncenter', 'intro');
    echo format_module_intro('jclic', $jclic, $cm->id);
    echo $OUTPUT->box_end();
}

/**
 * Display the jclic dates
 *
 * Prints the jclic start and end dates in a box.
 */
function jclic_view_dates($jclic, $cm) {
    global $OUTPUT;

    if (!$jclic->timeavailable && !$jclic->timedue) {
        return;
    }

    $timenow = time();

    echo $OUTPUT->box_start('generalbox boxaligncenter jclicdates', 'dates');
    if ($jclic->timeavailable) {
        echo '<div class="title-time">'.get_string('availabledate', 'jclic').': </div>';
        echo '<div class="data-time">'.userdate($jclic->timeavailable).'</div>';
    }
    if ($jclic->timedue) {
        echo '<div class="title-time">'.get_string('duedate', 'jclic').': </div>';
        echo '<div class="data-time">'.userdate($jclic->timedue).'</div>';
    }
    echo $OUTPUT->box_end();
}

/**
 * Display the jclic applet
 *
 */
function jclic_view_activity($jclic, $context, $ispreview = false) {
    global $OUTPUT, $PAGE, $CFG, $USER;

    $timenow = time();

    $isopen = (empty($jclic->timeavailable) || $jclic->timeavailable < $timenow);

    if (!$isopen) {
        echo $OUTPUT->box(get_string('notopenyet', 'jclic', userdate($jclic->timeavailable)), 'generalbox boxaligncenter jclicdates');
        if (!$ispreview) {
            return;
        }
    }

    $isclosed = (!empty($jclic->timedue) && $jclic->timedue < $timenow);
    if ($isclosed) {
        echo $OUTPUT->box(get_string('expired', 'jclic', userdate($jclic->timedue)), 'generalbox boxaligncenter jclicdates');
        if (!$ispreview) {
            return;
        }
    }

    $sessions = jclic_get_sessions($jclic->id, $USER->id);
    $attempts = count($sessions);
    if (!$ispreview && ($attempts > 0 || $isopen)) {
        echo '<br><a href="#" onclick="window.open(\'action/student_results.php?id='.$context->instanceid.'\',\'JClic\',\'navigation=0,toolbar=0,resizable=1,scrollbars=1,width=900,height=600\');" >'.get_string('show_my_results', 'jclic').'</a>';
    }

    $config = get_config('jclic');

    if ($jclic->maxattempts < 0 || $attempts < $jclic->maxattempts) {
        jclic_display($jclic, $context, $config, $ispreview);
    } else {
        echo $OUTPUT->box(get_string('msg_noattempts', 'jclic'), 'generalbox boxaligncenter');
    }
    jclic_view_dates($jclic, $context, $timenow);
}

function jclic_display ($jclic_instance, $context, $config, $ispreview) {
    $jclic = new jclic($context, null, null, $jclic_instance);
    if ($jclic->is_html5()) {
        jclic_display_html5($jclic, $context, $config, $ispreview);
    } else {
        jclic_display_applet($jclic, $context, $config);
    }
}

function jclic_display_applet ($jclic, $context, $config) {
    global $OUTPUT, $PAGE, $CFG, $USER;

    $jclic_instance = $jclic->get_instance();

    echo '<div id="jclic_applet" style="text-align:center;padding-top:10px;">';
    echo '</div>';
    if (isset($config->pluginjs) && !empty($config->pluginjs)) {
        echo '<script type="text/javascript" src="'.$config->pluginjs.'"></script>';
    } else {
        $PAGE->requires->js('/mod/jclic/jclicplugin.js');
    }
    $PAGE->requires->js('/mod/jclic/jclic.js');
    $params = get_object_vars($jclic_instance);
    $params['jclic_url'] = jclic_get_url($jclic, $context);
    $params['jclic_path'] = jclic_get_server();
    $params['jclic_service'] = jclic_get_path().'/mod/jclic/action/beans.php';
    $params['jclic_user'] = $USER->id;
    $params['jclic_jarbase'] = $config->jarbase;
    $params['jclic_lap'] = $config->lap;
    if ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || $_SERVER['SERVER_PORT'] == 443
            || substr($CFG->wwwroot, 0, strlen('https')) === 'https' ) {
        $params['jclic_protocol'] = 'https';
    } else {
        $params['jclic_protocol'] = 'http';
    }
    $PAGE->requires->js_init_call('M.mod_jclic.initApplet', array($params));
}

function jclic_display_html5 ($jclic, $context, $config, $ispreview = false) {
    global $OUTPUT, $PAGE, $CFG, $USER;

    $jclic_instance = $jclic->get_instance();

    echo '<div id="jclic_html5">';
    echo '</div>';
    if (isset($config->jclicjs) && !empty($config->jclicjs)) {
        echo '<script type="text/javascript" src="'.$config->jclicjs.'"></script>';
    } else {
        echo '<script type="text/javascript" src="https://clic.xtec.cat/dist/jclic.js/jclic.min.js"></script>';
    }
    $PAGE->requires->js('/mod/jclic/jclic.js');
    $params = get_object_vars($jclic_instance);
    $params['jclic_ispreview'] = $ispreview;
    $params['jclic_url'] = jclic_get_url($jclic, $context);
    $params['jclic_path'] = jclic_get_server();
    $params['jclic_service'] = jclic_get_path().'/mod/jclic/action/beans.php';
    $params['jclic_user'] = $USER->id;
    $params['jclic_jarbase'] = $config->jarbase;
    $params['jclic_lap'] = $config->lap;
    if ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || $_SERVER['SERVER_PORT'] == 443
            || substr($CFG->wwwroot, 0, strlen('https')) === 'https' ) {
        $params['jclic_protocol'] = 'https';
    } else {
        $params['jclic_protocol'] = 'http';
    }
    $PAGE->requires->js_init_call('M.mod_jclic.initHTML5', array($params));
}

function jclic_download_file_content($jclic, $context) {
    $tofile = tempnam(sys_get_temp_dir(), 'jclic_');
    $url = jclic_get_url($jclic, $context);

    // Prepare the parameters for the download_file_content() function.
    $headers = null;
    $postdata = null;
    $fullresponse = false;
    $timeout = 300;
    $connecttimeout = 20;
    $skipcertverify = true;
    $tofile = $tofile;
    $calctimeout = false;

    download_file_content($url, $headers, $postdata, $fullresponse, $timeout,
        $connecttimeout, $skipcertverify, $tofile, $calctimeout);

    return $tofile;
}

function jclic_get_url($jclic, $context, $jclicfile=false){
    global $CFG, $DB;

    if ($jclic instanceof jclic) {
        $jclic_instance = $jclic->get_instance();
    } else {
        $jclic_instance = $jclic;
    }

    $url = '';
    if (jclic_is_valid_external_url($jclic_instance->url)) {
        $url = $jclic_instance->url;
    } else {
        $fs = get_file_storage();
        if ($jclic->is_html5()) {
            // Get project.son file (to avoid to unzip it)
            $filename = 'project.json';
            if ($rs = $DB->get_record_sql("SELECT filename FROM {files} WHERE component='mod_jclic' AND filearea='content' AND contextid='".$jclic->get_context()->id."' AND filename='".$filename."'")) {
                $file = $fs->get_file($jclic->get_context()->id, 'mod_jclic', 'content', 0, '/', $rs->filename);
            } else {
                // If project.json doesn't exist, get .jclic file (to avoid to unzip it)
                $filename = substr($jclic_instance->url, 0, sizeof($jclic_instance->url)-11).'.jclic';
                if ($rs = $DB->get_record_sql("SELECT filename FROM {files} WHERE component='mod_jclic' AND filearea='content' AND contextid='".$jclic->get_context()->id."' AND filename='".$filename."'")) {
                    $file = $fs->get_file($jclic->get_context()->id, 'mod_jclic', 'content', 0, '/', $rs->filename);
                }
            }
        } else {
            // Get JClic file
            $files = $fs->get_area_files($context->id, 'mod_jclic', $jclic->get_filearea(), 0, 'sortorder DESC, id ASC', false);
            if (count($files) < 1) {
                //resource_print_filenotfound($resource, $cm, $course);
                die;
            } else {
                $file = reset($files);
                unset($files);
            }
        }
        $url = moodle_url::make_pluginfile_url($file->get_contextid(), $file->get_component(), $file->get_filearea(), $file->get_itemid(), $file->get_filepath(), $file->get_filename());
        $url = (string) $url;
    }

    return $url;
}

/**
* Get moodle server
*
* @return string                myserver.com:port
*/
function jclic_get_server() {
    global $CFG;

    if (!empty($CFG->wwwroot)) {
        $url = parse_url($CFG->wwwroot);
    }

    if (!empty($url['host'])) {
        $hostname = $url['host'];
    } else if (!empty($_SERVER['SERVER_NAME'])) {
        $hostname = $_SERVER['SERVER_NAME'];
    } else if (!empty($_ENV['SERVER_NAME'])) {
        $hostname = $_ENV['SERVER_NAME'];
    } else if (!empty($_SERVER['HTTP_HOST'])) {
        $hostname = $_SERVER['HTTP_HOST'];
    } else if (!empty($_ENV['HTTP_HOST'])) {
        $hostname = $_ENV['HTTP_HOST'];
    } else {
        notify('Warning: could not find the name of this server!');
        return false;
    }

    if (!empty($url['port'])) {
        $hostname .= ':'.$url['port'];
    } else if (!empty($_SERVER['SERVER_PORT'])) {
        if ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {
            $hostname .= ':'.$_SERVER['SERVER_PORT'];
        }
    }

    return $hostname;
}


/**
* Get moodle path
*
* @return string                /path_to_moodle
*/
function jclic_get_path() {
    global $CFG;

        $path = '/';
    if (!empty($CFG->wwwroot)) {
        $url = parse_url($CFG->wwwroot);
                if (array_key_exists('path', $url)){
                        $path = $url['path'];
                }
    }
    return $path;
}

function jclic_set_mainfile($data) {
    $jclic = new jclic();
    $jclic->set_instance($data);
    return $jclic->set_mainfile();
}

function jclic_is_valid_external_url($url){
    return preg_match('/(http:\/\/|https:\/\/|www).*\/*(.scorm.zip|project.json|.jclic(.zip)?)(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?$/i', $url);
}

function jclic_is_valid_file($filename){
    return preg_match('/(.jclic.zip|scorm.zip)$/i', $filename);
}


/**
 * For Java type, filearea is 'content'; for HTML5 is 'package'
 * @param  string $draftitemid file draft id
 * @return string       Filearea name
 */
function jclic_get_filearea ($file = null) {
    // Check if in url there is draftitemid or the filename
    if (is_numeric($file)) {
        // It's draftitemid so it's necessary to get the filename
        $filename = null;
        $files = file_get_drafarea_files($file);
        if (count($files->list) == 1) {
            $file = reset($files->list);
            $filename = $file->filename;
        }
    } else {
        $filename = $file;
    }

    if (substr(trim($filename), -10) === '.jclic.zip') {
        return 'content';
    }

    return 'package';
}


////////////////////////////////////////////////////////////////////////////////
// Activity sessions                                                          //
////////////////////////////////////////////////////////////////////////////////


/**
* Get user sessions
*
* @return array			[0=>session1,1=>session2...] where session1 is an array with keys: id,score,totaltime,starttime,done,solved,attempts. First sessions are newest.
* @param object $jclicid	The jclic to get sessions
* @param object $userid		The user id to get sessions
*/
function jclic_get_sessions($jclicid, $userid) {
    global $CFG, $DB;

    $sessions=array();
    jclic_normalize_date();
    $sql = "SELECT js.*
            FROM {jclic} j, {jclic_sessions} js
            WHERE j.id=js.jclicid AND js.jclicid=? AND js.user_id=?
            ORDER BY js.session_datetime";
    $params = array($jclicid, $userid);

    if($rs = $DB->get_records_sql($sql, $params)){
        $i = 0;
        foreach($rs as $session){
                $activity = jclic_get_activity($session);
                $activity->attempts=$i+1;
                $sessions[$i++]=$activity;
        }
    }
    return $sessions;
}

/**
* Get session activities
*
* @return array			[0=>act0,1=>act1...] where act0 is an array with keys: activity_id,activity_name,num_actions,score,activity_solved,qualification, total_time. First activity are oldest.
* @param string $session_id		The session id to get actitivies
*/
function jclic_get_activities($session_id) {
    global $DB;

    $activities = array();
    if($rs = $DB->get_records('jclic_activities', array('session_id'=>$session_id), 'activity_id')){
        $i=0;
        foreach($rs as $activity){
            $activities[$i++]=$activity;
        }
    }
    return $activities;
}


/**
* Get information about activities of specified session
*
* @return array		Array has these keys id,score,totaltime,starttime,done,solved,attempts
* @param object $session	The session object
*/
function jclic_get_activity($session) {
    global $CFG, $DB;

    $activity = new stdClass();
    $activity->starttime=$session->session_datetime;
    $activity->session_id=$session->session_id;
    if($rs = $DB->get_record_sql("SELECT AVG(ja.qualification) as qualification, SUM(ja.total_time) as totaltime
                             FROM {jclic_activities} ja
                             WHERE ja.session_id='$session->session_id'")){
            $activity->score = round($rs->qualification,0);
            $activity->totaltime = jclic_format_time($rs->totaltime);
    }
    if ($rs = $DB->get_record_sql("SELECT COUNT(*) as done
                        FROM (SELECT DISTINCT ja.activity_name
                              FROM  {jclic_activities} ja
                              WHERE ja.session_id='$session->session_id') t")){
        $activity->done=$rs->done;
    }

    if ($rs = $DB->get_record_sql("SELECT COUNT(*) as solved
                            FROM (SELECT DISTINCT ja.activity_name
                                  FROM {jclic_activities} ja
                                  WHERE ja.session_id='$session->session_id' AND ja.activity_solved=1) t")){
        $activity->solved=$rs->solved;
    }

    return $activity;
}

/**
* Print a table data with all session activities
*
* @param string $session_id The session identifier
*/
function jclic_get_session_activities_html($session_id){
    $table_html='';

    // Import language strings
    $stractivity = get_string("activity", "jclic");
    $strsolved = get_string("solved", "jclic");
    $stractions = get_string("actions", "jclic");
    $strtime = get_string("time", "jclic");
    $strscore  = get_string("score", "jclic");
    $stryes = get_string("yes");
    $strno = get_string("no");


    // Print activities for each session
    $activities = jclic_get_activities($session_id);
    if (sizeof($activities)>0){
        $table = new html_table();
        $table->attributes = array('class'=>'jclic-activities-table');
        $table->head = array($stractivity, $strsolved, $stractions, $strtime, $strscore);
        foreach($activities as $activity){
            $act_percent=$activity->num_actions>0?round(($activity->score/$activity->num_actions)*100,0):0;
            $row = new html_table_row();
            $row->attributes = array('class' => ($activity->activity_solved?'jclic-activity-solved':'jclic-activity-unsolved') ) ;
            $row->cells = array($activity->activity_name, ($activity->activity_solved?$stryes:$strno), $activity->score.'/'.$activity->num_actions.' ('.$act_percent.'%)', jclic_time2str($activity->total_time), $activity->qualification.'%');
            $table->data[] = $row;
        }
        $table_html = html_writer::table($table);
    }
    return $table_html;
}

/**
 * Convert specified time (in milliseconds) to XX' YY'' format
 *
 * @param type $time time (in milliseconds) to format
 */
function jclic_format_time($time){
    return floor($time/60)."' ".round(fmod($time,60))."''";
}

/**
* Get user activity summary
*
* @return object	session object with score, totaltime, activities done and solved and attempts information
*/
function jclic_get_sessions_summary($jclicid, $userid) {
    global $DB;

    jclic_normalize_date();
    $sessions_summary = new stdClass();
    $sessions_summary->attempts = '';
    $sessions_summary->score = '';
    $sessions_summary->totaltime = '';
    $sessions_summary->starttime = '';
    $sessions_summary->done = '';
    $sessions_summary->solved = '';

    if ($rs = $DB->get_record_sql("SELECT COUNT(*) AS attempts, AVG(t.qualification) AS qualification, SUM(t.totaltime) AS totaltime, MAX(t.starttime) AS starttime
                        FROM (SELECT AVG(ja.qualification) AS qualification, SUM(ja.total_time) AS totaltime, MAX(js.session_datetime) AS starttime
                              FROM {jclic} j, {jclic_sessions} js, {jclic_activities} ja
                              WHERE j.id=js.jclicid AND js.user_id='$userid' AND js.jclicid=$jclicid AND ja.session_id=js.session_id
                              GROUP BY js.session_id) t")){
            $sessions_summary->attempts=$rs->attempts;
            $sessions_summary->score=round($rs->qualification,0);
            $sessions_summary->totaltime = jclic_format_time($rs->totaltime);
            $sessions_summary->starttime=$rs->starttime;
    }

    if ($rs = $DB->get_record_sql("SELECT COUNT(*) as done
                        FROM (SELECT DISTINCT ja.activity_name
                              FROM {jclic} j, {jclic_sessions} js, {jclic_activities} ja
                              WHERE j.id=js.jclicid AND js.user_id='$userid' AND js.jclicid=$jclicid AND js.session_id=ja.session_id)  t")){
            $sessions_summary->done=$rs->done;
    }
    if ($rs = $DB->get_record_sql("SELECT COUNT(*) as solved
                        FROM (SELECT DISTINCT ja.activity_name
                              FROM {jclic} j, {jclic_sessions} js, {jclic_activities} ja
                              WHERE j.id=js.jclicid AND js.user_id='$userid' AND js.jclicid=$jclicid AND js.session_id=ja.session_id AND ja.activity_solved=1) t")){
    $sessions_summary->solved=$rs->solved;
    }
    return $sessions_summary;
}

/**
* Format time from seconds to string
*
* @return string Formated string [x' y''], where x are the minutes and y are the seconds.
* @param int $time	The time (in seconds)
*/
function jclic_time2str($time){
    return floor($time/60)."' ".round(fmod($time,60),0)."''";
}

/**
 * Workaround to fix an Oracle's bug when inserting a row with date
 */
function jclic_normalize_date () {
    global $CFG, $DB;
    if ($CFG->dbtype == 'oci'){
        $sql = "ALTER SESSION SET NLS_DATE_FORMAT='YYYY-MM-DD HH24:MI:SS'";
        $DB->execute($sql);
    }
}
