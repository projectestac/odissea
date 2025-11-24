<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'quiz_overview', language 'en', version '4.5'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Show all attempts';
$string['allattemptscontributetograde'] = 'All attempts contribute to final grade for user.';
$string['allstudents'] = 'Show all {$a}';
$string['attemptsonly'] = 'Show {$a} with attempts only';
$string['attemptsprepage'] = 'Attempts shown per page';
$string['deleteselected'] = 'Delete selected attempts';
$string['done'] = 'Done';
$string['err_failedtodeleteregrades'] = 'Failed to delete calculated attempt grades';
$string['err_failedtorecalculateattemptgrades'] = 'Failed to recalculate attempt grades';
$string['highlightinggraded'] = 'The user attempt that contributes to final grade is highlighted.';
$string['needed'] = 'Needed';
$string['noattemptsonly'] = 'Show / download {$a} with no attempts only';
$string['noattemptstoregrade'] = 'No attempts need regrading';
$string['nogradepermission'] = 'You don\'t have permission to grade this quiz.';
$string['onlyoneattemptallowed'] = 'Only one attempt per user allowed on this quiz.';
$string['optallattempts'] = 'all attempts';
$string['optallstudents'] = 'all {$a} who have or have not attempted the quiz';
$string['optattemptsonly'] = '{$a} who have attempted the quiz';
$string['optnoattemptsonly'] = '{$a} who have not attempted the quiz';
$string['optonlyregradedattempts'] = 'that have been regraded / are marked as needing regrading';
$string['overview'] = 'Grades';
$string['overviewdownload'] = 'Overview download';
$string['overviewfilename'] = 'grades';
$string['overviewreport'] = 'Grades report';
$string['overviewreportgraph'] = 'Overall number of students achieving grade ranges';
$string['overviewreportgraphgroup'] = 'Number of students in group \'{$a}\' achieving grade ranges';
$string['pagesize'] = 'Page size';
$string['pluginname'] = 'Grades';
$string['preferencespage'] = 'Preferences just for this page';
$string['preferencessave'] = 'Show report';
$string['preferencesuser'] = 'Your preferences for this report';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Whether to show marks for each question slot.';
$string['privacy:preference:slotmarks:no'] = 'Marks are not shown alongside the question slot.';
$string['privacy:preference:slotmarks:yes'] = 'Marks are shown alongside the question slot.';
$string['regrade'] = 'Regrade';
$string['regrade_allattempts'] = 'All attempts';
$string['regrade_allquestions'] = 'All questions';
$string['regrade_attempts'] = 'Regrade attempts...';
$string['regrade_commitregrade'] = 'Commit regrade';
$string['regrade_dryrun'] = 'Dry run';
$string['regrade_help'] = 'Regrading recalculates the automated grading of attempts, using the current version of each question if possible. A dry run allows you to preview the grade changes without affecting attempts.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'The last dry run of a regrade found that the regrade would change the marks for {$a->questions} questions in {$a->attempts} attempts.';
$string['regrade_regradenow'] = 'Regrade now';
$string['regrade_selectedattempts'] = 'Selected attempts';
$string['regrade_selectedquestions'] = 'Selected questions';
$string['regradeall'] = 'Regrade all';
$string['regradealldry'] = 'Dry run a full regrade';
$string['regradealldrydo'] = 'Regrade attempts marked as needing regrading ({$a})';
$string['regradealldrydogroup'] = 'Regrade attempts ({$a->countregradeneeded}) marked as needing regrading in group \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Dry run a full regrade for group \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Full regrade for group \'{$a->groupname}\'';
$string['regradecomplete'] = 'Regrade completed';
$string['regradedsuccessfullyxofy'] = 'Finished regrading ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Regrading';
$string['regradeselected'] = 'Regrade selected attempts';
$string['regradingattemptissue'] = 'Slot {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Regrading attempt ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'The following questions could not be regraded in attempt {$a->attemptnum} by {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Regrading attempt ({$a->done}/{$a->count}) - Attempt {$a->attemptnum} by {$a->name} (id {$a->attemptid})';
$string['show'] = 'Show / download';
$string['showattempts'] = 'Only show / download attempts';
$string['showdetailedmarks'] = 'Marks for each question';
$string['showinggraded'] = 'Showing only the attempt graded for each user.';
$string['showinggradedandungraded'] = 'Showing graded and ungraded attempts for each user. The one attempt for each user that is graded is highlighted. The grading method for this quiz is {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' in group \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' in this group';
