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
 * GeoGebra question
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die ();
global $CFG;
require_once($CFG->dirroot . '/question/type/calculated/question.php');
require_once($CFG->dirroot . '/question/type/calculated/questiontype.php');

/**
 * Class qtype_geogebra_question
 */
class qtype_geogebra_question extends question_graded_automatically {

    /** @var question_answer[] */
    public $answers;

    public $ggbturl;
    public $ggbparameters;
    public $ggbviews;
    public $ggbcodebaseversion;
    public $ggbxml;
    public $israndomized;
    public $isexercise;
    public $randomizedvar;
    public $constraints;
    public $forcedimensions;
    public $width;
    public $height;

    public $currentvals = array();

    /** @var qtype_calculated_variable_substituter stores the dataset we are using. */
    public $vs;

    /**
     * If question->$answer is empty we have to manually grade the question, else we can use the preferred behaviour of the quiz
     *
     * @param question_attempt $qa                 the attempt we are creating a behaviour for.
     * @param string           $preferredbehaviour the requested type of behaviour.
     * @return question_behaviour the new behaviour object.
     */
    public function make_behaviour(question_attempt $qa, $preferredbehaviour) {
        if (empty($this->answers) && !$this->isexercise) {
            return question_engine::make_behaviour('manualgraded', $qa, $preferredbehaviour);
        }
        return parent::make_behaviour($qa, $preferredbehaviour);
    }

    /**
     * The variables will be randomized here
     * Substitution of variables in question text will also done here
     *
     * @param question_attempt_step $step
     * @param                       $variant
     */
    public function start_attempt(question_attempt_step $step, $variant) {
        if ($this->israndomized) {
            $vars = qtype_geogebra_question_helper::get_variables_with_minmaxstep($this->randomizedvar, $this->ggbxml);
            $inequalities = array();
            if (!empty($this->constraints)) {
                foreach (explode(',', $this->constraints) as $inequalitystring) {
                    preg_match('/^([a-z,_,0-9]+)(<=|<|>=|>)([a-z,_,0-9]+)$/i', $inequalitystring, $inequalities[]);
                }
            }
            qtype_geogebra_question_helper::randomize_vars($vars, $inequalities);
            foreach ($vars as $label => $var) {
                $this->currentvals[$label] = $var['val'];
            }
            $this->vs = new qtype_calculated_variable_substituter($this->currentvals, get_string('decsep', 'langconfig'));
            $this->calculate_all_expressions();
            foreach ($this->currentvals as $label => $value) {
                $step->set_qt_var('_var_' . $label, $value);
            }
        }
    }

    /**
     * Need to fetch all randomized vars to restore the previous attempt state
     *
     * @see question_definition::apply_attempt_state
     *
     * @param question_attempt_step $step
     */
    public function apply_attempt_state(question_attempt_step $step) {
        if ($this->israndomized) {
            $vars = explode(',', $this->randomizedvar);
            // phpcs:disable
            // Probably better: $step->get_qt_data() as $name => $value (see calculated).
            // phpcs:enable
            foreach ($vars as $label) {
                if (!empty($label)) {
                    $this->currentvals[$label] = (float)$step->get_qt_var('_var_' . $label);
                }
            }
            $this->vs = new qtype_calculated_variable_substituter($this->currentvals, get_string('decsep', 'langconfig'));
            $this->calculate_all_expressions();
        }
    }

    public function calculate_all_expressions() {
        $this->questiontext = $this->vs->replace_expressions_in_text($this->questiontext);
        $this->generalfeedback = $this->vs->replace_expressions_in_text($this->generalfeedback);

        foreach ($this->answers as $ans) {
            $ans->feedback = $this->vs->replace_expressions_in_text($ans->feedback, null, null);
        }
    }

    /**
     * @inheritdoc
     */
    public function get_expected_data() {
        $expected = array();
        $expected['answer'] = PARAM_RAW;
        $expected['ggbbase64'] = PARAM_RAW;
        $expected['ggbxml'] = PARAM_RAW;
        $expected['exerciseresult'] = PARAM_RAW;
        return $expected;
    }

    /**
     * @see question_graded_automatically::get_correct_response
     *
     * @return null while we have no strategy for generating the answer
     */
    public function get_correct_response() {
        // Not sure if we could compute a correct answer.
        return null;
    }

    /**
     * Used by many of the behaviours, to work out whether the student's
     * response to the question is complete. That is, whether the question attempt
     * should move to the COMPLETE or INCOMPLETE state.
     *
     * @param array $response responses, as returned by
     *                        {@see question_attempt_step::get_qt_data()}.
     * @return bool whether this response is a complete answer to this question.
     */
    public function is_complete_response(array $response) {
        $ret = array_key_exists('ggbbase64', $response) && ($response['ggbbase64']);
        $ret = $ret && array_key_exists('ggbxml', $response) && ($response['ggbxml']);
        if (!empty($this->answers)) {
            $ret = $ret && array_key_exists('answer', $response) && ($response['answer'] || $response['answer'] === '0');
            $ret = $ret && (preg_replace("/[^0,1]/", "", $response['answer']) == $response['answer']);
        }
        if ($this->isexercise) {
            $ret = $ret && array_key_exists('exerciseresult', $response) && ($response['exerciseresult']);
        }
        return $ret;
    }

    /**
     * Use by many of the behaviours to determine whether the student's
     * response has changed. This is normally used to determine that a new set
     * of responses can safely be discarded.
     *
     * @param array $prevresponse the responses previously recorded for this question,
     *                            as returned by {@see question_attempt_step::get_qt_data()}
     * @param array $newresponse  the new responses, in the same format.
     * @return bool whether the two sets of responses are the same - that is
     *                            whether the new set of responses can safely be discarded.
     */
    public function is_same_response(array $prevresponse, array $newresponse) {
        $ret = question_utils::arrays_same_at_key_missing_is_blank($prevresponse, $newresponse, 'answer');
        // The base64 string does not seem to be equal every time you load the applet so using xml
        // Some values in euclidianview -> coordsystem are also not equal on each submit
        // I think we should only use construction from the xml.
        $prevxml = '';
        if (isset($prevresponse['ggbxml'])) {
            $prevxml = simplexml_load_string($prevresponse['ggbxml']);
        }
        $newxml = '';
        if (isset($newresponse['ggbxml'])) {
            $newxml = simplexml_load_string($newresponse['ggbxml']);
        }
        if (!empty($newxml) && empty($prevxml)) {
            $ret = false;
        } else {
            if (!empty($newxml)) {
                $ret = $ret && ($prevxml->construction->asXML() == $newxml->construction->asXML());
            }
        }

        if ($this->isexercise) {
            $ret = $ret && question_utils::arrays_same_at_key_missing_is_blank($prevresponse, $newresponse, 'exerciseresult');
        }

        return $ret;
    }

    /**
     * Calls {@see is_complete_response} and returns its result
     *
     * @param array $response
     * @return bool
     */
    public function is_gradable_response(array $response) {
        $ret = $this->is_complete_response($response);
        return $ret;
    }

    /**
     * Produce a plain text summary of a response.
     *
     * @param array $response    a response, as might be passed to {@see grade_response()}
     *                           .
     * @return string a plain text summary of that response, that could be used in reports.
     */
    public function summarise_response(array $response) {
        global $CFG;
        if (empty($this->answers) && !$this->isexercise) {
            return "Response graded manually";
        } else {
            if ((int)$CFG->branch < 311) {
                // Pre-3.11 string.
                $gradestr = get_string('grade', 'grades');
            } else {
                // New string for "Grade", see MDL-71941.
                $gradestr = get_string('gradenoun');
            }
            $resp = $response['answer'];
            if ($resp === '' && !$this->isexercise) {
                return get_string('noresponse', 'question');
            } else {
                if (!$this->isexercise) {
                    $j = 0;
                    $fraction = 0;
                    $summary = '';
                    foreach ($this->answers as $answer) {
                        $correct = (bool)substr($resp, $j, 1);
                        if ($summary !== '') {
                            $summary .= ', ';
                        }
                        $summary .= $answer->answer . '=';
                        if ($correct) {
                            $fraction += $answer->fraction;
                            $summary .= 'true' . ', ' . $gradestr . ': ' .
                                    format_float($answer->fraction, 2, false, false);
                        } else {
                            $summary .= 'false' . ', ' . $gradestr . ': 0';
                        }
                        $j++;
                    }
                    if ($fraction > 1) {
                        $fraction = 1;
                    }

                    $summary .= '; ' . get_string('total', 'grades') . ': ' . $fraction;
                    return $summary;
                } else {
                    $result = json_decode($response['exerciseresult'], true);
                    $summary = '';
                    foreach ($result as $key => $res) {
                        if (is_array($res)) {
                            $summary .= $key . '=' . $res['result'] . ': ' .
                                    format_float($res['fraction'], 2, false, false);;
                        } else {
                            $summary .= '; ' . get_string('total', 'grades') . ': ' . $res;
                        }
                    }
                }
            }
        }
    }

    /**
     * In situations where is_gradable_response() returns false, this method
     * should generate a description of what the problem is.
     *
     * @param array $response
     * @return string the message.
     */
    public function get_validation_error(array $response) {
        if (!(array_key_exists('ggbbase64', $response) && ($response['ggbbase64']))) {
            return get_string('ggbfilemissing', 'qtype_geogebra');
        }
        if (!(array_key_exists('ggbxml', $response) && ($response['ggbxml']))) {
            return get_string('ggbxmlmissing', 'qtype_geogebra');
        }
        if (!empty($this->answers) &&
                !(array_key_exists('answer', $response) && ($response['answer'] || $response['answer'] === '0'))
        ) {
            return get_string('answermissing', 'qtype_geogebra');
        }
        if (!(preg_replace("/[^0,1]/", "", $response['answer']) == $response['answer'])) {
            return get_string('answerinvalid', 'qtype_geogebra');
        }
        if ($this->isexercise && !(array_key_exists('exerciseresult', $response))) {
            return get_string('exerciseresultmissing', 'qtype_geogebra');
        }
        return '';
    }

    // TODO not correct anymore for automatically checked exercises.
    /**
     * Categorise the student's response according to the categories defined by
     * get_possible_responses.
     *
     * @param array $response    a response, as might be passed to {@see grade_response()}
     *                           .
     * @return array subpartid => {@see question_classified_response} objects.
     *                           returns an empty array if no analysis is possible.
     */
    public function classify_response(array $response) {
        if (empty($this->answers)) {
            return array($this->id => new question_classified_response(null, "Response graded manually", 0));
        } else {
            $resp = $response['answer'];
            if ($resp === '') {
                return array($this->id => question_classified_response::no_response());
            } else {
                $j = 0;
                $fraction = 0;
                $responseclass = '';
                foreach ($this->answers as $answer) {
                    $correct = (bool)substr($resp, $j, 1);
                    if ($responseclass !== '') {
                        $responseclass .= ', ';
                    }
                    $responseclass .= $answer->answer . '=';
                    if ($correct) {
                        $fraction += $answer->fraction;
                        $responseclass .= 'true';
                    } else {
                        $responseclass .= 'false';
                    }
                    $j++;
                }
                if ($fraction > 1) {
                    $fraction = 1;
                }
                return array($this->id => new question_classified_response(bindec($resp), $responseclass, $fraction));
            }
        }
    }

    /**
     * Grade a response to the question, returning a fraction between
     * get_min_fraction() and get_max_fraction(), and the corresponding {@see question_state}
     * right, partial or wrong.
     *
     * @param array $response responses, as returned by
     *                        {@see question_attempt_step::get_qt_data()}.
     * @return array (float, integer) the fraction, and the state.
     */
    public function grade_response(array $response) {
        $fraction = 0;
        if (empty($this->answers) && !$this->isexercise) {
            return array($fraction, question_state::$needsgrading);
        } else {
            if (!$this->isexercise) {
                $i = 0;
                foreach ($this->answers as $answer) {
                    if ((bool)substr($response['answer'], $i, 1)) {
                        $fraction += $answer->fraction;
                    }
                    $i++;
                }
                if ($fraction > 1) {
                    $fraction = 1;
                }
            } else {
                $exerciseresult = json_decode($response['exerciseresult']);
                $fraction = $this->calculate_exercise_fraction($exerciseresult);
            }
            return array($fraction, question_state::graded_state_for_fraction($fraction));
        }
    }

    /**
     * The overall fraction of the Exercise
     *
     * If one Assignment has 100%, the overall fraction will be 1 minus the sum
     * of the fractions of the Assignments having negative Fractions.<br>
     * Otherwise the overall fraction will be the sum of all positive fractions
     * capped at 1 minus all negative fractions and then capped at 0.
     *
     * @param stdClass $exerciseresult
     * @return int the sum of fractions for all assignments
     */
    private function calculate_exercise_fraction(stdClass $exerciseresult) {
        $fractionsumplus = 0;
        $fractionsumminus = 0;
        $singlecorrectignoreothers = false;
        foreach ($exerciseresult as $assignment) {
            if ($assignment->fraction >= 0) {
                if (0.999 < $assignment->fraction) {
                    $singlecorrectignoreothers = true;
                }
                $fractionsumplus += $assignment->fraction;
            } else {
                $fractionsumminus += $assignment->fraction;
            }
        }
        if ($singlecorrectignoreothers || $fractionsumplus >= 0.999) {
            $fraction = 1;
        } else {
            $fraction = $fractionsumplus;
        }
        $fraction += $fractionsumminus;
        return $fraction < 0.001 ? 0 : $fraction;
    }
}

/**
 * Helper class for geogebra questions with randomized variables and constraints
 */
class qtype_geogebra_question_helper {

    /**
     * Checks if inequality is syntactically correct (i.e.: of the form a<b,a<=b,a>b,a>=b)
     *
     * @param string $inequality
     * @return bool true if the $inequality is syntactically valid
     */
    public static function is_valid_inequality($inequality) {
        $ret = preg_match('/^([a-z,_,0-9]+)(<=|<|>=|>)([a-z,_,0-9]+)$/i', $inequality);
        return (bool)$ret; // Will return false if not valid or preg_match error.
    }

    /**
     * Checks if vars in inequality is part of randomizedvars
     *
     * @param string $inequality    valid inequality
     *                              check first with {@see is_valid_inequality}
     * @param string $randomizedvar comma separated list of variables to be randomized
     * @return bool true if all variables in the $inequality are part of the randomizedvars, false otherwise
     */
    public static function is_valid_inequality_for_randomizedvars($inequality, $randomizedvar) {
        $ret = false;
        if (preg_match('/^([a-z,_,0-9]+)(<=|<|>=|>)([a-z,_,0-9]+)$/i', $inequality, $matches)) {
            $ret = strpos($randomizedvar, $matches[1]) > -1 && strpos($randomizedvar, $matches[3]) > -1;
        }
        return $ret;
    }

    /**
     * Given the inequality is valid for the question, we check if the inequalities aren't contradictory
     * to the sliders min and max values.
     *
     * @param string $inequality    valid inequality for this question,
     *                              check first with {@see is_valid_inequality_for_randomizedvars}
     * @param string $randomizedvar comma separated list of variables to be randomized
     * @param string $ggbxml        the ggbxml of the question applet
     * @return bool true if everything is ok
     */
    public static function is_valid_inequality_for_slider_minmax($inequality, $randomizedvar, $ggbxml) {
        $ret = false;
        if (preg_match('/^([a-z,_,0-9]+)(<=|<|>=|>)([a-z,_,0-9]+)$/i', $inequality, $matches)) {
            $vars = self::get_variables_with_minmaxstep($randomizedvar, $ggbxml);
            $op = $matches[2];
            if (isset($vars[$matches[1]]) && isset($vars[$matches[3]])) {
                if ($op == '<') {
                    $ret = $vars[$matches[1]]['min'] < $vars[$matches[3]]['max'];
                }
                if ($op == '<=') {
                    $ret = $vars[$matches[1]]['min'] <= $vars[$matches[3]]['max'];
                }
                if ($op == '>') {
                    $ret = $vars[$matches[1]]['max'] > $vars[$matches[3]]['min'];
                }
                if ($op == '>=') {
                    $ret = $vars[$matches[1]]['max'] >= $vars[$matches[3]]['min'];
                }
            }
        }
        return $ret;
    }

    /**
     * Extract the min, max and step for the variables used from the xml.
     *
     * @param string $randomizedvar comma separated list of variables to be randomized
     * @param string $ggbxml        the ggbxml of the question applet
     * @return array A two dimensional array indexed by the label of the var containing an array with min, max and step.
     */
    public static function get_variables_with_minmaxstep($randomizedvar, $ggbxml) {
        $vars = explode(',', $randomizedvar);
        $varswithminmaxstep = array();
        $xml = simplexml_load_string($ggbxml);
        foreach ($xml->construction->element as $elem) {
            foreach ($vars as $label) {
                if ($label == $elem['label']) {
                    $varswithminmaxstep[$label] = array('min'       => (float)$elem->slider['min'],
                                                        'max'       => (float)$elem->slider['max'],
                                                        'increment' => (float)$elem->animation['step']);
                }
            }
        }
        return $varswithminmaxstep;
    }

    /**
     * Checks if two numbers meet an inequality
     *
     * @param string    $op the operator of the form &lt;, &lt;=, >=, >
     * @param int|float $x  the value of the first variable in the inequality
     * @param int|float $y  the value of the second variable in the inequality
     *
     * @return bool $a $op $b
     */
    public static function check_inequality($op, $x, $y) {
        $ret = false;
        // Doing 4 strpos(...) is just 2% faster ...
        // ... avoiding eval and create_function -> too slow.
        switch ($op) {
            case '<':
                $ret = $x < $y;
                break;
            case '<=':
                $ret = $x <= $y;
                break;
            case '>':
                $ret = $x > $y;
                break;
            case '>=':
                $ret = $x >= $y;
                break;
        }
        return $ret;
    }

    /**
     * Randomize all variables in the question given the constraints.
     *
     * Used by {@see \qtype_geogebra_edit_form::validation} on creating a question with timelimit 1,
     * if it doesn't find a inequality in 1 second it returns a stdClass with information on the number of tries ($a->tries).
     *
     * Used by {@see \qtype_geogebra_edit_form::start_attempt} with no timelimit
     *
     * @param array $vars         as returned by {@see \qtype_geogebra_question_helper::get_variables}
     * @param array $inequalities valid inequalities for this question,
     *                            check first with {@see is_valid_inequality_for_randomizedvars}
     * @param float $timelimit    Maximum time allowed for creation. Default: INF
     * @return stdClass with fields time and tries
     */
    public static function randomize_vars(array &$vars, array $inequalities, $timelimit = INF) {
        self::set_random_values($vars);
        // This is probably not the most elegant way to find the correct values for vars with given constraints.
        // Feel free to come up with better math.
        if (count($inequalities) > 0) {
            $i = 0;
            $combinationfound = false;
            $time = -microtime(true);
            while (!$combinationfound && ($time + microtime(true) < $timelimit)) {
                foreach ($inequalities as $inequality) {
                    $combinationfound = self::check_inequality($inequality[2],
                            $vars[$inequality[1]]['val'],
                            $vars[$inequality[3]]['val']);
                    if (!$combinationfound) {
                        self::set_random_values($vars);
                        break; // Stop as soon as the first relation is wrong, speeds up things about twice.
                    }
                }
                $i++;
            }
            if (!$combinationfound) {
                $a = new stdClass();
                $a->time = $time + microtime(true);
                $a->tries = $i;
                return $a;
            }
        }
        return null;
    }

    /**
     * Used by set {@see set_random_values} for calculating random values valid for the slider definition
     *
     * @param int|float $min       Min value
     * @param int|float $max       Max value
     * @param int|float $increment Step size
     * @return int|float Random number in the set {x| $min &lt;= x &lt;= $max, x = $min + n * $increment, n &isin; N}
     */
    public static function random_incremented_value($min, $max, $increment) {
        return $min + mt_rand(0, intval(($max - $min) / $increment)) * $increment;
    }

    /**
     * Sets all variables to a random incremented value
     *
     * @param array $vars as returned by {@see \qtype_geogebra_question_helper::get_variables} as reference
     */
    private static function set_random_values(array &$vars) {
        foreach ($vars as &$var) {
            $var['val'] = self::random_incremented_value($var['min'],
                    $var['max'], $var['increment']);
        }
    }
}
