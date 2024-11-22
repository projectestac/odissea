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
 * Course header
 *
 * @package   format_multitopic
 * @copyright 2019 James Calder and Otago Polytechnic
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace format_multitopic;

/**
 * Course header: A banner with the course title and a slice of the course image.
 *
 * @copyright 2019 James Calder and Otago Polytechnic
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class courseheader implements \renderable {
    // See https://docs.moodle.org/dev/Course_formats#Additional_footer_or_header_on_any_page_inside_the_course .

    /** @var \moodle_url|null course image URL */
    private $imageurl;
    /** @var string|null course image name */
    private $imagename;
    /** @var string|null course image author's name, optionally followed by vertical bar and URL */
    private $authorwithurl;
    /** @var string|null course image licence */
    private $licencecode;
    /** @var int how far down the course image (in percent) to take the banner slice from */
    private $bannerslice;
    /** @var string course name */
    private $coursename;

    /**
     * Construct course header
     *
     * @param \stdClass $course the course to construct a header for
     */
    public function __construct(\stdClass $course) {
        // See https://stackoverflow.com/questions/37537352/showing-course-image-on-custom-page-in-moodle .

        $contextid = \context_course::instance($course->id)->id;

        // Set course-related properties.
        $this->coursename = format_string($course->fullname, true, ['context' => $contextid]);
        $this->bannerslice = $course->bannerslice;

        // Clear image-related properties.
        $this->imageurl = null;
        $this->imagename = null;
        $this->authorwithurl = null;
        $this->licencecode = null;

        // Search for the course image.
        $fs = get_file_storage();
        $files = $fs->get_area_files($contextid, 'course', 'overviewfiles');
        foreach ($files as $file) {
            $filename = $file->get_filename();
            $filenameextpos = strrpos($filename, '.');
            if ($filenameextpos) {
                $url = \moodle_url::make_file_url('/pluginfile.php' ,
                        '/' . $file->get_contextid() . '/course/overviewfiles' .
                        $file->get_filepath() . $filename);
                $this->imageurl = $url;
                $this->imagename = substr($filename, 0, $filenameextpos);
                $this->authorwithurl = $file->get_author();
                $this->licencecode = $file->get_license();
                break;
            }
        }

    }

    /**
     * Output the course header
     *
     * @return string generated HTML.
     */
    public function output(): string {

        // Output the banner.
        // NOTE: Changes here need to be reflected in _course_edit.js .
        $o = \html_writer::start_tag('div', [
            'id' => 'course-header-banner',
            'style' => "background-image: url('{$this->imageurl}'); "
                     . "background-position: center {$this->bannerslice}%;",
        ]);
            $o .= \html_writer::tag('div', $this->coursename, [
                'id' => 'course-header-banner-text',
                'class' => 'h2',
            ]);
        $o .= \html_writer::end_tag('div');

        // Output the attribution.
        $o .= \html_writer::start_tag('p', ['id' => 'course-header-banner_attribution',
                                            'style' => 'visibility: ' . ($this->imageurl ? 'visible' : 'hidden') . ';', ]);
        $o .= format_multitopic_image_attribution($this->imagename, $this->authorwithurl, $this->licencecode);
        $o .= \html_writer::end_tag('p');

        return $o;
    }

}
