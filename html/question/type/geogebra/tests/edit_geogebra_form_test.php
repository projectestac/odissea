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

namespace qtype_geogebra;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/engine/tests/helpers.php');
require_once($CFG->dirroot . '/question/type/edit_question_form.php');
require_once($CFG->dirroot . '/question/type/geogebra/edit_geogebra_form.php');

/**
 * Tests for the GeoGebra question editing form.
 *
 * @package    qtype_geogebra
 * @copyright  2026 ISB Bayern
 * @author     Dr. Peter Mayer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \qtype_geogebra_edit_form
 */
final class edit_geogebra_form_test extends \advanced_testcase {
    #[\PHPUnit\Framework\Attributes\Group('baseline')]
    /**
     * Applet parameters from the reload request must not break out of the attribute.
     */
    public function test_reload_parameters_cannot_inject_attributes(): void {
        $article = $this->render_applet_article('x onmouseover=alert(1)');

        $this->assertFalse($article->hasAttribute('onmouseover'));
        $this->assertSame('x onmouseover=alert(1)', $article->getAttribute('data-parameters'));
    }

    #[\PHPUnit\Framework\Attributes\Group('baseline')]
    /**
     * Regular JSON applet parameters are still passed to the applet unchanged.
     */
    public function test_reload_json_parameters_are_kept(): void {
        $article = $this->render_applet_article('{"width":800,"height":600}');

        $this->assertSame('{"width":800,"height":600}', $article->getAttribute('data-parameters'));
        $this->assertSame('{"is3D":0}', $article->getAttribute('data-views'));
        $this->assertSame('5.0', $article->getAttribute('data-codebase'));
    }

    /**
     * Render the editing form as it is built for a reload request and return the applet element.
     *
     * @param string $parameters Value of the ggbparameters request parameter
     * @return \DOMElement The applet parameters element
     */
    private function render_applet_article(string $parameters): \DOMElement {
        global $PAGE;
        $this->resetAfterTest();
        $this->setAdminUser();
        $PAGE->set_context(\context_system::instance());
        $PAGE->set_url('/question/bank/editquestion/question.php');

        $category = $this->getDataGenerator()->get_plugin_generator('core_question')->create_question_category();
        $questiondata = \test_question_maker::get_question_data('geogebra');
        unset($questiondata->id);

        $_GET['reload'] = 1;
        $_GET['ggbparameters'] = $parameters;
        $_GET['ggbviews'] = '{"is3D":0}';
        $_GET['ggbcodebaseversion'] = '5.0';

        $html = \question_test_helper::get_question_editing_form($category, $questiondata)->render();

        $dom = new \DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8"?>' . $html);
        $article = $dom->getElementById('applet_parameters');
        $this->assertNotNull($article);
        return $article;
    }
}
