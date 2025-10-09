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
 * General utilities class for format_tiles.
 * @package    format_tiles
 * @copyright  2023 David Watson {@link http://evolutioncode.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_tiles\local;

/**
 * General utilities class for format_tiles.
 * @package    format_tiles
 * @copyright  2023 David Watson {@link http://evolutioncode.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class util {


    /**
     * Get information about a particular course module including whether modal is allowed.
     * Called by web service when deciding how to handle an activity click.
     * @param int $courseid
     * @param int $cmid
     * @return object|null
     * @throws \coding_exception
     * @throws \dml_exception
     * @throws \moodle_exception
     */
    public static function get_course_mod_info(int $courseid, int $cmid): ?object {
        $coursecontext = \context_course::instance($courseid);
        $modinfo = get_fast_modinfo($courseid);
        $cm = $modinfo->get_cms()[$cmid] ?? null;

        if (!$cm || !$cm->uservisible) {
            throw new \Exception("Not allowed");
        }

        $cmrecord = $cm->get_course_module_record(true);
        $isresource = $cmrecord->modname == 'resource';

        $completioninfo = $cm->completion && !isguestuser()
            ? (new \completion_info(get_course($courseid))) : null;
        $completiondata = $completioninfo
            && $completioninfo->is_enabled($cm) != COMPLETION_TRACKING_NONE ? $completioninfo->get_data($cm) : null;

        if ($isresource) {
            // If it's a resource, could be a file e.g. PDF/HTML or could be a URL activity.
            if ($cm->modname == 'url') {
                $resourcetype = 'url';
            } else {
                $resourcetype = self::get_moodle_release() == 4.0
                    ? self::get_mod_resource_icon_name_legacy($cm->context->id)
                    : self::get_mod_resource_type($cm->icon);
            }
        } else {
            $resourcetype = '';
        }

        $modaltype = \format_tiles\local\modal_helper::cm_modal_type($courseid, $cmrecord->id);
        $description = $cm->showdescription ? $cm->get_formatted_content() : '';
        $description = $description && trim(strip_tags($description)) ? $description : '';
        return (object)[
            'id' => $cm->id,
            'courseid' => $courseid,
            'modulecontextid' => $cm->context->id,
            'coursecontextid' => $coursecontext->id,
            'name' => $cm->get_formatted_name(),
            'modname' => $cm->modname,
            'sectionnumber' => $cm->sectionnum,
            'sectionid' => $cm->section,
            'completionenabled' => (bool)$completiondata,
            'completionstate' => $completiondata ? $completiondata->completionstate : null,
            'iscomplete' => in_array($completiondata->completionstate ?? null, [COMPLETION_COMPLETE, COMPLETION_COMPLETE_PASS])
                ? 1 : 0,
            'ismanualcompletion' => $cm->completion == COMPLETION_TRACKING_MANUAL,
            'resourcetype' => $resourcetype,
            'modalallowed' => (bool)$modaltype,
            'modaltype' => $modaltype,
            'description' => $description,
        ];
    }

    /**
     * Get the current Moodle major release as a float e.g. 4.3
     * Sometimes we need it, to avoid maintaining multiple versions of this plugin.
     * @return float
     */
    public static function get_moodle_release(): float {
        global $CFG;
        $matches = [];
        preg_match('/^(\d+\.\d+).*$/', $CFG->release, $matches);
        return $matches[1] ?? 0.0;
    }

    /**
     * Get the release details of this version of Tiles.
     * @return string
     */
    public static function get_tiles_plugin_release(): string {
        global $CFG;
        $plugin = new \stdClass();
        $plugin->release = '';
        require("$CFG->dirroot/course/format/tiles/version.php");
        preg_match('/^(\d+\.\d+).*$/', $plugin->release, $matches);
        return $matches[1] ?? 0.0;
    }

    /**
     * Generate html for course module content
     * (i.e. for the time being, the content of a page).
     * Necessary to ensure that references to src="@@PLUGINFILE@@..." in $record->content
     * are re-written to the correct URL
     *
     * @param string $modname e.g. page
     * @param \stdClass $record the database record from the module table (e.g. the page table if it's a page)
     * @param \context $context the context of the course module.
     * @return string HTML to output.
     */
    public static function format_cm_content_text(string $modname, \stdClass $record, \context $context): string {
        $text = '';
        if (isset($record->intro)) {
            $text .= file_rewrite_pluginfile_urls(
                $record->intro,
                'pluginfile.php',
                $context->id,
                'mod_' . $modname,
                'intro',
                null
            );
        }
        if (isset($record->content)) {
            $text .= \html_writer::div(file_rewrite_pluginfile_urls(
                $record->content,
                'pluginfile.php',
                $context->id,
                'mod_' . $modname,
                'content',
                $record->revision
            ));
        }
        $formatoptions = new \stdClass();
        $formatoptions->noclean = true;
        $formatoptions->overflowdiv = true;
        $formatoptions->context = $context;
        return format_text($text, $record->contentformat, $formatoptions);
    }

    /**
     * Get the mod resource type e.g. pdf, video, audio , html from the icon string.
     * @param string $modicon
     * @return string|null
     */
    public static function get_mod_resource_type(string $modicon): ?string {
        // In Moodle 4.3+ we expect the mod icon string to be like f/pdf, f/video, f/html, f/audio.
        // In Moodle 4.2- expect f/pdf-24, f/mpeg-24, f/mp3-24, f/powerpoint-24, f/document-24, f/spreadsheet-24, f/html-24.
        $pattern = "/^f\/([a-z0-9]+)-24$/";
        $matches = [];
        preg_match($pattern, $modicon, $matches);
        $icon = $matches[1] ?? null;
        if (!$icon) {
            return null;
        }
        $map = [
            'pdf' => 'pdf', 'mpeg' => 'mp4',
            'mp3' => 'mp3', 'powerpoint' => 'ppt',
            'document' => 'doc', 'spreadsheet' => 'xls',
            'html' => 'html',
        ];
        return $map[$icon] ?? $icon;
    }

    /**
     * Is the user using JS navigation i.e. animated tiles?
     * @return bool
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public static function using_js_nav() {
        $userstopjsnav = get_user_preferences('format_tiles_stopjsnav', 0);

        // JS navigation and modals in Internet Explorer are not supported by this plugin so we disable JS nav here.
        return !$userstopjsnav && get_config('format_tiles', 'usejavascriptnav') && !\core_useragent::is_ie();
    }

    /**
     * Is the current user using tile fitter?
     * @return bool
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public static function using_tile_fitter(): bool {
        global $SESSION;

        if (optional_param('skipcheck', 0, PARAM_INT)) {
            // The skipcheck param is for anyone stuck at loading icon who clicks it - they escape it for session.
            $SESSION->format_tiles_skip_width_check = 1;
            return false;
        }

        return get_config('format_tiles', 'fittilestowidth')
            && \core_useragent::get_device_type() != \core_useragent::DEVICETYPE_MOBILE
            && ($SESSION->format_tiles_skip_width_check ?? null) != 1;
    }


    /**
     * If tile fitter has already set a max width for page, what is it?
     * @param int $courseid
     * @return int
     */
    public static function get_tile_fitter_max_width(int $courseid): int {
        global $SESSION;
        if (!$courseid) {
            return 0;
        }
        $var = 'format_tiles_width_' . $courseid;
        return $SESSION->$var ?? 0;
    }

    /**
     * Iterates through all the colours entered by the administrator under the plugin settings page
     * @return array list of all the colours and their names for use in the settings forms
     * @throws \dml_exception
     */
    public static function get_tiles_palette() {
        $palette = [];
        for ($i = 1; $i <= 10; $i++) {
            $colourname = get_config('format_tiles', 'colourname' . $i);
            $tilecolour = get_config('format_tiles', 'tilecolour' . $i);
            if ($tilecolour != '' && $tilecolour != '#000') {
                $palette[$tilecolour] = $colourname;
            }
        }
        return $palette;
    }

    /**
     * Include AMD module required for tiles course.
     * @param \stdClass $course
     * @param int $contextid
     * @param int|null $displaysection
     * @return void
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public static function init_js($course, int $contextid, $displaysection) {
        global $USER, $SESSION, $PAGE;
        if ($PAGE->user_allowed_editing()) {
            $SESSION->editing_last_edited_section = $course->id . "-" . $displaysection;
        }

        $usejsnav = self::using_js_nav();
        $jssectionnum = $displaysection ?? optional_param('expand', 0, PARAM_INT);

        if (!$PAGE->user_is_editing()) {
            // Initialise the main JS module for non editing users.
            $jsparams = [
                'courseId' => $course->id,
                'useJSNav' => $usejsnav, // See also lib.php page_set_course().
                'isMobile' => \core_useragent::get_device_type() == \core_useragent::DEVICETYPE_MOBILE ? 1 : 0,
                'jsSectionNum' => $jssectionnum,
                'displayFilterBar' => $course->displayfilterbar,
                'assumeDataStoreContent' => get_config('format_tiles', 'assumedatastoreconsent'),
                'reOpenLastSection' => get_config('format_tiles', 'reopenlastsection'),
                'userId' => $USER->id,
                'fitTilesToWidth' => self::using_tile_fitter(),
                'enablecompletion' => $course->enablecompletion,
                'usesubtiles' => get_config('format_tiles', 'allowsubtilesview') && $course->courseusesubtiles,
                'courseContextId' => $contextid,
            ];
            $PAGE->requires->js_call_amd('format_tiles/course', 'init', $jsparams);
        } else {
            // Initialise JS for when editing mode is on.
            $editparams = [
                'courseId' => $course->id,
                'pageType' => $PAGE->pagetype,
                'allowPhotoTiles' => get_config('format_tiles', 'allowphototiles'),
                'documentationurl' => get_config('format_tiles', 'documentationurl'),
                'maxnumbericons' => self::get_icon_picker_max_number_icons(),
            ];
            $PAGE->requires->js_call_amd('format_tiles/edit_icon_picker', 'init', $editparams);
        }
        if ($course->enablecompletion) {
            $PAGE->requires->js_call_amd('format_tiles/completion', 'init', [$course->id]);
        }
    }

    /**
     * Get config data to be provided to JavaScript client side.
     * @param int $courseid
     * @return array
     * @throws \dml_exception
     */
    public static function get_js_config_data(int $courseid) {
        global $DB;

        $jsconfigvalues = [];

        // If we are using the course index, JS needs to know which PDFs and HTML files in course launch in modals.
        if (get_config('format_tiles', 'usecourseindex')) {
            $allowedmodals = \format_tiles\local\modal_helper::allowed_modal_modules();
            $modnames = array_merge($allowedmodals['modules'] ?? [], $allowedmodals['resources'] ?? []);
            $jsconfigvalues['modalAllowedModNames'] = json_encode($modnames);
            $jsconfigvalues['modalAllowedCmids'] = json_encode(
                \format_tiles\local\modal_helper::get_modal_allowed_cm_ids_integer_list($courseid, true)
            );
        }

        $jsconfigvalues['defaultcourseicon'] = $DB->get_field(
            'course_format_options', 'value',
            ['courseid' => $courseid, 'format' => 'tiles', 'sectionid' => 0, 'name' => 'defaulttileicon']
        );

        $data = [];
        foreach ($jsconfigvalues as $k => $v) {
            $data[] = ['key' => $k, 'value' => $v];
        }

        return $data;
    }

    /**
     * Get resource file type e.g. 'doc' from the icon URL e.g. 'document-24.png'
     * So that we know which icon to display on sub-tiles.
     *
     * @param int $modcontextid the mod info object we are checking
     * @return null|string the type e.g. 'doc'
     */
    public static function get_mod_resource_icon_name_legacy(int $modcontextid): ?string {
        $file = self::get_mod_resource_file($modcontextid);
        if (!$file) {
            return null;
        }
        $extensions = [
            'powerpoint' => 'ppt',
            'document' => 'doc',
            'spreadsheet' => 'xls',
            'archive' => 'zip',
            'application/pdf' => 'pdf',
            'mp3' => 'mp3',
            'mpeg' => 'mp4',
            'image/jpeg' => 'image',
            'image/png' => 'image',
            'image/gif' => 'image',
            'image/svg+' => 'image',
            'text/plain' => 'txt',
            'text/html' => 'html',
        ];
        $extension = $extensions[$file->get_mimetype()] ?? pathinfo($file->get_filename(), PATHINFO_EXTENSION);
        $extension = in_array($extension, ['docx', 'odf']) ? 'doc' : $extension;
        $extension = in_array($extension, ['xlsx', 'ods']) ? 'xls' : $extension;
        $extension = in_array($extension, ['pptx', 'odp']) ? 'ppt' : $extension;
        return $extension;
    }

    /**
     * Get the file relating to a resource course module from context ID.
     * @param int $modcontextid
     * @return \stored_file|null
     * @throws \coding_exception
     */
    public static function get_mod_resource_file(int $modcontextid): ?\stored_file {
        $fs = get_file_storage();
        $files = $fs->get_area_files($modcontextid, 'mod_resource', 'content');
        foreach ($files as $file) {
            if ($file->get_filesize() && $file->get_filename() != '.' && $file->get_mimetype()) {
                return $file;
            }
        }
        return null;
    }

    /**
     * Is this Moodle environment 4.0, 4.0.1 or 4.0.2?
     * @return bool
     */
    public static function is_moodle_402_minus(): bool {
        global $CFG;
        $matches = [];
        preg_match('/^(\d+)\.(\d+)(\.(\d+))?.*$/', $CFG->release, $matches);
        $ismoodle40 = ($matches[1] ?? null) == 4 && ($matches[2] ?? null) == 0;
        if ($ismoodle40 && !isset($matches[3])) {
            // Is Moodle 4.0.
            return true;
        }
        if ($ismoodle40 && in_array($matches[4], [0, 1, 2])) {
            // Is Moodle 4.0.0, 4.0.1 or 4.0.2.
            return true;
        }
        return false;
    }

    /**
     * Tile numbers have icon names in format number_1, number_2 etc up to number_99.
     * (UI cannot handle greater than 2 chars).
     * @param string $iconname
     * @return int|null null if not a number icon.
     */
    public static function get_tile_number_from_icon_name(string $iconname): ?int {
        if (preg_match('/^number_[\d]{1,2}$/', $iconname)) {
            return filter_var($iconname, FILTER_SANITIZE_NUMBER_INT);
        }
        return null;
    }

    /**
     * The number of number icons to offer to editing teacher in icon picker.
     * @return int
     */
    public static function get_icon_picker_max_number_icons() {
        return 20;
    }
}
