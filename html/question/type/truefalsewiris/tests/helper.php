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
 * Test helpers for the Wiris Truefalse question type.
 *
 * @package    qtype_truefalsewiris
 * @copyright  2013 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_truefalsewiris_test_helper extends question_test_helper {
    public function get_test_questions() {
        return array('sciencetruefalse', 'fixedtrue', 'fixedfalse');
    }

    /**
     * Builds a truefalsewiris form-data object with a fixed correct answer.
     *
     * The science template determines the right answer from a random Wiris
     * variable (wirisoverrideanswer = '#r'), which is not deterministic. Here
     * wirisoverrideanswer is empty, so the base True/False grading uses the fixed
     * correctanswer directly and selecting True or False can be graded
     * deterministically end to end. The Wiris payload is minimal (no CAS session)
     * because the plain-text statement carries no variables.
     *
     * @param string $name Question name.
     * @param string $questiontext Question text shown to the student.
     * @param string $correctanswer '1' if True is correct, '0' if False is correct.
     * @return stdClass
     */
    private function make_truefalse_form_data($name, $questiontext, $correctanswer) {
        $form = new stdClass();
        $form->name = $name;
        $form->questiontext = array('text' => $questiontext, 'format' => FORMAT_HTML);
        $form->defaultmark = 1;
        $form->generalfeedback = array('text' => '', 'format' => FORMAT_HTML);
        $form->correctanswer = $correctanswer;
        $form->feedbacktrue = array('text' => 'Feedback for the True answer.', 'format' => FORMAT_HTML);
        $form->feedbackfalse = array('text' => 'Feedback for the False answer.', 'format' => FORMAT_HTML);
        $form->penalty = 1;
        // Empty override -> the right answer is the fixed correctanswer (no Wiris computation).
        $form->wirisoverrideanswer = '';
        $form->wirisquestion = '<question><correctAnswers><correctAnswer></correctAnswer></correctAnswers>'
            . '<assertions><assertion name="syntax_math"/><assertion name="equivalent_symbolic"/></assertions>'
            . '<slots><slot><initialContent></initialContent></slot></slots></question>';
        $form->wirislang = 'en';
        $form->wiristruefalse = '';
        return $form;
    }

    /**
     * True/False (WIRIS) question whose correct answer is True.
     * @return stdClass
     */
    public function get_truefalsewiris_question_form_data_fixedtrue() {
        return $this->make_truefalse_form_data(
            'TF WIRIS true',
            '<p>The number 4 is even.</p>',
            '1'
        );
    }

    /**
     * True/False (WIRIS) question whose correct answer is False.
     * @return stdClass
     */
    public function get_truefalsewiris_question_form_data_fixedfalse() {
        return $this->make_truefalse_form_data(
            'TF WIRIS false',
            '<p>The number 3 is even.</p>',
            '0'
        );
    }

    /**
     * Get the form data that corresponds to saving a Science Truefalse question.
     *
     * @return stdClass simulated question form data.
     */
    public function get_truefalsewiris_question_form_data_sciencetruefalse() {
        $form = new stdClass();
        $form->name = 'True/false wiris question';
        $form->questiontext = array();
        $form->questiontext['format'] = '1';
        $form->questiontext['text'] = 'Is #a an even number?.';
        $form->defaultmark = 1;
        $form->generalfeedback = array();
        $form->generalfeedback['format'] = '1';
        $form->generalfeedback['text'] = 'You should have selected #r.';
        $form->correctanswer = '1';
        $form->feedbacktrue = array();
        $form->feedbacktrue['format'] = '1';
        $form->feedbacktrue['text'] = 'This is the right answer.';
        $form->feedbackfalse = array();
        $form->feedbackfalse['format'] = '1';
        $form->feedbackfalse['text'] = 'This is the wrong answer.';
        $form->wirisoverrideanswer = '#r';
        $form->penalty = 1;
        $form->responseformat = 'editor';
        $form->responserequired = 1;
        $form->responsefieldlines = 10;
        $form->responsetemplate = array('text' => '', 'format' => FORMAT_HTML);

        // Wiris specific information.
        $form->wirisquestion = '<question><wirisCasSession><![CDATA[<wiriscalc version="3.2"><title>
                                <math xmlns="http://www.w3.org/1998/Math/MathML"><mtext>Untitled calc</mtext>
                                </math></title><properties><property name="decimal_separator">.</property>
                                <property name="digit_group_separator"></property>
                                <property name="float_format">mg</property><property name="imaginary_unit">i</property>
                                <property name="implicit_times_operator">false</property>
                                <property name="item_separator">,</property><property name="lang">en</property>
                                <property name="precision">4</property>
                                <property name="quizzes_question_options">true</property><property name="save_settings_in_cookies">
                                false</property><property name="times_operator">·</property><property name="use_degrees">false
                                </property></properties><session version="3.0" lang="en"><task><title>
                                <math xmlns="http://www.w3.org/1998/Math/MathML"><mtext>Sheet 1</mtext></math></title><group>
                                <command><input><math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="normal">a</mi>
                                <mo>=</mo><mi>random</mi><mfenced><mrow><mn>1</mn><mo>,</mo><mo>&#xA0;</mo><mn>500</mn></mrow>
                                </mfenced></math></input><output><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>148</mn>
                                </math></output></command><command><input><math xmlns="http://www.w3.org/1998/Math/MathML">
                                <mi mathvariant="normal">r</mi><mo>=</mo><mi>false</mi></math></input><output>
                                <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>false</mi></math></output></command><command>
                                <input><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>if</mi><mo>&#xA0;</mo><mi>remainder
                                </mi><mfenced><mrow><mi mathvariant="normal">a</mi><mo>,</mo><mo>&#xA0;</mo><mn>2</mn></mrow>
                                </mfenced><mo>&#xA0;</mo><mo>==</mo><mo>&#xA0;</mo><mn>0</mn><mo>&#xA0;</mo><mi>then</mi>
                                <mspace linebreak="newline" indentshift="1"/><mi mathvariant="normal">r</mi><mo>=</mo><mi>true</mi>
                                <mspace linebreak="newline" indentshift="0"/><mi>end</mi></math></input><output>
                                <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>true</mi></math></output></command><command>
                                <input><math xmlns="http://www.w3.org/1998/Math/MathML"/></input></command></group></task>
                                </session><constructions><construction group="1">
                                {&quot;elements&quot;:[],&quot;constraints&quot;:[],&quot;displays&quot;:[],&quot;
                                handwriting&quot;:[]}</construction></constructions></wiriscalc>]]></wirisCasSession>
                                <correctAnswers><correctAnswer></correctAnswer></correctAnswers><assertions>
                                <assertion name="syntax_math"/><assertion name="equivalent_symbolic"><param name="tolerance">0.001
                                </param><param name="tolerance_digits">false</param><param name="relative_tolerance">true</param>
                                </assertion></assertions><slots><slot><initialContent></initialContent></slot></slots></question>';
        $form->wirislang = 'en';
        $form->wiristruefalse = '';
        return $form;
    }
}
