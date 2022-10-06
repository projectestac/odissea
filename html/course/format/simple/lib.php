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
 * This file contains main class for the course format Simple Topic
 *
 * @since     2.0
 * @package   format_simple
 * @copyright 2012-2014 UPCnet
 * @author Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es, Jaume Fernàndez Valiente jfern343@xtec.cat, Marc Espinosa Zamora marc.espinosa.zamora@upcnet.es
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot. '/course/format/lib.php');
require_once($CFG->dirroot.'/course/format/simple/renderer.php');
require_once($CFG->dirroot. '/course/format/topics/lib.php');

/**
 * Main class for the Simple Topics course format
 *
 * @package    format_simple
 * @copyright  2012 UPCnet
 * @author Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es, Jaume Fernàndez Valiente jfern343@xtec.cat
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_simple extends format_topics {
    public function course_format_options($foreditform = false) {
        static $courseformatoptions = false;
        if ($courseformatoptions === false) {
            $courseconfig = get_config('moodlecourse');
            $courseformatoptions = array(
                'numsections' => array(
                    'default' => $courseconfig->numsections,
                    'type' => PARAM_INT,
                ),
                'hiddensections' => array(
                    'default' => $courseconfig->hiddensections,
                    'type' => PARAM_INT,
                ),
                'coursedisplay' => array(
                    'default' => $courseconfig->coursedisplay,
                    'type' => PARAM_INT,
                ),
                'showtopiczero' => array(
                    'default' => 0,
                    'type' => PARAM_INT,
                ),
                'showblocks' => array(
                    'default' => 0,
                    'type' => PARAM_INT,
                ),
                'simpleiconsize' => array(
                    'default' => 128,
                    'type' => PARAM_INT,
                )
            );
        }
        if ($foreditform && !isset($courseformatoptions['coursedisplay']['label'])) {
            $courseconfig = get_config('moodlecourse');
            $max = $courseconfig->maxsections;
            if (!isset($max) || !is_numeric($max)) {
                $max = 52;
            }
            $sectionmenu = array();
            for ($i = 0; $i <= $max; $i++) {
                $sectionmenu[$i] = "$i";
            }
            $courseformatoptionsedit = array(
                'numsections' => array(
                    'label' => new lang_string('numberweeks'),
                    'element_type' => 'select',
                    'element_attributes' => array($sectionmenu),
                ),
                'hiddensections' => array(
                    'label' => new lang_string('hiddensections'),
                    'help' => 'hiddensections',
                    'help_component' => 'moodle',
                    'element_type' => 'select',
                    'element_attributes' => array(
                        array(
                            0 => new lang_string('hiddensectionscollapsed'),
                            1 => new lang_string('hiddensectionsinvisible')
                        )
                    ),
                ),
                'coursedisplay' => array(
                    'label' => new lang_string('coursedisplay'),
                    'element_type' => 'select',
                    'element_attributes' => array(
                        array(
                            COURSE_DISPLAY_SINGLEPAGE => new lang_string('coursedisplay_single'),
                            COURSE_DISPLAY_MULTIPAGE => new lang_string('coursedisplay_multi')
                        )
                    ),
                    'help' => 'coursedisplay',
                    'help_component' => 'moodle',
                ),
                'showtopiczero' => array(
                    'label' => get_string('showtopiczero', 'format_simple'),
                    'element_type' => 'advcheckbox',
                ),
                'showblocks' => array(
                    'label' => get_string('showblocks', 'format_simple'),
                    'element_type' => 'advcheckbox',
                    'help' => 'showblocks',
                    'help_component' => 'format_simple',
                ),
                'simpleiconsize' => array(
                    'label' => get_string('simpleiconsize', 'format_simple'),
                    'element_type' => 'select',
                    'element_attributes' => array(
                        array(
                            24 => '24px',
                            32 => '32px',
                            48 => '48px',
                            64 => '64px',
                            72 => '72px',
                            80 => '80px',
                            96 => '96px',
                            128 => '128px',
                            256 => '256px',
                        )
                    ),
                ),
            );
            $courseformatoptions = array_merge_recursive($courseformatoptions, $courseformatoptionsedit);
        }
        return $courseformatoptions;
    }
    public function get_view_url($section, $options = array()) {
        $course = $this->get_course();
        $url = new moodle_url('/course/view.php', array('id' => $course->id));
        $context = context_course::instance($course->id);
        $sr = null;
        if (array_key_exists('sr', $options)) {
            $sr = $options['sr'];
        }
        if (is_object($section)) {
            $sectionno = $section->section;
        } else {
            $sectionno = $section;
        }
        if ($sectionno !== null) {
            if ($sr !== null) {
                if ($sr) {
                    $usercoursedisplay = COURSE_DISPLAY_MULTIPAGE;
                    $sectionno = $sr;
                } else {
                    $usercoursedisplay = COURSE_DISPLAY_SINGLEPAGE;
                }
            } else {
                $usercoursedisplay = $course->coursedisplay;
            }
            if (($sectionno != 0 && $usercoursedisplay == COURSE_DISPLAY_MULTIPAGE) ||
                !has_capability('moodle/course:update', $context)) {
                $url->param('section', $sectionno);
            } else {
                if (!empty($options['navigation'])) {
                    return null;
                }
                $url->set_anchor('section-'.$sectionno);
            }
        }
        return $url;
    }

}

function format_simple_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload) {

    if ($context->contextlevel != CONTEXT_MODULE) {
        return false;
    }

    if ($filearea !== 'bigicon') {
        return false;
    }

    array_shift($args); // ignore revision - designed to prevent caching problems only

    $fs = get_file_storage();
    $relativepath = implode('/', $args);
    $fullpath = rtrim("/$context->id/format_simple/$filearea/0/$relativepath", '/');
    $file = $fs->get_file_by_hash(sha1($fullpath));

    $filter = 0;
    $forcedownload = false;
    // finally send the file
    send_stored_file($file, 86400, $filter, $forcedownload);
}

function simple_get_current_icon($modname, $instanceid) {
    $context = context_module::instance($instanceid, IGNORE_MISSING);
    if ($context) {
        // Get file
        $fs = get_file_storage();
        $component = 'format_simple';
        $filearea = 'bigicon';
        $files = $fs->get_area_files($context->id, $component, $filearea, 0, "sortorder, itemid, filepath, filename", false);
        if (!empty($files)) {
            $file = array_pop($files);
            return $file;
        }
    }
    return false;
}

function simple_get_current_icon_url($modname, $instanceid) {
    global $CFG;
    if ($file = simple_get_current_icon($modname, $instanceid)) {
        $url = "{$CFG->wwwroot}/pluginfile.php/{$file->get_contextid()}/format_simple/bigicon";
        return $url.$file->get_filepath().$file->get_itemid().'/'.$file->get_filename();
    }
    return false;
}

// Retorna la url de la icona
function simple_get_icon_url($mod, $instanceid = false, $iconsize = format_simple_renderer::DEFAULTICONSIZE) {
    if ($instanceid && $icon = simple_get_current_icon_url($mod->modname, $instanceid)) {
        return $icon;
    }
    return simple_get_default_icon_url($mod, $iconsize);
}

function simple_get_default_icon_url($mod, $iconsize = format_simple_renderer::DEFAULTICONSIZE) {
    global $OUTPUT;
    // Support modules setting their own, external, icon image
    if (empty($mod->iconurl) && empty($mod->icon)) {
        return $OUTPUT->image_url('icon', $mod->modname);
    }
    $iconurl = $mod->get_icon_url();
    if ($mod->modname == 'resource') {
        $resicon = explode('-', $iconurl->param('image'), 2);
        if (isset($resicon[1]) && $resicon[1] == 24) {
            $resicon[1] = $iconsize;
            $iconurl->param('image', implode('-', $resicon));
        }

    }
    return $iconurl;
}

// Updates the selected imatge to the course module from the form
function simple_update_module_image($data) {
    if ($data->simple_image == 0 && (!isset($data->default_image) || $data->default_image == 'current')) {
        // It's not necessary to change current image
        return;
    }

    // First, try to erase current image if current is not selected
    if ($data->simple_image == 0 && isset($data->default_image) && $data->default_image != 'current') {
        simple_delete_module_image($data->coursemodule);
    }

    // Then copy the image selected to the module space
    simple_add_module_image($data);
}

// Adds the selected imatge to the course module from the form
function simple_add_module_image($data) {
    global $CFG, $USER;

    $cmid = $data->coursemodule;

    if ($data->simple_image == 0) {
        // Copy file if default is not selected
        if ($data->default_image != 'default') {
            // Copy the file from $data->default_image
            $fs = get_file_storage();
            $context = context_module::instance($cmid);
            $component = 'format_simple';
            $filearea = 'bigicon';
            // Prepare file record object
            $fileinfo = array(
                'contextid' => $context->id, // ID of context
                'component' => $component,     // usually = table name
                'filearea' => $filearea,     // usually = table name
                'itemid' => 0,               // usually = ID of row in table
                'filepath' => '/',           // any path beginning and ending in /
                'userid' => $USER->id); // any filename

            if (strpos($data->default_image, 'subject/') === 0) {
                $fileinfo['filename'] = $data->default_image;
                $frompath = "$CFG->dirroot/course/format/simple/pix/".$data->default_image;
                $fs->create_file_from_pathname($fileinfo, $frompath);
            } else {
                // Copy only in the database!
                $file = $fs->get_file_by_id($data->default_image);
                if ($file) {
                    $fileinfo['filename'] = $file->get_filename();
                    $fs->create_file_from_storedfile($fileinfo, $file->get_id());
                }
            }
        }

        return;
    }

    // Personalized image uploaded
    $fs = get_file_storage();
    $context = context_module::instance($cmid);

    $component = 'format_simple';
    $filearea = 'bigicon';
    $draftitemid = $data->simple_icon;

    $fileoptions = array('subdirs' => false, 'maxfiles' => 1, 'accepted_types' => 'image');
    if ($draftitemid) {
        file_save_draft_area_files($draftitemid, $context->id, $component, $filearea, 0, $fileoptions);
    }
    return;

}

// Deletes the selected imatge to the course module from the form
function simple_delete_module_image($cmid, $context = false) {

    if (!$context) {
        $context = context_module::instance($cmid, IGNORE_MISSING);
    }

    if ($context) {
        $fs = get_file_storage();
        $component = 'format_simple';
        $filearea = 'bigicon';
        // Erase current image
        $files = $fs->get_area_files($context->id, $component, $filearea);
        foreach ($files as $file) {
            $file->delete();
        }
    }
}

function simple_coursemodule_elements(&$mform, $mod) {
    global $CFG, $PAGE, $DB, $USER;

    $courseid = $mod->course;
    $modname = $mod->modname;

    if ($modname == 'label') {
        return;
    }

    $mform->addElement('header', 'simple_iconhdr', get_string('icon', 'format_simple'));

    // TODO: Ajuda
    // $mform->addHelpButton('simple_iconhdr', 'icon', 'format_simple');

    $instanceid = isset($_GET["update"]) ? $_GET["update"] : false;

    $defaulticon = simple_get_default_icon_url($mod);
    $currenticon = simple_get_current_icon_url($modname, $instanceid);

    // Opcions de les icones a triar
    $iconoptions = array();
    $iconsurl = array();
    $iconshash = array();

    $currentimageatts = array('id' => 'def_img', 'class' => 'simple-bigicon icon', 'alt' => '' );
    if ($currenticon) {
        $currentimageatts['src'] = $currenticon;
        $iconoptions['current'] = get_string('use_current_image', 'format_simple');
        $iconsurl['current'] = $currenticon;
        // $iconshash[sha1_file($pathname)] = true;
    } else {
        $currentimageatts['src'] = $defaulticon;
    }
    $currentimage = html_writer::empty_tag('img', $currentimageatts);

    $iconoptions['default'] = get_string('default', 'format_simple');
    $iconsurl['default'] = (string)$defaulticon;
    // $iconshash[sha1_file($pathname)] = true;

    // Imatges per matèries predefinides
    $acticonfolderdata = "$CFG->dirroot/course/format/simple/pix/subject/";
    if (file_exists($acticonfolderdata) && $handle = opendir($acticonfolderdata)) {
        while (false !== ($file = readdir($handle))) {
            $matches = array();
            if (preg_match('/(\w+)\.(png|jpg|gif)/i', $file, $matches)) {
                $key = 'subject/' . $matches[0];
                $iconoptions[$key] = get_string($matches[1], 'format_simple');
                $iconsurl[$key] = "$CFG->wwwroot/course/format/simple/pix/$key";
                $iconshash[sha1_file("$acticonfolderdata/$matches[0]")] = true;
            }
        }
        closedir($handle);
    }

    $component = 'format_simple';
    $filearea = 'bigicon';

    // User and Course uploaded images
    $contextcourse = context_course::instance($courseid);

    // Get child activities contexts:
    $select = "contextlevel = :ctxlevel AND path LIKE :path";
    $params = array('path' => $contextcourse->path.'/%', 'ctxlevel' => CONTEXT_MODULE);
    $actcontexts = $DB->get_fieldset_select('context', 'id', $select, $params);

    $params = array('component' => $component, 'filearea' => $filearea, 'userid' => $USER->id);
    if (!empty($actcontexts)) {
        $contexts = implode(',', $actcontexts);
        $select = 'component = :component AND filearea = :filearea AND (contextid IN('.$contexts.') OR userid = :userid)';
        $filerecords = $DB->get_records_select('files', $select, $params, 'sortorder, itemid, filepath, filename');
    } else {
        $filerecords = $DB->get_records('files', $params, 'sortorder, itemid, filepath, filename');
    }

    if ($filerecords) {
        $fs = get_file_storage();
        $currentwithoutslash = clean_param($currenticon, PARAM_FILE);
        foreach ($filerecords as $file) {
            $file = $fs->get_file_instance($file);

            if (!$file->is_directory()) {
                $filename = $file->get_filename();
                $filehash = $file->get_contenthash();
                if ($filename != $currentwithoutslash && !isset($iconshash[$filehash])) {
                    $key = $file->get_id();
                    $iconoptions[$key] = $filename;

                    $url = "{$CFG->wwwroot}/pluginfile.php/{$file->get_contextid()}/$component/$filearea";
                    $iconsurl[$key] = $url.$file->get_filepath().$file->get_itemid().'/'.$filename;

                    $iconshash[$filehash] = true;
                }
            }
        }
    }

    $jsmodule = array(
        'name'     => 'format_simple',
        'fullpath' => '/course/format/simple/module.js',
        'requires' => array('base'),
    );
    $PAGE->requires->js_init_call('M.format_simple.init', array($iconsurl), true, $jsmodule);

    $imagearray = array();
    $imagearray[] = & $mform->createElement('radio', 'simple_image', '', get_string('use_existing_image', 'format_simple'), 0);
    $imagearray[] = & $mform->createElement('select', 'default_image', '', $iconoptions);
    $imagearray[] = & $mform->createElement('radio', 'simple_image', '', get_string('upload_image', 'format_simple'), 1);

    $separators = array(
        0 => '<br/>',
        1 => $currentimage . '<br/>');

    $mform->addGroup($imagearray, 'simple_image', '', $separators, false);
    $mform->setDefault('simple_image', 0);
    $mform->disabledIf('default_image', 'simple_image', 'neq', '0');

    $mform->addElement('filepicker', 'simple_icon',  get_string('select_file', 'format_simple'), null,
                array('subdirs' => false, 'maxfiles' => 1, 'accepted_types' => 'image'));
    $mform->disabledIf('simple_icon', 'simple_image', 'neq', '1');
}


/**
 * Implements callback inplace_editable() allowing to edit values in-place
 *
 * @param string $itemtype
 * @param int $itemid
 * @param mixed $newvalue
 * @return \core\output\inplace_editable
 */
function format_simple_inplace_editable($itemtype, $itemid, $newvalue) {
    global $DB, $CFG;
    require_once($CFG->dirroot . '/course/lib.php');

    if ($itemtype === 'sectionname' || $itemtype === 'sectionnamenl') {
        $section = $DB->get_record_sql(
            'SELECT s.* FROM {course_sections} s JOIN {course} c ON s.course = c.id WHERE s.id = ? AND c.format = ?',
            array($itemid, 'simple'), MUST_EXIST);
        return course_get_format($section->course)->inplace_editable_update_section_name($section, $itemtype, $newvalue);
    }
}