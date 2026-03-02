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
 * Tool for deleting question category with question and subcategories.
 *
 * @package    qbank_purgecategory
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbank_purgecategory;

require_once("../../../config.php");
require_once("$CFG->dirroot/question/editlib.php");

use context_course;
use context_module;
use core_question\local\bank\helper as core_question_local_bank_helper;
use core_question\output\qbank_action_menu;
use moodle_url;
use qbank_purgecategory\output\categories;

require_login();
core_question_local_bank_helper::require_plugin_enabled('qbank_purgecategory');

[$thispageurl, $contexts, $cmid, , , $pagevars] = question_edit_setup('categories',
        '/question/bank/purgecategory/category.php');
$courseid = optional_param('courseid', 0, PARAM_INT);

if (!is_null($cmid)) {
    $thiscontext = context_module::instance($cmid)->id;
} else {
    $course = get_course($courseid);
    $thiscontext = context_course::instance($course->id)->id;
}

$url = new moodle_url($thispageurl);
$PAGE->set_url($url);
$PAGE->set_title(get_string('purgecategories', 'qbank_purgecategory'));
$PAGE->set_heading($COURSE->fullname);

echo $OUTPUT->header();
$renderer = $PAGE->get_renderer('core_question', 'bank');
$qbankaction = new qbank_action_menu($thispageurl);
echo $renderer->render($qbankaction);

$questioncategories = new question_categories(
    $thispageurl,
    $contexts->having_cap('qbank/purgecategory:purgecategory'),
    $cmid,
    $courseid,
    $thiscontext,
);
echo $OUTPUT->render(new categories($questioncategories));
echo $OUTPUT->footer();
