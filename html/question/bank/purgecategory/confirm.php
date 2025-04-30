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
require_once($CFG->dirroot . '/question/editlib.php');

use context;
use core_question\local\bank\helper as core_question_local_bank_helper;
use moodle_url;

require_login();
core_question_local_bank_helper::require_plugin_enabled('qbank_purgecategory');

$categoryid = required_param('purge', PARAM_INT);

$category = $DB->get_record('question_categories', ['id' => $categoryid], '*', MUST_EXIST);
$context = context::instance_by_id($category->contextid);
require_capability('qbank/purgecategory:purgecategory', $context);

$pageparams = [];
$pageparams['cmid'] = optional_param('cmid', null, PARAM_INT);
$pageparams['courseid'] = optional_param('courseid', null, PARAM_INT);

if ($pageparams['cmid']) {
    [$module, $cm] = get_module_from_cmid($pageparams['cmid']);
    $PAGE->set_cm($cm);
} else if ($pageparams['courseid']) {
    $course = get_course($pageparams['courseid']);
    $PAGE->set_course($course);
} else {
    $PAGE->set_context($context);
}

$pageparams = array_filter($pageparams);

$PAGE->set_pagelayout('admin');
$url = new moodle_url('/question/bank/purgecategory/category.php', $pageparams);
$PAGE->set_url($url);
$PAGE->set_title(get_string('confirmpurge', 'qbank_purgecategory'));
$PAGE->set_heading($COURSE->fullname);

$qcobject = new question_category_object(0, $url, [], 0, $categoryid, 0, []);

$category->subcategories = helper::get_subcategories_count($category->id);
$category->totalquestions = helper::get_questions_count($category->id);
$category->usedquestions = helper::get_used_questions_count($category->id);
$category->unusedquestions = $category->totalquestions - $category->usedquestions;

$url = new moodle_url('/question/bank/purgecategory/confirm.php');
$mform = new confirm_form($url, ['category' => $category]);

if ($mform->is_cancelled()) {
    redirect(new moodle_url('/question/bank/purgecategory/category.php', $pageparams));
} else if ($data = $mform->get_data()) {
    require_sesskey();
    if (isset($data->confirm)) {
        if ($category->usedquestions != 0) {
            $categoryparts = explode(',', $data->newcategory);
            $qcobject->move_and_purge_category($category->id, $categoryparts[0]);
        } else {
            $qcobject->purge_category($category->id);
        }
    }
    redirect(new moodle_url('/question/bank/purgecategory/category.php', $pageparams));
}
echo $OUTPUT->header();
$mform->display();
echo $OUTPUT->footer();
