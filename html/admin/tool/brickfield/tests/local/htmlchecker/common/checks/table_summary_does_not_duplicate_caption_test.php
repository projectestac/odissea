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
 * tool_brickfield check test.
 *
 * @package    tool_brickfield
 * @copyright  2020 onward: Brickfield Education Labs, https://www.brickfield.ie
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_brickfield\local\htmlchecker\common\checks;

defined('MOODLE_INTERNAL') || die();

require_once('all_checks.php');

/**
 * Class table_summary_does_not_duplicate_caption_test
 */
class table_summary_does_not_duplicate_caption_test extends all_checks {
    /** @var string Check type */
    public $checktype = 'table_summary_does_not_duplicate_caption';

    /** @var string Html fail */
    private $htmlfail = <<<EOD
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Summary attribute and caption element contain the same text - fail</title>
    </head>
    <body>
        <table summary="testing">
            <caption>testing</caption>
        </table>
    </body>
</html>
EOD;

    /** @var string Html pass */
    private $htmlpass = <<<EOD
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Summary attribute and caption element contain different text - pass</title>
    </head>
    <body>
        <table summary="testing a summary">
            <caption>testing a caption</caption>
        </table>
    </body>
</html>
EOD;
    /**
     * Test that caption and summary are equal
     */
    public function test_check_fail() {
        $results = $this->get_checker_results($this->htmlfail);
        $this->assertTrue($results[0]->element->tagName == 'table');
    }

    /**
     * Test that caption and summary are not equal
     */
    public function test_check_pass() {
        $results = $this->get_checker_results($this->htmlpass);
        $this->assertEmpty($results);
    }
}
