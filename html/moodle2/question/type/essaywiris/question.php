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

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot . '/question/type/wq/question.php');
require_once($CFG->dirroot . '/question/type/essay/question.php');
require_once($CFG->dirroot . '/question/type/essaywiris/renderer.php');


class qtype_essaywiris_question extends qtype_wq_question implements question_manually_gradable {

    // References to moodle's question public properties.
    public $responseformat;
    public $responsefieldlines;
    public $attachments;
    public $graderinfo;
    public $graderinfoformat;
    public $responsetemplate;
    public $responsetemplateformat;

    public function join_all_text() {
        $text = parent::join_all_text();
        $text .= ' ' . $this->base->responsetemplate . ' ' . $this->base->graderinfo;
        return $text;
    }

    public function get_format_renderer(moodle_page $page) {
        if ($this->is_cas_replace_input()) {
            $baserenderer = $page->get_renderer('qtype_essaywiris', 'format_replace_cas');
        } else {
            $baserenderer = $this->base->get_format_renderer($page);
        }
        $renderer = new qtype_essaywiris_format_add_cas_renderer($baserenderer);
        return $renderer;
    }

    private function is_cas_replace_input() {
        //@codingStandardsIgnoreStart
        $keyshowcas = $this->wirisquestion->question->getProperty(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_SHOW_CAS);
        $valueshowcasreplaceinput = com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_VALUE_SHOW_CAS_REPLACE;
        //@codingStandardsIgnoreEnd
        $replace = ($keyshowcas == $valueshowcasreplaceinput);
        return $replace;
    }

    public function is_complete_response(array $response) {
        $complete = parent::is_complete_response($response);
        if (!$complete && $this->is_cas_replace_input() && isset($response['_sqi'])) {
            $builder = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
            $sqi = $builder->readQuestionInstance($response['_sqi']);
            //@codingStandardsIgnoreLine
            $studentcas = $sqi->instance->getLocalData(com_wiris_quizzes_api_QuizzesConstants::$PROPERTY_CAS_SESSION);
            // Note that the $studentcas is null if the student does not update
            // the CAS value even if the CAS has an initial session.
            $complete = !empty($studentcas);
        }
        return $complete;
    }
}
