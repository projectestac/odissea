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
 * Internal library of functions for module qv
 *
 * All the qv specific functions, needed to implement the module
 * logic, should go here. Never include this file from your lib.php!
 *
 * @package    mod
 * @subpackage qv
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/filelib.php");
require_once('lib.php');

class qv{

    public $cm;
    public $context;
    public $packagefile;
    public $filetype;

    // Record
    public $id;
    public $course;
    public $name;
    public $intro;
    public $introformat;
    public $reference;
    public $skin;
    public $assessmentlang;
    public $maxdeliver;
    public $showcorrection;
    public $showinteraction;
    public $ordersections;
    public $orderitems;
    public $target;
    public $grade;
    public $width;
    public $height;
    public $timeavailable;
    public $timedue;

    const STATE_NOT_STARTED = '-1';
    const STATE_STARTED = '0';
    const STATE_DELIVERED = '1';
    const STATE_CORRECTED = '2';
    const STATE_PARTIALLY_DELIVERED = '1-';
    const STATE_PARTIALLY_CORRECTED = '2-';

    public function load($id) {
        global $DB;
        if (!$record = $DB->get_record('qv', array('id' => $id))) {
            return false;
        }

        if (empty($record->reference)) {
            global $CFG;
            require_once("$CFG->dirroot/mod/qv/db/upgradelib.php");
            qv_migrate_activity($record);
        }

        $this->load_record($record);
    }

    public function load_record($record) {

        $this->course = $record->course;
        $this->name = $record->name;
        $this->intro = $record->intro;
        $this->introformat = $record->introformat;
        $this->reference = $record->reference;
        $this->skin = empty($record->skin) ? 'default' : $record->skin;
        $this->assessmentlang = $record->assessmentlang;
        $this->maxdeliver = $record->maxdeliver;
        $this->showcorrection = $record->showcorrection;
        $this->showinteraction = $record->showinteraction;
        $this->ordersections = $record->ordersections;
        $this->orderitems = $record->orderitems;
        $this->target = $record->target;
        $this->grade = $record->grade;
        $this->width = $record->width;
        $this->timeavailable = $record->timeavailable;
        $this->timedue = $record->timedue;

        if ($record->id) {
            $this->id = $record->id;
            $this->cm = get_coursemodule_from_instance('qv', $record->id);
            $this->context = context_module::instance($this->cm->id);

            $fs = get_file_storage();
            $files = $fs->get_area_files($this->context->id, 'mod_qv', 'package', 0, 'sortorder', false);
            if (count($files) == 1) {
                $this->packagefile = reset($files);
            } else {
                $this->filetype = QV_FILE_TYPE_EXTERNAL;
            }
        }
    }

    private function get_index_file($fs = false) {
        global $DB;

        if (!$fs) {
            $fs = get_file_storage();
        }

        if (!$fs->get_file($this->context->id, 'mod_qv', 'content', 0, '/', $this->reference.'.xml')) {
            // Repair reference
            // debugging('Repair reference');
            $this->reference = extract_package($this->cm->id);
            if ($this->reference) {
                $DB->set_field('qv', 'reference', $this->reference, array('id' => $this->id));
            }
        }

        return $fs->get_file($this->context->id, 'mod_qv', 'content', 0, '/html/', 'index.htm');
    }

    public function get_url() {
        global $CFG;

        if ($this->filetype == QV_FILE_TYPE_EXTERNAL) {
            return $this->reference;
        } else if ($indexfile = $this->get_index_file()) {
            $path = '/'.$this->context->id.'/mod_qv/content/0/'.$this->reference.$indexfile->get_filepath().$indexfile->get_filename();
            return file_encode_url($CFG->wwwroot.'/pluginfile.php', $path, false);
        } else {
            print_error('invalidqvfile', 'qv');
        }
        return false;
    }


    /**
     * Compose the full assessment url
     *
     * @return string    full url composed with specified params
     *
     * @param object $assignment object with the assignment information
     * @param object $userid user identifier
     * @param object $fullname full name of the user
     * @param object $isteacher true if is teacher
     */
    public function get_full_url($assignment, $userid, $fullname, $isteacher=false) {
        global $CFG;

        if (!isset($assignment->id)) {
            return false;
        }

        $qvurl = $this->get_url();

        if (!$qvurl) {
            return false;
        }

        $config = get_config('qv');

        $params = array();
        $paramsnotescaped = array();
        $paramsnotescaped['server'] = $CFG->wwwroot.'/mod/qv/action/beans.php';
        $params['assignmentid'] = $assignment->id;
        $params['userid'] = $userid;
        $params['fullname'] = $fullname;
        $params['skin'] = empty($this->skin) ? 'default' : $this->skin;
        $params['lang'] = $this->assessmentlang;
        $params['showinteraction'] = $this->showinteraction;
        $params['showcorrection'] = $this->showcorrection;
        $params['order_sections'] = $this->ordersections;
        $params['order_items'] = $this->orderitems;
        if ($isteacher) {
            $params['userview'] = 'teacher';
        }
        if ($assignment->sectionorder > 0 && $this->ordersections == 1) {
            $params['section_order'] = $assignment->sectionorder;
        }
        if ($assignment->itemorder > 0 && $this->orderitems == 1) {
            $params['item_order'] = $assignment->itemorder;
        }

        if ($this->filetype != QV_HASH_ONLINE) {
            $fs = get_file_storage();
            if (!$fs->get_file($this->context->id, 'mod_qv', 'content', 0, '/html/appl/', 'qv_local.jar')) {
                $paramsnotescaped['appl'] = $config->distpluginappl;
            }
            if (!$fs->get_file($this->context->id, 'mod_qv', 'content', 0, '/html/css/', 'generic.css')) {
                $paramsnotescaped['css'] = $config->distplugincss;
            }
            if (!$fs->get_file($this->context->id, 'mod_qv', 'content', 0, '/html/scripts/', 'qv_local.js')) {
                $paramsnotescaped['js'] = $config->distpluginscripts;
            }
        } else {
            $last = strrpos($qvurl, '/html/');
            if ($last < strlen($qvurl)) {
                $basefile = substr($qvurl, 0, $last + 1);
                if (!qv_exists_url($basefile.'html/appl/qv_local.jar')) {
                    $paramsnotescaped['appl'] = $config->distplugin_appl;
                }
                if (!qv_exists_url($basefile.'html/css/generic.css')) {
                    $paramsnotescaped['css'] = $config->distplugincss;
                }
                if (!qv_exists_url($basefile.'html/scripts/qv_local.js')) {
                    $paramsnotescaped['js'] = $config->distpluginscripts;
                }
            }
        }

        // Hack
        $url = new moodle_url($qvurl, $params);
        $url = $url->out(false);
        foreach ($paramsnotescaped as $key => $val) {
            $url .= '&' . $key . '=' . $val;
        }

        return $url;
    }

    /**
     * Display the qv assessment
     *
     */
    public function view_assessment($user, $ispreview = false) {
        global $OUTPUT, $PAGE;

        $timenow = time();

        $content = "";

        $isopen = (empty($this->timeavailable) || $this->timeavailable < $timenow);
        if (!$isopen) {
            $content .= $OUTPUT->notify(get_string('notopenyet', 'qv', userdate($this->timeavailable)));
            if (!$ispreview) {
                return $content;
            }
        }

        $isclosed = (!empty($this->timedue) && $this->timedue < $timenow);
        if ($isclosed) {
            $content .= $OUTPUT->notify(get_string('expired', 'qv', userdate($this->timedue)));
            if (!$ispreview) {
                return $content;
            }
        }

        $assignment = qv_get_assignment($this->id);
        $url = $this->get_full_url($assignment, $user->id, "$user->firstname%20$user->lastname", $ispreview);

        if ($this->target == 'self') {
            $params = array();
            $params['width'] = empty($this->width) ? '99%' : $this->width;
            $params['height'] = empty($this->height) ? '400px' : $this->height;
            $params['title'] = get_string('modulenameplural', 'qv');
            $params['src'] = $url;
            $params['id'] = 'qv_applet';
            $content .= html_writer::tag('iframe', "", $params);
        } else {
            $params = array();
            $params['toolbar'] = 'no';
            $params['status'] = 'no';
            $params['location'] = 'no';
            $params['menubar'] = 'no';
            $params['copyhistory'] = 'no';
            $params['directories'] = 'no';

            $params['scrollbars'] = 'yes';
            $params['resizable'] = 'yes';
            $params['width'] = $this->width;
            $params['height'] = $this->height;
            $fullscreen = empty($this->width) || $this->width == '100%' || empty($this->height) ? 'true' : 'false';

            // One more hack
            $attributes = array();
            $attributes['href'] = $url;
            $winparam = array();
            foreach ($params as $key => $value) {
                $winparam[] = "$key=$value";
            }
            $onclick = 'return openQV("'.$url.'","'.implode(',', $winparam).'",'.$fullscreen.');';
            $attributes['onclick'] = $onclick;
            $PAGE->requires->js('/mod/qv/qv.js');
            $content .= html_writer::tag('a', get_string('start', 'qv'), $attributes);

            // In moodle it should be like that but this make QV not work
            // $action = new popup_action('click', $url, 'popup', $params);
            // $content .= $OUTPUT->action_link($url, get_string('start', 'qv'), $action);

        }
        $content .= $this->view_dates();

        return $content;
    }

    /**
     * Display the qv intro
     *
     */
    public function view_intro() {
        global $OUTPUT;
        echo $OUTPUT->box_start('generalbox boxaligncenter', 'intro');
        echo format_module_intro('qv', $this, $this->cm->id);
        echo $OUTPUT->box_end();
    }

    /**
     * Display the qv dates
     *
     * Prints the qv start and end dates in a box.
     */
    public function view_dates() {
        global $OUTPUT;

        if (!$this->timeavailable && !$this->timedue) {
            return "";
        }

        $content = $OUTPUT->box_start('generalbox boxaligncenter qvdates', 'dates');
        if ($this->timeavailable) {
            $content .= $OUTPUT->box(get_string('availabledate', 'assignment'), 'title-time');
            $content .= $OUTPUT->box(userdate($this->timeavailable), 'data-time');
        }
        if ($this->timedue) {
            $content .= $OUTPUT->box(get_string('duedate', 'assignment'), 'title-time');
            $content .= $OUTPUT->box(userdate($this->timedue), 'data-time');
        }
        $content .= $OUTPUT->box_end();
        return $content;
    }
}


class qv_package_file_info extends file_info_stored {
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


/*** MOD FORM FUNCTIONS
/**
* Get an array with the skins
*
* @return array   The array with each skin.
*/
function qv_get_skins() {
    $skins = get_config('qv', 'skins');
    return explode(',', $skins);
}

/**
 * Get an array with the file types
 *
 * @return array   The array with each file type
 */
function qv_get_file_types() {
    $filetypes = array(
            QV_FILE_TYPE_LOCAL => get_string('filetypelocal', 'qv'),
            QV_FILE_TYPE_EXTERNAL => get_string('filetypeexternal', 'qv')
    );
    return $filetypes;
}


function qv_get_filemanager_options() {
    $options = array();
    $options['return_types'] = 3;  // 3 == FILE_EXTERNAL & FILE_INTERNAL. These two constant names are defined in repository/lib.php
    $options['accepted_types'] = 'archive';
    $options['maxbytes'] = 0;
    $options['subdirs'] = 0;
    $options['maxfiles'] = 1;
    return $options;
}

function qv_save_package($data) {

    $fs = get_file_storage();
    $cmid = $data->coursemodule;
    $draftitemid = $data->reference;

    $context = context_module::instance($cmid);
    if ($draftitemid) {
        file_save_draft_area_files($draftitemid, $context->id, 'mod_qv', 'package', 0, qv_get_filemanager_options());
    }

    $reference = extract_package($cmid);

    return $reference;
}

/**
 * Extracts QV package, sets up all variables.
 * Called whenever qv changes
 * @param int $cmid
 * @param bool $force_extract force full update if true
 * @return void
 */
function extract_package($cmid) {
    global $DB;

    $fs = get_file_storage();
    $context = context_module::instance($cmid);
    $files = $fs->get_area_files($context->id, 'mod_qv', 'package', 0, 'sortorder', false);
    if (count($files) == 1) {
        // Only one file attached, set it as main file automatically
        $package = reset($files);
        file_set_sortorder($context->id, 'mod_qv', 'package', 0, $package->get_filepath(), $package->get_filename(), 1);

        $packagename = qv_get_package_name($cmid, $fs);
        // Content out of date or updating on demand
        if ($packagename) {
            return $packagename;
        } else {
            // Now extract files
            $fs->delete_area_files($context->id, 'mod_qv', 'content');

            $packer = get_file_packer('application/zip');
            $package->extract_to_storage($packer, $context->id, 'mod_qv', 'content', 0, '/');

            $packagename = qv_get_package_name($cmid, $fs);
            if ($packagename) {
                return $packagename;
            }
        }
    }
    return false;
}

function qv_get_package_name($cmid, $fs = false) {
    if (!$fs) {
        $fs = get_file_storage();
    }
    $context = context_module::instance($cmid);
    $files = $fs->get_area_files($context->id, 'mod_qv', 'content', 0, 'filepath, filename', false);
    foreach ($files as $file) {
        if ($file->get_filepath() == '/' && $file->get_mimetype() == 'application/xml') {
            $filename = $file->get_filename();
            if ($filename != 'imsmanifest.xml') {
                return basename($filename, '.xml');
            }
        }
    }
    return false;
}




function qv_is_valid_external_url($url) {
    return preg_match('/(http:\/\/|https:\/\/|www).*\/*(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?$/i', $url);
}


// Activity sessions

/**
 * Returns an object to represent a user assignment to an assessment.
 * If the ->id field is not set, then the object is written to the database.
 *
 * @return object           The assignment object.
 * @param object $qv        The assessment to get an assignment for.
 */
function qv_get_assignment($qvid) {
    global $USER, $DB;

    if (!$assignment = $DB->get_record('qv_assignments', array('qvid' => $qvid, 'userid' => $USER->id))) {
        srand(time());
        $assignment = new stdClass();
        $assignment->qvid = $qvid;
        $assignment->userid = $USER->id;
        $assignment->idnumber = '';
        $assignment->sectionorder = rand(1, 80);
        $assignment->itemorder = rand(1, 80);

        $assignment->id = $DB->insert_record('qv_assignments', $assignment);
        // TODO: update gradebook functions
        // if (isset($assignment)) qv_update_gradebook(null, $qv);
    }
    return $assignment;
}

/**
 * Get user assignment summary
 *
 * @return object    assignment object with state, score and deliver information
 * @param object $qvid    The assessment identifier.
 * @param object $userid  The userid identifier.
 */
function qv_get_assignment_summary($qvid, $userid) {
    global $CFG, $DB;

    $states = array(
        qv::STATE_NOT_STARTED => 0,
        qv::STATE_STARTED => 0,
        qv::STATE_DELIVERED => 0,
        qv::STATE_CORRECTED => 0,
        'state' => qv::STATE_NOT_STARTED);
    $score = 0;
    $pendingscore = 0;
    $attempts = 0;
    $time = '00:00:00';

    $assignmentsummary = new stdClass();
    if ($qvassignment = $DB->get_record('qv_assignments', array('qvid' => $qvid, 'userid' => $userid))) {
        if ($qvsections = $DB->get_records('qv_sections', array('assignmentid' => $qvassignment->id))) {

            foreach ($qvsections as $qvsection) {
                $sectionsummary = qv_get_section_summary($qvsection);

                $score += $sectionsummary->score;
                $pendingscore += $sectionsummary->pending_score;

                $time = qv_add_time($time, $qvsection->time);

                if ($sectionsummary->attempts > $attempts) {
                    $attempts = $sectionsummary->attempts;
                }
                // States
                $states[$qvsection->state]++;
            }

            $numsections = count($qvsections);
            // State

            if ($states[qv::STATE_CORRECTED] == $numsections) {
                $state = qv::STATE_CORRECTED;
            } else if ($states[qv::STATE_DELIVERED] == $numsections) {
                $state = qv::STATE_DELIVERED;
            } else if ($states[qv::STATE_STARTED] == $numsections) {
                $state = qv::STATE_STARTED;
            } else if ($states[qv::STATE_DELIVERED] > 0) {
                $state = qv::STATE_PARTIALLY_DELIVERED;
            } else if ($states[qv::STATE_STARTED] > 0) {
                $state = qv::STATE_PARTIALLY_CORRECTED;
            } else {
                $state = qv::STATE_NOT_STARTED;
            }

            $states['state'] = $state;
        }

        $assignmentsummary->id = $qvassignment->id;
        $assignmentsummary->sectionorder = $qvassignment->sectionorder;
        $assignmentsummary->itemorder = $qvassignment->itemorder;
    }

    $assignmentsummary->score = $score;
    $assignmentsummary->pending_score = $pendingscore;
    $assignmentsummary->attempts = $attempts;
    $assignmentsummary->states = $states;
    $assignmentsummary->time = $time;

    return $assignmentsummary;
}

/**
 * Get user section assignment summary
 *
 * @return object    section object with state, score and attempts information.
 * @param object $qvsection    The section object to get summary information.
 */
function qv_get_section_summary($qvsection) {
    // Score
    $start = strpos($qvsection->scores, $qvsection->sectionid.'_score=');
    $sectionsummary = new stdClass();
    if ($start >= 0) {
        $start += strlen($qvsection->sectionid.'_score=');
        $length = strpos(substr($qvsection->scores, $start + 1), '#') + 1;
        $sectionsummary->score = substr($qvsection->scores, $start, $length);
    }
    // Pending Score
    $start2 = strpos($qvsection->pending_scores, $qvsection->sectionid.'_score=');
    if ($start2 >= 0) {
        $start2 += strlen($qvsection->sectionid.'_score=');
        $length2 = strpos(substr($qvsection->pending_scores, $start2 + 1), '#') + 1;
        $sectionsummary->pending_score = substr($qvsection->pending_scores, $start2, $length2);
    }

    // Attempts
    $sectionsummary->attempts = $qvsection->attempts;
    return $sectionsummary;
}

/**
 * Check if exists specified url
 *
 * @return boolean           True if the specified URL exists; otherwise false.
 * @param string $url        The url
 */
function qv_exists_url($url) {
    $exists = false;
    if (substr($url, 0, 4) != 'http') {
        $exists = @fopen($url, 'r') ? true : false;
    }
    return $exists;
}

/**
 * Print QV states.
 *
 * @return string                HTML code to print the state of a qv activity.
 * @param array $states          The array with all qv states (and true or false for each one).
 */
function qv_print_states($states) {
    $statesimg = "";
    if (is_array($states)) {
        if ($states['state'] == qv::STATE_NOT_STARTED) {
            $statesimg .= qv_print_state_icon(qv::STATE_NOT_STARTED, false);
        } else {
            if ($states[qv::STATE_STARTED] > 0) {
                $statesimg .= qv_print_state_icon(qv::STATE_STARTED, false);
            }

            if ($states[qv::STATE_DELIVERED] > 0) {
                if ($states['state'] == qv::STATE_DELIVERED && $states[qv::STATE_STARTED] == 0 && $states[qv::STATE_NOT_STARTED] == 0) {
                    $statesimg .= qv_print_state_icon(qv::STATE_DELIVERED, false);
                } else {
                    $statesimg .= qv_print_state_icon(qv::STATE_PARTIALLY_DELIVERED, false);
                }
            }

            if ($states[qv::STATE_CORRECTED] > 0) {
                if ($states['state'] == qv::STATE_CORRECTED && $states[qv::STATE_STARTED] == 0 && $states[qv::STATE_NOT_STARTED] == 0) {
                    $statesimg .= qv_print_state_icon(qv::STATE_CORRECTED, false);
                } else {
                    $statesimg .= qv_print_state_icon(qv::STATE_PARTIALLY_CORRECTED, false);
                }
            }
        }
    }

    if (empty($statesimg)) {
        return qv_print_state_icon(qv::STATE_NOT_STARTED, false);
    }
    return $statesimg;
}


function qv_print_state_icon($state, $text=true) {
    global $OUTPUT;

    switch($state){
        case qv::STATE_NOT_STARTED:
            $title  = get_string('statenotstarted', 'qv');
            $pix = 'qv_state_not_started';
            break;
        case qv::STATE_STARTED:
            $title  = get_string('statestarted', 'qv');
            $pix = 'qv_state_started';
            break;
        case qv::STATE_DELIVERED:
            $title  = get_string('statedelivered', 'qv');
            $pix = 'qv_state_delivered';
            break;
        case qv::STATE_CORRECTED:
            $title  = get_string('statecorrected', 'qv');
            $pix = 'qv_state_corrected';
            break;
        case qv::STATE_PARTIALLY_DELIVERED:
            $title  = get_string('statepartiallydelivered', 'qv');
            $pix = 'qv_state_part_delivered';
            break;
        case qv::STATE_PARTIALLY_CORRECTED:
            $title  = get_string('statepartiallycorrected', 'qv');
            $pix = 'qv_state_part_corrected';
            break;
        default:
            return "";
    }

    if ($text) {
        return  $OUTPUT->pix_icon($pix, '', 'mod_qv').$title;
    } else {
        return $OUTPUT->pix_icon($pix, $title, 'mod_qv');
    }
}

/**
 * Workaround to fix an Oracle's bug when inserting a row with date
 */
function qv_normalize_date () {
    global $CFG, $DB;
    if ($CFG->dbtype == 'oci') {
        $sql = "ALTER SESSION SET NLS_DATE_FORMAT='YYYY-MM-DD HH24:MI:SS'";
        $DB->execute($sql);
    }
}


function qv_add_time($time1, $time2) {
    $h1 = (int)substr($time1, 0, 2);
    $m1 = (int)substr($time1, 3, 5);
    $s1 = (int)substr($time1, 6, 8);
    $h2 = (int)substr($time2, 0, 2);
    $m2 = (int)substr($time2, 3, 5);
    $s2 = (int)substr($time2, 6, 8);

    $s3 = $s1 + $s2;
    $m3 = $m1 + $m2;
    $h3 = $h1 + $h2;

    if ($s3 > 59) {
        $s3 -= 60;
        $m3++;
    }
    if ($m3 > 59) {
        $m3 -= 60;
        $h3++;
    }

    $s4 = "";
    if ($s3 < 10) {
        $s4 = "0".$s3;
    } else {
        $s4 = $s3."";
    }
    $m4 = "";
    if ($m3 < 10) {
            $m4 = "0".$m3;
    } else {
            $m4 = $m3."";
    }
    $h4 = "";
    if ($h3 < 10) {
            $h4 = "0".$h3;
    } else {
            $h4 = $h3."";
    }

    return $h4.":".$m4.":".$s4;
}

function qv_assignment_messages($assignmentid) {
    global $USER, $DB;
    $params = array('assignmentid' => $assignmentid, 'userid' => $USER->id, 'userid2' => $USER->id);
    return $DB->count_records_sql('SELECT COUNT(*)
            FROM {qv_sections} s, {qv_messages} m
                WHERE s.id = m.sid AND s.assignmentid = :assignmentid
                    AND (m.sid NOT IN (SELECT mr.sid FROM {qv_messages_read} mr WHERE mr.userid = :userid)
                    OR m.created>(SELECT MAX(timereaded) FROM {qv_messages_read} mr WHERE mr.userid = :userid2 ))', $params);
}
