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
 * @package   format_simple
 * @copyright 2012 onwards UPCnet / IThinkUPC
 * @author    Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es
 * @author    Israel Forés Monzó israel.fores@ithinkupc.com
 * @author    Toni Ginard toni.ginard@ithinkupc.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once $CFG->dirroot . '/course/format/lib.php';
require_once $CFG->dirroot . '/course/format/topics/lib.php';

use format_simple\output\renderer as format_simple_renderer;

/**
 * Main class for the Simple Topics course format.
 */
class format_simple extends core_courseformat\base
{
    /**
     * Returns true if this course format uses sections.
     *
     * @return bool
     */
    public function uses_sections(): bool
    {
        return true;
    }

    /**
     * Returns true if this course format uses course index.
     *
     * @return bool
     */
    public function uses_course_index(): bool
    {
        return true;
    }

    /**
     * Returns true if this course format uses indentation.
     *
     * @return bool
     */
    public function uses_indentation(): bool
    {
        return false;
    }

    /**
     * Returns the display name of the given section that the course prefers.
     *
     * @param int|stdClass|section_info $section Section object from database or just field course_sections.section
     * @throws coding_exception
     * @throws moodle_exception
     * @return string Display name that the course format prefers, e.g. "Topic 2"
     */
    public function get_section_name($section): string
    {
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
    public function get_default_section_name($section): string
    {
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
    public function page_title(): string
    {
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
    public function get_view_url($section, $options = []): moodle_url
    {
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
    public function supports_ajax(): stdClass
    {
        $ajaxsupport = new stdClass();
        $ajaxsupport->capable = true;

        return $ajaxsupport;
    }

    /**
     * Returns whether this format supports course components.
     *
     * @return bool
     */
    public function supports_components(): bool
    {
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
    public function extend_course_navigation($navigation, navigation_node $node): void
    {
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
            // The general section is empty. To find the navigation node for it, we need to get its ID.
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
    public function ajax_section_move(): array
    {
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
    public function get_default_blocks(): array
    {
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
    public function course_format_options($foreditform = false)
    {
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

    /**
     * Adds format options elements to the course/section edit form.
     *
     * This function is called from {@link course_edit_form::definition_after_data()}.
     *
     * @param MoodleQuickForm $mform form the elements are added to.
     * @param bool $forsection 'true' if this is a section edit form, 'false' if this is course edit form.
     * @throws coding_exception
     * @throws dml_exception
     * @return array array of references to the added form elements.
     */
    public function create_edit_form_elements(&$mform, $forsection = false): array
    {
        global $COURSE;
        $elements = parent::create_edit_form_elements($mform, $forsection);

        if (!$forsection && (empty($COURSE->id) || $COURSE->id == SITEID)) {
            // Add "numsections" element to the create course form - it will force new course to be prepopulated
            // with empty sections.
            // The "Number of sections" option is no longer available when editing course, instead teachers should
            // delete and add sections when needed.
            $courseconfig = get_config('moodlecourse');
            $max = (int)$courseconfig->maxsections;
            $element = $mform->addElement('select', 'numsections', get_string('numberweeks'), range(0, $max ?: 52));
            $mform->setType('numsections', PARAM_INT);
            if (is_null($mform->getElementValue('numsections'))) {
                $mform->setDefault('numsections', $courseconfig->numsections);
            }
            array_unshift($elements, $element);
        }

        return $elements;
    }

    /**
     * Updates format options for a course.
     *
     * In case of course format was changed to 'topics', we try to copy options
     * 'coursedisplay' and 'hiddensections' from the previous format.
     *
     * @param stdClass|array $data return value from {@link moodleform::get_data()} or array with data
     * @param null $oldcourse if this function is called from {@link update_course()}
     *     this object contains information about the course before update
     * @throws coding_exception
     * @throws dml_exception
     * @return bool whether there were any changes to the options values
     */
    public function update_course_format_options($data, $oldcourse = null): bool
    {
        $data = (array)$data;
        if ($oldcourse !== null) {
            $oldcourse = (array)$oldcourse;
            $options = $this->course_format_options();
            foreach ($options as $key => $unused) {
                if (!array_key_exists($key, $data) && array_key_exists($key, $oldcourse)) {
                    $data[$key] = $oldcourse[$key];
                }
            }
        }
        return $this->update_format_options($data);
    }

    /**
     * Whether this format allows to delete sections.
     *
     * Do not call this function directly, instead use {@link course_can_delete_section()}
     *
     * @param int|stdClass|section_info $section
     * @return bool
     */
    public function can_delete_section($section): bool
    {
        return true;
    }

    /**
     * Indicates whether the course format supports the creation of a news forum.
     *
     * @return bool
     */
    public function supports_news(): bool
    {
        return true;
    }

    /**
     * Returns whether this course format allows the activity to
     * have "triple visibility state" - visible always, hidden on course page but available, hidden.
     *
     * @param stdClass|cm_info $cm course module (may be null if we are displaying a form for adding a module)
     * @param stdClass|section_info $section section where this module is located or will be added to
     * @return bool
     */
    public function allow_stealth_module_visibility($cm, $section): bool
    {
        // Allow the third visibility state inside visible sections or in section 0.
        return !$section->section || $section->visible;
    }

    /**
     * Callback used in WS core_course_edit_section when teacher performs an AJAX action on a section (show/hide).
     *
     * Access to the course is already validated in the WS but the callback has to make sure
     * that particular action is allowed by checking capabilities
     *
     * Course formats should register.
     *
     * @param section_info|stdClass $section
     * @param string $action
     * @param int $sr
     * @throws required_capability_exception
     * @throws moodle_exception
     * @return null|array any data for the Javascript post-processor (must be json-encodeable)
     */
    public function section_action($section, $action, $sr): ?array
    {
        global $PAGE;

        if ($section->section && ($action === 'setmarker' || $action === 'removemarker')) {
            // Format 'topics' allows to set and remove markers in addition to common section actions.
            require_capability('moodle/course:setcurrentsection', context_course::instance($this->courseid));
            course_set_marker($this->courseid, ($action === 'setmarker') ? $section->section : 0);
            return null;
        }

        // For show/hide actions call the parent method and return the new content for .section_availability element.
        $rv = parent::section_action($section, $action, $sr);
        $renderer = $PAGE->get_renderer('format_simple');

        if (!($section instanceof section_info)) {
            $modinfo = course_modinfo::instance($this->courseid);
            $section = $modinfo->get_section_info($section->section);
        }
        $elementclass = $this->get_output_classname('content\\section\\availability');
        $availability = new $elementclass($this, $section);

        $rv['section_availability'] = $renderer->render($availability);
        return $rv;
    }

    /**
     * Return the plugin configs for external functions.
     *
     * @throws dml_exception
     * @return array the list of configuration settings
     * @since Moodle 3.5
     */
    public function get_config_for_external(): array
    {
        // Return everything (nothing to hide).
        $formatoptions = $this->get_format_options();
        $formatoptions['indentation'] = get_config('format_topics', 'indentation');
        return $formatoptions;
    }

}

/**
 * Serve the requested file for the format_simple plugin.
 *
 * @param stdClass $course the course object
 * @param stdClass $cm the course module object
 * @param stdClass $context the context
 * @param string $filearea the name of the file area
 * @param array $args extra arguments (itemid, path)
 * @param bool $forcedownload whether force download
 * @param array $options additional options affecting the file serving
 *
 * @throws coding_exception
 * @throws moodle_exception
 * @throws require_login_exception
 *
 * @return bool false if the file not found, just send the file otherwise and do not return anything
 */
function format_simple_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options): bool
{
    if ($context->contextlevel !== CONTEXT_MODULE) {
        return false;
    }

    if ($filearea !== 'bigicon') {
        return false;
    }

    // Make sure the user is logged in and has access to the module context.
    require_login($course);

    // The args is an array containing [itemid, path]. Remove itemid.
    array_shift($args);

    $fs = get_file_storage();
    $relativepath = implode('/', $args);
    $fullpath = rtrim("/$context->id/format_simple/$filearea/0/$relativepath", '/');
    $file = $fs->get_file_by_hash(sha1($fullpath));

    // Finally, send the file.
    send_stored_file($file, 86400, 0, false, $options);

    return true;
}

/**
 * Returns the current icon file for the course module.
 *
 * @param int $instanceid Id del course module
 * @throws coding_exception
 * @return stored_file|bool|null
 */
function simple_get_current_icon(int $instanceid): stored_file|bool|null
{
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

/**
 * Returns the current icon URL for the course module.
 *
 * @param int $instanceid Id del course module
 * @throws coding_exception
 * @return string|bool
 */
function simple_get_current_icon_url(int $instanceid): bool|string
{
    global $CFG;

    if ($file = simple_get_current_icon($instanceid)) {
        $url = "{$CFG->wwwroot}/pluginfile.php/{$file->get_contextid()}/format_simple/bigicon";
        return $url . $file->get_filepath() . $file->get_itemid() . '/' . $file->get_filename();
    }

    return false;
}

/**
 * Returns the icon URL (Moodle default or custom icon) for the course module.
 *
 * @param cm_info|stdClass $mod Course
 * @param bool|int $instanceid Id del course module
 * @param int $iconsize Size of the icon
 * @throws coding_exception
 * @return moodle_url|bool|string
 */
function simple_get_icon_url(cm_info|stdClass $mod, bool|int $instanceid = false,
                             int $iconsize = format_simple_renderer::DEFAULTICONSIZE): moodle_url|bool|string
{
    if ($instanceid && $icon = simple_get_current_icon_url($instanceid)) {
        return $icon;
    }
    return simple_get_default_icon_url($mod, $iconsize);
}

/**
 * Returns the Moodle default icon URL for the course module.
 *
 * @param stdClass $mod Course
 * @param int $iconsize Size of the icon
 * @throws coding_exception
 * @return moodle_url
 */
function simple_get_default_icon_url($mod, $iconsize = format_simple_renderer::DEFAULTICONSIZE): moodle_url
{
    global $OUTPUT;

    // Support modules setting their own, external, icon image
    if (empty($mod->iconurl) && empty($mod->icon)) {
        return $OUTPUT->image_url('icon', $mod->modname);
    }

    $iconurl = $mod->get_icon_url();

    if ($mod->modname === 'resource') {
        $resicon = explode('-', $iconurl->param('image') ?? '', 2);
        if (isset($resicon[1]) && (int)$resicon[1] === 24) {
            $resicon[1] = $iconsize;
            $iconurl->param('image', implode('-', $resicon));
        }
    }

    return $iconurl;
}

/**
 * Updates the module image according to the form data.
 *
 * @param stdClass $data
 * @throws coding_exception
 * @throws file_exception
 * @return void
 */
function simple_update_module_image(stdClass $data): void
{
    if ($data->simple_image === '0' && (!isset($data->default_image) || $data->default_image === 'current')) {
        // It's not necessary to change current image.
        return;
    }

    // First, try to erase the current image if current is not selected.
    if ($data->simple_image === '0' && isset($data->default_image) && $data->default_image !== 'current') {
        simple_delete_module_image($data->coursemodule);
    }

    // Then copy the image selected to the module space.
    simple_add_module_image($data);
}

/**
 * Adds the module image according to the form data.
 *
 * @param $data
 * @throws coding_exception
 * @throws file_exception
 * @throws stored_file_creation_exception
 * @return void
 */
function simple_add_module_image($data): void
{
    global $CFG, $USER;

    $cmid = $data->coursemodule;

    // $data->simple_image === 0 means default image selected
    // $data->simple_image === 1 means custom image uploaded
    if ($data->simple_image === '0') {
        // Copy file if default is not selected
        if (isset($data->default_image)) {
            // Copy the file from $data->default_image
            $fs = get_file_storage();
            $context = context_module::instance($cmid);

            // Prepare file record object
            $fileinfo = [
                'contextid' => $context->id,
                'component' => 'format_simple',
                'filearea' => 'bigicon',
                'itemid' => 0,
                'filepath' => '/',
                'userid' => $USER->id,
                ];

            if (str_starts_with($data->default_image, 'subject/')) {
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

    // Custom image uploaded.
    $context = context_module::instance($cmid);

    $component = 'format_simple';
    $filearea = 'bigicon';
    $draftitemid = $data->simple_icon;

    $fileoptions = ['subdirs' => false, 'maxfiles' => 1, 'accepted_types' => 'image'];
    if ($draftitemid) {
        file_save_draft_area_files($draftitemid, $context->id, $component, $filearea, 0, $fileoptions);
    }

}

/**
 * Deletes the selected imatge to the course module from the form.
 *
 * @param $cmid
 * @param bool $context
 * @throws coding_exception
 * @return void
 */
function simple_delete_module_image($cmid, bool $context = false): void
{
    if (!$context) {
        $context = context_module::instance($cmid, IGNORE_MISSING);
    }

    if ($context) {
        $fs = get_file_storage();
        $component = 'format_simple';
        $filearea = 'bigicon';

        // Delete current image.
        $files = $fs->get_area_files($context->id, $component, $filearea);
        foreach ($files as $file) {
            $file->delete();
        }
    }
}

/**
 * Adds the form elements to select/upload the course module image. Called from
 * course modedit formto add the image selection elements.
 *
 * @param MoodleQuickForm $mform
 * @param stdClass $mod
 * @throws coding_exception
 * @throws dml_exception
 * @return void
 */
function simple_coursemodule_elements(MoodleQuickForm $mform, stdClass $mod): void
{
    global $CFG, $PAGE, $DB, $USER;

    $courseid = $mod->course;

    $mform->addElement('header', 'simple_iconhdr', get_string('icon', 'format_simple'));

    $instanceid = optional_param('update', false, PARAM_INT);

    $defaulticon = simple_get_icon_url($mod);
    $currenticon = simple_get_current_icon_url($instanceid);

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
        1 => $currentimage . '<br/>',
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
function simple_inplace_editable($itemtype, $itemid, $newvalue) {
    global $DB, $CFG;
    require_once $CFG->dirroot . '/course/lib.php';

    if ($itemtype === 'sectionname' || $itemtype === 'sectionnamenl') {
        $section = $DB->get_record_sql(
            'SELECT s.* FROM {course_sections} s JOIN {course} c ON s.course = c.id WHERE s.id = ? AND c.format = ?',
            [$itemid, 'simple'], MUST_EXIST);
        return course_get_format($section->course)->inplace_editable_update_section_name($section, $itemtype, $newvalue);
    }
}
