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
 * Contains the default section summary (used for multipage format).
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2012 Dan Poltawski
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_multitopic\output\courseformat\content\section;

use context_course;
use core_courseformat\output\local\content\section\summary as summary_base;

/**
 * Base class to render a course section summary.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2012 Dan Poltawski
 * @copyright based on work by 2020 Ferran Recio <ferran@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class summary extends summary_base {

    /** @var \section_info the course section class */
    protected $fmtsection;

    /**
     * Constructor.
     *
     * @param \format_multitopic $format the course format
     * @param \section_info $section the section info
     */
    public function __construct(\format_multitopic $format, \section_info $section) {
        parent::__construct($format, $section);
        $this->fmtsection = $section;
    }

    /**
     * Generate html for a section summary text
     *
     * @return string HTML to output.
     */
    public function format_summary_text(): string {
        $section = $this->fmtsection;
        $context = context_course::instance($section->course);

        // ADDED.
        // Variables for section image details.
        $imageurl = null;
        $imagename = null;
        $authorwithurl = null;
        $licencecode = null;

        // Find section image details.
        $fs = get_file_storage();
        $files = $fs->get_area_files($context->id, 'course', 'section', $section->id);
        foreach ($files as $file) {
            $filename = $file->get_filename();
            $filenameextpos = strrpos($filename, '.');
            if ((substr($filename, 0, 4) == 'goi_') && $filenameextpos) {
                $imageurl = \moodle_url::make_file_url('/pluginfile.php' ,
                                    "/{$file->get_contextid()}/course/section/{$section->id}{$file->get_filepath()}{$filename}");
                $imagename = substr($filename, 4, $filenameextpos - 4);
                $authorwithurl = $file->get_author();
                $licencecode = $file->get_license();
                break;
            }
        }

        $o = '';

        // Output section image, if any.
        if (isset($imageurl)) {
            $o .= \html_writer::start_tag('div', ['class' => 'section_image_holder']);
            $o .= \html_writer::empty_tag('img', ['src' => $imageurl]);
            $o .= \html_writer::start_tag('p');
            $o .= \format_multitopic_image_attribution($imagename, $authorwithurl, $licencecode);
            $o .= \html_writer::end_tag('p');
            $o .= \html_writer::end_tag('div');
        }
        // END ADDED.

        $summarytext = $o . file_rewrite_pluginfile_urls($section->summary, 'pluginfile.php',
            $context->id, 'course', 'section', $section->id);

        $options = new \stdClass();
        $options->noclean = true;
        $options->overflowdiv = true;
        return format_text($summarytext, $section->summaryformat, $options);
    }

}
