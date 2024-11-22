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
 * This file contains main class for the course format Tiles
 *
 * @since     Moodle 2.7
 * @package   format_tiles
 * @copyright 2016 David Watson {@link http://evolutioncode.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/course/format/lib.php');

/**
 * Main class for the course format Tiles
 *
 * @since     Moodle 2.7
 * @package   format_tiles
 * @copyright 2016 David Watson {@link http://evolutioncode.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_tiles extends core_courseformat\base {

    /**
     * Creates a new instance of class
     *
     * Please use {@see course_get_format($courseorid)} to get an instance of the format class
     *
     * @param string $format the course format.
     * @param int $courseid the course ID.
     */
    protected function __construct($format, $courseid) {
        if ($courseid === 0) {
            global $COURSE;
            $courseid = $COURSE->id;  // Save lots of global $COURSE as we will never be the site course.
        }
        parent::__construct($format, $courseid);
    }

    /**
     * Returns true if this course format uses sections
     *
     * @return bool
     */
    public function uses_sections() {
        return true;
    }

    /**
     * Returns true if this course format uses activity indentation.
     * @return bool
     */
    public function uses_indentation(): bool {
        return isset($this->course->courseusesubtiles) && !$this->course->courseusesubtiles;
    }

    /**
     * Returns true if this course format uses course index
     *
     * This function may be called without specifying the course id
     * i.e. in course_index_drawer()
     *
     * @return bool
     */
    public function uses_course_index() {
        return get_config('format_tiles', 'usecourseindex');
    }

    /**
     * Returns the display name of the given section that the course prefers.
     *
     * Use section name is specified by user. Otherwise use default ("Topic #")
     *
     * @param int|stdClass $section Section object from database or just field section.section
     * @return string Display name that the course format prefers, e.g. "Topic 2"
     * @throws moodle_exception
     */
    public function get_section_name($section) {
        global $PAGE;
        $section = $this->get_section($section);
        if ((string)$section->name !== '') {
            return format_string($section->name, true, ['context' => context_course::instance($this->courseid)]);
        } else if ($section->section == 0) {
            return $PAGE->user_is_editing() ? get_string('section0name', 'format_tiles') : '';
        } else {
            return get_string('sectionname', 'format_tiles') . ' ' . $section->section;
        }
    }

    /**
     * Returns the default section name for the topics course format.
     *
     * If the section number is 0, it will use the string with key = section0name from the course format's lang file.
     * If the section number is not 0, the base implementation of base::get_default_section_name which uses
     * the string with the key = 'sectionname' from the course format's lang file + the section number will be used.
     * @see \core_courseformat\base::get_default_section_name()
     *
     * @param stdClass $section Section object from database or just field course_sections section
     * @return string The default value for the section name.
     * @throws coding_exception
     */
    public function get_default_section_name($section) {
        if ($section->section == 0) {
            // Return the general section.
            return get_string('section0name', 'format_tiles');
        } else {
            // Use core_courseformat\base::get_default_section_name which will display section name in "Topic n" format.
            return parent::get_default_section_name($section);
        }
    }

    /**
     * Indicates whether the course format supports the creation of a news forum.
     * Required in Moodle 3.2 onwards
     *
     * @return bool
     */
    public function supports_news() {
        return true;
    }

    /**
     * Returns true if this course format is compatible with content components
     * @return bool
     */
    public function supports_components() {
        return true;
    }

    /**
     * The URL to use for the specified course (with section)
     *
     * @param int|stdClass $section Section object from database or just field course_sections.section
     *     if omitted the course view page is returned
     * @param array $options options for view URL. At the moment core uses:
     *     'navigation' (bool) if true and section has no separate page, the function returns null
     *     'sr' (int) used by multipage formats to specify to which section to return
     * @return null|moodle_url
     * @throws moodle_exception
     */
    public function get_view_url($section, $options = []) {
        $course = $this->get_course();
        $url = new moodle_url('/course/view.php', ['id' => $course->id]);

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
                $url->set_anchor('section-' . $sectionno);
                $sectionno = $sr;
            }
            if ($sectionno != 0) {
                $url->param('section', $sectionno);
            } else if ($sr === null) {
                if (!empty($options['navigation'])) {
                    return null;
                }
                $url->set_anchor('section-' . $sectionno);
            }
        }
        return $url;
    }

    /**
     * Returns the information about the ajax support in the given source format
     *
     * The returned object's property (boolean)capable indicates that
     * the course format supports Moodle course ajax features.
     *
     * @return stdClass
     */
    public function supports_ajax() {
        $ajaxsupport = new stdClass();
        $ajaxsupport->capable = true;
        return $ajaxsupport;
    }

    /**
     * Override if you need to perform some extra validation of the format options
     *
     * @param array $data array of ("fieldname"=>value) of submitted data
     * @param array $files array of uploaded files "element_name"=>tmp_file_path
     * @param array $errors errors already discovered in edit form validation
     * @return array of "element_name"=>"error_description" if there are errors,
     *         or an empty array if everything is OK.
     *         Do not repeat errors from $errors param here
     * @throws coding_exception
     * @throws moodle_exception
     */
    public function edit_form_validation($data, $files, $errors) {
        $courseid = $data['id'];
        $reterrors = [];
        if (!$data['enablecompletion'] && $data['courseshowtileprogress']) {
            $reterrors['courseshowtileprogress'] = get_string('courseshowtileprogress_error', 'format_tiles');
        }
        if (($data['displayfilterbar'] == \format_tiles\local\format_option::FILTER_OUTCOMES_ONLY
                || $data['displayfilterbar'] == \format_tiles\local\format_option::FILTER_OUTCOMES_AND_NUMBERS)
            && empty(\format_tiles\local\filters::get_course_outcomes($courseid))) {
            $outcomeslink = html_writer::link(
                new moodle_url('/grade/edit/outcome/course.php', ['id' => $courseid]),
                new lang_string('outcomes', 'format_tiles')
            );
            $reterrors['displayfilterbar'] = get_string('displayfilterbar_error', 'format_tiles') . ' ' . $outcomeslink;
        }
        return $reterrors;
    }

    /**
     * Loads all of the course sections into the navigation
     *
     * @param global_navigation $navigation
     * @param navigation_node $node The course node within the navigation
     * @return void
     * @throws coding_exception
     * @throws moodle_exception
     */
    public function extend_course_navigation($navigation, navigation_node $node) {
        global $PAGE;
        // If section is specified in course/view.php, make sure it is expanded in navigation.
        if ($navigation->includesectionnum === false) {
            $selectedsection = optional_param('section', null, PARAM_INT);
            if ($selectedsection !== null && (!defined('AJAX_SCRIPT') || AJAX_SCRIPT == '0') &&
                $PAGE->url->compare(new moodle_url('/course/view.php'), URL_MATCH_BASE)) {
                $navigation->includesectionnum = $selectedsection;
            }
        }
        // Check if there are callbacks to extend course navigation.
        parent::extend_course_navigation($navigation, $node);

        // We want to remove the general section if it is empty.
        $course = $this->get_course();
        $modinfo = get_fast_modinfo($course);
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

        if ($PAGE->user_is_editing() && has_capability('moodle/site:config', context_system::instance())) {
            $settingsnode = navigation_node::create(
                get_string('resetalltiles', 'format_tiles'),
                new moodle_url('/course/format/tiles/editor/reset.php', ['courseid' => $course->id]),
                navigation_node::TYPE_SETTING,
                null,
                'resetalltiles',
                new pix_icon(
                    'i/delete',
                    get_string('resetalltiles', 'format_tiles')
                )
            );
            if (isset($settingsnode)) {
                $settingsnode->set_force_into_more_menu(true);
                $navigation->add_node($settingsnode);
            }
        }

    }

    /**
     * Custom action after section has been moved in AJAX mode
     *
     * Used in course/rest.php
     *
     * @return array This will be passed in ajax response
     * @throws moodle_exception
     */
    public function ajax_section_move() {
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
     * Returns the list of blocks to be automatically added for the newly created course
     *
     * @return array of default blocks, must contain two keys BLOCK_POS_LEFT and BLOCK_POS_RIGHT
     *     each of values is an array of block names (for left and right side columns)
     */
    public function get_default_blocks() {
        return [BLOCK_POS_LEFT => [], BLOCK_POS_RIGHT => []];
    }

    /**
     * Whether this format allows to delete sections (Moodle 3.1+)
     * If format supports deleting sections it is also recommended to define language string
     * 'deletesection' inside the format.
     * Do not call this function directly, instead use {@see course_can_delete_section()}
     *
     * @param int|stdClass|section_info $section
     * @return bool
     */
    public function can_delete_section($section) {
        return true;
    }

    /**
     * Definitions of the additional options that this course format uses for course
     *
     * @param bool $foreditform
     * @return array of options
     * @throws coding_exception
     * @throws dml_exception
     * @throws moodle_exception
     */
    public function course_format_options($foreditform = false) {
        static $courseformatoptions = false;
        if ($courseformatoptions === false) {
            $courseformatoptions = [
                'hiddensections' => ['default' => 1, 'type' => PARAM_INT],
                'coursedisplay' => ['default' => 1, 'type' => PARAM_INT],
                'defaulttileicon' => ['default' => 'pie-chart', 'type' => PARAM_TEXT],
                'basecolour' => [
                    'default' => get_config('format_tiles', 'tilecolour1'),
                    'type' => PARAM_TEXT,
                ],
                'courseusesubtiles' => ['default' => 0, 'type' => PARAM_INT],
                'usesubtilesseczero' => ['default' => 0, 'type' => PARAM_INT],
                'courseshowtileprogress' => ['default' => 0, 'type' => PARAM_INT],
                'displayfilterbar' => ['default' => 0, 'type' => PARAM_INT],
                'courseusebarforheadings' => ['default' => 1, 'type' => PARAM_INT],
            ];
            if ((get_config('format_tiles', 'followthemecolour'))) {
                unset($courseformatoptions['basecolour']);
            }
            if (!get_config('format_tiles', 'allowsubtilesview')) {
                unset($courseformatoptions['courseusesubtiles']);
                unset($courseformatoptions['usesubtilesseczero']);
            }
        }

        if ($foreditform && !isset($courseformatoptions['coursedisplay']['label'])) {
            $tilespalette = \format_tiles\local\util::get_tiles_palette();
            $tileicons = (new \format_tiles\local\icon_set)->available_tile_icons($this->get_courseid());

            $courseformatoptionsedit = [
                'hiddensections' => [
                    'label' => new lang_string('hiddensections'),
                    'element_type' => 'hidden',
                    'element_attributes' => [[1 => new lang_string('hiddensectionsinvisible')]],
                ],
                'coursedisplay' => [
                    'label' => new lang_string('coursedisplay'),
                    'element_type' => 'hidden',
                    'element_attributes' => [[COURSE_DISPLAY_MULTIPAGE => new lang_string('coursedisplay_multi')]],
                ],
            ];
            $label = get_string('defaulttileicon', 'format_tiles');
            $courseformatoptionsedit['defaulttileicon'] = [
                'label' => $label,
                'element_type' => 'select',
                'element_attributes' => [$tileicons],
                'help' => 'defaulttileicon',
                'help_component' => 'format_tiles',
            ];
            if (!(get_config('format_tiles', 'followthemecolour'))) {
                $courseformatoptionsedit['basecolour'] = [
                    'label' => new lang_string('basecolour', 'format_tiles'),
                    'element_type' => 'select',
                    'element_attributes' => [$tilespalette],
                    'help' => 'basecolour',
                    'help_component' => 'format_tiles',
                ];
            }
            $attributes = [
                \format_tiles\local\format_option::FILTER_NONE => new lang_string('hide', 'format_tiles'),
                \format_tiles\local\format_option::FILTER_NUMBERS_ONLY => new lang_string('filternumbers', 'format_tiles'),
            ];
            $outcomeslink = '(' . new lang_string('outcomesunavailable', 'format_tiles') . ')';
            global $CFG;
            if (!empty($CFG->enableoutcomes)) {
                $outcomeslink = html_writer::link(
                    new moodle_url('/grade/edit/outcome/course.php', ['id' => $this->get_courseid()]),
                    '(' . new lang_string('outcomes', 'format_tiles') . ')'
                );
                $attributes[\format_tiles\local\format_option::FILTER_OUTCOMES_ONLY]
                    = new lang_string('filteroutcomes', 'format_tiles');
                $attributes[\format_tiles\local\format_option::FILTER_OUTCOMES_AND_NUMBERS]
                    = new lang_string('filterboth', 'format_tiles');
            }
            $courseformatoptionsedit['displayfilterbar'] = [
                'label' => new lang_string('displayfilterbar', 'format_tiles') . ' ' . $outcomeslink,
                'element_type' => 'select',
                'element_attributes' => [$attributes],
                'help' => 'displayfilterbar',
                'help_component' => 'format_tiles',
            ];
            $courseformatoptionsedit['courseshowtileprogress'] = [
                'label' => new lang_string('courseshowtileprogress', 'format_tiles'),
                'element_type' => 'select',
                'element_attributes' => [
                    [
                        0 => new lang_string('hide', 'format_tiles'),
                        1 => new lang_string('asfraction', 'format_tiles'),
                        2 => new lang_string('aspercentagedial', 'format_tiles'),
                    ],
                ],
                'help' => 'courseshowtileprogress',
                'help_component' => 'format_tiles',
            ];

            $allowsubtilesview = get_config('format_tiles', 'allowsubtilesview');
            if ($allowsubtilesview) {
                $courseformatoptionsedit['courseusesubtiles'] = [
                    'label' => new lang_string('courseusesubtiles', 'format_tiles'),
                    'element_type' => 'advcheckbox',
                    'element_attributes' => [get_string('yes')],
                    'help' => 'courseusesubtiles',
                    'help_component' => 'format_tiles',
                ];
            }
            $courseformatoptionsedit['courseusebarforheadings'] = [
                'label' => new lang_string('courseusebarforheadings', 'format_tiles'),
                'element_type' => 'advcheckbox',
                'element_attributes' => [get_string('yes')],
                'help' => 'courseusebarforheadings',
                'help_component' => 'format_tiles',
            ];
            if ($allowsubtilesview) {
                $courseformatoptionsedit['usesubtilesseczero'] = [
                    'label' => new lang_string('usesubtilesseczero', 'format_tiles'),
                    'element_type' => 'advcheckbox',
                    'element_attributes' => [get_string('notrecommended', 'format_tiles')],
                    'help' => 'usesubtilesseczero',
                    'help_component' => 'format_tiles',
                ];
            }

            $courseformatoptions = array_merge_recursive($courseformatoptions, $courseformatoptionsedit);
        }
        return $courseformatoptions;
    }

    /**
     * Definitions of the additional options that this course format uses for section
     *
     * See course_format::course_format_options() for return array definition.
     *
     * Additionally section format options may have property 'cache' set to true
     * if this option needs to be cached in get_fast_modinfo(). The 'cache' property
     * is recommended to be set only for fields used in course_format::get_section_name(),
     * course_format::extend_course_navigation() and course_format::get_view_url()
     *
     * For better performance cached options are recommended to have 'cachedefault' property
     * Unlike 'default', 'cachedefault' should be static and not access get_config().
     *
     * Regardless of value of 'cache' all options are accessed in the code as
     * $sectioninfo->OPTIONNAME
     * where $sectioninfo is instance of section_info, returned by
     * get_fast_modinfo($course)->get_section_info($sectionnum)
     * or get_fast_modinfo($course)->get_section_info_all()
     *
     * All format options for particular section are returned by calling:
     * $this->get_format_options($section);
     *
     * @param bool $foreditform
     * @return array
     */
    public function section_format_options($foreditform = false) {
        $course = $this->get_course();
        $sectionformatoptions = [];
        $usingoutcomesfilter = in_array(
            $course->displayfilterbar,
            [
                \format_tiles\local\format_option::FILTER_OUTCOMES_ONLY,
                \format_tiles\local\format_option::FILTER_OUTCOMES_AND_NUMBERS,
            ]
        );
        if ($usingoutcomesfilter) {
            $sectionformatoptions['tileoutcomeid'] = [
                'default' => 0,
                'type' => PARAM_INT,
            ];
        }
        if ($foreditform) {
            // Not ideal - we put an ignored option on section edit form, to ensure that create_edit_form_elements() is called.
            $sectionformatoptionsedit = [
                'formattilesignoredfield' => ['label' => '', 'element_type' => 'hidden', 'type' => PARAM_INT, 'default' => 0],
            ];

            if ($usingoutcomesfilter) {
                $outcomeslink = html_writer::link(
                    new moodle_url('/grade/edit/outcome/course.php', ['id' => $course->id]),
                    '(' . new lang_string('outcomes', 'format_tiles') . ')'
                );
                $label = get_string('tileoutcome', 'format_tiles') . ' ' . $outcomeslink;
                $outcomes = \format_tiles\local\filters::get_course_outcomes($course->id);
                if (!empty($outcomes)) {
                    $outcomes[0] = get_string('none', 'format_tiles');
                }
                $sectionformatoptionsedit['tileoutcomeid'] = [
                    'label' => $label,
                    'element_type' => 'select',
                    'element_attributes' => [$outcomes],
                    'help' => 'tileoutcome',
                ];
            }
            $sectionformatoptions = array_merge_recursive($sectionformatoptions, $sectionformatoptionsedit);
        }
        return $sectionformatoptions;
    }

    /**
     * Adds format options elements to the course/section edit form.
     *
     * This function is called from {@see course_edit_form::definition_after_data()}.
     *
     * @param MoodleQuickForm $mform form the elements are added to.
     * @param bool $forsection 'true' if this is a section edit form, 'false' if this is course edit form.
     * @return array array of references to the added form elements.
     * @throws HTML_QuickForm_Error
     * @throws coding_exception
     * @throws dml_exception
     */
    public function create_edit_form_elements(&$mform, $forsection = false) {
        global $COURSE, $PAGE;
        $elements = parent::create_edit_form_elements($mform, $forsection);

        // Call the JS edit_form_helper.js, which in turn will call edit_icon_picker.js.
        if (!$forsection) {
            $jsparams = [
                'pageType' => $PAGE->pagetype,
                'courseDefaultIcon' => $this->get_format_options()['defaulttileicon'],
                'courseId' => $COURSE->id,
                get_config('format_tiles', 'allowphototiles'),
                get_config('format_tiles', 'documentationurl'),
            ];
            $PAGE->requires->js_call_amd('format_tiles/edit_form_helper', 'init', $jsparams);
        } else {
            // Add a tip to the edit section form for anyone who does not know how to edit tile icon/photos.
            $mform->addElement('html',
                html_writer::div(
                    html_writer::div(get_string('setbackgroundphoto', 'format_tiles'), 'col-md-3 col-form-label')
                    . html_writer::div(get_string('tileselecttip', 'format_tiles'), 'col-md-9'),
                    'row mb-3'
                )
            );
        }

        if (!$forsection && (empty($COURSE->id) || $COURSE->id == SITEID)) {
            // Add "numsections" to create course form - will force the course pre-populated with empty sections.
            // The "Number of sections" option is no longer available when editing course.
            // Instead teachers should delete and add sections when needed.

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
     * Updates format options for a course
     *
     * If course format was changed to 'tiles', we try to copy options
     * from the previous format.  We do not copy 'coursedisplay',
     * and 'hiddensections' as a defaut value of one makes sense for these for tiles format,
     * regardless of what they were.
     *
     * @param stdClass|array $data return value from {@see moodleform::get_data()} or array with data
     * @param stdClass $oldcourse if this function is called from {@see update_course()}
     *     this object contains information about the course before update
     * @return bool whether there were any changes to the options values
     * @throws coding_exception
     * @throws dml_exception
     * @throws moodle_exception
     */
    public function update_course_format_options($data, $oldcourse = null) {
        global $DB, $USER;
        $data = (array)$data;
        if ($oldcourse !== null) {
            $oldcourse = (array)$oldcourse;
            $options = $this->course_format_options();
            foreach ($options as $key => $unused) {
                if (!array_key_exists($key, $data)) {
                    if (array_key_exists($key, $oldcourse)) {
                        $data[$key] = $oldcourse[$key];
                    }
                }
            }
        }

        if (isset($data['id']) && $data['id']) {
            $courseid = $data['id'];
            $coursecontext = context_course::instance($courseid);

            if (has_capability('moodle/course:update', $coursecontext)) {
                // If we are changing from Grid format, we iterate through each of the grid images and set it up for this format.
                if ($oldcourse !== null && $oldcourse['format'] == 'grid') {
                    $gridtable = 'format_grid_image';
                    $dbman = $DB->get_manager();
                    if ($dbman->table_exists($gridtable)) {
                        $gridformaticons = $DB->get_records($gridtable, ['courseid' => $courseid], 'sectionid');
                        $coursecontext = context_course::instance($courseid);
                        $fs = get_file_storage();
                        foreach ($gridformaticons as $gridformaticon) {
                            if (!$gridformaticon->image) {
                                continue;
                            }
                            $tilephoto = new \format_tiles\local\tile_photo($coursecontext, $gridformaticon->sectionid);
                            $gridfile = $fs->get_file(
                                $coursecontext->id,
                                'format_grid',
                                'sectionimage',
                                $gridformaticon->sectionid,
                                '/',
                                $gridformaticon->image
                            );
                            $existingtilephoto = $tilephoto->get_file();
                            if ($gridfile && !$existingtilephoto) {
                                // We copy the grid image file into Tiles format, so it is included in backups etc.
                                $fs = get_file_storage();
                                $newfilerecord = \format_tiles\local\tile_photo::file_api_params();
                                $newfilerecord['contextid'] = $coursecontext->id;
                                $newfilerecord['itemid'] = $gridformaticon->sectionid;
                                $newfilerecord['userid'] = $USER->id;
                                $newfilerecord['filename'] = $gridfile->get_filename();
                                $newfile = $fs->create_file_from_storedfile($newfilerecord, $gridfile);
                                if ($newfile) {
                                    $tilephoto->set_file($newfile);
                                    // We *could* delete grid format files here, but we don't as they don't belong to us.
                                    // If we don't, they will be included in export course archives.
                                }
                            } else if (!$gridfile) {
                                debugging("Grid format image not found $gridformaticon->image", DEBUG_DEVELOPER);
                            }
                        }
                    }
                }

                // While we are changing the format options, set section zero to visible if it is hidden.
                // Should never be hidden but rarely it happens, for reasons which are not clear esp with onetopic format.
                // See https://moodle.org/mod/forum/discuss.php?d=356850 and MDL-37256).

                if ($section = $DB->get_record("course_sections", ['course' => $courseid, 'section' => 0])) {
                    if (!$section->visible) {
                        set_section_visible($section->course, 0, 1);
                    }
                }
            }
        }

        if (isset($data['courseusesubtiles']) && $data['courseusesubtiles'] == 0) {
            // We are deactivating sub tiles at course level so do it at sec zero level too.
            $data['usesubtilesseczero'] = 0;
        }
        return $this->update_format_options($data);
    }

    /**
     * Updates format options for a section
     * Includes a check to strip out default values for outcome id
     * as it would be wasteful to store large volumes of these on a per section basis
     *
     * Section id is expected in $data->id (or $data['id'])
     * If $data does not contain property with the option name, the option will not be updated
     *
     * @param stdClass|array $data return value from {@see moodleform::get_data()} or array with data
     * @return bool whether there were any changes to the options values
     * @throws dml_exception
     */
    public function update_section_format_options($data) {
        global $DB;
        $data = (array)$data;
        $oldvalues = [
            'outcomethistile' => $DB->get_record(
                'course_format_options',
                ['courseid' => $this->courseid, 'format' => 'tiles', 'sectionid' => $data['id'], 'name' => 'tileoutcomeid']
            ),
        ];

        // If the edit is taking place from format_tiles_inplace_editable(),
        // the data array may not contain the tile icon and outcome id at all.
        // So add these items in if missing.
        if (!isset($data['tileoutcomeid']) && $oldvalues['outcomethistile']) {
            $data['tileoutcomeid'] = $oldvalues['outcomethistile'];
        }

        // Unset the new values if null, before we send to update.
        // This is so that we don't get a false positive as to whether it has changed or not.
        if (isset($data['tileoutcomeid']) && $data['tileoutcomeid'] == '0') {
            unset($data['tileoutcomeid']);
        }

        // Now send the update.
        $result = $this->update_format_options($data, $data['id']);

        // Now remove any default values such as '' or '0' which the update stored in the database as they are redundant.
        $keystoremove = ['tileoutcomeid'];
        foreach ($keystoremove as $key) {
            if (!isset($data[$key])) {
                $DB->delete_records(
                    'course_format_options',
                    ['courseid' => $this->courseid, 'format' => 'tiles', 'sectionid' => $data['id'], 'name' => $key]
                );
                if (isset($oldvalues[$key]) && $oldvalues[$key]) {
                    // Used to have a value so return true to indicate it changed.
                    $result = true;
                }
            }
        }
        return $result;
    }
    /**
     * Returns the format options stored for this course or course section
     *
     * When overriding please note that this function is called from rebuild_course_cache()
     * and section_info object, therefore using of get_fast_modinfo() and/or any function that
     * accesses it may lead to recursion.
     *
     * @param null|int|stdClass|section_info $section if null the course format options will be returned
     *     otherwise options for specified section will be returned. This can be either
     *     section object or relative section number (field course_sections.section)
     * @return array
     */
    public function get_format_options($section = null) {
        $options = parent::get_format_options($section);
        if ($section === null) {
            $options['coursedisplay'] = COURSE_DISPLAY_MULTIPAGE;
        }
        return $options;
    }

    /**
     * Prepares the templateable object to display section name
     *
     * @param \section_info|\stdClass $section
     * @param bool $linkifneeded
     * @param bool $editable
     * @param null|lang_string|string $edithint
     * @param null|lang_string|string $editlabel
     * @return \core\output\inplace_editable
     * @throws coding_exception
     */
    public function inplace_editable_render_section_name($section, $linkifneeded = false,
                                                         $editable = null, $edithint = null, $editlabel = null) {
        if (empty($edithint)) {
            $edithint = new lang_string('editsectionname', 'format_tiles');
        }
        if (empty($editlabel)) {
            $title = get_section_name($section->course, $section);
            $editlabel = new lang_string('newsectionname', 'format_tiles', $title);
        }
        return parent::inplace_editable_render_section_name($section, $linkifneeded, $editable, $edithint, $editlabel);
    }

    /**
     * Returns whether this course format allows the activity to
     * have "triple visibility state" - visible always, hidden on course page but available, hidden.
     * Copied from format_topics
     *
     * @param stdClass|cm_info $cm course module (may be null if we are displaying a form for adding a module)
     * @param stdClass|section_info $section section where this module is located or will be added to
     * @return bool
     */
    public function allow_stealth_module_visibility($cm, $section) {
        // Allow the third visibility state inside visible sections or in section 0.
        return !$section->section || $section->visible;
    }

    /**
     * Callback used in WS core_course_edit_section when teacher performs an AJAX action on a section (show/hide)
     *
     * Access to the course is already validated in the WS but the callback has to make sure
     * that particular action is allowed by checking capabilities
     *
     * Course formats should register
     *
     * @param stdClass|section_info $section
     * @param string $action
     * @param int $sr
     * @return null|array|stdClass any data for the Javascript post-processor (must be json-encodeable)
     * @throws moodle_exception
     * @throws required_capability_exception
     */
    public function section_action($section, $action, $sr) {
        global $PAGE;

        if ($section->section && ($action === 'setmarker' || $action === 'removemarker')) {
            // Format 'tiles' allows to set and remove markers in addition to common section actions.
            require_capability('moodle/course:setcurrentsection', context_course::instance($this->courseid));
            course_set_marker($this->courseid, ($action === 'setmarker') ? $section->section : 0);
            return null;
        }

        // For show/hide actions call the parent method and return the new content for .section_availability element.
        $rv = parent::section_action($section, $action, $sr);
        $renderer = $PAGE->get_renderer('format_tiles');

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
     * Allows course format to execute code on moodle_page::set_course()
     * Used here to ensure that, before starting to load the page,
     * we establish if the user is changing their pref for using JS nav
     * and change the setting if so
     *
     * @param moodle_page $page instance of page calling set_course
     * @throws coding_exception
     * @throws dml_exception
     * @throws moodle_exception
     */
    public function page_set_course(moodle_page $page) {
        global $SESSION;
        if (get_config('format_tiles', 'usejavascriptnav')) {
            if (optional_param('stopjsnav', 0, PARAM_INT) == 1) {
                // User is toggling JS nav setting.
                $existingstoppref = get_user_preferences('format_tiles_stopjsnav', 0);
                if (!$existingstoppref) {
                    // Did not already have it disabled.
                    set_user_preference('format_tiles_stopjsnav', 1);
                    $reenablelink = html_writer::link(
                        new moodle_url('/course/view.php', ['id' => $page->course->id, 'stopjsnav' => 1]),
                        get_string('reactivate', 'format_tiles'),
                        ['class' => 'btn btn-secondary ml-3']
                    );
                    \core\notification::warning(get_string('jsdeactivated', 'format_tiles') . $reenablelink);
                } else {
                    // User previously disabled it, but now is re-enabling.
                    unset_user_preference('format_tiles_stopjsnav');
                    \core\notification::success(get_string('jsreactivated', 'format_tiles'));
                }
                if ($page->course->id) {
                    redirect(new moodle_url('/course/view.php', ['id' => $page->course->id]));
                }
                unset($SESSION->format_tiles_jssuccessfullyused);
            }
        }
    }

    /**
     * Get the course display value for the current course.
     *
     * Formats extending topics or weeks will use coursedisplay as this setting name
     * so they don't need to override the method. However, if the format uses a different
     * display logic it must override this method to ensure the core renderers know
     * if a COURSE_DISPLAY_MULTIPAGE or COURSE_DISPLAY_SINGLEPAGE is being used.
     *
     * @return int The current value (COURSE_DISPLAY_MULTIPAGE or COURSE_DISPLAY_SINGLEPAGE)
     */
    public function get_course_display(): int {
        return COURSE_DISPLAY_SINGLEPAGE;
    }
}

/**
 * Implements callback inplace_editable() allowing to edit values in-place
 *
 * @param string $itemtype
 * @param int $itemid
 * @param mixed $newvalue
 * @return \core\output\inplace_editable | null
 * @throws dml_exception
 */
function format_tiles_inplace_editable($itemtype, $itemid, $newvalue) {
    global $DB, $CFG;
    require_once($CFG->dirroot . '/course/lib.php');
    if ($itemtype === 'sectionname' || $itemtype === 'sectionnamenl') {
        $section = $DB->get_record_sql(
            "SELECT s.* FROM {course_sections} s JOIN {course} c ON s.course = c.id WHERE s.id = ? AND c.format = ?",
            [$itemid, 'tiles'], MUST_EXIST);
        return course_get_format($section->course)->inplace_editable_update_section_name($section, $itemtype, $newvalue);
    }
}

/**
 * Get icon mapping for font-awesome.
 * @return array the icons for which theme should use font awesome.
 */
function format_tiles_get_fontawesome_icon_map() {
    $iconset = new format_tiles\local\icon_set();
    return $iconset->get_font_awesome_icon_map();
}

/**
 * Serves any files associated with the plugin (e.g. tile photos).
 * For explanation see https://docs.moodle.org/dev/File_API
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return void
 */
function format_tiles_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = []) {
    $allowecontexts = [CONTEXT_COURSE, CONTEXT_MODULE, CONTEXT_SYSTEM];
    if (!in_array($context->contextlevel, $allowecontexts)) {
        send_file_not_found();
    }
    if ($filearea !== 'tilephoto') {
        debugging('Invalid file area ' . $filearea, DEBUG_DEVELOPER);
        send_file_not_found();
    }

    // Make sure the user is logged in and has access to the course.
    require_login($course);

    $fileapiparams = \format_tiles\local\tile_photo::file_api_params();
    $fs = get_file_storage();
    $sectionid = (int)$args[0];
    $filepath = '/' . $args[1] .'/';
    $filename = $args[2];
    $file = $fs->get_file($context->id, $fileapiparams['component'], $filearea, $sectionid, $filepath, $filename);
    send_stored_file($file, 86400, 0, $forcedownload, $options);
}


/**
 * Callback for the fragment API see https://docs.moodle.org/dev/Fragment.
 *
 * Return the HTML for a single course section page for the fragment API.
 * (i.e. the list of activities and resources comprising the contents of a tile)
 * Will be called from JS via Fragment.loadFragment() which in turn calls core_get_fragment().
 * JS will add resulting HTML to page and run JS using Templates.runTemplateJS().
 *
 * @param array $args fragment args containing sectionid only.
 * @return string The HTML to add to page.
 */
function format_tiles_output_fragment_get_cm_list(array $args): string {
    global $PAGE, $DB;
    $section = $DB->get_record('course_sections', ['id' => $args['sectionid']]);
    if (!$section) {
        throw new \Exception("Section not found with ID " . $args['sectionid']);
    }
    $course = get_course($section->course);

    // We don't need to check course context permission as fragment API does that.
    // But we should check that the user can see this specific section as may be hidden.
    $modinfo = get_fast_modinfo($course);
    if (!$modinfo->get_section_info($section->section, MUST_EXIST)->uservisible) {
        require_capability('moodle/course:viewhiddensections', context_course::instance($course->id));
    }

    $renderer = $PAGE->get_renderer('format_tiles');
    $templateable = new \format_tiles\output\course_output($course, true, $section->section);
    $data = $templateable->export_for_template($renderer);

    $template = $section->section == 0 ? 'format_tiles/section_zero' : 'format_tiles/single_section_content';
    return $renderer->render_from_template($template, $data);
}

/**
 * Callback for the fragment API see https://docs.moodle.org/dev/Fragment.
 *
 * Return the HTML for a single course module (only page supported at present).
 * Will be called from JS via Fragment.loadFragment() which in turn calls core_get_fragment().
 * JS will add resulting HTML to page and run JS using Templates.runTemplateJS().
 * @see \core_external::get_fragment()
 * @param array $args fragment args containing sectionid only.
 * @return string The HTML to add to page.
 */
function format_tiles_output_fragment_get_cm_content(array $args): string {
    global $DB, $CFG, $PAGE;
    $modcontext = context::instance_by_id($args['contextid']);
    if ($modcontext->contextlevel !== CONTEXT_MODULE) {
        throw new invalid_parameter_exception(
            "Invalid context level " . $modcontext->contextlevel . ' for ID ' . $args['contextid']
        );
    }

    $coursecontext = $modcontext->get_course_context();
    $mod = get_fast_modinfo($coursecontext->instanceid)->get_cm($modcontext->instanceid);
    require_capability('mod/' . $mod->modname . ':view', $modcontext);

    if ($mod) {
        $allowedmodules = explode(",", get_config('format_tiles', 'modalmodules'));
        $treataslabel = $mod->has_custom_cmlist_item();
        if (!in_array($mod->modname, $allowedmodules) && !$treataslabel) {
            throw new invalid_parameter_exception('Not allowed to call this mod type - disabled by site admin');
        }
        if (!$mod->uservisible) {
            require_capability('moodle/course:viewhiddenactivities', $modcontext);
        }
        try {
            // Issue #153 avoid multiple glossary auto link JS onclick events.
            $PAGE->requires->should_create_one_time_item_now('filter_glossary_autolinker');

        } catch (\Exception $e) {
            debugging('Could not set glossary autolink created', DEBUG_DEVELOPER);
        }
        if ($mod->modname == 'page') {
            // Record from the page table.
            $record = $DB->get_record($mod->modname, ['id' => $mod->instance]);
            list($course, $cm) = get_course_and_cm_from_cmid($mod->id);
            require_once("$CFG->dirroot/mod/page/lib.php");
            page_view($record, $course, $cm, $modcontext);
            return \format_tiles\local\util::format_cm_content_text($mod->modname, $record, $modcontext);
        }
        if ($treataslabel) {
            return $mod->get_formatted_content(['overflowdiv' => true, 'noclean' => true]);
        }
        throw new invalid_parameter_exception('Only page modules or label like activities are allowed through this service');
    }
    throw new invalid_parameter_exception('Module not found with context ID ' . $args['contextid']);
}

/**
 * Callback to add head elements.  Used to add dynamic CSS used by Tiles format.
 * @see \core_renderer::standard_head_html()
 * @return string the HTML to inject.
 */
function format_tiles_before_standard_html_head(): string {
    $html = '';
    try {
        // We have to be careful in this function as it's called on every page (not just tiles course pages).
        // The method get_tiles_dynamic_css() will check that we are on a page that really needs it.
        $dynamiccss = \format_tiles\local\dynamic_styles::get_tiles_dynamic_css();
        if ($dynamiccss) {
            $html .= "<style id=\"format-tiles-dynamic-css\">$dynamiccss</style>";
        }
    } catch (\Exception $e) {
        debugging("Could not prepare format_tiles head data: " . $e->getMessage(), DEBUG_DEVELOPER);
    }
    return $html;
}

/**
 * Callback to add head elements.  Used to add dynamic CSS used by Tiles format.
 * @return string HTML to inject.
 *
 * @see \core_renderer::footer()
 */
function format_tiles_before_footer() {
    global $PAGE;
    if (($PAGE->course->format ?? null) !== 'tiles') {
        // This is called on every page so check that we are in a tiles course first.
        return '';
    }

    try {
        $html = '';

        $editing = $PAGE->user_is_editing();

        $allowedpagetypes = ['course-view-tiles', 'section-view-tiles'];
        $oncourseviewpage = in_array($PAGE->pagetype, $allowedpagetypes);

        // On a mod/view.php page we may need JS to ensure that any clicks on course index menu launch modals where appropriate.
        $modviewpageneedsjs = false;
        $allowedmodals = format_tiles\local\modal_helper::allowed_modal_modules();

        if (get_config('format_tiles', 'usecourseindex')) {
            if (!empty($allowedmodals['resources'] || !empty($allowedmodals['modules']))) {
                // On /mod/xxx/view.php or course/view.php page passing in cmid, may need to launch modal JS.
                // This is because the course index needs the JS.  So get details.
                $matches = [];
                preg_match('/^mod-([a-z]+)-view$/', $PAGE->pagetype, $matches);
                $modviewpageneedsjs = (bool)($matches[1] ?? null);
            }
        }

        if (($oncourseviewpage && !$editing) || $modviewpageneedsjs) {
            // Course module modals.
            $launchmodalcmid = null;

            // If we are on course/view.php, get details.
            if ($oncourseviewpage && !$editing) {
                $launchmodalcmid = optional_param('cmid', null, PARAM_INT);
                if ($launchmodalcmid) {
                    // Need to check if this cm allowed a modal.
                    $modalallowed =
                        \format_tiles\local\modal_helper::cm_has_modal($PAGE->course->id, $launchmodalcmid);
                    if (!$modalallowed) {
                        // Modal not allowed so unset.
                        $launchmodalcmid = null;
                    }
                }
            }

            $PAGE->requires->js_call_amd(
                'format_tiles/course_mod_modal', 'init',
                [$PAGE->course->id, false, $PAGE->pagetype, $launchmodalcmid, \format_tiles\local\util::using_js_nav()]
            );
        }

        // Add our JS config HTML.
        // Avoid doing so if the header has not been printed.
        // (The caveat is because some plugins e.g. mod/customcert/view.php when sending a PDF file may trigger this function).
        if ($PAGE->state === moodle_page::STATE_IN_BODY) {
            $jsconfig = format_tiles\local\util::get_js_config_data($PAGE->course->id);
            $renderer = $PAGE->get_renderer('format_tiles');
            $html .= $renderer->render_from_template('format_tiles/js-config', ['tiles_js_config' => $jsconfig]);
        }
    } catch (\Exception $e) {
        debugging("Could not prepare format_tiles footer data: " . $e->getMessage(), DEBUG_DEVELOPER);
    }
    return $html;
}
