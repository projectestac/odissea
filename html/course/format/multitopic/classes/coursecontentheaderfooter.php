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
 * Course content header/footer
 *
 * @package   format_multitopic
 * @copyright 2019 James Calder and Otago Polytechnic
 * @copyright based on work by 2009 Tim Hunt
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace format_multitopic;

/**
 * Course content header/footer: Back to course button.
 *
 * @copyright 2019 James Calder and Otago Polytechnic
 * @copyright based on work by 2009 Tim Hunt
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class coursecontentheaderfooter implements \renderable {
    // See https://docs.moodle.org/dev/Course_formats#Additional_footer_or_header_on_any_page_inside_the_course .

    /** @var int -1 for header, 1 for footer */
    private $pos;
    /** @var \moodle_url URL for relevant course section */
    private $sectionurl;

    /**
     * Construct course content header or footer
     *
     * @param \moodle_page $page The page the header or footer is for
     * @param int $pos -1 for header, 1 for footer
     */
    public function __construct(\moodle_page $page, int $pos) {
        // Based on lib/outputrenderers.php function activity_navigation .

        // First we should check if we want to add navigation.
        if (($page->pagelayout == 'incourse' || $page->pagelayout == 'frametop')
                && $page->context->contextlevel == CONTEXT_MODULE
                && !$page->cm->is_stealth()) {
            $course = $page->cm->get_course();
            $section = new \stdClass();
            $section->id = $page->cm->section;
            $this->sectionurl = course_get_url($course->id, $section);
            $this->pos = $pos;
        } else {
            $this->sectionurl = null;
        }
    }

    /**
     * Output course content header or footer
     *
     * @return string generated HTML.
     */
    public function output(): string {

        global $OUTPUT;
        $o = '';

        // Back button.
        if ($this->sectionurl) {
            $strback = get_string_manager()->string_exists('back_to_course', 'format_multitopic') ?
                        get_string('back_to_course', 'format_multitopic') : get_string('back');
            $o .= \html_writer::tag('a', $OUTPUT->pix_icon('t/left', '') . ' ' . $strback,
                                    ['href' => $this->sectionurl]);
            // TODO: Use up arrow, to match Book exit link?
        }

        // Horizontal rule to separate header/footer from page content.
        if ($o) {
            if ($this->pos < 0) {
                $o = $o . \html_writer::empty_tag('hr');
            } else if ($this->pos > 0) {
                $o = \html_writer::empty_tag('hr') . $o;
            }
        }

        return $o;
    }

}
