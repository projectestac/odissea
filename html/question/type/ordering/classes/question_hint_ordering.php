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
 * Question hint for ordering.
 *
 * @package    qtype_ordering
 * @copyright  2021 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace qtype_ordering;

use question_display_options;
use question_hint_with_parts;

/**
 * Question hint for ordering.
 *
 * An extension of {@link question_hint} for questions like match and multiple
 * choice with multile answers, where there are options for whether to show the
 * number of parts right at each stage, and to reset the wrong parts.
 *
 * @package    qtype_ordering
 * @copyright  2021 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class question_hint_ordering extends question_hint_with_parts {
    /** Highlight response in the hint options. */
    public $highlightresponse;

    /**
     * Constructor.
     *
     * @param int The hint id from the database.
     * @param string $hint The hint text.
     * @param int The corresponding text FORMAT_... type.
     * @param bool $shownumcorrect Whether the number of right parts should be shown.
     * @param bool $clearwrong Whether the wrong parts should be reset.
     */
    public function __construct($id, $hint, $hintformat, $shownumcorrect, $clearwrong, $highlightresponse) {
        parent::__construct($id, $hint, $hintformat, $shownumcorrect, $clearwrong);
        $this->highlightresponse = $highlightresponse;
    }

    /**
     * Create a basic hint from a row loaded from the question_hints table in the database.
     *
     * @param object $row With property options as well as hint, shownumcorrect and clearwrong set.
     * @return question_hint_ordering
     */
    public static function load_from_record($row) {
        global $DB;

        // Initialize with the old questions.
        if (is_null($row->options) || is_null($row->shownumcorrect)) {
            $row->options = 1;
            $row->shownumcorrect = 1;
            $DB->update_record('question_hints', $row);
        }

        return new question_hint_ordering($row->id, $row->hint, $row->hintformat,
            $row->shownumcorrect, $row->clearwrong, $row->options);
    }

    /**
     * Adjust this display options according to the hint settings.
     *
     * @param question_display_options $options
     */
    public function adjust_display_options(question_display_options $options) {
        parent::adjust_display_options($options);
        $options->highlightresponse = $this->highlightresponse;
    }
}
