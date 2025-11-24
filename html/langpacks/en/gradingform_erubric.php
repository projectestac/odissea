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
 * Strings for component 'gradingform_erubric', language 'en', version '4.5'.
 *
 * @package     gradingform_erubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Add criterion';
$string['addnew'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add (+)';
$string['alwaysshowdefinition'] = 'Allow users to preview rubric (otherwise it will only be displayed after grading)';
$string['backtoediting'] = 'Back to editing';
$string['benchmarkfinal'] = 'Student final benchmark result';
$string['benchmarkinfo'] = 'Results from Learning Analytics';
$string['benchmarkinfonull'] = 'No results from Learning Analytics';
$string['collaborationempty'] = 'Collaboration Type';
$string['collaborationochoice'] = 'You must choose collaboration type before adding modules!';
$string['collaborationtype'] = 'Type:';
$string['collaborationtypeentries'] = 'posts & talks';
$string['collaborationtypefileadds'] = 'file submissions';
$string['collaborationtypeinteractions'] = 'people interacted';
$string['collaborationtypereplies'] = 'forum replies';
$string['confirmchangecriteriontype'] = 'Are you sure you want to change the criterion type? Current criterion course modules will be reset.';
$string['confirmdeleteactivity'] = 'Are you sure you want to delete this activity?';
$string['confirmdeleteassignment'] = 'Are you sure you want to delete this assignment?';
$string['confirmdeletecriterion'] = 'Are you sure you want to delete this criterion?';
$string['confirmdeletelevel'] = 'Are you sure you want to delete this level?';
$string['confirmdeleteresource'] = 'Are you sure you want to delete this resource?';
$string['coursemoduleempty'] = 'Add Course Module';
$string['coursemoduleis'] = 'In:';
$string['criterion'] = 'Criterion {$a}';
$string['criterionaddlevel'] = 'Add level';
$string['criteriondelete'] = 'Delete criterion';
$string['criterionduplicate'] = 'Duplicate criterion';
$string['criterionempty'] = 'Click to edit criterion';
$string['criterionmovedown'] = 'Move down';
$string['criterionmoveup'] = 'Move up';
$string['criterionoperatorequals'] = 'equal (=)';
$string['criterionoperatormorethan'] = 'more than (>=)';
$string['criterionremark'] = 'Remark for criterion {$a->description}: {$a->remark}';
$string['defineenrichedrubric'] = 'Define LA e-rubric';
$string['deleteactivity'] = 'Delete activity';
$string['deleteassignment'] = 'Delete assignment';
$string['deleteresource'] = 'Delete resource';
$string['description'] = 'Description';
$string['enableremarks'] = 'Allow grader to add text remarks for each criterion';
$string['enrichedrubricinfo'] = 'Rubric criteria enrichment rules';
$string['enrichedrubricinfoexplained'] = 'All enriched criteria will be calculated automatically and level selection will be carried out by the system.
                                            When that happens the evaluator can’t change the selection.<br />
                                            In case of an enrichment criteria logical error, no level will be selected by the system,
                                            thus specific criterion score will not be included in the grade and
                                            only if override is enabled the evaluator can make his own choice.<br />';
$string['enrichedvalueempty'] = 'Add value';
$string['enrichedvaluesuffixfiles'] = 'files';
$string['enrichedvaluesuffixnothing'] = '<font color="red"><b>!!!</b></font>';
$string['enrichedvaluesuffixpercent'] = 'percent';
$string['enrichedvaluesuffixpoints'] = '%points';
$string['enrichedvaluesuffixstudents'] = 'people';
$string['enrichedvaluesuffixtimes'] = 'times';
$string['enrichment'] = 'Enrichment';
$string['enrichment_help'] = 'Watch the following tutorial on how to Create Criteria in Learning Analytics Enriched Rubric:
    <br /><br />
    <a target="_blank" href="https://www.youtube.com/watch?v=jCuNm463yTU">Create Criteria in Learning Analytics Enriched Rubric</a><br /><br />';
$string['enrichmentoptions'] = 'Enriched criteria options';
$string['enrichshareconfirm'] = '<p style="text-align:center;color:red;font-weight:bold">WARNING!</p>
    <b>Learning Analytics Enriched Rubric</b> plugin can be used as an advanced grading form template, ONLY FOR THE PRESENT COURSE!
    If other users at your site use this form in any other course, <b>it will not work as is</b>! The rubric\'s main structure will remain intact,
    but you will have to replace all embedded course modules with similar modules from the destination course.';
$string['err_attention'] = '<p style="text-align:center;color:red;font-weight:bold">ATTENTION!</p>';
$string['err_collaborationhoice'] = 'Chat modules can not be chosen to check file submissions or forum replies.';
$string['err_collaborationtypeneedless'] = 'Type field should be selected only for collaboration check.';
$string['err_criterionmethod'] = 'You must choose the numerical reference for the enriched criterion.';
$string['err_criteriontypeid'] = 'You must choose an operator for the enriched criterion.';
$string['err_enrichedcriterionmissing'] = 'All enrichment criteria must be selected, or none.';
$string['err_enrichedmoduleselection'] = 'Selected course modules must be of the same enriched criterion type.';
$string['err_enrichedvalueformat'] = 'Number of check values for each enriched level must be a valid non-negative integer number.';
$string['err_enrichedvaluemissing'] = 'Enriched criteria, must have check values on all levels.';
$string['err_mintwolevels'] = 'Each criterion must have at least two levels.';
$string['err_missingcoursemodule'] = 'Missing module!';
$string['err_missingcoursemodules'] = '<p style="text-align:center;color:red;font-weight:bold">WARNING!</p>
    At least one course module is missing from the criteria!
    Maybe the course module was deleted or this grading form was imported from another course or backup or shared form.
    Edit the current form in order to re-enrich (or not) these criteria. Otherwise <b>student evaluation may not be possible</b>!';
$string['err_missingcoursemodulesedit'] = '<p style="text-align:center;color:red;font-weight:bold">WARNING!</p>
    At least one course module is missing from the criteria!
    You may delete these criteria or make them \'simple\' by resetting enrichment fields or enrich them again.
    <b>If you don\'t update this form and leave it as is, student evaluation may not be possible!</b>';
$string['err_missinglogstores'] = '<p><font color="red"><b>Logging System Error!</b></font></p>
    This tool can only function if the <b>Standard</b> and/or <b>Legacy</b> logs are enabled. Non of them appear to be.
    Please contact your site Administrator in order to activate either one of the previous log stores, if you want to use this tool.
    For more information check the <a target="_blank" href="https://docs.moodle.org/35/en/Learning_Analytics_Enriched_Rubric">plugin\'s documentation</a>.';
$string['err_nocriteria'] = 'Rubric must contain at least one criterion.';
$string['err_nodefinition'] = 'Level definition can not be empty.';
$string['err_nodescription'] = 'Criterion description can not be empty.';
$string['err_novariations'] = 'The total minimum score cannot be the same with the total maximum score.';
$string['err_novariationspoints'] = 'Criterion levels cannot have the same number of points, in the same criterion.';
$string['err_novariationsvalues'] = 'Enriched criteria, must have different check values on all levels, in the same criterion.';
$string['err_scoreformat'] = 'Number of points for each level must be a valid number (positive or negative).';
$string['err_totalscore'] = 'Maximum number of points possible when graded by the rubric must be more than zero.';
$string['erubric'] = 'Learning Analytics e-rubric';
$string['gradingof'] = '{$a} grading';
$string['intercactionempty'] = 'Criterion Type';
$string['level'] = 'Level {$a->definition}, {$a->score} points.';
$string['leveldefinition'] = 'Level {$a} definition';
$string['leveldelete'] = 'Delete level {$a}';
$string['levelempty'] = 'Click to edit level';
$string['levelsgroup'] = 'Levels group';
$string['lockzeropoints'] = 'Calculate grade based on the rubric having a minimum score of 0, even if it doesn\'t';
$string['lockzeropoints_help'] = 'This setting only applies if the sum of the minimum number of points from each criterion is greater than 0.
    If ticked, the minimum achievable grade for the rubric will be greater than 0.
    If unticked, the minimum possible score for the rubric will be mapped to the minimum grade available for the activity (which is 0 unless a scale is used).<br />
    For more information check the plugin\'s documentation about <a target="_blank" href="https://docs.moodle.org/35/en/Learning_Analytics_Enriched_Rubric#Grade_calculation">grade calculation</a>.';
$string['name'] = 'Name';
$string['needregrademessage'] = 'The enriched rubric definition was changed after this student had been graded.
    The student can not see this enriched rubric until you update the current grade.';
$string['operatorempty'] = 'Choose Operator';
$string['overideenrichmentevaluation'] = 'Override automatic criterion evaluation in case of enrichment logical error<br>
                                          <i>(If enrichment logical error exists, evaluation is not possible without overriding it!)</i>';
$string['participationin'] = 'Check:';
$string['participationis'] = 'Is:';
$string['participationon'] = 'Related to:';
$string['pluginname'] = 'Learning Analytics Enriched Rubric';
$string['previewerubric'] = 'Preview LA e-rubric';
$string['privacy:metadata:fillings'] = 'The database table that stores grading information and outcomes from Learning Analytics and Data Mining.';
$string['privacy:metadata:fillings:criterionid'] = 'The criterion ID of an e-rubric that was used for grading.';
$string['privacy:metadata:fillings:enrichedbenchmark'] = 'The benchmark value of the enriched criterion, created from Data Mining and Learning Analytics.';
$string['privacy:metadata:fillings:enrichedbenchmarkstudent'] = 'The benchmark value of the student, created from Data Mining and Learning Analytics.';
$string['privacy:metadata:fillings:enrichedbenchmarkstudents'] = 'The benchmark value of all participating students, created from Data Mining and Learning Analytics.';
$string['privacy:metadata:fillings:instanceid'] = 'The grading instance ID of a grade attempt from a specific grader using a specific e-rubric.';
$string['privacy:metadata:fillings:levelid'] = 'The selected level ID of an e-rubric criterion.';
$string['privacy:metadata:fillings:remark'] = 'The remark text provided by a grader during assessment of an e-rubric criterion.';
$string['referencetypeempty'] = 'One or All';
$string['referencetypenumber'] = 'student';
$string['referencetypepercentage'] = 'students';
$string['regrademessage1'] = '<p style="text-align:center;color:red;font-weight:bold">WARNING!</p>
    You are about to save changes to an enriched rubric that has already been used for grading.
    Please indicate if existing grades need to be reviewed.
    If you set this then the enriched rubric will be hidden from students until their item is regraded.';
$string['regrademessage2'] = '<p style="text-align:center;color:red;font-weight:bold">WARNING!</p>
    You are about to save significant changes to an enriched rubric that has already been used for grading.
    The gradebook value will be unchanged, but the enriched rubric will be hidden from students until their item is regraded.';
$string['regradeoption0'] = 'Do not mark for regrade';
$string['regradeoption1'] = 'Mark for regrade';
$string['restoredfromdraft'] = 'NOTE: The last attempt to grade this person was not saved properly so draft grades have been restored.
    If you want to cancel these changes use the \'Cancel\' button below.';
$string['rubricmapping'] = 'Score to grade mapping rules';
$string['rubricmappingexplained'] = 'The minimum possible score for this enriched rubric is <b>{$a->minscore} points</b> 
    and it will be converted to the minimum grade available in this grading activity (which is zero unless the scale is used).
    The maximum score <b>{$a->maxscore} points</b> will be converted to the maximum grade.<br />
    Intermediate scores will be converted respectively and rounded to the nearest available grade.<br />
    If a scale is used instead of a grade, the score will be converted to the scale elements as if they were consecutive integers.<br /><br />
    This grade calculation may be changed by editing the form and ticking the box \'Calculate grade based on the rubric having a minimum score of 0\'.';
$string['rubricnotcompleted'] = 'An appropriate level for each criterion should be chosen.';
$string['rubricoptions'] = 'Rubric options';
$string['rubricstatus'] = 'Current LA e-rubric status';
$string['save'] = 'Save';
$string['saverubric'] = 'Save enriched rubric and make it ready';
$string['saverubricdraft'] = 'Save as draft';
$string['scoreinputforlevel'] = 'Score input for level {$a}';
$string['scorepostfix'] = '{$a}points';
$string['selectcollaboration'] = 'collaboration';
$string['selectgrade'] = 'grade';
$string['selectstudy'] = 'study';
$string['showdescriptionstudent'] = 'Display rubric description to those being graded';
$string['showdescriptionteacher'] = 'Display rubric description during evaluation';
$string['showenrichedbenchmarkstudent'] = 'Display calculated enrichment benchmark to those being graded';
$string['showenrichedbenchmarkteacher'] = 'Display calculated enrichment benchmark during evaluation';
$string['showenrichedcriteriastudent'] = 'Display enrichment of criteria to those being graded';
$string['showenrichedcriteriateacher'] = 'Display enrichment of criteria during evaluation';
$string['showenrichedvaluestudent'] = 'Display enrichment check points for each level to those being graded';
$string['showenrichedvalueteacher'] = 'Display enrichment check points for each level during evaluation';
$string['showremarksstudent'] = 'Show remarks to those being graded';
$string['showscorestudent'] = 'Display points for each level to those being graded';
$string['showscoreteacher'] = 'Display points for each level during evaluation';
$string['sortlevelsasc'] = 'Sort order for levels:';
$string['sortlevelsasc0'] = 'Descending by number of points';
$string['sortlevelsasc1'] = 'Ascending by number of points';
$string['studentbenchmarkinfo'] = 'Student benchmark';
$string['studentsbenchmarkinfo'] = 'Students benchmark';
$string['timestampenrichmentend'] = 'Enrichment calculations are conducted until submission due date (if enabled)';
$string['timestampenrichmentstart'] = 'Enrichment calculations are conducted from assignment available date (if enabled)';
$string['zerolevelsabsent'] = 'Warning: The minimum possible score for this rubric is not zero (0). This can result in unexpected grades for the activity.
    To avoid this, each criterion should have a level with zero (0) points.<br>
    This warning may be ignored if a scale is used for grading, and the minimum levels in the rubric correspond to the minimum value of the scale.';
