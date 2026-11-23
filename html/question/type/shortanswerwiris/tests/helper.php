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
 * Test helper class for the shortanswerwiris question type.
 *
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_shortanswerwiris_test_helper extends question_test_helper {
    public function get_test_questions() {
        return array('scienceshortanswer', 'algorithmsaw', 'textfield', 'inlineeditor', 'graphical', 'compound');
    }

    /**
     * Makes a shortanswerwiris question with correct answer 'math', partially
     * correct answer 'mat' and defaultmark 1. This question also has a
     * '*' match anything answer.
     * @return stdClass
     */
    public function get_shortanswerwiris_question_form_data_scienceshortanswer() {
        question_bank::load_question_definition_classes('shortanswerwiris');
        $form = new stdClass();
        test_question_maker::initialise_a_question($form);
        $form->name = 'Short answer wiris question';
        $form->questiontext = array();
        $form->questiontext['format'] = '1';
        $form->questiontext['text'] = 'Just write math: __________';
        $form->defaultmark = 1;
        $form->generalfeedback = array();
        $form->generalfeedback['format'] = '1';
        $form->generalfeedback['text'] = 'Math or mat would have been OK.';
        $form->usecase = false;
        $form->answer = array(
            13 => 'math',
            14 => 'mat',
            15 => '*'
        );
        $form->fraction = array(
            13 => '1.0',
            14 => '0.8',
            15 => '0.0'
        );
        $form->feedback = array(
            13 => array('text' => 'Math is a very good answer.', 'format' => '1'),
            14 => array('text' => 'Mat is an OK good answer.', 'format' => '1'),
            15 => array('text' => 'That is a bad answer.', 'format' => '1')
        );

        $form->qtype = question_bank::get_qtype('shortanswer');

        // Wiris specific information.
        $form->wirisquestion = '<question><correctAnswers><correctAnswer>math</correctAnswer><correctAnswer id="1">mat
                                </correctAnswer><correctAnswer id="2">*</correctAnswer></correctAnswers><assertions>
                                <assertion name="syntax_math"/><assertion name="equivalent_symbolic"/>
                                <assertion name="syntax_math" correctAnswer="1" answer="0"/>
                                <assertion name="equivalent_symbolic" correctAnswer="1" answer="0"/>
                                assertion name="syntax_math" correctAnswer="2" answer="0"/>
                                <assertion name="equivalent_symbolic" correctAnswer="2" answer="0"/></assertions><slots><slot>
                                <initialContent></initialContent></slot></slots></question>';
        $form->wirislang = 'en';
        $form->wiristruefalse = '';
        return $form;
    }

    /**
     * Gets the question form data for a shortanswer question with with correct
     * answer 'math'.
     * This question also has a '*' match anything answer.
     * @return stdClass
     */
    public function get_shortanswerwiris_question_form_data_algorithmsaw() {
        $form = new stdClass();

        $form->name = 'Short answer question';
        $form->questiontext = array('text' => 'Just write x + #a:', 'format' => FORMAT_HTML);
        $form->defaultmark = 1.0;
        $form->generalfeedback = array(
            'text' => '#formula - Generalfeedback: You should have said x + #a.',
            'format' => FORMAT_HTML
        );
        $form->usecase = false;
        $form->answer = array('x+#a');
        $form->fraction = array('1.0');
        $form->feedback = array(
            array('text' => 'This is right.', 'format' => FORMAT_HTML)
        );

        $form->wirisquestion = '<question><wirisCasSession><![CDATA[<wiriscalc version="3.2"><title>
                                <math xmlns="http://www.w3.org/1998/Math/MathML"><mtext>Untitled calc</mtext></math></title>
                                <properties><property name="decimal_separator">.</property>
                                <property name="digit_group_separator"></property><property name="float_format">mg</property>
                                <property name="imaginary_unit">i</property><property name="implicit_times_operator">false
                                </property><property name="item_separator">,</property><property name="lang">en</property>
                                <property name="precision">4</property><property name="quizzes_question_options">true</property>
                                <property name="save_settings_in_cookies">false</property><property name="times_operator">·
                                </property><property name="use_degrees">false</property></properties>
                                <session version="3.0" lang="en"><task><title><math xmlns="http://www.w3.org/1998/Math/MathML">
                                <mtext>Sheet 1</mtext></math></title><group><command><input>
                                <math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="normal">a</mi><mo>=</mo>
                                <mn>12</mn></math></input><output><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>12</mn>
                                </math></output></command><command><input><math xmlns="http://www.w3.org/1998/Math/MathML">
                                <mi mathvariant="normal">b</mi><mo>=</mo><mo>-</mo><mn>15</mn></math></input><output>
                                <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>15</mn></math></output></command>
                                <command><input><math xmlns="http://www.w3.org/1998/Math/MathML"/></input></command><command>
                                <input><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>formula</mi><mo>=</mo><msqrt><msup>
                                <mi>x</mi><mn>2</mn></msup><mo>+</mo><mfrac><mn>2</mn><mn>4</mn></mfrac></msqrt></math></input>
                                <output><math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mrow><msup><mi>x</mi><mn>2</mn>
                                </msup><mo>+</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></mrow></msqrt></math></output></command>
                                <command><input><math xmlns="http://www.w3.org/1998/Math/MathML"/></input></command></group>
                                </task></session><constructions><construction group="1">{&quot;elements&quot;:[],&quot;constraints
                                &quot;:[],&quot;displays&quot;:[],&quot;handwriting&quot;:[]}</construction></constructions>
                                </wiriscalc>]]></wirisCasSession><correctAnswers><correctAnswer>x+#a</correctAnswer>
                                </correctAnswers><assertions><assertion name="syntax_math"/>
                                <assertion name="equivalent_symbolic"><param name="tolerance">0.001</param>
                                <param name="tolerance_digits">false</param><param name="relative_tolerance">true</param>
                                </assertion></assertions><slots><slot><initialContent>math</initialContent></slot></slots>
                                </question>';
        $form->wirislang = 'en';
        $form->wiristruefalse = '';

        return $form;
    }

    /**
     * Builds a shortanswerwiris form-data object that shares the common
     * boilerplate (name, marks, single correct answer and assertions) and only
     * varies the Wiris Quizzes answer-field configuration carried in the
     * <localData> block. This is what lets the Behat suite exercise each input
     * option (text, inline equation, graphical, compound) without hand-writing a
     * full payload per scenario.
     *
     * @param string $name Question name.
     * @param string $questiontext Question text shown to the student.
     * @param string $correctanswer The single correct answer.
     * @param string $localdata The <localData>...</localData> block (field type).
     * @param string $slots The <slots>...</slots> block (one or more answer slots).
     * @return stdClass
     */
    private function make_input_type_form_data($name, $questiontext, $correctanswer, $localdata, $slots) {
        $form = new stdClass();
        test_question_maker::initialise_a_question($form);
        $form->name = $name;
        $form->questiontext = array('text' => $questiontext, 'format' => FORMAT_HTML);
        $form->defaultmark = 1;
        $form->generalfeedback = array('text' => '', 'format' => FORMAT_HTML);
        $form->usecase = false;
        $form->answer = array($correctanswer);
        $form->fraction = array('1.0');
        $form->feedback = array(array('text' => '', 'format' => FORMAT_HTML));
        $form->qtype = question_bank::get_qtype('shortanswer');
        $form->wirisquestion = '<question><correctAnswers><correctAnswer>' . $correctanswer . '</correctAnswer>'
            . '</correctAnswers><assertions><assertion name="syntax_math"/>'
            . '<assertion name="equivalent_symbolic"/></assertions>' . $slots . $localdata . '</question>';
        $form->wirislang = 'en';
        $form->wiristruefalse = '';
        return $form;
    }

    /**
     * Plain-text answer field: the only Wiris answer input that is a real HTML
     * text box, so it is the one input option that Behat can both fill and grade
     * end to end.
     * @return stdClass
     */
    public function get_shortanswerwiris_question_form_data_textfield() {
        return $this->make_input_type_form_data(
            'SA WIRIS text field',
            '<p>Type the word energy.</p>',
            'energy',
            '<localData><data name="inputField">textField</data></localData>',
            '<slots><slot><initialContent></initialContent></slot></slots>'
        );
    }

    /**
     * Inline equation editor (MathType overlay). Not keyboard-fillable; the E2E
     * test only checks that it renders and the attempt workflow completes.
     * @return stdClass
     */
    public function get_shortanswerwiris_question_form_data_inlineeditor() {
        return $this->make_input_type_form_data(
            'SA WIRIS inline equation',
            '<p>Write the expression x + 1.</p>',
            'x+1',
            '<localData><data name="inputField">inlineEditor</data></localData>',
            '<slots><slot><initialContent></initialContent></slot></slots>'
        );
    }

    /**
     * Graphical (draw) answer field. Canvas based; not keyboard-fillable.
     * @return stdClass
     */
    public function get_shortanswerwiris_question_form_data_graphical() {
        return $this->make_input_type_form_data(
            'SA WIRIS graphical',
            '<p>Draw the line y = x.</p>',
            'x',
            '<localData><data name="inputField">inlineGraph</data></localData>',
            '<slots><slot><initialContent></initialContent></slot></slots>'
        );
    }

    /**
     * Compound answer: several answer boxes inside one question. Not
     * keyboard-fillable; the E2E test checks it renders and submits.
     * @return stdClass
     */
    public function get_shortanswerwiris_question_form_data_compound() {
        return $this->make_input_type_form_data(
            'SA WIRIS compound',
            '<p>Give the slope and intercept of y = x + 1.</p>',
            'x+1',
            '<localData><data name="inputField">popupEditor</data>'
                . '<data name="inputCompound">true</data>'
                . '<data name="gradeCompound">distribute</data></localData>',
            '<slots><slot><initialContent></initialContent></slot>'
                . '<slot><initialContent></initialContent></slot></slots>'
        );
    }
}
