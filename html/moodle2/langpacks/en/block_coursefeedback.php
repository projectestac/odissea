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
 * Strings for component 'block_coursefeedback', language 'en', branch 'MOODLE_26_STABLE'
 *
 * @package   block_coursefeedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpage_html_activefeedbacka'] = 'Current survey:';
$string['adminpage_html_activefeedbackb'] = 'Choose a questionnaire. This will be provided for evaluation in block "Course feedback".<br />You can change the available questions under "edit/create survey".';
$string['adminpage_html_allowhidinga'] = 'Allow hiding';
$string['adminpage_html_allowhidingb'] = 'If enabled, teachers can eidt the visibility of the block.';
$string['adminpage_html_defaultlanguagea'] = 'Default language';
$string['adminpage_html_defaultlanguageb'] = 'Questions in the default language will be shown, if other languages fail to load (i.e. if questions in a user-prefered language aren\'t defined). That means you must at least define all questions in the default language!';
$string['adminpage_html_notinstalled'] = '\'{$a}\' (not installed)';
$string['adminpage_html_setstickya'] = 'Stick it';
$string['adminpage_html_setstickyb'] = 'If enabled, an instance of this block, which cannot be deleted by the teachers, appears in each course main page.';
$string['adminpage_link_feedbackedit'] = 'edit/create survey';
$string['caution'] = 'Warning';
$string['copyof'] = 'Copy of "{$a}"';
$string['coursefeedback:addinstance'] = 'Add this block to course site';
$string['coursefeedback:download'] = 'Save result of the current coursefeedback into a file';
$string['coursefeedback:evaluate'] = 'Evaluate current coursefeedback';
$string['coursefeedback:managefeedbacks'] = 'Edit global settings of the coursefeedback block';
$string['coursefeedback:myaddinstance'] = 'Add this block to "My home"  page (since it is useless there, it should be forbidden for everyone)';
$string['coursefeedback:viewanswers'] = 'See the analysis of the current coursefeedback';
$string['download_html_filename'] = 'Results';
$string['download_thead_questions'] = 'Question';
$string['form_area_questiontext'] = 'Edit text';
$string['form_header_confirm'] = 'Confirmation necessary';
$string['form_header_deleteanswers'] = 'Delete user answers';
$string['form_header_deletelang'] = 'Delete language(s)';
$string['form_header_editfeedback'] = 'Edit survey';
$string['form_header_editquestion'] = 'Edit question';
$string['form_header_newfeedback'] = 'New survey';
$string['form_header_newquestion'] = 'New question';
$string['form_header_question'] = 'Question {$a}';
$string['form_html_currentlang'] = 'You are editting {$a}';
$string['form_html_deleteanswerstext'] = 'The questionaire cannot be edited at present, as user answers exist already. You can delete all responses now or copy the feedback.';
$string['form_html_deleteanswerswarning'] = 'This data will be irretrievably lost upo deletion of the user answers. <br/>Please ensure yourself that this data is not required anymore';
$string['form_html_nolangimplemented'] = 'This feedback has no implemented languages.';
$string['form_html_notextendable'] = 'You cannot extend this question, because there are no additional languages available.';
$string['form_select_changepos'] = 'Determine new position';
$string['form_select_confirmyesno'] = 'Do you really want to delete?';
$string['form_select_deleteanswers'] = 'Delete user answers?';
$string['form_select_newlang'] = 'Language';
$string['form_select_unwantedlang'] = 'Choose language <br/><span style="font-size: x-small;">(multiple choise possible)<span>';
$string['form_submit_feedbacksubmit'] = 'Save evaluation';
$string['page_headline_admin'] = 'Course feedback Administration';
$string['page_headline_listoffeedbacks'] = 'List of surveys';
$string['page_headline_listofquestions'] = 'Questionnaire of \'{$a}';
$string['page_html_activated'] = 'Course feedback ({$a}) has been registered as the current survey.';
$string['page_html_answersdeleted'] = 'The user answers have been deleted.';
$string['page_html_editallquestions'] = 'Apply to all languages';
$string['page_html_evalintro'] = 'The course can be evaluated here. Only courses and not the contents of the course can be evaluated. The survey is conducted anonymously and the summary of results are only visible to the appropricate course trainer.';
$string['page_html_evaluated'] = 'You have already evaluated this course.';
$string['page_html_intronotifications'] = 'This feedback has to fullfill the following condition(s):';
$string['page_html_nofeedbackactive'] = 'Surveys have been deactivated.';
$string['page_html_nolinks'] = 'You are not allowed to participate in this feedback.';
$string['page_html_noquestions'] = 'No questions available.';
$string['page_html_norelations'] = 'All questions have to be defined in at least one common language.';
$string['page_html_saveerr'] = 'An error has occurred while saving your evaluation.';
$string['page_html_servedefaultlang'] = 'All questions should be defined in default language.';
$string['page_html_thx'] = 'Many thanks for your course evaluation.';
$string['page_html_viewintro'] = 'Survey analysis. The result shows the number of votes for each grade and the average.';
$string['page_html_viewnavbar'] = 'Analysis of the survey';
$string['page_link_backtoconfig'] = 'Back to website administration';
$string['page_link_backtofeedbackview'] = 'Back to overview';
$string['page_link_deletelanguage'] = 'Delete language(s)';
$string['page_link_download'] = 'Save results as {$a}-file';
$string['page_link_evaluate'] = 'Evaluate course';
$string['page_link_newlanguage'] = 'Add different language';
$string['page_link_newquestion'] = 'Add new question';
$string['page_link_newtemplate'] = 'Create new survey';
$string['page_link_noquestion'] = 'No questions available - create a new question.';
$string['page_link_settings'] = 'Adminstration';
$string['page_link_showlistofquestions'] = 'Edit questions';
$string['page_link_use'] = 'Use';
$string['page_link_view'] = 'Analysis';
$string['perm_header_editnotpermitted'] = 'The survey can not be changed due to the following reasons:';
$string['perm_html_answersexists'] = 'This feedback has already been completed by users.';
$string['perm_html_danswerslink'] = 'To create a new survey with the same questions, you can <a href="admin.php?fid={$a}&mode=feedback&action=new">copy the feedback</a> or <a href="admin.php?fid={$a}&mode=feedback&action=danswers">delete the user answers</a>.';
$string['perm_html_duplicatelink'] = 'To create a new survey with the same questions, you can <a href="admin.php?fid={$a}&mode=feedback&action=new">copy the survey</a> or register another questionnaire as the current survey.';
$string['perm_html_erroractive'] = 'You can not change the current survey.';
$string['pluginname'] = 'Course feedback';
$string['table_header_abstain'] = 'No rating';
$string['table_header_bad'] = 'Poor';
$string['table_header_good'] = 'Very good';
$string['table_header_languages'] = 'Available languages';
$string['table_header_questions'] = 'Questions';
$string['table_html_abstain'] = 'Abstain';
$string['table_html_average'] = 'Average';
$string['table_html_nofeedback'] = 'No survey';
$string['table_html_undefinedlang'] = 'Translation missing. Language \'{$a}\' unavailable.';
$string['table_html_votes'] = 'Number of votes :';
$string['untitled'] = 'Untitled';
