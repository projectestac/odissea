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
 * @author Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es
 * @author Jaume Fernàndez Valiente jfern343@xtec.cat
 * @author Marc Espinosa Zamora marc.espinosa.zamora@upcnet.es
 * @author Israel Forés Monzó israel.fores@ithinkupc.com
 * @author Toni Ginard toni.ginard@ithinkupc.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once $CFG->dirroot . '/course/format/lib.php';
require_once $CFG->dirroot . '/course/format/topics/lib.php';

use format_simple\output\renderer as format_simple_renderer;

/**
 * Main class for the Simple Topics course format
 *
 * @package    format_simple
 * @copyright  2012 UPCnet
 * @author Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es, Jaume Fernàndez Valiente jfern343@xtec.cat
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_simple extends core_courseformat\base {

    /**
     * Returns true if this course format uses sections.
     *
     * @return bool
     */
    public function uses_sections(): bool {
        return true;
    }

    public function uses_course_index(): bool {
        return true;
    }

    /**
     * Returns the display name of the given section that the course prefers.
     * Use section name is specified by user. Otherwise, use default ("Topic #").
     *
     * @param int|stdClass $section Section object from database or just field section.section
     * @throws moodle_exception
     * @return string Display name that the course format prefers, e.g. "Topic 2"
     */
    public function get_section_name($section): string {
        $section = $this->get_section($section);

        if ($section->name !== '') {
            return format_string(
                $section->name,
                true,
                ['context' => context_course::instance($this->courseid)]
            );
        }

        return $this->get_default_section_name($section);
    }

    /**
     * Returns the default section name for the topics course format.
     *
     * If the section number is 0, it will use the string with key = section0name from the course format's lang file.
     * If the section number is not 0, it will consistently return the name 'newsection', disregarding the specific section number.
     *
     * @param int|stdClass $section Section object from database or just field course_sections section
     * @throws coding_exception
     * @throws moodle_exception
     * @return string The default value for the section name.
     */
    public function get_default_section_name($section): string {
        $section = $this->get_section($section);

        if ($section->sectionnum === 0) {
            return get_string('section0name', 'format_topics');
        }

        return get_string('newsection', 'format_topics');
    }

    /**
     * Generate the title for this section page.
     *
     * @throws coding_exception
     * @return string the page title
     */
    public function page_title(): string {
        return get_string('sectionoutline');
    }

    /**
     * The URL to use for the specified course (with section).
     *
     * @param int|stdClass $section Section object from database or just field course_sections.section
     *     if omitted the course view page is returned
     * @param array $options options for view URL. At the moment core uses:
     *     'navigation' (bool) if true and section not empty, the function returns section page; otherwise, it returns course page.
     *     'sr' (int) used by course formats to specify to which section to return
     * @throws moodle_exception
     * @return moodle_url
     */
    public function get_view_url($section, $options = []): moodle_url {
        $course = $this->get_course();

        if (array_key_exists('sr', $options) && !is_null($options['sr'])) {
            $sectionno = $options['sr'];
        } else if (is_object($section)) {
            $sectionno = $section->section;
        } else {
            $sectionno = $section;
        }

        if ((!empty($options['navigation']) || array_key_exists('sr', $options)) && $sectionno !== null) {
            // Display section on separate page.
            $sectioninfo = $this->get_section($sectionno);
            return new moodle_url('/course/section.php', ['id' => $sectioninfo->id]);
        }

        return new moodle_url('/course/view.php', ['id' => $course->id]);
    }

    /**
     * Returns the information about the ajax support in the given source format.
     *
     * The returned object's property (boolean)capable indicates that
     * the course format supports Moodle course ajax features.
     *
     * @return stdClass
     */
    public function supports_ajax(): stdClass {
        $ajaxsupport = new stdClass();
        $ajaxsupport->capable = true;

        return $ajaxsupport;
    }

    public function supports_components(): bool {
        return true;
    }

    /**
     * Loads all the course sections into the navigation.
     *
     * @param global_navigation $navigation
     * @param navigation_node $node The course node within the navigation
     * @throws coding_exception
     * @throws moodle_exception
     * @return void
     */
    public function extend_course_navigation($navigation, navigation_node $node): void {
        global $PAGE;

        // If section is specified in course/view.php, make sure it is expanded in navigation.
        if ($navigation->includesectionnum === false) {
            $selectedsection = optional_param('section', null, PARAM_INT);
            if ($selectedsection !== null &&
                (!defined('AJAX_SCRIPT') || AJAX_SCRIPT === false) &&
                $PAGE->url->compare(new moodle_url('/course/view.php'), URL_MATCH_BASE)) {
                $navigation->includesectionnum = $selectedsection;
            }
        }

        // Check if there are callbacks to extend course navigation.
        parent::extend_course_navigation($navigation, $node);

        // We want to remove the general section if it is empty.
        $modinfo = get_fast_modinfo($this->get_course());
        $sections = $modinfo->get_sections();
        if (!isset($sections[0])) {
            // The general section is empty to find the navigation node for it we need to get its ID.
            $section = $modinfo->get_section_info(0);
            $generalsection = $node->get($section->id, navigation_node::TYPE_SECTION);
            if ($generalsection) {
                // We found the node - now remove it.
                $generalsection->remove();
            }
        }
    }

    /**
     * Custom action after section has been moved in AJAX mode.
     *
     * Used in course/rest.php
     *
     * @throws moodle_exception
     * @return array This will be passed in ajax response
     */
    public function ajax_section_move(): array {
        global $PAGE;

        $titles = [];
        $course = $this->get_course();
        $modinfo = get_fast_modinfo($course);
        $renderer = $this->get_renderer($PAGE);

        if ($renderer && ($sections = $modinfo->get_section_info_all())) {
            foreach ($sections as $number => $section) {
                $titles[$number] = $renderer->section_title($section, $course);
            }
        }

        return ['sectiontitles' => $titles, 'action' => 'move'];
    }

    /**
     * Returns the list of blocks to be automatically added for the newly created course.
     *
     * @return array of default blocks, must contain two keys BLOCK_POS_LEFT and BLOCK_POS_RIGHT
     *     each of values is an array of block names (for left and right side columns)
     */
    public function get_default_blocks(): array {
        return [
            BLOCK_POS_LEFT => [],
            BLOCK_POS_RIGHT => [],
        ];
    }

    /**
     * Definitions of the additional options that this course format uses for course.
     *
     * Topics format uses the following options:
     * - coursedisplay
     * - hiddensections
     *
     * @param bool $foreditform
     * @throws dml_exception|coding_exception
     * @return array of options
     */
    public function course_format_options($foreditform = false) {
        static $courseformatoptions = false;

        if ($courseformatoptions === false) {
            $courseconfig = get_config('moodlecourse');
            $courseformatoptions = [
                'hiddensections' => [
                    'default' => $courseconfig->hiddensections,
                    'type' => PARAM_INT,
                ],
                'coursedisplay' => [
                    'default' => $courseconfig->coursedisplay,
                    'type' => PARAM_INT,
                ],
                'showtopiczero' => [
                    'default' => 0,
                    'type' => PARAM_INT,
                ],
                'showblocks' => [
                    'default' => 0,
                    'type' => PARAM_INT,
                ],
                'simpleiconsize' => [
                    'default' => 128,
                    'type' => PARAM_INT,
                ],
            ];
        }

        if ($foreditform && !isset($courseformatoptions['coursedisplay']['label'])) {
            $courseconfig = get_config('moodlecourse');
            $max = $courseconfig->maxsections;

            if (!isset($max) || !is_numeric($max)) {
                $max = 52;
            }

            $sectionmenu = array_map('strval', range(0, $max));

            $courseformatoptionsedit = [
                'numsections' => [
                    'label' => new lang_string('numberweeks'),
                    'element_type' => 'select',
                    'element_attributes' => [$sectionmenu],
                ],
                'hiddensections' => [
                    'label' => new lang_string('hiddensections'),
                    'help' => 'hiddensections',
                    'help_component' => 'moodle',
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            0 => new lang_string('hiddensectionscollapsed'),
                            1 => new lang_string('hiddensectionsinvisible'),
                        ],
                    ],
                ],
                'coursedisplay' => [
                    'label' => new lang_string('coursedisplay'),
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            COURSE_DISPLAY_SINGLEPAGE => new lang_string('coursedisplay_single'),
                            COURSE_DISPLAY_MULTIPAGE => new lang_string('coursedisplay_multi'),
                        ],
                    ],
                    'help' => 'coursedisplay',
                    'help_component' => 'moodle',
                ],
                'showtopiczero' => [
                    'label' => get_string('showtopiczero', 'format_simple'),
                    'element_type' => 'advcheckbox',
                ],
                'showblocks' => [
                    'label' => get_string('showblocks', 'format_simple'),
                    'element_type' => 'advcheckbox',
                    'help' => 'showblocks',
                    'help_component' => 'format_simple',
                ],
                'simpleiconsize' => [
                    'label' => get_string('simpleiconsize', 'format_simple'),
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            24 => '24px',
                            32 => '32px',
                            48 => '48px',
                            64 => '64px',
                            72 => '72px',
                            80 => '80px',
                            96 => '96px',
                            128 => '128px',
                            256 => '256px',
                        ],
                    ],
                ],
            ];

            $courseformatoptions = array_merge_recursive($courseformatoptions, $courseformatoptionsedit);
        }

        return $courseformatoptions;
    }

}

function format_simple_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload): bool {
    if ($context->contextlevel !== CONTEXT_MODULE) {
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

    // Finally, send the file.
    send_stored_file($file, 86400, 0, false);

    return true;
}

function simple_get_current_icon($instanceid): stored_file|bool|null {
    $context = context_module::instance($instanceid, IGNORE_MISSING);

    if ($context) {
        // Get the file.
        $fs = get_file_storage();
        $component = 'format_simple';
        $filearea = 'bigicon';
        $files = $fs->get_area_files($context->id, $component, $filearea, 0, "sortorder, itemid, filepath, filename", false);

        if (!empty($files)) {
            return array_pop($files);
        }
    }

    return false;
}

function simple_get_current_icon_url($instanceid) {
    global $CFG;

    if ($file = simple_get_current_icon($instanceid)) {
        $url = "{$CFG->wwwroot}/pluginfile.php/{$file->get_contextid()}/format_simple/bigicon";
        return $url . $file->get_filepath() . $file->get_itemid() . '/' . $file->get_filename();
    }

    return false;
}

// Retorna la url de la icona
function simple_get_icon_url($mod, $instanceid = false, $iconsize = format_simple_renderer::DEFAULTICONSIZE) {
    if ($instanceid && $icon = simple_get_current_icon_url($instanceid)) {
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

    if ($mod->modname === 'resource') {
        $resicon = explode('-', $iconurl->param('image'), 2);
        if (isset($resicon[1]) && (int)$resicon[1] === 24) {
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
                $frompath = "$CFG->dirroot/course/format/simple/pix/" . $data->default_image;
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

    $mform->addElement('header', 'simple_iconhdr', get_string('icon', 'format_simple'));

    $instanceid = $_GET['update'] ?? false;

    $defaulticon = simple_get_default_icon_url($mod);
    $currenticon = simple_get_current_icon_url($instanceid);

    // Opcions de les icones a triar
    $iconoptions = [];
    $iconsurl = [];
    $iconshash = [];

    $currentimageatts = ['id' => 'def_img', 'class' => 'simple-bigicon icon', 'alt' => ''];

    if ($currenticon) {
        $currentimageatts['src'] = $currenticon;
        $iconoptions['current'] = get_string('use_current_image', 'format_simple');
        $iconsurl['current'] = $currenticon;
    } else {
        $currentimageatts['src'] = $defaulticon;
    }

    $currentimage = html_writer::empty_tag('img', $currentimageatts);

    $iconoptions['default'] = get_string('default', 'format_simple');
    $iconsurl['default'] = (string)$defaulticon;

    // Images for predefined subjects.
    $acticonfolderdata = "$CFG->dirroot/course/format/simple/pix/subject/";
    if (file_exists($acticonfolderdata) && $handle = opendir($acticonfolderdata)) {
        while (false !== ($file = readdir($handle))) {
            $matches = [];
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

    // User and Course uploaded images.
    $contextcourse = context_course::instance($courseid);

    // Get child activities contexts.
    $select = 'contextlevel = :ctxlevel AND path LIKE :path';
    $params = [
        'path' => $contextcourse->path . '/%',
        'ctxlevel' => CONTEXT_MODULE,
    ];
    $actcontexts = $DB->get_fieldset_select('context', 'id', $select, $params);

    $params = [
        'component' => $component,
        'filearea' => $filearea,
        'userid' => $USER->id,
    ];
    if (!empty($actcontexts)) {
        $contexts = implode(',', $actcontexts);
        $select = 'component = :component AND filearea = :filearea AND (contextid IN(' . $contexts . ') OR userid = :userid)';
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
                if ($filename !== $currentwithoutslash && !isset($iconshash[$filehash])) {
                    $key = $file->get_id();
                    $iconoptions[$key] = $filename;

                    $url = "{$CFG->wwwroot}/pluginfile.php/{$file->get_contextid()}/$component/$filearea";
                    $iconsurl[$key] = $url . $file->get_filepath() . $file->get_itemid() . '/' . $filename;

                    $iconshash[$filehash] = true;
                }
            }
        }
    }

    $jsmodule = [
        'name' => 'format_simple',
        'fullpath' => '/course/format/simple/module.js',
        'requires' => ['base'],
    ];
    $PAGE->requires->js_init_call('M.format_simple.init', [$iconsurl], true, $jsmodule);

    $imagearray = [];
    $imagearray[] = &$mform->createElement('radio', 'simple_image', '', get_string('use_existing_image', 'format_simple'), 0);
    $imagearray[] = &$mform->createElement('select', 'default_image', '', $iconoptions);
    $imagearray[] = &$mform->createElement('radio', 'simple_image', '', get_string('upload_image', 'format_simple'), 1);

    $separators = [
        0 => '<br/>',
        1 => $currentimage . '<br/>'
    ];

    $mform->addGroup($imagearray, 'simple_image', '', $separators, false);
    $mform->setDefault('simple_image', 0);
    $mform->disabledIf('default_image', 'simple_image', 'neq', '0');

    $mform->addElement('filepicker', 'simple_icon', get_string('select_file', 'format_simple'), null,
        ['subdirs' => false, 'maxfiles' => 1, 'accepted_types' => 'image']);
    $mform->disabledIf('simple_icon', 'simple_image', 'neq', '1');
}

/**
 * Implements callback inplace_editable() allowing to edit values in-place
 *
 * @param string $itemtype
 * @param int $itemid
 * @param mixed $newvalue
 * @throws dml_exception
 * @return \core\output\inplace_editable
 */
function format_simple_inplace_editable($itemtype, $itemid, $newvalue) {
    global $DB, $CFG;
    require_once $CFG->dirroot . '/course/lib.php';

    if ($itemtype === 'sectionname' || $itemtype === 'sectionnamenl') {
        $section = $DB->get_record_sql(
            'SELECT s.* FROM {course_sections} s JOIN {course} c ON s.course = c.id WHERE s.id = ? AND c.format = ?',
            [$itemid, 'simple'], MUST_EXIST);
        return course_get_format($section->course)->inplace_editable_update_section_name($section, $itemtype, $newvalue);
    }
}