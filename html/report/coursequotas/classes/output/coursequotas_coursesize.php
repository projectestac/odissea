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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

namespace report_coursequotas\output;

defined('MOODLE_INTERNAL') || die;

require_once $CFG->libdir . '/tablelib.php';
require_once $CFG->dirroot . '/report/coursequotas/constants.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/local.lib.php';

/**
 * Model Coursequotas Course Sizes table class.
 *
 * @package    report
 * @copyright  TICxCAT <info@ticxcat.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class coursequotas_coursesize extends \table_sql
{

    protected $canmanage = null;

    /**
     * Sets up the table_log parameters.
     *
     * @param string $uniqueid unique id of form.
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public function __construct($uniqueid = '') {
        global $PAGE;

        parent::__construct($uniqueid);

        $this->canmanage = can_manage_files();

        $this->set_attribute('class', 'generaltable');

        $columns = array(COURSESIZE_FIELDCOURSEID, 'categoryname', COURSESIZE_FIELDQUOTA);
        $headers = array(get_string('course_name', REPORT_COMPONENTNAME), get_string('category_name', REPORT_COMPONENTNAME), get_string('disk_used', REPORT_COMPONENTNAME));

        if ($this->canmanage) {
            $columns[] = REPORT_COURSEQUOTAS_ACTIONS_STRING;
            $headers[] = get_string(REPORT_COURSEQUOTAS_ACTIONS_STRING);
        }

        $this->define_columns($columns);
        $this->define_headers($headers);

        $this->pageable(true);
        $this->collapsible(true);
        $this->sortable(true, COURSESIZE_FIELDQUOTA, SORT_DESC);
        $this->no_sorting('categoryname');
        $this->no_sorting(REPORT_COURSEQUOTAS_ACTIONS_STRING);
        $this->no_sorting(COURSESIZE_FIELDCOURSEID);
        $this->is_downloadable(false);

        $this->define_baseurl($PAGE->url);

        $from = '{' . COURSESIZE_TABLENAME . '} as coursesize INNER JOIN {course} as c ON (c.id = coursesize.' . COURSESIZE_FIELDCOURSEID . ')';
        $this->set_sql('coursesize.' . COURSESIZE_FIELDCOURSEID . ',c.visible,c.fullname,c.category,coursesize.' . COURSESIZE_FIELDQUOTA, $from, '1=1');
    }

    /**
     * Generate the courseid column.
     *
     * @param \stdClass $courseinfo courseinfo data.
     * @return string HTML for the version column
     */
    public function col_courseid($courseinfo) {
        global $CFG;

        $coursebaseurl = $CFG->wwwroot . '/course/view.php?id=';
        $dimmed = $courseinfo->visible ? '' : ' class="dimmed"';

        return '<a' . ' href="' . $coursebaseurl . $courseinfo->{COURSESIZE_FIELDCOURSEID} . '" ' . $dimmed . ' target="_blank">' . $courseinfo->fullname . '</a>';
    }

    /**
     * Generate the categoryname column.
     *
     * @param \stdClass $courseinfo courseinfo data.
     * @return string HTML for the version column
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public function col_categoryname($courseinfo) {
        global $CFG, $DB;

        if ($courseinfo->category == 0) {
            return get_string('front_page', REPORT_COMPONENTNAME);
        } else if ($category = $DB->get_record('course_categories', array('id' => $courseinfo->category), '*', IGNORE_MISSING)) {

            $baseurl = $CFG->wwwroot . '/course/index.php?categoryid=';
            $dimmed = $category->visible ? '' : ' class="dimmed"';
            return '<a href' . '="' . $baseurl . $category->id . '" ' . $dimmed . ' target="_blank">' . $category->name . '</a>';
        }

        return '';
    }

    /**
     * Generate the quota column.
     *
     * @param \stdClass $courseinfo courseinfo data.
     * @return string HTML for the version column
     */
    public function col_quota($courseinfo) {
        $size = report_coursequotas_format_size($courseinfo->{COURSESIZE_FIELDQUOTA});

        return $size->number . ' ' . $size->unit;
    }

    /**
     * Generate the actions column.
     *
     * @param \stdClass $courseinfo courseinfo data.
     * @return string HTML for the version column
     * @throws \coding_exception
     */
    public function col_actions($courseinfo) {
        global $CFG;

        $managestr = get_string('manage', REPORT_COMPONENTNAME);
        $managebaseurl = $CFG->wwwroot . '/report/coursequotas/filemanager.php?children=true&course=';

        if ($this->canmanage && $courseinfo->{COURSESIZE_FIELDQUOTA} > 0) {
            return '<a href="' . $managebaseurl . $courseinfo->{COURSESIZE_FIELDCOURSEID} . '">' . $managestr . '</a>';
        }

        return '';
    }
}