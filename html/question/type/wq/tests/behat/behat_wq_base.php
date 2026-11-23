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
 * Methods related to Wiris Quizzes question types.
 * @package    question
 * @subpackage wq
 * @copyright  WIRIS Europe (Maths for more S.L)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.

require_once(__DIR__ . '/../../../../../lib/behat/behat_base.php');

use Behat\Gherkin\Node\TableNode;

class behat_wq_base extends behat_base {

    /**
     * @Then I choose the question type :questiontypename
     */
    public function i_choose_the_question_type($questiontypename) {
        $this->execute('behat_forms::i_set_the_field_to', array($this->escape($questiontypename), 1));
        $this->execute("behat_general::i_click_on", array('.submitbutton', "css_element"));
    }

    /**
     * Opens the Wiris Quizzes Studio when editing a question.
     *
     * @When I open Wiris Quizzes Studio
     */
    public function i_open_wiris_quizzes_studio() {
        $node = $this->get_text_selector_node(
            'xpath_element',
            "//*[@id='wrsUI_openStudio']"
        );
        $this->ensure_node_is_visible($node);
        $node->click();
    }

    /**
     * Goes back in the Wiris Quizzes Studio interface.
     *
     * @When I go back in Wiris Quizzes Studio
     */
    public function i_go_back_in_wiris_quizzes_studio() {
        $node = $this->get_text_selector_node(
            'xpath_element',
            "//*[@id='wrsUI_quizzesStudioBackButton']"
        );
        $this->ensure_node_is_visible($node);
        $node->click();
    }

    /**
     * Saves Wiris Quizzes Studio.
     *
     * @When I save Wiris Quizzes Studio
     */
    public function i_save_wiris_quizzes_studio() {
        $node = $this->get_text_selector_node(
            'xpath_element',
            "//*[@id='wrsUI_quizzesStudioHomeSaveButton']"
        );
        $this->ensure_node_is_visible($node);
        $node->click();
    }

    /**
     * Opens the n instance of Wiris Quizzes Studio when editing a question.
     *
     * @When I Open Wiris Quizzes Studio Instance :instance
     */
    public function i_open_wiris_quizzes_studio_instance($instance) {
        $node = $this->get_text_selector_node(
            'xpath_element',
            "//*[@id='wrsUI_openStudio_".$instance."']"
        );
        $this->ensure_node_is_visible($node);
        $node->click();
    }

    /**
     * Checks if there is a readonly input.
     *
     * @Then I should have a readonly input
     */
    public function i_should_have_a_readonly_input() {
        $session = $this->getSession();
        $readonly = $session->getPage()->find('css', '.wrsUI_readOnly');
        if (empty($readonly)) {
            $currentUrl = $session->getCurrentUrl();
            throw new Exception("Readonly field not found. Current URL: {$currentUrl}");
        }
    }

    /**
     * @When I add the variable :varname with value :value
     */
    public function i_add_the_variable_with_value($varname, $value) {
        $this->execute('behat_general::i_wait_seconds', 2);
        $this->execute('behat_general::i_type', $varname);
        $this->execute('behat_general::i_type', " = ");
        $this->execute('behat_general::i_type', $value);
        $this->execute('behat_general::i_press_named_key', ['', 'enter']);
    }

    /**
     * @Then Feedback should exist
     */
    public function feedback_should_exist() {
        $session = $this->getSession();
        $feedback = $session->getPage()->find('css', '.feedback');
        if (empty($feedback)) {
            $currentUrl = $session->getCurrentUrl();
            throw new Exception("Feedback element not found. Current URL: {$currentUrl}");
        }
    }

    /**
     * @Then Generalfeedback should exist
     */
    public function generalfeedback_should_exist() {
        $session = $this->getSession();
        $generalfeedback = $session->getPage()->find('css', '.generalfeedback');
        if (empty($generalfeedback)) {
            $currentUrl = $session->getCurrentUrl();
            throw new Exception("General feedback element not found. Current URL: {$currentUrl}");
        }
    }

    /**
     * Clears all the content in a focused field.
     *
     * @When I clear the field
     */
    public function i_clear_the_field() {
        $this->getSession()->executeScript('this.value=""');
    }

    /**
     * Neutralises the Wiris Quizzes editor RequireJS conflict.
     *
     * The Wiris Quizzes client library (quizzes.js, loaded with a plain <script>
     * tag through quizzes/service.php) is a UMD bundle. On a page that uses
     * RequireJS (every Moodle page) it detects `define.amd` and registers an
     * anonymous `define()` that RequireJS cannot match to a module name. The
     * orphaned anonymous define stays queued and makes the next genuine
     * `require([...])` call (for instance Moodle's TinyMCE helper used to set the
     * "Question text" field) throw a "Mismatched anonymous define() module"
     * error. Because Moodle Behat fails on any JavaScript error, the affected
     * scenario aborts before the functionality under test is even reached.
     *
     * This helper installs a narrowly scoped guard that swallows ONLY RequireJS
     * `mismatch` errors and rethrows everything else, so real JavaScript errors
     * keep failing the test. It also defensively drains any anonymous define that
     * is already queued. Global JavaScript error detection is NOT disabled.
     *
     * Revert plan: once the Wiris Quizzes bundle no longer pollutes the AMD
     * loader (e.g. it temporarily unsets `define.amd` around its own <script>
     * load), delete this helper, the `I add a ... Wiris question ...` step and the
     * standalone step below, and use Moodle's core
     * `I add a "..." question filling the form with:` step directly.
     *
     * @When I work around the Wiris Quizzes editor AMD conflict
     */
    public function i_work_around_the_wiris_quizzes_editor_amd_conflict() {
        if (!$this->running_javascript()) {
            return;
        }
        $this->execute_script(self::WIRIS_AMD_GUARD_JS);
    }

    /**
     * Adds a Wiris Quizzes question through the question bank UI.
     *
     * Mirrors Moodle's core `behat_core_question::i_add_a_question_filling_the_form_with()`
     * but installs the Wiris Quizzes AMD guard (see
     * {@see i_work_around_the_wiris_quizzes_editor_amd_conflict()}) right after the
     * edit form is opened and before Moodle sets the TinyMCE "Question text"
     * field. This is required because the core step performs type selection and
     * form filling in a single step, leaving no place to insert the workaround.
     *
     * @When /^I add a "(?P<questiontypename>(?:[^"]|\\")*)" Wiris question filling the form with:$/
     * @param string $questiontypename The question type name as shown in the chooser.
     * @param TableNode $questiondata The data to fill the question type form.
     */
    public function i_add_a_wiris_question_filling_the_form_with($questiontypename, TableNode $questiondata) {
        // Click on create question.
        $this->execute('behat_forms::press_button', get_string('createnewquestion', 'question'));

        // Select the question type and open the edit form (mirrors core finish_adding_question).
        $this->execute('behat_forms::i_set_the_field_to', [$this->escape($questiontypename), 1]);
        $this->execute('behat_general::i_click_on', ['.submitbutton', 'css_element']);

        // Neutralise the Wiris Quizzes editor AMD conflict on the freshly loaded edit form.
        $this->i_work_around_the_wiris_quizzes_editor_amd_conflict();

        // Fill the form and save.
        $this->execute('behat_forms::i_set_the_following_fields_to_these_values', [$questiondata]);
        $this->execute('behat_forms::press_button', 'id_submitbutton');
    }

    /**
     * Adds existing questions from the question bank to a quiz, resolving each
     * question by name but only matching top-level (parent = 0) questions.
     *
     * Mirrors the core "quiz ... contains the following questions:" step but is
     * safe for Wiris Cloze (multianswerwiris) questions. A Cloze stores its
     * embedded sub-questions as separate question records that copy the parent's
     * name and (on Moodle 4.x) carry their own question_bank_entries rows, so the
     * core step — which looks questions up by name with MUST_EXIST — raises a
     * dml_multiple_records_exception there. Filtering on parent = 0 selects the
     * Cloze itself and keeps the behaviour identical for every other qtype.
     *
     * @Given /^quiz "([^"]*)" contains the following Wiris questions:$/
     */
    public function quiz_contains_the_following_wiris_questions($quizname, TableNode $data) {
        global $CFG, $DB;
        require_once($CFG->dirroot . '/mod/quiz/locallib.php');

        $quiz = $DB->get_record('quiz', array('name' => $quizname), '*', MUST_EXIST);

        $lastpage = 0;
        foreach ($data->getHash() as $questiondata) {
            if (!array_key_exists('question', $questiondata) || !array_key_exists('page', $questiondata)) {
                throw new \Exception('When adding questions to a quiz, the "question" and "page" columns are required.');
            }

            // Resolve the question by name, restricting to top-level questions so a
            // Cloze does not collide with its identically named sub-questions.
            $sql = 'SELECT q.id AS id, q.qtype AS qtype, qv.version AS version
                      FROM {question} q
                      JOIN {question_versions} qv ON qv.questionid = q.id
                      JOIN {question_bank_entries} qbe ON qbe.id = qv.questionbankentryid
                     WHERE q.name = :name AND q.parent = 0
                  ORDER BY qv.version DESC';
            $records = $DB->get_records_sql($sql, array('name' => $questiondata['question']));
            if (empty($records)) {
                throw new \Exception('Question "' . $questiondata['question'] .
                    '" not found in the question bank.');
            }
            $question = reset($records);

            $page = clean_param($questiondata['page'], PARAM_INT);
            if ($page < $lastpage || $page > $lastpage + 1) {
                throw new \Exception('Invalid page number "' . $questiondata['page'] .
                    '" for question "' . $questiondata['question'] . '".');
            }
            $lastpage = $page;

            if (!array_key_exists('maxmark', $questiondata) || $questiondata['maxmark'] === '') {
                $maxmark = null;
            } else {
                $maxmark = clean_param($questiondata['maxmark'], PARAM_LOCALISEDFLOAT);
            }

            quiz_add_quiz_question($question->id, $quiz, $page, $maxmark);
        }

        // Keep the quiz grade totals consistent, like the core step does.
        if (class_exists('\\mod_quiz\\quiz_settings')) {
            $quizobj = \mod_quiz\quiz_settings::create($quiz->id);
            if (method_exists($quizobj, 'get_grade_calculator')) {
                $quizobj->get_grade_calculator()->recompute_quiz_sumgrades();
            }
        }
    }

    /**
     * JavaScript guard that swallows only RequireJS "mismatch" errors raised by
     * the Wiris Quizzes UMD bundle and drains any orphaned anonymous define().
     */
    const WIRIS_AMD_GUARD_JS = <<<'JS'
(function() {
    try {
        var r = window.requirejs || window.require;
        if (!r) {
            return;
        }
        // Swallow ONLY RequireJS "Mismatched anonymous define()" errors caused by
        // the Wiris Quizzes editor UMD bundle. Every other error keeps throwing.
        var guard = function(err) {
            if (err && err.requireType === 'mismatch') {
                return;
            }
            throw err;
        };
        if (window.requirejs) {
            window.requirejs.onError = guard;
        }
        if (window.require) {
            window.require.onError = guard;
        }
        // Defensively drop any anonymous define() already queued in the context.
        if (r.s && r.s.contexts && r.s.contexts._) {
            var ctx = r.s.contexts._;
            if (ctx.defQueue && ctx.defQueue.length) {
                ctx.defQueue.length = 0;
            }
            ctx.defQueueMap = {};
        }
    } catch (e) {
        // Never let the guard itself break a scenario.
    }
})();
JS;
}
