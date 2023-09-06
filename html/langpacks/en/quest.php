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
 * Strings for component 'quest', language 'en', version '4.1'.
 *
 * @package     quest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = 'Absent';
$string['accumulative'] = 'Accumulative';
$string['action'] = 'Action';
$string['actions'] = 'Actions';
$string['addacomment'] = 'Add a comment';
$string['addcomment'] = 'Add comment';
$string['addelement'] = 'Add element';
$string['addsubmission'] = 'Add challenge';
$string['adminlogs'] = 'Admin logs';
$string['allowteams'] = 'Allow workteams';
$string['allowteams_help'] = '<P align="justify">This parameter forces that each student taking part in this QUESTOURnament belongs to a team. In such a case, when a student access the QUESTOURnament for the first time, he will have to enter the name of the team to which he belongs.</P>
<P align="justify">Moreover, in this case, besides the individual ranking, the team ranking is presented.</P>
<P align="justify">The number of members of a team is set by the parameter <a href="help.php?component=quest&identifier=ncomponents"">Number of Members</a>, and can be managed by the teachers during the QUESTOURnament life. If mistakes arise, these can be settled by using the option <a href="help.php?component=quest&identifier=changeteamteacher"">Manage Teams</a> that is only accessible to teachers.</P>';
$string['amendassessmentelements'] = 'Amend assessment elements';
$string['answer'] = 'Answer';
$string['answer_not_found'] = 'Can not get answer record with id {$a}';
$string['answercontent'] = 'Answer content';
$string['answerexisty'] = 'An answer to this challenge already exists.';
$string['answername'] = 'Answer: {$a->title}';
$string['answernoauthorizedupdate'] = 'You are not authorized to update your answer';
$string['answers'] = 'Answers.';
$string['answersubmission'] = 'Answer to the challenge';
$string['answersubmission_help'] = '<P align="justify">This page allows to answer the challenge.</P>
<P align="justify">The fields that will be presented are the following:</P>
<ul>
  <li><strong>Title</strong>: name that identifies the answer to be submitted.</li>
  <li><strong>Description</strong>: this is the body of the answer to be submitted that must cover all the items specified by the assessment form of the challenge.</li>
  <li><strong>Attachments</strong>: if the sending of attachments is allowed, it will be possible to add them at the end of the body of the answer to be submitted.</li>
</ul>';
$string['approve'] = 'Approve';
$string['approvesubmission'] = 'Approve/Reject Challenge/Question';
$string['approvesubmission_help'] = '<P align="justify">This page allows the teacher to approve, save or delete a challenge proposed by a student. The actions that can be taken are described below:</P>
<ul>
  <li><strong align="justify">Approve</strong>: all the data related to the challenge are saved together with the modifications proposed by the teacher. After this, the challenge will be available for the rest of the students that will be able to submit answers once the challenge is opened.</li>
  <li><strong align="justify">Save</strong>: all the changes made by the teacher in the challenge are saved, but it will not still be available for the rest of students. This allows that the author of the challenge makes the necessary modifications for the teacher to approve it.</li>
</ul>
<P align="justify">When any of these actions take place, a message is sent to the author of the challenge, internally or through e-mail, depending on the user preferences according to his profile.</P>';
$string['assess'] = 'Assess';
$string['assessedon'] = 'Assessed on {$a}';
$string['assessment'] = 'Assessment';
$string['assessmentby'] = 'Assessment by {$a}';
$string['assessmentcharacteristics'] = 'Characteristics of the assessment';
$string['assessmentglobal'] = 'Global assessment';
$string['assessmentgrade'] = 'Assessment grade: {$a}';
$string['assessmentof'] = 'Assessment of "{$a}"';
$string['assessmentofthissubmission'] = 'Assessment of this challenge';
$string['assessments'] = 'Assessments';
$string['assessmentsby'] = 'Assessments by {$a}';
$string['assessthisanswer'] = 'Assess this answer';
$string['assessthissubmission'] = 'Assess this challenge';
$string['assessthissubmission_help'] = '<P align="justify">This page allows the teacher to assess the work of the students that propose challenges in the QUESTOURnament. The score given will depend both on the labour of the student as author of a challenge and as evaluator of the answers received.</P>
<P align="justify">In order to facilitate the assessment of the task, a set of assessment elements, each one covering an aspect to assess in the task, will be used. For each assessment element it will be necessary to:
<div align="justify">
  <OL>
<LI>Introduce a score by clicking the adequate radio button, selecting an option in a selection list presented,etc., which will depend on the scale used for that assessment element.
<LI>Introduce an explanation of why that score is given. If it is considered that the reason is obvious, this field can be left empty. However, it must be taken into account that the student whose work is being assessed can make a complaint about the score received.
  </OL>
</div>
<P align="justify">It is also possible to make a general comment about the work assessed. This comment must be respectful and constructive. The score and comments made will be accessible to the author of the challenge. The teacher will be able to manually modify the global score, in case it is necessary to adjust the score automatically calculated.
<P align="justify">The maximum possible score for the author of the challenge will be the maximum score reached by the challenge during its lifetime, whenever a correct answer has been submitted. On the other hand, if no correct answer is received before the challenge closes, its Initial Score will be considered also its maximum score.';
$string['assignmentnotinthecorrectphase'] = 'Assignment is not in the correctphase';
$string['attachment'] = 'Attachment';
$string['attachments'] = 'Attachments';
$string['attachmentsnoauthorizedupdate'] = 'You are not authorized to modify these attachments';
$string['authorofsubmission'] = 'Author of submission';
$string['by'] = 'by';
$string['bynameondate'] = 'by {$a->name} - {$a->date}';
$string['calification'] = 'Score';
$string['calification_provisional_msg'] = 'Assessment shown may be provisional';
$string['calificationautor'] = 'Assessment for the author of the challenge';
$string['cantRespond_WARN'] = 'Don\'t have permissions to answer.';
$string['cantRespond_WARN_notingroup_or_challengeended'] = 'You can\'t answer. You don\'t belong to this group or the challenge is ended.';
$string['challengeend'] = 'Closind date of the challenge';
$string['challengeend_help'] = '<P align="justify">It allows you to set the date when a challenge will be closed. From this date on, it will not be possible to send any more answers to the challenge. However, the teaches can continue assessing the author of the challenge, both for the question made and for the work made as assesser. Also, the authors of the challenges  can continue assessing the answers sent by other studentes.</P>
<P align="justify">Once the challenge is closed, all participants will be able to see the answers sent by others, as well as the assessments and scores obtained. </P>
<P align="justify">This date can not be later than the <a href="help.php?component=quest&identifier=dateend"">Closing Date</a> of the QUESTOURnament module, nor before the <a href="help.php?component=quest&identifier=submissionstart"">Start Date of the Challenge </a>. </P>';
$string['challengestart'] = 'Start Date of the challenge';
$string['challengestart_help'] = '<P align="justify">It allows you to set the data when the challenge will start. This parameter can be adjusted by a teacher.</P>
<P align="justify">If the challenge is created by a student, the creation date is taken as the start date of the challenge, but the reachers can modify this value when they approve or edit the challenge.</P>
<P align="justify">From this day on, the students can view the challenge and send their answers. </P>
<P align="justify">This date must be before the Closing date of the challenge </P>';
$string['change'] = 'Save Changes';
$string['changemanualcalification'] = 'Change grade manually';
$string['changeteam'] = 'Manage Teams';
$string['changeteamteacher'] = 'Manage Teams';
$string['changeteamteacher_help'] = '<P align="justify">This option allows to manage the teams of the QUESTOURnament or to move a student from one team to another if it were necessary.</P>
<P align="justify">If a student is moved from one team to another and the team loses his last member, it will automatically disappear.</P>';
$string['checkthat'] = 'Check that';
$string['clasification'] = 'Ranking';
$string['closebeforeopen'] = 'The Close Date of the QUESTOURnament must be later than the Start Date';
$string['comment'] = 'Comment';
$string['commentby'] = 'Comment by';
$string['commentsauthor'] = 'General comments by author';
$string['commentsforauthor'] = 'Coments for author';
$string['commentsforauthor_help'] = '<strong>Comments for Author</strong>: in this field it will be able to include suggestions or comments that the teacher wants to make to the student that proposed the challenge, which will be also accessible by the rest of teachers.</li>';
$string['commentsforstudent'] = 'Coments for students';
$string['commentsforstudent_help'] = '<strong>Comments for Students</strong>: this field contains the comments that the teacher wants to show to the students about this challenge, these comments will be available for all the participants in the QUESTOURnament.';
$string['commentsforteacher'] = 'Comments for the teacher';
$string['commentsteacher'] = 'General comments by teacher';
$string['completionpass'] = 'Require passing grade';
$string['completionpass_help'] = 'If enabled, this activity is considered complete when the student receives a pass grade (as specified in the Grade section of the Quest settings) or higher.';
$string['completionpassdesc'] = 'Student must achieve a passing grade to complete this activity';
$string['confirmchangeform'] = 'This will change the evaluation form. Are you sure?';
$string['confirmdelete'] = 'Confirm deletion';
$string['confirmdeletionofthisitem'] = 'Confirm deletion of this item {$a}';
$string['correct'] = 'Correct';
$string['currentphase'] = 'Current phase of QUESTOURnament';
$string['currentphaseanswer'] = 'Answers phase';
$string['currentphasesubmission'] = 'Submission phase';
$string['dateanswer'] = 'Date';
$string['dateassess'] = 'Assessment date';
$string['dateend'] = 'Closing on';
$string['dateend_help'] = '<P align="justify">This paramenter sets the closing date of this QUESTOURnament. After this closing date, the students that access the QUESTOURnament will not be able to do any of the usual actions. At this point, the classifications of the QUESTOURnament will be definitive.</P>
<P align="justify">Once the contest is over, its content will still be accesible for the students and teachers of the course, whenever this was defined when the QUESTOURnament was created, this means that it will still be possible to access challenges and answers submitted by each and every participant, as well as their classifications.</P>';
$string['dateendevent'] = 'End of QUESTOURnament "{$a}"';
$string['dateendsubmissionevent'] = 'End of challenge "{$a}"';
$string['dateofend'] = 'Closing date';
$string['dateofend_help'] = '<P align="justify">This paramenter sets the closing date of this QUESTOURnament. After this closing date, the students that access the QUESTOURnament will not be able to do any of the usual actions. At this point, the classifications of the QUESTOURnament will be definitive.</P>
<P align="justify">Once the contest is over, its content will still be accesible for the students and teachers of the course, whenever this was defined when the QUESTOURnament was created, this means that it will still be possible to access challenges and answers submitted by each and every participant, as well as their classifications.</P>';
$string['dateofstart'] = 'Starting date';
$string['datestart'] = 'Starting on';
$string['datestart_help'] = '<P align="justify">This parameter sets the starting date of this QUESTOURnament. After this date, the students of the course will be able to access the QUESTOURnament in order to add a challenge, submit an answer to a challenge or to do any other usual action.</P>
<P align="justify">This date is checked when a QUESTOURnament is defined, so that if it is subsequent to the <a href="help.php?component=quest&identifier=dateend"">Closing Date</a>, an error message is shown and the QUESTOURnament that is being defined will not be created.</P>';
$string['datestartevent'] = 'Starting of QUESTOURnament "{$a}"';
$string['datestartsubmissionevent'] = 'Starting of challenge "{$a}"';
$string['datestr'] = '%m/%d/%y<br />%H:%M';
$string['datestrmodel'] = '%%m/%%d/%%y &nbsp;&nbsp;%%H:%%M';
$string['deadline'] = 'Dead line';
$string['deadlineis'] = 'Dead line is {$a}';
$string['delete'] = 'Delete';
$string['deletechallenge'] = 'The challenge has been deleted';
$string['deleting'] = 'Deleting';
$string['description'] = 'Description';
$string['detailsofassessment'] = 'Details of assessment';
$string['difficultyAttainable'] = 'Moderate';
$string['difficultyEasy'] = 'Easy';
$string['difficultyHard'] = 'Hard';
$string['difficultyVeryHard'] = 'Very hard';
$string['disagreewiththisassessment'] = 'Disagree with this assessment';
$string['displayoffinalgrades'] = 'Display of final grades';
$string['dontshowgrades'] = 'Do not show grades';
$string['doyouwantparticularform'] = 'Do you want to use for this challenge an evaluation form different to the one defined by the QUESTournament creator?';
$string['edit'] = 'Edit';
$string['editacomment'] = 'Edit a Comment';
$string['editelementsanswer'] = 'Edit assesment elements for answers';
$string['editelementsautor'] = 'Edit assensment elements for autors';
$string['editingassessmentelements'] = 'Editing assessment elements';
$string['editingassessmentelementsofautors'] = 'Editing assessment elements of authors';
$string['element'] = 'Element';
$string['elements'] = 'Assessment Elements';
$string['elements_help'] = '<P align="justify">In order to assess an answer submitted to a challenge a number of &quot;Assessment Elements&quot; will be defined, covering each one a particular aspect to be assessed in the answers submitted and depending its number on the size and complexity of the challenge. The elements will have the following characteristics:
<div align="justify">
  <OL>
      <li>DESCRIPTION of the assessment element. It should clearly determine which aspect of the task is being assessed. In the case of a qualitative assessment, it will be useful to provide details of what is considered excellent, average, etc.</li>
      <li>SCALE of the assessment element. There are several predetermined scales, from the simple YES/NO scale, to a scale of total percentage. Each assessment element will use its own scale, which must be choosen so that it can adjust to each possible variation of the element. However, it must be taken into account that the scale does not determine how important an assessment element is when the final score is calculated: for example, an element with a 2-point scale will have the same &quot;influence&quot; in the final score than another element that uses a 100-point scale, whenever the respective elements has the same <i>weight</i> or ponderation factor.</li>
      <li>WEIGHT of the assessment element. By default, each element has the same importance when the final score of the task is calculated. However, this fact can be changed by giving the more important elements a weight higher than one, and to the less important elements a weight lower than one. It must be also taken into account that to modify the weight does NOT affect the possible maximum score of a submitted answer, because this value is determined by the <a href="help.php?component=quest&identifier=maxcalification"">Highest Score</a> parameter set for the challenge to which the answer is being submitted and the time when it was submitted.
      </li>
  </OL>
<P align="justify">The system allows you to customise the set of assessment elements defined for each challenge added to a QUESTOURnament.
</div>';
$string['elementsautor'] = 'Assessment Elements for Authors';
$string['elementsautor_help'] = '<P align="justify">In order to assess a challenge proposed, a number of &quot;Assessment Elements&quot; will be defined, each one covering a particular aspect to be assessed in the challenge proposed and depending its number on the size and complexity of the challenge proposed. The elements will have the following characteristics:
<div align="justify">
  <OL>
      <li>DESCRIPTION of the assessment element. It should clearly determine which aspect of the task is being assessed. In the case of a qualitative assessment, it will be useful to provide details of what is considered excellent, average, etc.</li>
      <li>SCALE of the assessment element. There are several predetermined scales, from the simple YES/NO scale, to a scale of total percentage. Each assessment element will use its own scale, which must be choosen so that it can adjust to each possible variation of the element. However, it must be taken into account that the scale does not determine how important an assessment element is when the final score is calculated: for example, an element with a 2-point scale will have the same &quot;influence&quot; in the final score than another element that uses a 100-point scale, whenever the respective elements has the same <i>weight</i> or ponderation factor.</li>
      <li>WEIGHT of the assessment element. By default, each element has the same weight when the final score of the task is calculated. However, this fact can be changed by giving the more important elements a weight higher than one, and to the less important elements a weight lower than one. It must be also taken into account that to modify the weight does NOT affect the possible maximum score of a submitted Challenge, because this value is determined by the <a href="help.php?component=quest&identifier=maxcalification"">Highest Score</a> parameter set for the challenge to which the answer is being submitted and the time when it was submitted.
      </li>
  </OL>
</div>';
$string['elementweight'] = 'Element weight';
$string['emailaddsubmission'] = 'Hello, {$a->firstname}.

A new challenge has been added in
\'{$a->sitename} \' server, in the QUESTOURnament \'{$a->name} \'. It is titled \'{$a->title} \'.

To access this new challenge, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailaddsubmissionsubject'] = 'Moodle. Challenge added in module QUESTOURnament';
$string['emailansweradd'] = 'Hello, {$a->firstname}.

A new answer has been received in
\'{$a->sitename} \' site, in the QUESTOURnament \'{$a->name} \', to the challenge \'{$a->title} \'. It is titled \'{$a->secondname} \'.

To access this answer, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailansweraddsubject'] = 'Moodle. Answer added in module QUESTOURnament';
$string['emailanswerdelete'] = 'Hello, {$a->firstname}.

An answer has been deleted in
\'{$a->sitename} \' site, in the QUESTOURnament \'{$a->name} \', of the challenge \'{$a->title} \', it was titled \'{$a->secondname} \'.

To access this challenge, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailanswerdeletesubject'] = 'Moodle. Answer deleted in QUESTOURnament module';
$string['emailapprobe'] = 'Hello, {$a->firstname}.

A new challenge has been added in
\'{$a->sitename} \' server, in the QUESTOURnament \'{$a->name} \'. It is titled \'{$a->title} \'.

To access this new challenge, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailapprobesubject'] = 'Moodle. Challenge added in module QUESTOURnament';
$string['emailassessment'] = 'Hello, {$a->firstname}.

An answer hase been assessed in
\'{$a->sitename} \' site, in the QUESTOURnament \'{$a->name} \', of the challenge \'{$a->title} \', it was titled \'{$a->secondname} \'.

To access this answer, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailassessmentautor'] = 'Hello, {$a->firstname}.

A challenge has been assessed in
\'{$a->sitename} \' server, in the QUESTOURnament \'{$a->name} \'. It is titled \'{$a->title} \'.

To access this new challenge, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailassessmentautorsubject'] = 'Moodle. Challenge assessed in module QUESTOURnament';
$string['emailassessmentsubject'] = 'Moodle. Answer assessed in module QUESTOURnament';
$string['emailchallenge_start'] = 'Hello, {$a->firstname}. The challenge <b>\'{$a->title}\'</b> has started in the QUESTOURnament \'{$a->name}\'. (At \'{$a->sitename}\'.)
To access the site on which the challenge is, please click here:
<a href="{$a->link}">{$a->link}</a>';
$string['emailchallenge_startsubject'] = 'Moodle. QUESTOURnament Challenge Started';
$string['emailchallengeupdate'] = 'Hello, {$a->firstname}.

Challenge modified in
\'{$a->sitename} \' server, in the QUESTOURnament \'{$a->name} \'. It is titled \'{$a->title} \'.

To access the challenge, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailchallengeupdatesubject'] = 'Moodle. Challenge modified in module QUESTOURnament';
$string['emaildeletesubmission'] = 'Hello, {$a->firstname}.

A challenge has been deleted in
\'{$a->sitename} \' server, in the QUESTOURnament \'{$a->name} \'. It is titled \'{$a->title} \'.

To access the QUESTOURnament, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emaildeletesubmissionsubject'] = 'Moodle. Challenge deleted in module QUESTOURnament';
$string['emailevaluatecomment'] = 'Hello, {$a->firstname}.
Complaining mechanism has been started for an assessment in
\'{$a->sitename} \' site, in the QUESTOURnament \'{$a->name} \', of the challenge \'{$a->title} \', answer \'{$a->secondname} \'.

To access this answer, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailevaluatecommentsubject'] = 'Moodle. Assessment complain in module QUESTOURnament';
$string['emailmodifanswer'] = 'Hello, {$a->firstname}.

An answer hase been modified in
\'{$a->sitename} \' site, in the QUESTOURnament \'{$a->name} \', of the challenge \'{$a->title} \', it was titled \'{$a->secondname} \'.

To access this answer, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailmodifanswersubject'] = 'Moodle. Answer modification in module QUESTOURnament';
$string['emailsave'] = 'Hello, {$a->firstname}.

Challenge modified in
\'{$a->sitename} \' server, in the QUESTOURnament \'{$a->name} \'. It is titled \'{$a->title} \'.

To access the site on which the challenge is, please click here:

<a href="{$a->link}">{$a->link}</a>';
$string['emailsavesubject'] = 'Moodle. Changes in challenge in module QUESTOURnament';
$string['emailtagline'] = 'This e-mail is a copy of the message you sent on \\"{$a} \\"';
$string['enterpassword'] = 'Enter password:';
$string['enterteam'] = 'Enter Team';
$string['evaluate'] = 'Evaluate';
$string['evaluation_pending'] = 'Not evaluated';
$string['excellent'] = 'Excellent';
$string['exponential'] = 'Exponential';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = 'Enter here a feedback about this part of the assessment.';
$string['feedbackgoeshere'] = 'Feedback goes here';
$string['firstname'] = 'Firstname';
$string['firstname_help'] = '';
$string['fullactivitylisting'] = 'Full activity listing';
$string['generalcomment'] = 'General comment';
$string['generalcomment_help'] = '<P align="justify">This is a feedback about the work assessed. This comment must be respectful and constructive.';
$string['gettechnicallogs'] = 'Get technical logs';
$string['globalranking'] = 'Global Classification';
$string['globalranking_help'] = '<P ALIGN=CENTER><strong>View (Individual) Ranking</strong></P>
<P align="justify">This option shows the classification of the participants in the QUESTOURnament.</P>
<P>Please note that the teachers have access to all the information listed above, while the students can only see that information if the teacher that defined the QUESTOURnament selected the option "Show Authoring Details to the Students in Classifications". In any other case, students will not have access to these partial data related to the challenges proposed by other students.</P>
  <P>By default, the ranking is ordered according to the total individual score obtained by each student, although this order can be modified by choosing another ordering parameter and pressing its name.</P>
  <P>It is also possible to access the ranking by teams through the option View Summary by Teams.</P>
</div>';
$string['good'] = 'Good';
$string['grade'] = 'Grade';
$string['gradeassessment'] = 'Grade assessment';
$string['gradeautor'] = 'Autor\'s Grade';
$string['graded'] = 'Graded';
$string['gradedbyteacher'] = 'Graded by {$a}';
$string['gradeforassessments'] = 'Grade for assessments';
$string['gradeofsubmission'] = 'Grade of submission: {$a}';
$string['grading'] = 'Assess Answer';
$string['grading_help'] = '<P align="justify">This page allows to assess an answer submitted. The score given will depend on how the answer corresponds to what is required in the corresponding challenge.</P>
<P align="justify">In order to facilitate the assessment of the answer, a set of assessment elements, each one covering an aspect to assess in the answer, will be used. For each assessment element it will be necessary to:
<div align="justify">
  <OL>
<LI>Introduce a score by clicking the adequate radio button, selecting an option in a selection list presented,ect., which will depend on the scale used for that assessment element.
<LI>Introduce an explanation of why that score is given. If it is considered that the reason is obvious, this field can be left empty. However, it must be taken into account that the student whose work is being assessed can make a complaint about the score received.
  </OL>
</div>
<P align="justify">It is also possible to make a general comment about the work assessed. This comment must be respetful and constructive. The score and comments made will be accessbile to the author of the answer, and to each and every student once the challenge is closed.
<P align="justify">The teacher or the author of the challenge will be able to manually modify the global score, in case it is necessary to adjust the score automatically calculated.
<P align="justify">The maximum possible score for the author of a correct answer will be the score of the challenge at the time when the answer was submitted.';
$string['gradingcharacteristics'] = 'Characteristics of grading';
$string['gradingstrategy'] = 'Scoring strategy';
$string['gradingstrategy_help'] = '<P align="justify">The scoring strategy used to assess the answers submitted to the challenges proposed in a QUESTOURnament is acumulative.

<P align="justify">This means that in the scoring of each assessment a number of elements are used, and each one must cover a specific aspect of the task to be assessed. The number of assessment elements will depend of the size and complexity of the task. The assessment elements have the following characteristics:

<div align="justify">
  <OL>
      <li>DESCRIPTION of the assessment element. It should clearly determine which aspect of the task is being assessed. In the case of a qualitative assessment, it will be useful to provide details of what is considered excellent, average, etc.</li>
      <li>SCALE of the assessment element. There are several predetermined scales, from the simple YES/NO scale, to a scale of total percentage. Each assessment element will use its own scale, which must be choosen so that it can adjust to each possible variation of the element. However, it must be taken into account that the scale does not determine how important an assessment element is when the final score is calculated: for example, an element with a 2-point scale will have the same &quot;influence&quot; in the final score than another element that uses a 100-point scale, whenever the respective elements has the same <i>weight</i> or ponderation factor.</li>
      <li>WEIGHT of the assessment element. By default, each element has the same importance when the final score of the task is calculated. However, this fact can be changed by giving the more important elements a weight higher than one, and to the less important elements a weight lower than one. It must be also taken into account that to modify the weight does NOT affect the possible maximum score of a submitted answer, because this value is determined by the <a href="help.php?component=quest&identifier=maxcalification"">Highest Score</a> parameter set for the challenge to which the answer is being submitted and the time when it was submitted.
      </li>
  </OL>
</div>';
$string['gradingstrategyautor'] = 'Scoring strategy for authors';
$string['gradingstrategyautor_help'] = '<P align="justify">The scoring strategy used to assess the challenges added in a QUESTOURnament is accumulative.

<P align="justify">This means that in the scoring of each assessment a number of elements are used, and each one must cover a specific aspect of the task to be assessed. The number of assessment elements will depend of the size and complexity of the task. The assessment elements have the following characteristics:
<div align="justify">
  <OL>
      <li>DESCRIPTION of the assessment element. It should clearly determine which aspect of the task is being assessed. In the case of a qualitative assessment, it will be useful to provide details of what is considered excellent, average, etc.</li>
      <li>SCALE of the assessment element. There are several predetermined scales, from the simple YES/NO scale, to a scale of total percentage. Each assessment element will use its own scale, which must be choosen so that it can adjust to each possible variation of the element. However, it must be taken into account that the scale does not determine how important an assessment element is when the final score is calculated: for example, an element with a 2-point scale will have the same &quot;influence&quot; in the final score than another element that uses a 100-point scale, whenever the respective elements has the same <i>weight</i> or ponderation factor.</li>
      <li>WEIGHT of the assessment element. By default, each element has the same weight when the final score of the task is calculated. However, this fact can be changed by giving the more important elements a weight higher than one, and to the less important elements a weight lower than one. It must be also taken into account that to modify the weight does NOT affect the possible maximum score of a submitted answer, because this value is determined by the <a href="help.php?component=quest&identifier=maxcalification"">Highest Score</a> parameter set for the challenge to which the answer is being submitted and the time when it was submitted.
      </li>
  </OL>
</div>';
$string['groupmode'] = 'Group Mode';
$string['groupmode_help'] = '<P align="justify">The group mode can be one of three levels:</P>
<div align="justify">
  <ul>
    <li><strong>No groups</strong>: There are no sub groups, everyone is part of one big community.</li>
      <li><strong>Separate Groups</strong>: Each group can only see their own group, others are invisible. </li>
      <li><strong>Visible Groups</strong>: Each group works in their own group, but can also see other groups.</li>
  </ul>
</div>

<P align="justify">The group mode can be defined at two levels:</P>

<div align="justify">
  <ul>
    <li><strong>Course Level</strong>: The group mode defined at the course level is the default mode for all activities defined within that course.</li>
      <li><strong>Activity Level</strong>: Each activity that supports groups can also define its own grouping mode. If the course is set to "<a href="help.php?module=moodle&amp;file=groupmodeforce"">force group mode</a>" then the setting for each activity is ignored.</li>
  </ul>
</div>';
$string['incorrect'] = 'wrong';
$string['individualcalification'] = 'individual score';
$string['individualranking'] = 'View (Individual) Ranking';
$string['individualranking_help'] = '<P align="justify">This option shows the classification of the participants in the QUESTOURnament that belong to the same group.</P>
<P align="justify">The following parameters are shown:</P>
<div align="justify">
  <ul>
    <li><strong>Picture</strong>: image of the student introduced by himself in his profile.</li>
      <li><strong>Firstname/Lastname</strong>: name and last name introduced by the student when he registered himself in the system.</li>
      <li><strong>Answers</strong>: number of answers submitted by a student in this QUESTOURnament.</li>
      <li><strong>Assessed Answers</strong>: number of answers assessed of all the ones submitted by this student in the QUESTOURnament.</li>
      <li><strong>Number of Challenges</strong>: number of challenges proposed by a student in this QUESTOURnament.</li>
      <li><strong>Assessed Challenges</strong>: number of challenges assessed of all the ones proposed by this student in the QUESTOURnament.</li>
      <li><strong>Challenges Score</strong>: total score obtained by the student corresponding to the assessment made by the teachers of the challenges proposed by him.</li>
      <li><strong>Answers Score</strong>: total score obtained by the student corresponding to the assessment of the answers submitted by him.</li>
      <li><strong>Team Score</strong>: this parameter is only shown when the option <a href="help.php?component=quest&identifier=allowteams"">Allow Teams</a> is selected in the QUESTOURnament. It is the percentage, set by the option <a href="help.php?component=quest&identifier=teamporcent"">Percentage of Team Scoring</a>, of the total score obtained by the team to which the student belongs, that will be added to his individual score.</li>
      <li><strong>Score</strong>: It is the total individual score of the student, incorporating his challenges and answers scores and a percentage of his team score if it were necessary.</li>
  </ul>
    <P>It must be emphasized that the teachers have access to all the information listed above, while the students can only see that information if the teacher that defined the QUESTOURnament selected the option <a href="help.php?component=quest&identifier=showauthoringdetails"">Show Authoring Details to the Students in Classifications</a>. In any other case, students will not have access to these partial data related to the challenges proposed by other students.</P>
  <P>By default, the ranking is ordered according to the total individual score obtained by each student, although this order can be modified by choosing another ordering parameter and pressing its name.</P>
  <P>It is also possible to access the ranking by teams through the option <a href="help.php?component=quest&identifier=teams"">View Summary by Teams</a>.</P>
</div>';
$string['initialpoints'] = 'Initial score';
$string['initialpoints_help'] = '<P align="justify">This parameter sets the initial score of the challenge to be added.</P>
<P align="justify">However, the teacher will be able to modify this value from minimum score up to the maximum score set for the QUESTOURnament where the challenge is to be added. A student can also modify this initial score when adding a challenge, but only by choosing a value equal or lower than the value set by the teacher as initial score of the QUESTOURnament where the challenge is to be added.
 </P>
<P align="justify">Finally, it is important to emphasize that the value of this parameter can be different for each challenge in a QUESTOURnament.</P>';
$string['inserterror'] = 'Could not insert record in table {$a} in database.';
$string['introattachments'] = 'Additional files';
$string['introattachments_help'] = 'Additional files for use in the questournament, such as answer templates, may be added. Download links for the files will then be displayed on the quest page under the description.';
$string['introductiontothechallenge'] = 'Description of the challenge';
$string['invaliddates'] = 'Invalid dates. Must be between {$a->questdatestart} and {$a->questdateend}';
$string['invalidtext'] = 'Text field is blank';
$string['lastname'] = 'Lastname';
$string['lastname_help'] = '';
$string['legend'] = 'A (B) [C] {$a} <br>A: Answers. B: Correct Answers. <br>C: Not assessed Answers. {$a} Answered by me.<br>';
$string['linear'] = 'Lineal';
$string['maxcalification'] = 'Highest score';
$string['maxcalification_help'] = '<P align="justify">This parameter sets the maximum score that each challenge of this QUESTOURnament will be able to reach, which means that it is also the maximum score that a submitted answer will be able to obtain.</P>
<P align="justify">This value may be different for each challenge, but it can not be higher than the maximum score set for the QUESTOURnament to which they belong.</P>';
$string['maximumsize'] = 'Largest size';
$string['messageprovider:challenge_start'] = 'A challenge just started';
$string['messageprovider:challenge_update'] = 'A challenge has been edited';
$string['messageprovider:evaluation_update'] = 'Changes in a grade';
$string['mincalification'] = 'Lowest score';
$string['mincalification_help'] = '<P align="justify">This parameter sets the minimum score that each challenge of this QUESTOURnament will be able to reach, which means that it is also the maximum score that a submitted answer will be able to obtain.</P>
<P align="justify">This value may be different for each challenge, but it can not be lower than the minimum score set for the QUESTOURnament to which they belong.</P>';
$string['modif'] = 'Modify';
$string['modifanswersubmission'] = 'Modify answer for challenge {$a}';
$string['modified'] = 'modified';
$string['modifsubmission'] = 'Modify challenge';
$string['modifsubmission_help'] = '<P align="justify">This page allows the teacher to modify a challenge proposed by a student. The students will be also able to modify the challenges that they have proposed, whenever they have not been yet aproved by the teacher.</P>

<P align="justify">The information that is presented about the challenge and that can be modified is the following:</P>
<ul>
   <li><strong>Title</strong>: name of the challenge, it should not include the name of the author of the challenge in order to keep the anonymity
of its authorship, otherwise, the challenge could be refused of modified by the teacher.</li>
      <li><strong>Description</strong>: it is the body of the challenge, where the problem and the items to be included in the answer are presented. It must be clear and complete. </li>
      <li><strong>Maximum Score</strong>: it is the maximum score that the challenge will be able to reach, it is limited by the <a href="help.php?component=quest&identifier=maxcalification"">Highest Score</a> of the QUESTOURnament to which the challenge belongs.</li>
      <li><strong>Initial Score</strong>: it is the score of the challenge when it is opened and that will vary during the development of the contest.</li>
      <li><strong>Starting Date</strong>: it sets the date in which the challenge is opened, this parameter can only be set by the teacher. When the challenge is added by a student, the starting date is the time when the challenge is added.</li>
      <li><strong>Closing Date</strong>: it sets the date in which the challenge is closed, after this date it will not be able to submit answers, although the author of the challenge or the teacher will still be able to assess the answers submitted during the lifetime of the challenge. It can not be subsequent to the <a href="help.php?component=quest&identifier=dateend"">Closing Date</a> set for the QUESTOURnament.</li>
      <li><strong>Attachments</strong>: this will allow to specify the attachments if this possibility was set when the QUESTOURnament was defined. At this time, it is also possible to delete the attachments included in the challenge so far.</li>
  <li><strong>Comments for Author</strong>: in this field it will be able to include suggestions or comments that the teacher wants to make to the student that proposed the challenge, which will be also accessible by the rest of teachers.</li>
  <li><strong>Comments for Students</strong>: in this field it will be able to include comments that the teacher wants to make to the students about the challenge, these comments will be available for all the participants in the QUESTOURnament. </li>
</ul>';
$string['modulehiddenerror'] = 'Module is hidden.';
$string['modulename'] = 'QUESTOURnament';
$string['modulename_help'] = 'QUESTOURnament is an activity that allows to develop contests. Students can engage in a competition to answer a set of challenges whose score changes in time. The challenge gains reward as the time goes by without any valid answer. This activity allows to place some preasure and motivation on the course. The game can be played individually or in teams. The scoreboard gives credit to the best participants.';
$string['modulenameplural'] = 'QUESTOURnaments';
$string['myanswers'] = 'My Answers';
$string['myanswers_help'] = '<strong>My Answers</strong>: it shows all the answers submitted by current user. For each answer, the date of submission, the actions that can be taken (View Assessment, etc.), the score obtained and its title are shown. An answer could be modified or deleted by the teacher at any time, while the student will only be able to modify or delete an answer that he has submitted till it has been assessed.';
$string['mychallenges'] = 'My Challenges';
$string['mychallenges_help'] = '<div align="justify"><strong>My Challenges</strong>: it shows a list with all the challenges that have been added by the user that views this page. For each challenge, the current score (maximum score that it will be possible to obtain by an answer submitted at this time), the phase or state in which the challenge is, the number of answers submitted and the number of them that were right, the opening and closing dates and its title are shown. Pressing its title gives access to the complete description of a challenge. The teacher will be able to modify or delete a challenge at any time, while the author, if a student, will only be able to do it till the challenge that he has added is approved by the teacher.</div>';
$string['myplace'] = 'My Place for this QUESTOURnament';
$string['myplace_help'] = '<P align="justify">This page shows the information corresponding to the activity developed by each participant in the QUESTOURnament.</P>';
$string['myranking'] = 'My Ranking';
$string['myranking_help'] = '<strong>My Raking</strong>: it shows the different scores obtained by a student in the QUESTOURnament, both the scores corresponding to the answers assessed and to the challenges proposed. This section will be not shown if the user that views this page is a teacher.';
$string['myrankingteam'] = 'My Ranking by Teams';
$string['myrankingteam_help'] = '<strong>My Ranking by Teams</strong>: it shows the scores obtained by the team to which the student that views this page belongs. This option will only be shown if the QUESTOURnament has the <a href="help.php?component=quest&identifier=allowteams"">Allow Teams</a> option selected. This section will not be shown if the user that views this page is a teacher.';
$string['nanswers'] = 'Answers';
$string['nanswers_help'] = '<strong>Answers</strong>: number of answers submitted by a student in this QUESTOURnament.';
$string['nanswersassessment'] = 'Assessed Answers';
$string['nanswersassessment_help'] = '<strong>Assessed Answers</strong>: number of answers assessed of all the ones submitted by this student in the QUESTOURnament.';
$string['nanswerscorrect'] = 'Right answers';
$string['nanswerscorrectshort'] = 'Right';
$string['nanswersshort'] = 'Answers';
$string['nanswerswhithoutassess'] = 'Not assessed';
$string['ncomponents'] = 'Number of members';
$string['ncomponents_help'] = '<P align="justify">This parameter sets the maximum number of members that each team will have.</P>
<P align="justify">If a student tries to become member of a team that is already full, the system will inform of this fact and the student will have to become a member of another team.</P>';
$string['ncomponentsteam'] = 'Max. members in team';
$string['need_to_be_editor'] = '(Need to be a editor to add challenges. Ask your teacher for permission.)';
$string['nelements'] = 'Number of Assessment Elements';
$string['nelements_help'] = '<P align="justify">This parameter sets the number of assessment elements that will be used to assess the answers submitted to the challenges, and will depend on the characteristics (size, complexity...) of those challenges. It will also be possible to provide a general feedback about the assessment made through a devoted text area.</P>';
$string['nelementsautor'] = 'Number of Assessment Elements for Authors';
$string['nelementsautor_help'] = '<P align="justify">This parameter sets the number of assessment elements that will be used to assess the task developed by the authors of challenges. This number will depend on the charateristics of the task (size, complexity...). It will also be possible to provide a general feedback about the assessment made through a devoted text area.</P>';
$string['newattachment'] = 'new attachment';
$string['newcalification'] = 'New grade';
$string['newteam'] = 'New team';
$string['nmaxanswers'] = 'Maximum number of right answers';
$string['nmaxanswers_help'] = '<P>This parameter sets the maximum number of correct answers that will be allowed in a challenge before it closes.</P>
<P>Once this number is reached, the challenge will close and no more answers will be accepted, no matter what is the current socre of the challenge or if the <a href="help.php?component=quest&identifier=dateend"">Closing Date</a></P> has been reached or not.';
$string['noanswers'] = 'No answers';
$string['noassessments'] = 'No Assesments';
$string['noassessmentsdone'] = 'No assessments';
$string['noattachments'] = 'No Attachments';
$string['nocapabilityaddchallenge'] = 'You do not have enough permissions to add a challenge';
$string['nograde'] = 'No Grade';
$string['nopermissionassessment'] = 'You have no permissions to view this assessment. You should be teacher or challenge\'s author.';
$string['notavailable'] = 'not available';
$string['noteonassessmentelements'] = 'Note that grading is broken down into a number of \'Assessment Elements\'.<br />
    This makes the grading easier and more consistent. As evaluator you must add these <br />
    Elements before making the QUESTOURnament available to students. This is done by<br />
    clicking on the QUESTOURnament in the course, if no elements are present you will be asked<br />
    to add them. You can change the number of elements using the Edit Author Assessment screen,<br />
    the elements themselves can be amended from the &quot;Edit Author Assessment&quot; screen.';
$string['notgraded'] = 'Not Graded';
$string['notpermissionsubmission'] = 'You have no permissions to view this challenge.';
$string['notsubmittedyet'] = 'No submission has been made yet';
$string['nsubmissions'] = 'Number of challenges';
$string['nsubmissions_help'] = '<strong>Number of Challenges</strong>: number of challenges proposed by a student in this QUESTOURnament.';
$string['nsubmissionsassessment'] = 'Assessed challenges';
$string['nsubmissionsassessment_help'] = '<strong>Assessed Challenges</strong>: number of challenges assessed of all the ones proposed by this student in the QUESTOURnament.';
$string['numbermaxofanswers'] = 'Max number of right answers';
$string['numberofattachments'] = 'Number of Attachments expected on Submissions';
$string['numberofattachments_help'] = '<P align="justify">This parameter sets how many text fields will be presented to allow the submission of files when a student or a teacher makes a submission. The value of this parameter must be between 0 and 5. It will usually be 0 or 1, but in certain cases it can be necessary to allow the submission of more than one attachment. If the value specified is 0, that is also the default value for this parameter, this means that it will not be allowed to send any attachment with a submission.</P>
<P align="justify">If, for example, the number specified is 3, and only 2 files are attached to the submission, that submission is made without showing any warning message. This means that, when a submission is made, it is allowed to attach any number of files up to the maximum specified by this parameter.</P>';
$string['of'] = 'of';
$string['oldteam'] = 'Current team';
$string['password'] = 'Password';
$string['password_help'] = '<P align="justify">This text field allows to set an access password for this QUESTOURnament. The password can have a maximum length of 10 characters, and can be modified at any time during the lifetime of the QUESTOURnament. By selecting the option &quot; <a href="help.php?component=quest&identifier=usepassword"">Use password</a>&quot; it is guaranteed that students must write this password to access the QUESTOURnament.</P>';
$string['passwordprotectedquest'] = 'Password Protected QUESTOURnament';
$string['perceivedTeacherDifficultyLevel'] = 'Estimated difficulty';
$string['perceivedTeacherDifficultyLevel_help'] = 'Estimated difficulty of the challenge. This level is used to cathegorize the challenges. It is used for pedagogic research. This is an optional parameter.';
$string['perceiveddifficultyLevel'] = 'Difficulty';
$string['perceiveddifficultyLevelQuestion'] = 'How difficult has this challenge been to you?';
$string['permitsubmit'] = 'Allow re-submition';
$string['permitviewautors'] = 'Show authoring details to the students of closed challenges';
$string['permitviewautors_help'] = '<P align="justify">If this option, that is unselected by default, is selected, the information about the authors of the challenges of the QUESTOURnament will be shown, oncen those challenges are closed and it is not possible to submit any more answers.</P>
<P align="justify">If this option is unselected, the students will never know the identity of the authors of the challenges even if they are closed.</P>';
$string['phase'] = 'Phase';
$string['phase1'] = 'Inactive QUESTOURnament';
$string['phase1answer'] = 'Not assessed';
$string['phase1quest'] = 'Start pending';
$string['phase1short'] = 'Set Up';
$string['phase1submission'] = 'Approval pending';
$string['phase2'] = 'Open QUESTOURnament';
$string['phase2answer'] = 'Assessed by Author';
$string['phase2quest'] = 'In process';
$string['phase2short'] = 'Submissions';
$string['phase2submission'] = 'Start pending';
$string['phase3'] = 'Closed QUESTOURnament';
$string['phase3answer'] = 'Assessed by Teacher';
$string['phase3quest'] = 'QUESTOURnament ended';
$string['phase3short'] = 'Both';
$string['phase3submission'] = 'Challenge in process';
$string['phase4'] = 'QUESTOURnament Closed.<br> Scores published';
$string['phase4answer'] = 'Assessed as correct by Author';
$string['phase4short'] = 'Assessments';
$string['phase4submission'] = 'Challenge closed';
$string['phase5'] = 'Final score computation.';
$string['phase5answer'] = 'Assessed as correct by Teacher';
$string['phase5short'] = 'Compute';
$string['phase5submission'] = 'Assessed. Approval pending.';
$string['phase6'] = 'Show final score';
$string['phase6short'] = 'Show final grades';
$string['phase6submission'] = 'Assessed. Challenge in process';
$string['phase7submission'] = 'Assessed. Challenge closed';
$string['phase8submission'] = 'Assessed. Start pending.';
$string['picture'] = 'Picture';
$string['picture_help'] = '';
$string['pictureof'] = 'Picture of';
$string['pluginadministration'] = 'QUESTOURnament administration';
$string['pluginname'] = 'QUESTOURnament';
$string['points'] = 'Score';
$string['points_help'] = '<strong>Score</strong>: It is the total individual score of the student (or the team), incorporating his challenges and answers scores and a percentage of his team score if it were necessary.';
$string['pointsanswers'] = 'Ans.Score';
$string['pointsanswers_help'] = '<strong>Answers Score</strong>: total score obtained by the student corresponding to the assessment of the answers submitted by him.';
$string['pointsmax'] = 'Max Score';
$string['pointsmax_help'] = '<P align="justify">This parameter sets the maximum score that this challenge will be able to reach.<P align="justify">This value may be different for each challenge, but it can not be higher than the maximum score set for the QUESTOURnament to which they belong.</P>';
$string['pointsmaxsubmission'] = 'Maximum score reached.';
$string['pointsmin'] = 'Min Score';
$string['pointsmin_help'] = '<P align="justify">This parameter sets the minimum score that this challenge will be able to reach.<P align="justify">This value may be different for each challenge, but it can not be lower than the maximum score set for the QUESTOURnament to which they belong.</P>';
$string['pointssubmission'] = 'Challenges Score';
$string['pointssubmission_help'] = '<strong>Challenges Score</strong>: total score obtained by the student corresponding to the assessment made by the teachers of the challenges proposed by him.';
$string['pointsteam'] = 'Team Score';
$string['pointsteam_help'] = '<strong>Team Score</strong>: this parameter is only shown when the option <a href="help.php?component=quest&identifier=allowteams"">Allow Teams</a> is selected in the QUESTOURnament. It is the percentage, set by the option Percentage of Team Scoring, of the total score obtained by the team to which the student belongs, that will be added to his individual score.';
$string['poor'] = 'Poor';
$string['porcent'] = 'percentage';
$string['predictedDurationQuestion'] = 'Estimation of the time to answer this question';
$string['predictedDurationQuestion_help'] = 'Estimation of the time to answer this question.  This level is used to cathegorize the challenges. It is used for pedagogic research. This is an optional parameter.';
$string['present'] = 'Present';
$string['preview'] = 'Preview';
$string['processingquest'] = 'Processing {$a}';
$string['quest:addchallenge'] = 'Add a new challenge to the tournament';
$string['quest:addinstance'] = 'Add a new instance of a tournament (Deprecated)';
$string['quest:approvechallenge'] = 'Approve a proposed challenge.';
$string['quest:approvegrade'] = 'Approve a pending grade';
$string['quest:attempt'] = 'Send an answer for a challenge';
$string['quest:deleteattempts'] = 'Delete own and other\'s answers';
$string['quest:deletechallengeall'] = 'Delete own and other\'s challenges';
$string['quest:deletechallengemine'] = 'Delete own challenges';
$string['quest:downloadlogs'] = 'Download current questournament\'s raw reports';
$string['quest:editattempt'] = 'Edit anyone\'s submitted answer';
$string['quest:editattemptmine'] = 'Edit own submitted answer';
$string['quest:editchallengeall'] = 'Edit anyone\'s submitted challenge';
$string['quest:editchallengemine'] = 'Edit own submitted challenge.';
$string['quest:emailconfirmchallenge'] = 'Receive email confirmation from own questournament challenge';
$string['quest:emailnotifychallenge'] = 'Receive email notification from other people\'s questournament challenges';
$string['quest:generateActivityReport'] = 'Activity';
$string['quest:generateCSVlogs'] = 'Generate CSV report for:';
$string['quest:generateIPAccessesReport'] = 'IP Addresses Accesses';
$string['quest:generateLogsReport'] = 'Logs';
$string['quest:grade'] = 'Manually grade and comment on student attempts at a question, and regrade questournaments';
$string['quest:gradeownchallenge'] = 'Grade own challenge';
$string['quest:ignoretimelimits'] = 'Ignore time limits.';
$string['quest:manage'] = 'Edit the questournament settings, add and remove challenges.';
$string['quest:manageownchallenge'] = 'Manage own challenge';
$string['quest:notifyemptylogs'] = 'Last query with no results. Check if legacy log is enabled in this server.<br/>';
$string['quest:notifylocale'] = '<P>For your locale "<b>{$a->localelang}</b>" the decimal separator is "
<b>{$a->localeconfigdecimal}</b>".
Check that your SpreadSheet interprets correctly this character.</P>';
$string['quest:preview'] = 'View extended information and links of the different parts of the QUESTOURnament.';
$string['quest:view'] = 'view a tournament';
$string['quest:viewotherattemptsowners'] = 'View owners of other attempts';
$string['quest:viewreports'] = 'View the questournament reports';
$string['questapprovesubmission'] = 'Challenges approved in QUESTOURnament';
$string['questassessments'] = 'Assesments in QUESTOURnament';
$string['questcomments'] = 'Commments in QUESTOURnament';
$string['questgraphYlegend'] = 'Score';
$string['questgraphtitle'] = 'Potential scores';
$string['quests'] = 'QUESTs';
$string['questsubmitanswer'] = 'Answers submitted to QUESTOURnament';
$string['questsubmitsubmission'] = 'Challenges submitted to QUESTOURnament';
$string['recalificationall'] = 'Re-assess all answers';
$string['reevaluate'] = 'Re-assess';
$string['removeelement'] = 'Remove element';
$string['reply'] = 'Answer';
$string['resetchanges'] = 'Reset changes';
$string['resetquestallanswers'] = 'Erase all answers and scores.';
$string['responsetochallenge'] = 'Answer to the challenge';
$string['resume24hours'] = 'Summary of events for challenges added or modified in the QUESTOURnament {$a->name} in the past 24 hours';
$string['resumeindividual'] = 'View Individual Summary.';
$string['resumequest'] = 'Moodle. Activity summary. QUESTOURnament {$a->name}';
$string['resumeteams'] = 'View Summary by Teams';
$string['returnto'] = 'Return to';
$string['rubric'] = 'Rubric';
$string['save'] = 'Save';
$string['savedok'] = 'Saved OK';
$string['savemyassessment'] = 'Save my Assessment';
$string['savemycomment'] = 'Save my Comment';
$string['savemygrading'] = 'Save my Grading';
$string['savemysubmission'] = 'Save my Challenge';
$string['scale10'] = 'Score out of 10';
$string['scale100'] = 'Score out of 100';
$string['scale20'] = 'Score out of 20';
$string['scalecorrect'] = '2 point Correct/Incorrect scale';
$string['scaleexcellent4'] = '4 point Excellent/Very Poor scale';
$string['scaleexcellent5'] = '5 point Excellent/Very Poor scale';
$string['scaleexcellent7'] = '7 point Excellent/Very Poor scale';
$string['scalegood3'] = '3 point Good/Poor scale';
$string['scalepresent'] = '2 point Present/Absent scale';
$string['scaleyes'] = '2 point Yes/No scale';
$string['see'] = 'See';
$string['seeassessment'] = 'See Assesment';
$string['seeassessment_help'] = '<P align="justify">This page shows the assessment of a submitted answer, this way, if the student does not agree with the assessment he can claim its revision to the teacher or to the author of the challenge, being it possible to explain the reason of his disagreement with the assessment.
<P align="justify">Besides the score obtained by the author of the answer, the maximum possile score for that answer, that is, the score of the challenge when the answer for which the complaint is made was submitted, is also shown.</P>
<P align="justify">The teachers and the authors of the challenges will be able to manually modify the score given in order to consider those aspects that may not have been taken into account in the assessment form used for automatic assessment.</P>';
$string['seeassessmentautor'] = 'See assessment of challenge';
$string['seeassessmentautor_help'] = '<P align="justify">This page shows the assessment of an added challenge, this way, if the student does not agree with the assessment he can claim its revision to the teacher, being it possible to explain the reason of his disagreemet with the assessment. Besides the score given to the author of the challenge, the maximum possible score, that is, the score that was reached by the challenge when the first correct answer was submitted, or if the challenge has not been answered correctly yet, the initial score, is also shown.</P>
<P align="justify">The teachers will be able to manually modify the score given in order to consider those aspects that may not have been taken into account in the assessment form used for automatic assessment.</P>';
$string['seevaluate'] = 'See assesment';
$string['select'] = 'Select';
$string['selfassessment'] = 'Self Assessment';
$string['shouldSelectDifficultyLevel'] = 'Please, select a difficulty level';
$string['showanswer'] = 'Show answer';
$string['showanswers'] = 'Show answers';
$string['showanswersteam'] = 'Show team answers';
$string['showanswersuser'] = 'Show individual answers';
$string['showauthoringdetails'] = 'Show authoring details to the students in classifications.';
$string['showauthoringdetails_help'] = '<P align="justify">If this option is selected, the ranking will show the partial data related to the challenges added and assessed by each student and by each team, besides the score obtained with the answers submitted to the different challenges proposed. It must be also taken into account that this can mean that the anonymity of the authors of the challenges is not kept, specially in small groups with a low level of participation.</P>';
$string['showcalification'] = 'Show scores';
$string['showclasifindividual'] = 'Show Individual Classification';
$string['showclasifindividual_help'] = '<P align="justify">This option is selected by default and allows that both the individual ranking and the team raking are shown, the latter one only in case that the option <a href="help.php?component=quest&identifier=allowteams"">Allow Teams</a> is selected.</P>
<P align="justify">If the option Allow Teams is not selected, it will only make sense to choose the default value of this option that shows the individual ranking.</P>';
$string['showdescription'] = 'Show QUESTOURnament description';
$string['showgrades'] = 'Show Grades';
$string['showresultssection'] = 'Information to show to students';
$string['showsubmission'] = 'Show Submission';
$string['showsubmissions'] = 'Show Submissions';
$string['showsubmissionsteam'] = 'Show Team Submissions';
$string['showsubmissionsuser'] = 'Show Individual Submissions';
$string['specimenanswer'] = 'Assessment Form for Answers';
$string['specimenanswer_help'] = '<P align="justify">This page shows the assessment form that is used to assess each of the answers submitted to a challenge of this QUESTOURnament.</P>';
$string['specimenassessmentform'] = 'Example Assessment Form';
$string['specimenassessmentformanswer'] = 'Example Assessment Form for answers';
$string['specimenassessmentformsubmission'] = 'Example Assessment Form for challenges';
$string['specimensubmission'] = 'Assessment Form for Challenges';
$string['specimensubmission_help'] = '<P align="justify">This page shows the assessment form that is used to assess the challenges proposed by students in this QUESTOURnament.</P>';
$string['studentassessments'] = '{$a} Assessments';
$string['studentgrades'] = '{$a} Grades';
$string['studentsubmissions'] = '{$a} Submissions';
$string['studentsubmissionsforassessment'] = '{$a} Student Submissions for Assessment';
$string['subject'] = 'Subject:';
$string['submission'] = 'Challenge';
$string['submissionend'] = 'Closing date of the Challenge';
$string['submissionend_help'] = '<P align="justify">It allows to set the date in which a challenge will be closed. After this date it will not be able to submit any more answers to the challenge. However, the teachers will still be able to assess the author of the challenge attending to both the challenge proposed and the assessments made. Moreover, the authors of the challenges will still be able to assess the answers submitted to them.</P>
<P align="justify">Once a challenge is closed, all the participants will be able to see all the answers submitted, as well as the assessments made and the scores obtained.</P>
<P align="justify">This date may not be subsequent to the <a href="help.php?component=quest&identifier=dateend"">Closing Date</a> of the QUESTOURnament or previous to the <a href="help.php?component=quest&identifier=submissionstart"">Starting Date of the Challenge</a>.</P>';
$string['submissions'] = 'Challenges';
$string['submissionstart'] = 'Starting date of the Challenge';
$string['submissionstart_help'] = '<P align="justify">It allows to set the date in which a challenge will open. This parameter can only be set by a teacher.</P>
<P align="justify">If a challenge is added by a student, its starting date will be the time when it was added, being the teachers able to modify this value when the challenge is approved or modified.</P>
<P align="justify">After this date the students will be able to access the challenge and to submit their answers.</P>
<P align="justify">This date must be previous to the <a href="help.php?component=quest&identifier=submissionend"">Closing Date of the Challenge</a>.</P>';
$string['submitchallenge'] = 'Submit new challenge';
$string['submitchallengeassignment'] = 'Add challenge';
$string['submitchallengeassignment_help'] = '<P>In order to allow the students to submit new challenges permission "mod/quest:addchallenge" should be granted.
	Probably, your plattform may have a role with this permission. Use menu option "Locally assigned roles" or "Permissions" to add the students that can be authors of challenges in this QUESTOURNAMENT.</P>';
$string['submitted'] = 'Challenge Submitted';
$string['submittedanswer'] = 'Answer submitted';
$string['submittedby'] = 'Submitted by';
$string['suggestedgrade'] = 'Suggested Grade';
$string['team'] = 'Team';
$string['team_help'] = '';
$string['teamcalification'] = 'Team score';
$string['teamforquest'] = 'Work Team for QUESTOURnament {$a}';
$string['teamname'] = 'Team Name';
$string['teamporcent'] = 'Percentage of Team Scoring';
$string['teamporcent_help'] = '<P align="justify">This parameter sets the percentage of the score of a team that will be added to the total individual score of each of its members, that is which determines the final score of a student in a QUESTOURnament.</P>
<P align="justify">The goal is to promote team work in a way that it has an impact in the final score and ranking possition of each student.</P>';
$string['teams'] = 'Team Classification';
$string['teams_help'] = '<P align="justify">This page shows the score obtained by each team that belongs to the same group in a QUESTOURnament. A percentage of this score determined by the "<a href="help.php?component=quest&identifier=teamporcent"">Percentage of Team Scoring</a>" parameter of the QUESTOURnament will contribute to the individual score of each member of the team.</P>
  <P>By default, the ranking is ordered according to the total score obtained by each team, although this order can be modified by choosing another ordering parameter and pressing its name.</P>
  <P>It is also possible to access the individual ranking through the option <a href="help.php?component=quest&identifier=global"">View Global Classification</a>.</P>
</div>';
$string['thegradeis'] = 'The grade is';
$string['timeassessment'] = 'Assessed on';
$string['timemaxoflife'] = 'Default time of life for new challenges.';
$string['timemaxquestion'] = 'Maximum Time of Life';
$string['timemaxquestion_help'] = '<P align="justify">This parameter sets the length (in days) of the challenges added to this QUESTOURnament</P>
<P align="justify">A student can not modify the length of a challenge that he adds to the QUESTOURnament. However, teachers will be able to modify the starting and closing dates of each challenge of the QUESTOURnament, both of the ones proposed by them and of the ones proposed by the students.</P>';
$string['tinitial'] = 'Initial time';
$string['tinitial_help'] = '<P align="justify">This parameter sets the length of the period, in days, subsequent to the starting date of a challenge, during which the score will remain unchanged, unless a correct answer is submitted, and assessed, to that challenge, in which case, the score will start to decrease.</P>
<P align="justify">The objective is that the students answer as soon as possible in order to obtain the maximum possible score.</P>';
$string['title'] = 'Title';
$string['today'] = 'Today';
$string['tothechallenge'] = 'to the challenge';
$string['typecalification'] = 'Type of grading';
$string['typecalification_help'] = '<P align="justify">This parameter sets the way in which the score of a challenge will vary. Each challenge proposed will have an initial score set by the parameter <a href="help.php?component=quest&identifier=initialpoints"">Initial Score</a>, a maximum score set by the parameter <a href="help.php?component=quest&identifier=maxcalification"">Highest Score</a> and an <a href="help.php?component=quest&identifier=tinitial"">Initial Time</a> that sets the period, in days, from the date when the challenge opens during which the score of the challenge will not vary unless a correct answer is submitted and assessed. When the initial time is over, or once a correct answer is submitted and assessed, the score of a challenge will start to vary from the initial score in two possible different ways according to the value of this parameter:</P>
<P align="justify">LINEAR: the score varies linearly, increasing till the closing date of the challenge, reaching by that time the maximum score set, or else till a correct answer is submitted and assessed, starting then to decrease till it reaches the zero value at the closing date of the challenge, unless the <a href="help.php?component=quest&identifier=nmaxanswers"">Maximum Number of Right Answers</a> admitted have been received and assessed before closing date.</P>
<P align="justify">EXPONENTIAL: the score varies following the same rules that in the linear case, but with an exponential,instead of linear, variation, reason for which the degree of variation increases with time.</P>';
$string['typegrade'] = 'Get grades from';
$string['typegrade_help'] = '<P align="justify">This parameter sets which is the classification used to calculate the final total score of the students.</P>
<P align="justify">There are two possibilities:</P>
<div align="justify">
  <ul>
    <li><strong>Students</strong>: the score of each student is taken from the individual ranking. However, if the option to work in teams is selected, the score of the team to which the student belongs will contribute to his individual score.</li>
      <li><strong>Teams</strong>: to calculate the scores of each student only the scores of the teams are used. This way, the students that belongs to the same team will be rewareded with the same score. For this possibility to make sense, the option <a href="help.php?component=quest&identifier=allowteams"">Allow Teams</a> must be selected.</li>
  </ul>
</div>';
$string['typeindividual'] = 'Students';
$string['typeofscale'] = 'Type of Scale';
$string['typeteam'] = 'Team';
$string['unknownauthor'] = 'Unknown author';
$string['unkownactionerror'] = 'Fatal error: Unknown action {$a}.';
$string['updatecomment'] = 'Comment updated';
$string['usepassword'] = 'Use Password';
$string['usepassword_help'] = '<P align="justify">This option allows to set an access password to this QUESTOURnament. To protect a QUESTOURnament with a password can be necessary, for example, when that QUESTOURnament is used by several groups of students in a course, and must be opened to each group in a different time slot, in which case, the access password will not allow that a group of students can access the QUESTOURnament once it is opened to another different group of students but not for them yet.</P>';
$string['user'] = 'User';
$string['validateassessment'] = 'Validate Assesments';
$string['validateassessment_help'] = '<P align="justify">If this option is selected, the teacher will have to approve all the assessments made by the students that propose challenges in order to validate the scores given by them to the answers submitted by other students to those challenges.</P>
<P align="justify">The scores of students and ranking will not be modified till the teacher have approved the scores given by the students. The teacher will be able to modify those scores, being the scores given by the teachers the valid ones in case those are different from the ones given by the students that proposed the challenges.</P>
<P align="justify">If this option is not selected, the teacher will not be obliged to approve all the scores given by the students, although he will still be able to do it in the cases he considers it necessary. If the teacher modifies a score given by a student, the new score will be the one that will be part of the final individual score of the student. On the other side, if the teacher does not assess the answer again, the score used will be the one given by the student that proposed the challenge.</P>';
$string['verypoor'] = 'Very Poor';
$string['view'] = 'View';
$string['viewassessment'] = 'View Assessment';
$string['viewassessmentautor'] = 'View Challenge Assessment';
$string['viewclasification'] = 'View Ranking';
$string['viewclasificationglobal'] = 'View Global Clasification';
$string['viewclasificationteams'] = 'View Team Clasification';
$string['warningonamendingelements'] = 'WARNING: There are submitted assessments. <br />Do NOT change the number  of elements, the scale types or the element weights.';
$string['weight'] = 'Weight';
$string['weights'] = 'Weights';
$string['wrongpassword'] = 'Incorrect password for this QUESTOURnament';
$string['yourfeedbackgoeshere'] = 'Your Feedback goes Here';
